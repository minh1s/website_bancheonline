<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-----------------------------------boostrap--------------------------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">



    <!---------------------------css------------------------------->
    <link href="assets/css/main.css?v=<?php echo time(); ?>" rel="stylesheet">



    <!---------------------css cho form login, register-------------------->
    <link rel="stylesheet" href="assets/css/login.css">

    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">



</head>

<body>

    <!----------------------------- NAVBAR --------------------------->
    <div class="navbar-fixed">
        <!-- Nhóm bên trái -->
        <ul class="nav-left">
            <li class="nav-item">
                <a href="index.php?page=home">
                    <img src="./assets/images/logo2.png" alt="Trang chủ" class="nav-logo">
                </a>
            </li>
            <li class="nav-item"><a href="index.php?page=about_us">ABOUT US</a></li>
            <li class="nav-item"><a href="index.php?page=dangnhap">ĐĂNG NHẬP</a></li>
            <li class="nav-item"><a href="index.php?page=menu">MENU</a></li>
        </ul>

        <!-- Nhóm bên phải -->
        <ul class="nav-right">
            <li class="nav-item"><a href="index.php?page=hethongcuahang">HỆ THỐNG CỬA HÀNG</a></li>
            <li class="nav-item"><a href="index.php?page=giohang">GIỎ HÀNG</a></li>
            <li class="nav-item"><a href="index.php?page=lienhe" class="contact"></a></li>
        </ul>
    </div>


    <!-----------------------------MENU QUÁN-------------------------------------->
    <?php
    if (isset($_GET['page'])) {
        $page = $_GET['page'];

        if ($page == 'home') {
            include 'pages/home.php';
        } elseif ($page == 'menu') {
            include 'pages/menu.php';
        } elseif ($page == 'hethongcuahang') {
            include 'pages/hethongcuahang.php';
        } elseif ($page == 'dangnhap') {
            include 'pages/login_form.php';
        } else {
            include 'pages/home.php';
        }
    } else {
        include 'pages/home.php';
    }
    ?>


    <!--------------------------------FOOTER------------------------------>
    <footer class="footer mt-4">
        <div class="footer-top">
            <div class="footer-left">
                <img src="./assets/images/logo2.png" alt="Chè Liên" class="footer-logo">
                <p class="footer-thank">Cảm ơn bạn đã đến với<br><strong>Chè Anh Em Cây Khế</strong></p>
            </div>

            <div class="footer-right">
                <p class="footer-contact-title">Liên hệ với chúng tôi</p>
                <div class="footer-socials">
                    <a href="#" aria-label="Facebook">
                        <img src="./assets/images/facebook.png" alt="Facebook">
                    </a>
                    <a href="#" aria-label="Instagram">
                        <img src="./assets/images/instagram.png" alt="Instagram" class="ig-small">
                    </a>
                </div>
                <button class="login-btn">ĐĂNG NHẬP</button>
            </div>
        </div>

        <div class="footer-bottom">
            <nav class="footer-nav">
                <a href="#">VỀ CHÚNG TÔI</a>
                <a href="#">MENU</a>
                <a href="#">CỬA HÀNG</a>
                <a href="#">TIN TỨC</a>
                <a href="#">LIÊN HỆ VỚI CHÚNG TÔI!</a>
            </nav>
            <p class="footer-copy">
                Copyright © 2025 Chè Anh Em Cây Khế | Được phát triển bởi
                <a href="#">Team4AE.vn</a>
            </p>
        </div>
    </footer>

    <!--------------SCRIPT TẠO HIỆU ỨNG CHUYỂN ẢNH NHẸ-------------------->
    <script>
        const slides = document.querySelectorAll('.slideshow img');
        let index = 0;

        function updateSlides() {
            slides.forEach(img => img.classList.remove('active', 'prev', 'next'));

            const prev = (index - 1 + slides.length) % slides.length;
            const next = (index + 1) % slides.length;

            slides[index].classList.add('active');
            slides[prev].classList.add('prev');
            slides[next].classList.add('next');
        }

        updateSlides();

        setInterval(() => {
            index = (index + 1) % slides.length;
            updateSlides();
        }, 3000);
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>