document.addEventListener('DOMContentLoaded', function () {
  const selectAll = document.getElementById('selectAll');
  const checkboxes = document.querySelectorAll('.product-checkbox');
  const addSelectedBtn = document.getElementById('addSelectedToCart');

  // Hiệu ứng chọn sản phẩm
  checkboxes.forEach(cb => {
    cb.addEventListener('change', function () {
      const card = this.closest('.product-card');
      if (this.checked) {
        card.classList.add('selected');
      } else {
        card.classList.remove('selected');
      }
    });
  });

  // Chọn tất cả / Bỏ chọn tất cả
  selectAll.addEventListener('change', function () {
    checkboxes.forEach(cb => {
      cb.checked = this.checked;
      const card = cb.closest('.product-card');
      if (this.checked) {
        card.classList.add('selected');
      } else {
        card.classList.remove('selected');
      }
    });
  });

  // Thêm tất cả món đã chọn vào giỏ
  addSelectedBtn.addEventListener('click', function () {
    checkboxes.forEach(cb => {
      if (cb.checked) {
        const card = cb.closest('.product-card');
        const name = card.querySelector('strong').innerText;
        const price = card.querySelector('.price').innerText;
        const imgSrc = card.querySelector('img').src;
        addToCart(name, price, imgSrc);
      }
    });
    alert('Đã thêm các món đã chọn vào giỏ hàng!');
  });
});
