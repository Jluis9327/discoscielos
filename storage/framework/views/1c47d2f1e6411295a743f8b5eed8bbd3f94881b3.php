<?php $__env->startSection('content'); ?>
    <section id="portfolio"  class="section-bg" >
        <div class="container">
            <div class="section-header">
                <br><br><h3 style="color: white">REGISTRAR CLIENTE</h3>
            </div>
            <form method="post" action="<?php echo e(url('/RECEP/register')); ?>" enctype="multipart/form-data" >
                <?php echo e(csrf_field()); ?>

                <center>
                    <table class="">
                        <tr>
                            <td><input id="dni" type="text" class="form-control" name="dni" placeholder="DNI" style="text-align: center; background-color: transparent; color: white" value="" required></td>
                            <td><input id="name" type="text" class="form-control" name="name" placeholder="Nombre" style="text-align: center; background-color: transparent; color: white" value="" required></td>
                        </tr>
                        <tr>
                            <td><input id="apepat" type="text" class="form-control" name="apepat" placeholder="Apellido Paterno" style="text-align: center; background-color: transparent; color: white" value="" required></td>
                            <td><input id="apemat" type="text" class="form-control" name="apemat" placeholder="Apellido Materno" style="text-align: center; background-color: transparent; color: white" value="" required></td>
                        </tr>
                        <tr>
                            <td><input id="phone" type="text" class="form-control" name="phone" placeholder="Telefono" style="text-align: center; background-color: transparent; color: white" value="" required></td>
                            <td><input id="email" type="text" class="form-control" name="email" placeholder="Correo" style="text-align: center; background-color: transparent; color: white" value="" required></td>
                        </tr>
                        <tr>
                            <td><input id="pass" type="password" class="form-control" name="pass" placeholder="Contraseña" style="text-align: center; background-color: transparent; color: white" value="" required></td>
                            <td><input id="conf" type="password" class="form-control" name="conf" placeholder="Confirmar Contraseña" style="text-align: center; background-color: transparent; color: white" value="" required></td>
                        </tr>
                    </table>

                    <br><input type="submit" class="btn btn-outline-success" value="REGISTRAR">
                </center>
            </form>
            <br><center><a href="<?php echo e(url('/admin')); ?>"><i class="ion-ios-undo-outline" style="font-size: 350%"></i></a>
                <h6 style="color: white; font-family: 'Arial Black'">MENU PRINCIPAL</h6></center>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>