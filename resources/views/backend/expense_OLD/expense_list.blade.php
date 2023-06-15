@extends('admin.admin_master')
@section('admin')

<div class="container-full">
    <section class="content">
   <div class="row">
       <div class="col-md-12">

          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Expense LIST</h3> <br><br>

                 <td> <a href="{{route('report.expense')}}"><button type="button"  class="btn btn-success">Today Expense Report</button></a></td>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>

                           <th>Date</th>
                           <th>EXpense Type</th>
                           <th>Amount</th>
                           <th>Expense Payement Type</th>
                           <th>Description</th>
                           {{-- <th>View Document</th> --}}


                        </tr>
                    </thead>
                    <tbody>

                       @foreach ($expens as $exp)


                       <tr>

                          <td>{{$exp->expense_date }}</td>
                          <td>{{$exp->expense_type_name->expense_type}}</td>
                          <td>{{$exp->expense_amount }}</td>
                          <td>{{$exp->expense_payment_type}}</td>
                          <td>{{ $exp->description }}</td>
                          {{-- <td><button type="button" class="btn btn-success">View</button></td> --}}



                       </tr>
                       @endforeach
                    </tbody>
                  </table>
                  </div> <!-- table res.. end -->
                </div>  <!-- box body end -->
             </div>      <!-- box end -->
        </div> <!-- col end -->
   </div> <!--  row end-->
   </section> <!--  content end-->
   </div> <!--  row end-->
@endsection
