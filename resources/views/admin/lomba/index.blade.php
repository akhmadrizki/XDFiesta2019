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
	<div class="row">
    @if(count($data)>0)
        @foreach($data as $dword)
		<div class="col-12 col-lg-6 column">
        <div class="card">
            <div class="card-image">
                <img src="{{url('uploads/'.$dword->thumbnail)}}" width="200px" alt="">
            </div>
            <div class="card-content">
                <p class="card-label">Competition</p>
                <h2 class="card-title">{{$dword->judul}}</h2>
                <p class="card-date">{{isset($dword->waktu)?$dword->waktu:''}}</p>
            </div>
            <a href="{{action('Content\LombaController@show',$dword->id_lomba)}}"
             class="card-action">See Details</a>
        </div>
        </div>
        @endforeach
        </div>
    @else
    <p>Lomba tidak tersedia</p>
    @endif
    </div>
    </div>
@endsection