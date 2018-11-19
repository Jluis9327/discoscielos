@extends('layouts.app')
@section('content')
    <section id="about">
        <div class="container">

            <header class="section-header">
                <br><br>
                <h3 style="color: white">Bienvenido</h3>
                <p style="color: white; font-family: 'Arial Black'">Recepcionista - {{Auth::user()->name." ".Auth::user()->surname}}</p>
            </header>

            <div class="section-header">
                <br><br><h3 style="color: white">REGISTRAR CLIENTE</h3>
            </div>

            <form class="form-horizontal" method="POST" action="{{url('/recep/register')}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group{{ $errors->has('DNI') ? ' has-error' : '' }}">
                    <center><div class="col-md-4">
                            <input id="dni" type="text" class="form-control" name="DNIx" placeholder="DNI" style="text-align: center; background-color: transparent; color: white" value="{{ $id }}" maxlength="8" onkeypress="return validaNumericos(event)" required autofocus disabled>
                            <input type="hidden" name="DNI" value="{{ $id }}">
                            @if ($errors->has('DNI'))
                                <span class="help-block">
                                                    <strong>{{ $errors->first('DNI') }}</strong>
                                                </span>
                            @endif
                        </div></center>
                </div>
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <center><div class="col-md-4">
                            <input id="name" type="text" class="form-control" name="name" placeholder="Nombre" style="text-align: center; background-color: transparent; color: white" value="{{ old('name') }}" required >
                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div></center>
                </div>
                <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
                    <center><div class="col-md-4">
                            <input id="surname" type="text" class="form-control" name="surname" placeholder="Apellidos" style="text-align: center; background-color: transparent; color: white" value="{{ old('surname') }}" required >
                            @if ($errors->has('surname'))
                                <span class="help-block">
                                                    <strong>{{ $errors->first('surname') }}</strong>
                                                </span>
                            @endif
                        </div></center>
                </div>
                <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                    <center><div class="col-md-4">
                            <input id="phone" type="text" class="form-control" name="phone" placeholder="Teléfono" style="text-align: center; background-color: transparent; color: white" value="{{ old('phone') }}" maxlength="9" onkeypress="return validaNumericos(event)" required >
                            @if ($errors->has('phone'))
                                <span class="help-block">
                                                                <strong>{{ $errors->first('phone') }}</strong>
                                                            </span>
                            @endif
                        </div></center>
                </div>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <center><div class="col-md-4">
                            <input id="email" type="email" class="form-control" name="email" placeholder="Correo Electronico" style="text-align: center; background-color: transparent; color: white" value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div></center>
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <center><div class="col-md-4">
                            <input id="password" type="password" class="form-control" name="passwordx" placeholder="Contraseña" style="text-align: center; background-color: transparent; color: white" value="{{ $id }}" onkeypress="validaNumericos(event)" required disabled>
                            <input type="hidden" name="password" value="{{ $id }}">
                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div></center>
                </div>
                <div class="form-group">
                    <center><button type="submit" class="btn btn-outline-success">
                            Registrar
                        </button></center>
                </div>
            </form>

            <center><a href="{{url('/recep')}}"><i class="ion-ios-undo-outline" style="font-size: 350%"></i></a><h6 style="color: white; font-family: 'Arial Black'">MENU PRINCIPAL</h6></center>
        </div>
    </section>
    <script type="text/javascript">
        window.onload=function () {
            document.getElementById('id01').click();
        }
    </script>

@endsection