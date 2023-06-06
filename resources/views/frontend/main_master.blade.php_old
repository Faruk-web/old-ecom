<!DOCTYPE html>
<html lang="en">

	<head>



		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">

        <meta name="csrf-token" content="{{ csrf_token() }}">

		<title>
            Electronic - Neoncart HTML5 Template</title>

            <link rel="shortcut icon" href="{{ asset('frontend/assets/images/forweb_class2.png')}}">
		<!-- fraimwork - css include -->
		<link rel="stylesheet" type="text/css" href=" {{asset('frontend/assets/css/bootstrap.min.css ') }} ">
		<link rel="stylesheet" type="text/css" href=" {{asset('frontend/assets/css/flipdown.css ') }} ">

		<!-- icon - css include -->
		<link rel="stylesheet" type="text/css" href=" {{asset('frontend/assets/css/fontawesome.css ') }} ">

        {{-- fancybox effect --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" integrity="sha512-nNlU0WK2QfKsuEmdcTwkeh+lhGs6uyOxuUs+n+0oXSYDok5qy0EI0lt01ZynHq6+p/tbgpZ7P+yUb+r71wqdXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

		<!-- nice select - css include -->
		<link rel="stylesheet" type="text/css" href=" {{asset('frontend/assets/css/nice-select.css ') }} ">

		<!-- carousel - css include -->
		<link rel="stylesheet" type="text/css" href=" {{asset('frontend/assets/css/slick.css ') }} ">
		<link rel="stylesheet" type="text/css" href=" {{asset('frontend/assets/css/slick-theme.css ') }} ">

		<!-- popup images & videos - css include -->
		<link rel="stylesheet" type="text/css" href=" {{asset('frontend/assets/css/magnific-popup.css ') }} ">

		<!-- jquery ui - css include -->

		<link rel="stylesheet" type="text/css" href=" {{asset('frontend/assets/css/jquery-ui.css') }} ">

		<!-- custom - css include -->
		<link rel="stylesheet" type="text/css" href=" {{asset('frontend/assets/css/style.css ') }} ">

        <!-- custom - toastr include -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

<style>
    .nice-select{
        display: block !important;
    }
</style>
	</head>


	<body class="home_electronic">


		<!-- backtotop - start -->
		<div id="thetop"></div>
		<div class="backtotop bg_electronic_blue">
			<a href="#" class="scroll">
				<i class="far fa-arrow-up"></i>
			</a>
		</div>
		<!-- backtotop - end -->

		<!-- preloader - start -->
		<!-- <div id="preloader"></div> -->
		<!-- preloader - end -->


		<!-- header_section - start
		================================================== -->
	  @include('frontend.body.header')
		<!-- header_section - end
		================================================== -->


		<!-- main body - start
		================================================== -->
		<main class="pt_top_250">


		@yield('index')


        @include('frontend.common.quick_view')

		</main>
		<!-- main body - end
		================================================== -->


		<!-- footer_section - start
		================================================== -->
   	     @include('frontend.body.footer')
		<!-- footer_section - end
		================================================== -->


		<!-- fraimwork - jquery include -->
		<script src="{{ asset('frontend/assets/js/jquery-3.5.1.min.js')}} "></script>
		<script src="{{ asset('frontend/assets/js/popper.min.js ') }} " ></script>
		<script src="{{ asset('frontend/assets/js/bootstrap.min.js ')}} "  ></script>


		<!-- mobile menu - jquery include -->
		<script src="{{ asset('frontend/assets/js/mCustomScrollbar.js ')}} "  ></script>

		<!-- animation - jquery include -->
		<script src="{{ asset('frontend/assets/js/parallaxie.js ')}} "  ></script>
		<script src="{{ asset('frontend/assets/js/wow.min.js ')}} "  ></script>

		<!-- nice select - jquery include -->
		<script src="{{ asset('frontend/assets/js/nice-select.min.js ')}} "  ></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk2HrmqE4sWSei0XdKGbOMOHN3Mm2Bf-M&ver=2.1.6"></script>
        <script src="{{asset('frontend/assets/js/gmaps.min.js')}}"></script>

		<!-- carousel - jquery include -->
		<script src="{{ asset('frontend/assets/js/slick.min.js ')}} "  ></script>

		<!-- countdown timer - jquery include -->
		{{-- <script src="{{ asset('frontend/assets/js/countdown.js ')}} "  ></script>
		<script src="http://cdn.rawgit.com/hilios/jQuery.countdown/2.0.4/dist/jquery.countdown.min.js"></script> --}}

		<!-- popup images & videos - jquery include -->
		<script src="{{ asset('frontend/assets/js/magnific-popup.min.js ')}} "  ></script>

		<!-- filtering & masonry layout - jquery include -->
		<script src="{{ asset('frontend/assets/js/isotope.pkgd.min.js ')}} "  ></script>
		<script src="{{ asset('frontend/assets/js/masonry.pkgd.min.js ')}} "  ></script>
		<script src="{{ asset('frontend/assets/js/imagesloaded.pkgd.min.js ')}} "  ></script>

		<!-- jquery ui - jquery include -->
	    <script src="{{ asset('frontend/assets/js/jquery-ui.js ')}} "  ></script>
	    {{-- <script src="{{ asset('js/jquery-3.6.0.js')}} "  ></script> --}}





		<!-- custom - jquery include -->
		<script src="{{ asset('frontend/assets/js/custom.js ')}} "  ></script>

        <!-- toster cdn  -->

	  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	  <script>
		@if(Session::has('message'))
		var type = "{{ Session::get('alert-type', 'info')}}"
		 switch (type) {

			 case 'info':
			 toastr.info(" {{ Session::get('message') }} ");
				 break;

			case 'success':
			toastr.success(" {{ Session::get('message') }} ");
				 break;

			case 'warning':
			toastr.warning(" {{ Session::get('message') }} ");
				 break;

			case 'error':
			toastr.error(" {{ Session::get('message') }} ");


				  break;
				  default:
				break;
		}

		 @endif

		</script>

  {{-- sweet alert note.... --}}

  <script>
	$(function(){
		$(document).on('click','#delete',function(e){
			e.preventDefault();
			var link = $(this).attr("href");
					Swal.fire({
						title: 'Are you sure?',
						text: "Delete This Data?",
						icon: 'warning',
						showCancelButton: false,
						confirmButtonColor: '#3085D6',
						cancelButtonColor: '#d33',
						confirmButtonText: 'Yes, delete it!'
					}).then((result) => {
						if (result.isConfirmed) {
						window.location.href = link
						Swal.fire(
							'Deleted!',
							'Your file has been deleted.',
							'success'
						)
						}
					})
		});
	});// main funcations end
</script>


        <!-- product quick view - start -->
        @include('frontend.common.product_quick_view')
		{{-- <script src="{{ asset('frontend/assets/js/flipdown.js ')}} "  ></script>
		<script src="{{ asset('frontend/assets/js/flipdown_main.js ')}} "  ></script> --}}
        <!-- product quick view - end -->


        {{-- ajax  --}}
{{-- main problems is id in [is worng celo] --}}
<script type="text/javascript">
    $.ajaxSetup({
       headers:{
          'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
    }
 })

 // product view model function
 function productView(id){
    // alert(id)
    $.ajax({
       // problem is not use , in get
       type: 'GET',
       url: '/product/view/modal/'+id,
       dataType:'json',
       success:function(data){
          // console.log(data)

          $('#pname').text(data.product.product_name);

          $('#price').text(data.product.selling_price);
          $('#pcode').text(data.product.product_code);

          $('#pcategory').text(data.product.category.category_name);
          $('#pbrand').text(data.product.brand.brand_name_cats_eye);
          $('#pstock').text(data.product.product_qty);
          // img
          $('#pimg').attr('src','/'+data.product.product_thambnail);

          // product id for add to
          $('#product_id').val(id);

          // Qty
          $('#qty').val(1);


          // Product Price
          if (data.product.discount_price == null) {

             /// for discount price is null then only show selling price
             $('#price').text('');
             $('#oldprice').text('');

             $('#price').text(data.product.selling_price);

          }else{
             $('#price').text(data.product.discount_price);
             $('#oldprice').text(data.product.selling_price);
          }

          // in stock product
          if (data.product.product_qty > 0 ) {

             $('#aviable').text('');
             $('#stockout').text('');

             $('#aviable').text('Available');

          }else{

             $('#aviable').text('');
             $('#stockout').text('');

             $('#stockout').text('Stockout');
          }



          // load product color

          $('select[name="color"]').empty().attr('style','display:block !important');
          $('.nice-select').attr('style','display:none !important');
          $.each(data.color,function(key, value){
             $('select[name="color"]').append('<option value="'+value+'"> '+value+' </option>');
          });


              // load product size
              $('select[name="size"]').empty().attr('style','display:block !important');
          $.each(data.size,function(key, value){
             $('select[name="size"]').append('<option value=" '+value+' " > '+value+' </option>')

             // product size =null then hide is option

             if(data.size == ""){
                $('#sizeArea').hide();

             }else{
                $('#sizeArea').show();
             }


          })

      }

    })




 } // end function




 //   start add to cart product function

  function addToCart(){
    var product_name = $('#pname').text();
    var id = $('#product_id').val();
    var color = $('#color option:selected').text();
    var size = $('#size option:selected').text();
    var quantity = $('#qty').val();

    // add to cart post
    $.ajax({
       type: "POST",
       dataType: 'json',
       data:{
          color:color, size:size, quantity:quantity, product_name:product_name
       },
       url: "/cart/data/store/"+id,
       success:function(data){
          // for auto update
          miniCart();

          // for cart auto close
          $('#closeModel').click();

          // for test data
          // console.log(data)

          //start message
          const Toast = Swal.mixin({
             toast:true,
             position: 'top-end',
             icon: 'success',
             showConfirmButton: false,
             timer: 3000,

             })
             if ($.isEmptyObject(data.error)) {
                Toast.fire({
                   type: 'success',
                   title: data.success
                })
             }else{
                Toast.fire({
                   type: 'error',
                   title: data.error
                })
             }

          // end message

       } // fun end
    })

  } // end function


 //   End add to cart product function

 </script>





<script type="text/javascript">

function miniCart(){
$.ajax({
  type: 'GET',
  url: '/product/mini/cart',
  dataType:'json',
  success:function(response){
     console.log(response.cartTotal,'from minicart');
     var miniCart = ""
    $('span[id="cartSubTotal"]').text(response.cartTotal);
    $('#cartQty').text(response.cartQty);

    $.each(response.carts, function(key,value){
       miniCart +=`<li>
            <div class="item_image">
                <img src="/${value.options.image}" alt="">
            </div>
            <div class="item_content">
                <h4 class="item_title">${value.name}</h4>
                <span class="item_price">${value.price} $ *  Qty: ${value.qty}</span>
            </div>
            <button type="submit" id="${value.rowId}" onclick="miniCartRemove(this.id)" class="remove_btn"><i class="fal fa-trash-alt"></i></button>
        </li>`

    });

    $('#miniCart').html(miniCart);

    }
})
}

miniCart();

    /// mini cart remove Start
    function miniCartRemove(rowId){
          $.ajax({
                type: 'GET',
                url: '/minicart/product-remove/'+rowId,
                dataType:'json',
                success:function(data){
                miniCart();
                console.log(data,'from minicartremove');

                // Start Message
                   const Toast = Swal.mixin({
                         toast: true,
                         position: 'top-end',
                         icon: 'success',
                         showConfirmButton: false,
                         timer: 3000
                      })
                   if ($.isEmptyObject(data.error)) {
                      Toast.fire({
                            type: 'success',
                            title: data.success
                      })
                   }else{
                      Toast.fire({
                            type: 'error',
                            title: data.error
                      })
                   }
                   // End Message

                }
          });
       }
    //  end mini cart remove
    </script>



 <!--  /// Start Add Wishlist Page  //// -->
 <script type="text/javascript">

 function addToWishList(product_id){

    $.ajax({
        type: "GET",
        dataType: 'json',
        url: "/add-to-wishlist/"+product_id,


       success:function(data){


            // Start Message
        const Toast = Swal.mixin({
              toast: true,
              position: 'top-end',

              showConfirmButton: false,
              timer: 3000
            })
        if ($.isEmptyObject(data.error)) {
            Toast.fire({
                type: 'success',
                icon: 'success',
                title: data.success
            })
        }else{
            Toast.fire({
                type: 'error',
                icon: 'error',
                title: data.error
            })
        }
        // End Message


       }
    })
 }
 </script>
 <!--  /// End Add Wishlist Page  ////   -->


<!--  ///  Wishlist Function start  ////   -->
       <script type="text/javascript">
          function wishlist(){
             $.ajax({
                   type: 'GET',
                   url: '/user/get-wishlist-product',
                   success:function(response){
                      var rows = ""
                      $('#wishlistToShow').html('');
                      $.each(response, function(key,value){

                         rows =

                        `<tr>
                            <td>
                                <div class="cart_product">
                                    <div class="item_image">
                                        <img src="/${value.product.product_thambnail}">
                                    </div>
                                    <div class="item_content">
                                        <h4 class="item_title">${value.product.product_name}</h4>
                                    </div>
                                    <button type="submit" class="remove_btn" id="${value.id}" onclick="wishlistRemove(${this.id})"><i class="fal fa-times"></i></button>
                                </div>
                            </td>
                            <td>
                                <span class="price_text">${value.product.selling_price}</span>
                            </td>
                            <td>
                                <span class="total_price">${value.product.discount_price}</span>
                            </td>
                            <td>
                                <button type="submit" name="submit" id="${value.product_id}" title="Add To Cart" onclick="productView(this.id)" class="btn btn-primary" data-toggle="modal" data-target="#quickview_modal">Add to Cart</button>
                            </td>
                        </tr>`;
                        $('#wishlistToShow').append(rows);

                        });


                   }
             })
          }
          wishlist();


      ///  Wishlist remove Start
       function wishlistRemove(id){
          $.ajax({
                type: 'GET',
                url: '/user/wishlist-remove/'+id,
                dataType:'json',
                success:function(data){
                wishlist();
                // Start Message
                   const Toast = Swal.mixin({
                         toast: true,
                         position: 'top-end',

                         showConfirmButton: false,
                         timer: 3000
                      })
                   if ($.isEmptyObject(data.error)) {
                      Toast.fire({
                            type: 'success',
                            icon: 'success',
                            title: data.success
                      })
                   }else{
                      Toast.fire({
                            type: 'error',
                            icon: 'error',
                            title: data.error
                      })
                   }
                   // End Message
                }
          });
       }
    // End Wishlist remove

       </script>
<!--  ///  Wishlist Function End  ////   -->


<!--  ///  My Cat Function start  ////   -->
<script type="text/javascript">
    function cart(){
       $.ajax({
             type: 'GET',
             url: '/user/get-cart-product',
             dataType:'json',
             success:function(response){
                var rows = ""
                // use carts auto load
                $.each(response.carts, function(key,value){
                   rows += `<tr>
                   <td class="col-md-2"><img src="/${value.options.image} " alt="imga" style="width:60px; height:60px;"></td>

                   <td class="col-md-7">
                         <div class="product-name"><a href="#">${value.name}</a></div>

                         <div class="price">
                            ${value.price}
                         </div>
                       </td>


                   <td class="col-md-2">
                   <strong>${value.options.color} </strong>
                   </td>

                   <td class="col-md-2">
                ${value.options.size == null
                   ? `<span> .... </span>`
                   :
                `<strong>${value.options.size} </strong>`
                }
                   </td>

                   <td class="col-md-2">


                      ${value.qty > 1
       ? `<button type="submit" class="btn btn-danger btn-large" id="${value.rowId}" onclick="cartDecrement(this.id)" >-</button> `
       : `<button type="submit" class="btn btn-danger btn-large" disabled >-</button>`
       }<br>

   <input type="text" value="${value.qty}" min="1" max="5000" disabled="" style="width:35px;" class="text-center"><br>

   <button type="submit" class="btn btn-success btn-large"  id="${value.rowId}" onclick="cartIncrement(this.id)">+</button>

       </td>

       <td class="col-md-2">
       <strong>$${value.subtotal} </strong>
       </td>


       <td class="col-md-1 close-btn">

          <button type="submit" class="" id="${value.rowId}" onclick="cartRemove(this.id)"><i class="fa fa-times"></i></button>
       </td>
                </tr>`
       });

                $('#cartPage').html(rows);
             }
       })
    }

    cart(); // end function




   ///  my cart remove Start
   function cartRemove(id){
    $.ajax({
          type: 'GET',
          url: '/user/cart-remove/'+id,
          dataType:'json',
          success:function(data){
             couponCalculation();
             cart();
             miniCart()

             $('#couponField').show();
             $('#coupon_name').val('');

          // Start Message
             const Toast = Swal.mixin({
                   toast: true,
                   position: 'top-end',

                   showConfirmButton: false,
                   timer: 3000
                })
             if ($.isEmptyObject(data.error)) {
                Toast.fire({
                      type: 'success',
                      icon: 'success',
                      title: data.success
                })
             }else{
                Toast.fire({
                      type: 'error',
                      icon: 'error',
                      title: data.error
                })
             }
             // End Message
          }
    });
   }
   // End my cart remove


       // -------- CART INCREMENT --------//
    function cartIncrement(rowId){
       $.ajax({
             type:'GET',
             url: "/cart-increment/"+rowId,
             dataType:'json',
             success:function(data){

                //coupon update price auto
                couponCalculation();

                cart();
                miniCart();
             }
       });
    }
   // ---------- END CART INCREMENT -----///


   // -------- CART Decrement  --------//
   function cartDecrement(rowId){
       $.ajax({
             type:'GET',
             url: "/cart-decrement/"+rowId,
             dataType:'json',
             success:function(data){

                // auto coupon update price
                couponCalculation();
                cart();
                miniCart();
             }
       });
    }
   // ---------- END CART Decrement -----///
   </script>
   <!-- my cart function End -->





<!--=============================== Apply Coupon======================= -->
<script>

    function applyCoupon(){
       var coupon_name = $('#coupon_name').val();
       $.ajax({
          type: 'POST',
          dataType: 'json',
          data: {coupon_name:coupon_name},
          url: "{{ url('/coupon-apply') }}",
          success:function(data){

             couponCalculation();
               // coupon remove then auto page hide
               if (data.validity == true) {
        $('#couponField').hide();
       }


             // Start Message
                const Toast = Swal.mixin({
                      toast: true,
                      position: 'top-end',

                      showConfirmButton: false,
                      timer: 3000
                            })
                         if ($.isEmptyObject(data.error)) {
                            Toast.fire({
                                  type: 'success',
                                  icon: 'success',
                                  title: data.success
                            })
                         }else{
                            Toast.fire({
                                  type: 'error',
                                  icon: 'error',
                                  title: data.error
                            })
                         }
                         // End Message
                   }
                })
             }


       //Coupon Calculation

        function couponCalculation(){
          $.ajax({
             type: 'GET',
             url: "{{ url('/coupon-calculation') }}",
             dataType: 'json',
             success:function(data){

                if (data.total) {
                   $('#couponClaFiled').html(
                ` <li><span>Subtotal</span> <span>$ ${data.total}</span></li>
                <li><span>Total</span> <span>$ ${data.total}</span></li>`
              )

                }else{

                   $('#couponClaFiled').html(
                      `	<tr>
                    <th>
                        <div class="cart-sub-total">
                            Subtotal<span class="inner-left-md">$ ${data.subtotal}</span>
                        </div>

                <div class="cart-sub-total">
                            Coupon Name<span class="inner-left-md"> ${data.coupon_name}</span>
                   <button type="submit" onclick="couponRemove()" ><i class="fa fa-times"></i></button>
                        </div>

                <div class="cart-sub-total">
                            Discount Amount <span class="inner-left-md">$ ${data.discount_amount}</span>
                        </div>


                        <div class="cart-grand-total">
                            Grand Total<span class="inner-left-md">$ ${data.total_amount}</span>
                        </div>
                    </th>
                </tr>`
                )

                }


             }
          });
       }
   couponCalculation();
</script>
<!--=============================== End Apply Coupon======================= -->


<!--  =========== Start- Coupon Remove================= -->
<script type="text/javascript">

    function couponRemove(){
       $.ajax({
          type:'GET',
          url: "{{ url('/coupon-remove') }}",
          dataType: 'json',
          success:function(data){
             // coupon calcution load
             couponCalculation();

               // coupon remove then auto page load
             $('#couponField').show();

             // old coupon code remove auto
              $('#coupon_name').val('');


                // Start Message
             const Toast = Swal.mixin({
                   toast: true,
                   position: 'top-end',

                   showConfirmButton: false,
                   timer: 3000
                   })
             if ($.isEmptyObject(data.error)) {
                   Toast.fire({
                      type: 'success',
                      icon: 'success',
                      title: data.success
                   })
             }else{
                   Toast.fire({
                      type: 'error',
                      icon: 'error',
                      title: data.error
                   })
             }
             // End Message
          }
       });
    }
</script>
<!-- =========== End Coupon Remove================= -->








{{-- sms alert --}}


<!-- toster cdn  -->
<script  src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
@if(Session::has('message'))
var type = "{{ Session::get('alert-type', 'info')}}"
switch (type) {

case 'info':
toastr.info(" {{ Session::get('message') }} ");
   break;

case 'success':
toastr.success(" {{ Session::get('message') }} ");
   break;

case 'warning':
toastr.warning(" {{ Session::get('message') }} ");
   break;

case 'error':
toastr.error(" {{ Session::get('message') }} ");


    break;
    default:
  break;
}

@endif

</script>


{{-- sweet alert note.... --}}

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>

$(function(){
$(document).on('click', '#delete', function(e)
{
  e.preventDefault();
  var link = $(this).attr("href");

  Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
  }).then((result) => {
  if (result.isConfirmed) {
     Swal.fire(
     'Deleted!',
     'Your file has been deleted.',
     'success'
     )
  }
  })

}); // document end

}); // main funcations end
</script>


