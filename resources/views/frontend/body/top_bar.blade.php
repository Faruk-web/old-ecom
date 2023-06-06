
@php
    $p = url('');
    $pp = url()->current();
    // dd($p);
@endphp

@if($pp == $p)
<div id="top-bar">
    <div id="top-bar-inner" class="container">
        <div class="top-bar-inner-wrap">
            <div class="top-bar-content">
                <div class="inner">
                    <span class="address content">4946 Marmora Road, Central New</span>
                    <span class="phone content">+61 3 8376 6284</span>
                    <span class="time content">Mon-Sat: 8am - 6pm</span>
                </div>
            </div><!-- /.top-bar-content -->

            <div class="top-bar-socials">
                <div class="inner">
                    <span class="text">Follow us:</span>
                    <span class="icons">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        <a href="#"><i class="fa fa-rss"></i></a>
                    </span>
                </div>
            </div><!-- /.top-bar-socials -->
        </div>
    </div>
</div>
@else
<div id="top-bar" style="background-color: #262626;">
    <div id="top-bar-inner" class="container">
        <div class="top-bar-inner-wrap">
            <div class="top-bar-content">
                <div class="inner">
                    <span class="address content">4946 Marmora Road, Central New</span>
                    <span class="phone content">+61 3 8376 6284</span>
                    <span class="time content">Mon-Sat: 8am - 6pm</span>
                </div>
            </div><!-- /.top-bar-content -->

            <div class="top-bar-socials">
                <div class="inner">
                    <span class="text">Follow us:</span>
                    <span class="icons">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        <a href="#"><i class="fa fa-rss"></i></a>
                    </span>
                </div>
            </div><!-- /.top-bar-socials -->
        </div>
    </div>
</div>
@endif

