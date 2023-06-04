<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Category;
use App\Models\Location;
use App\Models\Status;
use Carbon\Carbon;
use App\Models\DealsTime;
use App\Models\MultiImg;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
class ProjectController extends Controller
{
    // project Add
    public function ProjectAdd(){
        $category = Category::latest()->get();
        $location = Location::latest()->get();
        $status = Status::latest()->get();
        return view('backend.project.view', compact('category','location','status'));
        } // end mathod
// product store
public function ProjectStore(Request $request){
    // dd($request);
    // validation product
    $request->validate([
        'project_name' => 'required|max:255|regex:/^[A-Za-z_][A-Za-z\d_]*$/',
        'status_id' => 'required',
        'category_id' => 'required',
        'location_id' => 'required',
       'project_short_descp' =>'required',
        'project_long_descp' => 'required',
        'project_thambnail' => 'required|mimes:jpg,jpeg,png,webp',
    ],[
        'project_name.regex'=>"NOT a valid Product name"
    ]);
    // img upload and save and img intervations packge use
    $image = $request->file('project_thambnail');
    $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    Image::make($image)->resize(917,1000)->save('upload/projects/thambnail/'.$name_gen);
    $save_url = 'upload/projects/thambnail/'.$name_gen;
        $project_id =   Project::insertGetId([
            'status_id' => $request->status_id,
            'category_id' => $request->category_id,
            'location_id' => $request->location_id,
            'project_name' => $request->project_name,
            'project_short_descp' => $request->project_short_descp,
            'project_long_descp' => $request->project_long_descp,
            'project_thambnail' => $request->project_thambnail,
            'residential' => $request->residential,
            'commercial' => $request->commercial,
            'project_thambnail' => $save_url,
            'created_at' => Carbon::now(),
        ]);
        // Multiple img upload start
        $images = $request->file('multi_img');
        foreach ($images as $img){
            $make_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            Image::make($img)->resize(917,1000)->save('upload/projects/multi_image/'.$make_name);
            $uploadPath = 'upload/projects/multi_image/'.$make_name;
            MultiImg::insert([
                'project_id' => $project_id,
                'photo_name' => $uploadPath,
                'created_at' => Carbon::now(),
            ]);
        } // end loop
    // Multiple img end
    $notification = array(
        'message' => 'Project Add Successfully',
        'alert-type' => 'success'
    );
    if($request->commercial||$request->residential)
    {
        $deals = new DealsTime();
        $deals->project_id = $project_id;
        $deals->save();
    }
    return redirect()->route('manage-project')->with($notification);
    } // end mathod
    public function ManageProject(){
        $project = Project::latest()->get();
        return view('backend/project/project_view', compact('project'));
    } // end mathod

}
