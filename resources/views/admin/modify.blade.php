@extends('layouts.app')
@section('content')
    <section id="portfolio"  class="section-bg">
        <div class="container">
            <br><br>
            <header class="section-header">
                <h3 class="section-title" style="color: white">LISTA DE USUARIOS</h3>
            </header>
            <p style="color: white">RECEPCIONISTAS</p>
            <table>
                <tr>
                    @for ($i = 0; $i < count($user); $i++)
                        <form method="post" style="" class="" action="{{url('/admin/modify')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <td><input  name="iduser" type="hidden" value="{{$user[$i]->id}}"></td>
                            <td><input id="name<?php echo $user[$i]->id;?>" type="text" class="form-control" name="name{{$user[$i]->id}}" placeholder="Nombre" style="text-align: center; background-color: transparent; color: white" value="{{$user[$i]->name}}"  disabled></td>
                            <td><input id="ape{{$user[$i]->id}}" type="text" class="form-control" name="ape{{$user[$i]->id}}" placeholder="Apellido" style="text-align: center; background-color: transparent; color: white" value="{{$user[$i]->surname}}"  disabled></td>
                            <td><input id="dni{{$user[$i]->id}}" type="text" class="form-control" name="dni{{$user[$i]->id}}" placeholder="DNI" style="text-align: center; background-color: transparent; color: white" value="{{$user[$i]->DNI}}"  disabled></td>
                            <td><input id="phone{{$user[$i]->id}}" type="text" class="form-control" name="phone{{$user[$i]->id}}" placeholder="Telefono" style="text-align: center; background-color: transparent; color: white" value="{{$user[$i]->phone}}"  disabled></td>
                            <td><input id="email{{$user[$i]->id}}" type="email" class="form-control" name="email{{$user[$i]->id}}" placeholder="Correo" style="text-align: center; background-color: transparent; color: white" value="{{$user[$i]->email}}" disabled></td>
                            <td><input id="password{{$user[$i]->id}}" type="password" class="form-control" name="password{{$user[$i]->id}}" placeholder="Contraseña" style="text-align: center; background-color: transparent; color: white"  disabled></td>
                            <td><input id="estado{{$user[$i]->id}}" type="text" class="form-control" name="estado{{$user[$i]->id}}" placeholder="Estado" style="text-align: center; background-color: transparent; color: white" value="{{$user[$i]->estados->Name}}"  disabled></td>
                            <td><input id="modificar{{$user[$i]->id}}" type="button" class="btn btn-success" value="Modificar" onclick="deshabilitar(<?php echo $user[$i]->id;?>)" ></td>
                            <td><button id="guardar{{$user[$i]->id}}" type="submit" class="btn btn-success" name="guardar{{$user[$i]->id}}"  >Guardar</button></td>
                        </form>
                </tr>
                    @endfor
            </table>
        <center><a href="{{url('/admin')}}"><i class="ion-ios-undo-outline" style="font-size: 350%"></i></a>
            <h6 style="color: white; font-family: 'Arial Black'">MENU PRINCIPAL</h6></center>
        </div>
    </section>
@endsection
