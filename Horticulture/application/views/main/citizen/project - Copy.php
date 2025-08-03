<?php $this->load->view('common/header_citizen'); ?> 
<style type="text/css">
   .text-error{color: #f05555;}
   #file-error{color: #f05555;}
</style> 

      <div class="page-body-wrapper">
        
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-11 grid-margin mt-5 mx-auto">
                  <h4 class="card-title">Project Description</h4>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-11 grid-margin mx-auto">
                  <div class="card">
                     <?php //echo validation_errors();?>
                     <div class="row">
                              <div class="col-lg-12 text-center text-success msg_cont2" >
                                 <?php
                                 if(!empty($this->session->flashdata('msg1')))
                                 {
                                 echo $this->session->flashdata('msg1');
                                 /*echo '<script>
                                 setTimeout(function(){window.location.href="'.base_url().'applicant/project_cost";}, 4000);</script>';*/
                                 //redirect("applicant/project");
                                 }
                                 ?>
                              </div>
                           </div>
                     <div class="card-body">
                        <?php 
                        //echo validation_errors(); 

                        echo form_open_multipart('applicant/project',array('onsubmit'=>'return submitProject();','id'=>"addFrm")); 
                        $sch_id =  $this->session->userdata('user_data')['sch_id']; 
                        $user_id =  $this->session->userdata('user_data')['user_id']; 

                        ?>
<!--                         <form class="form-sample" id="frm_project" name="frm_project" enctype="multipart/form-data"  method="POST">
 -->                           <input type="hidden" name="user_id" value="<?php echo $user_id;?>">
                           <input type="hidden" name="sch_id" value="<?php echo $sch_id;?>">
                           <input type="hidden" name="application_id" value="">
                           <div class="form-group">
                              <div class="form-row">
                                 <label class="col-lg-3 col-form-label">Name of the Project:</label>
                                 <div class="col-lg-3">
                                    <?php
                                    $proj_name ='';
                                    if(!empty($project_data) ){
                                    if($project_data->proj_name !=''){
                                       $proj_name = $project_data->proj_name;
                                    }
                                    if(set_value('proj_name') !=''){
                                       $proj_name = set_value('proj_name');
                                    }
                                     ?>
                                     <?php } ?>
                                    <input type="text" class="form-control" name="proj_name" id="proj_name" value="<?=$proj_name;?>" />
                                    <small class="text-error"><?php echo form_error('proj_name');?></small>
                                    
                                 </div>
                                 <label class="col-lg-3 col-form-label">Products to be manufactured:</label>
                                 <div class="col-lg-3">
                                     <?php
                                    $proj_prod_manufacture ='';
                                    if(!empty($project_data)){
                                    if($project_data->proj_prod_manufacture !=''){
                                       $proj_prod_manufacture = $project_data->proj_prod_manufacture;
                                    }
                                    if(set_value('proj_prod_manufacture') !=''){
                                       $proj_prod_manufacture = set_value('proj_prod_manufacture');
                                    }
                                     ?>
                                      <?php } ?>
                                    <input type="text" class="form-control" name="proj_prod_manufacture" id="proj_prod_manufacture" value="<?=$proj_prod_manufacture;?>" />

                                    <small class="text-error"><?php echo form_error('proj_prod_manufacture');?></small>

                                 </div>                                 
                              </div>
                           </div> 
                           <hr>
                           <div class="form-group form-row">
                              <div class="col-lg-12">
                                 <h5 class="w-100 d-block mb-2 text-decoration-underline text-center">Address Details</h5>
                              </div>
                           </div>                          
                           <div class="form-group">
                              <div class="form-row">
                                 <label class="col-lg-3 col-form-label">Address 1:</label>
                                 <div class="col-lg-3">
                                    <?php
                                    $proj_add1 ='';
                                    if(!empty($project_data)){
                                    if($project_data->proj_add1 !=''){
                                       $proj_add1 = $project_data->proj_add1;
                                    }
                                    if(set_value('proj_add1') !=''){
                                       $proj_add1 = set_value('proj_add1');
                                    }
                                     ?>
                                  <?php } ?>
                                    <textarea class="form-control" rows="1" name="proj_add1" id="proj_add1" ><?=$proj_add1;?></textarea>
                                    <small class="text-error"><?php echo form_error('proj_add1');?></small>
                                 </div>
                                 <label class="col-lg-3 col-form-label">Address 2:</label>
                                 <div class="col-lg-3">
                                    <?php
                                    $proj_add2 ='';
                                    if(!empty($project_data)){
                                    if($project_data->proj_add2 !=''){
                                       $proj_add2 = $project_data->proj_add2;
                                    }
                                    if(set_value('proj_add2') !=''){
                                       $proj_add2 = set_value('proj_add2');
                                    }
                                     ?>
                                    <?php } ?>
                                    <textarea class="form-control" rows="1" name="proj_add2" id="proj_add2"><?=$proj_add2;?></textarea>
                                    <small class="text-error"><?php echo form_error('proj_add2');?></small>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="form-row">
                                 <label class="col-lg-3 col-form-label">District:</label>
                                 <div class="col-lg-3">
                                     <?php
                                    $proj_district ='';
                                    if(!empty($project_data)){
                                    if($project_data->proj_district !=''){
                                       $proj_district = $project_data->proj_district;
                                    }
                                    if(set_value('proj_district') !=''){
                                       $proj_district = set_value('proj_district');
                                    }
                                     ?>
                                       <?php } ?>
                                    <select class="form-control" name="proj_district" id="proj_district">
                                       <option selected disabled>---Select---</option>
                                       <!-- <option value="Kolkata"<?php if($proj_district=="Kolkata"){echo "selected";}?>>Kolkata</option>
                                       <option value="Howrah"<?php if($proj_district=="Howrah"){echo "selected";}?>>Howrah</option>
                                       <option value="Purba Bardhaman"<?php if($proj_district=="Purba Bardhaman"){echo "selected";}?>>Purba Bardhaman
                                       </option> -->
                                       <?php foreach ($district_data as $row) { ?> 
                                    <option value="<?php echo $row->district_id  ;?>" <?php if($row->district_id==$proj_district){ echo 'selected';}?>><?php echo $row->district_name ;?></option>
                              
                            <?php } ?> 
                                    </select>
                                 <small class="text-error"><?php echo form_error('proj_district');?></small>
                                 </div>
                                 <label class="col-lg-3 col-form-label">Sub Division:</label>
                                 <div class="col-lg-3">
                                     <?php
                                    $proj_sub_division ='';
                                    if(!empty($project_data)){
                                    if($project_data->proj_sub_division !=''){
                                       $proj_sub_division = $project_data->proj_sub_division;
                                    }
                                    if(set_value('proj_sub_division') !=''){
                                       $proj_sub_division = set_value('proj_sub_division');
                                    }
                                     ?>
                                    <?php } ?>
                                    <input type="text" class="form-control"  name="proj_sub_division" id="proj_sub_division" value="<?=$proj_sub_division;?>"/>
                                    <small class="text-error"><?php echo form_error('proj_sub_division');?></small>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="form-row">
                                 <label class="col-lg-3 col-form-label">Block:</label>
                                 <div class="col-lg-3">
                                     <?php
                                     //print_r($block_data);
                                    $proj_block ='';
                                    if(!empty($project_data)){
                                    if($project_data->proj_block !=''){
                                       $proj_block = $project_data->proj_block;
                                    }
                                    if(set_value('proj_block') !=''){
                                       $proj_block = set_value('proj_block');
                                    }
                                     ?>
                                    <?php } ?>
                                    <select class="form-control" name="proj_block" id="proj_block">
                                       <option value="">---Select---</option>
                                       <!-- <option value="Block 1"<?php //if($proj_block=="Block 1"){echo "selected";}?>>Block 1</option>
                                       <option value="Block 2"<?php //if($proj_block=="Block 2"){echo "selected";}?>>Block 2</option>
                                       <option value="Block 3"<?php //if($proj_block=="Block 3"){echo "selected";}?>>Block 3</option> -->
                                       <?php foreach ($block_data as $row) { ?> 
                                       <option value="<?php echo $row->block_id;?>" <?php if($proj_block==$row->block_id){ echo 'selected';}?>><?php echo  $row->block_name  ;?></option>
                              
                            <?php } ?> 
                                    </select>
                                 <small class="text-error"><?php echo form_error('proj_block');?></small>
                                 </div>
                                 <label class="col-lg-3 col-form-label">Police Station:</label>
                                 <div class="col-lg-3">
                                    <?php
                                    $proj_police_station ='';
                                    if(!empty($project_data)){
                                    if($project_data->proj_police_station !=''){
                                       $proj_police_station = $project_data->proj_police_station;
                                    }
                                    if(set_value('proj_police_station') !=''){
                                       $proj_police_station = set_value('proj_police_station');
                                    }
                                     ?>
                                    <?php } ?>
                                    <input type="text" class="form-control"  name="proj_police_station" id="proj_police_station" value="<?=$proj_police_station;?>"/>
                                     <small class="text-error"><?php echo form_error('proj_police_station');?></small>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="form-row">
                                 <label class="col-lg-3 col-form-label">Pincode:</label>
                                 <div class="col-lg-3">
                                    <?php
                                    $proj_pincode ='';
                                    if(!empty($project_data)){
                                    if($project_data->proj_pincode !=''){
                                       $proj_pincode = $project_data->proj_pincode;
                                    }
                                    if(set_value('proj_pincode') !=''){
                                       $proj_pincode = set_value('proj_pincode');
                                    }
                                     ?>
                                  <?php } ?>
                                    <input type="text" class="form-control"  name="proj_pincode" id="proj_pincode" maxlength="6" value="<?=$proj_pincode;?>"/>
                                    <small class="text-error Pincode"><?php echo form_error('proj_pincode');?></small>
                                 </div>
                                 <!-- <label class="col-lg-3 col-form-label">Details:</label>
                                 <div class="col-lg-3">
                                    <input type="text" class="form-control" />
                                 </div> -->
                              </div>
                           </div>
                           <hr>
                           <div class="form-group form-row">
                              <div class="col-lg-12">
                                 <h5 class="w-100 d-block mb-2 text-decoration-underline text-center">Land Details</h5>
                              </div>
                           </div>  
                           <div class="form-group">
                              <div class="form-row">
                                 <label class="col-lg-3 col-form-label">Daag No.:</label>
                                 <div class="col-lg-3">
                                    <?php
                                    $proj_daag_no ='';
                                    if(!empty($project_data)){
                                    if($project_data->proj_daag_no !=''){
                                       $proj_daag_no = $project_data->proj_daag_no;
                                    }
                                    if(set_value('proj_daag_no') !=''){
                                       $proj_daag_no = set_value('proj_daag_no');
                                    }
                                     ?>
                                    <?php } ?>
                                    <input type="text" class="form-control" name="proj_daag_no" id="proj_daag_no" value="<?=$proj_daag_no;?>" />
                                    <small class="text-error"><?php echo form_error('proj_daag_no');?></small>
                                 </div>
                                 <label class="col-lg-3 col-form-label">Khatian No.:</label>
                                 <div class="col-lg-3">
                                     <?php
                                    $proj_khatian_no ='';
                                    if(!empty($project_data)){
                                    if($project_data->proj_khatian_no !=''){
                                       $proj_khatian_no = $project_data->proj_khatian_no;
                                    }
                                    if(set_value('proj_khatian_no') !=''){
                                       $proj_khatian_no = set_value('proj_khatian_no');
                                    }
                                     ?>
                                    <?php } ?>
                                    <input type="text" class="form-control" name="proj_khatian_no" id="proj_khatian_no" value="<?=$proj_khatian_no;?>" />
                                    <small class="text-error"><?php echo form_error('proj_khatian_no');?></small>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="form-row">
                                 <label class="col-lg-3 col-form-label">Mouza No.:</label>
                                 <div class="col-lg-3">
                                     <?php
                                    $proj_mouza_no ='';
                                    if(!empty($project_data)){
                                    if($project_data->proj_mouza_no !=''){
                                       $proj_mouza_no = $project_data->proj_mouza_no;
                                    }
                                    if(set_value('proj_mouza_no') !=''){
                                       $proj_mouza_no = set_value('proj_mouza_no');
                                    }
                                     ?>
                                  <?php } ?>
                                    <input type="text" class="form-control" name="proj_mouza_no" id="proj_mouza_no" value="<?=$proj_mouza_no;?>"/>
                                     <small class="text-error"><?php echo form_error('proj_mouza_no');?></small>
                                 </div>
                                 <label class="col-lg-3 col-form-label">J.L. No.:</label>
                                 <div class="col-lg-3">
                                    <?php
                                    $proj_jl_no ='';
                                    if(!empty($project_data)){
                                    if($project_data->proj_jl_no !=''){
                                       $proj_jl_no = $project_data->proj_jl_no;
                                    }
                                    if(set_value('proj_jl_no') !=''){
                                       $proj_jl_no = set_value('proj_jl_no');
                                    }
                                     ?>
                                    <?php } ?>
                                    <input type="text" class="form-control" name="proj_jl_no" id="proj_jl_no" value="<?=$proj_jl_no;?>"/>
                                    <small class="text-error"><?php echo form_error('proj_jl_no');?></small>
                                 </div>
                              </div>
                           </div>                           
                           <div class="form-group">
                              <div class="form-row">
                                 <!-- <label class="col-lg-3 col-form-label">Detail Location:</label>
                                 <div class="col-lg-3">
                                    <textarea class="form-control" rows="1"></textarea>
                                 </div> -->
                                 <label class="col-lg-3 col-form-label">Land Type:</label>
                                 <div class="col-lg-3">
                                    <?php
                                    $proj_land_type ='';
                                    if(!empty($project_data)){
                                    if($project_data->proj_land_type !=''){
                                       $proj_land_type = $project_data->proj_land_type;
                                    }
                                    if(set_value('proj_land_type') !=''){
                                       $proj_land_type = set_value('proj_land_type');
                                    }
                                     ?>
                                    <?php } ?>
                                    <select class="form-control" name="proj_land_type" id="proj_land_type">
                                       <option selected disabled>---Select---</option>
                                       <option value="Own"<?php if($proj_land_type=="Own"){echo "selected";}?>>Own</option>
                                       <option value="Rented"<?php if($proj_land_type=="Rented"){echo "selected";}?>>Rented</option>
                                       <option value="Lease"<?php if($proj_land_type=="Lease"){echo "selected";}?>>Lease</option>
                                    </select>
                                    <small class="text-error"><?php echo form_error('proj_land_type');?></small>
                                 </div>                                 
                              </div>
                           </div>
                           <hr>
                           <div class="form-group">
                              <div class="form-row">
                                 <label class="col-lg-3 col-form-label">Current Status:</label>
                                 <div class="col-lg-3">
                                    <?php
                                    $proj_current_status ='';
                                    if(!empty($project_data)){
                                    if($project_data->proj_current_status !=''){
                                       $proj_current_status = $project_data->proj_current_status;
                                    }
                                    if(set_value('proj_current_status') !=''){
                                       $proj_current_status = set_value('proj_current_status');
                                    }
                                     ?>
                                    <?php } ?>
                                    <select class="form-control" name="proj_current_status" id="proj_current_status">
                                       <option selected disabled>---Select---</option>
                                       <option value="Started"<?php if($proj_current_status=="Started"){echo "selected";}?>>Started</option>
                                       <option value="Not Started"<?php if($proj_current_status=="Not Started"){echo "selected";}?>>Not Started</option>
                                       <option value="Work in Progress"<?php if($proj_current_status=="Work in Progress"){echo "selected";}?>>Work in Progress</option>
                                    </select>
                                     <small class="text-error"><?php echo form_error('proj_current_status');?></small>
                                 </div>
                                 <label class="col-lg-3 col-form-label">Proposed production date:</label>
                                 <div class="col-lg-3">
                                    <?php
                                    $proj_proposed_pro_date ='';
                                    if(!empty($project_data)){
                                    if($project_data->proj_proposed_pro_date !=''){
                                       $proj_proposed_pro_date = date("d/m/Y",strtotime($project_data->proj_proposed_pro_date));
                                    }
                                    if(set_value('proj_proposed_pro_date') !=''){
                                       $proj_proposed_pro_date = set_value('proj_proposed_pro_date');
                                    }
                                     ?>
                                    <?php } ?>
                                    <input type="text" class="form-control" name="proj_proposed_pro_date" id="proj_proposed_pro_date" value="<?=$proj_proposed_pro_date;?>" />
                                    <small class="text-error"><?php echo form_error('proj_proposed_pro_date');?></small>
                                 </div>                                 
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="form-row">
                                 <label class="col-lg-3 col-form-label">Technology:</label>
                                 <div class="col-lg-3">
                                      <?php
                                    $proj_technology ='';
                                    if(!empty($project_data)){
                                    if($project_data->proj_technology !=''){
                                       $proj_technology = $project_data->proj_technology;
                                    }
                                    if(set_value('proj_technology') !=''){
                                       $proj_technology = set_value('proj_technology');
                                    }
                                     ?>
                                    <?php } ?>
                                    <select class="form-control" name="proj_technology" id="proj_technology">
                                       <option selected disabled>---Select---</option>
                                       <option value="Indigenous"<?php if($proj_technology=="Indigenous"){echo "selected";}?>>Indigenous</option>
                                       <option value="Imported"<?php if($proj_technology=="Imported"){echo "selected";}?>>Imported</option>
                                       <option value="Fabricated"<?php if($proj_technology=="Fabricated"){echo "selected";}?>>Fabricated</option>
                                    </select>
                                    <small class="text-error"><?php echo form_error('proj_technology');?></small>
                                 </div>
                                 <label class="col-lg-3 col-form-label">Capacity of the Plant:</label>
                                 <div class="col-lg-3">
                                     <?php
                                    $proj_plant_capacity ='';
                                    if(!empty($project_data)){
                                    if($project_data->proj_plant_capacity !=''){
                                       $proj_plant_capacity = $project_data->proj_plant_capacity;
                                    }
                                    if(set_value('proj_plant_capacity') !=''){
                                       $proj_plant_capacity = set_value('proj_plant_capacity');
                                    }
                                     ?>
                                    <?php } ?>
                                    <select class="form-control select_capacity" name="proj_plant_capacity" id="proj_plant_capacity" onChange="setExistingorProposed(this.value)">
                                       <option value="">---Select---</option>
                                       <option value="Existing"<?php if($proj_plant_capacity=="Existing"){echo "selected";}?>>Existing</option>
                                       <option value="Proposed"<?php if($proj_plant_capacity=="Proposed"){echo "selected";}?>>Proposed</option>
                                    </select>
                                     <small class="text-error"><?php echo form_error('proj_plant_capacity');?></small>
                                 </div>                                                                 
                              </div>
                           </div>

                           <!-- -----capacity----- -->
                           <div class="form-group capacity_option">
                              <div class="form-row">
                                 <label class="col-lg-6 col-form-label" id="pres_cap"  style="display:none;">
                                    <div class="row">
                                       <div class="col-lg-6">Present Capacity: </div>
                                       <div class="col-lg-6">
                                          <?php
                                    $proj_present_capacity ='';
                                    if(!empty($project_data)){
                                    if($project_data->proj_present_capacity !=''){
                                       $proj_present_capacity = $project_data->proj_present_capacity;
                                    }
                                    if(set_value('proj_present_capacity') !=''){
                                       $proj_present_capacity = set_value('proj_present_capacity');
                                    }
                                     ?>
                                    <?php } ?>
                   <input type="text" class="form-control" / name="proj_present_capacity" id="proj_present_capacity" value="<?=$proj_present_capacity;?>"><span>KL or MT / day</span>
                                       <small class="text-error procap"><?php echo form_error('proj_present_capacity');?></small>
                                       </div>
                                    </div>
                                 </label>
                                 <label class="col-lg-6 col-form-label" id="prop_cap" style="display:none;">
                                    <div class="row">
                                       <div class="col-lg-6">Proposed Capacity: </div>
                                       <div class="col-lg-6">
                                          <?php
                                    $proj_proposed_capacity ='';
                                    if(!empty($project_data)){
                                    if($project_data->proj_proposed_capacity !=''){
                                       $proj_proposed_capacity = $project_data->proj_proposed_capacity;
                                    }
                                    if(set_value('proj_proposed_capacity') !=''){
                                       $proj_proposed_capacity = set_value('proj_proposed_capacity');
                                    }
                                     ?>
                                    <?php } ?>
                                          <input type="text" class="form-control" name="proj_proposed_capacity" id="proj_proposed_capacity" value="<?=$proj_proposed_capacity;?>"/><span>KL or MT / day</span>
                                          <small class="text-error precap"><?php echo form_error('proj_proposed_capacity');?></small>
                                       </div>
                                    </div>
                                 </label>
                              </div>
                           </div> 
                           
                           <!-- -----capacity----- -->
                           
                           <div class="form-group">
                              <div class="form-row">
                                 <h5 class="w-100 d-block mb-4 text-decoration-underline text-center">Term loan received from Bank</h5>
                                 <label class="col-lg-3 col-form-label">Name of Bank:</label>
                                 <div class="col-lg-3">
                                     <?php
                                    $proj_bank_name ='';
                                    if(!empty($project_data)){
                                    if($project_data->proj_bank_name !=''){
                                       $proj_bank_name = $project_data->proj_bank_name;
                                    }
                                    if(set_value('proj_bank_name') !=''){
                                       $proj_bank_name = set_value('proj_bank_name');
                                    }
                                     ?>
                                    <?php } ?>
                                    <!-- <input type="text" class="form-control" name="proj_bank_name" id="proj_bank_name" value="<?=$proj_bank_name;?>"/> -->
                                     <select class="form-control" name="proj_bank_name" id="proj_bank_name">
                                       <option selected disabled>---Select---</option>
                                       
                                       <?php foreach ($bank_data as $row) { ?> 
                                    <option value="<?php echo $row->id  ;?>" <?php if($row->id==$proj_bank_name){ echo 'selected';}?>><?php echo $row->bank_name ;?></option>
                              
                            <?php } ?> 
                                    </select>
                                    <small class="text-error"><?php echo form_error('proj_bank_name');?></small>
                                 </div>
                                 <label class="col-lg-3 col-form-label">Branch:</label>
                                 <div class="col-lg-3">
                                     <?php
                                    $proj_branch ='';
                                    if(!empty($project_data)){
                                    if($project_data->proj_branch !=''){
                                       $proj_branch = $project_data->proj_branch;
                                    }
                                    if(set_value('proj_branch') !=''){
                                       $proj_branch = set_value('proj_branch');
                                    }
                                     ?>
                                    <?php } ?>
                                    <!-- <input type="text" class="form-control" name="proj_branch" id="proj_branch" value="<?=$proj_branch;?>" /> -->
                                     <select class="form-control" name="proj_branch" id="proj_branch">
                                       <option selected disabled>---Select---</option>
                                       
                                       <?php foreach ($branch_data as $row) { ?> 
                                     <option value="<?php echo $row->branch_id  ;?>" <?php if($row->branch_id==$proj_branch){ echo 'selected';}?>><?php echo $row->branch ;?></option>
                              
                            <?php } ?> 
                                    </select>
                                    <small class="text-error"><?php echo form_error('proj_branch');?></small>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="form-row">
                                 <label class="col-lg-3 col-form-label">IFSC:</label>
                                 <div class="col-lg-3">
                                    <?php
                                    $proj_ifsc ='';
                                    if(!empty($project_data)){
                                    if($project_data->proj_ifsc !=''){
                                       $proj_ifsc = $project_data->proj_ifsc;
                                    }
                                    if(set_value('proj_ifsc') !=''){
                                       $proj_ifsc = set_value('proj_ifsc');
                                    }
                                     ?>
                                  <?php } ?>
                                    <select class="form-control" name="proj_ifsc" id="proj_ifsc">
                                       <option selected disabled>---Select---</option>
                                       
                                       <?php foreach ($ifsc_data as $row) { ?> 
                                     <option value="<?php echo $row->id  ;?>" <?php if($row->id==$proj_ifsc){ echo 'selected';}?>><?php echo $row->ifsc ;?></option>
                              
                            <?php } ?> 
                                    </select>
                                    <small class="text-error"><?php echo form_error('proj_ifsc');?></small>
                                 </div>
                                 <label class="col-lg-3 col-form-label">Account No:</label>
                                 <div class="col-lg-3">
                                    <?php
                                    $proj_acc_no ='';
                                    if(!empty($project_data)){
                                    if($project_data->proj_acc_no !=''){
                                       $proj_acc_no = $project_data->proj_acc_no;
                                    }
                                    if(set_value('proj_acc_no') !=''){
                                       $proj_acc_no = set_value('proj_acc_no');
                                    }
                                     ?>
                                    <?php } ?>
                                    <input type="text" class="form-control" name="proj_acc_no" id="proj_acc_no" maxlength="16" value="<?=$proj_acc_no;?>"/>
                                    <small class="text-error ProAcc"><?php echo form_error('proj_acc_no');?></small>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="form-row">
                                 <label class="col-lg-3 col-form-label">PAN No:</label>
                                 <div class="col-lg-3">
                                     <?php
                                    $proj_pan_no ='';
                                    if(!empty($project_data)){
                                    if($project_data->proj_pan_no !=''){
                                       $proj_pan_no = $project_data->proj_pan_no;
                                    }
                                    if(set_value('proj_pan_no') !=''){
                                       $proj_pan_no = set_value('proj_pan_no');
                                    }
                                     ?>
                                    <?php } ?>
                                    <input type="text" class="form-control" name="proj_pan_no" id="proj_pan_no" maxlength="10" value="<?=$proj_pan_no;?>" />
                                    <small class="text-error"><?php echo form_error('proj_pan_no');?></small>
                                 </div>
                                 <label class="col-lg-3 col-form-label">Term loan sanction:</label>
                                 <?php
                                 if(!empty(set_value('yesno2')))
                                 {
                                    $yesno2 =set_value('yesno2');

                                 }elseif($project_data->proj_document!=NULL){
                                    $yesno2 = 'Yes';
                                 }else{
                                    $yesno2='No';
                                 }
                                 if($yesno2=='No'){
                                    $style='style="display:none;"';
                                 }else{
                                    $style='style="display:block;"';
                                 }
                                 
                                 
                                 ?>
                                 <div class="col-lg-3">
                                   
                                    <div class="custom-control custom-radio custom-control-inline">
                                       <input type="radio" class="custom-control-input" onclick="javascript:yesnoCheck4();" name="yesno2" id="yesCheck3" value="Yes" <?php if($yesno2 == 'Yes'){echo 'checked';}?>>
                                       <label class="custom-control-label" for="yesCheck3">Yes</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                       <input type="radio" class="custom-control-input" onclick="javascript:yesnoCheck4();" name="yesno2" id="noCheck3" value="No" <?php if($yesno2 == 'No'){echo 'checked';}?>/>
                                       <label class="custom-control-label" for="noCheck3">No</label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group" id="ifYes3" <?php echo $style;?>>
                              <div class="form-row">
                                 <?php
                                     $proj_document ='';
                                 if(!empty($project_data)) {
                                    $proj_document = $project_data->proj_document;
                                    } ?>
                                 <label class="col-lg-3 col-form-label">Upload Document: </label>
                                 
                                 <div class="col-lg-3">
                                    <?php 
                                    if($proj_document !=''){ ?>
                                    <a href="<?php echo base_url()?>uploads/<?php echo $project_data->proj_document?>" download style="color: #1a028c; text-decoration: none;">Download File</a>
                                   <?php  } ?>
                                    <!--  <?php
                                    //$proj_document //='';
                                    //if(!empty($project_data)){
                                   // if($project_data->proj_document !=''){
                                       //$proj_document //= $project_data->proj_document;
                                   // }
                                   // if(set_value('proj_document') !=''){
                                      // $proj_document// =// set_value('proj_document');
                                   // }
                                     //?>  -->
                                     
                                    <div class="custom-file ">
                                        
                                       <input type="file" class="custom-file-input" name="proj_document" id="inputGroupFile02"  
                                       aria-describedby="inputGroupFileAddon02" style="left: -36%;" onchange="return fileValidation()" >  
                                       <label class="custom-file-label" for="inputGroupFile02"></label>

                                    </div>
                                   
                                    
                                    <label id="file-error"></label>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-lg-12 text-right">
                                 <a class="btn btn-primary mb-2" href="<?php echo base_url('applicant/details')?>" role="button">Previous</a>
                                 <?php 
                                 $show_next_btn = '1';
                                 if(!empty($project_data))
                                 {
                                   
                                   $is_applicant_submitted = $project_data->is_applicant_submitted;
                                   $is_district_app_reject_revert = $project_data->is_district_app_reject_revert;

                                   if($is_applicant_submitted =='2' && ($is_district_app_reject_revert =='0'))
                                   {
                                       $show_next_btn = '2';
                                   }

                                   if($is_applicant_submitted ==2 && ($is_district_app_reject_revert ==1 || $is_district_app_reject_revert ==2))
                                   {
                                     
                                       $show_next_btn = '2';
                                   }
                                 }

                                    if($show_next_btn == 1)
                                     {
                                       ?>
                                <button class="btn btn-primary mb-2"  type="submit" id="btn_submit">Next</button>
                                <?php }else{ ?>

                                          <a class="btn btn-primary mb-2" href="<?php echo base_url('applicant/project_cost/')?>" role="button">Next</a>
                                     <?php }  ?>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-lg-12 text-center text-success" id="msg_cont" style="display: none;">
                                 
                              </div>
                           </div>

                           <div class="row">
                              <div class="col-lg-12 text-center text-success msg_cont2" >
                                 <?php
                                 if(!empty($this->session->flashdata('msg1')))
                                 {
                                 echo $this->session->flashdata('msg1');
                                 echo '<script>
                                 setTimeout(function(){window.location.href="'.base_url().'applicant/project_cost";}, 4000);</script>';
                                 //redirect("applicant/project");
                                 }
                                 ?>
                              </div>
                           </div>
                           <?php //echo validation_errors();?>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <?php $this->load->view('common/footer'); ?>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">    
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#proj_proposed_pro_date" ).datepicker({ dateFormat: 'dd-mm-yy' });
  } );
  </script>


      <script type="text/javascript">
      $(function(){
         $('#alert_msg, .text-error').delay(8000).fadeOut();
         $('.msg_cont2').delay(8000).fadeOut();
      });

      function submitProject()
      {
         // alert('hi');
         $('#frm_project').submit();
      }

      function setExistingorProposed(val)
      {
        // alert(val);
         if(val=='Existing')
         {
         $('#pres_cap').show();
         $('#prop_cap').show();
         }

         if(val=='Proposed')
         {
         $('#pres_cap').hide();
         $('#prop_cap').show();
         }
      }
      $(document).ready(function(){
         var val =$('#proj_plant_capacity').val();
         if(val=='Existing')
         {
         $('#pres_cap').show();
         $('#prop_cap').show();
         }

         if(val=='Proposed')
         {
         $('#pres_cap').hide();
         $('#prop_cap').show();
         }
      });

