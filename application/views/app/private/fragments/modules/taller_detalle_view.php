<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<?php
/**
 * Vista del administrador, muestra una tabla con la lista del nivel educativo, donde las acciones son; 
 * agregar, eliminar o editar 
 * 
 * @since      1.0
 * @version    1.0
 * @link       /nivel_educativo
 * @package    application.views
 * @subpackage app.private.fragments.modules.catalogos.nivel_educativo_administrador
 * @author     CIDTAI - UTEQ Dev Team <cidtai@uteq.edu.mx>
 * @uses       ./application/controllers/administrador/nivel_educativo
 */
?>
<div class="row">
<div class="col-lg-12">
    <!--         hpanel START -->
    <div class="hpanel hblue">
        <!--             panel-heading START -->
        <div class="panel-heading" style="font-family: 'Soberana Sans'; font-size: 2rem;">
            <!--                 panel-tools START -->
            <div class="panel-tools">
                <a class="showhide"><i class="fa fa-chevron-up"></i></a>
            </div>
            <!--                 panel-tools END -->
            Detalle taller
        </div>
        <!--             panel-heading END 
                     panel-body START -->
        <div class="panel-body" style="font-family: 'Soberana Sans'; font-size: 1.5rem;">
            <!--                 table START -->
            <table id="" class="table table-striped table-bordered table-hover">
                <!--                     thead START -->
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre taller</th>
                        <th>Capacidad</th>
                        <th>Inscritos</th>
                        <th>Fecha</th>
                        <th>Horario</th>
                        <th>Lugar</th>
                    </tr>
                </thead>
                <!--                     thead END 
                                     tbody START -->
                <tbody>
                    <tr>
                        <td><?= $taller->id_taller ?></td>
                        <td> <?= $taller->nombre ?> </td> 
                        <td><?= $taller->capacidad ?></td>
                        <td><?= $capacidad->actuales?></td>
                        <td><?= $taller->fecha ?></td>
                        <td><?= $taller->horario ?></td>
                        <td><?= $taller->lugar ?></td>
                    </tr>
                </tbody>
                <!-- tbody END -->

            </table>
            <!--                 table END -->
        </div>
        <!--             panel-body END -->
    </div>
    <!--        hpanel END -->
</div>
<div class="row">
    <div class="col-lg-12">
        <label>  </label>
    </div>
    <div class="col-lg-12">
        <label>  </label>
    </div>
</div>
</div>



