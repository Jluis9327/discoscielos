@extends('layouts.app')
@section('content')
    <section id="testimonials" class="section-bg wow ">
        <div class="container">
            <br><br><br>
            <header class="section-header">
                <h3 style="color: white">UBICACIONES - SEGUNDO NIVEL</h3>
            </header>
            <center>
                <form action="presencial_final.html" method="post">
                    <table border="2">
                        <tr>
                            <td style="background-color: #ffc107;color: black"><input type="checkbox" size="5"> R4 - 400</td>
                            <td style="background-color: #ffc107;color: black"><input type="checkbox" size="5"> S4 - 400</td>
                            <td style="background-color: #ffc107;color: black"><input type="checkbox" size="5"> T4 - 400</td>
                            <td style="background-color: white;color: black;text-align: center;font-family: 'Arial Black'" colspan="3">ESCENARIO</td>
                            <td style="background-color: #6c757d;color: white;text-align: center">Escalera</td>
                            <td style="background-color: #18d26e;color: black"><input type="checkbox" size="5"> K4 - 600</td>
                            <td style="background-color: #18d26e;color: black"><input type="checkbox" size="5"> L4 - 600</td>
                        </tr>
                        <tr>
                            <td style="background-color: #ffc107;color: black"><input type="checkbox" size="5"> R3 - 400</td>
                            <td style="color: white;text-align: center">ZONA DE</td>
                            <td style="background-color: #ffc107;color: black"><input type="checkbox" size="5"> T3 - 400</td>
                            <td colspan="3">&nbsp;</td>
                            <td style="background-color: #18d26e;color: black"><input type="checkbox" size="5"> J3 - 600</td>
                            <td style="color: white;text-align: center">ZONA DE</td>
                            <td style="background-color: #18d26e;color: black"><input type="checkbox" size="5"> L3 - 600</td>
                        </tr>
                        <tr>
                            <td style="background-color: #ffc107;color: black"><input type="checkbox" size="5"> R2 - 400</td>
                            <td style="color: white;text-align: center">BAILE</td>
                            <td style="background-color: #ffc107;color: black"><input type="checkbox" size="5"> T2 - 400</td>
                            <td style="background-color: #007bff;color: white"><input type="checkbox" size="5"> A1 - 500</td>
                            <td style="background-color: #007bff;color: white"><input type="checkbox" size="5"> A2 - 500</td>
                            <td style="background-color: #007bff;color: white"><input type="checkbox" size="5"> A3 - 500</td>
                            <td style="background-color: #18d26e;color: black"><input type="checkbox" size="5"> J2 - 600</td>
                            <td style="color: white;text-align: center">BAILE</td>
                            <td style="background-color: #18d26e;color: black"><input type="checkbox" size="5"> L2 - 600</td>
                        </tr>
                        <tr>
                            <td style="background-color: #ffc107;color: black"><input type="checkbox" size="5"> R1 - 400</td>
                            <td style="background-color: #ffc107;color: black"><input type="checkbox" size="5"> S1 - 200</td>
                            <td style="background-color: black;text-align: center;color: white" colspan="5">ZONA LIBRE - PASADIZO</td>
                            <td style="background-color: #18d26e;color: black"><input type="checkbox" size="5"> K1 - 600</td>
                            <td style="background-color: #18d26e;color: black"><input type="checkbox" size="5"> L1 - 600</td>
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
            </center>
            <br><center><input type="submit" class="btn btn-outline-success" value="RESERVAR"></center><br>
            </form>
            <center><a href="{{url('/client/zone')}}"><i class="ion-ios-undo-outline" style="font-size: 350%"></i></a>
                <h6 style="color: white; font-family: 'Arial Black'">MENU PRINCIPAL</h6></center>

            <div class="facts-img"></div>
        </div>
    </section>
@endsection
