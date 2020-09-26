<!DOCTYPE html>
<html>
<head>
	<title>STUDENTS INFORMATION</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/table.css')}}">
</head>
<body>

	<fieldset>
	<legend><h1>STUDENTS INFORMATION</h1></legend>

	<table border="1">
		<tr>
			<th>id</th>
			<th>name</th>
			<th>passowrd</th>
			<th>email</th>
			<th>gender</th>
			<th>education</th>
			<th>type</th>
			<th>picture</th>
			<th>Action</th>
			
		
		</tr>

	@for($i=0; $i != count($users); $i++)
		<tr>
			<td>{{$users[$i]->id}}</td>
			<td>{{$users[$i]->username}}</td>
			<td>{{$users[$i]->password}}</td>
			<td>{{$users[$i]->email}}</td>
			<td>{{$users[$i]->gender}}</td>
			<td>{{$users[$i]->education}}</td>
			<td>{{$users[$i]->type}}</td>
			<td><img src="/upload/{{$users[$i]->picture}}" width='100px' height='100px'> </td>
			
			<td><a href="{{route('home.studentedit', [$users[$i]->id])}}">Edit</a>| <a href="{{route('home.studentdelete', [$users[$i]->id])}}">Delete</a></td>
			
		</tr>
	@endfor
	</table>
	<br/>
<a href="{{route('home.index')}}">Back</a>

<a href="{{route('home.studentcomplain')}}">Complain and reply !!</a>
</fieldset>
</body>
</html>