<script>


$('.minus').click(function(){
if ($('#quantity').val() != 0)
$('#quantity' ).val(parseInt($('#quantity').val()) - 1);
});

$('.plus').click(function(){
$('#quantity').val(parseInt($('#quantity').val()) + 1);
});
</script>


{{-- select discrict and state --}}
<script type="text/javascript">
   $(document).ready(function() {
     $('select[name="division_id"]').on('change', function(){
         var division_id = $(this).val();
         $c= $('select[id="state_id"]').empty();
         $d = $('select[name="district_id"]').empty();

         if(division_id) {
             $.ajax({
                 url: "{{  url('/district-get/ajax') }}/"+division_id,
                 type:"GET",
                 dataType:"json",
                 success:function(data) {
                  $c= $('select[name="state_id"]').empty();
                   $d = $('select[name="district_id"]').empty();


                   console.log(data);
                   document.querySelector('#option_district_id .nice-select ul.list').innerHTML="";
                   let nice_select = $('select[name="district_id"] .nice-select')
                   let spanCurrent   = document.querySelector('#option_district_id .nice-select span.current');
                   let list          = document.querySelector('#option_district_id .nice-select ul.list');
                   spanCurrent.innerHTML = data[0].district_name;
                   $.each(data, function(key, value){
                       let liItem  = document.createElement('li');
                       liItem.setAttribute('data-value',value.id);
                       liItem.classList.add('option');
                       liItem.innerHTML=value.district_name;
                       list.append(liItem);
                       $('select[name="district_id"]').append('<option value="'+ value.id +'">' + value.district_name + '</option>');
                   });
                 },
             });
         } else {
             alert('danger');
         }
     });
     $('select[name="district_id"]').on('change', function(){
           var district_id = $(this).val();
           $c= $('select[name="state_id"]').empty();
                   $d = $('select[name="district_id"]').empty();
           if(district_id) {
               $.ajax({
                   url: "{{  url('/state-get/ajax') }}/"+district_id,
                   type:"GET",
                   dataType:"json",
                   success:function(data) {
                      var d =$('select[name="state_id"]').empty();
                      document.querySelector('#option_state_id .nice-select ul.list').innerHTML="";
                       let nice_select = $('select[name="district_id"] .nice-select')
                       let spanCurrent   = document.querySelector('#option_state_id .nice-select span.current');
                       let list          = document.querySelector('#option_state_id .nice-select ul.list');
                       spanCurrent.innerHTML = data[0].state_name;
                         $.each(data, function(key, value){
                           let liItem  = document.createElement('li');
                           liItem.setAttribute('data-value',value.id);
                           liItem.classList.add('option');
                           liItem.innerHTML=value.state_name;
                           list.append(liItem);
                             $('select[name="state_id"]').append('<option value="'+ value.id +'">' + value.state_name + '</option>');
                         });
                   },
               });
           } else {
               alert('danger');
           }
       });
 });
