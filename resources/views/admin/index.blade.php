@extends('layouts.dashboard')
@section('content')

<div class="section-header">
            <h1>Daftar Konten</h1>
</div>

<div class="section-body">
	<p>
		<a href="{{route('lomba.create')}}">Lomba</a>
	</p>
	<p>
		<a href="/blank.html">Event</a>
	</p>
	<p>
		<a href="/blank.html">Daftar</a>
	</p>
</div>

@endsection