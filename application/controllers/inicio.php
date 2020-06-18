<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * CI pide que las clases INICIEN en mayusculas (Como en Java)
 */
class Inicio extends CI_Controller {
    
    //El metodo por defecto que invocan los controladores
    //debe llamarse index
    //pfnc + enter /  tab
    public function index() {

        

        //Cargamos una vista completa
        /*
         * Aunque no le pasemos contenido a la vista
         * debemos declarar a DATA
         */
        $data = array();
        $data['app_title']  = "Simposio | Inicio";
        $data['titulo'] = "Inicio";
        /*
         * Cuando una vista tiene el tercer parametro en TRUE indica que es
         * una vista que se pasa como STRING
         */
        $data['fragmento'] = $this->load->view('fragmento_inicio', $data, TRUE);

        //$this->load->view("inicio_view", $data, FALSE);
        //$this->load->view("principal_view", $data, FALSE);
        $this->load->view("principal_meta_view", $data, FALSE);
    }
    
    public function galeria(){
        $data = array();
        $data['app_title']  = "Simposio | Galería";
        $data['titulo'] = "Inicio";
        
        $this->load->view("galeria_view", $data, FALSE);
    }

    public function agregar() {
        $data = array();
        $data['titulo'] = "Agregar usuario";
        $data['fragmento'] = $this->load->view('fragmento_agregar_usuario', $data, TRUE);
        $this->load->view('inicio_view', $data, FALSE);
    }

    /**
     * Insertamos el usuario en la BD 
     */
    public function agregar_do() {
        //Validamos los campos del formulario
        $this->form_validation->set_rules('nombre', 'nombre', 'trim|required|xss_clean');
        $this->form_validation->set_rules('apellido1', 'apellido1', 'trim|required|xss_clean');

        //Si pasamos la validacion
        if ($this->form_validation->run()) {
            //Creamos un arreglo con los campos de la base de datos
            //como indice y el valor a partir del post
            $arr_ins_usuario = array();
            $arr_ins_usuario['nombre'] = $this->input->post('nombre');
            $arr_ins_usuario['apellido1'] = $this->input->post('apellido1');

            //Cargar liberias de conexion
            //autoload.php   <----- 

            //Cargamos el modelo correspondiente
            $this->load->model('usuario_model');


            //usamos el metodo del modelo
            $this->usuario_model->insertar($arr_ins_usuario);

            echo "INSERTADO!";

        }

    }
    
}
