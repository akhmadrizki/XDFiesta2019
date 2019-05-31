<?php

namespace App\Http\Controllers\Content;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Lomba;
use App\Daftar;


class DaftarPesertaController extends Controller
{
    public function index()
    {   
        $data = DB::table('lomba')
            ->select('lomba.id_lomba','daftars.*')
            ->join('daftars', 'lomba.id_lomba', '=', 'daftars.id_lomba')
            ->get();
        $data= Daftar::all();
    	return view('admin.daftarPeserta')->with('inidata',$data);
    }
}
