<?php

namespace App\Http\Controllers\Content;

use Illuminate\Http\Request;
use App\Lomba;
use App\WaktuTempat;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class WaktuTempatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inilomba=DB::select('SELECT * FROM lomba ORDER BY id_lomba DESC LIMIT 1');
        $iniwaktu=WaktuTempat::where('id_lomba',$inilomba[0]->id_lomba)->get();
        return view('admin.waktu_tempat.create')->with('lomba',$inilomba[0])
        ->with('iniwaktu',$iniwaktu)->with('next','next');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $waktu=new WaktuTempat;
        $waktu->id_lomba = $request->get('id_lomba');
        $waktu->tm = $request->get('tm');
        $waktu->tempat_tm = $request->get('tempat_tm');
        $waktu->tempat = $request->get('tempat');
        $waktu->waktu = $request->get('waktu');
        $waktu->save();
        if($request->get('next')=="next")
        return redirect()->action('Content\HadiahController@create');
        elseif($request->get('next')=="show")
        return redirect()->action('Content\LombaController@show',$request->get('id_lomba'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lomba=Lomba::where('id_lomba',$id)->get();
        $waktu=WaktuTempat::where('id_lomba',$id)->get();
        return view('admin.waktu_tempat.create')->with('lomba',$lomba[0])->with('iniwaktu',$waktu)
        ->with('next','show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $waktu = WaktuTempat::where('id_waktu_tempat',$id)->get();
        $idlomba = $waktu[0]->id_lomba;
        $lomba = Lomba::where('id_lomba',$idlomba)->get();
        return view('admin.waktu_tempat.edit')->with('lomba',$lomba[0])->with('waktu',$waktu[0]);
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
        $id_waktu=$request->get('id_waktu');
        WaktuTempat::where('id_waktu_tempat',$id_waktu)->update(
            [
                'tm'=>$request->get('tm'),
                'tempat_tm'=>$request->get('tempat_tm'),
                'waktu'=>$request->get('waktu'),
                'tempat'=>$request->get('tempat'),
            ]
        );
        return redirect()->action('Content\LombaController@show',$id_lomba);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
