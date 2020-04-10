<!DOCTYPE html>
<html>
<head>
	<title>Profile page</title>
</head>
<body>	

	<h1>Profile Page</h1>&nbsp
	<a href="{{route('home.admin_index')}}">Back</a> |
	<a href="/logout">Logout</a> 

	<br>
	<form method="post">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<table border="1">
			<tr>
				<td>ID</td>
				<td><input type="text" readonly name="id" value="{{$aID}}"></td>
			</tr>
			<<tr>
				<td>Username</td>
				<td><input type="text"  name="username" value="{{$uname}}"></td>
			</tr>
			<tr>
				<td>Name</td>
				<td><input type="text"  name="name" value="{{$name}}"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text"  name="email" value="{{$email}}"></td>
			</tr>
			<tr>
				<td>Cell no</td>
				<td><input type="text"  name="phone" value="{{$phone}}"></td>
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit"  name="submit" value="Save"></td>
			</tr>
		</table>
	</form>

</body>
</html>