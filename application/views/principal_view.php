<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">    
        <title><?= $app_title ?></title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="<?= base_url() ?>static/assets/img/LogoUteq.png" type="image/x-icon">

        <!-- Font awesome -->
        <link href="<?= base_url() ?>static/assets/css/font-awesome.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="<?= base_url() ?>static/assets/css/bootstrap.css" rel="stylesheet">   
        <!-- Slick slider -->
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>static/assets/css/slick.css">          
        <!-- Fancybox slider -->
        <link rel="stylesheet" href="<?= base_url() ?>static/assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
        <!-- Theme color -->
        <link id="switcher" href="<?= base_url() ?>static/assets/css/theme-color/default-theme.css" rel="stylesheet">          

        <!-- Main style sheet -->
        <link href="<?= base_url() ?>static/assets/css/style.css" rel="stylesheet">    


        <!-- Google Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body> 

        <!--START SCROLL TOP BUTTON -->
        <a class="scrollToTop" href="#">
            <i class="fa fa-angle-up"></i>      
        </a>
        <!-- END SCROLL TOP BUTTON -->

        <!-- Start header  -->
        <header id="mu-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="mu-header-area">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="mu-header-top-left">
                                        <div class="mu-top-email">
                                            <i class="fa fa-envelope"></i>
                                            <span>capitulouteqsmm@gmail.com</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="mu-header-top-right">
                                        <nav>
                                            <ul class="mu-top-social-nav">
                                                <li><a href="https://www.facebook.com/uteqsmm/?ref=bookmarks" target="_blank"><span class="fa fa-facebook"></span></a></li>
                                                <li><a href="https://www.instagram.com/uteqsmm/?hl=es-la" target="_blank"><span class="fa fa-instagram"></span></a></li>
                                                <li><a href="https://twitter.com/uteqsmm" target="_blank"><span class="fa fa-twitter"></span></a></li>
<!--                                                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                                <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                                <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                                <li><a href="#"><span class="fa fa-youtube"></span></a></li>-->
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End header  -->
        <!-- Start menu -->
        <section id="mu-menu">
            <nav class="navbar navbar-default" role="navigation">  
                <div class="container">
                    <div class="navbar-header">
                        <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- LOGO -->              
                        <!-- TEXT BASED LOGO -->
                        <a class="navbar-brand" href="principal_view.html">
                            <i class="fa fa-flask"></i>
                            <span>
                                2do Simposio de Materiales  y Nanotecnología
                            </span>
                        </a>
                        <!-- IMG BASED LOGO  -->
                        <!-- <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="logo"></a> -->
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                            <li class="active"><a href="<?= base_url() ?>inicio">Inicio</a></li>            
<!--                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Programa <span class="fa fa-angle-down"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="<?= base_url() ?>programa/prog1">Lunes</a></li>                
                                    <li><a href="<?= base_url() ?>programa/prog2">Martes</a></li>               
                                    <li><a href="<?= base_url() ?>programa/prog3">Miércoles</a></li>               
                                </ul>
                            </li> -->
                            <li><a href="<?= base_url() ?>programa/prog1">Programa</a></li>
                            <li><a href="<?= base_url() ?>inicio/galeria">Galería</a></li>
