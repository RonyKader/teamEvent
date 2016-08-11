<?php 
$access = $this->session->userdata('logininfo');
if ( isset( $access )) 
{ ?>
	<?php $this->load->view( 'layouts/header' );?>
	<?php $this->load->view( 'layouts/sidebar' );?>
	<!--main content start-->
	<?php if ( isset( $dashboard ) ): ?>
		<?php $this->load->view( $dashboard); ?>
	<?php endif ?>

	<?php if ( isset( $userlist ) ): ?>
		<?php $this->load->view( $userlist); ?>
	<?php endif ?>

	<?php if ( isset( $edituser_page ) ): ?>
		<?php $this->load->view( $edituser_page ); ?>
	<?php endif ?>

	<?php $this->load->view( 'layouts/footer' );?>	


<?php } 
else
{
	redirect( site_url() );
}
?>
