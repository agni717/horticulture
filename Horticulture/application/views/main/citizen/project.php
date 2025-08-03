<?php $this->load->view('common/header_citizen'); ?> 
<style type="text/css">
   .text-error{color: #f05555;}
   #file-error{color: #f05555;}
</style> 
<div class="page-body-wrapper">
   <div class="container-fluid">
         <div class="row">
            <div class="col-lg-10 grid-margin mt-5 mx-auto">
               <h4 class="card-title">Project Description</h4>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-10 grid-margin mx-auto">
               <div class="card ">
                  <?php if(isset($error)) :?>
                        <div id="alert_msg" style="color:red; margin:0 0 10px 0px;">
                           <?php 
                              echo $error;
                           ?>
                        </div>
                        <?php endif; ?>
                  <div class="card-body">
                     <?php 
                     //echo validation_errors(); 
                     echo form_open_multipart('',array('id'=>"addFrm",'name'=>'addFrm')); 
                     ?>
                     <div class="form-group">
                        <div class="form-row">
                           <fieldset class="w-100">
                              <div class="col-lg-12">
                                 <div class="row">
                                    <div class="col-lg-3">
                                       <label class="col-lg-12 col-form-label">Name of the Project : <sup> * </sup></label>
                                       <div class="col-lg-12">
                                          <input type="text" class="form-control" name="proj_name" id="proj_name" value="<?=$project_data->proj_name;?>" />
                                          <small class="text-error proj_name"><?php echo form_error('proj_name');?></small>
                                       </div>
                                    </div>
                                    <div class="col-lg-3">
                                       <label class="col-lg-12 col-form-label">Products to be manufactured : <sup> * </sup></label>
                                       <div class="col-lg-12">
                                          <!--<input type="text" class="form-control" name="proj_prod_manufacture" id="proj_prod_manufacture" value="<?=$project_data->proj_prod_manufacture;?>" />-->
                                          <select class="form-control js-example-basic-single w-100" name="proj_prod_manufacture" id="proj_prod_manufacture">
                                                <option value="">---Select---</option>
                                                <?php 
                                                foreach($product_data as $prods)
                                                { 
                                                ?>
                                                <option value="<?php echo $prods->prod_id?>" <?php if($project_data->proj_prod_manufacture == $prods->prod_id){ echo "selected";} ?>><?php echo $prods->prod_name?></option>
                                                <?php } ?>                                       
                                          </select>
                                          <small class="text-error proj_prod_manufacture"><?php echo form_error('proj_prod_manufacture');?></small>
                                       </div>     
                                    </div>
                                 </div>
                              </div>
                           </fieldset>
                        </div>
                     </div> 
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-10 grid-margin mx-auto">
               <div class="card">
                  <div class="card-body">
                     <fieldset>
                        <legend>
                           <div class="form-group form-row">
                              <div class="col-lg-12">
                                 <h5 class="w-100 d-block mb-2 text-decoration-underline text-center">Address Details</h5>
                              </div>
                           </div> 
                        </legend>
                        <div class="form-group">
                           <div class="form-row">
                              <div class="col-lg-3">
                                 <label class="col-lg-12 col-form-label">Address 1: <sup> * </sup></label>
                                 <div class="col-lg-12">
                                    <input type="text" class="form-control" name="proj_address_1" id="proj_address_1" value="<?=$project_data->proj_add1;?>" />
                                    <small class="text-error proj_address_1"><?php echo form_error('proj_address_1');?></small>
                                 </div>
                              </div>
                              <div class="col-lg-3">
                                 <label class="col-lg-12 col-form-label">Address 2: <sup> * </sup></label>
                                 <div class="col-lg-12">
                                    <input type="text" class="form-control" name="proj_address_2" id="proj_address_2" value="<?=$project_data->proj_add2;?>" />
                                    <small class="text-error proj_address_2"><?php echo form_error('proj_address_2');?></small>
                                 </div>
                              </div>
                              <div class="col-lg-3">
                                 <label class="col-form-label">District<sup>*</sup>:</label>
                                 <select class="form-control js-example-basic-single" name="p_district_code" id="p_district_code" onchange="lfn_SetSubDivision(this.value);">
                                    <option value="">---Select---</option>
                                    <?php 
                                    foreach($district_data as $dist){ ?>
                                    <option value="<?php echo $dist->district_code; ?>" <?php if($dist->district_code == $project_data->proj_district){echo "selected";} ?>><?php echo $dist->district_name; ?></option>
                                    <?php } ?>                                       
                                 </select>
                                 <small class="text-error p_district_code"><?php echo form_error('p_district_code');?></small>
                              </div>
                              <div class="col-lg-3">
                                 <label class="col-form-label">Sub-Division<sup>*</sup>:</label>
                                 <select class="form-control js-example-basic-single" name="p_Sub_Division" id="p_Sub_Division" onchange="lfn_SetBlock(this.value);">
                                    <option value="">---Select---</option>
                                    <!--<option value="1">kolkata</option>-->
                                    <?php if(!empty($project_data->proj_sub_division)){
                                    foreach($subdiv_data as $sdiv){ ?>
                                    <option value="<?php echo $sdiv->subdiv_id; ?>" <?php if($sdiv->subdiv_id == $project_data->proj_sub_division){echo "selected";} ?>><?php echo $sdiv->subdiv_name; ?></option>
                                    <?php }} ?>
                                 </select>
                                 <small class="text-error p_Sub_Division"><?php echo form_error('p_Sub_Division');?></small>
                              </div>
                              <div class="col-lg-3">
                                 <label class="col-form-label">Block/Municipality<sup>*</sup>:</label>
                                 <select class="form-control js-example-basic-single" name="p_block" id="p_block" onchange="lfn_SetPanchayat(this.value);">
                                    <option value="">---Select---</option>
                                    <?php if(!empty($project_data->proj_block)){
                                    foreach($block_data as $bdata){ ?>
                                    <option value="<?php echo $bdata->block_id; ?>" <?php if($bdata->block_id == $project_data->proj_block){echo "selected";} ?>><?php echo $bdata->block_name; ?></option>
                                    <?php }} ?>
                                 </select>
                                 <small class="text-error p_block"><?php echo form_error('p_block');?></small>
                              </div> 
                              <div class="col-lg-3">
                                 <label class="col-form-label">Gram Panchayat<sup>*</sup>:</label>
                                 <select class="form-control js-example-basic-single" name="p_gram_panchayat" id="p_gram_panchayat">
                                    <option value="">--select--</option>
                                    <!--<option>Panchayat 1</option>-->
                                    <?php if(!empty($project_data->proj_gram_panchayat)){
                                    foreach($gp_data as $gpdata){ ?>
                                    <option value="<?php echo $gpdata->panchayat_id; ?>" <?php if($gpdata->panchayat_id == $project_data->proj_gram_panchayat){echo "selected";} ?>><?php echo $gpdata->panchayat_name; ?></option>
                                    <?php }} ?>
                                 </select>
                                 <small class="text-error p_gram_panchayat"><?php echo form_error('p_gram_panchayat');?></small>
                              </div>
                              <div class="col-lg-3">
                                 <label class="col-form-label ">Village/Town<sup>*</sup>:</label>
                                 <input type="text" class="form-control" name="proj_village" id="proj_village" value="<?=$project_data->proj_village;?>" />
                                 <small class="text-error proj_village"><?php echo form_error('proj_village');?></small>
                              </div> 
                              <div class="col-lg-3">
                                 <label class="col-form-label">Police Station<sup>*</sup>:</label>
                                 <input type="text" class="form-control" name="proj_Post_office" id="proj_Post_office" value="<?=$project_data->proj_police_station;?>"  placeholder="" />
                                 <small class="text-error proj_Post_office"><?php echo form_error('proj_Post_office');?></small>
                              </div>   

                                 <div class="col-lg-3">
                                 <label class="col-form-label">Pincode:</label>
                                 <input type="text" class="form-control" name="proj_pincode" value="<?=$project_data->proj_pincode;?>"  placeholder="Pincode" maxlength="6" id="proj_pincode" />
                                 <small class="text-error proj_pincode"><?php echo form_error('proj_pincode');?></small>
                              </div>
                           </div>                     
                        </div>
                     </fieldset>
                  </div>
               </div> 
            </div>
         </div>
         <div class="row">
            <div class="col-lg-10 grid-margin mx-auto">
               <div class="card">
                  <div class="card-body">
                     <fieldset>
                        <legend>
                           <div class="form-group form-row">
                              <div class="col-lg-12">
                                 <h5 class="w-100 d-block mb-2 text-decoration-underline text-center">Land Details</h5>
                              </div>
                           </div> 
                        </legend>
                        <div class="form-group">
                           <div class="form-row">
                              <div class="col-lg-3">
                                 <label class="col-lg-12 col-form-label">Land Type: <sup> * </sup> </label>
                                 <div class="col-lg-12">
                                    <select class="form-control js-example-basic-single" name="proj_land_type" id="proj_land_type" onchange="gotocheck_daagdetails();">
                                       <option value="">---Select---</option>
                                       <option value="Own"<?php if($project_data->proj_land_type=="Own"){echo "selected";}?>>Own</option>
                                       <option value="Rented"<?php if($project_data->proj_land_type=="Rented"){echo "selected";}?>>Rented</option>
                                       <option value="Lease"<?php if($project_data->proj_land_type=="Lease"){echo "selected";}?>>Lease</option>
                                    </select>
                                    <small class="text-error proj_land_type"><?php echo form_error('proj_land_type');?></small>
                                 </div> 
                              </div>
                              <div class="col-lg-3">
                                 <label class="col-lg-12 col-form-label">Current Status: <sup> * </sup> </label>
                                 <div class="col-lg-12">
                                    <select class="form-control js-example-basic-single" name="proj_current_status" id="proj_current_status">
                                       <option value="">---Select---</option>
                                       <option value="Started"<?php if($project_data->proj_current_status=="Started"){echo "selected";}?>>Started</option>
                                       <option value="Not Started"<?php if($project_data->proj_current_status=="Not Started"){echo "selected";}?>>Not Started</option>
                                       <option value="Work in Progress"<?php if($project_data->proj_current_status=="Work in Progress"){echo "selected";}?>>Work in Progress</option>
                                    </select>
                                    <small class="text-error proj_current_status"><?php echo form_error('proj_current_status');?></small>
                                 </div>
                              </div>
                           </div>
                           <div class="form-row daagno_div" <?php if($project_data->proj_land_type!="Own"){echo 'style="display:none;"';} ?>>
                              <div class="col-lg-3">
                                 <label class="col-lg-12 col-form-label">Daag No.: <sup> * </sup></label>
                                 <div class="col-lg-12">
                                    <input type="text" class="form-control" name="proj_daag_no" id="proj_daag_no" value="<?=$project_data->proj_daag_no;?>" />
                                    <small class="text-error proj_daag_no"><?php echo form_error('proj_daag_no');?></small>
                                 </div>
                              </div>
                              <div class="col-lg-3">
                                 <label class="col-lg-12 col-form-label">Khatian No.: <sup> * </sup></label>
                                 <div class="col-lg-12">
                                    <input type="text" class="form-control" name="proj_khatian_no" id="proj_khatian_no" value="<?=$project_data->proj_khatian_no;?>" />
                                    <small class="text-error proj_khatian_no"><?php echo form_error('proj_khatian_no');?></small>
                                 </div>
                              </div>
                              <div class="col-lg-3">
                                 <label class="col-lg-12 col-form-label">Mouza No.: <sup> * </sup></label>
                                 <div class="col-lg-12">
                                    <input type="text" class="form-control" name="proj_mouza_no" id="proj_mouza_no" value="<?=$project_data->proj_mouza_no;?>"/>
                                    <small class="text-error proj_mouza_no"><?php echo form_error('proj_mouza_no');?></small>
                                 </div>
                              </div>
                              <div class="col-lg-3">
                                 <label class="col-lg-12 col-form-label">J.L. No.: <sup> * </sup></label>
                                 <div class="col-lg-12">
                                    <input type="text" class="form-control" name="proj_jl_no" id="proj_jl_no" value="<?=$project_data->proj_jl_no;?>"/>
                                    <small class="text-error proj_jl_no"><?php echo form_error('proj_jl_no');?></small>
                                 </div>
                              </div>
                              <div class="col-lg-3 mt-3">
                                 <label class="col-lg-12 col-form-label">Proposed production date: <sup> * </sup> </label>
                                 <div class="col-lg-12">
                                    <input type="text" class="form-control" name="proj_proposed_pro_date" id="proj_proposed_pro_date" value="<?php if(!empty($project_data->proj_proposed_pro_date)){echo date('d-m-Y',strtotime($project_data->proj_proposed_pro_date));}?>" />
                                    <small class="text-error proj_proposed_pro_date"><?php echo form_error('proj_proposed_pro_date');?></small>
                                 </div>     
                              </div>
                              <div class="col-lg-3 mt-3">
                                 <label class="col-lg-12 col-form-label">Technology: <sup> * </sup> </label>
                                 <div class="col-lg-12">
                                    <select class="form-control js-example-basic-single" name="proj_technology" id="proj_technology">
                                       <option value="">---Select---</option>
                                       <option value="Indigenous"<?php if($project_data->proj_technology=="Indigenous"){echo "selected";}?>>Indigenous</option>
                                       <option value="Imported"<?php if($project_data->proj_technology=="Imported"){echo "selected";}?>>Imported</option>
                                       <option value="Fabricated"<?php if($project_data->proj_technology=="Fabricated"){echo "selected";}?>>Fabricated</option>
                                    </select>
                                    <small class="text-error proj_technology"><?php echo form_error('proj_technology');?></small>
                                 </div>
                              </div>
                              <div class="col-lg-3 ">
                                 <label class="col-lg-12 col-form-label">Capacity of the Plant:<sup>*</sup></label>
                                 <div class="col-lg-12">
                                    <select class="form-control" name="proj_plant_capacity" id="proj_plant_capacity" onChange="setExistingorProposed(this.value)">
                                       <option value="">---Select---</option>
                                       <option value="Existing"<?php if($project_data->proj_plant_capacity=="Existing"){echo "selected";}?>>Existing</option>
                                       <option value="Proposed"<?php if($project_data->proj_plant_capacity=="Proposed"){echo "selected";}?>>Proposed</option>
                                    </select>
                                    <small class="text-error proj_plant_capacity"><?php echo form_error('proj_plant_capacity');?></small>
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="form-group capacity_option">
                                    <div class="row">
                                       <label class="col-lg-6 col-form-label m-0" id="pres_cap" <?php if(empty($project_data->proj_plant_capacity)){echo 'style="display:none"';}else{if($project_data->proj_plant_capacity == "" || $project_data->proj_plant_capacity == "Proposed"){echo 'style="display:none"';}} ?>>
                                          <div class="row">
                                             
                                             <div class="col-lg-7">
                                                <label>Present Capacity:<sup>*</sup> </label>
                                                <input type="text" class="form-control" name="proj_present_capacity" id="proj_present_capacity" value="<?=$project_data->proj_present_capacity;?>">
                                                <small class="text-error proj_present_capacity"><?php echo form_error('proj_present_capacity');?></small>
                                             </div>
                                             <div class="col-lg-5 pl-lg-0">
                                                <label>Unit:<sup>*</sup> </label>
                                                <select class="form-control" name="present_unit" id="present_unit">
                                                   <option value="">---select---</option>
                                                   <?php foreach ($project_unit as $row) { ?> 
                                                      <option value="<?php echo $row->id  ;?>" <?php if($row->id==$project_data->proj_present_unit){ echo 'selected';}?>><?php echo $row->project_cost_unit ;?></option>
                                       
                                                   <?php } ?> 
                                                </select>
                                                <small class="text-error present_unit"><?php echo form_error('present_unit');?></small>
                                             </div>
                                          </div>
                                       </label>
                                       <label class="col-lg-6 col-form-label m-0" id="prop_cap"  <?php if(empty($project_data->proj_plant_capacity)){echo 'style="display:none"';}else{if($project_data->proj_plant_capacity == ""){echo 'style="display:none"';}} ?>>
                                          <div class="row">                                    
                                             <div class="col-lg-7">
                                                <label>Proposed Capacity: </label>
                                                <input type="text" class="form-control" name="proj_proposed_capacity" id="proj_proposed_capacity" value="<?=$project_data->proj_proposed_capacity;?>"/>
                                                <small class="text-error proj_proposed_capacity"><?php echo form_error('proj_proposed_capacity');?></small>
                                             </div>
                                             <div class="col-lg-5 pl-lg-0">
                                                <label>Unit: </label>
                                                <select class="form-control" name="propose_unit" id="propose_unit">
                                                   <option value="">---select---</option>

                                                   <?php foreach ($project_unit as $row) { ?> 
                                                   <option value="<?php echo $row->id  ;?>" <?php if($row->id==$project_data->proj_proposed_unit){ echo 'selected';}?>><?php echo $row->project_cost_unit ;?></option>
                                                   <?php } ?> 
                                                </select>
                                                <small class="text-error propose_unit"><?php echo form_error('propose_unit');?></small>
                                             </div>
                                          </div>
                                       </label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <?php $docnamesets = "";
                           if(!empty($project_data->proj_land_type)){
                              if($project_data->proj_land_type == "Own"){
                                 $docnamesets = 'land porcha/ROR Document';
                              }elseif($project_data->proj_land_type == "Rented"){
                                 $docnamesets = 'Agreement Document copy';
                              }elseif($project_data->proj_land_type == "Lease"){
                                 $docnamesets = 'Dead/Agreement Document copy';
                              }
                           } ?>
                           <div class="form-row daagno_docset" <?php if(empty($project_data->proj_land_type)){echo 'style="display:none;"';} ?>>
                              <div class="col-lg-4 mt-3 mb-4">
                                 <label class="col-lg-12 col-form-label"><span id="daag_doclabel"><?php echo $docnamesets; ?></span>: <sup> * </sup></label>
                                 <div class="col-lg-12">
                                    <?php 
                                       if(!empty($project_data->proj_land_document)){ ?>
                                       <a class="landdoc_existence" href="<?php echo base_url()?>uploads/document_details/<?php echo $project_data->proj_land_document?>" download style="color: #1a028c; text-decoration: none;">Download File</a>
                                    <?php  } ?>
                                    <div class="custom-file ">
                                    <input type="file" class="custom-file-input" name="agrement_document" id="agrement_document" aria-describedby="inputGroupFileAddon03" style="left: -30%;">  
                                       <label class="custom-file-label" for="inputGroupFile03"></label>
                                    </div>
                                    <small class="text-error agrement_document"><?php echo form_error('agrement_document');?></small>
                                 </div>
                              </div>
                           </div>                     
                        </div>
                     </fieldset>
                  </div>
               </div> 
            </div>
         </div>
         <!-- -----capacity----- -->
            <div class="row">
               <div class="col-lg-10 grid-margin mx-auto">
                  <div class="card">
                     <div class="card-body">
                        <fieldset>
                           <legend>
                              <div class="col-lg-12">
                                 <h5 class="w-100 d-block mb-2 text-decoration-underline">Term loan received from Bank</h5>
                              </div>
                           </legend>
                              <div class="form-group form-row">
                                 <div class="col-lg-3">
                                    <label class="col-lg-12 col-form-label">Name of Bank: <sup> * </sup></label>
                                    <div class="col-lg-12">
                                       <select class="form-control js-example-basic-single" name="proj_bank_name" id="proj_bank_name" onchange="lfn_SetBranch(this.value);">
                                          <option value="">---Select---</option>
                                          <?php foreach ($bank_data as $row) { ?> 
                                             <option value="<?php echo $row->bank_id  ;?>" <?php if($row->bank_id==$project_data->proj_bank_name){ echo 'selected';}?>><?php echo $row->bank_name ;?></option>

                                          <?php } ?> 
                                       </select>
                                       <small class="text-error proj_bank_name"><?php echo form_error('proj_bank_name');?></small>
                                    </div>
                                 </div>
                                 <div class="col-lg-3">
                                    <label class="col-lg-12 col-form-label">Branch : <sup> * </sup></label>
                                    <div class="col-lg-12">
                                       <select class="form-control js-example-basic-single" name="proj_branch" id="proj_branch" onchange="lfn_SetIfsc(this.value);">
                                          <option value="">---Select---</option>
                                          <?php if(!empty($project_data->proj_bank_name)){
                                          foreach($branch_data as $br_data){ ?>
                                          <option value="<?php echo $br_data->branch_id; ?>" <?php if($br_data->branch_id == $project_data->proj_branch){echo "selected";} ?>><?php echo $br_data->branch_name; ?></option>
                                          <?php }} ?> 
                                       </select>
                                       <small class="text-error proj_branch"><?php echo form_error('proj_branch');?></small>
                                    </div>
                                 </div>
                                 <div class="col-lg-3">
                                    <label class="col-lg-12 col-form-label">IFSC : <sup> * </sup></label>
                                    <div class="col-lg-12">
                             
										<input type="text" class="form-control" name="proj_ifsc" id="proj_ifsc" readonly value="<?=$project_data->proj_ifsc;?>"/>
                                       <small class="text-error proj_ifsc"><?php echo form_error('proj_ifsc');?></small>
                                    </div>
                                 </div>
                                 <div class="col-lg-3">
                                    <label class="col-lg-12 col-form-label">Account No : <sup> * </sup></label>
                                    <div class="col-lg-12">
                                       <input type="text" class="form-control" name="proj_acc_no" id="proj_acc_no" maxlength="16" value="<?=$project_data->proj_acc_no;?>"/>
                                       <small class="text-error ProAcc proj_acc_no"><?php echo form_error('proj_acc_no');?></small>
                                    </div>

                                 </div>
                                 <div class="col-lg-3 mt-3">
                                    <label class="col-lg-12 col-form-label">PAN No : <sup> * </sup> </label>
                                    <div class="col-lg-12">
                                       <input type="text" class="form-control" name="proj_pan_no" id="proj_pan_no" maxlength="10" value="<?=$project_data->proj_pan_no;?>" />
                                       <small class="text-error proj_pan_no"><?php echo form_error('proj_pan_no');?></small>
                                    </div>
                                 </div>
                                 <div class="col-lg-3 mt-3">
                                    <label class="col-lg-12 col-form-label">Term Loan Received From Bank:<sup>*</sup></label>
                                    <div class="col-lg-12">
                                       <div class="custom-control custom-radio custom-control-inline">
                                          <input type="radio" class="custom-control-input" onchange="check_yesno();" name="yesno2" id="yesCheck3" value="Yes" <?php if($project_data->proj_term_loan_sac_yesno == 'Yes'){echo 'checked';}?>>
                                          <label class="custom-control-label" for="yesCheck3">Yes</label>
                                       </div>
                                       <div class="custom-control custom-radio custom-control-inline">
                                          <input type="radio" class="custom-control-input" onchange="check_yesno();" name="yesno2" id="noCheck3" value="No" <?php if($project_data->proj_term_loan_sac_yesno == 'No'){echo 'checked';}elseif(empty($project_data->proj_term_loan_sac_yesno)){echo 'checked';}?> />
                                          <label class="custom-control-label" for="noCheck3">No</label>
                                       </div>
                                       <small class="text-error yesno2"><?php echo form_error('yesno2'); ?></small>
                                    </div>
                                 </div>
                                 <div class="col-lg-3 mt-3">
                                    <div class="form-group" id="ifYes3"  <?php if(empty($project_data->proj_term_loan_sac_yesno)){echo 'style="display:none"';}else{if($project_data->proj_term_loan_sac_yesno == "No"){echo 'style="display:none"';}} ?>>
                                       <div class="form-row">
                                          <label class="col-lg-12 col-form-label">Upload Term loan sanction letter:<sup>*</sup></label>                                
                                          <div class="col-lg-12">
                                             <?php 
                                             if(!empty($project_data->proj_document)){ ?>
                                                <a class="doc_existence" href="<?php echo base_url()?>uploads/document_details/<?php echo $project_data->proj_document?>" download style="color: #1a028c; text-decoration: none;">Download File</a>
                                             <?php  } ?>
                                             <div class="custom-file ">
                                                <input type="file" class="custom-file-input" name="proj_document" id="proj_document" aria-describedby="inputGroupFileAddon02" style="left: -30%;" onchange="return fileValidation()" >  
                                                <label class="custom-file-label" for="inputGroupFile02"></label>
                                             </div>
                                             <small class="text-error proj_document"><?php echo form_error('proj_document');?></small>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-3">
                                    <label class="col-lg-12 col-form-label">Term loan received from Bank:<sup>*</sup></label>
                                    <div class="col-lg-12">
                                       <input type="text" class="form-control" name="proj_tl_cost" id="proj_tl_cost" maxlength="10" placeholder="In Lakh" value="<?=$project_data->proj_tl_cost;?>" />
                                       <small class="text-error proj_tl_cost"><?php echo form_error('proj_tl_cost');?></small>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-12 text-center mt-2">
                                    
                                 <div class="get_error_total" align="center" style="background-color: #bf0000;color: #fff;max-width: 500px;margin: 0 auto;padding: 10px 20px;display: none;">sdgdg</div>
                                 <div class="get_success_total" align="left" style="background-color: #174b10;color: #fff;max-width: 500px;margin: 0 auto;padding: 10px 20px;display: none;">ssddg</div>
                                 <div class="div_roller_total" align="center" style="display: none;"><img src="<?php echo base_url('assets/images/ajax_loader.gif'); ?>" style="max-width: 60px;" /></div>
                                       
                              </div>
                           
                              <div class="col-lg-12 text-right">
                                 <button class="btn btn-primary mb-2" type="button" name="submit" id="prev_btn" onclick="goto_prev_chk();">Previous</button> 
                                 <button class="btn btn-primary mb-2" type="button" name="submit" id="next_btn" onclick="goto_project_chk();">Next</button>
                              </div>
                              </div>
                           </div>
                        </fieldset>
                        </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>     
         <!-- -----capacity----- -->
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

   $(function(){
      $('#alert_msg,.text-error').delay(8000).fadeOut();
      $( "#proj_proposed_pro_date" ).datepicker({ dateFormat: 'dd-mm-yy' });
      $('.msg_cont2').delay(8000).fadeOut();
   });

   function setExistingorProposed(val)
   {
      //alert(val);
      if(val=='Existing')
      {
         $('#pres_cap').show();
         $('#prop_cap').show();
      }else if(val=='Proposed')
      {
         $('#pres_cap').hide();
         $('#prop_cap').show();
      }else{
         $('#pres_cap, #prop_cap').hide();
      }
   }

   function gotocheck_daagdetails(){
      var proj_land_type = $('#proj_land_type option:selected').val().trim();
      if(proj_land_type != ""){
         if(proj_land_type == "Own"){
            $('#daag_doclabel').html('land porcha/ROR Document');
            $('.daagno_div, .daagno_docset').show();
         }else if(proj_land_type == "Rented"){
            $('.daagno_div').hide();
            $('#daag_doclabel').html('Agreement Document copy');
            $('.daagno_docset').show();
         }else if(proj_land_type == "Lease"){
            $('.daagno_div').hide();
            $('#daag_doclabel').html('Dead/Agreement Document copy');
            $('.daagno_docset').show();
         }else{
            $('#daag_doclabel').html('');
            $('.daagno_div, .daagno_docset').hide();   
         }
      }else{
         $('#daag_doclabel').html('');
         $('.daagno_div, .daagno_docset').hide();
      }
   }

   function check_yesno(){
		var has_yesno = $("input[name='yesno2']:checked").val();
		if(has_yesno == "Yes"){
            $("#ifYes3").fadeIn();
		}else{
            $("#ifYes3").fadeOut();
		}
	}

   

   function lfn_SetSubDivision(district_code)
   {
      //alert(district_id);
      if(district_code != ""){
         $.ajax({
            url: "<?php echo base_url('main/ajax_get_subdivision') ?>",
            type: 'POST',
            data: {'district_code':district_code},
            success: function(data) {
               //alert(data);
               $('#p_Sub_Division').html(data);
               $('#p_block, #p_gram_panchayat').html('<option value="">--Select---</option>');
            }
         });
      }else{
         $('#p_Sub_Division, #p_block, #p_gram_panchayat').html('<option value="">--Select---</option>');
      }
      

   }

   function lfn_SetBlock(Sub_Division)
   {
      if(Sub_Division != ""){
         $.ajax({
            url: "<?php echo base_url('main/ajax_get_block') ?>",
            type: 'POST',
            data: {'Sub_Division':Sub_Division},
            success: function(data) {
            //alert(data); return false;
               $('#p_block').html(data);
               $('#p_gram_panchayat').html('<option value="">--Select---</option>');
            }
         });
      }else{
         $('#p_block, #p_gram_panchayat').html('<option value="">--Select---</option>');
      }
   }

   function lfn_SetPanchayat(gram_panchayat)
   {
      if(gram_panchayat != ""){
         $.ajax({
            url: "<?php echo base_url('main/ajax_get_panchayat') ?>",
            type: 'POST',
            data: {'gram_panchayat':gram_panchayat},
            success: function(data) {
            //alert(data); return false;
            $('#p_gram_panchayat').html(data);
            }
         });
      }else{
         $('#p_gram_panchayat').html('<option value="">--Select--</option>');
      }
   }

   function lfn_SetBranch(proj_bank_name)
   {
      //alert(proj_bank_name);
      if(proj_bank_name != ""){

         $.ajax({
            url: "<?php echo base_url('userset/ajax_get_branch') ?>",
            type: 'POST',
            data: {'proj_bank_name':proj_bank_name},
            success: function(data) {
               //alert(data);
               $('#proj_branch').html(data);
            }
         });

      }else{
         $('#proj_branch').html("---Select---");
      }

   }

   function lfn_SetIfsc(proj_branch)
   {
      if(proj_bank_name != ""){
         $.ajax({
            url: "<?php echo base_url('userset/ajax_get_ifsc') ?>",
            type: 'POST',
            data: {'proj_branch':proj_branch},
            success: function(data) {
            //alert(data); return false;
            //$('#proj_ifsc').html(data);
            $("#proj_ifsc").val(data);
            }
         });
      }else{
         $('#proj_ifsc').val("");
      }
   }

   function goto_prev_chk(){
      $(".div_roller_total").fadeIn();
      $('#prev_btn, #next_btn').prop('disabled', true);
      window.location.replace("<?php echo site_url('userset/goto_prev_step_aftercheck/1')?>");
   }

   function goto_project_chk(){
      $(".div_roller_total").fadeIn();
      $('#prev_btn, #next_btn').prop('disabled', true);
      var e_error = 0;
      var error_message = '';

      var error_message = 'There have some errors plese check above, Try again.';
		var alphaletters_spaces = /^[A-Za-z ]+$/;
		var alphaletters = /^[A-Za-z]+$/;
		var alphanumerics_withspace = /^[A-Za-z0-9/() ]+$/;
		var alphanumerics_spaces = /^[A-Za-z0-9_,\- ]+$/;
		var alphanumerics_no = /^[A-Za-z0-9_/&(@%=<>)\[\]+;:.',\- ]+$/;
		var onlynumerics = /^[0-9]+$/;
		var onlynumerics_withdot = /^[0-9.]+$/;
		var specials_char = /[~`!#$%\^&*+=\[\]\\';./{}()|\\":<>\?]/g;
		var alphanumerics = /^[A-Za-z0-9]+$/;
		var emailpattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
		var allowedExtensions = /(\.pdf|\.PDF|\.jpg|\.jpeg|\.png|\.JPG|\.JPEG|\.PNG)$/i;

      var proj_name = $('#proj_name').val().trim();
      var proj_prod_manufacture = $('#proj_prod_manufacture option:selected').val().trim();

      var proj_address_1 = $('#proj_address_1').val().trim();
      var proj_address_2 = $('#proj_address_2').val().trim();
      var p_district_code = $('#p_district_code option:selected').val().trim();
      var p_Sub_Division = $('#p_Sub_Division option:selected').val().trim();
      var p_block = $('#p_block option:selected').val().trim();
      var p_gram_panchayat = $('#p_gram_panchayat option:selected').val().trim();
      var proj_village = $('#proj_village').val().trim();
      var proj_Post_office = $('#proj_Post_office').val().trim();
      var proj_pincode = $('#proj_pincode').val().trim();

      var proj_daag_no = $('#proj_daag_no').val().trim();
      var proj_khatian_no = $('#proj_khatian_no').val().trim();
      var proj_mouza_no = $('#proj_mouza_no').val().trim();
      var proj_jl_no = $('#proj_jl_no').val().trim();
      var proj_land_type = $('#proj_land_type option:selected').val().trim();
      var proj_current_status = $('#proj_current_status option:selected').val().trim();
      var proj_proposed_pro_date = $('#proj_proposed_pro_date').val().trim();
      var proj_technology = $('#proj_technology option:selected').val().trim();
      var proj_plant_capacity = $('#proj_plant_capacity option:selected').val().trim();
      var proj_present_capacity = $('#proj_present_capacity').val().trim();
      var present_unit = $('#present_unit option:selected').val().trim();
      var proj_proposed_capacity = $('#proj_proposed_capacity').val().trim();
      var propose_unit = $('#propose_unit option:selected').val().trim();

      var proj_bank_name = $('#proj_bank_name option:selected').val().trim();
      var proj_branch = $('#proj_branch option:selected').val().trim();
      var proj_ifsc = $('#proj_ifsc').val().trim();
      var proj_acc_no = $('#proj_acc_no').val().trim();
      var proj_pan_no = $('#proj_pan_no').val().trim();
      var proj_tl_cost = $('#proj_tl_cost').val().trim();
      var has_yesno = $("input[name='yesno2']:checked").val();
      var docexist = '<?php echo $project_data->proj_document ?>'; //$('.doc_existence').html();
      var land_docexist = '<?php echo $project_data->proj_land_document ?>'; //$('.doc_existence').html();
      var files = $('#proj_document')[0].files;
      var files2 = $('#agrement_document')[0].files;
		
      if(proj_name == ""){
			e_error = 1;
			$('.proj_name').html('Name of the Project is Required.');
		}else{
			if(!proj_name.match(alphanumerics_no)){
				e_error = 1;
				$('.proj_name').html('Name of the Project not use special carecters [without _ / & : ( . ) , -], Check again.');
			}else{
				$('.proj_name').html('');
			}	
		}

      if(proj_prod_manufacture == ""){
			e_error = 1;
			$('.proj_prod_manufacture').html('Products to be manufactured is Required.');
		}else{
			if(!proj_prod_manufacture.match(onlynumerics)){
				e_error = 1;
				$('.proj_prod_manufacture').html('Products to be manufactured only numeric value, Check again.');
			}else{
				$('.proj_prod_manufacture').html('');
			}	
		}

      if(proj_address_1 == ""){
			e_error = 1;
			$('.proj_address_1').html('Address 1 is Required.');
		}else{
			if(!proj_address_1.match(alphanumerics_no)){
				e_error = 1;
				$('.proj_address_1').html('Address 1 not use special carecters [without _ / & : ( . ) , -], Check again.');
			}else{
				$('.proj_address_1').html('');
			}	
		}
      if(proj_address_2 == ""){
			e_error = 1;
			$('.proj_address_2').html('Address 2 is Required.');
		}else{
			if(!proj_address_2.match(alphanumerics_no)){
				e_error = 1;
				$('.proj_address_2').html('Address 2 not use special carecters [without _ / & : ( . ) , -], Check again.');
			}else{
				$('.proj_address_2').html('');
			}	
		}

      if(p_district_code == ""){
			e_error = 1;
			$('.p_district_code').html('District is Required.');
		}else{
			if(!p_district_code.match(onlynumerics)){
				e_error = 1;
				$('.p_district_code').html('District only use Numeric Values, Check again.');
			}else{
				$('.p_district_code').html('');
			}	
		}
      if(p_Sub_Division == ""){
			e_error = 1;
			$('.p_Sub_Division').html('Sub-Division is Required.');
		}else{
			if(!p_Sub_Division.match(onlynumerics)){
				e_error = 1;
				$('.p_Sub_Division').html('Sub-Division only use Numeric Values, Check again.');
			}else{
				$('.p_Sub_Division').html('');
			}	
		}
      if(p_block == ""){
			e_error = 1;
			$('.p_block').html('Block/Municipality is Required.');
		}else{
			if(!p_block.match(onlynumerics)){
				e_error = 1;
				$('.p_block').html('Block/Municipality only use Numeric Values, Check again.');
			}else{
				$('.p_block').html('');
			}	
		}
      if(p_gram_panchayat == ""){
			e_error = 1;
			$('.p_gram_panchayat').html('Gram Panchayat is Required.');
		}else{
			if(!p_gram_panchayat.match(onlynumerics)){
				e_error = 1;
				$('.p_gram_panchayat').html('Gram Panchayat only use Numeric Values, Check again.');
			}else{
				$('.p_gram_panchayat').html('');
			}	
		}
      if(proj_village == ""){
			e_error = 1;
			$('.proj_village').html('Village/Town is Required.');
		}else{
			if(!proj_village.match(alphanumerics_no)){
				e_error = 1;
				$('.proj_village').html('Village/Town not use special carecters [without _ / & : ( . ) , -], Check again.');
			}else{
				$('.proj_village').html('');
			}	
		}
      if(proj_Post_office == ""){
			e_error = 1;
			$('.proj_Post_office').html('Police Station is Required.');
		}else{
			if(!proj_Post_office.match(alphanumerics_no)){
				e_error = 1;
				$('.proj_Post_office').html('Police Station not use special carecters [without _ / & : ( . ) , -], Check again.');
			}else{
				$('.proj_Post_office').html('');
			}	
		}
      if(proj_pincode == ""){
			e_error = 1;
			$('.proj_pincode').html('Pincode is Required.');
		}else{
			if(!proj_pincode.match(onlynumerics)){
				e_error = 1;
				$('.proj_pincode').html('Pincode needs only 6 digit.');
			}else if(proj_pincode.length != 6){
				e_error = 1;
				$('.proj_pincode').html('Pincode needs only 6 digit.');
			}else{
				$('.proj_pincode').html('');
			}	
		}

      if(proj_current_status == ""){
			e_error = 1;
			$('.proj_current_status').html('Current Status is Required.');
		}else{
			if(!proj_current_status.match(alphaletters_spaces)){
				e_error = 1;
				$('.proj_current_status').html('Current Status needs only Alphabet Values with Space.');
         }else if(proj_current_status == "Started"){
            e_error = 1;
				$('.proj_current_status').html('Current Status should be work in progress or not started.');
         }else{
				$('.proj_current_status').html('');
			}	
		}
      if(proj_land_type == ""){
			e_error = 1;
			$('.proj_land_type').html('Land Type is Required.');
		}else{
			if(!proj_land_type.match(alphaletters)){
				e_error = 1;
				$('.proj_land_type').html('Land Type needs only Alphabet Values.');
			}else{
				$('.proj_land_type').html('');
            if(proj_land_type == "Own"){

               if(proj_daag_no == ""){
                  e_error = 1;
                  $('.proj_daag_no').html('Daag No is Required.');
               }else{
                  if(!proj_daag_no.match(alphanumerics_no)){
                     e_error = 1;
                     $('.proj_daag_no').html('Daag No not use special carecters [without _ / & : ( . ) , -], Check again.');
                  }else{
                     $('.proj_daag_no').html('');
                  }	
               }
               if(proj_khatian_no == ""){
                  e_error = 1;
                  $('.proj_khatian_no').html('Khatian No is Required.');
               }else{
                  if(!proj_khatian_no.match(alphanumerics_no)){
                     e_error = 1;
                     $('.proj_khatian_no').html('Khatian No not use special carecters [without _ / & : ( . ) , -], Check again.');
                  }else{
                     $('.proj_khatian_no').html('');
                  }	
               }
               if(proj_mouza_no == ""){
                  e_error = 1;
                  $('.proj_mouza_no').html('Mouza No is Required.');
               }else{
                  if(!proj_mouza_no.match(alphanumerics_no)){
                     e_error = 1;
                     $('.proj_mouza_no').html('Mouza No not use special carecters [without _ / & : ( . ) , -], Check again.');
                  }else{
                     $('.proj_mouza_no').html('');
                  }	
               }
               if(proj_jl_no == ""){
                  e_error = 1;
                  $('.proj_jl_no').html('J.L. No is Required.');
               }else{
                  if(!proj_jl_no.match(alphanumerics_no)){
                     e_error = 1;
                     $('.proj_jl_no').html('J.L. No not use special carecters [without _ / & : ( . ) , -], Check again.');
                  }else{
                     $('.proj_jl_no').html('');
                  }	
               }
               if(proj_proposed_pro_date == "") {
                  e_error = 1;
                  $('.proj_proposed_pro_date').html('Proposed production date is Required.');
               }else{
                  $('.proj_proposed_pro_date').html('');
               }
               if(proj_technology == ""){
                  e_error = 1;
                  $('.proj_technology').html('Technology is Required.');
               }else{
                  if(!proj_technology.match(alphaletters)){
                     e_error = 1;
                     $('.proj_technology').html('Technology needs only Alphabet Values.');
                  }else{
                     $('.proj_technology').html('');
                  }	
               }
               if(proj_plant_capacity == ""){
                  e_error = 1;
                  $('.proj_plant_capacity').html('Capacity of the Plant is Required.');
               }else{
                  if(!proj_plant_capacity.match(alphaletters)){
                     e_error = 1;
                     $('.proj_plant_capacity').html('Capacity of the Plant needs only Alphabet Values.');
                  }else{
                     $('.proj_plant_capacity').html('');
                     if(proj_plant_capacity == "Existing"){

                        if(proj_present_capacity == ""){
                           e_error = 1;
                           $('.proj_present_capacity').html('Present Capacity is Required.');
                        }else{
                           if(!proj_present_capacity.match(onlynumerics)){
                              e_error = 1;
                              $('.proj_present_capacity').html('Present Capacity needs only Numeric Values.');
                           }else{
                              $('.proj_present_capacity').html('');
                           }	
                        }
                        if(present_unit == "") {
                           e_error = 1;
                           $('.present_unit').html('Present Unit is Required.');
                        }else{
                           $('.present_unit').html('');
                        }
                        if(proj_proposed_capacity == ""){
                           e_error = 1;
                           $('.proj_proposed_capacity').html('Proposed Capacity is Required.');
                        }else{
                           if(!proj_proposed_capacity.match(onlynumerics)){
                              e_error = 1;
                              $('.proj_proposed_capacity').html('Proposed Capacity needs only Numeric Values.');
                           }else{
                              $('.proj_proposed_capacity').html('');
                           }	
                        }
                        if(propose_unit == "") {
                           e_error = 1;
                           $('.propose_unit').html('Proposed Unit is Required.');
                        }else{
                           $('.propose_unit').html('');
                        }


                     }else if(proj_plant_capacity == "Proposed"){

                        $('.proj_present_capacity, .present_unit').html('');
                        if(proj_proposed_capacity == ""){
                           e_error = 1;
                           $('.proj_proposed_capacity').html('Proposed Capacity is Required.');
                        }else{
                           if(!proj_proposed_capacity.match(onlynumerics)){
                              e_error = 1;
                              $('.proj_proposed_capacity').html('Proposed Capacity needs only Numeric Values.');
                           }else{
                              $('.proj_proposed_capacity').html('');
                           }	
                        }
                        if(propose_unit == "") {
                           e_error = 1;
                           $('.propose_unit').html('Proposed Unit is Required.');
                        }else{
                           $('.propose_unit').html('');
                        }

                     }
                  }	
               }

            }else{
               $('.proj_daag_no, .proj_khatian_no, .proj_mouza_no, .proj_jl_no, .proj_proposed_pro_date, .proj_technology, .proj_plant_capacity, .proj_present_capacity, .proj_proposed_capacity, .present_unit, .propose_unit').html('');
            }
         }
		}
      
      
      if(proj_bank_name == ""){
			e_error = 1;
			$('.proj_bank_name').html('Name of Bank is Required.');
		}else{
			if(!proj_bank_name.match(onlynumerics)){
				e_error = 1;
				$('.proj_bank_name').html('Name of Bank needs only Numeric Values.');
			}else{
				$('.proj_bank_name').html('');
			}	
		}
      if(proj_branch == ""){
			e_error = 1;
			$('.proj_branch').html('Name of Branch is Required.');
		}else{
			if(!proj_branch.match(onlynumerics)){
				e_error = 1;
				$('.proj_branch').html('Name of Branch needs only Numeric Values.');
			}else{
				$('.proj_branch').html('');
			}	
		}
      if(proj_ifsc == ""){
			e_error = 1;
			$('.proj_ifsc').html('IFSC of Branch is Required.');
		}else{
			if(!proj_ifsc.match(alphanumerics)){
				e_error = 1;
				$('.proj_ifsc').html('IFSC of Branch needs only Alpha Numeric Values.');
			}else{
				$('.proj_ifsc').html('');
			}	
		}
      if(proj_acc_no == ""){
			e_error = 1;
			$('.proj_acc_no').html('Bank Account No. is Required.');
		}else{
			if(!proj_acc_no.match(onlynumerics)){
				e_error = 1;
				$('.proj_acc_no').html('Bank Account No. needs only Numeric Values.');
			}else{
				$('.proj_acc_no').html('');
			}	
		}
      if(proj_pan_no == ""){
			e_error = 1;
			$('.proj_pan_no').html('PAN No. is Required.');
		}else{
			if(!proj_pan_no.match(alphanumerics)){
				e_error = 1;
				$('.proj_pan_no').html('PAN No. needs only Alpha Numeric Values.');
			}else if(proj_pan_no.length != 10){
            e_error = 1;
				$('.proj_pan_no').html('PAN No. needs only 10 Alpha Numeric Digits.');
         }else{
				$('.proj_pan_no').html('');
			}	
		}

      if (has_yesno == "" || has_yesno == undefined) {
			e_error = 1;
			$('.yesno2').html('Term loan sanction is Required.');
		} else {
			if (!has_yesno.match(alphaletters)) {
				e_error = 1;
				$('.yesno2').html('Term loan sanction only Alphabet value, Check again.');
			} else {
				$('.yesno2').html('');

				if (has_yesno == "Yes") {

               if(docexist == ""){
                  if (document.getElementById("proj_document").files.length == 0) {
                     e_error = 1;
                     $('.proj_document').html('Term loan sanction letter is Required.');
                  } else {
                     var fileInput = document.getElementById('proj_document');
                     var filePath = fileInput.value;
                     if (!allowedExtensions.exec(filePath)) {
                        e_error = 1;
                        $('.proj_document').html('Term loan sanction letter file type Invalid.(Use PDF/PNG/JPG)');
                     } else {
                        $('.proj_document').html('');
                     }
                  }
               }else{
                  $('.proj_document').html('');
               }
					

				}else if(has_yesno == "No"){
               e_error = 1;
               $('.yesno2').html('Term loan sanction always set "YES", Check again.');
				}
			}
		}

      if(proj_tl_cost == ""){
			e_error = 1;
			$('.proj_tl_cost').html('Term loan received from Bank is Required.');
		}else{
			if(!proj_tl_cost.match(onlynumerics_withdot)){
				e_error = 1;
				$('.proj_tl_cost').html('Term loan received from Bank only numeric value, Check again.');
			}else{
				$('.proj_tl_cost').html('');
			}	
		}
      if(land_docexist == ""){
         if (document.getElementById("agrement_document").files.length == 0) {
            e_error = 1;
            $('.agrement_document').html('Document is Required.');
         } else {
            var fileInput = document.getElementById('agrement_document');
            var filePath = fileInput.value;
            if (!allowedExtensions.exec(filePath)) {
               e_error = 1;
               $('.agrement_document').html('Document type Invalid.(Use PDF/PNG/JPG)');
            } else {
               $('.agrement_document').html('');
            }
         }
      }else{
         $('.agrement_document').html('');
      }

      if(e_error == 1){
         $('.div_roller_total').fadeOut();
         if(error_message != ""){
            $('.get_error_total').html(error_message);
            $(".get_error_total").fadeIn();
         }
         $(".text-error").fadeIn();
         $('#prev_btn, #next_btn').prop('disabled', false);
         setTimeout(function(){ $('.text-error, .get_error_total').fadeOut(); }, 5000);
      }else{

         var form_data = new FormData();
         form_data.append('proj_name', proj_name);
         form_data.append('proj_prod_manufacture', proj_prod_manufacture);

         form_data.append('proj_address_1', proj_address_1);
         form_data.append('proj_address_2', proj_address_2);
         form_data.append('p_district_code', p_district_code);
         form_data.append('p_Sub_Division', p_Sub_Division);
         form_data.append('p_block', p_block);
         form_data.append('p_gram_panchayat', p_gram_panchayat);
         form_data.append('proj_village', proj_village);
         form_data.append('proj_Post_office', proj_Post_office);
         form_data.append('proj_pincode', proj_pincode);

         form_data.append('proj_daag_no', proj_daag_no);
         form_data.append('proj_khatian_no', proj_khatian_no);
         form_data.append('proj_mouza_no', proj_mouza_no);
         form_data.append('proj_jl_no', proj_jl_no);
         form_data.append('proj_land_type', proj_land_type);
         form_data.append('proj_current_status', proj_current_status);
         form_data.append('proj_proposed_pro_date', proj_proposed_pro_date);
         form_data.append('proj_technology', proj_technology);
         form_data.append('proj_plant_capacity', proj_plant_capacity);
         form_data.append('proj_present_capacity', proj_present_capacity);
         form_data.append('present_unit', present_unit);
         form_data.append('proj_proposed_capacity', proj_proposed_capacity);
         form_data.append('propose_unit', propose_unit);

         form_data.append('proj_bank_name', proj_bank_name);
         form_data.append('proj_branch', proj_branch);
         form_data.append('proj_ifsc', proj_ifsc);
         form_data.append('proj_acc_no', proj_acc_no);
         form_data.append('proj_pan_no', proj_pan_no);
         form_data.append('proj_tl_cost', proj_tl_cost);
         form_data.append('has_yesno', has_yesno);
         form_data.append('docexist', docexist);
         form_data.append('land_docexist', land_docexist);
         form_data.append("files", files[0]);
         form_data.append("files2", files2[0]);

         $.ajax({
            method: 'POST',
            url: '<?php echo base_url() . "userset/update_projectall_details"; ?>',
            data: form_data,
            dataType: 'JSON',
            contentType: false,
            processData: false,
            success: function(data) {
               //alert(data.msg);
               if (data.msg == 1) {
                  //console.log(data);
                  //alert(data.msg[0].space_rate);
                  $('.div_roller_total').fadeOut();
                  $('.get_success_total').html('Project Details is Updated Successfully.');
                  $(".get_success_total").fadeIn();
                  $('input, select').val('');
                  $('input').html('');
                  setTimeout(function() {
                     $('.get_success_total').fadeOut();
                     window.location.replace("<?php echo site_url('userset/proj_cost_details')?>");
                  }, 3000);

               } else {
                  $('.div_roller_total').fadeOut();
						$('.get_error_total').html(data.e_msg);
						$(".get_error_total").fadeIn();
						setTimeout(function(){ $('.get_error_total').fadeOut(); }, 3000);
						$('#prev_btn, #next_btn').prop('disabled', false);     
               }

            }
         });
      
      }

      
   }

   /*$("#addFrm input[name='proj_acc_no']").keydown(function (event) {
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

       if(account_no=='')
       {
          $('.ProAcc').show().html('Please Enter Valid Account No');
          setTimeout(function(){$('.ProAcc').hide()}, 1000);
       }
       event.preventDefault();
    }
 }
});*/

   

</script>
