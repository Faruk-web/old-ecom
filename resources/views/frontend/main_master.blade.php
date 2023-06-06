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
    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/colors/color1.css') }}" id="colors">
    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ asset('frontend/assets/icon/favicon.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('frontend/assets/icon/apple-touch-icon-158-precomposed.png') }}">
    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/style.css') }}">
    <!--[if lt IE 9]>
        <script src="javascript/html5shiv.js"></script>
        <script src="javascript/respond.min.js"></script>
    <![endif]-->

</head>
@php
    $p = url('');
    $pp = url()->current();
    // dd($p);
@endphp
@if($pp == $p)
<body class="header-fixed page no-sidebar header-style-3 topbar-style-3 site-header-absolute menu-has-search">
@else
<body class="header-fixed page no-sidebar header-style-2 topbar-style-2 menu-has-search">
@endif

<div id="wrapper" class="animsition">
    <div id="page" class="clearfix">
        <!-- Header Wrap -->
        <div id="site-header-wrap">
            <!-- Top Bar -->
            @include('frontend.body.top_bar')
            <!-- /#top-bar -->
            <!-- Header -->
            @include('frontend.body.header')
            <!-- /#site-header -->
        </div><!-- #site-header-wrap -->

        <!-- Main Content -->
        @yield('index')
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
<!-- Javascript -->
<script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/plugins.js') }}"></script>
<script src="{{ asset('frontend/assets/js/tether.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/animsition.js') }}"></script>
<script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/countto.js') }}"></script>
<script src="{{ asset('frontend/assets/js/equalize.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery.isotope.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/owl.carousel2.thumbs.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery.cookie.js') }}"></script>
<script src="{{ asset('frontend/assets/js/gmap3.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIEU6OT3xqCksCetQeNLIPps6-AYrhq-s&region=GB"></script>
<script src="{{ asset('frontend/assets/js/shortcodes.js') }}"></script>
<script src="{{ asset('frontend/assets/js/main.js') }}"></script>

<!-- Revolution Slider -->
<script src="{{ asset('frontend/includes/rev-slider/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('frontend/includes/rev-slider/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/rev-slider.js') }}"></script>
<!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading -->
<script src="{{ asset('frontend/includes/rev-slider/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('frontend/includes/rev-slider/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('frontend/includes/rev-slider/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('frontend/includes/rev-slider/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('frontend/includes/rev-slider/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('frontend/includes/rev-slider/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('frontend/includes/rev-slider/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('frontend/includes/rev-slider/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('frontend/includes/rev-slider/js/extensions/revolution.extension.video.min.js') }}"></script>

</body>
</html>

