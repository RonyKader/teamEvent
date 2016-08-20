<?php defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Booking extends CI_Model 
	{
		public function booking_process()
		{
			$fname = $this->input->post( 'fname' );
			$lname = $this->input->post( 'lname' );
			$mobile = $this->input->post( 'mobile' );
			$booking_date = $this->input->post( 'booking_date' );

			$count = count( $fname );

			$data = array();
			for ($i=0; $i < $count; $i++) { 
				$data[$i] = array(
				        'fname' => $fname[$i],
				        'lname' => $lname[$i],
				        'mobile'=> $mobile[$i],
				        'booking_date'=> $booking_date[$i]
				);				
			}
			$result = $this->db->insert_batch( 'booking_store', $data );

			if ( $result ) 
			{
				return TRUE;
			}
			else
			{
				return FALSE;
			}
		}
	}