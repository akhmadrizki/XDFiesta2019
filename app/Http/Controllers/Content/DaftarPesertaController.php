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
        $lomba = Lomba::all();
        return view('admin.daftarPeserta')
        ->with('daftar', $daftar)
        ->with('lomba', $lomba);
    }
    public function daftar(Request $request)
    {
        $inilomba = Lomba::all();

        $daftar = new Daftar($request->all());
        $daftar->save();
        return redirect()->back()->with('allert', ['SELAMAT, Anda telah berhasil mendaftar 👌']);
    }
}
