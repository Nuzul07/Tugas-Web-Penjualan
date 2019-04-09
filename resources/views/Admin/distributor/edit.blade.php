@extends('layouts.admin')
@section('content')
<section class="content">
	<div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Distributor</h3>
            </div>
            <div class="clearfix visible-sm-block"></div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{url('admin/distributor/update')}}" method="POST">
              @csrf
              <input type="hidden" name="id" value="{{$distri->id}}">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Id Distributor</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" value="{{$distri->iddistributor}}" name="iddistributor" placeholder="Id Distributor">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama Distributor</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" value="{{$distri->nama_distributor}}" name="nama_distributor" placeholder="Nama Distributor">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Alamat</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" value="{{$distri->alamat}}" name="alamat" placeholder="Alamat">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Kota Asal</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="kota_asal" value="{{$distri->kota_asal}}" placeholder="Kota Asal">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" value="{{$distri->email}}" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">No Telpon</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" value="{{$distri->telpon}}" name="telpon" placeholder="No Telpon">
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
