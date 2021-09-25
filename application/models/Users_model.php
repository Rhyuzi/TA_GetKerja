<?php
	class Users_model extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function getAllUsers(){
			$query = $this->db->get('client');
			return $query->result(); 
		}

		public function register($user){
			return $this->db->insert('client', $user);
		}

	}
?>