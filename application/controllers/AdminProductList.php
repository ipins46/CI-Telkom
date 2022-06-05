<?php

class AdminProductList extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_ProductList');
  }

  public function index() 
  {
    $queryAllProduct = $this->M_ProductList->getDataProduct();
    $DATA = array('queryAllPdt' => $queryAllProduct);

    $data['judul'] = 'Halaman Home';
    $this->load->view('templates/header', $data);
    $this->load->view('admin/adminProductList', $DATA);
    $this->load->view('templates/footer');
  }

  public function admin_productInsert() 
  {
    $data['judul'] = 'Halaman Home';
    $this->load->view('templates/header', $data);
    $this->load->view('admin/adminProductInsert');
    $this->load->view('templates/footer');
  }

  public function admin_productUpdate($id) 
  {
    $queryProductDetail = $this->M_ProductList->getDataProductDetail($id);
    $DATA = array('queryPdtDtl' => $queryProductDetail);
    $data['judul'] = 'Halaman Home';
    $this->load->view('templates/header', $data);
    $this->load->view('admin/adminProductUpdate', $DATA);
    $this->load->view('templates/footer');
  }

  public function fungsiAdd() 
  {
    $title = $this->input->post('title');
    $price = $this->input->post('price');
    $quantity = $this->input->post('quantity');
    $featured = $this->input->post('featured');
    $show_hide = $this->input->post('show_hide');

    $ArrInsert = array(
      'title' => $title,
      'price' => $price,
      'quantity' => $quantity,
      'featured' => $featured,
      'show_hide' => $show_hide
    );

    $this->M_ProductList->insertDataProduct($ArrInsert);
    redirect('AdminProductList');

  }

  public function fungsiEdit() 
  {
    $title = $this->input->post('title');
    $price = $this->input->post('price');
    $quantity = $this->input->post('quantity');
    $featured = $this->input->post('featured');
    $show_hide = $this->input->post('show_hide');

    $ArrUpdate = array(
      'title' => $title,
      'price' => $price,
      'quantity' => $quantity,
      'featured' => $featured,
      'show_hide' => $show_hide
    );

    echo var_dump($ArrUpdate);
    $this->M_ProductList->updateDataProduct($ArrUpdate);
    redirect('AdminProductList');
  }

  public function fungsiDelete($id) 
  {
    $this->M_ProductList->deleteDataProduct($id);
    redirect('AdminProductList');
  }

  
}

