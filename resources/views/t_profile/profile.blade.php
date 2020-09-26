<!DOCTYPE html>
<html>
<head>
		<title>PHP SYNTEX</title>
		<style>
		body{font-family:$fonts;}
		.phpcoding{width:1500px ;margin: 10; background:#ddd;}
		.header,.footer {background:#444;color:#FC8C41 ;text-align:center;padding: 10px;}
		.main{min-height:580px; background:#444; }
		.header h2,.footer h2 {margin:0 auto; text-align:center;}
		</style>
</head>

<body>
<div class="phpcoding">
<section class="header">
<h2> <p style="text-align:left">My profile </h2>
</section>
<section class="main">



			
		
	
	@for($i=0; $i != count($users); $i++)
	
	
	
	<table>
	<tr>
					
					<td></td><td></td>
					<td><center><img src="/upload/{{$users[$i]->picture}}" width="180px" height="150px"></center></td>
			</tr>
			
			<tr>
					<td ><span style=color:#FC8C41><b>NAME :</b></span></td>
					
					<td><span style=color:#FC8C41>{{$users[$i]->username}}</span></td>
			</tr>
			<tr>
					<td ><span style=color:#FC8C41><b>Password :</b></span></td>
					
					<td><span style=color:#FC8C41>{{$users[$i]->password}}</span></td>
			</tr>
			<tr>
					<td ><span style=color:#FC8C41><b>Email:</b></span></td>
					
					<td><span style=color:#FC8C41>{{$users[$i]->email}}</span></td>
			</tr>
			<tr>
					<td ><span style=color:#FC8C41><b>Gender:</b></span></td>
					
					<td><span style=color:#FC8C41>{{$users[$i]->gender}}</span></td>
			</tr>
			<tr>
					<td ><span style=color:#FC8C41><b>Education:</b></span></td>
					
					<td><span style=color:#FC8C41>{{$users[$i]->education}}</span></td>
			</tr>
		

	</table>
	<br/>
	<table>
	<tr><td><a href="{{route('home.index')}}"><span style=color:#F4FF09>Back</span></a></td>
	<td><a href="{{route('home.pedit', [$users[$i]->id])}}"><span style=color:#F4FF09>Update</span></a></td></tr>
	</table>
	
	@endfor

</body>
</html>