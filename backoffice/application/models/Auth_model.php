<?php defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Auth_model extends CI_Model 
	{
		public function admin_login()
		{	
			$email = $this->input->post( 'email' );
			$password = $this->input->post( 'password' );

			$data = array(
				'email' => $email,
				'password' => $password,
				'status' => 2
				);
			$result = $this->db->get_where( 'admin', $data );

			if ( $result->num_rows() == 1 ) 
			{
				$data = array(
					'id' => $result->row(0)->id,					
					'username' => $result->row(0)->username,
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

		public function userlist()
		{
			$query = $this->db->get( 'users' );
			return $query->result();
		}
	}