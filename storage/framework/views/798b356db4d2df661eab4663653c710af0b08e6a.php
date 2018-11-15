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
            <input type="checkbox" id="cbox2" value="second_checkbox"> <label for="cbox2"><a href="terminos_condiciones.html" target="_blank" style="font-family: 'Arial Narrow';">Términos y Condiciones</a></label>
                        <div class="form-group">
                                <button type="submit" class="btn btn-outline-success">
                                    Registrarme
                                </button>
                        </div>
        </form>
        <br><br><br>
        <br><br><br>
        <br><br>
    </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>