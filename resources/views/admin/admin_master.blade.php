
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/favicon.ico">

    <title> {{ config('app.name') }}</title>

	<!-- Vendors Style-->
	<link rel="stylesheet" href=" {{ asset('backend/css/vendors_css.css') }} ">

	<!-- Style-->
	<link rel="stylesheet" href=" {{ asset('backend/css/style.css') }} ">
	<link rel="stylesheet" href=" {{ asset('backend/css/skin_color.css') }} ">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

    <!---- Start  Fontawosome --->
    <link rel="stylesheet" href="{{ asset('backend/assets/icons/font-awesome/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/icons/font-awesome/css/font-awesome.css') }}" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
 <!---- for  graph --->

 <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
  </head>

<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">

<div class="wrapper">

  {{-- Admin Header --}}

  @include('admin.body.admin_header')

  <!-- Left side column. contains the logo and sidebar -->

 @include('admin.body.admin_sidebar')



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    @yield('admin')

  </div>

  <!-- /.content-wrapper -->

    @include('admin.body.admin_footer')

  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->


	<!-- Vendor JS -->
	<script src=" {{ asset('backend/js/vendors.min.js') }} "></script>
    <script src=" {{ asset('../assets/icons/feather-icons/feather.min.js') }} "></script>
	<script src=" {{ asset('../assets/vendor_components/easypiechart/dist/jquery.easypiechart.js') }} "></script>
	<script src=" {{ asset('../assets/vendor_components/apexcharts-bundle/irregular-data-series.js') }} "></script>
	<script src=" {{ asset('../assets/vendor_components/apexcharts-bundle/dist/apexcharts.js') }} "></script>


	{{-- Data Table --}}

	<script src="{{ asset('../assets/vendor_components/datatable/datatables.min.js') }}"></script>
	<script src="{{ asset('backend/js/pages/data-table.js') }}"></script>


	<!-- Sunny Admin App -->
	<script src=" {{ asset('backend/js/template.js') }} "></script>
	<script src=" {{ asset('backend/js/pages/dashboard.js') }} "></script>

    {{-- input tags --}}
	<script src="{{ asset('../assets/vendor_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.js ') }}"></script>

	{{-- for ck edtior --}}
	<script src="{{ asset('../assets/vendor_components/ckeditor/ckeditor.js ') }} "></script>
	<script src="{{ asset('../assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js ') }} "></script>
	<script src="{{ asset('backend/js/pages/editor.js') }}"></script>


	<!-- toster cdn  -->
	  <script  src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
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

  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="{{ asset('backend/js/code.js') }}"></script>




{{-- for salary --}}
<script>
$(function()
{
	$('#pay_salary').hide();
	$('#department').on('change',function(e){
	$('#pay_salary').hide();
	if($('#department').find(":selected").val())
	{
		var value = $('#department').find(":selected").val();

		$.ajax({

			type: 'GET',
			url: "{{ url('/salary/get_employee/') }}"+'/'+value,
			dataType: 'json',
			success: function(data) {
				$('#employee').empty();
				$.each( data, function( key, value )
				{
					var h= "<option value="+value.id+">"+value.employee_name+"</option>";

					$('#employee').append(h);
				});
			},
			error: function (data) {
				console.log('not ok');
				console.log(data);
			}
		});

	}

});

});


</script>

<script>

$("#submitE").on('click',function(e){


	if($('#department').find(":selected").val()&&$('#employee').find(":selected").val()&&$('#date').val())
	{

	    $('#pay_salary').hide();

				var data = $('#findEmployee').serialize();
				e.preventDefault();

				$.ajaxSetup({

				headers: {

					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}

				});


				$.ajax({

				type:'POST',

				url:'{{ route('employee.find') }}',

				data:data,
				dataType: 'json',
				success:function(data){


					if(data[0].id)
					{
						console.log('HAS DATA');
						$('#pay_salary').show();
						$("[id='employee_id']").val(data[0].id);

						console.log(data[0].id);
						$('#id').text(data[1].employee_office_id);
						$('#name').text(data[1].employee_name);
						$('#total').text(data[1].employee_salary);
						$('#paid').text(data[0].paid_salary);
						$('#due').text(data[0].due_salary);
						$('#advance').text(data[0].advance_salary);
						$('#bonus').text(data[0].bonus);
					}
					else
					{
						console.log('NO DATA');
						console.log('empty');
					}
				},
				error:function(error)
				{
					console.log('not ok');
					console.log(error);
				}

				});

	}

});


$('#deals').on('change',function()
{
	if($('#deals').find(":selected").val())
	{
		var value = $('#deals').find(":selected").val();

		$.ajax({

			type: 'GET',
			url: "{{ url('/product/hot_deals/') }}"+'/'+value,
			dataType: 'json',
			success: function(data) {
				console.log(data);
				$("[id='deals']").val(data[0].product_id);
				$('#hot_deal').val(data[0].hot_deals);
				$('#special_offer').val(data[0].hot_deals);
				$('#special_deal').val(data[0].hot_deals);

			},
			error: function (data) {
				console.log('not ok');
				console.log(data);
			}
		});

	}

	// for auto purchase quentity count



});


		$('#product_name').on('change',function()
			{
				$('#product_qty').val('');
				console.log('work');
				if($('#product_name').find(":selected").val())
				{
					var value = $('#product_name').find(":selected").val();
					console.log(value);

					$.ajax({

						type: 'GET',
						url: "{{ url('purchase/qty/') }}"+'/'+value,
						dataType: 'json',
						success: function(data) {



							// $("[id='product_name']").val(data[0].product_id);

							$('#product_qty').val(data[0].product_qty);


						},
						error: function (data) {
							console.log('not ok');
							console.log(data);
						}
					});

				}
		});
</script>

{{-- for purchase add auto due_amount l --}}
@stack('js')


</body>
</html>
