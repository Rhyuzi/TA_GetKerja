<?php
Class ReportCount extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
        $this->load->model('dashboard_model');
    }
    
    function index(){
        $data["count_lowongan"] = $this->dashboard_model->get_count_lowongan();
    $data["count_perusahaan"] = $this->dashboard_model->get_count_perusahaan(); 
    $data["count_client"] = $this->dashboard_model->get_count_client(); 
    $data["count"] = $this->dashboard_model->get_count();
        
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
        $pdf->Cell(55,6,'JUMLAH DATA LOWONGAN',1,0);
        $pdf->Cell(55,6,'JUMLAH DATA PERUSAHAAN',1,0);
        $pdf->Cell(37,6,'JUMLAH CLIENT',1,0);
        $pdf->Cell(40,6,'JUMLAH CV CLIENT',1,1);

        $pdf->SetFont('Arial','',10);

            $pdf->Cell(55,6,$data["count_lowongan"],1,0);
            $pdf->Cell(55,6,$data["count_perusahaan"],1,0);
            $pdf->Cell(37,6,$data["count_client"],1,0);
            $pdf->Cell(40,6,$data["count"],1,1); 

        $pdf->Output();
    }
}