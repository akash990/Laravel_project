<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>
<table bgcolor="#343a40" height="20%" width="100%">
<tr>
<td> <center><h2><font color="blue">Welcome,  {{session('username')}}!!</font><h2><center></td>
</tr>


</table>

	
	

<br/>
<center><a href="{{route('home.tprofile')}}">Profile</a></center><br/>

<center><a href="{{route('home.studentsinfo')}}">Students Information</a></center><br/>

<center><a href="{{route('home.teachersinfo')}}">Teachers Information</a></center><br/>
<center><a href="{{route('home.tpinfo')}}">Tuition provider Information</a></center><br/>
<center><a href="{{route('home.tuition')}}">All tuitions</a></center><br/>
<center><a href="{{route('home.totaluser')}}">Total users</a></center><br/>

<center><a href="{{route('logout.index')}}">Logout</a></center>



</body>
</html>