<?php $__env->startSection('content'); ?>
    <section id="testimonials" class="section-bg wow ">
        <div class="container">
            <br><br><br>
            <header class="section-header">
                <h3 style="color: white">UBICACIONES - SEGUNDO NIVEL</h3>
            </header>
            <div class="form-group">
                <label for="días" class="col-form-label" aria-disabled="true">Seleccione el día</label><br>
                <select >
                    <option  name="1" value="Jueves">x</option>
                    <option  name="2" value="Viernes">y</option>
                    <option  name="3" value="Sábado">z</option>
                </select>
            </div>
            <center>
                    <table border="2">
                        <?php



                        ?>
                        <tr>
                            <td style="background-color: #ffc107;color: black"><input type="checkbox" size="5" name="R4" id="400"> R4 - 400</td>
                            <td style="background-color: #ffc107;color: black"><input type="checkbox" size="5" name="S4" id="400"> S4 - 400</td>
                            <td style="background-color: #ffc107;color: black"><input type="checkbox" size="5" name="T4" id="400"> T4 - 400</td>
                            <td style="background-color: white;color: black;text-align: center;font-family: 'Arial Black'" colspan="3">ESCENARIO</td>
                            <td style="background-color: #6c757d;color: white;text-align: center">Escalera</td>
                            <td style="background-color: #18d26e;color: black"><input type="checkbox" size="5" name="K4" id="600"> K4 - 600</td>
                            <td style="background-color: #18d26e;color: black"><input type="checkbox" size="5" name="L4" id="600"> L4 - 600</td>
                        </tr>
                        <tr>
                            <td style="background-color: #ffc107;color: black"><input type="checkbox" size="5" name="R3" id="400"> R3 - 400</td>
                            <td style="color: white;text-align: center">ZONA DE</td>
                            <td style="background-color: #ffc107;color: black"><input type="checkbox" size="5" name="T3" id="400"> T3 - 400</td>
                            <td colspan="3">&nbsp;</td>
                            <td style="background-color: #18d26e;color: black"><input type="checkbox" size="5" name="J3" id="600"> J3 - 600</td>
                            <td style="color: white;text-align: center">ZONA DE</td>
                            <td style="background-color: #18d26e;color: black"><input type="checkbox" size="5" name="L3" id="600"> L3 - 600</td>
                        </tr>
                        <tr>
                            <td style="background-color: #ffc107;color: black"><input type="checkbox" size="5" name="R2" id="400"> R2 - 400</td>
                            <td style="color: white;text-align: center">BAILE</td>
                            <td style="background-color: #ffc107;color: black"><input type="checkbox" size="5" name="T2" id="400"> T2 - 400</td>
                            <td style="background-color: #007bff;color: white"><input type="checkbox" size="5" name="A1" id="500"> A1 - 500</td>
                            <td style="background-color: #007bff;color: white"><input type="checkbox" size="5" name="A2" id="500"> A2 - 500</td>
                            <td style="background-color: #007bff;color: white"><input type="checkbox" size="5" name="A3" id="500"> A3 - 500</td>
                            <td style="background-color: #18d26e;color: black"><input type="checkbox" size="5" name="J2" id="600"> J2 - 600</td>
                            <td style="color: white;text-align: center">BAILE</td>
                            <td style="background-color: #18d26e;color: black"><input type="checkbox" size="5" name="L2" id="600"> L2 - 600</td>
                        </tr>
                        <tr>
                            <td style="background-color: #ffc107;color: black"><input type="checkbox" size="5" name="R1" id="400"> R1 - 400</td>
                            <td style="background-color: #ffc107;color: black"><input type="checkbox" size="5" name="S1" id="400"> S1 - 400</td>
                            <td style="background-color: black;text-align: center;color: white" colspan="5">ZONA LIBRE - PASADIZO</td>
                            <td style="background-color: #18d26e;color: black"><input type="checkbox" size="5" name="K1" id="600"> K1 - 600</td>
                            <td style="background-color: #18d26e;color: black"><input type="checkbox" size="5" name="L1" id="600"> L1 - 600</td>
                        </tr>
                    </table>
                    <br><br>
                    <table>
                        <tr>
                            <td style="background-color: #ffc107;color: black" width="40"></td>
                            <td style="color: white">&nbsp; Box para 4 personas - Costo 400 soles - Incluye Combo Red Label</td>
                        </tr>
                        <tr>
                            <td style="background-color: #007bff;color: white"></td>
                            <td style="color: white">&nbsp; Box para 2 personas - Costo 500 soles - Incluye Combo Double Black</td>
                        </tr>
                        <tr>
                            <td style="background-color: #18d26e;color: black"></td>
                            <td style="color: white">&nbsp; Box para 6 personas - Costo 600 soles - Incluye Combo Black Label</td>
                        </tr>
                    </table>
                <br>

                <button class='btn btn-primary' data-toggle='modal' data-target='#pk-modal' onclick='click'>CONTINUAR</button>
            </center>


            <div class="modal fade " id="pk-modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
                 aria-labelledby="pk-modal" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <h3>La cantidad Total es :         Aceptar los términos y condiciones</h3>
                        </div>
                        <div class="modal-footer">
                            <a  href="#"><input type="submit" value="Si" class="btn btn-success" ></a>
                            <button class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>

            <center><a href="<?php echo e(url('/recep/zone/'.$dni)); ?>"><i class="ion-ios-undo-outline" style="font-size: 350%"></i></a>
                <h6 style="color: white; font-family: 'Arial Black'">MENU PRINCIPAL</h6></center>

            <div class="facts-img"></div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>