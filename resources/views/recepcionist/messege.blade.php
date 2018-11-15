@extends('layouts.app')
@section('content')
    <section id="about">
        <div class="container">

            <header class="section-header">
                <br><br>
                <h3 style="color: white">Bienvenido</h3>
                <p style="color: white; font-family: 'Arial Black'">Recepcionista - {{Auth::user()->name." ".Auth::user()->surname}}</p>
            </header>

            <div class="row about-cols">

                <div class="col-md-4"></div>

                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="about-col">
                        <div class="img">
                            <img src="{{asset('img/boxrese.jpg')}}" alt="" class="img-fluid">
                            <div class="icon"><i class="ion-ios-locked-outline"></i></div>
                        </div>
                        <h2 class="title"><a href="{{url('/recep/search')}}">Reservar Box</a></h2><br>
                    </div>
                </div>

                <div class="col-md-4"></div>

            </div>

        </div>
    </section>

    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <p>DNI no ecnontrado. ¿Desea registrar un uevo cliente?</p>
                </div>
                <div class="modal-footer">
                    <a href="{{url('/recep/search')}}"><input class="btn btn-success" type='submit'
                                                              value='Aceptar'></a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
@endsection