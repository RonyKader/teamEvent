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


		public function check_login()
		{	
			$email = $this->input->post( 'email' );
			$password = md5( $this->input->post( 'password' ));

			$data = array(
				'email' => $email,
				'password' => $password,
				'status' => 1
				);
			$result = $this->db->get_where( 'users', $data );

			if ( $result->num_rows() == 1 ) 
			{
				$data = array(
					'id' => $result->row(0)->id,
					'fname' => $result->row(0)->fname,
					'lname' => $result->row(0)->lname,
					'email' => $result->row(0)->email,
					);
				
				$this->session->set_userdata( 'logininfo',$data );

				return TRUE;
			}
			else
			{
				return FALSE;
			}
		}

		public function user_logged_in()
		{
			if ( $this->session->userdata( 'logininfo') != '' ) 
			{
				return true;
			}			
		}


		public function getuser_data( $id = NULL )
		{
			$data = array(
				'id' => $id
				);
			$query = $this->db->get_where( 'users',$data );

			if ( $query->num_rows() == 1 ) 
			{
				return $query->result();
			}
			else
			{
				return FALSE;
			}
		}


		public function modifyuser( $id = NULL )
		{
			$fname    = $this->input->post( 'fname' );
			$lname    = $this->input->post( 'lname' );
			$email    = $this->input->post( 'email' );
			$mobile   = $this->input->post( 'mobile' );
			$postcode = $this->input->post( 'postcode' );

			$data = array(
				 	'fname' => $fname,
				 	'lname' => $lname,
				 	'email' => $email,
				 	'mobile' => $mobile,
				 	'postcode' => $postcode
				);

			$data = $this->security->xss_clean( $data );
			$this->db->where( 'id', $id );
			$updateuser = $this->db->update( 'users', $data );
			if ( $updateuser ) 
			{
				return TRUE;
			}
			else
			{
				return FALSE;
			}
		}

	}