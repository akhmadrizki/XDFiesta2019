<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Daftar;
use App\Lomba;

class RsvnController extends Controller
{
    public function pubg(Request $request)
    {
    	$daftar = \App\Daftar::all();
    	\App\Daftar::create($request->all());
    	// return $request->all();
    }
}
