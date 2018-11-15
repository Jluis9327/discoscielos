<?php $__env->startSection('content'); ?>
    <section id="intro">
        <div class="intro-container">
            <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators"></ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="carousel-background"><img src="<?php for ($i = 0; $i < count($banner); $i++){
                                if ($banner[$i]->Type=='Principal' && $banner[$i]->Day=='Jueves'){
                                    echo asset('/images/banner/'.$banner[$i]->Route);
                                }
                            }
                            ?>" alt="">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-background"><img src="<?php for ($i = 0; $i < count($banner); $i++){
                                if ($banner[$i]->Type=='Principal' && $banner[$i]->Day=='Viernes'){
                                    echo asset('/images/banner/'.$banner[$i]->Route);
                                }
                            }
                            ?>" alt="">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-background"><img src="<?php for ($i = 0; $i < count($banner); $i++){
                                if ($banner[$i]->Type=='Principal' && $banner[$i]->Day=='Sabado'){
                                    echo asset('/images/banner/'.$banner[$i]->Route);
                                }
                            }
                            ?>" alt="">
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section><!-- #intro -->
    <main id="main">
        <!--==========================
          DATOS IMPORTANTES
        ============================-->
        <section id="featured-services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 box">
                        <i class="ion-ios-bell-outline"></i>
                        <h4 class="title"><a href="">NOTIFICACION INMEDIATA</a></h4>
                        <p class="description">Seguridad y Confianza, solo envianos tu deposito o transferencia y te
                            activaremos inmediatamente tus reservas.</p>
                    </div>
                    <div class="col-lg-4 box box-bg">
                        <i class="ion-ios-stopwatch-outline"></i>
                        <h4 class="title"><a href="">RESERVA CON COMODIDAD</a></h4>
                        <p class="description">Desde tu computadora, laptop, tablet o smartphone, usando cualquier
                            navegador, y obten tragos de cortesia para ti y tus amigos.</p>
                    </div>
                    <div class="col-lg-4 box">
                        <i class="ion-ios-videocam-outline"></i>
                        <h4 class="title"><a href="">TRANSMISION EN VIVO</a></h4>
                        <p class="description">Disfruta todas las presentaciones mediante una transmision en vivo desde
                            facebook, dale like y comparte.</p>
                    </div>
                </div>
            </div>
        </section><!-- #featured-services -->

        <!--==========================
          Programacion Seccion
        ============================-->
        <section id="about">
            <div class="container">

                <header class="section-header">
                    <h3>DISFRUTA EL MEJOR FIN DE SEMANA</h3>
                </header>

                <div class="row about-cols">

                    <div class="col-md-4 wow fadeInUp">
                        <div class="about-col">
                            <div class="img">
                                <img src="<?php for ($i = 0; $i < count($banner); $i++){
                                    if ($banner[$i]->Type=='Secundario' && $banner[$i]->Day=='Jueves'){
                                        echo asset('/images/banner/'.$banner[$i]->Route);
                                    }
                                }
                                ?>" alt="" class="img-fluid">
                            </div>
                            <h2 class="title"><a href="#">JUEVES 13 - YO SOY MALUMA</a></h2>
                            <p>
                                ZONA GENERAL: S/15.00<br>
                                BOX 2 + COMBO DOUBLE BLACK: S/.200 <br>
                                BOX 4 + COMBO BLACK LABEL: S/.200 <br>
                                BOX 6 + COMBO GOLD LABEL: S/.300
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="about-col">
                            <div class="img">
                                <img src="<?php for ($i = 0; $i < count($banner); $i++){
                                    if ($banner[$i]->Type=='Secundario' && $banner[$i]->Day=='Viernes'){
                                        echo asset('/images/banner/'.$banner[$i]->Route);
                                    }
                                }
                                ?>" alt="" class="img-fluid">
                            </div>
                            <h2 class="title"><a href="#">VIERNES 14 - ROCK CON LIBIDO</a></h2>
                            <p>
                                ZONA GENERAL: S/20.00<br>
                                BOX 2 + COMBO DOUBLE BLACK: S/.300 <br>
                                BOX 4 + COMBO BLACK LABEL: S/.300 <br>
                                BOX 6 + COMBO GOLD LABEL: S/.500
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="about-col">
                            <div class="img">
                                <img src="<?php for ($i = 0; $i < count($banner); $i++){
                                    if ($banner[$i]->Type=='Secundario' && $banner[$i]->Day=='Sabado'){
                                        echo asset('/images/banner/'.$banner[$i]->Route);
                                    }
                                }
                                ?>" alt="" class="img-fluid">
                            </div>
                            <h2 class="title"><a href="#">SABADO 15 - JUERGA Y BARETO</a></h2>
                            <p>
                                ZONA GENERAL: S/25.00<br>
                                BOX 2 + COMBO DOUBLE BLACK: S/.400 <br>
                                BOX 4 + COMBO BLACK LABEL: S/.400 <br>
                                BOX 6 + COMBO GOLD LABEL: S/.600
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- #about -->

        <!--==========================
          Promociones Seccion
        ============================-->
        <section id="services">
            <div class="container">

                <header class="section-header wow fadeInUp">
                    <h3>Promociones</h3>
                </header>

                <div class="row">

                    <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                        <h4 class="title"><a href="">Combo Red Label</a></h4>
                        <img src="<?php echo e(asset('img/promociones/comboroja.png')); ?>" width="333px" height="188px">
                    </div>
                    <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                        <h4 class="title"><a href="">Combo Black Label</a></h4>
                        <img src="<?php echo e(asset('img/promociones/combonegra.png')); ?>" width="333px" height="188px">
                    </div>
                    <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                        <h4 class="title"><a href="">Combo Gold Label</a></h4>
                        <img src="<?php echo e(asset('img/promociones/goldlabel.png')); ?>" width="333px" height="188px">
                    </div>
                    <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <h4 class="title"><a href="">Combo Vodka Absolut</a></h4>
                        <img src="<?php echo e(asset('img/promociones/vodka.png')); ?>" width="333px" height="188px">
                    </div>
                    <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <h4 class="title"><a href="">Combo Pisco Queirolo</a></h4>
                        <img src="<?php echo e(asset('img/promociones/piscoqueirolo.png')); ?>" width="333px" height="188px">
                    </div>
                    <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <h4 class="title"><a href="">Coronazo x6 unidades</a></h4>
                        <img src="<?php echo e(asset('img/promociones/baldazo.png')); ?>" width="333px" height="188px">
                    </div>
                </div>
            </div>
        </section><!-- #services -->

        <!--==========================
          Galeria Seccion all=todos / app=primernivel / card=segundonivel / web=escenario
        ============================-->
        <section id="portfolio" class="section-bg">
            <div class="container">

                <header class="section-header">
                    <h3 class="section-title"><font color="white">NUESTRA GALERIA</font></h3>
                </header>

                <div class="row">
                    <div class="col-lg-12">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">Todos</li>
                            <li data-filter=".filter-app">1° Nivel</li>
                            <li data-filter=".filter-card">2° Nivel</li>
                            <li data-filter=".filter-web">Escenario</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="<?php echo e(asset('img/portfolio/app1.jpg')); ?>" class="img-fluid" alt="">
                                <a href="<?php echo e(asset('img/portfolio/app1.jpg')); ?>" data-lightbox="portfolio"
                                   data-title="App 1" class="link-preview" title="Preview"><i
                                            class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                            class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#">App 1</a></h4>
                                <p>App</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="<?php echo e(asset('img/portfolio/web3.jpg')); ?>" class="img-fluid" alt="">
                                <a href="<?php echo e(asset('img/portfolio/web3.jpg')); ?>" class="link-preview"
                                   data-lightbox="portfolio" data-title="Web 3" title="Preview"><i
                                            class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                            class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#">Web 3</a></h4>
                                <p>Web</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="<?php echo e(asset('img/portfolio/app2.jpg')); ?>" class="img-fluid" alt="">
                                <a href="<?php echo e(asset('img/portfolio/app2.jpg')); ?>" class="link-preview"
                                   data-lightbox="portfolio" data-title="App 2" title="Preview"><i
                                            class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                            class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#">App 2</a></h4>
                                <p>App</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="<?php echo e(asset('img/portfolio/card2.jpg')); ?>" class="img-fluid" alt="">
                                <a href="<?php echo e(asset('img/portfolio/card2.jpg')); ?>" class="link-preview"
                                   data-lightbox="portfolio" data-title="Card 2" title="Preview"><i
                                            class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                            class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#">Card 2</a></h4>
                                <p>Card</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="<?php echo e(asset('img/portfolio/web2.jpg')); ?>" class="img-fluid" alt="">
                                <a href="<?php echo e(asset('img/portfolio/web2.jpg')); ?>" class="link-preview"
                                   data-lightbox="portfolio" data-title="Web 2" title="Preview"><i
                                            class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                            class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#">Web 2</a></h4>
                                <p>Web</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="<?php echo e(asset('img/portfolio/app3.jpg')); ?>" class="img-fluid" alt="">
                                <a href="<?php echo e(asset('img/portfolio/app3.jpg')); ?>" class="link-preview"
                                   data-lightbox="portfolio" data-title="App 3" title="Preview"><i
                                            class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                            class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#">App 3</a></h4>
                                <p>App</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="<?php echo e(asset('img/portfolio/card1.jpg')); ?>" class="img-fluid" alt="">
                                <a href="<?php echo e(asset('img/portfolio/card1.jpg')); ?>" class="link-preview"
                                   data-lightbox="portfolio" data-title="Card 1" title="Preview"><i
                                            class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                            class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#">Card 1</a></h4>
                                <p>Card</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="<?php echo e(asset('img/portfolio/card3.jpg')); ?>" class="img-fluid" alt="">
                                <a href="<?php echo e(asset('img/portfolio/card3.jpg')); ?>" class="link-preview"
                                   data-lightbox="portfolio" data-title="Card 3" title="Preview"><i
                                            class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                            class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#">Card 3</a></h4>
                                <p>Card</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="<?php echo e(asset('img/portfolio/web1.jpg')); ?>" class="img-fluid" alt="">
                                <a href="<?php echo e(asset('img/portfolio/web1.jpg')); ?>" class="link-preview"
                                   data-lightbox="portfolio" data-title="Web 1" title="Preview"><i
                                            class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                            class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#">Web 1</a></h4>
                                <p>Web</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- #portfolio -->

        <!--==========================
          Zona y Boxes
        ============================-->
        <section id="team">
            <div class="container">
                <div class="section-header wow fadeInUp">
                    <h3>Zonas & Boxes</h3>
                    <p>El mejor ambiente para diversion solo en Discoteca Cielos</p>
                </div>

                <div class="row">

                    <div class="col-lg-3 col-md-6 wow fadeInUp">
                        <div class="member">
                            <img src="<?php echo e(asset('img/team-1.jpg')); ?>" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Walter White</h4>
                                    <span>Chief Executive Officer</span>
                                    <div class="social">
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                        <a href=""><i class="fa fa-google-plus"></i></a>
                                        <a href=""><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="member">
                            <img src="<?php echo e(asset('img/team-2.jpg')); ?>" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Sarah Jhonson</h4>
                                    <span>Product Manager</span>
                                    <div class="social">
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                        <a href=""><i class="fa fa-google-plus"></i></a>
                                        <a href=""><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="member">
                            <img src="<?php echo e(asset('img/team-3.jpg')); ?>" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>William Anderson</h4>
                                    <span>CTO</span>
                                    <div class="social">
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                        <a href=""><i class="fa fa-google-plus"></i></a>
                                        <a href=""><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="member">
                            <img src="<?php echo e(asset('img/team-4.jpg')); ?>" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Amanda Jepson</h4>
                                    <span>Accountant</span>
                                    <div class="social">
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                        <a href=""><i class="fa fa-google-plus"></i></a>
                                        <a href=""><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- #team -->

        <!--==========================
          Seccion Contacto
        ============================-->
        <section id="contact" class="section-bg wow fadeInUp">
            <div class="container">

                <div class="section-header">
                    <h3><font color="white">CONSULTAS Y/O SUGERENCIAS</font></h3>
                    <p><font color="white">¿Tienes alguna duda, tuviste algun incoveniente o tienes alguna sugerencia?
                            porfavor comunicate con nosotros o enviamos un correo:</font></p>
                </div>

                <div class="row contact-info">

                    <div class="col-md-4">
                        <div class="contact-address">
                            <i class="ion-ios-location-outline"></i>
                            <h3>DIRECCION</h3>
                            <address><font color="white">PLAYA LA HERRADURA - CHORRILLOS</font></address>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-phone">
                            <i class="ion-ios-telephone-outline"></i>
                            <h3>TELEFONOS</h3>
                            <p><a href="tel:+155895548855"><font color="white">998887838 / 92206485</font></a></p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-email">
                            <i class="ion-ios-email-outline"></i>
                            <h3>CORREO</h3>
                            <p><a href="mailto:info@example.com"><font color="white">cielosdiscobar@gmail.com</font></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- #contacto -->

    </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>