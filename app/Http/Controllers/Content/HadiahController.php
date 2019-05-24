<?php

namespace App\Http\Controllers\Content;

use Illuminate\Http\Request;
use App\Lomba;
use App\Hadiah;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class HadiahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inilomba=DB::select('SELECT * FROM lomba ORDER BY id_lomba DESC LIMIT 1');
        $inihadiah=Hadiah::where('id_lomba',$inilomba[0]->id_lomba)->get();
        return view('admin.hadiah.create')->with('lomba',$inilomba[0])
        ->with('inihadiah',$inihadiah);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hadiah=new Hadiah;
        $hadiah->id_lomba = $request->get('id_lomba');
        $hadiah->deskripsi = $request->get('deskripsi');
        $hadiah->save();
        if($request->get('next')=="show")
        return redirect()->action('Content\HadiahController@show',$request->get('id_lomba'));
        return redirect()->action('Content\HadiahController@create');
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
        $hadiah=Hadiah::where('id_lomba',$id)->get();
        return view('admin.hadiah.create')->with('lomba',$lomba[0])->with('inihadiah',$hadiah)
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
        $hadiah = Hadiah::where('id_hadiah',$id)->get();
        $idlomba = $hadiah[0]->id_lomba;
        $lomba = Lomba::where('id_lomba',$idlomba)->get();
        return view('admin.hadiah.edit')->with('lomba',$lomba[0])->with('hadiah',$hadiah[0]);
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
        $id_hadiah=$request->get('id_hadiah');
        Hadiah::where('id_hadiah',$id_hadiah)->update(
            [
                'deskripsi'=>$request->get('deskripsi')
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
        $hadiah = Hadiah::where('id_hadiah',$id)->get();
        $idlomba=$hadiah[0]->id_lomba;
        $dhadiah = Hadiah::where('id_hadiah',$id);
        $dhadiah->delete();
        return redirect()->action('Content\LombaController@show',$idlomba);
    }
}
