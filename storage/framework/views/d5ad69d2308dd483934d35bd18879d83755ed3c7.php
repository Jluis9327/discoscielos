<?php $__env->startSection('content'); ?>
    <section id="testimonials" class="section-bg wow ">
        <div class="container">
            <br><br>
            <header class="section-header">
                <h3 style="color: white">ZONA GENERAL - PRIMER NIVEL </h3>
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
                <form class="form-horizontal" method="POST" action="<?php echo e(url('/recep/zone/firstlevel/reservation/')); ?>" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

                    <table>
                        <?php $__currentLoopData = $disponible; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $x): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><IMG src="<?php echo e(asset('img/zgeneral.png')); ?>"></td>
                                <input type="hidden" name="id"  value="<?php echo e($x->Id_Pre); ?>">
                                <input type="hidden" name="dni"  value="<?php echo e($dni); ?>">
                                <input type="hidden" name="user" value="<?php echo e(Auth::user()->id); ?>">
                                <td style="color: white">Aforo: <input type="number" value="<?php echo e($x->gauging); ?>" size="2" disabled>
                                    Quedan: <input type="number" name="quantity" id="quantity" value="<?php echo e($x->quantity); ?>" size="2" disabled></td>
                                <td style="color: white">Número de Reservas: <input type="text" id="cantidad" name="cantidad" size="2" maxlength="2" onkeyup="fAgrega();" onfocus="disminuir();"></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                    <br>
                    Total a pagar:<input type="text" id="total" size="3" name="total" value="0" disabled><br>
                    <button  class="btn btn-outline-success" data-toggle='modal' data-target='#pk-modal' onclick="click" value="RESERVAR">CONTINUAR</button>
                </form>
                <br>
            </center>
            <center>
                <a href="<?php echo e(url('/recep/zone/'.$dni)); ?>"><i class="ion-ios-undo-outline" style="font-size: 350%"></i></a>
                <h6 style="color: white; font-family: 'Arial Black'">ANTERIOR</h6></center>

            <div class="facts-img"></div>
        </div>
    </section>
    <script type="text/javascript">
        function handleSelect(elm)
        {
            window.location = elm.value;
        }
        // var valorinicial =  document.getElementById("quantity").value;
        function fAgrega()
        {
            document.getElementById("total").value = document.getElementById("cantidad").value*25;
            // document.getElementById("quantity").value = document.getElementById("quantity").value - document.getElementById("cantidad").value;
            //  // var valorinicial =  document.getElementById("quantity").value;
            //  //
            //   if(document.getElementById("quantity").value!="") {
            //       document.getElementById("quantity").value = document.getElementById("quantity").value - document.getElementById("cantidad").value;
            //   }
            //   else {
            //       document.getElementById("quantity").value=valorinicial;
             // }
                 //     if(even.charCode==46){
            //         document.getElementById("quantity").value=g;
            //     }
            // }
        }
        function disminuir(){
            document.getElementById("quantity").value = document.getElementById("quantity").value-document.getElementById("cantidad").value;
        }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>