<!DOCTYPE html>
<html>
<head>
	<title>UPLOADED GRADES</title>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/table.css')); ?>">
</head>
<body>

	<fieldset>
	<legend><h1>UPLOADED GRADES</h1></legend>

	<table border="1">
		<tr>
			<th>id</th>
			<th>name</th>
			<th>grade</th>
			<th>date</th>
			<th>operation</th>
		</tr>

	<?php for($i=0; $i != count($users); $i++): ?>
		<tr>
			<td><?php echo e($users[$i]->id); ?></td>
			<td><?php echo e($users[$i]->name); ?></td>
			<td><?php echo e($users[$i]->grade); ?></td>
			<td><?php echo e($users[$i]->date); ?></td>
		
			<td>
				<a href="<?php echo e(route('home.gdelete', [$users[$i]->id])); ?>">Delete</a>
			</td>
		</tr>
	<?php endfor; ?>
	</table>
	<br/>
	<a href="<?php echo e(route('home.uploadgrades')); ?>">Back</a> 
<a href="<?php echo e(route('home.index')); ?>">Go To Home Page</a>
</fieldset>
</body>
</html><?php /**PATH B:\CSE\ATP3\New\laratest\resources\views/t_grade/grades.blade.php ENDPATH**/ ?>