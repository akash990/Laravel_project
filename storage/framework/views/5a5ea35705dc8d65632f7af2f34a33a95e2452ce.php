<!DOCTYPE html>
<html>
<head>
	<title>Complains </title>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/table.css')); ?>">
</head>
<body>

	<fieldset>
	<legend><h1>Complains</h1></legend>

	<table border="1">
		<tr>
			<th>id</th>
			<th>name</th>
			<th>complain</th>
			<th>reply</th>
			<th>Action</th>
			
		
		</tr>

	<?php for($i=0; $i != count($users); $i++): ?>
		<tr>
			<td><?php echo e($users[$i]->id); ?></td>
			<td><?php echo e($users[$i]->name); ?></td>
			<td><?php echo e($users[$i]->complain); ?></td>
			<td><?php echo e($users[$i]->reply); ?></td>
		
<td></td>	
		</tr>
	<?php endfor; ?>
	</table>
	<br/>
<a href="<?php echo e(route('home.index')); ?>">Back</a>
<a href="<?php echo e(route('home.addstudent')); ?>">Add new student !!</a>
<a href="<?php echo e(route('home.studentcomplain')); ?>">Complain and reply !!</a>
</fieldset>
</body>
</html><?php /**PATH C:\Users\Nasa It\Desktop\APWT project\laravel\laratest\resources\views/A_students/showstudent.blade.php ENDPATH**/ ?>