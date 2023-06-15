
@extends('admin.admin_master')
@section('admin')
<div class="container-full">
    <!-- Content Header (Page header) -->
            <!-- Main content -->
            <section class="content">
            <!-- Basic Forms -->
            <div class="box">
                <div class="box-header with-border">
                <h4 class="box-title">Add Expence </h4>

                </div>
                <!-- /.box-header -->
                <div class="box-body">
                <div class="row">
                    <div class="col">
              <form action="{{route('expense.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                 <div class="col-12">
            <div class="row"> <!-- start 1st row  -->
                <div class="col-md-4">
                    <div class="form-group">
                        <h5> <span class="text-danger">*</span>Date</h5>
                        <div class="controls">
                        <input type="date" id="date" name="date" class="form-control">
                        @error('date')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                       </div>
                        </div>
                </div> <!-- end col md 4 -->
                <div class="col-md-4">
                    <div class="form-group">
                        <h5>Image<span class="text-danger">*</span></h5>
                        <div class="controls">
                        <input type="file" id="image" name="expense_image" class="form-control">
                        @error('expense_image')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                       </div>




                        </div>


                </div> <!-- end col md 4 -->


                <div class="col-md-2">
                    <div class="form-group">
                        <h5> <span class="text-danger">*</span>Add expense Type</h5>
                        <div class="controls">
                        <input type="text" id="expense_type_value" name="add_expense_type" class="form-control"> <br>


                       </div>



                        </div>

                </div> <!-- end col md 4 -->
                <div class="col-md-2" style="margin-top:28px;">
                    <input type="button" id="expense_btn" class="btn btn-rounded btn-primary mb-5" value="ADD">
                </div> <!-- end col md 4 -->





                </div> <!-- end col md 4 -->





            <div class="row"> <!-- start 2st row  -->


                <div class="col-md-4">
                    <div class="form-group">
                        <h5> <span class="text-danger">*</span> Expence type</h5>
                            <div class="controls">
                           <select id="expence_type" name="expence_type"class="form-control">
                                <option selected disabled>Select expence_type</option>
                              @foreach ($expense_type as $e_t )
                              <option value="{{$e_t->id }}" >{{ $e_t->expense_type }}</option>
                              @endforeach

                             </select>
                             @error('expence_type')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        </div>

                </div> <!-- end col md 4 -->


                <div class="col-md-4">
                    <div class="form-group">
                        <h5> <span class="text-danger">*</span>Amount</h5>
                        <div class="controls">
                        <input type="number" id="amount" name="amount" class="form-control">
                        @error('amount')
                        <span class="text-danger">{{ $message }}</span>

                    @enderror
                       </div>
                        </div>

                </div> <!-- end col md 4 -->


            </div> <!-- end 2st row  -->


            <div class="row"> <!-- start 3st row  -->


                <div class="col-md-4">
                    <div class="form-group">
                        <h5> <span class="text-danger">*</span> Payment Type</h5>
                            <div class="controls">
                           <select id="payment_type" name="payment_type"class="form-control">
                                <option selected disabled>Payment Type</option>
                                <option value="Cash">Cash</option>
                                <option value="Bank">Bank </option>
                                <option value="Bkash">Bkash </option>

                             </select>
                             @error('payment_type')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        </div>

                </div> <!-- end col md 4 -->

            </div> <!-- end 3st row  -->



            <!-- start 4st row  -->
            <div class="row">


                <div class="col-md-4">

                    <div class="form-group">
                        <h5>Expense Short Descraption<span class="text-danger">*</span></h5>

                          <textarea name="expense_short_descp" rows="15"  id="textarea" class="form-control"  placeholder="Textarea text"></textarea>


                        </div>
                        @error('product_short_descp')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror

                </div>


                </div> <!-- end col md 4 -->

            </div> <!-- end 4st row  -->





      <br>
       <br>
       <br>

          <div class="container" style="text-align: center">
            <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Add Expence">
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





@endsection
<script src="{{asset('js/axios.min.js')}}"></script>

@push('js')

<script>

    $(()=> {

        $("#expense_btn").click(()=>{
          let value= $("#expense_type_value").val();

          if(value!=""){

  //axois post Start

  axios.post('/expense/addexpensetype', {
            add_expense_type: value,

            })
            .then(function (response) {
                console.log(response.data);

//axios get start

axios.get('/expense/getexpensetype')
  .then(function (response) {
    $("#expense_type_value").val("");
    let data =response.data.expense_name
     $("#expence_type").append(new Option(data.expense_type,data.id));
    console.log();
  })
  .catch(function (error) {
    // handle error
    console.log(error);
  })





//Axios get end











            })
            .catch(function (error) {
                console.log(error);
            });

         //axois post end














          }
          else{
         alert("Expense Type Cant Emty");

          }



        });



    });

            </script>
@endpush



