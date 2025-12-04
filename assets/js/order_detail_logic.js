
function generateQRCode(amount) {
    const qrCodeContainer = document.getElementById('qrcode');
    
    // Xóa mã QR cũ nếu có
    qrCodeContainer.innerHTML = '';

    // 🔥 THÔNG TIN CẦN THAY ĐỔI 🔥
    const bankId = '970403'; // Ví dụ: Ngân hàng VPBank (Thay bằng ID ngân hàng bạn)
    const accountNumber = '0796727753'; // Số tài khoản nhận tiền của bạn
    const receiverName = 'TRAN NHAT LONG'; // Tên người nhận
    const transferNote = `TTCHEAE${Math.floor(Math.random() * 1000)}`; // Nội dung chuyển khoản động

    const dataForQR = `Dich vu: Thanh toan Che; STK: ${accountNumber}; Tien: ${amount.toFixed(0)} VND; ND: ${transferNote}`;


    // Tạo mã QR bằng thư viện QRCode.js
    new QRCode(qrCodeContainer, {
        text: dataForQR, // Dùng dataForQR hoặc chuỗi VietQR tùy theo yêu cầu
        width: 180,
        height: 180,
        colorDark : "#000000",
        colorLight : "#ffffff",
        correctLevel : QRCode.CorrectLevel.H
    });
}
function handleFinalOrderSubmission(method) {
    const urlParams = new URLSearchParams(window.location.search);
    const orderId = urlParams.get('order_id');
    const totalAmount = urlParams.get('total');
    
    // 🔥 THỰC TẾ: Gọi API để lưu trạng thái đơn hàng cuối cùng
    
    // GỌI API VÀ CHUYỂN HƯỚNG
    Swal.fire({ title: 'Đang gửi Đơn hàng...', didOpen: () => { Swal.showLoading() }, allowOutsideClick: false });

    setTimeout(() => {
        Swal.close();
        Swal.fire({ title: 'Hoàn tất Đơn hàng!', icon: 'success' }).then(() => {
            const redirectURL = `index.php?page=hoantat&order_id=${orderId}&total=${totalAmount}&method=${method}`;
            window.location.href = redirectURL;
        });
    }, 1500);
}

