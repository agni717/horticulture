<?php $this->load->view('common/header_hq.php'); ?>
  <style type="text/css">
     .text-error{color: #f05555;}
     .form-group.form-row { margin-bottom:10px; }
     .form-group.form-row .d-flex { align-items: end;height: 100%;justify-content: end; }
  </style>
    <div class=" page-body-wrapper">
    <div class="container-fluid">
      
      <div class="row">
          
            <div class="col-lg-1"></div>
            <div class="col-lg-10 grid-margin mt-5">
            
             <h4 class="card-title">Disctrict Admin Creation</h4>
              <div class="card">
                <div class="card-body">
                  <form id="addFrm" name="addFrm" method="POST">
                 
                 <!--  <form class="form-sample"> -->
                   <?php //echo form_open('superuser/create_user') ; ?>
                    <?php if(isset($error)) :?>
                    <div id="alert_msg" style="color:red; margin:0 0 10px 0px;"> 
                        <?php 
                           echo $error;
                        ?>

                  
                     <?php endif; ?>
                            <div class="row">
                              <div class="col-lg-12 text-center text-success msg_cont2" >
                                 <?php
                                 if(!empty($this->session->flashdata('msg')))
                                 {
                                 echo $this->session->flashdata('msg');
                                 }
                                 ?>
                              </div>
                           </div> 

					<input type="hidden" name="id" value="<?php if(isset($user->id)){echo $user->id;}?>">
                    <div class="form-group form-row">
                      <div class="col-md-3">
                        <label class="col-form-label">Dstrict Admin Name</label>
                        <input type="text" class="form-control" name="name" id="name" value="<?php if(isset($user->name)){echo $user->name;}?>" />
                        <small class="text-error name"><?php echo form_error('name');?></small>
                      </div>
                      <div class="col-md-3">
                        <label class="col-form-label">Mobile No </label>
                        <input type="text" class="form-control" name="phone" id="phone" value="<?php if(isset($user->phone)){echo $user->phone;}?>" maxlength="10" />
                        <small class="text-error phone"><?php echo form_error('phone');?></small>
                        
                      </div>
                      <div class="col-md-3">
                        <label class="col-form-label">Email Id</label>
                        <input type="text" class="form-control" name="email" id="email" value="<?php if(isset($user->email)){echo $user->email;}?>" />
                        <small class="text-error email"><?php echo form_error('email');?></small>
                      </div>
                      <div class="col-md-3">
                        <label class="col-form-label">District</label>
                        <select class="form-control" name="district" id="district" />
                          <option value=""><--Select  District--></option>
                              <?php foreach($district_data as $district){
							  	if(isset($user->district)){$dist=$user->district;}else{$dist='';}
							  ?>
							  
                              <option value="<?php echo $district->district_code;?>"<?php if($district->district_code==$dist){ echo 'selected'; } ?>><?php echo $district->district_name;?></option>
                              <?php } ?> 
                          
                        </select>
                        <small class="text-error district"><?php echo form_error('district');?></small>
                      </div> 
                    </div>
                    <hr />
                    <div class="form-group form-row">
                       
                      <div class="col-md-3">
                        <label class="col-form-label">District Login ID</label>
                        <input type="text" class="form-control" name="user_name" id="user_name" value="<?php if(isset($user->user_name)){echo $user->user_name;}?>" />
                        <small class="text-error user_name"><?php echo form_error('user_name');?></small>
                      </div>
                      <div class="col-md-3">
                        <label class="col-sm-4 col-form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password" />
                        <small class="text-error password"><?php echo form_error('password');?></small>
                      </div>
                      <div class="col-md-3">
                        <label class="col-form-label">Confirm Password</label>
                        <input type="password" class="form-control" name="confirm_password" id="confirm_password" />
                        <small class="text-error confirm_password"><?php echo form_error('confirm_password');?></small>
                      </div>
                    </div>
                    <hr />
                    <div class="form-group form-row">
                      
                      <div class="col-md-12 text-center">
                      <!-- <a class="btn btn-primary"  role="button">Submit</a> -->
                        <div class="">
                          <button type="submit" class="btn btn-primary" id="btn_submit">Submit</button>
                        </div>
                      </div>
                    </div>

                  </form>
                </div>
                <div class="col-lg-12 text-center mt-2">
                                    
                                       <div class="get_error_total" align="center" style="background-color: #bf0000;color: #fff;max-width: 500px;margin: 0 auto;padding: 10px 20px;display: none;">sdgdg</div>
                                       <div class="get_success_total" align="left" style="background-color: #174b10;color: #fff;max-width: 500px;margin: 0 auto;padding: 10px 20px;display: none;">ssddg</div>
                                 </div> 
              </div>
            </div>
            
           
          </div>
    </div>
  
    </div>
    
    <?php $this->load->view('common/footer.php'); ?> 

    <script type="text/javascript">

$(function(){
    
$('#alert_msg, .text-error').delay(8000).fadeOut();

$('.msg_cont2').delay(8000).fadeOut();
     
});

      
</script>
