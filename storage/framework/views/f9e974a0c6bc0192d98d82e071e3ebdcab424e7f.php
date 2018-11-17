<?php $__env->startSection('content'); ?>
    <section id="contact" class="section-bg wow ">
        <div class="container">
            <br><br><br><br>
            <div class="section-header">
                <h3><font color="white">¡ RESERVA REGISTRADA CON ÉXITO !</font></h3>
            </div>
            <br><br>
            <div class="row contact-info">
                <div class="col-md-12">
                    <div class="contact-phone">
                        <center><a href="<?php echo e(url('/recep/search')); ?>"><i class="ion-ios-undo-outline" style="font-size: 350%"></i></a><h6 style="color: white; font-family: 'Arial Black'">MENU PRINCIPAL</h6></center>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br><br>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>