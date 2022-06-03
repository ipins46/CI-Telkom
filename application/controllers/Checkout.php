<?php

class Checkout extends CI_Controller {
  public function index() 
  {
    $data['judul'] = 'Halaman Home';
    $this->load->view('templates/header', $data);
    $this->load->view('checkout');
    $this->load->view('templates/footer');
  }
}