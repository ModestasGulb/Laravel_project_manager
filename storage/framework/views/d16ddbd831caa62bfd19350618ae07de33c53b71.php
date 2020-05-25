
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div id="create-form">
<form method="POST" action="<?php echo e(route('project.store')); ?>">
    <?php echo csrf_field(); ?>
    <label for="name">Project name:</label><br>
    <input type="text" id="name" name="name"><br>
    <label for="text">Description:</label><br>
    <input type="text" id="description" name="description"><br><br>
    <input type="submit" value="Submit" class="submit">
</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\Ampps\www\MG_baigiamasis_darbas\resources\views/createProject.blade.php ENDPATH**/ ?>