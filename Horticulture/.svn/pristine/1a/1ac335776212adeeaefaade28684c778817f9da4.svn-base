<?php $this->load->view('common/header_citizen.php'); ?>  
<style type="text/css">
   .text-error{color: #f05555;}
</style>

<div class="page-body-wrapper">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-10 grid-margin mt-3 mx-auto">
            <h4 class="card-title">Personal Information</h4>
         </div>
      </div>
      <div class="row">

         <div class="col-lg-10 grid-margin mx-auto">
            <div class="card">
               <div class="card-body">  


                  <!--<form class="form-sample" method="POST" id="addFrm" name="addFrm" enctype="multipart/form-data">-->
                     <!-- <input type="hidden" name="scheme_id" id="scheme_id" value="<?php //echo $scheme_id?>" /> -->                         

                     <fieldset>
                        <legend>Personal Information</legend>
                        
                           <div class="form-group">
                              <div class="form-row">                                 
                                 <div class="col-lg-4">
                                    <label class="col-form-label"><b>First Name :</b></label>
                                    <label><?php echo $user_details->first_name;?></label>                                    
                                 </div>
                                 <div class="col-lg-3">
                                    <label class="col-form-label"><b>Middle Name</b>:</label>
                                    <label><?php echo $user_details->middle_name;?></label>                                    
                                 </div>
                                 <div class="col-lg-3">
                                    <label class="col-form-label"><b>Last Name</b>:</label>
                                    <label><?php echo $user_details->last_name;?></label>
                                 </div>
                                 <div class="col-lg-2">
                                    <label class="col-form-label"><b>Gender :</b></label>
                                    <label> <?php echo $user_details->u_gender;?></label>                                    
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="form-row"> 
                                 <div class="col-lg-4">
                                    <label class="col-form-label"><b>Father's / Husband's Name:</b></label>
                                    <label> <?php echo $user_details->u_parent_name;?></label>
                                 </div>                                 
                                 <div class="col-lg-3">
                                    <label class="col-form-label"><b>Mobile No.:</b></label>
                                    <label> <?php echo $user_details->u_mobile;?></label>
                                 </div>
                                 <div class="col-lg-3">
                                    <label class="col-form-label"><b>Email Id :</b></label>
                                    <label><?php echo $user_details->u_email;?></label>
                                 </div>
                                 <div class="col-lg-2">
                                    <label class="col-form-label"><b>District</b><sup>*</sup>:</label>
                                    <label><?php echo $user_details->district_name;?></label>
                                 </div> 
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="form-row">                                  
                                 <div class="col-lg-4">
                                    <label class="col-form-label"><b>Sub-Division</b><sup>*</sup>:</label>
                                    <label><?php echo $user_details->subdiv_name;?></label>
                                    <!-- <select class="form-control js-example-basic-single" name="Sub_Division" id="Sub_Division" onchange="lfn_SetBlock(this.value);" required>
                                       <option value="">---Select---</option>
                                    </select>
                                    <small class="text-error subdiv_id"><?php //echo form_error('subdiv_id');?></small> -->
                                 </div>
                                 <div class="col-lg-3">
                                    <label class="col-form-label"><b>Block</b><sup>*</sup>:</label>
                                    <label><?php echo $user_details->block_name;?></label>
                                 </div> 
                                 <div class="col-lg-3">
                                    <label class="col-form-label"><b>Gram Panchayat </b>:</label>
                                    <label><?php echo $user_details->panchayat_name;?></label>
                                 </div>  
                                 <div class="col-lg-2">
                                    <label class="col-form-label "><b>Village:</b></label>
                                    <label> <?php echo $user_details->u_village;?></label>
                                    <!--<select class="form-control js-example-basic-single">
                                       <option>Panchayat 1</option>
                                       <option>Panchayat 2</option>
                                       <option>Panchayat 4</option>
                                    </select>
                                    <small class="text-error"><?php //echo form_error('name');?></small> -->
                                 </div>                              
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="form-row">
                                 <div class="col-lg-4">
                                    <label class="col-form-label"><b>Post Office :</b></label>
                                    <label><?php echo $user_details->u_post_office;?> </label>
                                 </div>
                                 <div class="col-lg-3">
                                    <label class="col-form-label"><b>Pincode</b> :</label>
                                    <label><?php echo $user_details->u_pincode;?></label>
                                    <!-- <?php
                                   
                                    ?>
                                    <input type="text" class="form-control" name="Police_Station"  value="<?php //echo $user_Police_Station; ?>"  placeholder="" />
                                    <small class="text-error"><?php //echo //form_error('Police_Station');?></small>
                                 </div>                                 
                                 <div class="col-lg-3">
                                    <label class="col-form-label">Pincode:</label>
                                    <?php
                                   
                                    
                                    /*if(set_value('Police_Station') !=''){
                                       $user_Pincode = set_value('Pincode');
                                    }*/
                                    ?>
                                    <input type="text" class="form-control" name="Pincode" value="<?php //echo set_value('Pincode'); ?>"  placeholder="Pincode" maxlength="6" />
                                    <small class="text-error Pincode"><?php //echo //form_error('Pincode');?></small> -->
                                 </div>
                                 <div class="col-lg-3">
                                    <label class="col-form-label"><b>Applicant's Photo</b><sup>*</sup>:</label>
                                    <label><img src="<?php echo base_url()?>uploads/applicant_photos/<?php echo $user_details->u_image; ?>" style="color:blue;width:150px;" /></label>
                                   <!--  <div class="custom-file">
                                       <input type="file" class="custom-file-input" id="inputGroupFile01"  
                                       aria-describedby="inputGroupFileAddon01" name="Image" value="">  
                                       <label class="custom-file-label" for="inputGroupFile01"></label>
                                    </div>-->
                                    <p class="text-danger mb-0"></p>
                                 </div>                                                                  
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="form-row">
                                 <div class="col-lg-12 text-right">
									 <a href="<?php echo base_url('userset/applicant_dashboard')?>" class="btn btn-primary mb-2">Next</a>
                                 </div>
                              </div>
                           </div>
                           <div class="row" id="msg_cont">
                              <div class="col-lg-12 text-center text-success" style="display: none;"></div>
                           </div>
                           <?php //echo validation_errors(); ?>
                           <div class="row">
                              <div class="col-lg-12 text-center text-success msg_cont2" >
                                 <?php
                                 if(!empty($this->session->flashdata('msg')))
                                 {
                                    echo $this->session->flashdata('msg');
                                 /*echo '<script>
                                 setTimeout(function(){window.location.href="'.base_url().'applicant/project";}, 4000);</script>';*/
                                 //redirect("applicant/project");
                              }
                              ?>
                           </div>
                        </div>
                     </fieldset>

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




      //var addCount = 0;

   function validate()
   {
      var r=confirm("Do you want to update this?")
      if (r==true)
         return true;
      else
         return false;
   }
   var c_id = 1;



   function addRow2 () {
         //alert('hh');
        // addCount = addCount + 1;
      document.querySelector('#addMoreContainer').insertAdjacentHTML(
            //'afterbegin',
         'afterend',
         `<div class="col-lg-12" id="r`+c_id+`">
         <div class="industry-text text-center">
         <h5>Added More Existing Industry</h5>
         </div>   
         <div class="form-group" id="ifYes2">
         <div class="form-row">
         <label class="col-lg-3 col-form-label"> Existing Industry Name: </label>
         <div class="col-lg-3">
         <input type="text" class="form-control" id="industry_name`+c_id+`" name="industry_name[]" placeholder="" required  />

         </div>
         <label class="col-lg-3 col-form-label"> Existing Industry Location: </label>
         <div class="col-lg-3">
         <input type="text" class="form-control" id="industry_location`+c_id+`" name="industry_location[]"  placeholder="" required />
         </div>
         <label class="col-lg-3 col-form-label mt-4"> Product of Existing Industry: </label>
         <div class="col-lg-3 mt-4">
         <input type="text" class="form-control" id="industry_product`+c_id+`" name="industry_product[]"  placeholder="" required  />
         </div>
         <label class="col-lg-3 col-form-label mt-4"> Address1: </label>
         <div class="col-lg-3 mt-4">
         <input type="text" class="form-control" name="industry_Address[]" id="industry_Address`+c_id+`"  placeholder=""  />
         </div>
         <label class="col-lg-3 col-form-label mt-4"> Sub Division: </label>
         <div class="col-lg-3 mt-4">
         <input type="text" class="form-control"  name="industry_Sub_Division[]" id="industry_Sub_Division`+c_id+`"  placeholder="" required  />
         </div>
         <label class="col-lg-3 col-form-label mt-4"> Block: </label>
         <div class="col-lg-3 mt-4">
         <input type="text" class="form-control" name="industry_Block[]"  id="industry_Block`+c_id+`" placeholder="" required />
         </div>
         <label class="col-lg-3 col-form-label mt-4"> Police Station:</label>
         <div class="col-lg-3 mt-4">
         <input type="text" class="form-control" name="industry_Police_Station[]" id="industry_Police_Station`+c_id+`" placeholder="" required />
         </div>
         <label class="col-lg-3 col-form-label mt-4"> Pincode:</label>
         <div class="col-lg-3 mt-4">
         <input type="text" class="form-control" name="industry_Pincode[]" maxlength="6" id="industry_Pincode`+c_id+`"  placeholder="" required />
         </div>
         </div>
         </div>
         <div class="col-lg-4">
         <input type="button" class="btn-danger btn" value="-" onclick="remove_row('r`+c_id+`')">
         <input type="button" class="btn btn-primary ml-2" value="+" onclick="addRow2();">
         </div>
         </div>`      
         );
      c_id++;
   }


   function submitDetails()
   {

   }

   function submitSchme()
   {

      var form = $("#addFrm");
      var formData = new FormData(form[0]);
         //alert("hi");

      $.ajax({
         url:  '<?php echo base_url();?>Applicant/submit_application_form',
         method:'POST',
         data: formData,
               //dataType: 'json',
         cache: false,
         contentType: false,
         processData: false,
         success: function (data) {

            const myArray = data.split("##");

            setTimeout(function(){ $('1##').html('').hide();}, 3000);
            if(myArray[0]==1){
             $('#addFrm')[0].reset();
             $('#msg_cont').show().html(myArray[1]);
             setTimeout(function(){ location.reload();}, 1000);     
          }

          if(myArray[0]==2){

             $('#msg_cont').show().html(myArray[1]);

          }


                  //alert(data);
                  //alert('Submission was successful.');
                  //alert(data);

       }
               // error: function (xhr, ajaxOptions, thrownError) {
               //    console.log(xhr.status);
               //       console.log(thrownError);
               //    }
    });




   }


   function remove_row(rowID)
   {
      $('#'+rowID).remove();
   }



   function remove_db_row(db_row_id)
   {
      var confirm = window.confirm("Are you sure want to delete this Industry from database?");
      if (confirm)
      {
            //alert(db_row_id);


         $.ajax({
            url: "<?php echo base_url('applicant/ajax_remove_industry') ?>",
            type: 'POST',
            data: {'id':db_row_id},
            success: function(data) {
                 //alert(data);
             const myArray = data.split("##");

                  //setTimeout(function(){ $('1##').html('').hide();}, 3000);
             if(myArray[0]==1){
                    //$('#addFrm')[0].reset();
                $('#msg_cont').show().html(myArray[1]);
                setTimeout(function(){ location.reload();}, 1000);     
             }

             if(myArray[0]==2){

                $('#msg_cont').show().html(myArray[1]);

             } 

             $('#'+db_row_id).remove();

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

       /*$("#addFrm input[name='Aadhar_No']").keydown(function (event) {
        //alert(event.keyCode);
        var addhar_no = $("#addFrm input[name='Aadhar_No']").val();
           // Allow only backspace and delete
           if (event.keyCode == 46 || event.keyCode == 8  || event.keyCode==116  || event.keyCode==9 || event.keyCode==37 || event.keyCode==39  ) {
               // let it happen, don't do anything
           }
           else {
               // Ensure that it is a number and stop the keypress
               if ((event.keyCode > 47 && event.keyCode < 58 ) || (event.keyCode > 94 && event.keyCode < 106 )) {
                $('.text-error').hide();
               }else{
                if(addhar_no.length!=12)
                {
                $('.Aadhar_No').show().html('Only numbers');
                setTimeout(function(){$('.Aadhar_No').hide()}, 1000);
                }
                event.preventDefault();
               }
           }
       });*/



  });

   function lfn_SetSubDivision(district_code)
   {
         //alert(district_id);
      $.ajax({
         url: "<?php echo base_url('user/ajax_get_subdivision') ?>",
         type: 'POST',
         data: {'district_code':district_code},
         success: function(data) {
                 //alert(data);
          $('#Sub_Division').html(data);
       }
    });

   }

   function lfn_SetBlock(Sub_Division)
   {
      $.ajax({
         url: "<?php echo base_url('user/ajax_get_block') ?>",
         type: 'POST',
         data: {'Sub_Division':Sub_Division},
         success: function(data) {
              //alert(data); return false;
          $('#Block').html(data);
       }
    });
   }

   function submitDetails()
   {
         //alert(12); return false;
      return true;
   }

</script>





