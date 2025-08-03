<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Food Processing Incentive Login</title>
      <!-- base:css -->
      <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/typicons/typicons.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/css/vendor.bundle.base.css">
      <link rel="stylesheet" href="<?php echo base_url();?>assets/css/vertical-layout-light/style.css">
      <!-- endinject -->
      <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.png" />
   </head>
   <body>
      <section class="accountbg">
         <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-12 align-self-center">
                    <div class="row">
                        <div class="col-xl-6 col-lg-5 mx-auto">
                           <!-- <img src="images/1.png" alt="img" class="img"> -->
                           <div class="card">
                              <div class="card-body p-0 auth-header-box">
                                 <div class="text-center p-3">
                                    <a href="#" class="logo logo-admin">
                                       <img src="<?php echo base_url();?>assets/images/logo.png"  alt="logo" class="auth-logo">
                                    </a>
                                    <h4 class="mt-3 mb-1 fw-semibold text-white font-18">Let's Get Started</h4>   
                                    <p class="text-muted mb-0">Sign in to continue to Food Processing Incentive Scheme</p>  
                                 </div>
                              </div>
                              <div class="card-body p-0">
                                 <ul class="nav-border nav nav-pills" role="tablist">
                                    <li class="nav-item">
                                       <a class="nav-link active fw-semibold" data-bs-toggle="tab" href="#LogIn_Tab" role="tab">Log In</a>
                                    </li>
                                 </ul>
								  
                                 <form class="form-horizontal auth-form"  method="POST">
									 <?php if(isset($error)) :?>
                  
									<div id="alert_msg" style="color:red; margin:0 0 10px 0px;">
									   <?php 
										  echo $error;
									   ?>
									</div>

								 <?php endif; ?>
                                    <div class="form-group mb-2">
                                       <label class="form-label" for="username">User Id</label>
                                       <div class="input-group">                             
                                          <input type="text" class="form-control" name="user_name" id="user_name" placeholder="Enter username">
                                          
                                       </div>
										<small class="text-error user_name d-block"></small>
                                    </div>              
                                    <div class="form-group mb-4">
                                       <label class="form-label" for="userpassword">Password</label>
                                       <div class="input-group">                                  
                                          <input type="password" class="form-control" name="user_pass" id="user_pass" placeholder="Enter password">
                                          
                                       </div>
										<small class="text-error user_pass d-block"></small>
                                    </div>             
                                    <div class="form-group mb-0 row">
                                       <div class="col-lg-12">
                                           
                                          <button class="btn btn-primary w-100 waves-effect waves-light" type="submit" id="btn_login">Log In 
                                             <i class="fas fa-sign-in-alt ms-1"></i>
                                          </button>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                                 <div class="get_success_total" align="left" style="background-color: #174b10;color: #fff;max-width: 500px;margin: 0 auto;padding: 10px 20px;display: none;"></div>
                                 <div class="copyright text-center">
                                 <span class="text-center ">© 2022 Food Processing Incentive Scheme</span>
                              </div>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>

      <!-- <footer >
         <div class=" justify-content-center justify-content-sm-between">
            <span class="text-center ">Copyright © 2022 </a>. All rights reserved.</span>
         </div>
      </footer> -->
      <script src="<?php echo base_url();?>assets/vendors/js/vendor.bundle.base.js"></script>
      <script>
      $('#btn_login').on('click',function(){
      //alert('Working');
    
    
       var user_name = $('#user_name').val();
       var user_pass = $('#user_pass').val().trim();
       var error_flag = false;
      if(user_name=='')
      {
        $('.user_name').show().html('Enter username.');
        $('#user_name').focus();
        setTimeout(function(){$('.user_name').hide().html('');},3000);
        return false;
      }
      
      if(user_pass=='')
      {
        $('.user_pass').show().html('Enter your password.');
        $('#user_pass').focus();
        setTimeout(function(){$('.user_pass').hide().html('');},3000);
        return false;
      }

   });
      </script>
   </body>
</html>