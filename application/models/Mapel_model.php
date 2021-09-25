<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Mapel_model extends CI_Model
{


public function view(){
    return $this->db->get('client')->result();
  }
    

    public function view_by($noid){
    $this->db->where('noid', $noid);
    return $this->db->get('client')->row();
  }

  // Fungsi untuk validasi form tambah dan ubah
  public function validation($mode){
    $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya
    
    // Tambahkan if apakah $mode save atau update
    // Karena ketika update, NIS tidak harus divalidasi
    // Jadi NIS di validasi hanya ketika menambah data siswa saja
    if($mode == "save")
      $this->form_validation->set_rules('input_noid', 'noid', 'required');
    $this->form_validation->set_rules('input_userid', 'user_id', 'required|max_length[50]');
    $this->form_validation->set_rules('input_nama', 'nama', 'required|max_length[50]');
    $this->form_validation->set_rules('input_pass', 'pass', 'required|max_length[50]');
    $this->form_validation->set_rules('input_alamat', 'alamat', 'required');
    $this->form_validation->set_rules('input_tanggal_lahir', 'tanggal_lahir', 'required');
    $this->form_validation->set_rules('input_tempat_lahir', 'tempat_lahir', 'required|max_length[20]');
    $this->form_validation->set_rules('input_email', 'email', 'required|max_length[20]|valid_email');
    $this->form_validation->set_rules('input_nohp', 'nohp', 'required|max_length[20]|numeric');
    $this->form_validation->set_rules('input_level', 'level', 'required|max_length[1]');

      
    if($this->form_validation->run()) // Jika validasi benar
      return TRUE; // Maka kembalikan hasilnya dengan TRUE
    else // Jika ada data yang tidak sesuai validasi
      return FALSE; // Maka kembalikan hasilnya dengan FALSE
  }
  
  // Fungsi untuk melakukan simpan data ke tabel siswa
  public function save(){
    $data = array(
      "noid" => $this->input->post('input_noid'),
      "userid" => $this->input->post('input_userid'),
      "nama" => $this->input->post('input_nama'),
      "pass" => $this->input->post('input_pass'),
      "alamat" => $this->input->post('input_alamat'),
      "tanggal_lahir" => $this->input->post('input_tanggal_lahir'),
      "tempat_lahir" => $this->input->post('input_tempat_lahir'),
      "email" => $this->input->post('input_email'),
      "nohp" => $this->input->post('input_nohp'),
      "level" => $this->input->post('input_level')
     
    );
    
    $this->db->insert('client', $data); // Untuk mengeksekusi perintah insert data
  }
  
public function edit($noid){
    $data = array(
     "noid" => $this->input->post('input_noid'),
      "userid" => $this->input->post('input_userid'),
      "nama" => $this->input->post('input_nama'),
      "pass" => $this->input->post('input_pass'),
      "alamat" => $this->input->post('input_alamat'),
      "tanggal_lahir" => $this->input->post('input_tanggal_lahir'),
      "tempat_lahir" => $this->input->post('input_tempat_lahir'),
      "email" => $this->input->post('input_email'),
      "nohp" => $this->input->post('input_nohp'),
      "level" => $this->input->post('input_level')
     );
    
    $this->db->where('noid', $noid);
    $this->db->update('client', $data); // Untuk mengeksekusi perintah update data
  }

    public function delete($noid){
    $this->db->where('noid', $noid);
    $this->db->delete('client'); // Untuk mengeksekusi perintah delete data
  }
}
