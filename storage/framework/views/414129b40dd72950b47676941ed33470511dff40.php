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
			<th>email</th>
			<th>education</th>
		
		</tr>

	<?php for($i=0; $i != count($users); $i++): ?>
		<tr>
			<td><?php echo e($users[$i]->id); ?></td>
			<td><?php echo e($users[$i]->username); ?></td>
			<td><?php echo e($users[$i]->email); ?></td>
			<td><?php echo e($users[$i]->education); ?></td>
			
		</tr>
	<?php endfor; ?>
	</table>
	<br/>
<a href="<?php echo e(route('home.index')); ?>">Back</a>
</fieldset>
</body>
</html><?php /**PATH B:\CSE\ATP3\New\laratest\resources\views/t_students/students.blade.php ENDPATH**/ ?>