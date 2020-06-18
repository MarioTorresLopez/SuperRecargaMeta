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
class taller extends CI_Controller {
    public function __construct() {
        parent::__construct();

        if (!$this->session->userdata('is_login')) {
            redirect(base_url() . "login", 'refresh');
        }
        $this->load->model('taller_model');
        
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
        $data['capacidad'][]=array();
        $data['capacidad'][]=$this->taller_model->capacidad(1);
        $data['capacidad'][]=$this->taller_model->capacidad(2);
        $data['capacidad'][]=$this->taller_model->capacidad(3);
        $data['capacidad'][]=$this->taller_model->capacidad(4);
        $data['capacidad'][]=$this->taller_model->capacidad(5);
        $data['capacidad'][]=$this->taller_model->capacidad(6);
        $data['capacidad'][]=$this->taller_model->capacidad(7);
        $data['capacidad'][]=$this->taller_model->capacidad(8);
        $data['capacidad'][]=$this->taller_model->capacidad(9);
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
        $data['app_fragment'] = $this->load->view('app/private/fragments/modules/taller_view', $data, TRUE);

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
    
    public function inscripcion_post($taller) {
        
        $data = array();
        $data['talleres_inscrito'] = $this->taller_model->verificar_talleres($this->session->userdata('idusu'));
        
        if(!is_null($data['talleres_inscrito']))
        {
            //echo 'Aqui cuando tiene talleres';
            $data['taller_actual']=$this->taller_model->info_taller($taller);
            $cont=0;
            $aux=0;
            foreach ($data['talleres_inscrito'] as $verificar)
            {
                $aux++;
                $data['verificar_fecha']=$this->taller_model->info_taller($verificar->idtaller);
                if($data['verificar_fecha']->fecha == $data['taller_actual']->fecha)
                {
                    $cont++;
                }
            }
            if($aux<2){
            if($cont==0)
            {
                $capacidad_actual=$this->taller_model->capacidad($taller);
                if($capacidad_actual->actuales < $data['taller_actual']->capacidad)
                {
                    $usu = $this->session->userdata('idusu');

                    $arr_ins_solicitud = array();
                    $arr_ins_solicitud['idusuario'] = $usu;
                    $arr_ins_solicitud['idtaller'] = $taller;

                    //$this->taller_model->inscripcion($arr_ins_solicitud);
                    //redirect(base_url() . "app/taller/inscripcion", 'refresh');
                }
                else
                {
                    $this->session->set_flashdata('modalidad_incorrecta', 'El taller esta a su capacidad total');
                    redirect(base_url() . 'app/taller/inscripcion', 'refresh');
                }
            }
            else
            {
                $this->session->set_flashdata('modalidad_incorrecta', 'Solo puedes inscribirte a un taller por día, intenta con otro');
                redirect(base_url() . 'app/taller/inscripcion', 'refresh');
            }
            }
            else{
                $this->session->set_flashdata('modalidad_incorrecta', 'Solo puedes inscribirte a dos talleres en todo el evento');
                redirect(base_url() . 'app/taller/inscripcion', 'refresh');
            }
        }
        else
        {
            
            $capacidad_actual = $this->taller_model->capacidad($taller);
            if ($capacidad_actual->actuales < $data['taller_actual']->capacidad) {
                $usu = $this->session->userdata('idusu');

                $arr_ins_solicitud = array();
                $arr_ins_solicitud['idusuario'] = $usu;
                $arr_ins_solicitud['idtaller'] = $taller;

                //$this->taller_model->inscripcion($arr_ins_solicitud);
                //redirect(base_url() . "app/taller/inscripcion", 'refresh');
            } else {
                $this->session->set_flashdata('modalidad_incorrecta', 'El taller esta a su capacidad total');
                redirect(base_url() . 'app/taller/inscripcion', 'refresh');
            }

            //$this->taller_model->inscripcion($arr_ins_solicitud);
            //redirect(base_url() . "app/taller/inscripcion", 'refresh');
        }
        
        
        
//        $usu=$this->session->userdata('idusu');
//        
//        $arr_ins_solicitud = array();
//        $arr_ins_solicitud['idusuario'] = $usu;
//        $arr_ins_solicitud['idtaller'] = $taller;
//        
//        redirect(base_url() . "app/taller/inscripcion", 'refresh');
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
