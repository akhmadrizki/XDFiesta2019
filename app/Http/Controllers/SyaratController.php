<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lomba;
use App\Syarat;
use Illuminate\Support\Facades\DB;

class SyaratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.syarat.create')->with('id_lomba',$id_lomba);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $syarat=new Syarat;
        $id_lomba=$request->id_lomba;
        $syarat->id_lomba = $request->get('id_lomba');
        $syarat->deskripsi = $request->get('deskripsi');
        $syarat->save();
        $inilomba=DB::select('SELECT * FROM lomba ORDER BY id_lomba DESC LIMIT 1');
        return view('admin.syarat.create')->with('inilomba',$inilomba);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inilomba=Lomba::where('id_lomba',$id)->get();
        // return $lomba;
        // $inilomba=$lomba[0];
        return view('admin.syarat.create')->with('inilomba',$inilomba);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $syarat = Syarat::where('id_syarat',$id)->get();
        $idlomba = Syarat::select('id_lomba')->where('id_syarat',$id)->get();
        $inilomba = Lomba::where('id_lomba',$idlomba[0]->id_lomba)->get();
        return view('admin.syarat.edit')->with('inilomba',$inilomba)->with('syarat',$syarat);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id_lomba=$request->get('id_lomba');
        $id_syarat=$request->get('id_syarat');
        Syarat::where('id_syarat',$id_syarat)->update(
            [
                'deskripsi'=>$request->get('deskripsi')
            ]
        );
        $lomba = Lomba::where('id_lomba',$id_lomba)->get();
        $syarat = Syarat::where('id_lomba',$id_lomba)->get();
        return view('admin.lomba.show')->with('lomba',$lomba)->with('syarat',$syarat);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $syarat = Syarat::where('id_syarat',$id)->get();
        $idlomba=$syarat[0]->id_lomba;
        $dsyarat = Syarat::where('id_syarat',$id);
        $dsyarat->delete();
        // $syarat = Syarat::where('id_lomba',$id_lomba)->get();
        return redirect()->action('LombaController@show',['id' => $idlomba]);
    }
}
