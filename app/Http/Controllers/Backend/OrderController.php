<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Asset;
use Auth;
use Carbon\Carbon;
use PDF;
use App\Models\Product;
use DB;



class OrderController extends Controller
{
    // Pending order
    public function PendingOrder(){
        // $orders = Order::where('status', 'Pending')->orderBy('id', 'DESC')->get();
        $orders = Order::where('status', 'Pending')->latest()->get();



        return view('backend.orders.pending_orders', compact('orders'));
    }// end mathod


    // pending orders details
    public function PendingOrdersDetails($order_id){

        $order = Order::with('division','district','state','user')->where('id',$order_id)->first();

    	$orderItem = OrderItem::with('product')->where('order_id',$order_id)->orderBy('id','DESC')->get();
        //dd($orderItem );
    	return view('backend.orders.pending_orders_details',compact('order','orderItem'));

    } // end mathod




	// Confirmed Orders
	public function ConfirmedOrders(){
		$orders = Order::where('status','confirm')->orderBy('id','DESC')->get();
		return view('backend.orders.confirmed_orders',compact('orders'));

	} // end mehtod


	// Processing Orders
	public function ProcessingOrders(){
		$orders = Order::where('status','processing')->orderBy('id','DESC')->get();
		return view('backend.orders.processing_orders',compact('orders'));

	} // end mehtod


		// Picked Orders
	public function PickedOrders(){
		$orders = Order::where('status','picked')->orderBy('id','DESC')->get();
		return view('backend.orders.picked_orders',compact('orders'));

	} // end mehtod



			// Shipped Orders
	public function ShippedOrders(){
		$orders = Order::where('status','shipped')->orderBy('id','DESC')->get();
		return view('backend.orders.shipped_orders',compact('orders'));

	} // end mehtod


			// Delivered Orders
	public function DeliveredOrders(){
		$orders = Order::where('status','delivered')->orderBy('id','DESC')->get();
		return view('backend.orders.delivered_orders',compact('orders'));

	} // end mehtod


				// Cancel Orders
	public function CancelOrders(){
		$orders = Order::where('status','cancel')->orderBy('id','DESC')->get();
		return view('backend.orders.cancel_orders',compact('orders'));

	} // end mehtod



		// Pending order update
		public function PendingToConfirm($order_id){

			Order::findOrFail($order_id)->update(['status' => 'confirm']);

			$notification = array(
				'message' => 'Order Confirm Successfully',
				'alert-type' => 'success'
			);

			return redirect()->route('pending.orders')->with($notification);


		} // end method


    public function ConfirmToProcessing($order_id){

      Order::findOrFail($order_id)->update(['status' => 'processing']);

      $notification = array(
			'message' => 'Order Processing Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('confirmed-orders')->with($notification);


	} // end method


		//   // Picked Update
	public function ProcessingToPicked($order_id){
		Order::findOrFail($order_id)->update(['status' => 'picked']);
        $notification = array(
            'message' => 'Order Picked Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('confirm-processing')->with($notification);
	} // end method



		//   // Shipped Update
	public function PickedToShipped($order_id){

			Order::findOrFail($order_id)->update(['status' => 'shipped']);

			$notification = array(
				  'message' => 'Order Shipped Successfully',
				  'alert-type' => 'success'
			  );

			  return redirect()->route('picked-orders')->with($notification);


		  } // end method


		//   // Delivered update
	public function ShippedToDelivered_20($order_id){

			$product = OrderItem::where('order_id',$order_id)->get();

			foreach ($product as $item) {
				Product::where('id',$item->product_id)
						->update(['product_qty' => DB::raw('product_qty-'.$item->qty)]);
			}
			Order::findOrFail($order_id)->update(['status' => 'delivered']);
            $totalsale=Order::where('id',$order_id)->where('status','=', 'delivered')->pluck('amount');
            $asset=Asset::find(1);
            $devit  = $asset->credit;
            $devit        += (float) $totalsale[0];
            $asset->credit = $devit;
            //    dd($asset);
               $asset->save();




			$notification = array(
				  'message' => 'Order Delivered Successfully',
				  'alert-type' => 'success'
			  );

			  return redirect()->route('shipped-orders')->with($notification);


		  } // end method



		  //   // Delivered update
		  public function DeliveredToCancel($order_id){

			Order::findOrFail($order_id)->update(['status' => 'Cancel']);

            //order cancel

             $totalcancel=Order::where('id',$order_id)->where('status','=', 'delivered')->pluck('amount');

             Order::findOrFail($order_id)->update(['status' => 'delivered']);
            $totalsale=Order::where('id',$order_id)->where('status','=', 'delivered')->pluck('amount');
            $asset=Asset::find(1);
            $devit  = $asset->debit;
            $devit  += (float) $totalsale[0];
            $asset->debit = $devit;
            //    dd($asset);
               $asset->save();
			$notification = array(
				  'message' => 'Order Cancel Successfully',
				  'alert-type' => 'success'
			  );

			  return redirect()->route('shipped-orders')->with($notification);


		  } // end method

		// public function ShippedToDelivered($order_id){

		// 	$product = OrderItem::where('order_id',$order_id)->get();
		// 	foreach ($product as $item) {
		// 		Product::where('id',$item->product_id)
		// 				->update(['product_qty' => DB::raw('product_qty-'.$item->qty)]);
		// 	}
		// }

			// Order invoice Download
		public function AdminInvoiceDownload($order_id){

			$order = Order::with('division','district','state','user')->where('id',$order_id)->first();
			$orderItem = OrderItem::with('product')->where('order_id',$order_id)->orderBy('id','DESC')->get();

			$pdf = PDF::loadView('backend.orders.order_invoice',compact('order','orderItem'))->setPaper('a4')->setOptions([
					'tempDir' => public_path(),
					'chroot' => public_path(),
			]);
			return $pdf->download('invoice.pdf');

		} // end method


} // main end
