<?php
	if (!defined('BASEPATH'))
		exit('No direct script access allowed');

class Contact_model extends CI_Model {
	
	function _add_message($table='',$data = array()){
		$this->db->insert($table, $data);
		return TRUE;
	}
}

?>