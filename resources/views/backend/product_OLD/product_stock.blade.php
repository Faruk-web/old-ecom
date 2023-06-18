@extends('admin.admin_master')
@section('admin')


  <!-- Content Wrapper. Contains page content -->

	  <div class="container-full">
		<!-- Content Header (Page header) -->


		<!-- Main content -->
		<section class="content">
		  <div class="row">



			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Product Stock List <span class="badge badge-pill badge-danger"> {{ count($products) }} </span></h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Product Image </th>
								<th>Product Name</th>
								<th>Product Price </th>
								<th>Product Quantity </th>
								<th>Total Money </th>
								<th>Product Discount </th>
								<th>Product Status </th>


							</tr>
						</thead>
						<tbody>
	 @foreach($products as $item)
	@if ($item->product_qty<1)
	
	 <tr style="background-color: rgba(255, 0, 0, 0.5);color:whitesmoke" >
	@else
		
	
	<tr>
	@endif
		 <td> <img src="{{ asset($item->product_thambnail) }}" style="width: 60px; height: 50px;">  </td>
		 <td>{{ $item->product_name }}</td>
		 <td>{{ $item->selling_price }} $</td>
		 <td>{{ $item->product_qty }} Pic</td>
		 <td>{{ $item->product_qty * $item->selling_price}} taka</td>
		 
		 <td> 
			 @if($item->discount_price == NULL)
		 	<span class="badge badge-pill badge-danger">No Discount</span>
			 
		 	@else
		 	@php
		 	$amount = $item->selling_price - $item->discount_price;
		 	$discount = ($amount/$item->selling_price) * 100;
		 	@endphp
   <span class="badge badge-pill badge-danger">{{ round($discount)  }} %</span>
   
   @endif
   
   
   
</td>

<td>
	@if($item->status == 1)
	<span class="badge badge-pill badge-success"> Active </span>
	@else
	<span class="badge badge-pill badge-danger"> InActive </span>
	@endif
	
</td>




</tr>
	
@endforeach
</tbody>

					  </table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->


			</div>
			<!-- /.col -->





		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->

	  </div>




@endsection 