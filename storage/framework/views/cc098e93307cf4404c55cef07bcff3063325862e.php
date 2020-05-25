

<?php $__env->startSection('content'); ?>
<table>
    <thead>
        <tr>
            <td>No.</td>
            <td>Name</td>
            <td>Surname</td>
            <td>Assigned project</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        <?php $no = 0; ?>
        <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $no++; ?>
        <tr>
            <td><?php echo e($no); ?></td>
            <td><?php echo e($employee->name); ?></td>
            <td><?php echo e($employee->surname); ?></td>
            <td><?php echo e($employee->project['name']); ?></td>
            <td>
                <form action="<?php echo e(route('employee.edit', $employee->id)); ?>">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('GET'); ?>
                    <button type="submit">Edit</button>
                </form>
                <form action="<?php echo e(route('employee.destroy', $employee->id)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit">Delete</button>
                </form>
                <form action="<?php echo e(route('employee.show', $employee->id)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('GET'); ?>
                    <button type="submit">View</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<div><a href="<?php echo e(route('employee.create')); ?>">Create New Employee</a></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\Ampps\www\MG_baigiamasis_darbas\resources\views/IndexEmployee.blade.php ENDPATH**/ ?>