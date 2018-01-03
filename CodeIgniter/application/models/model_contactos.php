<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_contactos extends CI_Controller {
  function insertar($data){
    $this->db->insert('contactos', $data);
  }
  function getAll(){
    $query = $this->db->get('contactos');
    return $query->result();
  }

}
?>
