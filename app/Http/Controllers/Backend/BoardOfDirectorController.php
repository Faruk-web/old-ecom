<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BoardDirector;
use App\Models\Leading;
use App\Models\News;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
class BoardOfDirectorController extends Controller
{
    //DirectorAdd
    public function DirectorAdd(){
        return view('backend.director.view');
    }
    //NewsStore
    public function DirectorStore(Request $request){
        // dd($request);
        // validation product
        $request->validate([
            'director_name' => 'required|max:255',
            'director_short_descp' =>'required',
            'director_image' => 'required',
        ],[
            'director_name'=>"NOT a valid Product name"
        ]);
        // img upload and save and img intervations packge use
        $image = $request->file('director_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(400,400)->save('upload/director/'.$name_gen);
        $save_url = 'upload/director/'.$name_gen;
            $product_id = BoardDirector::insertGetId([
                'director_name' => $request->director_name,
                'director_short_descp' => $request->director_short_descp,
                'director_image' => $request->director_image,
                'director_image' => $save_url,
                'director_designation' => $request->director_designation,
                'created_at' => Carbon::now(),
            ]);
            $notification = array(
                'message' => 'Director Add Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('manage_director')->with($notification);
        } // end mathod
        // mange blog
        public function ManageDirector(){
            $BoardDirectors =BoardDirector::latest()->get();
            return view('backend.director.director_view', compact('BoardDirectors'));
    }
    //edit
    public function EditDirector($id){
           $directors =BoardDirector::find($id);
           return view('backend.director.director_edit',compact('directors'));
    }
      // Banner Update
      public function UpdateDirector( Request $request){
        $director_id = $request->id;
        $old_img = $request->old_img;
        if ( $request->file('director_image')) {
            if (file_exists($old_img)){
                unlink($old_img);
            }
            // unlink($old_img);
            $image = $request->file('director_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(400,400)->save('upload/director/'.$name_gen );
        $save_url = 'upload/director/'.$name_gen;
        BoardDirector::findOrFail($director_id)->update([
            'director_name' => $request->director_name,
            'director_designation' => $request->director_designation,
            'director_short_descp' => $request->director_short_descp,
            'director_image' => $save_url,
        ]);
        $notification = array(
            'message' =>'Director update sucessfully',
            'alert-type' =>'success'
        );
            return redirect()->route('manage_director')->with($notification);
            }else{
                BoardDirector::findOrFail($director_id)->update([
                'director_name' => $request->director_name,
                'director_designation' => $request->director_designation,
                'director_short_descp' => $request->director_short_descp,
                'description' => $request->description,
            ]);
                $notification = array(
                'message' =>'Director update sucessfully',
                'alert-type' =>'info'
            );
            return redirect()->back()->with($notification);
            }
         }  // end mathod
         // director Delete
         public function deleteDirector($id){
            $director = BoardDirector::findOrFail($id);
            $img = $director->director_image;
            if (file_exists($img)){
                unlink($img);
            }
            // unlink($img);
            BoardDirector::findOrFail($id)->delete();

            $notification = array(
        'message' =>'Director Delete sucessfully',
        'alert-type' =>'info'
    );
return redirect()->back()->with($notification);
} // end mathod

          //DirectorAdd
     public function LeadingAdd(){
        return view('backend.leading.view');
    }
    //NewsStore
    public function LeadingStore(Request $request){
        // dd($request);
        // validation product
        $request->validate([
            'title' => 'required|max:255',
        ],[
            'title'=>"NOT a valid Product name"
        ]);
        // unlink($old_img);
        $image = $request->file('leading_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(700,700)->save('upload/director/'.$name_gen );
        $save_url = 'upload/director/'.$name_gen;
            $product_id = Leading::insertGetId([
                'title' => $request->title,
                'icon' => $request->icon,
                'short_description' => $request->short_description,
                'log_short_description' => $request->log_short_description,
                'leading_image' => $save_url,
            ]);
            $notification = array(
                'message' => 'Leading Add Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('manage_leading')->with($notification);
        } // end mathod
          // mange blog
          public function ManageLeading(){
            $leadings =Leading::latest()->get();
            return view('backend.leading.leading_view', compact('leadings'));
         }
         //edit
    public function EditLeading($id){
        $leading =Leading::find($id);
        return view('backend.leading.leading_edit',compact('leading'));
 }
  // Banner Update
  public function UpdateLeading( Request $request){
    $leading_id = $request->id;
    $old_img = $request->old_img;
    if ( $request->file('leading_image')) {
        if (file_exists($old_img)){
            unlink($old_img);
        }
        // unlink($old_img);
        $image = $request->file('leading_image');
    $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    Image::make($image)->resize(700,700)->save('upload/director/'.$name_gen );
    $save_url = 'upload/director/'.$name_gen;
    Leading::findOrFail($leading_id)->update([
        'title' => $request->title,
        'icon' => $request->icon,
        'short_description' => $request->short_description,
        'log_short_description' => $request->log_short_description,
        'leading_image' => $save_url,
    ]);
    $notification = array(
        'message' =>'Leading update sucessfully',
        'alert-type' =>'success'
    );
        return redirect()->route('manage_leading')->with($notification);
        }else{
            Leading::findOrFail($leading_id)->update([
                'title' => $request->title,
                'icon' => $request->icon,
                'short_description' => $request->short_description,
                'log_short_description' => $request->log_short_description,
        ]);
            $notification = array(
            'message' =>'Leading update sucessfully',
            'alert-type' =>'info'
        );
        return redirect()->route('manage_leading')->with($notification);
        }
     }  // end mathod
      // director Delete
      public function deleteLeading($id){
        $leadnig = Leading::findOrFail($id);
        $img = $leadnig->leading_image;
        if (file_exists($img)){
            unlink($img);
        }
        // unlink($img);
        Leading::findOrFail($id)->delete();
        $notification = array(
    'message' =>'Leading Delete sucessfully',
    'alert-type' =>'info'
);
return redirect()->back()->with($notification);
} // end mathod
}
