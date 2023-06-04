

 @extends('admin.admin_master')

 @section('admin')
 @php
	$date = now('d');
	$today = App\Models\Order::whereDate('order_date', $date)->where('status','=', 'delivered')->sum('amount');
	$asset = App\Models\Asset::all();
	$month = date('F');
	$monthly = App\Models\Order::where('order_month', $month)->where('status','=', 'delivered')->sum('amount');
    $year = date('Y');
	$yearly = App\Models\Order::where('order_year', $year)->where('status','=', 'delivered')->sum('amount');
    $pending = App\Models\Order::where('status','pending')->get();
    $total_delivery = App\Models\Order::where('status','delivered')->get();
    $total_cancel_order = App\Models\Order::where('status','cancel')->get();
    $total_confirm_order = App\Models\Order::where('status','confirm')->get();
    $total_shipped_order = App\Models\Order::where('status','shipped')->get();
    $total_processing_order = App\Models\Order::where('status','processing')->get();
    $total_picked_order = App\Models\Order::where('status','picked')->get();
    $categoriesStock = App\Models\Product::select( DB::raw('SUM(product_qty) as total'),'category_name')
    ->join('categories','products.category_id','categories.id')
    ->groupBy('categories.category_name')
    ->get();
    $categoriesIds = App\Models\Category::pluck('id');
    $categories = App\Models\Category::with(['ordersProduct'])->limit(10)->get();
    $categoryNameProductQty = array();
    foreach($categories as $category){
        $categoryName  = "";
        if($category->category_name !== $categoryName && $category->ordersProduct()->count() > 0 ){
            $maxQty  = $category->ordersProduct()->sum('order_items.qty');
            $categoryName = $category->category_name;
            $categoryNameProductQty[] = array('category_name' => $categoryName,'max_qty'=>$maxQty);
        }
    }
    // dd($categoryNameProductQty);
    $dataPoints2 = array();
    $dataPoints = array();

    foreach( $categoryNameProductQty as $categoryAndQty){
        $dataPoints[] = (array("label"=> $categoryAndQty['category_name'], "y"=> $categoryAndQty['max_qty'] ));
    }
    foreach( $categoriesStock as $categories){
            $dataPoints2[] = (array("label"=> $categories['category_name'], "y"=> $categories['total']));
    }
