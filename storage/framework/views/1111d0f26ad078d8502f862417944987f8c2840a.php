<!DOCTYPE html>
<html>
<head>
	<title>CHECK COMPLAIN</title>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/table.css')); ?>">
</head>
<body>

	<fieldset>
	<legend><h1>POSTED COMPLAINS</h1></legend>

	<table border="1">
		<tr>
			<th>id</th>
			<th>complain</th>
			
			<th>operation</th>
			<th>reply</th>
		</tr>

	<?php for($i=0; $i != count($users); $i++): ?>
		<tr>
			<td><?php echo e($users[$i]->id); ?></td>
			<td><?php echo e($users[$i]->complain); ?></td>
			
		
			<td>
				
				<a href="<?php echo e(route('home.ctadelete', [$users[$i]->id])); ?>">Delete</a>
			</td>
			<td><?php echo e($users[$i]->reply); ?></td>
		</tr>
	<?php endfor; ?>
	</table>
	<br/>
	<a href="<?php echo e(route('home.cta')); ?>">Back</a> 
<a href="<?php echo e(route('home.index')); ?>">Go To Home Page</a>
</fieldset>
</body>
</html><?php /**PATH B:\CSE\ATP3\New\laratest\resources\views/t_complain/check.blade.php ENDPATH**/ ?>