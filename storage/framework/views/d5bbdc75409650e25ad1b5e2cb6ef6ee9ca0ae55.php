<?php $__env->startSection('header'); ?>
	##parent-placeholder-594fd1615a341c77829e83ed988f137e1ba96231##
<?php $__env->stopSection(); ?>

<?php $__env->startSection('menu'); ?>
	##parent-placeholder-252a25667dc7c65fe0e9bf62d474bbab9bab4068##
<?php $__env->stopSection(); ?>

<?php $__env->startSection('sidebar'); ?>
	
	<div class="sidebar-header">
            <h3>Bootstrap Sidebar</h3>
        </div>
<?php $__env->stopSection(); ?>
 <?php $__env->startSection('content'); ?>
      <?php echo $__env->make('default.content', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php $__env->stopSection(); ?>
<?php echo $__env->make('default.layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>