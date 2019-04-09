<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\DetailBarangmsk;

class DetailBrgMskController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
    	return view('Admin.detailbrg.index');
    }

    public function add()
    {
    	return view('Admin.detailbrg.add');
    }

    public function post(Request $r)
    {
    	$n = new DetailBarangmsk;
    	$n->no_nota = $r->input('no_nota');
    	$n->kode_barang = $r->input('kode_barang');
    	$n->jumlah = $r->input('jumlah');
    	$n->subtotal = $r->input('subtotal');
    	$n->save();
    	return redirect(url('admin/detailbarangmasuk'));
    }

    public function edit($id)
    {
    	$dtlbrg = DetailBarangmsk::find($id);
    	return view('Admin.detailbrg.edit')->with('dtlbrg',$dtlbrg);
    }

    public function update(Request $r)
    {
    	$u = DetailBarangmsk::find($r->input('id'));
    	$u->no_nota = $r->input('no_nota');
    	$u->kode_barang = $r->input('kode_barang');
    	$u->jumlah = $r->input('jumlah');
    	$u->subtotal = $r->input('subtotal');
    	$u->save();
    	return redirect(url('admin/detailbarangmasuk'));	
    }

    public function delete($id)
    {
    	$dtlbrg = DetailBarangmsk::find($id);
    	$dtlbrg->delete();
    	return redirect(url('admin/detailbarangmasuk'));
    }
}
