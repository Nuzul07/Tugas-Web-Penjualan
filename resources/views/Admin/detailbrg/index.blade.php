@extends('layouts.admin')
@section('content')
<section class="content">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.semanticui.min.css">
	<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Detail Barang Masuk</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example" class="ui celled table" style="width:100%">
        <thead>
            <tr>
            	<th>No</th>
                <th>No Nota</th>
                <th>Kode Barang</th>
                <th>Jumlah</th>
                <th>Subtotal</th>
                <th colspan="2" style="text-align: center;">Action</th>
            </tr>
        </thead>
        <tbody>
        	<?php  
        	$brgmsk = \App\DetailBarangMsk::all();
        	$i = 1;
        	?>
        	@foreach($brgmsk as $n)
        	<tr>
        		<td>{{$i++}}</td>
        		<td>{{$n->no_nota}}</td>
        		<td>{{$n->kode_barang}}</td>
        		<td>{{$n->jumlah}}</td>
        		<td>{{$n->subtotal}}</td>
        		<td><a class="btn btn-warning btn-sm" style="float: right;" href="{{url('admin/detailbarangmasuk/edit/'.$n->id)}}">Edit</a></td>
        		<td><a class="btn btn-danger btn-sm" href="{{url('admin/detailbarangmasuk/delete/'.$n->id)}}">Delete</a></td>
        	</tr>
        	@endforeach
        </tbody>
    </table>
            <a href="{{url('admin/detailbarangmasuk/add')}}" class="btn btn-primary" style="float: right;"><i class="fas fa-plus"></i></a>
            </div>
            <!-- /.box-body -->
          </div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>     
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.semanticui.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js"></script>
</section>
@endsection
