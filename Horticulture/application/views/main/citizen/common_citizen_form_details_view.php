<?php $this->load->view('common/header_citizen.php'); ?>
<style>
  .required:after {
    content:" *";
    color: red;
  }
</style>
      <div class="page-body-wrapper">
         <div class="container-fluid">
         
            
     
            <div class="row">
               
               <div class="col-lg-10 grid-margin mx-auto mb-0">
                  <div class="form-sample">
                     <div class="card mb-3">
                        <div class="card-body">
                           <fieldset>
                              <legend>Personal Description</legend>
                              <div class="form-group row">
                                 <div class="col-lg-12 applicant">
									<?php if(!empty($app_data)) {  ?>
                                    <div class="row">
                                       <label class="col-form-label col-lg-4"><b>Name Of Applicant :</b> <?php echo $app_data->first_name; ?>&nbsp <?php echo $app_data->last_name; ?></label>
										<label class="col-form-label col-lg-4"><b>Mobile :</b> <?php echo $app_data->mobile; ?></label>
                                       <label class="col-form-label col-lg-4"><b>Mail Id :</b> <?php echo $app_data->email; ?></label>
                                       <label class="col-form-label col-lg-4"><b>District :</b> <?php echo $app_data->district_name; ?></label>
                                       <label class="col-form-label col-lg-4"><b>Sub-Division :</b> <?php echo $app_data->subdiv_name; ?></label>
                                       <label class="col-form-label col-lg-4"><b>Block :</b> <?php echo $app_data->block_name; ?></label>
                                       <label class="col-form-label col-lg-4"><b>Gram Panchayat :</b> <?php echo $app_data->panchayat_name; ?></label>
									   <label class="col-form-label col-lg-4"><b>Village/Town :</b> <?php echo $app_data->village; ?></label>
									   <label class="col-form-label col-lg-4"><b>Post Office :</b> <?php echo $app_data->post_office; ?></label>
									   <label class="col-form-label col-lg-4"><b>Pincode :</b> <?php echo $app_data->pincode; ?></label>
									 <!-- <label class="col-form-label">Adhar No : <?php // echo $row->aadhar_no; ?></label> -->
									   <label class="col-form-label col-lg-4"><b>Applicant Photo :</b> <a href="<?php echo base_url()?>uploads/applicant_photos/<?php echo $app_data->image?>" target="_blank" style="color:blue;" download>Download</a></label>
                                    </div>
									 <?php
                           }
                           ?>
                                 </div>
                              </div>
                           </fieldset>
                           
                        </div>
                     </div>
                     <!-- code for industry data -->
                     <div class="card mb-3">
                        <div class="card-body">
                           <fieldset>
                              <legend>Project Description</legend>
                           <?php 
                           if(!empty($industry_data))
                           {
                              $count=1;
                              foreach($industry_data as $industry){ 
                           ?>
                           <div class="form-group row mt-2">
                              <div class="col-lg-12 applicant">
                                 
                                 <h5 class="w-100 d-block mb-4 text-decoration-underline text-center">Existing Industry <?php echo $count;?></h5>
                                 <div class="row">
                                    <label class="col-form-label col-lg-4"><b>Existing Industry Name :</b> <?php echo $industry->industry_name; ?></label>
                                    <label class="col-form-label col-lg-4"><b>Existing Industry Location :</b> <?php echo $industry->industry_location; ?></label>
                                    <!-- <label class="col-form-label">Type of Product : <?php echo $industry->industry_product; ?></label>
                                    <label class="col-form-label">Upload Photo : <a href="<?php echo base_url()?>uploads/applicant_photos/<?php echo $row->image?>" target="_blank" style="color:blue;" download>>Download</a></label> -->
                                    <label class="col-form-label col-lg-4"><b>Product of Existing Industry :</b> <?php echo $industry->industry_product; ?> </label>
                                    <label class="col-form-label col-lg-4"><b>Address1 :</b> <?php echo $industry->industry_Address; ?></label>
                                    <label class="col-form-label col-lg-4"><b>District :</b> <?php echo $industry->ind_district_name; ?></label>
                                    <label class="col-form-label col-lg-4"><b>Sub-Division :</b> <?php echo $industry->ind_subdiv_name; ?></label>
                                    <label class="col-form-label col-lg-4"><b>Block :</b> <?php echo $industry->ind_block_name; ?></label>
                                    <label class="col-form-label col-lg-4"><b>Gram Panchayat :</b> <?php echo $industry->ind_panchayat_name; ?></label>
                                    <label class="col-form-label col-lg-4"><b>Police Station :</b> <?php echo $industry->industry_Police_Station; ?></label>
                                    <label class="col-form-label col-lg-4"><b>Pincode :</b> <?php echo $industry->industry_Pincode; ?></label>
                                 </div>
                              </div>
                           </div>
                           <?php $count++;
                              } //end of foreach
                           } 
                           ?>
                        </fieldset>
                        </div>
                     </div>
                  </div>
               </div>               
            </div>
            <div class="row">
				<?php if(!empty($app_data)) { ?>
               <div class="col-lg-10 grid-margin mx-auto mb-0">                   
                  <div class="form-sample">
                     <div class="card mb-3">
                        <div class="card-body">
                           <fieldset>
                              <legend>Project Description</legend>
                              <div class="form-group row">
                                 <div class="col-lg-12 applicant">
                                    <div class="row">
                                       <label class="col-form-label col-lg-4"><b>Name of the Project :</b> <?php echo $app_data->proj_name; ?></label>
                                       <label class="col-form-label col-lg-4"><b>Products to be manufactured :</b> <?php echo $app_data->proj_prod_manufacture; ?></label>
                                           
                                       <!--<label class="col-form-label">Details : <?php echo $app_data->proj_name; ?></label>-->
                                       <label class="col-form-label col-lg-4"><b>Daag No. :</b> <?php echo $app_data->proj_daag_no; ?></label>
                                       <label class="col-form-label col-lg-4"><b>Katian No. :</b> <?php echo $app_data->proj_khatian_no; ?></label>
                                       <label class="col-form-label col-lg-4"><b>Mouza No. :</b> <?php echo $app_data->proj_mouza_no; ?></label>
                                       <label class="col-form-label col-lg-4"><b>J.L. No. :</b> <?php echo $app_data->proj_jl_no; ?></label>
                                       <!--<label class="col-form-label">Details : <?php echo $app_data->proj_name; ?></label>-->
                                       <label class="col-form-label col-lg-4"><b>Land Type :</b> <?php echo $app_data->proj_land_type; ?></label>
                                       <label class="col-form-label col-lg-4"><b>Current Status :</b> <?php echo $app_data->proj_current_status; ?></label>
                                       <label class="col-form-label col-lg-4"><b>Proposed date of commencement commercial production :</b> <?php echo $app_data->proj_proposed_pro_date; ?></label>
                                       <label class="col-form-label col-lg-4"><b>Technology :</b> <?php echo $app_data->proj_technology; ?></label>
                                       <label class="col-form-label col-lg-4"><b>Capacity of the Plant :</b> <?php echo $app_data->proj_plant_capacity; ?></label>
                                       <label class="col-form-label col-lg-4"><b>Present Capacity :</b> <?php echo $app_data->proj_present_capacity; ?></label>
                                       <label class="col-form-label col-lg-4"><b>Proposed Capacity :</b> <?php echo $app_data->proj_proposed_capacity; ?></label>
                                    </div>
                                 </div>
                              </div>
                           </fieldset>
                        </div>
                     </div>
                     <div class="card mb-3">
                        <div class="card-body">
                           <fieldset>
                              <legend>Term loan received from Bank</legend>
                              <div class="form-group row">
                                 <div class="col-lg-12 applicant">
                                    <div class="row">
                                       <label class="col-form-label col-lg-4"><b>Name of Bank :</b> <?php echo $app_data->bank_name; ?></label>
                                       <label class="col-form-label col-lg-4"><b>Branch :</b> <?php echo $app_data->branch_name; ?></label>
                                       <label class="col-form-label col-lg-4"><b>IFSC Code :</b> <?php echo $app_data->ifsc; ?></label>
                                       <label class="col-form-label col-lg-4"><b>Account No :</b> <?php echo $app_data->proj_acc_no; ?></label>
                                       <label class="col-form-label col-lg-4"><b>PAN No :</b> <?php echo $app_data->proj_pan_no; ?></label>
                                       <label class="col-form-label col-lg-4"><b>Term loan sanction :</b> <?php echo $app_data->proj_term_loan_from_bank; ?></label>
                                    </div>
                                 </div>
                              </div>
                           </fieldset>
                        </div>
                     </div>
                  </div>
               </div>
				<?php }  ?>
            </div>         
            <div class="row">
               <div class="col-lg-10 grid-margin mt-5 mx-auto">
                  <h4 class="card-title">Machinery Specification & Project Cost</h4>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-10 grid-margin mx-auto mb-0">                  
                  <div class="form-sample">
                     <div class="card mb-3">
                        <div class="card-body">
                           
                           <?php 
                           if(!empty($pm_data))
                           {
                              $count=1;
                              foreach($pm_data as $row){ 
                           ?>
                           <div class="form-group row">
                              <div class="col-lg-12 applicant">
                                 <fieldset>
                                    <legend>Plant & Machinery Specification<?php echo $count;?></legend>
                                    <div class="row">
                                       <label class="col-form-label col-lg-4"><b>Machine Name :</b> <?php echo $row->pm_machine_name; ?></label>
                                       <label class="col-form-label col-lg-4"><b>Manufactirer Name :</b> <?php echo $row->pm_manufacturer_name ; ?></label>
                                       <label class="col-form-label col-lg-4"><b>Serial No. :</b> <?php echo $row->pm_serial_no; ?></label>
                                       <label class="col-form-label col-lg-4"><b>Model No. :</b> <?php echo $row->pm_model_no; ?></label>
                                       <label class="col-form-label col-lg-4"><b>Machine Type :</b> <?php echo $row->pm_machine_type; ?></label>
                                       <!-- <label class="col-form-label">Warenty : 2 yrs.</label>
                                        <label class="col-form-label">Unit : HP</label> -->
                                       <label class="col-form-label col-lg-4"><b>Cost :</b> <?php echo $row->pm_cost; ?></label>
                                       <label class="col-form-label col-lg-4"><b>Capacity :</b> <?php echo $row->pm_capacity; ?></label> 
                                    </div>
                                 </fieldset> 
                              </div>
                           </div> 
                           <?php
                           $count++;
                            }
                           }
                           ?>
                           
                        </div>
                     </div>
					  <?php if(!empty($app_data)) {  ?>
                     <div class="card mb-3">
                        <div class="card-body"> 
                           <fieldset>
                              <legend>Project Cost</legend>               
                              <div class="form-group row">
                                 
                                 <div class="col-lg-12 applicant">
                                    <div class="row">
                                       <label class="col-form-label col-lg-4"><b>Land & Buiding Cost :</b> <?php echo $app_data->proj_land_building_cost; ?></label>
                                       <label class="col-form-label col-lg-4"><b>Plant and Machineries Cost :</b> <?php echo $app_data->proj_plant_machinary_cost; ?></label>
                                       <label class="col-form-label col-lg-4"><b>Misc. Fixed Assets :</b> <?php echo $app_data->proj_misc_fixed_assets; ?></label>
                                       <label class="col-form-label col-lg-4"><b>Preli. & Pre-Operative Expenses :</b> <?php echo $app_data->proj_preli_preopearative_expenses; ?></label>
                                       <label class="col-form-label col-lg-4"><b>Contingencies etc :</b> <?php echo $app_data->proj_contingencies_etc; ?></label>
                                       <label class="col-form-label col-lg-4"><b>Working Capital Margin :</b> <?php echo $app_data->proj_working_capital_margin; ?></label>
                                       <label class="col-form-label col-lg-4"><b>Others :</b> <?php echo $app_data->proj_others; ?></label>
                                       <label class="col-form-label col-lg-4"><b>Total Project Cost :</b> <?php echo $app_data->proj_total_project_cost; ?></label>
                                    </div>
                                 </div>
                              </div>
                           </fieldset>
                        </div>
                     </div>
                     <div class="card mb-3">
                        <div class="card-body">
                           <div class="form-group row">
                              <div class="col-lg-12 applicant">
                                 <fieldset>
                                    <legend>Means of Finance</legend>
                                    <div class="row">
                                       <label class="col-form-label col-lg-4"><b>Promoters' Contribution :</b> <?php echo $app_data->proj_promoter_contribution; ?></label>
                                       <label class="col-form-label col-lg-4"><b>Term loan from bank / F.I. :</b> <?php echo $app_data->proj_term_loan_from_bank; ?></label>
                                       <label class="col-form-label col-lg-4"><b>Others :</b> <?php echo $app_data->proj_finance_others; ?></label>
                                       <label class="col-form-label col-lg-4"><b>Total Means of Finance :</b> <?php echo $app_data->proj_total_means_of_finance; ?></label>
                                    </div>
                                 </fieldset>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="card mb-3">
                        <div class="card-body">
                           <div class="form-group row">
                              <div class="col-lg-12 applicant">  
                                 <fieldset>
                                    <div class="row">
                                       <label class="col-form-label col-lg-4"><b>Working Capital :</b> <?php echo $app_data->proj_working_capital; ?></label>
                                       <label class="col-form-label col-lg-4"><b>Subsidy claimed under WBFCIS - 2021 :</b> <?php echo $app_data->proj_subsity_claimed; ?></label>
                                    </div>
                                 </fieldset>
                                 <fieldset class="mt-3">
                                    <legend>Proposed no of Employment Generated: Proposed no of Employment Generated (Indirect)</legend>
                                    <div class="row">
                                       <label class="col-form-label col-lg-4"><b>Male :</b> <?php echo $app_data->proj_indirect_male; ?></label>
                                       <label class="col-form-label col-lg-4"><b>Female :</b> <?php echo $app_data->proj_indirect_female; ?></label>
                                    </div>
                                 </fieldset>
                                 <fieldset class="mt-3">
                                    <legend>Proposed no of Employment Generated: Proposed no of Employment Generated (Direct)</legend>
                                    <div class="row">
                                       <label class="col-form-label col-lg-4"><b>Male :</b> <?php echo $app_data->proj_direct_male; ?></label>
                                       <label class="col-form-label col-lg-4"><b>Female :</b> <?php echo $app_data->proj_direct_female; ?></label>
                                    </div>
                                 </fieldset>
                              </div>
                           </div> 
                        </div>
                     </div>
					  <?php }  ?>
                  </div>
               </div>
            </div>
          
          
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
                                <th rowspan="2">Upload Document</th> 
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

                                    /* mandatory field set */
                                       $mandatoryDocIdArr = array(1, 2, 3, 8, 9, 10, 12, 13, 14);
                                       $mandatory_class = '';
                                       $docId = $row->doc_id;
                                       if(in_array($docId, $mandatoryDocIdArr)){
                                          $mandatory_class = 'class="required"';
                                       }
                                    /* mandatory field set end*/

                                    // code...
                                    if($parent_id ==0)
                                    {
                                       ?>
                                       <tr>
                                             <?php
                                                $img1 = $district_remarks1 = '';
                                                $img1_style = 'style="display:none"';
                                                
                                                foreach($document_upload_set as $up_docs){
                                                   if($row->doc_id == $up_docs->doc_id){
                                                      $img1 = $up_docs->file_name;
                                                      $district_remarks1 = $up_docs->district_remarks;
                                                      break;
                                                   }
                                                }
                                             ?>
                                          <td><?php echo $sl_no;?></td>
                                          <td <?php echo $mandatory_class; ?>><?php echo $doc_label?></td>
                                          <td>
                                             <?php
                                                if($img1!=''){
                                                   echo '<div class="text-success">Yes</div>';
                                                }else{
                                                   echo '<div class="text-danger">No</div>';
                                                }
                                             ?>
                                          </td>
                                             <td><?php
                                                if($district_remarks1!=''){ echo '<div class="text-success">Checked</div>';
                                                }else{
                                                echo '<div class="text-danger">Not checked</div>';
                                                }
                                                ?></td>
                                             <td><?php echo $district_remarks1; ?></td>
                                             <td class="text-center">
                                                <?php if($img1!='') { ?>
                                                <a href="<?php echo base_url().'uploads/documents_list/'.$img1; ?>"><i class="fa fa-file-pdf-o" aria-hidden="true" style="color:red; font-size:15px;"></i></a>
                                             <?php } ?>
                                             </td>
                                          </tr>
                                          <?php 
                                                $sl_no++;
                                                $img1 = $district_remarks1 = '';
                                    }
                                    elseif($parent_id>0)
                                    {
                                       ?>
                                       <tr>
                                          <?php

                                             $img5 = $district_remarks5 = '';
                                             $img5_style = "style='display:none'"; 
                                             foreach($document_upload_set as $up_docs2){
                                                if($row->doc_id == $up_docs2->doc_id){
                                                   $img5 = $up_docs2->file_name;
                                                   $district_remarks5 = $up_docs2->district_remarks;
                                                   break;
                                                }
                                             }
                                          ?>
                                          <?php if($doc_id==$parent_id){ ?>
                                             <td rowspan="<?php echo $col_span?>"><?php echo $sl_no;?></td>
                                          <?php } ?>
                                             <td <?php echo $mandatory_class; ?>><?php echo $doc_label;?></td>
                                          <td>
                                             <?php if($img5 !=''){ echo '<div class="text-success">Yes</div>';}
                                             else{echo '<div class="text-danger">No</div>';} ?>
                                          </td>
                                          <td>
                                          <?php
                                             if($district_remarks5!='') { echo '<div class="text-success">Checked</div>';
                                             } else {
                                             echo '<div class="text-danger">Not checked</div>';
                                             }
                                             ?>
                                          </td>
                                          <td><?php echo $district_remarks5; ?></td>
                                          <td class="text-center">
                                             <?php if($img5!='') { ?>
                                          <a href="<?php echo base_url().'uploads/documents_list/'.$img5; ?>"><i class="fa fa-file-pdf-o" aria-hidden="true" style="color:red; font-size:15px;"></i></a>
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
                        
                        <div class="row">
                           <div class="col-lg-12 text-right">
                              
							   <a class="btn btn-primary my-2" href="<?php echo base_url('userset/applicant_dashboard')?>">Go to Dashboard</a>
							   
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
    <?php $this->load->view('common/footer.php'); ?>
