
@extends('frontend.main_master')

@section('index')
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
                                        data-responsive_offset="on">
                                        A GLOBAL LEADER IN INFRASTRUCTURE
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
                                        data-responsive_offset="on">
                                        WE WILL BE HAPPY
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
                                        data-responsive_offset="on">
                                        TO TAKE CARE OF YOUR WORK
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

                                <!-- Slide 2 -->
                                {{-- <li data-transition="random">
                                    <!-- Main Image -->
                                    <img src="assets/img/slider/slider-bg-3.jpg" alt="" data-bgposition="center center" data-no-retina>

                                    <!-- Layers -->
                                    <div class="tp-caption tp-resizeme text-white font-heading font-weight-600 text-center"
                                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
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
                                        data-responsive_offset="on">
                                        A GLOBAL LEADER IN INFRASTRUCTURE
                                    </div>

                                    <div class="tp-caption tp-resizeme text-white font-heading font-weight-700 text-center"
                                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
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
                                        data-responsive_offset="on">
                                        WE WILL BE HAPPY
                                    </div>

                                    <div class="tp-caption tp-resizeme text-white font-heading font-weight-700 text-center"
                                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
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
                                        data-responsive_offset="on">
                                        TO TAKE CARE OF YOUR WORK
                                    </div>

                                    <div class="tp-caption text-center"
                                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
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
                                        <a href="#" class="themesflat-button bg-accent big"><span>GET IN TOUCH</span></a>
                                    </div>
                                </li> --}}
                                <!-- /End Slide 2 -->

                                <!-- Slide 3 -->
                                {{-- <li data-transition="random">
                                    <!-- Main Image -->
                                    <img src="assets/img/slider/slider-bg-4.jpg" alt="" data-bgposition="center center" data-no-retina>

                                    <!-- Layers -->
                                    <div class="tp-caption tp-resizeme text-white font-heading font-weight-600 text-right"
                                        data-x="['right','right','right','center']" data-hoffset="['0','0','0','0']"
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
                                        data-responsive_offset="on">
                                        A GLOBAL LEADER IN INFRASTRUCTURE
                                    </div>

                                    <div class="tp-caption tp-resizeme text-white font-heading font-weight-700 text-right"
                                        data-x="['right','right','right','center']" data-hoffset="['0','0','0','0']"
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
                                        data-responsive_offset="on">
                                        WE WILL BE HAPPY
                                    </div>

                                    <div class="tp-caption tp-resizeme text-white font-heading font-weight-700 text-right"
                                        data-x="['right','right','right','center']" data-hoffset="['0','0','0','0']"
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
                                        data-responsive_offset="on">
                                        TO TAKE CARE OF YOUR WORK
                                    </div>

                                    <div class="tp-caption text-right"
                                        data-x="['right','right','right','center']" data-hoffset="['0','0','0','0']"
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
                                        <a href="#" class="themesflat-button bg-accent big"><span>GET IN TOUCH</span></a>
                                    </div>
                                </li> --}}
                                <!-- /End Slide 3 -->
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
                                                            <span class="number" data-speed="2000" data-to="9240" data-inviewport="yes">9240</span><span class="suffix">+</span>
                                                        </div>
                                                        <h3 class="heading margin-right-18">PROJECT COMPLETED</h3>
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
                                                            <span class="number" data-speed="2000" data-to="336" data-inviewport="yes">336</span><span class="suffix">+</span>
                                                        </div>
                                                        <h3 class="heading margin-right-6">AWARDS WON</h3>
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
                                                            <span class="number" data-speed="2000" data-to="725" data-inviewport="yes">725</span><span class="suffix">+</span>
                                                        </div>
                                                        <h3 class="heading margin-right-8">SATISFIED CLIENTS</h3>
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
                                                            <span class="number" data-speed="2000" data-to="2984" data-inviewport="yes">2984</span><span class="suffix">+</span>
                                                        </div>
                                                        <h3 class="heading margin-right-10">WORKERS EMPLOYED</h3>
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
                                                        <div class="thumb data-effect-item">
                                                            <img src="{{asset($item->project_thambnail)}}" alt="Image">
                                                            <div class="overlay-effect bg-color-accent"></div>
                                                        </div>
                                                        <div class="text-wrap">
                                                            <h5 class="heading"><a href="#">{{$item->project_name}}</a></h5>
                                                            <p>We develop and understand project expectations and then manage those needs with a design team...</p>
                                                            <div class="elm-readmore">
                                                                <a href="{{ route('user.project.details',$item->id) }}">DETAILS</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            <!-- /.themesflat-image-box -->

                                            {{-- <div class="themesflat-image-box style-2 clearfix">
                                                <div class="image-box-item">
                                                    <div class="inner">
                                                        <div class="thumb data-effect-item">
                                                            <img src="{{ asset('frontend/assets/img/imagebox/image-box-2-370x215.jpg')}}" alt="Image">
                                                            <div class="overlay-effect bg-color-accent"></div>
                                                        </div>
                                                        <div class="text-wrap">
                                                            <h5 class="heading"><a href="#">CONSTRUCTION MANAGEMENT</a></h5>
                                                            <p>We work closely with architects to understand the project, and ultimately develop a targeted...</p>
                                                            <div class="elm-readmore">
                                                                <a href="#">DETAILS</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.themesflat-image-box -->

                                            <div class="themesflat-image-box style-2 clearfix">
                                                <div class="image-box-item">
                                                    <div class="inner">
                                                        <div class="thumb data-effect-item">
                                                            <img src="{{ asset('frontend/assets/img/imagebox/image-box-3-370x215.jpg')}}" alt="Image">
                                                            <div class="overlay-effect bg-color-accent"></div>
                                                        </div>
                                                        <div class="text-wrap">
                                                            <h5 class="heading"><a href="#">METAL BUILDING SERVICES</a></h5>
                                                            <p> In the past decade alone, we have completed more than 5 million square feet of metal building...</p>
                                                            <div class="elm-readmore">
                                                                <a href="#">DETAILS</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.themesflat-image-box -->

                                            <div class="themesflat-image-box style-2 clearfix">
                                                <div class="image-box-item">
                                                    <div class="inner">
                                                        <div class="thumb data-effect-item">
                                                            <img src="{{ asset('frontend/assets/img/imagebox/image-box-1-370x215.jpg')}}" alt="Image">
                                                            <div class="overlay-effect bg-color-accent"></div>
                                                        </div>
                                                        <div class="text-wrap">
                                                            <h5 class="heading"><a href="#">DESIGN-BUILD</a></h5>
                                                            <p>We develop and understand project expectations and then manage those needs with a design team...</p>
                                                            <div class="elm-readmore">
                                                                <a href="#">DETAILS</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.themesflat-image-box -->

                                            <div class="themesflat-image-box style-2 clearfix">
                                                <div class="image-box-item">
                                                    <div class="inner">
                                                        <div class="thumb data-effect-item">
                                                            <img src="{{ asset('frontend/assets/img/imagebox/image-box-2-370x215.jpg')}}" alt="Image">
                                                            <div class="overlay-effect bg-color-accent"></div>
                                                        </div>
                                                        <div class="text-wrap">
                                                            <h5 class="heading"><a href="#">CONSTRUCTION MANAGEMENT</a></h5>
                                                            <p>We work closely with architects to understand the project, and ultimately develop a targeted...</p>
                                                            <div class="elm-readmore">
                                                                <a href="#">DETAILS</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.themesflat-image-box -->

                                            <div class="themesflat-image-box style-2 clearfix">
                                                <div class="image-box-item">
                                                    <div class="inner">
                                                        <div class="thumb data-effect-item">
                                                            <img src="{{ asset('frontend/assets/img/imagebox/image-box-3-370x215.jpg')}}" alt="Image">
                                                            <div class="overlay-effect bg-color-accent"></div>
                                                        </div>
                                                        <div class="text-wrap">
                                                            <h5 class="heading"><a href="#">METAL BUILDING SERVICES</a></h5>
                                                            <p> In the past decade alone, we have completed more than 5 million square feet of metal building...</p>
                                                            <div class="elm-readmore">
                                                                <a href="#">DETAILS</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.themesflat-image-box --> --}}
                                        </div>
                                    </div><!-- /.themesflat-carousel-box -->
                                    <div class="themesflat-spacer clearfix" data-desktop="45" data-mobile="60" data-smobile="60"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div>
                    <!-- END SERVICES -->

                    <!-- ICONBOX -->
                    <div class="row-iconbox bg-row-2" style="background-image: url('{{ asset('frontend/assets/img/amfl/slider-2-1920x600.jpg')}}');center center no-repeat; background-size: cover;">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="themesflat-spacer clearfix" data-desktop="60" data-mobile="60" data-smobile="60"></div>
                                    <div class="themesflat-headings style-1 text-center clearfix">
                                        <h2 class="heading text-white">LEADING CONSTRUCTION</h2>
                                        <div class="sep has-icon width-125 border-color-light clearfix">
                                            <div class="sep-icon ">
                                                <span class="sep-icon-before sep-center sep-solid"></span>
                                                <span class="icon-wrap"><i class="autora-icon-build"></i></span>
                                                <span class="sep-icon-after sep-center sep-solid"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="themesflat-spacer clearfix" data-desktop="25" data-mobile="35" data-smobile="35"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->

                            <div class="themesflat-row gutter-30 gutter-mobile clearfix">
                                <div class="col span_1_of_3">
                                    <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="35"></div>
                                    <div class="themesflat-icon-box icon-top align-center has-width w95 circle light-bg accent-color style-1 bg-white-column padding-inner clearfix">
                                        <div class="icon-wrap">
                                            <i class="autora-icon-author"></i>
                                        </div>
                                        <div class="text-wrap">
                                            <h5 class="heading"><a href="#">OUR MISSION</a></h5>
                                            <div class="sep clearfix"></div>
                                            <p class="sub-heading">On every job, we demand the highest quality standards in all our products and services.</p>
                                        </div>
                                    </div><!-- /.themesflat-icon-box -->
                                    <div class="divider h35"></div>
                                </div><!-- /.col-md-3 -->

                                <div class="col span_1_of_3">
                                    <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="35"></div>
                                    <div class="themesflat-icon-box icon-top align-center has-width w95 circle light-bg accent-color style-1 bg-white-column padding-inner clearfix">
                                        <div class="icon-wrap">
                                            <i class="autora-icon-quality"></i>
                                        </div>
                                        <div class="text-wrap">
                                            <h5 class="heading"><a href="#">BEST QUALITY</a></h5>
                                            <div class="sep clearfix"></div>
                                            <p class="sub-heading">We are committed to meeting the highest quality standards without compromising our.</p>
                                        </div>
                                    </div><!-- /.themesflat-icon-box -->
                                    <div class="divider h35"></div>
                                </div><!-- /.col-md-3 -->
                                <div class="col span_1_of_3">
                                    <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="35" data-smobile="35"></div>
                                    <div class="themesflat-icon-box icon-top align-center has-width w95 circle light-bg accent-color style-1 bg-white-column padding-inner clearfix">
                                        <div class="icon-wrap">
                                            <i class="autora-icon-time"></i>
                                        </div>
                                        <div class="text-wrap">
                                            <h5 class="heading"><a href="#">ON TIME</a></h5>
                                            <div class="sep clearfix"></div>
                                            <p class="sub-heading">We respect the customer’s time and schedule and always complete the projects on time.</p>
                                        </div>
                                    </div><!-- /.themesflat-icon-box -->
                                </div><!-- /.col-md-3 -->
                                <div class="col span_1_of_3">
                                    <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="35" data-smobile="35"></div>
                                    <div class="themesflat-icon-box icon-top align-center has-width w95 circle light-bg accent-color style-1 bg-white-column padding-inner clearfix">
                                        <div class="icon-wrap">
                                            <i class="autora-icon-author"></i>
                                        </div>
                                        <div class="text-wrap">
                                            <h5 class="heading"><a href="#">EXPERIENCED</a></h5>
                                            <div class="sep clearfix"></div>
                                            <p class="sub-heading">With our years of experience you can bet on us to get the job done exactly the projects on time.</p>
                                        </div>
                                    </div><!-- /.themesflat-icon-box -->
                                </div><!-- /.col-md-3 -->
                            </div><!-- /.row -->

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="themesflat-spacer clearfix" data-desktop="80" data-mobile="60" data-smobile="60"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div>
                    <!-- END ICONBOX -->

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
                                            <h3 class="title">PARTNERSHIP</h3>
                                            <div class="perc-wrap">
                                                <div class="perc"><span>80%</span></div>
                                            </div>
                                            <div class="progress-bg" data-percent="80" data-inviewport="yes">
                                                <div class="progress-animate"></div>
                                            </div>
                                        </div><!-- /.themesflat-progrees -->
                                        <div class="themesflat-spacer clearfix" data-desktop="25" data-mobile="25" data-smobile="25"></div>
                                        <div class="themesflat-progress style-1 height-10px clearfix">
                                            <h3 class="title">FULL SUPPORT</h3>
                                            <div class="perc-wrap">
                                                <div class="perc"><span>90%</span></div>
                                            </div>
                                            <div class="progress-bg" data-percent="90" data-inviewport="yes">
                                                <div class="progress-animate"></div>
                                            </div>
                                        </div><!-- /.themesflat-progrees -->
                                        <div class="themesflat-spacer clearfix" data-desktop="26" data-mobile="26" data-smobile="26"></div>
                                        <div class="themesflat-progress style-1 height-10px clearfix">
                                            <h3 class="title">OPPORTUNITY</h3>
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
                                                <h3 class="accordion-heading"><span class="inner">Are there any hosting companies you... ?</span></h3>
                                                <div class="accordion-content">
                                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</div>
                                                </div>
                                            </div><!-- /.accordion-item -->
                                            <div class="accordion-item">
                                                <h3 class="accordion-heading"><span class="inner">We use technology to do the job more... ?</span></h3>
                                                <div class="accordion-content">
                                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</div>
                                                </div>
                                            </div><!-- /.accordion-item -->
                                            <div class="accordion-item ">
                                                <h3 class="accordion-heading"><span class="inner">Employees are continually trained on safety... ?</span></h3>
                                                <div class="accordion-content">
                                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</div>
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
                    <div class="row-request parallax parallax-3"style="background-image: url('{{ asset('frontend/assets/img/amfl/slider-2-1920x600.jpg')}}');center center no-repeat; background-size: cover;">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 ">
                                    <div class="themesflat-spacer clearfix" data-desktop="82" data-mobile="60" data-smobile="60"></div>
                                    <div class="themesflat-request-box style-1 clearfix">
                                        <div class="inner">
                                            <div class="themesflat-headings style-1 clearfix">
                                                <h2 class="heading text-white line-height-normal">REQUEST CALL BACK</h2>
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
                                            <li><a href="#" data-filter=".commercial">COMMERCIAL</a></li>
                                            <li><a href="#" data-filter=".residential">RESIDENTIAL</a></li>
                                            <li><a href="#" data-filter=".green">GREEN HOUSE</a></li>
                                            <li><a href="#" data-filter=".architecture">ARCHITECTURE   </a></li>
                                            <li><a href="#" data-filter=".construction">CONSTRUCTION </a></li>
                                            {{-- <li><a href="#" data-filter=".villa">VILLA</a></li>
                                            <li><a href="#" data-filter=".building">BUILDING</a></li> --}}
                                        </ul>
                                    </div>
                                    <div class="themesflat-spacer clearfix" data-desktop="40" data-mobile="35" data-smobile="35"></div>
                                    <div class="themesflat-project style-2 isotope-project has-margin mg15 data-effect clearfix">
                                        @php
                                            $project = App\Models\Project::where('project_type','commercial')->orderBy('id','desc')->limit(4)->get();
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
                                                        <span><a href="{{ route('user.project.details',$item->id) }}">Green House</a></span>
                                                        <span><a href="{{ route('user.project.details',$item->id) }}">Villa</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        <!-- /.product-item -->
                                        @php
                                        $project = App\Models\Project::where('project_type','residential')->orderBy('id','desc')->limit(4)->get();
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
                                                        <span><a href="{{ route('user.project.details',$item->id) }}">Green House</a></span>
                                                        <span><a href="{{ route('user.project.details',$item->id) }}">Villa</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        <!-- /.product-item -->
                                        @php
                                        $project = App\Models\Project::where('project_type','residential')->orderBy('id','desc')->limit(4)->get();
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
                                                        <span><a href="{{ route('user.project.details',$item->id) }}">Green House</a></span>
                                                        <span><a href="{{ route('user.project.details',$item->id) }}">Villa</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        <!-- /.product-item -->
                                        @php
                                        $project = App\Models\Project::where('project_type','residential')->orderBy('id','desc')->limit(4)->get();
                                        @endphp
                                        @foreach ($project as $item)
                                        <div class="project-item green">
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
                                        $project = App\Models\Project::where('project_type','residential')->orderBy('id','desc')->limit(4)->get();
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
                                                        <span><a href="{{ route('user.project.details',$item->id) }}">Green House</a></span>
                                                        <span><a href="{{ route('user.project.details',$item->id) }}">Villa</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        <!-- /.product-item -->
                                    </div><!-- /.themesflat-project -->
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
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
                    <div class="row-testimonials bg-light-snow"style="background-image: url('{{ asset('frontend/assets/img/amfl/slider-2-1920x600.jpg')}}');center center no-repeat; background-size: cover;">
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
                    </div>
                    <!-- END TESTIMONIALS -->

               </div><!-- /.page-content -->
            </div><!-- /#inner-content -->
        </div><!-- /#site-content -->
    </div><!-- /#content-wrap -->
</div>
@endsection
