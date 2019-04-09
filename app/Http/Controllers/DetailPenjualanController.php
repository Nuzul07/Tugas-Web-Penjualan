<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\DetailPenjualan;

class DetailPenjualanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
    	return view('Admin.dtlpenju.index');
    }

    public function add()
    {
    	return view('Admin.dtlpenju.add');
    }

    public function post(Request $r)
    {
    	$n = new DetailPenjualan;
    	$n->no_faktur = $r->input('no_faktur');
    	$n->kode_barang = $r->input('kode_barang');
    	$n->jumlah = $r->input('jumlah');
    	$n->subtotal = $r->input('subtotal');
    	$n->save();
    	return redirect(url('admin/detailpenjualan'));
    }

    public function edit($id)
    {
    	$dtlpenju = DetailPenjualan::find($id);
    	return view('Admin.dtlpenju.edit')->with('dtlpenju',$dtlpenju);
    }

    public function update(Request $r)
    {
    	$u = DetailPenjualan::find($r->input('id'));
    	$u->no_faktur = $r->input('no_faktur');
    	$u->kode_barang = $r->input('kode_barang');
    	$u->jumlah = $r->input('jumlah');
    	$u->subtotal = $r->input('subtotal');
    	$u->save();
    	return redirect(url('admin/detailpenjualan'));
    }

    public function delete($id)
    {
    	$dtlpenju = DetailPenjualan::find($id);
    	$dtlpenju->delete();
    	return redirect(url('admin/detailpenjualan'));
    }
}
