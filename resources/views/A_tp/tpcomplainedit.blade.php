<!DOCTYPE html>
<html>
<head>
	<title>Give reply</title>
</head>
<body>
<fieldset>
	<h1>Give reply</h1>

	
	<form method="post">
		{{csrf_field()}}
		
		<table bgcolor="#38FC">
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value="{{$user['name']}}" readonly></td>
			</tr>
			<tr>
				<td>Complain</td>
				<td><input type="text" name="complain" value="{{$user['complain']}}" readonly></td>
			</tr>
			
				<tr>
				<td>Reply</td>
				<td><input type="text" name="reply" value="{{$user['reply']}}"></td>
			</tr>
			
			
			
			
			
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Update"></td>
				<td><a href="{{route('home.tpcomplain')}}">Back</a></td>
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