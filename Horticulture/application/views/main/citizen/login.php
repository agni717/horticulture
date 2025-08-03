<?php $this->load->view('common/header_citizen_dashboard.php'); ?>  
<style>
   
.text-error {color:red; display:none;}
#login_btn {display: none; }
.btn {padding: 8px 14px;}
.otp_sec {display: none;}
</style> 
   
      <div class="page-body-wrapper">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-10 grid-margin mt-5 mx-auto">
                  <h4 class="card-title">Applicant Details</h4>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-10 grid-margin mx-auto">
                  <div class="card">
                     <div class="card-body">
                        <form class="form-sample" method="POST">
                           <input type="hidden" name="sch_id" id="sch_id" value="<?php echo $sch_id ?>" />
                        
                           <div class="form-group">
                              <div class="form-row mb-0">
                                 <label class="col-lg-2 col-form-label">Phone No.:</label>
                                 <div class="col-lg-3">
                                 <!-- <input type="hidden" id="id" name="id" autocomplete="off"> -->
                                    <input type="text" class="form-control" name="mobile" id="mobile" maxlength="10" />
                                    <small class="text-error mobile"></small>
                                 </div>

                                 <div class="otp_sec col-lg-5">
                                    <div class="row">
                                       <label class="col-lg-5 col-form-label">Type OTP:</label>
                                       <div class="col-lg-7">
                                          
                                          <input type="text" class="form-control" name="otp" id= "otp" maxlength="6" />
                                          <small class="text-error otp"></small>
                                       
                                       </div>
                                    </div>
                                 </div>

                                 <div class="col-lg-2 text-right">
                                    <button type="button" class="btn btn-primary" id="next_btn" onclick="get_otp();">Next</button>
                                    <button type="button" class="btn btn-primary otp_sec" id="login_btn1" onclick="login_submit();" >login</button>

                                 </div>

                                  <div class="col-sm-12 text-center">
                                    <div align="center">
                                       <div class="get_error_total" align="center" style="background-color: #bf0000;color: #fff;max-width: 500px;margin: 0 auto;padding: 10px 20px;display: none;">sdgdg</div>
                                       <div class="get_success_total" align="left" style="background-color: #174b10;color: #fff;max-width: 500px;margin: 0 auto;padding: 10px 20px;display: none;">ssddg</div>
                                      <div class="div_roller_total" align="center" style="display: none;"><img src="<?php echo base_url('images/ajax_loader.gif'); ?>" style="max-width: 60px;" /></div>
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
		
      $('#alert_msg, .text-error').delay(8000).fadeOut();
     
	});









function get_otp()
{
   
   var mobile_no = $('#mobile').val().trim();
   var sch_id = $('#sch_id').val().trim();

   var error_flag = false;
   if(mobile_no == "")
   {
      error_flag = true;
      $('.mobile').show().html('Please Insert Mobile Number');
      setTimeout(function(){$('.mobile').hide()}, 1000);
      /*$(".div_roller_total").fadeOut();
      $('.get_error_total').html('Please Insert Mobile Number');
      $(".get_error_total").fadeIn();
      setTimeout(function(){ $('.get_error_total').fadeOut(); }, 3000);
      $('.mobset').prop('disabled', false);*/
   }
   if(mobile_no.length != 10){
      error_flag = true;
      $('.mobile').show().html('Please Insert 10 Digit Mobile Number');
      setTimeout(function(){$('.mobile').hide()}, 1000);
      /*$(".div_roller_total").fadeOut();
      $('.get_error_total').html('Please Insert 10 Digit Mobile Number');
      $(".get_error_total").fadeIn();
      setTimeout(function(){ $('.get_error_total').fadeOut(); }, 3000);
      $('.mobset').prop('disabled', false);*/
   }

   if(error_flag == false)
   {
      $.ajax({
         method:'POST',
         url:'<?php echo base_url()."user/get_otp"; ?>',
         data:{'mobile': mobile_no,'sch_id':sch_id},
         dataType:'JSON',
         success:function(data){
            //alert(data); return false;
            if(data.msg == 1)
            {
               $("#login_btn").show();
               $("#next_btn").hide();
               $(".otp_sec").show();
               //console.log(data);
               $(".div_roller_total").fadeOut();
               $('.get_success_total').html('Your OTP is - '+ data.adm_msg);
               $('#id').val(data.s_msg);
               $('#username').prop('readonly',true);
               //$('#usertype').attr('disabled',true);
               $("#usr_required").attr("disabled", true);
               $(".get_success_total").fadeIn();
               setTimeout(function(){ 
                  //$('.get_success_total').fadeOut();
                  $('.mobset').hide();
                  $(".otpset, .logset").fadeIn();
               }, 2000);
               
            }else{
               alert("else");
               $(".div_roller_total").fadeOut();
               $('.get_error_total').html(data.e_msg);
               $(".get_error_total").fadeIn();
               setTimeout(function(){ $('.get_error_total').fadeOut(); }, 3000);
               $('.mobset').prop('disabled', false);
            }
            
         },
         error: function (xhr, ajaxOptions, thrownError) {
            alert(xhr.status);
            alert(thrownError);
         }
      });
   }

}

