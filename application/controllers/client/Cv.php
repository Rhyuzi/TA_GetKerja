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
        $data["cv_jabatan"] = $this->cv_model->getDataCvJabatan();
        $data["jabatan"] = $this->cv_model->getDataJabatan();
        $data["lowongan"] = $this->cv_model->getDataLowongan();
        $data["cv"] = $this->cv_model->view();
        $this->load->view("client/v_cv", $data);
    }
     public function tambah_cv($noid){
        $data["cv_jabatan"] = $this->cv_model->getDataCvJabatan();
        $data["jabatan"] = $this->cv_model->getDataJabatan();
        $data['data_client_cv'] = $this->cv_model->getDataClientCv();
        $data['data_lowongan'] = $this->cv_model->getDataLowongan($noid);
        $this->load->view('client/v_cv.php', $data);
      }
 
    public function tambah(){
    if($this->input->post('submit')){ 

        $this->cv_model->save();
        redirect(site_url('client/lowongan'));
      
    }
    $this->load->view("client/detail_perusahaan");
  }





    }