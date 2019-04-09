@extends('layouts.admin')
@section('content')
<section class="content">
	<div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Penjualan</h3>
            </div>
            <div class="clearfix visible-sm-block"></div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{url('admin/penjualan/post')}}" method="POST">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">No Faktur</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="no_faktur" placeholder="No Faktur">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Tanggal Penjualan</label>
                  <input type="date" class="form-control" id="exampleInputPassword1" name="tgl_penjualan" placeholder="Tanggal Penjualan">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Id Petugas</label>
                  <?php  
                  $idp = \App\Petugas::all();
                  ?>
                  <select class="form-control" name="idpetugas" required>
                    <option selected>Id Petugas</option>
                    @foreach($idp as $q)
                    <option value="{{$q->idpetugas}}">{{$q->idpetugas}} | {{$q->nama_petugas}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Bayar</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="bayar" placeholder="Bayar">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Sisa</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="sisa" placeholder="Sisa">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Total</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="total" placeholder="Total">
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
