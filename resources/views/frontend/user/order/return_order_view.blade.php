@extends('frontend.main_master')

@section('index')
@include('frontend.body.mobile_sidbar_menu')


<section class="profile">
    <div class="container">
        <div class="row profile-wrapper">
            <div class="col-lg-3">
                @include('frontend.common.user_sidebar')
            </div>
            <div class="col-lg-9">
                <div class="user-order-table">
                    <h2>My Return Order List</h2>
                    <div class="user-order-wrapper">
                        <table class="order-details">
                            <thead class="user-tb-h">
                                <th>Order date</th>
                                <th>Total</th>
                                <th>Payment Method </th>
                                <th>Invoice</th>
                                <th>Order Number</th>
                                <th>Return Reason</th>
                                <th>Status</th>
                            </thead>

                            <tbody class="user-tb-body">
                                @foreach($orders as $order)
                                <tbody class="user-tb-body">
                                <td>{{ $order->order_date }}</td>
                                <td>${{ $order->amount }}</td>
                                <td>{{ $order->payment_method }}</td>
                                <td>{{ $order->invoice_no }}</td>
                                <td>{{ $order->order_number }}</td>
                                <td>{{ $order->return_reason }}</td>
                                <td>
                                  {{-- <span class="badge badge-pill badge-warning" style="background: #418DB9;">{{ $order->status }} </span>
                                  <span class="badge badge-pill badge-warning" style="background:red;">Return Requested </span> --}}

                                @if($order->return_order == 0)
                                <span class="badge badge-pill badge-warning" style="background: #418DB9;"> No Return Request </span>
                                @elseif($order->return_order == 1)
                                <span class="badge badge-pill badge-warning" style="background: #07a195;"> Pedding </span>
                                <span class="badge badge-pill badge-warning" style="background:red;">Return Requested </span>

                                @elseif($order->return_order == 2)
                                <span class="badge badge-pill badge-warning" style="background: #008000;">Success </span>
                                @endif
                                </td>

                                {{-- <td class="col-md-1">
                                <a href="{{ url('user/order_details/'.$order->id ) }}" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i> View</a>

                                <a target="_blank" href="{{ url('user/invoice_download/'.$order->id ) }}" class="btn btn-sm btn-danger" style="margin-top: 5px;"><i class="fa fa-download" style="color: white;"></i> Invoice </a>

                                  </td> --}}

                                @endforeach
                            </tbody>

                        </table>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>

@endsection
