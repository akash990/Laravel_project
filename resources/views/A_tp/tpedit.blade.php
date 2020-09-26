<!DOCTYPE html>
<html>
<head>
	<title>UPDATE Tp profile</title>
</head>
<body>
<fieldset>
	<h1>UPDATE Tp profile</h1>

	
	<form method="post">
		
		{{csrf_field()}}
		<table bgcolor="#38FC">
			
{{csrf_field()}}
			

			<tr>
				<td>Name</td>
				<td><input type="text" name="username" value="{{$user['username']}}"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="password" value="{{$user['password']}}"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" value="{{$user['email']}}"></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td><input type="text" name="gender" value="{{$user['gender']}}"></td>
			</tr>
			<tr>
				<td>Education</td>
				<td><input type="text" name="education" value="{{$user['education']}}"></td>
			</tr>
			<tr>
				<td>Type</td>
				<td><input type="text" name="type" value="tp" readonly></td>
			</tr>
			
			
			<tr>
				<td>Picture</td>
				<td><input type="file" name="picture" value="{{$user['picture']}}"></td>
			</tr>
			
			
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Update"></td>
			</tr>
		</table>
	</form>
	@foreach($errors->all() as $err)
		{{$err}} <br>
	@endforeach
	<br/>
	<a href="{{route('home.tpinfo')}}">Back</a>
	</fieldset>
</body>
</html>