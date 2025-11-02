<div class="cart">
  <div class="cart-controls">
    <label>
      <input type="checkbox" id="selectAllCart"> Chọn tất cả
    </label>
    <button id="removeSelected" class="btn-remove-selected">XÓA ĐÃ CHỌN</button>
  </div>

  <ul class="cart-items" id="cartItems">
    <!-- Các sản phẩm sẽ được thêm bằng JS -->
  </ul>

  <div class="discount-box">
    <input type="text" id="discountCode" placeholder="Nhập mã giảm giá">
    <button id="applyDiscount">Áp dụng</button>
  </div>

  <div class="cart-total">
    Tổng tiền: <span id="totalPrice">0</span> ₫
  </div>
  <button class="checkout">THANH TOÁN</button>
</div>
