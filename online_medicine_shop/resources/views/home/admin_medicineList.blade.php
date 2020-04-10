<!DOCTYPE html>
<html>
<head>
	<title>Admin Home</title>
</head>
<body>	

	<h1>Medicine list</h1>&nbsp
	<a href="{{route('home.admin_index')}}">Back</a> |
	<a href="/logout">Logout</a> 

	<br>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>Vendor Name</th>
			<th>Price</th>
			<th>Logical Type</th>
			<th>Gener Type</th>
			<th>Available</th>
			<th>ACTION</th>
		</tr>

		@foreach($std as $s)
		<tr>
			<td>{{ $s['mID'] }}</td>
			<td>{{ $s['vendorName'] }}</td>
			<td>{{ $s['price'] }}</td>
			<td>{{ $s['logicalType'] }}</td>
			<td>{{ $s['generType'] }}</td>
			<td>{{ $s['availabilty'] }}</td>
			<td>
				<a href="{{route('home.admin_medicineDetails', $s['mID'])}}">DETAILS</a> |
				<a href="{{route('home.admin_medicineEdit', $s['mID'])}}">EDIT</a> |
				<a href="{{route('home.admin_medicineDelete', $s['mID'])}}">DELETE</a>
			</td>
		</tr>
		@endforeach

	</table>


</body>
</html>