<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>	

	<h1>Add new Medicine</h1>&nbsp
	<a href="{{route('home.admin_medicineList')}}">Back</a> |
	<a href="/logout">Logout</a> 

	<br>
	<form method="post" enctype="multipart/form-data">

		{{csrf_field()}}
		<table border="1">
			<tr>
				<td>Vendor Name</td>
				<td><input type="text"  name="vendorName" value="{{old('vendorName')}}"></td>
			</tr>
			<tr>
				<td>Price</td>
				<td><input type="text"  name="price" value="{{old('price')}}"></td>
			</tr>
			<tr>
				<td>Logical Type</td>
				<td><input type="radio" name="logicalType" value="Lequid" > Lequid
				    <input type="radio" name="logicalType" value="Solid"> Solid</td>
			</tr>
			<tr>
				<td>Gener Type</td>
				<td><input type="radio" name="generType" value="Asprine" > Asprine
				    <input type="radio" name="generType" value="Peracetamol"> Peracetamol</td>
			</tr>
			<tr>
				<td>Availabe</td>
				<td><input type="text"  name="availabilty" value="{{old('availabilty')}}"></td>
			</tr>
				<td></td>
				<td><input type="submit"  name="submit" value="Add"></td>
			</tr>
		</table>
	</form>

	@foreach($errors->all() as $error)
		{{$error}} <br>
	@endforeach

</body>
</html>