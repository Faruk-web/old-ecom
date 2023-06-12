<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>AMFL</title>
    <meta name="author" content="themesflat.com">
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/style.css')}}">
    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/colors/color1.css')}}" id="colors">
    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ asset('frontend/assets/icon/favicon.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('frontend/assets/icon/apple-touch-icon-158-precomposed.png')}}">
    <!--[if lt IE 9]>
        <script src="javascript/html5shiv.js"></script>
        <script src="javascript/respond.min.js"></script>
    <![endif]-->

</head>

<body class="header-fixed sidebar-right header-style-2 topbar-style-1 menu-has-search">

<div id="wrapper" class="animsition">
    <div id="page" class="clearfix">
        <!-- Header Wrap -->
        <div id="site-header-wrap">
            @include('frontend.body.top_bar')
            <!-- /#top-bar -->
            <!-- Header -->
            @include('frontend.body.header')
            <!-- /#site-header -->
        </div><!-- #site-header-wrap -->
      <!-- Featured Title -->
      <div id="featured-title" class="featured-title clearfix">
        <div id="featured-title-inner" class="container clearfix">
            <div class="featured-title-inner-wrap">
                <div id="breadcrumbs">
                    <div class="breadcrumbs-inner">
                        <div class="breadcrumb-trail">
                            <a href="{{ URL('/') }}" class="trail-begin">Home</a>
                            <span class="sep">|</span>
                            <a href="{{ url('/about') }}" class="trail-begin">About us </a>
                            <span class="sep">|</span>
                            <span class="trail-end">Director</span>
                        </div>
                    </div>
                </div>
                <div class="featured-title-heading-wrap">
                    <h1 class="feautured-title-heading">
                       BOARD OF DIRECTOR
                    </h1>
                </div>
            </div><!-- /.featured-title-inner-wrap -->
        </div><!-- /#featured-title-inner -->
    </div>
    <!-- End Featured Title -->
    <!-- Main Content -->
    <div id="main-content" class="site-main clearfix">
        <div id="content-wrap" class="container">
            <div id="site-content" class="site-content clearfix">
                <div id="inner-content" class="inner-content-wrap">
                    {{-- <div class="themesflat-spacer clearfix" data-desktop="61" data-mobile="60" data-smobile="60"></div> --}}
                    <div class="themesflat-headings style-2 clearfix">
                        <h2 class="heading">{{ $boardof_directors->director_name }}</h2>
                        <div class="sep has-width w80 accent-bg clearfix"></div>
                        <p class="sub-heading line-height-24 text-777 margin-top-28 margin-right-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <p class="sub-heading line-height-24 text-777 margin-top-28 margin-right-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    </div>
                    <div class="themesflat-spacer clearfix" data-desktop="28" data-mobile="35" data-smobile="35"></div>
                    <div class="themesflat-spacer clearfix" data-desktop="80" data-mobile="60" data-smobile="60"></div>
                </div><!-- /#inner-content -->
            </div><!-- /#site-content -->
            <div id="sidebar">
                <div class="themesflat-spacer clearfix" data-desktop="80" data-mobile="0" data-smobile="0"></div>
                <div id="inner-sidebar" class="inner-content-wrap">

                        <div class="inner">
                            <div class="gallery-item" >
                                <div class="inner">
                                    <div class="thumb">
                                        <img src="{{ asset($boardof_directors->director_image) }}" alt="Image">
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>
                <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="60" data-smobile="60"></div>
            </div><!-- /#sidebar -->
        </div><!-- /#content-wrap -->
    </div>
    <!-- /#main-content -->

        <!-- Footer -->
        @include('frontend.body.footer')
        <!-- /#footer -->

        <!-- Bottom -->
        @include('frontend.body.bottom')
        <!-- /#bottom -->

    </div><!-- /#page -->
</div><!-- /#wrapper -->

<a id="scroll-top"></a>

<!-- Javascript -->
<script src="{{ asset('frontend/assets/js/jquery.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/plugins.js')}}"></script>
<script src="{{ asset('frontend/assets/js/tether.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/animsition.js')}}"></script>
<script src="{{ asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/countto.js')}}"></script>
<script src="{{ asset('frontend/assets/js/equalize.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/jquery.isotope.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/owl.carousel2.thumbs.js')}}"></script>
<script src="{{ asset('frontend/assets/js/jquery.cookie.js')}}"></script>
<script src="{{ asset('frontend/assets/js/gmap3.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIEU6OT3xqCksCetQeNLIPps6-AYrhq-s&region=GB"></script>
<script src="{{ asset('frontend/assets/js/shortcodes.js')}}"></script>
<script src="{{ asset('frontend/assets/js/main.js')}}"></script>
<!-- Revolution Slider -->
<script src="{{ asset('frontend/includes/rev-slider/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{ asset('frontend/includes/rev-slider/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/rev-slider.js')}}"></script>
<!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading -->
<script src="{{ asset('frontend/includes/rev-slider/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{ asset('frontend/includes/rev-slider/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{ asset('frontend/includes/rev-slider/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{ asset('frontend/includes/rev-slider/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{ asset('frontend/includes/rev-slider/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{ asset('frontend/includes/rev-slider/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{ asset('frontend/includes/rev-slider/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{ asset('frontend/includes/rev-slider/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{ asset('frontend/includes/rev-slider/js/extensions/revolution.extension.video.min.js')}}"></script>

</body>
</html>

