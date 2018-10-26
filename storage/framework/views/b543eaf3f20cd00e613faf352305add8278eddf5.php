<div class="row">
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="<?php echo e(asset('img/'.$product->picture)); ?>" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="<?php echo e(asset('shop/'.$product->code)); ?>"><?php echo e($product->name); ?></a>
                  </h4>
                  <h5><?php echo e($product->price); ?>$</h5>
                  <p class="card-text"><?php echo e($product->description); ?></p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>