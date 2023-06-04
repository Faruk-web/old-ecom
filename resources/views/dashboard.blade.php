@extends('frontend.main_master')

@section('index')
@include('frontend.body.mobile_sidbar_menu')

<section class="profile">
    <div class="container">
        <br>
     <br>
        <center class="user-order-table " >
            <h2 class="text-info"><span>Hi,..</span><strong class="text-success">{{ Auth::user()->name }}</strong> <br> Welcome To AMFL</h2>
        </center>
        <div class="row profile-wrapper">
            <div class="col-lg-3">
                 @include('frontend.common.user_sidebar')
            </div>
            <div class="col-lg-9">

            </div>
        </div>
    </div>
</section>

@endsection
