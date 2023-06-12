<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\AdminProfileController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\CouponController;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\BannerCatagoryController;
use App\Http\Controllers\Backend\ReportController;
use App\Http\Controllers\Backend\ReturnController;
use App\Http\Controllers\Backend\SiteSettingController;
use App\Http\Controllers\Backend\AdminUserController;
//amfl location
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\LocationController;
use App\Http\Controllers\Backend\NewsController;
use App\Http\Controllers\Backend\BoardOfDirectorController;
//project
use App\Http\Controllers\Backend\ProjectController;
// ashim controller add
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
// for frontend
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\LanguageController;
use App\Http\Controllers\Frontend\ShopController;
use Illuminate\Support\Facades\Auth;
// for user
use App\Http\Controllers\User\StripeController;
use App\Http\Controllers\User\AllUserController;
use App\Http\Controllers\User\CashController;
use App\Http\Controllers\Frontend\SocialiteLoginController;
use App\Models\User;
use League\CommonMark\Extension\CommonMark\Node\Block\IndentedCode;
// Admin prefix route
Route::group(['prefix'=> 'admin', 'middleware'=>['admin:admin']], function(){
	Route::get('/login', [AdminController::class, 'loginForm']);
	Route::post('/login',[AdminController::class, 'store'])->name('admin.login');
});
Route::middleware(['auth:admin'])->group(function(){
// Admin Route
Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
    return view('admin.index');
})->name('admin.dashboard')->middleware('auth:admin');
Route::get('admin/logout', [AuthenticatedSessionController::class, 'adminDestroy'])
        ->name('admin.logout');
