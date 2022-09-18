@extends('admin.admin_master')

{{-- section id is yeild name  --}}

@section('admin')

<div class="container-full"> 
 <section class="content">

<div class="row">



    <div class="col-lg-12">

       <div class="box">
         <div class="box-header with-border">
           <h3 class="box-title">Data Table With Full Features</h3>
         </div>
         <!-- /.box-header -->
         <div class="box-body">
             <div class="table-responsive">
               <table id="example1" class="table table-bordered table-striped">
                 <thead>
                     <tr>
                         <th>Supplier Name</th>
                         <th>Product Name </th>
                         <th>Product Quintity</th>
                         <th>Total Amount</th>
                         <th>Total Paid Amount</th>
                         <th>Total Due Amount</th>
                         <th>Action</th>
                        
                     </tr>
                 </thead>
                 <tbody>

                   @foreach ($purchases as $purchase)
                   <tr>
                       <td>{{ $purchase->supplier->supplyer_name }}</td>
                       <td>{{ $purchase->productName->product_name }}</td>
                       <td>{{ $purchase->product_qty }}</td>
                       <td>{{ $purchase->total_amount }}</td>
                       <td>{{ $purchase->paid_amount }}</td>
                       <td>{{ $purchase->due_amount }}</td>
                       
                       <td>
                        <a href="{{route('purchase.details', $purchase->id )}}" class="btn btn-success">View</a> 

                           <a href="{{route('purchase.edit', $purchase->id )}}" class="btn btn-warning">Edit</a> 

                           <a href="{{ route('purchase.delete', $purchase->id )}}" class="btn btn-danger" id="#">Delete</a>
                       </td>  
                       
                       
                       
                   </tr>  
                   @endforeach --> 
                     
                     
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