@endphp
 <div class="container-full">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xl-3 col-6">
                <div class="box overflow-hidden pull-up">
                    <div class="box-body">
                        <div class="icon bg-primary-light rounded w-60 h-60">
                            <i class="far fa-money-bill-alt" style="color:green; font-size:30px; background-color: white"></i>

                        </div>
                        <div>
                            <p class="text-mute mt-20 mb-0 font-size-16">Today's Sale</p>
			                <h3 class="text-white mb-0 font-weight-500">{{ $today}} <small class="text-success"><i class="fa fa-caret-up"></i>TK</small></h3>
		                </div>
                    </div>
                </div>

            </div>
            <div class="col-xl-3 col-6">
                <div class="box overflow-hidden pull-up">
                    <div class="box-body">
                        <div class="icon bg-warning-light rounded w-60 h-60">
                            <i class="far fa-money-bill-alt" style="color:green; font-size:30px; background-color: white"></i>
                        </div>
                        <div>
                            <p class="text-mute mt-20 mb-0 font-size-16">Monthly Sale </p>


			<h3 class="text-white mb-0 font-weight-500">{{ $monthly }}<small class="text-success">
             TK</small>
            </h3>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-6">
                <div class="box overflow-hidden pull-up">
                    <div class="box-body">
                        <div class="icon bg-info-light rounded w-60 h-60">
                            <i class="far fa-money-bill-alt" style="color:green; font-size:30px; background-color: white"></i>
                        </div>
                        <div>
                            <p class="text-mute mt-20 mb-0 font-size-16">Yearly Sale </p>
			<h3 class="text-white mb-0 font-weight-500">{{ $yearly }}<small class="text-danger"><i class="far fa-facebook"></i> TK</small></h3>
                        </div>
                    </div>
                </div>
            </div>





     {{-- Total Admin, User, Employee, Salary View  Section Start--}}

     <div class="col-xl-3 col-6">
        <div class="box overflow-hidden pull-up">
            <div class="box-body">
                <div class="icon bg-primary-light rounded w-60 h-60">
                    <i class="text-info mr-0 font-size-24 mdi mdi-account-multiple"></i>

                </div>
                <div>
                    @php
                        $admins = App\Models\Admin::all()->count();
                    @endphp
                    <p class="text-mute mt-20 mb-0 font-size-16">Total Admin</p>
                    <h3 class="text-white mb-0 font-weight-500">{{$admins}}</h3>
            </div>
            </div>
        </div>
    </div>
  </section>
 </div>


    {{-- Total Admin, User, Employee, Salary View  Section End--}}

            <div class="col-12">
                <div class="box">
                    <div class="box-header">
                        <h4 class="box-title align-items-start flex-column">
                            Recent All Orders Call

                        </h4>
                    </div>


                    @php
                    $orders = App\Models\Order::where('status','pending')->orderBy('id','DESC')->get();
                        @endphp



                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table no-border">
                                <thead>
                                    <tr class="text-uppercase bg-lightest">
                                        <th style="min-width: 250px"><span class="text-white">Order Date</span></th>
                                        <th style="min-width: 100px"><span class="text-fade">Invoice</span></th>
                                        <th style="min-width: 100px"><span class="text-fade">Amount</span></th>
                                        <th style="min-width: 150px"><span class="text-fade">Payment</span></th>
                                        <th style="min-width: 130px"><span class="text-fade">Status</span></th>
                                        <th style="min-width: 120px"><span class="text-fade">Process</span> </th>
                                    </tr>
                                </thead>
                                <tbody>


                                    @foreach($orders as $item)
                                    <tr>
                                        <td class="pl-0 py-8">
                                             <span class="text-white font-weight-600 d-block font-size-16">
                                                 @php
                                                    $data = new Carbon\Carbon($item->order_date);
                                                 @endphp

                                                {{ $data->diffForHumans()  }}
                                            </span>
                                        </td>

                                        <td>

                                            <span class="text-white font-weight-600 d-block font-size-16">
                                                {{ $item->invoice_no }}
                                            </span>
                                        </td>

                                        <td>
                                            <span class="text-fade font-weight-600 d-block font-size-16">
                                                $ {{ $item->amount }}
                                            </span>

                                        </td>



                                        <td>

                                            <span class="text-white font-weight-600 d-block font-size-16">
                                                {{ $item->payment_method }}
                                            </span>
                                        </td>
                                        <td>
                                            <span class="badge badge-primary-light badge-lg">{{ $item->status }}</span>
                                        </td>



                                        <td class="">
                                            <a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-bookmark-plus"></span></a>
                                            <a href="{{ route('pending.orders.details',$item->id) }}" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-arrow-right"></span></a>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
    {{-- Ashim Graph--}}


    <div class="col-12">

            <div class="box-body">
                <div class="table-responsive">
                    <div class="row">
                    <div class="col-xl-6 col-6 p-10">
                        <div id="chartContainer" style="height: 370px; width: 100%;">
                        </div>
                    </div>
                    <div class="col-xl-6 col-6 p-10">
                        <div id="chartContainer2" style="height: 370px; width: 100%;">
                        </div>
                     </div>
                    </div>

                </div>
            </div>
        </div>
    </div>








        </div>
    </section>
    <!-- /.content -->
  </div>

  {{-- {{dd() }} --}}
  @endsection

  @push("js")


  <script>
      $(document).ready(function(){
            let dataPoinst = <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>;
            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                theme: "light2", // "light1", "light2", "dark1", "dark2"
                title: {
                    text: "Category Wise Project Sell"
                },
                axisY: {
                    title: "Max Product Sell/"
                },
                data: [{
                    type: "column",
                    dataPoints: dataPoinst
                }]
            });
            console.log(chart);
            chart.render();

            let dataPoints2 = <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>;
            var chart = new CanvasJS.Chart("chartContainer2", {
                animationEnabled: true,
                theme: "light2", // "light1", "light2", "dark1", "dark2"
                title: {
                    text: "Category Wise Project Stock"
                },
                axisY: {
                    title: "Max Product Stock/"
                },
                data: [{
                    type: "column",
                    dataPoints: dataPoints2
                }]
            });
            console.log(chart);
            chart.render();



      });
  </script>



 @endpush
