@extends('layout.master')

@section('content')

<!-- Content
============================================= -->
<div id="content" style="background-color: #fff7ec;">
    <div class="content-wrap">

        <div class="container">

            <div class="row gutter-40">
                <div class="col-xl-8">
                    <table class="table cart mb-0 rounded-6">
                        <thead>
                            <tr>
                                <th class="fw-normal cart-product-thumbnail">&nbsp;</th>
                                <th class="fw-normal cart-product-name">商品</th>
                                <th class="fw-normal cart-product-price">單價</th>
                                <th class="fw-normal cart-product-quantity">數量</th>
                                <th class="fw-normal cart-product-subtotal">總價</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- 商品行會由 JavaScript 動態生成 -->
                        </tbody>
                        <tr class="cart_item">
                            <td colspan="2">
                                <div class="row gx-2">
                                    <div class="col-md-8">
                                        <input type="text" value="" class="form-control rounded-0 bg-color-2 text-center text-md-start" placeholder="輸入優惠代碼..">
                                    </div>
                                    <div class="col-md-4 mt-3 mt-md-0">
                                        <a href="#" 
                                           class="button button-small button-border mt-2 m-md-0" 
                                           style="background-color: white; color: black; transition: background-color 0.3s;"
                                           onmouseover="this.style.backgroundColor='#304109'; this.style.color='white';"
                                           onmouseout="this.style.backgroundColor='white'; this.style.color='#304109';">
                                            確認優惠代碼
                                        </a>
                                    </div>
                                </div>
                            </td>
                            <td colspan="3" class="text-md-end">
                                <a href="#" 
                                   class="button button-small button-border mt-2 m-md-0" 
                                   style="background-color: white; color: black; transition: background-color 0.3s;"
                                   onmouseover="this.style.backgroundColor='#304109'; this.style.color='white';"
                                   onmouseout="this.style.backgroundColor='white'; this.style.color='#304109';">
                                    購物車更新                                
                                </a>
                            </td>
                        </tr>
                    </table>
                </div>

                <div class="col-xl-4">
                    <div class="grid-inner p-5 rounded-6" style="background-color: rgba(48, 65, 9, 0.1);">
                        <div class="row col-mb-30">
                            <div class="col-12">
                                <h4>結帳</h4>
                                <div class="table-responsive">
                                    <table class="table cart cart-totals" style="background-color: transparent;">
                                        <tbody>
                                            <tr class="cart_item">
                                                <td class="cart-product-name">
                                                    <h5 style="--cnvs-btn-padding-y: 6px;">商品總金額</h5>
                                                </td>
                                                <td class="cart-product-name text-end">
                                                    <span class="amount" id="total-price">$0.00</span>
                                                </td>
                                            </tr>
                                            <tr class="cart_item">
                                                <td class="cart-product-name">
                                                    <h5 style="--cnvs-btn-padding-y: 6px;">運費總金額</h5>
                                                </td>
                                                <td class="cart-product-name text-end">
                                                    <span class="amount" id="shipping-cost">$60.00</span>
                                                </td>
                                            </tr>
                                            <tr class="cart_item">
                                                <td class="cart-product-name">
                                                    <h5 style="--cnvs-btn-padding-y: 6px;">總付款金額</h5>
                                                </td>
                                                <td class="cart-product-name text-end">
                                                    <span class="amount color lead fw-medium" style="font-weight: bold; color: #304109;" id="total-payment">$0.00</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-12">
                                <a href="/user/auth/orderfinish" 
                                    class="button button-small button-border mt-2 m-md-0" 
                                    style="background-color: white; color: black; transition: background-color 0.3s;"
                                    onmouseover="this.style.backgroundColor='white'; this.style.color='#304109';"
                                    onmouseout="this.style.backgroundColor='#304109'; this.style.color='white';"
                                    onclick="clearCart()">
                                        下訂單
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- #content end -->

<script>

        function clearCart() {
            // 清空購物車數據
            localStorage.removeItem('cart');

        }
            function Cart1(cartData) {
        const cartTableBody = document.querySelector('.cart tbody');
        cartTableBody.innerHTML = ''; // 清空表格

        let totalPrice = 0;
        const shippingCost = 60; // 固定運費

        for (const [productId, { name, price, quantity, image }] of Object.entries(cartData)) {
            const row = document.createElement('tr');
            row.classList.add('cart_item');
            row.innerHTML = `
                <td class="cart-product-thumbnail">
                    <a href="/product/${productId}" class="position-relative">
                        <img class="border-0" width="64" height="64" src="${image}" alt="${name}">
                        <span class="position-absolute top-0 start-0 translate-middle bg-danger rounded-circle lh-1 border border-white text-white square square-xs text-center">
                            <span class="visually-hidden">Remove Product</span>&times;
                        </span>
                    </a>
                </td>
                <td class="cart-product-name">
                    <a class="fw-normal" href="/product/${productId}">${name}</a>
                </td>
                <td class="cart-product-price">
                    <span class="amount">$${price.toFixed(0)}</span>
                </td>
                <td class="cart-product-quantity cart cart-border cart-border-2">
                    <div class="quantity" style="border-color: #3041;">
                        <button type="button" class="minus" onclick="changeQuantity('${productId}', -1)"><i class="uil uil-minus"></i></button>
                        <input type="number" step="1" min="1" name="quantity" value="${quantity}" title="Qty" class="qty border-0">
                        <button type="button" class="plus" onclick="changeQuantity('${productId}', 1)"><i class="uil uil-plus"></i></button>
                    </div>
                </td>
                <td class="cart-product-subtotal">
                    <span class="amount">$${(price * quantity).toFixed(0)}</span>
                </td>
            `;
            cartTableBody.appendChild(row);

            totalPrice += price * quantity;
        }

        // 更新總金額
        updateTotalPrice(totalPrice, shippingCost);
    }

    function updateTotalPrice(totalPrice, shippingCost) {
        const totalPriceElement = document.querySelector('#total-price');
        const shippingCostElement = document.querySelector('#shipping-cost');
        const totalPaymentElement = document.querySelector('#total-payment');

        totalPriceElement.textContent = `$${totalPrice.toFixed(0)}`;
        shippingCostElement.textContent = `$${shippingCost.toFixed(0)}`;
        totalPaymentElement.textContent = `$${(totalPrice + shippingCost).toFixed(0)}`;
    }

    document.addEventListener('DOMContentLoaded', () => {
        const cartData = JSON.parse(localStorage.getItem('cart') || '{}');
        Cart1(cartData);
    });

    function changeQuantity(productId, delta) {
        const cartData = JSON.parse(localStorage.getItem('cart') || '{}');
        if (cartData[productId]) {
            cartData[productId].quantity += delta;
            if (cartData[productId].quantity <= 0) {
                delete cartData[productId];
            }
            saveCartData(cartData);
            Cart1(cartData);
        }
    }

    function saveCartData(cartData) {
        localStorage.setItem('cart', JSON.stringify(cartData));
    }
</script>

@endsection