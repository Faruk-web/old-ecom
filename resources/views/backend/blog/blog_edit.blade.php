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
     <h3 class="box-title">Edit Blog</h3>
   </div>
   <!-- /.box-header -->
   <div class="box-body">
       <div class="table-responsive">
         <form  method="POST" action="{{ route('blog.update', $blogs->id) }}" enctype="multipart/form-data" >
           @csrf
               <input type="hidden" name="id" value="{{ $blogs->id }}">
                 <input type="hidden" name="old_image" value="{{ $blogs->blog_image }}">
                 <input type="hidden" name="old_sub_image" value="{{ $blogs->blog_sub_image }}">
                 <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <h5> <span class="text-danger">*</span>Blog Title</h5>
                            <div class="controls">
                            <input type="text" id="blog_name" value="{{ $blogs->blog_name }}" name="blog_name" class="form-control" >
                            @error('blog_name')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                              @enderror
                           </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <h5>Video Link<span class="text-danger"></span></h5>
                            <div class="controls">
                                <input type="text" name="video_link" class="form-control" value="{{ $blogs->video_link }}" > </div>
                            </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <h5> Blog Img <span class="text-danger">*</span></h5>
                            <div class="controls">
                            <input type="file" id="blog_image" name="blog_image" class="form-control" >
                            @error('blog_image')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <h5> Blog Sub Img <span class="text-danger">*</span></h5>
                            <div class="controls">
                            <input type="file" id="blog_sub_image" name="blog_sub_image" class="form-control" >
                            @error('blog_sub_image')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <h5>Blog Short Descraption<span class="text-danger">*</span></h5>
                              <textarea name="blog_short_descp" rows="13"  id="textarea" class="form-control" required placeholder="Textarea text">
                                  {!! $blogs->blog_short_descp !!}
                              </textarea>
                             @error('blog_short_descp')
                             <span class="text-danger">{{ $message }}</span>
                             @enderror
                            </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <h5>Blog Long Descraption<span class="text-danger">*</span></h5>
                                <textarea id="editor1" name="blog_long_descp" rows="5" cols="80" >
                                    {!! $blogs->blog_long_descp !!}
                                 </textarea>
                             @error('blog_long_descp')
                             <span class="text-danger">{{ $message }}</span>
                             @enderror
                            </div>
                    </div>
                 </div>
                  <div class="text-xs-right">
                  <input type="submit" class="btn btn-rounded btn-info" value="Update Blog">
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

