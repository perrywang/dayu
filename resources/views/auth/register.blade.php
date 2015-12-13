@extends('layouts.app')

@section('content')

<form method="POST" action="/auth/register">
    <label for="name">用户名：</label>
    <input type="text" name="name" value="{{ old('name') }}">
    <label for="email">邮箱：</label>
    <input type="email" name="email" value="{{ old('email') }}">
    <label for="password">密码：</label>
    <input type="password" name="password">
    <label for="password_confirmation">确认密码：</label>
    <input type="password" name="password_confirmation">
    <button type="submit" style="background-color:teal;margin-top:2em;color:white;">注 册</button>
</form>

@endsection