<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{

	public function registration()
	{
		$data['registration_form'] = 'registration_form';
		$this->load->view( 'layouts/main', $data );
	}

	public function create_users()
	{
		$this->form_validation->set_rules( 'fname', 'First name', 'trim|required|max_length[15]',
			array(
				'required' => '%s can not be empty',
				'max_length' => 'Max length of %s will be 15 characters'
				)
		 );
		$this->form_validation->set_rules( 'lname', 'Last name', 'trim|required|max_length[15]',
			array(
				'required' => '%s can not be empty',
				'max_length' => 'Max length of %s will be 15 characters'
				)
		 );
		$this->form_validation->set_rules( 'email', 'Email', 'trim|required|min_length[7]|max_length[32]|is_unique[users.email]',
			array(
				'required' => '%s can not be empty',
				'max_length' => 'Max length of %s will be 32 characters',
				'is_unique' => 'This %s already exists'
				)
		 );
		$this->form_validation->set_rules( 'mobile', 'Mobile', 'trim|required|min_length[11]|max_length[11]',
			array(
				'required' => '%s can not be empty',
				'min_length' => 'Min length of %s will be 11 characters',
				'max_length' => 'Max length of %s will be 11 characters'
				)
		 );
		$this->form_validation->set_rules( 'postcode', 'Postcode', 'trim|required|min_length[3]|max_length[12]',
			array(
				'required' => '%s can not be empty',
				'max_length' => 'Max length of %s will be 12 characters'
				)
		 );
		$this->form_validation->set_rules( 'password', 'Password', 'trim|required|min_length[6]|max_length[18]',
			array(
				'required' => '%s can not be empty',
				'min_length' => 'Min length of %s will be 6 characters',
				'max_length' => 'Max length of %s will be 18 characters'
				)
		 );

		if ( $this->form_validation->run() == FALSE ) 
		{
			$data['registration_form'] = 'registration_form';
			$this->load->view( 'layouts/main',$data );
		} 
		else 
		{		
			$this->load->model('auth_model');
			$result = $this->auth_model->create_user();

			if ( $result ) 
			{
				redirect( 'home/buytickets' );
			}else
			{
				redirect( 'auth/registration' );
			}
		}
	}

	public function check_login()
	{ 

		$this->form_validation->set_rules( 'email', 'Email', 'trim|required');
		$this->form_validation->set_rules( 'password', 'Password', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			redirect( 'auth?Please Try with valid access' );
		} else 
		{
			$this->load->model( 'auth_model' );
			$result = $this->auth_model->check_login();

			if ( $result ) 
			{
				redirect( 'auth/myaccount' );
			}else
			{
				$this->session->set_flashdata( 'errorinfo', 'Please Try with valid email and password' );
				redirect(base_url());
			}
		}
	}


	public function logout()
	{		
		$this->session->unset_userdata('logininfo');
		$this->session->sess_destroy();
		redirect( base_url() );		
	}
	

	public function myaccount()
	{
		$data['myaccount'] = 'myaccount_page.php';
		$this->load->view( 'layouts/main', $data );
	}

	public function modifyaddress()
	{
		$data['modifyaddress'] = 'modifyaddress_page.php';
		$this->load->view( 'layouts/main', $data );
	}




	public function check_session()
	{
		print_r( $_SESSION );
	}

}