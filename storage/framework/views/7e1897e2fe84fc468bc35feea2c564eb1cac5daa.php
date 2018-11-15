<?php $__env->startSection('content'); ?>
    <section id="about">
        <div class="container">

            <header class="section-header">
                <br><br>
                <h3 style="color: white">Bienvenido</h3>
                <p style="color: white; font-family: 'Arial Black'">Usuario - <?php echo e(Auth::user()->name." ".Auth::user()->surname); ?></p>
            </header>

            <div class="row about-cols">

                <div class="col-md-4"></div>

                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="about-col">
                        <div class="img">
                            <img src="../img/boxrese.jpg" alt="" class="img-fluid">
                            <div class="icon"><i class="ion-ios-locked-outline"></i></div>
                        </div>
                        <h2 class="title"><a href="<?php echo e(url('/client/zone')); ?>">Reservar Box</a></h2><br>
                    </div>
                </div>

                <div class="col-md-4"></div>

            </div>

        </div>
    </section>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>