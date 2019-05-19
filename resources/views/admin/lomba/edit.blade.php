@extends('layouts.dashboard')
@section('content')

<div class="section-header">
            <h1>Input Lomba</h1>
</div>

<div class="section-body">
    @foreach ($lomba as $lword)
    <h1>Buat Lomba</h1><br>
    <form method="post" action="{{ action('Content\LombaController@update') }}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id_lomba" value="{{$lword->id_lomba}}">
    <h3>Judul Lomba</h3>
    <input type="text" name="judul" value="{{$lword->judul}}">
    <h3>Deskripsi</h3>
    <textarea name="deskripsi" cols="50" rows="10">{{$lword->deskripsi}}</textarea>
    <h3>Tangal</h3>
    <input type="date" name="tanggal" value="{{$lword->tanggal}}">
    <h3>Lokasi</h3>
    <input type="text" name="lokasi" value="{{$lword->lokasi}}">
    <h3>Pengelenggara</h3>
    <input type="text" name="penyelenggara" value="{{$lword->penyelenggara}}">
    <h3>Hadiah</h3>
    <input type="number" name="hadiah" value="{{$lword->hadiah}}">
    <h3>Waktu</h3>
    <input type="text" name="waktu" value="{{$lword->waktu}}">
    <h3>Header Pic</h3>
    <input type="file" name="pic"><br>
    <input type="submit" name="Submit">
    </form>
    @endforeach
</div>
@endsection