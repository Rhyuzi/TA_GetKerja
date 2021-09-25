<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Bidang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("bidang_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["bidang"] = $this->bidang_model->view();
        $this->load->view("admin/bidang/list.php", $data);
    }

 
    public function tambah(){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
     // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->bidang_model->save(); // Panggil fungsi save() yang ada di SiswaModel.php
        redirect(site_url('admin/bidang'));
      
    }
    
    $this->load->view("admin/bidang/new_form");
  }


 public function ubah($id_bidang){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->bidang_model->validation("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->bidang_model->edit($id_bidang); // Panggil fungsi edit() yang ada di SiswaModel.php
        redirect(site_url('admin/bidang'));
      }
    }
    
    $data['bidang'] = $this->bidang_model->view_by($id_bidang);
    $this->load->view('admin/bidang/edit_form', $data);
  }

   public function hapus($id_bidang){
    $this->bidang_model->delete($id_bidang); // Panggil fungsi delete() yang ada di SiswaModel.php
    redirect(site_url('admin/bidang'));
  }
    


}
