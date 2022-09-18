@extends('frontend.main_master')

 @section('index')

 	<!-- register_section - start
			================================================== -->
			<section class="register_section sec_ptb_140 parallaxie clearfix" data-background="assets/images/backgrounds/bg_23.jpg">
				<div class="container pt_top_250">
					<div class="reg_form_wrap signup_form" data-background=" {{ asset('frontend/assets/images/reg_bg_02.png') }} ">
						<form action="#">
							<div class="reg_form">
								<h2 class="form_title text-uppercase">Register</h2>
								<div class="form_item">
									<input type="text" name="firstname" placeholder="First Name">
								</div>
								<div class="form_item">
									<input type="text" name="lastname" placeholder="Last Name">
								</div>
								<div class="form_item">
									<input type="text" name="company" placeholder="Company Name">
								</div>
								<div class="form_item">
									<input type="email" name="email" placeholder="Email">
								</div>
								<div class="form_item">
									<input type="tel" name="phone" placeholder="phone">
								</div>
								<div class="form_item">
									<input type="password" name="password" placeholder="Password">
								</div>
								<div class="form_item">
									<input type="password" name="password" placeholder="Confirm Password">
								</div>
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
			</section>
			<!-- register_section - end
			================================================== -->


            

@endsection
