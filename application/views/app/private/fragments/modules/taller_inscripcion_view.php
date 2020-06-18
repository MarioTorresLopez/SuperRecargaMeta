<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<?php
/**
 * Vista del administrador, muestra una tabla con la lista del nivel educativo, donde las acciones son; 
 * agregar, eliminar o editar 
 * 
 * @since      1.0
 * @version    1.0
 * @link       /nivel_educativo
 * @package    application.views
 * @subpackage app.private.fragments.modules.catalogos.nivel_educativo_administrador
 * @author     CIDTAI - UTEQ Dev Team <cidtai@uteq.edu.mx>
 * @uses       ./application/controllers/administrador/nivel_educativo
 */
?>
<div class="row">

    

<!--     col-lg-6 END 

     col-lg-12 START -->
<div class="col-lg-12">
    <!--         hpanel START -->
    <div class="hpanel hblue">
        <!--             panel-heading START -->
        <div class="panel-heading" style="font-family: 'Soberana Sans'; font-size: 2rem;">
            <!--                 panel-tools START -->
            <div class="panel-tools">
                <a class="showhide"><i class="fa fa-chevron-up"></i></a>
            </div>
            <!--                 panel-tools END -->
            Talleres
        </div>
        <!--             panel-heading END 
                     panel-body START -->
        <?php
                if ($this->session->flashdata('modalidad_incorrecta')) {
                    ?>

                    <div class="alert alert-danger fade in alert-dismissable">
                        <a class="close" data-dismiss="alert">x</a>
                        <?= $this->session->flashdata('modalidad_incorrecta') ?>
                    </div>
                    <?php
                }
                ?>
        <div class="panel-body" style="font-family: 'Soberana Sans'; font-size: 1.5rem;">
            <div class="row well well-lg">
                <div class="col-sm-12">
                    <label><h3>Bienvenido</h3></label>
                    <br>
                    <label>Aquí podrás inscribirte al taller que quieras. Ten cuenta que una vez inscrito al taller de tu elección ya no podrás cambiarlo por algún otro</label>
                    <br>
                    <label><h3>IMPORTANTE</h3></label>
                    <br>
                    <label>El día del taller debes llevar tu EPP, como:</label>
                </div>
                <div class="col-sm-12" align="justify">
                    <ul>
                        <li>Bata de laboratorio</li>
                        <li>Gafas</li>
                        <li>Guantes</li>
                        <li>Zapato cerrado</li>
                    </ul>
                </div>
                <div class="col-sm-12">
                    <label>Es responsabilidad del participante llevar su EPP de lo contrario se anula su participación en el taller y se dará oportunidad a otro participante que se encuentre en la lista de espera para tomar ese taller.</label>
                </div>
            </div>    
            <!--                 table START -->
            <table id="" class="table table-striped table-bordered table-hover">
                <!--                     thead START -->
                <thead>
                    <tr>
                        <th>Nombre taller</th>
                        <th>Fecha</th>
                        <th>Horario</th>
                        <th>Lugar</th>
                        <th>Inscribirme</th>
                    </tr>
                </thead>
                <!--                     thead END 
                                     tbody START -->
                <tbody>
                    <?php
                    if (!is_null($talleres)) :
                        $contador = 0;
                        foreach ($talleres as $taller) :
                            $contador += 1;
                            ?>
                            <tr>
                                <td> <?= $taller->nombre ?> </td>
                                <td><?= $taller->fecha?></td>
                                <td><?= $taller->horario?></td>
                                <td><?= $taller->lugar?></td>
                                <td> 
                                    <a class="btn btn-success" href="<?= base_url() ?>app/taller/inscripcion_post/<?= $taller->id_taller ?>">
                                        <i class="glyphicon glyphicon-ok"></i> 
                                        <span class="bold">  </span>
                                    </a>

                                </td>
                            </tr>
                            <?php
                        endforeach;
                    endif;
                    ?>
                </tbody>
                <!-- tbody END -->

            </table>
            <!--                 table END -->
        </div>
        <!--             panel-body END -->
    </div>
    <!--        hpanel END -->
</div>
<div class="row">
    <div class="col-lg-12">
        <label>  </label>
    </div>
    <div class="col-lg-12">
        <label>  </label>
    </div>
</div>
</div>



