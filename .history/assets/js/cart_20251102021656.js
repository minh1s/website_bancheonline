// ==== Chức năng chọn tất cả & xóa đã chọn ====

// Tick chọn tất cả
const selectAllCheckbox = document.getElementById('selectAll');
const deleteSelectedBtn = document.getElementById('deleteSelected');

if (selectAllCheckbox) {
  selectAllCheckbox.addEventListener('change', () => {
    const itemCheckboxes = document.querySelectorAll('.item-checkbox');
    itemCheckboxes.forEach(checkbox => {
      checkbox.checked = selectAllCheckbox.checked;
    });
  });
}

// Xóa các sản phẩm được chọn
if (deleteSelectedBtn) {
  deleteSelectedBtn.addEventListener('click', () => {
    const itemCheckboxes = document.querySelectorAll('.item-checkbox:checked');
    if (itemCheckboxes.length === 0) {
      alert('Vui lòng chọn ít nhất một sản phẩm để xóa.');
      return;
    }

    if (confirm(`Bạn có chắc muốn xóa ${itemCheckboxes.length} sản phẩm đã chọn không?`)) {
      itemCheckboxes.forEach(checkbox => {
        const cartItem = checkbox.closest('.cart-item');
        if (cartItem) cartItem.remove();
      });
    }

    // Nếu tất cả đã bị xóa, bỏ chọn "chọn tất cả"
    const remaining = document.querySelectorAll('.item-checkbox');
    selectAllCheckbox.checked = remaining.length > 0 && [...remaining].every(cb => cb.checked);
  });
}
