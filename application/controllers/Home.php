<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['home_page'] = 'home_page';
		$this->load->view( 'layouts/main',$data );
	}

	public function buytickets()
	{
		$data['buytickets'] = 'buytickets';
		$this->load->view( 'layouts/main', $data );
	}

	public function titckets_summary()
	{
		$data['titckets_summary'] = 'summary_page';
		$this->load->view( 'layouts/main', $data );
	}


	public function IndividualData()
	{
		$this->load->model( 'booking' );
		$booking_result = $this->booking->booking_process();
		if ( $booking_result ) 
		{
			redirect( 'home/titckets_summary' );
		}
		else
		{
			redirect( 'home/buytickets' );
		}

	}


}
