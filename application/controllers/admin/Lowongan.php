<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Lowongan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("lowongan_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["lowongan"] = $this->lowongan_model->view();
        $this->load->view("admin/lowongan/list.php", $data);
    }

 
    public function tambah(){
    if($this->input->post('submit')){ 
        $this->lowongan_model->save();
        redirect(site_url('admin/lowongan'));
      
    }
    
    $this->load->view("admin/lowongan/new_form");
  }


 public function ubah($noid){
    if($this->input->post('submit')){ 
      if($this->lowongan_model->validation("update")){ 
        $this->lowongan_model->edit($noid);
        redirect(site_url('admin/lowongan'));
      }
    }
    
    $data['tbl_record_perusahaan'] = $this->lowongan_model->view_by($noid);
    $this->load->view('admin/lowongan/edit_form', $data);
  }

   public function hapus($noid){
    $this->lowongan_model->delete($noid); 
    redirect(site_url('admin/lowongan'));
  }
 
 
    


}
