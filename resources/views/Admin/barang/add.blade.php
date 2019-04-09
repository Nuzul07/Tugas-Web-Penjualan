@extends('layouts.admin')
@section('content')
<section class="content">
	<div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Barang</h3>
            </div>
            <div class="clearfix visible-sm-block"></div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{url('admin/barang/post')}}" method="POST">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Kode Barang</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="kode_barang" placeholder="Kode Barang">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama Barang</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="nama_barang" placeholder="Nama Barang">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Kode Jenis</label>
                  <?php  
                  $kode = \App\Jenis::all();
                  ?>
                  <select class="form-control" name="kode_jenis" required>
                    <option selected>Kode Jenis</option>
                    @foreach($kode as $q)
                    <option value="{{$q->kode_jenis}}">{{$q->kode_jenis}} | {{$q->jenis}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Harga Net</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="harga_net" placeholder="Harga Net">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Harga Jual</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="harga_jual" placeholder="Harga Jual">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Stok</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="stok" placeholder="Stok">
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
