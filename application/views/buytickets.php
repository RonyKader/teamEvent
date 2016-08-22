<!-- start national-conference section  -->
	<section id="buytickets" class="national-conference">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					            <div class="login-details">
					              <?php 
					              	$Reg_msg = $this->session->flashdata( 'success' );
					              	if ( isset( $Reg_msg )) 
					              	{
					              		echo $Reg_msg;
					              	}
					               ?>
					                <h2>Buy your tickets</h2>
					                <!-- Modal -->
					                <div class="">
					                  <div class="cfomodal page-modal">
					                    <div class="modal-content">
					                      <div class="modal-header">                           
					                        <div class="clearfix"></div>
					                            <ul class="nav nav-tabs custom-modaltitle">
					                              <li><a data-toggle="tab" href="#signuppage">Book a Table</a></li>
					                              <li class="active"><a data-toggle="tab" href="#loginpage">Book a chair</a></li>
					                            </ul>
					                      </div>
					                      <div class="modal-body">					                            

					                            <div class="tab-content">
					                              <div id="signuppage" class="tab-pane fade">                
					                                <form action="<?php echo base_url();?>home/titckets_summary" class="form-group">
				                                    <div class="form-group col-md-12">													
														
														<div class="book-wrapper clearfix col-lg-6 col-md-6">
														<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
														<input type="text" class="form-control" name="fname" placeholder="Firstname">
														</div>
														<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
														<input type="text" class="form-control" name="lname" placeholder="Lastname">
														</div>
														<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-12">
														<input type="text" class="form-control" name="mobile" placeholder="880">
														</div>
														<div class="form-group col-lg-9 col-md-9 col-sm-6 col-xs-12">
														<input type="text" class="form-control" name="mobile" placeholder="78087852">
														</div>
														<div class="form-group col-lg-12 col-md-12 col-sm-6 col-xs-12">
														<input type="date" class="form-control" name="date" placeholder="Date of birth">
														</div>
														</div>


														<div class="book-wrapper clearfix col-lg-6 col-md-6">
														<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
														<input type="text" class="form-control" name="fname" placeholder="Firstname">
														</div>
														<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
														<input type="text" class="form-control" name="lname" placeholder="Lastname">
														</div>
														<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-12">
														<input type="text" class="form-control" name="mobile" placeholder="880">
														</div>
														<div class="form-group col-lg-9 col-md-9 col-sm-6 col-xs-12">
														<input type="text" class="form-control" name="mobile" placeholder="78087852">
														</div>
														<div class="form-group col-lg-12 col-md-12 col-sm-6 col-xs-12">
														<input type="date" class="form-control" name="date" placeholder="Date of birth">
														</div>
														</div>


														<div class="book-wrapper clearfix col-lg-6 col-md-6">
														<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
														<input type="text" class="form-control" name="fname" placeholder="Firstname">
														</div>
														<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
														<input type="text" class="form-control" name="lname" placeholder="Lastname">
														</div>
														<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-12">
														<input type="text" class="form-control" name="mobile" placeholder="880">
														</div>
														<div class="form-group col-lg-9 col-md-9 col-sm-6 col-xs-12">
														<input type="text" class="form-control" name="mobile" placeholder="78087852">
														</div><div class="form-group col-lg-12 col-md-12 col-sm-6 col-xs-12">
														<input type="date" class="form-control" name="date" placeholder="Date of birth">
														</div>
														</div>


														<div class="book-wrapper clearfix col-lg-6 col-md-6">
														<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
														<input type="text" class="form-control" name="fname" placeholder="Firstname">
														</div><div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
														<input type="text" class="form-control" name="lname" placeholder="Lastname">
														</div>
														<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-12">
														<input type="text" class="form-control" name="mobile" placeholder="880">
														</div>
														<div class="form-group col-lg-9 col-md-9 col-sm-6 col-xs-12">
														<input type="text" class="form-control" name="mobile" placeholder="78087852">
														</div>
														<div class="form-group col-lg-12 col-md-12 col-sm-6 col-xs-12">
														<input type="date" class="form-control" name="date" placeholder="Date of birth">
														</div>
														</div>

														<div class="book-wrapper clearfix col-lg-6 col-md-6">
														<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
														<input type="text" class="form-control" name="fname" placeholder="Firstname">
														</div>
														<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
														<input type="text" class="form-control" name="lname" placeholder="Lastname">
														</div>
														<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-12">
														<input type="text" class="form-control" name="mobile" placeholder="880">
														</div>
														<div class="form-group col-lg-9 col-md-9 col-sm-6 col-xs-12">
														<input type="text" class="form-control" name="mobile" placeholder="78087852">
														</div>
														<div class="form-group col-lg-12 col-md-12 col-sm-6 col-xs-12">
														<input type="date" class="form-control" name="date" placeholder="Date of birth">
														</div>
														</div>

														<div class="book-wrapper clearfix col-lg-6 col-md-6">
														<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
														<input type="text" class="form-control" name="fname" placeholder="Firstname">
														</div>
														<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
														<input type="text" class="form-control" name="lname" placeholder="Lastname">
														</div>
														<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-12">
														<input type="text" class="form-control" name="mobile" placeholder="880">
														</div>
														<div class="form-group col-lg-9 col-md-9 col-sm-6 col-xs-12">
														<input type="text" class="form-control" name="mobile" placeholder="78087852">
														</div>
														<div class="form-group col-lg-12 col-md-12 col-sm-6 col-xs-12">
														<input type="date" class="form-control" name="date" placeholder="Date of birth">
														</div>
														</div>

														<div class="book-wrapper clearfix col-lg-6 col-md-6">
														<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
														<input type="text" class="form-control" name="fname" placeholder="Firstname">
														</div>
														<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
														<input type="text" class="form-control" name="lname" placeholder="Lastname">
														</div>
														<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-12">
														<input type="text" class="form-control" name="mobile" placeholder="880">
														</div>
														<div class="form-group col-lg-9 col-md-9 col-sm-6 col-xs-12">
														<input type="text" class="form-control" name="mobile" placeholder="78087852">
														</div>
														<div class="form-group col-lg-12 col-md-12 col-sm-6 col-xs-12">
														<input type="date" class="form-control" name="date" placeholder="Date of birth">
														</div>
														</div>

														<div class="book-wrapper clearfix col-lg-6 col-md-6">
														<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
														<input type="text" class="form-control" name="fname" placeholder="Firstname">
														</div>
														<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
														<input type="text" class="form-control" name="lname" placeholder="Lastname">
														</div>
														<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-12">
														<input type="text" class="form-control" name="mobile" placeholder="880">
														</div>
														<div class="form-group col-lg-9 col-md-9 col-sm-6 col-xs-12">
														<input type="text" class="form-control" name="mobile" placeholder="78087852">
														</div>
														<div class="form-group col-lg-12 col-md-12 col-sm-6 col-xs-12">
														<input type="date" class="form-control" name="date" placeholder="Date of birth">
														</div>
														</div>

														<div class="book-wrapper clearfix col-lg-6 col-md-6">
														<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
														<input type="text" class="form-control" name="fname" placeholder="Firstname">
														</div>
														<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
														<input type="text" class="form-control" name="lname" placeholder="Lastname">
														</div>
														<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-12">
														<input type="text" class="form-control" name="mobile" placeholder="880">
														</div>
														<div class="form-group col-lg-9 col-md-9 col-sm-6 col-xs-12">
														<input type="text" class="form-control" name="mobile" placeholder="78087852">
														</div>
														<div class="form-group col-lg-12 col-md-12 col-sm-6 col-xs-12">
														<input type="date" class="form-control" name="date" placeholder="Date of birth">
														</div>
														</div>

														<div class="book-wrapper clearfix col-lg-6 col-md-6">
														<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
														<input type="text" class="form-control" name="fname" placeholder="Firstname">
														</div>
														<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
														<input type="text" class="form-control" name="lname" placeholder="Lastname">
														</div>
														<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-12">
														<input type="text" class="form-control" name="mobile" placeholder="880">
														</div>
														<div class="form-group col-lg-9 col-md-9 col-sm-6 col-xs-12">
														<input type="text" class="form-control" name="mobile" placeholder="78087852">
														</div>
														<div class="form-group col-lg-12 col-md-12 col-sm-6 col-xs-12">
														<input type="date" class="form-control" name="date" placeholder="Date of birth">
														</div>
														</div>
																									
													<!-- Email -->

				                                    </div>

				                                    <div class="form-group col-md-12">
				                                        <button type="sumbit" name="submit" class="btn btn-primary btn-block custom-checkout">Booking your chair</button>
				                                    </div>
				                                    <div class="clearfix"></div>
				                                </form>
					                              </div>

					                              <div id="loginpage" class="tab-pane fade in active">
													<?php 
														$data = array(
															'name' => 'individual',
															'class' => 'form-group'
															);
														echo form_open('home/IndividualData', $data );

													 ?>
					                                <form action="<?php echo base_url();?>home/titckets_summary" class="form-group">
					                                    <div class="form-group col-md-12">
					                                      <label>Enter your chair number</label>
															<?php 
																$data = array(
																	'type' => 'text',
																	'name' => 'qnty',
																	'id'  => 'qnty',
																	'class' => 'form-control',
																	'onkeyup' => 'populateForm()',
																	'onkeypress' => 'return onlyNumbers(event);'

																	);
																echo form_input( $data );

															 ?>
 															<!-- <input type="text" class="form-control" name="qnty" id="qnty" onkeyup="populateForm()" onkeypress="return onlyNumbers(event);" value=""><br/> -->
															<span id="fileInput"></span>												
														<!-- Email -->

					                                    </div>

					                                    <div class="form-group col-md-12">
					                                        <button type="sumbit" name="submit" class="btn btn-primary btn-block custom-checkout">Booking your chair</button>
					                                    </div>
					                                    <div class="clearfix"></div>
					                                <?php echo form_close(); ?>
					                                
					                                <script type="text/javascript">

					                                function onlyNumbers(e)
					                                {

					                                	if(e.charCode > 49 && e.charCode < 58 )
					                                	{
					                                		return true;
					                                	}
					                                	else
					                                	{
					                                		return false;
					                                	}
					                                }	

					                                function populateForm()
					                                {
					                                	var qnty = document.getElementById('qnty').value;	
					                                	var myFormElements = '';
					                                	for(x = 1; x <= qnty; x++)
					                                	{
					                                		myFormElements += '<div class="book-wrapper clearfix col-lg-6 col-md-6">';
					                     					myFormElements += '<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12"><input type="text" class="form-control" name="fname[]" placeholder="Firstname"></div>';

					                     					myFormElements += '<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12"><input type="text" class="form-control" name="lname[]" placeholder="Lastname"></div>';

					                     					myFormElements += '<div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-12"><input type="text" class="form-control" name="mobile[]" placeholder="880"></div>';

					                     					myFormElements += '<div class="form-group col-lg-9 col-md-9 col-sm-6 col-xs-12"><input type="text" class="form-control" name="mobile[]" placeholder="78087852"></div>';


					                     					myFormElements += '<div class="form-group col-lg-12 col-md-12 col-sm-6 col-xs-12"><input type="date" class="form-control" name="date[]" placeholder="Date of birth"></div>';
					                     					myFormElements += '</div>';
					                     
					                                	}

					                                	document.getElementById('fileInput').innerHTML = myFormElements;
					                                }

					                                </script>

					                              </div>
					                            </div>

					                      </div>

					                    </div>
					                  </div>
					                </div>
					            </div>
					            <!-- END OF CONTACT DETAILS SECTION -->
					          </div>
					         <!-- End of CFO order list -->    

								<?php if ( isset( $_POST['subname'] ) ): ?>
									<?php $numbers = $_POST['numbers'] ?>
									<?php for ($i=0; $i < $numbers; $i++) { 
									echo "Hello Bangladesh". $i."<br/>"; 
										
									} ?>

								<?php endif ?>
					         <div class="clearfix"></div>  
					         <div class="col-lg-6 col-md-6">
					         	<form action="" method="post">
					         		<input type="text" name="numbers" id="numbers">
					         		<input type="submit" value="submit" name="subname">
					         	</form>
					         </div>
				
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section>
	<!-- end national-conference section  -->

