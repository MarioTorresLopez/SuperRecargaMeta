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
                Detalle
            </div>
            <!-- PANEL-HEADING START -->
            
            <div class="panel-body" style="font-family: 'Soberana Sans'; font-size: 1.5rem;">
                <?php
                if (!is_null($contenido)) {
                ?>
                <div class="form-group col-lg-12">
                    <label>Nombre artístico</label>
                    <input type="text" value="<?= $contenido->nombre_artistico ?>" id="nom_art" class="form-control" placeholder="*Campo requerido" name="nom_art">
                </div>
                <div class="form-group col-lg-12">
                    <label>Descripción artística</label>
                    <input type="text" value="<?= $contenido->descripcion ?>" id="descripcion" class="form-control" placeholder="*Campo requerido" name="descripcion">
                </div>
                <div class="form-group col-lg-12">
                    <label>Resumen</label>
                    <input type="text" value="<?= $contenido->resumen ?>" id="resumen" class="form-control" placeholder="*Campo requerido" name="resumen">
                </div>
                <div class="form-group col-lg-12">
                    <label>Autor</label>
                    <input type="text" value="<?= $contenido->autor ?>" id="autor" class="form-control" placeholder="*Campo requerido" name="autor">
                </div>
                <div class="form-group col-lg-12">
                    <label>Agradecimiento</label>
                    <input type="text" value="<?= $contenido->agradecimiento ?>" id="agrade" class="form-control" placeholder="*Campo requerido" name="agrade">
                </div>
                <div class="form-group col-lg-12">
                    <label>Nombre de imagen</label>
                    <input type="text" value="<?=$contenido->img?>" id="userfile" class="form-control" name="userfile">
                </div>
                <div class="form-group col-lg-12">
                    <label>Imagen</label>
                    <br>
                    <img src="<?=  base_url()?>subidas/<?=$contenido->img?>">
                </div>
                <?php
                }
                else{
                ?>
                <div class="form-group col-lg-12">
                    <label>El usuario aún no registra sus datos para nanoarte</label>
                </div>
                <?php
                }
                ?>
            </div>
            <!-- PANEL-BODY END -->
        </div>
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