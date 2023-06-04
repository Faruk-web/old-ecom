<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\Status;
class LocationController extends Controller
{
    //location view
    public function LocationView(){
        $location = Location::latest()->get();
        return view('backend.location.view',compact('location'));
    }
       // store location
  public function LocationStore(Request $request){
// dd($request->location_name);
    // validation
        $request->validate([
            'location_name' => 'required|required|regex:/[a-zA-Z ]*/',
          ],[
            'location_name.required' => 'Input The Location Name',
          ]);
        // location Insert
          Location::insert([
           'location_name' => $request->location_name,
           'location_icon' => $request->location_icon,

          ]);
          $notification = array(
            'message' =>  'Location Add Sucessyfuly',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
  } // end method
  public function locationDelete($id){

    Location::findOrFail($id)->delete();
    $notification = array(
      'message' =>  'Location Delete Sucessyfully',
      'alert-type' => 'success'
  );
  return redirect()->back()->with($notification);
  } // end mathod

    //status view
    public function StatusView(){
        $status = Status::latest()->get();
        return view('backend.location.status_view',compact('status'));
    }
        // store status
  public function StatusStore(Request $request){
    // dd($request->location_name);
        // validation
            $request->validate([
                'status_name' => 'required|required|regex:/[a-zA-Z ]*/',
              ],[
                'status_name.required' => 'Input The Status Name',
              ]);
            // location Insert
            Status::insert([
               'status_name' => $request->status_name,
              ]);
              $notification = array(
                'message' =>  'Status Add Sucessyfuly',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
      } // end method
      public function StatusDelete($id){

        Status::findOrFail($id)->delete();
        $notification = array(
          'message' =>  'Status Delete Sucessyfully',
          'alert-type' => 'success'
      );
      return redirect()->back()->with($notification);
      } // end mathod

}
