<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of taller_model
 *
 * @author marioeduardo
 */
class taller_model extends CI_Model {
    public function cargar_talleres(){
        $cmd="select * from taller";
        $query=$this->db->query($cmd);
        return ($query->num_rows() > 0) ? $query->result() : NULL;
    }
    
    public function inscripcion($arr) {
        $this->db->insert('inscripcion_taller', $arr);
        return TRUE;
    }
    
    public function info_taller($taller) {
        $cmd="select * from taller where id_taller='$taller'";
        $query=$this->db->query($cmd);
        return ($query->num_rows() == 1) ? $query->row() : NULL;
    }
    
    public function verificar_talleres($usuario) {
        $cmd="select inscripcion_taller.idtaller from inscripcion_taller where idusuario='$usuario'";
        $query=$this->db->query($cmd);
        return($query->num_rows()>0) ? $query->result() : NULL;
    }
    
    public function capacidad($taller) {
        $cmd="SELECT count(idtaller) actuales FROM inscripcion_taller WHERE idtaller='$taller'";
        $query=$this->db->query($cmd);
        return ($query->num_rows() == 1) ? $query->row() : NULL;
    }
}
