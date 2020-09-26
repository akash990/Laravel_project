<!DOCTYPE html>
<html>
<head>
	<title>Give a teacher</title>
</head>
<body>
<fieldset>
	<h1>Give a teacher</h1>

	
	<form method="post">
		{{csrf_field()}}
		
		<table bgcolor="#38FC">
			
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value="{{$user['name']}}" readonly></td>
			</tr>
			<tr>
				<td>Class</td>
				<td><input type="text" name="class" value="{{$user['class']}}" readonly></td>
			</tr>
			
				<tr>
				<td>Subject</td>
				<td><input type="text" name="subject" value="{{$user['subject']}}" readonly></td>
			</tr>
			<tr>
				<td>Salary</td>
				<td><input type="text" name="salary" value="{{$user['salary']}}" readonly></td>
			</tr>
			<tr>
				<td>Contact</td>
				<td><input type="text" name="contact" value="{{$user['contact']}}" readonly></td>
			</tr>
			<tr>
				<td>Give teacher name </td>
				<td><input type="text" name="tname" value="" ></td>
			</tr>
			
			
			
			
			
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Update"></td>
				<td><a href="{{route('home.tuition')}}">Back</a></td>
			</tr>
		</table>
	</form>
	@foreach($errors->all() as $err)
		{{$err}} <br>
	@endforeach
	<br/>
	
	</fieldset>
</body>
</html>