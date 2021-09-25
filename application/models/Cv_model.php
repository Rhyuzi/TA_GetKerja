<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Cv_model extends CI_Model
{
  
   public function getDataJabatan()
        {
            return $this->db->get('jabatan')->result_array();
        }
  public function getDataStatus()
        {
            return $this->db->get('status')->result_array();
        }
        public function getDataCvClient()
        {
            $this->db->select('*');
            $this->db->from('cv');
            $this->db->where('nama',$this->session->userdata('ses_nama'));
            $this->db->join('status', 'status.id_status = cv.id_status');
            $query = $this->db->get();
            return $query->result_array();
        }
        public function getDataCvJabatan()
        {
            $this->db->select('*');
            $this->db->from('cv');
            $this->db->join('jabatan', 'jabatan.id_jabatan = cv.id_jabatan');
            $query = $this->db->get();
            return $query->result_array();
        }
        public function getDataCv()
        {
            $this->db->select('*');
            $this->db->from('cv');
            $this->db->join('status', 'status.id_status = cv.id_status','left');
            $this->db->where('nama_perusahaan',$this->session->userdata('ses_nama'));
            $this->db->join('jabatan', 'jabatan.id_jabatan = cv.id_jabatan','left');
            $query = $this->db->get();
            return $query->result_array();
        }
        public function clientNoid($noid){
          $this->db->where('noid', $noid);
        return $this->db->get('client')->result();
  }
      public function client(){
        return $this->db->get('client')->result();
      }
        



 public function getDataClientCv(){
    $this->db->select('*');
    $this->db->from('client');
    $this->db->where('nama', $this->session->userdata('ses_nama'));
    $this->db->limit(1);
    $query = $this->db->get();
     return $query->result_array();
  }
  public function getDataLowongan($noid){
    $this->db->select('*');
    $this->db->from('lowongan_kerja');
    $this->db->where('noid', $noid);
    $this->db->join('jabatan', 'jabatan.id_jabatan = lowongan_kerja.id_jabatan');
    $this->db->limit(1);
    $query = $this->db->get();
     return $query->result_array();
  }

public function view(){
    return $this->db->get('cv')->result();
  }
    

    public function view_by($noid){
    $this->db->where('noid', $noid);
    return $this->db->get('cv')->result();
  }

 public function tambahDataGuru()
        {
            $data = [
                'nama_perusahaan' => $this->input->post("input_nama_perusahaan", true),
                'nama' => $this->input->post("input_nama", true),
                'tempat' => $this->input->post("input_tempat", true),
                'tanggal_lahir' => $this->input->post("input_tanggal_lahir", true),
                'alamat_lengkap' => $this->input->post("input_alamat_lengkap", true),
                'pengalaman_kerja' => $this->input->post("input_pengalaman_kerja", true),
                'id_status' => $this->input->post("id_status", true),
            
            
            ];

            $this->db->insert('cv', $data);
        }
        public function hapusDataGuru($noid)
        {
            $this->db->where("noid", $noid);
            $this->db->delete("cv");
        }
        public function getGuruByNip($noid)
        {
          $this->db->select('*');
            $this->db->from('cv');
             $this->db->where('noid' ,$noid);
            $this->db->join('status', 'status.id_status = cv.id_status','left');
            $this->db->join('jabatan', 'jabatan.id_jabatan = cv.id_jabatan','left');
            $query = $this->db->get();
            return $query->row_array();
        }
        public function ubahDataGuru($noid)
        {
            $data = [
                'nama_perusahaan' => $this->input->post("input_nama_perusahaan", true),
                'nama' => $this->input->post("input_nama", true),
                'tempat' => $this->input->post("input_tempat", true),
                'tanggal_lahir' => $this->input->post("input_tanggal_lahir", true),
                'alamat_lengkap' => $this->input->post("input_alamat_lengkap", true),
                'id_jabatan' => $this->input->post("id_jabatan", true),
                'pengalaman_kerja' => $this->input->post("input_pengalaman_kerja", true),
                'id_status' => $this->input->post("input_status", true),
            ];
            $this->db->where('noid', $noid);
            $this->db->update('cv', $data);
        }

  
  // Fungsi untuk melakukan simpan data ke tabel siswa
   // Fungsi untuk validasi form tambah dan ubah
  public function validation($mode){
    $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya
    
    // Tambahkan if apakah $mode save atau update
    // Karena ketika update, NIS tidak harus divalidasi
    // Jadi NIS di validasi hanya ketika menambah data siswa saja
    if($mode == "save")
      $this->form_validation->set_rules('input_nama_perusahaan', 'nama_perusahaan', 'required');
      $this->form_validation->set_rules('input_nama', 'nama', 'required');
    
    $this->form_validation->set_rules('input_tempat', 'tempat', 'required');
    $this->form_validation->set_rules('input_tanggal_lahir', 'tanggal_lahir', 'required');
    $this->form_validation->set_rules('id_jabatan', 'tempat', 'required');
    $this->form_validation->set_rules('input_alamat_lengkap', 'alamat', 'required');
    $this->form_validation->set_rules('input_pengalaman_kerja', 'pengalaman_kerja', 'required');
    $this->form_validation->set_rules('input_status', 'pengalaman_kerja', 'required');
      
    if($this->form_validation->run()) // Jika validasi benar
      return TRUE; // Maka kembalikan hasilnya dengan TRUE
    else // Jika ada data yang tidak sesuai validasi
      return FALSE; // Maka kembalikan hasilnya dengan FALSE
  }
  
  // Fungsi untuk melakukan simpan data ke tabel siswa
  public function save(){
    $nama_perusahaan = $this->input->post('input_nama_perusahaan');
    $nama = $this->input->post('input_nama');

    $this->db->select('*');
            $this->db->from('cv');
            $this->db->where('nama_perusahaan',$nama_perusahaan);
            $this->db->where('nama',$this->session->userdata('ses_nama'));
            $query = $this->db->get();
    $data = array(
      "nama_perusahaan" => $this->input->post('input_nama_perusahaan'),
      "nama" => $this->input->post('input_nama'),
      "tempat" => $this->input->post('input_tempat'),
      "tanggal_lahir" => $this->input->post('input_tanggal_lahir'),
      "id_jabatan" => $this->input->post('id_jabatan'),
      "alamat_lengkap" => $this->input->post('input_alamat_lengkap'),
      "pengalaman_kerja" => $this->input->post('input_pengalaman_kerja'),
      "id_status" => 1
    );
   
    if ($query->num_rows()>0) {
      echo $this->session->set_flashdata('cv','Tidak bisa memasukan lebih dari 1 CV !!');
    }else{

    $this->db->insert('cv', $data);
    }

  }
  public function delete($noid){
    $this->db->where('noid', $noid);
    $this->db->delete('cv'); // Untuk mengeksekusi perintah delete data
  }
}
  

   
