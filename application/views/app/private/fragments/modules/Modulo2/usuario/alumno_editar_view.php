<?php
/**
 * Vista de actualizaciones de alumnos
 *
 * Vista que muestra al usuario la interfaz grafica, dende se podra actualizar
 * el alumno seleccionado
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
                Actualizar alumno
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
                            <input type="text" id="nombre_alumno" name="nombre_alumno" placeholder="Pedro" class="form-control" required>
                        </div>
                        <div class="col-lg-3">
                            <input type="text" id="apellido1" name="apellido1" placeholder="Casas" class="form-control" required>
                        </div>
                        <div class="col-lg-3">
                            <input type="text" id="apellido2" name="apellido12" placeholder="Luna" class="form-control" required> 
                        </div>
                        <div class="col-lg-3">
                            <input type="text" id="curp" name="curp" placeholder="PCL951009HQRYLW21" class="form-control" required> 
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
                            <input type="text" id="matricula" name="matricula" placeholder="1254JSYE27" class="form-control" required>
                        </div>
                    </div>                    
                    <!--form-group END-->

                    <div class="text-right">
                        <a href="<?= base_url() ?>usuario/alumno" class="btn btn-primary" 
                            ><i class="fa fa-check"> </i> Actualizar
                        </a>

                        <a href="<?= base_url() ?>usuario/alumno" class="btn btn-danger" 
                            ><i class="fa fa-ban"> </i> Cancelar
                        </a>
                    </div>

                </form>
                <!--form END-->
            </div>
            <!--panel body END-->

        </div>
        <!-- hpanel END -->
    </div>
    <!-- col-lg-12 END-->
</div>