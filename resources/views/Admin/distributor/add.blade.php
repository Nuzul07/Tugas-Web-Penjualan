@extends('layouts.admin')
@section('content')
<section class="content">
	<div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Distributor</h3>
            </div>
            <div class="clearfix visible-sm-block"></div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{url('admin/distributor/post')}}" method="POST">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Id Distributor</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="iddistributor" placeholder="Id Distributor">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama Distributor</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="nama_distributor" placeholder="Nama Distributor">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Alamat</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="alamat" placeholder="Alamat">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Kota Asal</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="kota_asal" placeholder="Kota Asal">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">No Telpon</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="telpon" placeholder="No Telpon">
                </div>
                <div class="box-footer">
                <button type="submit" class="btn btn-primary btn-md" style="float: right;">Add</button>
              </div>
              </div>
            </form>
            </div>
        </div>
    </div>      
</section>
@endsection
