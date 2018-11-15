@extends('layouts.app')
@section('content')
    <section id="portfolio"  class="section-bg" >
        <div class="container">
            <br><br>
            <header class="section-header">
                <h3 class="section-title" style="color: white">LISTA DE BANNER</h3>
            </header>

            <div class="row portfolio-container">
                <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
                    <div class="portfolio-wrap">
                        <figure>

                            <img src="<?php for ($i = 0; $i < count($banner); $i++){
                            if ($banner[$i]->Type=='Principal' && $banner[$i]->Day=='Jueves'){
                            echo asset('/images/banner/'.$banner[$i]->Route);
                                }
                            }
                            ?>" class="img-fluid" alt="">
                            <a href="<?php for ($i = 0; $i < count($banner); $i++){
                                if ($banner[$i]->Type=='Principal' && $banner[$i]->Day=='Jueves'){
                                    echo asset('/images/banner/'.$banner[$i]->Route);
                                }
                            }
                            ?>" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                        </figure>
                        <div class="portfolio-info">
                            <h4><a href="#">JUEVES - BANNER PRINCIPAL</a></h4>
                            <form method="post" style="" class="" action="{{url('/admin/banner')}}" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <input type="file"  name="photo" style="color: transparent"/>
                                <input type="hidden" name="Id" value="1">
                                <input type="hidden" name="Tipo" value="Principal">
                                <input type="hidden" name="Day" value="Jueves">
                                <button type="submit" class="form-control">Subir Imagen </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="<?php for ($i = 0; $i < count($banner); $i++){
                                if ($banner[$i]->Type=='Principal' && $banner[$i]->Day=='Viernes'){
                                    echo asset('/images/banner/'.$banner[$i]->Route);
                                }
                            }
                            ?>" class="img-fluid" alt="">
                            <a href="<?php for ($i = 0; $i < count($banner); $i++){
                                if ($banner[$i]->Type=='Principal' && $banner[$i]->Day=='Viernes'){
                                    echo asset('/images/banner/'.$banner[$i]->Route);
                                }
                            }
                            ?>" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                        </figure>
                        <div class="portfolio-info">
                            <h4><a href="#">VIERNES - BANNER PRINCIPAL</a></h4>
                            <form method="post" class="form-inline" action="{{url('/admin/banner')}}" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <input type="file"  name="photo" style="color: transparent"/>
                                <input type="hidden" name="Id" value="3">
                                <input type="hidden" name="Tipo" value="Principal">
                                <input type="hidden" name="Day" value="Viernes">
                                <button type="submit" class="form-control">Subir Imagen </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="<?php for ($i = 0; $i < count($banner); $i++){
                                if ($banner[$i]->Type=='Principal' && $banner[$i]->Day=='Sabado'){
                                    echo asset('/images/banner/'.$banner[$i]->Route);
                                }
                            }
                            ?>" class="img-fluid" alt="">
                            <a href="<?php for ($i = 0; $i < count($banner); $i++){
                                if ($banner[$i]->Type=='Principal' && $banner[$i]->Day=='Sabado'){
                                    echo asset('/images/banner/'.$banner[$i]->Route);
                                }
                            }
                            ?>" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="#">SÁBADO - BANNER PRINCIPAL</a></h4>
                            <form method="post" class="form-inline" action="{{url('/admin/banner')}}" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <input type="file"  name="photo" style="color: transparent"/>
                                <input type="hidden" name="Id" value="5">
                                <input type="hidden" name="Tipo" value="Principal">
                                <input type="hidden" name="Day" value="Sabado">
                                <button type="submit" class="form-control">Subir Imagen </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="<?php for ($i = 0; $i < count($banner); $i++){
                                if ($banner[$i]->Type=='Secundario' && $banner[$i]->Day=='Jueves'){
                                    echo asset('/images/banner/'.$banner[$i]->Route);
                                }
                            }
                            ?>" class="img-fluid" alt="">
                            <a href="<?php for ($i = 0; $i < count($banner); $i++){
                                if ($banner[$i]->Type=='Secundario' && $banner[$i]->Day=='Jueves'){
                                    echo asset('/images/banner/'.$banner[$i]->Route);
                                }
                            }
                            ?>" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                        </figure>
                        <div class="portfolio-info">
                            <h4><a href="#">JUEVES - BANNER 2</a></h4>
                            <form method="post" class="form-inline" action="{{url('/admin/banner')}}" enctype="multipart/form-data">
                                {{csrf_field()}}

                                <input type="file"  name="photo" style="color: transparent"/>
                                <input type="hidden" name="Id" value="2">
                                <input type="hidden" name="Tipo" value="Secundario">
                                <input type="hidden" name="Day" value="Jueves">
                                <button type="submit" class="form-control">Subir Imagen </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="<?php for ($i = 0; $i < count($banner); $i++){
                                if ($banner[$i]->Type=='Secundario' && $banner[$i]->Day=='Viernes'){
                                    echo asset('/images/banner/'.$banner[$i]->Route);
                                }
                            }
                            ?>" class="img-fluid" alt="">
                            <a href="<?php for ($i = 0; $i < count($banner); $i++){
                                if ($banner[$i]->Type=='Secundario' && $banner[$i]->Day=='Viernes'){
                                    echo asset('/images/banner/'.$banner[$i]->Route);
                                }
                            }
                            ?>" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="#">VIERNES - BANNER 2</a></h4>
                            <form method="post" class="form-inline" action="{{url('/admin/banner')}}" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <input type="file"  name="photo" style="color: transparent"/>
                                <input type="hidden" name="Id" value="4">
                                <input type="hidden" name="Tipo" value="Secundario">
                                <input type="hidden" name="Day" value="Viernes">
                                <button type="submit" class="form-control">Subir Imagen </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="<?php for ($i = 0; $i < count($banner); $i++){
                                if ($banner[$i]->Type=='Secundario' && $banner[$i]->Day=='Sabado'){
                                    echo asset('/images/banner/'.$banner[$i]->Route);
                                }
                            }
                            ?>" class="img-fluid" alt="">
                            <a href="<?php for ($i = 0; $i < count($banner); $i++){
                                if ($banner[$i]->Type=='Secundario' && $banner[$i]->Day=='Sabado'){
                                    echo asset('/images/banner/'.$banner[$i]->Route);
                                }
                            }
                            ?>" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="#">SÁBADO - BANNER 2</a></h4>
                            <form method="post" class="form-inline" action="{{url('/admin/banner')}}    " enctype="multipart/form-data">
                                {{csrf_field()}}
                                <input type="file"  name="photo" style="color: transparent"/>
                                <input type="hidden" name="Id" value="6">
                                <input type="hidden" name="Tipo" value="Secundario">
                                <input type="hidden" name="Day" value="Sabado">
                                <button type="submit" class="form-control">Subir Imagen </button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <center><a href="{{url('/admin')}}"><i class="ion-ios-undo-outline" style="font-size: 350%"></i></a>
            <h6 style="color: white; font-family: 'Arial Black'">MENU PRINCIPAL</h6></center>

    </section>
@endsection