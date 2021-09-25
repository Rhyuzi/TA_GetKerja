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
        $data["data_cv"] = $this->lowongan_model->getDataCv();
        $data["data_status"] = $this->lowongan_model->getDataStatus();
        $data["lowongan"] = $this->lowongan_model->view();
        $this->load->view("client/v_lowongan", $data);
    }
    public function statusDetail($noid)
    {
        $data["data_cv_detail"] = $this->lowongan_model->getCvByNip($noid);
        $data["data_status"] = $this->lowongan_model->getDataStatus();
        $this->load->view("client/v_lowongan", $data);
    }

}
