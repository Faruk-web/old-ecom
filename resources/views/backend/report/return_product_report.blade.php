@extends('admin.admin_master')
@section('admin')

	  <div class="container-full">

		<!-- Main content -->
		<section class="content">
		  <div class="row">

<!--   ------------ Add Search Page -------- -->

          <div class="col-4">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Search By Date </h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">

                        <form method="post" action="{{ route('return-report') }}">
                            @csrf

                            <div class="form-group">
                                <h5>Select Date <span class="text-danger">*</span></h5>
                                <div class="controls">
                            <input type="date" name="date" class="form-control" >
                            @error('date')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                            </div>

			            <div class="text-xs-right">
                    	<input type="submit" class="btn btn-rounded btn-primary mb-5" value="Search">
						</div>
					</form>


					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>


                <div class="col-4">
                    <div class="box">
                        <div class="box-header with-border">
                        <h3 class="box-title">Search By Month </h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">

                                <form method="post" action="{{ route('return-report') }}">
                                    @csrf

                    <div class="form-group">
                        <h5>Select Month  <span class="text-danger">*</span></h5>
                        <div class="controls">

                        <select name="month" class="form-control">
                            <option label="Choose One"></option>
                            <option value="1">January</option>
                            <option value="2">February</option>
                            <option value="3">March</option>
                            <option value="4">April</option>
                            <option value="5">May</option>
                            <option value="6">Jun</option>
                            <option value="7">July</option>
                            <option value="8">August</option>
                            <option value="9">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>

                        </select>


                    </div>
                    </div>


                <div class="form-group">
                        <h5>Select Year  <span class="text-danger">*</span></h5>
                        <div class="controls">

                        <select name="year_name" class="form-control">
                            <option label="Choose One"></option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                            <option value="2026">2026</option>
                            <option value="2026">2027</option>
                            <option value="2026">2028</option>
                            <option value="2026">2029</option>
                            <option value="2026">2030</option>
                        </select>

                    @error('month')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                    </div>

			 <div class="text-xs-right">
              	<input type="submit" class="btn btn-rounded btn-primary mb-5" value="Search">
						</div>
					</form>


					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>

			   <div class="col-4">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Select Year </h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">




                        <form method="post" action="{{ route('return-report') }}" >

                            @csrf

                        <div class="form-group">
                                <h5>Select Year  <span class="text-danger">*</span></h5>
                                <div class="controls">

                                <select name="year" class="form-control">
                                    <option label="Choose One"></option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                    <option value="2026">2027</option>
                                    <option value="2026">2028</option>
                                    <option value="2026">2029</option>
                                    <option value="2026">2030</option>
                                </select>

                            @error('year')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                            </div>

		            	 <div class="text-xs-right">

	                     <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Search">

						</div>
					</form>





					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>
   <!--   ------------End  Add Search Page -------- -->
		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  </div>
@endsection
