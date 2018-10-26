<?php $__env->startSection('content'); ?>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Form elements</a> <a href="#" class="current">Validation</a> </div>
    <h1>Category Settings</h1>
  </div>
  <?php if(isset($message)): ?>
<?php $__currentLoopData = $message; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong><?php echo e($msg); ?></strong>
            </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Add Category</h5>
           
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="<?php echo e(url('/shop/admin/add-category')); ?>" name="add_category" id="add_category" novalidate="novalidate">
            	<?php echo csrf_field(); ?>
              <div class="control-group">
                <label class="control-label">Your Name</label>
                <div class="controls">
                  <input type="text" name="category_name" id="category_name">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Order number</label>
                <div class="controls">
                  <input type="number" name="order" id="order">
                </div>
              </div>
             
            
              <div class="form-actions">
                <input type="submit" value="Validate" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
   
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminLayout.admin_design', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>