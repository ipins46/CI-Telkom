<?php

class Thankyou extends CI_Controller {
  public function index() 
  {
    $data['judul'] = 'Halaman Home';
    $this->load->view('templates/header', $data);
    $this->load->view('thankyou');
    $this->load->view('templates/footer');
  }
}