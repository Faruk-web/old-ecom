
 @php
$prefix = Request::route()->getPrefix();
  $route = Route::current()->getName();
@endphp
<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">
        <div class="user-profile">
			<div class="ulogo">
				 <a href="/">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center" >
						  <img src="   {{ asset('backend/images/logo_amfl/amfl.jpg') }}" alt="logo" class="rounded-pill" height="70px" width="150px" style="background-color: white; ">
						  {{-- <h3><b>Classy</b> E-Commerce</h3> --}}
					 </div>
				</a>
			</div>
        </div>
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">
		<li class=" {{($route=='dashboard')?'active':'' }}">
          <a href="{{ url('admin/dashboard') }}">
            <i data-feather="pie-chart"></i>
			<span>Dashboard</span>
          </a>
        </li>
        @php
        $board = (auth()->guard('admin')->user()->board == 1);
        $category = (auth()->guard('admin')->user()->category == 1);
        $project = (auth()->guard('admin')->user()->project == 1);
        $slider = (auth()->guard('admin')->user()->slider == 1);
        $blog = (auth()->guard('admin')->user()->blog == 1);
        $banner = (auth()->guard('admin')->user()->banner == 1);
        $setting = (auth()->guard('admin')->user()->setting == 1);
        $news = (auth()->guard('admin')->user()->news == 1);
        $bannerCategory  = (auth()->guard('admin')->user()->bannerCategory  == 1);
        $orders = (auth()->guard('admin')->user()->orders == 1);
        $stock = (auth()->guard('admin')->user()->stock == 1);
        $reports = (auth()->guard('admin')->user()->reports == 1);
        $alluser = (auth()->guard('admin')->user()->alluser == 1);
        $adminuserrole = (auth()->guard('admin')->user()->adminuserrole == 1);
        @endphp
        @if($category == true)
        <li class="treeview {{ ($prefix=='/category')?'active':'' }} ">
          <a href="#">
            <i class="fa fa-list-alt fa-5x"></i>
            <span>Category</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('all.category') }}"><i class="ti-more"></i>All Category</a></li>
            <li><a href="{{ route('all.location') }}"><i class="ti-more"></i>All Location</a></li>
            <li><a href="{{ route('all.status') }}"><i class="ti-more"></i>All Status</a></li>
          </ul>
        </li>
        @else
        @endif
		@if($project == true)
        <li class="treeview  {{ ($prefix=='/project')?'active':'' }}  ">
          <a href="#">
            <i class="fa fa-list-alt fa-5x"></i>
            <span>Projects</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('project.add')}}"><i class="ti-more"></i>Add Projects </a></li>
            <li><a href="{{ route('manage-project') }}"><i class="ti-more"></i>Manage All Projects</a></li>
          </ul>
        </li>
           @else
        @endif
        @if($slider == true)
        <li class="treeview  {{ ($prefix=='/slider')?'active':'' }}  ">
          <a href="#">
            <i class="fa fa-sliders fa-5x"></i>
            <span>Slider Option</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('manage.slider')}}"><i class="ti-more"></i>Manage Slider </a></li>
          </ul>
        </li>
        @else
        @endif
        @if($blog == true)
        <li class="treeview  {{ ($prefix=='/blog')?'active':'' }}  ">
          <a href="#">
            <i class="fa fa-sliders fa-5x"></i>
            <span>Blog Option</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('blog.add')}}"><i class="ti-more"></i>Blog Add</a></li>
            <li><a href="{{ route('manage_blog')}}"><i class="ti-more"></i>Blog View</a></li>
          </ul>
        </li>
        @else
        @endif
        @if($banner == true)
        <li class="treeview  {{ ($prefix=='/banner')?'active':'' }}  ">
          <a href="#">
            <i class="fa fa-picture-o fa-5x"></i>
            <span>Banner Option</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ ($route == 'bennar.manage')? 'active':'' }}">
              <a href="{{ route('bennar.manage') }}"><i class="ti-more"></i>Manage Banner</a></li>
          </ul>
        </li>
        @else
        @endif
        @if($bannerCategory == true)
        <li class="treeview  {{ ($prefix=='/bannerCategory')?'active':'' }}  ">
          <a href="#">
            <i class="fa fa-picture-o fa-5x"></i>
            <span>Banner Category</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ ($route == 'bannerCategory.manage')? 'active':'' }}">
              <a href="{{ route('bannerCategory.manage') }}"><i class="ti-more"></i>Manage Banner</a></li>
            {{-- <li><a href="{{ route('manage.cupon')}}"><i class="ti-more"></i>Manage Cupon </a></li> --}}
          </ul>
        </li>
        @else
        @endif
        @if($alluser == true)
        <li class="treeview {{ ($prefix == '/alluser')?'active':'' }}  ">
          <a href="#">
            <i class="fa fa-users fa-5x"></i>
            <span>All Users </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
        <li class="{{ ($route == 'all-users')? 'active':'' }}"><a href="{{ route('all-users') }}"><i class="ti-more"></i>All Users</a></li>
          </ul>
        </li>
        @else
        @endif
       @if($adminuserrole == true)
        <li class="treeview {{ ($prefix == '/adminuserrole')?'active':'' }}  ">
          <a href="#">
            <i class="fa fa-user-circle fa-5x"></i>
            <span>Admin User Role </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
        <li class="{{ ($route == 'all.admin.user')? 'active':'' }}">
          <a href="{{ route('all.admin.user') }}"><i class="ti-more"></i>All Admin user role </a></li>
          </ul>
        </li>
        @else
        @endif
       @if($reports == true)
        <li class="treeview {{ ($prefix == '/reports')?'active':'' }}  ">
          <a href="#">
            <i data-feather="file"></i>
            <span>All Reports </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
        <li class="{{ ($route == 'all-reports')? 'active':'' }}">
        <li class="{{ ($route == 'all-reports')? 'active':'' }}"><a href="{{ route('all-reports') }}"><i class="ti-more"></i>Order Reports</a></li>
          </ul>
        </li>
        @else
        @endif
        @if($board == true)
        <li class="treeview  {{ ($prefix=='/board')?'active':'' }}  ">
            <a href="#">
              <i class="fa fa-sliders fa-5x"></i>
              <span>Board Of Director</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ route('board.director.add')}}"><i class="ti-more"></i>Director</a></li>
              <li><a href="{{ route('manage_director')}}"><i class="ti-more"></i>Director View</a></li>
            </ul>
          </li>
          @else
        @endif
        @if($news == true)
        <li class="treeview  {{ ($prefix=='/news')?'active':'' }}  ">
            <a href="#">
              <i class="fa fa-sliders fa-5x"></i>
              <span>News Option</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ route('news.add')}}"><i class="ti-more"></i>News Post</a></li>
              <li><a href="{{ route('manage_news')}}"><i class="ti-more"></i>News View</a></li>
            </ul>
          </li>
          <li class="treeview  {{ ($prefix=='/blog')?'active':'' }}  ">
            <a href="#">
              <i class="fa fa-sliders fa-5x"></i>
              <span>Contact Client</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ route('contact.client')}}"><i class="ti-more"></i>Contact</a></li>
            </ul>
          </li>
          @else
        @endif
        @if($setting == true)
        <li class="treeview {{ ($prefix == '/setting')?'active':'' }}  ">
          <a href="#">
            <i class="fa fa-cog fa-5x"></i>
            <span>Manage Setting</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ ($route == 'site.setting')? 'active':'' }}"><a href="{{ route('site.setting') }}"><i class="ti-more"></i>Site Setting</a></li>
            {{-- <li class="{{ ($route == 'seo.setting')? 'active':'' }}"><a href="{{ route('seo.setting') }}"><i class="ti-more"></i>Seo Setting</a></li> --}}
          </ul>
        </li>
        @else
        @endif
      </ul>
    </section>
  </aside>
