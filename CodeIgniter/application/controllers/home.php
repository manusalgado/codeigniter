<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{
  public function index(){
    $data['titulo'] = 'MVC | PHP';
    $this->load->view('plantilla/header', $data);
    $this->load->view('home/index');
    $this->load->view('plantilla/footer');
  }

}
?>
