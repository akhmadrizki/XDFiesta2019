@extends('layouts.dashboard')
@section('content')

<div class="section-header">
            <h1>Edit Kontak</h1>
</div>

<div class="section-body">
    <div class="card">
    <div class="card-body">
    <form method="post" action="{{ action('Content\KontakController@update') }}">
    @csrf
    <input type="hidden" name="id_kontak" value="{{$kontak->id_kontak}}">
    <input type="hidden" name="id_lomba" value="{{$lomba->id_lomba}}">
    <h6>Kontak {{$lomba->judul}}</h6><br/>
    <div class="form-group">
        <label>Kontak</label>
        <input type="text" class="form-control" name="kontak" value="{{$kontak->kontak}}">
    </div>
    <div class="text-right">
    <input type="submit" value="Edit" class="btn btn-warning">
    </div>
    </form>
    </div>
    </div>
</div>
@endsection