
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
                <h4 class="box-title">Add Product </h4>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                <div class="row">
                    <div class="col">
              <form action="{{ route('product_store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                 <div class="col-12">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 style="text-align: center;">  <b class="btn btn-dark btn-lg" style="height: 25%; width:100%"> General Info </b> </h1>
                    </div>
                </div>
            <div class="row"> <!-- start 1st row  -->
                <div class="col-md-3">
                    <div class="form-group">
                    <h5>Brand Select <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <select name="brand_id" class="form-control"  >
                                <option value="" selected="" disabled="">Select Brand</option>
                                @foreach($brands as $brand)
                                <option value="{{ $brand->id }}">{{ $brand->brand_name_cats_eye }}</option>
                                @endforeach
                            </select>
                            @error('brand_id')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                    </div>
                </div> <!-- end col md 3 -->
                <div class="col-md-3">
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
                <div class="col-md-3">
                    <div class="form-group">
                    <h5>Sub Category Select <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <select name="subcategory_id" class="form-control"  >
                                <option value="" selected="" disabled="">Select Sub Category</option>
                            @foreach($subcategory as $subcategory)
                                <option value="{{ $subcategory->id }}">{{ $subcategory->sub_category_name }}</option>
                             @endforeach
                            </select>
                            @error('subcategory_id')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                    </div>
                </div> <!-- end col md 3 -->
                <div class="col-md-3">
                    <div class="form-group">
                    <h5>Sub Sub Category Select <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <select name="subsubcategory_id" class="form-control"  >
                                <option value="" selected="" disabled="">Select Sub Sub Category</option>
                                {{-- @foreach($subsubcategory as $item)
                                <option value="{{ $item->id }}">{{ $item->subsubcategory_name }}</option>
                                @endforeach --}}
                            </select>
                            @error('subsubcategory_id')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                    </div>
                </div> <!-- end col md 3 -->
            </div> <!-- end 1st row  -->
            <div class="row"> <!-- start 2nd row  -->
                <div class="col-md-4">
                    <div class="form-group">
                        <h5>Product Name <span class="text-danger">*</span></h5>
                        <div class="controls">
                         <input type="text" name="product_name" class="form-control" > </div>
                         @error('product_name')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror
                    </div>
                </div> <!-- end col md 4 -->
                <div class="col-md-2">
                    <div class="form-group">
                        <h5>Product Code <span class="text-danger">*</span></h5>
                        <div class="controls">
                         <input type="text" name="product_code" class="form-control"  > </div>
                         @error('product_code')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror
                    </div>
                </div> <!-- end col md 2 -->
                    <div class="col-lg-12">
                        <h1 style="text-align: center;">  <b  class="btn btn-dark btn-lg" style="height: 25%; width:100%"> Product Price and Stock </b> </h1>
                    </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <h5>Product Qty <span class="text-danger">*</span></h5>
                        <div class="controls">
                         <input type="number" name="product_qty" class="form-control"  > </div>
                         @error('product_qty')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror
                    </div>
                </div> <!-- end col md 2 -->
                <div class="col-md-2">
                    <div class="form-group">
                        <h5>Product Selling Price <span class="text-danger">*</span></h5>
                        <div class="controls">
                         <input type="number" name="selling_price"  class="form-control"  > </div>
                         @error('selling_price')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror
                    </div>
                </div> <!-- end col md 2 -->
                <div class="col-md-2">
                    <div class="form-group">
                        <h5>Product Discount Price <span class="text-danger">*</span></h5>
                        <div class="controls">
                         <input type="number" name="discount_price"  class="form-control"  > </div>

                         @error('discount_price')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror
                        </div>
                </div> <!-- end col md 2 -->
            </div> <!-- end 2nd row  -->
            <br> <br>
            <div class="col-lg-12">
                <h1 style="text-align: center;">  <b class="btn btn-dark btn-lg" style="height: 25%; width:100% ; " > Product Attributes </b> </h1>
            </div>
            <br> <br>
            <div class="row"> <!-- start 3rd row  -->
                <div class="col-md-3">
                    <div class="form-group">
                        <h5>Product Tags <span class="text-danger">*</span></h5>
                        <div class="controls">
                         <input type="text" name="product_tags" data-role="tagsinput" class="form-control"  > </div>

                         @error('product_tags')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror
                    </div>
                </div> <!-- end col md 4 -->
                <div class="col-md-3">
                    <div class="form-group">
                        <h5>Product size <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="text" name="product_size" data-role="tagsinput" class="form-control" > </div>

                         @error('product_size')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror
                        </div>
                </div> <!-- end col md 4 -->
                <div class="col-md-3">
                    <div class="form-group">
                        <h5>Product Colors <span class="text-danger">*</span></h5>
                        <div class="controls">
                         <input type="text" name="product_color" data-role="tagsinput" class="form-control"  > </div>
                         @error('product_color')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror
                    </div>
                </div> <!-- end col md 4 -->
                <div class="col-md-3">
                    <div class="form-group">
                        <h5>Product VIDEO Link<span class="text-danger">*</span></h5>
                        <div class="controls">
                         <input type="text" name="vedio"  class="form-control"  > </div>
                         @error('vedio')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror
                    </div>
                </div> <!-- end col md 4 -->
            </div> <!-- end 3rd row  -->
            <br> <br>
            <div class="col-lg-12">
                <h1 style="text-align: center;">  <b class="btn btn-dark btn-lg" style="height: 25%; width:100% "> Product Image & Info</b> </h1>
            </div> <br> <br>
            <div class="row"> <!-- start 4th row  -->
                <div class="col-md-6">
                    <div class="form-group">
                        <h5>Product Thambnail<span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="file" name="product_thambnail" class="form-control" onchange="mainThamUrl(this)" > </div>
                         @error('product_thambnail')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror
                         <img src="" id="mainThmb"  />
                        </div>
                </div> <!-- end col md 4 -->
                <div class="col-md-6">
                    <div class="form-group">
                        <h5>Product Multi Img <span class="text-danger">*</span></h5>
                        <div class="controls">
                         <input type="file" name="multi_img[]"  multiple="" id="MultiImg" class="form-control"  > </div>
                         @error('multi_img')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror
                         <div class="row" id="preview_img"></div>
                        </div>
                </div> <!-- end col md 4 -->
            </div> <!-- end 4th row  -->
            <br> <br>
            <div class="row"> <!-- start 5th row  -->
                <div class="col-md-3">
                    <div class="form-group">
                        <h5>Product Short Descraption<span class="text-danger">*</span></h5>
                          <textarea name="product_short_descp" rows="15"  id="textarea" class="form-control"  placeholder="Textarea text"></textarea>
                         @error('product_short_descp')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror
                        </div>
                </div> <!-- end col md 4 -->
                <div class="col-md-9">
                    <div class="form-group">
                        <h5>Product Long Descraption<span class="text-danger">*</span></h5>
                        	<textarea id="editor1" name="product_long_descp" rows="5" cols="80" ></textarea>
                         @error('product_long_descp')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror
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
                            <input type="checkbox" id="checkbox_2" name="hot_deals" value="1">
                            <label for="checkbox_2">Hot Deals</label>
                        </fieldset>
                        <fieldset>
                            <input type="checkbox" id="checkbox_3" name="featured" value="1">
                            <label for="checkbox_3">Featured</label>
                        </fieldset>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <div class="controls">
                        <fieldset>
                            <input type="checkbox" id="checkbox_4" name="special_offer" value="1">
                            <label for="checkbox_4">Special Offer</label>
                        </fieldset>
                        <fieldset>
                            <input type="checkbox" id="checkbox_5" name="special_deals" value="1">
                            <label for="checkbox_5">Special Deals</label>
                        </fieldset>
                    </div>
                </div>
            </div>
            <div class="col-lg-4"></div>
       </div>
       <br>
       <br>
          <div class="text-align-center">
            <input type="submit" class="btn btn-rounded btn-primary mb-5 " value="Add Product" >
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

  </script>
{{-- ================================= End Show Multi Image JavaScript Code. ==================== --}}


@endsection
