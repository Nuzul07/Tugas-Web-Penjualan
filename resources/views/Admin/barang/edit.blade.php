@extends('layouts.admin')
@section('content')
<section class="content">
	<div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Barang</h3>
            </div>
            <div class="clearfix visible-sm-block"></div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{url('admin/barang/update')}}" method="POST">
              @csrf
              <input type="hidden" name="id" value="{{$barang->id}}">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Kode Barang</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="kode_barang" value="{{$barang->kode_barang}}" placeholder="Kode Barang">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama Barang</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="nama_barang" value="{{$barang->nama_barang}}" placeholder="Nama Barang">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Kode Jenis</label>
                  <?php  
                  $kode = \App\Jenis::all();
                  ?>
                  <select class="form-control" name="kode_jenis" required>
                    <option selected>{{$barang->kode_jenis}}</option>
                    @foreach($kode as $q)
                    <option value="{{$q->kode_jenis}}">{{$q->kode_jenis}} | {{$q->jenis}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Harga Net</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" value="{{$barang->harga_net}}" name="harga_net" placeholder="Harga Net">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Harga Jual</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="harga_jual" value="{{$barang->harga_jual}}" placeholder="Harga Jual">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Stok</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" value="{{$barang->stok}}" name="stok" placeholder="Stok">
                </div>
                <div class="box-footer">
                <button type="submit" class="btn btn-primary" style="float: right;">Update</button>
              </div>
              </div>
            </form>
            </div>
        </div>
    </div>      
</section>
@endsection
