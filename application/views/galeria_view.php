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
<!--                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Programa <span class="fa fa-angle-down"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="<?= base_url()?>programa/prog1">Lunes</a></li>                
                                    <li><a href="<?= base_url()?>programa/prog2">Martes</a></li>               
                                    <li><a href="<?= base_url()?>programa/prog3">Miércoles</a></li>               
                                </ul>
                            </li>       -->
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
        <!-- Page breadcrumb -->
        <section id="mu-page-breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mu-page-breadcrumb-area">
                            <h2>Galería</h2>
                            <ol class="breadcrumb">
                                <li><a href="">Home</a></li>            
                                <li class="active">Gallery</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcrumb -->
        <!-- Start gallery  -->
        <section id="mu-gallery">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mu-gallery-area">
                            <!-- start title -->
                            <div class="mu-title">
                                <h2>ALGUNOS MOMENTOS</h2>
                            </div>
                            <!-- end title -->
                            <!-- start gallery content -->
                            <div class="mu-gallery-content">
                                <!-- Start gallery menu -->
                                <div class="mu-gallery-top">              
                                    <ul>
                                        <li class="filter active" data-filter="all">All</li>
                                        <li class="filter" data-filter=".lab">Lab</li>
                                        <li class="filter" data-filter=".classroom">Class Room</li>
                                        <li class="filter" data-filter=".library">Library</li>
                                        <li class="filter" data-filter=".cafe">Cafe</li>
                                        <li class="filter" data-filter=".others">Others</li>
                                    </ul>
                                </div>
                                <!-- End gallery menu -->
                                <div class="mu-gallery-body">
                                    <ul id="mixit-container" class="row">
                                        <!-- start single gallery image -->
                                        <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                                            <div class="mu-single-gallery">                  
                                                <div class="mu-single-gallery-item">
                                                    <div class="mu-single-gallery-img">
                                                      <!--<a href="#"><img alt="img" src="<?= base_url() ?>static/assets/img/gallery/small/1.jpg"></a>-->
                                                        <a href="#"><img alt="img" src="<?= base_url() ?>static/assets/img/gallery/20727983_1797275703621031_2124075453952039933_n.jpg"></a>
                                                    </div>
                                                    <div class="mu-single-gallery-info">
                                                        <div class="mu-single-gallery-info-inner">
                                                            <h4>Image Title</h4>
                                                            <p>Web Design</p>
                                                            <!--<a href="<?= base_url() ?>static/assets/img/gallery/1.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>-->
                                                            <a href="<?= base_url() ?>static/assets/img/gallery/20727983_1797275703621031_2124075453952039933_n.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                            <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                        </div>
                                                    </div>                  
                                                </div>
                                            </div>
                                        </li>
                                        <!-- start single gallery image -->
                                        <li class="col-md-4 col-sm-6 col-xs-12 mix library">
                                            <div class="mu-single-gallery">                  
                                                <div class="mu-single-gallery-item">
                                                    <div class="mu-single-gallery-img">
                                                      <!--<a href="#"><img alt="img" src="<?= base_url() ?>static/assets/img/gallery/small/2.jpg"></a>-->
                                                        <a href="#"><img alt="img" src="<?= base_url() ?>static/assets/img/gallery/20953907_10214284241439888_458255111570113728_n.jpg"></a>
                                                    </div>
                                                    <div class="mu-single-gallery-info">
                                                        <div class="mu-single-gallery-info-inner">
                                                            <h4>Image Title</h4>
                                                            <p>Animation</p>
                                                            <a href="<?= base_url() ?>static/assets/img/gallery/20953907_10214284241439888_458255111570113728_n.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                            <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                        </div>
                                                    </div> 
                                                </div>
                                            </div>
                                        </li>
                                        <!-- start single gallery image -->
                                        <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                                            <div class="mu-single-gallery">                  
                                                <div class="mu-single-gallery-item">
                                                    <div class="mu-single-gallery-img">
                                                        <a href="#"><img alt="img" src="<?= base_url() ?>static/assets/img/gallery/21151257_10213862110130925_5106844272728885636_n.jpg"></a>
                                                    </div>
                                                    <div class="mu-single-gallery-info">
                                                        <div class="mu-single-gallery-info-inner">
                                                            <h4>Image Title</h4>
                                                            <p>Math</p>
                                                            <a href="<?= base_url() ?>static/assets/img/gallery/21151257_10213862110130925_5106844272728885636_n.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                            <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- start single gallery image -->
                                        <li class="col-md-4 col-sm-6 col-xs-12 mix classroom">
                                            <div class="mu-single-gallery">                  
                                                <div class="mu-single-gallery-item">
                                                    <div class="mu-single-gallery-img">
                                                        <a href="#"><img alt="img" src="<?= base_url() ?>static/assets/img/gallery/32072894_2060574440624236_1036755060295467008_n.jpg"></a>
                                                    </div>
                                                    <div class="mu-single-gallery-info">
                                                        <div class="mu-single-gallery-info-inner">
                                                            <h4>Image Title</h4>
                                                            <p>English</p>
                                                            <a href="<?= base_url() ?>static/assets/img/gallery/32072894_2060574440624236_1036755060295467008_n.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                            <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- start single gallery image -->
                                        <li class="col-md-4 col-sm-6 col-xs-12 mix others">
                                            <div class="mu-single-gallery">                  
                                                <div class="mu-single-gallery-item">
                                                    <div class="mu-single-gallery-img">
                                                        <a href="#"><img alt="img" src="<?= base_url() ?>static/assets/img/gallery/32079703_2060574510624229_8787010437687279616_n.jpg"></a>
                                                    </div>
                                                    <div class="mu-single-gallery-info">
                                                        <div class="mu-single-gallery-info-inner">
                                                            <h4>Image Title</h4>
                                                            <p>Graphics</p>
                                                            <a href="<?= base_url() ?>static/assets/img/gallery/32079703_2060574510624229_8787010437687279616_n.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                            <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- start single gallery image -->
                                        <li class="col-md-4 col-sm-6 col-xs-12 mix cafe">
                                            <div class="mu-single-gallery">                  
                                                <div class="mu-single-gallery-item">
                                                    <div class="mu-single-gallery-img">
                                                        <a href="#"><img alt="img" src="<?= base_url() ?>static/assets/img/gallery/32089217_2106120942736504_1459187517881319424_n.jpg"></a>
                                                    </div>
                                                    <div class="mu-single-gallery-info">
                                                        <div class="mu-single-gallery-info-inner">
                                                            <h4>Image Title</h4>
                                                            <p>Health</p>
                                                            <a href="<?= base_url() ?>static/assets/img/gallery/32089217_2106120942736504_1459187517881319424_n.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                            <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- start single gallery image -->
                                        <li class="col-md-4 col-sm-6 col-xs-12 mix others">
                                            <div class="mu-single-gallery">                  
                                                <div class="mu-single-gallery-item">
                                                    <div class="mu-single-gallery-img">
                                                        <a href="#"><img alt="img" src="<?= base_url() ?>static/assets/img/gallery/32130796_2060574113957602_3988529273580290048_n.jpg"></a>
                                                    </div>
                                                    <div class="mu-single-gallery-info">
                                                        <div class="mu-single-gallery-info-inner">
                                                            <h4>Image Title</h4>
                                                            <p>Sports</p>
                                                            <a href="<?= base_url() ?>static/assets/img/gallery/32130796_2060574113957602_3988529273580290048_n.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                            <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                        </div>
                                                    </div>             
                                                </div>
                                            </div> 
                                        </li>
                                        <!-- start single gallery image -->
                                        <li class="col-md-4 col-sm-6 col-xs-12 mix library">
                                            <div class="mu-single-gallery">                  
                                                <div class="mu-single-gallery-item">
                                                    <div class="mu-single-gallery-img">
                                                        <a href="#"><img alt="img" src="<?= base_url() ?>static/assets/img/gallery/32186213_2106129932735605_3089051126230679552_n - copia.jpg"></a>
                                                    </div>
                                                    <div class="mu-single-gallery-info">
                                                        <div class="mu-single-gallery-info-inner">
                                                            <h4>Image Title</h4>
                                                            <p>Health</p>
                                                            <a href="<?= base_url() ?>static/assets/img/gallery/32186213_2106129932735605_3089051126230679552_n - copia.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                            <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- start single gallery image -->
                                        <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                                            <div class="mu-single-gallery">                  
                                                <div class="mu-single-gallery-item">
                                                    <div class="mu-single-gallery-img">
                                                        <a href="#"><img alt="img" src="<?= base_url() ?>static/assets/img/gallery/39304910_2262614613753802_3893928830724734976_n.jpg"></a>
                                                    </div>
                                                    <div class="mu-single-gallery-info">
                                                        <div class="mu-single-gallery-info-inner">
                                                            <h4>Image Title</h4>
                                                            <p>Sports</p>
                                                            <a href="<?= base_url() ?>static/assets/img/gallery/39304910_2262614613753802_3893928830724734976_n.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                            <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                        </div>
                                                    </div>             
                                                </div>
                                            </div> 
                                        </li>
                                        <!-- start single gallery image -->
                                        <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                                            <div class="mu-single-gallery">                  
                                                <div class="mu-single-gallery-item">
                                                    <div class="mu-single-gallery-img">
                                                        <a href="#"><img alt="img" src="<?= base_url() ?>static/assets/img/gallery/39396370_2262613927087204_2116916335689596928_n - copia.jpg"></a>
                                                    </div>
                                                    <div class="mu-single-gallery-info">
                                                        <div class="mu-single-gallery-info-inner">
                                                            <h4>Image Title</h4>
                                                            <p>Sports</p>
                                                            <a href="<?= base_url() ?>static/assets/img/gallery/39396370_2262613927087204_2116916335689596928_n - copia.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                            <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                        </div>
                                                    </div>             
                                                </div>
                                            </div> 
                                        </li>
                                        <!-- start single gallery image -->
                                        <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                                            <div class="mu-single-gallery">                  
                                                <div class="mu-single-gallery-item">
                                                    <div class="mu-single-gallery-img">
                                                        <a href="#"><img alt="img" src="<?= base_url() ?>static/assets/img/gallery/47320594_1620071844759843_8150471051487215616_o.jpg"></a>
                                                    </div>
                                                    <div class="mu-single-gallery-info">
                                                        <div class="mu-single-gallery-info-inner">
                                                            <h4>Image Title</h4>
                                                            <p>Sports</p>
                                                            <a href="<?= base_url() ?>static/assets/img/gallery/47320594_1620071844759843_8150471051487215616_o.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                            <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                        </div>
                                                    </div>             
                                                </div>
                                            </div> 
                                        </li>
                                        <!-- start single gallery image -->
                                        <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                                            <div class="mu-single-gallery">                  
                                                <div class="mu-single-gallery-item">
                                                    <div class="mu-single-gallery-img">
                                                        <a href="#"><img alt="img" src="<?= base_url() ?>static/assets/img/gallery/FB_IMG_1525973770618.jpg"></a>
                                                    </div>
                                                    <div class="mu-single-gallery-info">
                                                        <div class="mu-single-gallery-info-inner">
                                                            <h4>Image Title</h4>
                                                            <p>Sports</p>
                                                            <a href="<?= base_url() ?>static/assets/img/gallery/FB_IMG_1525973770618.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                            <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                        </div>
                                                    </div>             
                                                </div>
                                            </div> 
                                        </li>
                                        <!-- start single gallery image -->
                                        <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                                            <div class="mu-single-gallery">                  
                                                <div class="mu-single-gallery-item">
                                                    <div class="mu-single-gallery-img">
                                                        <a href="#"><img alt="img" src="<?= base_url() ?>static/assets/img/gallery/FB_IMG_1525973783089.jpg"></a>
                                                    </div>
                                                    <div class="mu-single-gallery-info">
                                                        <div class="mu-single-gallery-info-inner">
                                                            <h4>Image Title</h4>
                                                            <p>Sports</p>
                                                            <a href="<?= base_url() ?>static/assets/img/gallery/FB_IMG_1525973783089.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                            <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                        </div>
                                                    </div>             
                                                </div>
                                            </div> 
                                        </li>
                                        <!-- start single gallery image -->
                                        <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                                            <div class="mu-single-gallery">                  
                                                <div class="mu-single-gallery-item">
                                                    <div class="mu-single-gallery-img">
                                                        <a href="#"><img alt="img" src="<?= base_url() ?>static/assets/img/gallery/FB_IMG_1525973866192.jpg"></a>
                                                    </div>
                                                    <div class="mu-single-gallery-info">
                                                        <div class="mu-single-gallery-info-inner">
                                                            <h4>Image Title</h4>
                                                            <p>Sports</p>
                                                            <a href="<?= base_url() ?>static/assets/img/gallery/FB_IMG_1525973866192.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                            <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                        </div>
                                                    </div>             
                                                </div>
                                            </div> 
                                        </li>
                                        <!-- start single gallery image -->
                                        <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                                            <div class="mu-single-gallery">                  
                                                <div class="mu-single-gallery-item">
                                                    <div class="mu-single-gallery-img">
                                                        <a href="#"><img alt="img" src="<?= base_url() ?>static/assets/img/gallery/FB_IMG_1525974005531.jpg"></a>
                                                    </div>
                                                    <div class="mu-single-gallery-info">
                                                        <div class="mu-single-gallery-info-inner">
                                                            <h4>Image Title</h4>
                                                            <p>Sports</p>
                                                            <a href="<?= base_url() ?>static/assets/img/gallery/FB_IMG_1525974005531.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                            <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                        </div>
                                                    </div>             
                                                </div>
                                            </div> 
                                        </li>
                                        <!-- start single gallery image -->
                                        <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                                            <div class="mu-single-gallery">                  
                                                <div class="mu-single-gallery-item">
                                                    <div class="mu-single-gallery-img">
                                                        <a href="#"><img alt="img" src="<?= base_url() ?>static/assets/img/gallery/Imagen1.jpg"></a>
                                                    </div>
                                                    <div class="mu-single-gallery-info">
                                                        <div class="mu-single-gallery-info-inner">
                                                            <h4>Image Title</h4>
                                                            <p>Sports</p>
                                                            <a href="<?= base_url() ?>static/assets/img/gallery/Imagen1.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                            <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                        </div>
                                                    </div>             
                                                </div>
                                            </div> 
                                        </li>
                                        <!-- start single gallery image -->
                                        <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                                            <div class="mu-single-gallery">                  
                                                <div class="mu-single-gallery-item">
                                                    <div class="mu-single-gallery-img">
                                                        <a href="#"><img alt="img" src="<?= base_url() ?>static/assets/img/gallery/imrc.png"></a>
                                                    </div>
                                                    <div class="mu-single-gallery-info">
                                                        <div class="mu-single-gallery-info-inner">
                                                            <h4>Image Title</h4>
                                                            <p>Sports</p>
                                                            <a href="<?= base_url() ?>static/assets/img/gallery/imrc.png" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                            <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                        </div>
                                                    </div>             
                                                </div>
                                            </div> 
                                        </li>
                                        <!-- start single gallery image -->
                                        <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                                            <div class="mu-single-gallery">                  
                                                <div class="mu-single-gallery-item">
                                                    <div class="mu-single-gallery-img">
                                                        <a href="#"><img alt="img" src="<?= base_url() ?>static/assets/img/gallery/tr.jpg"></a>
                                                    </div>
                                                    <div class="mu-single-gallery-info">
                                                        <div class="mu-single-gallery-info-inner">
                                                            <h4>Image Title</h4>
                                                            <p>Sports</p>
                                                            <a href="<?= base_url() ?>static/assets/img/gallery/tr.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                            <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                        </div>
                                                    </div>             
                                                </div>
                                            </div> 
                                        </li>
                                        <!-- start single gallery image -->
                                        <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                                            <div class="mu-single-gallery">                  
                                                <div class="mu-single-gallery-item">
                                                    <div class="mu-single-gallery-img">
                                                        <a href="#"><img alt="img" src="<?= base_url() ?>static/assets/img/gallery/WhatsApp Image 2017-08-31 at 12.45.13 PM.jpeg"></a>
                                                    </div>
                                                    <div class="mu-single-gallery-info">
                                                        <div class="mu-single-gallery-info-inner">
                                                            <h4>Image Title</h4>
                                                            <p>Sports</p>
                                                            <a href="<?= base_url() ?>static/assets/img/gallery/WhatsApp Image 2017-08-31 at 12.45.13 PM.jpeg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                            <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                        </div>
                                                    </div>             
                                                </div>
                                            </div> 
                                        </li>
                                        <!-- start single gallery image -->
                                        <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                                            <div class="mu-single-gallery">                  
                                                <div class="mu-single-gallery-item">
                                                    <div class="mu-single-gallery-img">
                                                        <a href="#"><img alt="img" src="<?= base_url() ?>static/assets/img/gallery/WhatsApp Image 2018-09-30 at 10.20.38 AM.jpeg"></a>
                                                    </div>
                                                    <div class="mu-single-gallery-info">
                                                        <div class="mu-single-gallery-info-inner">
                                                            <h4>Image Title</h4>
                                                            <p>Sports</p>
                                                            <a href="<?= base_url() ?>static/assets/img/gallery/WhatsApp Image 2018-09-30 at 10.20.38 AM.jpeg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                            <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                        </div>
                                                    </div>             
                                                </div>
                                            </div> 
                                        </li>
                                        <!-- start single gallery image -->
                                        <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                                            <div class="mu-single-gallery">                  
                                                <div class="mu-single-gallery-item">
                                                    <div class="mu-single-gallery-img">
                                                        <a href="#"><img alt="img" src="<?= base_url() ?>static/assets/img/gallery/1.jpg"></a>
                                                    </div>
                                                    <div class="mu-single-gallery-info">
                                                        <div class="mu-single-gallery-info-inner">
                                                            <h4>Image Title</h4>
                                                            <p>Sports</p>
                                                            <a href="<?= base_url() ?>static/assets/img/gallery/1.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                            <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                        </div>
                                                    </div>             
                                                </div>
                                            </div> 
                                        </li>
                                        <!-- start single gallery image -->
                                        <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                                            <div class="mu-single-gallery">                  
                                                <div class="mu-single-gallery-item">
                                                    <div class="mu-single-gallery-img">
                                                        <a href="#"><img alt="img" src="<?= base_url() ?>static/assets/img/gallery/2.jpg"></a>
                                                    </div>
                                                    <div class="mu-single-gallery-info">
                                                        <div class="mu-single-gallery-info-inner">
                                                            <h4>Image Title</h4>
                                                            <p>Sports</p>
                                                            <a href="<?= base_url() ?>static/assets/img/gallery/2.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                            <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                        </div>
                                                    </div>             
                                                </div>
                                            </div> 
                                        </li>
                                        <!-- start single gallery image -->
                                        <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                                            <div class="mu-single-gallery">                  
                                                <div class="mu-single-gallery-item">
                                                    <div class="mu-single-gallery-img">
                                                        <a href="#"><img alt="img" src="<?= base_url() ?>static/assets/img/gallery/3.jpg"></a>
                                                    </div>
                                                    <div class="mu-single-gallery-info">
                                                        <div class="mu-single-gallery-info-inner">
                                                            <h4>Image Title</h4>
                                                            <p>Sports</p>
                                                            <a href="<?= base_url() ?>static/assets/img/gallery/3.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                            <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                        </div>
                                                    </div>             
                                                </div>
                                            </div> 
                                        </li>
                                        <!-- start single gallery image -->
                                        <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                                            <div class="mu-single-gallery">                  
                                                <div class="mu-single-gallery-item">
                                                    <div class="mu-single-gallery-img">
                                                        <a href="#"><img alt="img" src="<?= base_url() ?>static/assets/img/gallery/4.jpg"></a>
                                                    </div>
                                                    <div class="mu-single-gallery-info">
                                                        <div class="mu-single-gallery-info-inner">
                                                            <h4>Image Title</h4>
                                                            <p>Sports</p>
                                                            <a href="<?= base_url() ?>static/assets/img/gallery/4.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                            <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                        </div>
                                                    </div>             
                                                </div>
                                            </div> 
                                        </li>
                                        <!-- start single gallery image -->
                                        <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                                            <div class="mu-single-gallery">                  
                                                <div class="mu-single-gallery-item">
                                                    <div class="mu-single-gallery-img">
                                                        <a href="#"><img alt="img" src="<?= base_url() ?>static/assets/img/gallery/5.jpg"></a>
                                                    </div>
                                                    <div class="mu-single-gallery-info">
                                                        <div class="mu-single-gallery-info-inner">
                                                            <h4>Image Title</h4>
                                                            <p>Sports</p>
                                                            <a href="<?= base_url() ?>static/assets/img/gallery/5.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                            <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                        </div>
                                                    </div>             
                                                </div>
                                            </div> 
                                        </li>
                                        <!-- start single gallery image -->
                                        <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                                            <div class="mu-single-gallery">                  
                                                <div class="mu-single-gallery-item">
                                                    <div class="mu-single-gallery-img">
                                                        <a href="#"><img alt="img" src="<?= base_url() ?>static/assets/img/gallery/6.jpg"></a>
                                                    </div>
                                                    <div class="mu-single-gallery-info">
                                                        <div class="mu-single-gallery-info-inner">
                                                            <h4>Image Title</h4>
                                                            <p>Sports</p>
                                                            <a href="<?= base_url() ?>static/assets/img/gallery/6.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                            <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                        </div>
                                                    </div>             
                                                </div>
                                            </div> 
                                        </li>
                                        <!-- start single gallery image -->
                                        <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                                            <div class="mu-single-gallery">                  
                                                <div class="mu-single-gallery-item">
                                                    <div class="mu-single-gallery-img">
                                                        <a href="#"><img alt="img" src="<?= base_url() ?>static/assets/img/gallery/7.jpg"></a>
                                                    </div>
                                                    <div class="mu-single-gallery-info">
                                                        <div class="mu-single-gallery-info-inner">
                                                            <h4>Image Title</h4>
                                                            <p>Sports</p>
                                                            <a href="<?= base_url() ?>static/assets/img/gallery/8.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                            <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                        </div>
                                                    </div>             
                                                </div>
                                            </div> 
                                        </li>
                                        <!-- start single gallery image -->
                                        <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                                            <div class="mu-single-gallery">                  
                                                <div class="mu-single-gallery-item">
                                                    <div class="mu-single-gallery-img">
                                                        <a href="#"><img alt="img" src="<?= base_url() ?>static/assets/img/gallery/9.jpg"></a>
                                                    </div>
                                                    <div class="mu-single-gallery-info">
                                                        <div class="mu-single-gallery-info-inner">
                                                            <h4>Image Title</h4>
                                                            <p>Sports</p>
                                                            <a href="<?= base_url() ?>static/assets/img/gallery/9.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                            <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                        </div>
                                                    </div>             
                                                </div>
                                            </div> 
                                        </li>
                                        <!-- start single gallery image -->
                                        <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                                            <div class="mu-single-gallery">                  
                                                <div class="mu-single-gallery-item">
                                                    <div class="mu-single-gallery-img">
                                                        <a href="#"><img alt="img" src="<?= base_url() ?>static/assets/img/gallery/10.jpg"></a>
                                                    </div>
                                                    <div class="mu-single-gallery-info">
                                                        <div class="mu-single-gallery-info-inner">
                                                            <h4>Image Title</h4>
                                                            <p>Sports</p>
                                                            <a href="<?= base_url() ?>static/assets/img/gallery/10.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                            <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                        </div>
                                                    </div>             
                                                </div>
                                            </div> 
                                        </li>
                                        <!-- start single gallery image -->
                                        <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                                            <div class="mu-single-gallery">                  
                                                <div class="mu-single-gallery-item">
                                                    <div class="mu-single-gallery-img">
                                                        <a href="#"><img alt="img" src="<?= base_url() ?>static/assets/img/gallery/11.jpg"></a>
                                                    </div>
                                                    <div class="mu-single-gallery-info">
                                                        <div class="mu-single-gallery-info-inner">
                                                            <h4>Image Title</h4>
                                                            <p>Sports</p>
                                                            <a href="<?= base_url() ?>static/assets/img/gallery/11.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                            <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                        </div>
                                                    </div>             
                                                </div>
                                            </div> 
                                        </li>
                                        <!-- start single gallery image -->
                                        <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                                            <div class="mu-single-gallery">                  
                                                <div class="mu-single-gallery-item">
                                                    <div class="mu-single-gallery-img">
                                                        <a href="#"><img alt="img" src="<?= base_url() ?>static/assets/img/gallery/12.jpg"></a>
                                                    </div>
                                                    <div class="mu-single-gallery-info">
                                                        <div class="mu-single-gallery-info-inner">
                                                            <h4>Image Title</h4>
                                                            <p>Sports</p>
                                                            <a href="<?= base_url() ?>static/assets/img/gallery/12.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                            <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                        </div>
                                                    </div>             
                                                </div>
                                            </div> 
                                        </li>
                                        <!-- start single gallery image -->
                                        <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                                            <div class="mu-single-gallery">                  
                                                <div class="mu-single-gallery-item">
                                                    <div class="mu-single-gallery-img">
                                                        <a href="#"><img alt="img" src="<?= base_url() ?>static/assets/img/gallery/13.jpg"></a>
                                                    </div>
                                                    <div class="mu-single-gallery-info">
                                                        <div class="mu-single-gallery-info-inner">
                                                            <h4>Image Title</h4>
                                                            <p>Sports</p>
                                                            <a href="<?= base_url() ?>static/assets/img/gallery/13.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                            <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                        </div>
                                                    </div>             
                                                </div>
                                            </div> 
                                        </li>
                                        <!-- start single gallery image -->
                                        <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                                            <div class="mu-single-gallery">                  
                                                <div class="mu-single-gallery-item">
                                                    <div class="mu-single-gallery-img">
                                                        <a href="#"><img alt="img" src="<?= base_url() ?>static/assets/img/gallery/14.jpg"></a>
                                                    </div>
                                                    <div class="mu-single-gallery-info">
                                                        <div class="mu-single-gallery-info-inner">
                                                            <h4>Image Title</h4>
                                                            <p>Sports</p>
                                                            <a href="<?= base_url() ?>static/assets/img/gallery/14.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                            <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                        </div>
                                                    </div>             
                                                </div>
                                            </div> 
                                        </li>
                                        <!-- start single gallery image -->
                                        <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                                            <div class="mu-single-gallery">                  
                                                <div class="mu-single-gallery-item">
                                                    <div class="mu-single-gallery-img">
                                                        <a href="#"><img alt="img" src="<?= base_url() ?>static/assets/img/gallery/15.jpg"></a>
                                                    </div>
                                                    <div class="mu-single-gallery-info">
                                                        <div class="mu-single-gallery-info-inner">
                                                            <h4>Image Title</h4>
                                                            <p>Sports</p>
                                                            <a href="<?= base_url() ?>static/assets/img/gallery/15.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                            <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                        </div>
                                                    </div>             
                                                </div>
                                            </div> 
                                        </li>
                                        <!-- start single gallery image -->
                                        <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                                            <div class="mu-single-gallery">                  
                                                <div class="mu-single-gallery-item">
                                                    <div class="mu-single-gallery-img">
                                                        <a href="#"><img alt="img" src="<?= base_url() ?>static/assets/img/gallery/16.jpg"></a>
                                                    </div>
                                                    <div class="mu-single-gallery-info">
                                                        <div class="mu-single-gallery-info-inner">
                                                            <h4>Image Title</h4>
                                                            <p>Sports</p>
                                                            <a href="<?= base_url() ?>static/assets/img/gallery/16.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                            <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                        </div>
                                                    </div>             
                                                </div>
                                            </div> 
                                        </li>
                                        <!-- start single gallery image -->
                                        <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                                            <div class="mu-single-gallery">                  
                                                <div class="mu-single-gallery-item">
                                                    <div class="mu-single-gallery-img">
                                                        <a href="#"><img alt="img" src="<?= base_url() ?>static/assets/img/gallery/17.jpg"></a>
                                                    </div>
                                                    <div class="mu-single-gallery-info">
                                                        <div class="mu-single-gallery-info-inner">
                                                            <h4>Image Title</h4>
                                                            <p>Sports</p>
                                                            <a href="<?= base_url() ?>static/assets/img/gallery/17.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                            <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                        </div>
                                                    </div>             
                                                </div>
                                            </div> 
                                        </li>
                                        <!-- start single gallery image -->
                                        <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                                            <div class="mu-single-gallery">                  
                                                <div class="mu-single-gallery-item">
                                                    <div class="mu-single-gallery-img">
                                                        <a href="#"><img alt="img" src="<?= base_url() ?>static/assets/img/gallery/18.jpg"></a>
                                                    </div>
                                                    <div class="mu-single-gallery-info">
                                                        <div class="mu-single-gallery-info-inner">
                                                            <h4>Image Title</h4>
                                                            <p>Sports</p>
                                                            <a href="<?= base_url() ?>static/assets/img/gallery/18.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                            <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                        </div>
                                                    </div>             
                                                </div>
                                            </div> 
                                        </li>
                                        <!-- start single gallery image -->
                                        <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                                            <div class="mu-single-gallery">                  
                                                <div class="mu-single-gallery-item">
                                                    <div class="mu-single-gallery-img">
                                                        <a href="#"><img alt="img" src="<?= base_url() ?>static/assets/img/gallery/19.jpg"></a>
                                                    </div>
                                                    <div class="mu-single-gallery-info">
                                                        <div class="mu-single-gallery-info-inner">
                                                            <h4>Image Title</h4>
                                                            <p>Sports</p>
                                                            <a href="<?= base_url() ?>static/assets/img/gallery/19.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                            <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                        </div>
                                                    </div>             
                                                </div>
                                            </div> 
                                        </li>
                                        <!-- start single gallery image -->
                                        <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                                            <div class="mu-single-gallery">                  
                                                <div class="mu-single-gallery-item">
                                                    <div class="mu-single-gallery-img">
                                                        <a href="#"><img alt="img" src="<?= base_url() ?>static/assets/img/gallery/20.jpg"></a>
                                                    </div>
                                                    <div class="mu-single-gallery-info">
                                                        <div class="mu-single-gallery-info-inner">
                                                            <h4>Image Title</h4>
                                                            <p>Sports</p>
                                                            <a href="<?= base_url() ?>static/assets/img/gallery/20.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                            <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                        </div>
                                                    </div>             
                                                </div>
                                            </div> 
                                        </li>
                                        <!-- start single gallery image -->
                                        <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                                            <div class="mu-single-gallery">                  
                                                <div class="mu-single-gallery-item">
                                                    <div class="mu-single-gallery-img">
                                                        <a href="#"><img alt="img" src="<?= base_url() ?>static/assets/img/gallery/21.jpg"></a>
                                                    </div>
                                                    <div class="mu-single-gallery-info">
                                                        <div class="mu-single-gallery-info-inner">
                                                            <h4>Image Title</h4>
                                                            <p>Sports</p>
                                                            <a href="<?= base_url() ?>static/assets/img/gallery/21.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                            <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                        </div>
                                                    </div>             
                                                </div>
                                            </div> 
                                        </li>
                                        <!-- start single gallery image -->
                                        <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                                            <div class="mu-single-gallery">                  
                                                <div class="mu-single-gallery-item">
                                                    <div class="mu-single-gallery-img">
                                                        <a href="#"><img alt="img" src="<?= base_url() ?>static/assets/img/gallery/22.jpg"></a>
                                                    </div>
                                                    <div class="mu-single-gallery-info">
                                                        <div class="mu-single-gallery-info-inner">
                                                            <h4>Image Title</h4>
                                                            <p>Sports</p>
                                                            <a href="<?= base_url() ?>static/assets/img/gallery/22.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                            <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                        </div>
                                                    </div>             
                                                </div>
                                            </div> 
                                        </li>
                                        <!-- start single gallery image -->
                                        <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                                            <div class="mu-single-gallery">                  
                                                <div class="mu-single-gallery-item">
                                                    <div class="mu-single-gallery-img">
                                                        <a href="#"><img alt="img" src="<?= base_url() ?>static/assets/img/gallery/23.jpg"></a>
                                                    </div>
                                                    <div class="mu-single-gallery-info">
                                                        <div class="mu-single-gallery-info-inner">
                                                            <h4>Image Title</h4>
                                                            <p>Sports</p>
                                                            <a href="<?= base_url() ?>static/assets/img/gallery/23.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                            <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                        </div>
                                                    </div>             
                                                </div>
                                            </div> 
                                        </li>
                                        <!-- start single gallery image -->
                                        <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                                            <div class="mu-single-gallery">                  
                                                <div class="mu-single-gallery-item">
                                                    <div class="mu-single-gallery-img">
                                                        <a href="#"><img alt="img" src="<?= base_url() ?>static/assets/img/gallery/24.jpg"></a>
                                                    </div>
                                                    <div class="mu-single-gallery-info">
                                                        <div class="mu-single-gallery-info-inner">
                                                            <h4>Image Title</h4>
                                                            <p>Sports</p>
                                                            <a href="<?= base_url() ?>static/assets/img/gallery/24.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                            <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                        </div>
                                                    </div>             
                                                </div>
                                            </div> 
                                        </li>
                                        <!-- start single gallery image -->
                                        <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                                            <div class="mu-single-gallery">                  
                                                <div class="mu-single-gallery-item">
                                                    <div class="mu-single-gallery-img">
                                                        <a href="#"><img alt="img" src="<?= base_url() ?>static/assets/img/gallery/25.jpg"></a>
                                                    </div>
                                                    <div class="mu-single-gallery-info">
                                                        <div class="mu-single-gallery-info-inner">
                                                            <h4>Image Title</h4>
                                                            <p>Sports</p>
                                                            <a href="<?= base_url() ?>static/assets/img/gallery/25.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                            <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                        </div>
                                                    </div>             
                                                </div>
                                            </div> 
                                        </li>
                                        <!-- start single gallery image -->
                                        <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                                            <div class="mu-single-gallery">                  
                                                <div class="mu-single-gallery-item">
                                                    <div class="mu-single-gallery-img">
                                                        <a href="#"><img alt="img" src="<?= base_url() ?>static/assets/img/gallery/26.jpg"></a>
                                                    </div>
                                                    <div class="mu-single-gallery-info">
                                                        <div class="mu-single-gallery-info-inner">
                                                            <h4>Image Title</h4>
                                                            <p>Sports</p>
                                                            <a href="<?= base_url() ?>static/assets/img/gallery/26.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                            <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                        </div>
                                                    </div>             
                                                </div>
                                            </div> 
                                        </li>
                                        <!-- start single gallery image -->
                                        <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                                            <div class="mu-single-gallery">                  
                                                <div class="mu-single-gallery-item">
                                                    <div class="mu-single-gallery-img">
                                                        <a href="#"><img alt="img" src="<?= base_url() ?>static/assets/img/gallery/27.jpg"></a>
                                                    </div>
                                                    <div class="mu-single-gallery-info">
                                                        <div class="mu-single-gallery-info-inner">
                                                            <h4>Image Title</h4>
                                                            <p>Sports</p>
                                                            <a href="<?= base_url() ?>static/assets/img/gallery/27.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                            <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                        </div>
                                                    </div>             
                                                </div>
                                            </div> 
                                        </li>
                                        <!-- start single gallery image -->
                                        <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                                            <div class="mu-single-gallery">                  
                                                <div class="mu-single-gallery-item">
                                                    <div class="mu-single-gallery-img">
                                                        <a href="#"><img alt="img" src="<?= base_url() ?>static/assets/img/gallery/28.jpg"></a>
                                                    </div>
                                                    <div class="mu-single-gallery-info">
                                                        <div class="mu-single-gallery-info-inner">
                                                            <h4>Image Title</h4>
                                                            <p>Sports</p>
                                                            <a href="<?= base_url() ?>static/assets/img/gallery/28.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                            <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                        </div>
                                                    </div>             
                                                </div>
                                            </div> 
                                        </li>
                                        <!-- start single gallery image -->
                                        <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                                            <div class="mu-single-gallery">                  
                                                <div class="mu-single-gallery-item">
                                                    <div class="mu-single-gallery-img">
                                                        <a href="#"><img alt="img" src="<?= base_url() ?>static/assets/img/gallery/29.jpg"></a>
                                                    </div>
                                                    <div class="mu-single-gallery-info">
                                                        <div class="mu-single-gallery-info-inner">
                                                            <h4>Image Title</h4>
                                                            <p>Sports</p>
                                                            <a href="<?= base_url() ?>static/assets/img/gallery/29.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                            <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                        </div>
                                                    </div>             
                                                </div>
                                            </div> 
                                        </li>
                                        <!-- start single gallery image -->
                                        <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                                            <div class="mu-single-gallery">                  
                                                <div class="mu-single-gallery-item">
                                                    <div class="mu-single-gallery-img">
                                                        <a href="#"><img alt="img" src="<?= base_url() ?>static/assets/img/gallery/30.jpg"></a>
                                                    </div>
                                                    <div class="mu-single-gallery-info">
                                                        <div class="mu-single-gallery-info-inner">
                                                            <h4>Image Title</h4>
                                                            <p>Sports</p>
                                                            <a href="<?= base_url() ?>static/assets/img/gallery/30.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                            <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                        </div>
                                                    </div>             
                                                </div>
                                            </div> 
                                        </li>
                                        <!-- start single gallery image -->
                                        <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                                            <div class="mu-single-gallery">                  
                                                <div class="mu-single-gallery-item">
                                                    <div class="mu-single-gallery-img">
                                                        <a href="#"><img alt="img" src="<?= base_url() ?>static/assets/img/gallery/31.jpg"></a>
                                                    </div>
                                                    <div class="mu-single-gallery-info">
                                                        <div class="mu-single-gallery-info-inner">
                                                            <h4>Image Title</h4>
                                                            <p>Sports</p>
                                                            <a href="<?= base_url() ?>static/assets/img/gallery/31.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                            <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                        </div>
                                                    </div>             
                                                </div>
                                            </div> 
                                        </li>
                                        <!-- start single gallery image -->
                                        <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                                            <div class="mu-single-gallery">                  
                                                <div class="mu-single-gallery-item">
                                                    <div class="mu-single-gallery-img">
                                                        <a href="#"><img alt="img" src="<?= base_url() ?>static/assets/img/gallery/32.jpg"></a>
                                                    </div>
                                                    <div class="mu-single-gallery-info">
                                                        <div class="mu-single-gallery-info-inner">
                                                            <h4>Image Title</h4>
                                                            <p>Sports</p>
                                                            <a href="<?= base_url() ?>static/assets/img/gallery/32.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                            <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                        </div>
                                                    </div>             
                                                </div>
                                            </div> 
                                        </li>
                                    </ul>            
                                </div>
                            </div>
                            <!-- end gallery content -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End gallery  -->


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