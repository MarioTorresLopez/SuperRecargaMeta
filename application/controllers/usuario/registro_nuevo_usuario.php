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
class registro_nuevo_usuario extends CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('is_login')) {
            redirect(base_url() . "login", 'refresh');
        }
        $this->load->model('usuario_model');
        $this->load->model('operador_model');
        $this->load->model('paquete_model');
        $this->load->model('beneficiario_model');
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
        $data['titulo'] = "Simposio | Registro de cuenta nueva";
        $data['operadores'] = $this->operador_model->consultar_operadores();
        /**
         * Cargamos la vista completa de la seccion correspondiente
         */
        $data = $this->load->view('app/public/registro_view', $data, FALSE);
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
    
    public function insertar_beneficiario() {
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
                    redirect(base_url() . 'usuario/beneficiario', 'refresh');
                } else {
                    //$this->session->set_flashdata('materia_inco', 'La materia ya existe');
                    redirect(base_url() . 'usuario/beneficiario', 'refresh');
                }
            } else {

                $idbeneficiario=$this->beneficiario_model->insertar($arr_beneficiario);
                
                $datos_beneficiario=$this->beneficiario_model->consultar_beneficiario($idbeneficiario);
                $arr_alta = array();
                $arr_alta['idbeneficiario'] = $idbeneficiario;
                $arr_alta['telefono'] = $datos_beneficiario->telefono;
                $arr_alta['idpaquete'] = $datos_beneficiario->idpaquete;
                $arr_alta['idoperador'] = $datos_beneficiario->idoperador;
                $arr_alta['fecha'] = date('Y-m-d');
                
                $this->beneficiario_model->insertar_alta($arr_alta);
                
                redirect(base_url() . 'usuario/beneficiario', 'refresh');
            }
            
            //$this->beneficiario_model->insertar($arr_beneficiario);
            //redirect(base_url() . "usuario/beneficiario", 'refresh');
        }
        else {
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

}
