// Tên file: assets/js/cart_api.js
// Mục đích: Giao tiếp với backend API

// Sử dụng controller mới (cart_controller.php)
const cartHandlerUrl = 'backend/cart_controller.php'; 

// Hàm gửi yêu cầu AJAX lên PHP handler
function updateCartItem(action, productId, quantity = 0) {
    let body = `action=${action}&product_id=${productId}`;
    if (action === 'update_quantity') {
        body += `&quantity=${quantity}`;
    }

    return fetch(cartHandlerUrl, {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body
    })
    .then(res => {
        // Xử lý lỗi 401/400 (chưa đăng nhập/dữ liệu sai)
        if (res.status === 401 || res.status === 400) {
             // Đảm bảo parse JSON ngay cả khi có lỗi status code
             return res.json().then(err => {
                 Swal.fire('Lỗi', err.message || 'Lỗi hệ thống.', 'error');
                 return { success: false, message: err.message };
             });
        }
        return res.json();
    })
    .catch(error => {
        console.error('Lỗi API/Mạng:', error);
        // Trả về JSON lỗi để renderCart có thể xử lý
        return { success: false, message: 'Lỗi mạng hoặc server không phản hồi.' };
    });
}