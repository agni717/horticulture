<?php $this->load->view('common/header_citizen_dashboard.php'); ?>   
<style>
.text-error {color:red;}
#login_btn {display: none; }
.btn {padding: 8px 14px;}
.otp_sec {display: none;}
</style>
      <div class="page-body-wrapper">
         <div class="container-fluid bg">
            <div class="row">
               <div class="col-lg-4 grid-margin mt-5 mx-auto text-center">
                  <h4 class="card-title"> Department Of Horticulture Industries</h4>
               </div>
            </div>
           
            <div class="row">
               <div class="col-lg-4 grid-margin mx-auto">
                  <div class="card">
                     <div class="card-body">
                        <form class="form-sample" method="POST" onsubmit="retutn login_submit();" >
                           <div class="form-group">
                              <div class="form-row">
                                 
                                <!--  <label class="col-lg-12 col-form-label">Type OTP : <sup>*</sup></label>
                                 <div class="col-lg-12">
                                    <input type="number" class="form-control" />
                                 </div> -->

                                  <div class="col-lg-12 text-center mt-4"><small>Enter the verification code we send to Your mobile </small></div>
                                    <div class="col-lg-12 text-center mt-4 text-success" style="font-size:30px;"><strong><?php echo $this->session->userdata('member_mobile_set');?></strong></div>
                                   <div class="col-lg-12 text-center mt-4"><strong><?php echo $mobotp;?></strong></div>
                                   <div class="col-lg-12">
                                     <div class="row">
                                        <div class="col-lg-12 text-center mt-4"><small><strong>Type 6 digit security code</strong> </small></div>
                                        <div class="col-lg-12 mx-auto mt-2 otp d-table" >
                                          
                                          <div class="row mt-4">
                                           <div class="col-lg-2">
                                               <input type="text" class="form-control otp" name="otp1" id="otp1" maxlength="1" autocomplete="off" />
                                               <small class="text-error otp1"></small>

                                           </div>
                                           <div class="col-lg-2">
                                                 <input type="text" class="form-control otp" name="otp2" id="otp2" maxlength="1" autocomplete="off" />
                                                 <small class="text-error otp2"></small>

                                           </div>
                                           <div class="col-lg-2">
                                                 <input type="text" class="form-control otp" name="otp3" id="otp3" maxlength="1" autocomplete="off" />
                                                 <small class="text-error otp3"></small>

                                           </div>
                                           <div class="col-lg-2">
                                                 <input type="text" class="form-control otp" name="otp4" id="otp4" maxlength="1" autocomplete="off" />
                                                 <small class="text-error otp4"></small>

                                           </div>
                                           <div class="col-lg-2">
                                                 <input type="text" class="form-control otp" name="otp5" id="otp5" maxlength="1"autocomplete="off" />
                                                 <small class="text-error otp5"></small>

                                           </div>
                                           <div class="col-lg-2">
                                                 <input type="text" class="form-control otp" name="otp6" id="otp6" maxlength="1" autocomplete="off" />
                                                 <small class="text-error otp6"></small>

                                           </div>
                                        </div>
                                     </div>
                                     </div>

                                  </div>
                                  <div class="col-lg-12 text-center mt-2">
                                    
                                       <div class="get_error_total" align="center" style="background-color: #bf0000;color: #fff;max-width: 500px;margin: 0 auto;padding: 10px 20px;display: none;">sdgdg</div>
                                       <div class="get_success_total" align="left" style="background-color: #174b10;color: #fff;max-width: 500px;margin: 0 auto;padding: 10px 20px;display: none;">ssddg</div>
                                      <div class="div_roller_total" align="center" style="display: none;"><img src="<?php echo base_url('assets/images/ajax_loader.gif'); ?>" style="max-width: 60px;" /></div>
                                    
                                 </div> 
                                 <div class="col-lg-12 text-right mt-2">
                                    <!-- <a type="button" class="btn btn-primary"  >Next</a> -->
                                    <button type="button" class="btn btn-primary" id="next_btn" onclick="login_submit();" >Submit</button>

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

   function login_submit()
   {

      $(".div_roller_total").fadeIn();
      $('#next_btn').prop('disabled', true);
      var onlynumerics = /^[0-9]+$/;
      var alphanumerics = /^[A-Za-z0-9]+$/;
      var e_error = 0;
      var error_message = '';
   

      var mob = '<?php echo $this->session->userdata('member_mobile_set');?>';
      var otp1 = $('#otp1').val().trim();
      var otp2 = $('#otp2').val().trim();
      var otp3 = $('#otp3').val().trim();
      var otp4 = $('#otp4').val().trim();
      var otp5 = $('#otp5').val().trim();
      var otp6 = $('#otp6').val().trim();

      if(otp1 == ""){
         e_error = 1;
         $('.otp1').html('Required');
      }else{
         if(!otp1.match(onlynumerics) || otp1.length != 1){
            e_error = 1;
            $('.otp1').html('Only Numeric');
         }else{
            $('.otp1').html('');
         }
      }
      if(otp2 == ""){
         e_error = 1;
         $('.otp2').html('Required');
      }else{
         if(!otp2.match(onlynumerics) || otp2.length != 1){
            e_error = 1;
            $('.otp2').html('Only Numeric');
         }else{
            $('.otp2').html('');
         }
      }
      if(otp3 == ""){
         e_error = 1;
         $('.otp3').html('Required');
      }else{
         if(!otp3.match(onlynumerics) || otp3.length != 1){
            e_error = 1;
            $('.otp3').html('Only Numeric');
         }else{
            $('.otp3').html('');
         }
      }
      if(otp4 == ""){
         e_error = 1;
         $('.otp4').html('Required');
      }else{
         if(!otp4.match(onlynumerics) || otp4.length != 1){
            e_error = 1;
            $('.otp4').html('Only Numeric');
         }else{
            $('.otp4').html('');
         }
      }
      if(otp5 == ""){
         e_error = 1;
         $('.otp5').html('Required');
      }else{
         if(!otp5.match(onlynumerics) || otp5.length != 1){
            e_error = 1;
            $('.otp5').html('Only Numeric');
         }else{
            $('.otp5').html('');
         }
      }
      if(otp6 == ""){
         e_error = 1;
         $('.otp6').html('Required');
      }else{
         if(!otp6.match(onlynumerics) || otp6.length != 1){
            e_error = 1;
            $('.otp6').html('Only Numeric');
         }else{
            $('.otp6').html('');
         }
      }
      
      var combine = '';
      if(otp6!='' && otp5!='' && otp4!='' && otp3!='' && otp2!='' && otp1!='')
      {
         combine = otp1+otp2+otp3+otp4+otp5+otp6;
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
               url:'<?php echo base_url()."main/checkotp_forlogin_candidates"; ?>',
               data:{combine:combine, mobile:mob, otp1:otp1, otp2:otp2, otp3:otp3, otp4:otp4, otp5:otp5, otp6:otp6},
               dataType:'JSON',
               success:function(data){
                  //alert(data.msg);
                  if(data.msg == 1)
                  {
                     //console.log(data);
                     $('.div_roller_total').fadeOut();
                     $('.get_success_total').html('OTP Matched Successfully.');
                     //$('.get_success_total').html('OTP send to Your Registered Email-ID. OTP - ' + data.mobsms);
                     $(".get_success_total").fadeIn();
                     setTimeout(function(){ 
                        $('.get_success_total').fadeOut();
                        //window.location.replace("<?php //echo site_url('userset/applicant_reg_detailsets')?>");
						 window.location.replace("<?php echo site_url('userset/applicant_dashboard')?>");
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


const $inp = $(".otp");

$inp.on({
  paste(ev) { // Handle Pasting
  
    const clip = ev.originalEvent.clipboardData.getData('text').trim();
    // Allow numbers only
    if (!/\d{6}/.test(clip)) return ev.preventDefault(); // Invalid. Exit here
    // Split string to Array or characters
    const s = [...clip];
    // Populate inputs. Focus last input.
    $inp.val(i => s[i]).eq(5).focus(); 
  },
  input(ev) { // Handle typing
    
    const i = $inp.index(this);
    if (this.value) $inp.eq(i + 1).focus();
  },
  keydown(ev) { // Handle Deleting
    
    const i = $inp.index(this);
    if (!this.value && ev.key === "Backspace" && i) $inp.eq(i - 1).focus();
  }
  
});
</script>