
	<!-- start national-conference section  -->
	<section id="reg" class="national-conference">
		<div class="container">
			<div class="row">
				<div class="col-lg-offset-3 col-md-offset-3 col-lg-6 col-md-6 col-sm-12 col-xs-12">
					            <div class="login-details">
					                <h2>Login to your account</h2>
					                <!-- Modal -->
					                <div class="">
					                  <div class="cfomodal page-modal">
					                    <div class="modal-content">
					                      <div class="modal-header">                           
					                        <div class="clearfix"></div>
					                            <ul class="nav nav-tabs custom-modaltitle">
					                              <li class="active"><a data-toggle="tab" href="#signuppage">Sign up</a></li>
					                              <li><a data-toggle="tab" href="#loginpage">Log in</a></li>
					                            </ul>
					                      </div>
					                      <div class="modal-body">		                            
					                      <div class="alert-danger">
					                          <?php echo validation_errors(); ?>
					                      </div>
					                            <div class="tab-content">
					                              <div id="signuppage" class="tab-pane fade in active">   
					                              <?php 
					                                  $data = array(
					                                      'id' => 'signup',
					                                      'name' => 'signup',
					                                      'onsubmit' =>'return signupValidation()'
					                                      );
					                                  echo form_open( 'auth/create_users', $data );
					                               ?> 
					                                    <div class="form-group row">
					                                      <div class="col-sm-6 form-group">
					                                      <?php 
					                                          $data = array(
					                                              'type' => 'text',
					                                              'name' => 'fname',
					                                              'id' => 'fname',
					                                              'class' => 'form-control',
					                                              'placeholder' => 'First name'
					                                              );
					                                          echo form_input( $data );
					                                       ?>
					                                      </div>

					                                      <div class="col-sm-6 form-group">
					                                      <?php 
					                                          $data = array(
					                                              'type' => 'text',
					                                              'name' => 'lname',
					                                              'id' => 'lname',
					                                              'class' => 'form-control',
					                                              'placeholder' => 'Last name'
					                                              );
					                                          echo form_input( $data );
					                                       ?>
					                                      </div>

					                                      <div class="col-sm-3 form-group">
					                                      <?php 
					                                          $data = array(
					                                              'type' => 'text',
					                                              'class' => 'form-control',
					                                              'placeholder' => '880'
					                                              );
					                                          echo form_input( $data );
					                                       ?>
					                                      </div>


					                                      <div class="col-sm-9 form-group">
					                                      <?php 
					                                          $data = array(
					                                              'type' => 'text',
					                                              'name' => 'mobile',
					                                              'id' => 'phone',
					                                              'class' => 'form-control',
					                                              'placeholder' => '785496325'
					                                              );
					                                          echo form_input( $data );
					                                       ?>
					                                      </div>


					                                      <div class="col-sm-12 form-group">
					                                      <?php 
					                                          $data = array(
					                                              'type' => 'email',
					                                              'name' => 'email',
					                                              'id' => 'email',
					                                              'class' => 'form-control',
					                                              'placeholder' => 'Email address'
					                                              );
					                                          echo form_input( $data );
					                                       ?>
					                                      </div>


					                                      <div class="col-sm-12 form-group">
					                                      <?php 
					                                          $data = array(
					                                              'type' => 'text',
					                                              'name' => 'postcode',
					                                              'id' => 'postcode',
					                                              'class' => 'form-control',
					                                              'placeholder' => 'Postcode'
					                                              );
					                                          echo form_input( $data );
					                                       ?>
					                                      </div>


					                                      <div class="col-sm-6 form-group">
					                                      <?php 
					                                          $data = array(
					                                              'type' => 'password',
					                                              'name' => 'password',
					                                              'id' => 'password',
					                                              'class' => 'form-control',
					                                              'placeholder' => 'Password'
					                                              );
					                                          echo form_password( $data );
					                                       ?>
					                                      </div>

					                                      <div class="col-sm-6 form-group">
					                                      <?php 
					                                          $data = array(
					                                              'type' => 'password',
					                                              'name' => 're_password',
					                                              'id' => 're_password',
					                                              'class' => 'form-control',
					                                              'placeholder' => 'Password'
					                                              );
					                                          echo form_password( $data );
					                                       ?>
					                                      </div>


					                                      
					                                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">					                                      
					                                      <button type="sumbit" class="btn btn-primary custom-checkout btn-block"> Sign up bollychicks</button>

					                                      <!-- <input type="submit" class="btn btn-primary custom-checkout btn-block" value="Sign up"> -->

					                                      </div>
					                                    </div>
					                                <?php echo form_close(); ?>
					                              </div>

					                              <div id="loginpage" class="tab-pane fade">
					                              <?php 
					                                  $data = array(
					                                      'id' => 'login',
					                                      'class' => 'form-group',
					                                      'onsubmit' =>'return loginValidation()'
					                                      );
					                                  echo form_open( 'auth/check_login', $data );
					                               ?> 
					                              
				                                    <div class="form-group">
				                                      <label>Email address</label>
				                                        <?php 
				                                            $data = array(
				                                                'type' => 'text',
				                                                'name' => 'email',
				                                                'id' => 'loginemail',                                           
				                                                'class' => 'form-control',
				                                                'placeholder' => 'E-mail address'
				                                                );
				                                            echo form_input( $data );
				                                         ?>
				                                    </div>

				                                    <div class="form-group">
				                                      <label>Password</label>
				                                      <?php 
				                                          $data = array(
				                                              'type' => 'password',
				                                              'name' => 'password',
				                                              'id' => 'loginpassword',                                           
				                                              'class' => 'form-control',
				                                              'placeholder' => 'Password'
				                                              );
				                                          echo form_password( $data );
				                                       ?>
				                                    </div>

					                                    <div class="form-group">
					                                        <button type="sumbit" class="btn btn-primary btn-block custom-checkout">Log in with bollychicks</button>
					                                    </div>
					                                <?php echo form_close(); ?>
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
				
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section>
	<!-- end national-conference section  -->


	<!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header error-modal">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Please see the error message</h4>
	      </div>
	      <div class="modal-body">
	        <p id="message"></p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	    </div>

	  </div>
	</div>

