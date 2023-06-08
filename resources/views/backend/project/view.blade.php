
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
                <h4 class="box-title">Add Project </h4>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                <div class="row">
                    <div class="col">
              <form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                 <div class="col-12">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 style="text-align: center;">  <b class="btn btn-dark btn-lg" style="height: 25%; width:100%"> Project Info </b> </h1>
                    </div>
                </div>
            <div class="row"> <!-- start 1st row  -->
                <div class="col-md-4">
                    <div class="form-group">
                    <h5>Status Select <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <select name="status_id" class="form-control"  >
                                <option value="" selected="" disabled="">Select Status</option>
                                @foreach($status as $items)
                                <option value="{{ $items->id }}">{{ $items->status_name }}</option>
                                @endforeach
                            </select>
                            @error('status_id')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                    </div>
                </div> <!-- end col md 3 -->
                <div class="col-md-4">
                    <div class="form-group">
                    <h5>Category Select <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <select name="category_id" class="form-control"  >
                                <option value="" selected="" disabled="">Select Category</option>
                                @foreach($category as $category)
                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                    </div>
                </div> <!-- end col md 3 -->
                <div class="col-md-4">
                    <div class="form-group">
                    <h5>Location Select <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <select name="location_id" class="form-control"  >
                                <option value="" selected="" disabled="">Select Location</option>
                            @foreach($location as $locations)
                                <option value="{{ $locations->id }}">{{ $locations->location_name }}</option>
                             @endforeach
                            </select>
                            @error('location_id')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                    <h5>Project Type <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <select name="project_type" class="form-control"  >
                                <option value="" selected="" disabled="">Select Project Type</option>
                                <option value="commercial">Commercial</option>
                                <option value="residential">Residential</option>
                                <option value="green_house">Green House</option>
                                <option value="architechtur">Architechtur</option>
                                <option value="construction">Construction</option>
                                <option value="villa">Villa</option>
                                <option value="building">Building</option>
                            </select>
                            @error('project_type')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                    </div>
                </div>
                 <!-- end col md 3 -->
                <div class="col-md-4">
                    <div class="form-group">
                        <h5>Project Name<span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="text" name="project_name" class="form-control" > </div>
                         @error('project_name')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror
                        </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <h5>Square Feet<span class="text-danger"></span></h5>
                        <div class="controls">
                            <input type="text" name="suqare_feet" class="form-control" > </div>
                         {{-- @error('project_name')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror --}}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <h5>Hight<span class="text-danger"></span></h5>
                        <div class="controls">
                            <input type="text" name="hight" class="form-control" > </div>
                         {{-- @error('project_name')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror --}}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <h5>Width<span class="text-danger"></span></h5>
                        <div class="controls">
                            <input type="text" name="width" class="form-control" > </div>
                         {{-- @error('project_name')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror --}}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <h5>Basement<span class="text-danger"></span></h5>
                        <div class="controls">
                            <input type="text" name="basement" class="form-control" > </div>
                         {{-- @error('project_name')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror --}}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <h5>Parking<span class="text-danger"></span></h5>
                        <div class="controls">
                            <input type="text" name="parking" class="form-control" > </div>
                         {{-- @error('project_name')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror --}}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <h5>Facing<span class="text-danger"></span></h5>
                        <div class="controls">
                            <input type="text" name="facing" class="form-control" > </div>
                         {{-- @error('project_name')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror --}}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <h5>Beedroom<span class="text-danger"></span></h5>
                        <div class="controls">
                            <input type="text" name="beedroom" class="form-control" > </div>
                        </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <h5>Available Units<span class="text-danger"></span></h5>
                        <div class="controls">
                            <input type="text" name="available_units" class="form-control" > </div>
                        </div>
                </div>
                <!-- end col md 4 -->
                <div class="col-md-4">
                    <div class="form-group">
                        <h5>Project Thambnail<span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="file" name="project_thambnail" class="form-control" onchange="mainThamUrl(this)" > </div>
                         @error('project_thambnail')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror
                         <img src="" id="mainThmb"  />
                        </div>
                </div> <!-- end col md 4 -->
                <div class="col-md-4">
                    <div class="form-group">
                        <h5>Project Multi Img <span class="text-danger">*</span></h5>
                        <div class="controls">
                         <input type="file" name="multi_img[]"  multiple="" id="MultiImg" class="form-control"  > </div>
                         @error('multi_img')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror
                         <div class="row" id="preview_img"></div>
                        </div>
                </div>
                <!-- end col md 4 -->
                <div class="col-md-4">
                    <div class="form-group">
                        <h5>Project Floor Image<span class="text-danger"></span></h5>
                        <div class="controls">
                            <input type="file" name="floor_image" class="form-control" onchange="mainThamUrlfloor(this)" > </div>
                         {{-- @error('project_thambnail')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror --}}
                         <img src="" id="mainThmbfloor"  />
                        </div>
                </div> <!-- end col md 4 -->
                <div class="col-md-4">
                    <div class="form-group">
                        <h5>Project Floor multi Image<span class="text-danger"></span></h5>
                        <div class="controls">
                         <input type="file" name="multi_img_floor[]"  multiple="" id="MultiImgfloor" class="form-control"  > </div>
                         {{-- @error('multi_img')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror --}}
                         <div class="row" id="preview_imgfloor"></div>
                        </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <h5>Location Address<span class="text-danger">*</span></h5>
                          <textarea name="location_address" rows="3"  id="textarea" class="form-control"  placeholder="Textarea text"></textarea>
                         @error('product_short_descp')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror
                        </div>
                </div>
                <!-- end col md 4 -->
            </div> <!-- end 1st row  -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 style="text-align: center;">  <b class="btn btn-dark btn-lg" style="height: 25%; width:100%"> Floor Plan </b> </h1>
                </div>
            </div>
            <div class="row"> <!-- start 5th row  -->
                <div class="col-md-4">
                    <div class="form-group">
                        <h5>Product Short Descraption<span class="text-danger">*</span></h5>
                          <textarea name="project_short_descp" rows="15"  id="textarea" class="form-control"  placeholder="Textarea text"></textarea>
                         @error('product_short_descp')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror
                        </div>
                </div> <!-- end col md 4 -->
                <div class="col-md-8">
                    <div class="form-group">
                        <h5>Product Long Descraption<span class="text-danger"></span></h5>
                        	<textarea id="editor1" name="project_long_descp" rows="5" cols="80" ></textarea>
                        </div>

                </div> <!-- end col md 4 -->
            </div> <!-- end 6th row  -->
            <br> <br>
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-md-3">
                <div class="form-group">
                    <div class="controls">
                        <fieldset>
                            <input type="checkbox" id="checkbox_2" name="feature_project" value="1">
                            <label for="checkbox_2">Feature Project</label>
                        </fieldset>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">

                    <div class="controls">
                        <fieldset>
                            <input type="checkbox" id="checkbox_4" name="delivered_project" value="1">
                            <label for="checkbox_4">Delivered Project</label>
                        </fieldset>
                    </div>
                </div>
            </div>
            <div class="col-lg-4"></div>
       </div>
       <br>
       <br>
          <div class="text-align-center">
            <input type="submit" class="btn btn-rounded btn-primary mb-5 " value="Add Project" >
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
    //   $('select[name="category_id"]').on('change', function(){
    //       var category_id = $(this).val();
    //       if(category_id) {
    //           $.ajax({
    //               url: "{{  url('/subsubcategory/subcategory/ajax') }}/"+category_id,
    //               type:"GET",
    //               dataType:"json",
    //               success:function(data) {
    //                   // sub sub category bug fix
    //                 //$('select[name="subsubcategory_id"]').html('');
    //                  var d =$('select[name="subcategory_id"]').empty();
    //                     $.each(data, function(key, value){
    //                         $('select[name="subcategory_id"]').append('<option value="'+ value.id +'">' + value.sub_category_name + '</option>');
	// 			            showSubSubCategory(value.id);
    //                     });
    //               },
    //           });
    //       } else {
    //           alert('danger');
    //       }
    //   });


        // function showSubSubCategory(subcategory_id){

        //         $.ajax({
        //             url: "{{  url('subsubcategory/sub-subcategory/ajax/') }}/"+subcategory_id,
        //             type:"GET",
        //             dataType:"json",
        //             success:function(data) {
        //                 console.log('from sub sub category');
        //                 console.log(data);
        //                 var d =$('select[name="subsubcategory_id"]').empty();
        //                     $.each(data, function(key, value){
        //                         $('select[name="subsubcategory_id"]').append(`<option value="${value.id}">${value.subsubcategory_name}</option>`);
        //                     });
        //             }
        //         });
        //     }

 // sub sub category auto select
        // $('select[name="subcategory_id"]').on('change', function(){
        //         var subcategory_id = $(this).val();
        //         console.log('this is running for subcategory',subcategory_id);
        //         if(subcategory_id) {
        //             $.ajax({
        //                 url: "{{  url('/subsubcategory/sub-subcategory/ajax/') }}/"+subcategory_id,
        //                 type:"GET",
        //                 dataType:"json",
        //                 success:function(data) {
        //                     var d =$('select[name="subsubcategory_id"]').empty();
        //                         $.each(data, function(key, value){
        //                             $('select[name="subsubcategory_id"]').append('<option value="'+ value.id +'">' + value.subsubcategory_name + '</option>');
        //                         });
        //                 },
        //             });
        //         } else {
        //             alert('danger');
        //         }
        //     });
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

    function mainThamUrlfloor(input){
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e){
				$('#mainThmbfloor').attr('src',e.target.result).width(80).height(80);
			};
			reader.readAsDataURL(input.files[0]);
		}
	}
