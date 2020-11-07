<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
	@yield('head')
</head>
<body>

	<div id="page-preloader" class="preloader">
	    <div class="loader">
	        <img src="{{ asset('images/logo.jpg') }}">
	    </div>
	</div>

	<div id="app">
	@include('includes.header')
	
	@yield('content')
	</div>

	@if($_SERVER['REQUEST_URI'] == '/login') {
	@yield('login')
	}
	@endif
		
	
	
	@include('includes.footer')
	<script src="{{ asset('js/preloader.js') }}"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script>
	    $(".log-in").click(function(){
	        $(".signIn").addClass("active-dx");
	        $(".signUp").addClass("inactive-sx");
	        $(".signUp").removeClass("active-sx");
	        $(".signIn").removeClass("inactive-dx");
	    });

	    $(".back").click(function(){
	        $(".signUp").addClass("active-sx");
	        $(".signIn").addClass("inactive-dx");
	        $(".signIn").removeClass("active-dx");
	        $(".signUp").removeClass("inactive-sx");
	    });
	</script>
	<script>
		const c = document.querySelector('.container')
		const indexs = Array.from(document.querySelectorAll('.index'))
		let cur = -1
		indexs.forEach((index, i) => {
		  index.addEventListener('click', (e) => {
		    // clear
		    c.className = 'container'
		    void c.offsetWidth; // Reflow
		    c.classList.add('open')
		    c.classList.add(`i${i + 1}`)
		    if (cur > i) {
		      c.classList.add('flip')
		    }
		    cur = i
		  })
		})
	</script>
	
	<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>