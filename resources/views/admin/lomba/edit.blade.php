@extends('layouts.dashboard')
@section('content')

<div class="section-header">
            <h1>Edit Lomba</h1>
</div>

<div class="section-body">
    <div class="card">
    @foreach ($lomba as $lword)
    <div class="card-body">
    <form method="post" action="{{ action('Content\LombaController@update') }}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id_lomba" value="{{$lword->id_lomba}}">
    <div class="form-group">
        <label>Judul Lomba</label>
        <input type="text" class="form-control" name="judul" value="{{$lword->judul}}">
    </div>
    <div class="form-group">
        <label>Deskripsi</label>
        <textarea class="summernote-simple" style="display: none;" name="deskripsi">{{$lword->deskripsi}}</textarea>
    </div> 
    <div class="form-group">
        <label>Date Picker</label>
        <input type="text" class="form-control datepicker" name="tanggal" value="{{$lword->tanggal}}">
    </div>
    <div class="form-group">
        <label>Lokasi</label>
        <input type="text" class="form-control" name="lokasi" value="{{$lword->lokasi}}">
    </div>
    <div class="form-group">
        <label>Penyelenggara</label>
        <input type="text" class="form-control" name="penyelenggara" value="{{$lword->penyelenggara}}">
    </div>
    <div class="form-group">
        <label>Hadiah</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    Rp
                </div>
            </div>
                <input type="number" class="form-control currency" name="hadiah" value="{{$lword->hadiah}}">
            </div>
    </div>
    <div class="form-group">
        <label>Waktu</label>
        <input type="text" class="form-control" name="waktu" value="{{$lword->waktu}}">
    </div>
    <div class="form-group">
        <label>Header Picture</label><br/>
        <input type="file" name="pic">
    </div>
    <div class="card-footer text-right">
        <input type="submit" class="btn btn-primary">
    </div>
    </form>
    </div>
    @endforeach
    </div>
</div>
@endsection