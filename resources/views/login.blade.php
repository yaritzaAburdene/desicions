@extends('master')

@section('content')
	<h2 class="transparent-heading">Login</h2>
	<form action="{{url('login')}}" method="POST" class="my-form">
		{{csrf_field()}}
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
		<button type="submit" class="btn btn-primary">Login</button> 
		<a href="{{url('register')}}" class="pull-right">Register</a>
	</form>

@endsection