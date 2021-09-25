<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{


    public function get_count(){
        $sql = "SELECT count(noid) as noid FROM cv";
        $result = $this->db->query($sql);
        return $result->row()->noid;
    }
    public function get_count_client(){
        $sql = "SELECT count(noid) as noid FROM client";
        $result = $this->db->query($sql);
        return $result->row()->noid;
    }
    public function get_count_perusahaan(){
        $sql = "SELECT count(noid) as noid FROM tbl_record_perusahaan";
        $result = $this->db->query($sql);
        return $result->row()->noid;
    }
    public function get_count_lowongan(){
        $sql = "SELECT count(noid) as noid FROM lowongan_kerja";
        $result = $this->db->query($sql);
        return $result->row()->noid;
    }
}