<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>
<fieldset>

	<marquee><h1>WELCOME HOME <?php echo e(session('username')); ?></h1></marquee>
	
</fieldset>
<br/>
<center><a href="<?php echo e(route('home.tprofile')); ?>">Profile</a></center><br/>
<center><a href="<?php echo e(route('home.availabletuition')); ?>">Available Tuition</a></center><br/>
<center><a href="<?php echo e(route('home.offeredtuition')); ?>">Offered Tuition</a></center><br/>
<center><a href="<?php echo e(route('home.fileupload')); ?>">Upload Notes</a></center><br/>
<center><a href="<?php echo e(route('home.studentsinfo')); ?>">Students Information</a></center><br/>
<center><a href="<?php echo e(route('home.exam')); ?>">Exam & Grades</a></center><br/>
<center><a href="<?php echo e(route('home.notices')); ?>">Notices</a></center><br/>
<center><a href="<?php echo e(route('home.salary')); ?>">Salary</a></center><br/>
<center><a href="<?php echo e(route('home.teachersinfo')); ?>">Teachers Information</a></center><br/>
<center><a href="<?php echo e(route('home.ctp')); ?>">Contact Tuition Provider</a></center><br/>
<center><a href="<?php echo e(route('home.answer')); ?>">Answer Script</a></center><br/>
<center><a href="<?php echo e(route('home.schedule')); ?>">Class Schedule</a></center><br/>
<center><a href="<?php echo e(route('home.cta')); ?>">Complain to Admin</a></center><br/>
<center><a href="<?php echo e(route('home.ratings')); ?>">Ratings & Review</a></center><br/>
<center><a href="<?php echo e(route('logout.index')); ?>">Logout</a></center>

</body>
</html><?php /**PATH B:\CSE\ATP3\New\laratest\resources\views/t_home/index.blade.php ENDPATH**/ ?>