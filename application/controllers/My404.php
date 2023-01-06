<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My404 extends ERROR_Controller {

  public $data;
	
	function __construct() {
    parent::__construct();
    $this->data['title'] = '404 Page';
  }

	public function index()
	{
   $this->output->set_status_header('404');
   $this->load->view('errors/html/error_404');
  }

}
