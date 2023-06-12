@extends('admin.admin_master')

{{-- section id is yeild name  --}}

@section('admin')

<div class="container-full">
 <section class="content">

<div class="row">
    <div class="col-lg-12">

       <div class="box">
         <div class="box-header with-border">
           <h3 class="box-title">All Director List</h3>
         </div>
         <!-- /.box-header -->
         <div class="box-body">
             <div class="table-responsive">
               <table id="example1" class="table table-bordered table-striped">
                 <thead>
                     <tr>
                        <th>Director Image</th>
                        <th>Director Name</th>
                        <th>Director Designation </th>
                        <th>Action</th>
                     </tr>
                 </thead>
                 <tbody>
                    @foreach($BoardDirectors as $item)
                    <tr>
                       <td> <img src="{{ asset($item->director_image) }}" style="width: 60px; height: 50px;">  </td>
                       <td>{{ $item->director_name }}</td>
                       <td>{{ $item->director_designation }}</td>
                       <td>
                        <a href="{{ route('director.edit',$item->id) }}" class="btn btn-info" title="Edit Data"><i class="fa fa-pencil"></i> </a>
                        <a href="{{ route('director.delete',$item->id) }}" class="btn btn-danger" title="Delete Data" id="#">
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

