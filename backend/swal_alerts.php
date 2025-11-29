<?php
// Tên file: backend/swal_alerts.php
// File này chỉ nên được include ở cuối <body> của index.php

// Chuẩn bị message và cờ hiệu
$swal_message = isset($_SESSION['swal_message']) ? $_SESSION['swal_message'] : '';
$is_login_success = isset($_SESSION['show_login_success']) && $_SESSION['show_login_success'] === true;
$is_login_error = isset($_SESSION['show_login_error']) && $_SESSION['show_login_error'] === true;
$is_register_success = isset($_SESSION['show_register_success']) && $_SESSION['show_register_success'] === true;
$is_register_error = isset($_SESSION['show_register_error']) && $_SESSION['show_register_error'] === true;

// Xóa message ngay lập tức sau khi lấy ra, tránh hiển thị lại
unset($_SESSION['swal_message']);
unset($_SESSION['show_login_success']);
unset($_SESSION['show_login_error']);
unset($_SESSION['show_register_success']);
unset($_SESSION['show_register_error']);

// Kiểm tra nếu có bất kỳ thông báo nào để hiển thị
if ($is_login_success || $is_login_error || $is_register_success || $is_register_error): 
?>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const message = '<?php echo htmlspecialchars($swal_message); ?>';
        
        <?php if ($is_login_success): ?>
            Swal.fire({
                title: 'Đăng nhập Thành Công!',
                text: message,
                icon: 'success',
                confirmButtonText: 'OK',
                confirmButtonColor: '#3085d6',
                timerProgressBar: true
            });
        <?php elseif ($is_login_error): ?>
            Swal.fire({
                title: 'Đăng nhập Thất Bại!',
                text: message,
                icon: 'error',
                confirmButtonText: 'Thử lại',
                confirmButtonColor: '#d33'
            });
        <?php elseif ($is_register_success): ?>
            Swal.fire({
                title: 'Đăng Ký Thành Công!',
                text: message,
                icon: 'success',
                confirmButtonText: 'Đăng nhập ngay', 
                confirmButtonColor: '#28a745'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = 'index.php?page=dangnhap'; 
                }
            });
        <?php elseif ($is_register_error): ?>
            Swal.fire({
                title: 'Đăng Ký Thất Bại!',
                text: message,
                icon: 'error',
                confirmButtonText: 'Thử lại',
                confirmButtonColor: '#d33'
            });
        <?php endif; ?>
    });
    </script>
<?php endif; ?>