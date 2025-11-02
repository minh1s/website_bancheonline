// ------------------ GIỎ HÀNG ------------------ //
let cart = JSON.parse(localStorage.getItem('cart')) || [];

// Render lại giỏ hàng khi load trang
function renderCart() {
  const cartItems = document.getElementById('cartItems');
  cartItems.innerHTML = '';

  cart.forEach((item, index) => {
    const li = document.createElement('li');
    li.className = 'cart-item';
    li.innerHTML = `
      <input type="checkbox" class="item-checkbox" data-index="${index}">
      <img src="${item.image}" alt="${item.name}">
      <div class="item-info">
        <strong>${item.name}</strong>
        <p>${item.price} ₫</p>
      </div>
      <div class="quantity">
        <button onclick="changeQuantity(${index}, -1)">-</button>
        <span>${item.quantity}</span>
        <button onclick="changeQuantity(${index}, 1)">+</button>
      </div>
    `;
    cartItems.appendChild(li);
  });

  updateTotal();
  bindCartEvents();
}

function updateTotal() {
  let total = 0;
  cart.forEach(item => {
    total += parseFloat(item.price.replace(/\./g, '')) * item.quantity;
  });
  document.getElementById('totalPrice').innerText = total.toLocaleString('vi-VN');
}

function changeQuantity(index, delta) {
  cart[index].quantity += delta;
  if (cart[index].quantity < 1) cart[index].quantity = 1;
  saveCart();
  renderCart();
}

function saveCart() {
  localStorage.setItem('cart', JSON.stringify(cart));
}

function bindCartEvents() {
  const selectAllCart = document.getElementById('selectAllCart');
  const itemCheckboxes = document.querySelectorAll('.item-checkbox');
  const removeSelected = document.getElementById('removeSelected');

  // Xử lý nút chọn tất cả
  selectAllCart.addEventListener('change', function () {
    itemCheckboxes.forEach(cb => cb.checked = this.checked);
  });

  // Nếu tick / bỏ tick từng sản phẩm thì kiểm tra lại tick all
  itemCheckboxes.forEach(cb => {
    cb.addEventListener('change', function () {
      const allChecked = Array.from(itemCheckboxes).every(c => c.checked);
      selectAllCart.checked = allChecked;
    });
  });

  // Xóa sản phẩm đã chọn
  removeSelected.addEventListener('click', function () {
    const selectedIndexes = Array.from(itemCheckboxes)
      .filter(cb => cb.checked)
      .map(cb => parseInt(cb.dataset.index));

    if (selectedIndexes.length === 0) {
      alert('Vui lòng chọn ít nhất một sản phẩm để xóa!');
      return;
    }

    cart = cart.filter((_, index) => !selectedIndexes.includes(index));
    saveCart();
    renderCart();
  });
}

// Thêm sản phẩm vào giỏ (dùng cho menu.php)
function addToCart(name, price, image) {
  const existing = cart.find(item => item.name === name);
  if (existing) {
    existing.quantity += 1;
  } else {
    cart.push({ name, price, image, quantity: 1 });
  }
  saveCart();
  renderCart();
}

// Khởi tạo khi load trang giỏ hàng
document.addEventListener('DOMContentLoaded', renderCart);
