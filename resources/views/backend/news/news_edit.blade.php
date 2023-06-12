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
         <form  method="POST" action="{{ route('news.update', $news->id) }}" enctype="multipart/form-data" >
           @csrf
               <input type="hidden" name="id" value="{{ $news->id }}">
                 <input type="hidden" name="old_image" value="{{ $news->news_image }}">
                 <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <h5> <span class="text-danger">*</span>News Name</h5>
                            <div class="controls">
                            <input type="text" id="news_name" value="{{ $news->news_name }}" name="news_name" class="form-control" >
                            @error('news_name')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                              @enderror
                           </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <h5> News Img <span class="text-danger">*</span></h5>
                            <div class="controls">
                            <input type="file" id="news_image" name="news_image" class="form-control" >
                            @error('news_image')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <h5>News Short Descraption<span class="text-danger">*</span></h5>
                              <textarea name="news_short_descp" rows="2"  id="textarea" class="form-control" required placeholder="Textarea text">
                                  {!! $news->news_short_descp !!}
                              </textarea>
                             @error('news_short_descp')
                             <span class="text-danger">{{ $message }}</span>
                             @enderror
                            </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <h5>News Long Descraption<span class="text-danger">*</span></h5>
                                <textarea id="editor1" name="news_long_descp" rows="5" cols="80" >
                                    {!! $news->news_long_descp !!}
                                 </textarea>
                             @error('news_long_descp')
                             <span class="text-danger">{{ $message }}</span>
                             @enderror
                            </div>
                    </div>
                 </div>
                  <div class="text-xs-right">
                  <input type="submit" class="btn btn-rounded btn-info" value="Update News">
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

