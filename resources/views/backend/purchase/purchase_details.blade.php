

@extends('admin.admin_master')
@section('admin')


<div class="container">
    <!-- Content Header (Page header) -->

    <div class="col-lg-3"></div>
    <div class="col-lg-6"></div>

            <!-- Main content -->
            <section class="content">

            <!-- Basic Forms -->
            <div class="box">
                <div class="box-header with-border">
                <h4 class="box-title">View Purchase </h4>

                </div>
                <!-- /.box-header -->
                <div class="box-body">
                <div class="row">
                    <div class="col">


              <form action="#" method="POST" enctype="multipart/form-data">
                @csrf
               {{-- {{dd($emp)}} --}}

                <div class="row">
                 <div class="col-12">

            <div class="row"> <!-- start 1st row  -->
                <div class="col-md-4">

                    <div class="form-group">
                        <h5>  <b>Supplier Name :</b>{{$purchase->supplier->supplyer_name}}</h5>
                        <div class="controls">
                       </div>
                        </div> 

                </div> <!-- end col md 4 -->


                
                <div class="col-md-4">

                    <div class="form-group">
                        <h5><b> Product Name :</b> {{$purchase->productName->product_name}}</h5>
                        <div class="controls">
                          
                       
                       </div>
                        </div>  

                </div> <!-- end col md 4 -->


                <div class="col-md-4">
                    <div class="form-group">
                        <h5> <b>Product Quantity :</b> {{ $purchase->product_qty}}</h5>
                        <div class="controls">
                       </div>
                        </div>

                </div> <!-- end col md 4 -->

            </div> <!-- end 1st row  -->


            <div class="row"> <!-- start 2st row  -->
                <div class="col-md-4">

                    <div class="form-group">
                        <h5> <b> Total Amount :</b> {{ $purchase->total_amount}}</h5>
                        <div class="controls">
                       </div>
                        </div> 

                </div> <!-- end col md 4 -->


                <div class="col-md-4">

                    <div class="form-group">
                        <h5> <b> Paid Amount :</b> {{ $purchase->paid_amount}}</h5>
                        <div class="controls">
                       </div>
                        </div> 

                </div> <!-- end col md 4 -->


                <div class="col-md-4">
                    <div class="form-group">
                        <h5> <b>Due Amount:</b> {{ $purchase->due_amount}}</h5>
                        <div class="controls">
                       </div>
                        </div>

                </div> <!-- end col md 4 -->

            </div> <!-- end 2st row  -->


            <div class="row"> <!-- start 3st row  -->
                <div class="col-md-4">

                    <div class="form-group">
                        <h5> <b> Purchase Date : </b>{{ $purchase->purchase_date}}</h5>
                        <div class="controls">
                       </div>
                        </div> 

                </div> <!-- end col md 4 -->

                <div class="col-md-4">

                    <div class="form-group">
                        <h5> <b>Purchase Create By :</b> {{ $purchase->purchase_create_by}}</h5>
                        <div class="controls">
                       </div>
                        </div> 

                </div> <!-- end col md 4 -->


                <div class="col-md-4">
                    <div class="form-group">
                        <h5> <b>Purchase Note :</b>{{ $purchase->purchase_note}}</h5>
                        <div class="controls">
                       </div>
                        </div>

                </div> <!-- end col md 4 -->

            </div> <!-- end 3st row  -->

            
           



          <div class="text-xs-right">
            <input type="submit" hidden class="btn btn-rounded btn-primary mb-5" value="Update Employee">
                            </div>
                        </form>

                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

            </section>
            <!-- /.content -->
        </div>

        <div class="col-lg-3"></div>
   

@endsection

 


