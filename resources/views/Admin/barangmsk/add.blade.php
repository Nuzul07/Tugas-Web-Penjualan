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
            <form role="form" action="{{url('admin/barangmasuk/post')}}" method="POST">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">No Nota</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="no_nota" placeholder="No Nota">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Tanggal Masuk</label>
                  <input type="date" class="form-control" id="exampleInputPassword1" name="tgl_masuk" placeholder="Tanggal Masuk">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Id Distributor</label>
                  <?php  
                  $idb = \App\Distributor::all();
                  ?>
                  <select class="form-control" name="iddistributor" required>
                    <option selected>Id Distributor</option>
                    @foreach($idb as $q)
                    <option value="{{$q->iddistributor}}">{{$q->iddistributor}} | {{$q->nama_distributor}}</option>
                    @endforeach
                  </select>
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
