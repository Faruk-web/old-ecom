@extends('admin.admin_master')
@section('admin')

	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<!-- Main content -->
		<section class="content">
		  <div class="row">

			<div class="col-12">
			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Profit</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Total Income</th>
								<th>Employee Salary</th>
								<th>Expense Cost</th>
								<th>Return Amount</th>
								<th>Total Profit</th>


							</tr>
						</thead>
						<tbody>
                            <tr>
                                <td>{{$totalincome}} tk  </td>
                                <td> {{$salarypay}} tk </td>
                                <td>{{$expancepay}} tk </td>
                                <td>{{$returnamount}} tk </td>

                                <td> {{ $profit }} tk  </td>





                            </tr>

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
