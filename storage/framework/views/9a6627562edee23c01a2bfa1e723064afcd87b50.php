<!DOCTYPE html>
<html>
<head>
	<title>INSERT SALARY</title>
</head>
<body>
<fieldset>
	<h1>INSERT SALARY</h1>
	

	<form method="post">
		
		<?php echo e(csrf_field()); ?>

		<table>

			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value="<?php echo e(old('name')); ?>"></td>
			</tr>

			<tr>
				<td>Salary</td>
				<td><input type="text" name="salary" value="<?php echo e(old('salary')); ?>"></td>
			</tr>



	
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>

	<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<?php echo e($err); ?> <br>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	<br/>
	<a href="<?php echo e(route('home.salary')); ?>">Back</a>
	</fieldset>
</body>
</html><?php /**PATH C:\Users\Nasa It\Desktop\APWT project\laravel\laratest\resources\views/t_salary/sinsert.blade.php ENDPATH**/ ?>