<!DOCTYPE html>
<html>
<head>
		<title>PHP SYNTEX</title>
		<style>
		body{font-family:$fonts;}
		.phpcoding{width:1500px ;margin: 10; background:#ddd;}
		.header,.footer {background:#444;color:#FC8C41 ;text-align:center;padding: 10px;}
		.main{min-height:580px; background:#444; }
		.header h2,.footer h2 {margin:0 auto; text-align:center;}
		</style>
</head>

<body>
<div class="phpcoding">
<section class="header">
<h2> <p style="text-align:left">My profile </h2>
</section>
<section class="main">



			
		
	
	<?php for($i=0; $i != count($users); $i++): ?>
	
	
	
	<table>
	<tr>
					
					<td></td><td></td>
					<td><center><img src="/upload/<?php echo e($users[$i]->picture); ?>" width="380px" height="250px"></center></td>
			</tr>
			
			<tr>
			
					<td ><span style=color:#FC8C41><b>Name :</b></span></td>
					
					<td><span style=color:#FC8C41><?php echo e($users[$i]->username); ?></span></td>
			</tr>
			<tr>
					<td ><span style=color:#FC8C41><b>Password :</b></span></td>
					
					<td><span style=color:#FC8C41><?php echo e($users[$i]->password); ?></span></td>
			</tr>
			<tr>
					<td ><span style=color:#FC8C41><b>Email:</b></span></td>
					
					<td><span style=color:#FC8C41><?php echo e($users[$i]->email); ?></span></td>
			</tr>
			<tr>
					<td ><span style=color:#FC8C41><b>Gender:</b></span></td>
					
					<td><span style=color:#FC8C41><?php echo e($users[$i]->gender); ?></span></td>
			</tr>
			<tr>
					<td ><span style=color:#FC8C41><b>Education:</b></span></td>
					
					<td><span style=color:#FC8C41><?php echo e($users[$i]->education); ?></span></td>
			</tr>
		

	</table>
	<br/>
	<table>
	<tr><td><a href="<?php echo e(route('home.index')); ?>"><span style=color:#F4FF09>Back</span></a></td>
	<td><a href="<?php echo e(route('home.pedit', [$users[$i]->id])); ?>"><span style=color:#F4FF09>Update</span></a></td></tr>
	</table>
	
	<?php endfor; ?>

</body>
</html><?php /**PATH C:\Users\Nasa It\Desktop\APWT project\laravel\laratest\resources\views/A_profile/profile.blade.php ENDPATH**/ ?>