<!--                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <span class="fa fa-angle-down"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="blog-archive.html">Blog Archive</a></li>                
                                    <li><a href="blog-single.html">Blog Single</a></li>                
                                </ul>
                            </li>            -->
                            <li><a href="<?= base_url() ?>resena">Cine Científico</a></li>
                            <li><a href="<?= base_url() ?>login">Iniciar sesión</a></li>
                        </ul>                     
                    </div><!--/.nav-collapse -->        
                </div>     
            </nav>
        </section>
        <!-- End menu -->
        <!-- Start search box -->
        <div id="mu-search">
            <div class="mu-search-area">      
                <button class="mu-search-close"><span class="fa fa-close"></span></button>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">            
                            <form class="mu-search-form">
                                <input type="search" placeholder="Type Your Keyword(s) & Hit Enter">              
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End search box -->
        <!-- Start Slider -->
        <section id="mu-slider">
            <!-- Start single slider item -->
            <div class="mu-slider-single">
                <div class="mu-slider-img">
                    <figure>
                        <!--<img src="<?= base_url() ?>static/assets/img/slider/1.jpg" alt="img">-->
                        <img src="<?= base_url() ?>static/assets/img/gallery/logo_simposio.png" alt="img">
                    </figure>
                </div>
                <div class="mu-slider-content">
                    <h4>Bienvenido al simposio</h4>
                    <span></span>
                    <h2>Registrate para participar</h2>
                    <h2>Dirigete a iniciar sesión para registrarte.</h2>
                </div>
            </div>
            <!-- Start single slider item -->
            <!-- Start single slider item -->
            <div class="mu-slider-single">
                <div class="mu-slider-img">
                    <figure>
                        <!--<img src="<?= base_url() ?>static/assets/img/slider/2.jpg" alt="img">-->
                        <img src="<?= base_url() ?>static/assets/img/UTEQ(LOGO CAPITULO ESTUDIANTIL).png" alt="img">
                    </figure>
                </div>
                <div class="mu-slider-content">
                    <h4>Bienvenido al simposio</h4>
                    <span></span>
                    <h2>Registrate para participar</h2>
                    <h2>Dirigete a iniciar sesión para registrarte.</h2>
                </div>
            </div>
            <!-- Start single slider item -->
            <!-- Start single slider item -->
            <div class="mu-slider-single">
                <div class="mu-slider-img">
                    <figure>
                        <img src="<?= base_url() ?>static/assets/img/logosmm.png" alt="img">
                    </figure>
                </div>
                <div class="mu-slider-content">
                    <h4>Bienvenido al simposio</h4>
                    <span></span>
                    <h2>Registrate para participar</h2>
                    <h2>Dirigete a iniciar sesión para registrarte.</h2>
                </div>
            </div>
            <!-- Start single slider item -->    
        </section>
        <!-- End Slider -->
        <!-- Start service  -->
        <section id="mu-service">
            <div class="container">
                <div class="row">
                    
                </div>
            </div>
        </section>
        <!-- End service  -->

        <!-- Start about us -->
        <section id="mu-about-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mu-about-us-area">           
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="mu-about-us-left">
                                        <!-- Start Title -->
                                        <div class="mu-title">
                                            <h2>Nosotros</h2>              
                                        </div>
                                        <!-- End Title -->
                                        <p>
                                            El objetivo de este Capítulo Estudiantil, es propiciar la discusión entre estudiantes, profesores, e investigadores para generar interés en los estudiantes sobre la ciencia en materiales, así como promover y divulgar las actividades que realice la Sociedad Mexicana de Materiales.
                                        </p>
                                        <p>
                                            Beneficios
                                        </p>
                                        <p>
                                            Formar parte del Capítulo Estudiantil te brinda oportunidades como:
                                        </p>
                                        <ul>
                                            <li>Apoyo para divulgación en proyectos y exposición científica en diversos eventos.</li>
                                            <li>Becas para participar en proyectos de investigación multidisciplinarios.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="">                            
<!--                                        <a  href="https://www.youtube.com/watch?v=uQXVuUlh4R4&fbclid=IwAR16-w5Vh9Xi4rW-1m1DAE5hi_6cB_spABxTxGMJTodU3xDK5fqOsPpxOVQ" target="mutube-video">
                                            <img src="<?= base_url() ?>static/assets/img/about-us.jpg" alt="img">
                                        </a>    -->
<!--                                        <video src="<?= base_url() ?>static/assets/img/y2mate.com - snow_informer_sUmIiWLoEuo_360p.mp4" controls="">

                                        </video>-->
<iframe width="560" height="315" src="https://www.youtube.com/embed/uQXVuUlh4R4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End about us -->

        <!-- Start about us counter -->
