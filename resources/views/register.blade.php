@extends('master')

@section('content')
	<h2 class="transparent-heading">Register</h2>
	<form action="{{url('register')}}" method="POST" class="my-form">
		{{csrf_field()}}
		<div class="form-group">
			<label>first Name:</label>
			<input type="text" class="form-control" name="firstName">
			<div class="error">{{$errors->first('firstName')}}</div>
		</div>
		<div class="form-group">
			<label>Last Name:</label>
			<input type="text" class="form-control" name="lastName">
			<div class="error">{{$errors->first('lastName')}}</div>
		</div>
		<div class="form-group">
			<label>Email:</label>
			<input type="email" class="form-control" placeholder="example@gmail.com" name="email">
			<div class="error">{{$errors->first('email')}}</div>
		</div>
		<div class="form-group">
			<label>password:</label>
			<input type="password" class="form-control" placeholder="***" name="password">
			<div class="error">{{$errors->first('password')}}</div>
		</div>
		<button type="submit" class="btn btn-success">Register</button> 
		<a href="{{url('login')}}" class="pull-right">Login</a>
	</form>

@endsection