
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div id="create-form">
    <form action="<?php echo e(route('employee.update', $employee->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
            <label for="name">Employee's name:</label><br>
            <input type="text" name="name" value="<?php echo e($employee->name); ?>" /><br>
            <label for="surname">Employee's surname:</label><br>
            <input type="text" name="surname" value="<?php echo e($employee->surname); ?>" /><br>
            <label for="skills">Skills:</label><br>
            <textarea name="skills"><?php echo e($employee->skills); ?></textarea><br>
            <select name="project_id">
                <option value=""></option>
                <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($project->id); ?>" <?php echo e($project->id == $employee->project_id ? "selected" : ""); ?>><?php echo e($project->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select><br>
            <button type="submit" class="submit">Update</button>
            
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\Ampps\www\MG_baigiamasis_darbas\resources\views/editEmployee.blade.php ENDPATH**/ ?>