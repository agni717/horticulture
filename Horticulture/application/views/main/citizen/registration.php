<?php $this->load->view('common/header_citizen.php'); ?>  
<style type="text/css">
   .text-error{color: #f05555;}
</style>

      <div class="page-body-wrapper">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-10 grid-margin mt-3 mx-auto">
                  <h4 class="card-title">Registration</h4>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-10 grid-margin mx-auto">
                  <div class="card">
                     
                  <div class="card-body">                        
                         <?php if(isset($error)) :?>				         -->
                        <div id="alert_msg" style="color:red; margin:0 0 10px 0px;">
                            <?php 
                              echo $error;
                           ?> 
                        </div>
                        <?php endif; ?>
                           
                     <?php echo form_open_multipart('');?>
                        
                        <fieldset>
                           <legend>Personal Information</legend>
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
                           <div class="form-group">
                              <div class="form-row">                                 
                                 <div class="col-lg-3">
                                    <label class="col-form-label">First Name<sup>*</sup>:</label>
                                    <input type="text" class="form-control" name="first_name" id="first_name" value="" placeholder=""   />
                                    <small class="text-error first_name"><?php echo form_error('first_name');?></small>
                                 </div>
                                 <div class="col-lg-3">
                                    <label class="col-form-label">Middle Name:</label>
                                    <input type="text" class="form-control" name="middle_name" id="middle_name">
                                    <small class="text-error middle_name"><?php echo form_error('middle_name');?></small>
                                 </div>
                                 <div class="col-lg-3">
                                    <label class="col-form-label">Last Name<sup>*</sup>:</label>
                                    <input type="text" class="form-control" name="last_name" id="last_name">
                                    <small class="text-error last_name"><?php echo form_error('last_name');?></small>
                                 </div>
                                 <div class="col-lg-3">
                                    <label class="col-form-label">Gender<sup>*</sup>:</label>
                                    <select class="form-control js-example-basic-single" name="gender" id="gender">
                                       <option value="">--select--</option>
                                       <option value="male">Male</option>
                                       <option value="female">Female</option>
                                       <option value="other">Others</option>
                                    </select>
                                    <small class="text-error gender"><?php echo form_error('gender');?></small>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="form-row"> 
                                 <div class="col-lg-3">
                                    <label class="col-form-label">Father's / Husband's Name<sup>*</sup>:</label>
                                    <input type="text" class="form-control" name="parent_name" id="parent_name">
                                    <small class="text-error parent_name"><?php echo form_error('parent_name');?></small>
                                 </div>

                                 <div class="col-lg-3">
                                     <label class="col-form-label">Mobile No<sup>*</sup>:</label>
                                      <input type="text" class="form-control" placeholder="Mobile no." disabled name="mobile" id="mobile" value="<?php echo $user_details->u_mobile; ?>">
                                 </div>
                                 <div class="col-lg-3">
                                    <label class="col-form-label">Email Id<sup>*</sup>:</label>
                                    <input type="email" class="form-control" name="email" id="email" value="" placeholder="" />
                                    <small class="text-error email"><?php echo form_error('email');?></small>
                                 </div>
                                 <div class="col-lg-3">
                                    <label class="col-form-label">District<sup>*</sup>:</label>
                                    <select class="form-control js-example-basic-single" name="district_code" id="district_code" onchange="lfn_SetSubDivision(this.value);">
                                       <option value="">---Select---</option>
                                       <?php 
                                       foreach($district_data as $dist){ ?>
                                       <option value="<?php echo $dist->district_code; ?>"><?php echo $dist->district_name; ?></option>
                                       <?php } ?>                                       
                                    </select>
                                    <small class="text-error district_code"><?php echo form_error('district_code');?></small>
                                 </div> 
											<div class="col-lg-3">
                                    <label class="col-form-label">Sub-Division<sup>*</sup>:</label>
                                    <select class="form-control js-example-basic-single" name="Sub_Division" id="Sub_Division" onchange="lfn_SetBlock(this.value);">
                                       <option value="">---Select---</option>
                                       <!--<option value="1">kolkata</option>-->
                                    </select>
                                    <small class="text-error Sub_Division"><?php echo form_error('Sub_Division');?></small>
                                 </div>
                                 <div class="col-lg-3">
                                    <label class="col-form-label">Block/Municipality<sup>*</sup>:</label>
                                    <select class="form-control js-example-basic-single" name="block" id="block" onchange="lfn_SetPanchayat(this.value);">
                                       <option value="">---Select---</option>
                                    </select>
                                    <small class="text-error block"><?php echo form_error('block');?></small>
                                 </div> 
                                 <div class="col-lg-3">
                                    <label class="col-form-label">Gram Panchayat<sup>*</sup>:</label>
                                    <select class="form-control js-example-basic-single" name="gram_panchayat" id="gram_panchayat">
                                       <option value="">--select--</option>
                                       <!--<option>Panchayat 1</option>-->
                                    </select>
                                    <small class="text-error gram_panchayat"><?php echo form_error('gram_panchayat');?></small>
                                 </div>
                                 <div class="col-lg-3">
                                    <label class="col-form-label ">Village/Town<sup>*</sup>:</label>
                                    <input type="text" class="form-control" name="village" id="village">
                                    <small class="text-error village"><?php echo form_error('village');?></small>
                                 </div> 
                                 <div class="col-lg-3">
                                    <label class="col-form-label">Post Office<sup>*</sup>:</label>
                                    <input type="text" class="form-control" name="Post_office" id="Post_office" value=""  placeholder="" />
                                    <small class="text-error Post_office"><?php echo form_error('Post_office');?></small>
                                 </div>   

                                  <div class="col-lg-3">
                                    <label class="col-form-label">Pincode:</label>
                                    <input type="text" class="form-control" name="pincode" value=""  placeholder="Pincode" maxlength="6" id="pincode" />
                                    <small class="text-error pincode"><?php echo form_error('pincode');?></small>
                                 </div>  

                                  <div class="col-lg-3">
                                    <label class="col-form-label">Applicant's Photo<sup>*</sup>:</label>
                                    <div class="custom-file">
                                       <input type="file" class="custom-file-input" id="inputGroupFile01"  
                                        name="inputGroupFile01">
                                       <label class="custom-file-label" for="inputGroupFile01"></label>
                                    </div>
                                    <p><small class="mb-0">Max size 2Mb, Format needed .jpg or .png</small></p>
                                    <small class="text-error inputGroupFile01"></small>
                                 </div>      
                              </div>
                           </div>
                          
                           <div class="col-lg-12 text-center mt-2">
                                    
                              <div class="get_error_total" align="center" style="background-color: #bf0000;color: #fff;max-width: 500px;margin: 0 auto;padding: 10px 20px;display: none;">sdgdg</div>
                              <div class="get_success_total" align="left" style="background-color: #174b10;color: #fff;max-width: 500px;margin: 0 auto;padding: 10px 20px;display: none;">ssddg</div>
                              <div class="div_roller_total" align="center" style="display: none;"><img src="<?php echo base_url('assets/images/ajax_loader.gif'); ?>" style="max-width: 60px;" /></div>
                                    
                           </div>
                           <div class="form-group">
                              <div class="form-row">                                 
                                 
                                 <div class="col-lg-12 text-right">
                                 <button type="button" name="submit" id="next_btn" class="btn btn-primary" onclick="reg_validate();" >Submit</button>   
                                 <!--<input type="submit" class="btn btn-primary mb-2" value="Submit">-->
                                 </div>
                              </div>
                           </div>
                           <!--<div class="row" id="msg_cont">
                              <div class="col-lg-12 text-center text-success" style="display: none;"></div>
                           </div>
                           <?php //echo validation_errors(); ?>
                           <div class="row">
                              <div class="col-lg-12 text-center text-success msg_cont2" >
                                 
                              </div>
                           </div>-->
                        </fieldset>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php $this->load->view('/common/footer.php'); ?>

      

    
    


   <script type="text/javascript">

$(function(){
		//history.go(1); // disable the browser's back button
		//var Backlen=history.length;   
		//history.go(-Backlen);   
		//window.location.href=page url
		
      $('#alert_msg, .text-error').delay(8000).fadeOut();

      $('.msg_cont2').delay(8000).fadeOut();
     
	});


   function reg_validate(){
      $(".div_roller_total").fadeIn();
      $('#next_btn').prop('disabled', true);
      var e_error = 0;
      var error_message = '';

      var error_message = 'There have some errors plese check above, Try again.';
		var alphaletters_spaces = /^[A-Za-z ]+$/;
		var alphaletters = /^[A-Za-z]+$/;
		var alphanumerics_withspace = /^[A-Za-z0-9/() ]+$/;
		var alphanumerics_spaces = /^[A-Za-z0-9_,\- ]+$/;
		var alphanumerics_no = /^[A-Za-z0-9_/&(@%=<>)\[\]+;:.',\- ]+$/;
		var onlynumerics = /^[0-9]+$/;
		var onlynumerics_withdot = /^[0-9.]+$/;
		var specials_char = /[~`!#$%\^&*+=\[\]\\';./{}()|\\":<>\?]/g;
		var alphanumerics = /^[A-Za-z0-9]+$/;
		var emailpattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
		var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.JPG|\.JPEG|\.PNG)$/i;

      var first_name = $('#first_name').val().trim();
      var middle_name = $('#middle_name').val().trim();
      var last_name = $('#last_name').val().trim();
      var gender = $('#gender option:selected').val().trim();
      var parent_name = $('#parent_name').val().trim();
      var email = $('#email').val().trim();
      var district_code = $('#district_code option:selected').val().trim();
      var Sub_Division = $('#Sub_Division option:selected').val().trim();
      var block = $('#block option:selected').val().trim();
      var gram_panchayat = $('#gram_panchayat option:selected').val().trim();
      var village =  $('#village').val().trim();
      var Post_office =  $('#Post_office').val().trim();
      var pincode = $('#pincode').val().trim();
		var files = $('#inputGroupFile01')[0].files;

      
      if(first_name == ""){
			e_error = 1;
			$('.first_name').html('First Name is Required.');
		}else{
			if(!first_name.match(alphaletters_spaces)){
				e_error = 1;
				$('.first_name').html('First Name not use special carecters, Check again.');
			}else{
				$('.first_name').html('');
			}	
		}
      if(middle_name != ""){
			if(!middle_name.match(alphaletters_spaces)){
				e_error = 1;
				$('.middle_name').html('Middle Name not use special carecters, Check again.');
			}else{
				$('.middle_name').html('');
			}	
		}
      if(last_name == ""){
			e_error = 1;
			$('.last_name').html('Last Name is Required.');
		}else{
			if(!last_name.match(alphaletters_spaces)){
				e_error = 1;
				$('.last_name').html('Last Name not use special carecters, Check again.');
			}else{
				$('.last_name').html('');
			}	
		}
      if(parent_name == ""){
			e_error = 1;
			$('.parent_name').html('Father\'s / Husband\'s Name is Required.');
		}else{
			if(!parent_name.match(alphaletters_spaces)){
				e_error = 1;
				$('.parent_name').html('Father\'s / Husband\'s Name Name not use special carecters, Check again.');
			}else{
				$('.parent_name').html('');
			}	
		}
      if(gender == ""){
			e_error = 1;
			$('.gender').html('Gender is Required.');
		}else{
			if(!gender.match(alphaletters_spaces)){
				e_error = 1;
				$('.gender').html('First Name not use special carecters, Check again.');
			}else{
				$('.gender').html('');
			}	
		}
		if(email == ""){
			e_error = 1;
			$('.email').html('Email-ID is Required.');
		}else{
			if(!emailpattern.test(email)){
				e_error = 1;
				$('.email').html('Email-ID not proper format, Check again.');
			}else{
				$('.email').html('');
			}	
		}
      if(district_code == ""){
			e_error = 1;
			$('.district_code').html('District is Required.');
		}else{
			if(!district_code.match(onlynumerics)){
				e_error = 1;
				$('.district_code').html('District only use Numeric Values, Check again.');
			}else{
				$('.district_code').html('');
			}	
		}
      if(Sub_Division == ""){
			e_error = 1;
			$('.Sub_Division').html('Sub-Division is Required.');
		}else{
			if(!Sub_Division.match(onlynumerics)){
				e_error = 1;
				$('.Sub_Division').html('Sub-Division only use Numeric Values, Check again.');
			}else{
				$('.Sub_Division').html('');
			}	
		}
      if(block == ""){
			e_error = 1;
			$('.block').html('Block/Municipality is Required.');
		}else{
			if(!block.match(onlynumerics)){
				e_error = 1;
				$('.block').html('Block/Municipality only use Numeric Values, Check again.');
			}else{
				$('.block').html('');
			}	
		}
      if(gram_panchayat == ""){
			e_error = 1;
			$('.gram_panchayat').html('Gram Panchayat is Required.');
		}else{
			if(!gram_panchayat.match(onlynumerics)){
				e_error = 1;
				$('.gram_panchayat').html('Gram Panchayat only use Numeric Values, Check again.');
			}else{
				$('.gram_panchayat').html('');
			}	
		}
      if(village == ""){
			e_error = 1;
			$('.village').html('Village/Town is Required.');
		}else{
			if(!village.match(alphanumerics_no)){
				e_error = 1;
				$('.village').html('Village/Town not use special carecters [without _ / & : ( . ) , -], Check again.');
			}else{
				$('.village').html('');
			}	
		}
      if(Post_office == ""){
			e_error = 1;
			$('.Post_office').html('Post Office is Required.');
		}else{
			if(!Post_office.match(alphanumerics_no)){
				e_error = 1;
				$('.Post_office').html('Post Office not use special carecters [without _ / & : ( . ) , -], Check again.');
			}else{
				$('.Post_office').html('');
			}	
		}
      if(pincode == ""){
			e_error = 1;
			$('.pincode').html('Pincode is Required.');
		}else{
			if(!pincode.match(onlynumerics)){
				e_error = 1;
				$('.pincode').html('Pincode needs only 6 digit.');
			}else if(pincode.length != 6){
				e_error = 1;
				$('.pincode').html('Pincode needs only 6 digit.');
			}else{
				$('.pincode').html('');
			}	
		}
		
      if (document.getElementById("inputGroupFile01").files.length == 0) {
			e_error = 1;
			$('.inputGroupFile01').html('Applicant\'s Photo is Required.');
		} else {
			var fileInput = document.getElementById('inputGroupFile01');
			var filePath = fileInput.value;
			if (!allowedExtensions.exec(filePath)) {
				e_error = 1;
				$('.inputGroupFile01').html('Source File type Invalid.(Use PNG/JPG)');
			} else {
				$('.inputGroupFile01').html('');
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
   
         var form_data = new FormData();
         form_data.append('first_name', first_name);
         form_data.append('middle_name', middle_name);
         form_data.append('last_name', last_name);
         form_data.append('gender', gender);
         form_data.append('parent_name', parent_name);
         form_data.append('email', email);
         form_data.append('district_code', district_code);
         form_data.append('Sub_Division', Sub_Division);
         form_data.append('block', block);
         form_data.append('gram_panchayat', gram_panchayat);
         form_data.append('village', village);
         form_data.append('Post_office', Post_office);
         form_data.append('pincode', pincode);
         form_data.append("files", files[0]);

         $.ajax({
            method: 'POST',
            url: '<?php echo base_url() . "userset/updateapplicant_details"; ?>',
            data: form_data,
            dataType: 'JSON',
            contentType: false,
            processData: false,
            success: function(data) {
               //alert(data.msg);
               if (data.msg == 1) {
                  //console.log(data);
                  //alert(data.msg[0].space_rate);
                  $('.div_roller_total').fadeOut();
                  $('.get_success_total').html('Details Updated and an OTP send to Your Registered E-Mail. Please Verify.');
                  $(".get_success_total").fadeIn();
                  $('input, select').val('');
                  $('input').html('');
                  setTimeout(function() {
                     $('.get_success_total').fadeOut();
                     window.location.replace("<?php echo site_url('userset/emailotp_page')?>");
                  }, 3000);

               } else {
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


  

    

      
   $(document).ready(function () {
           // alert("hi");
       $("#addFrm input[name='Pincode']").keydown(function (event) {
        //alert(event.keyCode);
        var pincode = $("#addFrm input[name='Pincode']").val();
           // Allow only backspace and delete
           if (event.keyCode == 46 || event.keyCode == 8  || event.keyCode==116  || event.keyCode==9 || event.keyCode==37 || event.keyCode==39 || event.keyCode==17 || event.keyCode==86) {
               // let it happen, don't do anything
           }
           else {
               // Ensure that it is a number and stop the keypress
               if ((event.keyCode > 47 && event.keyCode < 58 ) || (event.keyCode > 94 && event.keyCode < 106 )) {
                $('.text-error').hide();
               }else{
                
                if(pincode.length!=6)
                {
                $('.Pincode').show().html('Only numbers');
                setTimeout(function(){$('.Pincode').hide()}, 1000);
                }
                event.preventDefault();
               }
           }
       });
      
        
   });

      function lfn_SetSubDivision(district_code)
      {
         //alert(district_id);
			if(district_code != ""){
				$.ajax({
               url: "<?php echo base_url('main/ajax_get_subdivision') ?>",
               type: 'POST',
               data: {'district_code':district_code},
               success: function(data) {
                 //alert(data);
                 $('#Sub_Division').html(data);
					  $('#block, #gram_panchayat').html('<option value="">--Select---</option>');
               }
            });
			}else{
				$('#Sub_Division, #block, #gram_panchayat').html('<option value="">--Select---</option>');
			}
         

      }

      function lfn_SetBlock(Sub_Division)
      {
			if(Sub_Division != ""){
				$.ajax({
					url: "<?php echo base_url('main/ajax_get_block') ?>",
					type: 'POST',
					data: {'Sub_Division':Sub_Division},
					success: function(data) {
					//alert(data); return false;
						$('#block').html(data);
						$('#gram_panchayat').html('<option value="">--Select---</option>');
					}
				});
			}else{
				$('#block, #gram_panchayat').html('<option value="">--Select---</option>');
			}
      }

      function lfn_SetPanchayat(gram_panchayat)
      {
			if(gram_panchayat != ""){
				$.ajax({
					url: "<?php echo base_url('main/ajax_get_panchayat') ?>",
					type: 'POST',
					data: {'gram_panchayat':gram_panchayat},
					success: function(data) {
					//alert(data); return false;
					$('#gram_panchayat').html(data);
					}
				});
			}else{
				$('#gram_panchayat').html('<option value="">--Select--</option>');
			}
      }


      function submitDetails()
      {
         //alert(123);
         //alert(12); return false;
         //return true;
         var first_name = $('#first_name').val().trim();
         var last_name = $('#last_name').val().trim();
         var gender = $('#gender').val().trim();
         var parent_name = $('#parent_name').val().trim();
         var email = $('#email').val().trim();
         var district_code = $('#district_code').val().trim();
         var Sub_Division = $('#Sub_Division').val().trim();
         //var block = $('#block').val().trim();
         var gram_panchayat = $('#gram_panchayat').val().trim();
         var village =  $('#village').val().trim();
         var Post_office =  $('#Post_office').val().trim();
         var pincode = $('#pincode').val();
         //var docm = $('#inputGroupFile01').val();
         var error_flag = false;
         if(first_name=='')
         {
            $('.first_name').show().html('Please enter first name.');
            $('#first_name').focus();
            setTimeout(function(){$('.first_name').hide().html('');},2000);
            error_flag = true;
            return false;
         }
         if(last_name=='')
         {
            $('.last_name').show().html('Please enter last name.');
            $('#last_name').focus();
            setTimeout(function(){$('.last_name').hide().html('');},2000);
            error_flag = true;
            return false;
         }
         if(gender=='')
         {
            $('.gender').show().html('Please select gender.');
            $('#gender').focus();
            setTimeout(function(){$('.gender').hide().html('');},2000);
            error_flag = true;
            return false;
         }
         if(parent_name=='')
         {
            $('.parent_name').show().html('Please enter father/mother name.');
            $('#parent_name').focus();
            setTimeout(function(){$('.parent_name').hide().html('');},2000);
            error_flag = true;
            return false;
         }
         if(email=='')
         {
            $('.email').show().html('Please enter email.');
            $('#email').focus();
            setTimeout(function(){$('.email').hide().html('');},2000);
            error_flag = true;
            return false;
         }
         if(district_code=='')
         {
            $('.district_code').show().html('Please select district.');
            $('#district_code').focus();
            setTimeout(function(){$('.district_code').hide().html('');},2000);
            error_flag = true;
            return false;
         }
         if(Sub_Division=='')
         {
            $('.Sub_Division').show().html('Please select sub division.');
            $('#Sub_Division').focus();
            setTimeout(function(){$('.Sub_Division').hide().html('');},2000);
            error_flag = true;
            return false;
         }
         /*if(block=='')
         {
            $('.block').show().html('Please select block/municipality.');
            $('#block').focus();
            setTimeout(function(){$('.block').hide().html('');},2000);
            error_flag = true;
            return false;
         }*/
         if(gram_panchayat=='')
         {
            $('.gram_panchayat').show().html('Please select gram panchayat.');
            $('#gram_panchayat').focus();
            setTimeout(function(){$('.gram_panchayat').hide().html('');},2000);
            error_flag = true;
            return false;
         }
         if(village=='')
         {
            $('.village').show().html('Please enter village.');
            $('#village').focus();
            setTimeout(function(){$('.village').hide().html('');},2000);
            error_flag = true;
            return false;
         }
         if(Post_office=='')
         {
            $('.Post_office').show().html('Please enter post office.');
            $('#Post_office').focus();
            setTimeout(function(){$('.Post_office').hide().html('');},2000);
            error_flag = true;
            return false;
         }
         if(pincode=='')
         {
            $('.pincode').show().html('Please enter pincode.');
            $('#pincode').focus();
            setTimeout(function(){$('.pincode').hide().html('');},2000);
            error_flag = true;
            return false;
         }
         if(docm==""){
            $('.image').show().html('Please enter pincode.');
            $('#inputGroupFile01').focus();
            setTimeout(function(){$('.image').hide().html('');},2000);
            error_flag = true;
            return false;
         }
         
      }

      function fileValidation() {
				var fileInput =
					document.getElementById('inputGroupFile01');
				
				var filePath = fileInput.value;
			
				// Allowing file type
				var allowedExtensions =
						/(\.jpg|\.jpeg|\.png)$/i;
				if (!allowedExtensions.exec(filePath)) {
					//alert('Please select pdf file');
				$('#file-error').show().html('Please upload jpg or png file').delay(2000).fadeOut();
				fileInput.value = '';
							return false;
							}
				else
				{
				
					// Image preview
					if (fileInput.files && fileInput.files[0]) {
						var reader = new FileReader();
						reader.onload = function(e) {
								document.getElementById(
									'imagePreview').innerHTML =
									'<img src="' + e.target.result
									+ '"/>';
						};
							
						reader.readAsDataURL(fileInput.files[0]);
					}
				}
		}
      
      /*function lfn_validate()
        {
         //alert(1);
         //var mob = $('#mobile').val();
         var first_name = $('#first_name').val().trim();
         var last_name = $('#last_name').val().trim();
         var gender = $('#gender').val().trim();
         var parent_name = $('#parent_name').val().trim();
         var email = $('#email').val().trim();
         var district_code = $('#district_code').val().trim();
         var Sub_Division = $('#Sub_Division').val().trim();
         //var block = $('#block').val().trim();
         var gram_panchayat = $('#gram_panchayat').val().trim();
         var village =  $('#village').val().trim();
         var Post_office =  $('#Post_office').val().trim();
         var pincode = $('#pincode').val();
         //var docm = $('#inputGroupFile01').val();
         var error_flag = false;
         if(first_name=='')
         {
            $('.first_name').show().html('Please enter first name.');
            $('#first_name').focus();
            setTimeout(function(){$('.first_name').hide().html('');},2000);
            error_flag = true;
            return false;
         }
         if(last_name=='')
         {
            $('.last_name').show().html('Please enter last name.');
            $('#last_name').focus();
            setTimeout(function(){$('.last_name').hide().html('');},2000);
            error_flag = true;
            return false;
         }
         if(gender=='')
         {
            $('.gender').show().html('Please select gender.');
            $('#gender').focus();
            setTimeout(function(){$('.gender').hide().html('');},2000);
            error_flag = true;
            return false;
         }
         if(parent_name=='')
         {
            $('.parent_name').show().html('Please enter father/mother name.');
            $('#parent_name').focus();
            setTimeout(function(){$('.parent_name').hide().html('');},2000);
            error_flag = true;
            return false;
         }
         if(email=='')
         {
            $('.email').show().html('Please enter email.');
            $('#email').focus();
            setTimeout(function(){$('.email').hide().html('');},2000);
            error_flag = true;
            return false;
         }
         if(district_code=='')
         {
            $('.district_code').show().html('Please select district.');
            $('#district_code').focus();
            setTimeout(function(){$('.district_code').hide().html('');},2000);
            error_flag = true;
            return false;
         }
         if(Sub_Division=='')
         {
            $('.Sub_Division').show().html('Please select sub division.');
            $('#Sub_Division').focus();
            setTimeout(function(){$('.Sub_Division').hide().html('');},2000);
            error_flag = true;
            return false;
         }
         /*if(block=='')
         {
            $('.block').show().html('Please select block/municipality.');
            $('#block').focus();
            setTimeout(function(){$('.block').hide().html('');},2000);
            error_flag = true;
            return false;
         }*/
         /*if(gram_panchayat=='')
         {
            $('.gram_panchayat').show().html('Please select gram panchayat.');
            $('#gram_panchayat').focus();
            setTimeout(function(){$('.gram_panchayat').hide().html('');},2000);
            error_flag = true;
            return false;
         }
         if(village=='')
         {
            $('.village').show().html('Please enter village.');
            $('#village').focus();
            setTimeout(function(){$('.village').hide().html('');},2000);
            error_flag = true;
            return false;
         }
         if(Post_office=='')
         {
            $('.Post_office').show().html('Please enter post office.');
            $('#Post_office').focus();
            setTimeout(function(){$('.Post_office').hide().html('');},2000);
            error_flag = true;
            return false;
         }
         if(pincode=='')
         {
            $('.pincode').show().html('Please enter pincode.');
            $('#pincode').focus();
            setTimeout(function(){$('.pincode').hide().html('');},2000);
            error_flag = true;
            return false;
         }
         /*if(docm==""){
            $('.image').show().html('Please enter pincode.');
            $('#inputGroupFile01').focus();
            setTimeout(function(){$('.image').hide().html('');},2000);
            error_flag = true;
            return false;
         }
         */
         // var captcha = $('#captcha').val();
        

         
         // if(mob.length!=10)
         // {
         //    $('.mobile').show().html('Please enter 10 digit mobile No .');
         //    $('#mobile').focus();
         //    setTimeout(function(){$('.mobile').hide().html('');},8000);
         //     error_flag = true;
         //    return false;

         // }
        /* if(error_flag ==false)
     {
       //alert(131);
      $.ajax({
        url: "<?php echo base_url('user/get_otp') ?>",
        type: 'POST',
        data: {'first_name':first_name,'last_name':last_name,'gender':gender,'parent_name':parent_name,'email':email,'district_code':district_code,'Sub_Division':Sub_Division,'gram_panchayat':gram_panchayat,'village':village,'Post_office':Post_office,'pincode':pincode},
        dataType:'JSON',
        success: function(data) {
         alert(123); 
         // return false;
          const myArray = data.split("##");
         if(myArray[0]==1)
          {
            //$('#get_success_total').show().html(myArray[1]);
          setTimeout(function(){ window.location.href="<?php echo base_url('user/otp')?>";}, 1000); 
          $('#get_success_total').show().html(myArray[1]);    
            setTimeout(function(){ location.reload();}, 1000);     
         }else if(myArray[0]==2){
           //$('#addFrm')[0].reset();
           $('#get_error_total').show().html(myArray[1]);
         }else if(myArray[0]==3){
           $('#get_error_total').show().html(myArray[1]);
         }else if(myArray[0]==4){
           $('#get_error_total').show().html(myArray[1]);
         }
           // if(data.msg == 1)
           //  {
           //     // $("#login_btn").show();
           //     setTimeout(function(){ window.location.href="<?php echo base_url('user/otp')?>";}, 1000); 
           //     // $("#next_btn").hide();
           //     // $(".otp_sec").show();
           //     //console.log(data);
           //     // $(".div_roller_total").fadeOut();
           //     // $('.get_success_total').html('Your OTP is - '+ data.adm_msg);
           //     $('#id').val(data.s_msg);
           //     $('#username').prop('readonly',true);
           //     //$('#usertype').attr('disabled',true);
           //     $("#usr_required").attr("disabled", true);
           //     $(".get_success_total").fadeIn();
           //     setTimeout(function(){ 
           //        //$('.get_success_total').fadeOut();
           //        $('.mobset').hide();
           //        $(".otpset, .logset").fadeIn();
           //     }, 2000);
               
           //  }else{
           //     alert("else");
           //     $(".div_roller_total").fadeOut();
           //     $('.get_error_total').html(data.e_msg);
           //     $(".get_error_total").fadeIn();
           //     setTimeout(function(){ $('.get_error_total').fadeOut(); }, 3000);
           //     $('.mobset').prop('disabled', false);
           //  }
            
          
        }
      });
   }
}*/



   



     

   </script>

      


      
