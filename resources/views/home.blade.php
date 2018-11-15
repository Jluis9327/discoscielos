@extends('layouts.app')

@section('content')
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="panel-body">
        <ul>
            @if(Auth::user()->Id_Rol==1)
            <li><a href="#"> Administrador</a></li>
            @endif
            @if (Auth::user()->Id_Rol==3)
                <li><a href="#"> Cliente</a></li>
            @endif
            @if(Auth::user()->Id_Rol==2)
                <li><a href="#"> Recepcionista</a></li>
            @endif
        </ul>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
