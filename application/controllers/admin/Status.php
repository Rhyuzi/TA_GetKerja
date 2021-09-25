<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Status extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("status_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["status"] = $this->status_model->view();
        $this->load->view("admin/status/list.php", $data);
    }

 
    public function tambah(){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
     // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->status_model->save(); // Panggil fungsi save() yang ada di SiswaModel.php
        redirect(site_url('admin/status'));
      
    }
    
    $this->load->view("admin/status/new_form");
  }


 public function ubah($id_status){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->status_model->validation("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->status_model->edit($id_status); // Panggil fungsi edit() yang ada di SiswaModel.php
        redirect(site_url('ceo/status'));
      }
    }
    
    $data['status'] = $this->status_model->view_by($id_status);
    $this->load->view('admin/status/edit_form', $data);
  }

   public function hapus($id_status){
    $this->status_model->delete($id_status); // Panggil fungsi delete() yang ada di SiswaModel.php
    redirect(site_url('admin/status'));
  }
    


}
