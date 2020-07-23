<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of registro_nuevo_usuario
 *
 * @author marioeduardo
 */
class beneficiario extends CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('is_login')) {
            redirect(base_url() . "login", 'refresh');
        }
        $this->load->model('usuario_model');
        $this->load->model('beneficiario_model');
        //Modelos
    }

    public function index() {
        $idpropietario = $this->session->userdata('idprop');
        $nombrepropietario=$this->session->userdata('nombre');
        $data = array();
//        $data['municipios'] = $this->municipio_model->consultar_municipios();
//
//        $data['estados'] = $this->estado_model->consultar_estados();


        /*
         * para metro que indica que el controlador usa un archivo .js para 
         * realizar una funcion en la vista por medio de jQuery
         * @uses ./static/admin/js/alerts_recuperar_passw
         * 
         */

//        $data['scripts'] = array();
//        $data['scripts'][] = 'alerts_recuperar_passw';
//
//        $data['scripts'][] = 'correoEnviado';
//        $data['scripts'][] = 'validacionCorreo';

        /*
         * parameto que se manda a la  vista para mostrar el titulo
         */
        $data['titulo'] = "Súper Recarga | Beneficiarios";
        $data['nombre'] = $nombrepropietario;
        $data['idprop'] = $idpropietario;
        $data['telefonos'] = $this->beneficiario_model->beneficiarios_prop($idpropietario);
        $data['beneficiarios'] = $this->beneficiario_model->beneficiarios_prop_detalle($idpropietario);
        /**
         * Cargamos la vista completa de la seccion correspondiente
         */
        $data = $this->load->view('app/public/beneficiarios_view', $data, FALSE);
    }

    public function crear_solicitud() {

        //Validamos los campos del formulario
        $this->form_validation->set_rules('apellido1', 'apellido1', 'trim|required|xss_clean');
        $this->form_validation->set_rules('apellido2', 'apellido2', 'trim|xss_clean');
        $this->form_validation->set_rules('nombre', 'nombre', 'trim|required|xss_clean');
        $this->form_validation->set_rules('universidad', 'universidad', 'trim|required|xss_clean');
        $this->form_validation->set_rules('carrera', 'carrera', 'trim|required|xss_clean');
        $this->form_validation->set_rules('correo1', 'correo', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password1', 'password', 'trim|required|xss_clean');
        $this->form_validation->set_rules('capitulo', 'capitulo', 'trim|required|xss_clean');
        $this->form_validation->set_rules('nanoarte', 'nanoarte', 'trim|required|xss_clean');
        $this->form_validation->set_rules('asistencia', 'asistencia', 'trim|xss_clean');
        $this->form_validation->set_rules('expositor', 'expositor', 'trim|xss_clean');

        //Si pasamos la validacion
        if ($this->form_validation->run()) {
            //Creamos un arreglo con los campos de la base de datos
            //como indice y el valor a partir del post

            $arr_ins_solicitud = array();
            $arr_ins_solicitud['nombres'] = $this->input->post('nombre');
            $arr_ins_solicitud['apellido1'] = $this->input->post('apellido1');
            $arr_ins_solicitud['apellido2'] = $this->input->post('apellido2');
            $arr_ins_solicitud['universidad'] = $this->input->post('universidad');
            $arr_ins_solicitud['carrera'] = $this->input->post('carrera');
            $arr_ins_solicitud['nom_usuario'] = $this->input->post('correo1');
            $arr_ins_solicitud['contrasena'] = md5($this->input->post('password1'));
            $arr_ins_solicitud['tipo'] = 2;
            $arr_ins_solicitud['estatus'] = 1;
            $arr_ins_solicitud['capitulo'] = $this->input->post('capitulo');
            $arr_ins_solicitud['nanoarte'] = $this->input->post('nanoarte');
            $arr_ins_solicitud['asistencia'] = $this->input->post('asistencia');
            $arr_ins_solicitud['expositor'] = $this->input->post('expositor');

//            $variable = $this->solicitud_model->existente_curp($arr_ins_solicitud['curp']);
//            $variable2 = $this->solicitud_model->existente_correo($arr_ins_solicitud['correo']);

//            if (!is_null($variable)) {
//
//                $this->session->set_flashdata('solicitud_incorrecta', 'El aspirante ya existe,Verificar Curp');
//                redirect(base_url() . 'usuario/registro_nuevo_usuario', 'refresh');
//            }if (!is_null($variable2)) {
//                $this->session->set_flashdata('solicitud_incorrecta2', 'El aspirante ya existe,Verificar correo electronico');
//                redirect(base_url() . 'usuario/registro_nuevo_usuario', 'refresh');
//            } else {
//                $this->solicitud_model->crear_solicitud($arr_ins_solicitud);
//
//                redirect(base_url() . "login", 'refresh');
//                //echo "es la buena";
//            }
//            echo "Asistencia".$arr_ins_solicitud['asistencia'];
//            echo "Expositor".$arr_ins_solicitud['expositor'];
            $usu=$this->usuario_model->insertar($arr_ins_solicitud);
            if($arr_ins_solicitud['expositor']==1){
                redirect(base_url() . "usuario/registro_nuevo_usuario/poster/".$usu, 'refresh');
            }
            redirect(base_url() . "login", 'refresh');
        } else {
            var_dump(validation_errors());
        }
    }
    
    public function poster($usu) {
        $data = array();
        $data['titulo'] = "Simposio | Registro de poster";
        $data['usuario'] = $usu;
        $data = $this->load->view('app/public/registro_poster_view', $data, FALSE);

    }
    
    public function crear_poster() {
        $this->form_validation->set_rules('nombre', 'nombre', 'trim|required|xss_clean');
        if ($this->form_validation->run()) {
            //Creamos un arreglo con los campos de la base de datos
            //como indice y el valor a partir del post

            $arr_ins_solicitud = array();
            $arr_ins_solicitud['descripcion'] = $this->input->post('nombre');
            $arr_ins_solicitud['idusuario'] = $this->input->post('usuario');
            
            $this->usuario_model->insertar_poster($arr_ins_solicitud);
            redirect(base_url() . "login", 'refresh');
            } else {
            var_dump(validation_errors());
        }
    }
    
    public function eliminar($id) {

        /*
         * Traer el modelo para eliminar registro, con la respectiva función
         */
        $this->load->model('beneficiario_model');
        
        $datos_beneficiario = $this->beneficiario_model->consultar_beneficiario($id);
        $arr_baja = array();
        $arr_baja['idbeneficiario'] = $id;
        $arr_baja['telefono'] = $datos_beneficiario->telefono;
        $arr_baja['idpaquete'] = $datos_beneficiario->idpaquete;
        $arr_baja['idoperador'] = $datos_beneficiario->idoperador;
        $arr_baja['fecha'] = date('Y-m-d');

        $this->beneficiario_model->insertar_baja($arr_baja);
        
        $this->beneficiario_model->eliminar_beneficiario($id);

        redirect(base_url() . 'usuario/beneficiario', 'refresh');
    }

}
