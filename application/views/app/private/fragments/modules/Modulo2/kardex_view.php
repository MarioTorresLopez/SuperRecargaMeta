<?php
/**
* Vista para la generacion de kardex de alumnos
*
* Vista de la aplicación que muestra el conjunto de widgets correspondientes 
* al nivel de usuario, relacionando los fragmentos correspondientes al contenido de kardex
* 
* @since      1.0
* @version    1.0
* @link       /nuevo
* @package    application.views
* @subpackage app.private
* @author     CIDTAI - UTEQ Dev Team <cidtai@uteq.edu.mx>
* @uses       ./application/controllers/app/kardex.php
*/
?>

    <!-- row START-->
    <div class="row">
        <!-- col-lg-12 START-->
        <div class="col-lg-12">
            

            <!-- hpanel -->
            <div class="hpanel hblue" id="row_ms">
                <!-- panel-heading -->
                <div class="panel-heading" style="font-family: 'Soberana Sans'; font-size: 2rem;">
                    <div class="panel-tools">
                        <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                    </div>
                    Datos del alumno
                </div>
                <!-- /.panel-heading -->

                <!-- panel-body -->
                <div class="panel-body" style="font-family: 'Soberana Sans'; font-size: 1.5rem;">
                    <!-- form START -->
                    <form role="form" id="form">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="nombre_alumno">Nombre de la institucion</label> 
                                <input type="text" id="nombre_alumno" name="nombre_alumno" placeholder="Colegio de Estudios Cientificos y Tecnologicos" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="nombre_alumno">Nombre del Plantel</label> 
                                <input type="text" id="nombre_alumno" name="nombre_alumno" placeholder="CECYTEQ Plantel 5" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="nombre_alumno">Nombre del Alumno</label> 
                                <input type="text" id="nombre_alumno" name="nombre_alumno" placeholder="Jacqueline Juarez Padilla" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="matricula">Matricula</label> 
                                <input type="text" id="matricula" name="matricula" placeholder="2015303125" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="curp">CURP</label> 
                                <input type="text" id="curp" name="curp" placeholder="FFFF" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="tipo">Grupo</label> 
                                <input type="text" id="grupo" name="grupo" placeholder="T171" class="form-control" disabled>
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

                        <div class="col-sm-6">
                            <div>
                                <button class="btn btn-sm btn-primary m-t-n-xs" type="submit"><strong><i class="fa fa-file-text-o"> </i> Imprimir kardex</strong></button>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="promedio">Promedio</label> 
                                <input type="text" id="promedio" name="promedio" placeholder="8.8" class="form-control" disabled>
                            </div>
                        </div>

                    </form>
                    <!-- form END-->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.hpanel -->


        </div>
        <!-- col-lg-12 START-->
    </div>
    <!-- row START-->
