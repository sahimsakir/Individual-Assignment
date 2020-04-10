<!DOCTYPE html>
<html>
<head>
	<title>Details page</title>
</head>
<body>	

	<h1>Medicine Details!</h1>&nbsp
	<a href="{{route('home.admin_medicineList')}}">Back</a> |
	<a href="/logout">Logout</a> 

	<br>
	<table border="1">
		<tr>
			<td>ID</td>
			<td>{{$mID}}</td>
		</tr>
		<tr>
			<td>Vendor name</td>
			<td>{{$vendorName}}</td>
		</tr>
		<tr>
			<td>Price</td>
			<td>{{$price}}</td>
		</tr>
		<tr>
			<td>Logical Type</td>
			<td>{{$logicalType}}</td>
		</tr>
		<tr>
			<td>generType</td>
			<td>{{$generType}}</td>
		</tr>
		<tr>
			<td>Availabilty</td>
			<td>{{$availabilty}}</td>
		</tr>
	</table>

</body>
</html>