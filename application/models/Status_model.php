<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Status_model extends CI_Model
{


public function view(){
    return $this->db->get('status')->result();
  }
    

    public function view_by($id_status){
    $this->db->where('id_status', $id_status);
    return $this->db->get('status')->row();
  }

  // Fungsi untuk validasi form tambah dan ubah
  public function validation($mode){
    $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya
    
    // Tambahkan if apakah $mode save atau update
    // Karena ketika update, NIS tidak harus divalidasi
    // Jadi NIS di validasi hanya ketika menambah data siswa saja
    if($mode == "save")
      $this->form_validation->set_rules('status', 'Status', 'required');
    
      
    if($this->form_validation->run()) // Jika validasi benar
      return TRUE; // Maka kembalikan hasilnya dengan TRUE
    else // Jika ada data yang tidak sesuai validasi
      return FALSE; // Maka kembalikan hasilnya dengan FALSE
  }
  
  // Fungsi untuk melakukan simpan data ke tabel siswa
  public function save(){
    $data = array(
      "status" => $this->input->post('status'),
      
    );
    
    $this->db->insert('status', $data); // Untuk mengeksekusi perintah insert data
  }
  
public function edit($id_status){
    $data = array(
     "status" => $this->input->post('status'),
     );
    
    $this->db->where('id_status', $id_status);
    $this->db->update('status', $data); // Untuk mengeksekusi perintah update data
  }

    public function delete($id_status){
    $this->db->where('id_status', $id_status);
    $this->db->delete('status'); // Untuk mengeksekusi perintah delete data
  }
}
