    <section class="cfo-area national-conference">
        <div class="container">
            <div class="row">
                <?php $this->load->view( 'myaccount_menu' ); ?>

            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="contact-details myaccount-contact">
                    <h2>Account access</h2>
                    <div class="account-table">
                    <?php 
                        if ( $user_data ) 
                        {
                          foreach ($user_data as $userdata ) 
                          {
                              
                          }
                        }

                     ?>
                        <table class="table table-striped">
                            <tbody> 
                                <tr> 
                                    <td class="commonname-td">
                                         Login Info
                                    </td>
                                    <td class="nameshow-td">
                                        <?php echo $userdata->email; ?>
                                    </td>
                                </tr>


                                <tr>                                  
                                    <td class="commonname-td">
                                        
                                    </td>
                                    <td class="nameshow-td">
                                        <a href="" data-toggle="modal" data-target="#modifypassword" >Modify my password</a>
                                    </td>
                                    
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="clearfix"></div>
                <!-- END OF CONTACT DETAILS SECTION -->

                <div class="contact-details myaccount-contact">
                    <h2>My Details <a href="<?php echo base_url();?>auth/modifyaddress">Modify address</a></h2>
                    <?php 
                     $sucess = $this->session->flashdata( 'success' );
                     if ( isset( $sucess )) 
                     {
                       echo "<p class='text-center'>".$sucess."</p>";
                     }
                    ?>
                    <div class="row">
                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                            <div class="address-form">                            

                                <div class="form-group">
                                    <p><?php echo $userdata->fname ." ". $userdata->lname; ?></p>
                                    <p><?php echo $userdata->mobile; ?></p>
                                    <p><?php echo $userdata->email; ?></p>
                                    <p>Flat 2, Kinross House Bemerton Estate</p>
                                    <p>London N1 0AA</p>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                </div>

                <!-- END OF DELIVERY ADDRESS SECTION -->

              </div>
            </div>
        </div>
    </section>