<?php
/**
 * Fragmento de inicio de la aplicacion
 *
 * Fragmento que contiene las gráficas e información que se muestra justo despues de 
 * inciar sesion
 * 
 * @since      1.0
 * @version    1.0
 * @internal   El uso de este fragmento solo es posible por medio de una vista            
 * @package    application.views
 * @subpackage app.private.fragments.modules
 * @author     CIDTAI - UTEQ Dev Team <cidtai@uteq.edu.mx>
 * @uses       ./application/views/app/private/main_view.php
 */
?>

<!-- ROW START -->
<div class="row">

    <!-- COL-LG-12 START -->
    <div class="col-lg-12">
        
        <div class="hpanel hblue">
            <!-- PANEL-HEADING START -->
            <div class="panel-heading" style="font-family: 'Soberana Sans'; font-size: 2rem;">
                <div class="panel-tools">
                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                </div>
                Registrar foto
            </div>
            <!-- PANEL-HEADING START -->
            
            <div class="panel-body" style="font-family: 'Soberana Sans'; font-size: 1.5rem;">
                <?php
                if(is_null($contenido)){
                ?>
                <form name="simpleForm" novalidate id="simpleForm" action="<?= base_url() ?>app/nanoarte/subirImagen" method="post" enctype="multipart/form-data">
                    <div class="form-group col-lg-12">
                        <label>Nombre artístico</label>
                        <input type="text" value="" id="nom_art" class="form-control" placeholder="*Campo requerido" name="nom_art">
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Descripción artística</label>
                        <input type="text" value="" id="descripcion" class="form-control" placeholder="*Campo requerido" name="descripcion">
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Resumen</label>
                        <input type="text" value="" id="resumen" class="form-control" placeholder="*Campo requerido" name="resumen">
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Autor</label>
                        <input type="text" value="" id="autor" class="form-control" placeholder="*Campo requerido" name="autor">
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Agradecimiento</label>
                        <input type="text" value="" id="agrade" class="form-control" placeholder="*Campo requerido" name="agrade">
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Imagen</label>
                        <input type="file" value="" id="imagen" class="form-control" name="imagen">
                    </div>
                    <div class="col-sm-12">
                        <button class="btn btn-sm btn-primary m-t-n-xs" id="botonMod" name="botonMod" type="submit">
                            <strong><i class="fa fa-file-text"> </i> Agregar</strong></button>
                    </div>
                </form>
                <?php
                }
                else{
                ?>
                <form name="simpleForm" novalidate id="simpleForm" action="<?= base_url() ?>app/nanoarte/subir" method="post" enctype="multipart/form-data">
                    <div class="form-group col-lg-12">
                        <label>Nombre artístico</label>
                        <input type="text" value="<?=$contenido->nombre_artistico?>" id="nom_art" class="form-control" placeholder="*Campo requerido" name="nom_art">
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Descripción artística</label>
                        <input type="text" value="<?=$contenido->descripcion?>" id="descripcion" class="form-control" placeholder="*Campo requerido" name="descripcion">
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Resumen</label>
                        <input type="text" value="<?=$contenido->resumen?>" id="resumen" class="form-control" placeholder="*Campo requerido" name="resumen">
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Autor</label>
                        <input type="text" value="<?=$contenido->autor?>" id="autor" class="form-control" placeholder="*Campo requerido" name="autor">
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Agradecimiento</label>
                        <input type="text" value="<?=$contenido->agradecimiento?>" id="agrade" class="form-control" placeholder="*Campo requerido" name="agrade">
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Imagen</label>
                        <input type="file" value="" id="userfile" class="form-control" name="userfile">
                    </div>
                    <div class="col-sm-12">
                        <button class="btn btn-sm btn-info m-t-n-xs" id="botonMod" name="botonMod" type="submit">
                            <strong><i class="fa fa-paste"> </i> Editar</strong></button>
                    </div>
                </form>
                <?php
                }
                ?>
            </div>
            <!-- PANEL-BODY END -->
        </div>

        <!-- HPANEL HBLUE START -->
        <div class="hpanel hblue">

            <!-- PANEL-HEADING START -->
            <div class="panel-heading" style="font-family: 'Soberana Sans'; font-size: 2rem;">
                <div class="panel-tools">
                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                </div>
                Información Nanoarte
            </div>
            <!-- PANEL-HEADING START -->

            <!-- PANEL-BODY START -->
            <div class="panel-body" style="font-family: 'Soberana Sans'; font-size: 1.5rem;">

                <iframe src="<?=  base_url()?>static/Nanoarte[30691].pdf" width="600" height="780" style="border: none;"></iframe>

            </div>
            <!-- PANEL-BODY END -->

        </div>
        <!-- HPANEL HBLUE END -->
        
        

    </div>
    <!-- COL-LG-12 END -->

    <!-- ROW START -->
    <div class="row">
        <div class="col-lg-12">
            <label>  </label>
        </div>
        <div class="col-lg-12">
            <label>  </label>
        </div>
        <div class="col-lg-12">
            <label>  </label>
        </div>
    </div>
    <!-- ROW END -->

</div>
<!-- ROW END -->