<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Perusahaan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('pagination');
        $this->load->helper("url");
        $this->load->model("client_model");

     }
     public function index(){
        $data['data_bidang'] = $this->client_model->bidang();
     	$data['data_perusahaan'] = $this->client_model->select_data();

        //konfigurasi pagination

        $config['base_url'] = site_url('client/perusahaan/index'); //site url
        $config['total_rows'] = $this->db->count_all('tbl_record_perusahaan'); //total row
        $config['per_page'] = 6;  //show record per halaman
        $config["uri_segment"] = 4;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
 
        // Membuat Style pagination untuk BootStrap v4
      $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
 
        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['data'] = $this->client_model->get_mahasiswa_list($config["per_page"], $data['page']);           
 
        $data['pagination'] = $this->pagination->create_links();
     	$this->load->view('client/v_perusahaan.php',$data);
     }

     public function detail($noid){
        $data['data_bidang'] = $this->client_model->bidang();
    	$data['data_perusahaan'] = $this->client_model->view_by($noid);
    	$this->load->view('client/detail_perusahaan.php', $data);
      }
    }