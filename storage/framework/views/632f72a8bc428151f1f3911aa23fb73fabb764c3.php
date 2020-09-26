<!DOCTYPE html>
<html>
<head>
	<title>DELETE COMPLAIN</title>
</head>
<body>
<fieldset>
	<h1>DELETE COMPLAIN</h1>
	

	<form method="post">
		<?php echo csrf_field(); ?>
		<table border="1">
		<tr>
				<td>id</td>
				<td><?php echo e($user['id']); ?></td>
			</tr>
		
			<tr>
				<td>complain</td>
				<td><?php echo e($user['complain']); ?></td>
			</tr>
			

		
		</table>
		
		<h3>Are you sure?</h3>
		<input type="submit" name="submit" value="Confirm">
	</form>
	<br/>
	<a href="<?php echo e(route('home.ctacheck')); ?>">Back</a>
</body>
</html><?php /**PATH C:\Users\Nasa It\Desktop\APWT project\laravel\laratest\resources\views/t_complain/delete.blade.php ENDPATH**/ ?>