<!--        <section id="mu-abtus-counter">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mu-abtus-counter-area">
                            <div class="row">
                                 Start counter item 
                                <div class="col-lg-3 col-md-3 col-sm-3">
                                    <div class="mu-abtus-counter-single">
                                        <span class="fa fa-book"></span>
                                        <h4 class="counter">568</h4>
                                        <p>Subjects</p>
                                    </div>
                                </div>
                                 End counter item 
                                 Start counter item 
                                <div class="col-lg-3 col-md-3 col-sm-3">
                                    <div class="mu-abtus-counter-single">
                                        <span class="fa fa-users"></span>
                                        <h4 class="counter">3500</h4>
                                        <p>Students</p>
                                    </div>
                                </div>
                                 End counter item 
                                 Start counter item 
                                <div class="col-lg-3 col-md-3 col-sm-3">
                                    <div class="mu-abtus-counter-single">
                                        <span class="fa fa-flask"></span>
                                        <h4 class="counter">65</h4>
                                        <p>Modern Lab</p>
                                    </div>
                                </div>
                                 End counter item 
                                 Start counter item 
                                <div class="col-lg-3 col-md-3 col-sm-3">
                                    <div class="mu-abtus-counter-single no-border">
                                        <span class="fa fa-user-secret"></span>
                                        <h4 class="counter">250</h4>
                                        <p>Teachers</p>
                                    </div>
                                </div>
                                 End counter item 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <!-- End about us counter -->

        <!-- Start features section -->
