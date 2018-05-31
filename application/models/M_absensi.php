<?php

class M_absensi extends CI_Model{    
  function __construct(){
    parent::__construct();
  }

  public function get_mhs(){
    $query = $this->db->query("SELECT id_mhs, npm, nama, kelas.kelas, mhs.kelas kls FROM mhs INNER JOIN kelas WHERE kelas.id_kelas = mhs.kelas");
    return $query->result();
  }

  public function get_data($table) {
    return $query = $this->db->get($table)->result();
  }

  public function get_matkul(){
    $query = $this->db->query("SELECT * FROM matkul");
    return $query->result();
  }

  public function get_data_byID($table, $key, $id_key) {
    $this->db->where($key, $id_key);
    return $query = $this->db->get($table)->row();
  }

  public function add_data($table, $data){
    $this->db->insert($table, $data);
  }

  public function max_list(){
    $query = $this->db->query("SELECT * FROM v_max");
    return $query->result();
  }

  public function delete($id){
    $this->db->set('status', '0');
    $this->db->where('id_user', $id);
    $this->db->update('mhs');
  }

  public function delete_data($table, $key, $id) {
    $this->db->where($key, $id);
    $this->db->delete($table);
  }
  
  public function edit_data($table, $key, $id, $data){
    $this->db->where($key, $id);
    $this->db->update($table, $data);
  }
}
