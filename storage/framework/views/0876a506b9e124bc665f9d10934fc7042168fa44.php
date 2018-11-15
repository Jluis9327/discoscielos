<?php $__env->startSection('content'); ?>
    <section id="about">
        <div class="container">

            <header class="section-header">
                <br><br>
                <h3 style="color: white">Bienvenido</h3>
                <p style="color: white; font-family: 'Arial Black'">Recepcionista - <?php echo e(Auth::user()->name." ".Auth::user()->surname); ?></p>
            </header>

            <div class="section-header">
                <br><br><h3 style="color: white">REGISTRAR CLIENTE</h3>
            </div>

            <form class="form-horizontal" method="POST" action="<?php echo e(url('/recep/register')); ?>" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>

                <div class="form-group<?php echo e($errors->has('DNI') ? ' has-error' : ''); ?>">
                    <center><div class="col-md-4">
                            <input id="DNI" type="text" class="form-control" name="dni" placeholder="DNI" style="text-align: center; background-color: transparent; color: white" value="<?php echo e($id); ?>" maxlength="8" required autofocus>
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
                    <center><button type="submit" class="btn btn-outline-success">
                            Registrar
                        </button></center>
                </div>
            </form>

            <br>
            <center><a href="<?php echo e(url('/recep')); ?>"><i class="ion-ios-undo-outline" style="font-size: 350%"></i></a><h6 style="color: white; font-family: 'Arial Black'">MENU PRINCIPAL</h6></center>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>