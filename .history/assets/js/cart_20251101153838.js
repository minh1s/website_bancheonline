// Giỏ hàng lưu trong localStorage
let cart = JSON.parse(localStorage.getItem('cart')) || [];

// Hàm thêm sản phẩm từ menu
function addToCart(name, price, image) {
    // Chuyển giá sang số
    let numericPrice = parseInt(price.replace(/[^\d]/g, ''));
    
    // Kiểm tra sản phẩm đã có trong giỏ chưa
    let existing = cart.find(item => item.name === name);
    if(existing){
        existing.qty += 1;
    } else {
        cart.push({name, price: numericPrice, image, qty: 1});
    }
    localStorage.setItem('cart', JSON.stringify(cart));
    alert(`${name} đã được thêm vào giỏ hàng!`);
}

// Hàm hiển thị giỏ hàng
function renderCart(){
    let cartContainer = document.querySelector('.cart-items');
    cartContainer.innerHTML = '';

    let grandTotal = 0;

    cart.forEach((item, index) => {
        let itemTotal = item.price * item.qty;
        grandTotal += itemTotal;

        let li = document.createElement('li');
        li.className = 'cart-item';
        li.innerHTML = `
            <img src="${item.image}" alt="${item.name}">
            <div class="item-info">
                <h3>${item.name}</h3>
                <p class="price">Đơn giá: ${item.price.toLocaleString()}₫</p>
                <div class="quantity">
                    <button class="minus">-</button>
                    <span class="qty">${item.qty}</span>
                    <button class="plus">+</button>
                </div>
                <p class="total">Tổng: ${itemTotal.toLocaleString()}₫</p>
            </div>
            <button class="remove">Xóa</button>
        `;

        cartContainer.appendChild(li);

        // Thêm sự kiện nút
        li.querySelector('.plus').addEventListener('click', () => {
            item.qty += 1;
            saveAndRender();
        });
        li.querySelector('.minus').addEventListener('click', () => {
            if(item.qty > 1) item.qty -= 1;
            saveAndRender();
        });
        li.querySelector('.remove').addEventListener('click', () => {
            cart.splice(index, 1);
            saveAndRender();
        });
    });

    document.getElementById('grand-total').innerText = grandTotal.toLocaleString() + '₫';
}

// Lưu và render lại
function saveAndRender(){
    localStorage.setItem('cart', JSON.stringify(cart));
    renderCart();
}

// Khi load trang giỏ hàng
document.addEventListener('DOMContentLoaded', () => {
    renderCart();
});
