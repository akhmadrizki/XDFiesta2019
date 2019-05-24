@extends('layouts.dashboard')
@section('content')

<div class="section-header">
            <h1>{{$lomba->judul}}</h1>
</div>

<div class="section-body">
    <div class="card">
    <div class="card-body">
    <img src="{{url('uploads/'.$lomba->pic)}}" width="400px"/><br/><br/>
    <form action="{{ route('lomba.destroy', $lomba->id_lomba)}}" method="post">
    <a href="{{action('Content\LombaController@edit',$lomba->id_lomba)}}" class="btn btn-sm btn-warning">
    Edit</a>
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
    </form><br/>
    Deskripsi : {!!$lomba->deskripsi!!}
    <div>
        <h6>Persyaratan Pendaftaran</h6>
        <a href="{{action('Content\SyaratController@show',$lomba->id_lomba)}}" class="btn btn-sm btn-success">Tambah</a>
    </div>
    <div>
    <ul class="list-group list-group-flush">
    @foreach ($syarat as $sword)
    <li class="list-group-item">
        <div>
        {!!$sword->deskripsi!!}
        <form action="{{ route('syarat.destroy',$sword->id_syarat)}}" method="post">
        <a href="{{action('Content\SyaratController@edit',$sword->id_syarat)}}"  class="btn btn-sm btn-warning">
            Edit
        </a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
            </div>
        </form>
    </li>
    @endforeach
    </ul>
    <br/><br/>
    <h6>Ketentuan Khusus Peserta</h6>
        <a href="{{action('Content\KetentuanPesertaController@show',$lomba->id_lomba)}}" 
        class="btn btn-sm btn-success">Tambah</a>
    </div>
    <div>
    <ul class="list-group list-group-flush">
    @foreach ($ketentuan as $kword)
    <li class="list-group-item">
        <div>
        {!!$kword->deskripsi!!}
        <form action="{{ route('ketentuan_peserta.destroy',$kword->id_ketentuan_peserta)}}" method="post">
        <a href="{{action('Content\KetentuanPesertaController@edit',$kword->id_ketentuan_peserta)}}"
        class="btn btn-sm btn-warning">
            Edit
        </a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
            </div>
        </form>
    </li>
    @endforeach
    </ul>
    <br/><br/>
    <h6>Kriteria Penilaian</h6>
        <a href="{{action('Content\PenilaianController@show',$lomba->id_lomba)}}" 
        class="btn btn-sm btn-success">Tambah</a>
    </div>
    <div>
    <ul class="list-group list-group-flush">
    @foreach ($penilaian as $pword)
    <li class="list-group-item">
        <div>
        {!!$pword->deskripsi!!}
        <form action="{{ route('penilaian.destroy',$pword->id_penilaian)}}" method="post">
        <a href="{{action('Content\PenilaianController@edit',$pword->id_penilaian)}}"
        class="btn btn-sm btn-warning">
            Edit
        </a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
            </div>
        </form>
    </li>
    @endforeach
    </ul>
    <br/><br/>
    <h6 style="display:inline-block;margin-right:10px">Waktu dan Tempat Lomba</h6>
        <a href="{{action('Content\WaktuTempatController@edit',$pword->id_penilaian)}}"
        class="btn btn-sm btn-warning">
            Edit
        </a>
    </div>
    <div>
        <p>
            Technical Meeting : {{$waktu->tm}}<br/>
            Tempat Technical Meeting : {{$waktu->tempat_tm}}<br/>
            Waktu : {{$waktu->waktu}}<br/>
            Tempat : {{$waktu->tempat}}<br/>
        </p>
    </div>
    <br/>
    <h6>Hadiah</h6>
        <a href="{{action('Content\HadiahController@show',$lomba->id_lomba)}}" 
        class="btn btn-sm btn-success"">Tambah</a>
    <div>
    <ul class="list-group list-group-flush">
    @foreach ($hadiah as $hword)
    <li class="list-group-item">
        <div>
        {!!$hword->deskripsi!!}
        <form action="{{ route('hadiah.destroy',$hword->id_hadiah)}}" method="post">
        <a href="{{action('Content\HadiahController@edit',$hword->id_hadiah)}}"
        class="btn btn-sm btn-warning">
            Edit
        </a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
            </div>
        </form>
    </li>
    @endforeach
    </ul>

    </div>
    </div>
    </div>
@endsection