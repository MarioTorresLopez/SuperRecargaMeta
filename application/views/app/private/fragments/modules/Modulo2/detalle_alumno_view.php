<?php
/**
 * Vista de la edicion del rol 
 *
 * Vista que muestra al usuario la interfaz grafica para editar el nombre del rol, 
 * la fecha de modificacion se realizará al momento dela edicion y el usuario quien 
 * realizo la acción
 * 
 * @since      1.0
 * @version    1.0
 * @link       /notfound
 * @package    application.views
 * @subpackage area_de_trabajo
 * @author     CIDTAI - UTEQ Dev Team <cidtai@uteq.edu.mx>
 * @uses       ./application/controllers/incorporacion/roles
 */
?>

<!DOCTYPE html>


<div class="row">

    <!-- col-lg-6 START -->
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
                Alumno
            </div>
            <!-- panel-heading END -->
            <!-- panel-body START -->
            <div class="panel-body" style="font-family: 'Soberana Sans'; font-size: 1.5rem;">

                <!-- form START -->
                <form role="form" id="form">


                    <div class="col-sm-4">    
                        <div class="form-group">
                            <label for="nombre">Nombre</label> 
                            <input type="text" id="nombre" name="nombre" value="Juan" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="apellido_paterno">Apellido Paterno</label> 
                            <input type="text" id="apellido_paterno" name="apellido_paterno" value="Sanchez" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="apellido_materno">Apellido Materno</label> 
                            <input type="text" id="pellido_materno" name="apellido_materno" value="Zepeda" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="curp">CURP</label> 
                            <input type="text" id="curp" name="curp" value="JJRG80" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="matricula">Matricula</label> 
                            <input type="text" id="matricula" name="matricula" value="20163131035" class="form-control" disabled>
                        </div>
                    </div>

                    <!-- table START -->
                    <table class="table table-striped table-bordered table-hover">
                        <!-- thead START-->
                        <thead>
                            <tr>
                                <th>Periodo</th>
                                <th>Materias</th>
                                <th>Calificación</th>
                                <th>Nomenclatura</th>
                                <th>Fecha</th>
                                <th>Ciclos</th>
                            </tr>
                        </thead>
                        <!-- thead END -->
                        <!-- tbody END -->
                        <tbody>
                            <tr>
                                <td>Primer semestre</td>
                                <td>Matematicas 1</td>
                                <td>9.0</td>
                                <td>Ordinario</td>
                                <td>05/11/2013</td>
                                <td>2013-2014A</td>
                            </tr>
                            <tr>
                                <td>Primer semestre</td>
                                <td>Quimica 1</td>
                                <td>9.0</td>
                                <td>Ordinario</td>
                                <td>05/11/2013</td>
                                <td>2013-2014A</td>
                            </tr>
                            <tr>
                                <td>Primer semestre</td>
                                <td>Etica y valores 1</td>
                                <td>9.0</td>
                                <td>Ordinario</td>
                                <td>05/11/2013</td>
                                <td>2013-2014A</td>
                            </tr>
                        </tbody>
                        <!-- tbody END -->
                    </table>
                    <!-- table END -->

                    <div class="form-group">
                        <div class="col-sm-8">
                            <a href="<?=base_url()?>control_escolar/alumnos/gestion">
                                <button class="btn btn-sm btn-primary m-t-n-xs" type="button">
                                    <strong><i class="fa fa fa-undo"> </i> Regresar</strong>
                                </button>
                            </a>
                        </div>
                    </div>
                </form>
                <!-- form END -->

            </div>
            <!-- panel-body END -->
        </div>
        <!-- hpanel END -->
    </div>
    <!-- col-lg-6 END -->


</div>
