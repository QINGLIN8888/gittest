<!-- Top Cart -->
<div id="top-cart" class="header-misc-icon me-lg-4">
    <a href="#" id="top-cart-trigger" onclick="openCartPopup()"><i class="bi-basket"></i></a>
    <div class="top-cart-content">
        <div class="top-cart-title">
            <h4 class="ls-0 text-transform-none">購物車</h4>
        </div>
        <div class="top-cart-items">
            <!-- 商品項目將由 JavaScript 動態插入 -->
        </div>
        <div class="top-cart-action border-default">
            <a href="{{route('user.auth.cart1')}}" class="button button-small m-0">檢視購物車</a>
            <span class="top-checkout-price">$0.00</span> <!-- 初始顯示為 $0.00 -->
        </div>
    </div>
</div><!-- #top-cart end -->

<!-- 購物車彈出窗口 -->
<div id="cart-popup" class="cart-popup" style="display: none;">
    <div class="cart-popup-content">
        <span class="close-popup" onclick="closeCartPopup()">&times;</span>
        <h4>購物車內容</h4>
        <div id="cart-popup-items">
            <!-- 彈出窗口中的商品項目將由 JavaScript 動態插入 -->
        </div>
        <a href="{{route('user.auth.cart1')}}" class="button button-small m-0">檢視購物車</a>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const cartData = JSON.parse(localStorage.getItem('cart') || '{}');
        updateCartDisplay(cartData);
    });

    function saveCartData(cartData) {
        localStorage.setItem('cart', JSON.stringify(cartData));
    }

    function updateCartDisplay(cartData) {
        const cartContainer = document.querySelector('#top-cart .top-cart-items');
        const cartPopupItems = document.querySelector('#cart-popup-items');
        const totalPriceElement = document.querySelector('#top-cart .top-checkout-price');
        let totalPrice = 0;

        cartContainer.innerHTML = '';
        cartPopupItems.innerHTML = '';

        for (const [productId, { name, price, quantity, image }] of Object.entries(cartData)) {
            const cartItem = document.createElement('div');
            cartItem.classList.add('top-cart-item');
            cartItem.innerHTML = `
                <div class="top-cart-item-image position-relative">
                    <a href="/product/${productId}"><img src="${image}" alt="${name}"></a>
                    <span class="position-absolute top-0 start-0 translate-middle bg-danger rounded-circle lh-1 border border-white text-white square square-xs text-center" onclick="removeFromCart('${productId}')">&times;</span>
                </div>
                <div class="top-cart-item-desc">
                    <div class="top-cart-item-desc-title">
                        <a href="/product/${productId}" class="fw-normal">${name}</a>
                        <span class="top-cart-item-price d-block">$${price}</span>
                    </div>
                    <div class="top-cart-item-quantity">x ${quantity}</div>
                </div>
            `;
            cartContainer.appendChild(cartItem);

            // Add to popup cart
            const popupItem = cartItem.cloneNode(true);
            cartPopupItems.appendChild(popupItem);

            // Calculate total price
            totalPrice += price * quantity;
        }

        totalPriceElement.textContent = `$${totalPrice.toFixed(0)}`;

        saveCartData(cartData);
    }

    function removeFromCart(productId) {
        const cartData = JSON.parse(localStorage.getItem('cart') || '{}');
        delete cartData[productId];
        localStorage.setItem('cart', JSON.stringify(cartData));
        updateCartDisplay(cartData); // 更新購物車顯示
        // 不需要關閉預覽購物車
    }

    function addToCart(productId, name, price, quantity, image) {
        const cartData = JSON.parse(localStorage.getItem('cart') || '{}');

        if (cartData[productId]) {
            cartData[productId].quantity += quantity; // Increase quantity if item already exists
        } else {
            cartData[productId] = { name, price, quantity, image };
        }

        localStorage.setItem('cart', JSON.stringify(cartData));
        updateCartDisplay(cartData); // Update cart display in the preview section
        openCartPopup(); // 自動打開購物車彈出窗口
    }

    function openCartPopup() {
        console.log('Opening cart popup'); // Add this line
        document.getElementById('cart-popup').style.display = 'flex';
    }

    function closeCartPopup() {
        console.log('Closing cart popup'); // Add this line
        document.getElementById('cart-popup').style.display = 'none';
    }
</script>



<style>
    .cart-popup {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 1000;
    }
    .cart-popup-content {
        background: white;
        padding: 20px;
        border-radius: 8px;
        width: 90%; /* 增加寬度 */
        max-width: 900px; /* 增加最大寬度 */
        position: relative;
    }
    .close-popup {
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
        font-size: 24px;
        color: red;
    }
</style>