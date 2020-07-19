@extends('layouts.my_layout')

@section('content')
<div class="container text-center">
	<h1>Hello {{ $name }}!!</h1>


	@isset ($test) 
		{{ $test }}
	@endisset


	<form action="/hello" method="post">
		{{ csrf_field() }}
		<input type="text" name="test">
		<input type="submit" value="enviar">
	</form>
</div>
@endsection

@section('title')
Página Hello World
@endsection