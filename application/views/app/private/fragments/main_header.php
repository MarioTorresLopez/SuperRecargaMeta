<?php
/**
* Header principald de la aplicación
*
* Fragmento que contiene el header principal de la aplicación, menus secundarios derechos 
* y notificaciones
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
<!-- Header -->
<div id="header">
    <div class="color-line">
    </div>
    <div id="logo" class="light-version">
        <span>
        </span>
    </div>
    <nav role="navigation">
        <div class="header-link hide-menu"><i class="fa fa-bars"></i></div>
        <div class="small-logo">
            <span class="text-primary">AIDE</span>
        </div>
        <form role="search" class="navbar-form-custom" method="post" action="#">
            <div class="form-group">
                <input type="text" placeholder="" class="form-control" name="search">
            </div>
        </form>
        <div class="mobile-menu">
            <button type="button" class="navbar-toggle mobile-menu-toggle" data-toggle="collapse" data-target="#mobile-collapse">
                <i class="fa fa-chevron-down"></i>
            </button>
            <div class="collapse mobile-navbar" id="mobile-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a class="" href="<?=base_url()?>app/logout/">Cerrar sesión</a>
                    </li>
                    <li>
                        <a class="" href="<?= base_url()?>app/micuenta">Perfil</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="navbar-right">
            <ul class="nav navbar-nav no-borders">
                <?php if(isset($app_right_sidebar)) : ?>
                    <li>
                        <a href="#" id="sidebar" class="right-sidebar-toggle">
                            <i class="pe-7s-upload pe-7s-news-paper"></i>
                        </a>
                    </li>
               <?php endif;  ?>
                <li class="dropdown">
                    <a href="<?= base_url() ?>app/logout">
                        <i class="pe-7s-upload pe-rotate-90"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>
