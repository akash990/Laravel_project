<!DOCTYPE html>
<html>
<head>
	<title>UPDATE SALARY</title>
</head>
<body>
<fieldset>
	<h1>UPDATE SALARY</h1>

	
	<form method="post">
		
		<?php echo e(csrf_field()); ?>

		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value="<?php echo e($user['name']); ?>"></td>
			</tr>

			

			<tr>
				<td>Salary</td>
				<td><input type="text" name="salary" value="<?php echo e($user['salary']); ?>"></td>
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
	<a href="<?php echo e(route('home.salary')); ?>">Back</a>
	</fieldset>
</body>
</html><?php /**PATH B:\CSE\ATP3\New\laratest\resources\views/t_salary/sedit.blade.php ENDPATH**/ ?>