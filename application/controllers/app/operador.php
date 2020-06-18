<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of taller
 *
 * @author marioeduardo
 */
class operador extends CI_Controller {
    public function __construct() {
        parent::__construct();

        if (!$this->session->userdata('is_login')) {
            redirect(base_url() . "login", 'refresh');
        }
        $this->load->model('operador_model');
        
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
        $data['tipo'] = $this->session->userdata('tipo');
        
        //Consultar acuerdos pertenecinetes al usuario
        
        $data['operadores'] = $this->operador_model->consultar_operadores();
        //Para almacenar los modulos de cada rol
        ///$data['modulos'] = array();
        $data['titulo'] = "Súper Recarga | Operadores";
        
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
        $data['breadcrumbs']['links'] = array(array('Súper recarga', '#'),'Inicio');

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
        $data['app_fragment'] = $this->load->view('app/private/fragments/modules/operador_view', $data, TRUE);

        /**
         * Cargamos la vista completa de la seccion correspondiente
         */
        $this->load->view('app/private/main_view.php', $data, FALSE);
    }
    
    public function inscripcion() {
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
        $data['talleres'] = $this->taller_model->cargar_talleres();
        $data['tipo'] = $this->session->userdata('tipo');
        $data['expositor'] = $this->session->userdata('expositor');
        $data['nanoarte'] = $this->session->userdata('nanoarte');
        
        //Consultar acuerdos pertenecinetes al usuario
        
        //$data['acuerdos'] = $this->acuerdo_model->consultar_acuerdos(110);
        //Para almacenar los modulos de cada rol
        ///$data['modulos'] = array();
        $data['titulo'] = "Simposio | Talleres";
        
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
        $data['app_fragment'] = $this->load->view('app/private/fragments/modules/taller_inscripcion_view', $data, TRUE);

        /**
         * Cargamos la vista completa de la seccion correspondiente
         */
        $this->load->view('app/private/main_view.php', $data, FALSE);
    }
    
    public function insertar_post() {
        
        $this->form_validation->set_rules('nombre_operador', 'nombre_operador', 'trim|required|xss_clean');
        if ($this->form_validation->run()) {
            $arr_operador = array();
            $arr_operador['nombre'] = $this->input->post('nombre_operador');
            $arr_operador['estatus'] = 1;
            
            $this->operador_model->insertar($arr_operador);
            redirect(base_url() . "app/operador", 'refresh');
        }
        else {
            var_dump(validation_errors());
        }
    }
    
    public function talleres() {
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
        $data['talleres'] = array();
        $data['talleres_usu']=$this->taller_model->verificar_talleres($this->session->userdata('idusu'));
        if(!is_null($data['talleres_usu'])){
        foreach($data['talleres_usu'] as $t)
        {
            $data['talleres'][]=$this->taller_model->info_taller($t->idtaller);
            
        }
        }
//        foreach ($data['talleres'] as $r) {
//            foreach($r as $gh) {
//                echo $gh;
//            }
//        }
        //$data['talleres'] = $this->taller_model->cargar_talleres();
        $data['tipo'] = $this->session->userdata('tipo');
        $data['expositor'] = $this->session->userdata('expositor');
        $data['nanoarte'] = $this->session->userdata('nanoarte');
        
        //Consultar acuerdos pertenecinetes al usuario
        
        //$data['acuerdos'] = $this->acuerdo_model->consultar_acuerdos(110);
        //Para almacenar los modulos de cada rol
        ///$data['modulos'] = array();
        $data['titulo'] = "Simposio | Mis Talleres";
        
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
        $data['app_fragment'] = $this->load->view('app/private/fragments/modules/talleres_view', $data, TRUE);

        /**
         * Cargamos la vista completa de la seccion correspondiente
         */
        $this->load->view('app/private/main_view.php', $data, FALSE);
        
        
    }
    
    public function detalle($taller) {
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
        $data['taller'] = $this->taller_model->info_taller($taller);
        $data['capacidad']=$this->taller_model->capacidad($taller);
        $data['tipo'] = $this->session->userdata('tipo');
        $data['expositor'] = $this->session->userdata('expositor');
        $data['nanoarte'] = $this->session->userdata('nanoarte');
        
        //Consultar acuerdos pertenecinetes al usuario
        
        //$data['acuerdos'] = $this->acuerdo_model->consultar_acuerdos(110);
        //Para almacenar los modulos de cada rol
        ///$data['modulos'] = array();
        $data['titulo'] = "Simposio | Talleres";
        
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
        $data['app_fragment'] = $this->load->view('app/private/fragments/modules/taller_detalle_view', $data, TRUE);

        /**
         * Cargamos la vista completa de la seccion correspondiente
         */
        $this->load->view('app/private/main_view.php', $data, FALSE);
    }
}
