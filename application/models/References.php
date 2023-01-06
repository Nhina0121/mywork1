<?php
Class References extends CI_Model{
	// Check Role
	function chk_user_role($username, $password){
		$query = $this->db->get_where('ref_credentials', array('username' => $username, 'password' => $password));
		$user = $query->result_array();
		if($user){
			$role = $user[0]['role'];
			return $role;
		}else{
			return 0;
		}
	}

	// CHECK USER
	function get_user($username, $password){
		$query = $this->db->get_where('ref_credentials', array('username' => $username, 'password' => $password));
		$user = $query->result_array();
		if($user){
			$data = array(
				'id' => $user[0]['id'],
				'role' => $user[0]['role'],
				'is_active' => $user[0]['is_active'],
				'is_logged' => TRUE
			);
			return $data;
		}else{
			return 0;
		}
	}
	// GET ROLE
	function get_role()
	{
		$query =  $this->db->get('ref_role');

		if($query->num_rows() > 0){
			foreach($query->result() as $row){
				$data[] = $row;
			}
			return $data;
		}
		return false;
	}
	function register_user($data)
	{
		$this->db->insert('ref_credentials',$data);
		$data['msg'] = "Succesfully Registered!";
		$this->load->view('forms/registration',$data);
	}
}
?>