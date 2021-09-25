	<?php
class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('login_model');
	}

	function index(){
		$this->load->view('v_login');
	}

	function auth(){
        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);

        $cek_admin=$this->login_model->auth_admin($username,$password);

        if($cek_admin->num_rows() > 0){ //jika login sebagai dosen
						$data=$cek_admin->row_array();
        		$this->session->set_userdata('masuk',TRUE);
		         if($data['level']=='1'){ //Akses admin
		            $this->session->set_userdata('akses','1');
		            $this->session->set_userdata('ses_id',$data['user_id']);
		            $this->session->set_userdata('ses_nama',$data['nama']);
		            redirect('admin/overview');

		         }else{ 
		            $this->session->set_userdata('akses','2');
					$this->session->set_userdata('ses_id',$data['user_id']);
		            $this->session->set_userdata('ses_nama',$data['nama']);
		             redirect('ceo/overview');
		         }

    	    }else{ 
					$cek_client=$this->login_model->auth_client($username,$password);
					if($cek_client->num_rows() > 0){
							$data=$cek_client->row_array();
        			$this->session->set_userdata('masuk',TRUE);
							$this->session->set_userdata('akses','3');
							$this->session->set_userdata('ses_id',$data['username']);
							$this->session->set_userdata('ses_nama',$data['nama']);
		            		$this->session->set_userdata('ses_alamat',$data['alamat']);
							 redirect('client/beranda');
					}else{  // jika username dan password tidak ditemukan atau salah
							$url=base_url();
							echo $this->session->set_flashdata('msg','Username Atau Password Salah');
							redirect($url);
					}
        }

    }

    function logout(){
        $this->session->sess_destroy();
        $url=base_url('v_login');
        redirect($url);
    }

}
