<footer>
	<div class="container-fluid">
		<!-- <div class="row">
			<div class="col-12 col-sm-6 column">
				<ul class="nav-link-list">
					<li><a href="/xd-events-and-competitions/main-event">Concert in STMIK Primakara</a></li>
					@foreach ($inilomba as $lomba)
						@php
							$path=str_replace(' ', '-', $lomba->judul_nav)
						@endphp
						<li><a href="{{action('PagesController@show',$path)}}">{{$lomba->judul_nav}} Competition</a></li>
						{{-- <a href="{{action('PagesController@show',$path)}}" class="subnav-link {{ $subnavActive == $lomba->judul_nav ? 'active' : NULL }}">{{$lomba->judul_nav}}</a> --}}
					@endforeach
					
					{{-- <li><a href="/xd-events-and-competitions/pubg">PUBG Mobile Competition</a></li>
					<li><a href="/xd-events-and-competitions/mobile-legends">Mobile Legends Competition</a></li>
					<li><a href="/xd-events-and-competitions/futsal">Futsal Competition</a></li>
					<li><a href="/xd-events-and-competitions/acoustic">Acoustic Competition</a></li>
					<li><a href="/xd-events-and-competitions/coffee-barista">Coffee Barista Competition</a></li>
					<li><a href="/xd-events-and-competitions/coloring">Coloring Competition</a></li> --}}
				</ul>
			</div>
		</div> -->
		<div class="row">
			<div class="col-12 col-sm-6 column" style="text-align:center;">
				<span class="title">XD Fiesta 2019 - STMIK Primakara</span>
			</div>
			<div class="col-12 col-sm-6 column">
				<div class="social-medias" style="text-align:center;">
					<a href="https://web.facebook.com/primakara/?_rdc=1&_rdr" target="_blank" class="social-media-item">
						<img src="{{ asset('images/compressed/facebook.png') }}" alt="Facebook" width="25">
					</a>
					<a href="https://www.instagram.com/stmik_primakara/?igshid=14c3rqrooqft9" target="_blank" class="social-media-item">
						<img src="{{ asset('images/compressed/instagram.png') }}" alt="Instagram" width="25">
					</a>
				</div>
			</div>
		</div>
	</div>
</footer>