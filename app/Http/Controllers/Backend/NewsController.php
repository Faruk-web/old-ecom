<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
class NewsController extends Controller
{
    //news add
    public function NewsAdd(){
        return view('backend.news.view');
    }
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
}
