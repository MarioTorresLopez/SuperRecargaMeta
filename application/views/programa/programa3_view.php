<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
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
                            <li class="active"><a href="<?= base_url()?>inicio">Inicio</a></li>            
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Programa <span class="fa fa-angle-down"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="<?= base_url()?>programa/prog1">Lunes</a></li>                
                                    <li><a href="<?= base_url()?>programa/prog2">Martes</a></li>               
                                    <li><a href="<?= base_url()?>programa/prog3">Miércoles</a></li>             
                                </ul>
                            </li>            
                            <li><a href="<?= base_url()?>inicio/galeria">Galería</a></li>
<!--                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <span class="fa fa-angle-down"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="blog-archive.html">Blog Archive</a></li>                
                                    <li><a href="blog-single.html">Blog Single</a></li>                
                                </ul>
                            </li>            -->
                            <li><a href="<?= base_url()?>resena">Cine Científico</a></li>
                            <li><a href="<?= base_url()?>login">Iniciar sesión</a></li>
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
        <!-- Page breadcrumb -->
        <section id="mu-page-breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mu-page-breadcrumb-area">
                            <h2>Programa</h2>
                            <ol class="breadcrumb">
                                <li><a href="#">Home</a></li>            
                                <li class="active">programa</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcrumb -->

        <!-- Start error section  -->
        <section id="mu-error">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mu-error-area">
                            <p>Miércoles 5</p>
                            <center>
                                <img src="<?= base_url() ?>static/assets/img/programas/miercoles.png">
                            </center>
                            <!--<a class="mu-post-btn" href="index.html">GO TO HOME</a>-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End error section  -->
        <!-- Start footer -->
        <footer id="mu-footer">
            <!-- start footer top -->
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
