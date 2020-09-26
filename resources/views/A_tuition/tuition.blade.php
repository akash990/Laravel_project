<!DOCTYPE html>
<html>
<head>
	<title>Tuitions pending</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/table.css')}}">
</head>
<body>

	<fieldset>
	<div id="ph">
	<legend><h1>Tuitions pending</h1></legend>

	<table border="1">
		<tr>
			<th>id</th>
			<th>Student name</th>
			<th>Class</th>
			<th>Subjects</th>
			<th>Salary</th>
			<th>Contact Number</th>
			<th>Assigned Teacher Name</th>
			<th>Action</th>
		</tr>

	@for($i=0; $i != count($tlist); $i++)
		<tr>
			<td>{{$tlist[$i]->id}}</td>
			<td>{{$tlist[$i]->name}}</td>
			<td>{{$tlist[$i]->class}}</td>
			<td>{{$tlist[$i]->subject}}</td>
			<td>{{$tlist[$i]->salary}}</td>
			<td>{{$tlist[$i]->contact}}</td>
			<td>{{$tlist[$i]->teacher}}</td>
			<td><a href="{{route('home.tuitionedit', [$tlist[$i]->id])}}">Give a teacher</a>
		</tr>
	@endfor
	</table>
	</div>
	<br/>
	<a href="{{route('home.index')}}">back</a> 
	<a href="javascript:pdfToHTML()">Save as PDF</a><br/><br/>

</fieldset>
</body>
<script src="/js/jquery-2.1.3.js"></script>
<script src="/js/pdfFromHTML.js"></script>
<script src="/js/jspdf.js"></script>
</html>