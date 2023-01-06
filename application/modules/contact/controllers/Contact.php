<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends Contact_Controller {

	public $data; 

	function __construct(){
		parent::__construct();

		$this->tbl_message = 'tbl_message';
        $this->load->model('global_model', 'qry_global'); 
        $this->load->model('contact_model', 'qry_contact'); 

        $this->email_from = 'sfigroupofcompanies@gmail.com'; 
        $this->email_to = 'nina.zuniga@gmail.com'; 
	}
	//home page.......................................................................................................
	public function index()
	{
		$data['title'] = 'Contact Us';
		// $user_id = $this->qry_global->_get_username($this->tbl_user, $username="rey");
		// print_r($user_id);
		$this->load->view('contact');
	}	

	public function contact_message(){

        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('subject', 'Subject', 'trim');
        $this->form_validation->set_rules('message', 'Message', 'trim|required');       
        
        if ($this->form_validation->run() === FALSE){
           $this->load->view('contact');
        }
        else{   

             $data = array(  
                      'name' => $this->input->post('name'),                
                      'email' => $this->input->post('email'),          
                      'subject' => $this->input->post('subject'),                
                      'message' => $this->input->post('message')   
                    );       

               

                    $this->qry_global->_add_user($this->tbl_message, $data);    
                    $data['args'] = $this->qry_global->_get_message('message_added');
                
                
            }
             // print_r($data);
        $this->load->view('contact', $data);
    }

    
}
