@extends('layouts.app')
@section('content')
    <section id="contact" class="section-bg wow ">
        <div class="container">
            <br><br><br><br>
            <div class="section-header">
                <h3><font color="white">¡ USUARIO REGISTRADO CON EXITO !</font></h3>
            </div>
            <br><br>
            <div class="row contact-info">
                <div class="col-md-12">
                    <div class="contact-phone">
                        <center><a href="{{url('/admin')}}"><i class="ion-ios-undo-outline" style="font-size: 350%"></i></a><h6 style="color: white; font-family: 'Arial Black'">MENU PRINCIPAL</h6></center>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br><br>
    </section>
@endsection
