@extends('top.cover')
@section('content')
<form action="{{route('login')}}" method="post">

	{{@csrf_field()}}
	<input type="text" name="username" placeholder="Username"><br>
	<input type="password" name="password" placeholder="Password"><br>
	<input type="checkbox" name="remember"> Remember Me<br>
	<input type="submit" name="" value="Login">
</form>
<br>
<a class="btn btn-primary"  href="{{route('register')}}">Register</a>
@endsection  