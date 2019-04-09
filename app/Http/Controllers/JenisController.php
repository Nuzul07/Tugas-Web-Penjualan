<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Jenis;

class JenisController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
    	return view('Admin.jenis.index');
    }

    public function add()
    {
    	return view('Admin.jenis.add');
    }

    public function post(Request $r)
    {
    	$n = new Jenis;
    	$n->kode_jenis = $r->input('kode_jenis');
    	$n->jenis = $r->input('jenis');
    	$n->save();
    	return redirect(url('admin/jenis'));
    }

    public function edit($id)
    {
    	$jenis = Jenis::find($id);
    	return view('Admin.jenis.edit')->with('jenis',$jenis);
    }

    public function update(Request $r)
    {
    	$u = Jenis::find($r->input('id'));
    	$u->kode_jenis = $r->input('kode_jenis');
    	$u->jenis = $r->input('jenis');
    	$u->save();
    	return redirect(url('admin/jenis'));
    }

    public function delete($id)
    {
    	$jenis = Jenis::find($id);
    	$jenis->delete();
    	return redirect(url('admin/jenis'));
    }
}
