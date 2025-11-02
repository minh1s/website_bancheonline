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

    <!--NAVBAR-->
    <div class="title container">
        <p>📍 Địa chỉ: Ngũ Hành Sơn, Đà Nẵng, Việt Nam</p>
        <img src="./assets/images/logo.png" alt="logo" class="logo-head">
        <p>🕗 10:00h - 22:00h | 📞 081.383.2359</p>
    </div>

    <div>
        <ul class="nav-list my-4 ps-0">
            <li class="nav-item">TRANG CHỦ</li>
            <li class="nav-item">
                <a href="#gioithieu">GIỚI THIỆU</a>
            </li>
            <li class="nav-item">
                <a href="login.html">ĐĂNG NHẬP</a>
            </li>
            <li class="nav-item">
                <a href="#menu">MENU</a>
            </li>
            <li class="nav-item">
                <a href="#address">HỆ THỐNG CỬA HÀNG</a>
            </li>
            <li class="nav-item">
                <a href="giohang.html">GIỎ HÀNG</a>
            </li>
            <li class="nav-item">
                <a href="#hotline">LIÊN HỆ</a>
            </li>
        </ul>
    </div>

    <!--ẢNH NỀN AE QUÁN-->
    <div class="bg-1">
        <img src="./assets/images/bg.png" alt="Banner">
    </div>

    <!--GIỚI THIỆU VỀ QUÁN-->
    <div id="gioithieu" class="container my-5">
        <div class="row text-center g-5">
            <div class="col-md-6">
                <div class="d-flex gap-4 p-5">
                    <img src="./assets/images/gioithieu1.png" class="size-img" alt="bg2">
                    <img src="./assets/images/gioithieu2.png" class="size-img custom-img-2" alt="bg3">
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-5 text-center">
                    <img src="./assets/images/logo-lacay.png" class="custom-img-3" alt="bg4">
                    <h4 class="text-edit">Chào mừng bạn đến với</h4>
                    <h1 style="cursor: default;">Chè Dừa Thái Lan!</h1>
                    <p class="text-edit-2">Nằm trên con phố nhỏ tấp nập, Chè Dừa Thái Lan thu hút thực khách bởi hương
                        vị thơm ngon, thanh
                        mát
                        của những ly chè dừa trứ danh. Không chỉ là thức uống giải nhiệt ngày hè, mỗi ly chè còn là câu
                        chuyện về sự kết hợp tinh tế giữa nguyên liệu tươi ngon, công thức truyền thống và niềm đam mê
                        của
                        người nấu.</p>
                </div>
            </div>
        </div>
    </div>

    <!--XEM TẤT CẢ SẢN PHẨM-->
    <div id="menu" class="container text-center">
        <h3 class="text-center my-4">XEM TẤT CẢ SẢN PHẨM</h3>

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

        <div class="row mt-4">
            <div class="col">
                <div class="product-card">
                    <img src="./assets/images/che-thai-hoa-qua.png" alt="4" class="img-sanpham">
                    <h4>Chè Thái Hoa Quả</h4>
                    <p>Chè Thái</p>
                    <p class="price">25.000 ₫</p>
                    <div class="overlay">
                        <p class="detail">Chè Thái mix cùng hoa quả nhiệt đới, mát lạnh và hấp dẫn.</p>
                        <button class="add-to-cart"
                            onclick="addToCart('Chè thái Hoa Quả', '25.000 ', './assets/images/che-thai-hoa-qua.png')">THÊM
                            VÀO GIỎ</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="product-card">
                    <img src="./assets/images/sua-chua-hoa-qua.png" alt="5" class="img-sanpham">
                    <h4>Sữa Chua Hoa Quả</h4>
                    <p>Sữa chua</p>
                    <p class="price">25.000 ₫</p>
                    <div class="overlay">
                        <p class="detail">Sữa chua mịn kết hợp trái cây tươi, ngon và tốt cho tiêu hoá.</p>
                        <button class="add-to-cart"
                            onclick="addToCart('Sữa ChuaChua Hoa Quả', '25.000 ', './assets/images/sua-chua-hoa-qua.png')">THÊM
                            VÀO GIỎ</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="product-card">
                    <img src="./assets/images/sua-chua-mit.png" alt="6" class="img-sanpham">
                    <h4>Sữa Chua Mít</h4>
                    <p>Sữa chua</p>
                    <p class="price">25.000 ₫</p>
                    <div class="overlay">
                        <p class="detail">Sữa chua kết hợp mít tươi, thạch và topping giòn ngon.</p>
                        <button class="add-to-cart"
                            onclick="addToCart('Sữa Chua MítMít', '25.000 ', './assets/images/sua-chua-mit.png')">THÊM
                            VÀO GIỎ</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col">
                <div class="product-card">
                    <img src="./assets/images/che-thai-dua.png" alt="7" class="img-sanpham">
                    <h4>Chè Dừa Thái</h4>
                    <p>Chè Thái</p>
                    <p class="price">22.000 ₫</p>
                    <div class="overlay">
                        <p class="detail">Chè Thái hoa quả, nước cốt dừa béo, thạch trái cây mát.</p>
                        <button class="add-to-cart"
                            onclick="addToCart('Chè Dừa tháithái', '22.000 ', './assets/images/che-thai-dua.png')">THÊM
                            VÀO GIỎ</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="product-card">
                    <img src="./assets/images/che-thai-buoi.png" alt="8" class="img-sanpham">
                    <h4>Chè Thái Bưởi</h4>
                    <p>Chè Thái</p>
                    <p class="price">25.000 ₫</p>
                    <div class="overlay">
                        <p class="detail">Chè Thái bưởi, trân châu, thạch rau câu, vị chua ngọt lạ.</p>
                        <button class="add-to-cart"
                            onclick="addToCart('Chè Thái Bưởi', '25.000 ', './assets/images/che-thai-buoi.png')">THÊM
                            VÀO GIỎ</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="product-card">
                    <img src="./assets/images/che-thai-caramen.png" alt="9" class="img-sanpham">
                    <h4>Chè Thái Caramen</h4>
                    <p>Chè Thái</p>
                    <p class="price">30.000 ₫</p>
                    <div class="overlay">
                        <p class="detail">Caramen mềm tan, chè Thái béo thơm, topping giòn mát.</p>
                        <button class="add-to-cart"
                            onclick="addToCart('Chè Thái Caramen', '30.000 ', './assets/images/che-thai-caramen.png')">THÊM
                            VÀO GIỎ</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col">
                <div class="product-card">
                    <img src="./assets/images/che-thai-khoai-deo.png" alt="10" class="img-sanpham">
                    <h4>Chè Thái Khoai Dẻo</h4>
                    <p>Chè Thái</p>
                    <p class="price">25.000 ₫</p>
                    <div class="overlay">
                        <p class="detail">Khoai dẻo mềm dai, chè Thái béo thơm, topping đầy đủ.</p>
                        <button class="add-to-cart"
                            onclick="addToCart('Chè Thái Khoai Dẻo', '25.000 ', './assets/images/che-thai-khoai-deo.png')">THÊM
                            VÀO GIỎ</button>
                    </div>
                </div>

            </div>
            <div class="col">
                <div class="product-card">
                    <img src="./assets/images/che-thai-sau-hoa-qua.png" alt="11" class="img-sanpham">
                    <h4>Chè Thái Sầu Hoa Quả</h4>
                    <p>Chè Thái</p>
                    <p class="price">35.000 ₫</p>
                    <div class="overlay">
                        <p class="detail">Sầu riêng béo ngậy, trái cây giòn mát, thạch thanh mát.</p>
                        <button class="add-to-cart"
                            onclick="addToCart('Chè Thái Sầu Hoa Quả', '35.000 ', './assets/images/che-thai-sau-hoa-qua.png')">THÊM
                            VÀO GIỎ</button>
                    </div>
                </div>

            </div>
            <div class="col">
                <div class="product-card">
                    <img src="./assets/images/sua-chua-nep-cam.png" alt="12" class="img-sanpham">
                    <h4>Sữa Chua Nếp Cẩm</h4>
                    <p>Sữa chua</p>
                    <p class="price">20.000 ₫</p>
                    <div class="overlay">
                        <p class="detail">Sữa chua nếp cẩm dẻo thơm, chua nhẹ, mát lạnh.</p>
                        <button class="add-to-cart"
                            onclick="addToCart('Sữa Chua Nếp Cẩm', '20.000 ', './assets/images/sua-chua-nep-cam.png')">THÊM
                            VÀO GIỎ</button>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="container-fluid text-center" style="margin: 60px 0;">
        <h4 class="text-edit">Menu</h4>
        <h3 class="my-3" style="cursor: default;">THỰC ĐƠN HÔM NAY</h3>
        <p class="mx-auto" style="max-width: 450px; cursor: default;">Mỗi ly chè dừa tại đây không chỉ là thức uống ngon
            miệng mà còn là
            tâm huyết của người nấu.</p>

        <div>
            <img src="./assets/images/menu1.png" class="img-menu zoomable" alt="menu1">
            <img src="./assets/images/menu2.png" class="img-menu zoomable" alt="menu2">
            <img src="./assets/images/menu3.png" class="img-menu zoomable" alt="menu3">
            <img src="./assets/images/menu4.png" class="img-menu zoomable" alt="menu4">
        </div>

        <!-- Modal để phóng to ảnh -->
        <div id="imageModal" class="image-modal">
            <span class="close-modal">&times;</span>
            <img class="modal-content" id="modalImage">
        </div>
    </div>

    <div class="container-fluid p-0 position-relative">
        <img src="./assets/images/thiet-ke-anh-ve-chung-toi.png" class="thiet-ke-anh" alt="bg5">
        <h1 class="edit-text-3">Chúng tôi tự hào giới thiệu món <i>Chè Thái</i></h1>
        <p class="edit-text-4">Tiếng lành đồn xa, Chè Dừa Thái Lan ngày càng thu hút nhiều thực khách đến để thưởng thức
            hương vị thơm ngon, thanh mát của những ly chè dừa trứ danh.</p>

        <div class="position-absolute f8bet d-flex">
            <img src="./assets/images/banner1.png" class="thiet-ke-anh-2" alt="q">
            <img src="./assets/images/banner2.png" class="thiet-ke-anh-2" alt="q">
            <img src="./assets/images/banner3.png" class="thiet-ke-anh-2" alt="q">
        </div>
    </div>

    <div class="container">
        <h3 class="text-center">BỘ SƯU TẬP MÓN ĂN</h3>

        <div class="d-flex justify-content-around my-5">
            <img src="./assets/images/st10.jpg" alt="y" class="anh-suu-tap">
            <img src="./assets/images/st2.jpg" alt="y" class="anh-suu-tap">
            <img src="./assets/images/st3.jpg" alt="y" class="anh-suu-tap">
            <img src="./assets/images/st4.jpg" alt="y" class="anh-suu-tap">
            <img src="./assets/images/st5.jpg" alt="y" class="anh-suu-tap">
        </div>
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

    <script>
        const modal = document.getElementById("imageModal");
        const modalImg = document.getElementById("modalImage");
        const closeBtn = document.querySelector(".close-modal");

        document.querySelectorAll(".zoomable").forEach(img => {
            img.addEventListener("click", () => {
                modal.style.display = "flex";
                modalImg.src = img.src;
            });
        });

        closeBtn.onclick = () => {
            modal.style.display = "none";
        };

        // Click ra ngoài ảnh để đóng
        modal.addEventListener("click", (e) => {
            if (e.target === modal) {
                modal.style.display = "none";
            }
        });
    </script>

    <!-- JavaScript xử lý giỏ hàng -->
    <script>
        function addToCart(name, price, image) {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];

            let existing = cart.find(item => item.name === name);
            if (existing) {
                existing.quantity += 1;
            } else {
                cart.push({ name, price, image, quantity: 1 });
            }

            localStorage.setItem('cart', JSON.stringify(cart));
            alert('Đã thêm vào giỏ hàng!');
            window.location.href = 'giohang.html';

        }

    </script>
    <script>
        const cartItems = JSON.parse(localStorage.getItem('cart')) || [];
        const container = document.getElementById('cart-items');

        if (cartItems.length === 0) {
            container.innerHTML = '<p>Giỏ hàng của bạn đang trống.</p>';
        } else {
            cartItems.forEach(item => {
                const html = `
                <div style="border: 1px solid #ccc; padding: 10px; margin: 10px;">
                    <img src="${item.image}" width="100">
                    <h4>${item.name}</h4>
                    <p>Giá: ${item.price}</p>
                    <p>Số lượng: ${item.quantity}</p>
                </div>
            `;
                container.innerHTML += html;
            });
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>