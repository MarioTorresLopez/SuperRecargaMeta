<?php
/**
 * Vista de alta de peridos
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
                Agregar período
            </div>
            <!-- panel-heading END -->

            <!--panel body START-->
            <div class="panel-body">
                <p>Formulario</p>
                <!--form START-->
                <form role="form" id="form">

                    <!--form-group START-->
                    <div class="form-group col-lg-12">
                        <label for="nombre_perido" style="font-family: 'Soberana Sans'; font-size: 1.5rem;">Nombre período académico</label> 

                        <input type="text" id="nombre_perido" name="nombre_perido" placeholder="*Campo requerido" class="form-control" required>


                        <label for="ciclo_in" style="font-family: 'Soberana Sans'; font-size: 1.5rem;">Fecha inicio</label> 
                        <input type="date" id="ciclo_in" name="ciclo_in" placeholder="*Campo requerido" class="form-control" required>

                        <label for="ciclo_in" style="font-family: 'Soberana Sans'; font-size: 1.5rem;">Fecha fin</label>
                        <input type="date" id="ciclo_fn" name="ciclo_fn" placeholder="*Campo requerido" class="form-control" required>
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
                Períodos
            </div>
            <!-- panel-heading END -->

            <!-- panel-body START-->
            <div class="panel-body" style="font-family: 'Soberana Sans'; font-size: 1.5rem;">
                <!-- table START -->
                <table id="example2" class="table table-striped table-bordered table-hover">
                    <!-- thead START-->
                    <thead>
                        <tr>
                            <th colspan="10">Carrera: TIC</th>
                        </tr>
                        <tr>
                            <th>#</th>
                            <th>Período</th>
                            <th>Especialidad</th>
                            <th>Fecha inicio</th>
                            <th>Fecha fin</th>
                            <th>Grupo</th>
                            <th>Alumno</th>
                            <th>Editar/Eliminar</th>
                        </tr>
                    </thead>
                    <!-- thead END-->

                    <!-- tbody START-->
                    <tbody>
                        <?php for ($i = 0; $i < 30; $i++) { ?>
                            <tr>
                                <td>1</td>
                                <td>Semestral</td>
                                <td>Sistemas Informáticos</td>
                                <td>3 Enero 18</td>
                                <td>6 Junio 18</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="<?php base_url() ?>grupo"><button class="btn btn-default " type="button"><i class="fa fa-group"></i></button></a>                                                
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a href="<?php base_url() ?>alumno"><button class="btn btn-default" type="button"><i class="fa fa-user"></i></button></a>                                                
                                    </div>
                                </td>
                                <td>
                                    <a href="<?php base_url() ?>periodo/editar"><button class="btn btn-info " ><i class="fa fa-paste"></i></button></a>

                                    <button type="button" class="btn btn-danger EliminarPeridoUsuario">
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
