<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>
<fieldset>

	<marquee><h1>WELCOME HOME {{session('username')}}</h1></marquee>
	
</fieldset>
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