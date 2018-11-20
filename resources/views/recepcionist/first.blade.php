@extends('layouts.app')
@section('content')
    <section id="testimonials" class="section-bg wow ">
        <div class="container">
            <br>
            <header class="section-header">
                <h3 style="color: white">ZONA GENERAL - PRIMER NIVEL </h3>
            </header>
            <center>
                <div class="form-group">
                    <div class="col-sm-4">
                        <select class="form-control" id="xs" onchange="javascript:handleSelect(this)">
                            <option disabled>Escoge una fecha</option>
                            @for ($i = 2; $i>=0 ; $i--)
                                @if ($presentation[$i]->Date==$date)
                                    <option value="{{url('/recep/zone/firstlevel/'.$dni.'/day/'.$presentation[$i]->Date)}}" {{"selected"}}>{{ $presentation[$i]->Date}}</option>
                                @else
                                    <option value="{{url('/recep/zone/firstlevel/'.$dni.'/day/'.$presentation[$i]->Date)}}">{{ $presentation[$i]->Date}}</option>
                                @endif
                            @endfor
                        </select>
                    </div>
                </div>
                <form class="form-horizontal" method="POST" action="{{url('/recep/zone/firstlevel/reservation/')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <table>
                            <tr>
                                <td><img src="{{asset('img/zgeneral.png')}}"></td>
                            </tr>
                        <tr>
                                @foreach($disponible as $x)
                                <input type="hidden" name="id"  value="{{$x->Id_Pre}}">
                                <input type="hidden" name="dni"  value="{{$dni}}">
                                <input type="hidden" name="user" value="{{Auth::user()->id}}">
                                <td style="color: white; text-align: center">Aforo: <input type="number" style="background-color: transparent; border: transparent" value="{{$x->gauging}}" size="2" disabled>
                                    Quedan disponibles: <input type="number" style="background-color: transparent; border: transparent" name="quantity" id="quantity" value="{{$x->quantity}}" size="2" disabled></td>
                                @endforeach
                        </tr>
                        <tr>
                                <td style="color: white; text-align: center">Número de Reservas: <input type="text" id="cantidad" name="cantidad" size="2" maxlength="2" onkeypress="return validaNumericos(event)" onkeyup="fAgrega();"  required></td>
                            </tr>
                    </table>
                    <br>
                    TOTAL A PAGAR: <input type="text" style="background-color: transparent; border: transparent; text-align: center; color: white" id="total" size="3" name="total" value="0" disabled> NUEVOS SOLES<br>
                    <button  class="btn btn-outline-success" data-toggle='modal' data-target='#pk-modal' onclick="click" value="RESERVAR">CONTINUAR</button>
                </form>
                <br>
            </center>
            <center>
                <a href="{{url('/recep/zone/'.$dni)}}"><i class="ion-ios-undo-outline" style="font-size: 350%"></i></a>
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
@endsection