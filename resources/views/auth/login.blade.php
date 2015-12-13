@extends('layouts.app')

@section('content')
	<form style="margin-top:20%;" method="POST" action="/auth/login">
	    <label for="name">用戶：</label>
		<input type="text" name="name" placeholder="用户名">
		<label for="password">密码：</label>
		<input type="text" name="password" placeholder="密码">
		<button type="submit" style="background-color:teal;margin-top:2em;color:white;">登 录</button>
	</form>
@endsection