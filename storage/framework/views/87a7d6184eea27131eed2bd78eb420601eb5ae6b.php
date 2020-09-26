<!DOCTYPE html>
<html>
<head>
	<title>UPLOAD NOTES</title>
</head>
<body>
<fieldset>
	<h1>UPLOAD NOTES</h1>
	

	<form method="post" enctype="multipart/form-data">
		
		<?php echo e(csrf_field()); ?>

		<table>
		<tr><td>Name</td>
            <td><input type="text" name="name" value="<?php echo e(old('name')); ?>"></td>
        </tr>
	<tr>
				<td>File</td>
				<td><input type="file" name="myfile"></td>
			</tr>
		<tr><td>Date</td>
		<td><input type="date" name="date" value="<?php echo e(old('date')); ?>"></td>
		</tr>
			
			<tr>
				
				<td><input type="submit" name="submit" value="Save"></td>
				<td><a href="<?php echo e(route('home.checknotes')); ?>">Check Notes</a></td>
			</tr>
		</table>
		
	</form>

	<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<?php echo e($err); ?> <br>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	<a href="<?php echo e(route('home.index')); ?>">Back</a>
	</fieldset>
</body>
</html><?php /**PATH C:\Users\Nasa It\Desktop\APWT project\laravel\laratest\resources\views/t_fileupload/fileupload.blade.php ENDPATH**/ ?>