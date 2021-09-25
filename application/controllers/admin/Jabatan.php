<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("jabatan_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["jabatan"] = $this->jabatan_model->view();
        $this->load->view("admin/jabatan/list.php", $data);
    }
 
    public function tambah(){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
     // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->jabatan_model->save(); // Panggil fungsi save() yang ada di SiswaModel.php
        redirect(site_url('admin/jabatan'));
      
    }
    
    $this->load->view("admin/jabatan/new_form");
  }


 public function ubah($id_jabatan){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->jabatan_model->validation("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->jabatan_model->edit($id_jabatan); // Panggil fungsi edit() yang ada di SiswaModel.php
        redirect(site_url('ceo/jabatan'));
      }
    }
    
    $data['jabatan'] = $this->jabatan_model->view_by($id_jabatan);
    $this->load->view('admin/jabatan/edit_form', $data);
  }

   public function hapus($id_jabatan){
    $this->jabatan_model->delete($id_status); // Panggil fungsi delete() yang ada di SiswaModel.php
    redirect(site_url('admin/jabatan'));
  }
    


}
