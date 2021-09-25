<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Client_model extends CI_Model
{
  public function perusahaan(){
    return $this->db->get('tbl_record_perusahaan',3)->result_array();
    }
	public function bidang(){
    return $this->db->get('tbl_bidang_perusahaan')->result_array();
    }
	public function select_data(){
    $this->db->select('*');
    $this->db->from('tbl_record_perusahaan');
    $this->db->join('tbl_bidang_perusahaan', 'tbl_bidang_perusahaan.id_bidang = tbl_record_perusahaan.id_bidang');
    $query = $this->db->get();
    return $query->result_array();
  }
  public function view_by($noid){
    $this->db->select('*');
     $this->db->from('tbl_record_perusahaan');
     $this->db->where('noid' ,$noid);
     $this->db->join('tbl_bidang_perusahaan', 'tbl_bidang_perusahaan.id_bidang = tbl_record_perusahaan.id_bidang');
     $query = $this->db->get();
     return $query->result_array();
  }
  function get_mahasiswa_list($limit, $start){
       $this->db->limit($limit, $start);
        $query = $this->db->get("tbl_record_perusahaan");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }

}