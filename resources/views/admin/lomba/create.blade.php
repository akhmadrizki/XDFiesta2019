@extends('layouts.dashboard')
@section('content')

<div class="section-header">
            <h1>Input Lomba</h1>
</div>
<div class="section-body">
    @if ($errors->any())
        <div class="alert alert-warning">
            @foreach ($errors->all() as $error)
                {{ $error }}<br/>
            @endforeach
        </div>
    @endif
        <form method="post" action="{{ action('Content\LombaController@store') }}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Judul Lomba</label>
                    <input type="text" class="form-control" name="judul">
                </div>
                <div class="form-group">
                    <label>Judul Navigator Lomba</label>
                    <input type="text" class="form-control" name="judul_nav">
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea class="summernote-simple" style="display: none;" name="deskripsi"></textarea>
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
                    <input type="file" name="pdf"><br>
                    <i>Masukan file .pdf disini</i>
                </div>
                <div class="card-footer text-right">
                    <input type="submit" value="Lanjut" class="btn btn-primary">
                </div>
            </div>     
        </form>
    </div>
@endsection