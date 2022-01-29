<form action="" method="post">
    <h1>Login</h1>
    <?php echo csrf_field(); ?>
    <?php echo $__env->make('login.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</form><?php /**PATH C:\xampp\htdocs\tasks\resources\views/login/login.blade.php ENDPATH**/ ?>