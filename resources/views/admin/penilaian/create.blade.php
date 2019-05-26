@extends('layouts.dashboard')
@section('content')

<div class="section-header">
            <h1>Input Kriteria Penilaian</h1>
</div>

<div class="section-body">
    <div class="card">
        <div class="card-body">
        <form method="post" action="{{action('Content\PenilaianController@store')}}">
            @csrf
            <input type="hidden" name="id_lomba" value="{{$lomba->id_lomba}}">
            <h6>Kriteria Penilaian {{$lomba->judul}} </h6><br/>
            <textarea name="deskripsi" class="summernote-simple" style="display: none;" ></textarea>
            <div class="text-right">
            @if($next=='next')
            <input type="hidden" name="next" value="next">
            @elseif($next=='show')
            <input type="hidden" name="next" value="show">
            @endif
            <input type="submit" value="Tambah" class="btn btn-success">
            @if($next=='next')
            <a href="{{action('Content\WaktuTempatController@create')}}" class="btn btn-primary">Lanjut</a>
            @elseif($next=='show')
            <a href="{{action('Content\LombaController@show',$lomba->id_lomba)}}" class="btn btn-primary">Selesai</a>
            @endif
            </div>
        </form>
        </div>
    
    <ul class="list-group list-group-flush">
    @foreach ($inipenilaian as $penilaian)
    <li class="list-group-item">
        {!!$penilaian->deskripsi!!}
    </li>
    @endforeach
    </ul>
    </div>
</div>
@endsection