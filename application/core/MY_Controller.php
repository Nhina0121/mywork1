<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/* load the MX_Router class */
require APPPATH . "third_party/MX/Controller.php";

class Home_Controller extends MX_Controller
{

	function __construct() 
	{
		parent::__construct();
		$this->_hmvc_fixes();
	}
	
	function _hmvc_fixes()
	{		
		//fix callback form_validation		
		//https://bitbucket.org/wiredesignz/codeigniter-modular-extensions-hmvc
		$this->load->library('form_validation');
		$this->form_validation->CI =& $this;
	}

	function _remap($method, $args) {
    $this->before();
        // original setup
        if(method_exists($this, $method) ){                  
            call_user_func_array(array($this, $method), $args);                   
        } else { show_404('',FALSE); }
    $this->after();
	}

	protected function before() 
	{ 
	    $this->load->view('temps/home/header');
	    return;
	}
	protected function after() 
	{ 
	    $this->load->view('temps/home/footer');
	    return;        
	}
}

class About_Controller extends MX_Controller
{

    function __construct() 
    {
        parent::__construct();
        $this->_hmvc_fixes();
    }
    
    function _hmvc_fixes()
    {       
        //fix callback form_validation      
        //https://bitbucket.org/wiredesignz/codeigniter-modular-extensions-hmvc
        $this->load->library('form_validation');
        $this->form_validation->CI =& $this;
    }

    function _remap($method, $args) {
    $this->before();
        // original setup
        if(method_exists($this, $method) ){                  
            call_user_func_array(array($this, $method), $args);                   
        } else { show_404('',FALSE); }
    $this->after();
    }

    protected function before() 
    { 
        $this->load->view('temps/about/header');
        return;
    }
    protected function after() 
    { 
        $this->load->view('temps/about/footer');
        return;        
    }
}

class Advocacy_Controller extends MX_Controller
{

    function __construct() 
    {
        parent::__construct();
        $this->_hmvc_fixes();
    }
    
    function _hmvc_fixes()
    {       
        //fix callback form_validation      
        //https://bitbucket.org/wiredesignz/codeigniter-modular-extensions-hmvc
        $this->load->library('form_validation');
        $this->form_validation->CI =& $this;
    }

    function _remap($method, $args) {
    $this->before();
        // original setup
        if(method_exists($this, $method) ){                  
            call_user_func_array(array($this, $method), $args);                   
        } else { show_404('',FALSE); }
    $this->after();
    }

    protected function before() 
    { 
        $this->load->view('temps/advocacy/header');
        return;
    }
    protected function after() 
    { 
        $this->load->view('temps/advocacy/footer');
        return;        
    }
}

class Partners_Controller extends MX_Controller
{

    function __construct() 
    {
        parent::__construct();
        $this->_hmvc_fixes();
    }
    
    function _hmvc_fixes()
    {       
        //fix callback form_validation      
        //https://bitbucket.org/wiredesignz/codeigniter-modular-extensions-hmvc
        $this->load->library('form_validation');
        $this->form_validation->CI =& $this;
    }

    function _remap($method, $args) {
    $this->before();
        // original setup
        if(method_exists($this, $method) ){                  
            call_user_func_array(array($this, $method), $args);                   
        } else { show_404('',FALSE); }
    $this->after();
    }

    protected function before() 
    { 
        $this->load->view('temps/partners/header');
        return;
    }
    protected function after() 
    { 
        $this->load->view('temps/partners/footer');
        return;        
    }
}

class Blog_Controller extends MX_Controller
{

    function __construct() 
    {
        parent::__construct();
        $this->_hmvc_fixes();
    }
    
    function _hmvc_fixes()
    {       
        //fix callback form_validation      
        //https://bitbucket.org/wiredesignz/codeigniter-modular-extensions-hmvc
        $this->load->library('form_validation');
        $this->form_validation->CI =& $this;
    }

    function _remap($method, $args) {
    $this->before();
        // original setup
        if(method_exists($this, $method) ){                  
            call_user_func_array(array($this, $method), $args);                   
        } else { show_404('',FALSE); }
    $this->after();
    }

    protected function before() 
    { 
        $this->load->view('temps/blog/header');
        return;
    }
    protected function after() 
    { 
        $this->load->view('temps/blog/footer');
        return;        
    }
}

class Contact_Controller extends MX_Controller
{

    function __construct() 
    {
        parent::__construct();
        $this->_hmvc_fixes();
    }
    
    function _hmvc_fixes()
    {       
        //fix callback form_validation      
        //https://bitbucket.org/wiredesignz/codeigniter-modular-extensions-hmvc
        $this->load->library('form_validation');
        $this->form_validation->CI =& $this;
    }

    function _remap($method, $args) {
    $this->before();
        // original setup
        if(method_exists($this, $method) ){                  
            call_user_func_array(array($this, $method), $args);                   
        } else { show_404('',FALSE); }
    $this->after();
    }

    protected function before() 
    { 
        $this->load->view('temps/contact/header');
        return;
    }
    protected function after() 
    { 
        $this->load->view('temps/contact/footer');
        return;        
    }
}

class Faq_Controller extends MX_Controller
{

    function __construct() 
    {
        parent::__construct();
        $this->_hmvc_fixes();
    }
    
    function _hmvc_fixes()
    {       
        //fix callback form_validation      
        //https://bitbucket.org/wiredesignz/codeigniter-modular-extensions-hmvc
        $this->load->library('form_validation');
        $this->form_validation->CI =& $this;
    }

    function _remap($method, $args) {
    $this->before();
        // original setup
        if(method_exists($this, $method) ){                  
            call_user_func_array(array($this, $method), $args);                   
        } else { show_404('',FALSE); }
    $this->after();
    }

    protected function before() 
    { 
        $this->load->view('temps/faq/header');
        return;
    }
    protected function after() 
    { 
        $this->load->view('temps/faq/footer');
        return;        
    }
}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */
