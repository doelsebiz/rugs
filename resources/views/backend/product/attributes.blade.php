@extends('backend.layouts.master')

@section('main-content')
 <!-- DataTales Example -->
<div class="container-fluid">
   <div class="row">
     <div class="col-md-12">
       <div class="card shadow mb-4">
     <div class="row">
         <div class="col-md-12">
            @include('backend.layouts.notification')
         </div>
     </div>
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary float-left">All Colors</h6>
      <a data-toggle="modal" data-target="#myModal" href="javascript:void(0)" class="btn btn-primary btn-sm float-right" data-toggle="tooltip" data-placement="bottom" title="Add User"><i class="fas fa-plus"></i> Add New Color</a>
    </div>
    <div class="modal fade" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Add New Color</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <!-- Modal body -->
          <div class="modal-body">
              <form method="POST" action="{{ url('admin/addnewcolor') }}">
                  @csrf
                  <label>Color Name</label>
                  <input class="form-control" type="text" name="color">
                  <br>
                  <label>Color Tone</label>
                  <input class="form-control" type="text" name="tone">
                  <br>
                  <button class="btn btn-success">Submit</button>
              </form>
          </div>
        </div>
      </div>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="order-dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Color Name</th>
              <th>Color Tone</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Color Name</th>
              <th>Color Tone</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
            @foreach($colors as $r)
                <tr>
                    <td>{{$r->colors}}</td>
                    <td>{{$r->tone}}</td>
                    <td>
                        <a data-toggle="modal" data-target="#myModal{{ $r->id }}" href="javscript:void(0)" class="btn btn-primary btn-sm float-left mr-1" style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" title="edit" data-placement="bottom"><i class="fas fa-eye"></i></a>
                    </td>
                </tr>
                <div class="modal fade" id="myModal{{ $r->id }}">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <!-- Modal Header -->
                      <div class="modal-header">
                        <h4 class="modal-title">Update Color</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <!-- Modal body -->
                      <div class="modal-body">
                        <form method="POST" action="{{ url('admin/updatecolor') }}">
                            @csrf
                            <input type="hidden" value="{{ $r->id }}" name="id">
                            <label>Color Name</label>
                            <input class="form-control" value="{{ $r->colors }}" type="text" name="color">
                            <br>
                            <label>Color Tone</label>
                            <input class="form-control" value="{{ $r->tone }}" type="text" name="tone">
                            <br>
                            <button class="btn btn-success">Submit</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
</div>
     </div>
   </div>
</div>
@endsection