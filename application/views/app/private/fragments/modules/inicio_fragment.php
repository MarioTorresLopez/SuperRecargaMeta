<?php
/**
 * Fragmento de inicio de la aplicacion
 *
 * Fragmento que contiene las gráficas e información que se muestra justo despues de 
 * inciar sesion
 * 
 * @since      1.0
 * @version    1.0
 * @internal   El uso de este fragmento solo es posible por medio de una vista            
 * @package    application.views
 * @subpackage app.private.fragments.modules
 * @author     CIDTAI - UTEQ Dev Team <cidtai@uteq.edu.mx>
 * @uses       ./application/views/app/private/main_view.php
 */
?>

<!-- ROW START -->
<div class="row">

    <!-- COL-LG-12 START -->
    <div class="col-lg-12">

        <!-- HPANEL HBLUE START -->
        <div class="hpanel hblue">

            <!-- PANEL-HEADING START -->
            <div class="panel-heading" style="font-family: 'Soberana Sans'; font-size: 2rem;">
                <div class="panel-tools">
                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                </div>
                Información
            </div>
            <!-- PANEL-HEADING START -->

            <!-- PANEL-BODY START -->
            <div class="panel-body" style="font-family: 'Soberana Sans'; font-size: 1.5rem;">

                <?php
                //if($expositor==1){
                ?>
                <div class="row well well-lg">
                    <div class="col-sm-12">
                        <label><h3>Requisitos que debe tener tu poster</h3></label>
                    </div>
                    <div class="col-sm-12" align="justify">
                        <ul>
                            <li>
                                El poster debe ser legible desde una distancia de 2.5 m. Esto significa que todas las letras deben ser de al menos 32 Pt.
                            </li>
                            <li>
                                Puede ser en español o inglés
                            </li>
                            <li>
                                Imprima su título en la parte superior del póster e inmediatamente debajo el título, el nombre(s) y las afiliaciones del (los) autor(es)
                            </li>
                            <li>
                               Dimensión aproximada de 84.1 x 118.9 cm 
                            </li>
                            <li>
                                Debe presentar las siguientes secciones: título, autores, afiliaciones, introducción, materiales y métodos, resultados y discusión, conclusiones, referencias y agradecimientos
                            </li>
                            <li>
                                Recomendado que esté equilibrado en cuanto a figuras y texto
                            </li>
                            <li>
                                Los gráficos y figuras deben ser legibles desde una distancia de 2.5 m
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row well well-lg">
                    <div class="col-sm-12">
                        <label><h3>Responsabilidades del ponente</h3></label>
                    </div>
                    <div class="col-sm-12" align="justify">
                        <ul>
                            <li>
                                Es la responsabilidad del (los) autor (es) estar presente (s) durante las 2 horas de exposición.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row well well-lg">
                    <div class="col-sm-12">
                        <label><h3>Evaluación de póster</h3></label>
                    </div>
                    <div class="col-sm-12" align="justify">
                        <label>Nanoandes premiará a los 3 mejores posters, para lo cual el comité evaluador tomará en cuenta lo siguiente:</label>
                        <ul>
                            <li>
                                Contenido del trabajo
                            </li>
                            <li>
                                Apariencia visual
                            </li>
                            <li>
                                Excelencia gráfica
                            </li>
                            <li>
                                Calidad de la presentación oral
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row well well-lg">
                    <div class="col-sm-12">
                        <label><h3>Montaje y desmontaje</h3></label>
                    </div>
                    <div class="col-sm-12" align="justify">
                        <label>Los póster se montarán el lunes 3 de junio a las 8:30 h en el auditorio de la Universidad  Tecnológica de Querétaro y su desmontaje será al termino de la clausura del simposio</label>
                    </div>
                </div>
                <?php
                //}
                ?>

            </div>
            <!-- PANEL-BODY END -->

        </div>
        <!-- HPANEL HBLUE END -->

    </div>
    <!-- COL-LG-12 END -->

    <!-- ROW START -->
    <div class="row">
        <div class="col-lg-12">
            <label>  </label>
        </div>
        <div class="col-lg-12">
            <label>  </label>
        </div>
        <div class="col-lg-12">
            <label>  </label>
        </div>
    </div>
    <!-- ROW END -->

</div>
<!-- ROW END -->