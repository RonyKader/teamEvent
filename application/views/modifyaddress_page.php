
    <section class="cfo-area national-conference">
        <div class="container">
            <div class="row">

            <?php $this->load->view( 'myaccount_menu' ); ?>
            <?php 
                if ( $user_data ) 
                {
                  foreach ($user_data as $userdata ) 
                  {
                    ?>
                      
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <div class="contact-details myaccount-contact">
                            <h2>Account access</h2>
                            <div class="account-table">                    
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
                            <h2>My Details</h2>
                            <?php 
                             $fail = $this->session->flashdata( 'fail' );
                             if ( isset( $fail )) 
                             {
                               echo $fail;
                             }
                            ?>

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="address-form">                            
                                        <div class="row">
                                        <?php

                                            $data = array(
                                                'name' => 'modifyuser',
                                                'id'   => 'modifyuser' 
                                                );
                                            echo form_open( 'auth/modifyuser/'.$userdata->id, $data );

                                         ?>
                                            <form action="#">
                                                <div class="form-group">
                                                    <div class="col-lg-offset-1 col-md-offset-1 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                        <label>First Name *</label>                                                
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                        <?php 
                                                            $data = array(
                                                                'type' => 'text',
                                                                'name' => 'fname',
                                                                'id'    => 'fname',
                                                                'class' => 'form-control',
                                                                'value' => $userdata->fname
                                                                );
                                                            echo form_input( $data );
                                                         ?>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                 <div class="col-lg-offset-1 col-md-offset-1 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                    <label>Last Name *</label>
                                                 </div>   
                                                 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                 <?php 
                                                     $data = array(
                                                         'type' => 'text',
                                                         'name' => 'lname',
                                                         'id'    => 'lname',
                                                         'class' => 'form-control',
                                                         'value' => $userdata->lname
                                                         );
                                                     echo form_input( $data );
                                                  ?>
                                                 </div>   
                                                </div>

                                                <div class="form-group">
                                                  <div class="col-lg-offset-1 col-md-offset-1 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                    <label>Email Address *</label>
                                                  </div>
                                                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">  
                                                    <?php 
                                                        $data = array(
                                                            'type' => 'email',
                                                            'name' => 'email',
                                                            'id'    => 'email',
                                                            'class' => 'form-control',
                                                            'value' => $userdata->email
                                                            );
                                                        echo form_input( $data );
                                                     ?>
                                                  </div>  
                                                </div>
                                                <div class="form-group">
                                                 <div class="col-lg-offset-1 col-md-offset-1 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                    <label>Mobile No *</label>
                                                 </div>  
                                                 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">   
                                                    <?php 
                                                        $data = array(
                                                            'type' => 'text',
                                                            'name' => 'mobile',
                                                            'id'    => 'mobile',
                                                            'class' => 'form-control',
                                                            'value' => $userdata->mobile
                                                            );
                                                        echo form_input( $data );
                                                     ?>
                                                 </div>   
                                                </div>                                     


                                                <div class="form-group">
                                                 <div class="col-lg-offset-1 col-md-offset-1 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                    <label>Date of birth</label>
                                                 </div>  
                                                  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">  
                                                    <input type="text" name="yyy" class="form-control" id="yyy" placeholder="Telephone No">
                                                  </div>  
                                                  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">  
                                                    <input type="text" name="u" class="form-control" id="u" placeholder="Telephone No">
                                                  </div> 

                                                </div>

                                                <div class="form-group">
                                                 <div class="col-lg-offset-1 col-md-offset-1 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                    <label>Post code</label>
                                                 </div>  
                                                 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">   
                                                    <?php 
                                                        $data = array(
                                                            'type' => 'text',
                                                            'name' => 'postcode',
                                                            'id'    => 'postcode',
                                                            'class' => 'form-control',
                                                            'value' => $userdata->postcode
                                                            );
                                                        echo form_input( $data );
                                                     ?>
                                                 </div>   
                                                </div>
                                               
                                                

                                                <div class="form-group">
                                                <div class="col-lg-offset-1 col-md-offset-1 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                    <label></label>
                                                  </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                        <button type="submit" id="kkk" name="kkk" class="btn btn-primary btn-block custom-checkout">Save Information</button>
                                                    </div>
                                                </div>
                    
                                            <?php echo form_close(); ?>
                                            </div>
                                        
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- END OF DELIVERY ADDRESS SECTION -->

                <?php }
                }

             ?>            

                </div>
            </div>
        </div>
    </section>