<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function index()
    {
        /*
        Validamos los $_POST
         */
        $this->form_validation->set_rules('username', 'username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'password', 'trim|required|xss_clean');

        if ($this->form_validation->run()) {
            $correousu = $this->input->post('username');
            $passwordusu = md5($this->input->post('password'));

            $this->load->model('login_model');
            $datos_propietario = $this->login_model->consultar_propietario($correousu, $passwordusu);

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
                if($datos_propietario->estatus==1){
                    $arreglo_sesiones = array(
                        //controlador               base
                        'idprop' => $datos_propietario->idpropietario,
                        'nombre' => $datos_propietario->nombre,
                        'ap' => $datos_propietario->apellido1,
                        'am' => $datos_propietario->apellido2,
                        'curprfc' => $datos_propietario->curp,
                        'telefono' => $datos_propietario->telefono,
                        'empresa' => $datos_propietario->empresa,
                        'correousu' => $datos_propietario->correo,
                        'monto' => $monto_actual,
                        'is_login' => TRUE
                    );
                    $this->session->set_userdata($arreglo_sesiones);
                    //Gestioar una solsa sesion
                    $this->session->set_userdata("OTRA_SESION", "OTRO_VALOR");
                    $this->session->unset_userdata('OTRA_SESION');
                    redirect(base_url() . "usuario/beneficiario", 'refresh');
                }
                else{
                    $arreglo_sesiones = array(
                        //controlador               base
                        'idprop' => $datos_propietario->idpropietario,
                        'nombre' => $datos_propietario->nombre,
                        'ap' => $datos_propietario->apellido1,
                        'am' => $datos_propietario->apellido2,
                        'curprfc' => $datos_propietario->curp,
                        'telefono' => $datos_propietario->telefono,
                        'empresa' => $datos_propietario->empresa,
                        'correousu' => $datos_propietario->correo,
                        'monto' => $monto_actual,
                        'is_login' => TRUE
                    );
                    $this->session->set_userdata($arreglo_sesiones);
                    //Gestioar una solsa sesion
                    $this->session->set_userdata("OTRA_SESION", "OTRO_VALOR");
                    $this->session->unset_userdata('OTRA_SESION');
                    redirect(base_url() . "cambio/usuario", 'refresh');
                }

            } else {
                $this->session->set_flashdata('usuario_incorrecto', 'Los datos introducidos son incorrectos');
                redirect(base_url() . 'login', 'refresh');
            }
        }
        
    }

}

/* End of file auth.php */
/* Location: ./application/controllers/auth.php */
