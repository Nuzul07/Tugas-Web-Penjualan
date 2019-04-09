@extends('layouts.admin')
@section('content')
<section class="content">
	<div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Jenis</h3>
            </div>
            <div class="clearfix visible-sm-block"></div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{url('admin/jenis/update')}}" method="POST">
              @csrf
              <input type="hidden" name="id" value="{{$jenis->id}}">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Kode Jenis</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" value="{{$jenis->kode_jenis}}" name="kode_jenis" placeholder="Kode Jenis">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Jenis</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" value="{{$jenis->jenis}}" name="jenis" placeholder="Jenis">
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
