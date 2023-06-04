@extends('admin.admin_master')

{{-- section id is yeild name  --}}

@section('admin')

<div class="container-full">
 <section class="content">

<div class="row">
    <div class="col-lg-8">

       <div class="box">
         <div class="box-header with-border">
           <h3 class="box-title">Status List</h3>
         </div>
         <!-- /.box-header -->
         <div class="box-body">
             <div class="table-responsive">
               <table id="example1" class="table table-bordered table-striped">
                 <thead>
                     <tr>
                         <th>Status Id</th>
                         <th>Status Name</th>
                         <th>Action</th>
                     </tr>
                 </thead>
                 <tbody>
                   @foreach ($status as $item)
                   <tr>
                    <td>  {{ $item->id }}</td>
                     <td>{{ $item->status_name }}</td>
                       <td width="15%">
                           <a href="{{ route('status.delete', $item->id ) }}" class="btn btn-danger" >Delete</a>
                       </td>
                   </tr>
                   @endforeach
                 </tbody>
               </table>
               </div> <!-- table res.. end -->
             </div>  <!-- box body end -->
          </div>      <!-- box end -->
     </div> <!-- col end -->
<!--================================form add Category======================================- -->
<div class="col-lg-4">

 <div class="box">
   <div class="box-header with-border">
     <h3 class="box-title">Add Status</h3>
   </div>
   <!-- /.box-header -->
   <div class="box-body">
       <div class="table-responsive">
         <form  method="POST" action="{{ route('status.store') }}" >
            @csrf
                  <div class="form-group">
                      <h5> <span class="text-danger">*</span> Status Name</h5>
                      <div class="controls">
                      <input type="text" id="status_name" name="status_name" class="form-control" >
                      @error('status_name')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror
                     </div>
                      </div>
               </div>
                  <div class="text-xs-right">
                  <input type="submit" class="btn btn-rounded btn-info" value="Add Status">
              </div>
          </form>
         </div> <!-- table res.. end -->
       </div>  <!-- box body end -->
    </div>      <!-- box end -->
</div> <!-- col end -->
</div> <!--  row end-->
</section> <!--  content end-->
</div> <!--  row end-->
@endsection

