@extends('layouts.dashboard')
@section('content')

<div class="section-header">
            <h1>Edit Syarat dan Ketentuan</h1>
</div>

<div class="section-body">
    <div class="card">
    <div class="card-body">
    <form method="post" action="{{ action('Content\SyaratController@update') }}">
    @csrf
    <input type="hidden" name="id_syarat" value="{{$syarat->id_syarat}}">
    <input type="hidden" name="id_lomba" value="{{$lomba->id_lomba}}">
    <h6>Syarat dan Ketentuan {{$lomba->judul}}</h6><br/>
    <textarea name="deskripsi" class="summernote-simple" style="display: none;" >{{$syarat->deskripsi}}</textarea>
    <div class="text-right">
    <input type="submit" value="Edit" class="btn btn-warning">
    </div>
    </form>
    </div>
    </div>
</div>
@endsection