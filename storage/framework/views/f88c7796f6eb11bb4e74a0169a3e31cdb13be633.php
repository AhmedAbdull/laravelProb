
<br><br>



<?php $__currentLoopData = $allnews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$word): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<h1></h1>	
<div class="card">
  <h5 class="card-header"><?php echo e($word->code); ?></h5>
  <div class="card-body">
    <h5 class="card-title"><?php echo e($word->header); ?></h5>
    <p class="card-text"><?php echo $word->text; ?></p>
  </div>
</div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
