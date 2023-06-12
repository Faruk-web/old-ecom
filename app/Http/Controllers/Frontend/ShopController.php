<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use App\Models\User;
use App\Models\Category;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Project;
use App\Models\MultiImg;
use App\Models\Brand;
use App\Models\Banner;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
use App\Models\Comment;
use PDF;
class ShopController extends Controller
{
    public function ShopPage(){
        $products = Product::where('status',1)->orderBy('id','DESC');
        $categories = Category::orderBy('category_name','ASC')->get();
        return view('frontend.shop.shop_page',compact('products','categories'));
    } // end Method
     // search_member
     public function search_amfl_project(Request $request) {
        $output = '';
        $material_info = $request->material_info;
          $materials = Project::where(function ($query) use ($material_info) {
                                $query->where('project_name', 'LIKE', '%'. $material_info. '%');
                            })
                            ->limit(10)
                            ->get(['project_name', 'id']);
          if(!empty($material_info)) {
              if(count($materials) > 0) {
                foreach ($materials as $member) {
                    $output.='<div class="col-md-12 p-1">
                                <div class="shadow row rounded border">
                                    <div class="col-md-12 p-2">
                                        <h5 class="m-0 text-white">'.$member->project_name.'</h5>
                                        <a type="button" href="'.route('user.project.details', $member->id).'" onclick="setMember('.$member->id.', \''.$member->project_name.'\')" class=" btn btn-warning btn-sm btn-block btn-rounded">Select</a>
                                    </div>
                                </div>
                            </div>';
                    }
              }
              else {
                $output.='<div colspan="6" class="text-center"><h2>No Result Found</h2></div>';
            }
        }
        return Response($output);
    }
    public function generatePDF($id)
    {
        $data = Project::find($id);
        $pdf = PDF::loadView('myPDF', compact('data'))->setOptions(['defaultFont' => 'arial']);
        // $data = ['title' => 'Welcome to AMFL'];
        // $pdf = PDF::loadView('myPDF', $data);
        return $pdf->download('AMFL.pdf');
    }
    public function BlogComment(Request $request)
    {
        // dd($request);
        $validated = $request->validate([
            'name' => 'required|max:30',
            'email' => 'required',
            'comment' => 'required|max:255',
            ]);
            if($validated)
            {
                // Mail::to('pabonsub@gmail.com')->send(new ContactUsMail($request));
                // return 'Email Sent';
                $contact  = new Comment();
                $contact->blog_id = $request->blog_id;
                $contact->name = $request->name;
                $contact->email = $request->email;
                $contact->comment = $request->comment;
                $contact->save();
                $notification = array(
                'message' =>  'We will response you very soon, Thank you',
                'alert-type' => 'success'
            );
                return redirect()->back()->with($notification);

            }
       }
}
