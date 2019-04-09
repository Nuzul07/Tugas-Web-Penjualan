<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Petugas;

class PetugasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
    	return view('Admin.petugas.index');
    }

    public function add()
    {
    	return view('Admin.petugas.add');
    }

    public function post(Request $r)
    {
    	$n = new Petugas;
    	$n->idpetugas = $r->input('idpetugas');
    	$n->nama_petugas = $r->input('nama_petugas');
    	$n->alamat = $r->input('alamat');
    	$n->email = $r->input('email');
    	$n->telpon = $r->input('telpon');
    	$n->save();
    	return redirect(url('admin/petugas'));
    }

    public function edit($id)
    {
    	$petugas = Petugas::find($id);
    	return view('Admin.petugas.edit')->with('petugas',$petugas);
    }

    public function update(Request $r)
    {
    	$u = Petugas::find($r->input('id'));
    	$u->idpetugas = $r->input('idpetugas');
        $u->nama_petugas = $r->input('nama_petugas');
    	$u->alamat = $r->input('alamat');
    	$u->email = $r->input('email');
    	$u->telpon = $r->input('telpon');
    	$u->save();
    	return redirect(url('admin/petugas'));
    }

    public function delete($id)
    {
    	$petugas = Petugas::find($id);
    	$petugas->delete();
    	return redirect(url('admin/petugas'));
    }
}
