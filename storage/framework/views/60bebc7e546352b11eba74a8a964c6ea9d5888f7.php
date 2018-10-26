<h1>Add a category</h1>
<form action="" method="get">
	<input type="hidden" name="categories">
  Code <input type="text" name="code"><br>
  Header <input type="text" name="header"><br>
  Text <input type="text" name="text"><br>
  Image <input type="text" name="img"><br>
  <input type="submit" value="Submit">
</form>
<h1>Add a new</h1>
<form action="" method="get">
	<input type="hidden" name="news">
  Code <input type="text" name="code1"><br>
  Choose a category<select name="category">
  <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<option value="<?php echo e($value->code); ?>"> <?php echo e($value->code); ?> </option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select><br>
  Header <input type="text" name="header1"><br>
  Text <input type="text" name="text1"><br>
 Hot <input type="radio" name="hot" value="1">
 Not hot <input type="radio" name="hot" value="0">
 <input type="submit" value="Submit">
</form>
<h1>Add a bad word</h1>
<form action="" method="get">
	<input type="hidden" name="words">
 	Word<input type="text" name="word">
 	 <input type="submit" value="Submit">
</form>