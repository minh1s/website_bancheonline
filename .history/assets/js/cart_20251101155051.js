// Thêm sản phẩm vào giỏ
function addToCart(name, price, image) {
    // Chuẩn hóa giá: loại bỏ dấu . và ₫
    let cleanPrice = parseInt(price.replace(/[^\d]/g, ''));

    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    let existing = cart.find(item => item.name === name);

    if (existing) {
        existing.qty += 1;
    } else {
        cart.push({ name, price: cleanPrice, image, qty: 1 });
    }

    localStorage.setItem('cart', JSON.stringify(cart));
    alert(`${name} đã được thêm vào giỏ hàng!`);
}

// Hiển thị giỏ hàng trong trang cart.php
function displayCart() {
    const cartContainer = document.querySelector('.cart-items');
    const cartTotal = document.querySelector('.cart-total');
    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    cartContainer.innerHTML = '';
    let total = 0;

    cart.forEach((item, index) => {
        total += item.price * item.qty;

        cartContainer.innerHTML += `
            <div class="cart-item">
                <input type="checkbox" class="cart-select">
                <img src="${item.image}" alt="${item.name}" class="cart-img">
                <span class="cart-name">${item.name}</span>
                <span class="cart-price">${item.price.toLocaleString()}₫</span>
                <div class="cart-qty">
                    <button class="minus" onclick="changeQty(${index}, -1)">-</button>
                    <span>${item.qty}</span>
                    <button class="plus" onclick="changeQty(${index}, 1)">+</button>
                </div>
                <button class="remove-item" onclick="removeFromCart(${index})">❌</button>
            </div>
        `;
    });

    cartTotal.textContent = total.toLocaleString() + ' ₫';
}

// Thay đổi số lượng
function changeQty(index, delta) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    if (cart[index]) {
        cart[index].qty += delta;
        if (cart[index].qty <= 0) cart.splice(index, 1);
        localStorage.setItem('cart', JSON.stringify(cart));
        displayCart();
    }
}

// Xóa sản phẩm
function removeFromCart(index) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    cart.splice(index, 1);
    localStorage.setItem('cart', JSON.stringify(cart));
    displayCart();
}

// Gọi khi load trang cart
if (document.querySelector('.cart-items')) {
    displayCart();
}
