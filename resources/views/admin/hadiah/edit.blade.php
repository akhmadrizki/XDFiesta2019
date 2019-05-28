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
    <input type="text" name="deskripsi" class="form-control" value="{{$hadiah->deskripsi}}">
    <div class="text-right">
    <input type="submit" Value="Edit" class="btn btn-warning">
    </div>
    </form>
    </div>
    </div>
</div>
@endsection