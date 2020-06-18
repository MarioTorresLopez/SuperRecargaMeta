<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of prueba
 *
 * @author marioeduardo
 */
class prueba extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('usuario_model');
        $this->load->model('login_model');
        $this->load->model('operador_model');
        $this->load->model('propietario_model');
    }
    public function index() {
        $data = array();
        $data['titulo'] = "Súper Recarga | Registro";
        /**
         * Cargamos la vista completa de la seccion correspondiente
         */
        $data = $this->load->view('app/public/prueba_view', $data, FALSE);
    }
    
    public function prueba_post(){
        //Validamos los campos del formulario
        $this->form_validation->set_rules('apellido1', 'apellido1', 'trim|required|xss_clean');
        $this->form_validation->set_rules('apellido2', 'apellido2', 'trim|xss_clean');
        $this->form_validation->set_rules('nombre', 'nombre', 'trim|required|xss_clean');
        $this->form_validation->set_rules('email', 'email', 'trim|required|xss_clean');
        $this->form_validation->set_rules('rfccurp', 'rfccurp', 'trim|required|xss_clean');
        $this->form_validation->set_rules('empresa', 'empresa', 'trim|required|xss_clean');
        $this->form_validation->set_rules('numeroempleado', 'numeroempleado', 'trim|required|xss_clean');
        
        if ($this->form_validation->run()) {
            $curprfc=$this->input->post('rfccurp');
            $datos_propietario = $this->propietario_model->info_propietario($curprfc);

            if (!is_null($datos_propietario)) {
                $datos_monto=$this->login_model->monto($datos_propietario->idpropietario);
                $monto_actual=0;
                if(!is_null($datos_monto)){
                    foreach ($datos_monto as $monto_individual){
                        $monto_actual=$monto_actual+$monto_individual->precio;
                    }
                }
                else{
                    $monto_actual=0;
                }
                
                $arreglo_sesiones_propietario = array(
                    //controlador               base
                    'idprop' => $datos_propietario->idpropietario,
                    'nombre' => $datos_propietario->nombre,
                    'ap' => $datos_propietario->apellido1,
                    'am' => $datos_propietario->apellido2,
                    'curprfc' => $datos_propietario->curp,
                    'empresa' => $datos_propietario->empresa,
                    'correousu' => $datos_propietario->correo,
                    'monto' => $monto_actual,
                    'is_login' => TRUE
                );
                $this->session->set_userdata( $arreglo_sesiones_propietario );
                //Gestioar una solsa sesion
                $this->session->set_userdata("OTRA_SESION", "OTRO_VALOR");
                $this->session->unset_userdata('OTRA_SESION');

                redirect(base_url()."usuario/beneficiario",'refresh');
            }
            else {
                $curprfc = $this->input->post('rfccurp');
                $arr_propietario = array();
                $arr_propietario['nombre'] = $this->input->post('nombre');
                $arr_propietario['apellido1'] = $this->input->post('apellido1');
                $arr_propietario['apellido2'] = $this->input->post('apellido2');
                $arr_propietario['correo'] = $this->input->post('email');
                $arr_propietario['curp'] = $this->input->post('rfccurp');
                $arr_propietario['empresa'] = $this->input->post('empresa');
                $arr_propietario['numempleado'] = $this->input->post('numeroempleado');
                $arr_propietario['estatus'] = 1;
                
                $this->propietario_model->insertar($arr_propietario);
                $datos_propietario = $this->propietario_model->info_propietario($curprfc);
                if (!is_null($datos_propietario)) {
                    $arreglo_sesiones_propietario = array(
                        //controlador               base
                        'idprop' => $datos_propietario->idpropietario,
                        'nombre' => $datos_propietario->nombre,
                        'correousu' => $datos_propietario->correo,
                        'is_login' => TRUE
                    );
                    $this->session->set_userdata($arreglo_sesiones_propietario);
                    //Gestioar una solsa sesion
                    $this->session->set_userdata("OTRA_SESION", "OTRO_VALOR");
                    $this->session->unset_userdata('OTRA_SESION');

                    redirect(base_url() . "usuario/beneficiario", 'refresh');
                } else {
                    var_dump("Error al insertar y devolver");
                }

                //$this->usuario_model->insertar($arr_ins_solicitud);
                //redirect(base_url() . "usuario/beneficiario", 'refresh');
            }
            
            
//            $curprfc=$this->input->post('rfccurp');
//            $arr_propietario = array();
//            $arr_propietario['nombre'] = $this->input->post('nombre');
//            $arr_propietario['apellido1'] = $this->input->post('apellido1');
//            $arr_propietario['apellido2'] = $this->input->post('apellido2');
//            $arr_propietario['correo'] = $this->input->post('email');
//            $arr_propietario['curp'] = $this->input->post('rfccurp');
//            $arr_propietario['empresa'] = $this->input->post('empresa');
//            $arr_propietario['numempleado'] = $this->input->post('numeroempleado');
//            $arr_propietario['estatus'] = 1;
//            
//            $this->propietario_model->insertar($arr_propietario);
//            $datos_propietario = $this->propietario_model->info_propietario($curprfc);
//            if (!is_null($datos_propietario)) {
//                $arreglo_sesiones_propietario = array(
//                    //controlador               base
//                    'idprop' => $datos_propietario->idpropietario,
//                    'nombre' => $datos_propietario->nombre,
//                    'correousu' => $datos_propietario->correo,
//                    'is_login' => TRUE
//                );
//                $this->session->set_userdata( $arreglo_sesiones_propietario );
//                //Gestioar una solsa sesion
//                $this->session->set_userdata("OTRA_SESION", "OTRO_VALOR");
//                $this->session->unset_userdata('OTRA_SESION');
//
//                redirect(base_url()."usuario/beneficiario",'refresh');
//            }
//            else{
//                var_dump("Error al insertar y devolver");
//            }
            //redirect(base_url() . "usuario/beneficiario", 'refresh');
        }
        else {
            var_dump(validation_errors());
        }
    }
}
