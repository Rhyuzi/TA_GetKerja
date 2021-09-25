<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('users_model');
		// load form and url helpers
        $this->load->helper(array('form', 'url'));
        // load form_validation library
        $this->load->library('form_validation');
	}
	
	public function index(){
		$this->load->view('register_form');		
	}

    public function fetch(){
        $data = $this->users_model->getAllUsers();
        foreach($data as $row){
            ?>
            <tr>
                <td><?php echo $row->noid; ?></td>
                <td><?php echo $row->user_id; ?></td>
                <td><?php echo $row->nama; ?></td>
                <td><?php echo $row->pass; ?></td>

                <td><?php echo $row->alamat; ?></td>
                <td><?php echo $row->tanggal_lahir; ?></td>
                <td><?php echo $row->tempat_lahir; ?></td>

                <td><?php echo $row->email; ?></td>
                <td><?php echo $row->nohp; ?></td>
                <td><?php echo $row->level; ?></td>
            </tr>
            <?php
        }
    }

	public function register(){
        $output = array('error' => false);

		/* Set validation rule for name field in the form */ 
        $this->form_validation->set_rules('user_id', 'User id', 'required');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('pass', 'password', 'required');
        $this->form_validation->set_rules('pass2', 'password2', 'required|matches[pass]');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'tanggal lahir', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'tempat lahir', 'required');
        $this->form_validation->set_rules('email', 'Email', 'valid_email|required');
        $this->form_validation->set_rules('nohp', 'no HP', 'numeric|required');
			
        if ($this->form_validation->run() == FALSE) { 
        	$output['error'] = true;
            $output['message'] = validation_errors();
        } 
        else { 
            $user['user_id'] = $_POST['user_id'];
            $user['nama'] = $_POST['nama'];
            $user['pass'] = md5($_POST['pass']);
            $user['alamat'] = $_POST['alamat'];
            $user['tanggal_lahir'] = $_POST['tanggal_lahir'];
            $user['tempat_lahir'] = $_POST['tempat_lahir'];
            $user['email'] = $_POST['email'];
            $user['nohp'] = $_POST['nohp'];
            $user['level'] = 3;


            $query = $this->users_model->register($user);

            if($query){
            	$output['message'] = 'User registered successfully';
            }
            else{
                $output['error'] = true;
            	$output['message'] = 'User registered successfully';
            }
        }

        echo json_encode($output);
	}

}
