@extends('layouts.app')
@section('head')
  <title>Products</title>
@endsection
@section('content')
	<products-component :products="{{$products}}"></products-component>
@endsection