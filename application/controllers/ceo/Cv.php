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
        $data["jabatan"] = $this->cv_model->getDataJabatan();
        $data["cv"] = $this->cv_model->getDataCv();
        $data["status"] = $this->cv_model->getDataStatus();
        $this->load->view("ceo/cv/list", $data);
    }
     public function daftar_guru()
        {
        $data["jabatan"] = $this->cv_model->getDataJabatan();
        $data["cv"] = $this->cv_model->getDataCv();
        $data["status"] = $this->cv_model->getDataStatus();
         $this->load->view("ceo/cv/new_form", $data);
            
        }
        public function tambah_perusahaan()
        {
            $this->form_validation->set_rules('input_nama_perusahaan', 'nama_perusahaan', 'required');
      $this->form_validation->set_rules('input_nama', 'nama', 'required');
    $this->form_validation->set_rules('input_tempat', 'tempat', 'required');
    $this->form_validation->set_rules('input_tanggal_lahir', 'tanggal_lahir', 'required');
    $this->form_validation->set_rules('input_alamat_lengkap', 'alamat', 'required');
    $this->form_validation->set_rules('id_jabatan', 'Jabatan', 'required');
    $this->form_validation->set_rules('input_pengalaman_kerja', 'pengalaman_kerja', 'required');

            if ($this->form_validation->run() == FALSE) {
                $data["status"] = $this->cv_model->getDataStatus();
                $this->load->view("admin/cv/new_form", $data);
            }  
            else{
                $this->cv_model->tambahDataGuru();
                redirect("admin/cv/daftar_guru");
            }
        }
        public function ubah_guru($noid)
        {
            $data["edit"] = $this->cv_model->getGuruByNip($noid); 
            $this->form_validation->set_rules('input_nama_perusahaan', 'nama_perusahaan', 'required');
      $this->form_validation->set_rules('input_nama', 'nama', 'required');
    $this->form_validation->set_rules('input_tempat', 'tempat', 'required');
    $this->form_validation->set_rules('input_tanggal_lahir', 'tanggal_lahir', 'required');
    $this->form_validation->set_rules('input_alamat_lengkap', 'alamat', 'required');
    $this->form_validation->set_rules('id_jabatan', 'Jabatan', 'required');
    $this->form_validation->set_rules('input_pengalaman_kerja', 'pengalaman_kerja', 'required');
    $this->form_validation->set_rules('input_status', 'pengalaman_kerja', 'required');
            if ($this->form_validation->run() == FALSE) {
                $data["status"] = $this->cv_model->getDataStatus();
                $this->load->view("ceo/cv/edit_form", $data);
            }  
            else{
                $this->cv_model->ubahDataGuru($noid);
                redirect("ceo/cv");
            }
        }
        public function hapusDataGuru($noid)
        {
            $this->cv_model->hapusDataGuru($noid);
            redirect("ceo/cv/index");
        }
}