</script>
{{-- ---------------------------Show Multi Image JavaScript Code ------------------------ --}}
<script>
  $(document).ready(function(){
   $('#MultiImg').on('change', function(){ //on file input change
      if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
      {
          var data = $(this)[0].files; //this file data
          $.each(data, function(index, file){ //loop though each file
              if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
                  var fRead = new FileReader(); //new filereader
                  fRead.onload = (function(file){ //trigger function on successful read
                  return function(e) {
                      var img = $('<img/>').addClass('thumb').attr('src', e.target.result) .width(80)
                  .height(80); //create image element
                      $('#preview_img').append(img); //append image to output element
                  };
                  })(file);
                  fRead.readAsDataURL(file); //URL representing the file's data.
              }
          });
      }else{
          alert("Your browser doesn't support File API!"); //if File API is absent
      }
   });
  });

  $(document).ready(function(){
   $('#MultiImgfloor').on('change', function(){ //on file input change
      if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
      {
          var data = $(this)[0].files; //this file data
          $.each(data, function(index, file){ //loop though each file
              if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
                  var fRead = new FileReader(); //new filereader
                  fRead.onload = (function(file){ //trigger function on successful read
                  return function(e) {
                      var img = $('<img/>').addClass('thumb').attr('src', e.target.result) .width(80)
                  .height(80); //create image element
                      $('#preview_imgfloor').append(img); //append image to output element
                  };
                  })(file);
                  fRead.readAsDataURL(file); //URL representing the file's data.
              }
          });
      }else{
          alert("Your browser doesn't support File API!"); //if File API is absent
      }
   });
  });
  </script>
{{-- ================================= End Show Multi Image JavaScript Code. ==================== --}}


@endsection
