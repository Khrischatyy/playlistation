@extends('layouts.app')
@section('head')
  <title>Artist</title>
@endsection
@section('content')
	<div id="app">
		<artist-component :artist="{{$artist}}" :products="{{$product}}"></artist-component>
	</div>
@endsection