function login_submit()
{

   //alert('abc'); return false;

   var mob = $('#mobile').val().trim();
   var sch_id = $('#sch_id').val().trim();
   var otp = $('#otp').val().trim();
   var error_flag = false;
   if(mob == '')
   {
   error_flag = true;
   $('#mobile').show().html(' Mobile Number cannot be blank');
   setTimeout(function(){$('.mobile').hide()}, 1000);
   }

   if(otp=='')
   {
   error_flag = true;
   $('.otp').show().html('OTP cannot be blank');
   setTimeout(function(){$('.otp').hide()}, 1000);
   }

   if(error_flag == false)
   {
      //alert(131);
      $.ajax({
        url: "<?php echo base_url('user/login_submit') ?>",
        type: 'POST',
        data: {'mobile':mob,'otp':otp,'sch_id':sch_id},
        success: function(data) {
        //alert(data); return false;
         const myArray = data.split("##");
         if(myArray[0]==1)
         {
           $('.get_success_total').show().html(myArray[1]);
           setTimeout(function(){ window.location.href="<?php echo base_url('applicant/details')?>";}, 1000);     
           //setTimeout(function(){ location.reload();}, 1000);     
         }else if(myArray[0]==2){
           //$('#addFrm')[0].reset();
           $('.get_error_total').show().html(myArray[1]);
           setTimeout(function(){ $('.get_error_total').hide().html('');}, 1000);
         }else if(myArray[0]==3){
           $('.get_error_total').show().html(myArray[1]);
           setTimeout(function(){ $('.get_error_total').hide().html('');}, 1000);
         }else if(myArray[0]==4){
           $('.get_error_total').show().html(myArray[1]);
           setTimeout(function(){ $('.get_error_total').hide().html('');}, 1000);
         }
          
          
        }
      });
   }

}


         $(document).ready(function () {
           // alert("hi");
       $("#otp").keydown(function (event) {
        //alert(event.keyCode);
        var otp = $('#otp').val();
           // Allow only backspace and delete
           if (event.keyCode == 46 || event.keyCode == 8  || event.keyCode==116  || event.keyCode==9 || event.keyCode==37 || event.keyCode==39 || event.keyCode==17 || event.keyCode==86) {
               // let it happen, don't do anything
           }
           else {
               // Ensure that it is a number and stop the keypress
               if ((event.keyCode > 47 && event.keyCode < 58 ) || (event.keyCode > 94 && event.keyCode < 106 )) {
                $('.text-error').hide();
               }else{
                
                if(otp.length!=6)
                {
                $('.otp').show().html('Only numbers');
                setTimeout(function(){$('.otp').hide()}, 1000);
                }
                event.preventDefault();
               }
           }
       });

       $("#mobile").keydown(function (event) {
        //alert(event.keyCode);
        var mob = $('#mobile').val();
           // Allow only backspace and delete
           if (event.keyCode == 46 || event.keyCode == 8  || event.keyCode==116  || event.keyCode==9 || event.keyCode==37 || event.keyCode==39  ) {
               // let it happen, don't do anything
           }
           else {
               // Ensure that it is a number and stop the keypress
               if ((event.keyCode > 47 && event.keyCode < 58 ) || (event.keyCode > 94 && event.keyCode < 106 )) {
                $('.text-error').hide();
               }else{
                if(mob.length!=10)
                {
                $('.mobile').show().html('Only numbers');
                setTimeout(function(){$('.mobile').hide()}, 1000);
                }
                event.preventDefault();
               }
           }
       });

      
        
   });
         </script>
      
 
	
	
