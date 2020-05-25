
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div id="create-form">
    <form method="post" action="<?php echo e(route('project.update', $project->id)); ?>">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <label for="name">Project name:</label><br>
            <input type="text" name="name" value="<?php echo e($project->name); ?>" /><br>
            <label for="description">Project description :</label><br>
            <textarea name="description"><?php echo e($project->description); ?></textarea><br>
        <button type="submit" class="submit">Update</button>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\Ampps\www\MG_baigiamasis_darbas\resources\views/editProject.blade.php ENDPATH**/ ?>