<table border="1">
		<tr>
			<th>id</th>
			<th>area</th>
			<th>class</th>
			<th>subject</th>
			<th>tuition_provider</th>
		</tr>

	<?php $__currentLoopData = $alist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($users->id); ?></td>
			<td><?php echo e($users->area); ?></td>
			<td><?php echo e($users->class); ?></td>
			<td><?php echo e($users->subject); ?></td>
			<td><?php echo e($users->tuition_provider); ?></td>
		</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
	<?php /**PATH B:\CSE\ATP3\New\laratest\resources\views/t_available/availablelist.blade.php ENDPATH**/ ?>