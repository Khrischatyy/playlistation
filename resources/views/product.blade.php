@extends('layouts.app')
@section('head')
  <title>Product</title>
@endsection
@section('content')
<div id="app">
	<product-component :product="{{$product}}"></product-component>
</div>
@endsection