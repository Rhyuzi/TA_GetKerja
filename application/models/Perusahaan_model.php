<?php

    class Perusahaan_model extends CI_model{
        public function getDataBidang()
        {
            return $this->db->get('tbl_bidang_perusahaan')->result_array();
        }
        public function getDataPerusahaan()
        {
            $this->db->select('*');
            $this->db->from('tbl_record_perusahaan');
            $this->db->join('tbl_bidang_perusahaan', 'tbl_bidang_perusahaan.id_bidang = tbl_record_perusahaan.id_bidang');
            $query = $this->db->get();
            return $query->result_array();
        }
        public function tambahDataGuru()
        {
            $data = [
                'nama_perusahaan' => $this->input->post("nama_perusahaan", true),
                'ceo_perusahaan' => $this->input->post("ceo_perusahaan", true),
                'id_bidang' => $this->input->post("id_bidang", true),
                'alamat' => $this->input->post("alamat", true),
                'kota' => $this->input->post("kota", true),
                'keterangan' => $this->input->post("keterangan", true),
            ];

            $this->db->insert('tbl_record_perusahaan', $data);
        }
        public function hapusDataGuru($noid)
        {
            $this->db->where("noid", $noid);
            $this->db->delete("tbl_record_perusahaan");
        }
        public function getGuruByNip($noid)
        {
            $this->db->select('*');
            $this->db->from('tbl_record_perusahaan');
            $this->db->where('noid' ,$noid);
            $this->db->join('tbl_bidang_perusahaan', 'tbl_bidang_perusahaan.id_bidang = tbl_record_perusahaan.id_bidang');
            $query = $this->db->get();
            return $query->row_array();
        }
        public function ubahDataGuru($noid)
        {
            $data = [
                'nama_perusahaan' => $this->input->post("nama_perusahaan", true),
                'ceo_perusahaan' => $this->input->post("ceo_perusahaan", true),
                'id_bidang' => $this->input->post("id_bidang", true),
                'alamat' => $this->input->post("alamat", true),
                'kota' => $this->input->post("kota", true),
                'keterangan' => $this->input->post("keterangan", true),
            ];
            $this->db->where('noid', $noid);
            $this->db->update('tbl_record_perusahaan', $data);
        }
            
        
    }