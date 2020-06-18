<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of paquete_model
 *
 * @author marioeduardo
 */
class paquete_model extends CI_Model{
    
    public function consultar_paquetes(){
        //$cmd="select * from paquete";
        $cmd="select paquete.idpaquete,paquete.nombre,paquete.descripcion,paquete.precio,paquete.vigencia,
(SELECT nombre FROM operador WHERE paquete.idoperador = operador.idoperador) operador
from paquete";
        $query=$this->db->query($cmd);
        return ($query->num_rows() > 0) ? $query->result() : NULL;
    }
    
    public function insertar($arr) {
        $this->db->insert('paquete', $arr);
        return TRUE;
    }
    
    public function info_paquete($paquete) {
        $cmd="select * from paquete where idpaquete='$paquete'";
        $query=$this->db->query($cmd);
        return ($query->num_rows() == 1) ? $query->row() : NULL;
    }
}
