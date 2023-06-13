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
                        <a href="{{ url('/project') }}" class="trail-begin">Projects</a>
                        <span class="sep">|</span>
                        <span class="trail-end">Project Single</span>
                    </div>
                </div>
            </div>
            <div class="featured-title-heading-wrap">
                <h1 class="feautured-title-heading">
                    Project Name: {{ $projects->project_name }}
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
                    <!-- PROJECT DETAIL -->
                    <div class="row-project-detail">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="themesflat-spacer clearfix" data-desktop="60" data-mobile="60" data-smobile="60"></div>
                                    <div class="detail-inner-wrap">
                                        <div class="detail-info">
                                            <div class="content-info">
                                                <div class="themesflat-headings style-2 clearfix">
                                                    <h2 class="heading line-height-62">PROJECT NAME : {{ $projects->project_name }}</h2>
                                                    <div class="sep has-width w80 accent-bg clearfix">
                                                    </div>
                                                </div>
                                                <ul class="list-info has-icon icon-left">
                                                    <li><span class="text">Project Type <span class="icon"><i class="fa fa-folder-open"></i></span></span><span class="right">{{ $projects->project_type }}</span></li>
                                                    <li><span class="text">Square Feet <span class="icon"><i class="fa fa-check-square-o" aria-hidden="true"></i></span></span><span class="right">{{ $projects->suqare_feet }}</span></li>
                                                    <li><span class="text">Hight<span class="icon"><i class="fa fa-folder-open"></i></span></span><span class="right">{{ $projects->hight}}</span></li>
                                                    {{-- <li><span class="text">Width <span class="icon"><i class="fa fa-calendar"></i></span></span><span class="right">{{ $projects->width}}</span></li> --}}
                                                    <li><span class="text">Parking<span class="icon"><i class="fa fa-folder-open"></i></span></span><span class="right">{{ $projects->parking }}</span></li>
                                                    <li><span class="text">Facing<span class="icon"><i class="fa fa-fighter-jet" aria-hidden="true"></i></span></span><span class="right">{{ $projects->facing}}</span></li>
                                                    {{-- <li><span class="text">Beedroom<span class="icon"><i class="fa fa-folder-open"></i></span></span><span class="right">{{ $projects->beedroom}}</span></li> --}}
                                                    {{-- <li><span class="text">Available Units<span class="icon"><i class="fa fa-folder-open"></i></span></span><span class="right">{{ $projects->available_units}}</span></li> --}}
                                                    <li><span class="text">Basement<span class="icon"><i class="fa fa-folder-open"></i></span></span><span class="right">{{ $projects->basement}}</span></li>
                                                    <li><span class="text">Location Address<span class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span></span><span class="right">{{ $projects->location_address}}</span></li>
                                                    {{-- <li><span class="text">Tag <span class="icon"><i class="fa fa-tag"></i></span></span><span class="right"><a href="#">Building</a> / <a href="#">Green house</a></span></li> --}}
                                                </ul>
                                            </div><!-- /.content-info -->
                                            <div class="themesflat-spacer clearfix" data-desktop="46" data-mobile="35" data-smobile="35"></div>
                                            <div class="content-info info-brochures">
                                                <div class="themesflat-headings style-2 clearfix">
                                                    <h2 class="heading line-height-62">BROCHURES</h2>
                                                    <div class="sep has-width w60 accent-bg clearfix">
                                                    </div>
                                                </div>
                                                <div class="themesflat-spacer clearfix" data-desktop="34" data-mobile="35" data-smobile="35"></div>
                                                <div class="button-wrap has-icon icon-left size-14 pf21">
                                                    <a href="{{ route('generate.pdf',$projects->id) }}" class="themesflat-button font-default bg-light-white w100"><span>Brochures.PDF <span class="icon"><i class="fa fa-file-pdf-o"></i></span></span></a>
                                                </div>
                                                <div class="button-wrap has-icon icon-left size-14 pf21">
                                                    <a href="#" class="themesflat-button font-default bg-light-white w100"><span>Brochures.DOC <span class="icon"><i class="fa fa-file-word-o"></i></span></span></a>
                                                </div>
                                            </div>
                                            <div class="content-info info-brochures">
                                                <div class="themesflat-headings style-2 clearfix">
                                                    <h2 class="heading line-height-62">Location Map</h2>
                                                    <div class="sep has-width w60 accent-bg clearfix">
                                                    </div>
                                                </div>
                                                <div class="themesflat-spacer clearfix" data-desktop="34" data-mobile="35" data-smobile="35"></div>
                                                <div class="button-wrap has-icon icon-left size-14 pf21">
                                                    <div class="gallery-item" >
                                                        <div class="inner">
                                                            <div class="thumb">
                                                                <div class="">
                                                                    {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.009063908154!2d90.36791717502399!3d23.747056188905237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf4c2674e835%3A0x2b4b8d442218789a!2z4KaG4Kau4Ka_4KaoIOCmruCni-CmueCmvuCmruCnjeCmruCmpiDgppfgp43gprDgp4Hgpqo!5e0!3m2!1sbn!2sbd!4v1686648216437!5m2!1sbn!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
                                                                 <iframe src="{{$projects->location_id}}" width="600" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                                </div>
                                                                {{-- <img src="{{asset($projects->project_map)}}" alt="Image"> --}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="detail-gallery">
                                            <div class="themesflat-spacer clearfix" data-desktop="21" data-mobile="21" data-smobile="21"></div>
                                            <div class="themesflat-gallery style-2 has-arrows arrow-center arrow-circle offset-v-82 has-thumb w185 clearfix" data-gap="0" data-column="1" data-column2="1" data-column3="1" data-auto="false">
                                                 <div class="owl-carousel owl-theme">
                                                    <div class="gallery-item" >
                                                        <div class="inner">
                                                            <div class="thumb">
                                                                <img src="{{asset($projects->project_thambnail)}}" alt="Image">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @foreach ($projects->multiImg as $img)
                                                    <div class="gallery-item">
                                                        <div class="inner">
                                                            <div class="thumb">
                                                                <img src="{{asset($img->photo_name)}}" alt="Image">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                 </div>
                                             </div><!-- /.themesflat-cousel-box -->
                                            <div class="themesflat-spacer clearfix" data-desktop="40" data-mobile="40" data-smobile="40"></div>
                                            <div class="flat-content-wrap style-3 clearfix">
                                                <h5 class="title">PROJECT DESCRIPTION</h5>
                                                <div class="sep has-width w60 accent-bg margin-top-18 clearfix"></div>
                                                <p class="margin-top-28">{{ $projects->project_short_descp}}</p>
                                                {{-- <p>From November 2013 to April 2014, EllisDon was awarded an additional Lump Sum contract for $5 million. This additional scope of work included a lab fit- up on the fourth level of the Krembil Discovery Centre.</p> --}}
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="themesflat-spacer clearfix" data-desktop="58" data-mobile="60" data-smobile="60"></div> --}}
                                </div>
                            </div>
                            {{-- =================Floor plne================= --}}

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="themesflat-spacer clearfix" data-desktop="60" data-mobile="60" data-smobile="60"></div>
                                    <div class="detail-inner-wrap">
                                        <div class="detail-info">
                                            <div class="content-info">
                                                {{-- <div class="themesflat-headings style-2 clearfix">
                                                    <h2 class="heading line-height-62">AMENITIES</h2>
                                                    <div class="sep has-width w80 accent-bg clearfix">
                                                    </div>
                                                </div> --}}
                                                <div class="themesflat-headings style-2 clearfix">
                                                    <h2 class="heading line-height-62">FLOOR ALLOCATION</h2>
                                                    <div class="sep has-width w80 accent-bg clearfix">
                                                    </div>
                                                </div>
                                                <ul class="list-info has-icon icon-left">
                                                <li><span class="text">Ground Floor: 100 - 500 sft. Shops & Showroom. <span class="icon"><i class="fa fa-folder-open"></i></li>
                                                <li><span class="text">1st Floor: 500 - 800 sft. Showroom & Brand Shops. <span class="icon"><i class="fa fa-folder-open"></i></li>
                                                <li><span class="text">2nd to 5th Floor: 500 - 1500 sft. Brand Shops. <span class="icon"><i class="fa fa-folder-open"></i></li>
                                                <li><span class="text">6th to 13th Floor: 1000 - 14000 sft. Office, Chamber <span class="icon"><i class="fa fa-folder-open"></i></li>
                                                <li><span class="text">Lavish Ground Floor Reception. <span class="icon"><i class="fa fa-folder-open"></i></li>
                                                <li><span class="text">Modern Fire Fighting system. <span class="icon"><i class="fa fa-folder-open"></i></li>
                                                <li><span class="text">State of the Art Security System. <span class="icon"><i class="fa fa-folder-open"></i></li>
                                                <li><span class="text">55% open space & airy design. <span class="icon"><i class="fa fa-folder-open"></i></li>
                                                {{-- <li><span class="text">Earthquake Resistance Structure.<span class="icon"><i class="fa fa-folder-open"></i></li> --}}
                                                {{-- <li><span class="text">Strictly Maintained BNBC Rules.<span class="icon"><i class="fa fa-folder-open"></i></li> --}}

                                                </ul>
                                            </div><!-- /.content-info -->

                                            <div class="themesflat-spacer clearfix" data-desktop="46" data-mobile="35" data-smobile="35"></div>

                                            <div class="content-info info-brochures">
                                                <div class="themesflat-headings style-2 clearfix">
                                                    <h2 class="heading line-height-62">AMENITIES</h2>
                                                    <div class="sep has-width w60 accent-bg clearfix">
                                                    </div>
                                                </div>
                                                <div class="themesflat-spacer clearfix" data-desktop="40" data-mobile="35" data-smobile="35"></div>
                                                <div class="button-wrap has-icon icon-left size-14 pf21">
                                                    <div class="gallery-item" >
                                                        <div class="inner">
                                                            <div class="thumb">
                                                                <img src="{{asset($projects->project_icon_img)}}" alt="Image">
                                                                {{-- <img src="{{asset($projects->project_thambnail)}}" alt="Image"> --}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- <div class="button-wrap has-icon icon-left size-14 pf21">
                                                    <a href="#" class="themesflat-button font-default bg-light-white w100"><span>Brochures.DOC <span class="icon"><i class="fa fa-file-word-o"></i></span></span></a>
                                                </div> --}}
                                            </div>
                                        </div>
                                        <div class="detail-gallery">
                                            <div class="themesflat-spacer clearfix" data-desktop="21" data-mobile="21" data-smobile="21"></div>
                                            <div class="themesflat-gallery style-2 has-arrows arrow-center arrow-circle offset-v-82 has-thumb w185 clearfix" data-gap="0" data-column="1" data-column2="1" data-column3="1" data-auto="false">
                                                 <div class="owl-carousel owl-theme">
                                                    <div class="gallery-item">
                                                        <div class="inner">
                                                            <div class="thumb">
                                                                <img src="{{asset($projects->floor_image)}}" alt="Image">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @foreach ($projects->multiImgfloor as $img)
                                                    <div class="gallery-item" >
                                                        <div class="inner">
                                                            <div class="thumb">
                                                                <img src="{{asset($img->photo_name_floor)}}" alt="Image">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                 </div>
                                             </div><!-- /.themesflat-cousel-box -->
                                            {{-- <div class="themesflat-spacer clearfix" data-desktop="40" data-mobile="40" data-smobile="40"></div>
                                            <div class="flat-content-wrap style-3 clearfix">
                                                <h5 class="title">FLOOR DESCRIPTION</h5>
                                                <div class="sep has-width w60 accent-bg margin-top-18 clearfix"></div>
                                                <p>From November 2013 to April 2014, EllisDon was awarded an additional Lump Sum contract for $5 million. This additional scope of work included a lab fit- up on the fourth level of the Krembil Discovery Centre.</p>
                                            </div> --}}
                                        </div>
                                    </div>
                                    <div class="themesflat-spacer clearfix" data-desktop="58" data-mobile="60" data-smobile="60"></div>
                                </div>
                            </div>

                             {{-- =================Floor plne end================= --}}
                               <!-- REQUEST -->
                            <div class="row-request parallax parallax-3"style="background-image: url('{{ asset('frontend/assets/img/amfl/Background_2.JPG')}}');center center no-repeat; background-size: cover;">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12 ">
                                            <div class="themesflat-spacer clearfix" data-desktop="42" data-mobile="60" data-smobile="60"></div>
                                            <div class="themesflat-request-box style-1 clearfix">
                                                <div class="inner">
                                                    <div class="themesflat-headings style-1 clearfix">
                                                        <h2 class="heading text-white line-height-normal">CONTACT WITH US</h2>
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
                                            <div class="themesflat-spacer clearfix" data-desktop="32" data-mobile="60" data-smobile="60"></div>
                                        </div><!-- /.col-md-12 -->
                                    </div><!-- /.row -->
                                </div><!-- /.container -->
                            </div>
                            <!-- END REQUEST -->
                            <!-- /.row -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="themesflat-lines style-1 line-full line-solid clearfix"><span class="line"></span></div>
                                    {{-- <div class="themesflat-spacer clearfix" data-desktop="46" data-mobile="35" data-smobile="35"></div> --}}
                                    <div class="themesflat-headings style-2 clearfix">
                                        <h2 class="heading">RELATED PROJECTS</h2>
                                        <div class="sep has-width w80 accent-bg margin-top-3 clearfix"></div>
                                    </div><!-- /.themesflat-heading -->
                                    <div class="themesflat-spacer clearfix" data-desktop="35" data-mobile="35" data-smobile="35"></div>
                                    <div class="themesflat-carousel-box data-effect has-arrows arrow-top arrow75 arrow-circle arrow-style-2 clearfix" data-gap="30" data-column="3" data-column2="2" data-column3="1" data-auto="false">
                                        <div class="owl-carousel owl-theme">
                                            @foreach ($related_projects as $item)
                                            <div class="themesflat-project style-1 clearfix">
                                                <div class="project-item">
                                                    <div class="inner">
                                                        <div class="thumb data-effect-item has-effect-icon w40 offset-v-43 offset-h-46">
                                                            <img src="{{asset($item->project_thambnail)}}" alt="Image">
                                                            <div class="text-wrap text-center">
                                                                <h5 class="heading"><a href="{{ route('user.project.details',$item->id) }}">{{ $item->project_name }}</a></h5>
                                                                <div class="elm-meta">
                                                                    <span><a href="{{ route('user.project.details',$item->id) }}">{{ $item->project_type}}</a></span>
                                                                    <span><a href="{{ route('user.project.details',$item->id) }}">Building</a></span>
                                                                </div>
                                                            </div>
                                                            <div class="elm-link">
                                                                <a href="{{ route('user.project.details',$item->id) }}" class="icon-1 icon-search"></a>
                                                                {{-- <a href="#" class="icon-1"></a> --}}
                                                            </div>
                                                            <div class="overlay-effect bg-color-3"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            <!-- /.themesflat-project -->
                                            <div class="themesflat-project style-1 clearfix">
                                                <div class="project-item">
                                                    <div class="inner">
                                                        <div class="thumb data-effect-item has-effect-icon w40 offset-v-43 offset-h-46">
                                                            <img src="{{ asset('frontend/assets/img/project/project-2-370x245.jpg')}}" alt="Image">
                                                            <div class="text-wrap text-center">
                                                                <h5 class="heading"><a href="#">LAKE MEADOWS APARTMENTS</a></h5>
                                                                <div class="elm-meta">
                                                                    <span><a href="#">Architecture</a></span>
                                                                    <span><a href="#">Building</a></span>
                                                                </div>
                                                            </div>
                                                            <div class="elm-link">
                                                                <a href="#" class="icon-1 icon-search"></a>
                                                                <a href="#" class="icon-1"></a>
                                                            </div>
                                                            <div class="overlay-effect bg-color-3"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.themesflat-project -->
                                            <div class="themesflat-project style-1 clearfix">
                                                <div class="project-item">
                                                    <div class="inner">
                                                        <div class="thumb data-effect-item has-effect-icon w40 offset-v-43 offset-h-46">
                                                            <img src="{{ asset('frontend/assets/img/project/project-3-370x245.jpg')}}" alt="Image">
                                                            <div class="text-wrap text-center">
                                                                <h5 class="heading"><a href="#">LAKE MEADOWS APARTMENTS</a></h5>
                                                                <div class="elm-meta">
                                                                    <span><a href="#">Architecture</a></span>
                                                                    <span><a href="#">Building</a></span>
                                                                </div>
                                                            </div>
                                                            <div class="elm-link">
                                                                <a href="#" class="icon-1 icon-search"></a>
                                                                <a href="#" class="icon-1"></a>
                                                            </div>
                                                            <div class="overlay-effect bg-color-3"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.themesflat-project -->
                                            <div class="themesflat-project style-1 clearfix">
                                                <div class="project-item">
                                                    <div class="inner">
                                                        <div class="thumb data-effect-item has-effect-icon w40 offset-v-43 offset-h-46">
                                                            <img src="{{ asset('frontend/assets/img/project/project-1-370x245.jpg')}}" alt="Image">
                                                            <div class="text-wrap text-center">
                                                                <h5 class="heading"><a href="#">LAKE MEADOWS APARTMENTS</a></h5>
                                                                <div class="elm-meta">
                                                                    <span><a href="#">Architecture</a></span>
                                                                    <span><a href="#">Building</a></span>
                                                                </div>
                                                            </div>
                                                            <div class="elm-link">
                                                                <a href="#" class="icon-1 icon-search"></a>
                                                                <a href="#" class="icon-1"></a>
                                                            </div>
                                                            <div class="overlay-effect bg-color-3"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.themesflat-project -->
                                            <div class="themesflat-project style-1 clearfix">
                                                <div class="project-item">
                                                    <div class="inner">
                                                        <div class="thumb data-effect-item has-effect-icon w40 offset-v-43 offset-h-46">
                                                            <img src="{{ asset('frontend/assets/img/project/project-2-370x245.jpg')}}" alt="Image">
                                                            <div class="text-wrap text-center">
                                                                <h5 class="heading"><a href="#">LAKE MEADOWS APARTMENTS</a></h5>
                                                                <div class="elm-meta">
                                                                    <span><a href="#">Architecture</a></span>
                                                                    <span><a href="#">Building</a></span>
                                                                </div>
                                                            </div>
                                                            <div class="elm-link">
                                                                <a href="#" class="icon-1 icon-search"></a>
                                                                <a href="#" class="icon-1"></a>
                                                            </div>
                                                            <div class="overlay-effect bg-color-3"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.themesflat-project -->
                                            <div class="themesflat-project style-1 clearfix">
                                                <div class="project-item">
                                                    <div class="inner">
                                                        <div class="thumb data-effect-item has-effect-icon w40 offset-v-43 offset-h-46">
                                                            <img src="{{ asset('frontend/assets/img/project/project-3-370x245.jpg')}}" alt="Image">
                                                            <div class="text-wrap text-center">
                                                                <h5 class="heading"><a href="#">LAKE MEADOWS APARTMENTS</a></h5>
                                                                <div class="elm-meta">
                                                                    <span><a href="#">Architecture</a></span>
                                                                    <span><a href="#">Building</a></span>
                                                                </div>
                                                            </div>
                                                            <div class="elm-link">
                                                                <a href="#" class="icon-1 icon-search"></a>
                                                                <a href="#" class="icon-1"></a>
                                                            </div>
                                                            <div class="overlay-effect bg-color-3"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.themesflat-project -->
                                        </div>
                                    </div><!-- /.themesflat-carousel-box -->
                                    <div class="themesflat-spacer clearfix" data-desktop="80" data-mobile="60" data-smobile="60"></div>
                                </div>
                            </div>
                        </div><!-- /.container -->
                    </div>
                    <!-- END PROJECT DETAIL -->
                </div><!-- /.page-content -->

            </div><!-- /#inner-content -->
        </div><!-- /#site-content -->
    </div><!-- /#content-wrap -->
</div><!-- /#main-content -->

@endsection
