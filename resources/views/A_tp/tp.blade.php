<!DOCTYPE html>
<html>
<head>
	<title>Tution provider INFORMATION</title>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('css/table.css')}}">
</head>
<body>

	<fieldset>
	<legend><h1>Tution provider INFORMATION</h1></legend>
	
	
 
    <input type="text" placeholder="Search tution provider" id="box"><br/><br/>
    
	<div  id="list">
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
	</div>
	  <script>
        $('#box').keyup(function () {
            $.ajax({
                url: '/A_home/tpinfo',
                method: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    key: $(this).val(),
                },
                success: function (data) {
                    $('#list').html(data);
                },
            });
        });
    </script>
	<br/>
	<a href="{{route('home.tpcomplain')}}">Complain and reply !!</a>
<a href="{{route('home.index')}}">Back</a>
</fieldset>
</body>
</html>