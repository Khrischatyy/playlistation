@extends('layouts.app')
@section('head')
  <title>Artists</title>
@endsection
@section('content')
<div id="app">
	<artists-component :artists="{{$artists}}"></artists-component>
</div>
@endsection