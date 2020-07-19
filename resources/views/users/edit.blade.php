@extends('layouts.app')

@section('content')
<div class="container">
<form action="/users/{{ $user->id }}" method="post">
	{{ csrf_field() }}
	<input type="text" placeholder="Name" name="name" class="form-control" value="{{ $user->name }}">
	<input type="text" placeholder="Email" name="email" class="form-control" value="{{ $user->email }}">
	<input type="password" placeholder="Password" name="password" class="form-control" value="{{ $user->password }}">
	<input type="submit" name="save" class="btn btn-primary">
</form>
</div>
@endsection