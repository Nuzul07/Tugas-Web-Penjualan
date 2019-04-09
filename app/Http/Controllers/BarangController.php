<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Barang;

class BarangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
    	return view('Admin.barang.index');
    }

    public function add()
    {
    	return view('Admin.barang.add');
    }

    public function post(Request $r)
    {
    	$n = new Barang;
    	$n->kode_barang = $r->input('kode_barang');
    	$n->nama_barang = $r->input('nama_barang');
    	$n->kode_jenis = $r->input('kode_jenis');
    	$n->harga_net = $r->input('harga_net');
    	$n->harga_jual = $r->input('harga_jual');
    	$n->stok = $r->input('stok');
    	$n->save();
    	return redirect(url('admin/barang'));
    }

    public function edit($id)
    {
    	$barang = Barang::find($id);
    	return view('Admin.barang.edit')->with('barang',$barang);
    }

    public function update(Request $r)
    {
    	$u = Barang::find($r->input('id'));
    	$u->kode_barang = $r->input('kode_barang');
    	$u->nama_barang = $r->input('nama_barang');
    	$u->kode_jenis = $r->input('kode_jenis');
    	$u->harga_net = $r->input('harga_net');
    	$u->harga_jual = $r->input('harga_jual');
    	$u->stok = $r->input('stok');
    	$u->save();
    	return redirect(url('admin/barang'));
    }

    public function delete($id)
    {
    	$barang = Barang::find($id);
    	$barang->delete();
    	return redirect(url('admin/barang'));
    }
}
