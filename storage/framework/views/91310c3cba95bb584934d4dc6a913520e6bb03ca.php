<!DOCTYPE html>
<html>
<head>
	<title>POST NOTICES</title>
</head>
<body>
<fieldset>
	<h1>POST NOTICES</h1>
	

	<form method="post">
		
		<?php echo e(csrf_field()); ?>

		<table>
		<tr><td>Name</td>
            <td><input type="text" name="name" value="<?php echo e(old('name')); ?>"></td>
        </tr>
	<tr>
				<td>Notice</td>
				<td><input type="text" name="notice" value="<?php echo e(old('notice')); ?>"></td>
			</tr>
		<tr><td>Date</td>
		<td><input type="date" name="date" value="<?php echo e(old('date')); ?>"></td>
		</tr>
			
			<tr>
				
				<td><input type="submit" name="submit" value="Save"></td>
				<td><a href="<?php echo e(route('home.postednotices')); ?>">Check Posted Notices</a></td>
			</tr>
		</table>
		
	</form>

	<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<?php echo e($err); ?> <br>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	<a href="<?php echo e(route('home.exam')); ?>">Back</a>
	</fieldset>
</body>
</html><?php /**PATH C:\Users\Nasa It\Desktop\APWT project\laravel\laratest\resources\views/t_notices/post.blade.php ENDPATH**/ ?>