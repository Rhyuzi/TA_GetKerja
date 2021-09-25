<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Bidang_model extends CI_Model
{


public function view(){
    return $this->db->get('tbl_bidang_perusahaan')->result();
  }
    

    public function view_by($id_bidang){
    $this->db->where('id_bidang', $id_bidang);
    return $this->db->get('tbl_bidang_perusahaan')->row();
  }

  // Fungsi untuk validasi form tambah dan ubah
  public function validation($mode){
    $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya
    
    // Tambahkan if apakah $mode save atau update
    // Karena ketika update, NIS tidak harus divalidasi
    // Jadi NIS di validasi hanya ketika menambah data siswa saja
    if($mode == "save")
      $this->form_validation->set_rules('nama_bidang', 'Nama Bidang', 'required');
    
      
    if($this->form_validation->run()) // Jika validasi benar
      return TRUE; // Maka kembalikan hasilnya dengan TRUE
    else // Jika ada data yang tidak sesuai validasi
      return FALSE; // Maka kembalikan hasilnya dengan FALSE
  }
  
  // Fungsi untuk melakukan simpan data ke tabel siswa
  public function save(){
    $data = array(
      "nama_bidang" => $this->input->post('nama_bidang'),
      
    );
    
    $this->db->insert('tbl_bidang_perusahaan', $data); // Untuk mengeksekusi perintah insert data
  }
  
public function edit($id_bidang){
    $data = array(
     "bidang" => $this->input->post('bidang'),
     );
    
    $this->db->where('id_bidang', $id_bidang);
    $this->db->update('tbl_bidang_perusahaan', $data); // Untuk mengeksekusi perintah update data
  }

    public function delete($id_bidang){
    $this->db->where('id_bidang', $id_bidang);
    $this->db->delete('tbl_bidang_perusahaan'); // Untuk mengeksekusi perintah delete data
  }
}
