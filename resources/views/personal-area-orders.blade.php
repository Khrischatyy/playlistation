@extends('layouts.app')
@section('content')
<section class="main-personal">
	<div class="main-pic-switch">
		<div class="personal-pic">
			<div class="personal-pic-item">
				<img src="images/user.svg">
			</div>
			<div class="personal-pic-item">
				ACCOUNT NAME
			</div>
		</div>

		<div class="personal-switch">
			<div class="personal-switch-item">
				<a href="">MY INFORMATION</a>
				
			</div>
			<div class="personal-switch-item">
				<a href="{{route('personal-area-orders')}}">MY ORDERS</a>
				
			</div>
		</div>
	</div>
	<div style="font-size: 22px;" class="main-info-orders">
		
		<div>
			YOU HAVE NO ORDERS YET
		</div>
		<div >
			<a style="color: white;" href="">RETURN TO THE STORE</a>
			
		</div>
	</div>
</section>
@endsection