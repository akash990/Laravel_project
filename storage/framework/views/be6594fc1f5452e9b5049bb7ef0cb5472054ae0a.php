<table border="1">
		<tr>
			<th>id</th>
			<th>name</th>
			<th>email</th>
			<th>Picture</th>
			<th>Action</th>

			
		
		</tr>

	<?php $__currentLoopData = $tlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($users->id); ?></td>
			<td><?php echo e($users->username); ?></td>
			<td><?php echo e($users->email); ?></td>
			<td><img src="/upload/<?php echo e($users->picture); ?>" width='100px' height='100px'></td>
			<td><a href="<?php echo e(route('home.teacheredit', [$users->id])); ?>">Edit</a>| <a href="<?php echo e(route('home.teacherdelete', [$users->id])); ?>">Delete</a></td>

			
		</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
	

</body>
</html><?php /**PATH C:\Users\Nasa It\Desktop\APWT project\laravel\laratest\resources\views/A_teachers/teacherslist.blade.php ENDPATH**/ ?>