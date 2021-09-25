<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cv extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("cv_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["cv"] = $this->cv_model->view();
        $this->load->view("admin/cv/list.php", $data);
    }

 
    public function tambah(){
    if($this->input->post('submit')){ 
        $this->cv_model->save();
        redirect(site_url('admin/cv'));
      
    }
    
    $this->load->view("admin/cv/new_form");
  }


 public function ubah($noid){
    if($this->input->post('submit')){ 
      if($this->cv_model->validation("update")){ 
        $this->cv_model->edit($noid);
        redirect(site_url('admin/cv'));
      }
    }
    
    $data['tbl_record_perusahaan'] = $this->cv_model->view_by($noid);
    $this->load->view('admin/cv/edit_form', $data);
  }

   public function hapus($noid){
    $this->cv_model->delete($noid); 
    redirect(site_url('admin/cv'));
  }
  public function dashboard(){
    $this->load->view("admin/overview.php");
  }
    


}
