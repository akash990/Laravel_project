<!DOCTYPE html>
<html>
<head>
	<title>Total user</title>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/table.css')); ?>">
		
	
	table{
	border-collapse: collapse;
	width: 100%;
	color: #d96459;
	font-family: monospace;
	font-size: 25px;
	text-align: left;
	}
	th{
		background-color: #d96459;
		color: white;
		}
		tr:nth-child(even) {background-color: #f2f2f2;}
 
</style>
</head>
<body>
		<form>
			<fieldset>
			<div id="ph">
				<legend><h1>Total user</h1></legend>
			<table>
			<tr>
			<th>id</th>
			<th>name</th>
			<th>password</th>
			<th>email</th>
			<th>gender</th>
			<th>Education</th>
			<th>Type</th>
			<th>Block</th>
			</tr>
	<?php for($i=0; $i !=count($userList->results); $i++): ?>		

		<tr>
		    <td><?php echo e($userList->results[$i]->id); ?></td>
			<td><?php echo e($userList->results[$i]->name); ?></td>
			<td><?php echo e($userList->results[$i]->password); ?></td>
			<td><?php echo e($userList->results[$i]->email); ?></td>
			<td><?php echo e($userList->results[$i]->gender); ?></td>
			<td><?php echo e($userList->results[$i]->education); ?></td>
			<td><?php echo e($userList->results[$i]->type); ?></td>
			<td><?php echo e($userList->results[$i]->block); ?></td>
		</tr>
	
	<?php endfor; ?>		
	</table>	<br/>			
		<a href="<?php echo e(route('home.index')); ?>">Back</a>	
<a href="javascript:pdfToHTML()">Save as PDF</a><br/><br/>		
			</fieldset>
			
		</form>
</body>
<script src="/js/jquery-2.1.3.js"></script>
<script src="/js/pdfFromHTML.js"></script>
<script src="/js/jspdf.js"></script>
</html>
<?php /**PATH C:\Users\Nasa It\Desktop\APWT project\laravel\laratest\resources\views/A_totaluser/totaluser.blade.php ENDPATH**/ ?>