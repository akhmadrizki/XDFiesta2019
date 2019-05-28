<?php

namespace App\Http\Controllers\Content;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Daftar;
use App\Lomba;

class DaftarPesertaController extends Controller
{
    public function index()
    {
    	$daftar = Daftar::all();
    	return view('admin.daftarPeserta',['daftar' => $daftar]);
    }
    public function daftar(Request $request)
    {
    	// return $request->all();
    	// $daftar = Daftar::get()->groupBy('id_lomba');
    	Daftar::create($request->all());
    }
}
