

<?php $__env->startSection('content'); ?>

<form method="POST" action="<?php echo e(route('employees.store')); ?>">
    <?php echo csrf_field(); ?>
    <label for="name">Employee's name:</label><br>
    <input type="text" id="name" name="name"><br>
    <label for="name">Employees's surname:</label><br>
    <input type="text" id="surname" name="surname"><br>
    <label for="name">Employees's responsibilities:</label><br>
    <input type="text" id="responsibilities" name="responsibilities"><br>
    <label for="text">Assign project:</label><br>
    <input type="text" id="project" name="project"><br><br>
    <input type="submit" value="Submit">
</form>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\Ampps\www\MG_baigiamasis_darbas\resources\views/create.blade.php ENDPATH**/ ?>