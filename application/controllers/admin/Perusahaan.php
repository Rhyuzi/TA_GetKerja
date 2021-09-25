<?php

    class Perusahaan extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
            $this->load->model("perusahaan_model");
            $this->load->library("form_validation");
        }
        public function index()
        {
          $data["data_mapel"] = $this->perusahaan_model->getDataBidang();
          $data["data_guru"] = $this->perusahaan_model->getDataPerusahaan(); 
          $this->load->view("admin/perusahaan/list", $data);
        }
        public function daftar_guru()
        {
            $data["data_mapel"] = $this->perusahaan_model->getDataBidang();
            $data["data_guru"] = $this->perusahaan_model->getDataPerusahaan();
            $this->load->view("admin/perusahaan/new_form", $data);
            
        }
        public function tambah_perusahaan()
        {
            $this->form_validation->set_rules('nama_perusahaan','Nama Perusahaan', 'required');
            $this->form_validation->set_rules('ceo_perusahaan','CEO Perusahaan', 'required');
            $this->form_validation->set_rules('id_bidang','Bidang', 'required');
            $this->form_validation->set_rules('kota','Kota', 'required');
            $this->form_validation->set_rules('keterangan','Keterangan', 'required');
            if ($this->form_validation->run() == FALSE) {
                $data["data_mapel"] = $this->perusahaan_model->getDataBidang();
                $this->load->view("admin/perusahaan/new_form", $data);
            }  
            else{
                $this->perusahaan_model->tambahDataGuru();
                redirect("admin/perusahaan/daftar_guru");
            }
        }
        public function hapusDataGuru($noid)
        {
            $this->perusahaan_model->hapusDataGuru($noid);
            redirect("admin/perusahaan/index");
        }
        public function ubah_guru($noid)
        {
            $data["edit"] = $this->perusahaan_model->getGuruByNip($noid); 
            $this->form_validation->set_rules('nama_perusahaan','Nama Perusahaan', 'required');
            $this->form_validation->set_rules('ceo_perusahaan','CEO Perusahaan', 'required');
            $this->form_validation->set_rules('id_bidang','Bidang', 'required');
            $this->form_validation->set_rules('kota','Kota', 'required');
            $this->form_validation->set_rules('keterangan','Keterangan', 'required');
            if ($this->form_validation->run() == FALSE) {
                $data["data_mapel"] = $this->perusahaan_model->getDataBidang();
                $this->load->view("admin/perusahaan/edit_form", $data);
            }  
            else{
                $this->perusahaan_model->ubahDataGuru($noid);
                redirect("admin/perusahaan/daftar_guru");
            }
        }
    }
    