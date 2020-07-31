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
        <link rel="icon" href="<?= base_url() ?>static\images\logos\logo_aide_ico.ico" type="image/x-icon">
        <script src="<?= base_url()?>static/js/jquery-3.3.1.min.js"></script>
        <script src="<?= base_url()?>static/vendor/sweetalert/lib/sweet-alert.min.js"></script>
        <!--<script src="<?= base_url()?>Superrecarga/static/js/validacionRegistro.js"></script>-->
        <script src="<?= base_url()?>static/js/validacionPassword.js"></script>
        <!-- Vendor styles -->
        <link rel="stylesheet" href="<?= base_url() ?>static/vendor/fontawesome/css/font-awesome.css" />
        <link rel="stylesheet" href="<?= base_url() ?>static/vendor/metisMenu/dist/metisMenu.css" />
        <link rel="stylesheet" href="<?= base_url() ?>static/vendor/animate.css/animate.css" />
        <link rel="stylesheet" href="<?= base_url() ?>static/vendor/bootstrap/dist/css/bootstrap.css" />

        <link rel="stylesheet" href="<?= base_url() ?>static/vendor/sweetalert/lib/sweet-alert.css" />
        <link rel="stylesheet" href="<?= base_url() ?>static/vendor/toastr/build/toastr.min.css" />
        <link rel="stylesheet" href="<?= base_url() ?>static/vendor/select2-3.5.2/select2.css" />
        <link rel="stylesheet" href="<?= base_url() ?>static/vendor/select2-bootstrap/select2-bootstrap.css" />
         <link href="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/themes/blitzer/jquery-ui.css" rel="stylesheet" type="text/css">
        <!-- App styles -->
        <link rel="stylesheet" href="<?= base_url() ?>static/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css" />
        <link rel="stylesheet" href="<?= base_url() ?>static/fonts/pe-icon-7-stroke/css/helper.css" />
        <link rel="stylesheet" href="<?= base_url() ?>static/styles/loader.css" />
        <link rel="stylesheet" href="<?= base_url() ?>static/styles/style.css">
        <!-- stylios y scrips para visualizar los documentos
        -->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <!--<link rel="stylesheet" href="/resources/demos/style.css">-->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script> 
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </head>
    <body class="blank" style="background-image: url('<?=  base_url()?>static/backgraund.jpg');">
        <!-- color-line START -->
        <div class="color-line"></div>

        <!-- login-container START -->
        <div class="register-container">
            <!-- row START -->
            <div class="row">
                <!-- col-md-12 START -->
                <div class="col-md-12">
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
                    <div class="hpanel">
                        <div class="panel-body" style="background-color: #F2F2F2;">
                            <!-- form start -->
                            <form role="form" id="form" action="<?= base_url() ?>cambio/cambio_post" method="post">
                                <!-- form row -->
                                <div class="row">
                                    <div class="form-group col-lg-12" style="text-align: center;">
                                        <label><h2>¡Bienvenido!</h2></label>
                                        <br>
                                        <label><h4>Para poder continuar por favor actualiza tu contraseña</h4></label>
                                    </div>
                                    <div class="form-group ">
                                        <div class="col-lg-12"> 
                                            <label style="color: blue;">Ingresa tu nueva contraseña*:</label>
                                            <input type="password" value="" id="password1" class="form-control solo-numero" name="password1"  placeholder="*Campo requerido">
                                            <span class="help-block"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            <label style="color: blue;">Repite tu contraseña*:</label>
                                            <input type="password" value="" id="password2" class="form-control solo-numero" name="password2"  placeholder="*Campo requerido">
                                            <span class="help-block"></span>
                                        </div>
                                    </div>
                                <div class="col-lg-12">
                                    <div class="hr-line-dashed">

                                    </div>
                                </div>

                                <div class="form-group " style="text-align:center;">
                                    <div class="col-lg-12">
                                        <button
                                            class="btn btn-primary" id="correoEnviado" name="correoEnviado" 
                                            type="submit">Guardar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
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
        <script src="<?= base_url() ?>static/vendor/jquery-flot/jquery.flot.js"></script>
        <script src="<?= base_url() ?>static/vendor/jquery-flot/jquery.flot.resize.js"></script>
        <script src="<?= base_url() ?>static/vendor/jquery-flot/jquery.flot.pie.js"></script>
        <script src="<?= base_url() ?>static/vendor/flot.curvedlines/curvedLines.js"></script>
        <script src="<?= base_url() ?>static/vendor/jquery.flot.spline/index.js"></script>
        <script src="<?= base_url() ?>static/vendor/metisMenu/dist/metisMenu.min.js"></script>
        <script src="<?= base_url() ?>static/vendor/iCheck/icheck.min.js"></script>
        <script src="<?= base_url() ?>static/vendor/peity/jquery.peity.min.js"></script>
        <script src="<?= base_url() ?>static/vendor/sparkline/index.js"></script>
        
        
        <script src="<?= base_url() ?>static/vendor/select2-3.5.2/select2.min.js"></script>

        <script src="<?= base_url() ?>static/vendor/datatables/media/js/jquery.dataTables.js"></script>
        <script src="<?= base_url() ?>static/vendor/datatables.net-bs/js/dataTables.bootstrap.js"></script>

        <!-- DataTables buttons scripts -->
        <script src="<?= base_url() ?>static/vendor/pdfmake/build/pdfmake.min.js"></script>
        <script src="<?= base_url() ?>static/vendor/pdfmake/build/vfs_fonts.js"></script>
        <script src="<?= base_url() ?>static/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="<?= base_url() ?>static/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="<?= base_url() ?>static/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="<?= base_url() ?>static/vendor/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>

        <!--Alertas scripts-->
        <script src="<?= base_url() ?>static/vendor/sweetalert/lib/sweet-alert.js"></script>
        <script src="<?= base_url() ?>static/vendor/toastr/build/toastr.min.js"></script>

        <!-- App scripts -->
        <script src="<?= base_url() ?>static/scripts/homer.js"></script>
        <script src="<?= base_url() ?>static/scripts/app/libs/common.js"></script>
        

        <!-- App scripts -->
        <script type="text/javascript">
            function base_url() {
                return "<?= base_url() ?>";
                jQuery(document).ready(function ($) {
                    loading();
                });
            }
        </script>
        <script>
            $(function () {
                $(".js-source-states").select2();
                $(".js-source-states-2").select2();
            });
        </script>
        <script src="<?= base_url() ?>static/scripts/homer.js"></script>
        <script src="<?= base_url() ?>static/scripts/app/libs/common.js"></script>

        <!--validacion de contraseña -->

    </body>
</html>
