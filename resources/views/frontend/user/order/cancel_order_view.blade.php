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
                    <h2>Cancel Order</h2>
                    <div class="user-order-wrapper">
                        <table class="order-details">
                            <thead class="user-tb-h">
                                <th > Order date</th>
                                <th > Total</th>
                                <th > Payment </th>
                                <th > Invoice</th>
                                <th > Order</th>
                                <th > Action</th>


                            </thead>
                            <tbody class="user-tb-body">
                                @foreach ( $orders as $order )
                                <tbody class="user-tb-body">
                                <td>{{ $order->order_date }}</td>
                                <td>${{ $order->amount }}</td>
                                <td>{{ $order->payment_method }}</td>
                                <td>{{ $order->invoice_no }}</td>
                                <td> <span class="badge badge-pill badge-warning" style="background: #418DB9;">{{ $order->status }} </span></td>
                                <td>
                                    <a href="{{ url('user/order_details/'.$order->id ) }}" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                    <a href="{{ url('user/invoice_download/'.$order->id ) }}" class="btn btn-danger">Invoice</a>
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
