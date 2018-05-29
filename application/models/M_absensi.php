<?php

class M_absensi extends CI_Model{    
  function __construct(){
    parent::__construct();
  }

  public function get_mhs(){
    $query = $this->db->query("SELECT mm.* FROM mhs mm INNER JOIN 
        (SELECT id_list, MAX(tgl_update) AS maxtgl_update, status FROM mhs WHERE status = 1 GROUP BY id_list) groupedtt
          ON mm.`id_list` = groupedtt.id_list
          AND mm.`tgl_update` = groupedtt.maxtgl_update");
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



    public function get_list_update($id_list)
    {
        $this->db->select("*")->from("mhs")->join("user", "mhs.id_user = user.id_user", "left")->where("mhs.id_list", $id_list);

        return $this->db->get()->result();
    }

    public function get_data($table)
      {

          return $query = $this->db->get($table)->result();

      }

      
    

      public function get_data_byID_result($table, $key, $id_key)
      {

          $this->db->where($key, $id_key);
          return $query = $this->db->get($table)->result();

      }


       public function get_data_byID_result_array($table, $key, $id_key)
      {

          $this->db->where($key, $id_key);
          return $query = $this->db->get($table)->result_array();

      }

    

    public function last_id()
    {
        return $query = $this->db->insert_id();
    }

   public function edit_data($table, $data, $key, $id)
    {
      $this->db->where($key, $id);
      $this->db->update($table, $data);
    }

    public function delete_data($table, $key, $id)
  {
    $this->db->where($key, $id);
    $this->db->delete($table);
  }
    
}
