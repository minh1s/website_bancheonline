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

    <!-- Review Form -->
    <div class="review-form mt-4">
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
    <div class="reviews mb-5" id="reviewList">
        <div class="review-card">
            <div class="text_reviews">
                <img src="./assets/images/review_form/quan.jpg" alt="Avatar" class="avatar">
                <div>
                    <h3>Quân Queo</h3>
                    <p>⭐⭐⭐⭐⭐</p>
                </div>
            </div>
            <div class="review-content">
                <p>"Ôi dồi, ngon khủng khiếp. Các bạn ăn chè ở đây cần phải có kiến thức, kinh nghiệm và trải nghiệm nhé"</p>
            </div>
        </div>

        <div class="review-card">
            <div class="text_reviews">
                <img src="./assets/images/review_form/quy.jpg" alt="Avatar" class="avatar">
                <div>
                    <h3>Quý MieChouchou</h3>
                    <p>⭐⭐⭐⭐</p>
                </div>
            </div>
            <div class="review-content">
                <p>"Chè ở đây ngon đến mức khiến tôi phải phát ra 5 thứ tiếng khen ngon! Tuyệt vời ae cây khế."</p>
            </div>
        </div>

        <div class="review-card">
            <div class="text_reviews">
                <img src="./assets/images/review_form/long.jpg" alt="Avatar" class="avatar">
                <div>
                    <h3>Nhật Long 75</h3>
                    <p>⭐⭐⭐⭐⭐</p>
                </div>
            </div>
            <div class="review-content">
                <p>"Thật sự Long ko có lời gì để diễn tả nữa, mọi người qua ủng hộ và thử nhé. Ngon không có nhưng"</p>
            </div>
        </div>

        <div class="review-card">
            <div class="text_reviews">
                <img src="./assets/images/review_form/minh.jpg" alt="Avatar" class="avatar">
                <div>
                    <h3>Minh Biker</h3>
                    <p>⭐⭐⭐⭐⭐</p>
                </div>
            </div>
            <div class="review-content">
                <p>"Ngon nhứt lách"</p>
            </div>
        </div>
    </div>