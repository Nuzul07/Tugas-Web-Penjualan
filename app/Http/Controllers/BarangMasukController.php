<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\BarangMasuk;

class BarangMasukController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
    	return view('Admin.barangmsk.index');
    }

    public function add()
    {
    	return view('Admin.barangmsk.add');
    }

    public function post(Request $r)
    {
    	$n = new BarangMasuk;
    	$n->no_nota = $r->input('no_nota');
    	$n->tgl_masuk = $r->input('tgl_masuk');
    	$n->iddistributor = $r->input('iddistributor');
    	$n->idpetugas = $r->input('idpetugas');
    	$n->total = $r->input('total');
    	$n->save();
    	return redirect(url('admin/barangmasuk'));
    }

    public function edit($id)
    {
    	$brgmsk = BarangMasuk::find($id);
    	return view('Admin.barangmsk.edit')->with('brgmsk',$brgmsk);
    }

    public function update(Request $r)
    {
    	$u = BarangMasuk::find($r->input('id'));
    	$u->no_nota = $r->input('no_nota');
        $u->tgl_masuk = $r->input('tgl_masuk');
        $u->iddistributor = $r->input('iddistributor');
        $u->idpetugas = $r->input('idpetugas');
        $u->total = $r->input('total');
        $u->save();
        return redirect(url('admin/barangmasuk'));
    }

    public function delete($id)
    {
    	$brgmsk = BarangMasuk::find($id);
    	$brgmsk->delete();
    	return redirect(url('admin/barangmasuk'));	
    }
}
