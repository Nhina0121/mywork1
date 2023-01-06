<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends Blog_Controller {

	public $data;

	function __construct(){
		parent::__construct();

		$this->data['title_page'] = 'Blog'; //page title
		$this->tbl_user = 'tbl_user';		//table name
		$this->load->model('global_model', 'qry_global');   //autoload global setting
	}
	//home page.......................................................................................................
	public function index()
	{
		// $user_id = $this->qry_global->_get_username($this->tbl_user, $username="rey");
		// print_r($user_id);
		$this->load->view('blog_view');
	}		
}
