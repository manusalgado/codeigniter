<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control extends CI_Controller{

    function __construct(){
      parent::__construct();
      $this->load->model('model_contactos');
    }


  public function index(){
    $data['titulo'] = 'MVC | PHP';
    $this->load->view('plantilla/header', $data);
    $this->load->view('control_views/index');
    $this->load->view('plantilla/footer');
  }
  public function agregar(){
    $data['titulo'] = 'Agregar nuevo contacto';
    $this->load->view('plantilla/header', $data);
    $this->load->view('control_views/agregar');
    $this->load->view('plantilla/footer');
  }
  public function agregarContacto(){
    $this->form_validation->set_rules('nombre', 'nombre', 'required');
    $this->form_validation->set_rules('direccion', 'direccion', 'required');
    $this->form_validation->set_rules('telefono', 'telefono', 'required');

    if (  $this->form_validation->run() == FALSE) {

      $data['titulo'] = 'Agregar nuevo contacto';
      $this->load->view('plantilla/header', $data);
      $this->load->view('control_views/agregar');
      $this->load->view('plantilla/footer');
    }else {
      $data = array( 'nombre' => $this->input->post('nombre'),
      'direccion' => $this->input->post('direccion'),
      'telefono' => $this->input->post('telefono')
     );
     $this->model_contactos->insertar($data);

     redirect( base_url() . 'control/');
    }
  }
}
?>
