<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ejemplo_pg extends CI_Controller {

	public function __construct()
	{
		parent::__construct(); //super();
		$this->load->model('ejemplo_pg_model');
	}

	public function index()
	{
		$data = array();
		$data['titulo'] = "Consulta";
		$data['personas'] = $this->ejemplo_pg_model->find_all();
		$data['fragmento'] = $this->load->view('fragmento_mostrar_personas_pg_view', $data, TRUE);
		$this->load->view('inicio_view', $data, FALSE);
	}

}

/* End of file ejemplo_pg.php */
/* Location: ./application/controllers/ejemplo_pg.php */