<?php $this->load->view('common/header_hq'); ?>
<style type="text/css">
   .answer { display:none }
   .remarks_container { display:none }
</style>
      <div class="page-body-wrapper">
         <div class="container-fluid">
            
			 <?php $this->load->view('admin/application_data_common'); ?> 
          
            <div class="row">
               <div class="col-lg-10 grid-margin mt-5 mx-auto">
                  <h4 class="card-title">List of Documents</h4>
                  
               </div>
            </div>
           
            <div class="row">
               <div class="col-lg-10 grid-margin mx-auto">
                  <div class="card">
                     <div class="card-body">
                        
                        
                        <table class="table table-bordered">
                           <thead>
                              <tr>
                                <th width="36">Sl. No.</th>
                                <th width="1051">Document Description</th>
                                <th width="225">Whether Submitted</th>
                                 <th width="316">Verified</th>
                              </tr>
                           </thead>
                           <tbody>
                                 
                              <?php 
                              if(!empty($document_upload_master_data))
                              {
                                 $sl_no = 1;
                                 $col_span = 0;
                                 $temp_id = '';
                                 foreach ($document_upload_master_data as $row) 
                                 {
                                    $doc_id = $row->doc_id;
                                    $parent_id = $row->parent_id;
                                    $doc_label = $row->doc_label;
                                    $doc_file_name = $row->doc_file_name;
                                    
                                    /*if($doc_id==$parent_id)
                                    {
                                       $temp_id = $doc_id;
                                    }*/

                                    if($doc_id==5)
                                    {
                                       $col_span=3;
                                    }elseif($doc_id==17){
                                       $col_span=2;
                                    }elseif($doc_id==6){
                                       $sl_no=6;
                                    }elseif($doc_id==18){
                                       $sl_no=16;
                                    }


                                    // code...
                                    if($parent_id ==0)
                                    {
                              ?>
                              <tr>
                                 <?php
                                    $img1 = '';
                                    $district_remarks1 = '';
                                    $remarks1_style = "style='display:none'";
                                    
                                    $row2 = $this->admin_m->get_submitted_file($application_id,$doc_id);
                                    // echo "<pre>";
                                    // echo $this->db->last_query();
                                    if(!empty($row2))
                                    {
                                      $img1 = $row2->file_name;
                                      $district_remarks1 = $row2->district_remarks; 
                                     
                                       if($district_remarks1!='')
                                       {
                                          $remarks1_style = "style='display:block'";
                                       }
                                    }
                                       
                                    
                                    
                                 ?>
                                 <td><?php echo $sl_no;?></td>
                                 <td><?php echo $doc_label?><!-- Prescribed format application (Annexure-1) --></td>
                                 <td>
                                   <?php
                                    if($img1!=''){ echo 'Yes';
                                    }else{
                                     echo 'No';
                                    }
                                    ?>

                                 </td>
                                 <td>
                                    <div class="row"> 
                                    <div class="col-lg-2" >
                                    <fieldset class="question d-block">

                                      <!-- <input type="checkbox" id="chk<?php echo $sl_no?>" name="<?php echo $doc_id?>" value="1" <?php if($district_remarks1!=''){ echo 'checked';} ?> onclick="lfn_showRemarks(this.id,'<?php echo $doc_file_name?>')" /> -->
                                    </fieldset>
                                     </div>
                                     <div class="col-lg-9" >
                                    <fieldset class="answer"  id="<?php echo $doc_file_name?>" <?php echo $remarks1_style?>>
                                      <?php echo $district_remarks1; ?>
                                    </fieldset>
                                    </div>
                                 </div> 
                                 </td>
                                
                              </tr>
                              <?php 
                                    $sl_no++;
                                    $img1 = '';
                                    }
                                    elseif($parent_id>0)
                                    {
                              ?>
                              <tr>
                                 <?php
                                    $img5 = ''; 
                                    $district_remarks5 = ''; 
                                    $remarks5_style = "style='display:none'";
                                    $row5 = $this->admin_m->get_submitted_file($application_id,$doc_id);
                                    if(!empty($row5)){
                                       $img5 = $row5->file_name;
                                       $district_remarks5 = $row5->district_remarks; 
                                       
                                       if($district_remarks5!='')
                                       {
                                          $remarks5_style = "style='display:block'";
                                       }
                                       
                                    }
                                 ?>
                                 <?php if($doc_id==$parent_id){ ?><td rowspan="<?php echo $col_span?>"><?php echo $sl_no;?></td><?php } ?>
                                 <td><?php echo $doc_label;?></td>
                                 <td>
                                    
                                    <?php if($img5 !=''){ echo 'Yes';}else{echo 'No';} ?>
                                 </td>
                                 <td>
                                    <div class="row"> 
                                    <div class="col-lg-2" >
                                    <fieldset class="question d-block">
                             <!--  <input  type="checkbox" id="chk<?php echo $sl_no?>" name="<?php echo $doc_id?>" value="1" <?php if($district_remarks5!=''){ echo 'checked';} ?> onclick="lfn_showRemarks(this.id,'<?php echo $doc_file_name?>')" /> -->
                                    </fieldset>
                                     </div>
                                     <div class="col-lg-9" >
                                    <fieldset class="answer" id="<?php echo $doc_file_name?>" <?php echo $remarks5_style; ?>>
                                     <?php echo $district_remarks5; ?>
                                    </fieldset>
                                    </div>
                                 </div> 
                                 </td>
                              
                                 
                                  
                                 
                              </tr> 
                              <?php

                                    } // end of elseif
                                 } // end of foreach
                              }
                              ?>
                           
                              
                           </tbody>
                        </table>


                        <div class="row">
                           <div class="col-lg-12 text-right">
                              <!-- <a type="submit" class="btn btn-primary my-2" href="#">Save</a> -->
                              <!-- <button type="submit" class="btn btn-primary my-2" >Save</button> -->
                              <a class="btn btn-success btn-sm" data-toggle="modal" data-target="#paymentModal" id="<?php echo $application_id;?>" href="#" onclick="lfn_payment_submit(this.id);" role="button">Make Payment</a>
                           </div>
                        </div>
                        <div class="row">
                              <div class="col-lg-12 text-center text-success msg_cont2" >
                                 <?php
                                 if(!empty($this->session->flashdata('msg')))
                                 {
                                 echo $this->session->flashdata('msg');
                                 // echo '<script>
                                 // setTimeout(function(){window.location.href="'.base_url().'applicant/project";}, 4000);</script>';
                                 //redirect("applicant/project");
                                 }
                                 ?>
                              </div>
                           </div>      
                        </form>

                        <div class="row">
                           <div class="col-lg-12">
                             <!--  <button type="submit" class="btn btn-info my-2" onclick="lfn_app_rej_rev(1)">Approved</button>
                              <button type="submit" class="btn btn-danger my-2" onclick="lfn_app_rej_rev(2)">Rejected</button>
                              <button type="submit" class="btn btn-warning my-2" onclick="lfn_app_rej_rev(3)">Reverted</button> -->
                       <form id="frmAppRej" name="frmAppRej">
                                 <input type="hidden" name="h_action" id="h_action" value="">
                                 <input type="hidden" name="h_application_id" id="h_application_id" value="<?php echo $application_id?>">
                              <div class="remarks_container">
                                 <div class="form-group form-row">                                    
                                    <div class="col-lg-6">
                                       <label class="col-form-label" id="remarks_label">Approve Remarks:</label>
                                       <textarea class="form-control" name="remarks" id="remarks" rows="2"></textarea>
                                    </div>                                    
                           <div class="col-lg-6">
                             <label class="col-form-label">Upload Document:</label>
                             <div class="custom-file">
                               <input type="file" name="fileAction" id="fileAction" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" style="left: -23%;"> 
                               <label class="custom-file-label mb-0" for="inputGroupFile04"></label>  
                             </div>
                           </div>
                                    </div>
                                    <div class="form-group form-row">
                                       <div class="col-lg-12 text-center text-msg" id="ar_msg_cont">
                                          <!-- Message Area -->
                                       </div>
                                    </div>
                                    <div class="col-lg-12 text-right">
                                       <!-- <a type="submit" class="btn btn-primary my-2" href="#">Submit</a> -->
                                      <!--  <button type="button" id="btn_submit" class="btn btn-primary my-2" href="#">Submit</button> -->
                                      
                                    </div>
                                    </div>
                           </form>
                                 </div>
                              </div>
                              
                              
                           </div>
                        </div>


                     </div>
                  </div>
               </div>
            </div>
         
         </div>
      </div>
      <div class="modal fade" id="paymentModal" tabindex="-1" role="dialog" aria-labelledby="paymentModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <form method="post" name="frmPayment" id="frmPayment" enctype="multipart/form-data" />
         <input type="hidden" name="application_id" id="application_id" value="" />
         <div class="modal-header">
            <h2>Make Payment</h2>
         </div>
         <div class="modal-body">
            <form>
            <!-- <h3>Payment Gateway Integration</h3> -->
            <div class="form-group row" >
               <div class="col-lg-6">
                  <label>Bank Name :</label>
                  <input class="form-control" type="text" name="">
               </div>
               <div class="col-lg-6">
                  <label>IFSC Code :</label>
                  <input class="form-control" type="text" name="">
               </div>
            </div>
            <div class="form-group row mt-2" >
               <div class="col-lg-6">
                  <label>Cheque No :</label>
                  <input class="form-control" type="text" name="">
               </div>
               <div class="col-lg-6">
                  <label>1st installment amount :</label>
                  <input class="form-control" type="text" name="">
               </div>
            </div>
            <div class="form-group row mt-2" >
               <div class="col-lg-6">
                  <label>GO Generation of bank letter:</label>
                  <input class="form-control" type="file" name="">
               </div>
              
            </div>
         </form>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="btn_submit">Submit</button>
         </div>
      </div>
   </div>
