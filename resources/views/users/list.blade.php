@extends('layouts.app')

@section('content')

<div class="container">
<ul>
	@foreach($users as $user)
	<li>{{ $user->name }} 
		| <a href="/users/{{ $user->id }}/delete">Delete</a></li>
		| <a href="/users/{{ $user->id }}/edit">Edit</a></li>
	@endforeach
</ul>
</div>

<div class="container">
<form action="/users" method="post">
	{{ csrf_field() }}
	<input type="text" placeholder="Name" name="name" class="form-control">
	<input type="text" placeholder="Email" name="email" class="form-control">
	<input type="password" placeholder="Password" name="password" class="form-control">
	<input type="submit" name="save" class="btn btn-primary">
</form>
</div>

@endsection