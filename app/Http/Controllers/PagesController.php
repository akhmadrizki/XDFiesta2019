<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lomba;
use App\Syarat;
use App\KetentuanPeserta;
use App\Penilaian;
use App\WaktuTempat;
use App\Kontak;
use App\Hadiah;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function index(){
        $data = DB::table('lomba')
            ->select('lomba.id_lomba','lomba.judul','lomba.judul_nav','lomba.thumbnail','waktu_tempat.waktu')
            ->leftJoin('waktu_tempat', 'lomba.id_lomba', '=', 'waktu_tempat.id_lomba')
            ->get();

        return view('client.pages.xd-events-and-competitions', [
        'navActive' => 'events'
        ])->with('data',$data);
    }

    public function show($judul_nav)
    {
        $name=str_replace('-', ' ', $judul_nav);
        $inilomba = Lomba::all();
        $lomba = Lomba::where('judul_nav',$name)->get();
        $id=$lomba[0]->id_lomba;
        $syarat = Syarat::where('id_lomba',$id)->get();
        $ketentuan = KetentuanPeserta::where('id_lomba',$id)->get();
        $penilaian = Penilaian::where('id_lomba',$id)->get();
        $waktu = WaktuTempat::where('id_lomba',$id)->get();
        $kontak = Kontak::where('id_lomba',$id)->get();
        $hadiah = Hadiah::where('id_lomba',$id)->get();
        return view('client.pages.xd-events.index', [
            		'navActive' => 'events',
            		'subnavActive' => $name
                ])
                ->with('lomba',$lomba[0])
                ->with('inilomba',$inilomba)
                ->with('syarat',$syarat)
                ->with('ketentuan',$ketentuan)
                ->with('penilaian',$penilaian)
                ->with('waktu',isset($waktu[0])?$waktu[0]:"null")
                ->with('kontak',$kontak)
                ->with('hadiah',$hadiah)
                ;
    }
    
    // Downloading file
    public function download($file)
    {
        $file_name=str_replace('-', ' ', $file);
        $file_path = public_path('uploads/'.$file_name);
        return response()->download($file_path);
    }
}
