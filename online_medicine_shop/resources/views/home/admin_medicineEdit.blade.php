<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>	

	<h1>Welcome Home!</h1>&nbsp
	<a href="{{route('home.admin_medicineList')}}">Back</a> |
	<a href="/logout">Logout</a> 

	<br>
	<form method="post">
		{{csrf_field()}}
		<table border="1">
			<tr>
				<td>ID</td>
				<td><input type="text" readonly name="id" value="{{$mID}}"></td>
			</tr>
			<tr>
				<td>Vendor Name</td>
				<td><input type="text"  name="vendorName" value="{{$vendorName}}"></td>
			</tr>
			<tr>
				<td>Price</td>
				<td><input type="text"  name="price" value="{{$price}}"></td>
			</tr>
			<tr>
				<td>Logical Type</td>
				<td><input type="radio" name="logicalType" readonly value="$logicalType" checked>
					
			</tr>
			<tr>
				<td>Gener Type</td>
				<td><input type="radio" name="generType" readonly value="$generType" checked> 
					
			</tr>
			<tr>
				<td>Availabe</td>
				<td><input type="text"  name="availabilty" value="{{$availabilty}}"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit"  name="submit" value="Save"></td>
			</tr>
		</table>
	</form>

</body>
</html>