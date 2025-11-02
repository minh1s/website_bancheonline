// ====================== ADD TO CART FUNCTION ======================
function addToCart(name, price, imgSrc) {
  let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];

  // Kiểm tra xem sản phẩm đã tồn tại chưa
  const existingItem = cartItems.find(item => item.name === name);

  if (existingItem) {
    existingItem.quantity += 1;
  } else {
    cartItems.push({
      name: name,
      price: price,
      img: imgSrc,
      quantity: 1
    });
  }

  localStorage.setItem('cartItems', JSON.stringify(cartItems));
  alert(`✅ Đã thêm "${name}" vào giỏ hàng!`);
}

document.addEventListener('DOMContentLoaded', function () {
  const selectAll = document.getElementById('selectAll');
  const checkboxes = document.querySelectorAll('.product-checkbox');
  const addSelectedBtn = document.getElementById('addSelectedToCart');

  // ✅ Nếu không có phần tử nào thì dừng luôn, tránh lỗi null
  if (!selectAll && !addSelectedBtn && checkboxes.length === 0) {
    console.warn("⚠️ Không tìm thấy phần tử phù hợp trong trang này, bỏ qua cart.js");
    return;
  }

  // Hiệu ứng chọn sản phẩm
  checkboxes.forEach(cb => {
    cb.addEventListener('change', function () {
      const card = this.closest('.product-card');
      if (card) {
        card.classList.toggle('selected', this.checked);
      }
    });
  });

  // Chọn tất cả / Bỏ chọn tất cả
  if (selectAll) {
    selectAll.addEventListener('change', function () {
      checkboxes.forEach(cb => {
        cb.checked = this.checked;
        const card = cb.closest('.product-card');
        if (card) {
          card.classList.toggle('selected', this.checked);
        }
      });
    });
  }

  // Thêm tất cả món đã chọn vào giỏ
  if (addSelectedBtn) {
    addSelectedBtn.addEventListener('click', function () {
      let hasSelected = false;

      checkboxes.forEach(cb => {
        if (cb.checked) {
          hasSelected = true;
          const card = cb.closest('.product-card');
          if (card) {
            const name = card.querySelector('strong')?.innerText || '';
            const price = card.querySelector('.price')?.innerText || '';
            const imgSrc = card.querySelector('img')?.src || '';
            addToCart(name, price, imgSrc);
          }
        }
      });

      if (hasSelected) {
        alert('✅ Đã thêm các món đã chọn vào giỏ hàng!');
      } else {
        alert('⚠️ Vui lòng chọn ít nhất một sản phẩm!');
      }
    });
  }
});
