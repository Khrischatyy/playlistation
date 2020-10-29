<header class="header">
	<section class="header_container">
		<div class="header_body">
			<div class="header_logo">
				<a href="{{ route('main') }}"><img src="{{ asset('images/logo.jpg') }}"></a>
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
							<div class="search-list"></div>
						</div>
						<div class="search-image">
							<img class="img-header" src="{{ asset('images/search.svg') }}">
						</div>
					</li>
					<li class="header_link">
						<div class="cart"><a href="{{ route('shopping-bag') }}"><img class="img-header" src="{{ asset('images/shopping-bag.svg') }}"></a>
						<div class="cartnumber">{{Session::has('cart') ? Session::get('cart')->totalQty : ''}}</div>
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
		                        		<li class="header-menu-link-item"><a href="{{route('PersonalAreaOrders')}}" class="span-header">MY ORDERS</a></li>
		                        		<li class="header-menu-link-item"><a  href="{{route('PersonalArea')}}" class="span-header">MY ACCOUNT</a></li>
		                        		<li class="header-menu-link-item"><a href=""  class="span-header">LOG OUT</a></li>
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
