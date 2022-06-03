<?php

class Login extends CI_Controller {
  public function index() 
  {
    $data['judul'] = 'Halaman Home';
    $this->load->view('form/login');
  }
}