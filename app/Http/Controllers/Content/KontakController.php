<?php

namespace App\Http\Controllers\Content;

use Illuminate\Http\Request;
use App\Lomba;
use App\Kontak;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class KontakController extends Controller
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
        $inikontak=Kontak::where('id_lomba',$inilomba[0]->id_lomba)->get();
        return view('admin.kontak.create')->with('lomba',$inilomba[0])
        ->with('inikontak',$inikontak)->with('next','next');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kontak=new Kontak;
        $kontak->id_lomba = $request->get('id_lomba');
        $kontak->kontak = $request->get('kontak');
        $kontak->save();
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
        $kontak=Kontak::where('id_lomba',$id)->get();
        return view('admin.kontak.create')->with('lomba',$lomba[0])->with('inikontak',$kontak)
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
        $kontak = Kontak::where('id_kontak',$id)->get();
        $idlomba = $kontak[0]->id_lomba;
        $lomba = Lomba::where('id_lomba',$idlomba)->get();
        return view('admin.kontak.edit')->with('lomba',$lomba[0])->with('kontak',$kontak[0]);
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
        $id_kontak=$request->get('id_kontak');
        Kontak::where('id_kontak',$id_kontak)->update(
            [
                'kontak'=>$request->get('kontak')
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
        $kontak = Kontak::where('id_kontak',$id)->get();
        $idlomba=$kontak[0]->id_lomba;
        $dkontak = Kontak::where('id_kontak',$id);
        $dkontak->delete();
        return redirect()->action('Content\LombaController@show',$idlomba);
    }
}
