<!DOCTYPE html>
<html>
<head>
	<title>Give a teacher</title>
</head>
<body>
<fieldset>
	<h1>Give a teacher</h1>

	
	<form method="post">
		<?php echo e(csrf_field()); ?>

		
		<table bgcolor="#38FC">
			
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value="<?php echo e($user['name']); ?>" readonly></td>
			</tr>
			<tr>
				<td>Class</td>
				<td><input type="text" name="class" value="<?php echo e($user['class']); ?>" readonly></td>
			</tr>
			
				<tr>
				<td>Subject</td>
				<td><input type="text" name="subject" value="<?php echo e($user['subject']); ?>" readonly></td>
			</tr>
			<tr>
				<td>Salary</td>
				<td><input type="text" name="salary" value="<?php echo e($user['salary']); ?>" readonly></td>
			</tr>
			<tr>
				<td>Contact</td>
				<td><input type="text" name="contact" value="<?php echo e($user['contact']); ?>" readonly></td>
			</tr>
			<tr>
				<td>Give teacher name </td>
				<td><input type="text" name="tname" value="" ></td>
			</tr>
			
			
			
			
			
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Update"></td>
				<td><a href="<?php echo e(route('home.tuition')); ?>">Back</a></td>
			</tr>
		</table>
	</form>
	<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<?php echo e($err); ?> <br>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	<br/>
	
	</fieldset>
</body>
</html><?php /**PATH C:\Users\Nasa It\Desktop\APWT project\laravel\laratest\resources\views/A_tuition/tuitionedit.blade.php ENDPATH**/ ?>