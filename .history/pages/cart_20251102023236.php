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

<script>
document.addEventListener('DOMContentLoaded', function () {
  const cartContainer = document.querySelector('.cart-items');
  const totalContainer = document.querySelector('.cart-total span');

  // Lấy dữ liệu từ localStorage
  const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];

  // Nếu giỏ hàng trống
  if (cartItems.length === 0) {
    cartContainer.innerHTML = '<p style="text-align:center; color:#888;">🛒 Giỏ hàng của bạn đang trống.</p>';
    totalContainer.textContent = '0 ₫';
    return;
  }

  let total = 0;

  cartContainer.innerHTML = cartItems.map((item, index) => {
    const itemTotal = parseFloat(item.price.replace(/[^\d]/g, '')) * item.quantity;
    total += itemTotal;

    return `
      <div class="cart-item" data-index="${index}">
        <input type="checkbox" class="item-checkbox">
        <img src="${item.img}" alt="${item.name}">
        <div class="item-info">
          <strong>${item.name}</strong>
          <p>${item.price}</p>
        </div>
        <div class="quantity">
          <button class="decrease">-</button>
          <span>${item.quantity}</span>
          <button class="increase">+</button>
        </div>
        <p>${itemTotal.toLocaleString()} ₫</p>
      </div>
    `;
  }).join('');

  totalContainer.textContent = total.toLocaleString() + ' ₫';

  // Nút tăng giảm số lượng
  document.querySelectorAll('.increase').forEach((btn, i) => {
    btn.addEventListener('click', () => {
      cartItems[i].quantity++;
      localStorage.setItem('cartItems', JSON.stringify(cartItems));
      location.reload();
    });
  });

  document.querySelectorAll('.decrease').forEach((btn, i) => {
    btn.addEventListener('click', () => {
      if (cartItems[i].quantity > 1) {
        cartItems[i].quantity--;
      } else {
        cartItems.splice(i, 1);
      }
      localStorage.setItem('cartItems', JSON.stringify(cartItems));
      location.reload();
    });
  });
});
</script>