</div>





   <?php $this->load->view('common/footer'); ?>

<script type="text/javascript">
  function lfn_showRemarks(cboxVal,inpID)
  {
   if($('#'+cboxVal).is(':checked'))
   {
      $('#'+inpID).show();
   }else{
      $('#'+inpID).hide();
      //$("#addFrm input[name='submit_type']").val('Submit_And_Forward');
   }
  }

  function lfn_chkRemDist()
  {
   // alert(1);
   // return false;
  }
  
  function lfn_app_rej_rev(act)
  {
   $('.remarks_container').show();
   $('#h_action').val(act);
   if(act==1)
   {
      $('#remarks_label').html('Approve Remarks:');
   }
   if(act==2)
   {
      $('#remarks_label').html('Reject Remarks:');
   }
   if(act==3)
   {
      $('#remarks_label').html('Revert Remarks:');
   }

  }

   $('#btn_submit').on("click",function(event){
      var form = $("#frmAppRej");
      var formData = new FormData(form[0]);
      var remarks = $("#remarks").val();
      var error_flag = false;
      //alert('hhh');
      if(remarks.length==0){
         $("#remarks").focus();
         $('#ar_msg_cont').show().html('Remarks cannot be blank');
         setTimeout(function(){$('#ar_msg_cont').hide()}, 4000);
         error_flag = true;
         return false;
      }
      if(error_flag == false){
         $.ajax({
                url: '<?php echo base_url('District/submit_approve_reject_revert') ?>',
                type: 'POST',
                data: formData, 
                contentType: false,
                cache: false,
                processData:false,
                //data: {'patient_entry_id':patient_entry_id,'flag_app_reject':flag_app_reject,'app_reject_remarks':app_reject_remarks},
                success: function(data) {
                  //alert(data); return false;
                  const myArray = data.split("##");
                  $('#ar_msg_cont').show().html(myArray[1]);
                  setTimeout(function(){ $('#ar_msg_cont').html('').hide();}, 2000);
                  if(myArray[0]!=4){
                    //$('#frmEdit')[0].reset();
                    setTimeout(function(){ 
                        //location.reload();
                        window.location.href="<?php echo base_url('district/dist_application_list')?>";
                     }, 1000);     
                  }
                  

                }
            });
      }
   });
   $(function(){
      //history.go(1); // disable the browser's back button
      //var Backlen=history.length;   
      //history.go(-Backlen);   
      //window.location.href=page url
      
      // $('#alert_msg, .text-error').delay(8000).fadeOut();

      $('.msg_cont2').delay(8000).fadeOut();
     
   });
</script>

