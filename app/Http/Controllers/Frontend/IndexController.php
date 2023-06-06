<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\ContactUsMail;
use App\Mail\OrderMail;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Project;
use App\Models\MultiImg;
use App\Models\Brand;
use App\Models\Banner;
use App\Models\ContactUs;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
use App\Models\Subscriber;
use App\Models\review;
use App\Models\BannerCatagory;
use Illuminate\Support\Carbon;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;

class IndexController extends Controller
{

  // Frontend Index show
   public function index(){
//Amfl
$products = Project::orderBy('id', 'DESC')->limit(4)->get();
     // for  special_deals
  $special_deals = Product::where('special_deals', 1)->orderBy('id', 'DESC')->limit(6)->get();
  // for  Spacial Offer
  $special_offers = Product::where('special_offer', 1)->orderBy('id', 'DESC')->limit(6)->get();
  // for  hot_deals
  $hot_deals = Product::where('hot_deals', 1)->where('discount_price','!=',NULL)->orderBy('id', 'DESC')->limit(6)->get();
    // for featured
$featureds = Product::where('featured', 1)->orderBy('id', 'DESC')->limit(6)->get();
    // most popular
    $most_popular_all=Product::where('status',1)->orderBy('product_views','DESC')->limit(10)->get();
    // for product
    $products = Product::where('status', 1)->orderBy('id', 'DESC')->limit(8)->get();
    // end product
    // for new product
    $newTwoproducts = Product::where('status', 1)->orderBy('id', 'DESC')->limit(2)->get();
    // end new product
    // for slider
    $sliders = Slider::where('status', 1)->orderBy('id', 'DESC')->limit(10)->get();
    // end slider
$categories = Category::all();
    // home page banner-category
    $bannerCatagory = BannerCatagory::where('status',1)->orderBy('id','DESC')->first();
    $bennars = Banner::where('status',1)->orderBy('id','DESC')->limit(3)->get();
    $todayDate = Carbon::now();
    $dailyBestSales =  DB::table('order_items')
    ->select('product_id', DB::raw('count(*) as total'))
    ->groupBy('product_id')
    ->limit(4)
    ->orderBy('total','DESC')
    ->get();
        $deliverdProducts =  OrderItem::select('product_id')->groupBy('product_id')
        ->join('orders', 'order_items.order_id', '=', 'orders.id')
        ->join('products', 'products.id', '=', 'order_items.product_id')
        ->where('orders.status','delivered')
        ->get(['products.*']);
        $top_rated = DB::table('reviews')
        ->select('products.*','brands.brand_name_cats_eye')
        ->join('products', 'product_id','products.id')
        ->join('brands', 'products.brand_id','brands.id')
        ->distinct('product_id')
        ->where('star', '>', 3)
        ->limit(8)
        ->get();
        $onsale=Order::select('products.*','brands.brand_name_cats_eye')->where('orders.created_at', '>',Carbon::now()->subHours(12)->toDateTimeString() )
        ->where('orders.status','=','delivered')
        ->join('order_items', 'order_items.order_id', '=', 'orders.id')
        ->join('products', 'products.id', '=', 'order_items.product_id')
        ->join('brands', 'brands.id', '=', 'products.brand_id')
        ->limit(8)
        ->get();
      $latest_products=Product::orderBy('id','DESC')->limit(3)->get();
       return view('frontend.index',
        compact('categories','sliders', 'products','featureds','hot_deals', 'special_offers','special_deals','bannerCatagory','latest_products',
         'bennars','top_rated','newTwoproducts','dailyBestSales','deliverdProducts','most_popular_all','onsale'));

   }
  // user logout
   public function UserLogout(){
    Auth::logout();
    return redirect()->route('login');
}
  // user Profile Update
  public function UserProfile(){
    // what is id = specify  user and use find id
      $id = Auth::user()->id;
      $user = User::find($id);

      return view('frontend.profile.user_profile', compact('user'));
  }
      // User Profile Store
      public function UserProfileStore(Request $request){
        // Auth login user id is find
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required|numeric',
            'profile_photo_path' => 'required',
          ]);
        $data = User::find(Auth::user()->id);
                $data->name = $request->name;
                $data->email = $request->email;
                $data->phone = $request->phone;
                if ($request->file('profile_photo_path')) {
                    $file = $request->file('profile_photo_path');
                    @unlink (public_path('upload/users_images/'.$data->profile_photo_path));

                    $filename = date('YmdHi').$file->getClientOriginalName();
                    $file->move(public_path('upload/users_images'),$filename);
                    $data['profile_photo_path'] = $filename;
                }
                $data->save();

                $notification = array(
                    'message' =>  'Your Profie Update Sucessyfuly',
                    'alert-type' => 'success'
                );
                return redirect()->route('dashboard')->with($notification);
      }
          // user password change
          public function UserChnagePassword(){
            $id = Auth::user()->id;
            $user = User::find($id);
              return view('frontend.profile.change_password', compact('user'));
          }
          // User Update Password
          public function UserPasswordUpdate(Request $request){

            $validateData = $request->validate([
              'oldpassword' => 'required|min:6|max:12',
              'password' => 'required|min:6|max:12confirmed',
            ]);
          $hashedPassword = Auth::user()->password;
          if (Hash::check($request->oldpassword,$hashedPassword)) {
          $user = User::find(Auth::id());
          $user->password = Hash::make($request->password);
          $user->save();

          $notification = array(
            'message' =>  'Your Passowrd Update Sucessyfuly',
            'alert-type' => 'success',
        );
          //Auth::logout();
          return redirect()->route('user.password.update')->with($notification);

          }else{

          $notification = array(
            'message' =>  'New Password did not matched',
            'alert-type' => 'warning',
        );
              return redirect()->route('user.password.update')->with($notification);
           }

          }  // end mahod
       // product_detalis
       public function ProductDetails($id){
         // for multi img show
         $product = Product::findOrFail($id);
         Product::find($id)->increment('product_views');
          $product_color = $product->product_color;
          $product_color_all = explode (',',$product_color);
          // for color and size
          $product_size = $product->product_size;
          $product_size_all = explode (',',$product_size);
           // for related product show
          $cat_id = $product->category_id;
          $relatedProduct = Product::where('category_id',$cat_id)->where('id','!=',$id)->orderBy('id','DESC')->get();
        $multiimgs =  MultiImg::where('product_id',$id)->limit(5)->get();
        return view('frontend.product.product_detalis', compact('product','multiimgs','product_color_all',
        'product_size_all','relatedProduct'));
       } // end mathod

   public function TagWiseProduct($tag){
     // for tag page
    $categories = Category::orderBy('category_name', 'ASC')->get();
    $products = Product::where('status', 1)->where('product_tags', $tag)->orderBy('id', 'DESC')->paginate(4);

    return view('frontend.tags.tags_view', compact('products','categories'));

   }





    // Subcategory wise data
	public function SubCatWiseProduct($subcat_id){

    $breadsubcat = SubCategory::with(['category'])->where('id',$subcat_id)->get();

		$products = Product::where('status',1)->where('subcategory_id',$subcat_id)->orderBy('id','DESC')->paginate(4);
		$categories = Category::orderBy('category_name','ASC')->get();
		// return view('frontend.product.subcategory_view',compact('products','categories'));
    return view('frontend.product.subcategory_view',compact('products','categories','breadsubcat'));

	}


     // Subcategory wise data
	public function SubSubCatWiseProduct($subsubcat_id){
		$products = Product::where('status',1)->where('subsubcategory_id',$subsubcat_id)->orderBy('id','DESC')->paginate(4);
		$categories = Category::orderBy('category_name','ASC')->get();
		// return view('frontend.product.sub_subcategory_view',compact('products','categories'));

    $breadsubsubcat = SubSubCategory::with(['category','subcategory'])->where('id',$subsubcat_id)->get();

    return view('frontend.product.sub_subcategory_view',compact('products','categories','breadsubsubcat'));

	}

 /// Product View With Ajax
 public function ProductViewAjax($id){


  $product = Product::with('category', 'brand')->findOrFail($id);



  $color = $product->product_color;
  $product_colors = explode(',', $color);

  // size varibale is messing
  $size = $product->product_size;
  $product_sizes = explode(',', $size);

  return response()->json(array(
    'product' =>$product,
    'color' => $product_colors,
    'size' => $product_sizes,
// problem is same varibale


  ));

 } // end mathod




    // Product Seach
    public function ProductSearch(Request $request){


      if(isset($request->cat))
      {
        $categories = $request->cat;
      }
      if(isset($request->search))
      {
        $item = $request->search;
      }



      if(isset($item)&&!isset($categories))
      {
        $products = Product::where('product_name','LIKE',"%$item%")->paginate(9);

        return view('frontend.product.search',compact('products'));

      }else if(!isset($item)&&isset($categories))
      {
        $products = Product::where('category_id','=',$categories)->paginate(9);
        return view('frontend.product.search',compact('products'));

      }else if(isset($item)&&isset($categories))
      {
        $products = Product::where('category_id','=',$categories)->where('product_name','LIKE',"%$item%")->paginate(9);
        return view('frontend.product.search',compact('products'));

      }



       return redirect()->route('user.index');



    }

    public function searchByColor($color)
    {
      $products  = Product::where('product_color','like','%'.$color.'%')->paginate(6);
      return view('frontend.product.search',compact('products'));
    }
    public function searchByCategory($category)
    {
      $subcategory_id = $category;
      $products  = Product::where('subcategory_id',$subcategory_id)->paginate(6);
      return view('frontend.product.search',compact('products'));
    }
    public function categoryByProduct($category)
    {
      $category_id = $category;
      $products  = Product::where('category_id',$category_id)->paginate(6);
      return view('frontend.product.search',compact('products'));
    }
    public function searchBySubSubCategory($category)
    {
      $subsubcategory_id = $category;
      $products  = Product::where('subsubcategory_id',$subsubcategory_id)->paginate(6);
      return view('frontend.product.search',compact('products'));
    }
    public function latestProduct()
    {
      $products = Product::latest()->limit(30)->paginate(9);
      return view('frontend.product.search',compact('products'));
    }
    public function allProduct()
    {
      $products = Product::limit(30)->paginate(9);
      return view('frontend.product.search',compact('products'));
    }
    public function popularProduct()
    {
      $products = Product::where('status',1)->orderBy('product_views','DESC')->limit(30)->paginate(9);
      return view('frontend.product.search',compact('products'));
    }
    public function specialOffer()
    {
      $products = Product::where('special_offer','1')->limit(30)->paginate(9);
      return view('frontend.product.search',compact('products'));
    }
    public function specialDeal()
    {
      $products = Product::where('special_deals','1')->limit(30)->paginate(9);
      return view('frontend.product.search',compact('products'));
    }


    public function subscribe(Request $request)
    {
          $validated = $request->validate([
              'email' => 'required|unique:subscribers|max:255',
          ]);
          if($validated)
          {
            $subscriber = new Subscriber();
            $subscriber->email = $request->email;
            $subscriber->save();

            return redirect()->back()->with('message', 'Thanks For Subscribe');
          }
    }


    public function review(Request $request,$id)
    {

      if(!Auth::check())
      {
        return redirect()->route('login');
      }else
      {



          $validated = $request->validate([
              'name' => 'required|max:50',
              'review' => 'required|max:255',
              'quality' => 'required',
          ]);


          if($validated)
          {
            $review = new review();
            $review->user_name = $request->name;
            $review->review = $request->review;
            $review->product_id = $id;
            $review->user_id = Auth::id();
            $review->star = $request->quality;
            $review->save();
            $notification = array(
                'message' =>  'Thank you for your rating.',
                'alert-type' => 'success'
            );
              return redirect()->back()->with($notification);

          }
        }

    }
   public function contactUs(Request $request)
   {
                $validated = $request->validate([
                'name' => 'required|max:30',
                'email' => 'required',
                'subject' => 'required|max:60',
                'subject' => 'required|max:60',
                'message' => 'required|max:255',
                ]);
                if($validated)
                {
                  // Mail::to('pabonsub@gmail.com')->send(new ContactUsMail($request));
                  // return 'Email Sent';
                   $contact  = new ContactUs();
                   $contact->name = $request->name;
                   $contact->email = $request->email;
                   $contact->subject = $request->subject;
                   $contact->message = $request->message;
                   $contact->save();
                   $notification = array(
                    'message' =>  'We will response you very soon, Thank you',
                    'alert-type' => 'success'
                );
                   return redirect()->back()->with($notification);


                }
   }
    //about
    public function aboutus(){
        return view('frontend.amfl.about');
    }
    //about
    public function project(){
        return view('frontend.amfl.project');
    }
    //about
    public function news(){
        return view('frontend.amfl.news');
    }
    //about
    public function blog(){
        return view('frontend.amfl.blog');
    }
     //about
     public function contactamfl(){
        return view('frontend.amfl.contact');
    }
    //about
    public function service(){
        return view('frontend.amfl.service');
    }

} // main end






