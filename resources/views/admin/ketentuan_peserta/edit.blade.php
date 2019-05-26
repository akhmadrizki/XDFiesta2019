@extends('layouts.dashboard')
@section('content')

<div class="section-header">
            <h1>Edit Ketentuan Khusus Peserta</h1>
</div>

<div class="section-body">
    <div class="card">
    <div class="card-body">
    <form method="post" action="{{ action('Content\KetentuanPesertaController@update') }}">
    @csrf
    <input type="hidden" name="id_ketentuan" value="{{$ketentuan->id_ketentuan_peserta}}">
    <input type="hidden" name="id_lomba" value="{{$lomba->id_lomba}}">
    <h6>Ketentuan Khusus Peserta {{$lomba->judul}}</h6><br/>
    <textarea name="deskripsi" class="summernote-simple" style="display: none;" >{{$ketentuan->deskripsi}}</textarea>
    <div class="text-right">
    <input type="submit" value="Edit" class="btn btn-warning">
    </div>
    </form>
    </div>
    </div>
</div>
@endsection