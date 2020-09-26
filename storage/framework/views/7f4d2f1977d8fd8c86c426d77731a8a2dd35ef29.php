<!DOCTYPE html>
<html>
<head>
	<title>OFFERED TUITION</title>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/table.css')); ?>">
</head>
<body>

	<fieldset>
	<legend><h1>OFFERED TUITION</h1></legend>

	<table border="1">
		<tr>
			<th>id</th>
			<th>area</th>
			<th>class</th>
			<th>subject</th>
			<th>salary</th>
			<th>tuition_provider</th>
		</tr>

	<?php for($i=0; $i != count($users); $i++): ?>
		<tr>
			<td><?php echo e($users[$i]->id); ?></td>
			<td><?php echo e($users[$i]->area); ?></td>
			<td><?php echo e($users[$i]->class); ?></td>
			<td><?php echo e($users[$i]->subject); ?></td>
			<td><?php echo e($users[$i]->salary); ?></td>
			<td><?php echo e($users[$i]->tuition_provider); ?></td>
		</tr>
	<?php endfor; ?>
	</table>
	<br/>
<a href="<?php echo e(route('home.index')); ?>">Back</a>
</fieldset>
</body>
</html><?php /**PATH B:\CSE\ATP3\New\laratest\resources\views/t_offered/offered.blade.php ENDPATH**/ ?>