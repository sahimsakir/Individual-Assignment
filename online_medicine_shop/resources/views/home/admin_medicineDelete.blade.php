<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>	

	<h1>Remove This?!</h1>&nbsp
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
	<h3>Are you sure? This can't be undone...</h3>
	<form method="post">
		{{csrf_field()}}
		<input type="hidden" name="mID" value="{{$mID}}"/>
		<input type="submit" name="submit" value="Confirm"/>
	</form>
</body>
</html>