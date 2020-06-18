<?php
/**
 * Vista de lista de alumnos
 *
 * Vista que muestra al usuario la interfaz grafica, dende se podra consultar
 * el listado de alumnos dados de alta en dicho grupo, con la opcion de visualizar
 * el detalle del alumno. 
 * 
 * @since      1.0
 * @version    1.0
 * @link       /notfound
 * @package    application.views
 * @subpackage area_de_trabajo
 * @author     CIDTAI - UTEQ Dev Team <cidtai@uteq.edu.mx>
 * @uses       ./application/controllers/control_escolar/alumnos
 */
?>


<!DOCTYPE html>

<div class="row">
    
    <!-- col-lg-12 START-->
    <div class="col-lg-12">
        <!-- hpanel START -->
        <div class="hpanel hblue">
            <!-- panel-heading START -->
            <div class="panel-heading" style="font-family: 'Soberana Sans'; font-size: 2rem;">
                <!-- panel-tools START -->
                <div class="panel-tools">
                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                </div>
                <!-- panel-tools END -->
                Lista de Alumnos
            </div>
            <!-- panel-heading END -->
            <!-- panel-body START -->
            <div class="panel-body" style="font-family: 'Soberana Sans'; font-size: 1.5rem;">
                <!-- table START -->
                <table id="example2" class="table table-striped table-bordered table-hover">
                    <!-- thead START -->
                    <thead>
                        <tr>
                            <th>CURP</th>
                            <th>Matricula</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Detalle</th>
                            <th>Kardex</th>
                        </tr>
                    </thead>
                    <!-- thead END -->
                    <!-- tbody START -->
                    <tbody>
                        <?php for($i=0;$i<5;$i++){ ?>
                        <tr>
                            <td>JJRG80</td>
                            <th>20163131035</th>
                            <th>Juan</th>
                            <th>Sanchez Zepeda</th>
                            <td>
                                <a href="<?= base_url() ?>control_escolar/alumnos/detalle">
                                    <button class="btn btn-info" type="button">
                                        <i class="fa fa fa-file-text"></i> 
                                        <span class="bold">  </span>
                                    </button>
                                </a>
                            </td>
                            <td>
                                <a href="<?= base_url() ?>control_escolar/kardex">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa fa-folder-open"></i> 
                                        <span class="bold">  </span>
                                    </button>
                                </a>
                            </td>
                        </tr>
                        <?php }?>
                    </tbody>
                    <!-- tbody END -->
                </table>
                <!-- table END -->
            </div>
            <!-- panel-body END -->
        </div>
        <!-- hpanel END -->
    </div>
    <!-- col-lg-12 END -->
    
</div>     
