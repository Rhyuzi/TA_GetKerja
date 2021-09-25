<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Overview extends CI_Controller {
    public function __construct()
    {
	parent::__construct();
        $this->load->model("dashboard_model");
        $this->load->library('form_validation');
	}

	public function index()
	{
	$data["count_lowongan"] = $this->dashboard_model->get_count_lowongan();
	$data["count_perusahaan"] = $this->dashboard_model->get_count_perusahaan();	
	$data["count_client"] = $this->dashboard_model->get_count_client();	
	$data["count"] = $this->dashboard_model->get_count();
        $this->load->view("ceo/overview",$data);
	}
}
