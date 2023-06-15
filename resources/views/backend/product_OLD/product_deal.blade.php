

@extends('admin.admin_master')

{{-- section id is yeild name  --}}

@section('admin')

<div class="container-full">
 <section class="content">

 <div class="row col-12">











 <div class="row">
  <div class="col-12">

    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Deals</h3>
      </div>
      <!-- /.box-header -->


      <div class="col-4">
        <form  method="POST" action="" enctype="multipart/form-data" >
          @csrf
          <input type="text" id="product_id" name="id" hidden>


                <div class="form-group">
                        <h5> <span class="text-danger"></span> Find Product</h5>
                        <div class="controls">
                            <select class="form-control" id="deals">
                                <option selected>Open this select menu</option>
                                @foreach ($products as $item)
                                    <option value="{{$item->id}}">{{$item->product_name}}</option>
                                @endforeach
                              </select>
                        </div>



                  </div>

                  <div class="form-group mt-5">
                    <input type="submit" class="btn btn-rounded btn-info" value="Find">
                  </div>


        </form>
      </div>





          <div class="row col-12">




              <div class="col-4">
                <form id='information' method="POST" action="{{route('deals.store')}}" enctype="multipart/form-data" >
                  @csrf
                  <input type="text" id="deals" name="id" hidden>


                        <div class="form-group">
                                <h5> <span class="text-danger"></span> Hot Deals</h5>
                                <div class="controls">
                                    <input type="date" id="hot_deal" name="hot_deal" class="form-control" >
                                </div>



                          </div>

                          <div class="form-group mt-5">
                            <input type="submit" class="btn btn-rounded btn-info" value="Submit">
                          </div>


                </form>
              </div>
              <div class="col-4">
                <form id='information' method="POST" action="{{route('deals.store')}}" enctype="multipart/form-data" >
                  @csrf
                  <input type="text" id="deals" name="id" hidden>


                        <div class="form-group">
                                <h5> <span class="text-danger"></span> Special Offer</h5>
                                <div class="controls">
                                    <input type="date" id="special_offer" name="special_offer" class="form-control" >
                                </div>



                          </div>

                          <div class="form-group mt-5">
                            <input type="submit" class="btn btn-rounded btn-info" value="Submit">
                          </div>


                </form>
              </div>

              <div class="col-4">
                <form id='information' method="POST" action="{{route('deals.store')}}" enctype="multipart/form-data" >
                  @csrf
                  <input type="text" id="deals" name="id" hidden >



                        <div class="form-group">
                                <h5> <span class="text-danger"></span> Special Deal</h5>
                                <div class="controls">
                                    <input type="date" id="special_deal" name="special_deal" class="form-control" >
                            </div>



                            <div class="form-group mt-5">
                              <input type="submit" class="btn btn-rounded btn-info" value="Submit">
                            </div>

                </form>
              </div>




            </div>
            </div>





</div>
</div>


@endsection




