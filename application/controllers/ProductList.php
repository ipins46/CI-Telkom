<?php

class ProductList extends CI_Controller {
  public function index() 
  {
    $data['judul'] = 'Halaman Home';
    $this->load->view('templates/header', $data);
    $this->load->view('productList');
    $this->load->view('templates/footer');
  }
}