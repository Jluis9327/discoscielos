<?php $__env->startSection('content'); ?>
    <section id="testimonials" class="section-bg wow ">
        <div class="container">
            <br><br>
            <header class="section-header">
                <h3 style="color: white">ZONA GENERAL - PRIMER NIVEL</h3>
            </header>

            <center>
                <div class="form-group">
                    <label for="días" class="col-form-label" aria-disabled="true">Seleccione el día</label><br>
                    <select id="xs" onchange="javascript:handleSelect(this)">
                        <option>Escoge una fecha</option>
                        <?php for($i = 2; $i>=0 ; $i--): ?>
                            <option value="<?php echo e(url('/recep/zone/firstlevel/'.$dni.'/day/'.$presentation[$i]->Date)); ?>"><?php echo e($presentation[$i]->Date); ?></option>
                        <?php endfor; ?>
                    </select>
                </div>
                <table>
                    <?php $__currentLoopData = $disponible; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $x): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
                            <?php echo e(csrf_field()); ?>

                    <tr>
                        <td><IMG src="<?php echo e(asset('img/zgeneral.png')); ?>"></td>
                        <td style="color: white">Aforo: <input type="number" value="<?php echo e($x->gauging); ?>" size="2" disabled>
                            Quedan: <input type="text" value="<?php echo e($x->quantity); ?>" size="2" disabled><br></td>
                        <td style="color: white">Número de Reservas: <input type="text" id="cantidad" name="cantidad" size="2" maxlength="2"></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </form>
                </table>
                <br>
                <button  class="btn btn-outline-success" data-toggle='modal' data-target='#pk-modal' onclick="click" value="RESERVAR">CONTINUAR</button>
            </center>
            <center>
                <a href="<?php echo e(url('/recep/zone/'.$dni)); ?>"><i class="ion-ios-undo-outline" style="font-size: 350%"></i></a>
                <h6 style="color: white; font-family: 'Arial Black'">ANTERIOR</h6></center>

            <div class="facts-img"></div>
        </div>
        <button class='btn btn-primary' data-toggle='modal' data-target='#pk-modal' onclick='click' id='id01'
                style='display: none'>Abrir Modal
        </button>
        <div class="modal fade " id="pk-modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
          aria-labelledby="pk-modal" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <h3>La cantidad Total es :</h3>
                                <input type="text" style="width:350px;" class="form-control" id="total" size="2" disabled><br>
                            <h3>Aceptar los términos y condiciones</h3>
                        </div>
                        <div class="modal-footer">
                            <a  href="#"><input type="submit" value="Si" class="btn btn-success" ></a>
                            <button class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        </div>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript">
        function handleSelect(elm)
        {
            window.location = elm.value;
        }

    </script>
    <script>
        $(document).ready(function(){
            $(document).on('click', '.pk-modal', function(){
                var cantidad=$('#cantidad').text();
                $('#pk-modal').modal('show');
                $('#total').val(cantidad);
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>