<script>

	function signupValidation()
	{
		var fname = document.getElementById('fname').value;
		fname = fname.replace(/[^A-Za-z']/gi, '');
		document.getElementById('fname').value = fname;
	    var lname = document.getElementById('lname').value;
		 lname = lname.replace(/[^A-Za-z']/gi, '');
		 document.getElementById('lname').value = lname;

	    var number = document.getElementById('phone').value;
		var firstPartMobileNumber = number.substr(0, 2);

	    var postcode = document.getElementById('postcode').value;


		 var email = document.getElementById('email').value;
		 var filter = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}/igm;
		 var password = document.getElementById('password').value;
		 var re_password = document.getElementById('re_password').value;
		// var agreebox = document.getElementById('terms').checked;



		if( fname.trim() == '' ){
			$('#message').html('Please provide your first name.');
			$('#myModal').modal('show');
			return false;
		 }else if( fname.replace(/[']/g, "") == '' ){
		 	$('#message').html('Please provide your first name properly.');
		 	$('#myModal').modal('show');
		 	return false;
		 }else if( lname.trim() == '' ){
		 	$('#message').html('Please provide your last name.');
		 	$('#myModal').modal('show');
		 	return false;
		 }else if( lname.replace(/[']/g, "") == '' ){
		 	$('#message').html('Please provide your last name properly.');
		 	$('#myModal').modal('show');
		 	return false;
		 }else if( number.trim() == '' ){
		 	$('#message').html('Please provide your mobile number.');
		 	$('#myModal').modal('show');
		 	return false;
		 }else if( number.length < 11 ){
		 	$('#message').html('Please provide Valid Mobile Number.');
		 	$('#myModal').modal('show');
		 	return false;
		 }else if( firstPartMobileNumber != "07" ){
		 	$('#message').html('Invalid mobile number.');
		 	$('#myModal').modal('show');
		 	return false;
		 }else if( email == '' ){
		 	$('#message').html('Please provide email address.');
		 	$('#myModal').modal('show');
		 	return false;
		 }else if( !filter.test(email) ){
		 	$('#message').html('Invalid email address.');
		 	$('#myModal').modal('show');
		 	return false;
		 }else if( postcode.trim() == '' ){
		 	$('#message').html('Please provied postcode');
		 	$('#myModal').modal('show');
		 	return false;
		 }else if( password.trim() == '' ){
		 	$('#message').html('Please provide password!');
		 	$('#myModal').modal('show');
		 	return false;
		 }else if( password.length < 6  || password.length > 16 ){
		 	$('#message').html('Length of password should be between 6 and 16 characters.');
		 	$('#myModal').modal('show');
		 	return false;
		 }else if( re_password == '' ){
		 	$('#message').html('Please re-type password.!');
		 	$('#myModal').modal('show');
		 	return false;
		 }else if( re_password.length < 6  || re_password.length > 16 ){
		 	$('#message').html('Length of Re password should be between 6 and 16 characters.');
		 	$('#myModal').modal('show');
		 	return false;
		 }else if( password != re_password ){
		 	$('#message').html('Both passwords are not same.');
		 	$('#myModal').modal('show');
		 	return false; 
		 }
		// }else if (agreebox == "") {                
		// 	$('#message').html('Read and accept our terms & condition.');
		// 	$('#myModal').modal('show');
		// 	return false;
		// }else{
			else
			{
				return true;
			}
	}


	function loginValidation(){
		var loginEmail = document.getElementById('loginemail').value;
		 var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

		var loginPassword = document.getElementById('loginpassword').value;

		if( loginEmail == '' )
		{
			$('#message').html('Please provide email address.');
			$('#myModal').modal('show');
			return false;
		}else if( !re.test(loginEmail) ){
		 	$('#message').html('Invalid email address.');
		 	$('#myModal').modal('show');
		 	return false;
		}else if( loginPassword == '' ){
		 	$('#message').html('Please provide password.');
		 	$('#myModal').modal('show');
		 	return false;
		}else{
			return true;
		}

	}


</script>