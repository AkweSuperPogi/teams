@extends("layout")
@section("content")	
<head>
	<title>Queries | Time and Attendance Monitoring System</title>
</head>
			<h1 style = "color:white;">Queries</h1>

			<div class = "col-md-12"></div>
			<div class = "col-md-12"></div>
			<div class = "col-md-12"></div>
			<div class = "col-md-12"></div>
			<br>
			
			<div class = "col-md-4">
				<img src="{{ URL::asset('img/Request.png') }}">
				<a style="color:white;" href="{{URL::to('empbydept')}}"class="btn btn-link btn-lg" type = "button" data-toggle="collapse" data-target="#demo4">Employee by Department</a>
				<hr>
			</div>

			<div class = "col-md-4">
				<img src="{{ URL::asset('img/Request.png') }}">
				<a style="color:white;" href="{{URL::to('empbyhierarchy')}}"class="btn btn-link btn-lg" type = "button" data-toggle="collapse" data-target="#demo4">Employee by hierarchy</a>
				<hr>
			</div>

			<div class = "col-md-4">
				<img src="{{ URL::asset('img/Request.png') }}">
				<a style="color:white;" href="{{URL::to('empbybranch')}}"class="btn btn-link btn-lg" type = "button" data-toggle="collapse" data-target="#demo4">Employee by Branch</a>
				<hr>
			</div>

			<div class = "col-md-4">
				<img src="{{ URL::asset('img/Request.png') }}">
				<a style="color:white;" href="{{URL::to('leavecredits')}}"class="btn btn-link btn-lg" type = "button" data-toggle="collapse" data-target="#demo4">Employee Leave Credits</a>
				<hr>
			</div>

			<div class = "col-md-4">
				<img src="{{ URL::asset('img/Request.png') }}">
				<a style="color:white;" href="{{URL::to('empsummary')}}"class="btn btn-link btn-lg" type = "button" data-toggle="collapse" data-target="#demo4">Employee Summary</a>
				<hr>
			</div>
			


		</div>
@stop