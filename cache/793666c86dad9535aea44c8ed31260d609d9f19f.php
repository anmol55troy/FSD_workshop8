
<?php $__env->startSection('title','Employee Database'); ?>

<?php $__env->startSection('content'); ?>
<div style="margin-bottom: 30px;">
    <a href="index.php?action=create" class="btn">+ Add New Employee</a>
</div>

<ul>
<?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<li>
    <strong><?php echo e($e['name']); ?></strong> – <em style="color: #666;"><?php echo e($e['title']); ?></em>
    <br><br>
    <strong style="color: #764ba2;">Skills:</strong>
    <ul>
    <?php $__currentLoopData = explode(',', $e['skills']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e(trim($skill)); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    <div class="action-links">
        <a href="index.php?action=edit&id=<?php echo e($e['id']); ?>">✏️ Edit</a>
        <a href="index.php?action=delete&id=<?php echo e($e['id']); ?>" class="delete" onclick="return confirm('Are you sure?');">🗑️ Delete</a>
    </div>
</li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\week8FSD\app\views/employee/index.blade.php ENDPATH**/ ?>