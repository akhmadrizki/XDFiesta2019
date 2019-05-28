<nav id="navbar">
	<section>
		<div class="row">
			<div class="col-6 column">
				<h1 style="margin:0;">XD Fiesta 2019</h1>
			</div>
			<div class="col-6 column" style="text-align:right;">
				<span id="dropdown-trigger"><i class="material-icons">menu</i></span>
				<div class="nav-item" id="nav-item">
					<!-- <a href="/xd-profile" class="nav-link {{ $navActive == 'profile' ? 'active' : NULL }}">XD Profile</a> -->
					<a href="/xd-events-and-competitions" class="nav-link {{ $navActive == 'events' ? 'active' : NULL }}">XD Events & Competitions</a>
					<!-- <a href="/xd-gallery" class="nav-link {{ $navActive == 'gallery' ? 'active' : NULL }}">XD Gallery</a> -->
				</div>
			</div>
		</div>
	</section>
	@if(isset($subnavActive))
		<section>
			<div class="row">
				<div class="col column">
					<div class="subnav-item">
						<!-- <a href="/xd-events-and-competitions/main-event" class="subnav-link {{ $subnavActive == 'main-event' ? 'active' : NULL }}">Main Event</a> -->
						@foreach ($inilomba as $lomba)
						@php
							$path=str_replace(' ', '-', $lomba->judul_nav)
						@endphp
						<a href="{{action('PagesController@show',$path)}}" class="subnav-link {{ $subnavActive == $lomba->judul_nav ? 'active' : NULL }}">{{$lomba->judul_nav}}</a>
						@endforeach
						
						
						{{-- <a href="/xd-events-and-competitions/pubg" class="subnav-link {{ $subnavActive == 'pubg' ? 'active' : NULL }}">PUBG Mobile</a>
						<a href="/xd-events-and-competitions/mobile-legends" class="subnav-link {{ $subnavActive == 'mobile-legends' ? 'active' : NULL }}">Mobile Legends</a>
						<a href="/xd-events-and-competitions/mobile-legends-offline" class="subnav-link {{ $subnavActive == 'mobile-legends-offline' ? 'active' : NULL }}">Mobile Legends Offline</a>
						<a href="/xd-events-and-competitions/coffee-barista" class="subnav-link {{ $subnavActive == 'coffee-barista' ? 'active' : NULL }}">Coffee Barista</a>
						<a href="/xd-events-and-competitions/futsal" class="subnav-link {{ $subnavActive == 'futsal' ? 'active' : NULL }}">Futsal</a>
						<a href="/xd-events-and-competitions/acoustic" class="subnav-link {{ $subnavActive == 'acoustic' ? 'active' : NULL }}">Acoustic</a>
						<a href="/xd-events-and-competitions/coloring" class="subnav-link {{ $subnavActive == 'coloring' ? 'active' : NULL }}">Coloring</a> --}}
					</div>
				</div>
			</div>
		</section>
	@endif
</nav>
<div id="navbar-gap"></div>