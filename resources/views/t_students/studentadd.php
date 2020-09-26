<!DOCTYPE html>
<html>
<head>
	<title>Add student</title>
</head>
<body>
<fieldset>
	<h1>Add student</h1>
	

	<form method="post" enctype="multipart/form-data">
		
		{{csrf_field()}}
		
		<table>	
		<tr>
		<td><b>Username</b></td>
		<td><input type="text" name="username" value=""></td>
		<td> </td>
		<td> </td>
		<td> </td>
		</tr>
		<tr>
			<td><b>Password</b></td>
			<td><input type="password" name="password" value=""></td>
			<td> </td>
			<td> </td>
			<td> </td>
			</tr>
		<tr>	
		<td><b>Email</b></td>
		<td><input type="email" name="email" value=""></td>
		<td> </td>
		<td> </td>
		<td> </td>
		</tr>
				
			
	<tr>
	<td><b>Gender</b></td>
	<td><input type="radio" name="gender" value="M">Male
	<input type="radio" name="gender" value="F">Female</td>
	<td> </td>
	<td> </td>
	<td> </td>
		</tr>
			
			
			<tr>
			<td><b>Education</b></td>
			<td><input type="radio" name="education" value="ssc">S.S.C
			<input type="radio" name="education" value="hsc">H.S.C
			<input type="radio" name="education" value="bsc">B.Sc</td>
						<td> </td>
						<td> </td>
						<td> </td>
						</tr>
				
	<td><b>Picture</b></td>
	<td><input type="file" name="myfile"></td>
	<td> </td>
	<td> </td>
	<td> </td>
		</tr>	
						
				<tr>
				<td> </td>
				<td><input type="submit" name="submit" value="Add">
				<input type="reset" name="reset" value="reset">
				
				
				<td> </td>
				<td> </td>
				<td> </td>
			</tr>
			<a href="{{route('home.studentsinfo')}}">Back</a>
	</table>
		
	</form>

	@foreach($errors->all() as $err)
		{{$err}} <br>
	@endforeach
	
	</fieldset>
</body>
</html>