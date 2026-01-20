
<?php $__env->startSection('title','Edit Employee'); ?>
<?php $__env->startSection('content'); ?>

<h3>Edit Employee Information</h3>

<form method="post" action="index.php?action=update">
    <input type="hidden" name="id" value="<?php echo e($employee['id']); ?>">
    
    <input type="text" name="name" value="<?php echo e($employee['name']); ?>" placeholder="Full Name" required>
    
    <input type="text" name="title" value="<?php echo e($employee['title']); ?>" placeholder="Job Title" required>
    
    <input type="text" name="skills" value="<?php echo e($employee['skills']); ?>" placeholder="Skills (comma separated)" required>
    
    <button type="submit">✅ Update Employee</button>
</form>

<p style="margin-top: 20px; text-align: center;">
    <a href="index.php" style="color: #999;">← Back to Employee List</a>
</p>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\week8FSD\app\views/employee/edit.blade.php ENDPATH**/ ?>