// admin profile route
Route::get('admin/profile', [AdminProfileController::class, 'AdminProfile'])->name('admin.admin_profile_view');
// admin profile Edit route
Route::get('admin/profile/edit', [AdminProfileController::class, 'AdminProfileEdit'])->name('admin.admin_profile_edit');
////Admin Profile edit store route
Route::post('/admin/profile/store', [AdminProfileController::class, 'AdminProfileStore'])->name('admin.profile.store');
////Admin password change
Route::get('/admin/change/password', [AdminProfileController::class, 'AdminChangePassword'])->name('admin.admin_change_password');
////Admin update password
Route::post('/update/change/password', [AdminProfileController::class, 'AdminUpdateChangePassword'])->name('update.change.password');
});
// User Route
// Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function () {
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $id = Auth::user()->id;
    $user = User::find($id);
    return view('dashboard', compact('user'));
})->name('dashboard');
// Frontend Route
Route::get('/', [IndexController::class, 'index'])->name('user.index');
//amfl
Route::get('/about', [IndexController::class, 'aboutus'])->name('user.bout');
Route::get('/project', [IndexController::class, 'project'])->name('user.project');
Route::get('/ongoing/project', [IndexController::class, 'ongoingProject'])->name('user.project.ongoing');
Route::get('/upcoming/project', [IndexController::class, 'upcomingProject'])->name('user.project.upcoming');
Route::get('/completed/project', [IndexController::class, 'completedProject'])->name('user.project.completed');
Route::get('/news', [IndexController::class, 'news'])->name('user.news');
Route::get('/news/details/{id}', [IndexController::class, 'newsDetails'])->name('user.news.details');
Route::get('/blog', [IndexController::class, 'blog'])->name('user.blog');
Route::get('/blog/details/{id}', [IndexController::class, 'blogDetails'])->name('user.blog.details');
Route::get('/contact_us', [IndexController::class, 'contactamfl'])->name('user.contact');
Route::get('/boardof/director/{id}', [IndexController::class, 'BoardOfDirector'])->name('user.director');
Route::get('/project/details/{id}', [IndexController::class, 'ProjectDetails'])->name('user.project.details');
Route::get('/project/details/slide/{id}', [IndexController::class, 'ProjectDetailsSlide'])->name('user.project.details.slide');
// User Logout Route
Route::get('/user/logout', [IndexController::class, 'UserLogout'])->name('user.logout');
// User Update Profile
Route::get('/user/profile/update', [IndexController::class, 'UserProfile'])->name('user.profile');
// user profile store
Route::post('/user/profile/store', [IndexController::class, 'UserProfileStore'])->name('user.profile.store');
// user Change Password
Route::get('/user/change/password', [IndexController::class, 'UserChnagePassword'])->name('change.password');
// user  Password Update
Route::post('/user/password/update', [IndexController::class, 'UserPasswordUpdate'])->name('user.password.update');
// Admin All Category Route Group
Route::prefix('category')->group(function(){
    Route::get('/view', [CategoryController::class, 'CategoryView'])->name('all.category');
    Route::post('/store', [CategoryController::class, 'CategoryStore'])->name('category.store');
    Route::get('/edit/{id}', [CategoryController::class, 'CategoryEdit'])->name('category.edit');
    Route::post('/update', [CategoryController::class, 'CategoryUpdate'])->name('category.update');
    Route::get('/delete/{id}', [CategoryController::class, 'CategoryDelete'])->name('category.delete');
});
// Admin All SUb Category Route Group
Route::prefix('subcategory')->group(function(){
    Route::get('/view', [SubCategoryController::class, 'SubCategoryView'])->name('all.subcategory');
    Route::post('/store', [SubCategoryController::class, 'SubCategoryStore'])->name('subcategory.store');
    Route::get('/sub/edit/{id}', [SubCategoryController::class, 'SubCategoryEdit'])->name('subcategory.edit');
    Route::post('/update', [SubCategoryController::class, 'SubCategoryUpdate'])->name('subcategory.update');
    Route::get('/delete/{id}', [SubCategoryController::class, 'SubCategoryDelete'])->name('subcategory.delete');
});
//amfl location
Route::prefix('location')->group(function(){
    Route::get('/view', [LocationController::class, 'LocationView'])->name('all.location');
    Route::post('/location/store', [LocationController::class, 'LocationStore'])->name('location.store');
    Route::get('/location/delete/{id}', [LocationController::class, 'locationDelete'])->name('location.delete');
    //status
    Route::get('/status/view', [LocationController::class, 'StatusView'])->name('all.status');
    Route::post('/status/store', [LocationController::class, 'StatusStore'])->name('status.store');
    Route::get('/status/delete/{id}', [LocationController::class, 'StatusDelete'])->name('status.delete');
});
Route::prefix('project')->group(function(){
    Route::get('/view', [ProjectController::class, 'ProjectAdd'])->name('project.add');
    Route::post('/store', [ProjectController::class, 'ProjectStore'])->name('project.store');
    Route::get('/edit/{id}', [ProjectController::class, 'EditProject'])->name('project.edit');
    Route::post('/edit/update', [ProjectController::class, 'UpdateProject'])->name('project.update');
    // Manage Product
    Route::get('/manage', [ProjectController::class, 'ManageProject'])->name('manage-project');
    //project update
    Route::post('/update', [ProjectController::class, 'UpdateProject'])->name('project_update');
    // For Thambnail Img Update
    Route::post('/thambnail/update', [ProjectController::class, 'ThambnailImageUpdate'])->name('update_project_thambnail');
    // For Multiple Img Update
    Route::post('/update/multiimg', [ProjectController::class, 'UpdateProductMultiImg'])->name('update_project_img');
     // For floor Img Update
     Route::post('/floor/image/update', [ProjectController::class, 'ThambnailImageUpdateFloor'])->name('update_project_floor_image');
     // For floor Multiple Img Update
     Route::post('/floor/update/multiimg', [ProjectController::class, 'UpdateProductMultiImgFloor'])->name('update_project_img_floor');
    // For map Img Update
    Route::post('/map/image/update', [ProjectController::class, 'ThambnailImageUpdateMap'])->name('update_project_map_image');
});
Route::prefix('blog')->group(function(){
    Route::get('/blog', [BlogController::class, 'BlogAdd'])->name('blog.add');
    Route::post('/store', [BlogController::class, 'BlogStore'])->name('blog.store');
    // Route::get('/edit/{id}', [ProjectController::class, 'EditProject'])->name('project.edit');
    // Route::post('/edit/update', [ProjectController::class, 'UpdateProject'])->name('project.update');
    // // Manage Product
    Route::get('/manage', [BlogController::class, 'ManageBlog'])->name('manage_blog');
});
Route::prefix('board')->group(function(){
    Route::get('/board/of/director', [BoardOfDirectorController::class, 'DirectorAdd'])->name('board.director.add');
    Route::post('/store', [BoardOfDirectorController::class, 'DirectorStore'])->name('Director.store');
    // Route::get('/edit/{id}', [ProjectController::class, 'EditProject'])->name('project.edit');
    // Route::post('/edit/update', [ProjectController::class, 'UpdateProject'])->name('project.update');
    // // Manage Product
    Route::get('/manage', [BoardOfDirectorController::class, 'ManageDirector'])->name('manage_director');
});
Route::prefix('news')->group(function(){
    Route::get('/news', [NewsController::class, 'NewsAdd'])->name('news.add');
    Route::post('/news', [NewsController::class, 'NewsStore'])->name('news.store');
    // Route::get('/edit/{id}', [ProjectController::class, 'EditProject'])->name('project.edit');
    // Route::post('/edit/update', [ProjectController::class, 'UpdateProject'])->name('project.update');
    // contact client
    Route::get('/contact/client', [NewsController::class, 'ContactClient'])->name('contact.client');
    Route::get('/contact/delete/{id}', [NewsController::class, 'ContactDelete'])->name('contact.delete');
    // // Manage Product
    Route::get('/manage', [NewsController::class, 'ManageNews'])->name('manage_news');

});

