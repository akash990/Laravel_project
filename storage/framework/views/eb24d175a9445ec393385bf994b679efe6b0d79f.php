<!DOCTYPE html>
<html>
<head>
	<title>CHECK NOTES</title>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/table.css')); ?>">
</head>
<body>

	<fieldset>
	<h1>CHECK NOTES</h1>

	<table border="1">
		<tr>
			<th>id</th>
			<th>name</th>
			<th>file</th>
			<th>date</th>
			<th>operation</th>
		</tr>

	<?php for($i=0; $i != count($users); $i++): ?>
		<tr>
			<td><?php echo e($users[$i]->id); ?></td>
			<td><?php echo e($users[$i]->name); ?></td>
			<td><a href="/upload/<?php echo e($users[$i]->file); ?>"><?php echo e($users[$i]->file); ?></a></td>
			
		    <td><?php echo e($users[$i]->date); ?></td>
			<td>
				
				<a href="<?php echo e(route('home.notesdelete', [$users[$i]->id])); ?>">Delete</a>
			</td>
		</tr>
	<?php endfor; ?>
	</table>
	<br/>
	<a href="<?php echo e(route('home.fileupload')); ?>">Back</a> 
<a href="<?php echo e(route('home.index')); ?>">Go To Home Page</a>
</fieldset>
</body>
</html><?php /**PATH C:\Users\Nasa It\Desktop\APWT project\laravel\laratest\resources\views/t_fileupload/check.blade.php ENDPATH**/ ?>