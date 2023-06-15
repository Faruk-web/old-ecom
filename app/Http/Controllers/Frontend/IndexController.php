<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\ContactUsMail;
use App\Mail\OrderMail;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Blog;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Project;
use App\Models\MultiImg;
use App\Models\Brand;
use App\Models\BoardDirector;
use App\Models\Banner;
use App\Models\ContactUs;
use App\Models\SubCategory;
use App\Models\News;
use App\Models\Subscriber;
use App\Models\review;
use App\Models\BannerCatagory;
use Illuminate\Support\Carbon;
use App\Models\Leading;
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
  // for  featureds
    $featureds = Project::where('feature_project', 1)->orderBy('id', 'DESC')->limit(8)->get();
    // end product
    $sliders = Slider::where('status', 1)->orderBy('id', 'DESC')->limit(10)->get();
    // end slider
    $categories = Category::all();
    // home page banner-category
    $bannerCatagory = BannerCatagory::where('status',1)->orderBy('id','DESC')->first();
    $bennars = Banner::where('status',1)->orderBy('id','DESC')->limit(3)->get();
    $todayDate = Carbon::now();
      $leadings=Leading::orderBy('id','ASC')->limit(6)->get();
       return view('frontend.index',
        compact('categories','sliders', 'products','featureds','bannerCatagory','leadings',
         'bennars'));

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
                'message' => 'required|max:255',
                ]);
                if($validated)
                {
                  // Mail::to('pabonsub@gmail.com')->send(new ContactUsMail($request));
                  // return 'Email Sent';
                   $contact  = new ContactUs();
                   $contact->name = $request->name;
                   $contact->phone = $request->phone;
                   $contact->email = $request->email;
                   $contact->subject = $request->subject;
                   $contact->submit = $request->submit;
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
        $boardof_directors = BoardDirector::get();
        return view('frontend.amfl.about',compact('boardof_directors'));
    }
    //project
    public function project(){
        $projects = Project::limit(30)->orderBy('id', 'desc')->paginate(9);
        return view('frontend.amfl.project',compact('projects'));
    }

    //ongoingProject
    public function ongoingProject(){
        $projects = Project::limit(30)->orderBy('id', 'desc')->paginate(9);
        return view('frontend.amfl.all.ongoing_project',compact('projects'));
    }
    //upcomingProject
    public function upcomingProject(){
        $projects = Project::limit(30)->orderBy('id', 'desc')->paginate(9);
        return view('frontend.amfl.all.upcoming_project',compact('projects'));
    }
    //completedProject
    public function completedProject(){
        $projects = Project::limit(30)->orderBy('id', 'desc')->paginate(9);
        return view('frontend.amfl.all.completed_project',compact('projects'));
    }

     //ProjectDetails
     public function ProjectDetails($id){
        $projects = Project::find($id);
        $related_projects = Project::orderBy('id', 'desc')->limit(4)->get();
        return view('frontend.amfl.project_details',compact('projects','related_projects'));
    }
     //ProjectDetails by slide
     public function ProjectDetailsSlide($id){
        $slider = Slider::find($id);
        $projects = Project::find($slider->project_id);
        $related_projects = Project::orderBy('id', 'desc')->limit(4)->get();
        return view('frontend.amfl.project_details',compact('projects','related_projects'));
    }
    //news
    public function news(){
        $news = News::orderBy('id', 'ASC')->limit(5)->get();
        return view('frontend.amfl.news',compact('news'));
    }
       // newsDetails
       public function newsDetails($id){
        $news_details = News::find($id);
        return view('frontend.amfl.news_details',compact('news_details'));
    }
    //blog
    public function blog(){
        $blogs = Blog::orderBy('id', 'ASC')->limit(4)->get();
        return view('frontend.amfl.blog',compact('blogs'));
    }
    //blogDetails
    public function blogDetails($id){
        $blogs = Blog::find($id);
         return view('frontend.amfl.blog_details',compact('blogs'));
    }
     //contactamfl
     public function contactamfl(){
        return view('frontend.amfl.contact');
    }
    //about
    public function BoardOfDirector($id){
        $boardof_directors = BoardDirector::find($id);
        return view('frontend.amfl.boardof_director',compact('boardof_directors'));
    }
    public function LeadingDetail($id){
        $leading = Leading::find($id);
        return view('frontend.amfl.leading_detail',compact('leading'));
    }

} // main end






