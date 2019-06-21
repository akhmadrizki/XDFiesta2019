<?php

namespace App\Http\Controllers\Content;

use Illuminate\Http\Request;
use App\Lomba;
use App\Daftar;
use App\Syarat;
use App\KetentuanPeserta;
use App\Penilaian;
use App\WaktuTempat;
use App\Kontak;
use App\Hadiah;
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
        $data = DB::table('lomba')
            ->select('lomba.id_lomba','lomba.judul','lomba.thumbnail','waktu_tempat.waktu')
            ->leftJoin('waktu_tempat', 'lomba.id_lomba', '=', 'waktu_tempat.id_lomba')
            ->get();
        
        return view('admin.lomba.index')
        ->with('data',$data);
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
        $request->validate([
            'judul' => 'required|unique:lomba',
            'judul_nav' => 'required|unique:lomba'
        ]);
        $pic=$request->file('pic');
        $thumbnail=$request->file('thumbnail');
        $pdf=$request->file('pdf');
        $lomba = new Lomba;
        $lomba->judul = $request->get('judul');
        $lomba->judul_nav = $request->get('judul_nav');
        $lomba->deskripsi = $request->get('deskripsi');
        if($pic!=null){
            $extension=$pic->getClientOriginalExtension();
            $name = $request->judul;
            Storage::disk('img')->put($name.'.'.$extension,  File::get($pic));
            $lomba->pic = $name.'.'.$extension;
        }
        if($thumbnail!=null){
            $extension=$thumbnail->getClientOriginalExtension();
            $name = $request->judul;
            Storage::disk('img')->put($name.'_thumbnail.'.$extension,  File::get($thumbnail));
            $lomba->thumbnail = $name.'_thumbnail.'.$extension;
        }
        if($pdf!=null){
            $extension=$pdf->getClientOriginalExtension();
            $name = $request->judul;
            Storage::disk('img')->put('Syarat dan Ketentuan '.$name.'.'.$extension,  File::get($pdf));
            $lomba->pdf = 'Syarat dan Ketentuan '.$name.'.'.$extension;
        }
        $lomba->save();
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
        if(!isset($lomba[0]))
        abort(404);
        $syarat = Syarat::where('id_lomba',$id)->get();
        $ketentuan = KetentuanPeserta::where('id_lomba',$id)->get();
        $penilaian = Penilaian::where('id_lomba',$id)->get();
        $waktu = WaktuTempat::where('id_lomba',$id)->get();
        $kontak = Kontak::where('id_lomba',$id)->get();
        $hadiah = Hadiah::where('id_lomba',$id)->get();
        return view('admin.lomba.show')->with('lomba',$lomba[0])
        ->with('syarat',$syarat)
        ->with('ketentuan',$ketentuan)
        ->with('penilaian',$penilaian)
        ->with('waktu',isset($waktu[0])?$waktu[0]:"null")
        ->with('kontak',$kontak)
        ->with('hadiah',$hadiah)
        ;
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
        return view('admin.lomba.edit')->with('lomba',$lomba[0]);
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
        $thumbnail=$request->file('thumbnail');
        $pdf=$request->file('pdf');
        if($pic!=null){
            $extension=$pic->getClientOriginalExtension();
            $name = $request->judul;
            Storage::disk('img')->put($name.'.'.$extension,  File::get($pic));
            Lomba::where('id_lomba',$id)->update(
                [
                    'pic'=>$name.'.'.$extension
                ]
            );
        }
        if($thumbnail!=null){
            $extension=$thumbnail->getClientOriginalExtension();
            $name = $request->judul;
            Storage::disk('img')->put($name.'_thumbnail.'.$extension,  File::get($thumbnail));
            Lomba::where('id_lomba',$id)->update(
                [
                    'thumbnail'=>$name.'_thumbnail.'.$extension
                ]
            );
        }
        if($pdf!=null){
            $extension=$pdf->getClientOriginalExtension();
            $name = $request->judul;
            Storage::disk('img')->put('Syarat dan Ketentuan '.$name.'.'.$extension,  File::get($pdf));
            Lomba::where('id_lomba',$id)->update(
                [
                    'pdf'=>'Syarat dan Ketentuan '.$name.'.'.$extension
                ]
            );
        }
        Lomba::where('id_lomba',$id)->update(
            [
                'judul'=>$request->get('judul'),
                'judul_nav'=>$request->get('judul_nav'),
                'deskripsi'=>$request->get('deskripsi')
            ]
        );
        return redirect()->action('Content\LombaController@show',$id);
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

    // Downloading file
    public function download($file)
    {
        $file_name=str_replace('-', ' ', $file);
        $file_path = public_path('uploads/'.$file_name);
        return response()->download($file_path);
    }
}
