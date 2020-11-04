@extends('layouts.app')
@section('head')
  <title>Products</title>
@endsection
@section('content')
<div id="app">
	<products-component :products="{{$products}}"></products-component>
</div>
@endsection