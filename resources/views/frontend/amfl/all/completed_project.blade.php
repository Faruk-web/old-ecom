@extends('frontend.main_master')

@section('index')
 <!-- Featured Title -->
 <div id="featured-title" class="featured-title clearfix">
    <div id="featured-title-inner" class="container clearfix">
        <div class="featured-title-inner-wrap">
            <div id="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="breadcrumb-trail">
                        <a href="{{ url('/') }}" class="trail-begin">Home</a>
                        <span class="sep">|</span>
                        <span class="trail-end">Completed</span>
                        <span class="sep">|</span>
                        <span class="trail-end">Projects</span>
                    </div>
                </div>
            </div>
            <div class="featured-title-heading-wrap">
                <h1 class="feautured-title-heading">
                    Projects Grid
                </h1>
            </div>
        </div><!-- /.featured-title-inner-wrap -->
    </div><!-- /#featured-title-inner -->
</div>
<!-- End Featured Title -->

<!-- Main Content -->
<div id="main-content" class="site-main clearfix">
    <div id="content-wrap">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
               <div class="page-content">
                    <!-- SERVICES -->
                    <div class="row-services">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="themesflat-spacer clearfix" data-desktop="60" data-mobile="60" data-smobile="60"></div>
                                    <div class="position-relative">
                                        <div class="themesflat-headings style-1 clearfix">
                                        <h2 class="heading ">All COMPLETED PROJECT</h2>
                                        </div>
                                        <ul class="themesflat-filter style-1 filter-absolute clearfix">
                                            <li class="active"><a href="#" data-filter="*">All</a></li>
                                            <li><a href="#" data-filter=".residential">RESIDENTIAL</a></li>
                                            <li><a href="#" data-filter=".commercial">COMMERCIAL</a></li>
                                            <li><a href="#" data-filter=".green_house">GREEN HOUSE</a></li>
                                            <li><a href="#" data-filter=".construction">CONSTRUCTION </a></li>
                                            <li><a href="#" data-filter=".architecture">ARCHITECTURE   </a></li>
                                            {{-- <li><a href="#" data-filter=".villa">VILLA</a></li>
                                            <li><a href="#" data-filter=".building">BUILDING</a></li> --}}
                                        </ul>
                                    </div>
                                    <div class="themesflat-spacer clearfix" data-desktop="40" data-mobile="35" data-smobile="35"></div>
                                    <div class="themesflat-project style-2 isotope-project has-margin mg15 data-effect clearfix">
                                        @php
                                            $project = App\Models\Project::where('status_id','COMPLETED')->where('project_type','residential')->orderBy('id','asc')->limit(12)->get();
                                        @endphp
                                         @foreach ($project as $item)
                                        <div class="project-item residential">
                                            <div class="inner">
                                                <div class="thumb data-effect-item has-effect-icon w40 offset-v-19 offset-h-49">
                                                    <img src="{{ asset($item->project_thambnail)}}" alt="Image">
                                                    <div class="elm-link">
                                                        <a href="{{ route('user.project.details',$item->id) }}" class="icon-1 icon-search"></a>
                                                        {{-- <a href="#" class="icon-1"></a> --}}
                                                    </div>
                                                    <div class="overlay-effect bg-color-3"></div>
                                                </div>
                                                <div class="text-wrap">
                                                    <h5 class="heading"><a href="#">{{$item->project_name}}</a></h5>
                                                    <div class="elm-meta">
                                                        <span><a href="{{ route('user.project.details',$item->id) }}">Residential House</a></span>
                                                        <span><a href="{{ route('user.project.details',$item->id) }}">Villa</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        <!-- /.product-item -->
                                        @php
                                        $project = App\Models\Project::where('status_id','COMPLETED')->where('project_type','commercial')->orderBy('id','asc')->limit(12)->get();
                                        @endphp
                                        @foreach ($project as $item)
                                        <div class="project-item commercial">
                                            <div class="inner">
                                                <div class="thumb data-effect-item has-effect-icon w40 offset-v-19 offset-h-49">
                                                    <img src="{{ asset($item->project_thambnail)}}" alt="Image">
                                                    <div class="elm-link">
                                                        <a href="{{ route('user.project.details',$item->id) }}" class="icon-1 icon-search"></a>
                                                        {{-- <a href="#" class="icon-1"></a> --}}
                                                    </div>
                                                    <div class="overlay-effect bg-color-3"></div>
                                                </div>
                                                <div class="text-wrap">
                                                    <h5 class="heading"><a href="#">{{$item->project_name}}</a></h5>
                                                    <div class="elm-meta">
                                                        <span><a href="{{ route('user.project.details',$item->id) }}">Commercial House</a></span>
                                                        <span><a href="{{ route('user.project.details',$item->id) }}">Villa</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        <!-- /.product-item -->
                                        @php
                                        $project = App\Models\Project::where('status_id','COMPLETED')->where('project_type','green_house')->orderBy('id','asc')->limit(10)->get();
                                        @endphp
                                        @foreach ($project as $item)
                                        <div class="project-item green_house">
                                            <div class="inner">
                                                <div class="thumb data-effect-item has-effect-icon w40 offset-v-19 offset-h-49">
                                                    <img src="{{ asset($item->project_thambnail)}}" alt="Image">
                                                    <div class="elm-link">
                                                        <a href="{{ route('user.project.details',$item->id) }}" class="icon-1 icon-search"></a>
                                                        {{-- <a href="#" class="icon-1"></a> --}}
                                                    </div>
                                                    <div class="overlay-effect bg-color-3"></div>
                                                </div>
                                                <div class="text-wrap">
                                                    <h5 class="heading"><a href="#">{{$item->project_name}}</a></h5>
                                                    <div class="elm-meta">
                                                        <span><a href="{{ route('user.project.details',$item->id) }}">Green House</a></span>
                                                        <span><a href="{{ route('user.project.details',$item->id) }}">Villa</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        <!-- /.product-item -->
                                        @php
                                        $project = App\Models\Project::where('status_id','COMPLETED')->where('project_type','construction')->orderBy('id','asc')->limit(10)->get();
                                        @endphp
                                        @foreach ($project as $item)
                                        <div class="project-item construction">
                                            <div class="inner">
                                                <div class="thumb data-effect-item has-effect-icon w40 offset-v-19 offset-h-49">
                                                    <img src="{{ asset($item->project_thambnail)}}" alt="Image">
                                                    <div class="elm-link">
                                                        <a href="{{ route('user.project.details',$item->id) }}" class="icon-1 icon-search"></a>
                                                        {{-- <a href="#" class="icon-1"></a> --}}
                                                    </div>
                                                    <div class="overlay-effect bg-color-3"></div>
                                                </div>
                                                <div class="text-wrap">
                                                    <h5 class="heading"><a href="#">{{$item->project_name}}</a></h5>
                                                    <div class="elm-meta">
                                                        <span><a href="{{ route('user.project.details',$item->id) }}">Construction House</a></span>
                                                        <span><a href="{{ route('user.project.details',$item->id) }}">Villa</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        <!-- /.product-item -->
                                        @php
                                        $project = App\Models\Project::where('status_id','COMPLETED')->where('project_type','architechtur')->orderBy('id','asc')->limit(10)->get();
                                        @endphp
                                        @foreach ($project as $item)
                                        <div class="project-item architecture">
                                            <div class="inner">
                                                <div class="thumb data-effect-item has-effect-icon w40 offset-v-19 offset-h-49">
                                                    <img src="{{ asset($item->project_thambnail)}}" alt="Image">
                                                    <div class="elm-link">
                                                        <a href="{{ route('user.project.details',$item->id) }}" class="icon-1 icon-search"></a>
                                                        {{-- <a href="#" class="icon-1"></a> --}}
                                                    </div>
                                                    <div class="overlay-effect bg-color-3"></div>
                                                </div>
                                                <div class="text-wrap">
                                                    <h5 class="heading"><a href="#">{{$item->project_name}}</a></h5>
                                                    <div class="elm-meta">
                                                        <span><a href="{{ route('user.project.details',$item->id) }}">Architechtur House</a></span>
                                                        <span><a href="{{ route('user.project.details',$item->id) }}">Villa</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        <!-- /.product-item -->
                                    </div><!-- /.themesflat-project -->
                                </div><!-- /.col-md-12 -->
                            </div>
                            <!-- /.row -->
                        </div><!-- /.container -->
                    </div>
                    <!-- END SERVICES -->
               </div><!-- /.page-content -->
            </div><!-- /#inner-content -->
        </div><!-- /#site-content -->
    </div><!-- /#content-wrap -->
</div><!-- /#main-content -->
@endsection
