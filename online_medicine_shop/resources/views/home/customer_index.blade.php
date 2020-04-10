<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>	
	<?php $uname= session('uname');?>
	<h1>Welcome Home! <a href="/home/customer_profile/{{$uname}}">{{session('uname')}}</a></h1>  
	<br>
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<!--<a href="{{route('home.admin_addMedicine')}}">Add new Medicine</a> |-->
	<form method="post">
		<input type="text" name="searchbox" value="">
		<input type="submit" name="search" value="Search">
	</form>
	<a href="{{route('home.customer_medicineList')}}">View All Medicine</a> |
	<a href="{{route('home.customer_orderList')}}">View Orders</a> |
	<a href="{{route('home.customer_pendingOrderList')}}">Pending Orders</a> |
	<a href="{{route('home.customer_acceptedOrderList')}}">Accepted Orders</a> |
	<a href="/logout">Logout</a> 

	<br>


</body>
</html>