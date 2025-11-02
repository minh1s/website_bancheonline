// ====================== ADD TO CART FUNCTION ======================
function addToCart(name, price, imgSrc) {
  let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];

  const existingItem = cartItems.find(item => item.name === name);

  if (existingItem) {
    existingItem.quantity += 1;
  } else {
    cartItems.push({ name, price, img: imgSrc, quantity: 1 });
  }

  localStorage.setItem('cartItems', JSON.stringify(cartItems));
}

document.addEventListener('DOMContentLoaded', function () {
  const selectAll = document.getElementById('selectAll');
  const checkboxes = document.querySelectorAll('.product-checkbox');
  const addSelectedBtn = document.getElementById('addSelectedToCart');

  // Nếu không có phần tử phù hợp thì dừng
  if (!selectAll && !addSelectedBtn && checkboxes.length === 0) return;

  // Chọn / bỏ chọn sản phẩm
  checkboxes.forEach(cb => {
    cb.addEventListener('change', function () {
      const card = this.closest('.product-card');
      if (card) card.classList.toggle('selected', this.checked);
    });
  });

  // Chọn tất cả / bỏ chọn tất cả
  if (selectAll) {
    selectAll.addEventListener('change', function () {
      checkboxes.forEach(cb => {
        cb.checked = this.checked;
        const card = cb.closest('.product-card');
        if (card) card.classList.toggle('selected', this.checked);
      });
    });
  }

  // Thêm tất cả món đã chọn vào giỏ
  if (addSelectedBtn) {
    addSelectedBtn.addEventListener('click', function () {
      const selected = Array.from(checkboxes).filter(cb => cb.checked);

      if (selected.length === 0) {
        alert('⚠️ Vui lòng chọn ít nhất một sản phẩm!');
        return;
      }

      selected.forEach(cb => {
        const card = cb.closest('.product-card');
        const name = card.querySelector('strong')?.innerText || '';
        const price = card.querySelector('.price')?.innerText || '';
        const imgSrc = card.querySelector('img')?.src || '';
        addToCart(name, price, imgSrc);
      });

      alert('✅ Đã thêm các món đã chọn vào giỏ hàng!');
    });
  }
});
