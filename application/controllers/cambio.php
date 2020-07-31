<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cambio
 *
 * @author marioeduardo
 */
class cambio extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('is_login')) {
            redirect(base_url() . "login", 'refresh');
        }
        $this->load->model('login_model');
    }
    
    public function usuario() {
        $data = array();
        
        $data['titulo'] = "Súper Recarga | Cambio de contraseña";

        $data = $this->load->view('cambio_view', $data, FALSE);
    }
    
    public function cambio_post() {
        $idpropietario = $this->session->userdata('idprop');
        $password = $this->input->post('password1');
        
        $arr_update = array(
            "contrasena" => md5($password),
            "estatus" => 1
        );
        $this->login_model->cambiar_password($idpropietario,$arr_update);

        redirect(base_url() . 'usuario/beneficiario', 'refresh');
    }
}
