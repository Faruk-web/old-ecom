
@extends('frontend.main_master')
@section('index')


<style>
	.checked {
		color : darkorange;
	}

</style>


<main>


	<!-- sidebar mobile menu & sidebar cart - start
	================================================== -->

	@include('frontend.body.mobile_sidbar_menu')

	<!-- sidebar mobile menu & sidebar cart - end
	================================================== -->


	<!-- breadcrumb_section - start
	================================================== -->
	<div class="container maxw_1600">
		<div class="f2_breadcrumb_nav_wrap mt-0 sec_ptb_50">
			<ul class="ce_breadcrumb_nav ul_li clearfix">
				<li><a href="{{ url('/') }}">Home</a></li>
				<li>{{ $product->product_name }}</li>
				{{-- <li>Electronic</li>
				<li>Shop Details</li> --}}
			</ul>
		</div>
	</div>
	<!-- breadcrumb_section - end
	================================================== -->


	<!-- electronic_details - start
	================================================== -->
	<section class="electronic_details clearfix">
		<div class="container maxw_1600">
			<div class="row mb_50 justify-content-lg-between">
				<div class="col-lg-5">
					<div class="details_image mb_30 position-relative">

						<div class="tab-content">
                            @php
										$pid = 1;
									@endphp

                            @isset($product->product_thambnail)

                                                        <img data-fancybox href="{{asset($product->product_thambnail)}}" id="child_tab1_{{$pid}}_1"   class="tab-pane active " src="{{asset($product->product_thambnail)}}" alt="image_not_found">

                                                    @endisset

													@php
														$iid = 2;
													@endphp

													@foreach ($product->multiImg as $img)

                                                        @isset($img->photo_name)

                                                            <img  data-fancybox href="{{asset($img->photo_name)}}" id="child_tab1_{{$pid}}_{{$iid}}"  class="tab-pane fade"  src="{{asset($img->photo_name)}}" alt="image_not_found">

                                                        @endisset



                                                        @php
                                                            $iid++;
                                                        @endphp

													@endforeach
                                                    @php
													$iid = 2;
												@endphp





						</div>


						{{-- <ul class="nav ul_li clearfix" role="tablist">
							@foreach($multiimgs as $multiimg)
							<li>
								<a class="active" data-toggle="tab" href="#di_tab_1{{ $multiimg->id }}">
									<img alt="" src="{{ asset($multiimg->photo_name) }}"
									data-echo="{{ asset($multiimg->photo_name) }}"alt="image_not_found">

								</a>
							</li>
							@endforeach
						</ul> 2020 --}}
						<ul class="child_items_nav nav d-flex align-items-center justify-content-center" role="tablist">

							<li>
                                <a  data-fancybox  class="active" data-toggle="tab" href="#child_tab1_{{$pid}}_1">
                                    <img src="{{asset($product->product_thambnail)}}" alt="image_not_found">
                                </a>
                            </li>

                            @foreach ($product->multiImg as $img)
															<li>


																	<a   data-toggle="tab" href="#child_tab1_{{$pid}}_{{$iid}}">
																		<img src="{{asset($img->photo_name) }}" alt="image_not_found">
																	</a>

																@php
																	$iid++;
																@endphp
															</li>
														@endforeach
													@php
														$pid++;
													@endphp

						</ul>
							{{-- <ul class="child_items_nav nav d-flex align-items-center justify-content-center" role="tablist">
													<li>
														<a class="active" data-toggle="tab" href="#child_tab1_{{$pid}}_1">
															<img src="{{asset(isset($product->product_thambnail))}}" alt="image_not_found">
														</a>
													</li>
														@foreach ($product->multiImg as $img)
															<li>


																	<a data-toggle="tab" href="#child_tab1_{{$pid}}_{{$iid}}">
																		<img src="{{asset(isset($img->photo_name))}}" alt="image_not_found">
																	</a>

																@php
																	$iid++;
																@endphp
															</li>
														@endforeach
													@php
														$pid++;
													@endphp
												</ul> --}}
					</div>
				</div>

				<div class="col-lg-7">
					<div class="details_content">
						<div class="d-flex align-items-center justify-content-between mb_15">
							{{-- <span class="item_brand text-uppercase">
								<img src="assets/images/details/electronic/brand_01.png" alt="image_not_found">
								Smartphones
							</span> --}}
							@if ($product->product_qty>0)

								<span class="instock_text">Availability: <strong data-text-color="#5bb300" >In stock</strong></span>


							@else

							<span class="instock_text">Availability: <strong data-text-color="#5bb300" class="btn btn-danger">Out of stock</strong></span>

							@endif

						</div>
						<h2 class="item_title mb_15">{{ $product->product_name }}</h2>
						<div class="rating_review_wrap d-flex align-items-center clearfix">

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
						<span class=" fa fa-star"></span>
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
				<button type="button" class="add_review_btn"> {{$reviewcount}} reviews</button>

				@endif
						</div>
						<hr>
						<div class="action_btns d-flex align-items-center mb_15 clearfix">
                            <a class="tooltips" data-placement="top" title="Add To Wishlist" onclick="addToWishList({{$product->id}})" href="#!"><span><i class="far fa-heart"></i></span> Add to Wishlist</a>
						</div>

						<p class="mb-2">
							{{ $product->product_short_descp }}
						</p>

						<div class="row">
							<div class="col-sm-3">
						@if($product->discount_price == NULL)
						<span class="item_price mb_15 d-flex align-items-center"><strong>{{ $product->selling_price }}<span>&#2547;</span></strong></span>

						@else
						<span class="item_price mb_15 d-flex align-items-center" ><strong>{{ $product->discount_price }}<span>&#2547;</span></strong></span>
						<span class="item_price mb_15 d-flex align-items-center"><del>{{ $product->selling_price }}<span>&#2547;</span></del></span>
						@endif
					</div>


						<!-- Product color and size add -->

							<div class="col-sm-3">

								<div class="form-group bg-success">

								@if($product->product_color == NULL)

								@else

									{{-- <label class="info-title control-label">Choose Color <span>*</span></label> --}}
									<select class="form-control unicase-form-control selectpicker" style="display: none;" id="color" >
										<option selected="" disabled="">--Choose Color--</option>
										@foreach($product_color_all as $color)
										<option value="{{ $color }}">{{ ucwords($color) }}</option>
										 @endforeach
									</select>

									@endif

								</div>
							</div>


							<div class="col-sm-3" >

								<div class="form-group" >


									@if($product->product_size == NULL)

									@else

									{{-- <label class="info-title control-label" >Choose Size <span>*</span></label> --}}
									<select class="form-control unicase-form-control selectpicker" style="display: none;" id="size" >

										<option selected="" disabled="">--Choose Size--</option>

										@foreach($product_size_all as $size)

										<option value="{{ $size }}">{{ ucwords($size) }}</option>
										 @endforeach
									</select>

									@endif

								</div>
							</div>

						</div><!-- /.row -->
						<!-- Product color and size add -->


						<ul class="btns_group ul_li mb_15 clearfix">
							<li>
								<div class="quantity_input">
									<form action="#">
										<input class="input_number" type="text" value="1">
										<span class="input_number_decrement">–</span>
										<span class="input_number_increment">+</span>


									</form>
								</div>
							</li>


						<li>

                            {{-- <a class="custom_btn bg_electronic_blue" href="#!"><i class="fas fa-cart-arrow-down mr-2"></i>Add to Cart</a>  </li> --}}

                            <li><a class="tooltips btn btn-primary" data-placement="top" title="Add To Cart" onclick="productView({{$product->id}})" href="#!" data-toggle="modal" data-target="#quickview_modal"> Add to Cart</a></li>

                            {{-- <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li> --}}


							{{-- <input type="hidden" id="product_id" value="{{ $product->id }}" min="1"> --}}
							{{-- <li> <a  class="custom_btn bg_electronic_blue" href="#!"><i class="fas fa-cart-arrow-down mr-2" ></i>Add to Cart</a></li> --}}

								<ul class="post_share ul_li clearfix">
									<li><a href="https://www.facebook.com" data-text-color="#405aa6" style="color: rgb(64, 90, 166);"><span><i class="fab fa-facebook-square mr-1"></i> Share</span> <small>0</small></a></li>
									<li><a href="https://www.twitter.com/" data-text-color="#00acee" style="color: rgb(0, 172, 238);"><span><i class="fab fa-twitter-square mr-1"></i> Tweet</span> <small>0</small></a></li>
									<li><a href="https://www.instagram.com/" data-text-color="#bc1221" style="color: rgb(188, 18, 33);"><span><i class="fab fa-instagram mr-1"></i> Instagram</span></a></li>
								</ul>
							</li>
						</ul>
						<div class="row align-items-center">
							<div class="col-lg-5">
								<div class="product_tag_list d-flex align-items-center clearfix">
									{{-- @php
									$tags = App\Models\Product::groupBy('product_tags')->select('product_tags')->get();

									@endphp      --}}

									<h4 class="list_title">Tags:</h4>
									<ul class="ul_li clearfix">
										{{-- @foreach($tags as $tag)
										<li><a href="{{ url('product/tag/'.$tag->product_tags) }}">{{ $tag->product_tags  }}</a></li>
    									@endforeach --}}
										{{-- <li><a href="{{ url('product/tag/'.$product->product_tags) }}">{{ $product->product_tags }}</a></li> --}}
										</ul>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>

			<div class="electronic_details_description">
				<ul class="nav ul_li bg_electronic_blue" role="tablist">

					<li>
						<a data-toggle="tab" href="#description_tab" class="">Description</a>
					</li>

					<li>
						<a data-toggle="tab" href="#reviews_tab" class="">Reviews</a>
					</li>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content">
					<div id="description_tab" class="tab-pane active">
		                <div class="row mb_15 justify-content-lg-between">
					<div class="col-lg-6">
							<div class="description_content">
							<h4 class="title_text mb_15">Product Long Description</h4>
								<p class="mb_30">
									{!! $product->product_long_descp !!}

								</p>
							</div>
						</div>
					</div>


					<div class="description_image mb_30">
						<img src="{{asset('frontend/assets/images/details/electronic/img_07.png' )}}" alt="image_not_found">
						{{-- <img src="{{ asset($product->product_thambnail) }}" alt="image_not_found"> --}}
						<a class="play_btn" href = "{{ $product->vedio }}" >
							<i class="fas fa-play"></i>
						</a>

					</div>
				</div>

			        <div id="reviews_tab" class="tab-pane fade">
						<form action="{{route('review',$product->id)}}" method="POST">
							@csrf
							<div class="product-add-review">
								<h4 class="title">Write your own review</h4>
								<div class="review-table">
									<div class="table-responsive">
										<table class="table">
											<thead>
												<tr>
													<th class="cell-label">&nbsp;</th>
													<th>1 star</th>
													<th>2 stars</th>
													<th>3 stars</th>
													<th>4 stars</th>
													<th>5 stars</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="cell-label">Review</td>
														<td><input type="radio" name="quality" class="radio" value="1"></td>
														<td><input type="radio" name="quality" class="radio" value="2"></td>
														<td><input type="radio" name="quality" class="radio" value="3"></td>
														<td><input type="radio" name="quality" class="radio" value="4"></td>
														<td><input type="radio" name="quality" class="radio" value="5"></td>
												</tr>
												<tr>
													@error('quality')
														<span class="text-danger">{{$message}}</span>
													@enderror
												</tr>

											</tbody>
										</table><!-- /.table .table - bordered -->
									</div><!-- /.table-responsive -->
								</div><!-- /.review-table -->

								<div class="review-form">
									<div class="form-container">


											<div class="row">
												<div class="col-sm-3">
													</div>

												<div class="col-sm-6">
													<div class="form-group">
														<label for="exampleInputName">Your Name <span class="astk">*</span></label>
														<input type="text" name="name" class="form-control txt" id="exampleInputName" placeholder="">
													</div><!-- /.form-group -->

													@error('name')
														<span class="text-danger">{{$message}}</span>
													@enderror		<div class="form-group">


														<label for="exampleInputReview">Review <span class="astk">*</span></label>
														<textarea class="form-control txt txt-review" name="review" id="exampleInputReview" rows="4"></textarea>
													</div><!-- /.form-group -->
													@error('review')
														<span class="text-danger">{{$message}}</span>
													@enderror

													<div class="action text-right">
														<button class="btn btn-primary btn-upper">SUBMIT REVIEW</button>
													</div><!-- /.action -->

												</div>


												<div class="col-sm-3">
												</div>


											</div><!-- /.row -->




									</div><!-- /.form-container -->
								</div><!-- /.review-form -->

							</div><!-- /.product-add-review -->
						</form>

						{{-- end befor review --}}
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- electronic_details - end
	================================================== -->


	<!-- product_section - start
	================================================== -->
	<section class="product_section sec_ptb_100 clearfix">
		<div class="container maxw_1600">
			<div class="electronic_related_products position-relative">
				<h2 class="title_text mb_30">Related Products</h2>
				<div class="slideshow5_slider row" data-slick='{"dots": false}'>

		@foreach ($relatedProduct as $relatedProduct_re )
					<div class="item col">
						<div class="electronic_product_item">

							<ul class="product_label ul_li clearfix">
                                @php
                                $amount = $relatedProduct_re->selling_price - $relatedProduct_re->discount_price;
                                $discount = ($amount/$relatedProduct_re->selling_price) * 100;
                            @endphp
                                @if($relatedProduct_re->discount_price == NULL)
                                <li>Not Discount</li>
                                @else
                                <li>{{ round($discount) }} %</li>
                                @endif
							</ul>
								<div class="item_image carparts_product_grid" data-bg-color="#f0eeee" >
									<ul class="product_action_btns ul_li_center clearfix">
										<li><a class="tooltips" data-placement="top" title="Add To Wishlist" onclick="addToWishList({{$relatedProduct_re->id}})" href="#!"><i class="fal fa-heart"></i></a></li>
										<li><a class="tooltips" data-placement="top" title="Add To Cart" onclick="productView({{$relatedProduct_re->id}})" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-shopping-basket"></i></a></li>
										<li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
									</ul>
								<a href="{{ url('product/detail/'.  $relatedProduct_re->id) }}">
								<img src="{{ asset($relatedProduct_re->product_thambnail) }}"  alt="image_not_found">

							</div>
							<div class="item_content">
								{{-- <span class="item_name">Speakers</span> --}}
								<h3 class="item_title">
									<a href="{{ url('product/detail/'.  $relatedProduct_re->id  ) }}">{{ $relatedProduct_re->product_name }}</a>
								</h3>

								@if($relatedProduct_re->discount_price == NULL)
								<span class="item_price">{{ $relatedProduct_re->selling_price }}<span>&#2547;</span></span>
								@else
								<span class="item_price">{{ $relatedProduct_re->discount_price }}<span>&#2547;</span></span>
								<span class="item_price"> <del>{{ $relatedProduct_re->selling_price }}<span>&#2547;</span></del></span>
								@endif
							</div>
						</div>
					</div>
                @endforeach

				</div>
				<div class="carousel_nav">
					<button type="button" class="left_arrow5"><i class="fal fa-angle-left"></i></button>
					<button type="button" class="right_arrow5"><i class="fal fa-angle-right"></i></button>
				</div>
			</div>
		</div>
	</section>
	<!-- product_section - end
	================================================== -->


</main>

<script>
</script>
@endsection
