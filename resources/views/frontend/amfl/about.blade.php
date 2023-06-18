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
                        <span class="trail-end">About Us</span>
                    </div>
                </div>
            </div>
            <div class="featured-title-heading-wrap">
                <h1 class="feautured-title-heading">
                    About Us
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
                    <!-- ICONBOX -->
                    {{-- <div class="row-iconbox">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="themesflat-spacer clearfix" data-desktop="61" data-mobile="60" data-smobile="60"></div>
                                    <div class="themesflat-headings style-1 text-center clearfix">
                                        <h2 class="heading">YOUR BEST CHOOSE</h2>
                                        <div class="sep has-icon width-125 clearfix">
                                            <div class="sep-icon">
                                                <span class="sep-icon-before sep-center sep-solid"></span>
                                                <span class="icon-wrap"><i class="autora-icon-build"></i></span>
                                                <span class="sep-icon-after sep-center sep-solid"></span>
                                            </div>
                                        </div>
                                        <p class="sub-heading">More than 500 projects completed in Autora - With over 25 years of combined experience, we have the knowledge to serve you.</p>
                                    </div>
                                    <div class="themesflat-spacer clearfix" data-desktop="42" data-mobile="35" data-smobile="35"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="themesflat-content-box clearfix" data-margin="0 5px 0 5px" data-mobilemargin="0 0 0 0">
                                        <div class="themesflat-icon-box icon-top align-center has-width w95 circle light-bg accent-color style-1 clearfix">
                                            <div class="icon-wrap">
                                                <i class="autora-icon-quality"></i>
                                            </div>
                                            <div class="text-wrap">
                                                <h5 class="heading"><a href="#">BEST QUALITY</a></h5>
                                                <div class="sep clearfix"></div>
                                                <p class="sub-heading">Autora Construction Services are committed to meeting the highest quality standards without compromising our safety culture.</p>
                                            </div>
                                        </div><!-- /.themesflat-icon-box -->
                                    </div><!-- /.themesflat-content-box -->
                                </div><!-- /.col-md-4 -->
                                <div class="col-md-4">
                                    <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="35"></div>
                                    <div class="themesflat-content-box clearfix" data-margin="0 5px 0 5px" data-mobilemargin="0 0 0 0">
                                        <div class="themesflat-icon-box icon-top align-center has-width w95 circle light-bg accent-color style-1 clearfix">
                                            <div class="icon-wrap">
                                                <i class="autora-icon-time"></i>
                                            </div>
                                            <div class="text-wrap">
                                                <h5 class="heading"><a href="#">ON TIME</a></h5>
                                                <div class="sep clearfix"></div>
                                                <p class="sub-heading">At our company, we respect the customer’s time and schedule and always complete the projects on timely fashion way.</p>
                                            </div>
                                        </div><!-- /.themesflat-icon-box -->
                                    </div><!-- /.themesflat-content-box -->
                                </div><!-- /.col-md-4 -->
                                <div class="col-md-4">
                                    <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="35"></div>
                                    <div class="themesflat-content-box clearfix" data-margin="0 5px 0 5px" data-mobilemargin="0 0 0 0">
                                        <div class="themesflat-icon-box icon-top align-center has-width w95 circle light-bg accent-color style-1 clearfix">
                                            <div class="icon-wrap">
                                                <i class="autora-icon-author"></i>
                                            </div>
                                            <div class="text-wrap">
                                                <h5 class="heading"><a href="#">EXPERIENCED</a></h5>
                                                <div class="sep clearfix"></div>
                                                <p class="sub-heading">As the saying goes practice makes perfect. With our years of experience you can bet on us to get the job done exactly to .</p>
                                            </div>
                                        </div><!-- /.themesflat-icon-box -->
                                    </div><!-- /.themesflat-content-box -->
                                </div><!-- /.col-md-4 -->
                            </div><!-- /.row -->

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="themesflat-spacer clearfix" data-desktop="41" data-mobile="35" data-smobile="35"></div>
                                    <div class="elm-button text-center">
                                        <a href="#" class="themesflat-button bg-accent">ABOUT US</a>
                                    </div>
                                    <div class="themesflat-spacer clearfix" data-desktop="73" data-mobile="60" data-smobile="60"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div> --}}
                    <!-- END ICONBOX -->

                    <!-- ABOUT -->
                    <div class="row-about">
                        <div class="container-fluid">
                            <div class="row equalize sm-equalize-auto">
                                <div class="col-md-6 bg-light-grey">
                                    {{-- <div class="themesflat-spacer clearfix" data-desktop="64" data-mobile="35" data-smobile="35"></div> --}}
                                    <div class="themesflat-content-box clearfix" data-margin="0 4% 0 4.5%" data-mobilemargin="0 0 0 4.5%">
                                        <div class="themesflat-headings style-1 clearfix">
                                            <h2 class="heading">WHO WE ARE</h2>
                                            <div class="sep has-width w80 accent-bg margin-top-11 clearfix"></div>
                                            <p class="sub-heading margin-top-30">AMIN MOHAMMAD FOUNDATION LIMITED (AMFL), a branded housing and commercial building developer has now grown up as a symbol of trust and confidence for the valued customers who need residential and commercial units.</p>
                                            <p class="sub-heading margin-top-30">AMIN MOHAMMAD FOUNDATION LIMITED (AMFL), the flagship company has now emerged as one of the largest and fastest-growing housing developers in Bangladesh. The company has grown with the time and with Bangladesh aiming to improve the living standard of those who have placed their trust in it. The most precious asset of AMFL is its strong and dedicated human resources consisting of people from different disciplines:</p>
                                            <p class="sub-heading margin-top-30">Engineers, Business experts, marketers, Accountants, and other professionals. It always looks forward to innovating and adopt new construction technologies that are available all over the world. AMFL has earned name, fame and business reputation by constructing world class housing apartments and high-rise office buildings. </p>
                                        </div>
                                        {{-- <div class="themesflat-spacer clearfix" data-desktop="26" data-mobile="35" data-smobile="35"></div> --}}
                                        {{-- <div class="content-list">
                                            <div class="themesflat-list has-icon style-1 icon-left clearfix">
                                                <div class="inner">
                                                    <span class="item">
                                                        <span class="icon"><i class="fa fa-check-square"></i></span>
                                                        <span class="text">Completing projects on time & Following budget guidelines</span>
                                                    </span>
                                                </div>
                                            </div><!-- /.themeslat-list -->
                                            <div class="themesflat-list has-icon style-1 icon-left clearfix">
                                                <div class="inner">
                                                    <span class="item">
                                                        <span class="icon"><i class="fa fa-check-square"></i></span>
                                                        <span class="text">Elevated quality of workmanship</span>
                                                    </span>
                                                </div>
                                            </div><!-- /.themeslat-list -->
                                            <div class="themesflat-list has-icon style-1 icon-left clearfix">
                                                <div class="inner">
                                                    <span class="item">
                                                        <span class="icon"><i class="fa fa-check-square"></i></span>
                                                        <span class="text">Meeting diverse supplier requirements</span>
                                                    </span>
                                                </div>
                                            </div><!-- /.themeslat-list -->
                                            <div class="themesflat-list has-icon style-1 icon-left clearfix">
                                                <div class="inner">
                                                    <span class="item">
                                                        <span class="icon"><i class="fa fa-check-square"></i></span>
                                                        <span class="text">Implementing appropriate safety precautions and procedures</span>
                                                    </span>
                                                </div>
                                            </div><!-- /.themeslat-list -->
                                        </div> --}}
                                        <!-- /.content-list -->
                                        <div class="themesflat-spacer clearfix" data-desktop="42" data-mobile="35" data-smobile="35"></div>
                                        {{-- <div class="elm-button">
                                            <a href="#"  class="themesflat-button bg-white">GET IN TOUCH</a>
                                        </div> --}}
                                    </div><!-- /.themesflat-content-box -->
                                    <div class="themesflat-spacer clearfix" data-desktop="76" data-mobile="60" data-smobile="60"></div>
                                </div>

                                <!-- /.col-md-6 -->
                                <div class="col-md-6 half-background style-1" style="background-image: url('{{ asset('frontend/assets/img/amfl/about/1.png')}}');center center no-repeat; background-size: cover;">
                                </div>
                                <!-- /.col-md-6 -->
                            </div><!-- /.row -->
                        </div><!-- /.container-fluid -->
                    </div>
                    <div class="row-about">
                        <div class="container-fluid">
                            <div class="row equalize sm-equalize-auto">
                                <div class="col-md-6 half-background style-1" style="background-image: url('{{ asset('frontend/assets/img/amfl/about/2.png')}}');center center no-repeat; background-size: cover;">
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6 bg-light-grey">
                                    <div class="themesflat-spacer clearfix" data-desktop="64" data-mobile="35" data-smobile="35"></div>
                                    <div class="themesflat-content-box clearfix" data-margin="0 5% 0 4.5%" data-mobilemargin="0 0 0 4.5%">
                                        <div class="themesflat-headings style-1 clearfix">
                                            <h2 class="heading">MISSION & VISION</h2>
                                            <div class="sep has-width w80 accent-bg margin-top-11 clearfix"></div>
                                            <p class="sub-heading margin-top-30">To provide the finest real estate products services in the region based on the highest standard of ethics, values and client care.</p>
                                            <p class="sub-heading margin-top-30">To be a world-class conglomerate that exceeds customer’s expectation with innovative products and services </p>
                                        </div>
                                        <div class="themesflat-spacer clearfix" data-desktop="26" data-mobile="35" data-smobile="35"></div>
                                        {{-- <div class="content-list">
                                            <div class="themesflat-list has-icon style-1 icon-left clearfix">
                                                <div class="inner">
                                                    <span class="item">
                                                        <span class="icon"><i class="fa fa-check-square"></i></span>
                                                        <span class="text">Completing projects on time & Following budget guidelines</span>
                                                    </span>
                                                </div>
                                            </div><!-- /.themeslat-list -->
                                            <div class="themesflat-list has-icon style-1 icon-left clearfix">
                                                <div class="inner">
                                                    <span class="item">
                                                        <span class="icon"><i class="fa fa-check-square"></i></span>
                                                        <span class="text">Elevated quality of workmanship</span>
                                                    </span>
                                                </div>
                                            </div><!-- /.themeslat-list -->
                                            <div class="themesflat-list has-icon style-1 icon-left clearfix">
                                                <div class="inner">
                                                    <span class="item">
                                                        <span class="icon"><i class="fa fa-check-square"></i></span>
                                                        <span class="text">Meeting diverse supplier requirements</span>
                                                    </span>
                                                </div>
                                            </div><!-- /.themeslat-list -->
                                            <div class="themesflat-list has-icon style-1 icon-left clearfix">
                                                <div class="inner">
                                                    <span class="item">
                                                        <span class="icon"><i class="fa fa-check-square"></i></span>
                                                        <span class="text">Implementing appropriate safety precautions and procedures</span>
                                                    </span>
                                                </div>
                                            </div><!-- /.themeslat-list -->
                                        </div> --}}
                                        <!-- /.content-list -->
                                        <div class="themesflat-spacer clearfix" data-desktop="42" data-mobile="35" data-smobile="35"></div>
                                        {{-- <div class="elm-button">
                                            <a href="#"  class="themesflat-button bg-white">GET IN TOUCH</a>
                                        </div> --}}
                                    </div><!-- /.themesflat-content-box -->
                                    <div class="themesflat-spacer clearfix" data-desktop="76" data-mobile="60" data-smobile="60"></div>
                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->
                        </div><!-- /.container-fluid -->
                    </div>
                     <!-- QUOTE -->
                     <div class="row-quote bg-row-1" style="background-image: url('{{ asset('frontend/assets/img/amfl/slider-2-1920x600.jpg')}}');center center no-repeat; background-size: cover;">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="themesflat-spacer clearfix" data-desktop="38" data-mobile="35" data-smobile="35"></div>
                                    <div class="themesflat-quote style-1 clearfix">
                                        <div class="quote-item">
                                            <div class="inner">
                                                <div class="heading-wrap">
                                                    <h3 class="heading text-center">MESSAGE FROME BOARD OF DIRECTORS</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="themesflat-spacer clearfix" data-desktop="33" data-mobile="35" data-smobile="35"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div>
                    <!-- END QUOTE -->
                    <div class="row-about">
                        <div class="container-fluid">
                            <div class="row equalize sm-equalize-auto">
                                <div class="col-md-6 bg-light-grey">
                                    <div class="themesflat-spacer clearfix" data-desktop="64" data-mobile="35" data-smobile="35"></div>
                                    <div class="themesflat-content-box clearfix" data-margin="0 4% 0 4.5%" data-mobilemargin="0 0 0 4.5%">
                                        <div class="themesflat-headings style-1 clearfix">
                                            <h2 class="heading"> OUR FOUNDER OF CHAIRMAN’S</h2>
                                            <div class="sep has-width w80 accent-bg margin-top-11 clearfix"></div>
                                            <p class="sub-heading margin-top-0">Late M.M. Enamul Haque (1958-2023) <br><span style="font-size: 13px;">(Founder Chairman Amin Mohammad Group) </span> </p>
                                            <p class="sub-heading margin-top-0">He built this organization with a vision for the city dwellers and the country itself. He led the vision and pursued the dream. He foresight the future perspectives of how cities will grow and develop over time. </p>
                                            <p class="sub-heading margin-top-0">While embarking on property developments the vision he had set, is to add value to property, value human life itself and offer a lifestyle that people have earned and deserve. He used to believe that plane development can result in the creation of modern urbanization. While this may detract from the commercial considerations initially it will surely create a better more livable environment that will produce healthy generations of citizens. To him, Environmental preservation is a statement with large upon all the development efforts.</p>
                                            <p class="sub-heading margin-top-0">He proved that, success is a result of hard work. He believed hard work should be rewarded. Thus, he was involved in developing a lifestyle that people deserve and that would serve as a social motivator to others to work hard and succeed. He added creativity to that and the result is Amin Mohammad Group.</p>
                                            {{-- <p class="sub-heading margin-top-0"><p class="sub-heading margin-top-0">He proved that, success is a result of hard work. He believed hard work should be rewarded. Thus, he was involved in developing a lifestyle that people deserve and that would serve as a social motivator to others to work hard and succeed. He added creativity to that and the result is Amin Mohammad Group.</p></p> --}}
                                        </div>
                                        {{-- <div class="themesflat-spacer clearfix" data-desktop="26" data-mobile="35" data-smobile="35"></div> --}}
                                        <!-- /.content-list -->
                                        <div class="themesflat-spacer clearfix" data-desktop="42" data-mobile="35" data-smobile="35"></div>
                                        {{-- <div class="elm-button">
                                            <a href="#"  class="themesflat-button bg-white">GET IN TOUCH</a>
                                        </div> --}}
                                    </div><!-- /.themesflat-content-box -->
                                    <div class="themesflat-spacer clearfix" data-desktop="76" data-mobile="60" data-smobile="60"></div>
                                </div>
                                <!-- /.col-md-6 -->
                                <div class="col-md-6 half-background style-1" style="background-image: url('{{ asset('frontend/assets/img/amfl/about/ch_1.jpg')}}');center center no-repeat; background-size: cover; height:910px;">
                                </div>
                                <!-- /.col-md-6 -->
                            </div><!-- /.row -->
                        </div><!-- /.container-fluid -->
                    </div>
                    <div class="row-about">
                        <div class="container-fluid">
                            <div class="row equalize sm-equalize-auto">
                                <div class="col-md-6 half-background style-1" style="background-image: url('{{ asset('frontend/assets/img/amfl/about/ch_2.jpg')}}');center center no-repeat; background-size: cover;">
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6 bg-light-grey" style="height: 700px;">
                                    <div class="themesflat-spacer clearfix" data-desktop="64" data-mobile="35" data-smobile="35"></div>
                                    <div class="themesflat-content-box clearfix" data-margin="0 5% 0 4.5%" data-mobilemargin="0 0 0 4.5%">
                                        <div class="themesflat-headings style-1 clearfix">
                                            <h2 class="heading">THE MANAGING DIRECTOR</h2>
                                            <div class="sep has-width w80 accent-bg margin-top-11 clearfix"></div>
                                            <p class="sub-heading margin-top-0">Md. Ramzanul Haque Nihad, son of Late M.M. Enamul Haque and Mrs. Bilkis Haque, is born on 14th April, 1986. A successful visionary business entrepreneur who has entered into the realm of business horizon after completion of his graduation, in Bachelors in Commerce (Major in Management, Human Resource Development & International Management) from Australia. His dynamic leadership initiated a number of businesses in Amin Mohammad Group and looking to take this organization to a new level.</p>
                                            <p class="sub-heading margin-top-0">Amin Mohammad Property Management Ltd. started its journey under his guidance and observance. According to Mr. Haque, “After a successful long experience in the real estate sector, we observed that a modern building could not function properly without an effective and reliable management system. </p>
                                        </div>
                                        <div class="themesflat-spacer clearfix" data-desktop="26" data-mobile="35" data-smobile="35"></div>

                                        <!-- /.content-list -->
                                        <div class="themesflat-spacer clearfix" data-desktop="42" data-mobile="35" data-smobile="35"></div>
                                        {{-- <div class="elm-button">
                                            <a href="#"  class="themesflat-button bg-white">GET IN TOUCH</a>
                                        </div> --}}
                                    </div><!-- /.themesflat-content-box -->
                                    <div class="themesflat-spacer clearfix" data-desktop="76" data-mobile="60" data-smobile="60"></div>
                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->
                        </div><!-- /.container-fluid -->
                    </div>
                    <!-- END ABOUT -->
                     <!-- TEAM -->
                     <div class="row-team">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="themesflat-spacer clearfix" data-desktop="61" data-mobile="60" data-smobile="60"></div>
                                    <div class="themesflat-headings style-1 text-center clearfix">
                                        <h2 class="heading">BOARD OF DIRECTORS </h2>
                                        <div class="sep has-icon width-125 clearfix">
                                            <div class="sep-icon">
                                                <span class="sep-icon-before sep-center sep-solid"></span>
                                                <span class="icon-wrap"><i class="autora-icon-build"></i></span>
                                                <span class="sep-icon-after sep-center sep-solid"></span>
                                            </div>
                                        </div>
                                        <p class="sub-heading font-weight-400 text-808 max-width-680">With us you will have the peace of mind knowing that your dream home project is in the hands of a licensed fully insured building company.</p>
                                    </div>
                                    <div class="themesflat-spacer clearfix" data-desktop="39" data-mobile="35" data-smobile="35"></div>
                                    <div class="themesflat-carousel-box data-effect has-bullets bullet-circle bullet24 clearfix" data-gap="30" data-column="3" data-column2="2" data-column3="1" data-auto="true">
                                        <div class="owl-carousel owl-theme">
                                            @foreach ($boardof_directors as $item)
                                            <div class="themesflat-team style-1 align-center clearfix">
                                                <div class="team-item">
                                                    <div class="inner">
                                                        <div class="thumb data-effect-item">
                                                            <img src="{{ asset($item->director_image) }}" alt="Image">
                                                            <ul class="socials clearfix">
                                                                <li class="facebook"><a href="#"><i class="autora-icon-facebook"></i></a></li>
                                                                <li class="twitter"><a href="#"><i class="autora-icon-twitter"></i></a></li>
                                                                <li class="camera"><a href="#"><i class="autora-icon-camera-outline"></i></a></li>
                                                            </ul>
                                                            <div class="overlay-effect bg-color-4"></div>
                                                        </div>
                                                        <div class="text-wrap">
                                                            <a href="{{ route('user.director',$item->id) }}"><h6 class="name">{{$item->director_name}}</h6></a>
                                                            <a href="{{ route('user.director',$item->id) }}"><div class="position">{{$item->director_designation}}</div></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            <!-- /.themesflat-team -->
                                        </div><!-- /.owl-carousel -->
                                    </div><!-- /.themesflat-carousel -->
                                    <div class="themesflat-spacer clearfix" data-desktop="80" data-mobile="60" data-smobile="60"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div>
                    <!-- END TEAM -->
                    <!-- QUOTE -->
                    <div class="row-quote bg-row-1 mt-3" style="background-image: url('{{ asset('frontend/assets/img/amfl/slider-2-1920x600.jpg')}}');center center no-repeat; background-size: cover;">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="themesflat-spacer clearfix" data-desktop="38" data-mobile="35" data-smobile="35"></div>
                                    <div class="themesflat-quote style-1 clearfix">
                                        <div class="quote-item">
                                            <div class="inner">
                                                <div class="heading-wrap">
                                                    <h3 class="heading">START EXECUTING YOUR PROJECT</h3>
                                                </div>
                                                <div class="button-wrap has-icon icon-left">
                                                    <a href="tel:0 1844 527 808" class="themesflat-button bg-white small"><span>(+880) 1844 527 808 <span class="icon"><i class="autora-icon-phone-contact"></i></span></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="themesflat-spacer clearfix" data-desktop="33" data-mobile="35" data-smobile="35"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div>
                    <!-- END QUOTE -->
                    <!-- TABS -->
                    <div class="row-tabs">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="themesflat-spacer clearfix" data-desktop="61" data-mobile="60" data-smobile="60"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="themesflat-content-box clearfix" data-margin="0 18px 0 0" data-mobilemargin="0 0 0 0">
                                        <div class="themesflat-headings style-1 clearfix">
                                            <h2 class="heading">OVERVIEW</h2>
                                            <div class="sep has-width w80 accent-bg margin-top-11 clearfix"></div>
                                        </div>
                                        <div class="themesflat-spacer clearfix" data-desktop="38" data-mobile="35" data-smobile="35"></div>
                                        <div class="themesflat-tabs style-1 clearfix">
                                            <ul class="tab-title clearfix">
                                                <li class="item-title active">
                                                    <span class="inner">Our focus</span>
                                                </li>
                                                <li class="item-title">
                                                    <span class="inner">Dedicated</span>
                                                </li>
                                                <li class="item-title">
                                                    <span class="inner">Committed</span>
                                                </li>
                                            </ul>
                                            <div class="tab-content-wrap clearfix">
                                                <div class="tab-content">
                                                    <div class="item-content">
                                                        <p>Our focus is to exceed your goals, meet your timelines and successfully manage your budget. We provide our clients with top-notch general contracting, construction management, site surveys and design build services.</p>
                                                        <div class="themesflat-list has-icon style-1 icon-left ofset-padding-32 clearfix">
                                                            <div class="inner">
                                                                <span class="item">
                                                                    <span class="icon"><i class="fa fa-check-square"></i></span>
                                                                    <span class="text">We have successfully completed projects in numerous states.</span>
                                                                </span>
                                                            </div>
                                                        </div><!-- /.themeslat-list -->
                                                        <div class="themesflat-list has-icon style-1 icon-left ofset-padding-32 clearfix">
                                                            <div class="inner">
                                                                <span class="item">
                                                                    <span class="icon"><i class="fa fa-check-square"></i></span>
                                                                    <span class="text">We is licensed to perform general contracting work in most states. </span>
                                                                </span>
                                                            </div>
                                                        </div><!-- /.themeslat-list -->
                                                        <div class="themesflat-list has-icon style-1 icon-left ofset-padding-32 clearfix">
                                                            <div class="inner">
                                                                <span class="item">
                                                                    <span class="icon"><i class="fa fa-check-square"></i></span>
                                                                    <span class="text">We will be open to obtaining new licensing if an opportunity arises</span>
                                                                </span>
                                                            </div>
                                                        </div><!-- /.themeslat-list -->
                                                    </div>
                                                </div><!-- /.tab-content -->
                                                <div class="tab-content">
                                                    <div class="item-content">
                                                        <p>Our focus is to exceed your goals, meet your timelines and successfully manage your budget. We provide our clients with top-notch general contracting, construction management, site surveys and design build services.</p>
                                                        <div class="themesflat-list has-icon style-1 icon-left ofset-padding-32 clearfix">
                                                            <div class="inner">
                                                                <span class="item">
                                                                    <span class="icon"><i class="fa fa-check-square"></i></span>
                                                                    <span class="text">We have successfully completed projects in numerous states.</span>
                                                                </span>
                                                            </div>
                                                        </div><!-- /.themeslat-list -->
                                                        <div class="themesflat-list has-icon style-1 icon-left ofset-padding-32 clearfix">
                                                            <div class="inner">
                                                                <span class="item">
                                                                    <span class="icon"><i class="fa fa-check-square"></i></span>
                                                                    <span class="text">We is licensed to perform general contracting work in most states. </span>
                                                                </span>
                                                            </div>
                                                        </div><!-- /.themeslat-list -->
                                                        <div class="themesflat-list has-icon style-1 icon-left ofset-padding-32 clearfix">
                                                            <div class="inner">
                                                                <span class="item">
                                                                    <span class="icon"><i class="fa fa-check-square"></i></span>
                                                                    <span class="text">We will be open to obtaining new licensing if an opportunity arises</span>
                                                                </span>
                                                            </div>
                                                        </div><!-- /.themeslat-list -->
                                                    </div>
                                                </div><!-- /.tab-content -->
                                                <div class="tab-content">
                                                    <div class="item-content">
                                                        <p>Our focus is to exceed your goals, meet your timelines and successfully manage your budget. We provide our clients with top-notch general contracting, construction management, site surveys and design build services.</p>
                                                        <div class="themesflat-list has-icon style-1 icon-left ofset-padding-32 clearfix">
                                                            <div class="inner">
                                                                <span class="item">
                                                                    <span class="icon"><i class="fa fa-check-square"></i></span>
                                                                    <span class="text">We have successfully completed projects in numerous states.</span>
                                                                </span>
                                                            </div>
                                                        </div><!-- /.themeslat-list -->
                                                        <div class="themesflat-list has-icon style-1 icon-left ofset-padding-32 clearfix">
                                                            <div class="inner">
                                                                <span class="item">
                                                                    <span class="icon"><i class="fa fa-check-square"></i></span>
                                                                    <span class="text">We is licensed to perform general contracting work in most states. </span>
                                                                </span>
                                                            </div>
                                                        </div><!-- /.themeslat-list -->
                                                        <div class="themesflat-list has-icon style-1 icon-left ofset-padding-32 clearfix">
                                                            <div class="inner">
                                                                <span class="item">
                                                                    <span class="icon"><i class="fa fa-check-square"></i></span>
                                                                    <span class="text">We will be open to obtaining new licensing if an opportunity arises</span>
                                                                </span>
                                                            </div>
                                                        </div><!-- /.themeslat-list -->
                                                    </div>
                                                </div><!-- /.tab-content -->
                                            </div><!-- /.tab-content-wrap -->
                                        </div><!-- /.themesflat-tabs -->
                                    </div><!-- /.themesflat-content-box -->
                                </div><!-- /.col-md-6 -->

                                <div class="col-md-6">
                                    <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="35"></div>
                                    <div class="themesflat-content-box" data-margin="0 0 0 18px" data-mobilemargin="0 0 0 0">
                                        <div class="themesflat-headings style-1 clearfix">
                                            <h2 class="heading">FAQs</h2>
                                            <div class="sep has-width w80 accent-bg margin-top-11 clearfix"></div>
                                        </div>
                                        <div class="themesflat-spacer clearfix" data-desktop="38" data-mobile="35" data-smobile="35"></div>
                                        <div class="themesflat-accordions style-1 has-icon icon-left iconstyle-1 clearfix">
                                            <div class="accordion-item active">
                                                <h3 class="accordion-heading"><span class="inner">Are there any hosting companies you recommend?</span></h3>
                                                <div class="accordion-content">
                                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</div>
                                                </div>
                                            </div><!-- /.accordion-item -->
                                            <div class="accordion-item">
                                                <h3 class="accordion-heading"><span class="inner">We use technology to do the job more quickly</span></h3>
                                                <div class="accordion-content">
                                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</div>
                                                </div>
                                            </div><!-- /.accordion-item -->
                                            <div class="accordion-item ">
                                                <h3 class="accordion-heading"><span class="inner">Employees are continually trained on safety issues</span></h3>
                                                <div class="accordion-content">
                                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</div>
                                                </div>
                                            </div><!-- /.accordion-item -->
                                        </div><!-- /.themesflat-accordion -->
                                    </div><!-- /.themesflat-content-box -->
                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="0"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div>
                    <!-- END TABS -->

                    <!-- PARTNER -->
                    <!-- END PARTNER -->
                    <br><br>
               </div><!-- /.page-content -->
            </div><!-- /#inner-content -->
        </div><!-- /#site-content -->
    </div><!-- /#content-wrap -->
</div><!-- /#main-content -->
@endsection
