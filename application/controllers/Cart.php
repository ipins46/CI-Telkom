<?php

class Cart extends CI_Controller {
  public function index() 
  {
    $data['judul'] = 'Halaman Home';
    $this->load->view('templates/header', $data);
    $this->load->view('cart');
    $this->load->view('templates/footer');
  }
}