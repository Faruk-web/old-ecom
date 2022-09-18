@extends('frontend.main_master')

 @section('index')

<section class="register_section sec_ptb_140 has_overlay parallaxie clearfix" data-background="#">
    <div class="overlay" data-bg-color="rgba(55, 55, 55, 0.75)"></div>
    <div class="container-fluid">
        <div class="row ">

            <!-- ======================= login_section - start =========================== -->
            <div class="col-lg-6">
                <div  class="reg_form_wrap login_form" data-background="{{ asset('frontend/assets/images/reg_bg_01.png') }}">
                    <form method="POST" action="{{ isset($guard) ? url($guard.'/login') : route('login') }}">
                        @csrf
                        <div class="reg_form">
                            <h2 class="form_title text-uppercase text-center">Login</h2>
                            <div class="form_item">
                                <input id="username_input" type="email" name="email" placeholder="Enter Your Email">
                                <label for="username_input"><i class="fal fa-envelope"></i></label>
                            </div>
                            <div class="form_item">
                                <input id="password_input" type="password" name="password" placeholder="password">
                                <label for="password_input"><i class="fal fa-unlock-alt"></i></label>
                            </div>
                            <a class="forget_pass text-uppercase mb_30" href="#!">Forgot password?</a>
                            <button type="submit" class="custom_btn bg_default_red text-uppercase mb_50">Login</button>

                            <div class="social_wrap mb_100">
                                <h4 class="small_title_text mb_15 text-center text-uppercase">Or Login With</h4>
                                <ul class="circle_social_links ul_li_center clearfix">
                                    <li><a data-bg-color="#3b5998" href="{{ route('login.facebook')}}"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a data-bg-color="#1da1f2" href="#!"><i class="fab fa-twitter"></i></a></li>
                                    <li><a data-bg-color="#ea4335" href="{{ route('login.google')}}"><i class="fab fa-google-plus-g"></i></a></li>
                                </ul>
                            </div>

                            <div class="create_account text-center">
                                <h4 class="small_title_text text-center text-uppercase">Have not account yet?</h4>
                                <a class="create_account_btn text-uppercase" href="#!">Sign Up</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- ======================= login_section - end =========================== -->


            <!-- ======================= register_section - start =========================== -->
            <div class="col-lg-6">
                <div class="reg_form_wrap signup_form" data-background=" {{ asset('frontend/assets/images/reg_bg_02.png') }} ">
                    <form method="POST" action="{{ isset($guard) ? url($guard.'/login') : route('register') }}">
                        @csrf
                        <div class="reg_form">
                            <h2 class="form_title text-uppercase">Register</h2>
                            <div class="form_item">
                                <input type="text" name="name" id="name" placeholder="Your Name">
                            </div>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <div class="form_item">
                                <input type="email" name="email" id="email" placeholder="Your Email">
                            </div>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <div class="form_item">
                                <input type="number" name="phone" id="phone" placeholder="Your Phone Number">
                            </div>
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <div class="form_item">
                                <input type="password" name="password" id="password" placeholder="Your Password">
                            </div>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <div class="form_item">
                                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password">
                            </div>
                            @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <div class="checkbox_item mb_30">
                                <label for="agree_checkbox"><input id="agree_checkbox" type="checkbox"> I agree to the Terms of User</label>
                            </div>
                            <button type="submit" class="custom_btn bg_default_red text-uppercase mb_50">Create Account</button>
                            <div class="create_account text-center">
                                <h4 class="small_title_text text-center text-uppercase">Have not account yet?</h4>
                                <a class="create_account_btn text-uppercase" href="#!">Login</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
             <!-- ========================= register_section - end ========================= -->
        </div>
    </div>
</section>
<!-- register_section - end
================================================== -->


@endsection
