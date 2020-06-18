<?php
/**
 
 * Vista que muestra al analista la interfaz grafica, dende se podra visualizar
 * el listado de grupos que tiene un periodo seleccionado.
 * 
 * @since      1.0
 * @version    1.0
 * @link       /notfound
 * @package    application.views
 * @subpackage area_de_trabajo
 * @author     CIDTAI - UTEQ Dev Team <cidtai@uteq.edu.mx>
 * @uses       ./application/controllers/app/grupo_analista
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
                Grupos
            </div>
            <!-- panel-heading END -->

            <!-- panel-body START-->
            <div class="panel-body" style="font-family: 'Soberana Sans'; font-size: 1.5rem;">
                <div class="table-responsive">
                <!-- table START -->
                <table id="example2" class="table table-striped table-bordered table-hover">
                    <!-- thead START-->
                    <thead>
                        <tr>
                            <th>Carrera</th>
                            <th>Especialidad</th>
                            <th>Nombre grupo</th>
                            <th>Alumnos</th>
                            <th>Editar/Eliminar</th>
                        </tr>
                    </thead>
                    <!-- thead END-->

                    <!-- tbody START-->
                    <tbody>
                        <?php for ($i = 0; $i < 30; $i++) { ?>
                            <tr>
                                <td>TIC</td>
                                <td>Sistemas Informáticos</td>
                                <td>T-171</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="<?php base_url() ?>alumno"><button class="btn btn-default" type="button" id="lista_alumno"><i class="fa fa-user"></i></button></a>                                                
                                    </div>
                                </td>
                                <td>

                                    <a href="<?php base_url() ?>grupo/editar"><button class="btn btn-info " type="button"><i class="fa fa-paste"></i></button></a>
                                    <button type="button" class="btn btn-danger EliminarGrupoAnalaista">
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
            </div>
            <!--panel-body END-->            

        </div>
        <!-- hpanel END -->
    </div>
    <!-- col-lg-12 END-->

    <!-- ROW START -->
    <div class="row">
        <div class="col-lg-12">
            <label>  </label>
        </div>
        <div class="col-lg-12">
            <label>  </label>
        </div>
    </div>
    <!-- ROW END -->
    
</div>