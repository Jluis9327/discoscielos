@extends('layouts.app')
@section('content')
    <section id="testimonials" class="section-bg wow ">
        <div class="container">
            <br><br>
            <header class="section-header">
                <h3 style="color: white;">POR  FAVOR, ELIJA UNA UN NIVEL</h3>
            </header>
            <center>
                <a href="{{url('/client/firstlevel')}}"><img src="../img/primernivel.jpg"></a>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <a href="{{url('/client/secondlevel')}}"><img src="../img/segundonivel.jpg"></a>
            </center>
            <br>
            <center><a href="{{url('/client')}}"><i class="ion-ios-undo-outline" style="font-size: 350%"></i></a><h6 style="color: white; font-family: 'Arial Black'">MENU PRINCIPAL</h6></center>
        </div>
    </section>
@endsection
