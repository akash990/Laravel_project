<!DOCTYPE html>
<html>
<head>
	<title>DELETE student</title>
</head>
<body>
<fieldset>
	<h1>DELETE student</h1>
	

	<form method="post">
		<?php echo csrf_field(); ?>
		<table border="1">
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
				<td>Picture</td>
				<td><img src="/upload/<?php echo e($user->picture); ?>" width="180px" height="150px"></td>
			</tr>
			
			
			
			

		
		</table>
		
		<h3><b>Are you sure you want to delete this student?</b></h3>
		<input type="submit" name="submit" value="Confirm">
	</form>
	<br/>
	<a href="<?php echo e(route('home.studentsinfo')); ?>">Back</a>
</body>
</html><?php /**PATH C:\Users\Nasa It\Desktop\APWT project\laravel\laratest\resources\views/t_students/studentdelete.blade.php ENDPATH**/ ?>