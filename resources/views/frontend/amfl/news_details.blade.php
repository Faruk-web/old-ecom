@extends('frontend.main_master')

@section('index')
 <!-- Featured Title -->
 {{-- <div id="featured-title" class="featured-title clearfix">
    <div id="featured-title-inner" class="container clearfix">
        <div class="featured-title-inner-wrap">
            <div id="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="breadcrumb-trail">
                        <a href="{{ url('/') }}" class="trail-begin">Home</a>
                        <span class="sep">|</span>
                        <a href="{{ url('/news') }}" class="trail-begin">News </a>
                        <span class="sep">|</span>
                        <span class="trail-end">Details</span>
                    </div>
                </div>
            </div>
            <div class="featured-title-heading-wrap">
                <h1 class="feautured-title-heading">
                    News
                </h1>
            </div>
        </div><!-- /.featured-title-inner-wrap -->
    </div><!-- /#featured-title-inner -->
</div> --}}
<!-- End Featured Title -->
<div class="row"  style="background-image: url('{{ asset('frontend/assets/img/amfl/news.jpg')}}');center center no-repeat; background-size: cover;">
    <div class="col-md-12">
        <div class="themesflat-spacer clearfix" data-desktop="350" data-mobile="60" data-smobile="60"></div>
        <div class="themesflat-headings style-1 text-center clearfix">
            <h2 class="heading text-white">News Details</h2>
            <div class="sep has-icon width-125 border-color-light clearfix">
                <div class="sep-icon ">
                    <span class="sep-icon-before sep-center sep-solid"></span>
                    <span class="icon-wrap"><i class="autora-icon-build"></i></span>
                    <span class="sep-icon-after sep-center sep-solid"></span>
                </div>
            </div>
        </div>
        {{-- <div class="themesflat-spacer clearfix" data-desktop="25" data-mobile="35" data-smobile="35"></div> --}}
    </div><!-- /.col-md-12 -->
</div><!-- /.row -->
<!-- Main Content -->
<div id="main-content" class="site-main clearfix">
    <div id="content-wrap" class="container">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
                {{-- <div class="themesflat-spacer clearfix" data-desktop="80" data-mobile="60" data-smobile="60"></div> --}}
                {{-- <div class="themesflat-carousel-box data-effect clearfix" data-gap="0" data-column="1" data-column2="1" data-column3="1" data-auto="true">
                    <div class="owl-carousel owl-theme">
                        <div class="themesflat-gallery style-1 clearfix">
                            <div class="gallery-item">
                                <div class="inner">
                                    <div class="thumb">
                                        <img src="{{ asset($news_details->news_image) }}" alt="Image">
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.themesflat-gallery -->
                    </div><!-- /.owl-carousel -->
                </div><!-- /.themesflat-carousel-box --> --}}
                <div class="themesflat-spacer clearfix" data-desktop="29" data-mobile="35" data-smobile="35"></div>
                <div class="themesflat-headings style-2 clearfix">
                    <h2 class="heading">{{ $news_details->news_name }}</h2>
                    <div class="sep has-width w80 accent-bg clearfix"></div>
                    <p class="sub-heading font-size-16 line-height-28 text-666 margin-top-27 letter-spacing-01">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="22" data-mobile="22" data-smobile="22"></div>

                <div class="themesflat-spacer clearfix" data-desktop="78" data-mobile="60" data-smobile="60"></div>
            </div><!-- /#inner-content -->
        </div><!-- /#site-content -->
    </div><!-- /#content-wrap -->
</div><!-- /#main-content -->
@endsection
