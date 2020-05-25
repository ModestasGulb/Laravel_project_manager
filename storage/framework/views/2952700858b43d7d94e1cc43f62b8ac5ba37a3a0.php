
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div id="create-form">
    <form method="POST" action="<?php echo e(route('employee.store')); ?>">
        <?php echo csrf_field(); ?>
        <label for="name">Employee's name:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="name">Employees's surname:</label><br>
        <input type="text" id="surname" name="surname"><br>
        <label for="name">Employees's skills:</label><br>
        <input type="text" id="skills" name="skills"><br><br>
        <input type="submit" value="Submit" class="submit">
        <select name="project_id">
            <option value="" selected></option>
            <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($project->id); ?>"><?php echo e($project->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\Ampps\www\MG_baigiamasis_darbas\resources\views/createEmployee.blade.php ENDPATH**/ ?>