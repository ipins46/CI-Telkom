<?php

class ConfirmPayment extends CI_Controller {
  public function index() 
  {
    $data['judul'] = 'Halaman Home';
    $this->load->view('templates/header', $data);
    $this->load->view('confirmPayment');
    $this->load->view('templates/footer');
  }
}