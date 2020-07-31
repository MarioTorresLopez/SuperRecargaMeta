<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of beneficiario_model
 *
 * @author marioeduardo
 */
class beneficiario_model extends CI_Model {
    
    public function insertar($arr) {
        $this->db->insert('beneficiario', $arr);
        return $this->db->insert_id();
        //return TRUE;
    }
    
    public function beneficiarios_prop($idprop) {
        $cmd="SELECT count(idpropietario) telefonos FROM beneficiario WHERE idpropietario='$idprop' and estatus=1";
        $query=$this->db->query($cmd);
        return ($query->num_rows() == 1) ? $query->row() : NULL;
    }
    
    public function beneficiarios_prop_detalle($idprop) {
        $cmd="select beneficiario.idbeneficiario,beneficiario.nombrecorto,beneficiario.telefono,beneficiario.estatus,
(select precio from paquete where beneficiario.idpaquete=paquete.idpaquete) preciopaquete,
(select nombre from paquete where beneficiario.idpaquete=paquete.idpaquete) nompaquete,
(select nombre from operador where beneficiario.idoperador=operador.idoperador) nomoperador
from beneficiario where idpropietario='$idprop' and estatus=1";
        $query=$this->db->query($cmd);
        return($query->num_rows()>0) ? $query->result() : NULL;
    }
    
    public function eliminar_beneficiario($id) {
        $hoy=date('Y-m-d');
        $cmd = "UPDATE beneficiario SET estatus=0,fechabaja='$hoy' WHERE idbeneficiario='$id'";
        $query = $this->db->query($cmd);
        return TRUE;
    }
    
    public function existente($tel) {
        $cmd="SELECT * FROM beneficiario WHERE telefono LIKE '$tel'";
        $query=$this->db->query($cmd);
        return ($query->num_rows == 1) ? $query->row() : NULL;
    }
    
    public function activar($id){
        $cmd = "UPDATE beneficiario SET estatus=1 WHERE idbeneficiario='$id'";
        $query = $this->db->query($cmd);
        return TRUE;
    }
    
    public function insertar_alta($arr) {
        $this->db->insert('alta', $arr);
        return TRUE;
    }
    
    public function insertar_baja($arr) {
        $this->db->insert('baja', $arr);
        return TRUE;
    }
    
    public function consultar_beneficiario($id) {
        $cmd="SELECT * FROM beneficiario WHERE idbeneficiario='$id'";
        $query=$this->db->query($cmd);
        return ($query->num_rows == 1) ? $query->row() : NULL;
    }
    
    public function consultar_altas() {
        $cmd="select telefono,
(select nombre from paquete where alta.idpaquete=paquete.idpaquete) nombrepaquete,
(select precio from paquete where alta.idpaquete=paquete.idpaquete) preciopaq,
(select nombre from operador where alta.idoperador=operador.idoperador) nomoperador,
fecha
from alta";
        $query=$this->db->query($cmd);
        return($query->num_rows()>0) ? $query->result() : NULL;
    }
    
    public function consultar_bajas() {
        $cmd="select telefono,
(select nombre from paquete where baja.idpaquete=paquete.idpaquete) nombrepaquete,
(select precio from paquete where baja.idpaquete=paquete.idpaquete) preciopaq,
(select nombre from operador where baja.idoperador=operador.idoperador) nomoperador,
fecha
from baja";
        $query=$this->db->query($cmd);
        return($query->num_rows()>0) ? $query->result() : NULL;
    }
    
    public function consultar_altalog($idoperador,$idpaquete) {
        $cmd="select p.*,(select nombre from operador where idoperador='$idoperador') operador from paquete p where idoperador='$idoperador' and idpaquete='$idpaquete'";
        $query=$this->db->query($cmd);
        return ($query->num_rows == 1) ? $query->row() : NULL;
    }
    
    public function insertar_altalog($arr) {
        $this->db->insert('logaltas', $arr);
        return TRUE;
    }
    
    public function insertar_bajalog($arr) {
        $this->db->insert('logbajas', $arr);
        return TRUE;
    }
}
