@extends('layouts.admin')
@section('content')
<section class="content">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.semanticui.min.css">
	<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Jenis</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example" class="ui celled table" style="width:100%">
        <thead>
            <tr>
            	<th>No</th>
                <th>Kode Jenis</th>
                <th>Jenis</th>
                <th colspan="2" style="text-align: center;">Action</th>
            </tr>
        </thead>
        <tbody>
        	<?php  
        	$jenis = \App\Jenis::all();
        	$i = 1;
        	?>
        	@foreach($jenis as $n)
        	<tr>
        		<td>{{$i++}}</td>
        		<td>{{$n->kode_jenis}}</td>
        		<td>{{$n->jenis}}</td>
        		<td><a class="btn btn-warning btn-sm" style="float: right;" href="{{url('admin/jenis/edit/'.$n->id)}}">Edit</a></td>
        		<td><a class="btn btn-danger btn-sm" href="{{url('admin/jenis/delete/'.$n->id)}}">Delete</a></td>
        	</tr>
        	@endforeach
        </tbody>
    </table>
            <a href="{{url('admin/jenis/add')}}" class="btn btn-primary" style="float: right;"><i class="fas fa-plus"></i></a>
            </div>
            <!-- /.box-body -->
          </div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>     
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.semanticui.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js"></script>
</section>
@endsection
