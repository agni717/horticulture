<?php $this->load->view('common/header_hq'); ?>
<style type="text/css">
   .answer { display:none }
   .remarks_container { display:none }
	.dropdown-menu{
		padding:0.5rem !important;
	}
	.dropdown-menu thead{
		background:#666 !important;
		
	}
	.dropdown-menu thead th{
		padding:.4rem !important;
		
	}
	.dropdown-menu thead .datepicker-switch{
		text-align: center;
	}
</style>
<style type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"></style>
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
                                <th width="5%">Sl. No.</th>
                                <th width="55%">Document Description</th>
                                <th width="10%">Whether Submitted</th>
                                 <th width="10%">Verified</th>
								  <th width="20%">Remarks</th>
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
                                    if($img1!=''){ echo '<div class="text-success">Yes</div>';
                                    }else{
                                     echo '<div class="text-danger">No</div>';
                                    }
                                    ?>

                                 </td>
                                 <td><?php
                                    if($img1!=''){ echo '<div class="text-success">Checked</div>';
                                    }else{
                                     echo '<div class="text-danger">Not checked</div>';
                                    }
                                    ?></td>
                                 <td><?php echo $district_remarks1; ?></td>
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
                                    
                                    <?php if($img5 !=''){ echo '<div class="text-success">Yes</div>';}else{echo '<div class="text-danger">No</div>';} ?>
                                 </td>
                                 <td><?php
                                    if($img5!=''){ echo '<div class="text-success">Checked</div>';
                                    }else{
                                     echo '<div class="text-danger">Not checked</div>';
                                    }
                                    ?></td>
                                 <td><?php echo $district_remarks5; ?></td>
                              </tr> 
                              <?php

                                    } // end of elseif
                                 } // end of foreach
                              }
                              ?>
                           </tbody>
                        </table>


       
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
                        <?php if($admin_utype == 1){  ?>
                        <button type="submit" class="btn btn-info my-2" onclick="lfn_app_rej_rev(1)">Approve</button>
								<button type="submit" class="btn btn-danger my-2" onclick="lfn_app_rej_rev(2)">Reject</button>
								<button type="submit" class="btn btn-warning my-2" onclick="lfn_app_rej_rev(3)">Revert</button>
								<form id="frmAppRej" name="frmAppRej">
								  <input type="hidden" name="h_action" id="h_action" value="">
								  <input type="hidden" name="h_application_id" id="h_application_id" value="<?php echo $application_id?>">
								  <div class="remarks_container">
									<div class="form-group form-row" id="dist_apprv">
									<div class="row">
									  <div class="col-lg-4 mt-0">
										<h5 class="py-2 text-success">Subsidy claimed under WBFCIS: <?php echo $app_data->proj_subsity_claimed; ?></h5>
									  </div>
									  <div class="col-lg-4 mt-0">
										<h5 class="py-2 text-success">District Approval Amount: <?php echo $app_data->dist_approval_amount; ?></h5>
									  </div>
									  <div class="col-lg-4 mt-0">
										<h5 class="py-2 text-success">HQ Approval Amount: <?php echo $app_data->hq_approval_amount; ?></h5S>
									  </div>
									  <div class="col-lg-4 mt-0">
										<h5 class="py-2 text-success">District Approval 1st Installment: <?php echo $app_data->update_project_cost_by_dist; ?></h5S>
									  </div>
									</div>
									<div class="form-group form-row">
									  <div class="col-lg-4">
										<label class="col-form-label" id="remarks_label">TV No:</label>
										<input type="text" class="form-control" name="first_release_tv_no" id="first_release_tv_no" />
									  </div>
									  <div class="col-lg-4">
										<label class="col-form-label" id="remarks_label">Token No:</label>
										<input type="text" class="form-control" name="first_release_token_no" id="first_release_token_no" />
									  </div>
									  <div class="col-lg-4">
										<label class="col-form-label" id="remarks_label">Date:</label>
										
										  <div class="input-group date date-picker">
											<input type="text" class="form-control" name="first_release_token_date" id="first_release_token_date"/>
											<span class="input-group-append">
											  <span class="input-group-text bg-light d-block">
												<i class="fa fa-calendar"></i>
											  </span>
											</span>
										  </div>
										  
									  </div>
									  <div class="col-lg-4">
										<label class="col-form-label" id="remarks_label">RBI Transaction No:</label>
										<input type="text" class="form-control" name="first_release_rbi_transaction" id="first_release_rbi_transaction" />
									  </div>
									  <div class="col-lg-4">
										<label class="col-form-label" id="remarks_label">Date:</label>

										  <div class="input-group date date-picker">
											<input type="text" class="form-control" name="first_release_rbi_trans_date" id="first_release_rbi_trans_date"/>
											<span class="input-group-append">
											  <span class="input-group-text bg-light d-block">
												<i class="fa fa-calendar"></i>
											  </span>
											</span>
										  </div>
										  
									  </div>
									  <div class="col-lg-4">
										<label class="col-form-label" id="remarks_apprv_label">Approve Remarks:</label>
										<textarea class="form-control" name="app_remarks" id="app_remarks" rows="2"></textarea>
									  </div>
									  <div class="col-lg-4 mt-0">
										<label class="col-form-label">Government Order:</label>
										<div class="custom-file">
										  <input type="file" name="fileAction" id="fileAction" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" >
										  <label class="custom-file-label mb-0" for="inputGroupFile04"></label>
										</div>
									  </div>
									  <div class="col-lg-4">
										<label class="col-form-label" id="remarks_label">1st installment approved by HQ:</label>
										<input type="text" class="form-control" name="hq_project_amount" id="hq_project_amount"  />
									  </div>                     
									</div>
									</div>
									<div class="form-group form-row" id="dist_rejct_revt">
									  <div class="col-lg-6">
										<label class="col-form-label" id="remarks_label">Reject Remarks:</label>
										<textarea class="form-control" name="remarks" id="remarks" rows="2"></textarea>
									  </div>
									  <div class="col-lg-6">
										<label class="col-form-label">Upload Document:</label>
										<div class="custom-file">
										  <input type="file" name="fileAction" id="fileAction" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
										  <label class="custom-file-label mb-0" for="inputGroupFile04"></label>
										</div>
									  </div>
									</div>
									<div class="form-group form-row">
									  <div class="col-lg-12 text-center text-msg" id="ar_msg_cont"> 
										  
									  </div>
									</div>
									<div class="col-lg-12 text-right"> 
									   <!--<a type="submit" class="btn btn-primary my-2" href="#">Submit</a>--> 
									  <button type="button" id="btn_submit" class="btn btn-primary my-2" href="#">Submit</button>
									</div>
								  </div>
								</form>
					  			</div>
                              </div>
                              <?php if(isset($msg)){?>
								 <div class="row">
								   <div class="col-lg-10 grid-margin mx-auto" style="color: firebrick" id="ar_msg_cont">
									   <?php echo $msg; ?>
									 </div>
								 </div>
								 <?php }?>
                             <?php } ?> 
                              
                              
                           </div>
                        </div>


                     </div>
                  </div>
		  			
		  		<?php $this->load->view('admin/remark_history'); ?>
		  
               </div>
            </div>
         
         </div>
      </div>
      





   <?php $this->load->view('common/footer'); ?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

