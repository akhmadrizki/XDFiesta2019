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
    <div class="card">
    <div class="card-body">
    <form method="post" action="{{action('Content\SyaratController@store')}}">
    @csrf
    <input type="hidden" name="id_lomba" value="{{$id_lomba}}">
    <h6>Syarat dan Ketentuan {{$judul}} </h6>
    <textarea name="deskripsi" class="summernote-simple" style="display: none;" ></textarea>
    <input type="submit" value="Tambah" class="btn btn-success">
    <a href="{{route('lomba.update', $id_lomba)}}" class="btn btn-primary">Selesai</a>
    </form>
    </div>
    </div>
</div>
@endsection