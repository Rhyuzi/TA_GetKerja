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
        $data["lowongan"] = $this->lowongan_model->getDataLowongan();
        $data["jabatan"] = $this->lowongan_model->getDataJabatan();
        $this->load->view("ceo/lowongan/list.php", $data);
    }
    public function daftar_guru()
        {
        $data["lowongan"] = $this->lowongan_model->getDataLowongan();
        $data["jabatan"] = $this->lowongan_model->getDataJabatan();
        $this->load->view("ceo/lowongan/list.php", $data);
            
        }
     public function tambah_lowongan()
        {
            $this->form_validation->set_rules('input_nama_perusahaan', 'nama_perusahaan', 'required|max_length[50]');
    $this->form_validation->set_rules('id_jabatan', 'jabatan', 'required|max_length[50]');
    $this->form_validation->set_rules('input_kota', 'kota', 'required|max_length[50]');
    $this->form_validation->set_rules('input_provinsi', 'provinsi', 'required|max_length[100]');
    $this->form_validation->set_rules('input_keterangan', 'keterangan', 'required');
            if ($this->form_validation->run() == FALSE) {
                 $data["jabatan"] = $this->lowongan_model->getDataJabatan();
                $this->load->view("ceo/lowongan/new_form", $data);
            }  
            else{
                $this->lowongan_model->tambahDataGuru();
                redirect("ceo/lowongan/daftar_guru");
            }
        }

 
    public function tambah(){
    if($this->input->post('submit')){ 
        $this->lowongan_model->save();
        redirect(site_url('ceo/lowongan'));
      
    }
    
    $this->load->view("ceo/lowongan/new_form");
  }


 public function ubah_guru($noid)
        {

            $data["ubah"] = $this->lowongan_model->getGuruByNip($noid); 
    $this->form_validation->set_rules('input_nama_perusahaan', 'nama_perusahaan', 'required|max_length[50]');
    $this->form_validation->set_rules('id_jabatan', 'Bidang', 'required|max_length[50]');
    $this->form_validation->set_rules('input_kota', 'kota', 'required|max_length[50]');
    $this->form_validation->set_rules('input_provinsi', 'provinsi', 'required|max_length[100]');
    $this->form_validation->set_rules('input_keterangan', 'keterangan', 'required');
            if ($this->form_validation->run() == FALSE) {
                $data["jabatan"] = $this->lowongan_model->getDataJabatan();
                $this->load->view("ceo/lowongan/edit_form", $data);
            }  
            else{
                $this->lowongan_model->ubahDataGuru($noid);
                redirect("ceo/lowongan");
            }
        }

   public function hapus($noid){
    $this->lowongan_model->delete($noid); 
    redirect(site_url('ceo/lowongan'));
  }

 
 
    


}
