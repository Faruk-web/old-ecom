<header class="header_section electronic_header sticky_header clearfix">
    <div class="header_top clearfix">
        <div class="container maxw_1600">
            <div class="row align-items-center">
                <div class="col-lg-2">

                    <div class="brand_logo">
                        <a class="brand_link" href="{{ url('/') }}">
                            @php
                            $logo=App\Models\SiteSetting::select('logo')->first();
                            @endphp

                            <img src="{{asset($logo->logo)}}" style="height:4rem !important;" alt="logo_not_found">

                        </a>


                        <ul class="mh_action_btns ul_li clearfix">
                            <li>
                                <button type="button" class="search_btn" data-toggle="collapse" data-target="#search_body_collapse" aria-expanded="false" aria-controls="search_body_collapse">
                                    <i class="fal fa-search"></i>
                                </button>
                            </li>
                            <li>
                                <button type="button" class="cart_btn">
                                    <i class="fal fa-shopping-cart"></i>
                                    <span class="btn_badge">2</span>
                                </button>
                            </li>
                            <li><button type="button" class="mobile_menu_btn"><i class="far fa-bars"></i></button></li>
                        </ul>
                    </div>
                </div>

                @php
                    $categories=App\Models\Category::all();
                @endphp

                <div class="col-lg-7">
                    <form action="{{route('product.search')}}" method="GET">
                        @csrf
                        <div class="medical_search_bar">
                            <div class="form_item">
                                <input type="search" name="search" placeholder="search here...">
                            </div>
                            <div class="option_select">
                                <select name="cat">
                                    <option value="" data-display="All Category">Select A Option</option>
                                    @foreach ($categories as $category)

                                        <option value="{{$category->id}}">{{$category->category_name}}</option>

                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="submit_btn"><i class="fal fa-search"></i></button>
                        </div>
                    </form>
                </div>

                <div class="col-lg-3">
                    <ul class="electronic_action_btns ul_li_right clearfix">
                        {{-- <li>
                            <a href="{{ url('/auth/login') }}">
                                <i class="fas fa-user"></i>
                                <span>profile</span>
                            </a>
                        </li> --}}

                        @auth
                        {{-- for user login then show --}}
                        <li><a href="{{ url('/dashboard') }}"><i class="icon fa fa-user"></i>User Profile</a></li>
                        @else
                        {{-- for not login then show --}}
                        <li ><a href="{{ route('login') }}"><i class="icon fa fa-user"></i><span style="padding-top:5px">Sign In/Up</span></a></li>
                        @endauth


                        <li>
                            <button type="button" class="cart_btn">
                                <span class="counter" id="cartQty">0</span>
                                <i class="fas fa-shopping-cart"></i>
                                <span>Cart</span>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="search_body_collapse" class="search_body_collapse collapse">
        <div class="search_body">
            <div class="container-fluid prl_90">
                <form action="">

                    <div class="form_item mb-0">
                        <input type="search"  placeholder="Type here...">
                        <button type="submit"><i class="fal fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- header bottom start -->
    <div class="header_bottom">
        <div class="container">
            <nav class="main_menu clearfix">
                <ul class="ul_li clearfix">
                    <li >
                        <a href="{{url('/')}}">Home</a>
                    </li>
                    @php
                    $categories=App\Models\Category::limit(6)->get();
                    @endphp
                    @foreach ($categories as $category)
                    <li class="menu_item_has_child">
                        <a href="#!">{{$category->category_name}}</a>
                        <div class="mega_menu pt-0">
                            <div class="container">
                                <div class="background" data-bg-color="#ffffff">
                                    <div class="row mt__30">
                                        @php
                                        $subcategories=App\Models\SubCategory::where('category_id',$category->id)->get();
                                    @endphp
                                    @foreach ($subcategories as $subcategory)
                                        <div class="col-lg-5">
                                            <div class="page_links">
                                                <h3 class="title_text">{{$subcategory->sub_category_name}}</h3>
                                                <ul class="ul_li_block">
                                                    @php
                                                        $sub_subcategories=App\Models\SubSubCategory::where('subcategory_id',$subcategory->id)->get();
                                                    @endphp
                                                    @foreach ($sub_subcategories as $subsubcategory)
                                                    <li><a href="{{ route('product.searchSubSubCategory',$subsubcategory->id) }}">{{$subsubcategory->subsubcategory_name}}</a></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    @endforeach
                                        <!-- col end -->

                                    </div>
                                </div>
                                <!-- mega_menu bg end -->
                            </div>
                        </div>
                    </li>
                   @endforeach

                </ul>
            </nav>
        </div>

    </div>
    <!-- header bottom end -->
</header>
