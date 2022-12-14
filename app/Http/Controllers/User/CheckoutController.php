<?php
namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ShipDivision;
use App\Models\ShipDistrict;
use App\Models\ShipState;

// for payment getway
use Gloudemans\Shoppingcart\Facades\Cart;

class CheckoutController extends Controller
{
    //  District selected
    public function DistrictGetAjax($division_id){

    	$ship = ShipDistrict::where('division_id',$division_id)->orderBy('district_name','ASC')->get();
    	return json_encode($ship);

    } // end method


    // state selected
     public function StateGetAjax($district_id){

    	$ship = ShipState::where('district_id',$district_id)->orderBy('state_name','ASC')->get();
    	return json_encode($ship);

    } // end method


    // checkout store route
    public function CheckoutStore(Request $request){

       //dd($request->all());
        $data = array();
        $data['shipping_name'] = $request->shipping_name;
        $data['shipping_email'] = $request->shipping_email;
        $data['shipping_phone'] = $request->shipping_phone;
        $data['post_code'] = $request->post_code;
        $data['division_id'] = $request->cdivision_id;
        $data['district_id'] = $request->cdistrict_id;
        $data['state_id'] = $request->cstate_id;
        $data['notes'] = $request->notes;

        //dd($data);

        // for mayment gateway use
        $cartTotal = Cart::total();


        $test =Cart::content();

//dd($test);

        if ($request->payment_method == 'stripe') {
            return view('frontend.payment.stripe',compact('data', 'cartTotal'));

        }elseif ($request->payment_method == 'card') {
            return 'card';
        }else{
            return view('frontend.payment.cash',compact('data', 'cartTotal'));
        }


    } // end mathod


} // main end
