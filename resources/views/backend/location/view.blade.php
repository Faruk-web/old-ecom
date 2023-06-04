@extends('admin.admin_master')

{{-- section id is yeild name  --}}

@section('admin')

<div class="container-full">
 <section class="content">

<div class="row">
    <div class="col-lg-8">

       <div class="box">
         <div class="box-header with-border">
           <h3 class="box-title">Location List</h3>
         </div>
         <!-- /.box-header -->
         <div class="box-body">
             <div class="table-responsive">
               <table id="example1" class="table table-bordered table-striped">
                 <thead>
                     <tr>
                         <th>Location Id</th>
                         <th>Location Icon</th>
                         <th>Location Name</th>
                         <th>Action</th>
                     </tr>
                 </thead>
                 <tbody>
                   @foreach ($location as $item)
                   <tr>
                    <td>  {{ $item->id }}</td>
                    <td> <span><i class="{{ $item->location_icon }}"></i></span> </td>
                     <td>{{ $item->location_name }}</td>
                       <td width="15%">
                           <a href="{{ route('location.delete', $item->id ) }}" class="btn btn-danger" >Delete</a>
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
     <h3 class="box-title">Add Location</h3>
   </div>
   <!-- /.box-header -->
   <div class="box-body">
       <div class="table-responsive">
         <form  method="POST" action="{{ route('location.store') }}" >
            @csrf
                  <div class="form-group">
                      <h5> <span class="text-danger">*</span> Location Name</h5>
                      <div class="controls">
                      <input type="text" id="location_name" name="location_name" class="form-control" >
                      @error('location_name')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror
                     </div>
                      </div>
                  <div class="form-group">
                      <h5>Location Icon <span class="text-danger"></span></h5>
                      <div class="controls">
                      <input type="text"  id="location_icon" name="location_icon" class="form-control" >
                     </div>
                      </div>
               </div>
                  <div class="text-xs-right">
                  <input type="submit" class="btn btn-rounded btn-info" value="Add Location">
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

