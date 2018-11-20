<?php $__env->startSection('content'); ?>

    <section id="call-to-action" class="wow fadeIn">
        <div class="container text-center">
            <br><br><br><br>
            <p>INICIAR SESION</p>
            <form class="form-horizontal" method="POST" action="<?php echo e(route('login')); ?>">
                <?php echo e(csrf_field()); ?>


                <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                    <center>
                        <div class="col-md-4">
                            <input id="email" type="email" class="form-control" placeholder="Correo Electronico"
                                   style="text-align: center; background-color: transparent; color: white" name="email"
                                   value="<?php echo e(old('email')); ?>" required autofocus>

                            <?php if($errors->has('email')): ?>
                                <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                            <?php endif; ?>
                        </div>
                    </center>
                </div>

                <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                    <center>
                        <div class="col-md-4">
                            <input id="password" type="password" class="form-control" placeholder="Contraseña"
                                   style="text-align: center; background-color: transparent; color: white"
                                   name="password" required>

                            <?php if($errors->has('password')): ?>
                                <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                            <?php endif; ?>
                        </div>
                    </center>
                </div>

                <div class="form-group">
                    <div class="">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                Recordarme
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="">
                        <a  href="<?php echo e(route('register')); ?>"> <font style="font-family: 'Arial Narrow';color:#CCEEFF">Registrarme</a>
                        <button type="submit" class="btn btn-outline-success">
                            INICIAR SESION
                        </button>
                        <br>
                    </div>
                </div>
            </form>
            <br><br>
            <br><br>
            <br><br>
        </div>
    </section><!-- #call-to-action -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>