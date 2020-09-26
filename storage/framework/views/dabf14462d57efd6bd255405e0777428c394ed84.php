<!DOCTYPE html>
<html>
<head>
	<title>RATINGS & REVIEW</title>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/table.css')); ?>">
</head>
<body>

	<fieldset>
	<legend><h1>RATINGS & REVIEW</h1></legend>

	<table border="1">
		<tr>
			<th>id</th>
			<th>name</th>
			<th>review</th>
			<th>ratings</th>
		</tr>

	<?php for($i=0; $i != count($users); $i++): ?>
		<tr>
			<td><?php echo e($users[$i]->id); ?></td>
			<td><?php echo e($users[$i]->name); ?></td>
			<td><?php echo e($users[$i]->review); ?></td>
		    <td><?php echo e($users[$i]->ratings); ?></td>
		
		</tr>
	<?php endfor; ?>
	</table>
	<br/>
	
<a href="<?php echo e(route('home.index')); ?>">Back</a>
</fieldset>
</body>
</html><?php /**PATH C:\Users\Nasa It\Desktop\APWT project\laravel\laratest\resources\views/t_ratings/ratings.blade.php ENDPATH**/ ?>