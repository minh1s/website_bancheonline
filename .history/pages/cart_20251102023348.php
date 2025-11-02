<div class="cart">
  <div class="cart-controls">
    <label>
      <input type="checkbox" id="selectAllCart"> Chọn tất cả
    </label>
    <button id="removeSelected" class="btn-remove-selected">XÓA ĐÃ CHỌN</button>
  </div>

  <div class="cart-items" id="cartItems">
    <!-- Các sản phẩm sẽ được thêm bằng JS -->
  </div>

  <div class="discount-box">
    <input type="text" id="discountCode" placeholder="Nhập mã giảm giá">
    <button id="applyDiscount">Áp dụng</button>
  </div>

  <div class="cart-total">
    Tổng tiền: <span id="totalPrice">0 ₫</span>
  </div>
  <button class="checkout">THANH TOÁN</button>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const cartContainer = document.getElementById('cartItems');
  const totalContainer = document.getElementById('totalPrice');
  const selectAllCart = document.getElementById('selectAllCart');
  const removeSelected = document.getElementById('removeSelected');

  if (!cartContainer || !totalContainer) return;

  let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];

  function renderCart() {
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
        saveAndRender();
      });
    });

    document.querySelectorAll('.decrease').forEach((btn, i) => {
      btn.addEventListener('click', () => {
        if (cartItems[i].quantity > 1) {
          cartItems[i].quantity--;
        } else {
          cartItems.splice(i, 1);
        }
        saveAndRender();
      });
    });
  }

  function saveAndRender() {
    localStorage.setItem('cartItems', JSON.stringify(cartItems));
    renderCart();
  }

  // Chọn tất cả sản phẩm
  if (selectAllCart) {
    selectAllCart.addEventListener('change', function () {
      document.querySelectorAll('.item-checkbox').forEach(cb => {
        cb.checked = this.checked;
      });
    });
  }

  // Xóa sản phẩm đã chọn
  if (removeSelected) {
    removeSelected.addEventListener('click', function () {
      const selectedIndexes = [];
      document.querySelectorAll('.item-checkbox').forEach((cb, index) => {
        if (cb.checked) selectedIndexes.push(index);
      });

      if (selectedIndexes.length === 0) {
        alert('⚠️ Vui lòng chọn ít nhất một sản phẩm để xóa.');
        return;
      }

      cartItems = cartItems.filter((_, i) => !selectedIndexes.includes(i));
      saveAndRender();
      alert('🗑️ Đã xóa sản phẩm đã chọn.');
    });
  }

  renderCart();
});
</script>
