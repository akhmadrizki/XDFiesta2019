@extends('layouts.dashboard')
@section('content')

<div class="section-header">
            <h1>Daftar Konten</h1>
</div>

<div class="section-body">
<div class="card">
<div class="card-body">
	<p>
		<a href="{{action('Content\LombaController@create')}}" class="list-group-item list-group-item-action">
		Lomba</a>
	</p>
	<p>
		<a href="/dashboard/event" class="list-group-item list-group-item-action">
		Event</a>
	</p>
	<p>
		<a href="/blank.html" class="list-group-item list-group-item-action">
		Daftar</a>
	</p>
</div>
</div>
</div>

@endsection
