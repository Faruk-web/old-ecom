
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
                <h4 class="box-title">Edit Project</h4>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                <div class="row">
                    <div class="col">
              <form action="{{ route('project_update')}}" method="POST" >
                @csrf
                <input type="hidden" name="id" value="{{ $projects->id }}" />
                <div class="row">
                 <div class="col-12">
            <div class="row"> <!-- start 1st row  -->
                <div class="col-md-4">
                    <div class="form-group">
                    <h5>Status Select <span class="text-danger">*</span></h5>
                    <div class="controls">
                        <select name="status_id" class="form-control" required="" >
                            <option value="" selected="" disabled="">Select Status</option>
                            @foreach($status as $item)
                    <option value="{{ $item->status_name}}" {{ $item->status_name == $projects->status_id ? 'selected': '' }} >{{ $item->status_name }}</option>
                            @endforeach
                        </select>
                        {{-- @error('brand_id')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror --}}
                    </div>
                        </div>
                </div> <!-- end col md 4 -->
                <div class="col-md-4">
                    <div class="form-group">
                    <h5>Project Type <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <select name="project_type" class="form-control"  >
                                <option value="{{ $projects->project_type}}" selected="" disabled="">Select Project Type</option>
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
                <div class="col-md-4">
                    <div class="form-group">
        <h5>Category Select <span class="text-danger">*</span></h5>
        <div class="controls">
            <select name="category_id" class="form-control" required="" >
                <option value="" selected="" disabled="">Select Category</option>
                @foreach($category as $category)
        <option value="{{ $category->id }}" {{ $category->id == $projects->category_id ? 'selected': '' }}>{{ $category->category_name }}</option>
                @endforeach
            </select>
            {{-- @error('category_id')
        <span class="text-danger">{{ $message }}</span>
        @enderror --}}
        </div>
            </div>
                </div> <!-- end col md 4 -->
                <!-- end col md 4 -->
                <div class="col-md-4">
                    <div class="form-group">
                        <h5>Product Name <span class="text-danger">*</span></h5>
                        <div class="controls">
                         <input type="text" value="{{ $projects->project_name }}" name="project_name" class="form-control"> </div>
                         {{-- @error('project_name')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror --}}
                        </div>
                </div> <!-- end col md 4 -->
                <div class="col-md-4">
                    <div class="form-group">
                        <h5>Square Feet <span class="text-danger">*</span></h5>
                        <div class="controls">
                         <input type="text" value="{{ $projects->suqare_feet }}" name="suqare_feet" class="form-control" > </div>
                         {{-- @error('suqare_feet')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror --}}
                        </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <h5>Hight<span class="text-danger">*</span></h5>
                        <div class="controls">
                         <input type="text" value="{{ $projects->hight }}" name="hight" class="form-control" > </div>
                         {{-- @error('hight')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror --}}
                        </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <h5>Width<span class="text-danger">*</span></h5>
                        <div class="controls">
                         <input type="text" value="{{ $projects->width}}" name="width" class="form-control"> </div>
                         {{-- @error('width')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror --}}
                        </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <h5>Basement<span class="text-danger">*</span></h5>
                        <div class="controls">
                         <input type="text" value="{{ $projects->basement }}" name="basement" class="form-control"> </div>
                         {{-- @error('basement')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror --}}
                        </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <h5>Parking<span class="text-danger">*</span></h5>
                        <div class="controls">
                         <input type="text" value="{{ $projects->parking }}" name="parking" class="form-control"> </div>
                         {{-- @error('product_name')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror --}}
                        </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <h5>Facing<span class="text-danger">*</span></h5>
                        <div class="controls">
                         <input type="text" value="{{ $projects->facing }}" name="facing" class="form-control"> </div>
                         {{-- @error('product_name')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror --}}
                        </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <h5>Beedroom<span class="text-danger">*</span></h5>
                        <div class="controls">
                         <input type="text" value="{{ $projects->beedroom }}" name="beedroom" class="form-control"> </div>
                         {{-- @error('product_name')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror --}}
                        </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <h5>Available Units<span class="text-danger">*</span></h5>
                        <div class="controls">
                         <input type="text" value="{{ $projects->available_units }}" name="available_units" class="form-control"> </div>
                         {{-- @error('product_name')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror --}}
                        </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <h5>Location Address<span class="text-danger">*</span></h5>
                          <textarea name="location_address" rows="3"  id="textarea" class="form-control" required placeholder="Textarea text">
                              {!! $projects->location_address !!}
                          </textarea>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                       <h5>Location Map ID <span class="text-danger">*</span></h5>
                       <textarea name="location_id" rows="3"  id="textarea" class="form-control" required placeholder="Textarea text">
                        {!! $projects->location_id !!}
                      </textarea>
                     </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                    <h5>Video Link <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="text" name="video_link" value="{{ $projects->video_link}}" class="form-control"> </div>
                            {{-- @error('video_link')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror --}}
                        </div>
                    </div>
            </div> <!-- end 1st row  -->
            <div class="row"> <!-- start 6th row  -->
                <div class="col-md-3">
                    <div class="form-group">
                        <h5>Project Short Descraption<span class="text-danger">*</span></h5>
                          <textarea name="project_short_descp" rows="15"  id="textarea" class="form-control" required placeholder="Textarea text">
                              {!! $projects->project_short_descp !!}
                          </textarea>
                         {{-- @error('product_short_descp')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror --}}
                        </div>
                </div> <!-- end col md 4 -->
                <div class="col-md-9">
                    <div class="form-group">
                        <h5>Product Long Descraption<span class="text-danger">*</span></h5>
                        	<textarea id="editor1" name="project_long_descp" rows="5" cols="80" >
                                {!! $projects->project_long_descp !!}
                             </textarea>
                         {{-- @error('product_long_descp')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror --}}
                        </div>
                </div> <!-- end col md 4 -->
            </div> <!-- end 6th row  -->
        <div class="row bg-success">
            <div class="col-md-6">
                <div class="form-group">
                    <div class="controls">
                        <fieldset>
                            <input type="checkbox" id="checkbox_2" name="feature_project" value="1" {{ $projects->feature_project == 1 ? 'checked': '' }}>
                            <label for="checkbox_2">Feature Project</label>
                        </fieldset>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="controls">
                        <fieldset>
                            <input type="checkbox" id="checkbox_4" name="delivered_project" value="1" {{ $projects->delivered_project == 1 ? 'checked': '' }}>
                            <label for="checkbox_4">Delivered Project</label>
                        </fieldset>
                    </div>
                </div>
            </div>
       </div>
       <br>
       <br>
       <br>
          <div class="text-xs-right">
            <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update Project">
                            </div>
                        </form>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
            </section>
            <!-- /.content -->
	<!-- ///////////////// Start Thambnail Image Update Area ///////// -->
    <section class="content">
        <div class="row">
         <div class="col-md-12">
                   <div class="box bt-3 border-info">
                     <div class="box-header">
            <h4 class="box-title">Project Thambnail Image <strong>Update</strong></h4>
                     </div>
           <form method="post" action="{{ route('update_project_thambnail')}}" enctype="multipart/form-data">
           @csrf
            <input type="hidden" name="id" value="{{ $projects->id }}">
              <input type="hidden" name="old_img" value="{{ $projects->project_thambnail }}">
               <div class="row row-sm">
                   <div class="col-md-3">
                <div class="card">
                    <img src="{{ asset($projects->project_thambnail) }}" class="card-img-top" style="height: 130px; width: 280px;">
                    <div class="card-body">
                    <p class="card-text">
                        <div class="form-group">
                            <label class="form-control-label">Change Image <span class="tx-danger">*</span></label>
                    <input type="file" name="project_thambnail" class="form-control" onChange="mainThamUrl(this)"  >
                        <img src="" id="mainThmb">
                        </div>
                    </p>

                    </div>
                </div>

                   </div><!--  end col md 3		 -->
               </div>
               <div class="text-xs-right">
              <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update Image">
            </div>
             <br>
             <br>
           </form>
         </div>
        </div>
        </div>
   </div> <!-- // end row  -->
    </section>
   <!-- ///////////////// End Start Thambnail Image Update Area ///////// -->

		<!-- ///////////////// Start Multiple Image Update Area ///////// -->
        <section class="content">
            <div class="row">
                   <div class="col-md-12">
                       <div class="box bt-3 border-info">
                         <div class="box-header">
                  <h4 class="box-title">Project Multiple Image <strong>Update</strong></h4>
                        </div>
               <form method="post" action="{{ route('update_project_img')}}" enctype="multipart/form-data">
                @csrf
                <div class="row row-sm">
                       @foreach($multiimgs as $img)
                       <div class="col-md-3">
                        <div class="card">
                            <img src="{{ asset($img->photo_name) }}" class="card-img-top" style="height: 130px; width: 280px;">
                            <div class="card-body">
                            <h5 class="card-title">
                            <a href="" class="btn btn-sm btn-danger" id="#" title="Delete Data"><i class="fa fa-trash"></i> </a>
                                </h5>
                            <p class="card-text">
                                <div class="form-group">
                                    <label class="form-control-label">Change Image <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="file" name="multi_img[{{ $img->id }}]">
                                </div>
                            </p>
                            </div>
                        </div>
                       </div><!--  end col md 3		 -->
                       @endforeach
                   </div>
                   <div class="text-xs-right">
                   <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update Image">
                </div>
                <br>
                <br>
               </form>
             </div>
            </div>
          </div> <!-- // end row  -->
       </section>
       <section class="content">
        <div class="row">
         <div class="col-md-12">
                   <div class="box bt-3 border-info">
                     <div class="box-header">
            <h4 class="box-title">Project Floor Image <strong>Update</strong></h4>
                     </div>
           <form method="post" action="{{ route('update_project_floor_image')}}" enctype="multipart/form-data">
           @csrf
            <input type="hidden" name="id" value="{{ $projects->id }}">
              <input type="hidden" name="old_imgfloor" value="{{ $projects->floor_image }}">
               <div class="row row-sm">
                   <div class="col-md-3">
                <div class="card">
                    <img src="{{ asset($projects->floor_image) }}" class="card-img-top" style="height: 130px; width: 280px;">
                    <div class="card-body">
                    <p class="card-text">
                        <div class="form-group">
                            <label class="form-control-label">Change Image <span class="tx-danger">*</span></label>
                    <input type="file" name="floor_image" class="form-control" onChange="mainThamUrlfloor(this)"  >
                        <img src="" id="mainThmbfloor">
                        </div>
                    </p>
                    </div>
                </div>
                   </div><!--  end col md 3		 -->
               </div>
               <div class="text-xs-right">
              <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update Image">
            </div>
           </form>
         </div>
        </div>
        </div>
    </section>
    <!-- ///////////////// End Multiple Image Update Area ///////// -->
    <section class="content">
        <div class="row">
               <div class="col-md-12">
                   <div class="box bt-3 border-info">
                     <div class="box-header">
              <h4 class="box-title">Project Floor Multiple Image <strong>Update</strong></h4>
                    </div>
           <form method="post" action="{{ route('update_project_img_floor')}}" enctype="multipart/form-data">
            @csrf
            <div class="row row-sm">
                   @foreach($multiimgsfloor as $img)
                   <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset($img->photo_name_floor) }}" class="card-img-top" style="height: 130px; width: 280px;">
                        <div class="card-body">
                        <h5 class="card-title">
                        <a href="" class="btn btn-sm btn-danger" id="#" title="Delete Data"><i class="fa fa-trash"></i> </a>
                            </h5>
                        <p class="card-text">
                            <div class="form-group">
                                <label class="form-control-label">Change Image <span class="tx-danger">*</span></label>
                                <input class="form-control" type="file" name="multi_imgfloor[{{ $img->id }}]">
                            </div>
                        </p>
                        </div>
                    </div>
                   </div><!--  end col md 3		 -->
                   @endforeach
               </div>
               <div class="text-xs-right">
               <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update Image">
            </div>
            <br>
            <br>
           </form>
         </div>
        </div>
      </div> <!-- // end row  -->
   </section>
   <section class="content">
        <div class="row">
            <div class="col-md-12">
            <div class="box bt-3 border-info">
                <div class="box-header">
                <h4 class="box-title">Project Map <strong>Update</strong></h4>
                </div>
            <form method="post" action="{{ route('update_project_map_image')}}" enctype="multipart/form-data">
            @csrf
                <input type="hidden" name="id" value="{{ $projects->id }}">
                <input type="hidden" name="old_imgmap" value="{{ $projects->project_map }}">
                <div class="row row-sm">
                    <div class="col-md-3">
                            <div class="card">
                                <img src="{{ asset($projects->project_map) }}" class="card-img-top" style="height: 130px; width: 280px;">
                                <div class="card-body">
                                <p class="card-text">
                                    <div class="form-group">
                                        <label class="form-control-label">Change Image <span class="tx-danger">*</span></label>
                                <input type="file" name="project_map" class="form-control" onChange="mainThamUrlmap(this)"  >
                                    <img src="" id="mainThmbmap">
                                    </div>
                                </p>
                                </div>
                            </div>
                    </div><!--  end col md 3		 -->
                </div>
                <div class="text-xs-right">
                <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update Image">
                </div>
            </form>
            </div>
            </div>
         </div>
   </section>
   <section class="content">
    <div class="row">
        <div class="col-md-12">
        <div class="box bt-3 border-info">
            <div class="box-header">
            <h4 class="box-title">Project Icon Image <strong>Update</strong></h4>
            </div>
        <form method="post" action="{{ route('update_project_icon_image')}}" enctype="multipart/form-data">
        @csrf
            <input type="hidden" name="id" value="{{ $projects->id }}">
            <input type="hidden" name="old_imgicon" value="{{ $projects->project_icon_img }}">
            <div class="row row-sm">
                <div class="col-md-3">
                        <div class="card">
                            <img src="{{ asset($projects->project_icon_img) }}" class="card-img-top" style="height: 130px; width: 280px;">
                            <div class="card-body">
                            <p class="card-text">
                                <div class="form-group">
                                    <label class="form-control-label">Change Image <span class="tx-danger">*</span></label>
                            <input type="file" name="project_icon_img" class="form-control" onChange="mainThamUrlmapIconImage(this)"  >
                                <img src="" id="mainThmbmapIconImage">
                                </div>
                            </p>
                            </div>
                        </div>
                </div><!--  end col md 3		 -->
            </div>
            <div class="text-xs-right">
            <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update Image">
            </div>
        </form>
        </div>
        </div>
     </div>
