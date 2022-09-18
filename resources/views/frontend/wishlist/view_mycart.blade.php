@extends('frontend.main_master')

 @section('index')
 @include('frontend.body.mobile_sidbar_menu')

<section class="profile">
    <div class="container">
    <div class="row profile-wrapper">
        <div class="col-lg-2">
            @include('frontend.common.user_sidebar')
        </div>
        <div class="container pt_top_0 col-lg-10">

            <ul class="checkout_step ul_li clearfix">
                <li class="active"><a href=""><span>01.</span> Shopping Cart</a></li>
                <li><a href=""><span>02.</span> Checkout</a></li>
                <li><a href=""><span>03.</span> Order Completed</a></li>
            </ul>

            <div class="cart_table mb_50">
                <table class="table">
                    <thead class="text-uppercase bg-white border-bottom">
                        <tr>
                            <th class="cart-romove item">Image</th>
                            <th class="cart-description item">Name</th>
                            <th class="cart-product-name item">Color</th>
                            <th class="cart-edit item">Size</th>
                            <th class="cart-qty item">Quantity</th>
                            <th class="cart-sub-total item">Subtotal</th>
                            <th class="cart-total last-item">Remove</th>
                        </tr>
                    </thead>
                    <tbody id="cartPage">

                    </tbody>
                </table>
            </div>

            <div class="coupon_wrap mb_50 ">
                <div class="row justify-content-lg-start pt-10">
                    @if(Session::has('coupon'))

                    @else
                    <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12" id="couponField">
                        <div class="coupon_form">
                            <div class="form_item mb-0">
                                <input type="text" class="coupon" placeholder="Input You Coupon" id="coupon_name">
                            </div>
                            <button type="submit" class="custom_btn bg_success text-uppercase" onclick="applyCoupon()">Apply Coupon</button>
                        </div>
                    </div>
                    @endif

                </div>
                <div class="row justify-content-lg-end">
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="cart_pricing_table pt-0 text-uppercase" data-bg-color="#f2f3f5">
                            <h3 class="table_title text-center" data-bg-color="#ededed">Cart Total</h3>
                            <ul class="ul_li_block clearfix" id="couponClaFiled">
                                <li><span>Subtotal</span> <span>$197.99</span></li>
                                <li><span>Total</span> <span>$197.99</span></li>
                            </ul>
                            <a href="{{ route('checkout') }}" type="submit" class="custom_btn bg_success">Proceed to Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>


<br>
 @include('frontend.body.brands')
</div>

@endsection
