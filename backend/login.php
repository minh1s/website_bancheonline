<?php
session_start(); // Bắt buộc phải có để dùng Session
require 'connect.php'; // Gọi file kết nối database (Đảm bảo tên file là connect.php)

// Kiểm tra xem nút đăng nhập đã được bấm chưa
if (isset($_POST['btn-login'])) {
    $username_input = $_POST['username'];
    $password_input = $_POST['password'];

    // 1. Kiểm tra rỗng
    if (empty($username_input) || empty($password_input)) {
        echo "<script>alert('Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu!'); window.history.back();</script>";
        exit;
    }

    // 2. Tìm user trong database
    // LƯU Ý: Tên bảng là user, tên cột là USERNAME và PASSWORD
    $sql = "SELECT USERNAME, PASSWORD, FULLNAME FROM user WHERE USERNAME = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username_input);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        // 3. Kiểm tra mật khẩu mã hóa
        // Dùng password_verify để so sánh mật khẩu nhập vào với mật khẩu đã mã hóa trong DB
        if (password_verify($password_input, $row['PASSWORD'])) {
            // --- ĐĂNG NHẬP THÀNH CÔNG ---
            
            // Lưu thông tin vào session
            $_SESSION['username'] = $row['USERNAME'];
            $_SESSION['fullname'] = $row['FULLNAME']; // Lưu tên đầy đủ để hiển thị trên Navbar

            // Chuyển hướng về trang chủ (Dùng ../ để đi ra khỏi thư mục backend/)
            header("Location: ../index.php"); 
            exit;
        } else {
            // Mật khẩu sai
            echo "<script>alert('Mật khẩu không chính xác!'); window.history.back();</script>";
        }
    } else {
        // Tên đăng nhập không tồn tại
        echo "<script>alert('Tên đăng nhập không tồn tại!'); window.history.back();</script>";
    }

    $stmt->close();
    $conn->close();
} else {
    // Nếu truy cập trực tiếp file này
    header("Location: ../index.php");
    exit;
}
?>