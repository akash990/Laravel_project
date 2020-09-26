<!DOCTYPE html>
<html>
<head>
	<title>SCHEDULE</title>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/table.css')); ?>">
</head>
<body>

	<fieldset>
	<div id="ph">
	<legend><h1>SCHEDULE</h1></legend>

	<table border="1">
		<tr>
			<th>id</th>
			<th>name</th>
			<th>day</th>
			<th>time</th>
			<th>operations</th>
		</tr>

	<?php for($i=0; $i != count($users); $i++): ?>
		<tr>
			<td><?php echo e($users[$i]->id); ?></td>
			<td><?php echo e($users[$i]->name); ?></td>
			<td><?php echo e($users[$i]->day); ?></td>
			<td><?php echo e($users[$i]->time); ?></td>
			<td><a href="<?php echo e(route('home.scheduleedit', [$users[$i]->id])); ?>">Edit</a> | <a href="<?php echo e(route('home.scheduledelete', [$users[$i]->id])); ?>">Delete</a></td>
		</tr>
	<?php endfor; ?>
	</table>
	</div>
	<br/>
	<a href="<?php echo e(route('home.scheduleinsert')); ?>">Insert</a> 
	<a href="javascript:pdfToHTML()">Save as PDF</a><br/><br/>
<a href="<?php echo e(route('home.index')); ?>">Back</a>
</fieldset>
</body>
<script src="/js/jquery-2.1.3.js"></script>
<script src="/js/pdfFromHTML.js"></script>
<script src="/js/jspdf.js"></script>
</html><?php /**PATH B:\CSE\ATP3\New\laratest\resources\views/t_schedule/schedule.blade.php ENDPATH**/ ?>