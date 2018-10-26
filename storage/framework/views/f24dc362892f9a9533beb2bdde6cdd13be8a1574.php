<!DOCTYPE html>
<html lang="en') }}">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="<?php echo e(asset('css/backend_css/bootstrap.min.css')); ?>" />
<link rel="stylesheet" href="<?php echo e(asset('css/backend_css/bootstrap-responsive.min.css')); ?>" />
<link rel="stylesheet" href="<?php echo e(asset('css/backend_css/select2.css')); ?>" />
<link rel="stylesheet" href="<?php echo e(asset('css/backend_css/uniform.css')); ?>" />
<link rel="stylesheet" href="<?php echo e(asset('css/backend_css/fullcalendar.css')); ?>" />
<link rel="stylesheet" href="<?php echo e(asset('css/backend_css/matrix-style.css')); ?>" />
<link rel="stylesheet" href="<?php echo e(asset('css/backend_css/matrix-media.css')); ?>" />
<link rel="stylesheet" href="<?php echo e(asset('css/backend_css/sweetalert.css')); ?>" />
<link href="<?php echo e(asset('css/backend_css/font-awesome.css')); ?>" rel="stylesheet" />
<link rel="stylesheet" href="<?php echo e(asset('css/backend_css/jquery.gritter.css')); ?>" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>
<body>

<?php echo $__env->make('layouts.adminLayout.admin_header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts.adminLayout.admin_sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<?php echo $__env->yieldContent('content'); ?>

<?php echo $__env->make('layouts.adminLayout.admin_footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<script src="<?php echo e(asset('js/backend_js/jquery.min.js')); ?> "></script> 
<!-- <script src="<?php echo e(asset('js/backend_js/jquery.ui.custom.js')); ?> "></script> --> 
<script src="<?php echo e(asset('js/backend_js/bootstrap.min.js')); ?> "></script> 
<script src="<?php echo e(asset('js/backend_js/jquery.uniform.js')); ?> "></script> 
<script src="<?php echo e(asset('js/backend_js/select2.min.js')); ?> "></script> 
<script src="<?php echo e(asset('js/backend_js/jquery.validate.js')); ?> "></script> 
<script src="<?php echo e(asset('js/backend_js/jquery.dataTables.min.js')); ?> "></script> 
<script src="<?php echo e(asset('js/backend_js/matrix.js')); ?> "></script> 
<script src="<?php echo e(asset('js/backend_js/matrix.form_validation.js?version=343')); ?> "></script>
<script src="<?php echo e(asset('js/backend_js/matrix.tables.js')); ?>"></script>
<script src="<?php echo e(asset('js/backend_js/matrix.popover.js')); ?>"></script>
<script src="<?php echo e(asset('js/backend_js/sweetalert.min.js')); ?>"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script type="text/javascript') }}">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>

</body>
</html>
