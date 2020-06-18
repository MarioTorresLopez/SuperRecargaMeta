<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of nanoarte
 *
 * @author marioeduardo
 */
class nanoarte extends CI_Controller {
    public function __construct() {
        parent::__construct();

        if (!$this->session->userdata('is_login')) {
            redirect(base_url() . "login", 'refresh');
        }
        $this->load->model('usuario_model');
        $this->load->model('nanoarte_model');
    }
    
    public function index() {
        /*
          Modelo para consultar el rol del usuario que inicio sesión
         */
        $this->load->model('login_model');


        /** 		  
         * La variable data representa el contenedor de envio de
         * información entre la vista y los contrladores
         * Dado que normalmente enviamos más de un dato a una vista
         * Creamos un arreglo sobre la variable $data
         */
        $id = $this->session->userdata('idusu');


        /*
          array de los datos que se van a guardar
         *          */
        $data = array();
        
        
        //Consultar acuerdos pertenecinetes al usuario
        
        //$data['acuerdos'] = $this->acuerdo_model->consultar_acuerdos(110);
        //Para almacenar los modulos de cada rol
        ///$data['modulos'] = array();
        $data['titulo'] = "Simposio | Nanoarte";
        $data['tipo'] = $this->session->userdata('tipo');
        $data['expositor'] = $this->session->userdata('expositor');
        $data['nanoarte'] = $this->session->userdata('nanoarte');
        $data['usuarios'] = $this->usuario_model->cargar_nanoarte();
        
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
        $data['breadcrumbs']['links'] = array(array('AIDE', '#'),'Inicio');

        /**
         * el indice app_right_sidebar indica
         * la vista o fragmento en cuestion cuenta con 
         * menu lateral derecho o no (en caso de no contar desaparecerá el menu 'news')
         * delhgeader
         */
        $data['app_right_sidebar'] = $this->load->view('app/private/fragments/main_right_sidebar', $data, TRUE);
        
        /*
         * Invocar la consulta de los modulos que tiene dicho usuario (menu izquierdo)
         */
        //$id = $this->session->userdata('idusu');
        //$data['menus'] = $this->login_model->cargar_modulos($id);

        /*
          Invocar la consulta para saber el rol del usuario
         */
        $id = $this->session->userdata('idusu');

        /**
         * Invoca al fragmento correspondiente al encabezado del sitio		 
         */
        $data['app_header'] = $this->load->view('app/private/fragments/main_header', $data, TRUE);


        /**
         * Invoca al fragmento correspondiente menu lateral izquierdo (menu principal)
         */
        $data['app_nav'] = $this->load->view('app/private/fragments/main_nav', $data, TRUE);

        /**
         * Referencia al fragmento del contenido de esta sección
         */
        $data['app_fragment'] = $this->load->view('app/private/fragments/modules/nanoarte_admin_view', $data, TRUE);

        /**
         * Cargamos la vista completa de la seccion correspondiente
         */
        $this->load->view('app/private/main_view.php', $data, FALSE);
    }
    
    public function usuario() {

        /*
          Modelo para consultar el rol del usuario que inicio sesión
         */
        $this->load->model('login_model');


        /** 		  
         * La variable data representa el contenedor de envio de
         * información entre la vista y los contrladores
         * Dado que normalmente enviamos más de un dato a una vista
         * Creamos un arreglo sobre la variable $data
         */
        $id = $this->session->userdata('idusu');


        /*
          array de los datos que se van a guardar
         *          */
        $data = array();
        
        
        //Consultar acuerdos pertenecinetes al usuario
        
        //$data['acuerdos'] = $this->acuerdo_model->consultar_acuerdos(110);
        //Para almacenar los modulos de cada rol
        ///$data['modulos'] = array();
        $data['titulo'] = "Simposio | Nanoarte";
        $data['contenido'] =$this->nanoarte_model->mi_foto($this->session->userdata('idusu'));
        $data['tipo'] = $this->session->userdata('tipo');
        $data['expositor'] = $this->session->userdata('expositor');
        $data['nanoarte'] = $this->session->userdata('nanoarte');
        
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
        $data['breadcrumbs']['links'] = array(array('AIDE', '#'),'Inicio');

        /**
         * el indice app_right_sidebar indica
         * la vista o fragmento en cuestion cuenta con 
         * menu lateral derecho o no (en caso de no contar desaparecerá el menu 'news')
         * delhgeader
         */
        $data['app_right_sidebar'] = $this->load->view('app/private/fragments/main_right_sidebar', $data, TRUE);
        
        /*
         * Invocar la consulta de los modulos que tiene dicho usuario (menu izquierdo)
         */
        //$id = $this->session->userdata('idusu');
        //$data['menus'] = $this->login_model->cargar_modulos($id);

        /*
          Invocar la consulta para saber el rol del usuario
         */
        $id = $this->session->userdata('idusu');

        /**
         * Invoca al fragmento correspondiente al encabezado del sitio		 
         */
        $data['app_header'] = $this->load->view('app/private/fragments/main_header', $data, TRUE);


        /**
         * Invoca al fragmento correspondiente menu lateral izquierdo (menu principal)
         */
        $data['app_nav'] = $this->load->view('app/private/fragments/main_nav', $data, TRUE);

        /**
         * Referencia al fragmento del contenido de esta sección
         */
        $data['app_fragment'] = $this->load->view('app/private/fragments/modules/nanoarte_view', $data, TRUE);

        /**
         * Cargamos la vista completa de la seccion correspondiente
         */
        $this->load->view('app/private/main_view.php', $data, FALSE);
        //$this->subir();
    }
    
