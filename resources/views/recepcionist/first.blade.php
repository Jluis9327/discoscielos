@extends('layouts.app')
@section('content')
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
                        @for ($i = 2; $i>=0 ; $i--)
                            <option value="{{url('/recep/zone/firstlevel/'.$dni.'/day/'.$presentation[$i]->Date)}}">{{ $presentation[$i]->Date}}</option>
                        @endfor
                    </select>
                </div>
                <table>
                    @foreach($disponible as $x)
                        <form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
                            {{csrf_field()}}
                    <tr>
                        <td><IMG src="{{asset('img/zgeneral.png')}}"></td>
                        <td style="color: white">Aforo: <input type="number" value="{{$x->gauging}}" size="2" disabled>
                            Quedan: <input type="number" value="{{$x->quantity}}" size="2" disabled><br></td>
                        <td style="color: white">Número de Reservas: <input type="text" id="cantidad" name="cantidad" size="2" maxlength="2"></td>
                    </tr>
                    @endforeach
                    </form>
                </table>
                <br>
                <button  class="btn btn-outline-success" data-toggle='modal' data-target='#pk-modal' onclick="click" value="RESERVAR">CONTINUAR</button>
            </center>
            <center>
                <a href="{{url('/recep/zone/'.$dni)}}"><i class="ion-ios-undo-outline" style="font-size: 350%"></i></a>
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
        // TRATE DE HACER AJAX PERO NO ME HA SALIDO
        $(document).ready(function(){
            $(document).on('click', '.pk-modal', function(){
                var cantidad=$('#cantidad').text();
                $('#pk-modal').modal('show');
                $('#total').val(cantidad);
            });
        });
    </script>
@endsection
