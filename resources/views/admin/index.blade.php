

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
    // dd($categoryNameProductQty);
    $dataPoints2 = array();
    $dataPoints = array();
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
			                <h3 class="text-white mb-0 font-weight-500">{{ $today}} <small class="text-success">TK</small></h3>
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
			<h3 class="text-white mb-0 font-weight-500">{{ $yearly }}<small class="text-danger"> TK</small></h3>
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
                Login History
            </h4>
        </div>
        @php
        $sessions = DB::table('sessions')->get();
            @endphp
        <div class="box-body">
            <div class="table-responsive">
                <table class="table no-border">
                    <thead>
                        <tr class="text-uppercase bg-lightest">
                            <th style="min-width: 100px"><span class="text-fade">User ID</span></th>
                            <th style="min-width: 100px"><span class="text-fade">IP Address</span></th>
                            <th style="min-width: 150px"><span class="text-fade">User Agent</span></th>
                            <th style="min-width: 130px"><span class="text-fade">Last Activity</span></th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sessions as $item)
                        <tr>
                            <td>
                                <span class="text-white font-weight-600 d-block font-size-16">
                                    {{ $item->user_id}}
                                </span>
                            </td>
                            <td>
                                <span class="text-fade font-weight-600 d-block font-size-16">
                                     {{ $item->ip_address }}
                                </span>

                            </td>
                            <td>
                                <span class="text-white font-weight-600 d-block font-size-16">
                                    {{ $item->user_agent}}
                                </span>
                            </td>
                            <td>
                                <span class="badge badge-primary-light badge-lg">{{ $item->last_activity}}</span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@php
$contacts = App\Models\ContactUs::limit(5)->get();
@endphp
{{-- Ashim Graph--}}
    {{-- Total Admin, User, Employee, Salary View  Section End--}}
    <div class="row">
        <div class="col-lg-12">
           <div class="box">
             <div class="box-header with-border">
               <h3 class="box-title">Contact Client</h3>
             </div>
             <!-- /.box-header -->
             <div class="box-body">
                 <div class="table-responsive">
                   <table id="example1" class="table table-bordered table-striped">
                     <thead>
                         <tr>
                            <th>Client Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Action</th>
                         </tr>
                     </thead>
                     <tbody>
                        @foreach($contacts as $item)
                        <tr>
                           <td> {{$item->name}} </td>
                           <td>{{ $item->phone }}</td>
                           <td>{{ $item->email }}</td>
                           <td>{{ $item->subject }}</td>
                           <td>{{ $item->message }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td style="color:rgb(207, 141, 27)">{{ Carbon\Carbon::parse($item->last_seen)->diffForHumans() }}</td>
                           <td>
                            {{-- <a href="" class="btn btn-info" title="Edit Data"><i class="fa fa-pencil"></i> </a> --}}
                            <a href="{{ route('contact.delete',$item->id) }}" class="btn btn-danger" title="Delete Data" id="#">
                            <i class="fa fa-trash"></i>
                           </a>
                           </td>
                        </tr>
                         @endforeach
                     </tbody>
                   </table>
                   </div> <!-- table res.. end -->
                 </div>  <!-- box body end -->
              </div>      <!-- box end -->
         </div> <!-- col end -->
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
                    text: "Comercial Wise Project Sell"
                },
                axisY: {
                    title: "Max Project Sell/"
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
                    text: "Residential Wise Project Stock"
                },
                axisY: {
                    title: "Max Project Stock/"
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
