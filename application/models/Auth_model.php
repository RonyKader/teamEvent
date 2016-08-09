<?php defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Auth_model extends CI_Model 
	{

		public function create_user()
		{
			$fname    = $this->input->post( 'fname' );	
			$lname    = $this->input->post( 'lname' );	
			$email    = $this->input->post( 'email' );	
			$mobile   = $this->input->post( 'mobile' );	
			$postcode = $this->input->post( 'postcode' );	
			$password = md5($this->input->post( 'password' ));
			$created_time = date( 'Y-m-d H:i:s');

			$data = array(
				'fname'		=> $fname,
				'lname' 	=> $lname,
				'email' 	=> $email,
				'mobile' 	=> $mobile,
				'postcode' 	=> $postcode,
				'password' 	=> $password,
				'created_date' => $created_time
				);

            // $data = $this->security->xss_clean($data);
			$result = $this->db->insert( 'users',$data );

			if ( $result )
			{
			 return TRUE;
			}else
			{
				return FALSE;
			}
		}

	}