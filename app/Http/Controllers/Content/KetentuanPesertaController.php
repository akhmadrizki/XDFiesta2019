<?php

namespace App\Http\Controllers\Content;

use Illuminate\Http\Request;
use App\Lomba;
use App\KetentuanPeserta;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class KetentuanPesertaController extends Controller
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
        $ketentuan=KetentuanPeserta::where('id_lomba',$lomba[0]->id_lomba)->get();
        return view('admin.ketentuan_peserta.create')->with('lomba',$lomba[0])
        ->with('iniketentuan',$ketentuan)->with('next','next');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ketentuan=new KetentuanPeserta;
        $ketentuan->id_lomba = $request->get('id_lomba');
        $ketentuan->deskripsi = $request->get('deskripsi');
        $ketentuan->save();
        if($request->get('next')=="next")
        return redirect()->action('Content\KetentuanPesertaController@create');
        elseif($request->get('next')=="show")
        return redirect()->action('Content\KetentuanPesertaController@show',$request->get('id_lomba'));
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
        $ketentuan=KetentuanPeserta::where('id_lomba',$id)->get();
        return view('admin.ketentuan_peserta.create')->with('lomba',$lomba[0])
        ->with('iniketentuan',$ketentuan)
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
        $ketentuan = KetentuanPeserta::where('id_ketentuan_peserta',$id)->get();
        $idlomba=$ketentuan[0]->id_lomba;
        $lomba = Lomba::where('id_lomba',$idlomba)->get();
        return view('admin.ketentuan_peserta.edit')->with('lomba',$lomba[0])->with('ketentuan',$ketentuan[0]);
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
        $id_ketentuan=$request->get('id_ketentuan');
        KetentuanPeserta::where('id_ketentuan_peserta',$id_ketentuan)->update(
            [
                'deskripsi'=>$request->get('deskripsi')
            ]
        );
        $lomba = Lomba::where('id_lomba',$id_lomba)->get();
        $syarat = KetentuanPeserta::where('id_lomba',$id_lomba)->get();
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
        $ketentuan = KetentuanPeserta::where('id_ketentuan_peserta',$id)->get();
        $idlomba=$ketentuan[0]->id_lomba;
        $dketentuan = KetentuanPeserta::where('id_ketentuan_peserta',$id);
        $dketentuan->delete();
        return redirect()->action('Content\LombaController@show',$idlomba);
    }
}
