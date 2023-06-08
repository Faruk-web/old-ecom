
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
                <h4 class="box-title">Add News</h4>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                <div class="row">
                    <div class="col">
              <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                 <div class="col-12">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 style="text-align: center;">  <b class="btn btn-dark btn-lg" style="height: 25%; width:100%"> News Info </b> </h1>
                    </div>
                </div>
            <div class="row"> <!-- start 1st row  -->
                 <!-- end col md 3 -->
                <div class="col-md-4">
                    <div class="form-group">
                    <h5>News Title<span class="text-danger">*</span></h5>
                    <div class="controls">
                        <input type="text" name="news_name" class="form-control" > </div>
                        @error('project_name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <h5>News Image<span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="file" name="news_image" class="form-control" onchange="mainThamUrl(this)" > </div>
                         @error('news_image')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror
                         <img src="" id="mainThmb"  />
                        </div>
                </div> <!-- end col md 4 -->
                <div class="col-md-4">
                    <div class="form-group">
                        <h5>Date<span class="text-danger"></span></h5>
                        <div class="controls">
                            <input type="date" name="date" class="form-control" > </div>
                        </div>
                </div>
            </div> <!-- end 1st row  -->
            <div class="row"> <!-- start 5th row  -->
                <div class="col-md-12">
                    <div class="form-group">
                        <h5>News Short Descraption<span class="text-danger">*</span></h5>
                          <textarea name="news_short_descp" rows="10"  id="textarea" class="form-control"  placeholder="Textarea text"></textarea>
                         @error('product_short_descp')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror
                        </div>
                </div> <!-- end col md 4 -->
                {{-- <div class="col-md-8">
                    <div class="form-group">
                        <h5>Product Long Descraption<span class="text-danger"></span></h5>
                        	<textarea id="editor1" name="blog_long_descp" rows="5" cols="80" ></textarea>
                        </div>
                </div> <!-- end col md 4 --> --}}
            </div> <!-- end 6th row  -->
          <div class="text-align-center">
            <input type="submit" class="btn btn-rounded btn-primary mb-5 " value="Post News" >
        </div>
    </form>
 </div>
</div>
</div>
</div>
</div>
{{-- for sub category  --}}
<script>
    $(document).ready(function() {
      $('select[name="category_id"]').on('change', function(){
          var category_id = $(this).val();
          if(category_id) {
              $.ajax({
                  url: "{{  url('/subsubcategory/subcategory/ajax') }}/"+category_id,
                  type:"GET",
                  dataType:"json",
                  success:function(data) {
                      // sub sub category bug fix
                    //$('select[name="subsubcategory_id"]').html('');
                     var d =$('select[name="subcategory_id"]').empty();
                        $.each(data, function(key, value){
                            $('select[name="subcategory_id"]').append('<option value="'+ value.id +'">' + value.sub_category_name + '</option>');
				            showSubSubCategory(value.id);
                        });
                  },
              });
          } else {
              alert('danger');
          }
      });


        function showSubSubCategory(subcategory_id){

                $.ajax({
                    url: "{{  url('subsubcategory/sub-subcategory/ajax/') }}/"+subcategory_id,
                    type:"GET",
                    dataType:"json",
                    success:function(data) {
                        console.log('from sub sub category');
                        console.log(data);
                        var d =$('select[name="subsubcategory_id"]').empty();
                            $.each(data, function(key, value){
                                $('select[name="subsubcategory_id"]').append(`<option value="${value.id}">${value.subsubcategory_name}</option>`);
                            });
                    }
                });
            }

 // sub sub category auto select
        $('select[name="subcategory_id"]').on('change', function(){
                var subcategory_id = $(this).val();
                console.log('this is running for subcategory',subcategory_id);
                if(subcategory_id) {
                    $.ajax({
                        url: "{{  url('/subsubcategory/sub-subcategory/ajax/') }}/"+subcategory_id,
                        type:"GET",
                        dataType:"json",
                        success:function(data) {
                            var d =$('select[name="subsubcategory_id"]').empty();
                                $.each(data, function(key, value){
                                    $('select[name="subsubcategory_id"]').append('<option value="'+ value.id +'">' + value.subsubcategory_name + '</option>');
                                });
                        },
                    });
                } else {
                    alert('danger');
                }
            });
  });
  </script>
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
