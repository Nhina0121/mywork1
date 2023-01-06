<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

Class Global_model extends CI_Model {

	function __construct()
    {
        parent::__construct();
		//error message



        // Account Already Registered!
        // Your account has been verified.
        // Temporary password has been sent to your registered email.
        // Failed to change password.
        // Successfully changed password.
        // You are not authorized to view this page.
        // Successfully Registered!
        // Your account has not been activated.
        // Wrong Username/Password
    }
    function _generate_keys($length=''){
		return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
	}

	function _get_id($table='', $data = array()){
		$this->db->where($data);
		$qry =  $this->db->get($table);
		$row = $qry->row();
		if($row){
			$id = $row->id;
			return $id;
		}else{
			return FALSE;
		}		
	}

    function _get_id2($table, $id){
        $this->db->where('user_id', $id);  
        $qry =  $this->db->get($table);
        $row = $qry->row();
        if($row){
            $id = $row->emp_id;
            return $id;
        }else{
            return FALSE;
        }       
    }

    function _get_candidate_id($table, $id){
        $this->db->where('id', $id);  
        $qry =  $this->db->get($table);
        $row = $qry->row();
        if($row){
            $id = $row->candidate_id;
            return $id;
        }else{
            return FALSE;
        }       
    }

    function _get_candidate_id2($table, $email){
        $this->db->where('email', $email);  
        $qry =  $this->db->get($table);
        $row = $qry->row();
        if($row){
            $id = $row->id;
            return $id;
        }else{
            return FALSE;
        }       
    }

    function _get_id3($table, $id){
        $this->db->where('user_id', $id);  
        $qry =  $this->db->get($table);
        $row = $qry->num_rows();
    }

    function _ref_acl($acl_id){
        $qry=  $this->db->get_where('ref_acl', array('id' => $acl_id));
        $res = $qry->row();
        if($res){
            return $res->acl;
        }else{
            return 0;
        }           
    }

	function _add_user($table='',$data = array()){
		$this->db->insert($table, $data);
		return TRUE;
	}

	function _acct_activation($data){
		$this->db->where('acct_key', $data['acct_key']);
		$this->db->update('tbl_user', array('acct_status' => $data['acct_status']));
		return TRUE;
	}

    function _get_message($msg=''){
    	switch ($msg) {
    		case 'login_success':
    			$args = array(
    				'alert' => 'alert-success', 
        			'msg' => 'Successfully logged in'
    			);
    			return $args;
    			break;
    		case 'login_failed':
    			$args = array(
    				'alert' => 'alert-danger', 
        			'msg' => 'Wrong Username/Password'
    			);
    			return $args;
    			break;
    		case 'acct_registered':
    			$args = array(
    				'alert' => 'alert-warning', 
        			'msg' => 'Account Already Registered!'
    			);
    			return $args;
    			break;
    		case 'acct_added':
    			$args = array(
    				'alert' => 'alert-success', 
        			'msg' => 'Successfully Registered! Please check your email to verify your account'
    			);
    			return $args;
    			break;
    		case 'acct_verified':
    			$args = array(
    				'alert' => 'alert-success', 
        			'msg' => 'Your account has been verified.'
    			);
    			return $args;
    			break;
    		case 'acct_notverified':
    			$args = array(
    				'alert' => 'alert-warning', 
        			'msg' => 'Your account already verified.'
    			);
    			return $args;
    			break;    		
    		case 'acct_inactive':
    			$args = array(
    				'alert' => 'alert-warning', 
        			'msg' => 'Your account has not been activated.'
    			);
    			return $args;
    			break;
    		case 'email_failed':
    			$args = array(
    				'alert' => 'alert-danger', 
        			'msg' => 'Message not delivered: Please enter a valid email.'
    			);
    			return $args;
    			break;
    		
    		case 'email_success':
                $args = array(
                    'alert' => 'alert-success', 
                    'msg' => 'E-mail successfully changed.'
                );
                return $args;
                break;
            case 'password_changed_success':
                $args = array(
                    'alert' => 'alert-success', 
                    'msg' => 'Successfully changed password.'
                );
                return $args;
                break;
            case 'password_changed_failed':
                $args = array(
                    'alert' => 'alert-danger', 
                    'msg' => 'Failed to change password.'
                );
                return $args;
                break;
            case 'forgot_password_success':
                $args = array(
                    'alert' => 'alert-success', 
                    'msg' => 'Temporary password has been sent to your registered email.'
                );
                return $args;
                break;
            case 'forgot_password_failed':
                $args = array(
                    'alert' => 'alert-danger', 
                    'msg' => 'Temporary password not sent.'
                );
                return $args;
                break;
            case 'employer_add_success':
                $args = array(
                    'alert' => 'alert-success', 
                    'msg' => 'Employer Successfully Added!'
                );
                return $args;
                break;
            case 'employer_update_success':
                $args = array(
                    'alert' => 'alert-success', 
                    'msg' => 'Record successfully updated!'
                );
                return $args;
                break;
            case 'employer_update_failed':
                $args = array(
                    'alert' => 'alert-danger', 
                    'msg' => 'Failed to update information!'
                );
                return $args;
                break;    
            case 'employer_add_job_success':
                $args = array(
                    'alert' => 'alert-success',
                    'msg' => 'Successfully added job'
                );
                return $args;
                break;
            case 'employer_add_job_failed':
                $args = array(
                    'alert' => 'alert-danger',
                    'msg' => 'Failed to add job'
                );
                return $args;
                break;     
            case 'message_added':
                $args = array(
                    'alert' => 'alert-success',
                    'msg' => 'Thank you for getting in touch! We appreciate you contacting us. One of our colleagues will get back in touch with you soon! Have a great day'
                );
                return $args;
                break;   
            case 'message_failed':
                $args = array(
                    'alert' => 'alert-danger',
                    'msg' => 'Error'
                );
                return $args;
                break;    
            case 'page_error':
                $args = array(
                    'alert' => 'alert-danger',
                    'msg' => 'There was a problem viewing your page'
                );
                return $args;
                break;  
            case 'upload_photo_failed':
                $args = array(
                    'alert' => 'alert-danger', 
                    'msg' => 'Select image to upload.'
                );
                return $args;
                break;
            
            case 'upload_photo_resized_failed':
                $args = array(
                    'alert' => 'alert-danger', 
                    'msg' => 'Invalid image size.'
                );
                return $args;
                break;
            
            case 'upload_photo_format_failed':
                $args = array(
                    'alert' => 'alert-danger', 
                    'msg' => 'Invalid image format must be JPG.'
                );
                return $args;
                break;
            
            case 'upload_photo_resized_success':
                $args = array(
                    'alert' => 'alert-success', 
                    'msg' => 'Image was successfully uploaded to directory and resized.'
                );
                return $args;
                break;
            
            case 'upload_file_failed':
                $args = array(
                    'alert' => 'alert-danger', 
                    'msg' => 'No PDF file was selected.'
                );
                return $args;
                break;
            
            case 'upload_file_success':
                $args = array(
                    'alert' => 'alert-success', 
                    'msg' => 'PDF was successfully uploaded to directory..'
                );
                return $args;
                break;
            
            case 'upload_file_format_failed':
                $args = array(
                    'alert' => 'alert-danger', 
                    'msg' => 'Invalid file format must be PDF.'
                );
                return $args;
                break;
            
            case 'update_candidate':
                $args = array(
                    'alert' => 'alert-success', 
                    'msg' => 'Successfully Updated Profile!'
                );
                return $args;
                break;      
            
            case 'adding_candidate':
                $args = array(
                    'alert' => 'alert-success', 
                    'msg' => 'Candidate Successfully Added!'
                );
                return $args;
                break;  

            case 'schedule_success':
                $args = array(
                    'alert' => 'alert-success', 
                    'msg' => 'Candidate Successfully Scheduled!'
                );
                return $args;
                break;  

            case 'add_note_success':
                $args = array(
                    'alert' => 'alert-success', 
                    'msg' => 'Successfully Add Note/s!'
                );
                return $args;
                break; 
            case 'adding_candidate_failed':
                $args = array(
                    'alert' => 'alert-danger',
                    'msg' => 'Failed to add candidate, Please filled up all the fields'
                );
                return $args;
                break;    
            case 'candidate_already_exists':
                $args = array(
                    'alert' => 'alert-warning', 
                    'msg' => 'Warning: Candidate Email Already Exists!'
                );
                return $args;
                break;  
            case 'delete_candidate':
                $args = array(
                    'alert' => 'alert-success', 
                    'msg' => 'Candidate Successfully Deleted!'
                );
                return $args;
                break;  

            default:
                # code...
                break;
    	}
    }
	
	function _get_table($table='',$data = array()){
		if (!empty($data)) {
            $this->db->where($data);
        }
		$qry =  $this->db->get($table);
		$row = $qry->row();
		if($row){
			$data = array(
				'id' => $row->id,
				'acl_id' => $row->acl_id,
				'role_id' => $row->role_id,
				'email' => $row->email,
				'acct_status' => $row->acct_status,
				'is_logged' => TRUE
			);
			return $data;
		}else{
			return FALSE;
		}			
	}

    function _get_table_candidate($table='',$data = array()){
        if (!empty($data)) {
            $this->db->where($data);
        }
        $qry =  $this->db->get($table);
        $row = $qry->row();
        if($row){
            $data = array(
                'id' => $row->id,
                'firstname' => $row->firstname,
                'lastname' => $row->lastname,
                'email' => $row->email,
            );
            return $data;
        }else{
            return FALSE;
        }           
    }

    function _update_user_password($data){
        $this->db->where('id', $data['id']);
        $this->db->update('tbl_user', array('password' => $data['password']));
        return TRUE;
    }

    function _get_user_forgot_password_key($data){
        $qry =  $this->db->get_where('tbl_user', $data);
        $row = $qry->row();

        $keys = $this->_generate_keys(15);
        $data = array(
            'user_id' => $row->id,
            'email' => $row->email,
            'keys' => $keys, //15 length auto generate keys
            'password' => sha1($this->config->item('salt').md5($keys))
        );

        $qry_chk_userid = $this->db->get_where('tbl_user_forgot_password', array('user_id' => $data['user_id']));
        $res_userid = $qry_chk_userid->result_array();

        if($row) {
            if($res_userid) {
                $this->db->where('user_id', $data['user_id']);
                $this->db->update('tbl_user_forgot_password', array('keys' => $data['keys']));

                $this->db->where('email', $data['email']);
                $this->db->update('tbl_user', array('password' => $data['password']));
            }else{
                $this->db->insert('tbl_user_forgot_password', array('user_id' => $data['user_id'], 'keys' => $data['keys']));

                $this->db->where('email', $data['email']);
                $this->db->update('tbl_user', array('password' => $data['password']));
            }

            return $data;
        }else{
            return FALSE;
        }
    }

    function _record_count($table_name) {
        $this->db->where('user_id', $_SESSION['id']);
        $qry = $this->db->get($table_name);
        $row = $qry->num_rows();
        return $row ;
    }

    function _record_count2($table_name) {
        $this->db->where('employer_id', $_SESSION['id']);
        $qry = $this->db->get($table_name);
        $row = $qry->num_rows();
        return $row ;
    }

    function _record_count3($table_name) {
        $this->db->where('staff_id', $_SESSION['id']);
        $this->db->order_by("candidate_name", "asc");
        $qry = $this->db->get($table_name);
        $row = $qry->num_rows();
        return $row ;
    }

    function _record_count4($table_name) {
        $this->db->where('employer_id', $_SESSION['id']);
            $this->db->where('cdate >= curdate() - INTERVAL DAYOFWEEK(curdate())+6 DAY');
            $data = $this->db->get($table_name);
            $query = $data->num_rows();
            return $query;
    }

    function _record_count5() {
        $this->db->select('a.candidate_id AS candidate_id
                             , a.employer_id AS employer_id
                             , a.staff_id AS staff_id
                             , a.candidate_name AS candidate_name
                             , a.email as email
                             , a.address as address
                             , a.status as status
                             , a.cdate as cdate
                             , b.emp_id as emp_id'
                        );
            $this->db->from('view_cv_manager a');
            $this->db->join('tbl_staff b', 'a.employer_id = b.emp_id', 'left');

            $this->db->where('a.employer_id = b.emp_id');
            $this->db->where('a.cdate >= curdate() - INTERVAL DAYOFWEEK(curdate())+6 DAY');
            $this->db->where('b.user_id', $_SESSION['id']);  
            // $this->db->where('a.user_id = d.user_id');
            // $this->db->where('a.user_id = e.user_id');
            // $this->db->where('a.emp_id', $_SESSION['id']);
            $this->db->order_by("a.candidate_name", "asc");
            $data = $this->db->get();           
            $query = $data->num_rows();
            return $query;
    }

    function _record_count6() {
        $this->db->select('a.candidate_id AS candidate_id
                             , a.employer_id AS employer_id
                             , a.staff_id AS staff_id
                             , a.candidate_name AS candidate_name
                             , a.email as email
                             , a.address as address
                             , a.status as status
                             , b.emp_id as emp_id'
                        );
            $this->db->from('view_cv_manager_tracker a');
            $this->db->join('tbl_staff b', 'a.employer_id = b.emp_id', 'left');

            $this->db->where('a.employer_id = b.emp_id');
            $this->db->where('a.staff_id', $_SESSION['id']);
            // $this->db->where('a.user_id = d.user_id');
            // $this->db->where('a.user_id = e.user_id');
            // $this->db->where('a.emp_id', $_SESSION['id']);
            $this->db->order_by("a.candidate_name", "asc");
            $data = $this->db->get();           
            $query = $data->num_rows();
            return $query;
    }

    function _record_count7() {
        $this->db->select('a.candidate_id AS candidate_id
                             , a.employer_id AS employer_id
                             , a.staff_id AS staff_id
                             , a.candidate_name AS candidate_name
                             , a.email as email
                             , a.address as address
                             , a.status as status
                             , b.emp_id as emp_id'
                        );
            $this->db->from('view_cv_manager a');
            $this->db->join('tbl_staff b', 'a.employer_id = b.emp_id', 'left');

            $this->db->where('a.employer_id = b.emp_id');
            $this->db->where('b.user_id', $_SESSION['id']); 
            // $this->db->where('a.user_id = d.user_id');
            // $this->db->where('a.user_id = e.user_id');
            // $this->db->where('a.emp_id', $_SESSION['id']);
            $this->db->order_by("a.candidate_name", "asc");
            $data = $this->db->get();           
            $query = $data->num_rows();
            return $query;
    }

    function _record_count8($table_name) {
        $this->db->where('staff_id', $_SESSION['id']);
        $qry = $this->db->get($table_name);
        $row = $qry->num_rows();
        return $row ;
    }

    function _record_count9($table_name) {
        $this->db->like('candidate_job', $data['candidate_job']);
            $this->db->like('candidate_address', $data['candidate_address']);
            $this->db->like('years_experience', $data['years_experience']);
            $this->db->like('industry_id', $data['industry_id']);
            $this->db->where('employer_id', $_SESSION['id']);
            $qry = $this->db->get('view_search_my_pool');
            $res = $qry->num_rows();
            return $res ;
    }

    function _pagination($table_name, $destination){
        $config = array();
        $config["base_url"] = base_url() . $destination;
        $config["total_rows"] = $this->_record_count($table_name);
        $config["per_page"] = 5;
        $config["uri_segment"] = 3;
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="javascript:void(0);">';
        $config['cur_tag_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';

        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';

        $this->pagination->initialize($config);
    }

    function _pagination2($table_name, $destination){
        $config = array();
        $config["base_url"] = base_url() . $destination;
        $config["total_rows"] = $this->_record_count2($table_name);
        $config["per_page"] = 5;
        $config["uri_segment"] = 3;
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="javascript:void(0);">';
        $config['cur_tag_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';

        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';

        $this->pagination->initialize($config);
    }

    function _pagination3($table_name, $destination){
        $config = array();
        $config["base_url"] = base_url() . $destination;
        $config["total_rows"] = $this->_record_count3($table_name);
        $config["per_page"] = 5;
        $config["uri_segment"] = 3;
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="javascript:void(0);">';
        $config['cur_tag_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';

        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';

        $this->pagination->initialize($config);
    }

    function _pagination4($table_name, $destination){
        $config = array();
        $config["base_url"] = base_url() . $destination;
        $config["total_rows"] = $this->_record_count4($table_name);
        $config["per_page"] = 5;
        $config["uri_segment"] = 3;
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="javascript:void(0);">';
        $config['cur_tag_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';

        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';

        $this->pagination->initialize($config);
    }

    function _pagination5($table_name, $destination){
        $config = array();
        $config["base_url"] = base_url() . $destination;
        $config["total_rows"] = $this->_record_count5($table_name);
        $config["per_page"] = 5;
        $config["uri_segment"] = 3;
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="javascript:void(0);">';
        $config['cur_tag_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';

        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';

        $this->pagination->initialize($config);
    }

    function _pagination6($table_name, $destination){
        $config = array();
        $config["base_url"] = base_url() . $destination;
        $config["total_rows"] = $this->_record_count6($table_name);
        $config["per_page"] = 5;
        $config["uri_segment"] = 3;
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="javascript:void(0);">';
        $config['cur_tag_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';

        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';

        $this->pagination->initialize($config);
    }

    function _pagination7($table_name, $destination){
        $config = array();
        $config["base_url"] = base_url() . $destination;
        $config["total_rows"] = $this->_record_count7($table_name);
        $config["per_page"] = 5;
        $config["uri_segment"] = 3;
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="javascript:void(0);">';
        $config['cur_tag_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';

        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';

        $this->pagination->initialize($config);
    }

    function _pagination8($table_name, $destination){
        $config = array();
        $config["base_url"] = base_url() . $destination;
        $config["total_rows"] = $this->_record_count8($table_name);
        $config["per_page"] = 5;
        $config["uri_segment"] = 3;
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="javascript:void(0);">';
        $config['cur_tag_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';

        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';

        $this->pagination->initialize($config);
    }

    function _pagination9($table_name, $destination){
        $config = array();
        $config["base_url"] = base_url() . $destination;
        $config["total_rows"] = $this->_record_count9($table_name);
        $config["per_page"] = 5;
        $config["uri_segment"] = 3;
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="javascript:void(0);">';
        $config['cur_tag_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';

        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';

        $this->pagination->initialize($config);
    }

    // function _get_emp_id($table_name, $id)
    //     {
    //         $this->db->where('user_id', $id);
    //         $qry = $this->db->get('$table_name');
    //         $data = $this->db->get('emp_id');
    //         return $data;
    //     }

    function _get_emp_id($id){
        $this->db->where('staff_id', $id);  
        $query = $this->db->query('SELECT emp_id FROM view_get_emp'); 
        $row = $query->row();
        if($row){
            $id = $row->id;
            return $id;
        }else{
            return FALSE;
        }       
    }
}

?>