// Admin Product Route Group
// Route::prefix('product')->group(function(){
//     Route::get('/view', [ProductController::class, 'ProductAdd'])->name('product.add');
//     Route::get('/info/{id}', [ProductController::class, 'ProductAllInfoView'])->name('product.all_info_view');
//     Route::post('/store', [ProductController::class, 'StoreProduct'])->name('product_store');
//     // Manage Product
//     Route::get('/manage', [ProductController::class, 'ManageProduct'])->name('manage-product');
//     // Edit Product
//     Route::get('/edit/{id}', [ProductController::class, 'EditProduct'])->name('product.edit');
//     // Upadte Product
//     Route::post('/update', [ProductController::class, 'UpdateProduct'])->name('product_update');
//     // For Multiple Img Update
//     Route::post('/update/multiimg', [ProductController::class, 'UpdateProductMultiImg'])->name('update_product_img');
//     // for Multipart Deleted
//     Route::get('/multiimg/delete/{id}', [ProductController::class, 'MultiImageDelete'])->name('product.multiimg.delete');
//     //hot deals
//     Route::get('/hot_deals',[ProductController::class,'HotDeals'])->name('porduct.hotDeals');
//     Route::get('/hot_deals/{id}',[ProductController::class,'HotDealsID'])->name('porduct.hotDealsbyid');
//     Route::post('/hot_deals/store',[ProductController::class,'HotDealsStore'])->name('deals.store');
//    // For Thambnail Img Update
//     Route::post('/thambnail/update', [ProductController::class, 'ThambnailImageUpdate'])->name('update-product-thambnail');
//     //===================================Product Active And Deactive========================================
//     // for Deactive
//     Route::get('/deactive/{id}', [ProductController::class, 'ProductDeactive'])->name('product.deactive');
//     // for Active
//     Route::get('/active/{id}', [ProductController::class, 'ProductActive'])->name('product.active');
//      //===================================Product Delete========================================
//      Route::get('/delete/{id}', [ProductController::class, 'ProductDelete'])->name('product.delete');
// });
    // Slider  Route Group
    Route::prefix('slider')->group(function(){
    Route::get('/view', [SliderController::class, 'SliderView'])->name('manage.slider');
    Route::post('/store', [SliderController::class, 'SliderStore'])->name('slider.store');
    Route::get('/edit/{id}', [SliderController::class, 'SliderEdit'])->name('slider.edit');
    Route::post('/update', [SliderController::class, 'SliderUpdate'])->name('slider.update');
    Route::get('/delete/{id}', [SliderController::class, 'SliderDelete'])->name('slider.delete');
     //===================================Product Active And Deactive==================================
    // for Deactive
    Route::get('/deactive/{id}', [SliderController::class, 'SliderDeactive'])->name('slider.deactive');
    // for Active
    Route::get('/active/{id}', [SliderController::class, 'SliderActive'])->name('slider.active');
});
// Admin Banner  Route Group
Route::prefix('banner')->group(function(){
    Route::get('/view',[BannerController::class,'BennarView'])->name('bennar.manage');
    Route::post('/store',[BannerController::class,'BennarStore'])->name('bennar.store');
    Route::get('/edit/{id}',[BannerController::class,'BennarEdit'])->name('bennar.edit');
    Route::post('/update',[BannerController::class,'BennarUpdate'])->name('bennar.update');
    Route::get('/dalete{id}',[BannerController::class,'BennarDelete'])->name('bennar.delete');
 // for Deactive
    Route::get('/deactive/{id}', [BannerController::class, 'BennarDeactive'])->name('bennar.deactive');
    // for Active
    Route::get('/active/{id}', [BannerController::class, 'BennarActive'])->name('bennar.active');
});
// Ashim bannerCategory  Route Group
Route::prefix('bannerCategory')->group(function(){
    Route::get('/view',[BannerCatagoryController::class,'BennarView'])->name('bannerCategory.manage');
    Route::post('/store',[BannerCatagoryController::class,'BennarStore'])->name('bannerCategory.store');
    Route::get('/dalete{id}',[BannerCatagoryController::class,'BennarDelete'])->name('bannerCategory.delete');
    Route::get('/edit/{id}',[BannerCatagoryController::class,'BennarEdit'])->name('bannerCategory.edit');
    Route::post('/update',[BannerCatagoryController::class,'BennarUpdate'])->name('bannerCategory.update');
 // for Deactive
    Route::get('/deactive/{id}', [BannerCatagoryController::class, 'BennarDeactive'])->name('bannerCategory.deactive');
    // for Active
    Route::get('/active/{id}', [BannerCatagoryController::class, 'BennarActive'])->name('bannerCategory.active');
});
    // Admin All user role###########################################################################
        Route::prefix('adminuserrole')->group(function(){
        Route::get('/all', [AdminUserController::class, 'AllAdminRole'])->name('all.admin.user');
        Route::get('/add', [AdminUserController::class, 'AddAdminRole'])->name('add.admin');
        Route::get('/emp.permision', [AdminUserController::class, 'EmpPermison'])->name('emp.permision');
        Route::post('/store', [AdminUserController::class, 'StoreAdminRole'])->name('admin.user.store');
        Route::get('/edit/{id}', [AdminUserController::class, 'EditAdminRole'])->name('edit.admin.user');
        Route::post('/update', [AdminUserController::class, 'UpdateAdminRole'])->name('admin.user.update');
        Route::get('/delete/{id}', [AdminUserController::class, 'DeleteAdminRole'])->name('delete.admin.user');
    }); // All user role

    // Admin Reports Routes
    Route::prefix('reports')->group(function(){
        Route::get('/view', [ReportController::class, 'ReportView'])->name('all-reports');
        // Search Date Report
        Route::post('/search/by/date', [ReportController::class, 'ReportByDate'])->name('search-by-date');
        // Search Month Report
        Route::post('/search/by/month', [ReportController::class, 'ReportByMonth'])->name('search-by-month');
        // Search Year Report
        Route::post('/search/by/year', [ReportController::class, 'ReportByYear'])->name('search-by-year');
        //sallery report
        route::get('/sallary-view',[ReportController::class,'SalaryReportView'])->name('sallary-report-view');
        route::post('/sallary',[ReportController::class,'SalaryReport'])->name('sallary-report');
        //return report
        route::get('/return-product-view',[ReportController::class,'returnReportView'])->name('return-report-view');
        route::post('/return-product',[ReportController::class,'returnReport'])->name('return-report');
        //sallery report
        route::get('/user-activity-view',[ReportController::class,'UserActivityReportView'])->name('User-activity-view');
        route::get('/user-activity',[ReportController::class,'UserActivityReport'])->name('User-activity-report');
        route::get('/profitreport',[ReportController::class,'ProfitReportView'])->name('profit.report');
        route::post('/profitreport/day',[ReportController::class,'ProfitReportDay'])->name('profit.day');
        route::post('/profitreport/month',[ReportController::class,'ProfitReportMonth'])->name('profit.month');
        route::post('/profitreport/year',[ReportController::class,'ProfitReportYear'])->name('profit.year');
        });  // end Reports
        // Admin Get All User Routes
        Route::prefix('alluser')->group(function(){
            // All user view
            Route::get('/view', [AdminProfileController::class, 'AllUsers'])->name('all-users');
       }); // end user Get
        // Admin Return Order Show Routes
        Route::prefix('return')->group(function(){
            // Return Request Show
            Route::get('/admin/request', [ReturnController::class, 'ReturnRequest'])->name('return.request');
            // Return Request Approve
            Route::get('/admin/return/approve/{order_id}', [ReturnController::class, 'ReturnRequestApprove'])->name('return.approve');
            // Return All Request
            Route::get('/admin/all/request', [ReturnController::class, 'ReturnAllRequest'])->name('all.request');
            });
            // Admin Site Setting Routes (logo, social link etc)
            Route::prefix('setting')->group(function(){
            // view
            Route::get('/site', [SiteSettingController::class, 'SiteSetting'])->name('site.setting');
            // update
            Route::post('/site/update', [SiteSettingController::class, 'SiteSettingUpdate'])->name('update.sitesetting');
            // Seo
            Route::get('/seo', [SiteSettingController::class, 'SeoSetting'])->name('seo.setting');

            // Seo Meta data
            Route::post('/seo/update', [SiteSettingController::class, 'SeoSettingUpdate'])->name('update.seosetting');
             });
