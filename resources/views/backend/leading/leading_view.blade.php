@extends('admin.admin_master')

{{-- section id is yeild name  --}}

@section('admin')

<div class="container-full">
 <section class="content">

<div class="row">
    <div class="col-lg-12">

       <div class="box">
         <div class="box-header with-border">
           <h3 class="box-title">All LeadingList</h3>
         </div>
         <!-- /.box-header -->
         <div class="box-body">
             <div class="table-responsive">
               <table id="example1" class="table table-bordered table-striped">
                 <thead>
                     <tr>
                        <th>Leading Icon</th>
                        <th>Leading Title</th>
                        <th>Leading Short Description </th>
                        <th>Leading Image</th>
                        <th>Action</th>
                     </tr>
                 </thead>
                 <tbody>
                    @foreach($leadings as $item)
                    <tr>
                       <td>{{$item->icon}} </td>
                       <td>{{ $item->title}}</td>
                       <td>{{ $item->short_description }}</td>
                       <td> <img src="{{ asset($item->leading_image) }}" style="width: 50px; height: 50px;">  </td>
                       <td>
                        <a href="{{ route('leading.edit',$item->id) }}" class="btn btn-info" title="Edit Data"><i class="fa fa-pencil"></i> </a>
                        <a href="{{ route('leading.delete',$item->id) }}" class="btn btn-danger" title="Delete Data" id="#">
                        <i class="fa fa-trash"></i>
                       </a>
                       </td>
                    </tr>
                     @endforeach
                 </tbody>
               </table>
               </div> <!-- table res.. end -->
             </div>  <!-- box body end -->
          </div>      <!-- box end -->
     </div> <!-- col end -->
</div> <!--  row end-->
</section> <!--  content end-->
</div> <!--  row end-->

@endsection

