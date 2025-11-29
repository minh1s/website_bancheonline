<?php
// Tên file: backend/cart_controller.php

// 1. Nhúng các file cần thiết
// Giả định các file này nằm cùng thư mục backend/
require 'connect.php';      // Đối tượng kết nối MySQLi ($conn)
require 'utils.php';        // Hàm respondWithError
require 'cart_actions.php'; // Hàm handle_cart_action

session_start();
$user_id = $_SESSION['user_id'] ?? null; 
$action = $_POST['action'] ?? $_GET['action'] ?? null;

// Gán header JSON ở đây
header('Content-Type: application/json');

// --- 2. XÁC THỰC USER ---
if (!$user_id) {
    respondWithError(null, 'Vui lòng đăng nhập để quản lý giỏ hàng.', 401);
}

// --- 3. LẤY CART ID HOẶC TẠO MỚI ---
$cart_id = null; 
$stmt_cart = null; 

try {
    // --- Lấy Cart ID hiện tại ---
    $stmt_cart = $conn->prepare("SELECT cart_id FROM carts WHERE user_id = ?");
    if ($stmt_cart === false) throw new Exception("Lỗi chuẩn bị truy vấn Cart ID.");

    $stmt_cart->bind_param("i", $user_id);
    $stmt_cart->execute();
    $result_cart = $stmt_cart->get_result();

    if ($result_cart->num_rows === 0) {
        
        // --- TẠO CART MỚI (Khối code được bảo vệ) ---
        $conn->begin_transaction();
        
        $stmt_insert = $conn->prepare("INSERT INTO carts (user_id) VALUES (?)");
        if ($stmt_insert === false) throw new Exception("Lỗi chuẩn bị tạo Cart mới.");

        $stmt_insert->bind_param("i", $user_id);
        if (!$stmt_insert->execute()) throw new Exception("Lỗi thực thi tạo Cart mới.");

        $cart_id = $conn->insert_id;
        $stmt_insert->close();
        
        $conn->commit(); // Lưu thay đổi
        
    } else {
        // Lấy Cart ID đã tồn tại
        $cart_data = $result_cart->fetch_assoc();
        $cart_id = $cart_data['cart_id'];
    }

} catch (Exception $e) {
    // 🔑 Sửa lỗi: Gọi rollback() trực tiếp. MySQLi sẽ tự xử lý nếu không có transaction.
    $conn->rollback(); 
    
    // Trả về lỗi nghiêm trọng cho Frontend
    respondWithError($conn, 'Lỗi hệ thống khi thiết lập giỏ hàng: ' . $e->getMessage(), 500);

} finally {
    // Đóng statement
    if (isset($stmt_cart) && $stmt_cart instanceof mysqli_stmt) {
         $stmt_cart->close();
    }
}


// --- 4. GỌI ACTION TƯƠNG ỨNG ---
if ($action && $cart_id) {
    // Gọi hàm xử lý logic từ cart_actions.php
    handle_cart_action($conn, $user_id, $cart_id, $action);
} else if (!$action) {
    // Nếu không có action nào được chỉ định (trường hợp get_cart không phải là POST)
    // Trường hợp này đã được xử lý bởi logic get_cart trong cart_actions.php (nếu action không null)
    respondWithError(null, 'Hành động không được chỉ định.', 400);
} else {
    // Lỗi xảy ra nếu $cart_id bị null do lỗi trong khối try...catch ở trên
    respondWithError(null, 'Không thể xác định giỏ hàng của người dùng.', 500);
}
// KHÔNG CÓ THẺ ĐÓNG PHP ?>