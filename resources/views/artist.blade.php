@extends('layouts.app')
@section('head')
  <title>Artist</title>
@endsection
@section('content')
	<artist-component :artist="{{$artist}}" :products="{{$product}}"></artist-component>
@endsection