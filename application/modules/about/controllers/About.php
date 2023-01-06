<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends About_Controller {

	public $data;

	function __construct(){
		parent::__construct();

		$this->data['title_page'] = 'About'; //page title
		$this->tbl_user = 'tbl_user';		//table name
		$this->load->model('global_model', 'qry_global');   //autoload global setting
	}
	//home page.......................................................................................................
	public function index()
	{
		// $user_id = $this->qry_global->_get_username($this->tbl_user, $username="rey");
		// print_r($user_id);
		$this->load->view('about_view');
	}
	public function leadership()
	{
		$this->load->view('leadership');
	}
	public function companies()
	{
		$this->load->view('companies');
	}
	public function habit()
	{
		$this->load->view('habit');
	}
	
}
