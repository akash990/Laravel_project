<!DOCTYPE html>
<html>
<head>
	<title>READ NOTICES</title>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/table.css')); ?>">
</head>
<body>

	<fieldset>
	<legend><h1>READ NOTICES</h1></legend>

	<table border="1">
		<tr>
			<th>id</th>
			<th>name</th>
			<th>notice</th>
			<th>date</th>
		</tr>

	<?php for($i=0; $i != count($users); $i++): ?>
		<tr>
			<td><?php echo e($users[$i]->id); ?></td>
			<td><?php echo e($users[$i]->name); ?></td>
			<td><?php echo e($users[$i]->notice); ?></td>
		    <td><?php echo e($users[$i]->date); ?></td>
		
		</tr>
	<?php endfor; ?>
	</table>
	<br/>
	
<a href="<?php echo e(route('home.notices')); ?>">Back</a>
<a href="<?php echo e(route('home.index')); ?>">Go To Home Page</a> 
</fieldset>
</body>
</html><?php /**PATH C:\Users\Nasa It\Desktop\APWT project\laravel\laratest\resources\views/t_notices/read.blade.php ENDPATH**/ ?>