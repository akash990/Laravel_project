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
		
			<td><a href="<?php echo e(route('home.teachercomplainedit', [$users[$i]->id])); ?>">Reply</a>| <a href="<?php echo e(route('home.teachercomplaindelete', [$users[$i]->id])); ?>">Remove</a></td>	
		</tr>
	<?php endfor; ?>
	</table>
	<br/>
<a href="<?php echo e(route('home.teachersinfo')); ?>">Back</a>

</fieldset>
</body>
</html><?php /**PATH C:\Users\Nasa It\Desktop\APWT project\laravel\laratest\resources\views/A_teachers/showteachercomplain.blade.php ENDPATH**/ ?>