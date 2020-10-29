@extends('layouts.app')
@section('content')
@if(Session::has('cart'))
<section class="main-shopping-cart">

	<div class="main-part-shopping-cart">
		<div class="item-shopping-1">
			<h1>SHOPPING CART</h1>
			@foreach($products as $product)
			<div class="info-shopping-cart">
				<div class="shopping-cart-i shirt"><img  src="images/shirts/{{$product['item']['image']}}"></div>
				<div class="shopping-cart-i main-shopping-cart-name">{{$product['item']['name']}}</div>
				<div class="shopping-cart-i">
						<div  class="shopping-cart-item main-shopping-cart-name1">{{$product['item']['name']}}</div>
						<div class="shopping-cart-item">
							<div>SIZE: </div>
							<div>S</div>
						</div>
						<div class="shopping-cart-item">
							<div>COLOR: </div>
							<div>BLACK</div>
						</div>
						<div class="shopping-cart-item">
							<div>
								QUANTITY: 
							</div>
							<div class="shopping-cart-num">
								<span class="shopping-cart-num-minus"><a style="text-decoration: none; color: white;" href="{{route('reducebyone',['id'=>$product['item']['id']]) }}">-</a></span>
								<span class="shopping-cart-num-current"><input type="text" value="{{$product['qty']}}" name=""></span>
								<span class="shopping-cart-num-plus"><a style="text-decoration: none; color: white;" href="{{route('plusbyone',['id'=>$product['item']['id']]) }}">+</a></span>
							</div>
						</div>
				</div>
				<div class="shopping-cart-i shopping-cart-i-price">
					{{$product['price']}} $
				</div>
				<div class="img-cross shopping-cart-i">
					<a href="{{route('RemoveAll',['id'=>$product['item']['id']]) }}"><img src="images/Cross-lines (1).png"></a>
					<div class="shopping-cart-i-price-1">
					{{$product['price']}} $
				</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>

		
	
		<div  class="coupon">
			<div class="promo">
				<div>
					<div class="coupon-text">ADD PROMOTIONAL CODE</div>
				</div>
				<div class="promoinput-1" style="display: none;">
					<input placeholder="ADD PROMOTIONAL CODE: " type="text" name="">
					<button>OK</button>
				</div>
			</div>
			<div class="wish">
				<div class="coupon-text_2 " >ADD WISH</div>
				<div class="promoinput-2 " style="display: none;">
					<input placeholder="ADD WISH: " type="text" name="">
					<button>OK</button>
				</div>
			</div>

		</div>
	<div class="ahead-shopping-cart">
		<h1>ORDER DETAILS</h1>
		<div class="ahead-items">
			<div>
				TOTAL WITHOUT DELIVERY
			</div>
			<div>{{$totalPrice}} RUB.</div>
		</div>
		<div>
			<div class="ahead-itemss">
					<div>
						DELIVERY 
					</div>
					<div>
						200 RUB. 
					</div>
			</div>
		</div>
		<div class="ahead-items-1">Moscow,Russia</div>
		<div class="ahead-items">
			<div>TOTAL :</div>
			<div>{{$totalPrice + 200}} RUB.</div>
		</div>
		<div class="button-shop-cart">
			<button>BUY</button>
		</div>
	</div>

</section>
@else
<section class="main-shopping-cart">
	<h1>SHOPPING CART</h1>
	<div class="noiteminthecart">
		<span>CART IS EMPTY</span>
		<span><a style="color: white;" href="{{route('artists')}}">RETURN TO THE STORE</a></span>
	</div>

</section>
@endif
<script src="js/shoppingcart.js"></script>
@endsection