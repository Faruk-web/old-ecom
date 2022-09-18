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
                    <h2>My Order</h2>
                    <div class="user-order-wrapper">
                        <table class="order-details">
                            <thead class="user-tb-h">
                                <th > Order date</th>
                                <th > Total</th>
                                <th > Payment </th>
                                <th > Invoice</th>
                                <th>Order Status</th>
                                <th > Action</th>

                            </thead>
                            <tbody class="user-tb-body">
                                @foreach($orders as $order)
                                <tbody class="user-tb-body">
                                <td>{{ $order->order_date }}</td>
                                <td>${{ $order->amount }}</td>
                                <td>{{ $order->payment_method }}</td>
                                <td>{{ $order->invoice_no }}</td>
                                <td>
                                    @if($order->status == 'Pending')

                                    <span class="badge badge-pill badge-warning" style="background: #07a195;"> Pending </span>
                                    @elseif($order->status == 'confirm')
                                    <span class="badge badge-pill badge-warning" style="background: #0000FF;"> Confirm </span>


                                        @elseif($order->status == 'processing')
                                    <span class="badge badge-pill badge-warning" style="background: #FFA500;"> Processing </span>

                                        @elseif($order->status == 'picked')
                                    <span class="badge badge-pill badge-warning" style="background: #808000;"> Picked </span>

                                        @elseif($order->status == 'shipped')
                                    <span class="badge badge-pill badge-warning" style="background: #808080;"> Shipped </span>

                                        @elseif($order->status == 'delivered')
                                    <span class="badge badge-pill badge-warning" style="background: #008000;"> Delivered </span>

                                    @if($order->return_order == 1)
                                    <span class="badge badge-pill badge-warning" style="background:red;">Return Requested </span>

                                    @endif


                                    @else
                                    <span class="badge badge-pill badge-warning" style="background: #FF0000;"> Cancel </span>

                                    @endif
                                </td>
                                <td>
                                    <a href="{{ url('user/order_details/'.$order->id ) }}" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                    <a href="{{ url('user/invoice_download/'.$order->id ) }}" class="btn btn-danger" target="_blank"> Invoice </a>
                                </td>

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
