<!DOCTYPE html>
<html>
<head>
	<title>DELETE student</title>
</head>
<body>
<fieldset>
	<h1>DELETE student</h1>
	

	<form method="post">
		@csrf
		<table border="1" bgcolor="#38FC">
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
				<td>Picture</td>
				<td><img src="/upload/{{$user->picture}}" width="180px" height="150px"></td>
			</tr>
			
			
			
			

		
		</table>
		
		<h3><b>Are you sure you want to delete this student?</b></h3>
		<input type="submit" name="submit" value="Confirm">
	</form>
	<br/>
	<a href="{{route('home.studentsinfo')}}">Back</a>
</body>
</html>