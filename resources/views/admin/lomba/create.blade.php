@extends('layouts.app')
@section('content')
    <h1>Buat Lomba</h1><br>
    <form method="post" action="{{ action('LombaController@store') }}" enctype="multipart/form-data">
    @csrf
    <h3>Judul Lomba</h3>
    <input type="text" name="judul">
    <h3>Deskripsi</h3>
    <textarea name="deskripsi" cols="50" rows="10"></textarea>
    <h3>Tangal</h3>
    <input type="date" name="tanggal">
    <h3>Lokasi</h3>
    <input type="text" name="lokasi">
    <h3>Pengelenggara</h3>
    <input type="text" name="penyelenggara">
    <h3>Hadiah</h3>
    <input type="number" name="hadiah">
    <h3>Waktu</h3>
    <input type="text" name="waktu">
    <h3>Header Pic</h3>
    <input type="file" name="pic"><br>
    <input type="submit" name="Submit">
    </form>
@endsection