<?php defined('BASEPATH') OR exit('No direct script access allowed');

class AkunPerusahaan_model extends CI_Model
{


public function view(){
    $this->db->select('*');
            $this->db->from('admin');
            $this->db->where('level',2);
            $query = $this->db->get();
            return $query->result_array();
  }
    

    public function view_by($user_id){
    $this->db->where('user_id', $user_id);
    return $this->db->get('admin')->row();
  }

  // Fungsi untuk validasi form tambah dan ubah
  public function validation($mode){
    $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya
    
    // Tambahkan if apakah $mode save atau update
    // Karena ketika update, NIS tidak harus divalidasi
    // Jadi NIS di validasi hanya ketika menambah data siswa saja
    if($mode == "save")
    $this->form_validation->set_rules('input_userid', 'user_id', 'required|max_length[50]');
    $this->form_validation->set_rules('input_nama', 'nama', 'required|max_length[50]');
    $this->form_validation->set_rules('input_pass', 'pass', 'required|max_length[50]');

      
    if($this->form_validation->run()) // Jika validasi benar
      return TRUE; // Maka kembalikan hasilnya dengan TRUE
    else // Jika ada data yang tidak sesuai validasi
      return FALSE; // Maka kembalikan hasilnya dengan FALSE
  }
  
  // Fungsi untuk melakukan simpan data ke tabel siswa
  public function save(){
    $data = array(
      "user_id" => $this->input->post('input_userid'),
      "nama" => $this->input->post('input_nama'),
      "pass" => md5($this->input->post('input_pass')),
      "level" => 2
     
    );
    
    $this->db->insert('admin', $data); // Untuk mengeksekusi perintah insert data
  }
  
public function edit($user_id){
    $data = array(
      "user_id" => $this->input->post('input_userid'),
      "nama" => $this->input->post('input_nama'),
      "pass" => $this->input->post('input_pass')
     );
    
    $this->db->where('user_id', $user_id);
    $this->db->update('admin', $data); // Untuk mengeksekusi perintah update data
  }

    public function delete($user_id){
    $this->db->where('user_id', $user_id);
    $this->db->delete('admin'); // Untuk mengeksekusi perintah delete data
  }
}
