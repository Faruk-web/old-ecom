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
     <h3 class="box-title">Edit Leading</h3>
   </div>
   <!-- /.box-header -->
   <div class="box-body">
       <div class="table-responsive">
         <form  method="POST" action="{{ route('leading.update', $leading->id) }}" enctype="multipart/form-data" >
           @csrf
               <input type="hidden" name="id" value="{{ $leading->id }}">
                 <input type="hidden" name="old_image" value="{{ $leading->leading_image }}">
                 <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <h5> <span class="text-danger">*</span>Leading Title</h5>
                            <div class="controls">
                            <input type="text" id="title" value="{{ $leading->title }}" name="title" class="form-control" >
                           </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <h5> <span class="text-danger">*</span>Leading Icon</h5>
                            <div class="controls">
                               <input type="text" id="director_designation" value="{{ $leading->icon }}" name="icon" class="form-control" >
                              </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <h5> Leading Img <span class="text-danger">*</span></h5>
                            <div class="controls">
                            <input type="file" id="leading_image" name="leading_image" class="form-control" >
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="form-group">
                            <h5>Leading Short Descraption<span class="text-danger">*</span></h5>
                              <textarea name="short_description" rows="3"  id="textarea" class="form-control" required placeholder="Textarea text">
                                  {!! $leading->short_description !!}
                              </textarea>
                            </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="form-group">
                            <h5>Leading Long Descraption<span class="text-danger">*</span></h5>
                              <textarea name="log_short_description" rows="3"  id="textarea" class="form-control" required placeholder="Textarea text">
                                  {!! $leading->log_short_description !!}
                              </textarea>
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

