<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\ContactUs;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
class NewsController extends Controller
{
    //news add
    public function NewsAdd(){
        return view('backend.news.view');
    }
    // contact client
    public function ContactClient(){
        $contacts = ContactUs::get();
        return view('backend.news.contact_client',compact('contacts'));
    }
    public function ContactDelete($id){
        ContactUs::findOrFail($id)->delete();
        $notification = array(
          'message' =>  'Contact History Delete Sucessyfully',
          'alert-type' => 'success'
      );
      return redirect()->back()->with($notification);
      } // end mathod
    //NewsStore
    public function NewsStore(Request $request){
        // dd($request);
        // validation product
        $request->validate([
            'news_name' => 'required|max:255',
            'news_short_descp' =>'required',
            'news_image' => 'required',
        ],[
            'news_name'=>"NOT a valid Product name"
        ]);
        // img upload and save and img intervations packge use
        $image = $request->file('news_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(400,400)->save('upload/news/'.$name_gen);
        $save_url = 'upload/news/'.$name_gen;
            $product_id = News::insertGetId([
                'news_name' => $request->news_name,
                'news_short_descp' => $request->news_short_descp,
                'news_image' => $request->news_image,
                'news_long_descp' => $request->news_long_descp,
                'news_image' => $save_url,
                'date' => $request->date,
                'created_at' => Carbon::now(),
            ]);
            $notification = array(
                'message' => 'News Add Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('manage_news')->with($notification);
         } // end mathod
         // mange blog
         public function ManageNews(){
            $news =News::latest()->get();
             return view('backend.news.news_view', compact('news'));
     }
        //edit
        public function EditNews($id){
            $news =News::find($id);
            return view('backend.news.news_edit',compact('news'));
    }
    // News Update
 public function UpdateNews( Request $request){
    // dd($request);
    $blog_id = $request->id;
    $old_img = $request->old_img;
    if ( $request->file('news_image')) {
        if (file_exists($old_img)){
            unlink($old_img);
        }
        // unlink($old_img);
        $image = $request->file('news_image');
    $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    Image::make($image)->resize(400,400)->save('upload/director/'.$name_gen );
    $save_url = 'upload/director/'.$name_gen;
    News::findOrFail($blog_id)->update([
        'news_name' => $request->news_name,
        'news_short_descp' => $request->news_short_descp,
        'news_long_descp' => $request->news_long_descp,
        'news_image' => $save_url,
    ]);
    $notification = array(
        'message' =>'News update sucessfully',
        'alert-type' =>'success'
    );
        return redirect()->route('manage_news')->with($notification);
        }else{
            News::findOrFail($blog_id)->update([
                'news_name' => $request->news_name,
                'news_short_descp' => $request->news_short_descp,
                'news_long_descp' => $request->news_long_descp,
        ]);
            $notification = array(
            'message' =>'News update sucessfully',
            'alert-type' =>'info'
        );
        return redirect()->back()->with($notification);
        }
     }  // end mathod
      // Blog Delete
      public function DeleteNews($id){
        $news = News::findOrFail($id);
        $img = $news->news_image;
        if (file_exists($img)){
            unlink($img);
        }
        News::findOrFail($id)->delete();
        $notification = array(
    'message' =>'News Delete sucessfully',
    'alert-type' =>'info'
);
    return redirect()->back()->with($notification);
    } // end mathod
}
