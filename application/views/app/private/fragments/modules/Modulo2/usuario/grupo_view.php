<?php
/**
 * Vista de alta de grupos.
 *
 * Vista que muestra al usuario la interfaz grafica, dende se podra consultar
 * el listado de grupos que tiene un periodo seleccionado.
 * 
 * @since      1.0
 * @version    1.0
 * @link       /notfound
 * @package    application.views
 * @subpackage area_de_trabajo
 * @author     CIDTAI - UTEQ Dev Team <cidtai@uteq.edu.mx>
 * @uses       ./application/controllers/app/grupo
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
                Agregar grupo
            </div>
            <!-- panel-heading END -->

            <!--panel body START-->
            <div class="panel-body">

                <p>Formulario</p>
                <div class="col-lg-12 text-right">
                    <a href="#">Visualizar acuerdo</a>
                </div>
                <!--form START-->
                <form role="form" id="form">

                    <!--form-group START-->
                    <div class="form-group col-lg-12">
                        <label for="nombre_grupo" style="font-family: 'Soberana Sans'; font-size: 1.5rem;">Nombre grupo</label> 

                        <input type="text" id="nombre_grupo" name="nombre_grupo" placeholder="*Campo requerido" class="form-control" required>

                        <label for="capacidad" style="font-family: 'Soberana Sans'; font-size: 1.5rem;">Número de alumnos</label> 
                        <input type="number" id="capacidad" name="capacidad" placeholder="*Campo requerido" class="form-control" required>

                    </div>
                    <!--form-group END-->
                    <div class="text-right">
                        <button class="btn btn-sm btn-primary m-t-n-xs" type="submit"><strong><i class="fa fa-file-text"> </i> Agregar</strong></button>
                    </div>

                </form>
                <!--form END-->

                <!--form START-->
                <form role="form" id="form">
                    <!--form-group START-->
                    <div class="form-group col-lg-12">
                        <label for="documento" style="font-family: 'Soberana Sans'; font-size: 1.5rem;">*Cambiar cantidad de grupos y alumnos</label> 
                        <input type="file" id="documento" name="documento" placeholder="*Adjuntar oficio" class="form-control">  
                    </div>
                    <!--form-group END-->
                </form>
                <!--form END-->
                <div class="text-right">
                    <button class="btn btn-sm btn-primary m-t-n-xs" type="submit"><strong><i class="fa fa-send-o"> </i> Enviar</strong></button>
                </div>

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
                Grupos
            </div>
            <!-- panel-heading END -->

            <!-- panel-body START-->
            <div class="panel-body" style="font-family: 'Soberana Sans'; font-size: 1.5rem;">
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
                                        <a href="<?php base_url() ?>alumno_lista"><button class="btn btn-default" value="1" type="button" id="lista_alumno"><i class="fa fa-user"></i></button></a>                                                
                                    </div>
                                </td>
                                <td>

                                    <a href="<?php base_url() ?>grupo/editar"><button class="btn btn-info " type="button"><i class="fa fa-paste"></i></button></a>
                                    <button type="button" class="btn btn-danger EliminarGrupoUsuario">
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
