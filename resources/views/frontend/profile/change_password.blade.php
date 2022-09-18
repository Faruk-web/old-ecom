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
                    <h2>Change Password</h2>

                    <form method="POST" action="{{ route('user.password.update') }}" >
                        @csrf
                        <div class="from-group">
                            <label>Old Password</label>
                            <input type="password" class="form-control" id="oldpassword" name="oldpassword" placeholder="Enter Old Password">
                        </div>
                        {{-- @error('oldpassword')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror --}}
                        <div class="from-group">
                            <label>New Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter New Password">
                        </div>
                        {{-- @error('password')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror --}}
                        <div class="from-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Enter Confirm password">
                        </div>
                        <br/>
                        {{-- @error('password_confirmation')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror --}}
                        <div class="from-group">
                            <button type="submit" class="btn btn-danger" > Update Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
