@extends('admin.admin_master')

@section('admin')
<div class="row">


    <div class="col-lg-8">
        <div class="box mt-2">
            <div class="box-header with-border text-center bg-secondary">
              <h3 class="box-title ">Banner</h3>
          </div>
        <!-- /.box-header -->
  <div class="box-body">

    <div class="table-responsive">
        <div id="example1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
            <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                
                
                <thead>
                    
                    <tr role="row" class="btn-primary"><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 133.734px;">Bennar Img</th>
                    <th>Status</th>
                    <th>Update</th>
                    <th>Delete</th>
                    <th>Active/Deactive</th>
                    </tr>
                    
                </thead>
                <tbody>
                    @foreach ($bennars as $item)
                    <tr>
                        <td>
                            <img src="{{asset($item->bennar_img)}}" width="250px;" height="100px;">
                        </td>
                       
                        <td>
                            @if($item->status == 1)
                            <span class="badge badge-pill badge-success">Active</span>
                            
                            @else
                            <span class="badge badge-pill badge-danger">Deactive</span>
                            
                            @endif
                        </td>
                        
                        <td>
                            <a href="{{route('bannerCategory.edit',$item->id )}}" class="btn btn-primary">edit</a>
                        </td>
                        <td>
                        <a href="{{route('bannerCategory.delete',$item->id)}}" class="btn btn-primary">Delete</a>
                        </td>
                     
                        <td>
                            
                           @if($item->status == 1)
                           <a href="{{ route('bannerCategory.deactive',$item->id) }}" class="btn btn-danger" title="Product Deactive Now"><i class="fa fa-arrow-down"></i></a>
                           @else
                           <a href="{{ route('bannerCategory.active',$item->id) }}" class="btn btn-success" title="Product Active Now"><i class="fa fa-arrow-up"></i> </a>
                           @endif
                       </td>
                   </tr>   

                   @endforeach    
               </tbody>
           </table>
       </div>
   </div>
</div>
   </div>
</div>






<div class="col-lg-4">
    <div class="box mt-2">
        <div class="box-header with-border">
          <h3 class="box-title">Add Banner</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">

        <form method="POST" action="{{ route('bannerCategory.store')  }}" enctype="multipart/form-data">
            @csrf           
            {{-- <input type="hidden" name="id" value="{{ $bennars->id }}">        
            <input type="hidden" name="old_img" value="{{ $bennars->bennar_img}}">      --}}

         <div class="form-group">
             <h5> Banner Img <span class="text-danger">*</span></h5>
             <div class="controls">
                 <input type="file" id=" bennar_img" name="bennar_img" class="form-control" required="Input Img"> 
                 @error('bennar_img')
                 <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>	
               </span>
               @enderror 
           </div>
          </div>

       
          <div class="text-xs-right">
            <input type="submit" class="btn btn-rounded btn-info" value="Add Banner">
        </div>
    
  </form>


</div>
<!-- /.box-body -->
</div>
</div>
</div>




@endsection



 










