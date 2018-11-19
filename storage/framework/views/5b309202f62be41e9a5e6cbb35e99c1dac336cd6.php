<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Discoteca Cielos</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="<?php echo e(asset('img/favicon.png')); ?>" rel="icon">
    <link href="<?php echo e(asset('img/apple-touch-icon.png')); ?>" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700"
          rel="stylesheet" type="text/css">

    <!-- Bootstrap CSS File -->
    <link href="<?php echo e(asset('lib/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css">

    <!-- Libraries CSS Files -->
    <link href="<?php echo e(asset('lib/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('lib/animate/animate.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('lib/ionicons/css/ionicons.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('lib/owlcarousel/assets/owl.carousel.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('lib/lightbox/css/lightbox.min.css')); ?>" rel="stylesheet" type="text/css">

    <!-- Main Stylesheet File -->
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">

    <!-- =======================================================
      Nombre del Tema: Discotecs Cielos
      Autores: Team Invadiendo la casa de Deli
    ======================================================= -->
</head>

<body>

<!--==========================
  Header [Home=Inicio / About=Programacion / Services=Promociones / Team=Zonas&Boxes / Portfolio=Galeria]
============================-->
<header id="header">
    <div class="container-fluid">

        <div id="logo" class="pull-left">
            <h1><a href="<?php echo e(url('/')); ?>" class="scrollto"><img src="<?php echo e(asset('img/cieloslogo.png')); ?>"></a></h1>
        </div>

        <nav id="nav-menu-container">

            <ul class="nav-menu">
                <?php if(auth()->guard()->guest()): ?>
                    <li class="menu-active"><a href="<?php echo e(url('/')); ?>">Inicio</a></li>
                    <li><a href="#about">Programacion</a></li>
                    <li><a href="#services">Promociones</a></li>
                    <li><a href="#portfolio">Galeria</a></li>
                    <li><a href="#team">Zonas & Boxes</a></li>
                    <li><a href="#contact">Contacto</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('login')); ?>">Iniciar Sesión</a></li>
                            <?php else: ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown"
                                       role="button"
                                       aria-expanded="false" aria-haspopup="true" v-pre>
                                        <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <?php if(auth()->user()->admin): ?>
                                            <li>
                                                <a href="<?php echo e(url('/admin/products')); ?>">Gestionar Productos</a>
                                            </li>
                                        <?php endif; ?>
                                        <li class="nav-item">
                                            <a class="" href="<?php echo e(route('logout')); ?>"
                                               onclick="event.preventDefault();
     document.getElementById('logout-form').submit();scrollToDownload();">
                                                Desconectarse
                                            </a>

                                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
                                                  style="display: none;">
                                                <?php echo e(csrf_field()); ?>

                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </li>
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->
<?php echo $__env->yieldContent('content'); ?>
<!--==========================
  VISTA DE INICIO
============================-->

<!--==========================
  Pie de Pagina
============================-->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-info">
                    <h3><img src="<?php echo e(asset('img/cieloslogo.png')); ?>"></h3>
                    <p>Ubicada en playa la herradura, discoteca cielos busca brindarte una opcion de diversion fresca y
                        renovada, con promociones insuperables, presentaciones de artistas todos los fines de semana, la
                        mejor musica a cargo de nuestros dj's y la mejor atencion exclusiva para nuestros clientes.</p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Menu Principal</h4>
                    <ul>
                        <li><i class="ion-ios-arrow-right"></i> <a href="#">Inicio</a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="#">Programacion</a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="#">Promociones</a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="#">Galeria</a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="#">Zonas & Boxes</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h4>Contacto</h4>
                    <p>
                        Playa La Herradura <br>
                        Chorrillos<br>
                        Lima - Perú <br>
                        <strong>Whatsapp:</strong> 92206485 / 998887838<br>
                        <strong>Correo:</strong> cielosdiscobar@gmail.com<br>
                    </p>

                    <div class="social-links">
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                    </div>

                </div>

                <div class="col-lg-3 col-md-6 footer-newsletter">
                    <h4>Tendencias</h4>
                    <p>
                        #DiscotecaCielos <br>
                        #LimaDeJuerga <br>
                        #PlayaLaHerradura <br>
                        #FrenteAlMar
                    </p>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong>Ingenieria de Software</strong>. Todos los Derechos Reservados
        </div>
        <div class="credits">
            Diseñado por <a href="https://bootstrapmade.com/">Zass</a>
        </div>
    </div>
</footer><!-- #footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<script src="<?php echo e(asset('lib/jquery/jquery.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('lib/jquery/jquery-migrate.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('lib/bootstrap/js/bootstrap.bundle.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('lib/easing/easing.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('lib/superfish/hoverIntent.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('lib/superfish/superfish.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('lib/wow/wow.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('lib/waypoints/waypoints.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('lib/counterup/counterup.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('lib/owlcarousel/owl.carousel.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('lib/isotope/isotope.pkgd.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('lib/lightbox/js/lightbox.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('lib/touchSwipe/jquery.touchSwipe.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('lib/touchSwipe/jquery.touchSwipe.min.js')); ?>" type="text/javascript"></script>
<!-- Contact Form JavaScript File -->
<script src="<?php echo e(asset('js/modifyUser.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('js/validation.js')); ?>" type="text/javascript"></script>

<!-- Template Main Javascript File -->
<script src="<?php echo e(asset('js/main.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('js/validation.js')); ?>" type="text/javascript"></script>
</body>
</html>
