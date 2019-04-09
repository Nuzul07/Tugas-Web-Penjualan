@extends('layouts.admin')
@section('content')
<section class="content">
	<div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Barang Masuk</h3>
            </div>
            <div class="clearfix visible-sm-block"></div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{url('admin/detailpenjualan/post')}}" method="POST">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">No Faktur</label>
                  <?php  
                  $p = \App\Penjualan::all();
                  ?>
                  <select class="form-control" name="no_faktur" required>
                    <option selected>No Faktur</option>
                    @foreach($p as $q)
                    <option value="{{$q->no_faktur}}">{{$q->no_faktur}} | {{$q->tgl_penjualan}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Kode Barang</label>
                  <?php  
                  $b = \App\Barang::all();
                  ?>
                  <select class="form-control" name="kode_barang" required>
                    <option selected>Kode Barang</option>
                    @foreach($b as $q)
                    <option value="{{$q->kode_barang}}">{{$q->kode_barang}} | {{$q->nama_barang}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Jumlah</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="jumlah" placeholder="Jumlah">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Subtotal</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="subtotal" placeholder="Subtotal">
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
