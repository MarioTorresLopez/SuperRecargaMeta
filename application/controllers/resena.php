<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of resena
 *
 * @author marioeduardo
 */
class resena extends CI_Controller {
    public function index() {

        

        //Cargamos una vista completa
        /*
         * Aunque no le pasemos contenido a la vista
         * debemos declarar a DATA
         */
        $data = array();
        $data['app_title']  = "Simposio | Reseña";
        $data['titulo'] = "Inicio";
        /*
         * Cuando una vista tiene el tercer parametro en TRUE indica que es
         * una vista que se pasa como STRING
         */
        $data['fragmento'] = $this->load->view('fragmento_inicio', $data, TRUE);

        //$this->load->view("inicio_view", $data, FALSE);
        $this->load->view("resena_view", $data, FALSE);
    }
}
