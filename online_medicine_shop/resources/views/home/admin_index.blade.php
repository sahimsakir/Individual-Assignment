<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>	
	<?php $uname= session('uname');?>
	<h1>Welcome Home! <a href="/home/admin_profile/{{$uname}}">{{session('uname')}}</a></h1>  
	<br>
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<a href="{{route('home.admin_addMedicine')}}">Add new Medicine</a> |
	<a href="{{route('home.admin_medicineList')}}">View All Medicine</a> |
	<a href="{{route('home.admin_customerList')}}">View All Customer</a> |
	<a href="/logout">Logout</a> 

	<br>


</body>
</html>