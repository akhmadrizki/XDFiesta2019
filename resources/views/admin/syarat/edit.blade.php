@extends('layouts.dashboard')
@section('content')

<div class="section-header">
            <h1>Edit Syarat</h1>
</div>

<div class="section-body">
    <div class="card">
    <div class="card-body">
    <form method="post" action="{{ action('Content\SyaratController@update') }}">
    @csrf
    @foreach($inilomba as $lomba)
        <?php 
            $id_lomba=$lomba->id_lomba;
            $judul=$lomba->judul;
        ?>
    @endforeach
    @foreach($syarat as $sya)
        <?php 
            $id_syarat=$sya->id_syarat;
            $deskripsi=$sya->deskripsi;
        ?>
    @endforeach
    <input type="hidden" name="id_syarat" value="{{$id_syarat}}">
    <input type="hidden" name="id_lomba" value="{{$id_lomba}}">
    <h3>Syarat dan Ketentuan {{$judul}} </h3><br/>
    <textarea name="deskripsi" class="summernote-simple" style="display: none;" >{{$deskripsi}}</textarea>
    <input type="submit" name="Tambah" class="btn btn-success">
    </form>
    </div>
    </div>
</div>
@endsection