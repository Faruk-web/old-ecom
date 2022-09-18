@extends('frontend.main_master')

 @section('index')

 {{-- ajax  --}}
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<!-- ================= Checkout Section Start================ -->
 <section class="checkout_section sec_ptb_140 clearfix">
    <div class="container pt_top_0">
        <ul class="checkout_step ul_li clearfix">
            <li class="activated"><a href=""><span>01.</span> Shopping Cart</a></li>
            <li class="active"><a href=""><span>02.</span> Checkout</a></li>
            <li><a href=""><span>03.</span> Order Completed</a></li>
        </ul>

        <div class="billing_form mb_50">
            <h3 class="form_title mb_30">Billing details</h3>

            <form class="register-form" method="POST"  action="{{ route('checkout.store') }}">
                @csrf

                <div class="form_wrap">


                    <div class="form_item">
                        <span class="input_title">Your Full Name<sup>*</sup></span>
                        <input type="text" name="shipping_name" value="{{ Auth::user()->name }}" placeholder="Your Full Name">
                    </div>

                    <div class="form_item">
                        <span class="input_title">Email Address<sup>*</sup></span>
                        <input type="email" name="shipping_email" value="{{ Auth::user()->email }}" placeholder="Your Email">
                    </div>

                    <div class="form_item">
                        <span class="input_title">Phone<sup>*</sup></span>
                        <input type="number" name="shipping_phone" value="{{ Auth::user()->phone }}" placeholder="Your Phone Number">
                    </div>

                    <div class="form_item">
                        <span class="input_title">Postcode / Zip<sup>*</sup></span>
                        <input type="text" name="post_code" placeholder="Post Code" required="">
                    </div>





                    <div class="option_select">
                        <span class="input_title">Division Select<sup>*</sup></span>
                        <select name="cdivision_id" required="">
                            <option value="" selected="" disabled="">Select Division</option>
                            @foreach($divisions as $item)
                            <option value="{{ $item->id }}">{{ $item->division_name }}</option>
                            @endforeach
                        </select>
                        @error('cdivision_id')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="option_select" id="option_district_id">
                        <span class="input_title">District Select<sup>*</sup></span>
                        <select name="cdistrict_id" id="cdistrict_id" required="">

                        </select>
                        @error('cdistrict_id')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="option_select" id="option_state_id">
                        <span class="input_title">State Select<sup>*</sup></span>
                        <select name="cstate_id" class="cstate_id" id="cstate_id" required="">


                        </select>
                        @error('cstate_id')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form_item mb-0">
                        <span class="input_title">Order notes<sup>*</sup></span>
                        <textarea cols="30" rows="5" placeholder="Notes" name="notes"></textarea>
                    </div>



                </div>

        </div>


{{-- #############################     Coupons Form Start    ############################ --}}

        <div class="billing_form">
            <h3 class="form_title mb_30">Your Checkout Progress</h3>

                <div class="form_wrap">
                    <div class="checkout_table">
                        <table class="table text-center mb_50">
                            <thead class="text-uppercase text-uppercase">
                                <tr>
                                    <th>Product Image</th>
                                    <th>Quantity</th>
                                    <th>Color</th>
                                    <th>Size</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($carts as $item)
                                <tr>
                                    <td>
                                        <div class="cart_product justify-content-center">
                                            <div class="item_image">
                                                <img src="{{ asset($item->options->image) }}">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="price_text">( {{ $item->qty }} )</span>
                                    </td>
                                    <td>
                                        <span class="quantity_text">{{ $item->options->color }}</span>
                                    </td>
                                    <td><span class="total_price">{{ $item->options->size }}</span></td>
                                </tr>
                                @endforeach

                                <tr>
                                    @if(Session::has('coupon'))

                                    <strong>SubTotal: </strong> ${{ $cartTotal }} <hr>

                                    <strong>Coupon Name : </strong> {{ session()->get('coupon')['coupon_name'] }}
                                    ( {{ session()->get('coupon')['coupon_discount'] }} % )
                                    <hr>

                                    <strong>Coupon Discount : </strong> ${{ session()->get('coupon')['discount_amount'] }}
                                    <hr>

                                    <strong>Grand Total : </strong> ${{ session()->get('coupon')['total_amount'] }}
                                    <hr>

                                    @else
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <span class="subtotal_text">Subtotal :</span>
                                    </td>
                                    <td><span class="total_price">$ {{ $cartTotal }}</span></td>


                                    @endif
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <span class="subtotal_text">Grand Total :</span>
                                    </td>
                                    <td><span class="total_price">$ {{ $cartTotal }}</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                            {{-- #############################     Coupons Form end    ############################ --}}

                            {{-- #############################    Payment Method start    ############################ --}}
                    <div class="billing_payment_mathod">
                        <ul class="">
                            <li>
                                <div class="checkbox_item mb-0 pl-0">
                                    <label for="check_payments"><input name="payment_method" value="stripe" type="radio">Stripe<img src="{{ asset('frontend/assets/images/payments/4.png') }}"></label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox_item mb-0 pl-0">
                                    <label for="cash_delivery"><input name="payment_method" value="cash" type="radio"> Cash On Delivery <img src="{{ asset('frontend/assets/images/payments/6.png') }}"></label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox_item mb-0 pl-0">
                                    <label for="paypal_checkbox"><input name="payment_method" value="card" type="radio">Card<a href="#!"><img src="{{ asset('frontend/assets/images/payments/3.png') }}"></a></label>
                                </div>
                            </li>
                        </ul>
                        <button type="submit" class="custom_btn bg_success">PLACE ORDER</button>
                    </div>

                    {{-- #############################    Payment Method end    ############################ --}}

                </div>
            </form>
        </div>

    </div>
</section>
<!-- ================= Checkout Section End================ -->





{{-- select discrict and state --}}











@endsection
