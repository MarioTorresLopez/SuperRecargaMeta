<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of propietario_model
 *
 * @author marioeduardo
 */
class propietario_model extends CI_Model {
    
    public function info_propietario($curprfc) {
        $cmd="select * from propietario where curp like '$curprfc'";
        $query=$this->db->query($cmd);
        return ($query->num_rows() == 1) ? $query->row() : NULL;
    }
    
    public function insertar($arr) {
        $this->db->insert('propietario', $arr);
        return TRUE;
    }
}
