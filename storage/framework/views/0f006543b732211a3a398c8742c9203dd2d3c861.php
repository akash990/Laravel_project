<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<body>
	<fieldset>
	<h1>LOGIN</h1>
	
	<form method="post">

		<!-- <?php echo csrf_field(); ?> -->
		<!-- <?php echo e(csrf_field()); ?> -->
		<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" value="<?php echo e(old('username')); ?>"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				
				<td><input type="submit" name="submit" value="Submit"></td>
				<td><a href="<?php echo e(route('registration.index')); ?>">Registration</a></td>
			</tr>
		</table>
	</form>
	<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<?php echo e($err); ?> <br>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	<?php echo e(session('msg')); ?>

	</fieldset>
</body>
</html><?php /**PATH B:\CSE\ATP3\New\laratest\resources\views/t_login/index.blade.php ENDPATH**/ ?>