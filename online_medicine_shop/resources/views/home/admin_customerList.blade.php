<!DOCTYPE html>
<html>
<head>
	<title>Admin Home</title>
</head>
<body>	

	<h1>Customer list</h1>&nbsp
	<a href="{{route('home.admin_index')}}">Back</a> |
	<a href="/logout">Logout</a> 

	<br>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>Username</th>
			<th>Name</th>
			<th>Phone</th>
			<th>Email</th>
			<th>Gender</th>
			<th>Date of Birth</th>
		</tr>

		@foreach($std as $s)
		<tr>
			<td>{{ $s['cID'] }}</td>
			<td>{{ $s['uname'] }}</td>
			<td>{{ $s['name'] }}</td>
			<td>{{ $s['phone'] }}</td>
			<td>{{ $s['email'] }}</td>
			<td>{{ $s['gender'] }}</td>
			<td>{{ $s['dob'] }}</td>
			<td>
				<a href="{{route('home.admin_customerDelete', $s['cID'])}}">DELETE</a>
			</td>
		</tr>
		@endforeach

	</table>


</body>
</html>