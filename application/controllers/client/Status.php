<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Status extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("cv_model");

     }
     public function index(){
        $data['data_status'] = $this->cv_model->getDataStatus();
     	$data['data_cv'] = $this->cv_model->getDataCvClient();

     	$this->load->view('client/v_status',$data);
     }

     public function statusDetail($noid){
        $data['data_client'] = $this->cv_model->clientNoid($noid);
        $data['data_cv'] = $this->cv_model->getDataCv();
        $data['data_status'] = $this->cv_model->getDataStatus();
    	$this->load->view('client/v_status', $data);
      }
    }