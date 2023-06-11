<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BoardDirector;
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
}
