<!DOCTYPE html>
<html>
<head>
	<title>POSTED NOTICES</title>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/table.css')); ?>">
</head>
<body>

	<fieldset>
	<legend><h1>POSTED NOTICES</h1></legend>

	<table border="1">
		<tr>
			<th>id</th>
			<th>name</th>
			<th>notice</th>
			<th>date</th>
			<th>operation</th>
		</tr>

	<?php for($i=0; $i != count($users); $i++): ?>
		<tr>
			<td><?php echo e($users[$i]->id); ?></td>
			<td><?php echo e($users[$i]->name); ?></td>
			<td><?php echo e($users[$i]->notice); ?></td>
			<td><?php echo e($users[$i]->date); ?></td>
		
			<td>
				<a href="<?php echo e(route('home.ndelete', [$users[$i]->id])); ?>">Delete</a>
			</td>
		</tr>
	<?php endfor; ?>
	</table>
	<br/>
	<a href="<?php echo e(route('home.postnotices')); ?>">Back</a> 
<a href="<?php echo e(route('home.index')); ?>">Go To Home Page</a>
</fieldset>
</body>
</html><?php /**PATH B:\CSE\ATP3\New\laratest\resources\views/t_notices/posted.blade.php ENDPATH**/ ?>