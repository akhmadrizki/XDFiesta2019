@extends('layouts.dashboard')
@section('content')

<div class="section-header">
            <h1>Edit Lomba</h1>
</div>

<div class="section-body">
    <div class="card">
    <div class="card-body">
    <form method="post" action="{{ action('Content\LombaController@update') }}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id_lomba" value="{{$lomba->id_lomba}}">
        <div class="form-group">
            <label>Judul Lomba</label>
            <input type="text" class="form-control" name="judul" value="{{$lomba->judul}}">
        </div>
        <div class="form-group">
            <label>Judul Navigator Lomba</label>
            <input type="text" class="form-control" name="judul_nav" value="{{$lomba->judul_nav}}">
        </div>
        <div class="form-group">
            <label>Deskripsi</label>
            <textarea class="summernote-simple" style="display: none;" name="deskripsi">
                 {!!$lomba->deskripsi!!}
            </textarea>
        <div class="form-group">
            <label>Header Picture</label><br>
            <input type="file" name="pic">
        </div>
        <div class="form-group">
            <label>Thumbnail Picture</label><br>
            <input type="file" name="thumbnail">
        </div>
        <div class="form-group">
            <label>File syarat .pdf</label><br>
            <input type="file" name="pdf"><br/>
            <i>Masukan file .pdf disini</i>
        </div>
        <div class="card-footer text-right">
            <input type="submit" value="Edit" class="btn btn-warning">
        </div>
    </form>
    </div>
    </div>
</div>
@endsection