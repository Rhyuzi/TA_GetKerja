<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AkunPerusahaan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("akunperusahaan_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["akunperusahaan"] = $this->akunperusahaan_model->view();
        $this->load->view("admin/akunperusahaan/list.php", $data);
    }

 
    public function tambah(){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
     // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->akunperusahaan_model->save(); // Panggil fungsi save() yang ada di SiswaModel.php
        redirect(site_url('admin/akunperusahaan'));
      
    }
    
    $this->load->view("admin/akunperusahaan/new_form");
  }


 public function ubah($user_id){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->akunperusahaan_model->validation("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->akunperusahaan_model->edit($user_id); // Panggil fungsi edit() yang ada di SiswaModel.php
        redirect(site_url('admin/bidang'));
      }
    }
    
    $data['bidang'] = $this->akunperusahaan_model->view_by($user_id);
    $this->load->view('admin/bidang/edit_form', $data);
  }

   public function hapus($user_id){
    $this->akunperusahaan_model->delete($user_id); // Panggil fungsi delete() yang ada di SiswaModel.php
    redirect(site_url('admin/akunperusahaan'));
  }
    


}
