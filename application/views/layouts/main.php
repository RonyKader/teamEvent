<?php $this->load->view( "layouts/header.php" ); ?>

<?php if ( isset( $home_page )): ?>
    <?php $this->load->view( $home_page ); ?>
<?php endif ?>

<?php if ( isset( $registration_form )): ?>
    <?php $this->load->view( $registration_form ); ?>
<?php endif ?>

<?php if ( isset( $buytickets )): ?>
    <?php $this->load->view( $buytickets ); ?>
<?php endif ?>

<?php $this->load->view( 'layouts/footer' ); ?>