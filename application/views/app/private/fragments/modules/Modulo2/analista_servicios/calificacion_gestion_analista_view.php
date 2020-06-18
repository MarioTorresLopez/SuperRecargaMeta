<?php
/**
 * Vista de las calificaciones, visualizar el listado
 * de las calificaciones
 * 
 * @since      1.0
 * @version    1.0
 * @link       /notfound
 * @package    application.views
 * @subpackage area_de_trabajo
 * @author     CIDTAI - UTEQ Dev Team <cidtai@uteq.edu.mx>
 * @uses       ./application/controllers/app/calificacion_analista
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
                Calificaciones
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
                            <th>Carrera: TIC</th>
                            <th>Especialidad: Sistemas Informáticos</th>
                            <th>Grupo: T-171</th>
                            <th colspan="2">Alumno: Pedro Casas Luna</th>
                    	</tr>
                        <tr>
                            <th>Matería</th>
                            <th>Tipo de evaluación</th>
                            <th>Calificación</th>
                            <th>Fecha</th>
                            <th>Editar</th>
                        </tr>
                    </thead>
                    <!-- thead END-->

                    <!-- tbody START-->
                    <tbody>
                        <?php for ($i = 0; $i < 30; $i++) { ?>
                            <tr>
                                <td>Matemáticas</td>
                                <td>Ordinario</td>
                                <td>9.0</td>
                                <td>07/08/2018</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="<?php base_url() ?>calificacion_gestion/editar"><button class="btn btn-info " type="button"><i class="fa fa-paste"></i></button></a>                                             
                                    </div>
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