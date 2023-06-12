@extends('admin.admin_master')

{{-- section id is yeild name  --}}

@section('admin')

<div class="container-full">
 <section class="content">
<div class="row">
<!--================================form add brand======================================- -->
<div class="col-lg-12">
 <div class="box">
   <div class="box-header with-border">
     <h3 class="box-title">Edit Director</h3>
   </div>
   <!-- /.box-header -->
   <div class="box-body">
       <div class="table-responsive">
         <form  method="POST" action="{{ route('director.update', $directors->id) }}" enctype="multipart/form-data" >
           @csrf
               <input type="hidden" name="id" value="{{ $directors->id }}">
                 <input type="hidden" name="old_image" value="{{ $directors->brand_image }}">
                 <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <h5> <span class="text-danger">*</span>Director Name</h5>
                            <div class="controls">
                            <input type="text" id="director_name" value="{{ $directors->director_name }}" name="director_name" class="form-control" >
                            @error('director_name')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                              @enderror
                           </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <h5> <span class="text-danger">*</span>Director Designation</h5>
                            <div class="controls">
                               <input type="text" id="director_designation" value="{{ $directors->director_designation }}" name="director_designation" class="form-control" >
                               @error('director_designation')
                               <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                               </span>
                                 @enderror
                              </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <h5> Director Img <span class="text-danger">*</span></h5>
                            <div class="controls">
                            <input type="file" id="director_image" name="director_image" class="form-control" >
                            @error('director_image')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="form-group">
                            <h5>Director Short Descraption<span class="text-danger">*</span></h5>
                              <textarea name="director_short_descp" rows="8"  id="textarea" class="form-control" required placeholder="Textarea text">
                                  {!! $directors->director_short_descp !!}
                              </textarea>
                             @error('director_short_descp')
                             <span class="text-danger">{{ $message }}</span>
                             @enderror
                            </div>
                    </div>
                 </div>
                  <div class="text-xs-right">
                  <input type="submit" class="btn btn-rounded btn-info" value="Update Director">
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

