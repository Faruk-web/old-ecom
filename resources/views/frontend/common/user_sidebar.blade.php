
@php
$id = (Auth::check()) ? (Auth::user()->id): false ;


($id)? $user = App\Models\User::find($id) : ($user=null);
@endphp

<div class="user-info">
    <div class="user-photo">
        <img class="cart-img-top" style="border-radius:50%" src="{{ (!empty($user->profile_photo_path))?url('upload/users_images/'
        .$user->profile_photo_path):url('upload/avatar-1.png') }}" alt="User Avatar" height="150px" weight="150px">
    </div>
    <div class="user-menu">
        <ul>
            <li class=" bg-success">
                <a href="{{ url('dashboard') }}">My Account</a>
            </li>
            <li class=" bg-success">
                <a href="{{ route('user.profile') }}">Profile Update</a>
            </li>
            <li class=" bg-secondary">
                <a href="{{ route('my.orders') }}">My Order</a>
            </li>
            <li class=" bg-warning">
                <a href="{{ route('cancel.orders') }}">Cancel Order</a>
            </li>
            <li class=" bg-warning">
                <a href="{{ route('return.order.list') }}">Return Order</a>
            </li>
            <li class=" bg-secondary">
                <a href="{{ route('wishlist') }}">My Whishlist</a>
            </li>
            <li class="bg-success">
                <a href="{{ route('mycart') }}">Checkout</a>
            </li>

            <li class=" bg-secondary">

                <a href="" type="button" data-toggle="modal" data-target="#ordertraking">Order tracking</a>
            </li>

            <li class=" bg-danger ">
                <a href="{{ route('change.password') }}">Change Password</a>
            </li>
            <li class=" bg-secondary">
                <a href="{{ route('user.logout')}}">Log Out</a>
            </li>
        </ul>
    </div>
</div>




<!-- Order Traking Modal -->
<div class="modal fade" id="ordertraking" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Track Your Order </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <form method="post" action="{{ route('order.tracking') }}">
            @csrf
           <div class="modal-body">
            <label>Invoice Code</label>
            <input type="text" name="code" required="" class="form-control" placeholder="Your Order Invoice Number">
           </div>

           <button class="btn btn-danger" type="submit" style="margin-left: 17px;"> Track Now </button>

          </form>
        </div>

      </div>
    </div>
  </div>
