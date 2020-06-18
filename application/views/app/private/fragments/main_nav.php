<?php
/**
 * Menu (Nav) principal de la aplicación
 *
 * Fragmento que contiene el menu de navegacion  principal de la aplicación, 
 * el contenido se genera de manera dinámica a partir de los permisos ligados 
 * al usuario
 * 
 * @since      1.0
 * @version    1.0
 * @internal   El uso de este fragmento solo es posible por medio de una vista            
 * @package    application.views
 * @subpackage app.private.fragments
 * @author     CIDTAI - UTEQ Dev Team <cidtai@uteq.edu.mx>
 * @uses       ./application/views/app/private/main_view.php
 */
?>
<!-- Navigation -->
<aside id="menu" style="font-family: 'Soberana Sans';">
    <div id="navigation">
        <div class="profile-picture">
            <a href="index.html">
                <!--<img src="<?= base_url() ?>static/images/logos/logo_aide_sm.png" class="img-circle m-b" alt="logo">-->
                <img src="<?= base_url()?>static/logoSuperRecargaSM.png" class="img-circle m-b" alt="logo">
                <!--<img src="<?= base_url()?>static/assets/img/simposio.png" class="img-circle m-b" alt="logo">-->
            </a>

            <div class="stats-label text-color">
                <span class="font-extra-bold font-uppercase">Súper Recarga</span>

                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                        <small class="text-muted">Opciones<b class="caret"></b></small>
                    </a>
                    <ul class="dropdown-menu animated flipInX m-t-xs">
                        <li><a href="<?= base_url()?>app/micuenta">Perfil</a></li>
                        <li class="divider"></li>
                        <li><a href="<?= base_url() ?>app/logout">Cerrar sesión</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <ul class="nav" id="side-menu">
            <?php
            if($tipo==1){
            ?>
            <li>
                <a href="<?= base_url() ?>app/operador">Operadores</a>
            </li>
            <li>
                <a href="<?= base_url() ?>app/paquete">Paquetes</a>
            </li>
            <li>
                <a href="<?= base_url() ?>app/altas_bajas/altas">Altas</a>
            </li>
            <li>
                <a href="<?= base_url() ?>app/altas_bajas/bajas">Bajas</a>
            </li>
            <?php 
            }
            else{
            ?>
            <li>
                <a href="<?= base_url() ?>app/taller/inscripcion">Talleres</a>
            </li>
            <li>
                <a href="<?= base_url() ?>app/taller/talleres">Mis Talleres</a>
            </li>
            <?php
            if($nanoarte==1){
            ?>
            <li>
                <a href="<?= base_url() ?>app/nanoarte/usuario">Nanoarte</a>
            </li>
            <?php
            }?>
            <?php
            if($expositor==1){
            ?>
            <li>
                <a href="<?= base_url() ?>app/poster/mi_poster">Mi poster</a>
            </li>
            <?php
            }
            }
            ?>
            <!--Aqui se encontraba la validación anterior de modulos-->            
            


        </ul>
    </div>
</aside>
