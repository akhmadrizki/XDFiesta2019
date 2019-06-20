<?php

namespace App\Http\Controllers\Content;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Daftar;
use App\Lomba;
use App\Exports\DaftarsExport;
use Maatwebsite\Excel\Facades\Excel;

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
        // return redirect()->to(url()->previous() . '#myModal');
    }
    public function export() 
    {
        $daftar = Daftar::all();
        $lomba = Lomba::all();
        return Excel::download(new DaftarsExport, 'peserta.xlsx');
    }
}
