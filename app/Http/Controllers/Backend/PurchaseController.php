<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Purchase;
use App\Models\Supplier;
use App\Models\Product;

class PurchaseController extends Controller
{
   
public function PurchaseView(){
     
    $purchases =Purchase::all();
   
    return view('backend.purchase.view_purchase',compact('purchases'));
}

   public function AddPurchase(){
    $suppliers = Supplier::all();
    $product = Product::all();
    return view('backend.purchase.add_purchase',compact('suppliers','product'));
}
   // Purchase Add
   public function PurchaseStore(Request $request){
    //  dd($request->employee_photo);
    
// return $request;
     $request->validate([
      'supplier_id' => 'required',
      'product_name' => 'required',
      'product_qty' => 'required',
      'total_amount' => 'required',
      'paid_amount' => "required",
      'purchase_date' => 'required',
      'purchase_create_by' => 'required',
      'purchase_note' => 'required',

     ]);

     

    Purchase::insert([

      'supplier_id' => $request->supplier_id,
      'product_id' => $request->product_name,
      'product_qty' => $request->product_qty,
      'total_amount' => $request->total_amount,
      'paid_amount' =>$request->paid_amount,
      'due_amount' => $request->due_amount,
      'purchase_date' => $request->purchase_date,
      'purchase_create_by' => $request->purchase_create_by,
      'purchase_note' => $request->purchase_note,
          ]);
  
  
          $notification = array(
              'message' =>'Employee Create sucessfully',
              'alert-type' =>'success'
          );
  
          return redirect()->route('purchase.view')->with($notification);

  }// end method 

 // Purchase Edit
 public function PurchaseEdit($id){

    $purchase = Purchase::find($id); 
    $suppliers = Supplier::all();
    $product = Product::all();
    return view('backend.purchase.edit_purchase',compact('purchase','suppliers','product'));

} // end mathod
 // update Purchase
 public function PurchaseUpdate(Request $request){
    
    $purchase = $request->id;
   
        Purchase::findOrFail($purchase)->update([
            'supplier_id' => $request->supplier_id,
            'product_id' => $request->product_name,
            'product_qty' => $request->product_qty,
            'total_amount' => $request->total_amount,
            'paid_amount' =>$request->paid_amount,
            'due_amount' => $request->due_amount,
            'purchase_date' => $request->purchase_date,
            'purchase_create_by' => $request->purchase_create_by,
            'purchase_note' => $request->purchase_note,
 
           ]);
 
           $notification = array(
             'message' =>  'Purchase Update Sucessyfuly',
             'alert-type' => 'info'
         ); 
 
         return redirect()->route('purchase.view')->with($notification);
 
} // method end  

 // Purchase All  view
 public function PurchaseDetails($id){
   
    $purchase = Purchase::find($id); 
  

    return view('backend.purchase.purchase_details',compact('purchase'));

} // end mathod  
//Purchase Delete

  public function PurchaseDelete($id){

   
    Purchase::findOrFail($id)->delete();
    
    $notification = array(
    'message' =>  'Employee Delete Sucessyfully',
    'alert-type' => 'info'
  ); 
  
  return redirect()->back()->with($notification);
  
  }

  public function qty($id){
    
    $qty = Product::where('id',$id)->get();
    
             
    return response()->json($qty);

  }
}
