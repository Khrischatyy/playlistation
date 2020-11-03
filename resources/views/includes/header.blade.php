<header class="header">
	<section class="header_container">
		<div class="header_body">
			<div class="header_logo">
				<a href="{{ route('main') }}"><img src="{{ asset('images/logo_illustration_x4.jpg') }}"></a>
			</div>
			<div class="header_mobile_menu">
				<ul class="header_mobile_list">
					<li class="header_mobile_link">
						<a href="">ACCOUNT</a>
					</li>
					<li class="header_mobile_link">
						<a href="">ARTISTS</a>
					</li>
					<li class="header_mobile_link">
						<a href="">SHOP</a>
					</li>
					<li class="header_mobile_link">
						<a href="">INFORMATION</a>
					</li>
				</ul>
			</div>
			<div class="header_menu">
				<ul class="header_list">
					<li class="header_link search">
						<div class="search-content">
							<input id="search" type="text" name="test" autocomplete="off" placeholder="Find a musician...">
							<div class="search-list" style="color: white;"></div>
						</div>
						<div class="search-image">
							<img class="img-header" src="{{ asset('images/magnifying-glass.svg') }}">
						</div>
					</li>
					<li class="header_link">
						<div class="cart"><a href="{{ route('shopping-bag') }}"><img class="img-header" src="{{ asset('images/shopping-bag.svg') }}"></a>
						<a href="{{ route('shopping-bag') }}"><div class="cartnumber">{{Session::has('cart') ? Session::get('cart')->totalQty : ''}}</div></a>
						</div>
					</li>
					<li class="header_link header-link-burger">
						<div class="header_burger">
							<span></span>
						</div>
					</li>
					<li class="header_link header_link_private_cabinet">
						@if (Route::has('login'))
		                    @if (Auth::check())
		                        <div class="login"><span>

		                        	{{Auth::user()->name}}
		                        	<span class="menu-arrow"></span>
		                        	<ul class="header-menu-link">
		                        		<li class="header-menu-link-item"><a href="{{route('personal-area-orders')}}" class="span-header">MY ORDERS</a></li>
		                        		<li class="header-menu-link-item"><a  href="{{route('personal-area')}}" class="span-header">MY ACCOUNT</a></li>
		                        		<li class="header-menu-link-item"><a href="{{ route('logout') }}"  class="span-header">LOG OUT</a></li>
		                        	</ul></div>
		                    @else
		                        <div class="login"><a href="{{ url('/login') }}">LOG IN</a></div>
		                    @endif
	          			@endif
					</li>
				</ul>
			</div>
		</div>
	</section> 
</header>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="{{ asset('js/header.js') }}"></script>
<script>
$(document).ready(function() {
	fetch_customer_data();
	function fetch_customer_data(query = '')
	{
		$.ajax({
			url:"{{route('search')}}",
			type:'get',
			data:{query:query},
			success:function(data) {
				let name =  JSON.parse(data)
			$('.search-list').html(name.name);
		}
		});
	}
		$(document).on('keyup','#search',function () {
			var query = $(this).val();
			fetch_customer_data(query);
		});
	});
</script>
