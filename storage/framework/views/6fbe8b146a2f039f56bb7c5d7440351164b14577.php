<?php $__env->startSection('content'); ?>
    <section id="testimonials" class="section-bg wow ">
        <div class="container">
            <br><br>
            <header class="section-header">
                <h3 style="color: white;">POR  FAVOR, ELIJA UN NIVEL</h3>
            </header>
            <center>
                <a href="<?php echo e(url('/recep/zone/firstlevel/'.$dni.'/day/'.$date)); ?>"><img src="<?php echo e(asset('img/primernivel.jpg')); ?>"></a>
                <a href="<?php echo e(url('/recep/zone/secondlevel/'.$dni.'/day/'.$date)); ?>"><img src="<?php echo e(asset('/img/segundonivel.jpg')); ?>"></a>
            </center>
            <br>
            <center><a href="<?php echo e(url('/recep/search')); ?>"><i class="ion-ios-undo-outline" style="font-size: 350%"></i></a><h6 style="color: white; font-family: 'Arial Black'">MENU PRINCIPAL</h6></center>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>