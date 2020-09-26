<!DOCTYPE html>
<html>
<head>
	<title>INSERT COMPLAIN</title>
</head>
<body>
<fieldset>
	<h1>TYPE HERE TO COMPLAIN</h1>
	

	<form method="post">
		
		<?php echo e(csrf_field()); ?>

		<table>

			<tr>
				
				<td><input type="text" name="complain" value="<?php echo e(old('complain')); ?>"></td>
				<td></td>
			</tr>

		
			<tr>
				
				<td><input type="submit" name="submit" value="Submit">
				<a href="<?php echo e(route('home.ctacheck')); ?>">Check List Here</a></td>
			</tr>
		</table>
	</form>

	<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<?php echo e($err); ?> <br>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	<br/>
	<a href="<?php echo e(route('home.index')); ?>">Back</a>
	</fieldset>
</body>
</html><?php /**PATH B:\CSE\ATP3\New\laratest\resources\views/t_complain/insert.blade.php ENDPATH**/ ?>