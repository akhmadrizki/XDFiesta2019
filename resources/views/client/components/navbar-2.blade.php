<nav>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-6 column">
					<h1 style="margin:0;">XD FIESTA</h1>
				</div>
				<div class="col-12 col-md-6 column" style="text-align:right;">
					<div class="nav-item">
						<a href="/xd-profile" class="nav-link {{ $navActive == 'profile' ? 'active' : NULL }}">xd profile</a>
						<a href="/xd-events" class="nav-link {{ $navActive == 'events' ? 'active' : NULL }}">xd events</a>
						<a href="/xd-gallery" class="nav-link {{ $navActive == 'gallery' ? 'active' : NULL }}">xd gallery</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="container">
			<div class="row">
				<div class="col column">
					<div class="subnav-item">
						<a href="/xd-events/pubg" class="subnav-link {{ $subnavActive == 'pubg' ? 'active' : NULL }}">PUBG</a>
						<a href="/xd-events/mobile-legends" class="subnav-link {{ $subnavActive == 'mobile-legends' ? 'active' : NULL }}">Mobile Legends</a>
						<a href="/xd-events/futsal" class="subnav-link {{ $subnavActive == 'futsal' ? 'active' : NULL }}">Futsal</a>
					</div>
				</div>
			</div>
		</div>
	</section>
</nav>