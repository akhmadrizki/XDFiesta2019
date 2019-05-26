@extends('layouts.dashboard')
@section('content')

<div class="section-header">
            <h1>Edit Syarat</h1>
</div>

<div class="section-body">
    <div class="card">
    <div class="card-body">
    <form method="post" action="{{action('Content\WaktuTempatController@update')}}">
        @csrf
        <input type="hidden" name="id_lomba" value="{{$lomba->id_lomba}}">
        <input type="hidden" name="id_waktu" value="{{$waktu->id_waktu_tempat}}">
        <h6>Waktu dan Tempat {{$lomba->judul}}</h6><br/>
        <div class="form-group">
                <label>Technical Meeting</label>
                <input type="text" class="form-control" name="tm" value="{{$waktu->tm}}">
        </div>
        <div class="form-group">
                <label>Tempat Technical Meeting</label>
                <input type="text" class="form-control" name="tempat_tm" value="{{$waktu->tempat_tm}}">
        </div>
        <div class="form-group">
                <label>Waktu Lomba</label>
                <input type="text" class="form-control" name="waktu" value="{{$waktu->waktu}}">
        </div>
        <div class="form-group">
                <label>Tempat Lomba</label>
                <input type="text" class="form-control" name="tempat" value="{{$waktu->tempat}}">
        </div>
        <div class="text-right">
            <input type="submit" value="Edit" class="btn btn-warning">
        </div>
    </form>
</div>
@endsection