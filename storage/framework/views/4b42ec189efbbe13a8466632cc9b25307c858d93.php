<!DOCTYPE html>
<html>
<head>
	<title>TEACHERS INFORMATION</title>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/table.css')); ?>">
</head>
<body>

	<fieldset>
	<legend><h1>TEACHERS INFORMATION</h1></legend>
	
	
 
        <input type="text" placeholder="search tuition provider" id="box"><br/><br/>
    
	<div  id="list">
	<table border="1">
		<tr>
			<th>id</th>
			<th>name</th>
			<th>email</th>
			
		
		</tr>

	<?php $__currentLoopData = $tlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($users->id); ?></td>
			<td><?php echo e($users->username); ?></td>
			<td><?php echo e($users->email); ?></td>
		
			
		</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
	</div>
	  <script>
        $('#box').keyup(function () {
            $.ajax({
                url: '/t_home/teachersinfo',
                method: 'POST',
                data: {
                    "_token": "<?php echo e(csrf_token()); ?>",
                    key: $(this).val(),
                },
                success: function (data) {
                    $('#list').html(data);
                },
            });
        });
    </script>
	<br/>
<a href="<?php echo e(route('home.index')); ?>">Back</a>
</fieldset>
</body>
</html><?php /**PATH C:\Users\Nasa It\Desktop\APWT project\laravel\laratest\resources\views/t_teachers/teachers.blade.php ENDPATH**/ ?>