<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usuario_model extends CI_Model {

    public function cargar_usuarios() {
        $cmd = "select * from usuario";
        $query = $this->db->query($cmd);
        return ($query->num_rows() > 0) ? $query->result() : NULL;
    }
    
    public function cargar_nanoarte() {
        $cmd = "select * from usuario where nanoarte =1";
        $query = $this->db->query($cmd);
        return ($query->num_rows() > 0) ? $query->result() : NULL;
    }
    
    public function cargar_poster() {
        $cmd = "select * from usuario where expositor =1";
        $query = $this->db->query($cmd);
        return ($query->num_rows() > 0) ? $query->result() : NULL;
    }
    
    public function cargar_posters() {
        $cmd = "select cp.*,u.nombres,u.apellido1,u.apellido2 from contenido_poster cp,usuario u where cp.idusuario=u.id_usuario";
        $query = $this->db->query($cmd);
        return ($query->num_rows() > 0) ? $query->result() : NULL;
    }

    //Metodo que inserte en la tabla usuario
    public function insertar($arr) {
        $this->db->insert('usuario', $arr);
        return $this->db->insert_id();
        //return TRUE;
    }

    public function insertar_poster($arr) {
        $this->db->insert('contenido_poster', $arr);
        return TRUE;
    }
    
    public function miposter($usuario) {
        $cmd="select cp.descripcion from contenido_poster cp where idusuario='$usuario'";
        $query=$this->db->query($cmd);
        return ($query->num_rows() == 1) ? $query->row() : NULL;
    }
}

/* End of file usuario_model.php */
/* Location: ./application/models/usuario_model.php */