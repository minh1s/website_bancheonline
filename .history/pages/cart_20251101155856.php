<div class="cart">
  <h2>Giỏ hàng của bạn</h2>

  <div class="cart-controls">
  <label>
    <input type="checkbox" id="selectAll"> Chọn tất cả
  </label>
  <button id="deleteSelected">Xóa đã chọn</button>
</div>


  <ul class="cart-items">
    <!-- JS sẽ render sản phẩm ở đây -->
  </ul>

  <div class="discount-box">
    <input type="text" id="discount-code" placeholder="Nhập mã giảm giá">
    <button id="apply-discount">Áp dụng</button>
  </div>

  <div class="cart-total">
    <p>Tổng tiền: <span id="grand-total">0₫</span></p>
    <button class="checkout">Thanh toán</button>
  </div>
</div>

<script src="assets/js/cart.js"></script>
