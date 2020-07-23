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
        <script src="<?= base_url()?>static/js/jquery-3.3.1.min.js"></script>
        <script src="<?= base_url()?>static/vendor/sweetalert/lib/sweet-alert.min.js"></script>
        <script src="<?= base_url()?>static/js/eliminarBeneficiario.js"></script>
        <!-- Page title -->
        <title><?= $titulo ?></title>

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <!--<link rel="shortcut icon" type="image/ico" href="favicon.ico" />-->


        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <!--    <link rel="shortcut icon" type="image/ico" href="favicon.ico" />-->
        <link rel="shortcut icon" href="<?= base_url() ?>static/Logotipo-Super-Recarga-R.png" type="image/x-icon">
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
                        <div class="panel-body">
                            <div class="row">
                                <div class="form-group col-lg-12">
<!--                                    <label><h4>Hola José Rubén</h4></label>-->
                                    <label><h4>Hola <?= $nombre?></h4></label>
                                    <br>
                                    <label>Tienes <?= $telefonos->telefonos?> números celulares agregados</label>
                                    <br>
                                    <div class="form-group " style="text-align:right;">
                                        <a href="<?=  base_url()?>usuario/registro_beneficiario">
                                            <button class="btn btn-primary" id="correoEnviado" name="correoEnviado" type="button">Agregar celular</button>
                                        </a>
                                    </div>
                                    <div class="form-group " style="text-align:right;">
                                        <!--<a href="http://superrecarga.website/SuperRecargaMeta/app/logout">-->
                                        <a href="<?= base_url()?>app/logout">
                                            <button class="btn btn-danger" id="" name="" type="button">Salir</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <label style="color: white">Teléfonos registrados</label>
                        
                        <div class="panel-body" style="background-color: #F2F2F2;">
                            <div class="row">
                                <?php
                                if(!is_null($beneficiarios)){
                                    foreach ($beneficiarios as $beneficiario) :
                                ?>
                                <div class="col-sm-6 well well-lg" style="text-align: center">
                                    <div class="form-group" style="text-align: right">
                                        <button class="btn btn-danger eliminacion" data-id="<?= $beneficiario->idbeneficiario?>" type="button">
                                            <i class="fa fa-minus-circle"></i> 
                                            <span class="bold"> </span>
                                        </button>
                                    </div>
                                    <div class="form-group">
                                        <img src="<?= base_url()?>/static/icono-user.png" width="100" height="75">
                                    </div>
                                    <div class="form-group">
                                        <label><?= $beneficiario->nombrecorto?></label>
                                        <br>
                                        <label>$<?= $beneficiario->preciopaquete?></label>
                                        <label><h6>MXM</h6></label>
                                        <br>
                                        <label><?= $beneficiario->telefono?></label>
                                        <br>
                                        <label><?= $beneficiario->nompaquete?> <?=$beneficiario->nomoperador?></label>
                                    </div>
                                </div>
                                <?php
                                    endforeach;
                                }else {?>
                                <label>Sin registros</label>
                                <?php
                                }
                                ?>
                            </div>
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
