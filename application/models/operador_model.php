<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of operador_model
 *
 * @author marioeduardo
 */
class operador_model  extends CI_Model{
    
    public function consultar_operadores(){
        $cmd="select * from operador";
        $query=$this->db->query($cmd);
        return ($query->num_rows() > 0) ? $query->result() : NULL;
    }
    
    public function insertar($arr) {
        $this->db->insert('operador', $arr);
        return TRUE;
    }
    
    public function consultar_paquetes_operador($operador){
        $cmd="select * from paquete where idoperador='$operador'";
        $query=$this->db->query($cmd);
        return ($query->num_rows() > 0) ? $query->result() : NULL;
    }
}
