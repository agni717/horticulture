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
                                <th width="24">Sl. No.</th>
                                <th width="938">Document Description</th>
                                <th width="135" style="white-space: normal;">Whether Submitted</th>                                
                                <th width="185">Status</th>
                                <th width="342">Remarks</th>
                                <th width="100">Document</th>
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
                                 <td class="text-center">
                                    <!-- <button class="text-danger"><i class="fa fa-file-pdf-o"></i></button> -->
                                    <?php if($img1!='') { ?>
                                    <a href="<?php echo base_url().'uploads/documents_list/'.$row2->file_name?>"><i class="fa fa-file-pdf-o" aria-hidden="true" style="color:red; font-size:15px;"></i></a>
                                 <?php } else { ?>

                                 <?php } ?>
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
                                    
                                    <?php if($img5 !=''){ echo '<div class="text-success">Yes</div>';}else{echo '<div class="text-danger">No</div>';} ?>
                                 </td>
                                 <td><?php
                                    if($img5!='') { echo '<div class="text-success">Checked</div>';
                                    } else {
                                     echo '<div class="text-danger">Not checked</div>';
                                    }
                                    ?></td>
                                 <td><?php echo $district_remarks5; ?></td>
                                 <td class="text-center">
                                    <?php if($img5!='') { ?>
                                 <!-- <button class="text-danger" onclick="window.location.href='https://www.w3docs.com';"><i class="fa fa-file-pdf-o"></i></button> -->
                                 <!-- <a href="#"><i class="fa fa-file-pdf-o"></i></a> -->
                                 <a href="<?php echo base_url().'uploads/documents_list/'.$row5->file_name?>"><i class="fa fa-file-pdf-o" aria-hidden="true" style="color:red; font-size:15px;"></i></a>
                                 <?php } else { ?>

                                 <?php } ?>
                              </td>
                              </tr> 
                              <?php

                                    } // end of elseif
                                 } // end of foreach
                              }
                              ?>
                           
                              
                           </tbody>
                        </table>


                       
                        </form>

                        <div class="row">
                           <div class="col-lg-12">
						   <?php if(!empty($app_data)) 
                              {
                                 if($app_data->apply_for_second_installment==1) { ?>
                              <button type="submit" class="btn btn-info my-2" onclick="lfn_app_rej_rev(1)">Approve</button>
								<button type="submit" class="btn btn-danger my-2" onclick="lfn_app_rej_rev(2)">Reject</button>
								<button type="submit" class="btn btn-warning my-2" onclick="lfn_app_rej_rev(3)">Revert</button>
								<form id="frmAppRej" name="frmAppRej">
								  <input type="hidden" name="h_action" id="h_action" value="">
								  <input type="hidden" name="h_application_id" id="h_application_id" value="<?php echo $application_id?>">
								  <div class="remarks_container">
								  <div id="dist_apprv">
									<div class="row">
									  <div class="col-lg-4 mt-0">
										<h5 class="py-2 text-success">Subsidy claimed under WBFCIS: <?php echo $app_data->proj_subsity_claimed; ?></h5>
									  </div>
									  <div class="col-lg-4 mt-0">
										<h5 class="py-2 text-success">District Approval Amount: <?php echo $app_data->dist_approval_amount; ?></h5>
									  </div>
									  <div class="col-lg-4 mt-0">
										<h5 class="py-2 text-success">HQ Approval Amount: <?php echo $app_data->hq_approval_amount; ?></h5>
									  </div>
									  <div class="col-lg-4 mt-0">
										<h5 class="py-2 text-success">District Approval 1st Installment: <?php echo $app_data->update_project_cost_by_dist; ?></h5>
									  </div>
                                      <div class="col-lg-4 mt-0">
										<h5 class="py-2 text-success">HQ Approval 1st Installment: <?php echo $app_data->hq_project_amount; ?></h5>
									  </div>
									</div>
									<div class="form-group form-row">
									  <div class="col-lg-4">
										<label class="col-form-label" id="remarks_apprv_label">Approve Remarks:</label>
										<textarea class="form-control" name="app_remarks" id="app_remarks" rows="2"></textarea>
									  </div>
									  <div class="col-lg-4">
										<label class="col-form-label">Upload Document:</label>
										<div class="custom-file">
										  <input type="file" name="fileActionApp" id="fileActionApp" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" >
										  <label class="custom-file-label mb-0" for="inputGroupFile04"></label>
										</div>
									  </div>
									  <div class="col-lg-4">
                                      	<?php
										$restamount = ($app_data->hq_approval_amount - $app_data->hq_project_amount);
										if($restamount >=0){
											$dra = $restamount;
										}else{
											$dra = 0;
										}
										?>
										<label class="col-form-label" id="remarks_label">2nd installment approved by district:</label>
										<input type="text" class="form-control" name="dist_2nd_release_approval" id="dist_2nd_release_approval" value="<?php echo $dra ?>" />
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
                           <?php } else { ?>
                           <a class="btn btn-primary my-2 d-table ml-auto" href="<?php echo base_url('admin/district_dashboard')?>">Go to list</a>
                        <?php } } ?>
                                 </div>
                              </div>
                              
                              
                           </div>
                        </div>


                     </div>
                  </div>
		  
		  		<?php $this->load->view('admin/remark_history.php'); ?>
		  
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
      
	  $("#dist_apprv").show();
	  $("#dist_rejct_revt").hide();
	  cnt_status = "Approve";
   }
   if(act==2)
   {
      
	  $("#dist_apprv").hide();
	  $("#dist_rejct_revt").show();
	  $('#dist_rejct_revt #remarks_label').html('Reject Remarks:');
	  cnt_status = "NoApprove";
   }
   if(act==3)
   {
      
	  $("#dist_apprv").hide();
	  $("#dist_rejct_revt").show();
	  $('#dist_rejct_revt #remarks_label').html('Revert Remarks:');
	  cnt_status = "NoApprove";
   }

  }

   $('#btn_submit').on("click",function(event){
      var form = $("#frmAppRej");
	  var onlynumerics = /^[0-9]+$/;
      var formData = new FormData(form[0]);
      var remarks = $("#remarks").val();
	  var app_remarks = $("#app_remarks").val();
	  var dist_2nd_release_approval = $("#dist_2nd_release_approval").val();
      var error_flag = false;
      //alert('hhh');
      
	  if(cnt_status == "Approve"){
	  if(app_remarks.length==0){
         $("#app_remarks").focus();
         $('#ar_msg_cont').show().html('Remarks cannot be blank');
         setTimeout(function(){$('#ar_msg_cont').hide()}, 4000);
         error_flag = true;
         return false;
      }
	  if(dist_2nd_release_approval==""){
         $("#dist_2nd_release_approval").focus();
         $('#ar_msg_cont').show().html('2nd release amount cannot be blank');
         setTimeout(function(){$('#ar_msg_cont').hide()}, 4000);
         error_flag = true;
         return false;
      }
	  if(!dist_2nd_release_approval.match(onlynumerics)){
				 $("#dist_2nd_release_approval").focus();
				 $('#ar_msg_cont').show().html('2nd release amount should number only');
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
                url: '<?php echo base_url('admin/district_dashboard/submit_approve_second_installment_request_by_applicant') ?>',
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
                        window.location.href="<?php echo base_url('admin/district_dashboard')?>";
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

      $('.msg_cont2').delay(6000).fadeOut();
     
   });
</script>

