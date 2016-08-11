<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_auth extends CI_Controller {

	public function index()
	{
		$this->load->view('login_form');
	}

	public function dashboard()
	{
		$data['dashboard'] = 'dashboard_page';
		$this->load->view( 'layouts/main', $data );
	}

	public function admin_login()
	{
		$this->form_validation->set_rules( 'email', 'Email', 'trim|required');
		$this->form_validation->set_rules( 'password', 'Password', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			redirect( 'auth?Please Try with valid access' );
		} else 
		{
			$this->load->model( 'auth_model' );
			$result = $this->auth_model->admin_login();

			if ( $result ) 
			{
				redirect( 'admin_auth/dashboard' );
			}else
			{
				$this->session->set_flashdata( 'errorinfo', 'Please Try with valid email and password' );
				redirect(base_url());
			}
		}
	}


	public function userlist()
	{
		$this->load->model( 'auth_model' );
		$data['userlistData'] = $this->auth_model->userlist();
		$data['userlist'] = 'userlist_page';
		$this->load->view( 'layouts/main', $data );	
	}


	public function logout()
	{		
		$this->session->unset_userdata('logininfo');
		$this->session->sess_destroy();
		redirect( base_url() );		
	}


	public function edituser_box( $id = NULL )
	{
		$this->load->model( 'auth_model' );
		$data['user_data'] = $this->auth_model->edit_user( $id );
		$data['edituser_page'] = 'edituser_page';
		$this->load->view( 'layouts/main',$data );
	}


	public function update_user( $id = NULL )
	{
		$this->load->model( 'auth_model' );
		$updateuser_info = $this->auth_model->update_user( $id );
		if ( $updateuser_info ) 
		{
			redirect( 'admin_auth/userlist' );
		}
		else
		{
			redirect( 'edituser_box' );
		}
	}


	public function delete_user( $id = NULL )
	{
		$this->load->model( 'auth_model' );
		$delete_user = $this->auth_model->delete_user( $id );

		if ( $delete_user ) 
		{
			redirect( 'admin_auth/userlist' );
		}
		else
		{
			redirect('admin_auth/userlist' );
		}
	}
	

	public function check_session()
	{
		print_r( $_SESSION );
	}

}
