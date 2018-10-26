<?php $__env->startSection('carousel'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('categories'); ?>
<?php $__env->stopSection(); ?>
<br><br>
<?php $__currentLoopData = $allnews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$word): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<h1 style="text-align: center;">#<?php echo e($word->category); ?></h1>
<?php $__currentLoopData = $allnews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$word): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	
<div class="card">
  <h5 class="card-header"><?php echo e($word->code); ?></h5>
  <div class="card-body">
    <h5 class="card-title"><?php echo e($word->header); ?></h5>
    <p class="card-text"><?php echo $word->text; ?></p>
     <p class="card-text">Reading times: <?php echo $word->counter; ?></p>
  </div>
</div>
</div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php echo $__env->make('news', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>