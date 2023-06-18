
@extends('frontend.main_master')

@section('index')
<div id="loading">
    <img id="container" src="{{ asset('frontend/assets/img/amfl/logo-main-old.png')}}" alt="">
</div>
<div id="main-content" class="site-main clearfix">
    <div id="content-wrap">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
               <div class="page-content">
                   <!-- SLIDER -->
                    <div class="rev_slider_wrapper fullwidthbanner-container">
                        <div id="rev-slider2" class="rev_slider fullwidthabanner">
                            <ul>
                                @foreach ( $sliders as $slider )
                                <!-- Slide 1 -->
                                <li data-transition="random">
                                    <!-- Main Image -->
                                    <img src="{{ asset($slider->slider_img) }}" alt="" data-bgposition="center center" data-no-retina>
                                    <!-- Layers -->
                                    <div class="tp-caption tp-resizeme text-white font-heading font-weight-600 "
                                        data-x="['left','left','left','center']" data-hoffset="['0','0','0','0']"
                                        data-y="['middle','middle','middle','middle']" data-voffset="['-90','-90','-90','-90']"
                                        data-fontsize="['20','20','20','16']"
                                        data-lineheight="['70','70','40','24']"
                                        data-width="full"
                                        data-height="none"
                                        data-whitespace="normal"
                                        data-transform_idle="o:1;"
                                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                        data-mask_in="x:0px;y:[100%];"
                                        data-mask_out="x:inherit;y:inherit;"
                                        data-start="700"
                                        data-splitin="none"
                                        data-splitout="none"
                                        data-responsive_offset="on" style="filter: drop-shadow(1px 1px 5px #000);">
                                        {{ $slider->title }}
                                    </div>

                                    <div class="tp-caption tp-resizeme text-white font-heading font-weight-700"
                                        data-x="['left','left','left','center']" data-hoffset="['0','0','0','0']"
                                        data-y="['middle','middle','middle','middle']" data-voffset="['-20','-20','-20','-20']"
                                        data-fontsize="['52','52','42','32']"
                                        data-lineheight="['65','65','45','35']"
                                        data-width="full"
                                        data-height="none"
                                        data-whitespace="normal"
                                        data-transform_idle="o:1;"
                                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                        data-mask_in="x:0px;y:[100%];"
                                        data-mask_out="x:inherit;y:inherit;"
                                        data-start="1000"
                                        data-splitin="none"
                                        data-splitout="none"
                                        data-responsive_offset="on" style="filter: drop-shadow(1px 1px 5px #000);">
                                        {{ $slider->short_description }}
                                    </div>
                                    <div class="tp-caption tp-resizeme text-white font-heading font-weight-700"
                                        data-x="['left','left','left','center']" data-hoffset="['0','0','0','0']"
                                        data-y="['middle','middle','middle','middle']" data-voffset="['45','45','45','45']"
                                        data-fontsize="['52','52','42','32']"
                                        data-lineheight="['65','65','45','35']"
                                        data-width="full"
                                        data-height="none"
                                        data-whitespace="normal"
                                        data-transform_idle="o:1;"
                                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                        data-mask_in="x:0px;y:[100%];"
                                        data-mask_out="x:inherit;y:inherit;"
                                        data-start="1000"
                                        data-splitin="none"
                                        data-splitout="none"
                                        data-responsive_offset="on" style="filter: drop-shadow(1px 1px 5px #000);">
                                        {{ $slider->description }}
                                    </div>
                                    <div class="tp-caption "
                                        data-x="['left','left','left','center']" data-hoffset="['0','0','0','0']"
                                        data-y="['middle','middle','middle','middle']" data-voffset="['153','153','153','153']"
                                        data-width="full"
                                        data-height="none"
                                        data-whitespace="normal"
                                        data-transform_idle="o:1;"
                                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                        data-mask_in="x:0px;y:[100%];"
                                        data-mask_out="x:inherit;y:inherit;"
                                        data-start="1000"
                                        data-splitin="none"
                                        data-splitout="none"
                                        data-responsive_offset="on">
                                        <a href="{{ route('user.project.details.slide',$slider->id) }}" class="themesflat-button bg-accent big"><span>GET IN TOUCH</span></a>
                                    </div>
                                </li>
                                @endforeach
                                <!-- /End Slide 1 -->
                            </ul>
                        </div>
                    </div>
                    <!-- END SLIDER -->
                    <!-- COUNTER -->
                    <div class="row-counter parallax parallax-4 parallax-overlay">
                        <div class="container">
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <div class="themesflat-spacer clearfix" data-desktop="92" data-mobile="60" data-smobile="60"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                            <div class="themesflat-row gutter-30 separator light clearfix">
                                <div class="col span_1_of_3">
                                    <div class="themesflat-content-box clearfix" data-margin="0 0 0 0" data-mobilemargin="0 0 0 0">
                                        <div class="themesflat-counter style-1 align-center clearfix">
                                            <div class="counter-item">
                                                <div class="inner">
                                                    <div class="text-wrap">
                                                        <div class="number-wrap">
                                                            <span class="number" data-speed="2000" data-to="11000" data-inviewport="yes">11000</span><span class="suffix">+</span>
                                                        </div>
                                                        <h3 class="heading margin-right-18">HOME DELIVERED</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /.themesflat-counter -->
                                    </div>
                                    <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="35" data-smobile="35"></div>
                                </div><!-- /.col-md-3 -->
                                <div class="col span_1_of_3">
                                    <div class="themesflat-content-box clearfix" data-margin="0 0 0 0" data-mobilemargin="0 0 0 0">
                                        <div class="themesflat-counter style-1 align-center clearfix">
                                            <div class="counter-item">
                                                <div class="inner">
                                                    <div class="text-wrap">
                                                        <div class="number-wrap">
                                                            <span class="number" data-speed="2000" data-to="10000" data-inviewport="yes">10000</span><span class="suffix">+</span>
                                                        </div>
                                                        <h3 class="heading margin-right-6">CLIENDS SERVED</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /.themesflat-counter -->
                                    </div>
                                    <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="35" data-smobile="35"></div>
                                </div><!-- /.col-md-3 -->
                                <div class="col span_1_of_3">
                                    <div class="themesflat-content-box clearfix" data-margin="0 0 0 0" data-mobilemargin="0 0 0 0">
                                        <div class="themesflat-counter style-1 align-center clearfix">
                                            <div class="counter-item">
                                                <div class="inner">
                                                    <div class="text-wrap">
                                                        <div class="number-wrap">
                                                            <span class="number" data-speed="2000" data-to="20000" data-inviewport="yes">20000</span><span class="suffix">+</span>
                                                        </div>
                                                        <h3 class="heading margin-right-8">UNITS UNDER CONSTRUCTION</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /.themesflat-counter -->
                                    </div>
                                    <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="35"></div>
                                </div><!-- /.col-md-3 -->
                                <div class="col span_1_of_3">
                                    <div class="themesflat-content-box clearfix" data-margin="0 0 0 0" data-mobilemargin="0 0 0 0">
                                        <div class="themesflat-counter style-1 align-center clearfix">
                                            <div class="counter-item">
                                                <div class="inner">
                                                    <div class="text-wrap">
                                                        <div class="number-wrap">
                                                            <span class="number" data-speed="2000" data-to="7000" data-inviewport="yes">7000</span><span class="suffix">+</span>
                                                        </div>
                                                        <h3 class="heading margin-right-10">UNITS APERTMENTS</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /.themesflat-counter -->
                                    </div>
                                </div><!-- /.col-md-3 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                        <div class="bg-parallax-overlay overlay-black style2"></div>
                    </div>
                    <!-- END COUNTER -->
                    <!-- SERVICES -->
                    <div class="row-services">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="themesflat-spacer clearfix" data-desktop="60" data-mobile="60" data-smobile="60"></div>
                                    <div class="themesflat-headings style-1 text-center clearfix">
                                        <h2 class="heading">OUR FEATURE PROJECT</h2>
                                        <div class="sep has-icon width-125 clearfix">
                                            <div class="sep-icon">
                                                <span class="sep-icon-before sep-center sep-solid"></span>
                                                <span class="icon-wrap"><i class="autora-icon-build"></i></span>
                                                <span class="sep-icon-after sep-center sep-solid"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="themesflat-spacer clearfix" data-desktop="27" data-mobile="35" data-smobile="35"></div>
                                    <div class="themesflat-carousel-box has-arrows arrow-center offset-v-111 offset-h-21 arrow-circle arrow-style-2 data-effect clearfix" data-gap="30" data-column="3" data-column2="2" data-column3="1" data-auto="true">
                                        <div class="owl-carousel owl-theme">
                                            @foreach ($featureds as $item)
                                            <div class="themesflat-image-box style-2 clearfix">
                                                <div class="image-box-item">
                                                    <div class="inner">
                                                        <a href="{{ route('user.project.details',$item->id) }}">
                                                        <div class="thumb data-effect-item">
                                                            <img src="{{asset($item->project_thambnail)}}" alt="Image">
                                                            <div class="overlay-effect bg-color-accent"></div>
                                                        </div>
                                                        </a>
                                                        <div class="text-wrap">
                                                            <h5 class="heading"><a href="{{ route('user.project.details',$item->id) }}">{{$item->project_name}}</a></h5>
                                                            <p>Project Type : {{ $item->project_type }}</p>
                                                            <div class="elm-readmore">
                                                                <a href="{{ route('user.project.details',$item->id) }}">DETAILS</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            <!-- /.themesflat-image-box -->
                                        </div>
                                    </div><!-- /.themesflat-carousel-box -->
                                    <div class="themesflat-spacer clearfix" data-desktop="45" data-mobile="60" data-smobile="60"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div>
                    <!-- END SERVICES -->
                <!-- TESTIMONIALS -->
                <div class="row-testimonials bg-light-snow"style="background-image: url('{{ asset('frontend/assets/img/amfl/banner_3.JPG')}}');center center no-repeat; background-size: cover;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="themesflat-spacer clearfix" data-desktop="30" data-mobile="60" data-smobile="60"></div>
                                <div class="themesflat-headings style-1 font-hind text-center clearfix">
                                    <h2 class="heading" style="color:#fff">LEADING CONSTRUCTION</h2>
                                    <div class="sep has-icon width-125 clearfix">
                                        <div class="sep-icon">
                                            <span class="sep-icon-before sep-center sep-solid"></span>
                                            <span class="icon-wrap"><i class="autora-icon-build"></i></span>
                                            <span class="sep-icon-after sep-center sep-solid"></span>
                                        </div>
                                    </div>
                                    {{-- <p class="sub-heading">With us you will have the peace of mind knowing that your dream home project is in the hands <br > of a licensed fully insured building company.</p> --}}
                                </div>
                                {{-- <div class="themesflat-spacer clearfix" data-desktop="46" data-mobile="35" data-smobile="35"></div> --}}
                                <section class="bg-light pt-5 pb-5 shadow-sm">
                                    <div class="container">
                                    <div class="row">
                                        <!--ADD CLASSES HERE d-flex align-items-stretch-->
                                        @foreach ($leadings as $item )
                                        <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                                            <div class="card" style="width: 100%;">
                                                <div class="themesflat-icon-box icon-top align-center has-width w95 circle light-bg accent-color style-1 bg-white-column padding-inner clearfix">
                                                <div class="icon-wrap">
                                                    <i class="{{ $item->icon }}"></i>
                                                </div>
                                                <div class="card-body d-flex flex-column text-center">
                                                    <h5 class="heading"><a href="{{ route('user.leading.detail',$item->id) }}">{{ $item->title }}</a></h5>
                                                    <div class="sep clearfix"></div>
                                                    <p class="sub-heading">{{ $item->short_description }}</p>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    </div>
                                </section>
                                <div class="elm-button text-center">
                                    <a href="{{ url('/about') }}" class="themesflat-button bg-accent">ABOUT US</a>
                                </div>
                                <div class="themesflat-spacer clearfix" data-desktop="18" data-mobile="60" data-smobile="60"></div>
                            </div><!-- /.col-md-12 -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div>
                <!-- END TESTIMONIALS -->
                     <!-- WHYUS -->
                    <div class="row-whyus">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="themesflat-spacer clearfix" data-desktop="61" data-mobile="60" data-smobile="60"></div>
                                    <div class="themesflat-headings style-1 text-center clearfix">
                                        <h2 class="heading">WHY CHOOSE US?</h2>
                                        <div class="sep has-icon width-125 clearfix">
                                            <div class="sep-icon">
                                                <span class="sep-icon-before sep-center sep-solid"></span>
                                                <span class="icon-wrap"><i class="autora-icon-build"></i></span>
                                                <span class="sep-icon-after sep-center sep-solid"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="themesflat-spacer clearfix" data-desktop="29" data-mobile="35" data-smobile="35"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="themesflat-content-box clearfix" data-margin="0 31px 0 0" data-mobilemargin="0 0 0 0">
                                        <p class="font-size-16 no-margin">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <div class="themesflat-spacer clearfix" data-desktop="37" data-mobile="35" data-smobile="35"></div>
                                        <div class="themesflat-progress style-1 height-10px clearfix">
                                            <h3 class="title">RESIDENTIAL</h3>
                                            <div class="perc-wrap">
                                                <div class="perc"><span>80%</span></div>
                                            </div>
                                            <div class="progress-bg" data-percent="80" data-inviewport="yes">
                                                <div class="progress-animate"></div>
                                            </div>
                                        </div><!-- /.themesflat-progrees -->
                                        <div class="themesflat-spacer clearfix" data-desktop="25" data-mobile="25" data-smobile="25"></div>
                                        <div class="themesflat-progress style-1 height-10px clearfix">
                                            <h3 class="title">COMMERCIAL</h3>
                                            <div class="perc-wrap">
                                                <div class="perc"><span>90%</span></div>
                                            </div>
                                            <div class="progress-bg" data-percent="90" data-inviewport="yes">
                                                <div class="progress-animate"></div>
                                            </div>
                                        </div><!-- /.themesflat-progrees -->
                                        <div class="themesflat-spacer clearfix" data-desktop="26" data-mobile="26" data-smobile="26"></div>
                                        <div class="themesflat-progress style-1 height-10px clearfix">
                                            <h3 class="title">CONSTRUCTION</h3>
                                            <div class="perc-wrap">
                                                <div class="perc"><span>70%</span></div>
                                            </div>
                                            <div class="progress-bg" data-percent="70" data-inviewport="yes">
                                                <div class="progress-animate"></div>
                                            </div>
                                        </div><!-- /.themesflat-progrees -->
                                    </div><!-- /.themesflat-content-box -->
                                </div><!-- /.col-md-6 -->

                                <div class="col-md-6">
                                    <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="35"></div>
                                    <div class="themesflat-content-box" data-margin="3px 0 0 10px" data-mobilemargin="0 0 0 0">
                                        <div class="themesflat-accordions style-2 has-icon icon-left iconstyle-2 clearfix">
                                            <div class="accordion-item active">
                                                <h3 class="accordion-heading"><span class="inner">Prime Locations ?</span></h3>
                                                <div class="accordion-content">
                                                    <div>Our projects are placed at the most lucrative location of the city. All the project locations are selected intelligently, keeping in mind the things that matter to you most. </div>
                                                </div>
                                            </div><!-- /.accordion-item -->
                                            <div class="accordion-item">
                                                <h3 class="accordion-heading"><span class="inner">Luxury Lifestyle ?</span></h3>
                                                <div class="accordion-content">
                                                    <div>All of our project’s amenities are set to fulfill the dream of your luxury lifestyle. </div>
                                                </div>
                                            </div><!-- /.accordion-item -->
                                            <div class="accordion-item ">
                                                <h3 class="accordion-heading"><span class="inner">Quality Construction ?</span></h3>
                                                <div class="accordion-content">
                                                    <div>Each material used in our projects is selected with the utmost attention to quality, suitability and durability. </div>
                                                </div>
                                            </div><!-- /.accordion-item -->
                                            <div class="accordion-item ">
                                                <h3 class="accordion-heading"><span class="inner">Design & Architecture ?</span></h3>
                                                <div class="accordion-content">
                                                    <div>Our each and every landmark represents a true blend of unique design and architectural expertise.  </div>
                                                </div>
                                            </div><!-- /.accordion-item -->
                                        </div><!-- /.themesflat-accordion -->
                                    </div><!-- /.themesflat-content-box -->
                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="themesflat-spacer clearfix" data-desktop="76" data-mobile="60" data-smobile="60"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div>
                    <!-- END WHYUS  -->
                    <!-- REQUEST -->
                    <div class="row-request parallax parallax-3"style="background-image: url('{{ asset('frontend/assets/img/amfl/Background_2.JPG')}}');center center no-repeat; background-size: cover;">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 ">
                                    <div class="themesflat-spacer clearfix" data-desktop="82" data-mobile="60" data-smobile="60"></div>
                                    <div class="themesflat-request-box style-1 clearfix">
                                        <div class="inner">
                                            <div class="themesflat-headings style-1 clearfix">
                                                <h2 class="heading text-white line-height-normal">SET AND ONLINE APPOINTMENT WITH US</h2>
                                                <div class="sep has-width w80 accent-bg margin-top-13 clearfix"></div>
                                                <p class="sub-heading margin-top-22 font-size-14 line-height-24 text-white font-weight-400">Would you like to speak to one of our financial advisers over the phone? Just submit your details and we’ll be in touch shortly.</p>
                                            </div><!-- /.themesflat-heading -->
                                            <div class="themesflat-contact-form style-1 clearfix">
                                                <div class="themesflat-spacer clearfix" data-desktop="8" data-mobile="8" data-smobile="8"></div>
                                                <form method="POST" action="{{ route('contactUs.send')  }}" enctype="multipart/form-data">
                                                    @csrf
                                                    <span class="wpcf7-form-control-wrap your-name">
                                                        <input type="text" tabindex="1" id="name" name="name" value="" class="wpcf7-form-control" placeholder="Name" required>
                                                    </span>
                                                    <span class="wpcf7-form-control-wrap your-phone">
                                                        <input type="text" tabindex="2" id="phone" name="phone" value="" class="wpcf7-form-control" placeholder="Phone number" required>
                                                    </span>
                                                    <span class="wpcf7-form-control-wrap your-email">
                                                        <input type="email" tabindex="3" id="email" name="email" value="" class="wpcf7-form-control" placeholder="Email" required>
                                                    </span>
                                                    <span class="wrap-submit">
                                                        <input type="submit" value="SEND US" class="submit wpcf7-form-control wpcf7-submit" id="submit" name="submit">
                                                    </span>
                                                </form>
                                            </div>
                                        </div><!-- /.inner -->
                                    </div><!-- /.themesflat-request-box -->
                                    <div class="themesflat-spacer clearfix" data-desktop="76" data-mobile="60" data-smobile="60"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div>
                    <!-- END REQUEST -->
                    <!-- PROJECT -->
                    <div class="row-project clearfix">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="themesflat-spacer clearfix" data-desktop="60" data-mobile="60" data-smobile="60"></div>
                                    <div class="position-relative">
                                        <div class="themesflat-headings style-1 clearfix">
                                        <h2 class="heading ">TOP TWENTY PROJECT</h2>
                                        </div>
                                        <ul class="themesflat-filter style-1 filter-absolute clearfix">
                                            <li class="active"><a href="#" data-filter="*">All</a></li>
                                            <li><a href="#" data-filter=".residential">RESIDENTIAL</a></li>
                                            <li><a href="#" data-filter=".commercial">COMMERCIAL</a></li>
                                            <li><a href="#" data-filter=".green_house">GREEN HOUSE</a></li>
                                            <li><a href="#" data-filter=".construction">CONSTRUCTION </a></li>
                                            <li><a href="#" data-filter=".architecture">ARCHITECTURE   </a></li>
                                            {{-- <li><a href="#" data-filter=".villa">VILLA</a></li>
                                            <li><a href="#" data-filter=".building">BUILDING</a></li> --}}
                                        </ul>
                                    </div>
                                    <div class="themesflat-spacer clearfix" data-desktop="40" data-mobile="35" data-smobile="35"></div>
                                    <div class="themesflat-project style-2 isotope-project has-margin mg15 data-effect clearfix">
                                       <!-- /.product-item -->
                                       @php
                                       $project = App\Models\Project::where('project_type','commercial')->orderBy('id','asc')->limit(15)->get();
                                       @endphp
                                       @foreach ($project as $item)
                                       <div class="project-item commercial">
                                           <div class="inner">
                                               <div class="thumb data-effect-item has-effect-icon w40 offset-v-19 offset-h-49">
                                                   <img src="{{ asset($item->project_thambnail)}}" alt="Image">
                                                   <div class="elm-link">
                                                       <a href="{{ route('user.project.details',$item->id) }}" class="icon-1 icon-search"></a>
                                                       {{-- <a href="#" class="icon-1"></a> --}}
                                                   </div>
                                                   <div class="overlay-effect bg-color-3"></div>
                                               </div>
                                               <div class="text-wrap">
                                                   <h5 class="heading"><a href="#">{{$item->project_name}}</a></h5>
                                                   <div class="elm-meta">
                                                       <span><a href="{{ route('user.project.details',$item->id) }}">Commercial House</a></span>
                                                       <span><a href="{{ route('user.project.details',$item->id) }}">Villa</a></span>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                       @endforeach
                                       <!-- /.product-item -->
                                       @php
                                            $project = App\Models\Project::where('project_type','residential')->orderBy('id','desc')->limit(12)->get();
                                        @endphp
                                         @foreach ($project as $item)
                                        <div class="project-item residential">
                                            <div class="inner">
                                                <div class="thumb data-effect-item has-effect-icon w40 offset-v-19 offset-h-49">
                                                    <img src="{{ asset($item->project_thambnail)}}" alt="Image">
                                                    <div class="elm-link">
                                                        <a href="{{ route('user.project.details',$item->id) }}" class="icon-1 icon-search"></a>
                                                        {{-- <a href="#" class="icon-1"></a> --}}
                                                    </div>
                                                    <div class="overlay-effect bg-color-3"></div>
                                                </div>
                                                <div class="text-wrap">
                                                    <h5 class="heading"><a href="#">{{$item->project_name}}</a></h5>
                                                    <div class="elm-meta">
                                                        <span><a href="{{ route('user.project.details',$item->id) }}">Residential House</a></span>
                                                        <span><a href="{{ route('user.project.details',$item->id) }}">Villa</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        @php
                                        $project = App\Models\Project::where('project_type','green_house')->orderBy('id','asc')->limit(10)->get();
                                        @endphp
                                        @foreach ($project as $item)
                                        <div class="project-item green_house">
                                            <div class="inner">
                                                <div class="thumb data-effect-item has-effect-icon w40 offset-v-19 offset-h-49">
                                                    <img src="{{ asset($item->project_thambnail)}}" alt="Image">
                                                    <div class="elm-link">
                                                        <a href="{{ route('user.project.details',$item->id) }}" class="icon-1 icon-search"></a>
                                                        {{-- <a href="#" class="icon-1"></a> --}}
                                                    </div>
                                                    <div class="overlay-effect bg-color-3"></div>
                                                </div>
                                                <div class="text-wrap">
                                                    <h5 class="heading"><a href="#">{{$item->project_name}}</a></h5>
                                                    <div class="elm-meta">
                                                        <span><a href="{{ route('user.project.details',$item->id) }}">Green House</a></span>
                                                        <span><a href="{{ route('user.project.details',$item->id) }}">Villa</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        <!-- /.product-item -->
                                        @php
                                        $project = App\Models\Project::where('project_type','construction')->orderBy('id','asc')->limit(10)->get();
                                        @endphp
                                        @foreach ($project as $item)
                                        <div class="project-item construction">
                                            <div class="inner">
                                                <div class="thumb data-effect-item has-effect-icon w40 offset-v-19 offset-h-49">
                                                    <img src="{{ asset($item->project_thambnail)}}" alt="Image">
                                                    <div class="elm-link">
                                                        <a href="{{ route('user.project.details',$item->id) }}" class="icon-1 icon-search"></a>
                                                        {{-- <a href="#" class="icon-1"></a> --}}
                                                    </div>
                                                    <div class="overlay-effect bg-color-3"></div>
                                                </div>
                                                <div class="text-wrap">
                                                    <h5 class="heading"><a href="#">{{$item->project_name}}</a></h5>
                                                    <div class="elm-meta">
                                                        <span><a href="{{ route('user.project.details',$item->id) }}">Construction House</a></span>
                                                        <span><a href="{{ route('user.project.details',$item->id) }}">Villa</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        <!-- /.product-item -->
                                        @php
                                        $project = App\Models\Project::where('project_type','architechtur')->orderBy('id','asc')->limit(10)->get();
                                        @endphp
                                        @foreach ($project as $item)
                                        <div class="project-item architecture">
                                            <div class="inner">
                                                <div class="thumb data-effect-item has-effect-icon w40 offset-v-19 offset-h-49">
                                                    <img src="{{ asset($item->project_thambnail)}}" alt="Image">
                                                    <div class="elm-link">
                                                        <a href="{{ route('user.project.details',$item->id) }}" class="icon-1 icon-search"></a>
                                                        {{-- <a href="#" class="icon-1"></a> --}}
                                                    </div>
                                                    <div class="overlay-effect bg-color-3"></div>
                                                </div>
                                                <div class="text-wrap">
                                                    <h5 class="heading"><a href="#">{{$item->project_name}}</a></h5>
                                                    <div class="elm-meta">
                                                        <span><a href="{{ route('user.project.details',$item->id) }}">Architechtur House</a></span>
                                                        <span><a href="{{ route('user.project.details',$item->id) }}">Villa</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        <!-- /.product-item -->
                                    </div><!-- /.themesflat-project -->
                                </div><!-- /.col-md-12 -->
                            </div>
                            <!-- /.row -->
                        </div><!-- /.container-fluid -->
                    </div>
                    <!-- END PROJECT -->

                    <!-- PARTNER -->
                    {{-- <div class="row-partner">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="themesflat-spacer clearfix" data-desktop="22" data-mobile="35" data-smobile="35"></div>
                                    <div class="themesflat-carousel-box clearfix" data-gap="30" data-column="5" data-column2="3" data-column3="2" data-auto="true">
                                        <div class="owl-carousel owl-theme">
                                            <div class="themesflat-partner style-2 align-center clearfix">
                                                <div class="partner-item">
                                                    <div class="inner">
                                                        <div class="thumb">
                                                            <img src="{{ asset('frontend/assets/img/partners/partner-1.png')}}" alt="Image" class="partner-default">
                                                            <img src="{{ asset('frontend/assets/img/partners/partner-1-color.png')}}" alt="Image" class="partner-color">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /themesflat-partner -->
                                            <div class="themesflat-partner style-2 align-center clearfix">
                                                <div class="partner-item">
                                                    <div class="inner">
                                                        <div class="thumb">
                                                            <img src="{{ asset('frontend/assets/img/partners/partner-2.png')}}" alt="Image" class="partner-default">
                                                            <img src="{{ asset('frontend/assets/img/partners/partner-2-color.png')}}" alt="Image" class="partner-color">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /themesflat-partner -->
                                            <div class="themesflat-partner style-2 align-center clearfix">
                                                <div class="partner-item">
                                                    <div class="inner">
                                                        <div class="thumb">
                                                            <img src="{{ asset('frontend/assets/img/partners/partner-3.png')}}" alt="Image" class="partner-default">
                                                            <img src="{{ asset('frontend/assets/img/partners/partner-3-color.png')}}" alt="Image" class="partner-color">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /themesflat-partner -->
                                            <div class="themesflat-partner style-2 align-center clearfix">
                                                <div class="partner-item">
                                                    <div class="inner">
                                                        <div class="thumb">
                                                            <img src="{{ asset('frontend/assets/img/partners/partner-4.png')}}" alt="Image" class="partner-default">
                                                            <img src="{{ asset('frontend/assets/img/partners/partner-4-color.png')}}" alt="Image" class="partner-color">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /themesflat-partner -->
                                            <div class="themesflat-partner style-2 align-center clearfix">
                                                <div class="partner-item">
                                                    <div class="inner">
                                                        <div class="thumb">
                                                            <img src="{{ asset('frontend/assets/img/partners/partner-5.png')}}" alt="Image" class="partner-default">
                                                            <img src="{{ asset('frontend/assets/img/partners/partner-5-color.png')}}" alt="Image" class="partner-color">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /themesflat-partner -->
                                            <div class="themesflat-partner style-2 align-center clearfix">
                                                <div class="partner-item">
                                                    <div class="inner">
                                                        <div class="thumb">
                                                            <img src="{{ asset('frontend/assets/img/partners/partner-1.png')}}" alt="Image" class="partner-default">
                                                            <img src="{{ asset('frontend/assets/img/partners/partner-1-color.png')}}" alt="Image" class="partner-color">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /themesflat-partner -->
                                            <div class="themesflat-partner style-2 align-center clearfix">
                                                <div class="partner-item">
                                                    <div class="inner">
                                                        <div class="thumb">
                                                            <img src="{{ asset('frontend/assets/img/partners/partner-2.png')}}" alt="Image" class="partner-default">
                                                            <img src="{{ asset('frontend/assets/img/partners/partner-2-color.png')}}" alt="Image" class="partner-color">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /themesflat-partner -->
                                            <div class="themesflat-partner style-2 align-center clearfix">
                                                <div class="partner-item">
                                                    <div class="inner">
                                                        <div class="thumb">
                                                            <img src="{{ asset('frontend/assets/img/partners/partner-3.png')}}" alt="Image" class="partner-default">
                                                            <img src="{{ asset('frontend/assets/img/partners/partner-3-color.png')}}" alt="Image" class="partner-color">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /themesflat-partner -->
                                            <div class="themesflat-partner style-2 align-center clearfix">
                                                <div class="partner-item">
                                                    <div class="inner">
                                                        <div class="thumb">
                                                            <img src="{{ asset('frontend/assets/img/partners/partner-4.png')}}" alt="Image" class="partner-default">
                                                            <img src="{{ asset('frontend/assets/img/partners/partner-4-color.png')}}" alt="Image" class="partner-color">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /themesflat-partner -->
                                            <div class="themesflat-partner style-2 align-center clearfix">
                                                <div class="partner-item">
                                                    <div class="inner">
                                                        <div class="thumb">
                                                            <img src="{{ asset('frontend/assets/img/partners/partner-5.png')}}" alt="Image" class="partner-default">
                                                            <img src="{{ asset('frontend/assets/img/partners/partner-5-color.png')}}" alt="Image" class="partner-color">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /themesflat-partner -->
                                        </div>
                                    </div><!-- /.themesflat-carousel-box -->
                                    <div class="themesflat-spacer clearfix" data-desktop="58" data-mobile="35" data-smobile="35"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div> --}}
                    <!-- END PARTNER -->

                    <!-- TESTIMONIALS -->
                    {{-- <div class="row-testimonials bg-light-snow"style="background-image: url('{{ asset('frontend/assets/img/amfl/Background_1.JPG')}}');center center no-repeat; background-size: cover;">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="themesflat-spacer clearfix" data-desktop="60" data-mobile="60" data-smobile="60"></div>
                                    <div class="themesflat-headings style-1 font-hind text-center clearfix">
                                        <h2 class="heading" style="color:#fff">TESTIMONIAL</h2>
                                        <div class="sep has-icon width-125 clearfix">
                                            <div class="sep-icon">
                                                <span class="sep-icon-before sep-center sep-solid"></span>
                                                <span class="icon-wrap"><i class="autora-icon-build"></i></span>
                                                <span class="sep-icon-after sep-center sep-solid"></span>
                                            </div>
                                        </div>
                                        <p class="sub-heading">With us you will have the peace of mind knowing that your dream home project is in the hands <br > of a licensed fully insured building company.</p>
                                    </div>
                                    <div class="themesflat-spacer clearfix" data-desktop="46" data-mobile="35" data-smobile="35"></div>
                                    <div class="themesflat-carousel-box has-bullets bullet-circle clearfix" data-gap="30" data-column="3" data-column2="2" data-column3="1" data-auto="true">
                                        <div class="owl-carousel owl-theme">
                                            <div class="themesflat-testimonials style-2 align-center clearfix">
                                                <div class="testimonial-item">
                                                    <div class="inner">
                                                        <div class="thumb">
                                                           <img src="{{ asset('frontend/assets/img/testimonials/customer-1-90x90.jpg') }}" alt="Image">
                                                        </div>
                                                        <blockquote class="text">
                                                            <div class="name-pos clearfix">
                                                                <h6 class="name">JERRY SKINNER</h6>
                                                                <span class="position">CAM Gentle Co.</span>
                                                            </div>
                                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincid  unt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation </p>
                                                            <div class="list-star">
                                                                <i class="ion-star"></i>
                                                                <i class="ion-star"></i>
                                                                <i class="ion-star"></i>
                                                                <i class="ion-star"></i>
                                                                <i class="ion-star"></i>
                                                            </div>
                                                        </blockquote>
                                                    </div>
                                                </div>
                                            </div><!-- /.themesflat-testimonials -->
                                            <div class="themesflat-testimonials style-2 align-center clearfix">
                                                <div class="testimonial-item">
                                                    <div class="inner">
                                                        <div class="thumb">
                                                           <img src="{{ asset('frontend/assets/img/testimonials/customer-2-90x90.jpg') }}" alt="Image">
                                                        </div>
                                                        <blockquote class="text">
                                                            <div class="name-pos clearfix">
                                                                <h6 class="name">ASHLEY SOLOMON</h6>
                                                                <span class="position">CAM Gentle Co.</span>
                                                            </div>
                                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincid  unt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation </p>
                                                            <div class="list-star">
                                                                <i class="ion-star"></i>
                                                                <i class="ion-star"></i>
                                                                <i class="ion-star"></i>
                                                                <i class="ion-star"></i>
                                                                <i class="ion-star"></i>
                                                            </div>
                                                        </blockquote>
                                                    </div>
                                                </div>
                                            </div><!-- /.themesflat-testimonials -->
                                            <div class="themesflat-testimonials style-2 align-center clearfix">
                                                <div class="testimonial-item">
                                                    <div class="inner">
                                                        <div class="thumb">
                                                           <img src="{{ asset('frontend/assets/img/testimonials/customer-3-90x90.jpg') }}" alt="Image">
                                                        </div>
                                                        <blockquote class="text">
                                                            <div class="name-pos clearfix">
                                                                <h6 class="name">WILLIAM KRAUSE</h6>
                                                                <span class="position">CAM Gentle Co.</span>
                                                            </div>
                                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincid  unt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation </p>
                                                            <div class="list-star">
                                                                <i class="ion-star"></i>
                                                                <i class="ion-star"></i>
                                                                <i class="ion-star"></i>
                                                                <i class="ion-star"></i>
                                                                <i class="ion-star"></i>
                                                            </div>
                                                        </blockquote>
                                                    </div>
                                                </div>
                                            </div><!-- /.themesflat-testimonials -->
                                            <div class="themesflat-testimonials style-2 align-center clearfix">
                                                <div class="testimonial-item">
                                                    <div class="inner">
                                                        <div class="thumb">
                                                           <img src="{{ asset('frontend/assets/img/testimonials/customer-4-90x90.png') }}" alt="Image">
                                                        </div>
                                                        <blockquote class="text">
                                                            <div class="name-pos clearfix">
                                                                <h6 class="name">JERRY SKINNER</h6>
                                                                <span class="position">CAM Gentle Co.</span>
                                                            </div>
                                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincid  unt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation </p>
                                                            <div class="list-star">
                                                                <i class="ion-star"></i>
                                                                <i class="ion-star"></i>
                                                                <i class="ion-star"></i>
                                                                <i class="ion-star"></i>
                                                                <i class="ion-star"></i>
                                                            </div>
                                                        </blockquote>
                                                    </div>
                                                </div>
                                            </div><!-- /.themesflat-testimonials -->
                                        </div>
                                    </div><!-- /.themesflat-carousel-box -->
                                    <div class="themesflat-spacer clearfix" data-desktop="81" data-mobile="60" data-smobile="60"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div> --}}
                    <!-- END TESTIMONIALS -->

               </div><!-- /.page-content -->
            </div><!-- /#inner-content -->
        </div><!-- /#site-content -->
    </div><!-- /#content-wrap -->
</div>
@endsection

