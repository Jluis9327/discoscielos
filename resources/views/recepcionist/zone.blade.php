@extends('layouts.app')
@section('content')
    <section id="testimonials" class="section-bg wow ">
        <div class="container">
            <br><br>
            <header class="section-header">
                <h3 style="color: white;">POR  FAVOR, ELIJA UN NIVEL</h3>
            </header>
            <center>
                <a href="{{url('/recep/zone/firstlevel/'.$dni.'/day/'.$date)}}"><img src="{{asset('img/primernivel.jpg')}}"></a>
                <a href="{{url('/recep/zone/secondlevel/'.$dni.'/day/'.$date)}}"><img src="{{asset('/img/segundonivel.jpg')}}"></a>
            </center>
            <br>
            <center><a href="{{url('/recep/search')}}"><i class="ion-ios-undo-outline" style="font-size: 350%"></i></a><h6 style="color: white; font-family: 'Arial Black'">MENU PRINCIPAL</h6></center>
        </div>
    </section>
@endsection
