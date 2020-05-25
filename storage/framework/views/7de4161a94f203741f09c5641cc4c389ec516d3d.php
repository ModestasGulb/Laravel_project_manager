
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="show">
    <h1><?php echo e($employee->name . ' ' . $employee->surname); ?></h1>
    <hr>
    <div>
        <h2>Skills</h2>
        <p><?php echo e($employee->skills); ?></p>
        <hr>
        <h2>Assigned project</h2>
        <?php if($employee->project_id != NULL): ?>
        <p><?php echo e($employee->project->name); ?></p>
        <?php else: ?>
        <p>This employee has no assigned project</p>
        <?php endif; ?>
        <hr>
            <form action="<?php echo e(route('employee.edit', $employee->id)); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field('GET'); ?>
                <button type="submit" class="edit">Edit</button>
            </form>
            <form action="<?php echo e(route('employee.destroy', $employee->id)); ?>" method="post">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="delete">Delete</button>
            </form>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\Ampps\www\MG_baigiamasis_darbas\resources\views/showEmployee.blade.php ENDPATH**/ ?>