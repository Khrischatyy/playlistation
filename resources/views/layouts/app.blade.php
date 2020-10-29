<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
	@yield('head')
</head>
<body>

	@include('includes.header')
	<div id="app">
		@yield('content')
	</div>
	@include('includes.footer')
	
	<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>