<!--        <section id="mu-features">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="mu-features-area">
                             Start Title 
                            <div class="mu-title">
                                <h2>Our Features</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio ipsa ea maxime mollitia, vitae voluptates, quod at, saepe reprehenderit totam aliquam architecto fugiat sunt animi!</p>
                            </div>
                             End Title 
                             Start features content 
                            <div class="mu-features-content">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4  col-sm-6">
                                        <div class="mu-single-feature">
                                            <span class="fa fa-book"></span>
                                            <h4>Professional Courses</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus non dolorem excepturi libero itaque sint labore similique maxime natus eum.</p>
                                            <a href="#">Read More</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <div class="mu-single-feature">
                                            <span class="fa fa-users"></span>
                                            <h4>Expert Teachers</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus non dolorem excepturi libero itaque sint labore similique maxime natus eum.</p>
                                            <a href="#">Read More</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <div class="mu-single-feature">
                                            <span class="fa fa-laptop"></span>
                                            <h4>Online Learning</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus non dolorem excepturi libero itaque sint labore similique maxime natus eum.</p>
                                            <a href="#">Read More</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <div class="mu-single-feature">
                                            <span class="fa fa-microphone"></span>
                                            <h4>Audio Lessons</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus non dolorem excepturi libero itaque sint labore similique maxime natus eum.</p>
                                            <a href="#">Read More</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <div class="mu-single-feature">
                                            <span class="fa fa-film"></span>
                                            <h4>Video Lessons</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus non dolorem excepturi libero itaque sint labore similique maxime natus eum.</p>
                                            <a href="#">Read More</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <div class="mu-single-feature">
                                            <span class="fa fa-certificate"></span>
                                            <h4>Professional Certificate</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus non dolorem excepturi libero itaque sint labore similique maxime natus eum.</p>
                                            <a href="#">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             End features content 
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <!-- End features section -->

        <!-- Start latest course section -->
        <section id="mu-latest-courses">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="mu-latest-courses-area">
                            <!-- Start Title -->
                            <div class="mu-title">
                                <h2>Patrocinadores</h2>
                            </div>
                            <!-- End Title -->
                            <!-- Start latest course content -->
                            <div id="mu-latest-course-slide" class="mu-latest-courses-content">
                                <div class="col-lg-4 col-md-4 col-xs-12">
                                    <div class="mu-latest-course-single">
                                        <figure class="mu-latest-course-img">
                                            <a href="#"><img src="<?= base_url() ?>static/assets/img/courses/Carbomex.jpg" alt="img"></a>
                                            <figcaption class="mu-latest-course-imgcaption">
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-xs-12">
                                    <div class="mu-latest-course-single">
                                        <figure class="mu-latest-course-img">
                                            <a href="#"><img src="<?= base_url() ?>static/assets/img/courses/INA - Logo.png" alt="img"></a>
                                            <figcaption class="mu-latest-course-imgcaption">
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-xs-12">
                                    <div class="mu-latest-course-single">
                                        <figure class="mu-latest-course-img">
                                            <a href="#"><img src="<?= base_url() ?>static/assets/img/courses/logocrisolnuevo2.jpg" alt="img"></a>
                                            <figcaption class="mu-latest-course-imgcaption">
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-xs-12">
                                    <div class="mu-latest-course-single">
                                        <figure class="mu-latest-course-img">
                                            <a href="#"><img src="<?= base_url() ?>static/assets/img/courses/Spintronics Corporation - Logo.png" alt="img"></a>
                                            <figcaption class="mu-latest-course-imgcaption">
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-xs-12">
                                    <div class="mu-latest-course-single">
                                        <figure class="mu-latest-course-img">
                                            <a href="#"><img src="<?= base_url() ?>static/assets/img/courses/VERAVITRUM.png" alt="img"></a>
                                            <figcaption class="mu-latest-course-imgcaption">
                                            </figcaption>
                                        </figure>
                                        <!--                                        <div class="mu-latest-course-single-content">
                                                                                    <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quod nisi quisquam modi dolore, dicta obcaecati architecto quidem ullam quia.</p>
                                                                                    <div class="mu-latest-course-single-contbottom">
                                                                                        <a class="mu-course-details" href="#">Details</a>
                                                                                        <span class="mu-course-price" href="#">$165.00</span>
                                                                                    </div>
                                                                                </div>-->
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-xs-12">
                                    <div class="mu-latest-course-single">
                                        <figure class="mu-latest-course-img">
                                            <a href="#"><img src="<?= base_url() ?>static/assets/img/courses/plastimex.png" alt="img"></a>
                                            <figcaption class="mu-latest-course-imgcaption">
                                            </figcaption>
                                        </figure>
                                        <!--                                        <div class="mu-latest-course-single-content">
                                                                                    <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quod nisi quisquam modi dolore, dicta obcaecati architecto quidem ullam quia.</p>
                                                                                    <div class="mu-latest-course-single-contbottom">
                                                                                        <a class="mu-course-details" href="#">Details</a>
                                                                                        <span class="mu-course-price" href="#">$165.00</span>
                                                                                    </div>
                                                                                </div>-->
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-xs-12">
                                    <div class="mu-latest-course-single">
                                        <figure class="mu-latest-course-img">
                                            <a href="#"><img src="<?= base_url() ?>static/assets/img/courses/inmobiliaria.bmp" alt="img"></a>
                                            <figcaption class="mu-latest-course-imgcaption">
                                            </figcaption>
                                        </figure>
                                        <!--                                        <div class="mu-latest-course-single-content">
                                                                                    <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quod nisi quisquam modi dolore, dicta obcaecati architecto quidem ullam quia.</p>
                                                                                    <div class="mu-latest-course-single-contbottom">
                                                                                        <a class="mu-course-details" href="#">Details</a>
                                                                                        <span class="mu-course-price" href="#">$165.00</span>
                                                                                    </div>
                                                                                </div>-->
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-xs-12">
                                    <div class="mu-latest-course-single">
                                        <figure class="mu-latest-course-img">
                                            <a href="#"><img src="<?= base_url() ?>static/assets/img/courses/DANA.png" alt="img"></a>
                                            <figcaption class="mu-latest-course-imgcaption">
                                            </figcaption>
                                        </figure>
                                        <!--                                        <div class="mu-latest-course-single-content">
                                                                                    <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quod nisi quisquam modi dolore, dicta obcaecati architecto quidem ullam quia.</p>
                                                                                    <div class="mu-latest-course-single-contbottom">
                                                                                        <a class="mu-course-details" href="#">Details</a>
                                                                                        <span class="mu-course-price" href="#">$165.00</span>
                                                                                    </div>
                                                                                </div>-->
                                    </div>
                                </div>
                            </div>
                            <!-- End latest course content -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End latest course section -->

        <!-- Start from blog -->
        <section id="mu-from-blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mu-from-blog-area">
                            <!-- start title -->
                            <!-- end title -->  
                            <!-- start from blog content   -->
                            <div class="mu-from-blog-content">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                        <article class="mu-blog-single-item">
                                            <figure class="mu-blog-single-img">
                                                <a href="#"><img src="<?= base_url() ?>static/assets/img/blog/poster.png" alt="img"></a>
                                                <figcaption class="mu-blog-caption">
                                                </figcaption>                      
                                            </figure>
                                        </article>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <article class="mu-blog-single-item">
                                            <figure class="mu-blog-single-img">
                                                <a href="#"><img src="<?= base_url() ?>static/assets/img/blog/Poster de NanoArte.png" alt="img"></a>                      
                                            </figure>
                                            <div class="mu-blog-description">
                                                <a class="mu-read-more-btn" href="<?=  base_url()?>static/Nanoarte[30691].pdf" target="_blank">Leer más</a>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <article class="mu-blog-single-item">
                                            <figure class="mu-blog-single-img">
                                                <a href="#"><img src="<?= base_url() ?>static/assets/img/blog/UTEQ(LOGO CAPITULO ESTUDIANTIL).png" alt="img"></a>
                                                <figcaption class="mu-blog-caption">
                                                    <h3><a href="#">¿Que hacemos?</a></h3>
                                                </figcaption>                      
                                            </figure>
                                            <div class="mu-blog-description">
                                                <a class="mu-read-more-btn" href="<?=base_url()?>static/Que hace el capitulo 6.pdf" target="_blank">Leer más</a>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>     
                            <!-- end from blog content   -->   
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End from blog -->
        
        <!-- Start our teacher -->
        <section id="mu-our-teacher">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mu-our-teacher-area">
                            <!-- begain title -->
                            <div class="mu-title">
                                <h2>Actividades</h2>
                                <p>Algunas actividades que realizamos como capítulo estudiantil, son:</p>
                            </div>
                            <!-- end title -->
                            <!-- begain our teacher content -->
                            <div class="mu-our-teacher-content">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3  col-sm-6">
                                        <div class="mu-our-teacher-single">
                                            <figure class="mu-our-teacher-img">
                                                <img src="<?= base_url() ?>static/assets/img/teachers/conf_virt.jpg" alt="teacher img">
                                                <div class="mu-our-teacher-social">
                                                    <a href="#"><span class="fa fa-facebook"></span></a>
                                                    <a href="#"><span class="fa fa-twitter"></span></a>
                                                    <a href="#"><span class="fa fa-linkedin"></span></a>
                                                    <a href="#"><span class="fa fa-google-plus"></span></a>
                                                </div>
                                            </figure>                    
                                            <div class="mu-ourteacher-single-content">
                                                <h4>Conferencias virtuales</h4>
                                                <span> </span>
                                                <p> </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                        <div class="mu-our-teacher-single">
                                            <figure class="mu-our-teacher-img">
                                                <img src="<?= base_url() ?>static/assets/img/teachers/conf_pre.jpg" alt="teacher img">
                                                <div class="mu-our-teacher-social">
                                                    <a href="#"><span class="fa fa-facebook"></span></a>
                                                    <a href="#"><span class="fa fa-twitter"></span></a>
                                                    <a href="#"><span class="fa fa-linkedin"></span></a>
                                                    <a href="#"><span class="fa fa-google-plus"></span></a>
                                                </div>
                                            </figure>                    
                                            <div class="mu-ourteacher-single-content">
                                                <h4>Conferencias presenciales</h4>
                                                <p> </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                        <div class="mu-our-teacher-single">
                                            <figure class="mu-our-teacher-img">
                                                <img src="<?= base_url() ?>static/assets/img/teachers/4.jpg" alt="teacher img">
                                                <div class="mu-our-teacher-social">
                                                    <a href="#"><span class="fa fa-facebook"></span></a>
                                                    <a href="#"><span class="fa fa-twitter"></span></a>
                                                    <a href="#"><span class="fa fa-linkedin"></span></a>
                                                    <a href="#"><span class="fa fa-google-plus"></span></a>
                                                </div>
                                            </figure>                    
                                            <div class="mu-ourteacher-single-content">
                                                <h4>Visitas a seminarios, simposios y congresos</h4>
                                                <span> </span>
                                                <p> </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                        <div class="mu-our-teacher-single">
                                            <figure class="mu-our-teacher-img">
                                                <img src="<?= base_url() ?>static/assets/img/teachers/taller.jpg" alt="teacher img">
                                                <div class="mu-our-teacher-social">
                                                    <a href="#"><span class="fa fa-facebook"></span></a>
                                                    <a href="#"><span class="fa fa-twitter"></span></a>
                                                    <a href="#"><span class="fa fa-linkedin"></span></a>
                                                    <a href="#"><span class="fa fa-google-plus"></span></a>
                                                </div>
                                            </figure>                    
                                            <div class="mu-ourteacher-single-content">
                                                <h4>Talleres</h4>
                                                <br>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                        <div class="mu-our-teacher-single">
                                            <figure class="mu-our-teacher-img">
                                                <img src="<?= base_url() ?>static/assets/img/teachers/divulgacion.jpg" alt="teacher img">
                                                <div class="mu-our-teacher-social">
                                                    <a href="#"><span class="fa fa-facebook"></span></a>
                                                    <a href="#"><span class="fa fa-twitter"></span></a>
                                                    <a href="#"><span class="fa fa-linkedin"></span></a>
                                                    <a href="#"><span class="fa fa-google-plus"></span></a>
                                                </div>
                                            </figure>                    
                                            <div class="mu-ourteacher-single-content">
                                                <h4>Divulgación científica</h4>
                                                <span> </span>
                                                <p> </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                        <div class="mu-our-teacher-single">
                                            <figure class="mu-our-teacher-img">
                                                <img src="<?= base_url() ?>static/assets/img/teachers/congreso.jpg" alt="teacher img">
                                                <div class="mu-our-teacher-social">
                                                    <a href="#"><span class="fa fa-facebook"></span></a>
                                                    <a href="#"><span class="fa fa-twitter"></span></a>
                                                    <a href="#"><span class="fa fa-linkedin"></span></a>
                                                    <a href="#"><span class="fa fa-google-plus"></span></a>
                                                </div>
                                            </figure>                    
                                            <div class="mu-ourteacher-single-content">
                                                <h4>Congresos</h4>
                                                <span> </span>
                                                <p> </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                        <div class="mu-our-teacher-single">
                                            <figure class="mu-our-teacher-img">
                                                <img src="<?= base_url() ?>static/assets/img/teachers/visita.jpg" alt="teacher img">
                                                <div class="mu-our-teacher-social">
                                                    <a href="#"><span class="fa fa-facebook"></span></a>
                                                    <a href="#"><span class="fa fa-twitter"></span></a>
                                                    <a href="#"><span class="fa fa-linkedin"></span></a>
                                                    <a href="#"><span class="fa fa-google-plus"></span></a>
                                                </div>
                                            </figure>                    
                                            <div class="mu-ourteacher-single-content">
                                                <h4>Participación en escuelas y talleres de nanotecnología</h4>
                                                <span> </span>
                                                <p> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <!-- End our teacher content -->           
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End our teacher -->

        <!-- Start testimonial -->
        <!-- End testimonial -->

        

        <!-- Start footer -->
        <footer id="mu-footer">
            <!-- start footer top -->
            <div class="mu-footer-top">
                <div class="container">
                    <div class="mu-footer-top-area">
                        <div class="row">
                            
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="mu-footer-widget">
                                    <h4>Contacto</h4>
                                    <address>
                                        <p>Av. Pie de la Cuesta 2501, Nacional, 76148 Santiago de Querétaro, Qro.</p>
                                        <p>Facebook: Capítulo Estudiantil UTEQ SMM</p>
                                        <p>Instagram: uteqsmm</p>
                                        <p>Twitter: UTEQ-SMM</p>
                                        <p>Email: capitulouteqsmm@gmail.com</p>
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end footer top -->
            <!-- start footer bottom -->
            <div class="mu-footer-bottom">
                <div class="container">
                    <div class="mu-footer-bottom-area">
                        <p>&copy; 2019 por Capítulo Estudiantil UTEQ-SMM. </p>
                    </div>
                </div>
            </div>
            <!-- end footer bottom -->
        </footer>
        <!-- End footer -->

        <!-- jQuery library -->
        <script src="<?= base_url() ?>static/assets/js/jquery.min.js"></script>  
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?= base_url() ?>static/assets/js/bootstrap.js"></script>   
        <!-- Slick slider -->
        <script type="text/javascript" src="<?= base_url() ?>static/assets/js/slick.js"></script>
        <!-- Counter -->
        <script type="text/javascript" src="<?= base_url() ?>static/assets/js/waypoints.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>static/assets/js/jquery.counterup.js"></script>  
        <!-- Mixit slider -->
        <script type="text/javascript" src="<?= base_url() ?>static/assets/js/jquery.mixitup.js"></script>
        <!-- Add fancyBox -->        
        <script type="text/javascript" src="<?= base_url() ?>static/assets/js/jquery.fancybox.pack.js"></script>


        <!-- Custom js -->
        <script src="<?= base_url() ?>static/assets/js/custom.js"></script> 

    </body>
</html>