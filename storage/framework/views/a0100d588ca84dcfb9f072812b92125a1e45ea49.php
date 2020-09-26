<!DOCTYPE html>
<html>
<head>
	<title>PROFILE</title>
</head>
<body>

	<fieldset>
	<legend><h1>PROFILE</h1></legend>

	
	
	
	<?php for($i=0; $i != count($users); $i++): ?>
	<center><img src="/upload/<?php echo e($users[$i]->picture); ?>" width="180px" height="150px"></center>
	
	
	<table>
	
<tr>		
			<td><b>Username: </b></td>
			<td><?php echo e($users[$i]->username); ?></td>
			</tr>
			<tr>
			<td><b>Password: </b></td>
			<td><?php echo e($users[$i]->password); ?></td>
			</tr>
			<tr>
			<td><b>Email: </b></td>
				<td><?php echo e($users[$i]->email); ?></td>
			</tr>
			<tr>
			<td><b>Gender: </b></td>
			<td><?php echo e($users[$i]->gender); ?></td>
			</tr>
			<tr>
			<td><b>Education: </b></td>
			<td><?php echo e($users[$i]->education); ?></td>
			</tr>
		

	</table>
	<br/>
	<a href="<?php echo e(route('home.index')); ?>">Back</a>
	<a href="<?php echo e(route('home.pedit', [$users[$i]->id])); ?>">Update</a>
	<?php endfor; ?>
</fieldset>
</body>
</html><?php /**PATH B:\CSE\ATP3\New\laratest\resources\views/t_profile/profile.blade.php ENDPATH**/ ?>