@extends('layouts.main')

@section('title')
	<title>XD Events & Competitions - XD Fiesta 2019</title>
@endsection

@section('content')
	<main class="xd-events-main">
		<div class="xd-events-banner" style="background-image:url({{ asset('images/compressed/white-xd-events-and-competitions.png') }});background-size:cover;background-repeat:no-repeat;">
			<div class="container">
				<div class="row align-items-center">
					<div class="col column">
						<h2>XD Events & Competitions</h2>
						<p>Jangan lewatkan keseruan serta kehebohan <br> XD Events & Competitions bersama kami!</p>
					</div>
				</div>
			</div>
		</div>
		<div class="xd-events-banner banner-fit" style="background-image:url({{ asset('images/compressed/concert/concert.jpg') }});"></div>
		<div class="xd-events-collection">
			<div class="container">
				<div class="row">
					<div class="col column">
						<h2>XD Events</h2>
						<div class="xd-main-event">
							<img src="" alt="">
							<div class="xd-main-event-overlay">
								<div class="xd-main-event-overlay-info">
									<p class="label">Main Event</p>
									<h2>XD Fiesta Concert in STMIK Primakara</h2>
								</div>
								<!-- <a class="action" href="/xd-events-and-competitions/main-event">See Details</a> -->
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col column">
						<h2>XD Competitions</h2>
						<div class="xd-competitions-event">
							<div class="row">
								@if(count($data)>0)
								@foreach($data as $dword)
								<div class="col-12 col-lg-6 column">
								<div class="card" style="margin-bottom:20px">
									<div class="card-image">
										<img src="{{url('uploads/'.$dword->thumbnail)}}" width="300px" alt="">
									</div>

									<div class="card-content">
										<p class="card-label">Competition</p>
										<h2 class="card-title">{{$dword->judul}}</h2>
										<p class="card-date">{{isset($dword->waktu)?$dword->waktu:''}}</p>
										@php
											$path_name=str_replace(' ', '-', $dword->judul_nav);
										@endphp
										@if($dword->waktu != 'Coming Soon')
											<a href="{{action('PagesController@show',$path_name)}}" class="card-action">See Details</a>
										@else
											<a class="card-action" style="color:#777;">Coming Soon</a>
										@endif
									</div>
								</div>
								</div>
								@endforeach
								</div>
							@else
							<p>Lomba tidak tersedia</p>
							@endif
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="xd-events-banner banner-fit" style="background-image:url({{ asset('images/compressed/concert/concert2.jpg') }});"></div>
	</main>
@endsection