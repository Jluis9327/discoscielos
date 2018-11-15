@extends('layouts.app')
@section('content')
    <section id="testimonials" class="section-bg wow ">
        <div class="container">
            <br><br>
            <header class="section-header">
                <h3 style="color: white">ZONA GENERAL - PRIMER NIVEL</h3>
            </header>
            <center>
                <form class="form-horizontal" method="POST" action="presencial_final.html">
                    {{csrf_field()}}
                    <table>
                        <tr>
                            <td><IMG src="../img/zgeneral.png"></td>
                            <td>&nbsp;&nbsp;</td>
                            <td style="color: white">
                                Aforo: 60 personas <br>
                                Quedan: <input value="#" size="2">
                                <br>
                                Numero de Reservas: <input type="number" name="quantity" min="1" max="6">
                            </td>
                        </tr>
                    </table>
            </center>
            <br><br><center><input type="submit" class="btn btn-outline-success" value="RESERVAR"></center><br>
            </form>
            <center><a href="{{url('/client/zone')}}"><i class="ion-ios-undo-outline" style="font-size: 350%"></i></a>
                <h6 style="color: white; font-family: 'Arial Black'">MENU PRINCIPAL</h6></center>

            <div class="facts-img"></div>
        </div>
    </section>
@endsection
