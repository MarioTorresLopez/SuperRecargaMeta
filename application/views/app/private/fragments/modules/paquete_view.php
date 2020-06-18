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

    <!--     col-lg-6 START -->
    <div class="col-lg-12">
        <!--         hpanel START -->
<!--        <div class="hpanel hblue">
                         panel-heading START 
            <div class="panel-heading" style="font-family: 'Soberana Sans'; font-size: 2rem;">
                                 panel-tools START 
                <div class="panel-tools">
                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                </div>
                                 panel-tools END 
                Agregar paquete
            </div>
                         panel-heading END 
                         panel-body START 
            <div class="panel-body" style="font-family: 'Soberana Sans'; font-size: 1.5rem;">
                <p>
                                        Formulario 
                </p>
                                 form START 
                <?php
                if ($this->session->flashdata('nivel_incorrecta')) {
                    ?>

                    <div class="alert alert-danger fade in alert-dismissable">
                        <a class="close" data-dismiss="alert">x</a>
                        <?= $this->session->flashdata('nivel_incorrecta') ?>
                    </div>
                    <?php
                }
                ?>
                <form id="form" action="<?=base_url()?>app/paquete/insertar_post" method="post">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="col-sm-12"> 
                                    <label>Nombre operador</label> 
                                    <input type="text" id="nombre_operador" name="nombre_operador" placeholder="*Campo requerido" class="form-control" style="text-transform: uppercase;">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div>
                                <div class="col-sm-12">
                                    <button class="btn btn-sm btn-primary m-t-n-xs" id="botonNivel" name="botonNivel" type="submit">
                                        <strong><i class="fa fa-file-text"> </i> Agregar</strong></button>
                                </div>
                            </div>
                        </div>   
                    </div>
                </div>
                </form>
                                 form END 
            
        </div>
                     panel-body END 
    </div>-->
    <!--         hpanel END -->
</div>

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
            Paquetes
        </div>
        <!--             panel-heading END 
                     panel-body START -->
        <div class="panel-body" style="font-family: 'Soberana Sans'; font-size: 1.5rem;">
            <!--                 table START -->
            <table id="" class="table table-striped table-bordered table-hover">
                <!--                     thead START -->
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Vigencia</th>
                        <th>Operador</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <!--                     thead END 
                                     tbody START -->
                <tbody>
                    <?php
                    if (!is_null($paquetes)) :
                        foreach ($paquetes as $paquete) :
                            
                            ?>
                    <tr>
                        <td><?= $paquete->idpaquete?></td>
                        <td><?= $paquete->nombre?></td>
                        <td><?= $paquete->descripcion?></td>
                        <td><?= $paquete->precio?>.00</td>
                        <td><?= $paquete->vigencia?> días</td>
                        <td><?= $paquete->operador?></td>
<!--                        <td><a class = "btn btn-default" href="<?= base_url() ?>app/taller/detalle">
                                        <i class="glyphicon glyphicon-th-list"></i> 
                                        <span class="bold">  </span>
                                    </a></td>-->
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



