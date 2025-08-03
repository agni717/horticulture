<?php $this->load->view('common/header_citizen_dashboard.php'); ?>  
<style>
   
.text-error {color:red;}
#login_btn {display: none; }
.btn {padding: 8px 14px;}
.otp_sec {display: none;}
</style> 

  
      <div class="page-body-wrapper">
                  <?php if(isset($error)) :?>
				        
				         <span style="color:red; margin:0 0 10px 20px;">
				            <?php 
					            echo $error;
				            ?>
						   </span>
						
						<?php endif;?>
        
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-4 grid-margin mt-5 mx-auto text-center">
                  <h4 class="card-title"> Department Of Horticulture Industries</h4>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-4 grid-margin mx-auto">
                  <div class="card">
                     <div class="card-body">
                        <div class="col-lg-12 text-center"><u><span style="font-size:22px;">Sign In Here</span></u></div>
                        <?php echo form_open_multipart('',array('id'=>"myForm")); ?>
                           <div class="form-group">
                              <div class="form-row mb-0">
                                 <div class="col-lg-12">
                                 <div class="row">
                                 <label class="col-lg-12 col-form-label p-0 text-left mt-3">Enter Your Phone No Here . :</label>
                                 <div class="col-lg-12 p-0">
                                    <input type="text" class="form-control" name="username" id="username" maxlength="10" autocomplete="off"  />
                                    <small class="text-error username"><?php echo form_error('username');?></small> 
                                 </div>
                              </div>
                                   
                                  <div class="row mt-3">
                                    <div class="col-lg-12">
                                       <div class="row mb-2">
                                           <label class="col-lg-7 col-form-label p-0 text-left">Enter Your Captcha Here:</label>
                                           <div class="col-lg-5 captcha-code p-0" id="image_captcha"><span id="capcha_pic"><?php echo $captcha['image']; ?></span>
                                              <a href="javascript:void(0);" class="captcha-refresh" onclick="reload_capcha_img();">
                                                <img src="<?php echo base_url().'uploads/refresh.png'; ?>"/>
                                              </a>
                                           </div>
                                       </div>
                                    </div>
                                
                                 <div class="col-lg-12 p-0">
                                    <input type="text" class="form-control" name="captcha" id="captcha" maxlength="6" autocomplete="off" />
                                    <small class="text-error captcha"><?php echo form_error('captcha');?></small>
                                 </div>
                               </div>
                              </div>
                                 <div class="col-sm-12 text-center mt-2">
                                    <div align="center">
                                       <div class="get_error_total" align="center" style="background-color: #bf0000;color: #fff;max-width: 500px;margin: 0 auto;padding: 10px 20px;display: none;">sdgdg</div>
                                       <div class="get_success_total" align="left" style="background-color: #174b10;color: #fff;max-width: 500px;margin: 0 auto;padding: 10px 20px;display: none;">ssddg</div>
                                      <div class="div_roller_total" align="center" style="display: none;"><img src="<?php echo base_url('assets/images/ajax_loader.gif'); ?>" style="max-width: 60px;" /></div>
                                    </div>
                                 </div> 
                               <div class="col-lg-12 p-0 text-right  mt-2">  
                                    <button type="button" name="submit" id="next_btn" class="btn btn-primary" onclick="login_validate();" >Submit
                                    </button>
                                 </div>
                               </div>
                               
                              </div>
                                  
                              </div>
                           </div>                          
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <?php $this->load->view('common/footer.php'); ?>

      <script>

$(function(){
		//history.go(1); // disable the browser's back button
		//var Backlen=history.length;   
		//history.go(-Backlen);   
		//window.location.href=page url
		
      $('#alert_msg, .text-error').delay(5000).fadeOut();
     
	});









function login_validate()
{
   $(".div_roller_total").fadeIn();
   $('#next_btn').prop('disabled', true);
   var username = $('#username').val().trim();
   var captcha = $('#captcha').val().trim();
   var onlynumerics = /^[0-9]+$/;
   var alphanumerics = /^[A-Za-z0-9]+$/;
   var e_error = 0;
	var error_message = '';
   
   if(username == ""){
      e_error = 1;
      $('.username').html('Phone No. is required.');
   }else{
      if(!username.match(onlynumerics)){
         e_error = 1;
         $('.username').html('Phone No. needs only 10 digit.');
      }else if(username.length != 10){
         e_error = 1;
         $('.username').html('Phone No. needs only 10 digit.');
      }else{
         $('.username').html('');
      }
   }
   if(captcha == ""){
      e_error = 1;
      $('.captcha').html('Capcha is required.');
   }else{
      if(!captcha.match(alphanumerics)){
         e_error = 1;
         $('.captcha').html('Capcha Format not Matched, check again.');
      }else{
         $('.captcha').html('');
      }
   }
   if(e_error == 1){
      $('.div_roller_total').fadeOut();
      if(error_message != ""){
         $('.get_error_total').html(error_message);
         $(".get_error_total").fadeIn();
      }
      $(".text-error").fadeIn();
      /*e_error = 0;
      error_message = '';*/
      $('#next_btn').prop('disabled', false);
      setTimeout(function(){ $('.text-error, .get_error_total').fadeOut(); }, 5000);
   }else{
         $.ajax({
				method:'POST',
				url:'<?php echo base_url()."main/get_otp_forlogin_candidates"; ?>',
				data:{captcha: captcha, username:username},
				dataType:'JSON',
				success:function(data){
					//alert(data.msg);
					if(data.msg == 1)
					{
						//console.log(data);
						$('.div_roller_total').fadeOut();
						$('.get_success_total').html('OTP send to Your Registered Mobile No.');
						//$('.get_success_total').html('OTP send to Your Registered Email-ID. OTP - ' + data.mobsms);
						$(".get_success_total").fadeIn();
						setTimeout(function(){ 
							$('.get_success_total').fadeOut();
							window.location.replace("<?php echo site_url('main/loginotp_page')?>");
						}, 3000);
						
					}else{
						$('.div_roller_total').fadeOut();
						$('.get_error_total').html(data.e_msg);
						$(".get_error_total").fadeIn();
						setTimeout(function(){ $('.get_error_total').fadeOut(); }, 3000);
						$('#next_btn').prop('disabled', false);
					}
					
				}
			});
   }
}


        
function reload_capcha_img(){
	//alert("hi");
	var location_select = '';
	$.ajax({
		method:'POST',
		url:'<?php echo base_url()."main/get_new_capcha_set"; ?>',
		data:{location_select: location_select},
		dataType:'JSON',
		success:function(data){
			//alert(data.msg);
			if(data.msg == 1)
			{
				//console.log(data);
				//alert(data.cap_set.word);
				//$('#plot_otherinfo').val('');
				//$('.otherplot_view').fadeOut(500);
				$('#capcha_pic').html(data.cap_set.image);
				
			}else{
				$('.captcha').html('Problem to Generate Captcha, Refresh the Page');
				//$('#plot_otherinfo').val('');
				$('.captcha').fadeOut(500);
			}
			
		}
	});
}     


</script>
      
 
	

	
