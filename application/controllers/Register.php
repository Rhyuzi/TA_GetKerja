<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("register_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["client"] = $this->register_model->view();
        $this->load->view("v_register", $data);
    }

 
    public function daftar(){
    if($this->input->post('submit')){ 
        $this->register_model->save();
        redirect(site_url('login'));

      
    }
    
    $this->load->view("v_register");
  }


 public function ubah($noid){
    if($this->input->post('submit')){ 
      if($this->register_model->validation("update")){ 
        $this->register_model->edit($noid);
        redirect(site_url('admin/perusahaan'));
      }
    }
    
    $data['client'] = $this->register_model->view_by($noid);
    $this->load->view('admin/perusahaan/edit_form', $data);
  }

  
    
}

 