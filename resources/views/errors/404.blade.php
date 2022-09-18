@extends('frontend.main_master')

 @section('index')   

 <main>


	<!-- sidebar mobile menu & sidebar cart - start
	================================================== -->
	
	<!-- sidebar mobile menu & sidebar cart - end
	================================================== -->


	<!-- breadcrumb_section - start
	================================================== -->
	<section class="breadcrumb_section text-white text-center text-uppercase d-flex align-items-end clearfix" data-background="{{asset('frontend/assets/images/breadcrumb/bg_01.jpg')}}">
		<div class="overlay" data-bg-color="#1d1d1d"></div>
		<div class="container">
			<h1 class="page_title text-white">Login page</h1>
			<ul class="breadcrumb_nav ul_li_center clearfix">
				<li><a href="#!">Home</a></li>
				<li>Pages</li>
				<li>404</li>
			</ul>
		</div>
	</section>
	<!-- breadcrumb_section - end
	================================================== -->


	<!-- error_section - start
	================================================== -->
	<section class="error_section sec_ptb_140 clearfix">
		<div class="container">
			<div class="error_content text-center">
				<h2 class="error_text d-flex align-items-center justify-content-center">4 <span><img src="{{asset('frontend/assets/images/404.png')}}" alt="image_not_found"></span> 4</h2>
				<h3>PAGE NOT FOUND</h3>
				<p>THE PAGE YOU ARE LOOKING FOR DOES NOT EXIST</p>
				<a class="goback_home" href="{{route('user.index')}}">PLEASE RETURN TO HOME PAGE</a>
			</div>
		</div>
	</section>
	<!-- error_section - end
	================================================== -->


</main>


@endsection