<!DOCTYPE html>
<html>
<head>
	<title>DELETE complain</title>
</head>
<body>
<fieldset>
	<h1>DELETE complain</h1>
	

	<form method="post">
		<?php echo csrf_field(); ?>
		<table border="1">
		
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value="<?php echo e($user['name']); ?>" readonly></td>
			</tr>
			<tr>
				<td>Complain</td>
				<td><input type="text" name="complain" value="<?php echo e($user['complain']); ?>" readonly></td>
			</tr>
			<tr>
				<td>Reply</td>
				<td><input type="text" name="reply" value="<?php echo e($user['reply']); ?>" readonly></td>
			</tr>
	
		</table>
		
		<h3><b>Are you sure you want to delete this Complain?</b></h3>
		<input type="submit" name="submit" value="Confirm">
	</form>
	<br/>
	<a href="<?php echo e(route('home.tpcomplain')); ?>">Back</a>
</body>
</html><?php /**PATH C:\Users\Nasa It\Desktop\APWT project\laravel\laratest\resources\views/A_tp/tpcomplaindelete.blade.php ENDPATH**/ ?>