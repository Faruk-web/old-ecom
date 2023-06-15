
@extends('admin.admin_master')
@section('admin')
{{-- js for sub category  --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="container-full">
    <!-- Content Header (Page header) -->
            <!-- Main content -->
            <section class="content">
            <!-- Basic Forms -->
            <div class="box">
                <div class="box-header with-border">
                <h4 class="box-title">Add Director</h4>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                <div class="row">
                    <div class="col">
              <form action="{{ route('leading.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                 <div class="col-12">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 style="text-align: center;">  <b class="btn btn-dark btn-lg" style="height: 25%; width:100%"> Leading Info </b> </h1>
                    </div>
                </div>
            <div class="row"> <!-- start 1st row  -->
                 <!-- end col md 3 -->
                <div class="col-md-4">
                    <div class="form-group">
                    <h5>Leading Title<span class="text-danger">*</span></h5>
                    <div class="controls">
                        <input type="text" name="title" class="form-control" > </div>
                        @error('title')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                    <h5>Icon<span class="text-danger">*</span></h5>
                    <div class="controls">
                        <input type="text" name="icon" class="form-control" > </div>
                        @error('icon')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <h5>Leading Image<span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="file" name="leading_image" class="form-control" onchange="mainThamUrl(this)" > </div>
                         @error('leading_image')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror
                         <img src="" id="mainThmb"  />
                        </div>
                </div> <!-- end col md 4 -->
                <div class="col-md-5">
                    <div class="form-group">
                        <h5>Leading Short Descraption<span class="text-danger">*</span></h5>
                          <textarea name="short_description" rows="3"  id="textarea" class="form-control"  placeholder="Textarea text"></textarea>
                        </div>
                </div> <!-- end col md 4 -->
                <div class="col-md-7">
                    <div class="form-group">
                        <h5>Leading Long Descraption<span class="text-danger">*</span></h5>
                          <textarea name="log_short_description" rows="3"  id="textarea" class="form-control"  placeholder="Textarea text"></textarea>
                        </div>
                </div> <!-- end col md 4 -->
            </div> <!-- end 1st row  -->
          <div class="text-align-center">
            <input type="submit" class="btn btn-rounded btn-primary mb-5 " value="Save" >
        </div>
    </form>
 </div>
</div>
</div>
</div>
</div>
{{-- // Img Tham script --}}
<script type="text/javascript">
	function mainThamUrl(input){
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e){
				$('#mainThmb').attr('src',e.target.result).width(80).height(80);
			};
			reader.readAsDataURL(input.files[0]);
		}
	}
</script>
@endsection
