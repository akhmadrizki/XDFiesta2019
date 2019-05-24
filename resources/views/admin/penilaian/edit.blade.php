@extends('layouts.dashboard')
@section('content')

<div class="section-header">
            <h1>Edit Kriteria Penilaian</h1>
</div>

<div class="section-body">
    <div class="card">
    <div class="card-body">
    <form method="post" action="{{ action('Content\PenilaianController@update') }}">
    @csrf
    <input type="hidden" name="id_penilaian" value="{{$penilaian->id_penilaian}}">
    <input type="hidden" name="id_lomba" value="{{$lomba->id_lomba}}">
    <h3>Kriteria Penilaian {{$lomba->judul}} </h3><br/>
    <textarea name="deskripsi" class="summernote-simple" style="display: none;" >{{$penilaian->deskripsi}}</textarea>
    <div class="text-right">
    <input type="submit" value="Edit" class="btn btn-warning">
    </div>
    </form>
    </div>
    </div>
</div>
@endsection