<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>	

	<h1>Order This?</h1>&nbsp
	<a href="{{route('home.customer_medicineList')}}">Back</a> |
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
	<h3>Do you want to order this?</h3>

		{{csrf_field()}}
		<input type="hidden" name="mID" value="{{$mID}}"/>
		<input type="hidden" name="vendorName" value="{{$vendorName}}"/>
		<input type="hidden" name="price" value="{{$price}}"/>
		<input type="hidden" name="logicalType" value="{{$logicalType}}"/>
		<input type="hidden" name="generType" value="{{$generType}}"/>
		<input type="hidden" name="availabilty" value="{{$availabilty}}"/>
		<a href="{{route('home.customer_payment',$mID)}}">Go for Payment</a> 

</body>
</html>