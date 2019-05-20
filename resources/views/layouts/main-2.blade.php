<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	@yield('title')
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons|Sarabun|Roboto">
	<link rel="stylesheet" href="{{ asset('vendor/bootstrap-grid.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/bootstrap-reboot.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
	@include('client.components.navbar-2')
  @yield('content')
	@include('client.components.footer')

	<script src="{{ asset('js/main-2.js') }}"></script>
</body>
</html>