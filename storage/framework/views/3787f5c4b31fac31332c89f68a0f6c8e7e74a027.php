<!DOCTYPE html>
<html>
<head>
	<title>DELETE SALARY</title>
</head>
<body>
<fieldset>
	<h1>DELETE SALARY</h1>
	

	<form method="post">
		<?php echo csrf_field(); ?>
		<table border="1">
			<tr>
				<td>name</td>
				<td><?php echo e($user['name']); ?></td>
			</tr>
			<tr>
				<td>salary</td>
				<td><?php echo e($user['salary']); ?></td>
			</tr>

		
		</table>
		
		<h3>Are you sure?</h3>
		<input type="submit" name="submit" value="Confirm">
	</form>
	<br/>
	<a href="<?php echo e(route('home.salary')); ?>">Back</a>
</body>
</html><?php /**PATH C:\Users\Nasa It\Desktop\APWT project\laravel\laratest\resources\views/t_salary/sdelete.blade.php ENDPATH**/ ?>