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
        <script src="<?= base_url()?>static/js/validacionBeneficiario.js"></script>
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
        <style>
            .ribbon {
                position:absolute;
                top:0;
                right:0;
            }
        </style>
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
                            <form role="form" id="form" action="<?= base_url() ?>usuario/registro_beneficiario/insertar_beneficiario" method="post">
                                <!-- form row -->
                                <div class="row">
<!--                                    <div class="form-group col-lg-6">
                                        <label><h4>Agregar beneficiario</h4></label>
                                        <label><h4>*Campos obligatorios</h4></label>
                                    </div>
                                    <div class="form-group col-lg-6" style="text-align:right;">
                                        <img src="<?= base_url()?>/static/fundacion.jpeg" width="200" height="150">
                                    </div>-->
                                    <div class="form-group col-lg-12 ">
                                        <label><h4>Agregar beneficiario</h4></label>
                                        <br>
                                        <label><h4>*Campos obligatorios</h4></label>
                                    </div>
<!--                                    <div class="form-group col-lg-12" style="text-align:right;">
                                        <img src="<?= base_url()?>/static/fundacion.jpeg" width="200" height="150">
                                    </div>-->
<br>
<br>
<br>
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            <label style="color: blue;">Nombre corto*:</label>
                                            <input type="text" value="" id="nombre" class="form-control" name="nombre"  placeholder="*Campo requerido">
                                            <span class="help-block"></span>

                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="col-lg-6"> 
                                            <label style="color: blue;">Número celular (10 dígitos)*:</label>
                                            <input type="tel" value="" id="telefono1" class="form-control solo-numero" name="telefono1"  placeholder="*Campo requerido">
                                            <span class="help-block"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-6">
                                            <label style="color: blue;">Repetir número celular*:</label>
                                            <input type="tel" value="" id="telefono2" class="form-control solo-numero" name="telefono2"  placeholder="">
                                            <span class="help-block"></span>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="col-lg-6">
                                            <label style="color: blue;">Operador*:</label>
                                            <select name="idoperador" id="idoperador"  class="form-control m-b">
                                                <option>---Seleccione---</option>
                                                <?php
                                                    if (!is_null($operadores)) :
                                                        foreach ($operadores as $operador) :
                                                ?>
                                                <option value="<?= $operador->idoperador?>"><?=$operador->nombre?></option>
                                                <?php
                                                        endforeach;
                                                    endif;
                                                ?>
                                            </select>
                                            <span class="help-block"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-6">
                                            <label style="color: blue;">Paquete*:</label>
                                            <select name="idpaquete" id="idpaquete"  class="form-control m-b">
                                                <option></option>
                                            </select>
                                            <span class="help-block"></span>
                                        </div>
                                        <div class="col-lg-12" id="idrespuesta">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="hr-line-dashed">

                                    </div>
                                    <input type="hidden" value="<?= $idprop?>" id="idpropietario" name="idpropietario">
                                </div>

                                <div class="form-group " style="text-align:center;">
                                    <div class="col-lg-12">
                                        <a class="btn btn-default" style="border-color: blue; color: blue;" href="<?= base_url()?>usuario/beneficiario" >Cancelar</a>
                                        <button
                                            class="btn btn-primary" id="correoEnviado" name="correoEnviado" 
                                            type="button">Guardar</button>
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
