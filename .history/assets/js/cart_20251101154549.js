let cart = JSON.parse(localStorage.getItem('cart')) || [];
let discount = 0;

// Hàm lưu và render
function saveAndRender() {
  localStorage.setItem('cart', JSON.stringify(cart));
  renderCart();
}

// Hàm render giỏ hàng
function renderCart() {
  let cartContainer = document.querySelector('.cart-items');
  cartContainer.innerHTML = '';

  let grandTotal = 0;
  cart.forEach((item, index) => {
    const itemTotal = item.price * item.qty;
    grandTotal += itemTotal;

    const li = document.createElement('li');
    li.className = 'cart-item';
    li.innerHTML = `
      <input type="checkbox" class="select-item" data-index="${index}">
      <img src="${item.image}" alt="${item.name}">
      <div class="item-info">
        <h3>${item.name}</h3>
        <p class="price">${item.price.toLocaleString()}₫</p>
        <div class="quantity">
          <button class="minus">-</button>
          <span class="qty">${item.qty}</span>
          <button class="plus">+</button>
        </div>
      </div>
      <p class="total">${itemTotal.toLocaleString()}₫</p>
      <button class="remove">Xóa</button>
    `;
    cartContainer.appendChild(li);

    // Gắn sự kiện
    li.querySelector('.plus').addEventListener('click', () => {
      item.qty++;
      saveAndRender();
    });
    li.querySelector('.minus').addEventListener('click', () => {
      if (item.qty > 1) item.qty--;
      saveAndRender();
    });
    li.querySelector('.remove').addEventListener('click', () => {
      cart.splice(index, 1);
      saveAndRender();
    });
  });

  // Tổng tiền có áp mã giảm giá
  let discountedTotal = grandTotal - discount;
  if (discountedTotal < 0) discountedTotal = 0;

  document.getElementById('grand-total').innerText = discountedTotal.toLocaleString() + '₫';
}

// Áp mã giảm giá
document.getElementById('apply-discount').addEventListener('click', () => {
  const code = document.getElementById('discount-code').value.trim();
  if (code === 'GIAM10') {
    discount = 0.1 * cart.reduce((sum, item) => sum + item.price * item.qty, 0);
    alert('Áp dụng mã giảm giá 10% thành công!');
  } else {
    discount = 0;
    alert('Mã giảm giá không hợp lệ.');
  }
  saveAndRender();
});

// Tick chọn tất cả
document.getElementById('select-all').addEventListener('change', function() {
  const checkboxes = document.querySelectorAll('.select-item');
  checkboxes.forEach(cb => cb.checked = this.checked);
});

// Xóa sản phẩm đã chọn
document.getElementById('remove-selected').addEventListener('click', () => {
  const selected = document.querySelectorAll('.select-item:checked');
  const indices = Array.from(selected).map(cb => parseInt(cb.dataset.index));
  cart = cart.filter((_, i) => !indices.includes(i));
  saveAndRender();
});

// Thanh toán
document.querySelector('.checkout').addEventListener('click', () => {
  const selected = document.querySelectorAll('.select-item:checked');
  if (selected.length === 0) {
    alert('Vui lòng chọn ít nhất một sản phẩm để thanh toán.');
    return;
  }
  alert('Thanh toán thành công! (demo)');
  cart = [];
  saveAndRender();
});

document.addEventListener('DOMContentLoaded', renderCart);
