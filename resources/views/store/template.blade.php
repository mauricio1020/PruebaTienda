<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title','Tienda Laravel')</title>	
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
</head>
<body>
	@if(\Session::has('message'))
		@include('store.partials.messages')
	@endif
	
	@include('store.partials.nav')
	
   

	@yield('content')

	@include('store.partials.footer')
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<script src=" {{ asset('js/pinterest_grid.js') }}"></script>
	<script src=" {{ asset('js/main.js') }}"></script>

</body>
</html>
