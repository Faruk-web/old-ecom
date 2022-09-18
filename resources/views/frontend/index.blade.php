
@extends('frontend.main_master')

@section('index')

<style>
    .checked {
        color : #FDCC0D
    }
	.hot_deals_days ,.hot_deals_hours ,.hot_deals_minutes ,.hot_deals_seconds{
		font-size:1rem;
		background:green;
		color:#fff;
	    padding:1rem;
		border-radius:10px;
	}
</style>

    <!-- sidebar mobile menu & sidebar cart - start
			================================================== -->
			@include('frontend.body.mobile_sidbar_menu')
			<!-- sidebar mobile menu & sidebar cart - end
			================================================== -->


			<!-- slider_section - start- Ashim
			================================================== -->
			<section class="slider_section sec_ptb_50 clearfix">

				<div class="container maxw_1600">


					<div class="row justify-content-lg-between">

						@include('frontend.common.sideber_menu')

						<div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
							<div class="electronic_slider position-relative clearfix">
								<div class="main_slider clearfix" data-slick='{"arrows": false}'>
                                    @foreach ( $sliders as $slider )
									<div class="item clearfix" style="background-image: linear-gradient(to right, #c1fdf8, #99eef7, #71ddfa, #4ecbfe, #41b6ff, #41b6ff, #41b6ff, #41b6ff, #4ecbfe, #71ddfa, #99eef7, #c1fdf8);">
									{{-- <div class="item clearfix" data-background="{{asset('frontend/assets/images')}}/slider/electronic/bg_26.jpg"> --}}
										<div class="slider_image order-last" data-animation="fadeInUp" data-delay=".4s">
											<img src="{{ asset($slider->slider_img) }}" style="height: 300px"  alt="image_not_found">
										</div>
										<div class="slider_content">
											<h4 class="text-uppercase" data-animation="fadeInUp" data-delay=".6s">{{ $slider->title }}</h4>
											<p data-animation="fadeInUp" data-delay=".8s">
												{{ $slider->description }}
											</p>

										</div>
									</div>
                                    @endforeach
								</div>

								<!-- slider progress -->
								<div class="slick-progress">
									<span></span>
								</div>
							</div>
						</div>

						<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
							 <div class="advertisement_image mb_30">
								<a href="#!">
									@foreach ($bennars as $bennar)
                                    <div style="text-align: center" class="new-label">
                                        <h5  class="center" style="color: red; padding:5px 0px" >Upcoming ...</h5>
                                    </div>
										<div class="wide-banner cnt-strip">
											<div class="image">

												@isset($bennar->bennar_img)

													<img class="img-responsive" src="{{ asset($bennar->bennar_img) }}" alt="banner img No">

												@endisset
											</div>


										<!-- /.new-label -->
										</div>
									@endforeach
								</a>
							</div>

						</div>
					</div>

				</div>
			</section>





			<!-- product_section - start
			================================================== -->

              {{-- //################### Hot deals start  ##################### --}}
			<section class="product_section mb_50 clearfix">
				<div class="container maxw_1600">
					<div class="electronic_content_container">
						<div class="row justify-content-lg-between">
							<div class="col-lg-4">
                                @php
                                    // for  hot_deals
                                    $hot_deals = App\Models\Product::where('hot_deals', 1)->where('discount_price','!=',NULL)->orderBy('id', 'DESC')->limit(10)->get();

                                @endphp
								<div class="electronic_deals_slider">
									<div class="item_header">
										<h2 class="title_text text-white mb-0"><strong>Hot Deals</strong> </h2>

										{{-- <div value="{{optional($hot_deal->deals)->hot_deals}}" data-countdown="true"></div> --}}

									</div>
									<div class="weekly_deals_carousel position-relative">
										<div class="slideshow1_slider" data-slick='{"dots": false}'>

                                            @foreach($hot_deals as $hot_deal)
												@php
													$multiImg = App\Models\MultiImg::where('product_id',$hot_deal->id)->get();
												@endphp
                                                <div class="item">
                                                    <div class="electronic_deals_item">
                                                        <ul class="item_variations ul_li clearfix">
                                                            <li>
                                                                <button type="button">
																	@if (isset($multiImg[0]->photo_name))

                                                                    	<img src="{{asset($multiImg[0]->photo_name)}}" style="width: 52px; height: 52px; border-radius: 50%;" alt="null">


																	@else

																		<img src="" style="width: 52px; height: 52px;" alt="null">

																	@endif

                                                                </button>

                                                            </li>
                                                            <li>
                                                                <button type="button">
																	@if (isset($multiImg[1]->photo_name))

                                                                    	<img src="{{asset($multiImg[1]->photo_name)}}" style="width: 52px; height: 52px; border-radius: 50%;" alt="null">


																	@else

																		<img src="" style="width: 52px; height: 52px;" alt="null">

																	@endif
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button type="button">
																	@if (isset($multiImg[2]->photo_name))

                                                                    	<img src="{{asset($multiImg[2]->photo_name)}}" style="width: 52px; height: 52px; border-radius: 50%;" alt="null">


																	@else

																		<img src="" style="width: 52px; height: 52px;" alt="null">

																	@endif
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button type="button">
																	@if (isset($multiImg[3]->photo_name))

                                                                    	<img src="{{asset($multiImg[3]->photo_name)}}" style="width: 52px; height: 52px; border-radius: 50%;" alt="null">


																	@else

																		<img src="" style="width: 52px; height: 52px;" alt="null">

																	@endif
                                                                </button>
                                                            </li>

                                                        </ul>
                                                        <div class="item_price">
                                                            <strong>{{ $hot_deal->discount_price }} <span>&#2547;</span></strong> <del>{{ $hot_deal->selling_price}} <span>&#2547;</span></del>
                                                        </div>
                                                        <h3 class="item_title mb-0">
                                                            <a href="{{ url('product/detail/'. $hot_deal->id ) }}">{{ $hot_deal->product_name }}</a>
                                                        </h3>
                                                        <div class="item_image " >
                                                            <a href="{{ url('product/detail/'. $hot_deal->id ) }}"> <img src=" {{ asset( $hot_deal->product_thambnail ) }}"alt="">
                                                            </a>

                                                        </div>
                                                        <div class="row">
                                                            <div class="countdown_content col-4">
                                                                <h4>Hurry up!</h4>
                                                                <p>Offer ends in:</p>
                                                            </div>

															{{-- <div value="{{optional($hot_deal->deals)->hot_deals}}" data-countdown="true"></div> --}}
															<div class="col-md-8">
																<div data-hot_deal_id="{{$hot_deal->id}}" value="{{optional($hot_deal->deals)->hot_deals}}" class="timer_countdown d-flex justify-content-between"
																	data-countdown="true" data-value="{{optional($hot_deal->deals)->hot_deals}}">
																	<div class="dayscontainer d-flex flex-column" style="width:50px;">
																		<span id="hot_deals_days_{{$hot_deal->id}}" class="hot_deals_days">0</span>
																		<span>Days<span>
																	</div>
																	<div class="dayscontainer d-flex flex-column" style="width:50px;">
																		<span  id="hot_deals_hours_{{$hot_deal->id}}" class="hot_deals_hours">00</span>
																		<span>Hours<span>
																	</div>
																	<div class="dayscontainer d-flex flex-column" style="width:50px;">
																		<span id="hot_deals_minutes{{$hot_deal->id}}" class="hot_deals_minutes">00</span>
																		<span>Minutes<span>
																	</div>
																	<div class="dayscontainer d-flex flex-column" style="width:50px;">
																		<span   id="hot_deals_seconds{{$hot_deal->id}}" class="hot_deals_seconds">00</span>
																		<span>Seconds<span>
																	</div>



																</div>
															</div>


                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
										</div>
										<div class="carousel_nav clearfix">
											<button type="button" class="left_arrow d-inline-block"><i class="fal fa-angle-left mr-1"></i> Previous deal</button>
											<button type="button" class="right_arrow d-inline-block">Next deal <i class="fal fa-angle-right ml-1"></i></button>
										</div>
									</div>
								</div>
							</div>

  {{-- //################### Hot deals end  ##################### --}}



  <div class="col-lg-8">
	<div class="electronic_product_group clearfix">
		<ul class="electronic_tabs_nav nav ul_li_right clearfix">
			<li><a class="active" data-toggle="tab" href="#featured_tab">Latest Products</a></li>
			<li><a data-toggle="tab" href="#onsale_tab">On Sale</a></li>
			<li><a data-toggle="tab" href="#toprated_tab">Top Rated</a></li>
		</ul>
		<div class="tab-content">

			{{-- ##### Latest Product Start ######## --}}

			<div id="featured_tab" class="tab-pane fade active">
				<ul class="electronic_product_columns ul_li has_4columns clearfix">
					@foreach ($products as $product)
						<li>
							<div class="electronic_product_item">
								             @php
												$amount = $product->selling_price - $product->discount_price;
												$discount = ($amount/$product->selling_price) * 100;
											@endphp
								<ul class="product_label ul_li clearfix">
									@if($product->discount_price == NULL)

										<li>Not Discount</li>
										@else
										<li>{{ round($discount) }} %</li>
										@endif
								</ul>
								<div class="item_image carparts_product_grid">
									{{-- <img src="{{$product->product_thambnail}}" alt="image_not_found"> --}}
									<a href="{{ url('product/detail/'. $product->id ) }}"><img  src="{{ asset( $product->product_thambnail) }}"alt=""></a>

									<ul class="product_action_btns ul_li_center clearfix">
										<li><a class="tooltips" data-placement="top" title="Add To Wishlist" onclick="addToWishList({{$product->id}})"><i class="fal fa-heart"></i></a></li>
										<li><a class="tooltips" data-placement="top" title="Add To Cart" onclick="productView({{$product->id}})" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-shopping-basket"></i></a></li>
										<li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
									</ul>
								</div>
								<div class="item_content">
									<span class="item_name">{{$product->brand->brand_name_cats_eye}}</span>
									<h3 class="item_title">
										<a href="{{url('product/detail/'.$product->id)}}">{{$product->product_name}}</a>
									</h3>
									@if($product->discount_price == NULL)
									<span class="item_price">{{ $product->selling_price }}<span>&#2547;</span></span>
									@else
									<span class="item_price">{{ $product->discount_price}}<span>&#2547;</span></span>
									<span class="item_price"> <del>{{ $product->selling_price }}<span>&#2547;</span></del></span>
									@endif
								</div>
							</div>
						</li>

					@endforeach

				</ul>
			</div>

			{{-- ##### Latest Product End ########## --}}

			{{-- //################### on sale product start ##################### --}}

			<div id="onsale_tab" class="tab-pane fade">
                <ul class="electronic_product_columns ul_li has_4columns clearfix">
				@foreach ($onsale as $item)


                    <li>
                        <div class="electronic_product_item">
							@php
							$amount = $item->selling_price - $item->discount_price;
							$discount = ($amount/$item->selling_price) * 100;
						@endphp
                            <ul class="product_label ul_li clearfix">
                                @if($item->discount_price == NULL)

										<li>Not Discount</li>
										@else
										<li>{{ round($discount) }} %</li>
										@endif
                            </ul>
							<div class="item_image carparts_product_grid">
								{{-- <img src="{{$product->product_thambnail}}" alt="image_not_found"> --}}
								<a href="{{ url('product/detail/'. $item->id ) }}"><img  src="{{ asset( $item->product_thambnail) }}"alt=""></a>

								<ul class="product_action_btns ul_li_center clearfix">
									<li><a class="tooltips" data-placement="top" title="Add To Wishlist" onclick="addToWishList({{$item->id}})"><i class="fal fa-heart"></i></a></li>
									<li><a class="tooltips" data-placement="top" title="Add To Cart" onclick="productView({{$item->id}})" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-shopping-basket"></i></a></li>
									<li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
								</ul>
							</div>
                            <div class="item_content">
                                <span class="item_name">{{$item->brand_name_cats_eye}}</span>
                                <h3 class="item_title">
                                    <a href="{{ url('product/detail/'. $item->id ) }}">{{$item->product_name}}</a>
                                </h3>
                                @if($item->discount_price == NULL)
									<span class="item_price">{{ $item->selling_price }}<span>&#2547;</span></span>
									@else
									<span class="item_price">{{ $item->discount_price}}<span>&#2547;</span></span>
									<span class="item_price"> <del>{{ $item->selling_price }}<span>&#2547;</span></del></span>
									@endif
                            </div>
                        </div>
                    </li>
				@endforeach
                </ul>
            </div>
{{-- ################### on sale product end ##################### --}}



			{{-- ################### Top rated product start ##################### --}}
            <div id="toprated_tab" class="tab-pane fade">
                <ul class="electronic_product_columns ul_li has_4columns clearfix">
                    @foreach ($top_rated as $item)
                    <li>
                        <div class="electronic_product_item">
                            @php
                            $amount = $item->selling_price - $item->discount_price;
                            $discount = ($amount/$item->selling_price) * 100;
                            @endphp
                            <ul class="product_label ul_li clearfix">
                                @if($item->discount_price == NULL)
                                <li class="bg_carparts_red"><span>No Discount</span></li>
                                @else
                                <li class="bg_carparts_red">{{ round($discount) }} %</li>
                                @endif
                            </ul>
                            <div class="item_image carparts_product_grid">
                                <a href="{{ url('product/detail/'. $item->id ) }}"><img  src="{{ asset( $item->product_thambnail) }}"alt=""></a>
                                <ul class="product_action_btns ul_li_center clearfix">
                                    <li><a class="tooltips" data-placement="top" title="Add To Wishlist" onclick="addToWishList({{$item->id}})"><i class="fal fa-heart"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Cart" onclick="productView({{$item->id}})" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-shopping-basket"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                </ul>
                            </div>
                            <div class="item_content">
                                <span class="item_name">{{ $item->brand_name_cats_eye }}</span>
                                <h3 class="item_title">
                                    <a href="{{url('product/detail/'.$item->id)}}">{{ $item->product_name }}</a>
                                </h3>
								@if($item->discount_price == NULL)
								<span class="item_price">{{ $item->selling_price }}<strong>&#2547;</strong></span>
								@else
								<span class="item_price">{{ $item->discount_price}}<strong>&#2547;</strong></span>
								<span class="item_price"> <del>{{ $item->selling_price }}<strong>&#2547;</strong></del></span>
								@endif
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
            {{-- ################### Top rated product end ##################### --}}



		</div>
	</div>
</div>

{{-- //################### latest product end ##################### --}}





						</div>
					</div>
				</div>
			</section>
			<!-- product_section - end
			================================================== 2020 -->





			<!-- product_section - start
			================================================== -->
			<section class="product_section mb_50 clearfix">
				<div class="container maxw_1600">
					<div class="electronic_section_title clearfix">
						<div class="row align-items-center justify-content-lg-between">
							<div class="col-lg-3">
								<h2 class="title_text mb-0" data-bg-color="#ffd4d3">
									 <strong>Categories</strong>
								</h2>
							</div>



							<div class="col-lg-9">
								<ul class="electronic_tabs_nav2 ul_li_center nav" role="tablist">
									<li><a class="active" data-toggle="tab" href="#tvvideo_tab">All Products</a></li>
								 	@foreach ($categories as $category)
										<li><a data-toggle="tab" href="#cameras_tab{{ $category->id }}">{{ $category->category_name }}</a></li>
									@endforeach

								</ul>
							</div>
						</div>
					</div>

					<div class="electronic_content_container">
						<div class="tab-content">

							<div id="tvvideo_tab" class="tab-pane active">


								<ul class="electronic_product_columns ul_li has_5columns mb_50 clearfix">
									@foreach($products as $product)
									<li>
										<div class="electronic_product_item">
											    {{--only  Discount Price Show not discount % amount --}}
												@php
												$amount = $product->selling_price - $product->discount_price;
												$discount = ($amount/$product->selling_price) * 100;
											@endphp
											<ul class="product_label ul_li clearfix">
												@if($product->discount_price == NULL)

												<li>Not Discount</li>
												@else
												<li>{{ round($discount) }} %</li>
												@endif

											</ul>




											<div class="item_image carparts_product_grid" data-bg-color="#f0eeee" >
											<a href="{{ url('product/detail/'. $product->id ) }}"><img  src="{{ asset( $product->product_thambnail) }}"alt=""></a>
                                               {{-- for add cart and add to wishlist button add --}}
											   <ul class="product_action_btns ul_li_center clearfix">
												<li><a class="tooltips" data-placement="top" title="Add To Wishlist"  onclick="addToWishList({{$product->id}})" href="#!"><i class="fal fa-heart"></i></a></li>
												<li><a class="tooltips" data-placement="top" title="Add To Cart" onclick="productView({{$product->id}})" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-shopping-basket"></i></a></li>
												<li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
											</ul>
                                               {{-- endf or add cart and add to wishlist button add  202030 --}}

											</div>
											<div class="item_content">
												<h3 class="item_title">
												<a href="{{ url('product/detail/'. $product->id ) }}">{{ $product->product_name }}</a>
												</h3>

												@if($product->discount_price == NULL)
												<span class="item_price">{{ $product->selling_price }}<span>&#2547;</span></span>
												@else
												<span class="item_price">{{ $product->discount_price}}<span>&#2547;</span></span>
												<span class="item_price"> <del>{{ $product->selling_price }}<span>&#2547;</span></del></span>
                                                @endif
											</div>
										</div>
									</li>
									@endforeach

								</ul>


								<div class="abtn_wrap text-center clearfix">
									<a href="{{route('product.allProduct')}}" class="custom_btn btn_border border_electronic">View All Products</a>
								</div>
							</div>
						 {{-- end all product show --}}
						 {{-- start categorywise product show --}}
						 @foreach($categories as $category)

							<div id="cameras_tab{{ $category->id }}" class="tab-pane fade">




								<ul class="electronic_product_columns ul_li has_5columns mb_50 clearfix">
									@php
										$catwiseproduct = App\Models\Product::where('category_id', $category->id)->orderBy('id','DESC')->get();
									@endphp
									  @foreach($catwiseproduct as $product)
									<li>
										<div class="electronic_product_item">
									           @php
												$amount = $product->selling_price - $product->discount_price;
												$discount = ($amount/$product->selling_price) * 100;
										  	@endphp
										   <ul class="product_label ul_li clearfix">
											   @if($product->discount_price == NULL)

											   <li>Not Discount</li>
											   @else
											   <li>{{ round($discount) }} %</li>
											   @endif

										   </ul>

												<div class="item_image carparts_product_grid" data-bg-color="#f0eeee" >
												<a href="{{ url('product/detail/'. $product->id ) }}"><img  src="{{ asset( $product->product_thambnail ) }}"alt=""></a>
													   {{-- for add cart and add to wishlist button add --}}
													   <ul class="product_action_btns ul_li_center clearfix">
														<li><a class="tooltips" data-placement="top" title="Add To Wishlist"  onclick="addToWishList({{$product->id}})" href="#!"><i class="fal fa-heart"></i></a></li>
														<li><a class="tooltips" data-placement="top" title="Add To Cart" onclick="productView({{$product->id}})" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-shopping-basket"></i></a></li>
														<li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
													</ul>

											</div>
											<div class="item_content">
												<h3 class="item_title">
													<a href="{{ url('product/detail/'. $product->id ) }}">{{ $product->product_name }}</a>

												</h3>

												@if($product->discount_price == NULL)
												<span class="item_price">{{ $product->selling_price }}<span>&#2547;</span></span>
												@else
												<span class="item_price">{{ $product->discount_price }}<span>&#2547;</span></span>
												<span class="item_price"> <del>{{ $product->selling_price}}<span>&#2547;</span></del></span>
                                                @endif

											</div>
										</div>
									</li>
									@endforeach

								</ul>




								<div class="abtn_wrap text-center clearfix">
									<a href="{{route('product.categoryProduct',$category->id)}}" class="custom_btn btn_border border_electronic">View All Products</a>
								</div>
							</div>
							@endforeach
							{{-- end category wise product show --}}
						</div>
					</div>
				</div>
			</section>
			<!-- product_section - end
			================================================== -->
			<!-- consumer_section - start
			================================================== -->
			{{-- most popular product --}}

			<section class="product_section mb_50 clearfix">
				<div class="container maxw_1600">
					<div class="electronic_section_title clearfix">
						<div class="row align-items-center justify-content-lg-between">
							<div class="col-lg-3">
								<h2 class="title_text mb-0" data-bg-color="#ffd4d3">

									 <strong>Most Popular Product</strong>
								</h2>
							</div>
							<div class="col-lg-9">
								<ul class="electronic_tabs_nav2 ul_li_center nav" role="tablist">
									<li><a class="active" data-toggle="tab" href="#tvvideo_tab_2">All Products</a></li>
								 @foreach ($categories as $category)
									<li><a data-toggle="tab" href="#cameras_tab_2{{ $category->id }}">{{ $category->category_name }}</a></li>
									@endforeach

								</ul>
							</div>
						</div>
					</div>

					<div class="electronic_content_container">
						<div class="tab-content">

							<div id="tvvideo_tab_2" class="tab-pane active">


								<ul class="electronic_product_columns ul_li has_5columns mb_50 clearfix">
									@foreach($most_popular_all as $product)
									<li>
										<div class="electronic_product_item">
											    {{--only  Discount Price Show not discount % amount --}}
												@php
												$amount = $product->selling_price - $product->discount_price;
												$discount = ($amount/$product->selling_price) * 100;
											@endphp
											<ul class="product_label ul_li clearfix">
												@if($product->discount_price == NULL)

												<li>Not Discount</li>
												@else
												<li>{{ round($discount) }} %</li>
												@endif

											</ul>
											<div class="item_image carparts_product_grid" data-bg-color="#f0eeee" >

												<a href="{{ url('product/detail/'. $product->id ) }}"><img  src="{{ asset( $product->product_thambnail ) }}"alt=""></a>
												<ul class="product_action_btns ul_li_center clearfix">
													<li><a class="tooltips" data-placement="top" title="Add To Wishlist" onclick="addToWishList({{$product->id}})" href="#!"><i class="fal fa-heart"></i></a></li>
													<li><a class="tooltips" data-placement="top" title="Add To Cart" onclick="productView({{$product->id}})"  href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-shopping-basket"></i></a></li>
													<li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
												</ul>
											</div>
											<div class="item_content">
												<h3 class="item_title">
												<a href="{{ url('product/detail/'. $product->id ) }}">{{ $product->product_name }}</a>
												</h3>

													<div class="wrap_label">

													<small class="wrap_label" data-background="{{asset('frontend/assets/images')}}/label_01.png">Most Popular</small>



													<span class="interested_text">({{ $product->product_views }} interested)</span>


													</div>

												@if($product->discount_price == NULL)
												<span class="item_price">{{ $product->selling_price }}<span>&#2547;</span></span>
												@else
												<span class="item_price">{{ $product->discount_price }}<span>&#2547;</span></span>
												<span class="item_price"> <del>{{ $product->selling_price }}<span>&#2547;</span></del></span>
                                                @endif
											</div>

										</div>
									</li>
									@endforeach

								</ul>


								<div class="abtn_wrap text-center ">
									<a href="{{route('product.popularProduct')}}" class="custom_btn btn_sm btn_border border_electronic">Browse Now</a>
								</div>
							</div>
						 {{-- most popular product show for all  --}}



						 {{-- start categorywise most popular  product show --}}
						 @foreach($categories as $category)

							<div id="cameras_tab_2{{ $category->id }}" class="tab-pane fade">




								<ul class="electronic_product_columns ul_li has_5columns mb_50 clearfix">
									@php
									$most_popular_category_wise=App\Models\Product::where('category_id',$category->id)->where('status',1)->orderBy('product_views','DESC')->limit(10)->get();
									@endphp
									  @foreach($most_popular_category_wise as $product)
									<li>
										<div class="electronic_product_item">
									           @php
											   $amount = $product->selling_price - $product->discount_price;
											   $discount = ($amount/$product->selling_price) * 100;
										   @endphp
										   <ul class="product_label ul_li clearfix">
											   @if($product->discount_price == NULL)

											   <li>Not Discount</li>
											   @else
											   <li>{{ round($discount) }} %</li>
											   @endif

										   </ul>

											<div class="item_image carparts_product_grid" data-bg-color="#f0eeee" >

												<a href="{{ url('product/detail/'. $product->id ) }}"><img  src="{{ asset( $product->product_thambnail ) }}"alt=""></a>
												<ul class="product_action_btns ul_li_center clearfix">
													<li><a class="tooltips" data-placement="top" title="Add To Wishlist" onclick="addToWishList({{$product->id}})" href="#!"><i class="fal fa-heart"></i></a></li>
													<li><a class="tooltips" data-placement="top" title="Add To Cart" onclick="productView({{$product->id}})" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-shopping-basket"></i></a></li>
													<li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
												</ul>
											</div>
											<div class="item_content">
												<h3 class="item_title">
													<a href="{{ url('product/detail/'. $product->id ) }}">{{ $product->product_name }}</a>

												</h3>
												<div class="wrap_label">

													<small class="wrap_label" data-background="{{asset('frontend/assets/images')}}/label_01.png">Most Popular</small>



													<span class="interested_text">({{ $product->product_views }} interested)</span>


													</div>

												@if($product->discount_price == NULL)
												<span class="item_price">{{ $product->selling_price }}<span>&#2547;</span></span>
												@else
												<span class="item_price">{{ $product->discount_price }}<span>&#2547;</span></span>
												<span class="item_price"> <del>{{ $product->selling_price }}<span>&#2547;</span></del></span>
                                                @endif

											</div>
										</div>
									</li>
									@endforeach

								</ul>

				<div class="abtn_wrap text-center clearfix">
					<a href="#!" class="custom_btn btn_sm btn_border border_electronic">Browse Now</a>
				</div>
							</div>
							@endforeach
							{{-- end category wise product show --}}
						</div>
					</div>
				</div>
			</section>
			<!-- product_section - start 2010
			================================================== -->
			<section class="product_section mb_50 clearfix">
				<div class="container">

					<div class="row no-gutters">


						<div class="col-lg-12">
							<div class="electronic_content_container">
								<h2 class="text-center" style="background: rgb(255, 212, 211); padding: 30px 0;" >Best Selling Products</h2>
								<ul class="electronic_product_columns ul_li has_3columns mb_50 clearfix">
									@foreach ($deliverdProducts as $product)
										<li>
										<div class="electronic_product_listlayout">
											<div class="item_image carparts_product_grid" data-bg-color="#f8f8f8">
												<img src="{{asset($product->product->product_thambnail)}}" alt="image_not_found">
												<ul class="product_action_btns ul_li_center clearfix">
													<li><a class="tooltips" data-placement="top" title="Add To Wishlist" onclick="addToWishList({{$product->product->id}})" href="#!"><i class="fal fa-heart"></i></a></li>
													<li><a class="tooltips" data-placement="top" title="Add To Cart" onclick="productView({{$product->product->id}})" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-shopping-basket"></i></a></li>
													<li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
												</ul>
											</div>
											<div class="item_content">
												<div class="item_price">
													<strong>৳ {{$product->product->discount_price}}</strong>
													<del>৳ {{$product->product->selling_price}}</del>
												</div>

												<h3 class="item_title">
													<a href="{{ url('product/detail/'. $product->product->id ) }}">
														{{$product->product->product_name}}
													</a>
												</h3>

                                                @php
                                                    $avarage = App\Models\review::where('product_id',$product->product->id)->avg('star');
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

												<ul class="product_label ul_li clearfix">
													<li data-bg-color="#62ab00">-৳ {{$product->product->selling_price-$product->product->discount_price}}</li>
												</ul>
											</div>
										</div>
									</li>
									@endforeach




								</ul>


							</div>
						</div>

					</div>
				</div>
			</section>
			<!-- product_section - end
			================================================== -->


			<!-- advertisement_section - start--Ashim
			================================================== -->
			<div class="advertisement_section mb_50 clearfix">
				<div class="container maxw_1600">
					<div class="row justify-content-lg-between">
						<div class="col-lg-8 col-md-8">
							<div class=" center">
								<a href="#!">
									@isset($bannerCatagory->bennar_img)

										<img src="{{asset($bannerCatagory->bennar_img)}}" alt="image_not_found" >

									@endisset
								</a>
							</div>
						</div>


						<div class="col-lg-4 col-md-4">
							<div class="advertisement_image">
								<a href="#!">
									<img src="{{asset('frontend/assets/images/offer/electronic/img_05.jpg')}}" alt="image_not_found">
								</a>
							</div>
						</div>

					</div>
				</div>
			</div>
			<!-- advertisement_section - end
			================================================== -->


			<!-- category_section - start
			================================================== -->
			<section class="category_section mb_50 clearfix">
				<div class="container maxw_1600">

					<div class="electronic_section_title clearfix">
						<h2 class="title_text mb-0" data-bg-color="#f6eaea">
							<strong>Top Categories</strong> this Week
						</h2>
					</div>

					<div class="electronic_content_container">
						<div class="row mb_50 justify-content-lg-between">
							<div class="col-lg-6">
								<div class="electronic_category_wrap" data-bg-color="#ecf7f3">
									<h3 class="wrap_title">{{$categories[0]->category_name?? null}}</h3>
									<div class="row justify-content-lg-between">
										<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 order-last">
											<div class="image_wrap" data-bg-color="#ffffff">
												<img src="{{asset('frontend/assets/images')}}/category/electronic/img_01.png" alt="image_not_found">
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
											<ul class="ul_li_block clearfix">

												@for ($i = 0; $i < 5; $i++)
													@isset($categories[0]->subsubcategory[$i])

														<li><a href="{{route('product.searchSubSubCategory',$categories[0]->subsubcategory[$i]->id)}}">{{$categories[0]->subsubcategory[$i]->subsubcategory_name?? null}}</a></li>
													@endisset


												@endfor


											</ul>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
											<ul class="ul_li_block clearfix">

												@for ($i = 5; $i < 10; $i++)
													@isset($categories[0]->subsubcategory[$i])

														<li><a href="{{route('product.searchSubSubCategory',$categories[0]->subsubcategory[$i]->id)}}">{{$categories[0]->subsubcategory[$i]->subsubcategory_name?? null}}</a></li>
													@endisset


												@endfor
											</ul>
										</div>
									</div>
								</div>

								<div class="electronic_category_wrap" data-bg-color="#ecf7f3">
									<h3 class="wrap_title">{{$categories[1]->category_name?? null}}</h3>
									<div class="row justify-content-lg-between">
										<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
											<div class="image_wrap" data-bg-color="#ffffff">
												<img src="{{asset('frontend/assets/images')}}/category/electronic/img_02.png" alt="image_not_found">
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
											<ul class="ul_li_block clearfix">

												@for ($i = 0; $i < 5; $i++)
													@isset($categories[1]->subsubcategory[$i])

													<li><a href="{{route('product.searchSubSubCategory',$categories[1]->subsubcategory[$i]->id)}}">{{$categories[1]->subsubcategory[$i]->subsubcategory_name?? null}}</a></li>
													@endisset

												@endfor
											</ul>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
											<ul class="ul_li_block clearfix">

												@for ($i = 5; $i < 10; $i++)
												@isset($categories[1]->subsubcategory[$i])
												<li><a href="{{route('product.searchSubSubCategory',$categories[1]->subsubcategory[$i]->id)}}">{{$categories[1]->subsubcategory[$i]->subsubcategory_name?? null}}</a></li>

												@endisset


												@endfor
											</ul>
										</div>
									</div>
								</div>
							</div>

							<div class="col-lg-6">
								<div class="electronic_category_wrap" data-bg-color="#f6eaea">
									<h3 class="wrap_title">{{$categories[2]->category_name?? null}}</h3>
									<div class="row justify-content-lg-between">
										<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 order-last">
											<div class="image_wrap" data-bg-color="#ffffff">
												<img src="{{asset('frontend/assets/images')}}/category/electronic/img_03.png" alt="image_not_found">
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
											<ul class="ul_li_block clearfix">
												@for ($i = 0; $i < 5; $i++)

												@isset($categories[2]->subsubcategory[$i])

												<li><a href="{{route('product.searchSubSubCategory',$categories[2]->subsubcategory[$i]->id)}}">{{$categories[2]->subsubcategory[$i]->subsubcategory_name?? null}}</a></li>
												@endisset


												@endfor
											</ul>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
											<ul class="ul_li_block clearfix">
												@for ($i = 5; $i < 10; $i++)

												@isset($categories[2]->subsubcategory[$i])

												<li><a href="{{route('product.searchSubSubCategory',$categories[2]->subsubcategory[$i]->id)}}">{{$categories[2]->subsubcategory[$i]->subsubcategory_name?? null}}</a></li>
												@endisset

												@endfor
											</ul>
										</div>
									</div>
								</div>

								<div class="electronic_category_wrap" data-bg-color="#f6eaea">
									<h3 class="wrap_title">{{$categories[3]->category_name??null}}</h3>
									<div class="row justify-content-lg-between">
										<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
											<div class="image_wrap" data-bg-color="#ffffff">
												<img src="{{asset('frontend/assets/images')}}/category/electronic/img_04.png" alt="image_not_found">
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
											<ul class="ul_li_block clearfix">

												@for ($i = 0; $i < 5; $i++)
													@isset($categories[3]->subsubcategory[$i])

														<li><a href="{{route('product.searchSubSubCategory',$categories[3]->subsubcategory[$i]->id)}}">{{$categories[3]->subsubcategory[$i]->subsubcategory_name?? null}}</a></li>
													@endisset

												@endfor
											</ul>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
											<ul class="ul_li_block clearfix">
												@for ($i = 5; $i < 10; $i++)
												@isset($categories[3]->subsubcategory[$i])

												<li><a href="{{route('product.searchSubSubCategory',$categories[3]->subsubcategory[$i]->id)}}">{{$categories[3]->subsubcategory[$i]->subsubcategory_name?? null}}</a></li>
												@endisset


												@endfor
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>

						{{-- <div class="abtn_wrap text-center clearfix">
							<a href="#!" class="custom_btn btn_border border_electronic">Browse Now</a>
						</div> --}}
					</div>

				</div>
			</section>
			<!-- category_section - end
			================================================== -->


			<!-- feature_section - start slider
			================================================== -->
			<section class="feature_section electronic_feature_carousel mb_50 clearfix">
				<div class="slideshow1_slider clearfix" data-slick='{"arrows": false}'>

					@foreach ($latest_products as $item)


					<div class="item" data-background="{{asset('frontend/assets/images')}}/backgrounds/bg_12.jpg">
						{{-- <div class="item" style="background-color: #C0C0C0"> --}}
						<div class="container maxw_1600">
							<div class="row align-items-center justify-content-lg-between">
								<div class="col-lg-7">
									{{-- <div class="item_image"> --}}

										<img src="{{asset($item->product_thambnail)}}"  width="500" height="600" alt="image_not_found">
									{{-- </div> --}}
								</div>

								<div class="col-lg-5">
									<div class="item_content">
										<span class="item_price">

											@if ($item->discount_price  == NULL )

											<strong> <span>&#2547;</span> {{ $item->selling_price}}</strong>

										@else
										<strong> <span>&#2547;</span> {{$item->discount_price}}</strong>

											<h4> <del style=" color:white; "> <span>&#2547;</span> {{ $item->selling_price}} </del> </h4>
									   @endif

										</span>





										<h3 class="item_title text-white">

											{{ $item->product_name}}
										</h3>
										<a href="{{route('ProductDetails',$item->id)}}" class="custom_btn bg_white">Shop Now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					@endforeach

			</section>
			<!-- feature_section - slider  end
			================================================== -->




			<!-- dailydeals_section - start
			================================================== -->
			<section class="dailydeals_section mb_50 clearfix">
				<div class="container maxw_1600">

					<div class="electronic_section_title justify-content-lg-between clearfix">
						<div class="row align-items-center justify-content-lg-between">
							<div class="col-lg-5">
								<h2 class="title_text mb-0 text-white" data-bg-color="#201d1d">
							 <strong>Daily Best Sale Products</strong>
								</h2>
							</div>
						</div>
					</div>

					<div class="electronic_content_container">
						<div class="tab-content">


							<div id="cameras3_tab" class="tab-pane active">
                               <div class="row justify-content-lg-between  ">

									@php
										$pid = 1;
										$count =0;
									@endphp

									@foreach ($dailyBestSales as $item)


										@php
											$product = App\Models\Product::find($item->product_id);
										@endphp




											<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">

										<div class="electronic_product_biglistlayout">

											<div class="item_image">

												<div class="tab-content ">
                                                    @isset($product->product_thambnail)
													    <img id="child_tab1_{{$pid}}_1"   class="tab-pane active " src="{{asset($product->product_thambnail)}}" alt="image_not_found">
                                                    @endisset

													@php
														$iid = 2;
													@endphp

													@foreach ($product->multiImg as $img)

                                                        @isset($img->photo_name)

                                                            <img id="child_tab1_{{$pid}}_{{$iid}}"  class="tab-pane fade"  src="{{asset($img->photo_name)}}" alt="image_not_found">

                                                        @endisset



                                                        @php
                                                            $iid++;
                                                        @endphp

													@endforeach

												</div>

												@php
													$iid = 2;
												@endphp


												<ul class="child_items_nav nav d-flex align-items-center justify-content-center" role="tablist">
													<li>
														<a class="active" data-toggle="tab" href="#child_tab1_{{$pid}}_1">
															<img src="{{asset($product->product_thambnail)}}" alt="image_not_found">
														</a>
													</li>
														@foreach ($product->multiImg as $img)
															<li>


																	<a data-toggle="tab" href="#child_tab1_{{$pid}}_{{$iid}}">
																		<img src="{{$img->photo_name}}" alt="image_not_found">
																	</a>

																@php
																	$iid++;
																@endphp
															</li>
														@endforeach
													@php
														$pid++;

													@endphp
													@if ($count>=5)
														@break;
													@endif
												</ul>


												<div class="item_quality">A++</div>
												<ul class="product_label ul_li clearfix">
													<li data-bg-color="#62ab00"> -৳ {{$product->discount_price}}  </li>
												</ul>

											</div>
											<div class="item_content">
												<div class="rating_star_wrap d-flex align-items-center clearfix">
													{{-- <ul class="rating_star ul_li mr-2 clearfix">
														<li><i class="fas fa-star"></i></li>
														<li><i class="fas fa-star"></i></li>
														<li><i class="fas fa-star"></i></li>
														<li><i class="fas fa-star"></i></li>
														<li><i class="fas fa-star"></i></li>
													</ul> --}}
                                                    @php
				                                        $reviewcount = App\Models\review::where('product_id',$product->id)->count();

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
                                                    @if ($reviewcount == Null)
                                                    @else
													<span class="rating_value">({{$reviewcount}})</span>

                                                  @endif
												</div>
												<span class="item_price"> <del>{{$product->selling_price}}</del> ৳</span>
												<h3 class="item_title">
													<a href="{{ url('product/detail/'. $product->id ) }}">{{$product->product_name}}</a>
												</h3>
												<ul class="item_info_list ul_li_block clearfix">
													<li>- {{$product->product_short_descp}}</li>


												</ul>
												<div class="progress_wrap clearfix">
													<div class="progress">
														<div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
														</div>
													</div>
													<span class="value_text">796 Sold</span>
												</div>
												<a href="{{ url('product/detail/'. $product->id ) }}"class="custom_btn btn_sm bg_electronic_blue">ShopNow</a>
											</div>
										</div>
									</div>
									@endforeach



								</div>
							</div>


						</div>


					</div>

				</div>
			</section>
			<!-- dailydeals_section - end
			================================================== -->









			<!-- blog_section - end
			================================================== -->


			<section class="blog_section mb_50 clearfix">
				<div class="container maxw_1600">
					<div class="electronic_section_title clearfix">
						<h2 class="title_text mb-0" data-bg-color="#ffe7e7">
							 <strong>New Product</strong>
						</h2>
					</div>

					<div class="electronic_content_container">

						@isset($newTwoproducts[0])


							<div class="electronic_blog_listlayout">
								<div class="row align-items-center justify-content-lg-between">
									<div class="col-lg-7">
												<div class="item_image" data-bg-color="#f0eeee" >
											<img src="{{asset($newTwoproducts[0]->product_thambnail)}}" style="width: 804px; height:532px;" alt="image_not_found">

										</div>
									</div>

									<div class="col-lg-5">
										<div class="item_content">
											<h3 class="item_title mb_30">
												{{$newTwoproducts[0]->product_name}}
											</h3>
											<ul class="modern_post_meta ul_li mb_15 clearfix">
												<li>{{$newTwoproducts[0]->created_at->format('d-M-Y')}}</li>

											</ul>
											<p class="mb_30">
												{!!  $newTwoproducts[0]->product_long_descp !!}
											</p>
											<a class="custom_btn btn_sm bg_electronic_blue" href="{{route('ProductDetails',$newTwoproducts[0]->id)}}">Browse Now</a>
										</div>

									</div>
								</div>
							</div>


						@endisset

						@isset($newTwoproducts[1])


							<div class="electronic_blog_listlayout">
								<div class="row align-items-center justify-content-lg-between">
									<div class="col-lg-7 order-last">
												<div class="item_image" data-bg-color="#f0eeee" >
											<img src="{{asset($newTwoproducts[1]->product_thambnail)}}" style="width: 804px; height:532px;" alt="image_not_found">

										</div>
									</div>
									<div class="col-lg-5">
										<div class="item_content">
											<h3 class="item_title mb_30">
												{{$newTwoproducts[1]->product_name}}
											</h3>
											<ul class="modern_post_meta ul_li mb_15 clearfix">
												<li>{{$newTwoproducts[1]->created_at->format('d-M-Y')}}</li>

											</ul>

											<p class="mb_30">  {!!  $newTwoproducts[1]->product_long_descp !!}   </p>


											<a class="custom_btn btn_sm bg_electronic_blue" href="{{route('ProductDetails',$newTwoproducts[1]->id)}}">Browse Now</a>

										</div>
									</div>
								</div>
							</div>


						@endisset


						<div class="abtn_wrap text-center clearfix">
							<a href="{{route('product.latestProduct')}}" class="custom_btn btn_border border_electronic">View More Product</a>
						</div>
					</div>
				</div>
			</section>


			<!-- blog_section - end
			================================================== -->


			<!-- feature_section - start
			================================================== -->
			<section class="feature_section bg_white sec_ptb_100 clearfix">
				<div class="container maxw_1600">
					<div class="row justify-content-lg-between">

						<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
							<div class="featured_products_wrap">
                                @php
                                    // for  hot_deals
                                    $hot_deals = App\Models\Product::where('hot_deals', 1)->where('discount_price','!=',NULL)->orderBy('id', 'DESC')->limit(10)->get();
                                    @endphp
								<h3 class="wrap_title">Hot Deals</h3>
								<div class="electronic_feature_carousel2 arrow_ycenter mb_50" data-slick='{"dots": false}'>
                                    @foreach($hot_deals as $hot_deal)
									<div class="item">
										<div class="electronic_deals_grid clearfix">
											<div class="item_image" data-bg-color="#ecf7f3">
												<a href="{{ url('product/detail/'. $hot_deal->id ) }}"> <img src=" {{ asset( $hot_deal->product_thambnail ) }}"alt="">
                                                </a>

											</div>
											<div class="item_content position-rive">
												<span class="item_price"><span>&#2547;</span>{{ $hot_deal->selling_price }}</span>
												<h4 class="item_title">
													<a href="{{ url('product/detail/'. $hot_deal->id ) }}">{{ $hot_deal->product_name }}</a>
												</h4>
												<div class="counter_wrap">
													<ul class="item_info_list ul_li_block clearfix">


														{{-- <li class="item_price"> ৳ {{$hot_deal->discount_price}}</li>
														<li class="item_price"> ৳ {{$hot_deal->selling_price}}</li>
														<li class="item_price"> ৳ {{$hot_deal->selling_price}}</li>  --}}

														@if ($hot_deal->discount_price  == NULL )

											<h5> ৳ {{ $hot_deal->selling_price}}</h5>

										@else
										<h5>৳ {{$hot_deal->discount_price}}</h5>

										<h5>৳ <del> {{ $hot_deal->selling_price}}  </del></h5>
									   @endif

													</ul>
													{{-- <ul class="countdown_timer timein_box ul_li clearfix" data-countdown="2021/3/24"></ul> --}}
												</div>
											</div>
										</div>
									</div>
                                    @endforeach
								</div>


							</div>
						</div>

						<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 order-first">
							<div class="featured_products_wrap">
								<h3 class="wrap_title">  SPECIAL OFFER
								</h3>

								<div class="mb_50 clearfix">
									@php
										$special_offer = App\Models\Product::where('special_offer','1')->limit(3)->get();
									@endphp
									@foreach ($special_offer as $item)
										<div class="electronic_product_small">
										<a class="item_image" href="{{ url('product/detail/'. $item->id ) }}">
											<img src="{{asset($item->product_thambnail)}}" alt="image_not_found">
										</a>
										<div class="item_content">
											<h4 class="item_title">
												<a href="{{ url('product/detail/'. $item->id ) }}">{{$item->product_name}}</a>
											</h4>
											<span class="item_price">৳ {{$item->discount_price}}</span>
										</div>
									</div>
									@endforeach



								</div>

								<a class="text_btn" href="{{route('product.specialOffer')}}">
									<span>VIEW MORE</span>
									<i class="fal fa-long-arrow-right"></i>
								</a>
							</div>
						</div>

						<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
							<div class="featured_products_wrap">
								<h3 class="wrap_title">SPECIAL DEALS
								</h3>

								<div class="mb_50 clearfix">

									@php
										$special_deale = App\Models\Product::where('special_deals','1')->limit(3)->get();
									@endphp
									@foreach ($special_deale as $item)
										<div class="electronic_product_small">
										<a class="item_image" href="{{ url('product/detail/'. $item->id ) }}">
											<img src="{{asset($item->product_thambnail)}}" alt="image_not_found">
										</a>
										<div class="item_content">
											<h4 class="item_title">
												<a href="{{ url('product/detail/'. $item->id ) }}">{{$item->product_name}}</a>
											</h4>
											<span class="item_price">৳ {{$item->discount_price}}</span>
										</div>
									</div>
									@endforeach



								</div>

								<a class="text_btn" href="{{route('product.specialDeal')}}">
									<span>VIEW MORE</span>
									<i class="fal fa-long-arrow-right"></i>
								</a>
							</div>
						</div>

					</div>
				</div>
			</section>
			<!-- feature_section - end
			================================================== -->













@endsection



@push('js')
<script>

	// var currentYear = new Date().getFullYear(),
	// i = 2;
// $('[data-countdown]').each(function() {
// 	var $this = $(this),
// 		finalDate = $(this).attr('value');


// 	$this.countdown(finalDate, function(event) {
// 	$this.html(event.strftime('%D days %H:%M:%S'));
// 	});
// });
</script>
<script>
	$(document).ready(function(){
		let hot_deals_timers = document.querySelectorAll('.timer_countdown');




		hot_deals_timers.forEach((hot_deals_timer,index)=>{
			console.log(hot_deals_timer)
			 var hotDealsSetInterval= setInterval(() => {
				let timeleft             = 0 ;
				let hot_deals_id         = hot_deals_timer.dataset.hot_deal_id;
				let hot_deals_days       = document.getElementById(`hot_deals_days_${hot_deals_id}`);
				let hot_deals_hour       = document.getElementById(`hot_deals_hours_${hot_deals_id}`);
				let hot_deals_minutes    = document.getElementById(`hot_deals_minutes${hot_deals_id}`);
				let hot_deals_seconds    = document.getElementById(`hot_deals_seconds${hot_deals_id}`);
				var countDownDate = new Date(hot_deals_timer?.dataset?.value).getTime();
				if(countDownDate > 0 && !isNaN(countDownDate)){
					var now      = new Date().getTime();
					timeleft = countDownDate - now;
					var days     = Math.floor(timeleft / (1000 * 60 * 60 * 24));
					var hours    = Math.floor((timeleft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
					var minutes  = Math.floor((timeleft % (1000 * 60 * 60)) / (1000 * 60));
					var seconds  = Math.floor((timeleft % (1000 * 60)) / 1000);
					if(days || days < 10){
						hot_deals_days.innerHTML  = `${days}`;
					}else{
						hot_deals_days.innerHTML  = `${days}`;
					}
					if(!isNaN(hours) && hours > 0){
						hot_deals_hour.innerHTML = `${hours}`;
					}
					if(!isNaN(minutes) && minutes > 0 ){
						hot_deals_minutes.innerHTML = `${minutes}`;
					}
					if(!isNaN(seconds) && seconds > 0){
						hot_deals_seconds.innerHTML = `${seconds}`;
					}
				}

				if(timeleft <= 0){
					clearInterval(hotDealsSetInterval);
					hot_deals_days.innerHTML = "0";
					hot_deals_minutes.innerHTML = "00";
					hot_deals_seconds.innerHTML = "00";
				}
			}, 1000);



		});
	})
</script>

@endpush
