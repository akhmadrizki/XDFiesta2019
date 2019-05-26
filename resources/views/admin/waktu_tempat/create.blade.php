@extends('layouts.dashboard')
@section('content')

<div class="section-header">
            <h1>Input Waktu dan Tempat</h1>
</div>

<div class="section-body">
    <div class="card">
        <div class="card-body">
        <form method="post" action="{{action('Content\WaktuTempatController@store')}}">
            @csrf
            <input type="hidden" name="id_lomba" value="{{$lomba->id_lomba}}">
            <h6>Waktu dan Tempat {{$lomba->judul}} </h6><br/>
            <div class="form-group">
                    <label>Technical Meeting</label>
                    <input type="text" class="form-control" name="tm">
            </div>
            <div class="form-group">
                    <label>Tempat Technical Meeting</label>
                    <input type="text" class="form-control" name="tempat_tm">
            </div>
            <div class="form-group">
                    <label>Waktu Lomba</label>
                    <input type="text" class="form-control" name="waktu">
            </div>
            <div class="form-group">
                    <label>Tempat Lomba</label>
                    <input type="text" class="form-control" name="tempat">
            </div>
            <div class="text-right">
                 @if($next=='next')
                <input type="hidden" name="next" value="next">
                <input type="submit" value="Lanjut" class="btn btn-primary">
                @elseif($next=='show')
                <input type="hidden" name="next" value="show">
                <input type="submit" value="Selesai" class="btn btn-primary">
                @endif
            </div>
        </form>
        </div>
    </div>
</div>
@endsection