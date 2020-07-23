<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of registro_beneficiario
 *
 * @author marioeduardo
 */
class registro_beneficiario extends CI_Controller{
    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('is_login')) {
            redirect(base_url() . "login", 'refresh');
        }
        $this->load->model('usuario_model');
        $this->load->model('operador_model');
        $this->load->model('paquete_model');
        $this->load->model('beneficiario_model');
        $this->load->model('propietario_model');
    }
    
    public function index() {
        $data = array();
        $idpropietario = $this->session->userdata('idprop');
        $data['idprop'] = $idpropietario;
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
        $data['titulo'] = "Simposio | Registro de nuevo beneficiario";
        $data['operadores'] = $this->operador_model->consultar_operadores();
        /**
         * Cargamos la vista completa de la seccion correspondiente
         */
        $data = $this->load->view('app/public/registro_beneficiario_view', $data, FALSE);
    }
    
    public function buscar_paquete() {
        $data = array();
        $options = "";
        if ($this->input->post('idoperador')) {
            $operador = $this->input->post('idoperador');
            $paquetes = $this->operador_model->consultar_paquetes_operador($operador);
            ?>
                <option>Selecciona</option>
                <?php
            foreach ($paquetes as $fila) {
                ?>
                 <option value="<?= $fila->idpaquete ?>"><?= $fila->nombre ?> <?= $fila->precio ?></option>
                <?php
            }
        }
    }
    
    public function buscar_paquete_info() {
        $data = array();
        $options = "";
        if ($this->input->post('idpaquete')) {
            $paquete = $this->input->post('idpaquete');
            $info = $this->paquete_model->info_paquete($paquete);
            ?>
                 <label><?= $info->descripcion?> Vigencia <?= $info->vigencia?> días</label>
                <?php
        }
    }
    
    public function insertar_beneficiario() {
        date_default_timezone_set('America/Mexico_City');
        
        if ($this->input->is_ajax_request()) {
            $this->form_validation->set_rules('nombre', 'nombre', 'trim|required|xss_clean');
            $this->form_validation->set_rules('telefono1', 'telefono1', 'trim|required|xss_clean');
            $this->form_validation->set_rules('idpaquete', 'idpaquete', 'trim|required|xss_clean');
            $this->form_validation->set_rules('idoperador', 'idoperador', 'trim|required|xss_clean');
            $this->form_validation->set_rules('idpropietario', 'idpropietario', 'trim|required|xss_clean');
            
            if ($this->form_validation->run()) {
                $arr_beneficiario = array();
                $arr_beneficiario['nombrecorto'] = $this->input->post('nombre');
                $arr_beneficiario['telefono'] = $this->input->post('telefono1');
                $arr_beneficiario['idpaquete'] = $this->input->post('idpaquete');
                $arr_beneficiario['idoperador'] = $this->input->post('idoperador');
                $arr_beneficiario['idpropietario'] = $this->input->post('idpropietario');
                $arr_beneficiario['fecharegistro'] = date('Y-m-d');
                $arr_beneficiario['estatus'] = 1;

                $tel = $this->input->post('telefono1');

                $variable = $this->beneficiario_model->existente($tel);

                //se valida que si existe el nombre de la materia ya no se registre dos veces
                if (!is_null($variable)) {

                    if ($variable->estatus == 0) {
                        $idbene = $variable->idbeneficiario;
                        $this->beneficiario_model->activar($idbene);
                        echo json_encode(array("response_code" => 200, "evento_id" => $idbene));
                        //redirect(base_url() . 'usuario/beneficiario', 'refresh');
                    } else {
                        //$this->session->set_flashdata('materia_inco', 'La materia ya existe');
                        //redirect(base_url() . 'usuario/beneficiario', 'refresh');
                        http_error(403);
                    }
                } else {

                    $idbeneficiario = $this->beneficiario_model->insertar($arr_beneficiario);
                    
                    $datos_beneficiario = $this->beneficiario_model->consultar_beneficiario($idbeneficiario);
                    $arr_alta = array();
                    $arr_alta['idbeneficiario'] = $idbeneficiario;
                    $arr_alta['telefono'] = $datos_beneficiario->telefono;
                    $arr_alta['idpaquete'] = $datos_beneficiario->idpaquete;
                    $arr_alta['idoperador'] = $datos_beneficiario->idoperador;
                    $arr_alta['fecha'] = date('Y-m-d');

                    $this->beneficiario_model->insertar_alta($arr_alta);
                    echo json_encode(array("response_code" => 200, "evento_id" => $idbeneficiario));
                    //redirect(base_url() . 'usuario/beneficiario', 'refresh');
                }
            }
            else{
                http_error(403);
            }
        }
        else{
            http_error(400);
        }
        
//        $this->form_validation->set_rules('nombre', 'nombre', 'trim|required|xss_clean');
//        $this->form_validation->set_rules('telefono1', 'telefono1', 'trim|required|xss_clean');
//        $this->form_validation->set_rules('idpaquete', 'idpaquete', 'trim|required|xss_clean');
//        $this->form_validation->set_rules('idoperador', 'idoperador', 'trim|required|xss_clean');
//        $this->form_validation->set_rules('idpropietario', 'idpropietario', 'trim|required|xss_clean');
//        
//        if ($this->form_validation->run()) {
//            $arr_beneficiario = array();
//            $arr_beneficiario['nombrecorto'] = $this->input->post('nombre');
//            $arr_beneficiario['telefono'] = $this->input->post('telefono1');
//            $arr_beneficiario['idpaquete'] = $this->input->post('idpaquete');
//            $arr_beneficiario['idoperador'] = $this->input->post('idoperador');
//            $arr_beneficiario['idpropietario'] = $this->input->post('idpropietario');
//            $arr_beneficiario['fecharegistro'] = date('Y-m-d');
//            $arr_beneficiario['estatus'] = 1;
//            
//            $tel = $this->input->post('telefono1');
//
//            $variable = $this->beneficiario_model->existente($tel);
//
//            //se valida que si existe el nombre de la materia ya no se registre dos veces
//            if (!is_null($variable)) {
//
//                if ($variable->estatus == 0) {
//                    $idbene = $variable->idbeneficiario;
//                    $this->beneficiario_model->activar($idbene);
//                    redirect(base_url() . 'usuario/beneficiario', 'refresh');
//                } else {
//                    //$this->session->set_flashdata('materia_inco', 'La materia ya existe');
//                    redirect(base_url() . 'usuario/beneficiario', 'refresh');
//                }
//            } else {
//
//                $idbeneficiario=$this->beneficiario_model->insertar($arr_beneficiario);
//                
//                $datos_beneficiario=$this->beneficiario_model->consultar_beneficiario($idbeneficiario);
//                $arr_alta = array();
//                $arr_alta['idbeneficiario'] = $idbeneficiario;
//                $arr_alta['telefono'] = $datos_beneficiario->telefono;
//                $arr_alta['idpaquete'] = $datos_beneficiario->idpaquete;
//                $arr_alta['idoperador'] = $datos_beneficiario->idoperador;
//                $arr_alta['fecha'] = date('Y-m-d');
//                
//                $this->beneficiario_model->insertar_alta($arr_alta);
//                
//                redirect(base_url() . 'usuario/beneficiario', 'refresh');
//            }
//            
//            //$this->beneficiario_model->insertar($arr_beneficiario);
//            //redirect(base_url() . "usuario/beneficiario", 'refresh');
//        }
//        else {
//            var_dump(validation_errors());
//        }
    }
}
