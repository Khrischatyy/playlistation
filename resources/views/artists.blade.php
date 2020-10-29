@extends('layouts.app')
@section('head')
  <title>Artists</title>
@endsection
@section('content')
	<artists-component :artists="{{$artists}}"></artists-component>
@endsection