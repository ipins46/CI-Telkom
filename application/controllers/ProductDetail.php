<?php

class ProductDetail extends CI_Controller {
  public function index() 
  {
    $data['judul'] = 'Halaman Home';
    $this->load->view('templates/header', $data);
    $this->load->view('productDetail');
    $this->load->view('templates/footer');
  }
}