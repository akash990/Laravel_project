<!DOCTYPE html>
<html>
<head>
	<title>Complains </title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/table.css')}}">
</head>
<body>

	<fieldset>
	<legend><h1>Complains</h1></legend>

	<table border="1">
		<tr>
			<th>id</th>
			<th>name</th>
			<th>complain</th>
			<th>reply</th>
			<th>Action</th>
			
		
		</tr>

	@for($i=0; $i != count($users); $i++)
		<tr>
			<td>{{$users[$i]->id}}</td>
			<td>{{$users[$i]->name}}</td>
			<td>{{$users[$i]->complain}}</td>
			<td>{{$users[$i]->reply}}</td>
		
			<td><a href="{{route('home.tpcomplainedit', [$users[$i]->id])}}">Reply</a>| <a href="{{route('home.tpcomplaindelete', [$users[$i]->id])}}">Remove</a></td>	
		</tr>
	@endfor
	</table>
	<br/>
<a href="{{route('home.tpinfo')}}">Back</a>

</fieldset>
</body>
</html>