</section>
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
                    $('select[name="subsubcategory_id"]').html('');

                     var d =$('select[name="subcategory_id"]').empty();
                        $.each(data, function(key, value){
                            $('select[name="subcategory_id"]').append('<option value="'+ value.id +'">' + value.sub_category_name + '</option>');
                        });
                  },
              });
          } else {
              alert('danger');
          }
      });
        // sub sub category auto select
        $('select[name="subcategory_id"]').on('change', function(){
                var subcategory_id = $(this).val();
                if(subcategory_id) {
                    $.ajax({
                        url: "{{  url('/subsubcategory/sub-subcategory/ajax') }}/"+subcategory_id,
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
    // floor image
    function mainThamUrlfloor(input){
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e){
				$('#mainThmbfloor').attr('src',e.target.result).width(80).height(80);
			};
			reader.readAsDataURL(input.files[0]);
		}
	}
      // project map
      function mainThamUrlmap(input){
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e){
				$('#mainThmbmap').attr('src',e.target.result).width(80).height(80);
			};
			reader.readAsDataURL(input.files[0]);
		}
	}
       // project icon image
       function mainThamUrlmapIconImage(input){
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e){
				$('#mainThmbmapIconImage').attr('src',e.target.result).width(80).height(80);
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
  // floor multi image
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
