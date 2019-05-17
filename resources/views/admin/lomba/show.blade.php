@extends('layouts.dashboard')
@section('content')

@foreach ($lomba as $lword)
<div class="section-header">
            <h1>{{$lword->judul}}</h1>
</div>

<div class="section-body">
    <div>
    <img src="{{url('uploads/'.$lword->pic)}}" width="400px"/><br/>
    {{-- <a href="{{ route('lomba.edit', 2)}}">Edit</a> --}}
    <a href="{{action('Content\LombaController@edit',$lword->id_lomba)}}">Edit</a>
    <form action="{{ route('lomba.destroy', $lword->id_lomba)}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
    <p>{{$lword->deskripsi}}</p>
    <p>{{$lword->tanggal}}</p>
    <p>{{$lword->lokasi}}</p>
    <p>{{$lword->penyelenggara}}</p>
    <p>{{$lword->hadiah}}</p>
    <p>{{$lword->waktu}}</p>
    </div>
    <h2>Syarat dan Ketentuan </h2>
    <a href="{{action('Content\SyaratController@show',$lword->id_lomba)}}">Tambah</a>
    @foreach ($syarat as $sword)
        <div>
        <p>{{$sword->deskripsi}}</p>
        <a href="{{action('Content\SyaratController@edit',$sword->id_syarat)}}">Edit</a>
        <form action="{{ route('syarat.destroy',$sword->id_syarat)}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
        </div>
    </form>
    @endforeach
    @endforeach
@endsection