@extends('layouts.app')
@section('content')
    <section id="testimonials" class="section-bg wow ">
        <div class="container">
            <br><br><br>
            <header class="section-header">
                <h3 style="color: white">UBICACIONES - SEGUNDO NIVEL</h3>
            </header>
            <center>
                <div class="form-group">
                    <label for="días" class="col-form-label" aria-disabled="true">Seleccione el día</label><br>
                    <select id="xs" onchange="javascript:handleSelect(this)">
                        <option disabled>Escoge una fecha</option>
                        @for ($i = 2; $i>=0 ; $i--)
                            @if ($presentation[$i]->Date==$date)
                                <option value="{{url('/recep/zone/secondlevel/'.$dni.'/day/'.$presentation[$i]->Date)}}" {{"selected"}}>{{ $presentation[$i]->Date}}</option>
                            @else
                                <option value="{{url('/recep/zone/secondlevel/'.$dni.'/day/'.$presentation[$i]->Date)}}">{{ $presentation[$i]->Date}}</option>
                            @endif
                        @endfor
                    </select>
                </div>
                <form id="formulario" action="{{url('/recep/zone/secondlevel/'.$dni.'/day/'.$date)}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <table border="2" id="tbt">
                        <?php
                        ?>
                        <tr>
                            <td style="background-color: #ffc107;color: black" ><input type="checkbox" size="5" name="R4" id="R4" value="400"  onclick="totales('#R4')" <?php for ($i=0;$i<count($boxes);$i++){if($boxes[$i]->box->Cod_Bo=="R4"){if($boxes[$i]->Id_Est=="3"){}elseif($boxes[$i]->Id_Est=="4"){echo "disabled checked";}elseif ($boxes[$i]->Id_Est=="5"){echo "disabled checked";}}}?>> R4 - 400</td>
                            <td style="background-color: #ffc107;color: black" ><input type="checkbox" size="5" name="S4" id="S4" value="400" onclick="totales('#S4')" <?php for ($i=0;$i<count($boxes);$i++){if($boxes[$i]->box->Cod_Bo=="S4"){if($boxes[$i]->Id_Est=="3"){}elseif($boxes[$i]->Id_Est=="4"){echo "disabled checked";}elseif ($boxes[$i]->Id_Est=="5"){echo "disabled checked";}}}?>> S4 - 400</td>
                            <td style="background-color: #ffc107;color: black" ><input type="checkbox" size="5" name="T4" id="T4" value="400" onclick="totales('#T4')" <?php for ($i=0;$i<count($boxes);$i++){if($boxes[$i]->box->Cod_Bo=="T4"){if($boxes[$i]->Id_Est=="3"){}elseif($boxes[$i]->Id_Est=="4"){echo "disabled checked";}elseif ($boxes[$i]->Id_Est=="5"){echo "disabled checked";}}}?>> T4 - 400</td>
                            <td style="background-color: white;color: black;text-align: center;font-family: 'Arial Black'" colspan="3">ESCENARIO</td>
                            <td style="background-color: #6c757d;color: white;text-align: center">Escalera</td>
                            <td style="background-color: #18d26e;color: black"><input type="checkbox" size="5" name="K4" id="K4"  value="600" onclick="totales('#K4')" <?php for ($i=0;$i<count($boxes);$i++){if($boxes[$i]->box->Cod_Bo=="K4"){if($boxes[$i]->Id_Est=="3"){}elseif($boxes[$i]->Id_Est=="4"){echo "disabled checked";}elseif ($boxes[$i]->Id_Est=="5"){echo "disabled checked";}}}?>> K4 - 600</td>
                            <td style="background-color: #18d26e;color: black"><input type="checkbox" size="5" name="L4" id="L4" value="600" onclick="totales('#L4')" <?php for ($i=0;$i<count($boxes);$i++){if($boxes[$i]->box->Cod_Bo=="L4"){if($boxes[$i]->Id_Est=="3"){}elseif($boxes[$i]->Id_Est=="4"){echo "disabled checked";}elseif ($boxes[$i]->Id_Est=="5"){echo "disabled checked";}}}?>> L4 - 600</td>
                        </tr>
                        <tr>
                            <td style="background-color: #ffc107;color: black"><input type="checkbox" size="5" name="R3" id="R3" value="400" onclick="totales('#R3')" <?php for ($i=0;$i<count($boxes);$i++){if($boxes[$i]->box->Cod_Bo=="R3"){if($boxes[$i]->Id_Est=="3"){}elseif($boxes[$i]->Id_Est=="4"){echo "disabled checked";}elseif ($boxes[$i]->Id_Est=="5"){echo "disabled checked";}}}?>> R3 - 400</td>
                            <td style="color: white;text-align: center">ZONA DE</td>
                            <td style="background-color: #ffc107;color: black"><input type="checkbox" size="5" name="T3" id="T3" value="400" onclick="totales('#T3')"<?php for ($i=0;$i<count($boxes);$i++){if($boxes[$i]->box->Cod_Bo=="T3"){if($boxes[$i]->Id_Est=="3"){}elseif($boxes[$i]->Id_Est=="4"){echo "disabled checked";}elseif ($boxes[$i]->Id_Est=="5"){echo "disabled checked";}}}?>> T3 - 400</td>
                            <td colspan="3">&nbsp;</td>
                            <td style="background-color: #18d26e;color: black"><input type="checkbox" size="5" name="J3" id="J3"  value="600" onclick="totales('#J3')" <?php for ($i=0;$i<count($boxes);$i++){if($boxes[$i]->box->Cod_Bo=="J3"){if($boxes[$i]->Id_Est=="3"){}elseif($boxes[$i]->Id_Est=="4"){echo "disabled checked";}elseif ($boxes[$i]->Id_Est=="5"){echo "disabled checked";}}}?>> J3 - 600</td>
                            <td style="color: white;text-align: center">ZONA DE</td>
                            <td style="background-color: #18d26e;color: black"><input type="checkbox" size="5" name="L3" id="L3" value="600" onclick="totales('#L3')" <?php for ($i=0;$i<count($boxes);$i++){if($boxes[$i]->box->Cod_Bo=="L3"){if($boxes[$i]->Id_Est=="3"){}elseif($boxes[$i]->Id_Est=="4"){echo "disabled checked";}elseif ($boxes[$i]->Id_Est=="5"){echo "disabled checked";}}}?>> L3 - 600</td>
                        </tr>
                        <tr>
                            <td style="background-color: #ffc107;color: black"><input type="checkbox" size="5" name="R2" id="R2" value="400" onclick="totales('#R2')" <?php for ($i=0;$i<count($boxes);$i++){if($boxes[$i]->box->Cod_Bo=="R2"){if($boxes[$i]->Id_Est=="3"){}elseif($boxes[$i]->Id_Est=="4"){echo "disabled checked";}elseif ($boxes[$i]->Id_Est=="5"){echo "disabled checked";}}}?>> R2 - 400</td>
                            <td style="color: white;text-align: center">BAILE</td>
                            <td style="background-color: #ffc107;color: black"><input type="checkbox" size="5" name="T2" id="T2" value="400" onclick="totales('#T2')" <?php for ($i=0;$i<count($boxes);$i++){if($boxes[$i]->box->Cod_Bo=="T2"){if($boxes[$i]->Id_Est=="3"){}elseif($boxes[$i]->Id_Est=="4"){echo "disabled checked";}elseif ($boxes[$i]->Id_Est=="5"){echo "disabled checked";}}}?>> T2 - 400</td>
                            <td style="background-color: #007bff;color: white"><input type="checkbox" size="5" name="A1" id="A1" value="500" onclick="totales('#A1')" <?php for ($i=0;$i<count($boxes);$i++){if($boxes[$i]->box->Cod_Bo=="A1"){if($boxes[$i]->Id_Est=="3"){}elseif($boxes[$i]->Id_Est=="4"){echo "disabled checked";}elseif ($boxes[$i]->Id_Est=="5"){echo "disabled checked";}}}?>> A1 - 500</td>
                            <td style="background-color: #007bff;color: white"><input type="checkbox" size="5" name="A2" id="A2" value="500" onclick="totales('#A2')" <?php for ($i=0;$i<count($boxes);$i++){if($boxes[$i]->box->Cod_Bo=="A2"){if($boxes[$i]->Id_Est=="3"){}elseif($boxes[$i]->Id_Est=="4"){echo "disabled checked";}elseif ($boxes[$i]->Id_Est=="5"){echo "disabled checked";}}}?>> A2 - 500</td>
                            <td style="background-color: #007bff;color: white"><input type="checkbox" size="5" name="A3" id="A3" value="500" onclick="totales('#A3')"<?php for ($i=0;$i<count($boxes);$i++){if($boxes[$i]->box->Cod_Bo=="A3"){if($boxes[$i]->Id_Est=="3"){}elseif($boxes[$i]->Id_Est=="4"){echo "disabled checked";}elseif ($boxes[$i]->Id_Est=="5"){echo "disabled checked";}}}?>> A3 - 500</td>
                            <td style="background-color: #18d26e;color: black"><input type="checkbox" size="5" name="J2" id="J2" value="600" onclick="totales('#J2')"<?php for ($i=0;$i<count($boxes);$i++){if($boxes[$i]->box->Cod_Bo=="J2"){if($boxes[$i]->Id_Est=="3"){}elseif($boxes[$i]->Id_Est=="4"){echo "disabled checked";}elseif ($boxes[$i]->Id_Est=="5"){echo "disabled checked";}}}?>> J2 - 600</td>
                            <td style="color: white;text-align: center">BAILE</td>
                            <td style="background-color: #18d26e;color: black"><input type="checkbox" size="5" name="L2" id="L2" value="600" onclick="totales('#L2')"<?php for ($i=0;$i<count($boxes);$i++){if($boxes[$i]->box->Cod_Bo=="L2"){if($boxes[$i]->Id_Est=="3"){}elseif($boxes[$i]->Id_Est=="4"){echo "disabled checked";}elseif ($boxes[$i]->Id_Est=="5"){echo "disabled checked";}}}?>> L2 - 600</td>
                        </tr>
                        <tr>
                            <td style="background-color: #ffc107;color: black"><input type="checkbox" size="5" name="R1" id="R1" value="400" onclick="totales('#R1')"<?php for ($i=0;$i<count($boxes);$i++){if($boxes[$i]->box->Cod_Bo=="R1"){if($boxes[$i]->Id_Est=="3"){}elseif($boxes[$i]->Id_Est=="4"){echo "disabled checked";}elseif ($boxes[$i]->Id_Est=="5"){echo "disabled checked";}}}?>> R1 - 400</td>
                            <td style="background-color: #ffc107;color: black"><input type="checkbox" size="5" name="S1" id="S1" value="400" onclick="totales('#S1')"<?php for ($i=0;$i<count($boxes);$i++){if($boxes[$i]->box->Cod_Bo=="S1"){if($boxes[$i]->Id_Est=="3"){}elseif($boxes[$i]->Id_Est=="4"){echo "disabled checked";}elseif ($boxes[$i]->Id_Est=="5"){echo "disabled checked";}}}?>> S1 - 400</td>
                            <td style="background-color: black;text-align: center;color: white" colspan="5">ZONA LIBRE - PASADIZO</td>
                            <td style="background-color: #18d26e;color: black"><input type="checkbox" size="5" name="K1" id="K1" value="600" onclick="totales('#K1')"<?php for ($i=0;$i<count($boxes);$i++){if($boxes[$i]->box->Cod_Bo=="K1"){if($boxes[$i]->Id_Est=="3"){}elseif($boxes[$i]->Id_Est=="4"){echo "disabled checked";}elseif ($boxes[$i]->Id_Est=="5"){echo "disabled checked";}}}?>> K1 - 600</td>
                            <td style="background-color: #18d26e;color: black"><input type="checkbox" value="600" size="5" name="L1" id="L1" onclick="totales('#L1')" <?php for ($i=0;$i<count($boxes);$i++){if($boxes[$i]->box->Cod_Bo=="L1"){if($boxes[$i]->Id_Est=="3"){}elseif($boxes[$i]->Id_Est=="4"){echo "disabled checked";}elseif ($boxes[$i]->Id_Est=="5"){echo "disabled checked";}}}?>> L1 - 600</td>
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
                    <br>
                    <button class='btn btn-primary' type="submit">CONTINUAR</button>
                    Total a pagar:<input type="text" id="total0" name="total" value="0">
                </form>


            </center>


            <center><a href="{{url('/recep/zone/'.$dni)}}"><i class="ion-ios-undo-outline" style="font-size: 350%"></i></a>
                <h6 style="color: white; font-family: 'Arial Black'">ANTERIOR</h6></center>

            <div class="facts-img"></div>
        </div>
        <p id="demo"></p>
    </section>
    <script type="text/javascript">
        function handleSelect(elm)
        {
            window.location = elm.value;
        }
        function totales(x) {
            if($(x).prop('checked')==true && $(x).prop('disabled')==false)
            {
                y=parseInt($("#total0").val())+parseInt($(x).val());
                $("#total0").val(y);
            }else{
                y=parseInt($("#total0").val())-parseInt($(x).val());
                $("#total0").val(y);
            }

        }

    </script>
@endsection
