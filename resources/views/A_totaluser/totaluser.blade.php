<!DOCTYPE html>
<html>
<head>
	<title>Total user</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/table.css')}}">
		
	
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
			<div id="ph">
				<legend><h1>Total user</h1></legend>
			<table>
			<tr>
			<th>id</th>
			<th>name</th>
			<th>password</th>
			<th>email</th>
			<th>gender</th>
			<th>Education</th>
			<th>Type</th>
			<th>Block</th>
			</tr>
	@for($i=0; $i !=count($userList->results); $i++)		

		<tr>
		    <td>{{ $userList->results[$i]->id }}</td>
			<td>{{ $userList->results[$i]->name }}</td>
			<td>{{ $userList->results[$i]->password }}</td>
			<td>{{ $userList->results[$i]->email }}</td>
			<td>{{ $userList->results[$i]->gender }}</td>
			<td>{{ $userList->results[$i]->education }}</td>
			<td>{{ $userList->results[$i]->type }}</td>
			<td>{{ $userList->results[$i]->block }}</td>
		</tr>
	
	@endfor		
	</table>	<br/>			
		<a href="{{route('home.index')}}">Back</a>	
<a href="javascript:pdfToHTML()">Save as PDF</a><br/><br/>		
			</fieldset>
			
		</form>
</body>
<script src="/js/jquery-2.1.3.js"></script>
<script src="/js/pdfFromHTML.js"></script>
<script src="/js/jspdf.js"></script>
</html>
