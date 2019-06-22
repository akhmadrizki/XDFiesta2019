<?php

namespace App\Http\Controllers\Content;

use Illuminate\Http\Request;
use App\Lomba;
use App\Syarat;
use App\Http\Controllers\Controller;
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lomba=DB::select('SELECT * FROM lomba ORDER BY id_lomba DESC LIMIT 1');
        $inisyarat=Syarat::where('id_lomba',$lomba[0]->id_lomba)->get();
        return view('admin.syarat.create')->with('lomba',$lomba[0])->with('inisyarat',$inisyarat)
        ->with('next','next');
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
        $syarat->id_lomba = $request->get('id_lomba');
        $syarat->deskripsi = $request->get('deskripsi');
        $syarat->save();
        if($request->get('next')=="next")
        return redirect()->action('Content\SyaratController@create');
        elseif($request->get('next')=="show")
        return redirect()->action('Content\SyaratController@show',$request->get('id_lomba'));
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
        if(!isset($lomba[0]))
        abort(404);
        $syarat=Syarat::where('id_lomba',$id)->get();
        return view('admin.syarat.create')->with('lomba',$lomba[0])->with('inisyarat',$syarat)
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
        $syarat = Syarat::where('id_syarat',$id)->get();
        $idlomba = $syarat[0]->id_lomba;
        $lomba = Lomba::where('id_lomba',$idlomba)->get();
        return view('admin.syarat.edit')->with('lomba',$lomba[0])->with('syarat',$syarat[0]);
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
        $syarat = Syarat::where('id_syarat',$id)->get();
        $idlomba=$syarat[0]->id_lomba;
        $dsyarat = Syarat::where('id_syarat',$id);
        $dsyarat->delete();
        return redirect()->action('Content\LombaController@show',$idlomba);
    }
}
