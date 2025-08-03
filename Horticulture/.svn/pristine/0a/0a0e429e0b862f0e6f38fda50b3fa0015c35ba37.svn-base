<?php $this->load->view('common/header_hq'); ?>
<style type="text/css">
   .answer { display:none }
   .remarks_container { display:none }
</style>
      <div class="page-body-wrapper">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-10 grid-margin mt-5 mx-auto">
                  <h4 class="card-title">Application Details</h4>

               </div>
            </div>
            <div class="row">
               <div class="col-lg-10 grid-margin mx-auto mb-0">
                  <div class="card mb-0">
                     <div class="card-body">
                        <div class="form-sample">
                           <?php if(!empty($registration_data)) { foreach($registration_data as $row) { ?>
                           <div class="form-group row">
                              <div class="col-lg-12 applicant">
                                 <label class="col-form-label">Name Of Applicant : <?php echo $row->first_name; ?>&nbsp <?php echo $row->last_name; ?></label>
                                 <label class="col-form-label">Middle Name : <?php echo $row->middle_name; ?></label>
								 <label class="col-form-label">Mobile No : <?php echo $row->mobile; ?></label>
                                 <label class="col-form-label">Mail Id : <?php echo $row->email; ?></label>
                                 <label class="col-form-label">District : <?php echo $row->district_name; ?></label>
                                 <label class="col-form-label">Sub-Division : <?php echo $row->subdiv_name; ?></label>
                                 <label class="col-form-label">Block : <?php echo $row->block_name; ?></label>
								 <label class="col-form-label">Gram Panchayat : <?php echo $row->panchayat_name; ?></label>
                                  <label class="col-form-label">Village/Town : <?php echo $row->village; ?></label>
                                 <label class="col-form-label">Post Office : <?php echo $row->post_office; ?></label>
                                 <label class="col-form-label">Pincode : <?php echo $row->pincode; ?></label>
                                 <!-- <label class="col-form-label">Adhar No : <?php // echo $row->aadhar_no; ?></label> -->
                                 <label class="col-form-label">Applicant Photo : <a href="<?php echo base_url()?>uploads/applicant_photos/<?php echo $row->image?>" target="_blank" style="color:blue;" download>Download</a></label>                                  
                              </div>
                           </div>
                           <?php
                        }
                     }
                     ?>

                           <!-- code for industry data -->
                           <?php 
                           if(!empty($industry_master_data))
                           {
                              $count=1;
                              foreach($industry_master_data as $industry){ 
                           ?>
                           <div class="form-group row mt-2">
                              <div class="col-lg-12 applicant">
                                 <h5 class="w-100 d-block mb-4 text-decoration-underline text-center">Existing Industry <?php echo $count;?></h5>
                                 <label class="col-form-label">Existing Industry Name : <?php echo $industry->industry_name; ?></label>
                                 <label class="col-form-label">Existing Industry Location : <?php echo $industry->industry_location; ?></label>
                                 <!-- <label class="col-form-label">Type of Product : <?php echo $industry->industry_product; ?></label>
                                 <label class="col-form-label">Upload Photo : <a href="<?php echo base_url()?>uploads/applicant_photos/<?php echo $row->image?>" target="_blank" style="color:blue;" download>>Download</a></label> -->
                                 <label class="col-form-label">Product of Existing Industry : <?php echo $industry->industry_product; ?> </label>
                                 <label class="col-form-label">Address1 : <?php echo $industry->industry_Address; ?></label>
                                 <label class="col-form-label">Sub-Division : <?php echo $industry->industry_Sub_Division; ?></label>
                                 <label class="col-form-label">Block : <?php echo $industry->industry_Block; ?></label>
                                 <label class="col-form-label">Police Station : <?php echo $industry->industry_Police_Station; ?></label>
                                 <label class="col-form-label">Pincode : <?php echo $industry->industry_Pincode; ?></label>
                              </div>
                              </div>
                           <?php $count++;
                              } //end of foreach
                           } 
                           ?>

                           
                           
                        </div>
                     </div>
                  </div>
               </div>               
            </div>
            <div class="row">
               <div class="col-lg-10 grid-margin mt-5 mx-auto">
                  <h4 class="card-title">Project Description</h4>
               </div>
            </div>
            <div class="row">
			<?php if(!empty($application_data)) { foreach($application_data as $row) { ?>
               <div class="col-lg-10 grid-margin mx-auto mb-0">
                  <div class="card mb-0">
                     <div class="card-body">
                        <div class="form-sample">
                           <div class="form-group row">
                              <div class="col-lg-12 applicant">
                                 <label class="col-form-label">Name of the Project : <?php echo $row->proj_name; ?></label>
                                 <label class="col-form-label">Products to be manufactured : <?php echo $row->proj_prod_manufacture; ?></label>
                                 <!--<label class="col-form-label">Details : <?php //echo $row->proj_name; ?></label>-->
                                 <label class="col-form-label">Daag No. : <?php echo $row->proj_daag_no; ?></label>
                                 <label class="col-form-label">Katian No. : <?php echo $row->proj_khatian_no; ?></label>
                                 <label class="col-form-label">Mouza No. : <?php echo $row->proj_mouza_no; ?></label>
                                 <label class="col-form-label">J.L. No. : <?php echo $row->proj_jl_no; ?></label>
                                 <!--<label class="col-form-label">Details : <?php //echo $row->proj_name; ?></label>-->
                                 <label class="col-form-label">Land Type : <?php echo $row->proj_land_type; ?></label>
                                 <label class="col-form-label">Current Status : <?php echo $row->proj_current_status; ?></label>
                                 <label class="col-form-label">Proposed date of commencement commercial production : <?php echo $row->proj_proposed_pro_date; ?></label>
                                 <label class="col-form-label">Technology : <?php echo $row->proj_technology; ?></label>
                                 <label class="col-form-label">Capacity of the Plant : <?php echo $row->proj_plant_capacity; ?></label>
                                 <label class="col-form-label">Present Capacity : <?php echo $row->proj_present_capacity; ?></label>
                                 <label class="col-form-label">Proposed Capacity : <?php echo $row->proj_proposed_capacity; ?></label>
                              </div>
                           </div>
                           <div class="form-group row">
                              <div class="col-lg-12 applicant">
                                 <h5 class="w-100 d-block mb-4 text-decoration-underline text-center">Term loan received from Bank</h5>
                                 <label class="col-form-label">Name of Bank : <?php echo $row->bank_name; ?></label>
                                 <label class="col-form-label">Branch : <?php echo $row->branch_name; ?></label>
                                 <label class="col-form-label">IFSC Code : <?php echo $row->ifsc; ?></label>
                                 <label class="col-form-label">Account No : <?php echo $row->proj_acc_no; ?></label>
                                 <label class="col-form-label">PAN No : <?php echo $row->proj_pan_no; ?></label>
                                 <label class="col-form-label">Term loan sanction : <a href="<?php echo base_url()?>uploads/document_details/<?php echo $row->proj_document?>" target="_blank" style="color:blue;" download>Download</a></label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            
			<?php
			}
			}
			?>
            </div>         
            <div class="row">
               <div class="col-lg-10 grid-margin mt-5 mx-auto">
                  <h4 class="card-title">Machinery Specification & Project Cost</h4>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-10 grid-margin mx-auto mb-0">
                  <div class="card mb-0">
                     <div class="card-body">
                        <div class="form-sample">
                           <?php 
                           if(!empty($plant_machinary))
                           {
                              $count=1;
                              foreach($plant_machinary as $row){ 
                           ?>
                           <div class="form-group row">
                              <div class="col-lg-12 applicant">
                                 <h5 class="w-100 d-block mb-4 text-decoration-underline text-center">Plant & Machinery Specification<?php echo $count;?></h5>
                                 <label class="col-form-label">Machine Name : <?php echo $row->machine_name; ?></label>
                                 <label class="col-form-label">Manufactirer Name : <?php echo $row->manufacturer_name ; ?></label>
                                 <label class="col-form-label">Serial No. : <?php echo $row->serial_no; ?></label>
                                 <label class="col-form-label">Model No. : <?php echo $row->model_no; ?></label>
                                 <label class="col-form-label">Machine Type : <?php echo $row->machine_type; ?></label>
                                 <!-- <label class="col-form-label">Warenty : 2 yrs.</label>
                                  <label class="col-form-label">Unit : HP</label> -->
                                 <label class="col-form-label">Cost : <?php echo $row->cost; ?></label>
                                 <label class="col-form-label">Capacity :<?php echo $row->capacity; ?></label>  
                              </div>
                           </div> 
                           <?php
                           $count++;
                            }
                           }
                           ?>              
                           <div class="form-group row">
                              <?php if(!empty($application_data)) { foreach($application_data as $row) { ?>
                              <div class="col-lg-12 applicant">
                                 <h5 class="w-100 d-block mb-4 text-decoration-underline text-center">Project Cost</h5>
                                 <label class="col-form-label">Land & Buiding Cost : <?php echo $row->proj_land_building_cost; ?></label>
                                 <label class="col-form-label">Plant and Machineries Cost : <?php echo $row->proj_plant_machinary_cost; ?></label>
                                 <label class="col-form-label">Misc. Fixed Assets : <?php echo $row->proj_misc_fixed_assets; ?></label>
                                 <label class="col-form-label">Preli. & Pre-Operative Expenses : <?php echo $row->proj_preli_preopearative_expenses; ?></label>
                                 <label class="col-form-label">Contingencies etc : <?php echo $row->proj_contingencies_etc; ?></label>
                                 <label class="col-form-label">Working Capital Margin : <?php echo $row->proj_working_capital_margin; ?></label>
                                 <label class="col-form-label">Others : <?php echo $row->proj_others; ?></label>
                                 <label class="col-form-label">Total Project Cost : <?php echo $row->proj_total_project_cost; ?></label>
                              </div>
                           </div>

                           <div class="form-group row">
                              <div class="col-lg-12 applicant">
                                 <h5 class="w-100 d-block mb-4 text-decoration-underline text-center">Means of Finance</h5>
                                 <label class="col-form-label">Promoters' Contribution : <?php echo $row->proj_promoter_contribution; ?></label>
                                 <label class="col-form-label">Term loan from bank / F.I. : <?php echo $row->proj_term_loan_from_bank; ?></label>
                                 <label class="col-form-label">Others : <?php echo $row->proj_finance_others; ?></label>
                                 <label class="col-form-label">Total Means of Finance : <?php echo $row->proj_total_means_of_finance; ?></label>
                              </div>
                           </div>
                           <div class="form-group row">
                              <div class="col-lg-12 applicant">                                 
                                 <label class="col-form-label">Working Capital : <?php echo $row->proj_working_capital; ?></label>
                                 <label class="col-form-label">Subsidy claimed under WBFCIS - 2021 : <?php echo $row->proj_subsity_claimed; ?></label>
                                 <h5 class="w-100 d-block mt-2 mb-3 text-decoration-underline text-center">Proposed no of Employment Generated: Proposed no of Employment Generated (Indirect)</h5>
                                 <label class="col-form-label">Male : <?php echo $row->proj_indirect_male; ?></label>
                                 <label class="col-form-label">Female : <?php echo $row->proj_indirect_female; ?></label>
                                 <h5 class="w-100 d-block mt-2 mb-3 text-decoration-underline text-center">Proposed no of Employment Generated: Proposed no of Employment Generated (Direct)</h5>
                                 <label class="col-form-label">Male : <?php echo $row->proj_direct_male; ?></label>
                                 <label class="col-form-label">Female : <?php echo $row->proj_direct_female; ?></label>
                              </div>
                           </div>                           
                        </div>
                     </div>
                  </div>
               </div>
            </div>
          <?php
                        }
                     }
                     ?>
          
            <div class="row">
               <div class="col-lg-12 grid-margin mt-5 mx-auto">
                  <h4 class="card-title">List of Documents</h4>
                  
               </div>
            </div>
           
            <div class="row">
               <div class="col-lg-12 grid-margin mx-auto">
                  <div class="card">
                     <div class="card-body">
                        <?php echo form_open('district/citizen_form_details/'.$application_id,array('name'=>'frmDist','id'=>'frmDist','method'=>'post','onsubmit'=>'return lfn_chkRemDist();')); ?>
                        <input type="hidden" name="application_id" value="<?php echo $application_id;?>" />
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
                                    
                                    $row2 = $this->District_model->get_submitted_file($application_id,$doc_id);
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

                                      <input type="checkbox" id="chk<?php echo $sl_no?>" name="<?php echo $doc_id?>" value="1" <?php if($district_remarks1!=''){ echo 'checked';} ?> onclick="lfn_showRemarks(this.id,'<?php echo $doc_file_name?>')" />
                                    </fieldset>
                                     </div>
                                     <div class="col-lg-9" >
                                    <fieldset class="answer"  id="<?php echo $doc_file_name?>" <?php echo $remarks1_style?>>
                                      <input type="text" class="form-control" name="<?php echo $doc_file_name?>" value="<?php echo $district_remarks1; ?>" placeholder="Remarks" />
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
                                    $row5 = $this->District_model->get_submitted_file($application_id,$doc_id);
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
                              <input  type="checkbox" id="chk<?php echo $sl_no?>" name="<?php echo $doc_id?>" value="1" <?php if($district_remarks5!=''){ echo 'checked';} ?> onclick="lfn_showRemarks(this.id,'<?php echo $doc_file_name?>')" />
                                    </fieldset>
                                     </div>
                                     <div class="col-lg-9" >
                                    <fieldset class="answer" id="<?php echo $doc_file_name?>" <?php echo $remarks5_style; ?>>
                                      <input type="text" class="form-control" name="<?php echo $doc_file_name?>" value="<?php echo $district_remarks5; ?>"  placeholder="Remarks" />
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
                              <a class="btn btn-primary my-2" href="<?php echo base_url('district/dist_rejected_application_list')?>">Go to list</a>
                              <!-- <button type="submit" class="btn btn-primary my-2" >Save</button> -->
                           </div>
                        </div>
                        </form>

                        <div class="row">
                           <div class="col-lg-12">
                              <!-- <button type="submit" class="btn btn-info my-2" onclick="lfn_app_rej_rev(1)">Approved</button>
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
                                       <button type="button" id="btn_submit" class="btn btn-primary my-2" href="#">Submit</button>
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
                  if(myArray[0]==1){
                    //$('#frmEdit')[0].reset();
                    setTimeout(function(){ location.reload();}, 1000);     
                  }

                }
            });
      }
   });
</script>

