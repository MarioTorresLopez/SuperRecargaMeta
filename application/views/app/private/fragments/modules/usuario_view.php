<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
/**
 * Vista de la creacion de usuario y asignacion de rol o roles
 *
 * Vista que muestra al usuario la interfaz grafica para agregar un nuevo usuario en el sistema (nombre completo, correo electronico y contraseña ...)ademas de la asigancion de un rol o varios roles
 * 
 * @since      1.0
 * @version    1.0
 * @link       /notfound
 * @package    application.views
 * @subpackage area_de_trabajo
 * @author     CIDTAI - UTEQ Dev Team <cidtai@uteq.edu.mx>
 * @uses       ./application/controllers/incorporacion/roles_usuario
 */
?>


<!DOCTYPE html>

<!-- ROW START -->
<div class="row">
    <!-- COL-LG-12 START-->
    <div class="col-lg-12">

        <!-- HPANEL HBLUE START -->
        <div class="hpanel hblue">

            <!-- PANEL-HEADING START -->
            <div class="panel-heading" style="font-family: 'Soberana Sans'; font-size: 2rem;">
                <div class="panel-tools">
                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                </div>
                Usuarios
            </div>
            <!-- PANEL-HEADING END -->

            <!-- PANEL-BODY START -->
            <div class="panel-body" style="font-family: 'Soberana Sans'; font-size: 1.5rem;">

                <div class="table-responsive">
                <!-- TABLE START -->
                <table id="example2" class="table table-striped table-bordered table-hover">
                    <!-- THEAD START -->
                    <thead>
                        <tr>
                            <th>Nombre completo</th>
                            <th>Usuario</th>
                            <th>Editar/Eliminar</th>
                        </tr>
                    </thead>
                    <!-- THEAD END -->

                    <!-- TBODY START -->
                    <tbody>
                        <?php
                        if (!is_null($usuarios)) :
                            $contador = 0;
                            foreach ($usuarios as $usuario) :
                                $contador += 1;
                                ?>
                                <tr>
                                    <td><?= $usuario->nombres?> <?= $usuario->apellido1?> <?= $usuario->apellido2?></td> 
                                    <td> <?= $usuario->nom_usuario?> </td> 
                                     
                                    
                                    <td>                            
                                        <a class = "btn btn-info" href="<?= base_url() ?>administrador/roles_usuario/editar_roles_usuario/<?= $usuario->id_usuario ?>">
                                            <i class="fa fa-paste"></i> 
                                            <span class="bold">  </span>
                                        </a>
                                        <button class="btn btn-danger eliminacionUsuRol" data-id="<?= $usuario->id_usuario ?>" type="button">
                                            <i class="fa fa-trash-o"></i> 
                                            <span class="bold"> </span>
                                        </button>

                                    </td>
                                </tr>
                            
                        <?php
                        endforeach;
                    endif;
                    ?>
                       </tbody> 
                        
                        
<!--                       
                    <!-- TBODY END -->

                </table>
                <!-- TABLE END -->
                </div>
            </div>
            <!-- PANEL-BODY END -->

        </div>
        <!-- HPANEL HBLUE END -->

    </div>
    <!-- COL-LG-12 END -->

    <!-- ROW START-->
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
    <!-- ROW END-->

</div>   
<!-- ROW END -->  


