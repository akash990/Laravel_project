<!DOCTYPE html>
<html>
<head>
	<title>UPLOAD GRADES</title>
</head>
<body>
<fieldset>
	<h1>UPLOAD GRADES</h1>
	

	<form method="post">
		
		<?php echo e(csrf_field()); ?>

		<table>
		<tr><td>Name</td>
            <td><input type="text" name="name" value="<?php echo e(old('name')); ?>"></td>
        </tr>
	<tr>
				<td>Grade</td>
				<td><select name="grade">
					<option value="A+">A+</option>
					<option value="A">A</option>
				
					<option value="B+">B+</option>
					<option value="B">B</option>
					
					<option value="C+">C+</option>
					<option value="C">C</option>
					
					<option value="D+">D+</option>
					<option value="D">D</option>
					
					<option value="F">F</option>
				</select></td>
			</tr>
		<tr><td>Date</td>
		<td><input type="date" name="date" value="<?php echo e(old('date')); ?>"></td>
		</tr>
			
			<tr>
				
				<td><input type="submit" name="submit" value="Save"></td>
				<td><a href="<?php echo e(route('home.checkgrades')); ?>">Check Grades</a></td>
			</tr>
		</table>
		
	</form>

	<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<?php echo e($err); ?> <br>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	<a href="<?php echo e(route('home.exam')); ?>">Back</a>
	</fieldset>
</body>
</html><?php /**PATH B:\CSE\ATP3\New\laratest\resources\views/t_grade/upload.blade.php ENDPATH**/ ?>