    public function subirImagen() {
//        $arr_ins_modalidad = array();
//        $arr_ins_modalidad['nombre_artistico'] = $this->input->post('nom_art');
//        $arr_ins_modalidad['descripcion'] = $this->input->post('descripcion');
//        $arr_ins_modalidad['resumen'] = $this->input->post('resumen');
//        $arr_ins_modalidad['autor'] = $this->input->post('autor');
//        $arr_ins_modalidad['agradecimiento'] = $this->input->post('agrade');
//        $arr_ins_modalidad['id_usuario'] = $this->session->userdata('idusu');
//        
//        $this->nanoarte_model->insertar_foto($arr_ins_modalidad);
        
        $file=$this->input->post('nom_art');
        //$mi_imagen = 'userfile';
        $config['upload_path'] ="./subidas/";
        $config['allowed_types'] = "gif|jpg|jpeg|png|tiff|bmp";
        $config['max_size'] = "50000";
        $config['max_width'] = "5000";
        $config['max_height'] = "5000";

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload("imagen")) {
            //*** ocurrio un error
            //$data['uploadError'] = $this->upload->display_errors();
            $this->upload->display_errors();
            //return;
        }
        else{
            $file_info=  $this->upload->data();
            $imagen=$file_info['file_name'];
            $arr_ins_modalidad = array();
            $arr_ins_modalidad['nombre_artistico'] = $this->input->post('nom_art');
            $arr_ins_modalidad['descripcion'] = $this->input->post('descripcion');
            $arr_ins_modalidad['resumen'] = $this->input->post('resumen');
            $arr_ins_modalidad['autor'] = $this->input->post('autor');
            $arr_ins_modalidad['agradecimiento'] = $this->input->post('agrade');
            $arr_ins_modalidad['id_usuario'] = $this->session->userdata('idusu');
            $arr_ins_modalidad['img'] = $imagen;
            $subir=$this->nanoarte_model->insertar_foto($arr_ins_modalidad);
            //echo 'Exitoso';
            redirect(base_url() . "app/nanoarte/usuario", 'refresh');
        }
        //var_dump($this->upload->data());
        //redirect(base_url() . "app/nanoarte/usuario", 'refresh');
    }
    
    public function detalle($usuario) {
        /*
          Modelo para consultar el rol del usuario que inicio sesión
         */
        $this->load->model('login_model');


        /** 		  
         * La variable data representa el contenedor de envio de
         * información entre la vista y los contrladores
         * Dado que normalmente enviamos más de un dato a una vista
         * Creamos un arreglo sobre la variable $data
         */
        $id = $this->session->userdata('idusu');


        /*
          array de los datos que se van a guardar
         *          */
        $data = array();
        
        
        //Consultar acuerdos pertenecinetes al usuario
        
        //$data['acuerdos'] = $this->acuerdo_model->consultar_acuerdos(110);
        //Para almacenar los modulos de cada rol
        ///$data['modulos'] = array();
        $data['titulo'] = "Simposio | Nanoarte";
        $data['tipo'] = $this->session->userdata('tipo');
        $data['expositor'] = $this->session->userdata('expositor');
        $data['nanoarte'] = $this->session->userdata('nanoarte');
        $data['contenido'] = $this->nanoarte_model->mi_foto($usuario);
        
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
        $data['breadcrumbs']['links'] = array(array('AIDE', '#'),'Inicio');

        /**
         * el indice app_right_sidebar indica
         * la vista o fragmento en cuestion cuenta con 
         * menu lateral derecho o no (en caso de no contar desaparecerá el menu 'news')
         * delhgeader
         */
        $data['app_right_sidebar'] = $this->load->view('app/private/fragments/main_right_sidebar', $data, TRUE);
        
        /*
         * Invocar la consulta de los modulos que tiene dicho usuario (menu izquierdo)
         */
        //$id = $this->session->userdata('idusu');
        //$data['menus'] = $this->login_model->cargar_modulos($id);

        /*
          Invocar la consulta para saber el rol del usuario
         */
        $id = $this->session->userdata('idusu');

        /**
         * Invoca al fragmento correspondiente al encabezado del sitio		 
         */
        $data['app_header'] = $this->load->view('app/private/fragments/main_header', $data, TRUE);


        /**
         * Invoca al fragmento correspondiente menu lateral izquierdo (menu principal)
         */
        $data['app_nav'] = $this->load->view('app/private/fragments/main_nav', $data, TRUE);

        /**
         * Referencia al fragmento del contenido de esta sección
         */
        $data['app_fragment'] = $this->load->view('app/private/fragments/modules/detallenano_view', $data, TRUE);

        /**
         * Cargamos la vista completa de la seccion correspondiente
         */
        $this->load->view('app/private/main_view.php', $data, FALSE);
    }
    
}
