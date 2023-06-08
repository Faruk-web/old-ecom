<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
class BlogController extends Controller
{
    // blog add
    public function BlogAdd(){
        return view('backend.blog.view');
    }
    //blog store
    public function BlogStore(Request $request){
        // dd($request);
        // validation product
        $request->validate([
            'blog_name' => 'required|max:255',
            'blog_short_descp' =>'required',
            'blog_image' => 'required',
        ],[
            'blog_name'=>"NOT a valid Product name"
        ]);
        // img upload and save and img intervations packge use
        $image = $request->file('blog_image');
        $name_gen_blog = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(700,700)->save('upload/blog/'.$name_gen_blog);
        $save_url_blog = 'upload/blog/'.$name_gen_blog;
          // img upload and save
          $image = $request->file('blog_sub_image');
          $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
          Image::make($image)->resize(300,300)->save('upload/blog/'.$name_gen);
          $save_url_sub_blog = 'upload/blog/'.$name_gen;

            $product_id =   Blog::insertGetId([
                'blog_name' => $request->blog_name,
                'blog_short_descp' => $request->blog_short_descp,
                'blog_long_descp' => $request->blog_long_descp,
                'blog_image' => $request->blog_image,
                'blog_image' => $save_url_blog,
                'blog_sub_image' => $request->blog_sub_image,
                'blog_sub_image' => $save_url_sub_blog,
                'date' => $request->date,
                'created_at' => Carbon::now(),
            ]);
            $notification = array(
                'message' => 'Blog Add Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('manage_blog')->with($notification);
         } // end mathod
         // mange blog
         public function ManageBlog(){
            $blog = Blog::latest()->get();
             return view('backend.blog.blog_view', compact('blog'));
     }
}
