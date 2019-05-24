@extends('layouts.dashboard')
@section('content')

<div class="section-header">
            <h1>List Lomba</h1>
</div>

<div class="section-body">
    <div>
    </div>
    <div class="card">
    <div class="card-body">
    @if(count($lomba)>0)
        @foreach($lomba as $lword)
            <div style="display:flex">
                <div style="padding:10px">
                    <a href="{{action('Content\LombaController@show',$lword->id_lomba)}}">
                    <img src="{{url('uploads/'.$lword->pic)}}" width="200px"/><br>
                    <h6 style="text-align:center">{{$lword->judul}}</h6></a>
                </div>
            <div>
        @endforeach
    @else
    <p>Lomba tidak tersedia</p>
    @endif
    </div>
    </div>
@endsection