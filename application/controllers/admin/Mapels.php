<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mapels extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("mapel_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["client"] = $this->mapel_model->view();
        $this->load->view("admin/mapel/list_mapel.php", $data);
    }

 
    public function tambah(){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
     // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->mapel_model->save(); // Panggil fungsi save() yang ada di SiswaModel.php
        redirect(site_url('admin/mapels'));
      
    }
    
    $this->load->view("admin/mapel/new_form_mapel");
  }


 public function ubah($noid){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->mapel_model->validation("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->mapel_model->edit($noid); // Panggil fungsi edit() yang ada di SiswaModel.php
        redirect(site_url('admin/mapels'));
      }
    }
    
    $data['client'] = $this->mapel_model->view_by($noid);
    $this->load->view('admin/mapel/edit_form_mapel', $data);
  }

   public function hapus($noid){
    $this->mapel_model->delete($noid); // Panggil fungsi delete() yang ada di SiswaModel.php
    redirect(site_url('admin/mapels'));
  }
    


}
