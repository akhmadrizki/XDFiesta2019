@extends('layouts.app')
@section('content')
    <h1>Buat Lomba</h1><br>
    <form method="post" action="{{action('SyaratController@store')}}">
    @csrf
    @foreach($inilomba as $lomba)
        <?php 
            $id_lomba=$lomba->id_lomba;
            $judul=$lomba->judul;
        ?>
    @endforeach
    <input type="hidden" name="id_lomba" value="{{$id_lomba}}">
    <h3>Syarat dan Ketentuan {{$judul}} </h3>
    <textarea name="deskripsi" cols="50" rows="10"></textarea>
    <input type="submit" name="Tambah">
    </form>
@endsection