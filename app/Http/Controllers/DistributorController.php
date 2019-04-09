<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Distributor;

class DistributorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
    	return view('Admin.distributor.index');
    }

    public function add()
    {
    	return view('Admin.distributor.add');
    }

    public function post(Request $r)
    {
    	$n = new Distributor;
    	$n->iddistributor = $r->input('iddistributor');
    	$n->nama_distributor = $r->input('nama_distributor');
    	$n->alamat = $r->input('alamat');
    	$n->kota_asal = $r->input('kota_asal');
    	$n->email = $r->input('email');
    	$n->telpon = $r->input('telpon');
    	$n->save();
    	return redirect(url('admin/distributor'));
    }

    public function edit($id)
    {
    	$distri = Distributor::find($id);
    	return view('Admin.distributor.edit')->with('distri',$distri);
    }

    public function update(Request $r)
    {
    	$u = Distributor::find($r->input('id'));
    	$u->iddistributor = $r->input('iddistributor');
    	$u->nama_distributor = $r->input('nama_distributor');
    	$u->alamat = $r->input('alamat');
    	$u->kota_asal = $r->input('kota_asal');
    	$u->email = $r->input('email');
    	$u->telpon = $r->input('telpon');
    	$u->save();
    	return redirect(url('admin/distributor'));
    }

    public function delete($id)
    {
    	$distri = Distributor::find($id);
    	$distri->delete();
    	return redirect(url('admin/distributor'));
    }
}
