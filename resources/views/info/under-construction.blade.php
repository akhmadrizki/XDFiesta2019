<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons|Sarabun|Roboto">
	<link rel="stylesheet" href="{{ asset('vendor/bootstrap-grid.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/bootstrap-reboot.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
	@include('client.components.navbar')
	<div class="under-construction" style="padding:50px;">
		<div class="d-flex align-items-center justify-content-center">
			<img src="{{ asset('svg/under-construction.svg') }}" alt="Under construction and we'll be back soon!" width="300vw">
		</div>
	</div>

	<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>