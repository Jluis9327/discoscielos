@extends('layouts.app')

@section('content')

    <section id="call-to-action" class="wow fadeIn">
        <div class="container text-center">
            <br><br><br><br>
            <p>INICIAR SESION</p>
            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <center>
                        <div class="col-md-4">
                            <input id="email" type="email" class="form-control" placeholder="Correo Electronico"
                                   style="text-align: center; background-color: transparent; color: white" name="email"
                                   value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </center>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <center>
                        <div class="col-md-4">
                            <input id="password" type="password" class="form-control" placeholder="Contraseña"
                                   style="text-align: center; background-color: transparent; color: white"
                                   name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </center>
                </div>

                <div class="form-group">
                    <div class="">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                Recordarme
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="">
                        <a  href="{{ route('register') }}"> <font style="font-family: 'Arial Narrow';color:#CCEEFF">Registrarme</a>
                        <button type="submit" class="btn btn-outline-success">
                            INICIAR SESION
                        </button>
                        <br>
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            <font style="font-family: 'Arial Narrow'; ">¿Olvidaste Tu Contraseña?</font>
                        </a>
                    </div>
                </div>
            </form>
            <br><br>
            <br><br>
            <br><br>
        </div>
    </section><!-- #call-to-action -->

@endsection
