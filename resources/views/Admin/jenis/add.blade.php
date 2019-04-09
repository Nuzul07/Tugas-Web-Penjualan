@extends('layouts.admin')
@section('content')
<section class="content">
	<div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Jenis</h3>
            </div>
            <div class="clearfix visible-sm-block"></div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{url('admin/jenis/post')}}" method="POST">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Kode Jenis</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="kode_jenis" placeholder="Kode Jenis">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Jenis</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="jenis" placeholder="Jenis">
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
