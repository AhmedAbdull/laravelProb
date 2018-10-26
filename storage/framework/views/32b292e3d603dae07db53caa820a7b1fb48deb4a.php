<h2>C</h2>

<form action="/contact" method="POST">
	<?php echo csrf_field(); ?>
	<table>

	<tr>
	<td><label>Your name</label></td>
	<td><input type="text" name="client_name"></td>
	</tr>

	<tr>
	<td><label>Your email</label></td>
	<td><input type="text" name="client_email"></td>
	</tr>

	<tr>
	<td><label>Your subject</label></td>
	<td><input type="text" name="client_subject"></td>
	</tr>

	<tr>
	<td><label>Your subject</label></td>
	<td><textarea name="client_comment" rows="6" cols="30"> </textarea></td>
	</tr>

	<tr>
	<td><button>Submit</button></td>
	</tr>

</table>
</form>

<?php if($errors->any()): ?>
<h4><?php echo e($errors->first()); ?></h4>
<?php endif; ?>

<?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<p><?php echo e($contact->client_name); ?></p> <br>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__currentLoopData = $shops; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$shop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<p><?php echo e($shop->product_name); ?></p> <br>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


	<?php $__currentLoopData = $words; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$word): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php echo e($word->product_name); ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

