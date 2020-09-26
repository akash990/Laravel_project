<table border="1">
		<tr>
			<th>id</th>
			<th>name</th>
			<th>email</th>
			<th>Picture</th>
			<th>Action</th>

			
		
		</tr>

	@foreach($tlist as $users)
		<tr>
			<td>{{$users->id}}</td>
			<td>{{$users->username}}</td>
			<td>{{$users->email}}</td>
			<td><img src="/upload/{{$users->picture}}" width='100px' height='100px'></td>
			<td><a href="{{route('home.tpedit', [$users->id])}}">Edit</a>| <a href="{{route('home.tpdelete', [$users->id])}}">Delete</a></td>

			
		</tr>
	@endforeach
	</table>
	

</body>
</html>