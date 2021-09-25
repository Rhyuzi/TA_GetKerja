<?php
Class ReportPerusahaan extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }
    
    function index(){
        $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf -> Cell(190,7,'SMK Negeri 2 Cimahi',0,1,'C');
        $pdf -> SetFont('Arial','','12');
        $pdf -> Cell(190,7,'Jl.Kecamatan RT 04 RW 09 Kelurahan Cibabat Cimahi Utara',0,1,'C');
        $pdf -> Cell(190,4,'Telp/Fax (089)614110279 Email: azitom2@gmail.com Kota Cimahi 40513',0,1,'C');

        $pdf -> Cell(190,3,'','B',1,'L');
        $pdf -> Cell(190,1,'','B',0,'L');

        $pdf -> Ln(10);

        $pdf -> SetFont('Arial','B',18);
        $pdf -> Cell(190,30,'Daftar Perusahaan',0,1,'C');


        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(20,6,'NOID',1,0);
        $pdf->Cell(55,6,'NAMA PERUSAHAAN ',1,0);
        $pdf->Cell(37,6,'CEO PERUSAHAAN',1,0);
        $pdf->Cell(57,6,'ALAMAT',1,0);
        $pdf->Cell(25,6,'KOTA',1,1);

        $pdf->SetFont('Arial','',10);

        $perusahaan = $this->db->get('tbl_record_perusahaan')->result();
        foreach ($perusahaan as $row){
            $pdf->Cell(20,6,$row->noid,1,0);
            $pdf->Cell(55,6,$row->nama_perusahaan,1,0);
            $pdf->Cell(37,6,$row->ceo_perusahaan,1,0);
            $pdf->Cell(57,6,$row->alamat,1,0);
            $pdf->Cell(25,6,$row->kota,1,1); 
        }

        $pdf->Output();
    }
}