<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Penjualan;

class PenjualanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
    	return view('Admin.penjualan.index');
    }

    public function add()
    {
    	return view('Admin.penjualan.add');
    }

    public function post(Request $r)
    {
    	$n = new Penjualan;
    	$n->no_faktur = $r->input('no_faktur');
    	$n->tgl_penjualan = $r->input('tgl_penjualan');
    	$n->idpetugas = $r->input('idpetugas');
    	$n->bayar = $r->input('bayar');
    	$n->sisa = $r->input('sisa');
    	$n->total = $r->input('total');
    	$n->save();
    	return redirect(url('admin/penjualan'));
    }

    public function edit($id)
    {
    	$penju = Penjualan::find($id);
    	return view('Admin.penjualan.edit')->with('penju',$penju);
    }

    public function update(Request $r)
    {
    	$n = Penjualan::find($r->input('id'));
    	$n->no_faktur = $r->input('no_faktur');
    	$n->tgl_penjualan = $r->input('tgl_penjualan');
    	$n->idpetugas = $r->input('idpetugas');
    	$n->bayar = $r->input('bayar');
    	$n->sisa = $r->input('sisa');
    	$n->total = $r->input('total');
    	$n->save();
    	return redirect(url('admin/penjualan'));
    }

    public function delete($id)
    {
    	$penju = Penjualan::find($id);
        $penju->delete();
        return redirect(url('admin/penjualan'));
    }
}
