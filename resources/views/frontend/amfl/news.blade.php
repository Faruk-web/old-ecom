@extends('frontend.main_master')

@section('index')
<!-- ICONBOX -->
<div class="row-iconbox bg-row-2" style="background-image: url('{{ asset('frontend/assets/img/amfl/slider-2-1920x600.jpg')}}');center center no-repeat; background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="themesflat-spacer clearfix" data-desktop="60" data-mobile="60" data-smobile="60"></div>
                <div class="themesflat-headings style-1 text-center clearfix">
                    <h2 class="heading text-white">Our News</h2>
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
        <div class="row">
            <div class="col-md-12">
                <div class="themesflat-spacer clearfix" data-desktop="80" data-mobile="60" data-smobile="60"></div>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!-- END ICONBOX -->


<!-- Main Content -->
<div id="main-content" class="site-main clearfix">
    <div id="content-wrap" class="container">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
                <div class="themesflat-spacer clearfix" data-desktop="61" data-mobile="60" data-smobile="60"></div>
                <div class="themesflat-headings style-2 clearfix">
                    <h2 class="heading">CURRENT NEWS</h2>
                    <div class="sep has-width w80 accent-bg clearfix"></div>
                    <p class="sub-heading font-size-16 line-height-28 text-666 margin-top-27">With us you will have the peace of mind knowing that your dream home project is in the hands of a licensed fully insured building company.</p>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="40" data-mobile="35" data-smobile="35"></div>
                <div class="themesflat-content-box clearfix" data-margin="0 15px 0 0" data-mobilemargin="0 0 0 0">
                    <ol class="comment-list style-2">
                        @foreach ($news as $item)
                        <li class="comment">
                            <article class="comment-wrap clearfix">
                                <div class="gravatar"><img alt="image" src="{{ asset($item->news_image)}}" /></div>
                                <div class="comment-content">
                                    <div class="comment-meta">
                                        <h6 class="comment-author">{{ $item->news_name }}</h6>
                                        <span class="comment-position">Manager Human resources</span>
                                    </div>
                                    <div class="comment-text">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor. Aenean massa. Cumtipsu sociis natoque penatibus et magnis</p>
                                        <div class="socials">
                                            <a href="#" class="facebook"><span class="fa fa-facebook-square"></span></a>
                                            <a href="#" class="twitter"><span class="fa fa-twitter"></span></a>
                                            <a href="#" class="linkedin"><span class="fa fa-linkedin-square"></span></a>
                                            <a href="#" class="pinterest"><span class="fa fa-pinterest-p"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        @endforeach
                        <!-- /.comment -->
                        {{-- <li class="comment">
                            <article class="comment-wrap clearfix">
                                <div class="gravatar"><img alt="image" src="assets/img/testimonials/avatar-2-106x106.jpg" /></div>
                                <div class="comment-content">
                                    <div class="comment-meta">
                                        <h6 class="comment-author">Dana lewis </h6>
                                        <span class="comment-position">Executive vice president</span>
                                    </div>
                                    <div class="comment-text">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor. Aenean massa. Cumtipsu sociis natoque penatibus et magnis</p>
                                        <div class="socials">
                                            <a href="#" class="facebook"><span class="fa fa-facebook-square"></span></a>
                                            <a href="#" class="twitter"><span class="fa fa-twitter"></span></a>
                                            <a href="#" class="linkedin"><span class="fa fa-linkedin-square"></span></a>
                                            <a href="#" class="pinterest"><span class="fa fa-pinterest-p"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li><!-- /.comment -->
                        <li class="comment">
                            <article class="comment-wrap clearfix">
                                <div class="gravatar"><img alt="image" src="assets/img/testimonials/avatar-3-106x106.jpg" /></div>
                                <div class="comment-content">
                                    <div class="comment-meta">
                                        <h6 class="comment-author">Bill tomlinson</h6>
                                        <span class="comment-position">Manager, Aggregates </span>
                                    </div>
                                    <div class="comment-text">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor. Aenean massa. Cumtipsu sociis natoque penatibus et magnis</p>
                                        <div class="socials">
                                            <a href="#" class="facebook"><span class="fa fa-facebook-square"></span></a>
                                            <a href="#" class="twitter"><span class="fa fa-twitter"></span></a>
                                            <a href="#" class="linkedin"><span class="fa fa-linkedin-square"></span></a>
                                            <a href="#" class="pinterest"><span class="fa fa-pinterest-p"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li><!-- /.comment -->
                        <li class="comment">
                            <article class="comment-wrap clearfix">
                                <div class="gravatar"><img alt="image" src="assets/img/testimonials/avatar-4-106x106.jpg" /></div>
                                <div class="comment-content">
                                    <div class="comment-meta">
                                        <h6 class="comment-author">Scott berquist </h6>
                                        <span class="comment-position">Maketing Manager </span>
                                    </div>
                                    <div class="comment-text">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor. Aenean massa. Cumtipsu sociis natoque penatibus et magnis</p>
                                        <div class="socials">
                                            <a href="#" class="facebook"><span class="fa fa-facebook-square"></span></a>
                                            <a href="#" class="twitter"><span class="fa fa-twitter"></span></a>
                                            <a href="#" class="linkedin"><span class="fa fa-linkedin-square"></span></a>
                                            <a href="#" class="pinterest"><span class="fa fa-pinterest-p"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li> --}}
                        <!-- /.comment -->
                    </ol><!-- /.comment-list -->
                </div><!-- /.themesflat-content-box -->
                <div class="themesflat-spacer clearfix" data-desktop="83" data-mobile="60" data-smobile="60"></div>
            </div><!-- /#inner-content -->
        </div><!-- /#site-content -->
        <!-- /#sidebar -->
    </div><!-- /#content-wrap -->
</div><!-- /#main-content -->
@endsection
