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
                <h3 class="box-title" style="text-align: center">Total  User </h3>
				<div class="box-header with-border">

				  <a href="{{ route('add.admin') }}" class="btn btn-danger" style="float: right;">Add  Admin</a>
                  <a href="{{ route('emp.permision') }}" class="btn btn-success" style="float: left;">Employee Permision</a>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Image  </th>
								<th>Name  </th>
								<th>Email </th>
								<th>Access </th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
	 @foreach($adminuser as $item)
	 <tr>
		<td> <img src="{{ asset($item->profile_photo_path) }}" style="width: 50px; height: 50px;">  </td>
		<td> {{ $item->name }}  </td>
		<td> {{ $item->email  }}  </td>

		<td>
			@if($item->brand == 1)
			<span class="badge btn-primary">Brand</span>
			@else
			@endif

			@if($item->category == 1)
			<span class="badge btn-secondary">Category</span>
			@else
			@endif


			@if($item->product == 1)
			<span class="badge btn-success">Product</span>
			@else
			@endif


			@if($item->slider == 1)
			<span class="badge btn-danger">Slider</span>
			@else
			@endif


			@if($item->cupons == 1)
			<span class="badge btn-warning">Cupons</span>
			@else
			@endif


			@if($item->shipping == 1)
			<span class="badge btn-info">Shipping</span>
			@else
			@endif



			@if($item->setting == 1)
			<span class="badge btn-dark">Setting</span>
			@else
			@endif


			@if($item->returnorder == 1)
			<span class="badge btn-primary">Return Order</span>
			@else
			@endif


			@if($item->review == 1)
			<span class="badge btn-secondary">Review</span>
			@else
			@endif


			@if($item->orders == 1)
			<span class="badge btn-success">Orders</span>
			@else
			@endif

			@if($item->stock == 1)
			<span class="badge btn-danger">Stock</span>
			@else
			@endif

			@if($item->reports == 1)
			<span class="badge btn-warning">Reports</span>
			@else
			@endif

			@if($item->alluser == 1)
			<span class="badge btn-info">Alluser</span>
			@else
			@endif

			@if($item->adminuserrole == 1)
			<span class="badge btn-dark">Adminuserrole</span>
			@else
			@endif


		  </td>


		<td width="25%">
			<a href="{{ route('edit.admin.user',$item->id) }}" class="btn btn-info" title="Edit Data"><i class="fa fa-pencil"></i> </a>


   <a href="{{ route('delete.admin.user',$item->id) }}" class="btn btn-danger" title="Delete" id="#"> Delete </a>

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
