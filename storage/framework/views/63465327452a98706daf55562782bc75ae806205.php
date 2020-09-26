<!DOCTYPE html>
<html>
<head>
	<title>Give reply</title>
</head>
<body>
<fieldset>
	<h1>Give reply</h1>

	
	<form method="post">
		<?php echo e(csrf_field()); ?>

		
		<table bgcolor="#38FC">
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
				<td><input type="text" name="reply" value="<?php echo e($user['reply']); ?>"></td>
			</tr>
			
			
			
			
			
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Update"></td>
				<td><a href="<?php echo e(route('home.studentcomplain')); ?>">Back</a></td>
			</tr>
		</table>
	</form>
	<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<?php echo e($err); ?> <br>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	<br/>
	
	</fieldset>
</body>
</html><?php /**PATH C:\Users\Nasa It\Desktop\APWT project\laravel\laratest\resources\views/A_students/studentcomplainedit.blade.php ENDPATH**/ ?>