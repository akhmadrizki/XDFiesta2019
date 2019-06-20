<?php

namespace App\Exports;

use App\Daftar;
use App\Lomba;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class DaftarsExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     return Daftar::all();
    // }

    public function view(): View
    {
    	$daftar = Daftar::all();
        $lomba = Lomba::all();
        return view('export.index')
        ->with('daftar', $daftar)
        ->with('lomba', $lomba);
    }
}
