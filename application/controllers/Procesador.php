<?php

class Procesador extends CI_Controller
{
     function __construct() {
        parent::__construct();
        $this->load->model('station');
        //Funciones de redirección
        $this->load->helper('url');
    }
   
    
    public function index(){
        $data = array();
        
        $data['station'] = $this->station-> obtenerListado();
        $data['titulo'] = 'Mis Rutas';
        
        $this->load->view('Formulario', $data);
        
    }
    
       public function agregar(){
           
        $data = array();
        $datosFormulario = array();
        
        if($this->input->post('postSubmit')){
            
      
        
        $datosFormulario = array(
                'station' => $this->input->post('station'),
                'description' => $this->input->post('description'),
                'latitude' => $this->input->post('latitude'),
                'length' => $this->input->post('length')
            );
        
        $insertar = $this->station->insertarRuta($datosFormulario);
       
            
           
        $data['post'] = $datosFormulario;
        $data['title'] = 'Crear Ruta';
        $data['action'] = 'Add';
        
        $this->load->view('FormularioRuta', $data);
        
    }
    
   
    
    

    
    
}

}