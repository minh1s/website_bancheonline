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

    <!----------------------------- NAVBAR --------------------------->
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
            <li class="nav-item"><a href="#hotline" class="contact"></a></li>
        </ul>
    </div>


    <!-----------------------ẢNH NỀN AE QUÁN----------------------------->
    <div class="bg-1">
        <img src="./assets/images/aecaykhe.png" alt="Banner">
    </div>


    <!----------------------------GIỚI THIỆU VỀ QUÁN------------------------>
    <section id="gioithieu" class="about-section container my-5 py-5">
        <div class="row align-items-center g-5">
            <div class="about-slideshow">
                <div class="slideshow">
                    <img src="./assets/images/gioithieu1.png" alt="Chè Liên 1">
                    <img src="./assets/images/gioithieu2.png" alt="Chè Liên 2">
                    <img src="./assets/images/gioithieu3.jpg" alt="Chè Liên 3">
                    <img src="./assets/images/gioithieu4.jpg" alt="Chè Liên 4">
                    <img src="./assets/images/gioithieu5.jpg" alt="Chè Liên 5">
                </div>
            </div>

            <div class="col-md-6 text-center text-md-start">
                <img src="./assets/images/logo-lacay.png" class="custom-img-3" alt="Lá cây logo">
                <h4 class="text-edit">Chào mừng bạn đến với</h4>
                <h1 class="about-title">Chè Anh Em Cây Khế!</h1>
                <p class="text-edit-2">
                    Nằm trên con phố nhỏ rộn ràng, Chè Anh Em Cây Khế là nơi gắn kết tình thân qua những ly chè ngọt lành.
                    Mỗi ly chè được tạo nên từ sự đồng lòng, niềm đam mê và hương vị chan chứa nghĩa tình của những người anh em cùng chí hướng.
                </p>
                <div class="text-center">
                    <a href="#menu" class="btn-about">Khám phá menu</a>
                </div>
            </div>
        </div>
    </section>

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





    <!---------------------SẢN PHẨM BÁN CHẠY------------------------->
    <div id="menu" class="container text-center">
        <h1 class="text-center my-4">Những món chè bán chạy nhất 2025</h1>
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


    <!---------------------CHI NHÁNH CỬA HÀNG------------------------->
    <div>
        <h1 class="text-center my-4">Hệ thống cửa hàng</h1>
        <ul>
            <li>
                <div class="diachi1"></div>
                <div>
                    <h3>CN ĐIỆN BIÊN PHỦ</h3>
                    <h4>320 Điện Biên Phủ, Đà Nẵng</h4>
                    <a target="_blank" href="https://www.google.com/maps/place/Ch%C3%A8+Li%C3%AAn+%C4%90%C3%A0+N%E1%BA%B5ng+-+Ch%C3%A8+S%E1%BA%A7u+Li%C3%AAn/@16.065898,108.193389,3a,75y,90t/data=!3m8!1e2!3m6!1sAF1QipN7BDxTZPuur9YtmSbYtX7sog-W1O77NbLrWff0!2e10!3e12!6shttps:%2F%2Flh5.googleusercontent.com%2Fp%2FAF1QipN7BDxTZPuur9YtmSbYtX7sog-W1O77NbLrWff0%3Dw114-h86-k-no!7i1125!8i844!4m5!3m4!1s0x314219ab29c7e3fd:0xcd6b78582383d42b!8m2!3d16.0660327!4d108.1933728"><span style="box-sizing:border-box;display:inline-block;overflow:hidden;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;position:relative;max-width:100%"><span style="box-sizing:border-box;display:block;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;max-width:100%"><img style="display:block;max-width:100%;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0" alt="" aria-hidden="true" src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2725%27%20height=%2724%27/%3e"></span><img alt="loading" src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Flocation.79ce22a9.png&amp;w=64&amp;q=75" decoding="async" data-nimg="intrinsic" style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%" srcset="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Flocation.79ce22a9.png&amp;w=32&amp;q=75 1x, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Flocation.79ce22a9.png&amp;w=64&amp;q=75 2x"><noscript><img alt="loading" srcSet="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Flocation.79ce22a9.png&amp;w=32&amp;q=75 1x, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Flocation.79ce22a9.png&amp;w=64&amp;q=75 2x" src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Flocation.79ce22a9.png&amp;w=64&amp;q=75" decoding="async" data-nimg="intrinsic" style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%" loading="lazy" /></noscript></span><span>XEM BẢN ĐỒ</span></a>
                </div>
            </li>
            <li>
                <div class="diachi2"></div>
                <h3>CN HẢI PHÒNG</h3>
                <h4>175 Hải Phòng, Đà Nẵng</h4>
                <a target="_blank" href="https://www.google.com/maps/place/Ch%C3%A8+Li%C3%AAn+-+CN+H%E1%BA%A3i+Ph%C3%B2ng/@16.0715506,108.2129503,21z/data=!4m5!3m4!1s0x31421849eac51b25:0x2664c2573bd8d5c6!8m2!3d16.0715235!4d108.2127363"><span style="box-sizing:border-box;display:inline-block;overflow:hidden;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;position:relative;max-width:100%"><span style="box-sizing:border-box;display:block;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;max-width:100%"><img style="display:block;max-width:100%;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0" alt="" aria-hidden="true" src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2725%27%20height=%2724%27/%3e"></span><img alt="loading" src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Flocation.79ce22a9.png&amp;w=64&amp;q=75" decoding="async" data-nimg="intrinsic" style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%" srcset="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Flocation.79ce22a9.png&amp;w=32&amp;q=75 1x, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Flocation.79ce22a9.png&amp;w=64&amp;q=75 2x"><noscript><img alt="loading" srcSet="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Flocation.79ce22a9.png&amp;w=32&amp;q=75 1x, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Flocation.79ce22a9.png&amp;w=64&amp;q=75 2x" src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Flocation.79ce22a9.png&amp;w=64&amp;q=75" decoding="async" data-nimg="intrinsic" style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%" loading="lazy" /></noscript></span><span>XEM BẢN ĐỒ</span></a>
            </li>

            <li>
                <div class="diachi3"></div>
                <h3>CN HOÀNG DIỆU</h3>
                <h4>189 Hoàng Diệu, Đà Nẵng</h4>
                <a target="_blank" href="https://www.google.com/maps/place/Ch%C3%A8+Li%C3%AAn+-+CN+L%C3%AA+Thanh+Ngh%E1%BB%8B/@16.042064,108.2174032,15z/data=!4m2!3m1!1s0x0:0x9a5a98c58ffa6b08?sa=X&amp;ved=2ahUKEwjLppiUp6r6AhVkWHwKHblBCEMQ_BJ6BAhiEAU"><span style="box-sizing:border-box;display:inline-block;overflow:hidden;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;position:relative;max-width:100%"><span style="box-sizing:border-box;display:block;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;max-width:100%"><img style="display:block;max-width:100%;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0" alt="" aria-hidden="true" src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2725%27%20height=%2724%27/%3e"></span><img alt="loading" src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Flocation.79ce22a9.png&amp;w=64&amp;q=75" decoding="async" data-nimg="intrinsic" style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%" srcset="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Flocation.79ce22a9.png&amp;w=32&amp;q=75 1x, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Flocation.79ce22a9.png&amp;w=64&amp;q=75 2x"><noscript><img alt="loading" srcSet="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Flocation.79ce22a9.png&amp;w=32&amp;q=75 1x, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Flocation.79ce22a9.png&amp;w=64&amp;q=75 2x" src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Flocation.79ce22a9.png&amp;w=64&amp;q=75" decoding="async" data-nimg="intrinsic" style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%" loading="lazy" /></noscript></span><span>XEM BẢN ĐỒ</span></a>
            </li>
        </ul>
    </div>


    <!--------------------------------FOOTER------------------------------>
    <footer class="footer">
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>