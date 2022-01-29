Listar tareas
<a href="<?php echo e(url('tareas/create')); ?>">Crear</a>
<a href="<?php echo e(url('logout')); ?>">Salir</a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>DESC</th>
            <th>OPC</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $tareas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tarea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($tarea->id); ?></td>
            <td><?php echo e($tarea->nombre); ?></td>
            <td><?php echo e($tarea->descripcion); ?></td>
            <td>
                <a href="<?php echo e(url('tareas/'.$tarea->id.'/edit')); ?>">Editar</a>
                <form action="<?php echo e(url('tareas/'.$tarea->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo e(method_field('DELETE')); ?>

                    <button type="submit">Borrar</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php /**PATH C:\xampp\htdocs\tasks\resources\views/tareas/index.blade.php ENDPATH**/ ?>