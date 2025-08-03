<?php $this->load->view('/common/header_citizen.php'); ?> 

<div class="page-body-wrapper">
  <div class="container-fluid">
     <div class="row">
       <div class="col-lg-12 grid-margin mt-4 mx-auto">
         <h4 class="card-title">Sanction Letter</h4>
       </div>
       
         <div class="col-lg-12 grid-margin">
         <div class="card">
           <div class="card-body">
             <fieldset><legend>Letter Dedtails</legend>
              <form action="<?php echo base_url('userset/sanction_letter_upload/'.$application_id);?>" method="POST" enctype="multipart/form-data">
               <div class="row">
                <input type="hidden" name="user_id" value="<?php echo $user_id; ?>"/>
                <input type="hidden" name="sch_id" value="<?php echo $sch_id; ?>"/>
                <input type="hidden" name="application_id" value="<?php echo $application_id; ?>"/>
               <div class="col-lg-3">
               <label class="col-lg-12 col-form-label">Bond & Affitdavit </label>
               <div class="col-lg-12">
               <input type="file" class="form-control" name="bond" id="bond">
               </div>
             </div> 

             <div class="col-lg-3">
               <label class="col-lg-12 col-form-label">Bank Certificate  </label>
               <div class="col-lg-12">
               <input type="file" class="form-control" name="bank_cerificate" id="bank_cerificate">
               </div>
             </div> 

              <div class="col-lg-3">
               <label class="col-lg-12 col-form-label">CA Certificate  </label>
               <div class="col-lg-12">
               <input type="file" class="form-control" name="ca_certificate" id="ca_certificate">
               </div>
             </div> 
             
             <div class="col-lg-3 text-right mt-4">
               <button type="submit" class="btn btn-primary mb-2" name="btn_submit" value="submit" id="btn_submit">Submit</button>

             </div>
               </div>
               <div class="col-lg-12 text-center text-msg text-danger" id="ar_msg_cont">
                                          <!-- Message Area -->
           </div>
             </form>
              </fieldset>
           </div>
         </div>
       </div>

    

       
  </div>
</div>





<?php $this->load->view('/common/footer.php'); ?>
<script>
$('#btn_submit').on("click",function(event){
        var bond = $("#bond").val();
        var bank_cerificate = $("#bank_cerificate").val();
        var ca_certificate = $("#ca_certificate").val();
        var error_flag= false;
        
        if(bond==''){
          $('#ar_msg_cont').show().html('Please upload Affitdavit');
          setTimeout(function(){$('#ar_msg_cont').hide()}, 1000);
          error_flag= true;
          return false;
        }
        if(bank_cerificate==''){
          $('#ar_msg_cont').show().html('Please upload bank certificate');
          setTimeout(function(){$('#ar_msg_cont').hide()}, 1000);
          error_flag= true;
          return false;
        }
        if(ca_certificate==''){
          $('#ar_msg_cont').show().html('Please upload ca certificate');
          setTimeout(function(){$('#ar_msg_cont').hide()}, 1000);
          error_flag= true;
          return false;
        }
});
</script>
