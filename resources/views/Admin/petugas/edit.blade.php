@extends('layouts.admin')
@section('content')
<section class="content">
	<div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Petugas</h3>
            </div>
            <div class="clearfix visible-sm-block"></div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{url('admin/petugas/update')}}" method="POST">
              @csrf
              <input type="hidden" name="id" value="{{$petugas->id}}">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Id Petugas</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="idpetugas" value="{{$petugas->idpetugas}}" placeholder="Id Petugas">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama Petugas</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" value="{{$petugas->nama_petugas}}" name="nama_petugas" placeholder="Nama Petugas">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Alamat</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" value="{{$petugas->alamat}}" name="alamat" placeholder="Alamat">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" value="{{$petugas->email}}" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">No Telpon</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="telpon" value="{{$petugas->telpon}}" placeholder="No Telpon">
                </div>
                <div class="box-footer">
                <button type="submit" class="btn btn-primary btn-md" style="float: right;">Update</button>
              </div>
              </div>
            </form>
            </div>
        </div>
    </div>      
</section>
@endsection
