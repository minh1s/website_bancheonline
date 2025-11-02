// ------------------ KHỞI TẠO ------------------ //
document.addEventListener('DOMContentLoaded', function () {
    renderCart();

    const selectAllCheckbox = document.getElementById('selectAllCart');
    const deleteSelectedBtn = document.getElementById('deleteSelected');
    const cartItemsContainer = document.querySelector('.cart-items');

    // ------------------ NÚT CHỌN TẤT CẢ ------------------ //
    if (selectAllCheckbox) {
        selectAllCheckbox.addEventListener('change', function () {
            const checkboxes = document.querySelectorAll('.item-checkbox');
            checkboxes.forEach(cb => cb.checked = selectAllCheckbox.checked);
        });
    }

    // ------------------ NÚT XÓA ĐÃ CHỌN ------------------ //
    if (deleteSelectedBtn) {
        deleteSelectedBtn.addEventListener('click', function () {
            const checkboxes = document.querySelectorAll('.item-checkbox:checked');

            if (checkboxes.length === 0) {
                alert('Vui lòng chọn ít nhất một sản phẩm để xóa.');
                return;
            }

            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            const checkedIndexes = Array.from(checkboxes).map(cb => parseInt(cb.dataset.index));

            // Giữ lại những sản phẩm chưa được tick
            cart = cart.filter((_, index) => !checkedIndexes.includes(index));
            localStorage.setItem('cart', JSON.stringify(cart));

            renderCart();
        });
    }
});

// ------------------ HÀM THÊM VÀO GIỎ ------------------ //
function addToCart(name, price, image) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    const existingItem = cart.find(item => item.name === name);

    if (existingItem) {
        existingItem.quantity += 1;
    } else {
        cart.push({ name, price, image, quantity: 1 });
    }

    localStorage.setItem('cart', JSON.stringify(cart));
    alert('Đã thêm sản phẩm vào giỏ!');
}

// ------------------ HÀM HIỂN THỊ GIỎ HÀNG ------------------ //
function renderCart() {
    const cartItemsContainer = document.querySelector('.cart-items');
    const cartTotalEl = document.querySelector('.cart-total span');

    if (!cartItemsContainer) return; // Nếu không ở trang giỏ hàng thì bỏ qua

    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    cartItemsContainer.innerHTML = '';
    let total = 0;

    cart.forEach((item, index) => {
        const itemPrice = parseFloat(item.price.replace(/[^\d]/g, ''));
        total += itemPrice * item.quantity;

        const li = document.createElement('li');
        li.classList.add('cart-item');
        li.innerHTML = `
            <input type="checkbox" class="item-checkbox" data-index="${index}">
            <img src="${item.image}" alt="${item.name}">
            <div class="item-info">
                <strong>${item.name}</strong>
                <p>${item.price}₫</p>
            </div>
            <div class="quantity">
                <button class="decrease" data-index="${index}">-</button>
                <span>${item.quantity}</span>
                <button class="increase" data-index="${index}">+</button>
            </div>
        `;

        cartItemsContainer.appendChild(li);
    });

    cartTotalEl.textContent = total.toLocaleString('vi-VN') + ' ₫';

    // Gắn sự kiện tăng giảm
    attachQuantityButtons();
}

// ------------------ TĂNG GIẢM SỐ LƯỢNG ------------------ //
function attachQuantityButtons() {
    const increaseBtns = document.querySelectorAll('.increase');
    const decreaseBtns = document.querySelectorAll('.decrease');

    increaseBtns.forEach(btn => {
        btn.addEventListener('click', function () {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            const index = parseInt(this.dataset.index);
            cart[index].quantity += 1;
            localStorage.setItem('cart', JSON.stringify(cart));
            renderCart();
        });
    });

    decreaseBtns.forEach(btn => {
        btn.addEventListener('click', function () {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            const index = parseInt(this.dataset.index);
            if (cart[index].quantity > 1) {
                cart[index].quantity -= 1;
            } else {
                cart.splice(index, 1);
            }
            localStorage.setItem('cart', JSON.stringify(cart));
            renderCart();
        });
    });
}
