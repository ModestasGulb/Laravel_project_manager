
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="show">
    <h1><?php echo e($project->name); ?></h1>
    <hr>
    <div>
        <h2>Project description</h2>
        <p><?php echo e($project->description); ?></p>
        <hr>
        <h2>Employees</h2>
        <p>
            <?php $i = 0; ?>
            <?php $__currentLoopData = $project->employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($i == count($project->employees) - 1): ?>
            <?php echo e($employee->name . ' ' . $employee->surname); ?>

            <?php else: ?>
            <?php echo e($employee->name . ' ' . $employee->surname . ' ,'); ?>

            <?php endif; ?>
            <?php $i++; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </p>
        <hr>
        <form action="<?php echo e(route('project.edit', $project->id)); ?>">
            <?php echo csrf_field(); ?>
            <?php echo method_field('GET'); ?>
            <button type="submit" class="edit">Edit</button>
        </form>
        <form action="<?php echo e(route('project.destroy', $project->id)); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <button type="submit" class="delete">Delete</button>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\Ampps\www\MG_baigiamasis_darbas\resources\views/showProject.blade.php ENDPATH**/ ?>