<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>	

	<h1>Remove This Customer?!</h1>&nbsp
	<a href="{{route('home.admin_customerList')}}">Back</a> |
	<a href="/logout">Logout</a> 

	<br>
	<table border="1">
		<tr>
			<td>ID</td>
			<td>{{$cID}}</td>
		</tr>
		<tr>
			<td>Username</td>
			<td>{{$uname}}</td>
		</tr>
		<tr>
			<td>Name</td>
			<td>{{$name}}</td>
		</tr>
		<tr>
			<td>Phone</td>
			<td>{{$phone}}</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>{{$email}}</td>
		</tr>
		<tr>
			<td>Gender</td>
			<td>{{$gender}}</td>
		</tr>
		<tr>
			<td>Date of Birth</td>
			<td>{{$dob}}</td>
		</tr>
	</table>
	<h3>Are you sure? This can't be undone...</h3>
	<form method="post">
		{{csrf_field()}}
		<input type="hidden" name="cID" value="{{$cID}}"/>
		<input type="submit" name="submit" value="Confirm"/>
	</form>
</body>
</html>