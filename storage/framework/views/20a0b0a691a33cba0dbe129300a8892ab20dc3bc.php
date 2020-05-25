
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php if(session('status')): ?>
<div class="status"><b><?php echo e(session('status')); ?></b></div>
<?php endif; ?>
<table>
    <thead>
        <tr>
            <th class="cell-no-p">No.</td>
            <th class="cell-name-p">Project name</td>
            <th class="cell-employees-p">Employees</td>
            <th class="cell-actions-p">Action</td>
        </tr>
    </thead>
    <tbody>
        <?php $no = 0; ?>
        <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $no++; ?>
        <tr>
            <td class="cell-no-p"><?php echo e($no); ?></td>
            <td class="cell-name-p"><?php echo e($project->name); ?></td>
            <td class="cell-employees-p">
                <?php $i = 0; ?>
                <?php $__currentLoopData = $project->employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($i == count($project->employees) - 1): ?>
                <?php echo e($employee->name . ' ' . $employee->surname); ?>

                <?php else: ?>
                <?php echo e($employee->name . ' ' . $employee->surname . ' ,'); ?>

                <?php endif; ?>
                <?php $i++; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </td>
            <td class="cell-actions-p">
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
                <form action="<?php echo e(route('project.show', $project->id)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('GET'); ?>
                    <button type="submit" class="view">View</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<div class="create"><a href="<?php echo e(route('project.create')); ?>">Create New Project</a></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\Ampps\www\MG_baigiamasis_darbas\resources\views/indexProject.blade.php ENDPATH**/ ?>