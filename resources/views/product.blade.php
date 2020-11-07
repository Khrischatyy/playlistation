@extends('layouts.app')
@section('head')
  <title>Product</title>
@endsection
@section('content')
	<product-component :product="{{$product}}"></product-component>
@endsection