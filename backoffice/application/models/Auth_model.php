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
			$data = $this->security->xss_clean( $data );
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


		public function edit_user( $id = NULL )
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

		public function update_user( $id = NULL )
		{
			$firstname = $this->input->post( 'fname' );
			$lastname  = $this->input->post( 'lname' );
			$mobile	   = $this->input->post( 'mobile' );
			$email 	   = $this->input->post( 'email' );
			$postcode  = $this->input->post( 'postcode' );

			$data = array(
				'fname' => $firstname,
				'lname' => $lastname,
				'mobile'=> $mobile,
				'email' => $email,
				'postcode' => $postcode
				);

			$data = $this->security->xss_clean( $data );
			$this->db->where( 'id',$id );
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


		public function delete_user( $id = NULL )
		{
			$this->db->where( 'id', $id );
			$delete_user = $this->db->delete( 'users' );

			if ( $delete_user ) 
			{
				return TRUE;
			}
			else
			{
				return FALSE;
			}
		}
	}