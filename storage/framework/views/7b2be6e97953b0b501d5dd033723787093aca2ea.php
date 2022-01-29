<form action="<?php echo e(url('usuarios/')); ?>" method="post">
    <h1>Register</h1>
    <?php echo csrf_field(); ?>
    <?php echo $__env->make('auth.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</form>
<a href="<?php echo e(url('login')); ?>">Login</a><?php /**PATH C:\xampp\htdocs\tasks\resources\views/auth/register.blade.php ENDPATH**/ ?>