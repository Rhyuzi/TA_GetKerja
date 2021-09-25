<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan_model extends CI_Model
{


public function view(){
    return $this->db->get('jabatan')->result();
  }
    

    public function view_by($id_jabatan){
    $this->db->where('id_jabatan', $id_jabatan);
    return $this->db->get('jabatan')->row();
  }

  // Fungsi untuk validasi form tambah dan ubah
  public function validation($mode){
    $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya
    
    // Tambahkan if apakah $mode save atau update
    // Karena ketika update, NIS tidak harus divalidasi
    // Jadi NIS di validasi hanya ketika menambah data siswa saja
    if($mode == "save")
      $this->form_validation->set_rules('nama_jabatan', 'nama jabatan', 'required');

      
    if($this->form_validation->run()) // Jika validasi benar
      return TRUE; // Maka kembalikan hasilnya dengan TRUE
    else // Jika ada data yang tidak sesuai validasi
      return FALSE; // Maka kembalikan hasilnya dengan FALSE
  }
  
  // Fungsi untuk melakukan simpan data ke tabel siswa
  public function save(){
    $data = array(
      "nama_jabatan" => $this->input->post('nama_jabatan'),
      
     
    );
    
    $this->db->insert('jabatan', $data); // Untuk mengeksekusi perintah insert data
  }
  
public function edit($id_jabatan){
    $data = array(
     "nama_jabatan" => $this->input->post('nama_jabatan'),
     );
    
    $this->db->where('id_jabatan', $id_jabatan);
    $this->db->update('client', $data); // Untuk mengeksekusi perintah update data
  }

    public function delete($id_jabatan){
    $this->db->where('id_jabatan', $id_jabatan);
    $this->db->delete('client'); // Untuk mengeksekusi perintah delete data
  }
}
