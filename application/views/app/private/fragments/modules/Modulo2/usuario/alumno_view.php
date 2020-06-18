<?php
/**
 * Vista de alta de alumnos asi como visualizar los alumnos
 * existentes de cada grupo o por periodo
 *
 * Vista que muestra al usuario la interfaz grafica, dende se podra consultar
 * el listado de periodos que tiene registrados y su respectiva
 * gestion.
 * 
 * @since      1.0
 * @version    1.0
 * @link       /notfound
 * @package    application.views
 * @subpackage area_de_trabajo
 * @author     CIDTAI - UTEQ Dev Team <cidtai@uteq.edu.mx>
 * @uses       ./application/controllers/app/periodo
 */
?>


<div class="row">
    <!-- col-lg-12 START-->
    <div class="col-lg-12" id="div_formulario">
        <!-- hpanel START -->
        <div class="hpanel hblue">
            <!-- panel-heading START -->
            <div class="panel-heading" style="font-family: 'Soberana Sans'; font-size: 2rem;">
                <!-- panel-tools START -->
                <div class="panel-tools">
                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                </div>
                <!-- panel-tools END -->
                Agregar alumno
            </div>
            <!-- panel-heading END -->

            <!--panel body START-->
            <div class="panel-body">
                <p>Formulario</p>
                <!--form START-->
                <form role="form" id="form">

                    <!--form-group START-->
                    <div class="form-group col-lg-12">
                        <div class="col-lg-12">
                            <div class=" col-lg-3">
                                <label for="nombre_alumno" style="font-family: 'Soberana Sans'; font-size: 1.5rem;">Nombre alumno</label>
                            </div>
                            <div class=" col-lg-3">
                                <label for="apellido1" style="font-family: 'Soberana Sans'; font-size: 1.5rem;">Apellido 1</label>
                            </div>
                            <div class=" col-lg-3">
                                <label for="apellido2" style="font-family: 'Soberana Sans'; font-size: 1.5rem;">Apellido 2</label>
                            </div>
                            <div class="col-lg-3">
                                <label for="curp" style="font-family: 'Soberana Sans'; font-size: 1.5rem;">CURP</label>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <input type="text" id="nombre_alumno" name="nombre_alumno" placeholder="*Capo Requerido" class="form-control" required>
                        </div>
                        <div class="col-lg-3">
                            <input type="text" id="apellido1" name="apellido1" placeholder="*Capo Requerido" class="form-control" required>
                        </div>
                        <div class="col-lg-3">
                            <input type="text" id="apellido2" name="apellido12" placeholder="*Capo Requerido" class="form-control" required> 
                        </div>
                        <div class="col-lg-3">
                            <input type="text" id="curp" name="curp" placeholder="*Capo Requerido" class="form-control" required> 
                        </div>
                    </div>                    
                    <!--form-group END-->

                    <!--form-group START-->
                    <div class="form-group col-lg-12">
                        <div class=" col-lg-12">                        
                            <div class="col-lg-3">
                                <label for="carrera" style="font-family: 'Soberana Sans'; font-size: 1.5rem;">Carrera</label> 
                            </div>
                            <div class="col-lg-3">
                                <label for="especialidad" style="font-family: 'Soberana Sans'; font-size: 1.5rem;">Especialidad</label> 
                            </div>
                            <div class="col-lg-3">
                                <label for="grupo" style="font-family: 'Soberana Sans'; font-size: 1.5rem;">Grupo</label> 
                            </div>
                            <div class="col-lg-3">
                                <label for="turno" style="font-family: 'Soberana Sans'; font-size: 1.5rem;">Turno</label> 
                            </div>                        
                        </div>                        
                        <div class="col-lg-3">
                            <select name="carrera" class="form-control m-b">
                                <option>--Seleccione--</option>
                                <option value="1">Medicina</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <div class="col-lg-3">
                            <select name="especialidad" class="form-control m-b">
                                <option>--Seleccione--</option>
                                <option value="1">Enfermeria</option>
                                <option value="2">Cirujano</option>
                                <option value="3">Dentista</option>
                            </select>
                        </div>
                        <div class="col-lg-3">
                            <select name="grupo" class="form-control m-b">
                                <option>--Seleccione--</option>
                                <option value="1">M-3</option>
                                <option value="2">E-4</option>
                                <option value="3">o-5</option>
                            </select>
                        </div>
                        <div class="col-lg-3">
                            <select name="turno" class="form-control m-b">
                                <option>--Seleccione--</option>
                                <option value="1">Matutino</option>
                                <option value="2">Vespertino</option>
                            </select>
                        </div>                         
                    </div>
                    <!--form-group END-->

                    <!--form-group START-->
                    <div class="form-group col-lg-12">
                        <div class="col-lg-12">
                            <div class=" col-lg-12">
                                <label for="matricula" style="font-family: 'Soberana Sans'; font-size: 1.5rem;">Matrícula del alumno</label>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <input type="text" id="matricula" name="matricula" placeholder="*Capo Requerido" class="form-control" required>
                        </div>
                    </div>                    
                    <!--form-group END-->

                    <div class="text-right">
                        <button class="btn btn-sm btn-primary m-t-n-xs" type="submit"><strong><i class="fa fa-file-text"> </i> Agregar</strong></button>
                    </div>

                </form>
                <!--form END-->
            </div>
            <!--panel body END-->

        </div>
        <!-- hpanel END -->
    </div>
    <!-- col-lg-12 END-->


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
                Alumnos
            </div>
            <!-- panel-heading END -->

            <!-- panel-body START-->
            <div class="panel-body" style="font-family: 'Soberana Sans'; font-size: 1.5rem;">
                <!-- table START -->
                <table id="example2" class="table table-striped table-bordered table-hover">
                    <!-- thead START-->
                    <thead>
                        <tr>
                            <th colspan="2">Carrera: TIC</th>
                            <th colspan="2">Especialidad: Sistemas Informáticos</th>
                            <th>Grupo: T-171</th>
                        </tr>
                        <tr>
                            <th>Matrícula</th>
                            <th>Alumno</th>
                            <th>Estatus</th>
                            <th>Calificaciones</th>
                            <th>Editar/Eliminar</th>
                        </tr>
                    </thead>
                    <!-- thead END-->

                    <!-- tbody START-->
                    <tbody>
                        <?php for ($i = 0; $i < 30; $i++) { ?>
                            <tr>
                                <td>1254JSYE27</td>
                                <td>Pedro Casas Luna</td>
                                <td>Inscrito</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="<?php base_url() ?>calificacion_ingresar"><button class="btn btn-default " type="button"><i class=" fa fa-building"></i></button></a>                                                
                                    </div>
                                </td>
                                <td>
                                    <a href="<?php base_url() ?>alumno/editar"><button class="btn btn-info " type="button"><i class="fa fa-paste"></i></button></a>
                                    <button type="button" class="btn btn-danger EliminarAlumnoUsuario">
                                        <i class="fa fa-trash-o"></i>
                                        <span class="bold"></span>
                                    </button>                                                

                                </td>
                            </tr>
                        <?php } ?>

                    </tbody>
                    <!-- tbody END-->                          

                </table>
                <!-- table END-->
            </div>
            <!--panel-body END-->            

        </div>
        <!-- hpanel END -->
    </div>
    <!-- col-lg-12 END-->
</div>
