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

<?php if ( isset( $myaccount )): ?>
    <?php $this->load->view( $myaccount ); ?>
<?php endif ?>

<?php if ( isset( $modifyaddress )): ?>
    <?php $this->load->view( $modifyaddress ); ?>
<?php endif ?>
<?php if ( isset( $titckets_summary )): ?>
    <?php $this->load->view( $titckets_summary ); ?>
<?php endif ?>

<?php $this->load->view( 'layouts/footer' ); ?>