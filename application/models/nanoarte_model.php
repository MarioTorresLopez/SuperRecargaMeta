<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of nanoarte_model
 *
 * @author marioeduardo
 */
class nanoarte_model extends CI_Model {
    
    public function mi_foto($usuario) {
        $cmd="select * from contenido_nanoarte where id_usuario='$usuario'";
        $query=$this->db->query($cmd);
        return ($query->num_rows() == 1) ? $query->row() : NULL;
    }
    
    public function insertar_foto($arr) {
        $this->db->insert('contenido_nanoarte', $arr);
        return TRUE;
    }
}
