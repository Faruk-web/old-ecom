<footer class="footer_section electronic_footer clearfix">

    @php
    $setting = App\Models\SiteSetting::find(1);
     @endphp

    <div class="footer_widget_area clearfix">
        <div class="container maxw_1600">
            <div class="row justify-content-lg-between">
                <div class="col-lg-3 col-md-4">
                    <div class="footer_widget footer_about">
                        <div class="brand_logo mb_30">
                            {{-- <a href="index.html"> --}}
                             {{-- <img src="{{asset($setting->logo)}}" srcset="{{asset($setting->logo)}}" alt="logo_not_found"> --}}
                            {{-- </a> --}}
                        </div>
                        <p class="mb_30">
                            {{ $setting->company_address }}
                        </p>
                        <p>
                            {{ $setting->email }}
                        </p>

                        <div class="footer_electronic_hotline mb_30">
                            <i class="fal fa-headset"></i>
                            <h4>GOT QUESTION? CALL BD 24/7!</h4>
                            <span>{{ $setting->phone_one }}</span>

                        </div>

                        <ul class="circle_social_links ul_li clearfix">
                            <li><a href="{{ $setting->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{ $setting->twitter }}"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#!"><i class="fab fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="footer_widget footer_useful_links clearfix">
                        <h3 class="footer_widget_title text-white text-uppercase">FIND IT FAST</h3>
                        <ul class="ul_li_block clearfix">
                            <li><a href="#!">Laptops, Ultrabooks & Computers</a></li>
                            <li><a href="#!">Cameras & Photography</a></li>
                            <li><a href="#!">Smart Phones & Tablets</a></li>
                            <li><a href="#!">Video Games & Consoles</a></li>
                            <li><a href="#!">TV & Audio</a></li>
                            <li><a href="#!">Gadgets</a></li>
                            <li><a href="#!">Car Electronic & GPS</a></li>

                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4">
                    <div class="footer_widget footer_useful_links clearfix">
                        <h3 class="footer_widget_title text-white text-uppercase">CUSTOMER CARE</h3>
                        <ul class="ul_li_block clearfix">
                            <li><a href="#!">About Us</a></li>
                            <li><a href="{{route('contact')}}">Contact US</a></li>
                            <li><a href="#!">Track your Order</a></li>
                            <li><a href="#!">Wishlist</a></li>
                            <li><a href="#!">Customer Service</a></li>
                            <li><a href="#!">Returns/Exchange</a></li>
                            <li><a href="#!">FAQs</a></li>
                            <li><a href="#!">Product Support</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 offset-lg-1 col-md-12">
                    <div class="footer_widget footer_recent_post">
                        <h3 class="footer_widget_title text-white text-uppercase mb-0">WE USING SAFE  PAYMENTS</h3>
                        <div class="row justify-content-lg-between">
                            <div class="col-lg-4 col-md-4">
                                <div class="electronic_product_small">
                                    <a class="item_image" href="#!">
                                        <img src="{{asset('frontend/assets/images')}}/payment-methods/bkash.jpg" alt="image_not_found">
                                    </a>
                                </div>
                            </div>
                            <!-- col-end -->
                            <div class="col-lg-4 col-md-4">
                                <div class="electronic_product_small">
                                    <a class="item_image" href="#!">
                                        <img src="{{asset('frontend/assets/images')}}/payment-methods/Nagad.png" alt="image_not_found">
                                    </a>
                                </div>
                            </div>
                            <!-- col-end -->
                            <div class="col-lg-4 col-md-4">
                                <div class="electronic_product_small">
                                    <a class="item_image" href="#!">
                                        <img src="{{asset('frontend/assets/images')}}/payment-methods/rocket.png" alt="image_not_found">
                                    </a>
                                </div>
                            </div>
                            <!-- col-end -->
                            <div class="col-lg-4 col-md-4">
                                <div class="electronic_product_small">
                                    <a class="item_image" href="#!">
                                        <img src="{{asset('frontend/assets/images')}}/payment-methods/paypal.png" alt="image_not_found">
                                    </a>
                                </div>
                            </div>
                            <!-- col-end -->
                            <div class="col-lg-4 col-md-4">
                                <div class="electronic_product_small">
                                    <a class="item_image" href="#!">
                                        <img src="{{asset('frontend/assets/images')}}/payment-methods/skrill.png" alt="image_not_found">
                                    </a>
                                </div>
                            </div>
                            <!-- col-end -->
                            <div class="col-lg-4 col-md-4">
                                <div class="electronic_product_small">
                                    <a class="item_image" href="#!">
                                        <img src="{{asset('frontend/assets/images')}}/payment-methods/discover.png" alt="image_not_found">
                                    </a>
                                </div>
                            </div>
                            <!-- col-end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer_bottom text-center bg_black clearfix">
        <div class="container maxw_1600">
            <p class="copyright_text mb-0">Copyright © 2021, <a href="#!" class="author_link">Classy single Vendor Ecommcerce.</a> All Rights Reserved</p>
        </div>
    </div>
</footer>
