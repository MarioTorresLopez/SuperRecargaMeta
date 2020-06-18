<?php
/**
 * Vista de la lista de los alumnos
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
    <div class="col-lg-12" >
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
                                    <button type="button" class="btn btn-danger EliminarAlumnoLUsuario">
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