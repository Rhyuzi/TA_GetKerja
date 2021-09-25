<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Ubah_informasi_model extends CI_Model
{

  public function view(){
    return $this->db->get('client')->row();
  }
    

    public function view_by($noid){
    $this->db->where('noid', $noid);
    return $this->db->get('client')->result();
  }

  // Fungsi untuk validasi form tambah dan ubah
  public function validation($mode){
    $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya
    
    // Tambahkan if apakah $mode save atau update
    // Karena ketika update, NIS tidak harus divalidasi
    // Jadi NIS di validasi hanya ketika menambah data siswa saja
    if($mode == "save")
      $this->form_validation->set_rules('input_user_id', 'user_id', 'required|max_length[20]');
      $this->form_validation->set_rules('input_nama', 'nama', 'required|max_length[50]');
      $this->form_validation->set_rules('input_password','pass','required|max_length[50]');
      $this->form_validation->set_rules('input_alamat', 'alamat', 'required|max_length[100]');
      $this->form_validation->set_rules('input_tanggal_lahir', 'tanggal_lahir', 'required|max_length[20]');
      $this->form_validation->set_rules('input_tempat_lahir', 'noid', 'required|max_length[20]');
      $this->form_validation->set_rules('input_email', 'email', 'required|max_length[100]');
      $this->form_validation->set_rules('input_nohp', 'nohp', 'required|max_length[20]');

      
    if($this->form_validation->run()) // Jika validasi benar
      return TRUE; // Maka kembalikan hasilnya dengan TRUE
    else // Jika ada data yang tidak sesuai validasi
      return FALSE; // Maka kembalikan hasilnya dengan FALSE
  }
  
  // Fungsi untuk melakukan simpan data ke tabel siswa
  public function save(){
    if ($this->form_validation->run() ==false) {
      echo 'Gagal Membuat akun !';    
    }else{

    $data = array(
      "user_id" => $this->input->post('input_user_id'),
        "nama" => $this->input->post('input_nama') ,
        "pass" => md5($this->input->post('input_password')) ,
        "alamat" => $this->input->post('input_alamat') ,
        "tanggal_lahir" => $this->input->post('input_tanggal_lahir') ,
        "tempat_lahir" => $this->input->post('input_tempat_lahir') ,
        "email" => $this->input->post('input_email'),
        "nohp" => $this->input->post('input_nohp') ,
        "level" => 3
    );
    
    $this->db->insert('client', $data); // Untuk mengeksekusi perintah insert data
  }
}
  
public function edit($noid){
    $data = array(
      "user_id" => $this->input->post('user_id',true),
        "nama" => $this->input->post('nama',true) ,
        "pass" => md5($this->input->post('pass',true)) ,
        "alamat" => $this->input->post('alamat',true) ,
        "tanggal_lahir" => $this->input->post('tanggal_lahir',true) ,
        "tempat_lahir" => $this->input->post('tempat_lahir',true) ,
        "email" => $this->input->post('email',true),
        "nohp" => $this->input->post('nohp',true) ,
    );
    
    $this->db->where('noid', $noid);
    $this->db->update('client', $data); // Untuk mengeksekusi perintah update data
  }

    public function delete($noid){
    $this->db->where('noid', $noid);
    $this->db->delete('client'); // Untuk mengeksekusi perintah delete data
  }
  
}