<script type="text/javascript">
 var cnt_status = "";
 $(function(){
  $('.date-picker').datepicker({
   format: 'dd-mm-yyyy' 
  });
});
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
      
	  $("#dist_apprv").show();
	  $("#dist_rejct_revt").hide();
	  cnt_status = "Approve";
	   $("#btn_submit").html("Made Payment");
	   
   }
   if(act==2)
   {
      
	  $("#dist_apprv").hide();
	  $("#dist_rejct_revt").show();
	  $('#dist_rejct_revt #remarks_label').html('Reject Remarks:');
	  cnt_status = "NoApprove";
	   $("#btn_submit").html("Submit");
   }
   if(act==3)
   {
      
	  $("#dist_apprv").hide();
	  $("#dist_rejct_revt").show();
	  $('#dist_rejct_revt #remarks_label').html('Revert Remarks:');
	  cnt_status = "NoApprove";
	   $("#btn_submit").html("Submit");
   }

  }

   $('#btn_submit').on("click",function(event){
      var form = $("#frmAppRej");
	  var onlynumerics = /^[0-9]+$/;
      var formData = new FormData(form[0]);
	  var first_release_tv_no = $('#first_release_tv_no').val().trim();
      var first_release_token_no = $('#first_release_token_no').val().trim();
	  var first_release_token_date = $('#first_release_token_date').val().trim();
	  var first_release_rbi_transaction = $('#first_release_rbi_transaction').val().trim();
	  var first_release_rbi_trans_date = $('#first_release_rbi_trans_date').val().trim();
	  var hq_project_amount = $('#hq_project_amount').val().trim();
      var remarks = $("#remarks").val();
	  var app_remarks = $("#app_remarks").val();
      var error_flag = false;
      //alert('hhh');
	  if(cnt_status == "Approve"){
		  if(first_release_tv_no.length==0){
			 $("#first_release_tv_no").focus();
			 $('#ar_msg_cont').show().html('TV No cannot be blank');
			 setTimeout(function(){$('#ar_msg_cont').hide()}, 4000);
			 error_flag = true;
			 return false;
		  }
		  if(first_release_token_no.length==0){
			 $("#first_release_token_no").focus();
			 $('#ar_msg_cont').show().html('Token No cannot be blank');
			 setTimeout(function(){$('#ar_msg_cont').hide()}, 4000);
			 error_flag = true;
			 return false;
		  }
		  if(first_release_token_date.length==0){
			 $("#first_release_token_date").focus();
			 $('#ar_msg_cont').show().html('Token date cannot be blank');
			 setTimeout(function(){$('#ar_msg_cont').hide()}, 4000);
			 error_flag = true;
			 return false;
		  }
		  if(first_release_rbi_transaction.length==0){
			 $("#first_release_rbi_transaction").focus();
			 $('#ar_msg_cont').show().html('RBI Transaction cannot be blank');
			 setTimeout(function(){$('#ar_msg_cont').hide()}, 4000);
			 error_flag = true;
			 return false;
		  }
		  if(first_release_rbi_trans_date.length==0){
			 $("#first_release_rbi_trans_date").focus();
			 $('#ar_msg_cont').show().html('Transaction date cannot be blank');
			 setTimeout(function(){$('#ar_msg_cont').hide()}, 4000);
			 error_flag = true;
			 return false;
		  }
		  if(app_remarks.length==0){
			 $("#app_remarks").focus();
			 $('#ar_msg_cont').show().html('Remarks cannot be blank');
			 setTimeout(function(){$('#ar_msg_cont').hide()}, 4000);
			 error_flag = true;
			 return false;
		  }
		  if(hq_project_amount == ""){
		   	 $("#hq_project_amount").focus();
			 $('#ar_msg_cont').show().html('HQ release approval amount cannot be blank');
			 setTimeout(function(){$('#ar_msg_cont').hide()}, 4000);
			 error_flag = true;
			 return false;
		  }
		  if(!hq_project_amount.match(onlynumerics)){
				 $("#hq_project_amount").focus();
				 $('#ar_msg_cont').show().html('HQ release approval amount should number only');
				 setTimeout(function(){$('#ar_msg_cont').hide()}, 4000);
				 error_flag = true;
				 return false;
		  }
	  }else{
	  
		  if(remarks.length==0){
			 $("#remarks").focus();
			 $('#ar_msg_cont').show().html('Remarks cannot be blank');
			 setTimeout(function(){$('#ar_msg_cont').hide()}, 4000);
			 error_flag = true;
			 return false;
		  }
	  }
      if(error_flag == false){
         $.ajax({
                url: '<?php echo base_url('admin/hq_dashboard/ajx_submit_1st_installment_release_by_hq') ?>',
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
                        window.location.href="<?php echo base_url('admin/hq_dashboard')?>";
                     }, 1000);     
                  }
                  

                }
            });
      }
   });
	
	
</script>

