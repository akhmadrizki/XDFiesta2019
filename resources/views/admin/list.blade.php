@extends('layouts.dashboard')
@section('content')

<div class="section-header">
            <h1>List Konten</h1>
</div>

<div class="section-body">
	<p>
		<a href="{{route('lomba.index')}}">Lomba</a>
	</p>
	<p>
		<a href="/blank.html">Event</a>
	</p>
	<p>
		<a href="/blank.html">Daftar</a>
	</p>
</div>

@endsection