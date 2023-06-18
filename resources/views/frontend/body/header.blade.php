@php
    $p = url('');
    $pp = url()->current();
    // dd($p);
    // style="background-color: #3e3e3e;"
@endphp
<header id="site-header">
    <div id="site-header-inner" class="container">
        <div class="wrap-inner clearfix">
            <div id="site-logo" class="clearfix">
                <div id="site-log-inner">
                    <a href="{{ url('/') }}" rel="home" class="main-logo">
                        @if($pp == $p)
                        <img src="{{ asset('frontend/assets/img/amfl/logo-main-old.png')}}" alt="Autora" width="169" height="39" data-retina="{{ asset('frontend/assets/img/amfl/logo-main-old.png')}}" data-width="169" data-height="39">
                        @else
                        <img src="{{ asset('frontend/assets/img/amfl/logo-main-old.png')}}" alt="Autora" width="169" height="39" data-retina="{{ asset('frontend/assets/img/amfl/logo-main-old.png')}}" data-width="169" data-height="39">
                        @endif

                    </a>
                </div>
            </div><!-- /#site-logo -->

            <div class="mobile-button">
                <span></span>
            </div><!-- /.mobile-button -->

            <nav id="main-nav" class="main-nav">
                <ul id="menu-primary-menu" class="menu">
                    <li class="menu-item menu-item-has-children current-menu-item">
                        <a href="{{ url('/') }}">HOME</a>
                        <ul class="sub-menu">
                            {{-- <li class="menu-item"><a href="home.html">HOME 1</a></li> --}}
                            <li class="menu-item current-item"><a href="{{ url('/') }}">HOME </a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="{{ url('/about') }}">ABOUT US </a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="{{ url('/about') }}">ABOUT US</a></li>
                            {{-- <li class="menu-item"><a href="page-about-detail.html">ABOUT DETAIL</a></li>
                            <li class="menu-item"><a href="page-about-team.html">ABOUT TEAM</a></li>
                            <li class="menu-item"><a href="page-about-careers.html">ABOUT CAREERS</a></li> --}}
                        </ul>
                    </li>
                    {{-- <li class="menu-item menu-item-has-children">
                        <a href="{{ url('/service') }}">SERVICES</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="page-services.html">SERVICES</a></li>
                            <li class="menu-item"><a href="{{ url('/service') }}">SERVICES DETAIL</a></li>
                        </ul>
                    </li> --}}
                    <li class="menu-item menu-item-has-children">
                        <a href="{{ url('/project') }}">PROJECTS</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="{{ url('/project') }}">ALL PROJECTS</a></li>
                            <li class="menu-item"><a href="{{ route('user.project.ongoing') }}">ONGOING PROJECTS</a></li>
                            <li class="menu-item"><a href="{{ route('user.project.upcoming')}}">UPCOMING PROJECTS</a></li>
                            <li class="menu-item"><a href="{{ route('user.project.completed')}}">COMPLETED PROJECTS</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children" >
                        <a href="{{ url('/news') }}">NEWS</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="{{ url('/news') }}"> NEWS</a></li>
                            {{-- <li class="menu-item"><a href="page-pricing.html">PAGE PRICING</a></li> --}}
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="{{ url('/blog') }}">EVENT</a>
                        <ul class="sub-menu right-sub-menu">
                            <li class="menu-item"><a href="{{ url('/blog') }}">EVENT</a></li>
                            {{-- <li class="menu-item"><a href="page-blog-single.html">BLOG SINGLE</a></li> --}}
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="{{ url('/contact_us') }}">CONTACT</a>
                        <ul class="sub-menu right-sub-menu">
                            <li class="menu-item"><a href="{{ url('/contact_us') }}">CONTACT US</a></li>
                            {{-- <li class="menu-item"><a href="page-contact-2.html">CONTACT 2</a></li> --}}
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <div class="button-wrap has-icon icon-left mt-4">
                            <a href="tel:0 1844 527 808" class="themesflat-button bg-white small"><span> 16711 <span class="icon"><i class="autora-icon-phone-contact"></i></span></span></a>
                        </div>
                    </li>
                </ul>

            </nav><!-- /#main-nav -->
            <div id="header-search">
                <a href="#" class="header-search-icon">
                    <span class="search-icon fa fa-search">
                    </span>
                </a>
                <form role="search" method="get" class="header-search-form" action="{{ route('search_amfl_project.store')  }}" enctype="multipart/form-data">
                    <label class="screen-reader-text">Search for:</label>
                    <input type="text" value="" name="material_search_new" id="material_search_new" class="header-search-field" placeholder="Search...">
                    <button type="submit" class="header-search-submit" title="Search"><i class="fa fa-search"></i></button>
                    <div class="row mt-2 p-3 search_design" id="member_show_info" style="background-color: gray;
                    width: 269px;
                    margin-left: 1px;">
                    </div>
                </form>
            </div><!-- /#header-search -->
        </div><!-- /.wrap-inner -->
    </div><!-- /#site-header-inner -->
</header>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" crossorigin="anonymous"
referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function () {
        SidebarColpase();
    });

</script>
<script>
    // Begin:: members Search for
    $('#material_search_new').keyup(function () {
        var material_info = $(this).val();
        $.ajax({
            type: 'get',
            url: '/create/search/project',
            data: {
                'material_info': material_info
            },
            success: function (data) {
                $('#member_show_info').html(data);
            }
        });
    });
    // End:: doner Search for
</script>
