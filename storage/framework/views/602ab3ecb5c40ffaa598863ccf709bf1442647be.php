<label for="nombre">Nombre</label>
<input type="text" name="nombre" value="<?php echo e(isset($tarea->nombre) ? $tarea->nombre : ''); ?>"> 
<br>   
<label for="descripcion">Descripcion</label>
<input type="text" name="descripcion" value="<?php echo e(isset($tarea->descripcion) ? $tarea->descripcion : ''); ?>"> 
<br>   
<button type="submit">Enviar</button>
<a href="<?php echo e(url('tareas')); ?>">Lista</a><?php /**PATH C:\xampp\htdocs\tasks\resources\views/tareas/form.blade.php ENDPATH**/ ?>