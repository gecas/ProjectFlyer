@extends('layout')

@section('content')

	<!-- resources/views/auth/login.blade.php -->
	<div class="row">

		<div class="col-md-6 col-md-offset-3">

	@include('errors.list')
	
	<form method="POST" action="/auth/login">
	    {!! csrf_field() !!}
	
	    <div class="form-group">
	        <label for="email">Email</label>
	        <input type="email" name="email" class="form-control" value="{{ old('email') }}">
	    </div>
	
	    <div class="form-group">
	         <label for="password">Password</label>
	        <input type="password" name="password" class="form-control" id="password">
	    </div>
	
	    <div class="form-group">
	        <input type="checkbox" name="remember" > Remember Me
	    </div>
	
	    <div class="form-group">
	        <button type="submit" class="btn btn-primary">Login</button>
	    </div>
	</form>

	</div>
	</div>

@endsection