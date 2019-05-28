@extends('layouts.dashboard')
@section('content')

<div class="section-header">
            <h1>Input Kontak</h1>
</div>

<div class="section-body">
    <div class="card">
        <div class="card-body">
                <form method="post" action="{{action('Content\KontakController@store')}}">
                @csrf
                <input type="hidden" name="id_lomba" value="{{$lomba->id_lomba}}">
                <h6>Kontak {{$lomba->judul}} </h6><br/>
                <div class="form-group">
                        <label>Kontak</label>
                        <input type="text" class="form-control" name="kontak">
                </div>
                <div class="text-right">
                @if($next=='next')
                <input type="hidden" name="next" value="next">
                @elseif($next=='show')
                <input type="hidden" name="next" value="show">
                @endif
                <input type="submit" value="Tambah" class="btn btn-success">
                @if($next=='next')
                <a href="{{action('Content\HadiahController@create')}}" class="btn btn-primary">Lanjut</a>
                @elseif($next=='show')
                <a href="{{action('Content\LombaController@show',$lomba->id_lomba)}}" class="btn btn-primary">Selesai</a>
                @endif
                </div>
            </form>
        </div>
    
    <ul class="list-group list-group-flush">
    @foreach ($inikontak as $kontak)
    <li class="list-group-item">
        {{$kontak->kontak}}
    </li>
    @endforeach
    </ul>
    </div>
</div>
@endsection