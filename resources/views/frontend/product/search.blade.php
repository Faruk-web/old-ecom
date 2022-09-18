
@extends('frontend.main_master')

@section('index')


<!-- sidebar mobile menu & sidebar cart - start
	================================================== -->

	@include('frontend.body.mobile_sidbar_menu')

<!-- sidebar mobile menu & sidebar cart - end
================================================== -->

<style>
    .checked {
        color : #FDCC0D
    }
</style>


<div class="product_section sec_ptb_100 clearfix">
    <div class="container">
        <div class="row">

            <div class="col-lg-9 order-last">
                <div class="carparts_filetr_bar clearfix">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <ul class="carparts_layout_btns nav ul_li" role="tablist">
                                <li>
                                    <a class="active" data-toggle="tab" href="#grid_layout"><i class="fas fa-th"></i></a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#list_layout"><i class="fas fa-list"></i></a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

                        </div>
                    </div>
                </div>

                <div class="tab-content">
                    <div id="grid_layout" class="tab-pane active">
                        <div class="row mb_50">
                            @foreach ($products as $product)


                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12" id="product">
                                <div class="carparts_product_grid" data-bg-color="#f0eeee" style="background: rgb(240, 238, 238);">
                                    <div class="item_image" data-bg-color="#f8f8f8" style="background: rgb(248, 248, 248);">
                                        <img src="{{asset($product->product_thambnail)}}" alt="image_not_found">
                                        <ul class="product_action_btns ul_li_center clearfix">
                                            <li><a class="tooltips" data-placement="top" title="Add To Wishlist" onclick="addToWishList({{$product->id}})" href="#!"><i class="fal fa-heart"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Add To Cart" onclick="productView({{$product->id}})" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-shopping-basket"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="item_content">

                                        @php
                                                    $avarage = App\Models\review::where('product_id',$product ->id)->avg('star');
                                                    @endphp
                                                            @if($avarage == 0)
                                                            {{-- No Rating Yet  --}}
                                                            @elseif($avarage == 1 || $avarage < 2)
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            @elseif($avarage == 2 || $avarage < 3)
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            @elseif($avarage == 3 || $avarage < 4)
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            @elseif($avarage == 4 || $avarage < 5)
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star"></span>
                                                            @elseif($avarage == 5 || $avarage < 5)
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            @endif
                                        <h3 class="item_title">
                                            <a href="{{ url('product/detail/'. $product->id ) }}">{{$product->product_name}}</a>
                                        </h3>
                                        <span class="price_text"><strong >৳ <span id="price">{{$product->discount_price}}</span></strong>৳ <del>{{$product->selling_price}}</del></span>
                                    </div>
                                    <ul class="product_label ul_li text-uppercase clearfix">
                                        <li class="bg_carparts_red" >New</li>
                                        <li class="bg_carparts_red">Sale</li>
                                    </ul>
                                </div>
                            </div>


                            @endforeach
                        </div>

                        <div class="carparts_pagination_wrap clearfix">
                            <div class="row align-items-center justify-content-lg-between">
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <button type="button" class="custom_btn bg_carparts_red text-uppercase"><i class="fas fa-arrow-circle-down mr-2"></i> Load More</button>
                                </div>

                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <ul class="carparts_pagination_nav ul_li_right clearfix">
                                        {{ $products->links() }}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="list_layout" class="tab-pane fade">
                        <div class="mb_50">

                            @foreach ($products as $product)

                                <div class="carparts_product_listlayout" data-bg-color="#f0eeee" style="background: rgb(240, 238, 238);">
                                    <div class="item_image " data-bg-color="#f8f8f8" style="background: rgb(248, 248, 248);">
                                        <img src="{{asset($product->product_thambnail)}}" style="width: 222px;height:154px" alt="image_not_found">
                                        <ul class="product_label ul_li text-uppercase clearfix">
                                            <li class="bg_carparts_red">New</li>
                                            <li class="bg_carparts_red">Sale</li>
                                        </ul>
                                        {{-- <ul class="product_action_btns ul_li_center clearfix">
                                            <li><a class="tooltips" data-placement="top" title="Add To Wishlist" onclick="addToWishList({{$product->id}})" href="#!"><i class="fal fa-heart"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Add To Cart" onclick="productView({{$product->id}})" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-shopping-basket"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                        </ul> --}}
                                    </div>
                                    <div class="item_content">

                                        @php
                                        $avarage = App\Models\review::where('product_id',$product ->id)->avg('star');
                                        @endphp
                                                @if($avarage == 0)
                                                {{-- No Rating Yet  --}}
                                                @elseif($avarage == 1 || $avarage < 2)
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                @elseif($avarage == 2 || $avarage < 3)
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                @elseif($avarage == 3 || $avarage < 4)
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                @elseif($avarage == 4 || $avarage < 5)
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                @elseif($avarage == 5 || $avarage < 5)
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                @endif
                                        <h3 class="item_title text-uppercase">
                                            <a href="{{ url('product/detail/'. $product->id ) }}">{{$product->product_name}}</a>
                                        </h3>
                                        <p class="mb-0">
                                            {!! $product->product_long_descp !!}
                                        </p>
                                        <div class="action_btns_wrap" >
                                            <span class="price_text"><strong>৳ {{$product->discount_price}}</strong> <del>৳ {{$product->selling_price}}</del></span>
                                            <ul class="product_action_btns ul_li_center clearfix" style="padding-left: 30px;">
                                                <li><a class="tooltips" data-placement="top" title="Add To Wishlist" onclick="addToWishList({{$product->id}})" href="#!"><i class="fal fa-heart"></i></a></li>
                                                <li><a class="tooltips" data-placement="top" title="Add To Cart" onclick="productView({{$product->id}})" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-shopping-basket"></i></a></li>
                                                <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            @endforeach
                        </div>

                        <div class="carparts_pagination_wrap clearfix">
                            <div class="row align-items-center justify-content-lg-between">
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <button type="button" class="custom_btn bg_carparts_red text-uppercase"><i class="fas fa-arrow-circle-down mr-2"></i> Load More</button>
                                </div>

                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <ul class="carparts_pagination_nav ul_li_right clearfix">
                                        <li class="active"><a href="#!">1</a></li>
                                        <li><a href="#!">2</a></li>
                                        <li><a href="#!">3</a></li>
                                        <li><a href="#!">...</a></li>
                                        <li><a href="#!">4</a></li>
                                        <li><a href="#!">5</a></li>
                                        <li><a href="#!">7</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <aside class="carparts_sidebar sidebar_section">
                    <div class="sb_widget sb_pricing_range">
                        <h3 class="sb_widget_title text-uppercase">Select Price</h3>


                            <div class="price-range-area clearfix">
                                <div id="slider-range" class="slider-range ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 2.51256%; width: 40.1005%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 2.51256%;"></span><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 42.6131%;"></span></div>
                                <div class="price-text align-items-center">
                                    <span>Price:</span>
                                    <input type="text" id="amount" readonly="">
                                    <input type="button" id="sub" value="Search">
                                </div>
                            </div>

                    </div>

                    <div class="sb_widget sb_collapse_category">
                        <h3 class="sb_widget_title text-uppercase">Categories</h3>
                        <div id="sb_category_accordion" class="sb_category_accordion">
                            @php
                                $categories = App\Models\Category::all();
                            @endphp

                            @foreach ($categories as $category)


                                <div class="card">
                                    <div class="card-header">
                                        <a data-toggle="collapse" href="#collapse_one">
                                            {{$category->category_name}}
                                        </a>
                                    </div>
                                    <div id="collapse_one" class="collapse show" data-parent="#sb_category_accordion">
                                        <div class="card-body p-0">
                                            <ul class="ul_li_block clearfix">
                                                @foreach ($category->subcategory as $subcategory)
                                                    <li><a href="{{route('product.searchCategory',$subcategory->id)}}">{{$subcategory->sub_category_name}}</a></li>
                                                @endforeach


                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            @endforeach
                        </div>
                    </div>

                    <div class="sb_widget sb_color_checkbox">
                        <h3 class="sb_widget_title text-uppercase">Color</h3>
                        <form action="#">
                            <ul class="ul_li_block clearfix">
                                <li>
                                    <div class="checkbox_item">
                                        <input id="black_color_checkbox" type="checkbox" {{ Request::is('searchColor/black')? 'checked':'' }} >
                                        <label for="black_color_checkbox"><a href="{{route('product.searchColor','black')}}">Black</a></label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox_item">
                                        <input id="black_color_checkbox" type="checkbox" {{ Request::is('searchColor/red')? 'checked':'' }} >
                                        <label for="black_color_checkbox"><a href="{{route('product.searchColor','red')}}">Red</a></label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox_item">
                                        <input id="white_color_checkbox" type="checkbox" {{ Request::is('searchColor/white')? 'checked':'' }}>
                                        <label for="white_color_checkbox"><a href="{{route('product.searchColor','white')}}">White</a></label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox_item">
                                        <input id="blue_color_checkbox" type="checkbox" {{ Request::is('searchColor/blue')? 'checked':'' }}>
                                        <label for="blue_color_checkbox"><a href="{{route('product.searchColor','blue')}}">Blue</a></label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox_item">
                                        <input id="green_color_checkbox" type="checkbox"  {{ Request::is('searchColor/green')? 'checked':'' }}>
                                        <label for="green_color_checkbox"><a href="{{route('product.searchColor','green')}}">Green</a></label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox_item">
                                        <input id="yellow_color_checkbox" type="checkbox" {{ Request::is('searchColor/yellow')? 'checked':'' }}>
                                        <label for="yellow_color_checkbox"><a href="{{route('product.searchColor','yellow')}}">Yellow</a></label>
                                    </div>
                                </li>
                            </ul>
                        </form>
                    </div>

                    <div class="sb_widget sb_recent_post">
                        <h3 class="sb_widget_title text-uppercase">Recent Posts</h3>

                        @php
                            $recentProduct = App\Models\Product::latest()->limit(3)->get();

                        @endphp

                        @foreach ($recentProduct as $item)
                            <div class="carparts_small_blog">
                            <a class="item_image" href="{{ url('product/detail/'. $item->id ) }}">
                                <img src="{{asset($item->product_thambnail)}}" alt="image_not_found">
                            </a>
                            <div class="item_content">
                                {{-- <ul class="rating_star ul_li clearfix">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul> --}}
                                                    @php
                                                    $avarage = App\Models\review::where('product_id',$item ->id)->avg('star');
                                                    @endphp
                                                            @if($avarage == 0)

                                                            @elseif($avarage == 1 || $avarage < 2)
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            @elseif($avarage == 2 || $avarage < 3)
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            @elseif($avarage == 3 || $avarage < 4)
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            @elseif($avarage == 4 || $avarage < 5)
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star"></span>
                                                            @elseif($avarage == 5 || $avarage < 5)
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            @endif
                                <h3 class="item_title text-uppercase">
                                    <a href="{{ url('product/detail/'. $item->id ) }}">
                                        {{$item->product_name}}
                                    </a>
                                </h3>
                                <div class="item_price"><strong>৳{{$item->discount_price}}</strong> <del> ৳{{$item->selling_price}}</del></div>
                            </div>
                        </div>
                        @endforeach




                    </div>

                    <a class="text_btn text-uppercase" href="{{route('product.latestProduct')}}"><span>View More</span> <i class="fas fa-arrow-circle-right"></i></a>
                </aside>
            </div>

        </div>
    </div>
</div>




@endsection



