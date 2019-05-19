<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
<<<<<<< HEAD
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
>>>>>>> ac7e9a226fa2fa9d3f8a4be4a0f5c4928a23edd9
	<title>Document</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons|Sarabun|Roboto">
	<link rel="stylesheet" href="{{ asset('vendor/bootstrap-grid.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/bootstrap-reboot.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
	@include('client.components.navbar')
  @yield('content')
	@include('client.components.footer')

	<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>