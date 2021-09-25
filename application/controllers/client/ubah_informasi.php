<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Ubah_informasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("ubah_informasi_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["client"] = $this->ubah_informasi_model->view();
        $this->load->view("client/v_ubah_informasi", $data);
    }


 public function ubah($noid){
    if($this->input->post('submit')){ 
      if($this->ubah_informasi_model->validation("update")){ 
        $this->ubah_informasi_model->edit($noid);
        redirect(site_url('client/beranda'));
      }
    }
    
    $data['client'] = $this->ubah_informasi_model->view_by($noid);
    $this->load->view('client/v_ubah_informasi', $data);
  }

  
    
}

 