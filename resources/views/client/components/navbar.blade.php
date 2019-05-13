<nav class="navbar">
	<div class="container">
		<div class="d-flex align-items-center justify-content-between">
			<div class="navbar-left">
				<h1 style="margin:0;">XD Fiesta</h1>
			</div>
			<div class="navbar-right">
				<div class="navbar-menu">
					<a href="#" class="navbar-link {{ $navActive == 'xd-profile' ? 'active' : NULL }}">XD PROFILE</a>
					<a href="/xd-events" class="navbar-link {{ $navActive == 'xd-events' ? 'active' : NULL }}">XD EVENTS</a>
					<a href="#" class="navbar-link {{ $navActive == 'xd-gallery' ? 'active' : NULL }}">XD GALLERY</a>
				</div>
			</div>
		</div>
	</div>
</nav>