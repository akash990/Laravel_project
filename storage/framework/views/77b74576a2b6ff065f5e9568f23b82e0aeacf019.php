<!DOCTYPE html>
<html>
<head>
	<title>Tuitions pending</title>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/table.css')); ?>">
</head>
<body>

	<fieldset>
	<div id="ph">
	<legend><h1>Tuitions pending</h1></legend>

	<table border="1">
		<tr>
			<th>id</th>
			<th>Student name</th>
			<th>Class</th>
			<th>Subjects</th>
			<th>Salary</th>
			<th>Contact Number</th>
			<th>Assigned Teacher Name</th>
			<th>Action</th>
		</tr>

	<?php for($i=0; $i != count($tlist); $i++): ?>
		<tr>
			<td><?php echo e($tlist[$i]->id); ?></td>
			<td><?php echo e($tlist[$i]->name); ?></td>
			<td><?php echo e($tlist[$i]->class); ?></td>
			<td><?php echo e($tlist[$i]->subject); ?></td>
			<td><?php echo e($tlist[$i]->salary); ?></td>
			<td><?php echo e($tlist[$i]->contact); ?></td>
			<td><?php echo e($tlist[$i]->teacher); ?></td>
			<td><a href="<?php echo e(route('home.tuitionedit', [$tlist[$i]->id])); ?>">Give a teacher</a>
		</tr>
	<?php endfor; ?>
	</table>
	</div>
	<br/>
	<a href="<?php echo e(route('home.index')); ?>">back</a> 
	<a href="javascript:pdfToHTML()">Save as PDF</a><br/><br/>

</fieldset>
</body>
<script src="/js/jquery-2.1.3.js"></script>
<script src="/js/pdfFromHTML.js"></script>
<script src="/js/jspdf.js"></script>
</html><?php /**PATH C:\Users\Nasa It\Desktop\APWT project\laravel\laratest\resources\views/A_tuition/tuition.blade.php ENDPATH**/ ?>