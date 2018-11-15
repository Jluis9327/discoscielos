<?php $__env->startSection('content'); ?>
    <section id="portfolio"  class="section-bg">
        <div class="container">
            <br><br>
            <header class="section-header">
                <h3 class="section-title" style="color: white">LISTA DE USUARIOS</h3>
            </header>
            <p style="color: white">RECEPCIONISTAS</p>
            <table>
                <tr>
                    <?php for($i = 0; $i < count($user); $i++): ?>
                        <form method="post" style="" class="" action="<?php echo e(url('/admin/modify')); ?>" enctype="multipart/form-data">
                            <?php echo e(csrf_field()); ?>

                            <td><input  name="iduser" type="hidden" value="<?php echo e($user[$i]->id); ?>"></td>
                            <td><input id="name<?php echo $user[$i]->id;?>" type="text" class="form-control" name="name<?php echo e($user[$i]->id); ?>" placeholder="Nombre" style="text-align: center; background-color: transparent; color: white" value="<?php echo e($user[$i]->name); ?>"  disabled></td>
                            <td><input id="ape<?php echo e($user[$i]->id); ?>" type="text" class="form-control" name="ape<?php echo e($user[$i]->id); ?>" placeholder="Apellido" style="text-align: center; background-color: transparent; color: white" value="<?php echo e($user[$i]->surname); ?>"  disabled></td>
                            <td><input id="dni<?php echo e($user[$i]->id); ?>" type="text" class="form-control" name="dni<?php echo e($user[$i]->id); ?>" placeholder="DNI" style="text-align: center; background-color: transparent; color: white" value="<?php echo e($user[$i]->DNI); ?>"  disabled></td>
                            <td><input id="phone<?php echo e($user[$i]->id); ?>" type="text" class="form-control" name="phone<?php echo e($user[$i]->id); ?>" placeholder="Telefono" style="text-align: center; background-color: transparent; color: white" value="<?php echo e($user[$i]->phone); ?>"  disabled></td>
                            <td><input id="email<?php echo e($user[$i]->id); ?>" type="email" class="form-control" name="email<?php echo e($user[$i]->id); ?>" placeholder="Correo" style="text-align: center; background-color: transparent; color: white" value="<?php echo e($user[$i]->email); ?>" disabled></td>
                            <td><input id="password<?php echo e($user[$i]->id); ?>" type="password" class="form-control" name="password<?php echo e($user[$i]->id); ?>" placeholder="Contraseña" style="text-align: center; background-color: transparent; color: white"  disabled></td>
                            <td><input id="estado<?php echo e($user[$i]->id); ?>" type="text" class="form-control" name="estado<?php echo e($user[$i]->id); ?>" placeholder="Estado" style="text-align: center; background-color: transparent; color: white" value="<?php echo e($user[$i]->estados->Name); ?>"  disabled></td>
                            <td><input id="modificar<?php echo e($user[$i]->id); ?>" type="button" class="btn btn-success" value="Modificar" onclick="deshabilitar(<?php echo $user[$i]->id;?>)" ></td>
                            <td><button id="guardar<?php echo e($user[$i]->id); ?>" type="submit" class="btn btn-success" name="guardar<?php echo e($user[$i]->id); ?>"  >Guardar</button></td>
                        </form>
                </tr>
                    <?php endfor; ?>
            </table>
        <center><a href="<?php echo e(url('/admin')); ?>"><i class="ion-ios-undo-outline" style="font-size: 350%"></i></a>
            <h6 style="color: white; font-family: 'Arial Black'">MENU PRINCIPAL</h6></center>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>