<!DOCTYPE html>
<html>
<head>
	<title>UPDATE Tp profile</title>
</head>
<body>
<fieldset>
	<h1>UPDATE Tp profile</h1>

	
	<form method="post">
		
		<?php echo e(csrf_field()); ?>

		<table bgcolor="#38FC">
			
<?php echo e(csrf_field()); ?>

			

			<tr>
				<td>Name</td>
				<td><input type="text" name="username" value="<?php echo e($user['username']); ?>"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="password" value="<?php echo e($user['password']); ?>"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo e($user['email']); ?>"></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td><input type="text" name="gender" value="<?php echo e($user['gender']); ?>"></td>
			</tr>
			<tr>
				<td>Education</td>
				<td><input type="text" name="education" value="<?php echo e($user['education']); ?>"></td>
			</tr>
			<tr>
				<td>Type</td>
				<td><input type="text" name="type" value="tp" readonly></td>
			</tr>
			
			
			<tr>
				<td>Picture</td>
				<td><input type="file" name="picture" value="<?php echo e($user['picture']); ?>"></td>
			</tr>
			
			
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Update"></td>
			</tr>
		</table>
	</form>
	<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<?php echo e($err); ?> <br>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	<br/>
	<a href="<?php echo e(route('home.tpinfo')); ?>">Back</a>
	</fieldset>
</body>
</html><?php /**PATH C:\Users\Nasa It\Desktop\APWT project\laravel\laratest\resources\views/A_tp/tpedit.blade.php ENDPATH**/ ?>