@extends('layouts.dashboard')
@section('content')

@foreach ($lomba as $lword)
<div class="section-header">
            <h1>{{$lword->judul}}</h1>
</div>

<div class="section-body">
    <div class="card">
    <div class="card-body">
    <img src="{{url('uploads/'.$lword->pic)}}" width="400px"/><br/><br/>
    <form action="{{ route('lomba.destroy', $lword->id_lomba)}}" method="post">
    <a href="{{action('Content\LombaController@edit',$lword->id_lomba)}}" class="btn btn-sm btn-warning">
    Edit</a>
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
    </form>
    <p>{!!$lword->deskripsi!!}</p>
    <p>{{$lword->tanggal}}</p>
    <p>{{$lword->lokasi}}</p>
    <p>{{$lword->penyelenggara}}</p>
    <p>Rp. {{$lword->hadiah}}</p>
    <p>{{$lword->waktu}}</p>
    </div>
    </div>

    <div class="card">
    <div class="card-header" style="display:block"><h6>Syarat dan Ketentuan</h6>
    <a href="{{action('Content\SyaratController@show',$lword->id_lomba)}}" class="btn btn-success">Tambah</a>
    </div>
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
    </div>
    @endforeach
@endsection