//################# start Checkout Route //####################
Route::get('/checkout', [CartController::class, 'CheckoutCreate'])->name('checkout');
// Shop Page Route
Route::get('/shop', [ShopController::class, 'ShopPage'])->name('shop.page');
// search project
Route::get('/search_project', [ShopController::class, 'search_project']);
Route::get('/create/search/project', [ShopController::class, 'search_amfl_project'])->name('search_amfl_project.store');
// pdf
Route::get('/generate-pdf/{id}',[ShopController::class, 'generatePDF'])->name('generate.pdf');
Route::post('/blog/comment/stor',[ShopController::class, 'BlogComment'])->name('blog.comment');
//Facebook Login
Route::get('login/google', [SocialiteLoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [SocialiteLoginController::class, 'handleGoogleCallback']);
//Facebook Login
Route::get('login/facebook', [SocialiteLoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback', [SocialiteLoginController::class, 'handleFacebookCallback']);
// google login
Route::get('login/google', [SocialiteLoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [SocialiteLoginController::class, 'handleGoogleCallback']);
// Twitter Login
Route::get('login/twitter', [App\Http\Controllers\Auth\LoginController::class, 'redirectToTwitter'])->name('login.twitter');
Route::get('login/twitter/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleTwitterCallback']);
// for department employee salary
Route::prefix('salary')->group(function(){
    // All user view
    Route::get('/add', [EmployeeSalary::class, 'AddSalary'])->name('salary-add');
    Route::get('/get_employee/{id}', [EmployeeSalary::class,'getEmployee'])->name('get.employee');
    Route::post('/get_employee', [EmployeeSalary::class,'find'])->name('employee.find');
    Route::post('/salary_payment', [EmployeeSalary::class,'getSalary'])->name('payment_salary');
    Route::get('/paid_salary', [EmployeeSalary::class,'paidSalary'])->name('paid_salary');
    Route::get('/paid_salary', [EmployeeSalary::class,'paidSalary'])->name('paid_salary');
});

Route::post('/subscribe',[IndexController::class,'subscribe'])->name('subscribe');
Route::post('/review/{id}',[IndexController::class,'review'])->name('review');
//contact US
Route::get('/contact-us',function()
{
    return view('frontend.contact.contact_us');
})->name('contact');

Route::post('/contact-us/send',[IndexController::class,'contactUs'])->name('contactUs.send');
// Admin All Department Route Group
Route::prefix('department')->group(function(){
    Route::get('/view', [DepartmentController::class, 'DepartmentView'])->name('department.view');
    Route::post('/store', [DepartmentController::class, 'DepartmentStore'])->name('department.store');
    Route::get('/edit/{id}', [DepartmentController::class, 'DepartmentEdit'])->name('department.edit');
    Route::post('/update', [DepartmentController::class, 'DepartmentUpdate'])->name('department.update');
    Route::get('/delete/{id}', [DepartmentController::class, 'DepartmentDelete'])->name('department.delete');
});
