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