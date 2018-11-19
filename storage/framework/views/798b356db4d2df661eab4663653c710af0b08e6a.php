<?php $__env->startSection('content'); ?>
    <section id="call-to-action" class="wow fadeIn">
    <div class="container text-center">
    <br><br><br><br>
        <p>REGISTRO DE CLIENTES</p>
        <form class="form-horizontal" method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group<?php echo e($errors->has('DNI') ? ' has-error' : ''); ?>">
                            <center><div class="col-md-4">
                                    <input id="DNI" type="text" class="form-control" name="DNI" placeholder="DNI" style="text-align: center; background-color: transparent; color: white" value="<?php echo e(old('DNI')); ?>" maxlength="8" required autofocus>
                            <?php if($errors->has('DNI')): ?>
                                <span class="help-block">
                                                    <strong><?php echo e($errors->first('DNI')); ?></strong>
                                                </span>
                            <?php endif; ?>
                        </div></center>
                        </div>
                        <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                            <center><div class="col-md-4">
                                <input id="name" type="text" class="form-control" name="name" placeholder="Nombre" style="text-align: center; background-color: transparent; color: white" value="<?php echo e(old('name')); ?>" required >
                                <?php if($errors->has('name')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                                </div></center>
                        </div>
                        <div class="form-group<?php echo e($errors->has('surname') ? ' has-error' : ''); ?>">
                            <center><div class="col-md-4">
                                    <input id="surname" type="text" class="form-control" name="surname" placeholder="Apellidos" style="text-align: center; background-color: transparent; color: white" value="<?php echo e(old('surname')); ?>" required >
                                    <?php if($errors->has('surname')): ?>
                                        <span class="help-block">
                                                    <strong><?php echo e($errors->first('surname')); ?></strong>
                                                </span>
                                    <?php endif; ?>
                                </div></center>
                        </div>
                        <div class="form-group<?php echo e($errors->has('phone') ? ' has-error' : ''); ?>">
                            <center><div class="col-md-4">
                                    <input id="phone" type="text" class="form-control" name="phone" placeholder="Teléfono" style="text-align: center; background-color: transparent; color: white" value="<?php echo e(old('phone')); ?>" maxlength="9" required >
                                    <?php if($errors->has('phone')): ?>
                                        <span class="help-block">
                                                                <strong><?php echo e($errors->first('phone')); ?></strong>
                                                            </span>
                                    <?php endif; ?>
                                </div></center>
                        </div>
                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <center><div class="col-md-4">
                                <input id="email" type="email" class="form-control" name="email" placeholder="Correo Electronico" style="text-align: center; background-color: transparent; color: white" value="<?php echo e(old('email')); ?>" required>

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                                </div></center>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <center><div class="col-md-4">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña" style="text-align: center; background-color: transparent; color: white" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                                </div></center>
                        </div>

                        <div class="form-group">
                            <center><div class="col-md-4">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirme Contraseña" style="text-align: center; background-color: transparent; color: white" required>
                                </div></center>
                        </div>
                        <input type="checkbox" name="checkbox" id="option" value="<?php echo e(old('option')); ?>">
                        <label for="cbox2"><button class='btn btn-primary' data-toggle='modal' data-target='#pk-modal' onclick='click' id='id01'>Leer Términos y condiciones</button></label>
                        <div class="form-group">
                                <button type="submit" class="btn btn-outline-success">
                                    REGISTRAR
                                </button>
                        </div>
        </form>
        <button class='btn btn-primary' data-toggle='modal' data-target='#pk-modal' onclick='click' id='id01'
                style='display: none'>Abrir Modal
        </button>
        <div class="modal fade " id="pk-modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
             aria-labelledby="pk-modal" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">TÉRMINOS Y CONDICIONES</h4>
                            <span>Es requisito necesario para la adquisición del servicio que se ofrecen en este sitio, que lea y acepte los siguientes Términos y Condiciones que a continuación se redactan.<br>El uso de nuestros servicios así como la reservación del box implicará que usted ha leído y aceptado los Términos y Condiciones de Uso en el presente documento.<br> En todo momento, para hacer la respectiva reserva, será necesario el registro por parte del usuario, con ingreso de datos personales fidedignos y definición de una contraseña.<br>
                            Todas las reservas  que se lleven a cabo por medio de este sitio web, están sujetas a un proceso de confirmación y verificación, el cual podría incluir la verificación del depósito y disponibilidad de box, validación de la forma de pago, validación de la Boucher (en caso de existir) o captura de este y el cumplimiento de las condiciones requeridas por el medio de pago seleccionado.<br>En algunos casos puede que se requiera una verificación por medio de correo electrónico.<br>
                            <br>POLÍTICA DE REEMBOLSO Y GARANTÍA<br>
                            Una vez hecha la reserva y esta sea verificada no hay lugar a rembolso ya que esto implicaría un proceso desleal para nuestros demás clientes en cuestión de sus boxes ya reservados. Su reserva cuenta con un margen de tiempo de espera y cantidad de invitados, esto incluye:<br>
                            – De no presentarse hasta las 00:00 del día reservado su box pasa a ser vendido en puerta.<br>
                            – De excederse en cantidad de invitados, no se podrá ingresar el número de personas excedentes debido a que el segundo nivel cuenta con un aforo estricto.<br>
                            <br>PRIVACIDAD<br>
                            Este sitio web www. discocielos.azurewebsites.net garantiza que la información personal que usted envía cuenta con la seguridad necesaria. <br>Los brazaletes son entregados en puerta al usuario registrado, estos no serán entregados a terceros, salvo que deba ser revelada en cumplimiento a una orden judicial o requerimientos legales.<br>
                            La suscripción a boletines de correos electrónicos publicitarios es voluntaria y podría ser seleccionada al momento de crear su cuenta.<br>
                                Discoteca Cielos reserva los derechos de cambiar o de modificar estos términos sin previo aviso.<br></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>
        <br><br><br>
        <br><br>
    </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>