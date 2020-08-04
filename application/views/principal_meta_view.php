<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Page title -->
        <title><?= $titulo ?></title>

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <!--<link rel="shortcut icon" type="image/ico" href="favicon.ico" />-->


        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <!--    <link rel="shortcut icon" type="image/ico" href="favicon.ico" />-->
        <link rel="shortcut icon" href="<?= base_url() ?>static/Logotipo-Super-Recarga-R.png" type="image/x-icon">
        <script src="<?= base_url()?>static/js/jquery-3.3.1.min.js"></script>
        <script src="<?= base_url()?>static/vendor/sweetalert/lib/sweet-alert.min.js"></script>
        <!-- Vendor styles -->
        <link rel="stylesheet" href="<?= base_url() ?>static/vendor/fontawesome/css/font-awesome.css" />
        <link rel="stylesheet" href="<?= base_url() ?>static/vendor/metisMenu/dist/metisMenu.css" />
        <link rel="stylesheet" href="<?= base_url() ?>static/vendor/animate.css/animate.css" />
        <link rel="stylesheet" href="<?= base_url() ?>static/vendor/bootstrap/dist/css/bootstrap.css" />

        <!-- App styles -->
        <link rel="stylesheet" href="<?= base_url() ?>static/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css" />
        <link rel="stylesheet" href="<?= base_url() ?>static/fonts/pe-icon-7-stroke/css/helper.css" />
        <link rel="stylesheet" href="<?= base_url() ?>static/styles/style.css">

        <link rel="stylesheet" href="<?= base_url() ?>static/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css" />
        <link rel="stylesheet" href="<?= base_url() ?>static/fonts/pe-icon-7-stroke/css/helper.css" />
        <link rel="stylesheet" href="<?= base_url() ?>static/styles/loader.css" />
        <link rel="stylesheet" href="<?= base_url() ?>static/styles/style.css">

        <link rel="stylesheet" href="<?= base_url() ?>static/vendor/sweetalert/lib/sweet-alert.css" />
        <link rel="stylesheet" href="<?= base_url() ?>static/vendor/toastr/build/toastr.css" />
    </head>
    <body class="blank">
        <!-- color-line START -->
        <div class="color-line"></div>

        <!-- login-container START -->
        <div class="register-container">
            <!-- row START -->
            <div class="row" style="background-color: white;">
                <!-- col-md-12 START -->
                <div class="col-md-12" style="text-align: center">
                    <img src="<?= base_url()?>/static/cabezaGFCapital.jpg" width="350">
                    <br>
                    <br>
                    <a href="<?= base_url()?>login" class="btn btn-success" style="background-color: #A2C62C">Selecciona tus números</a>
                    <br>
<!--                    <button
                        class="btn btn-success" style="background-color: #A2C62C" 
                        type="button">Selecciona tus números</button>-->
                    <img src="<?= base_url()?>/static/pie.jpeg" width="350">
                    
                    <input type="hidden" value="" id="idpropietario" name="idpropietario">
                    <!-- text-center m-b-mb START -->
                    <!--<div class="text-center m-b-md">
                        <h3>AIDE</h3>
                        <small>Inicia sesion</small>
                    </div>-->
<!--                    <div class="text-center m-b-md">
                        <img src="<?= base_url() ?>static/images/logos/logo_aide_md.png" alt="" class="img-responsive" style="display: block; margin: auto;" />
                        <h3><?= $titulo ?></h3>
                        <small></small>
                    </div>-->
                    <!-- text-center m-b-mb END -->
                    <!-- hpanel START -->
<!--                    <div class="hpanel">
                        <div class="panel-body">
                            <div class="form-group col-lg-12 ">-->
<!--                                <label style="color: blue;"><h4>Bienvenido a SúperRecarga META</h4></label>
                                <br>
                                <label>Olvidate de salir a recargar,</label>
                                <label style="color: blue;">#quedateencasa</label>
                                <br>
                                <br>
                                <label>Es el nuevo servicio de recarga automática para celulares de prepago.</label>
                                <br>
                                <br>
                                <label style="color: blue;"><h5>Lo que siempre pediste</h5></label>
                                <br>
                                <label><h5>*Recargas económicas</h5></label>
                                <label><h5>*Préstamo de nómina sin intereses</h5></label>
                                <label><h5>*No más molestas filas,tiempo pérdido y gastos para ir a recargar</h5></label>
                                <label><h5>*No más cortes de servicio por saldo vencido</h5></label>
                                <label><h5>*No más pago de comisiones adicionales y recargas fallidas</h5></label>
                                <label><h5>*Ahorros en grande con paquetes a la medida y las mejores promociones</h5></label>
                                <br>
                                <br>
                                <label style="color: blue;"><h5>Además...</h5></label>
                                <br>
                                <label><h5>*No cambias de número, equipo ni compañia celular</h5></label>
                                <label><h5>*Puedes incluir en el servicio a familiares y amigos</h5></label>-->
<!--                                <img src="<?= base_url()?>/static/inicio2.jpeg" width="400" height="750">
                            </div>
                            
                            <div class="form-group " style="text-align:center;">
                                <div class="col-lg-12">
                                    <button
                                        class="btn btn-success" id="correoEnviado" name="correoEnviado" style="background-color: #A2C62C" 
                                        type="submit">Selecciona tus números</button>
                                </div>
                            </div>
                        </div>
                    </div>-->
                    <!-- hpanel END -->
                </div>
                <!-- col-md-12 END -->
            </div>
            <!--row END -->

<!--            <div class="row">
                <div class="col-md-12 text-center">
                    <strong><?= app_title() ?></strong><br /><?= app_name() ?> <br/> <?= date("Y") ?>. Todos los Derechos Reservados <br />
                    <br /> <small>Desarrollado por <a href="http://cidtai.uteq.edu.mx">CIDTAI - UTEQ</a></small>
                </div>
            </div>-->
        </div>

        <!-- login-container END -->

        <!-- Vendor scripts -->
        <script src="<?= base_url() ?>static/vendor/jquery/dist/jquery.min.js"></script>
        <script src="<?= base_url() ?>static/vendor/jquery-ui/jquery-ui.min.js"></script>
        <script src="<?= base_url() ?>static/vendor/slimScroll/jquery.slimscroll.min.js"></script>
        <script src="<?= base_url() ?>static/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="<?= base_url() ?>static/vendor/metisMenu/dist/metisMenu.min.js"></script>
        <script src="<?= base_url() ?>static/vendor/iCheck/icheck.min.js"></script>
        <script src="<?= base_url() ?>static/vendor/sparkline/index.js"></script>

        <!--Modales alerts-->
        <script src="<?= base_url() ?>static/vendor/sweetalert/lib/sweet-alert.js"></script>
        <script src="<?= base_url() ?>static/vendor/toastr/build/toastr.min.js"></script>

        <!-- App scripts -->
        <script type="text/javascript">
            function base_url() {
                return "<?= base_url() ?>";
            }
        </script>
        <script src="<?= base_url() ?>static/scripts/homer.js"></script>
        

        <!--validacion de contraseña -->

    </body>
</html>
