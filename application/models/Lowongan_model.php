<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Lowongan_model extends CI_Model
{
    public function getDataLowonganCeo()
        {
            $this->db->select('*');
            $this->db->from('lowongan_kerja');
            $this->db->join('jabatan', 'jabatan.id_jabatan = lowongan_kerja.id_jabatan');
            $query = $this->db->get();
            return $query->result_array();
        }
  public function getDataJabatan()
        {
            return $this->db->get('jabatan')->result_array();
        }
  public function getGuruByNip($noid)
        {
          $this->db->select('*');
            $this->db->from('lowongan_kerja');
            $this->db->where('noid' ,$noid);
            $this->db->join('jabatan', 'jabatan.id_jabatan = lowongan_kerja.id_jabatan');
            $query = $this->db->get();
            return $query->row_array();
        }

   
  public function getDataStatus()
        {
            return $this->db->get('status')->result_array();
        }
   public function getDataCv()
        {
            $this->db->select('*');
            $this->db->from('cv');
            $this->db->join('status', 'status.id_status = cv.id_status');
            $query = $this->db->get();
            return $query->result_array();
        }

  public function getCvByNip($noid)
        {
            $this->db->select('*');
            $this->db->from('cv');
            $this->db->where('noid' ,$noid);
            $this->db->join('status', 'status.id_status = cv.id_status');
            $query = $this->db->get();
            return $query->result_array();
        }
        public function getDataLowongan()
        {
            $this->db->select('*');
            $this->db->from('lowongan_kerja');
            $this->db->where('nama_perusahaan' ,$this->session->userdata('ses_nama'));
            $this->db->join('jabatan', 'jabatan.id_jabatan = lowongan_kerja.id_jabatan');
            $query = $this->db->get();
            return $query->result_array();
        }
 

public function view(){
    $this->db->select('*');
            $this->db->from('lowongan_kerja');
            $this->db->join('jabatan', 'jabatan.id_jabatan = lowongan_kerja.id_jabatan');
            $query = $this->db->get();
            return $query->result_array();
  }
    

    public function view_by($noid){
    $this->db->where('noid', $noid);
    return $this->db->get('lowongan_kerja')->row();
  }

  
  public function validation($mode){
    $this->load->library('form_validation'); 
    if($mode == "save")
    $this->form_validation->set_rules('input_nama_perusahaan', 'nama_perusahaan', 'required|max_length[50]');
    $this->form_validation->set_rules('id_bidang', 'Bidang', 'required|max_length[50]');
    $this->form_validation->set_rules('input_kota', 'kota', 'required|max_length[50]');
    $this->form_validation->set_rules('input_provinsi', 'provinsi', 'required|max_length[100]');
    $this->form_validation->set_rules('input_keterangan', 'keterangan', 'required|max_length[100]');

      
    if($this->form_validation->run())
      return TRUE; 
    else 
      return FALSE; 
  }
  
  
  public function save(){
    $data = array(
      "nama_perusahaan" => $this->input->post('input_nama_perusahaan'),
      "id_jabatan" => $this->input->post('id_jabatan'),
      "kota" => $this->input->post('input_kota'),
      "provinsi" => $this->input->post('input_provinsi'),
      "keterangan" => $this->input->post('input_keterangan')
    );
    
    $this->db->insert('lowongan_kerja', $data); 
  }
  
public function edit($noid){
    $data = array(
        "nama_perusahaan" => $this->input->post('input_nama_perusahaan'),
        "id_jabatan" => $this->input->post('id_jabatan'),
        "kota" => $this->input->post('input_kota'),
        "provinsi" => $this->input->post('input_provinsi'),
        "keterangan" => $this->input->post('input_keterangan')
    );
    
    $this->db->where('noid', $noid);
    $this->db->update('lowongan_kerja', $data); // Untuk mengeksekusi perintah update data
  }

    public function delete($noid){
    $this->db->where('noid', $noid);
    $this->db->delete('lowongan_kerja'); // Untuk mengeksekusi perintah delete data
  }
  public function ubahDataGuru($noid)
        {
            $data = [
        "nama_perusahaan" => $this->input->post('input_nama_perusahaan'),
        "id_jabatan" => $this->input->post('id_jabatan'),
        "kota" => $this->input->post('input_kota'),
        "provinsi" => $this->input->post('input_provinsi'),
        "keterangan" => $this->input->post('input_keterangan')
            ];
            $this->db->where('noid', $noid);
            $this->db->update('lowongan_kerja', $data);
        }
  public function tambahDataGuru()
        {
            $data = [
                 "nama_perusahaan" => $this->input->post('input_nama_perusahaan',true),
        "id_jabatan" => $this->input->post('id_jabatan',true),
        "kota" => $this->input->post('input_kota',true),
        "provinsi" => $this->input->post('input_provinsi',true),
        "keterangan" => $this->input->post('input_keterangan',true)
            ];

            $this->db->insert('lowongan_kerja', $data);
        }
}
