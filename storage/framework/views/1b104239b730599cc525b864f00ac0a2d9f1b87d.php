<?php $__env->startSection('content'); ?>

    <section id="portfolio"  class="section-bg" >
        <div class="container">
            <header class="section-header">
                <br><br>
                <h3 style="color: white">Bienvenido</h3>
                <p style="color: white; font-family: 'Arial Black'">Recepcionista - <?php echo e(Auth::user()->name." ".Auth::user()->surname); ?></p>
            </header>
            <div class="section-header">
                <br><h5  style="color: white">BUSCAR CLIENTE</h5>
            </div>
            <form action="<?php echo e(url('/recep/search/')); ?>" method="post" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>

                <center>
                    <table class="egt">

                        <tr>
                            <td>Ingresar DNI</td>
                            <td></td><td></td><td></td><td></td>
                            <td><input id="dni" type="text" class="form-control" name="dni" placeholder="DNI" style="text-align: center; background-color: transparent; color: white" autocomplete="off" maxlength="8" value="<?php echo e($dni); ?>" onkeypress="return validaNumericos(event)" ></td>
                            <td><input name="btn_buscar" type="submit" class="btn btn-outline-success" value="BUSCAR"></td>
                        </tr>
                    </table>
                </center>
            </form>
            <?php
                if(isset($dato)!=null) {
                    if($dato->isNotEmpty())
                        {
                    ?>
                    <br>
                        <table>
                            <tr>
                            <?php for($i = 0; $i < count($dato); $i++): ?>
                                <form action="<?php echo e(url('/recep/modify')); ?>" method="post" enctype="multipart/form-data">
                                    <?php echo e(csrf_field()); ?>

                                    <td><input  name="iduser" type="hidden" value="<?php echo e($dato[$i]->id); ?>"></td>
                                    <td><input id="name<?php echo $dato[$i]->id;?>" type="text" class="form-control" name="name<?php echo e($dato[$i]->id); ?>" placeholder="Nombre" style="text-align: center; background-color: transparent; color: white" value="<?php echo e($dato[$i]->name); ?>"  disabled></td>
                                    <td><input id="ape<?php echo e($dato[$i]->id); ?>" type="text" class="form-control" name="ape<?php echo e($dato[$i]->id); ?>" placeholder="Apellido" style="text-align: center; background-color: transparent; color: white" value="<?php echo e($dato[$i]->surname); ?>"  disabled></td>
                                    <td><input id="dni<?php echo e($dato[$i]->id); ?>" type="text" class="form-control" name="dni<?php echo e($dato[$i]->id); ?>" placeholder="DNI" style="text-align: center; background-color: transparent; color: white" value="<?php echo e($dato[$i]->DNI); ?>"  disabled></td>
                                    <td><input id="phone<?php echo e($dato[$i]->id); ?>" type="text" class="form-control" name="phone<?php echo e($dato[$i]->id); ?>" placeholder="Telefono" style="text-align: center; background-color: transparent; color: white" value="<?php echo e($dato[$i]->phone); ?>"  disabled></td>
                                    <td><input id="email<?php echo e($dato[$i]->id); ?>" type="text" class="form-control" name="email<?php echo e($dato[$i]->id); ?>" placeholder="Correo" style="text-align: center; background-color: transparent; color: white" value="<?php echo e($dato[$i]->email); ?>" disabled></td>
                                    <td><input id="modificar<?php echo e($dato[$i]->id); ?>" type="button" class="btn btn-success" value="Modificar" onclick="deshabilitarcliente(<?php echo $dato[$i]->id;?>)" ></td>
                                    <td><button id="guardar<?php echo e($dato[$i]->id); ?>" type="submit" class="btn btn-success" name="guardar<?php echo e($dato[$i]->id); ?>"  >Guardar</button></td>
                                    <td><a href="<?php echo e(url('/recep/zone/'.$dato[$i]->DNI)); ?>" ><button id="reservar<?php echo e($dato[$i]->DNI); ?>" type="button" class="btn btn-success" name="reservar<?php echo e($dato[$i]->DNI); ?>"  >Reservar</button></a></td>
                                </form>
                            <?php endfor; ?>
                </tr>
                </table>
                <?php }
                    elseif($dato->isEmpty() && $mensaje2==false){
                ?>
            <button class='btn btn-primary' data-toggle='modal' data-target='#pk-modal' onclick='click' id='id01'
                    style='display: none'>Abrir Modal
            </button>
            <div class="modal fade " id="pk-modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
                 aria-labelledby="pk-modal" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <h3>Cliente no Registrado, Desea registrarlo?</h3>
                        </div>
                    </div>
                        <div class="modal-footer">
                            <a  href="<?php echo e(url('/recep/register/'.$dni)); ?>"><input type="submit" value="Si" class="btn btn-success" ></a>
                            <button class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php }
            elseif($dato->isEmpty() && $mensaje2==true){
            ?>
            <button class='btn btn-primary' data-toggle='modal' data-target='#pk-modal' onclick='click' id='id01'
                    style='display: none'>Abrir Modal
            </button>
            <div class="modal fade " id="pk-modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
                 aria-labelledby="pk-modal" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="modal-header">
                                <button type="button" data-dismiss="modal" class="btn">Cancel</button>
                            </div>
                            <div class="modal-body">
                                <h3>Ingresar correctamente el DNI</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                <?php
                    }
                }?>
            <center><a href="<?php echo e(url('/recep')); ?>"><i class="ion-ios-undo-outline" style="font-size: 350%"></i></a><h6 style="color: white; font-family: 'Arial Black'">MENU PRINCIPAL</h6></center>
        </div>
    </section>
    <script type="text/javascript">
        window.onload=function () {
            document.getElementById('id01').click();
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>