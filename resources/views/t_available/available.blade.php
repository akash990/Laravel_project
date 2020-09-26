<!DOCTYPE html>
<html>
<head>
	<title>AVAILABLE TUITION</title>
		
	<style type="text/css">	
	table{
	border-collapse: collapse;
	width: 100%;
	color: #d96459;
	font-family: monospace;
	font-size: 25px;
	text-align: left;
	}
	th{
		background-color: #d96459;
		color: white;
		}
		tr:nth-child(even) {background-color: #f2f2f2;}
 
</style>
</head>
<body>
		<form>
			<fieldset>
				<legend><h1>AVAILABLE TUITION</h1></legend>
			<table>
			<tr>
			<th>id</th>
			<th>area</th>
			<th>class</th>
			<th>subject</th>
			<th>tuition_provider</th>
			</tr>
	@for($i=0; $i !=count($userList->results); $i++)		

		<tr>
		    <td>{{ $userList->results[$i]->id }}</td>
			<td>{{ $userList->results[$i]->area }}</td>
			<td>{{ $userList->results[$i]->class }}</td>
			<td>{{ $userList->results[$i]->subject }}</td>
			<td>{{ $userList->results[$i]->tuition_provider }}</td>
		</tr>
	
	@endfor		
	</table>	<br/>			
		<a href="{{route('home.index')}}">Back</a>		
			</fieldset>
			
		</form>
</body>
</html>
