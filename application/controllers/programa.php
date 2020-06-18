<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of programa
 *
 * @author marioeduardo
 */
class programa extends CI_Controller {
    public function prog1() {

        

        //Cargamos una vista completa
        /*
         * Aunque no le pasemos contenido a la vista
         * debemos declarar a DATA
         */
        $data = array();
        $data['app_title']  = "Simposio | Programa";
        $data['titulo'] = "Inicio";
        /*
         * Cuando una vista tiene el tercer parametro en TRUE indica que es
         * una vista que se pasa como STRING
         */
        $data['fragmento'] = $this->load->view('fragmento_inicio', $data, TRUE);

        //$this->load->view("inicio_view", $data, FALSE);
        $this->load->view("programa/programa1_view", $data, FALSE);
    }
    
    public function prog2() {

        

        //Cargamos una vista completa
        /*
         * Aunque no le pasemos contenido a la vista
         * debemos declarar a DATA
         */
        $data = array();
        $data['app_title']  = "Simposio | Programa";
        $data['titulo'] = "Inicio";
        /*
         * Cuando una vista tiene el tercer parametro en TRUE indica que es
         * una vista que se pasa como STRING
         */
        $data['fragmento'] = $this->load->view('fragmento_inicio', $data, TRUE);

        //$this->load->view("inicio_view", $data, FALSE);
        $this->load->view("programa/programa2_view", $data, FALSE);
    }
    
    public function prog3() {

        

        //Cargamos una vista completa
        /*
         * Aunque no le pasemos contenido a la vista
         * debemos declarar a DATA
         */
        $data = array();
        $data['app_title']  = "Simposio | Programa";
        $data['titulo'] = "Inicio";
        /*
         * Cuando una vista tiene el tercer parametro en TRUE indica que es
         * una vista que se pasa como STRING
         */
        $data['fragmento'] = $this->load->view('fragmento_inicio', $data, TRUE);

        //$this->load->view("inicio_view", $data, FALSE);
        $this->load->view("programa/programa3_view", $data, FALSE);
    }
}
