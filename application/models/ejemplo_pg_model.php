<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ejemplo_pg_model extends CI_Model {

	public function find_all() {
		$query = $this->db->get('persona');
		return ($query->num_rows() > 0) ? $query->result() : NULL;
	}

	public function find($id) {
		/*
		Para retornar UN SOLO registro usamos row()
		Para retornar UNA LISTA usamos result()
		*/
		$query = $this->db->get('persona');
		$this->db->where('idpersona', $id);
		return ($query->num_rows() == 1) ? $query->row() : NULL;
	}

	public function delete($id) {
		$this->db->where('idpersona', $id);
		$this->db->delete('persona');

		return TRUE;
	}

}

/* End of file ejemplo_pg_model.php */
/* Location: ./application/models/ejemplo_pg_model.php */