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
            <form role="form" action="{{url('admin/detailbarangmasuk/update')}}" method="POST">
              @csrf
              <input type="hidden" name="id" value="{{$dtlbrg->id}}">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">No Nota</label>
                  <?php  
                  $bm = \App\BarangMasuk::all();
                  ?>
                  <select class="form-control" name="no_nota" required>
                    <option selected>{{$dtlbrg->no_nota}}</option>
                    @foreach($bm as $q)
                    <option value="{{$q->no_nota}}">{{$q->no_nota}} | {{$q->tgl_masuk}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Kode Barang</label>
                  <?php  
                  $b = \App\Barang::all();
                  ?>
                  <select class="form-control" name="kode_barang" required>
                    <option selected>{{$dtlbrg->kode_barang}}</option>
                    @foreach($b as $q)
                    <option value="{{$q->kode_barang}}">{{$q->kode_barang}} | {{$q->nama_barang}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Jumlah</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="jumlah" value="{{$dtlbrg->jumlah}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Subtotal</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="subtotal" value="{{$dtlbrg->subtotal}}">
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
