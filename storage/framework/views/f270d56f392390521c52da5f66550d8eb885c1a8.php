<!DOCTYPE html>
<html>
<head>
	<title>STUDENTS INFORMATION</title>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/table.css')); ?>">
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

	<?php for($i=0; $i != count($users); $i++): ?>
		<tr>
			<td><?php echo e($users[$i]->id); ?></td>
			<td><?php echo e($users[$i]->username); ?></td>
			<td><?php echo e($users[$i]->password); ?></td>
			<td><?php echo e($users[$i]->email); ?></td>
			<td><?php echo e($users[$i]->gender); ?></td>
			<td><?php echo e($users[$i]->education); ?></td>
			<td><?php echo e($users[$i]->type); ?></td>
			<td><img src="/upload/<?php echo e($users[$i]->picture); ?>" width='100px' height='100px'> </td>
			
			<td><a href="<?php echo e(route('home.studentedit', [$users[$i]->id])); ?>">Edit</a>| <a href="<?php echo e(route('home.studentdelete', [$users[$i]->id])); ?>">Delete</a></td>
			
		</tr>
	<?php endfor; ?>
	</table>
	<br/>
<a href="<?php echo e(route('home.index')); ?>">Back</a>

<a href="<?php echo e(route('home.studentcomplain')); ?>">Complain and reply !!</a>
</fieldset>
</body>
</html><?php /**PATH C:\Users\Nasa It\Desktop\APWT project\laravel\laratest\resources\views/t_students/students.blade.php ENDPATH**/ ?>