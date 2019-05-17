@extends('layouts.dashboard')
@section('content')

<div class="section-header">
            <h1>Input Syarat</h1>
</div>

<div class="section-body">
    @foreach($inilomba as $lomba)
        <?php 
            $id_lomba=$lomba->id_lomba;
            $judul=$lomba->judul;
        ?>
    @endforeach
    <form method="post" action="{{action('Content\SyaratController@store')}}">
    @csrf
    <input type="hidden" name="id_lomba" value="{{$id_lomba}}">
    <h3>Syarat dan Ketentuan {{$judul}} </h3>
    <textarea name="deskripsi" cols="50" rows="10"></textarea>
    <input type="submit" value="Tambah">
    <a href="{{route('lomba.update', $id_lomba)}}">Selesai</a>
    </form>
</div>
@endsection