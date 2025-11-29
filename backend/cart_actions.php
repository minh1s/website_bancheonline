<?php
// Tên file: backend/cart_actions.php
// File này giả định $conn, $user_id, $cart_id đã được định nghĩa và respondWithError đã được include.

function handle_cart_action($conn, $user_id, $cart_id, $action) {
    // Kích hoạt Strict Reporting để try...catch bắt được lỗi SQL (quan trọng)
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    switch ($action) {
        
        // --- LẤY DỮ LIỆU GIỎ HÀNG ---
        case 'get_cart':
            $sql = "
               SELECT ci.quantity, p.product_id, p.name, p.price 
                -- 🔑 FIX: CHỈ LẤY TÊN SẢN PHẨM (p.name) từ SQL
                FROM cart_items ci
                JOIN products p ON ci.product_id = p.product_id
                WHERE ci.cart_id = ?
            ";
            $stmt = $conn->prepare($sql);
            if ($stmt === false) respondWithError($conn, 'Lỗi chuẩn bị lấy giỏ hàng.');
            
            $stmt->bind_param("i", $cart_id);
            $stmt->execute();
            $result = $stmt->get_result();
            $items = $result->fetch_all(MYSQLI_ASSOC);
            $stmt->close();

            
            echo json_encode(['success' => true, 'items' => $items]);
            break;
            
        // --- THÊM SẢN PHẨM VÀO GIỎ ---
        case 'add_to_cart':
            $product_id = $_POST['product_id'] ?? null;
            $quantity = $_POST['quantity'] ?? 1;

            if (!$product_id || $quantity < 1) { respondWithError(null, 'Dữ liệu không hợp lệ.'); }
            
            // 🔑 ÉP KIỂU SANG SỐ NGUYÊN (Khắc phục lỗi string/int từ JS)
            $product_id = (int) $product_id; 
            $quantity = (int) $quantity;
            
            $conn->begin_transaction();
            try {
                // 1. Kiểm tra sản phẩm đã có trong giỏ chưa
                $stmt_check = $conn->prepare("SELECT cart_item_id, quantity FROM cart_items WHERE cart_id = ? AND product_id = ?");
                if ($stmt_check === false) throw new Exception("Lỗi chuẩn bị kiểm tra item.");
                
                $stmt_check->bind_param("ii", $cart_id, $product_id);
                $stmt_check->execute();
                $existing_item = $stmt_check->get_result()->fetch_assoc();
                $stmt_check->close();

                if ($existing_item) {
                    // 2a. Nếu đã có: Cập nhật số lượng
                    $new_quantity = $existing_item['quantity'] + $quantity;
                    $stmt_update = $conn->prepare("UPDATE cart_items SET quantity = ? WHERE cart_item_id = ?");
                    if ($stmt_update === false) throw new Exception("Lỗi chuẩn bị update item.");
                    
                    $stmt_update->bind_param("ii", $new_quantity, $existing_item['cart_item_id']);
                    if (!$stmt_update->execute()) throw new Exception("Lỗi thực thi update item.");
                    $stmt_update->close();
                } else {
                    // 2b. Nếu chưa có: Thêm mới
                    $stmt_insert = $conn->prepare("INSERT INTO cart_items (cart_id, product_id, quantity) VALUES (?, ?, ?)");
                    if ($stmt_insert === false) throw new Exception("Lỗi chuẩn bị insert item.");
                    
                    $stmt_insert->bind_param("iii", $cart_id, $product_id, $quantity);
                    if (!$stmt_insert->execute()) throw new Exception("Lỗi thực thi insert item.");
                    $stmt_insert->close();
                }
                
                $conn->commit();
                echo json_encode(['success' => true, 'message' => 'Đã thêm sản phẩm vào giỏ hàng thành công.']);

            } catch (Exception $e) {
                $conn->rollback();
                respondWithError($conn, 'Lỗi xử lý giỏ hàng: ' . $e->getMessage());
            }
            break;

        // --- CẬP NHẬT SỐ LƯỢNG ---
        case 'update_quantity':
            $product_id = $_POST['product_id'] ?? null;
            $new_quantity = $_POST['quantity'] ?? null;

            if (!$product_id || $new_quantity === null || $new_quantity < 1) { respondWithError(null, 'Dữ liệu không hợp lệ.'); }

            $new_quantity = (int) $new_quantity;
            $product_id = (int) $product_id;

            $conn->begin_transaction();
            try {
                $sql = "
                    UPDATE cart_items ci
                    SET ci.quantity = ? 
                    WHERE ci.cart_id = ? AND ci.product_id = ?
                ";
                $stmt_update = $conn->prepare($sql);
                if ($stmt_update === false) throw new Exception("Lỗi chuẩn bị update quantity.");

                // Cần đảm bảo thứ tự bind_param: quantity, cart_id, product_id
                $stmt_update->bind_param("iii", $new_quantity, $cart_id, $product_id); 
                if (!$stmt_update->execute()) throw new Exception("Lỗi thực thi update quantity.");
                $stmt_update->close();

                $conn->commit();
                echo json_encode(['success' => true, 'message' => 'Cập nhật số lượng thành công.']);
            } catch (Exception $e) {
                $conn->rollback();
                respondWithError($conn, 'Lỗi cập nhật số lượng: ' . $e->getMessage());
            }
            break;

        // --- XÓA SẢN PHẨM ---
        case 'remove_item':
            $product_id = $_POST['product_id'] ?? null;
            
            if (!$product_id) { respondWithError(null, 'Thiếu ID sản phẩm.'); }

            $product_id = (int) $product_id;
            
            $conn->begin_transaction();
            try {
                $sql = "
                    DELETE FROM cart_items
                    WHERE cart_id = ? AND product_id = ?
                ";
                $stmt_delete = $conn->prepare($sql);
                if ($stmt_delete === false) throw new Exception("Lỗi chuẩn bị delete item.");

                $stmt_delete->bind_param("ii", $cart_id, $product_id);
                if (!$stmt_delete->execute()) throw new Exception("Lỗi thực thi delete item.");
                $stmt_delete->close();

                $conn->commit();
                echo json_encode(['success' => true, 'message' => 'Xóa sản phẩm thành công.']);
            } catch (Exception $e) {
                $conn->rollback();
                respondWithError($conn, 'Lỗi xóa sản phẩm: ' . $e->getMessage());
            }
            break;
            
        // --- HOÀN TẤT THANH TOÁN (Xóa toàn bộ giỏ hàng) ---
        case 'checkout_complete':
            $conn->begin_transaction();
            try {
                // Xóa tất cả items trong giỏ hàng hiện tại dựa trên cart_id
                $stmt_delete = $conn->prepare("DELETE FROM cart_items WHERE cart_id = ?");
                if ($stmt_delete === false) throw new Exception("Lỗi chuẩn bị xóa giỏ hàng.");
                
                $stmt_delete->bind_param("i", $cart_id);
                if (!$stmt_delete->execute()) throw new Exception("Lỗi thực thi xóa giỏ hàng.");
                $stmt_delete->close();

                $conn->commit();
                echo json_encode(['success' => true, 'message' => 'Thanh toán hoàn tất, giỏ hàng đã được xóa.']);
            } catch (Exception $e) {
                $conn->rollback();
                respondWithError($conn, 'Lỗi hoàn tất thanh toán: ' . $e->getMessage());
            }
            break;
            
        default:
            // Lỗi 400 được xử lý ở Controller
            break;
    }
}
?>