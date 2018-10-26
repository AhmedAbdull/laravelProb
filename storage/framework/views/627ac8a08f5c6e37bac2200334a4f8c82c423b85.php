<div class="col-lg-3" >
         
          <div class="list-group">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(asset('shop/category/'.$category->code)); ?>" class="list-group-item"><?php echo e($category->code); ?></a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
          </div>

        </div>