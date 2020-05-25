
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php if(session('status')): ?>
<div class="status"><?php echo e(session('status')); ?></div>
<?php endif; ?>
<table>
    <thead>
        <tr>
            <th class="cell-no-e">No.</th>
            <th class="cell-name-e">Name</th>
            <th class="cell-name-e">Surname</th>
            <th class="cell-name-e">Assigned project</th>
            <th class="cell-actions-e">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 0; ?>
        <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $no++; ?>
        <tr>
            <td class="cell-no-e"><?php echo e($no); ?></td>
            <td class="name-e"><?php echo e($employee->name); ?></td>
            <td class="cell-name-e"><?php echo e($employee->surname); ?></td>
            <td class="cell-name-e"><?php echo e($employee->project['name']); ?></td>
            <td class="cell-actions-e">
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
                <form action="<?php echo e(route('employee.show', $employee->id)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('GET'); ?>
                    <button type="submit" class="view">View</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<div class="create"><a href="<?php echo e(route('employee.create')); ?>">Create New Employee</a></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\Ampps\www\LaravelProjectManager\resources\views/indexEmployee.blade.php ENDPATH**/ ?>