</script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>







	<script>
		$('#sub').on('click',function()
		{
			console.log($('#amount').val());

			$price = $str_arr = $('#amount').val().split('-');
			console.log($price);

			$low_priceTemp = $price[0].replace(/^\D+/g,'');
			$low_price = parseInt($low_priceTemp);

			$high_priceTemp = $price[1].replace(/^\D+/g,'');
			$high_price = parseInt($high_priceTemp);

			console.log($low_price);
			console.log($high_price);

			$prices = $('[id="price"]');
			$product = $('[id="product"]');


			$.each($prices, function( index, value ) {
				$p_price=$prices.eq(index).text();
				if($p_price<$low_price||$p_price>$high_price)
				{
					$product.eq(index).hide();
				}
				else{
					$product.eq(index).show();
				}
			});





		});



	</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>




    <script type="text/javascript">
      $(document).ready(function() {
        $('select[name="cdivision_id"]').on('change', function(){
            var division_id = $(this).val();
            $c= $('select[id="cstate_id"]').empty();
            $d = $('select[name="cdistrict_id"]').empty();

            if(division_id) {
                $.ajax({
                    url: "{{  url('/district-get/ajax') }}/"+division_id,
                    type:"GET",
                    dataType:"json",
                    success:function(data) {
                     $c= $('select[name="cstate_id"]').empty();
                      $d = $('select[name="cdistrict_id"]').empty();


                      console.log(data);
                      document.querySelector('#option_district_id .nice-select ul').innerHTML="";
                      document.querySelector('#option_state_id .nice-select ul.list').innerHTML="";
                      let sspanCurrent   = document.querySelector('#option_state_id .nice-select span.current').innerHTML = '';

                      let nice_select = $('select[name="cdistrict_id"] .nice-select')
                      let spanCurrent   = document.querySelector('#option_district_id .nice-select span.current');
                      let list          = document.querySelector('#option_district_id .nice-select ul.list');
                      spanCurrent.innerHTML = data[0].district_name;

                      $.each(data, function(key, value){
                          let liItem  = document.createElement('li');
                          liItem.setAttribute('data-value',value.id);
                          liItem.classList.add('option');
                          liItem.innerHTML=value.district_name;
                          list.append(liItem);
                          $('select[name="cdistrict_id"]').append('<option value="'+ value.id +'">' + value.district_name + '</option>');
                      });
                    },
                });
            } else {
                alert('danger');
            }
        });
        $('select[name="cdistrict_id"]').on('change', function(){
              var district_id = $(this).val();
              $c= $('select[name="cstate_id"]').empty();

              if(district_id) {
                  $.ajax({
                      url: "{{  url('/state-get/ajax') }}/"+district_id,
                      type:"GET",
                      dataType:"json",
                      success:function(data) {
                         var d =$('select[name="cstate_id"]').empty();
                         document.querySelector('#option_state_id .nice-select ul.list').innerHTML="";
                          let nice_select = $('select[name="cdistrict_id"] .nice-select')
                          let spanCurrent   = document.querySelector('#option_state_id .nice-select span.current');
                          let list          = document.querySelector('#option_state_id .nice-select ul.list');
                          spanCurrent.innerHTML = data[0].state_name;
                            $.each(data, function(key, value){
                              let liItem  = document.createElement('li');
                              liItem.setAttribute('data-value',value.id);
                              liItem.classList.add('option');
                              liItem.innerHTML=value.state_name;
                              list.append(liItem);
                                $('select[name="cstate_id"]').append('<option value="'+ value.id +'">' + value.state_name + '</option>');
                            });
                      },
                  });
              } else {
                  alert('danger');
              }
          });
    });
   </script>
   @stack('js')

















	</body>

</html>
