@extends('layouts.app')

@section('content')
	<ul data-role="listview">
		<li>
			<a href="/consultants/1">
				<h2>杜月</h2>
				<p style="text-align:center;padding:4px;background-color:gray;width:2.5em;color:white;">离 线</p>
				<p>
					知名学者，法学教授，博士生导师
				</p>	
			</a>
		</li>
		<li>
			<a href="/consultants/1">	

				<h2>
					钱程
				</h2>
	
		    	<p style="padding:4px;background-color:green;width:2.5em;color:white;">在 线</p>
		   
				<p>
					知名学者，法学教授，博士生导师
				</p>

			</a>
		</li>
		<li>
			<a href="/consultants/1">
				<h2>
					方茴
				</h2>
				<p>
					知名学者，法学教授，博士生导师
				</p>	
			</a>
		</li>
	</ul>
@endsection