<?php $__env->startSection('content'); ?>
    <section id="about" class="section-bg">
        <div class="container">
            <header class="section-header">
                <br><br>
                <h3 style="color: white">Bienvenido</h3>
                <p style="color: white; font-family: 'Arial Black'">Administrador - <?php echo e(Auth::user()->name." ".Auth::user()->surname); ?></p>
            </header>
            <div class="row about-cols">
                <div class="col-md-4 wow fadeInUp">
                    <div class="about-col">
                        <div class="img">
                            <img src="<?php echo e(asset('img/nuser.png')); ?>" alt="" class="img-fluid">
                            <div class="icon"><i class="ion-ios-personadd"></i></div>
                        </div>
                        <h2 class="title"><a href="<?php echo e(url('/admin/register')); ?>">Crear Usuario</a></h2><br>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="about-col">
                        <div class="img">
                            <img src="<?php echo e(asset('img/muser.png')); ?>" alt="" class="img-fluid">
                            <div class="icon"><i class="ion-ios-people-outline"></i></div>
                        </div>
                        <h2 class="title"><a href="<?php echo e(url('/admin/modify')); ?>">Modificar Usuario</a></h2><br>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="about-col">
                        <div class="img">
                            <img src="<?php echo e(asset('img/panel.png')); ?>" alt="" class="img-fluid">
                            <div class="icon"><i class="ion-ios-refresh-empty"></i></div>
                        </div>
                        <h2 class="title"><a href="<?php echo e(url('/admin/banner')); ?>">Actualizar Banner</a></h2><br>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>