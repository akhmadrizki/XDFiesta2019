@extends('layouts.dashboard')
@section('content')

<div class="section-header">
            <h1>Edit Hadiah</h1>
</div>

<div class="section-body">
    <div class="card">
    <div class="card-body">
    <form method="post" action="{{ action('Content\HadiahController@update') }}">
    @csrf
    <input type="hidden" name="id_hadiah" value="{{$hadiah->id_hadiah}}">
    <input type="hidden" name="id_lomba" value="{{$lomba->id_lomba}}">
    <h6>Hadiah {{$lomba->judul}} </h6><br/>
    <textarea name="deskripsi" class="summernote-simple" style="display: none;" >{{$lomba->deskripsi}}</textarea>
    <div class="text-right">
    <input type="submit" Value="Edit" class="btn btn-warning">
    </div>
    </form>
    </div>
    </div>
</div>
@endsection