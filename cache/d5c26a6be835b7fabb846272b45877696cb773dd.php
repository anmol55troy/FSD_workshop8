
<?php $__env->startSection('title','Create Employee'); ?>
<?php $__env->startSection('content'); ?>

<h3>Add New Employee</h3>

<form method="post" action="index.php?action=store">
    <input type="text" name="name" placeholder="Full Name" required>
    
    <input type="text" name="title" placeholder="Job Title" required>
    
    <input type="text" name="skills" placeholder="Skills (comma separated, e.g., PHP, MySQL, JavaScript)" required>
    
    <button type="submit">💾 Save Employee</button>
</form>

<p style="margin-top: 20px; text-align: center;">
    <a href="index.php" style="color: #999;">← Back to Employee List</a>
</p>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\week8FSD\app\views/employee/create.blade.php ENDPATH**/ ?>