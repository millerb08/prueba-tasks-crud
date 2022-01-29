<form action="<?php echo e(url('usuarios/')); ?>" method="get">
    <h1>Login</h1>
    <?php echo csrf_field(); ?>
    <?php echo $__env->make('auth.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</form>
<a href="<?php echo e(url('register')); ?>">Registrar</a><?php /**PATH C:\xampp\htdocs\tasks\resources\views/auth/login.blade.php ENDPATH**/ ?>