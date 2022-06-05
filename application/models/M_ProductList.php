<?php

class M_ProductList extends CI_Model {
  function getDataProduct() {
    $query = $this->db->get('product_list');
    return $query->result();
  }

  function insertDataProduct($ArrInsert) {
    $this->db->insert('product_list', $ArrInsert);
  }

  function getDataProductDetail($id) {
    $this->db->where('id', $id);
    $query = $this->db->get('product_list');
    return $query->row();
  }

  function updateDataProduct($ArrUpdate) {
    $this->db->where('id', $this->input->post('id'));
    $this->db->update('product_list', $ArrUpdate);
  }

  function deleteDataProduct($id) {
    $this->db->where('id', $id);
    $this->db->delete('product_list');
  }


}