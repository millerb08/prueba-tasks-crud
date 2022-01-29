<form action="<?php echo e(url('tareas/')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <?php echo $__env->make('tareas.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</form><?php /**PATH C:\xampp\htdocs\tasks\resources\views/tareas/create.blade.php ENDPATH**/ ?>