@extends('admin.admin_master')

{{-- section id is yeild name  --}}

@section('admin')

<div class="container-full">
 <section class="content">

<div class="row">
    <div class="col-lg-12">

       <div class="box">
         <div class="box-header with-border">
           <h3 class="box-title">Contact Client</h3>
         </div>
         <!-- /.box-header -->
         <div class="box-body">
             <div class="table-responsive">
               <table id="example1" class="table table-bordered table-striped">
                 <thead>
                     <tr>
                        <th>Client Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Action</th>
                     </tr>
                 </thead>
                 <tbody>
                    @foreach($contacts as $item)
                    <tr>
                       <td> {{$item->name}} </td>
                       <td>{{ $item->phone }}</td>
                       <td>{{ $item->email }}</td>
                       <td>{{ $item->subject }}</td>
                       <td>{{ $item->message }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td style="color:rgb(207, 141, 27)">{{ Carbon\Carbon::parse($item->last_seen)->diffForHumans() }}</td>
                       <td>
                        {{-- <a href="" class="btn btn-info" title="Edit Data"><i class="fa fa-pencil"></i> </a> --}}
                        <a href="{{ route('contact.delete',$item->id) }}" class="btn btn-danger" title="Delete Data" id="#">
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

