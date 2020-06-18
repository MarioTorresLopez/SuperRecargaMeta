<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of login
 *
 * @author marioeduardo
 */
class login extends CI_Controller {

    //put your code here
    public function index() {
        $data = array();
        $data['titulo'] = "Súper Recarga | Iniciar sesión";

        $data = $this->load->view('login_view', $data, FALSE);
//        $data = $this->load->view('login_view_1', $data, FALSE);
    }

    public function inicio() {

        //$correousu = $this->input->post('username');
        //$passwordusu = md5($this->input->post('password'));

        $this->load->model('login_model');
        //$this->login_model->consultar_usuario($correousu, $passwordusu);

        /*
          $data = array();
          $data['header']         = $this->load->view('fragmentos/header', $data, TRUE);
          $data['menus']			= $this->login_model->cargar_modulos();
          $data['navigation']     = $this->load->view('fragmentos/navigation', $data, TRUE);
          $data['right_siderbar'] = $this->load->view('fragmentos/right_siderbar', $data, TRUE);
          $data['area_de_trabajo'] = $this->load->view('area_de_trabajo/inicio', $data, TRUE);
          $data['footer']         = $this->load->view('fragmentos/footer', $data, TRUE);
          $this->load->view("main_view", $data, FALSE);
         */

        /** 		  
         * La variable data representa el contenedor de envio de
         * información entre la vista y los contrladores
         * Dado que normalmente enviamos más de un dato a una vista
         * Creamos un arreglo sobre la variable $data
         */
        $data = array();
        $data['titulo'] = app_title() . " | Inicio";


        /**
         * Si el indice show_header se encuentra en TRUE
         * La vista mostrará el encabezado general de la aplicación 
         * Pensado UNICAMENTE PARA LA SECCION DE INICIO
         */
        $data['show_header'] = TRUE;

        /**
         * Los breadcrumbs son los elementos que muestran 
         * la refeencia entra cada sección, y la descendencia 
         * de los elementos 
         * Si el arreglo breadcrumbs NO EXISTE, no 
         * se mostrará ninguna sección de encabezado de la aplicación
         */
        $data['breadcrumbs'] = array();

        /**
         * Indica el titulo de la sección dentro del panel superior
         */
        $data['breadcrumbs']['titulo'] = "Inicio";
        $data['breadcrumbs']['subtitulo'] = " ";

        /**
         * Este secciíon muestra la descendencia de la sección 
         * en la que nos encontremos navegando
         * El arreglo Links contiene un arreglo con el nombre y la URL al controlador
         * El último elemento del arreglo NO ES UN ARREGLO, pues es la seccion 
         * donde nos encontramos
         */
        $data['breadcrumbs']['links'] = array(array('AIDE', '#'), 'Inicio');

        /**
         * el indice app_right_sidebar indica
         * la vista o fragmento en cuestion cuenta con 
         * menu lateral derecho o no (en caso de no contar desaparecerá el menu 'news')
         * delhgeader
         */
        $data['app_right_sidebar'] = $this->load->view('app/private/fragments/main_right_sidebar', $data, TRUE);

        /**
         * Invoca al fragmento correspondiente al encabezado del sitio		 
         */
        $data['app_header'] = $this->load->view('app/private/fragments/main_header', $data, TRUE);

        /*
         * Invocar la consulta de los mopdulos que tiene dicho usuario (menu izquierdo)
         */
        $data['modulos'] = $this->login_model->cargar_modulos();

        /**
         * Invoca al fragmento correspondiente menu lateral izquierdo (menu principal)
         */
        $data['app_nav'] = $this->load->view('app/private/fragments/main_nav', $data, TRUE);


        /**
         * Referencia al fragmento del contenido de esta sección
         */
        $data['app_fragment'] = $this->load->view('app/private/fragments/modules/inicio_fragment', $data, TRUE);

        /**
         * Cargamos la vista completa de la seccion correspondiente
         */
        $this->load->view('app/private/main_view.php', $data, FALSE);
    }

}
