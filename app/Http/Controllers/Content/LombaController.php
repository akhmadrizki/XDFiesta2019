<?php

namespace App\Http\Controllers\Content;

use Illuminate\Http\Request;
use App\Lomba;
use App\Syarat;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class LombaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lomba =  Lomba::all();
        return view('admin.lomba.index')->with('lomba',$lomba);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.lomba.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        $pic=$request->file('pic');
        $lomba = new Lomba;
        $judul=$request->get('judul');
        $count =count(Lomba::where('judul',$judul)->get());
        if($count>0){
            return view('admin.lomba.create')->with('sama','Terdapat lomba yang sama, silahkan coba lagi');
        }
        $lomba->judul = $request->get('judul');
        $lomba->deskripsi = $request->get('deskripsi');
        $lomba->tanggal = $request->get('tanggal');
        $lomba->lokasi = $request->get('lokasi');
        $lomba->penyelenggara = $request->get('penyelenggara');
        $lomba->hadiah = $request->get('hadiah');
        $lomba->waktu = $request->get('waktu');
        if($pic!=null){
        $extension=$pic->getClientOriginalExtension();
        $name = $request->judul;
        Storage::disk('public')->put($name.'.'.$extension,  File::get($pic));
        $lomba->pic = $name.'.'.$extension;
        }
        $lomba->save();
        $inilomba=DB::select('SELECT * FROM lomba ORDER BY id_lomba DESC LIMIT 1');
        $id_lomba=$inilomba[0]->id_lomba;
        return redirect()->action('Content\SyaratController@create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lomba = Lomba::where('id_lomba',$id)->get();
        $syarat = Syarat::where('id_lomba',$id)->get();
        return view('admin.lomba.show')->with('lomba',$lomba)->with('syarat',$syarat);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lomba = Lomba::where('id_lomba',$id)->get();
        return view('admin.lomba.edit')->with('lomba',$lomba);
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
        $id=$request->get('id_lomba');
        $pic=$request->file('pic');
        if($pic!=null){
        $extension=$pic->getClientOriginalExtension();
        $name = $request->judul;
        Storage::disk('public')->put($name.'.'.$extension,  File::get($pic));
        Lomba::where('id_lomba',$id)->update(
            [
                'judul'=>$request->get('judul'),
                'deskripsi'=>$request->get('deskripsi'),
                'tanggal'=>$request->get('tanggal'),
                'lokasi'=>$request->get('lokasi'),
                'penyelenggara'=>$request->get('penyelenggara'),
                'hadiah'=>$request->get('hadiah'),
                'waktu'=>$request->get('waktu'),
                'pic'=>$name.'.'.$extension
            ]
        );
        }
        else{
        Lomba::where('id_lomba',$id)->update(
            [
                'judul'=>$request->get('judul'),
                'deskripsi'=>$request->get('deskripsi'),
                'tanggal'=>$request->get('tanggal'),
                'lokasi'=>$request->get('lokasi'),
                'penyelenggara'=>$request->get('penyelenggara'),
                'hadiah'=>$request->get('hadiah'),
                'waktu'=>$request->get('waktu')
            ]
        );
        }
        $lomba = Lomba::where('id_lomba',$id)->get();
        $syarat = Syarat::where('id_lomba',$id)->get();
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
        $lomba = Lomba::where('id_lomba',$id);
        $lomba->delete();
        return redirect('/dashboard/lomba')->with('success', 'Lomba berhasil dihapus');
    }
}