document.addEventListener('DOMContentLoaded', function() {
    
    // 1. Lấy các phần tử cần thiết
    const deliveryBlock = document.getElementById('deliveryBlock');
    const paymentBlock = document.getElementById('paymentBlock');
    const confirmAddressBtn = document.getElementById('confirmAddressBtn');
    const paymentSelection = document.getElementById('payment-selection');
    const finalConfirmBtn = document.getElementById('finalConfirmBtn');
    const paymentDetailsArea = document.getElementById('payment-details-area');
    
    // Lấy các phần tử Modal (Giả định đã tồn tại trong HTML)
    const qrModal = document.getElementById('qrModal'); 
    const modalTotalPriceContainer = document.getElementById('modalTotalPriceContainer'); 
    const paymentCompleteBtn = document.getElementById('paymentCompleteBtn'); // Nút 'Đã Hoàn Thành Chuyển Khoản' trong Modal
    const closeBtn = document.getElementById('closeModalBtn'); // Nút đóng Modal (nếu có)

    let selectedPaymentMethod = null;
    
    // Lấy ID và Tổng tiền từ URL
    const urlParams = new URLSearchParams(window.location.search);
    const orderId = urlParams.get('order_id');
    const totalAmount = parseInt(urlParams.get('total'));
    
    
    // --- A. XỬ LÝ CHỌN PHƯƠNG THỨC THANH TOÁN ---
    paymentSelection.querySelectorAll('.payment-option').forEach(option => {
    option.addEventListener('click', function() {
        // ... (Đặt trạng thái selected) ...
        
        selectedPaymentMethod = this.dataset.method;

        
        if (selectedPaymentMethod === 'qr') {
            // Hiển thị giao diện QR trong paymentDetailsArea (tôi sẽ thay bằng nút mô phỏng)
            
            finalConfirmBtn.textContent = `Hoàn Tất Đơn Hàng (QR)`;
        } else {
            // COD
            finalConfirmBtn.textContent = `Hoàn Tất Đơn Hàng (COD)`;
        }
    });
});

    // --- B. BƯỚC 1: XÁC NHẬN ĐỊA CHỈ (Logic đã tối ưu) ---
    confirmAddressBtn.addEventListener('click', function(e) {
        
        // 1. Lấy và Xác thực dữ liệu
        const name = document.getElementById('name').value.trim();
        const phone = document.getElementById('phone').value.trim();
        const address = document.getElementById('pastedAddress').value.trim();

        if (name === "" || phone === "" || address === "") {
            Swal.fire('Thiếu thông tin', 'Vui lòng nhập đầy đủ Tên, SĐT và Địa chỉ ghim.', 'error');
            return;
        }
        
        // 2. TẠO KHỐI TÓM TẮT ĐỊA CHỈ ĐÃ XÁC NHẬN
        const confirmedSummaryHTML = `
            <div id="addressSummaryBlock" class="address-confirmed-summary address-form-container">
                <h2>✅ Địa Chỉ Đã Xác Nhận</h2>
                <p><strong>Người nhận:</strong> ${name}</p>
                <p><strong>Điện thoại:</strong> ${phone}</p>
                <p><strong>Địa chỉ:</strong> ${address}</p>
                <hr>
                <button type="button" class="btn btn-sm btn-outline-secondary" id="editAddressBtn">Sửa Địa Chỉ</button>
            </div>
        `;
        
        // 3. Ẩn khối nhập liệu và Chèn khối tóm tắt
        deliveryBlock.style.display = 'none';
        deliveryBlock.insertAdjacentHTML('beforebegin', confirmedSummaryHTML); 
        
        // Gắn sự kiện cho nút Sửa Địa Chỉ
        document.getElementById('editAddressBtn').addEventListener('click', function() {
            document.getElementById('addressSummaryBlock').remove();
            
            // Khôi phục hiển thị (SỬA LỖI DISPLAY)
            deliveryBlock.style.display = 'block'; 
            
            paymentBlock.style.display = 'none'; // Ẩn khối thanh toán
            finalConfirmBtn.style.display = 'none'; // Ẩn nút hoàn tất
        });

        // 4. HIỂN THỊ KHỐI THANH TOÁN (Cột 2)
        paymentBlock.style.display = 'block'; 
        finalConfirmBtn.style.display = 'block';
       
        
        Swal.fire('Thành Công!', 'Địa chỉ đã được ghi nhận. Hãy chọn phương thức thanh toán.', 'success');
    });

    // --- C. BƯỚC 2: HOÀN TẤT ĐƠN HÀNG (Final Submit) ---
    finalConfirmBtn.addEventListener('click', function(e) {
        
        if (!selectedPaymentMethod) {
            Swal.fire('Thiếu thông tin', 'Vui lòng chọn Phương thức Thanh toán.', 'warning');
            return;
        }

        if (selectedPaymentMethod === 'cod') {
            handleFinalOrderSubmission('cod'); 
        } else if (selectedPaymentMethod === 'qr') {
            // 🔥 XỬ LÝ LỖI MODAL QR: Kiểm tra xem Modal có tồn tại không
            if (qrModal && modalTotalPriceContainer) {
                modalTotalPriceContainer.textContent = totalAmount.toLocaleString('vi-VN', { maximumFractionDigits: 0 }) + ' ₫';
                 generateQRCode(totalAmount);
                qrModal.style.display = 'block';
            } else {
                 Swal.fire('Lỗi', 'Không tìm thấy Modal QR. Vui lòng kiểm tra lại ID HTML.', 'error'); // Lỗi này đang xuất hiện
            }
        }
    });

    // --- D. XỬ LÝ SỰ KIỆN MODAL QR CODE ---
    
    // 2. Đóng Modal (Nếu có nút đóng riêng)
    if (closeBtn) {
        closeBtn.addEventListener('click', function() { qrModal.style.display = 'none'; });
    }
    
    // Đóng Modal khi click ra ngoài
    window.addEventListener('click', function(event) {
        if (event.target === qrModal) { qrModal.style.display = 'none'; }
    });

    // 3. Hoàn tất Thanh toán trong Modal (Nút 'Đã Hoàn Thành Chuyển Khoản')
    if (paymentCompleteBtn) {
    paymentCompleteBtn.addEventListener('click', function () {
        
        // Lấy thông tin cần thiết cho chuyển hướng
        const urlParams = new URLSearchParams(window.location.search);
        const orderId = urlParams.get('order_id');
        const totalAmount = urlParams.get('total');
        
        // 1. Bắt đầu trạng thái Loading
        Swal.fire({ 
            title: 'Đang hoàn tất Đơn hàng...', 
            text: 'Vui lòng chờ xác nhận từ hệ thống.',
            didOpen: () => { Swal.showLoading() }, 
            allowOutsideClick: false 
        });

       
        updateCartItem('checkout_complete', 0).then(data => {
            
            // Đóng loading
            Swal.close(); 
            
            if (data.success) {
                // 2. Thành công: Chuyển hướng đến trang hoàn tất
                Swal.fire(
                    'Hoàn tất!', 
                    'Đơn hàng đã được xác nhận. Cảm ơn bạn đã mua hàng!', 
                    'success'
                ).then(() => {
                    // Chuyển hướng đến trang hoàn tất với các tham số đơn hàng
                    const redirectURL = `index.php?page=hoantat&order_id=${orderId}&total=${totalAmount}&method=qr`;
                    window.location.href = redirectURL;
                });
            } else {
                // Xử lý lỗi nếu API thất bại
                Swal.fire('Lỗi', data.message || 'Có lỗi xảy ra khi hoàn tất đơn hàng.', 'error');
                // Đóng Modal khi gặp lỗi
                qrModal.style.display = 'none'; 
            }
        }).catch(error => {
            Swal.close();
            Swal.fire('Lỗi', 'Không thể kết nối đến máy chủ. Vui lòng thử lại.', 'error');
            qrModal.style.display = 'none';
        });

        // Lưu ý: Đã loại bỏ dòng qrModal.style.display = 'none'; không cần thiết
        // vì việc gọi API và chuyển hướng sẽ tự động đóng Modal.
    });
}
});