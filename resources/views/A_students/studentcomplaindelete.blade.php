<!DOCTYPE html>
<html>
<head>
	<title>DELETE complain</title>
</head>
<body>
<fieldset>
	<h1>DELETE complain</h1>
	

	<form method="post">
		@csrf
		<table border="1" bgcolor="#38FC">
		
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value="{{$user['name']}}"></td>
			</tr>
			<tr>
				<td>Complain</td>
				<td><input type="text" name="complain" value="{{$user['complain']}}"></td>
			</tr>
			<tr>
				<td>Reply</td>
				<td><input type="text" name="reply" value="{{$user['reply']}}"></td>
			</tr>
	
		</table>
		
		<h3><b>Are you sure you want to delete this Complain?</b></h3>
		<input type="submit" name="submit" value="Confirm">
	</form>
	<br/>
	<a href="{{route('home.studentcomplain')}}">Back</a>
</body>
</html>