@extends('layouts.app')

@section('content')

<form method="POST" action="/user/search">
	<label for="location">涉事地点：</label>
	<select>
		<option>上海</option>
		<option>昆山</option>
		<option>苏州</option>
	</select>
	<label for="business">咨询事项：</label>
	<select>
		<option>法律</option>
		<option>税务</option>
		<option>会计</option>
	</select>
	<button type="submit" style="background-color:teal;color:white;margin-top:3em;">搜 索</button>
</form>

@endsection