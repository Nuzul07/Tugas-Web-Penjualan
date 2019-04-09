@extends('layouts.admin')
@section('content')
<section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fab fa-sellcast"></i></span>
             <?php  
            $p = \App\Penjualan::all();
            ?>
            @foreach($p as $n)
            <div class="info-box-content">
              <span class="info-box-text">Penjualan</span>
              <span class="info-box-number">
                {{ $n->count() }}
              </span>
            </div>
            @endforeach
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fas fa-toolbox"></i></span>
            <?php  
            $barang = \App\Barang::all();
            ?>
            @foreach($barang as $n)
            <div class="info-box-content">
              <span class="info-box-text">Barang</span>
              <span class="info-box-number">
                {{ $n->count() }}
              </span>
            </div>
            @endforeach
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fas fa-truck-moving"></i></span>
             <?php  
            $barang = \App\Distributor::all();
            ?>
            @foreach($barang as $n)
            <div class="info-box-content">
              <span class="info-box-text">Distributor</span>
              <span class="info-box-number">
                {{$n->count()}}
              </span>
            </div>
            @endforeach
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fas fa-inbox"></i></span>
             <?php  
            $barang = \App\BarangMasuk::all();
            ?>
            @foreach($barang as $n)
            <div class="info-box-content">
              <span class="info-box-text">Barang Masuk</span>
              <span class="info-box-number">
                {{$n->count()}}
              </span>
            </div>
            @endforeach
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Main row -->
    </section>
    @endsection