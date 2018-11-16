@extends('layouts.app')
@section('content')
    <section id="testimonials" class="section-bg wow ">
        <div class="container">
            <br><br><br>
            <header class="section-header">
                <h3 style="color: white">UBICACIONES - SEGUNDO NIVEL</h3>
            </header>
            <div class="form-group">
                <label for="días" class="col-form-label" aria-disabled="true">Seleccione el día</label><br>
                <select id="xs" onchange="javascript:handleSelect(this)">
                    <option>Escoge una fecha</option>
            @for ($i = 2; $i>=0 ; $i--)
                        <option value="{{url('/recep/zone/secondlevel/'.$dni.'/day/'.$presentation[$i]->Date)}}">{{ $presentation[$i]->Date}}</option>
            @endfor
                </select>
            </div>
            <center>
                    <table border="2">
                        <?php



                        ?>
                        <tr>
                            <td style="background-color: #ffc107;color: black"><input type="checkbox" size="5" name="R4" id="400" <?php for ($i=0;$i<count($boxes);$i++){if($boxes[$i]->box->Cod_Bo=="R4"){if($boxes[$i]->Id_Est=="3"){}elseif($boxes[$i]->Id_Est=="4"){echo "disabled checked";}elseif ($boxes[$i]->Id_Est=="5"){echo "disabled checked";}}}?>> R4 - 400</td>
                            <td style="background-color: #ffc107;color: black"><input type="checkbox" size="5" name="S4" id="400" <?php for ($i=0;$i<count($boxes);$i++){if($boxes[$i]->box->Cod_Bo=="S4"){if($boxes[$i]->Id_Est=="3"){}elseif($boxes[$i]->Id_Est=="4"){echo "disabled checked";}elseif ($boxes[$i]->Id_Est=="5"){echo "disabled checked";}}}?>> S4 - 400</td>
                            <td style="background-color: #ffc107;color: black"><input type="checkbox" size="5" name="T4" id="400" <?php for ($i=0;$i<count($boxes);$i++){if($boxes[$i]->box->Cod_Bo=="T4"){if($boxes[$i]->Id_Est=="3"){}elseif($boxes[$i]->Id_Est=="4"){echo "disabled checked";}elseif ($boxes[$i]->Id_Est=="5"){echo "disabled checked";}}}?>> T4 - 400</td>
                            <td style="background-color: white;color: black;text-align: center;font-family: 'Arial Black'" colspan="3">ESCENARIO</td>
                            <td style="background-color: #6c757d;color: white;text-align: center">Escalera</td>
                            <td style="background-color: #18d26e;color: black"><input type="checkbox" size="5" name="K4" id="600" <?php for ($i=0;$i<count($boxes);$i++){if($boxes[$i]->box->Cod_Bo=="K4"){if($boxes[$i]->Id_Est=="3"){}elseif($boxes[$i]->Id_Est=="4"){echo "disabled checked";}elseif ($boxes[$i]->Id_Est=="5"){echo "disabled checked";}}}?>> K4 - 600</td>
                            <td style="background-color: #18d26e;color: black"><input type="checkbox" size="5" name="L4" id="600" <?php for ($i=0;$i<count($boxes);$i++){if($boxes[$i]->box->Cod_Bo=="L4"){if($boxes[$i]->Id_Est=="3"){}elseif($boxes[$i]->Id_Est=="4"){echo "disabled checked";}elseif ($boxes[$i]->Id_Est=="5"){echo "disabled checked";}}}?>> L4 - 600</td>
                        </tr>
                        <tr>
                            <td style="background-color: #ffc107;color: black"><input type="checkbox" size="5" name="R3" id="400" <?php for ($i=0;$i<count($boxes);$i++){if($boxes[$i]->box->Cod_Bo=="R3"){if($boxes[$i]->Id_Est=="3"){}elseif($boxes[$i]->Id_Est=="4"){echo "disabled checked";}elseif ($boxes[$i]->Id_Est=="5"){echo "disabled checked";}}}?>> R3 - 400</td>
                            <td style="color: white;text-align: center">ZONA DE</td>
                            <td style="background-color: #ffc107;color: black"><input type="checkbox" size="5" name="T3" id="400" <?php for ($i=0;$i<count($boxes);$i++){if($boxes[$i]->box->Cod_Bo=="T3"){if($boxes[$i]->Id_Est=="3"){}elseif($boxes[$i]->Id_Est=="4"){echo "disabled checked";}elseif ($boxes[$i]->Id_Est=="5"){echo "disabled checked";}}}?>> T3 - 400</td>
                            <td colspan="3">&nbsp;</td>
                            <td style="background-color: #18d26e;color: black"><input type="checkbox" size="5" name="J3" id="600" <?php for ($i=0;$i<count($boxes);$i++){if($boxes[$i]->box->Cod_Bo=="J3"){if($boxes[$i]->Id_Est=="3"){}elseif($boxes[$i]->Id_Est=="4"){echo "disabled checked";}elseif ($boxes[$i]->Id_Est=="5"){echo "disabled checked";}}}?>> J3 - 600</td>
                            <td style="color: white;text-align: center">ZONA DE</td>
                            <td style="background-color: #18d26e;color: black"><input type="checkbox" size="5" name="L3" id="600" <?php for ($i=0;$i<count($boxes);$i++){if($boxes[$i]->box->Cod_Bo=="L3"){if($boxes[$i]->Id_Est=="3"){}elseif($boxes[$i]->Id_Est=="4"){echo "disabled checked";}elseif ($boxes[$i]->Id_Est=="5"){echo "disabled checked";}}}?>> L3 - 600</td>
                        </tr>
                        <tr>
                            <td style="background-color: #ffc107;color: black"><input type="checkbox" size="5" name="R2" id="400" <?php for ($i=0;$i<count($boxes);$i++){if($boxes[$i]->box->Cod_Bo=="R2"){if($boxes[$i]->Id_Est=="3"){}elseif($boxes[$i]->Id_Est=="4"){echo "disabled checked";}elseif ($boxes[$i]->Id_Est=="5"){echo "disabled checked";}}}?>> R2 - 400</td>
                            <td style="color: white;text-align: center">BAILE</td>
                            <td style="background-color: #ffc107;color: black"><input type="checkbox" size="5" name="T2" id="400" <?php for ($i=0;$i<count($boxes);$i++){if($boxes[$i]->box->Cod_Bo=="T2"){if($boxes[$i]->Id_Est=="3"){}elseif($boxes[$i]->Id_Est=="4"){echo "disabled checked";}elseif ($boxes[$i]->Id_Est=="5"){echo "disabled checked";}}}?>> T2 - 400</td>
                            <td style="background-color: #007bff;color: white"><input type="checkbox" size="5" name="A1" id="500" <?php for ($i=0;$i<count($boxes);$i++){if($boxes[$i]->box->Cod_Bo=="A1"){if($boxes[$i]->Id_Est=="3"){}elseif($boxes[$i]->Id_Est=="4"){echo "disabled checked";}elseif ($boxes[$i]->Id_Est=="5"){echo "disabled checked";}}}?>> A1 - 500</td>
                            <td style="background-color: #007bff;color: white"><input type="checkbox" size="5" name="A2" id="500" <?php for ($i=0;$i<count($boxes);$i++){if($boxes[$i]->box->Cod_Bo=="A2"){if($boxes[$i]->Id_Est=="3"){}elseif($boxes[$i]->Id_Est=="4"){echo "disabled checked";}elseif ($boxes[$i]->Id_Est=="5"){echo "disabled checked";}}}?>> A2 - 500</td>
                            <td style="background-color: #007bff;color: white"><input type="checkbox" size="5" name="A3" id="500" <?php for ($i=0;$i<count($boxes);$i++){if($boxes[$i]->box->Cod_Bo=="A3"){if($boxes[$i]->Id_Est=="3"){}elseif($boxes[$i]->Id_Est=="4"){echo "disabled checked";}elseif ($boxes[$i]->Id_Est=="5"){echo "disabled checked";}}}?>> A3 - 500</td>
                            <td style="background-color: #18d26e;color: black"><input type="checkbox" size="5" name="J2" id="600" <?php for ($i=0;$i<count($boxes);$i++){if($boxes[$i]->box->Cod_Bo=="J2"){if($boxes[$i]->Id_Est=="3"){}elseif($boxes[$i]->Id_Est=="4"){echo "disabled checked";}elseif ($boxes[$i]->Id_Est=="5"){echo "disabled checked";}}}?>> J2 - 600</td>
                            <td style="color: white;text-align: center">BAILE</td>
                            <td style="background-color: #18d26e;color: black"><input type="checkbox" size="5" name="L2" id="600" <?php for ($i=0;$i<count($boxes);$i++){if($boxes[$i]->box->Cod_Bo=="L2"){if($boxes[$i]->Id_Est=="3"){}elseif($boxes[$i]->Id_Est=="4"){echo "disabled checked";}elseif ($boxes[$i]->Id_Est=="5"){echo "disabled checked";}}}?>> L2 - 600</td>
                        </tr>
                        <tr>
                            <td style="background-color: #ffc107;color: black"><input type="checkbox" size="5" name="R1" id="400" <?php for ($i=0;$i<count($boxes);$i++){if($boxes[$i]->box->Cod_Bo=="R1"){if($boxes[$i]->Id_Est=="3"){}elseif($boxes[$i]->Id_Est=="4"){echo "disabled checked";}elseif ($boxes[$i]->Id_Est=="5"){echo "disabled checked";}}}?>> R1 - 400</td>
                            <td style="background-color: #ffc107;color: black"><input type="checkbox" size="5" name="S1" id="400" <?php for ($i=0;$i<count($boxes);$i++){if($boxes[$i]->box->Cod_Bo=="S1"){if($boxes[$i]->Id_Est=="3"){}elseif($boxes[$i]->Id_Est=="4"){echo "disabled checked";}elseif ($boxes[$i]->Id_Est=="5"){echo "disabled checked";}}}?>> S1 - 400</td>
                            <td style="background-color: black;text-align: center;color: white" colspan="5">ZONA LIBRE - PASADIZO</td>
                            <td style="background-color: #18d26e;color: black"><input type="checkbox" size="5" name="K1" id="600" <?php for ($i=0;$i<count($boxes);$i++){if($boxes[$i]->box->Cod_Bo=="K1"){if($boxes[$i]->Id_Est=="3"){}elseif($boxes[$i]->Id_Est=="4"){echo "disabled checked";}elseif ($boxes[$i]->Id_Est=="5"){echo "disabled checked";}}}?>> K1 - 600</td>
                            <td style="background-color: #18d26e;color: black"><input type="checkbox" size="5" name="L1" id="600" <?php for ($i=0;$i<count($boxes);$i++){if($boxes[$i]->box->Cod_Bo=="L1"){if($boxes[$i]->Id_Est=="3"){}elseif($boxes[$i]->Id_Est=="4"){echo "disabled checked";}elseif ($boxes[$i]->Id_Est=="5"){echo "disabled checked";}}}?>> L1 - 600</td>
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

            <center><a href="{{url('/recep/zone/'.$dni)}}"><i class="ion-ios-undo-outline" style="font-size: 350%"></i></a>
                <h6 style="color: white; font-family: 'Arial Black'">MENU PRINCIPAL</h6></center>

            <div class="facts-img"></div>
        </div>
    </section>
    <script>
        function handleSelect(elm)
        {
            window.location = elm.value;
        }
    </script>
@endsection
