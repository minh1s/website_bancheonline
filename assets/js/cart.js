// ====================== ADD TO CART FUNCTION ======================
function addToCart(name, price, imgSrc) {
  const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
  const item = cartItems.find(i => i.name === name);

  if (item) item.quantity++;
  else cartItems.push({ name, price, img: imgSrc, quantity: 1 });

  localStorage.setItem('cartItems', JSON.stringify(cartItems));
  alert(`✅ Đã thêm "${name}" vào giỏ hàng!`);
}

// ====================== DOM READY ======================
document.addEventListener('DOMContentLoaded', () => {
  const selectAll = document.getElementById('selectAll');
  const addSelectedBtn = document.getElementById('addSelectedToCart');
  const checkboxes = document.querySelectorAll('.product-checkbox');

  // ⚠️ Nếu không có phần tử phù hợp => dừng, tránh lỗi
  if (!selectAll && !addSelectedBtn && checkboxes.length === 0) {
    console.warn("⚠️ Không tìm thấy phần tử phù hợp, bỏ qua cart.js");
    return;
  }

  // ✅ Gọn hơn: toggle class khi checkbox thay đổi
  checkboxes.forEach(cb => {
    cb.addEventListener('change', () => {
      cb.closest('.product-card')?.classList.toggle('selected', cb.checked);
    });
  });

  // ✅ Chọn tất cả / Bỏ chọn tất cả
  selectAll?.addEventListener('change', () => {
    checkboxes.forEach(cb => {
      cb.checked = selectAll.checked;
      cb.closest('.product-card')?.classList.toggle('selected', selectAll.checked);
    });
  });

  // ✅ Thêm tất cả món đã chọn vào giỏ
  addSelectedBtn?.addEventListener('click', () => {
    const selected = Array.from(checkboxes).filter(cb => cb.checked);

    if (selected.length === 0) {
      alert('⚠️ Vui lòng chọn ít nhất một sản phẩm!');
      return;
    }

    selected.forEach(cb => {
      const card = cb.closest('.product-card');
      if (!card) return;

      const name = card.querySelector('strong')?.innerText || '';
      const price = card.querySelector('.price')?.innerText || '';
      const imgSrc = card.querySelector('img')?.src || '';
      addToCart(name, price, imgSrc);
    });

    alert('✅ Đã thêm các món đã chọn vào giỏ hàng!');
  });
});
