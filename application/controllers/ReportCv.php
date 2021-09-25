<?php
Class ReportCv extends CI_Controller{
    
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
        $pdf->Cell(50,6,'NAMA',1,0);
        $pdf->Cell(30,6,'TEMPAT',1,0);
        $pdf->Cell(35,6,'TANGGAL LAHIR',1,0);
        $pdf->Cell(55,6,'PENGALAMAN KERJA',1,1);

           $query = $this->db->get('cv')->result();
        $pdf->SetFont('Arial','',10);
        
            foreach ($query as $data){
            $pdf->Cell(50,6,$data->nama,1,0);
            $pdf->Cell(30,6,$data->tempat,1,0);
            $pdf->Cell(35,6,$data->tanggal_lahir,1,0);
            $pdf->Cell(55,6,$data->pengalaman_kerja,1,1);

       }
        $pdf->Output();
    }
}