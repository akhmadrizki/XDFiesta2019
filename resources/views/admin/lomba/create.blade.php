@extends('layouts.dashboard')
@section('content')

<div class="section-header">
            <h1>Input Lomba</h1>
</div>

<div class="section-body">
    <h3>Buat Lomba</h3>
    <form method="post" action="{{ action('Content\LombaController@store') }}" enctype="multipart/form-data">
    @csrf
    <h4>Judul Lomba</h4>
    <input type="text" name="judul">
    {{$sama}}
    <h4>Deskripsi</h4>
    <textarea name="deskripsi" cols="50" rows="10"></textarea>
    <h4>Tangal</h4>
    <input type="date" name="tanggal">
    <h4>Lokasi</h4>
    <input type="text" name="lokasi">
    <h4>Pengelenggara</h4>
    <input type="text" name="penyelenggara">
    <h4>Hadiah</h4>
    <input type="number" name="hadiah">
    <h4>Waktu</h4>
    <input type="text" name="waktu">
    <h4>Header Pic</h4>
    <input type="file" name="pic"><br>
    <input type="submit" name="Submit">
    </form>
</div>
@endsection