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
          Image::make($image)->resize(400,400)->save('upload/blog/'.$name_gen);
          $save_url_sub_blog = 'upload/blog/'.$name_gen;

            $product_id =   Blog::insertGetId([
                'blog_name' => $request->blog_name,
                'blog_short_descp' => $request->blog_short_descp,
                'blog_long_descp' => $request->blog_long_descp,
                'blog_image' => $request->blog_image,
                'blog_image' => $save_url_blog,
                'video_link' => $video_link,
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
     //edit
    public function EditBlog($id){
        $blogs =Blog::find($id);
        return view('backend.blog.blog_edit',compact('blogs'));
 }
 // blog Update
 public function UpdateBlog( Request $request){
    // dd($request);
    $blog_id = $request->id;
    $old_img = $request->old_img;
    $old_sub_image = $request->old_sub_image;
    if ( $request->file('blog_image')) {
        if (file_exists($old_img)){
            unlink($old_img);
        }
        // unlink($old_img);
        $image = $request->file('blog_image');
    $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    Image::make($image)->resize(700,700)->save('upload/director/'.$name_gen );
    $save_url = 'upload/director/'.$name_gen;
    // unlink($old_img);
    if (file_exists($old_sub_image)){
        unlink($old_sub_image);
    }
    $image = $request->file('blog_sub_image');
    $name_gen_sub = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    Image::make($image)->resize(400,400)->save('upload/director/'.$name_gen_sub );
    $save_url_sub = 'upload/director/'.$name_gen_sub;

    Blog::findOrFail($blog_id)->update([
        'blog_name' => $request->blog_name,
        'blog_short_descp' => $request->blog_short_descp,
        'blog_long_descp' => $request->blog_long_descp,
        'blog_image' => $save_url,
        'blog_sub_image' => $save_url_sub,
        'video_link' => $request->video_link,
    ]);
    $notification = array(
        'message' =>'Blog update sucessfully',
        'alert-type' =>'success'
    );
        return redirect()->route('manage_blog')->with($notification);
        }else{
            Blog::findOrFail($blog_id)->update([
                'blog_name' => $request->blog_name,
                'blog_short_descp' => $request->blog_short_descp,
                'blog_long_descp' => $request->blog_long_descp,
                'video_link' => $request->video_link,
        ]);
            $notification = array(
            'message' =>'Blog update sucessfully',
            'alert-type' =>'info'
        );
        return redirect()->back()->with($notification);
        }
     }  // end mathod
     // News Delete
     public function DeleteBlog($id){
        $blog = Blog::findOrFail($id);
        $img = $blog->blog_image;
        $img_sub = $blog->blog_sub_image;
        if (file_exists($img)){
            unlink($img);
        }
        if (file_exists($img_sub)){
            unlink($img_sub);
        }
        // unlink($img);
        Blog::findOrFail($id)->delete();
        $notification = array(
    'message' =>'Blog Delete sucessfully',
    'alert-type' =>'info'
);
    return redirect()->back()->with($notification);
    } // end mathod
}
