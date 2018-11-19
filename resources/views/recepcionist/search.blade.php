@extends('layouts.app')

@section('content')

    <section id="portfolio"  class="section-bg" >
        <div class="container">
            <header class="section-header">
                <br><br>
                <h3 style="color: white">Bienvenido</h3>
                <p style="color: white; font-family: 'Arial Black'">Recepcionista - {{Auth::user()->name." ".Auth::user()->surname}}</p>
            </header>
            <div class="section-header">
                <br><h5  style="color: white">BUSCAR CLIENTE</h5>
            </div>
            <form action="{{url('/recep/search/')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <center>
                    <table class="egt">

                        <tr>
                            <td>Ingresar DNI</td>
                            <td></td><td></td><td></td><td></td>
                            <td><input id="dni" type="text" class="form-control" name="dni" placeholder="DNI" style="text-align: center; background-color: transparent; color: white" autocomplete="off" maxlength="8" value="{{$dni}}" onkeypress="return validaNumericos(event)" ></td>
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
                            @for ($i = 0; $i < count($dato); $i++)
                                <form action="{{url('/recep/modify')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <td><input  name="iduser" type="hidden" value="{{$dato[$i]->id}}"></td>
                                    <td><input id="name<?php echo $dato[$i]->id;?>" type="text" class="form-control" name="name{{$dato[$i]->id}}" placeholder="Nombre" style="text-align: center; background-color: transparent; color: white" value="{{$dato[$i]->name}}"  disabled></td>
                                    <td><input id="ape{{$dato[$i]->id}}" type="text" class="form-control" name="ape{{$dato[$i]->id}}" placeholder="Apellido" style="text-align: center; background-color: transparent; color: white" value="{{$dato[$i]->surname}}"  disabled></td>
                                    <td><input id="dni{{$dato[$i]->id}}" type="text" class="form-control" name="dni{{$dato[$i]->id}}" placeholder="DNI" style="text-align: center; background-color: transparent; color: white" value="{{$dato[$i]->DNI}}"  disabled></td>
                                    <td><input id="phone{{$dato[$i]->id}}" type="text" class="form-control" name="phone{{$dato[$i]->id}}" placeholder="Telefono" style="text-align: center; background-color: transparent; color: white" value="{{$dato[$i]->phone}}"  disabled></td>
                                    <td><input id="email{{$dato[$i]->id}}" type="text" class="form-control" name="email{{$dato[$i]->id}}" placeholder="Correo" style="text-align: center; background-color: transparent; color: white" value="{{$dato[$i]->email}}" disabled></td>
                                    <td><input id="modificar{{$dato[$i]->id}}" type="button" class="btn btn-success" value="Modificar" onclick="deshabilitarcliente(<?php echo $dato[$i]->id;?>)" ></td>
                                    <td><button id="guardar{{$dato[$i]->id}}" type="submit" class="btn btn-success" name="guardar{{$dato[$i]->id}}"  >Guardar</button></td>
                                    <td><a href="{{url('/recep/zone/'.$dato[$i]->DNI)}}" ><button id="reservar{{$dato[$i]->DNI}}" type="button" class="btn btn-success" name="reservar{{$dato[$i]->DNI}}"  >Reservar</button></a></td>
                                </form>
                            @endfor
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
                            <a  href="{{url('/recep/register/'.$dni)}}"><input type="submit" value="Si" class="btn btn-success" ></a>
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
            <center><a href="{{url('/recep')}}"><i class="ion-ios-undo-outline" style="font-size: 350%"></i></a><h6 style="color: white; font-family: 'Arial Black'">MENU PRINCIPAL</h6></center>
        </div>
    </section>
    <script type="text/javascript">
        window.onload=function () {
            document.getElementById('id01').click();
        }
    </script>
@endsection