function fileValidation() {
      var fileInput =
          document.getElementById('inputGroupFile02');
       
      var filePath = fileInput.value;
   
      // Allowing file type
      var allowedExtensions =
            /(\.jpg|\.jpeg|\.png)$/i;
      if (!allowedExtensions.exec(filePath)) {
          //alert('Please select pdf file');
       $('#file-error').show().html('Please upload jpg or png file').delay(2000).fadeOut();
       fileInput.value = '';
                return false;
                }
      else
      {
       
          // Image preview
          if (fileInput.files && fileInput.files[0]) {
              var reader = new FileReader();
              reader.onload = function(e) {
                  document.getElementById(
                      'imagePreview').innerHTML =
                      '<img src="' + e.target.result
                      + '"/>';
              };
               
              reader.readAsDataURL(fileInput.files[0]);
          }
      }
  }
   $("#addFrm input[name='proj_pincode']").keydown(function (event) {
        //alert(event.keyCode);
        var pincode = $("#addFrm input[name='proj_pincode']").val();
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
                $('.Pincode').show().html('Please Enter Valid Pincode');
                setTimeout(function(){$('.Pincode').hide()}, 1000);
                }
                event.preventDefault();
               }
           }
       });
   $("#addFrm input[name='proj_acc_no']").keydown(function (event) {
        //alert(event.keyCode);
        var account_no = $("#addFrm input[name='proj_acc_no']").val();
           // Allow only backspace and delete
           if (event.keyCode == 46 || event.keyCode == 8  || event.keyCode==116  || event.keyCode==9 || event.keyCode==37 || event.keyCode==39 || event.keyCode==17 || event.keyCode==86) {
               // let it happen, don't do anything
           }
           else {
               // Ensure that it is a number and stop the keypress
               if ((event.keyCode > 47 && event.keyCode < 58 ) || (event.keyCode > 94 && event.keyCode < 106 )) {
                $('.text-error').hide();
               }else{
                
                if(account_no.length!=6)
                {
                $('.ProAcc').show().html('Please Enter Valid Account No');
                setTimeout(function(){$('.ProAcc').hide()}, 1000);
                }
                event.preventDefault();
               }
           }
       });

   $("#addFrm input[name='proj_present_capacity']").keydown(function (event) {
        //alert(event.keyCode);
        var present_capacity = $("#addFrm input[name='proj_present_capacity']").val();
           // Allow only backspace and delete
           if (event.keyCode == 46 || event.keyCode == 8  || event.keyCode==116  || event.keyCode==9 || event.keyCode==37 || event.keyCode==39 || event.keyCode==17 || event.keyCode==86) {
               // let it happen, don't do anything
           }
           else {
               // Ensure that it is a number and stop the keypress
               if ((event.keyCode > 47 && event.keyCode < 58 ) || (event.keyCode > 94 && event.keyCode < 106 )) {
                $('.text-error').hide();
               }else{
                
                if(present_capacity.length!=6)
                {
                $('.procap').show().html('Please Enter Valid Number');
                setTimeout(function(){$('.procap').hide()}, 1000);
                }
                event.preventDefault();
               }
           }
       });
   $("#addFrm input[name='proj_proposed_capacity']").keydown(function (event) {
        //alert(event.keyCode);
        var proposed_capacity = $("#addFrm input[name='proj_proposed_capacity']").val();
           // Allow only backspace and delete
           if (event.keyCode == 46 || event.keyCode == 8  || event.keyCode==116  || event.keyCode==9 || event.keyCode==37 || event.keyCode==39 || event.keyCode==17 || event.keyCode==86) {
               // let it happen, don't do anything
           }
           else {
               // Ensure that it is a number and stop the keypress
               if ((event.keyCode > 47 && event.keyCode < 58 ) || (event.keyCode > 94 && event.keyCode < 106 )) {
                $('.text-error').hide();
               }else{
                
                if(proposed_capacity.length!=6)
                {
                $('.precap').show().html('Please Enter Valid Number');
                setTimeout(function(){$('.precap').hide()}, 1000);
                }
                event.preventDefault();
               }
           }
       });

      </script>