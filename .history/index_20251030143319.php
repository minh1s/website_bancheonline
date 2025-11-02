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
    <link href="assets/css/main.css?v=<?php echo time(); ?>" rel="stylesheet">



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


    <!---------------------SẢN PHẨM BÁN CHẠY------------------------->
    <div id="menu" class="container text-center">
        <h1 class="text-center khoangcach">Những món chè bán chạy nhất 2025</h1>
        <div class="row">
            <div class="col">
                <div class="product-card">
                    <img src="./assets/images/menu/caramen-hoa-qua.png" alt="1" class="img-sanpham">
                    <strong>Caramen Hoa Quả</strong>
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
                    <img src="./assets/images/menu/dua-dam-thai-sau-rieng.png" alt="2" class="img-sanpham">
                    <strong>Chè Dừa Dầm Thái Có Sầu</strong>
                    <p>Chè thái</p>
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
                    <img src="./assets/images/menu/sua-chua-hoa-qua.png" alt="3" class="img-sanpham">
                    <strong>Sữa Chua Hoa Quả</strong>
                    <p>Sữa chua</p>
                    <p class="price">25.000 ₫</p>
                    <div class="overlay">
                        <p class="detail">Sữa chua mát lạnh, trái cây tươi ngon, vị chua ngọt hài hòa.</p>
                        <button class="add-to-cart"
                            onclick="addToCart('Chè Dừa Dầm Thái', '25.000 ', './assets/images/dua-dam-thai.png')">THÊM
                            VÀO GIỎ</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-----------------------------MENU QUÁN-------------------------------------->
    <div id="menu" class="container text-center">
        <div class="row mt-4">
            <div class="col">
                <div class="product-card">
                    <img src="./assets/images/menu/che-thai-buoi.png" alt="1" class="img-sanpham">
                    <strong>Chè Thái Bưởi</strong>
                    <p>Chè Thái</p>
                    <p class="price">28.000 ₫</p>
                    <div class="overlay">
                        <p class="detail">Vị bưởi thơm nhẹ, giòn dai, hòa quyện cùng nước cốt dừa béo ngậy.</p>
                        <button class="add-to-cart"
                            onclick="addToCart('Chè Thái Bưởi', '28.000 ', './assets/images/menu/che-thai-buoi.png')">THÊM
                            VÀO GIỎ</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="product-card">
                    <img src="./assets/images/menu/che-thai-caramen.png" alt="2" class="img-sanpham">
                    <strong>Chè Thái Caramen</strong>
                    <p>Chè Thái</p>
                    <p class="price">32.000 ₫</p>
                    <div class="overlay">
                        <p class="detail">Caramen thơm béo kết hợp cùng vị chè Thái ngọt dịu hấp dẫn.</p>
                        <button class="add-to-cart"
                            onclick="addToCart('Chè Thái Caramen', '32.000 ', './assets/images/menu/che-thai-caramen.png')">THÊM
                            VÀO GIỎ</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="product-card">
                    <img src="./assets/images/menu/che-thai-dua.png" alt="3" class="img-sanpham">
                    <strong>Chè Thái Dừa</strong>
                    <p>Chè Thái</p>
                    <p class="price">30.000 ₫</p>
                    <div class="overlay">
                        <p class="detail">Chè Thái với cơm dừa tươi, thạch giòn và nước cốt dừa thơm béo.</p>
                        <button class="add-to-cart"
                            onclick="addToCart('Chè Thái Dừa', '30.000 ', './assets/images/menu/che-thai-dua.png')">THÊM
                            VÀO GIỎ</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="menu" class="container text-center">
        <div class="row mt-4">
            <div class="col">
                <div class="product-card">
                    <img src="./assets/images/menu/che-thai-hoa-qua.png" alt="1" class="img-sanpham">
                    <strong>Chè Thái Hoa Quả</strong>
                    <p>Chè Thái</p>
                    <p class="price">29.000 ₫</p>
                    <div class="overlay">
                        <p class="detail">Thưởng thức vị ngọt mát của hoa quả tươi cùng nước cốt dừa.</p>
                        <button class="add-to-cart"
                            onclick="addToCart('Chè Thái Hoa Quả', '29.000 ', './assets/images/menu/che-thai-hoa-qua.png')">THÊM
                            VÀO GIỎ</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="product-card">
                    <img src="./assets/images/menu/che-thai-khoai-deo.png" alt="2" class="img-sanpham">
                    <strong>Chè Thái Khoai Dẻo</strong>
                    <p>Chè Thái</p>
                    <p class="price">33.000 ₫</p>
                    <div class="overlay">
                        <p class="detail">Khoai dẻo mềm thơm quyện cùng vị chè Thái đặc trưng.</p>
                        <button class="add-to-cart"
                            onclick="addToCart('Chè Thái Khoai Dẻo', '33.000 ', './assets/images/menu/che-thai-khoai-deo.png')">THÊM
                            VÀO GIỎ</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="product-card">
                    <img src="./assets/images/menu/che-thai-sau-hoa-qua.png" alt="3" class="img-sanpham">
                    <strong>Chè Thái Sầu Hoa Quả</strong>
                    <p>Chè Thái</p>
                    <p class="price">34.000 ₫</p>
                    <div class="overlay">
                        <p class="detail">Hương sầu riêng béo ngậy hòa quyện cùng hoa quả tươi mát.</p>
                        <button class="add-to-cart"
                            onclick="addToCart('Chè Thái Sầu Hoa Quả', '34.000 ', './assets/images/menu/che-thai-sau-hoa-qua.png')">THÊM
                            VÀO GIỎ</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="menu" class="container text-center">
        <div class="row mt-4">
            <div class="col">
                <div class="product-card">
                    <img src="./assets/images/menu/dua-dam-thai-sau-rieng.png" alt="1" class="img-sanpham">
                    <strong>Dừa Dầm Thái Sầu Riêng</strong>
                    <p>Chè Thái</p>
                    <p class="price">35.000 ₫</p>
                    <div class="overlay">
                        <p class="detail">Dừa dầm giòn thơm cùng sầu riêng béo ngậy hấp dẫn.</p>
                        <button class="add-to-cart"
                            onclick="addToCart('Dừa Dầm Thái Sầu Riêng', '35.000 ', './assets/images/menu/dua-dam-thai-sau-rieng.png')">THÊM
                            VÀO GIỎ</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="product-card">
                    <img src="./assets/images/menu/dua-dam-thai.png" alt="2" class="img-sanpham">
                    <strong>Dừa Dầm Thái</strong>
                    <p>Chè Thái</p>
                    <p class="price">30.000 ₫</p>
                    <div class="overlay">
                        <p class="detail">Chè Thái với dừa dầm tươi, vị ngọt thanh mát tự nhiên.</p>
                        <button class="add-to-cart"
                            onclick="addToCart('Dừa Dầm Thái', '30.000 ', './assets/images/menu/dua-dam-thai.png')">THÊM
                            VÀO GIỎ</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="product-card">
                    <img src="./assets/images/menu/sua-chua-hoa-qua.png" alt="3" class="img-sanpham">
                    <strong>Sữa Chua Hoa Quả</strong>
                    <p>Sữa Chua</p>
                    <p class="price">27.000 ₫</p>
                    <div class="overlay">
                        <p class="detail">Sữa chua mát lạnh, kết hợp trái cây tươi ngon hấp dẫn.</p>
                        <button class="add-to-cart"
                            onclick="addToCart('Sữa Chua Hoa Quả', '27.000 ', './assets/images/menu/sua-chua-hoa-qua.png')">THÊM
                            VÀO GIỎ</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="menu" class="container text-center">
        <div class="row mt-4">
            <div class="col">
                <div class="product-card">
                    <img src="./assets/images/menu/sua-chua-mit.png" alt="1" class="img-sanpham">
                    <strong>Sữa Chua Mít</strong>
                    <p>Sữa Chua</p>
                    <p class="price">26.000 ₫</p>
                    <div class="overlay">
                        <p class="detail">Sữa chua béo nhẹ kết hợp mít vàng ngọt giòn.</p>
                        <button class="add-to-cart"
                            onclick="addToCart('Sữa Chua Mít', '26.000 ', './assets/images/menu/sua-chua-mit.png')">THÊM
                            VÀO GIỎ</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="product-card">
                    <img src="./assets/images/menu/sua-chua-nep-cam.png" alt="2" class="img-sanpham">
                    <strong>Sữa Chua Nếp Cẩm</strong>
                    <p>Sữa Chua</p>
                    <p class="price">28.000 ₫</p>
                    <div class="overlay">
                        <p class="detail">Sữa chua thơm mịn, nếp cẩm dẻo mềm vị ngọt thanh.</p>
                        <button class="add-to-cart"
                            onclick="addToCart('Sữa Chua Nếp Cẩm', '28.000 ', './assets/images/menu/sua-chua-nep-cam.png')">THÊM
                            VÀO GIỎ</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="product-card">
                    <img src="./assets/images/menu/sua-chua-hoa-qua.png" alt="3" class="img-sanpham">
                    <strong>Sữa Chua Hoa Quả</strong>
                    <p>Sữa Chua</p>
                    <p class="price">25.000 ₫</p>
                    <div class="overlay">
                        <p class="detail">Vị sữa chua chua nhẹ, kết hợp trái cây tươi mát.</p>
                        <button class="add-to-cart"
                            onclick="addToCart('Sữa Chua Hoa Quả', '25.000 ', './assets/images/menu/sua-chua-hoa-qua.png')">THÊM
                            VÀO GIỎ</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="menu" class="container text-center">
        <div class="row mt-4">
            <div class="col">
                <div class="product-card">
                    <img src="./assets/images/menu/caramen-hoa-qua.png" alt="1" class="img-sanpham">
                    <strong>Caramen Hoa Quả</strong>
                    <p>Caramen</p>
                    <p class="price">29.000 ₫</p>
                    <div class="overlay">
                        <p class="detail">Caramen mềm mịn kết hợp hoa quả tươi mát ngọt nhẹ.</p>
                        <button class="add-to-cart"
                            onclick="addToCart('Caramen Hoa Quả', '29.000 ', './assets/images/menu/caramen-hoa-qua.png')">THÊM
                            VÀO GIỎ</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="product-card">
                    <img src="./assets/images/menu/dua-dam-thai-sau-rieng.png" alt="2" class="img-sanpham">
                    <strong>Dừa Dầm Thái Sầu Riêng</strong>
                    <p>Chè Thái</p>
                    <p class="price">35.000 ₫</p>
                    <div class="overlay">
                        <p class="detail">Sầu riêng béo ngậy cùng dừa dầm giòn tan trong miệng.</p>
                        <button class="add-to-cart"
                            onclick="addToCart('Dừa Dầm Thái Sầu Riêng', '35.000 ', './assets/images/menu/dua-dam-thai-sau-rieng.png')">THÊM
                            VÀO GIỎ</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="product-card">
                    <img src="./assets/images/menu/sua-chua-hoa-qua.png" alt="3" class="img-sanpham">
                    <strong>Sữa Chua Hoa Quả</strong>
                    <p>Sữa Chua</p>
                    <p class="price">26.000 ₫</p>
                    <div class="overlay">
                        <p class="detail">Món sữa chua thanh mát, kết hợp nhiều loại trái cây tươi.</p>
                        <button class="add-to-cart"
                            onclick="addToCart('Sữa Chua Hoa Quả', '26.000 ', './assets/images/menu/sua-chua-hoa-qua.png')">THÊM
                            VÀO GIỎ</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!---------------------CHI NHÁNH CỬA HÀNG------------------------->
    <div>
        <h1 class="text-center khoangcach">Hệ thống cửa hàng</h1>
        <ul>
            <li>
                <div class="diachi1"></div>
                <div class="my-4 text-center">
                    <h3>CN ĐIỆN BIÊN PHỦ</h3>
                    <h4>320 Điện Biên Phủ, Đà Nẵng</h4>
                    <a class="map-link"
                        target="_blank"
                        href="https://www.google.com/maps/place/Ch%C3%A8+Li%C3%AAn+%C4%90%C3%A0+N%E1%BA%B5ng+-+Ch%C3%A8+S%E1%BA%A7u+Li%C3%AAn/@16.065898,108.193389,3a,75y,90t/data=!3m8!1e2!3m6!1sAF1QipN7BDxTZPuur9YtmSbYtX7sog-W1O77NbLrWff0!2e10!3e12!6shttps:%2F%2Flh5.googleusercontent.com%2Fp%2FAF1QipN7BDxTZPuur9YtmSbYtX7sog-W1O77NbLrWff0%3Dw114-h86-k-no!7i1125!8i844!4m5!3m4!1s0x314219ab29c7e3fd:0xcd6b78582383d42b!8m2!3d16.0660327!4d108.1933728"
                        rel="noopener noreferrer">
                        <img src="https://cdn-icons-png.flaticon.com/512/684/684908.png" alt="Map icon">
                        <span>XEM BẢN ĐỒ</span>
                    </a>
                </div>
            </li>
            <li>
                <div class="diachi2"></div>
                <div class="my-4 text-center">
                    <h3>CN HẢI PHÒNG</h3>
                    <h4>175 Hải Phòng, Đà Nẵng</h4>
                    <a
                        class="map-link"
                        target="_blank"
                        href="https://www.google.com/maps/place/Ch%C3%A8+Li%C3%AAn+-+CN+H%E1%BA%A3i+Ph%C3%B2ng/@16.0715506,108.2129503,21z/data=!4m5!3m4!1s0x31421849eac51b25:0x2664c2573bd8d5c6!8m2!3d16.0715235!4d108.2127363"
                        rel="noopener noreferrer">
                        <img src="https://cdn-icons-png.flaticon.com/512/684/684908.png" alt="Map icon">
                        <span>XEM BẢN ĐỒ</span>
                    </a>

                </div>
            </li>

            <li>
                <div class="diachi3"></div>
                <div class="my-4 text-center">
                    <h3>CN HOÀNG DIỆU</h3>
                    <h4>189 Hoàng Diệu, Đà Nẵng</h4>
                    <a
                        class="map-link"
                        target="_blank"
                        href="https://www.google.com/maps/place/Ch%C3%A8+Li%C3%AAn+-+CN+L%C3%AA+Thanh+Ngh%E1%BB%8B/@16.042064,108.2174032,15z/data=!4m2!3m1!1s0x0:0x9a5a98c58ffa6b08?sa=X&amp;ved=2ahUKEwjLppiUp6r6AhVkWHwKHblBCEMQ_BJ6BAhiEAU"
                        rel="noopener noreferrer">
                        <img src="https://cdn-icons-png.flaticon.com/512/684/684908.png" alt="Map icon">
                        <span>XEM BẢN ĐỒ</span>
                    </a>
                </div>
            </li>
        </ul>
    </div>

    <!-- Review Form -->
    <div class="review-form">
        <h3 class="text-center">Đánh Giá Chất Lượng Chúng Tôi</h3>
        <form id="userReview">
            <input type="text" name="name" placeholder="Your Name" required>

            <label for="rating">Đánh giá:</label>
            <select name="rating" id="rating" required>
                <option value="">Mức độ hài lòng</option>
                <option value="5">⭐⭐⭐⭐⭐</option>
                <option value="4">⭐⭐⭐⭐</option>
                <option value="3">⭐⭐⭐</option>
                <option value="2">⭐⭐</option>
                <option value="1">⭐</option>
            </select>

            <textarea name="comment" placeholder="Write your review..." required></textarea>
            <button type="submit">Gửi</button>
        </form>
    </div>

    <!-- Reviews -->
    <div class="reviews" id="reviewList">
        <div class="review-card">
            <div class="text_reviews">
            <img src="./assets/images/review_form/quan.jpg" alt="Avatar" class="avatar">
            <h3>Quân Queo</h3>
            </div>
            <div class="review-content">
                
                <p>"Ôi dồi, ngon khủng khiếp. Các bạn ăn chè ở đây cần phải có kiến thức, kinh nghiệm và trải nghiệm nhé"</p>
            </div>
        </div>

        <div class="review-card">
            <img src="./assets/images/review_form/quy.jpg" alt="Avatar" class="avatar">
            <div class="review-content">
                <h3>Quý MieChouchou</h3>
                <p>⭐⭐⭐⭐ "Chè ở đây ngon đến mức khiến tôi phải phát ra 5 thứ tiếng khen ngon! Tuyệt vời ae cây khế."</p>
            </div>
        </div>

        <div class="review-card">
            <img src="./assets/images/review_form/long.jpg" alt="Avatar" class="avatar">
            <div class="review-content">
                <h3>Nhật Long 75</h3>
                <p>⭐⭐⭐⭐⭐ "Thật sự Long ko có lời gì để diễn tả nữa, mọi người qua ủng hộ và thử nhé. Ngon không có nhưng"</p>
            </div>
        </div>

        <div class="review-card">
            <img src="./assets/images/review_form/minh.jpg" alt="Avatar" class="avatar">
            <div class="review-content">
                <h3>Minh Biker</h3>
                <p>⭐⭐⭐⭐⭐ "Ngon nhứt lách"</p>
            </div>
        </div>
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