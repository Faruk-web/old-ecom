@extends('frontend.main_master')

@section('index')
 <!-- Featured Title -->
 <div id="featured-title" class="featured-title clearfix">
    <div id="featured-title-inner" class="container clearfix">
        <div class="featured-title-inner-wrap">
            <div id="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="breadcrumb-trail">
                        <a href="{{ url('/') }}" class="trail-begin">Home</a>
                        <span class="sep">|</span>
                        <span class="trail-end">Contact</span>
                    </div>
                </div>
            </div>
            <div class="featured-title-heading-wrap">
                <h1 class="feautured-title-heading">
                    Contact Us
                </h1>
            </div>
        </div><!-- /.featured-title-inner-wrap -->
    </div><!-- /#featured-title-inner -->
</div>
<!-- End Featured Title -->

<!-- Main Content -->
<div id="main-content" class="site-main clearfix">
    <div id="content-wrap">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
               <div class="page-content">
                   <!-- CONTACT -->
                    <div class="row-contact">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="themesflat-spacer clearfix" data-desktop="61" data-mobile="60" data-smobile="60"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="themesflat-headings style-2 clearfix">
                                        <h2 class="heading">CONTACT US</h2>
                                        <div class="sep has-width w80 accent-bg clearfix"></div>
                                        <p class="sub-heading">Are you interested in finding out how Autora Construction Services can make your project. For more information on our services please contact us.</p>
                                    </div>
                                    <div class="themesflat-spacer clearfix" data-desktop="36" data-mobile="35" data-smobile="35"></div>
                                    <div class="themesflat-contact-form style-2 clearfix">
                                        <form method="POST" action="{{ route('contactUs.send')  }}" enctype="multipart/form-data">
                                            @csrf
                                            <span class="wpcf7-form-control-wrap your-name">
                                                <input type="text" tabindex="1" id="name" name="name" value="" class="wpcf7-form-control" placeholder="Name*" required>
                                            </span>
                                            <span class="wpcf7-form-control-wrap your-phone">
                                                <input type="text" tabindex="2" id="phone" name="phone" value="" class="wpcf7-form-control" placeholder="Phone">
                                            </span>
                                            <span class="wpcf7-form-control-wrap your-email">
                                                <input type="email" tabindex="3" id="email" name="email" value="" class="wpcf7-form-control" placeholder="Your Email*" required>
                                            </span>
                                            <span class="wpcf7-form-control-wrap your-subject">
                                                <input type="text" tabindex="4" id="subject" name="subject" value="" class="wpcf7-form-control" placeholder="Subject">
                                            </span>
                                            <span class="wpcf7-form-control-wrap your-message">
                                               <textarea name="message" tabindex="5" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" placeholder="Message*" required ></textarea>
                                            </span>
                                            <div class="text-xs-right">
                                                <input type="submit" class="btn btn-rounded btn-info" value="Send US">
                                            </div>
                                        </form>
                                    </div><!-- /.themesflat-contact-form -->
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="35"></div>
                                    <div class="themesflat-headings style-2 clearfix">
                                        <h2 class="heading">INFOMATION</h2>
                                        <div class="sep has-width w80 accent-bg clearfix"></div>
                                    </div>
                                    <div class="themesflat-spacer clearfix" data-desktop="36" data-mobile="35" data-smobile="35"></div>
                                    <div class="themesflat-tabs style-1 w168 clearfix">
                                        <ul class="tab-title clearfix">
                                            <li class="item-title active">
                                                <span class="inner">Head Office</span>
                                            </li>
                                            <li class="item-title">
                                                <span class="inner">Chittagong</span>
                                            </li>
                                            {{-- <li class="item-title">
                                                <span class="inner">Mexico</span>
                                            </li> --}}
                                        </ul>

                                        <div class="tab-content-wrap clearfix">
                                            <div class="tab-content">
                                                <div class="item-content">
                                                    <ul>
                                                        <li class="clearfix">
                                                            <div class="inner">
                                                                <span class="fa fa-map-marker"></span>
                                                                <span class="text">Address : 752, Satmasjid Road, Dhanmondi C/A, Dhaka-1205, Bangladesh </span>
                                                            </div>
                                                        </li>

                                                        <li class="clearfix">
                                                            <div class="inner">
                                                                <span class="fa fa-phone"></span>
                                                                <span class="text">Call Us : (+88) 01844 527 808</span>
                                                            </div>
                                                        </li>

                                                        <li class="clearfix">
                                                            <div class="inner">
                                                                <span class="fa fa-envelope"></span>
                                                                <span class="text">EmailL : amfl@amgbd.com</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- /.tab-content -->
                                            <div class="tab-content">
                                                <div class="item-content">
                                                    <ul>
                                                        <li class="clearfix">
                                                            <div class="inner">
                                                                <span class="fa fa-map-marker"></span>
                                                                <span class="text">PO BOX 16122 COLLINS STREET WEST VICTORIA, NEWYORK </span>
                                                            </div>
                                                        </li>

                                                        <li class="clearfix">
                                                            <div class="inner">
                                                                <span class="fa fa-phone"></span>
                                                                <span class="text">CALL US : (+61) 3 8376 6284</span>
                                                            </div>
                                                        </li>

                                                        <li class="clearfix">
                                                            <div class="inner">
                                                                <span class="fa fa-envelope"></span>
                                                                <span class="text">EMAIL : SUPPORT@THEMESFLAT.COM</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- /.tab-content -->
                                            <div class="tab-content">
                                                <div class="item-content">
                                                    <ul>
                                                        <li class="clearfix">
                                                            <div class="inner">
                                                                <span class="fa fa-map-marker"></span>
                                                                <span class="text">PO BOX 16122 COLLINS STREET WEST VICTORIA, NEWYORK </span>
                                                            </div>
                                                        </li>

                                                        <li class="clearfix">
                                                            <div class="inner">
                                                                <span class="fa fa-phone"></span>
                                                                <span class="text">CALL US : (+61) 3 8376 6284</span>
                                                            </div>
                                                        </li>

                                                        <li class="clearfix">
                                                            <div class="inner">
                                                                <span class="fa fa-envelope"></span>
                                                                <span class="text">EMAIL : SUPPORT@THEMESFLAT.COM</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- /.tab-content -->
                                        </div>
                                    </div><!-- /.themesflat-tabs -->
                                    <div class="themesflat-spacer clearfix" data-desktop="20" data-mobile="35" data-smobile="35"></div>
                                    <div class="themesflat-map"></div>
                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="themesflat-spacer clearfix" data-desktop="78" data-mobile="60" data-smobile="60"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div>
                    <!-- END CONTACT -->
               </div><!-- /.page-content -->
            </div><!-- /#inner-content -->
        </div><!-- /#site-content -->
    </div><!-- /#content-wrap -->
</div><!-- /#main-content -->
@endsection
