<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!--boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!--css-->
    <link href="assets/css/main.css" rel="stylesheet">
</head>

<body>

    <!-- NAVBAR -->
    <div class="navbar-fixed">
        <!-- Nhóm bên trái -->
        <ul class="nav-left">
            <li class="nav-item">
                <a href="index.html">
                    <img src="./assets/images/logo2.png" alt="Trang chủ" class="nav-logo">
                </a>
            </li>
            <li class="nav-item"><a href="#gioithieu">ABOUT US</a></li>
            <li class="nav-item"><a href="login.html">ĐĂNG NHẬP</a></li>
            <li class="nav-item"><a href="#menu">MENU</a></li>
        </ul>

        <!-- Nhóm bên phải -->
        <ul class="nav-right">

            <li class="nav-item"><a href="#address">HỆ THỐNG CỬA HÀNG</a></li>
            <li class="nav-item"><a href="giohang.html">GIỎ HÀNG</a></li>
            <li class="nav-item"><a href="#hotline">LIÊN HỆ</a></li>
        </ul>
    </div>

    <!--ẢNH NỀN AE QUÁN-->
    <div class="bg-1">
        <img src="./assets/images/aecaykhe.png" alt="Banner">
    </div>

    <!--GIỚI THIỆU VỀ QUÁN-->
    <section id="gioithieu" class="about-section container my-5 py-5">
        <div class="row align-items-center g-5">
            <!-- Ảnh giới thiệu -->
            <div class="col-md-6 text-center">
                <div class="image-stack">
                    <img src="./assets/images/gioithieu1.png" class="size-img" alt="Chè 1">
                    <img src="./assets/images/gioithieu2.png" class="size-img custom-img-2" alt="Chè 2">
                </div>
            </div>

            <!-- Nội dung giới thiệu -->
            <div class="col-md-6 text-center text-md-start">
                <img src="./assets/images/logo-lacay.png" class="custom-img-3" alt="Lá cây logo">
                <h4 class="text-edit">Chào mừng bạn đến với</h4>
                <h1 class="about-title">Chè Dừa Thái Lan!</h1>
                <p class="text-edit-2">
                    Nằm trên con phố nhỏ tấp nập, Chè Dừa Thái Lan thu hút thực khách bởi hương vị thơm ngon, thanh mát của
                    những ly chè dừa trứ danh. Mỗi ly chè là sự kết hợp tinh tế giữa nguyên liệu tươi ngon, công thức truyền thống
                    và niềm đam mê của người nấu.
                </p>
                <a href="#menu" class="btn-about">Khám phá menu</a>
            </div>
        </div>
    </section>


    <!--SẢN PHẨM BÁN CHẠY-->
    <div id="menu" class="container text-center">
        <h3 class="text-center my-4">NHỮNG MÓN BÁN CHẠY NHẤT 2025</h3>

        <div class="row">
            <div class="col">
                <div class="product-card">

                    <img src="./assets/images/caramen-hoa-qua.png" alt="1" class="img-sanpham">
                    <h4>Caramen Hoa Quả</h4>
                    <p>Sữa chua</p>
                    <p class="price">25.000 ₫</p>
                    <div class="overlay">
                        <p class="detail">Caramen mềm mịn kết hợp hoa quả tươi mát, ngọt thanh.</p>
                        <button class="add-to-cart"
                            onclick="addToCart('Caramen Hoa Quả', '25.000 ', './assets/images/caramen-hoa-qua.png')">THÊM
                            VÀO GIỎ</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="product-card">
                    <img src="./assets/images/dua-dam-thai-sau-rieng.png" alt="2" class="img-sanpham">
                    <h4>Chè Dừa Dầm Thái Có Sầu</h4>
                    <p>Chè Thái</p>
                    <p class="price">30.000 ₫</p>
                    <div class="overlay">
                        <p class="detail">Chè Thái với topping dừa dầm, thơm béo sầu riêng đặc trưng.</p>
                        <button class="add-to-cart"
                            onclick="addToCart('Chè Dừa dầm Thái Có Sầu', '30.000 ', './assets/images/dua-dam-thai-sau-rieng.png')">THÊM
                            VÀO GIỎ</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="product-card">
                    <img src="./assets/images/dua-dam-thai.png" alt="3" class="img-sanpham">
                    <h4>Chè Dừa Dầm Thái</h4>
                    <p>Chè Thái</p>
                    <p class="price">25.000 ₫</p>
                    <div class="overlay">
                        <p class="detail">Vị chè Thái mát lạnh, béo nhẹ với thạch dừa dầm giòn dai.</p>
                        <button class="add-to-cart"
                            onclick="addToCart('Chè Dừa Dầm Thái', '25.000 ', './assets/images/dua-dam-thai.png')">THÊM
                            VÀO GIỎ</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <h2>Hệ thống cửa hàng</h2>
        
    </div>

    <div id="address" class="container-fluid">
        <div class="row">
            <div class="col-6">
                <img src="./assets/images/address.png" class="img-address" alt="w">
            </div>
            <div class="col-6">
                <iframe style="margin-top: 50px;"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d300.28298106360296!2d108.25472947393797!3d15.977605386328092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1svi!2s!4v1749979492829!5m2!1svi!2s"
                    width="620" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>

    <div id="hotline" class="mb-2 bg-black text-white">
        <footer class="footer text-center">
            <div class="container">
                <div class="row custom-footer-spacing">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <h5>Liên hệ</h5>
                        <p><i class="fas fa-map-marker-alt me-2"></i>Ngũ Hành Sơn, Đà Nẵng</p>
                        <p><i class="fas fa-phone me-2"></i>0813832359</p>
                        <p class="d-flex align-items-center">
                            <i class="fas fa-envelope me-2"></i>
                            <a href="mailto:wheelofvolunteering@banhxetinnguyen.org"
                                style="color: rgb(176, 186, 36); text-decoration: none;">
                                AEcaykhe8386@vku.udn.vn
                            </a>
                        </p>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <h5>Mạng xã hội</h5>
                        <a href="https://www.facebook.com/minhbiker2006" class="text-white me-3"><i
                                class="fab fa-facebook fa-2x"></i></a>
                        <a href="https://www.facebook.com/minhbiker2006" class="text-white me-3"><i
                                class="fab fa-instagram fa-2x"></i></a>
                        <a href="mailto:minhnn.24itb@vku.udn.vn" class="text-white me-3"><i
                                class="fa fa-envelope  fa-2x"></i></a>

                    </div>
                    <div class="col-md-4">
                        <h5>Tổ chức</h5>
                        <ul class="list-unstyled">
                            <li><a href="about.html">Về chúng tôi</a></li>
                            <li><a href="project.html">Dự án</a></li>
                            <li><a href="guide.html">Hướng dẫn</a></li>
                            <li><a href="privacy.html">Chính sách bảo mật</a></li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="bottom-bar">
                &copy; 2025 Anh Em Cây Khế. Mọi quyền được bảo lưu.
            </div>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>