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

            <!-- /#site-header -->
        </div><!-- #site-header-wrap -->

        <!-- Featured Title -->
        <div id="featured-title" class="featured-title clearfix">
            <div id="featured-title-inner" class="container clearfix">
                <div class="featured-title-inner-wrap">
                    <div id="breadcrumbs">
                        <div class="breadcrumbs-inner">
                            <div class="breadcrumb-trail">
                                <a href="{{ url('/') }}" class="trail-begin">Home</a>
                                <span class="sep">|</span>
                                <a href="{{ url('/blog') }}" class="trail-begin">Blog</a>
                                <span class="sep">|</span>
                                <span class="trail-end">Blog Details</span>
                            </div>
                        </div>
                    </div>
                    <div class="featured-title-heading-wrap">
                        <h1 class="feautured-title-heading">
                            Blog Details
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
                        <article class="hentry data-effect">
                            <div class="post-media data-effect-item has-effect-icon offset-v-25 offset-h-24 clerafix">
                                <a href="page-blog-single.html"><img src="{{ asset($blogs->blog_image)}}" alt="Image"></a>
                                <div class="post-calendar">
                                    <span class="inner">
                                        <span class="entry-calendar">
                                            <span class="day">23</span>
                                            <span class="month">MAY</span>
                                        </span>
                                    </span>
                                </div>
                                <div class="overlay-effect bg-color-1"></div>
                                <div class="elm-link">
                                    <a href="page-blog-single.html" class="icon-1"></a>
                                </div>
                            </div><!-- /.post-media -->

                            <div class="post-content-wrap clearfix">
                                <h2 class="post-title">
                                    <span class="post-title-inner">
                                        <a href="page-blog-single.html">BIG TECH WILL GET BIGGER IN 2018, WHILE MALLER PLAYERS LOOK FOR EXITS</a>
                                    </span>
                                </h2><!-- /.post-title -->
                                <div class="post-meta">
                                    <div class="post-meta-content">
                                        <div class="post-meta-content-inner">
                                            <span class="post-date item"><span class="inner"><span class="entry-date">May 23, 2018</span></span></span>
                                            <span class="post-by-author item"><span class="inner"><a href="#">By: Admin</a></span></span>
                                            <span class="comment item"><span class="inner"><a href="#">3 Comments</a></span></span>
                                        </div>
                                    </div>
                                </div><!-- /.post-meta -->
                                <div class="post-content post-excerpt margin-bottom-43">
                                    <p class="line-height-27 letter-spacing-005">Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod tincid  unt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</p>
                                    <div class="box-excerpt clearfix">
                                        <div class="thumb">
                                            <img src="{{ asset($blogs->blog_sub_image)}}" alt="Image">
                                        </div>
                                        <div class="text">
                                            <p class="line-height-27 letter-spacing-005">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolorem laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores.Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor. Aenean massa. Cumtipsu sociis natoque penatibus et magnis dis parturient montesti, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eutu, pretiumem</p>
                                        </div>
                                    </div>
                                    <p class="line-height-27 no-margin letter-spacing-01">Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod tincid  unt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo. Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam.</p>
                                </div><!-- /.post-excerpt -->
                                <div class="post-tags-socials clearfix">
                                    <div class="post-tags ">
                                        <span>Tags :</span>
                                        <a href="#">Building</a>
                                        <a href="#">Smart House</a>
                                        <a href="#">Villa</a>
                                    </div>
                                    <div class="post-socials ">
                                        <a href="#" class="facebook"><span class="fa fa-facebook-square"></span></a>
                                        <a href="#" class="twitter"><span class="fa fa-twitter"></span></a>
                                        <a href="#" class="linkedin"><span class="fa fa-linkedin-square"></span></a>
                                        <a href="#" class="pinterest"><span class="fa fa-pinterest-p"></span></a>
                                    </div>
                                </div>

                            </div><!-- /.post-content-wrap -->
                        </article><!-- /.hentry -->

                        <div class="themesflat-pagination clearfix no-border padding-top-17">
                            <ul class="page-prev-next">
                                <li>
                                    <a href="#" class="prev">
                                        Previous Article
                                    </a>
                                </li>
                                <li class="text-right">
                                    <a href="#" class="next">
                                        Next Article
                                    </a>
                                </li>
                            </ul>
                        </div><!-- /.themesflat-pagination -->

                        <div id="comments" class="comments-area">
                            <h2 class="comments-title">3 COMMENTS</h2>
                            <ol class="comment-list">
                                <li class="comment">
                                    <article class="comment-wrap clearfix">
                                        <div class="gravatar"><img alt="image" src="{{ asset('frontend/assets/img/testimonials/avatar-1-80x80.jpg')}}" /></div>
                                        <div class="comment-content">
                                            <div class="comment-meta">
                                                <h6 class="comment-author">NicheTheme</h6>
                                                <span class="comment-time">May 11, 2018 - at 11:00 am</span>
                                                <span class="comment-reply"><a class="comment-reply-link" href="#">REPLY</a></span>
                                            </div>
                                            <div class="comment-text">
                                                <p>Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat id. Vivamus interdum urna at sapien varius elementum. </p>
                                            </div>
                                        </div>
                                    </article>
                                    <ul class="children">
                                        <li class="comment">
                                            <article class="comment-wrap clearfix">
                                                <div class="gravatar"><img alt="image" src="{{ asset('frontend/assets/img/testimonials/avatar-2-80x80.jpg')}}" /></div>
                                                <div class="comment-content">
                                                    <div class="comment-meta">
                                                        <h6 class="comment-author">themesflat</h6>
                                                        <span class="comment-time"> May 11, 2018 - at 11:00 am</span>
                                                        <span class="comment-reply"><a class="comment-reply-link" href="#">REPLY</a></span>
                                                    </div>
                                                    <div class="comment-text">
                                                        <p>Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat id.</p>
                                                    </div>
                                                </div>
                                            </article>
                                        </li><!-- #comment-## -->
                                    </ul><!-- .children -->
                                </li><!-- #comment-## -->

                                <li class="comment">
                                    <article class="comment-wrap  clearfix">
                                        <div class="gravatar"><img alt="image" src="{{ asset('frontend/assets/img/testimonials/avatar-1-80x80.jpg')}}" /></div>
                                        <div class="comment-content">
                                            <div class="comment-meta">
                                                <h6 class="comment-author">NicheTheme</h6>
                                                <span class="comment-time">May 11, 2018 - at 11:00 am</span>
                                                <span class="comment-reply"><a class="comment-reply-link" href="#">REPLY</a></span>
                                            </div>
                                            <div class="comment-text">
                                                <p>Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat id. Vivamus interdum urna at sapien varius elementum. </p>
                                            </div>
                                        </div>
                                    </article>
                                </li><!-- #comment-## -->
                            </ol><!-- /.comment-list -->

                            <div id="respond" class="comment-respond">
                                <h3 id="reply-title" class="comment-reply-title margin-bottom-31">Leave a Comment</h3>
                                <form action="#" method="post" id="commentform" class="comment-form">
                                    <div class="text-wrap clearfix">
                                        <fieldset class="name-wrap">
                                            <input type="text" id="author" class="tb-my-input" name="author" tabindex="1" placeholder="Name*" value="" size="32" aria-required="true">
                                        </fieldset>
                                        <fieldset class="email-wrap">
                                            <input type="email" id="email" class="tb-my-input" name="email" tabindex="2" placeholder="Email*" value="" size="32" aria-required="true">
                                        </fieldset>
                                    </div>
                                    <fieldset class="message-wrap">
                                        <textarea id="comment-message" name="comment" rows="8" tabindex="4" placeholder="Message*" aria-required="true"></textarea>
                                    </fieldset>
                                    <p class="form-submit">
                                        <input name="submit" type="submit" id="comment-reply" class="submit" value="SEND US">
                                        <input type="hidden" name="comment_post_ID" value="100" id="comment_post_ID">
                                        <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                                    </p>
                                </form>
                            </div><!-- #respond -->
                        </div><!--/#comments -->
                    </div><!-- /#inner-content -->
                </div><!-- /#site-content -->
                <div id="sidebar">
                    <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="60" data-smobile="60"></div>
                    <div id="inner-sidebar" class="inner-content-wrap">
                        <div class="widget widget_search">
                            <form action="#" method="get" role="search" class="search-form style-1">
                                <input type="search" class="search-field" placeholder="Search..." value="" name="s" title="Search for">
                                <button class="search-submit" type="submit" title="Search">Search</button>
                            </form>
                        </div><!-- /.widget_search -->

                        <div class="widget widget_follow">
                            <h2 class="widget-title"><span>FOLLOW US</span></h2>
                            <div class="follow-wrap clearfix col3 g8">
                                <div class="follow-item facebook">
                                    <div class="inner">
                                        <span class="socials">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <span class="text">43217 likes</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="follow-item twitter">
                                    <div class="inner">
                                        <span class="socials">
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <span class="text">3752 flowers</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="follow-item google">
                                    <div class="inner">
                                        <span class="socials">
                                            <a href="#"><i class="fa fa-google"></i></a>
                                            <span class="text">432 contacter</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.widget_follow -->

                        <div class="widget widget_lastest">
                            <h2 class="widget-title"><span>PRECENT POST</span></h2>
                            <ul class="lastest-posts data-effect clearfix">
                                <li class="clearfix">
                                    <div class="thumb data-effect-item has-effect-icon">
                                        <img src="{{ asset('frontend/assets/img/news/post-1-65x65.jpg')}}" alt="Image">
                                        <div class="overlay-effect bg-color-2"></div>
                                        <div class="elm-link">
                                            <a href="page-blog-single.html" class="icon-2"></a>
                                        </div>
                                    </div>
                                    <div class="text">
                                        <h3><a href="page-blog-single.html">SMART BUILDING WITH CONCRETE SUSTAINABLE</a></h3>
                                        <span class="post-date"><span class="entry-date">29 June 2018</span></span>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <div class="thumb data-effect-item has-effect-icon">
                                        <img src="{{ asset('frontend/assets/img/news/post-2-65x65.jpg')}}" alt="Image">
                                        <div class="overlay-effect bg-color-2"></div>
                                        <div class="elm-link">
                                            <a href="page-blog-single.html" class="icon-2"></a>
                                        </div>
                                    </div>
                                    <div class="text">
                                        <h3><a href="page-blog-single.html">HI-TECH WOODEN HOUSE BUILT WITHOUT GLUE</a></h3>
                                        <span class="post-date"><span class="entry-date">31 June 2018</span></span>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <div class="thumb data-effect-item has-effect-icon" >
                                        <img src="{{ asset('frontend/assets/img/news/post-3-65x65.jpg')}}" alt="Image">
                                        <div class="overlay-effect bg-color-2"></div>
                                        <div class="elm-link">
                                            <a href="page-blog-single.html" class="icon-2"></a>
                                        </div>
                                    </div>
                                    <div class="text">
                                        <h3><a href="page-blog-single.html">HI-TECH WOODEN HOUSE BUILT WITHOUT GLUE</a></h3>
                                        <span class="post-date"><span class="entry-date">31 June 2018</span></span>
                                    </div>
                                </li>
                            </ul>
                        </div><!-- /.widget_lastest -->

                        <div class="widget widget_tags margin-top-55">
                            <h2 class="widget-title"><span>TAGS</span></h2>
                            <div class="tags-list">
                                <a href="#">Building</a>
                                <a href="#">Smart House</a>
                                <a href="#">Costruction</a>
                                <a href="#">Villa</a>
                                <a href="#">Residential</a>
                                <a href="#">Interior</a>
                                <a href="#">Resort</a>
                                <a href="#">Commercial</a>
                            </div>
                        </div>
                    </div>
                </div><!-- /#sidebar -->
            </div><!-- /#content-wrap -->
        </div><!-- /#main-content -->

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

