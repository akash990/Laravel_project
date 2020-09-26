<!DOCTYPE html>
<html>
<head>
	<title>AVAILABLE TUITION</title>
		
	<style type="text/css">	
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
				<legend><h1>AVAILABLE TUITION</h1></legend>
			
	<?php for($i=0; $i !=count($userList->results); $i++): ?>		

		
			<?php echo e($userList->results[$i]->id); ?>

			<?php echo e($userList->results[$i]->area); ?>

			<?php echo e($userList->results[$i]->class); ?>

			<?php echo e($userList->results[$i]->subject); ?>

			<?php echo e($userList->results[$i]->tuition_provider); ?>

		
	
	<?php endfor; ?>		
						
				
			</fieldset>
			
		</form>
</body>
</html>
<?php /**PATH B:\CSE\ATP3\New\laratest\resources\views/t_home/guzzle.blade.php ENDPATH**/ ?>