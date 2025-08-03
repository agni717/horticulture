<?php $this->load->view('common/header_hq.php'); ?>
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
               <div class="col-lg-10 grid-margin mx-auto mb-0">
                  <div class="card mb-0">
                     <div class="card-body">
                        <div class="form-sample">
                        <?php if(!empty($application_data)) { foreach($application_data as $row) { ?>
                           <div class="form-group row">
                              <div class="col-lg-12 applicant">
                                 <label class="col-form-label">Name of the Project : <?php echo $row->proj_name; ?></label>
                                 <label class="col-form-label">Products to be manufactured : <?php echo $row->proj_prod_manufacture; ?></label>                              
                                 <!--<label class="col-form-label">Details : <?php echo $row->proj_name; ?></label>-->
                                 <label class="col-form-label">Daag No. : <?php echo $row->proj_daag_no; ?></label>
                                 <label class="col-form-label">Katian No. : <?php echo $row->proj_khatian_no; ?></label>
                                 <label class="col-form-label">Mouza No. : <?php echo $row->proj_mouza_no; ?></label>
                                 <label class="col-form-label">J.L. No. : <?php echo $row->proj_jl_no; ?></label>
                                 <!--<label class="col-form-label">Details : <?php echo $row->proj_name; ?></label>-->
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
                                 <label class="col-form-label">Name of Bank : <?php echo $row->proj_bank_name; ?></label>
                                 <label class="col-form-label">Branch : <?php echo $row->proj_branch; ?></label>
                                 <label class="col-form-label">IFSC Code : <?php echo $row->proj_ifsc; ?></label>
                                 <label class="col-form-label">Account No : <?php echo $row->proj_acc_no; ?></label>
                                 <label class="col-form-label">PAN No : <?php echo $row->proj_pan_no; ?></label>
                                 <label class="col-form-label">Term loan sanction : <?php echo $row->proj_term_loan_from_bank; ?></label>
                              </div>
                           </div>
                           <?php } } ?>
                        </div>
                     </div>
                  </div>
               </div>
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
                                 <label class="col-form-label">Project cost update for 1st Installment  : <?php echo $row->update_project_cost_by_dist; ?></label>
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
                        <table class="table table-bordered">
                           <thead>
                              <tr>
                                <th width="24">Sl. No.</th>
                                <th width="938">Document Description</th>
                                <th width="135">Whether Submitted</th>                                
                                <th width="185">Status</th>
                                <th width="342">Remarks</th>
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
                                    
                                    $row2 = $this->Headquater_model->get_submitted_file($application_id,$doc_id);
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
                                 <td></td>
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
                                    $row5 = $this->Headquater_model->get_submitted_file($application_id,$doc_id);
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
                                 <td></td>
                                 <td><?php echo $district_remarks5; ?></td>
                              </tr> 
                              <?php

                                    } // end of elseif
                                 } // end of foreach
                              }
                              ?>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
    <?php $this->load->view('common/footer.php'); ?>
