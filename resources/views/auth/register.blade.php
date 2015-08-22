@extends('layout')

@section('content')

	<!-- resources/views/auth/login.blade.php -->
	<div class="row">

		<div class="col-md-6 col-md-offset-3">
	
		<h2 class="text-center">Register</h2>

			@include('errors.list')

		<!-- resources/views/auth/register.blade.php -->

		<form method="POST" action="/auth/register">
		    {!! csrf_field() !!}

		    <div class="form-group"> 
		       <label for="name">Name</label> 
		        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
		    </div>

		    <div class="form-group">
		       <label for="email">Email</label> 
		        <input type="email" name="email" class="form-control" value="{{ old('email') }}">
		    </div>

		    <div class="form-group">
		        <label for="password">Password</label> 
		        <input type="password" class="form-control" name="password">
		    </div>

		    <div class="form-group">
		        <label for="password_confirmation">Confirm password</label> 
		        <input type="password" class="form-control" name="password_confirmation">
		    </div>

		    <div>
		        <button type="submit" class="btn btn-default">Register</button>
		    </div>
		</form>

	</div>
	</div>

@endsection