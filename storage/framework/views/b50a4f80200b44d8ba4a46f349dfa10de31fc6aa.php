<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>
<table bgcolor="#343a40" height="20%" width="100%">
<tr>
<td> <center><h2><font color="blue">Welcome,  <?php echo e(session('username')); ?>!!</font><h2><center></td>
</tr>


</table>

	
	

<br/>
<center><a href="<?php echo e(route('home.tprofile')); ?>">Profile</a></center><br/>

<center><a href="<?php echo e(route('home.studentsinfo')); ?>">Students Information</a></center><br/>

<center><a href="<?php echo e(route('home.teachersinfo')); ?>">Teachers Information</a></center><br/>
<center><a href="<?php echo e(route('home.tpinfo')); ?>">Tuition provider Information</a></center><br/>
<center><a href="<?php echo e(route('home.tuition')); ?>">All tuitions</a></center><br/>
<center><a href="<?php echo e(route('home.totaluser')); ?>">Total users</a></center><br/>

<center><a href="<?php echo e(route('logout.index')); ?>">Logout</a></center>



</body>
</html><?php /**PATH C:\Users\Nasa It\Desktop\APWT project\laravel\laratest\resources\views/A_home/index.blade.php ENDPATH**/ ?>