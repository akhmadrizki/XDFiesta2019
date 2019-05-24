<?php

namespace App\Http\Controllers\Content;

use Illuminate\Http\Request;
use App\Lomba;
use App\Penilaian;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PenilaianController extends Controller
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
        $inipenilaian=Penilaian::where('id_lomba',$inilomba[0]->id_lomba)->get();
        return view('admin.penilaian.create')->with('lomba',$inilomba[0])
        ->with('inipenilaian',$inipenilaian)->with('next','next');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $penilaian=new Penilaian;
        $penilaian->id_lomba = $request->get('id_lomba');
        $penilaian->deskripsi = $request->get('deskripsi');
        $penilaian->save();
        if($request->get('next')=="next")
        return redirect()->action('Content\PenilaianController@create');
        elseif($request->get('next')=="show")
        return redirect()->action('Content\PenilaianController@show',$request->get('id_lomba'));
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
        $penilaian=Penilaian::where('id_lomba',$id)->get();
        return view('admin.penilaian.create')->with('lomba',$lomba[0])->with('inipenilaian',$penilaian)
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
        $penilaian = Penilaian::where('id_penilaian',$id)->get();
        $idlomba = $penilaian[0]->id_lomba;
        $lomba = Lomba::where('id_lomba',$idlomba)->get();
        return view('admin.penilaian.edit')->with('lomba',$lomba[0])->with('penilaian',$penilaian[0]);
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
        $id_penilaian=$request->get('id_penilaian');
        Penilaian::where('id_penilaian',$id_penilaian)->update(
            [
                'deskripsi'=>$request->get('deskripsi')
            ]
        );
        $lomba = Lomba::where('id_lomba',$id_lomba)->get();
        $penilaian = Penilaian::where('id_lomba',$id_lomba)->get();
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
        $penilaian = Penilaian::where('id_penilaian',$id)->get();
        $idlomba=$penilaian[0]->id_lomba;
        $dpenilaian = Penilaian::where('id_penilaian',$id);
        $dpenilaian->delete();
        return redirect()->action('Content\LombaController@show',$idlomba);
    }
}
