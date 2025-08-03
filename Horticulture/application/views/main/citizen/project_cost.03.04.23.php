<?php $this->load->view('common/header_citizen'); ?>   
<style>
   .proj_working_capital{color:red;}
    .text-error{color: #f05555;}
</style>
      <div class="page-body-wrapper">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-12 grid-margin mt-5 mx-auto">
                  <h4 class="card-title">Machinery Specification & Project Cost</h4>
               </div>
            </div>
            <div class="row">
                              <div class="col-lg-12 text-center text-success msg_cont2" >
                                 <?php
                                 if(!empty($this->session->flashdata('successmsg')))
                                 {
                                 echo $this->session->flashdata('successmsg');
                                  // echo '<script>
                                  // setTimeout(function().delay(8000).fadeOut();</script>';
                                  echo '<script>
                                 setTimeout(function(){window.location.href="'.base_url().'applicant/documents_list";}, 4000);</script>';
                                 //redirect("applicant/documents_list");
                                 }
                                 ?>
                                 <?php
                                 if(!empty($this->session->flashdata('successmsg')))
                                 {
                                 echo $this->session->flashdata('errormsg');
                                  // echo '<script>
                                  // setTimeout(function().delay(8000).fadeOut();</script>';
                                 //redirect("applicant/project");
                                 }
                                 ?>
                              </div>
                           </div>
            <?php echo form_open_multipart('applicant/project_cost',array('id'=>"addFrm",'name'=>"addFrm",'onsubmit'=>"return submitProjectCost();")); ?>

             <?php //echo validation_errors();?>
            <div class="row">
               <input type="hidden" name="application_id" value="<?php echo $application_id;?>" />
               <div class="col-lg-12 grid-margin mx-auto">
                  <div class="card">
                     <div class="card-body">
                        
                        <!-- <form class="form-sample" action="<?php //echo base_url();?>Applicant/submit_project_cost" method="POST" > -->
                           <div class="form-group form-row">
                              <div class="col-lg-12">
                                 <h5 class="w-100 d-block mb-4 text-decoration-underline text-center mt-1">Plant & Machinery Specification</h5>
                                 
                              </div>
                           </div>
                           <div class="row cost-field">
                              <div class="col-lg-12">
                                 <div class="form-group form-row text-left mb-0">
                                    <div class="col-lg-11">
                                       <div class="row desk_label">
                                          <label class="col-lg-2 col-form-label px-1">Machine Name:</label>
                                          <label class="col-lg-2 col-form-label px-1">Manufacturer Name:</label>
                                          <label class="col-lg-1 col-form-label px-1">Serial No:</label>
                                          <label class="col-lg-2 col-form-label px-1">Model No:</label>
                                          <label class="col-lg-2 col-form-label px-1">Machine Type:</label>
                                          <label class="col-lg-1 col-form-label px-1">Cost:</label>
                                          <label class="col-lg-2 col-form-label px-1">Capacity:</label>
                                       </div>
                                    </div>
                                 </div>
                                 <?php 
                                 if(!empty($machine_data)){
                                    ?>
                                 <div class="form-group form-row text-left">
                                    
                                    <?php 
                                 
                                 foreach($machine_data as $row) {?>
                                    <input type="hidden" name="plant_id[]" value="<?php echo $row->id; ?>">
                                 <div class="col-lg-11">
                                       <div class="row">
                                          <label class="col-lg-2 col-form-label mob_label px-1">Machine Name:</label>
                                          <div class="col-lg-2 px-1">
                                             <?php
                                                $machine_name ='';
                                                if($row->machine_name !=''){
                                                   $machine_name = $row->machine_name;
                                                }
                                                if(set_value('db_machine_name[]') !=''){
                                                   $machine_name = set_value('db_machine_name[]');
                                                }
                                             ?>                
                                             <input type="text" class="form-control" name="db_machine_name[]" value="<?=$machine_name;?>"  id="machine_name" />
                                             <small class="text-error"><?php echo form_error('db_machine_name[]');?></small>
                                          </div>
                                          <label class="col-lg-2 col-form-label mob_label px-1">Manufacturer Name:</label>
                                          <div class="col-lg-2 px-1">
                                                <?php
                                                $manufacturer_name ='';
                                                if($row->manufacturer_name !=''){
                                                   $manufacturer_name = $row->manufacturer_name;
                                                }
                                                if(set_value('db_manufacturer_name[]') !=''){
                                                   $manufacturer_name = set_value('db_manufacturer_name[]');
                                                }
                                                 ?> 
                                             <input type="text" class="form-control" name="db_manufacturer_name[]" value="<?=$manufacturer_name;?>" id="manufacturer_name" />
                                             <small class="text-error"><?php echo form_error('db_manufacturer_name[]');?></small>
                                          </div>
                                          <label class="col-lg-1 col-form-label mob_label px-1">Serial No:</label>
                                          <div class="col-lg-1 px-1">
                                                <?php
                                                $serial_no ='';
                                                if($row->serial_no !=''){
                                                   $serial_no = $row->serial_no;
                                                }
                                                if(set_value('db_serial_no[]') !=''){
                                                   $serial_no = set_value('db_serial_no[]');
                                                }
                                                 ?> 
                                             <input type="text" class="form-control" name="db_serial_no[]" id="serial_no" value="<?=$serial_no;?>" />
                                             <small class="text-error"><?php echo form_error('db_serial_no[]');?></small>
                                          </div>
                                          <label class="col-lg-2 col-form-label mob_label px-1">Model No:</label>
                                          <div class="col-lg-2 px-1">
                                                <?php
                                                $model_no ='';
                                                if($row->model_no !=''){
                                                   $model_no = $row->model_no;
                                                }
                                                if(set_value('db_model_no[]') !=''){
                                                   $model_no = set_value('db_model_no[]');
                                                }
                                                 ?> 
                                             <input type="text" class="form-control" name="db_model_no[]" id="model_no" value="<?=$model_no;?>" />
                                             <small class="text-error"><?php echo form_error('db_model_no[]');?></small>
                                          </div>
                                          <label class="col-lg-2 col-form-label mob_label px-1">Machine Type:</label>
                                          <div class="col-lg-2 px-1">
                                                <?php
                                                $machine_type ='';
                                                if($row->machine_type !=''){
                                                   $machine_type = $row->machine_type;
                                                }
                                                if(set_value('db_machine_type[]') !=''){
                                                   $machine_type = set_value('db_machine_type[]');
                                                }
                                                 ?> 
                                             <select class="form-control" name="db_machine_type[]" id="machine_type">
                                                <option selecte disabled>---Select---</option>
                                                <option value="Imported"<?php if($machine_type=="Imported"){echo "selected";}?>>Imported</option>
                                                <option value="Indigenous"<?php if($machine_type=="Indigenous"){echo "selected";}?>>Indigenous</option>
                                                <option value="Assembled / Fabricated"<?php if($machine_type=="Assembled / Fabricated"){echo "selected";}?>>Assembled / Fabricated</option>
                                             </select>
                                             <small class="text-error"><?php echo form_error('db_machine_type[]');?></small>
                                          </div>
                                          <!-- <label class="col-lg-1 col-form-label mob_label px-1">Warenty:</label>
                                          <div class="col-lg-1 px-1">
                                             <input type="text" class="form-control" />
                                          </div> -->
                                          <label class="col-lg-1 col-form-label mob_label px-1">Cost:</label>
                                          <div class="col-lg-1 cost_field px-1">
                                             <?php
                                                $cost ='';
                                                if($row->cost !=''){
                                                   $cost = $row->cost;
                                                }
                                                if(set_value('db_cost[]') !=''){
                                                   $cost = set_value('db_cost[]');
                                                }
                                                 ?> 
                                          <input type="text" class="form-control" name="db_cost[]" value="<?=$cost;?>" onchange="get_total_project_cost();" id="cost" placeholder="In Lakh"/>
                                          <small class="text-error"><?php echo form_error('db_cost[]');?></small>
                                          </div> 
                                          <label class="col-lg-2 col-form-label mob_label px-1">Capacity:</label>
                                          <div class="col-lg-2 px-1">
                                                <?php
                                                $capacity ='';
                                                if($row->capacity !=''){
                                                   $capacity = $row->capacity;
                                                }
                                                if(set_value('db_capacity[]') !=''){
                                                   $capacity = set_value('db_capacity[]');
                                                }
                                                 ?> 
                                             <input type="text" class="form-control" name="db_capacity[]" value="<?=$capacity;?>" id="capacity" />
                                             <small class="text-error"><?php echo form_error('db_capacity[]');?></small>
                                          </div>
                                          <!-- <label class="col-lg-1 col-form-label mob_label px-1">Unit:</label>
                                          <div class="col-lg-1 px-1">
                                             <select class="form-control">
                                                <option selecte disabled>---Select---</option>
                                                <option>HP</option>
                                                <option>CC</option>
                                             </select>
                                          </div> -->
                                       </div>
                                 </div>
                                 <?php }//end of loop 
                               ?>
                                    <div class="col-lg-1">
                                       <input type="button" class="btn btn-primary" value="+" onclick="addRow55()">
                                    </div>
                                 </div>
                                    
                                 
                              <?php }else{ ?>
                                 <div class="form-group form-row text-left">
                                    <div class="col-lg-11">
                                       <div class="row">
                                          <label class="col-lg-2 col-form-label mob_label px-1">Machine Name:</label>
                                          <div class="col-lg-2 px-1">
                                                             
                                             <input type="text" class="form-control" name="machine_name[]" value="<?php echo set_value('machine_name[]'); ?>"  id="machine_name" />
                                             <small class="text-error"><?php echo form_error('machine_name[]');?></small>
                                          </div>
                                          <label class="col-lg-2 col-form-label mob_label px-1">Manufacturer Name:</label>
                                          <div class="col-lg-2 px-1">
                                             <input type="text" class="form-control" name="manufacturer_name[]" value="<?php echo set_value('manufacturer_name[]'); ?>" id="manufacturer_name" />
                                             <small class="text-error"><?php echo form_error('manufacturer_name[]');?></small>
                                          </div>
                                          <label class="col-lg-1 col-form-label mob_label px-1">Serial No:</label>
                                          <div class="col-lg-1 px-1">
                                                 
                                             <input type="text" class="form-control" name="serial_no[]" id="serial_no" value="<?=set_value('serial_no[]');?>" />
                                             <small class="text-error"><?php echo form_error('serial_no[]');?></small>
                                          </div>
                                          <label class="col-lg-2 col-form-label mob_label px-1">Model No:</label>
                                          <div class="col-lg-2 px-1">
                                             <input type="text" class="form-control" name="model_no[]" id="model_no" value="<?=set_value('model_no[]');?>" />
                                             <small class="text-error"><?php echo form_error('model_no[]');?></small>
                                          </div>
                                          <label class="col-lg-2 col-form-label mob_label px-1">Machine Type:</label>
                                          <div class="col-lg-2 px-1">
                                                <?php
                                                $machine_type = '';
                                                if(set_value('machine_type[]') !=''){
                                                   $machine_type = set_value('machine_type[]');
                                                }
                                                 ?> 
                                             <select class="form-control" name="machine_type[]" id="machine_type">
                                                <option selecte disabled>---Select---</option>
                                                <option value="Imported"<?php if($machine_type=="Imported"){echo "selected";}?>>Imported</option>
                                                <option value="Indigenous"<?php if($machine_type=="Indigenous"){echo "selected";}?>>Indigenous</option>
                                                <option value="Assembled / Fabricated"<?php if($machine_type=="Assembled / Fabricated"){echo "selected";}?>>Assembled / Fabricated</option>
                                             </select>
                                             <small class="text-error"><?php echo form_error('machine_type[]');?></small>
                                          </div>
                                          <!-- <label class="col-lg-1 col-form-label mob_label px-1">Warenty:</label>
                                          <div class="col-lg-1 px-1">
                                             <input type="text" class="form-control" />
                                          </div> -->
                                          <label class="col-lg-1 col-form-label mob_label px-1">Cost:</label>
                                          <div class="col-lg-1 cost_field px-1">
                                             <?php
                                                $cost ='';
                                                
                                                if(set_value('cost[]') !=''){
                                                   $cost = set_value('cost[]');
                                                }
                                                 ?> 
                                          <input type="text" class="form-control" name="cost[]" placeholder="In Lakh" value="<?=$cost;?>" onchange="get_total_project_cost();" id="cost"/><span>In Lakh</span>
                                          <small class="text-error"><?php echo form_error('cost[]');?></small>
                                          </div> 
                                          <label class="col-lg-2 col-form-label mob_label px-1">Capacity:</label>
                                          <div class="col-lg-2 px-1">
                                                <?php
                                                $capacity ='';
                                                
                                                if(set_value('capacity[]') !=''){
                                                   $capacity = set_value('capacity[]');
                                                }
                                                 ?> 
                                             <input type="text" class="form-control" name="capacity[]" value="<?=$capacity;?>" id="capacity" />
                                             <small class="text-error"><?php echo form_error('capacity[]');?></small>
                                          </div>
                                          <!-- <label class="col-lg-1 col-form-label mob_label px-1">Unit:</label>
                                          <div class="col-lg-1 px-1">
                                             <select class="form-control">
                                                <option selecte disabled>---Select---</option>
                                                <option>HP</option>
                                                <option>CC</option>
                                             </select>
                                          </div> -->
                                       </div>
                                    </div>
                                    <div class="col-lg-1">
                                       <input type="button" class="btn btn-primary" value="+" onclick="addRow55()">
                                    </div>
                                 </div>
                            <?php  } ?>
                              </div>
                              <div class="col-lg-12" id="addMoreRow">
                                 
                              </div>
                           </div> 
                           <!-- <div id="newinput"></div> -->
                     </div>
                  </div>
               </div>
            </div>
             
            <div class="row">
               <div class="col-lg-12 grid-margin mx-auto">
                  <div class="card">
                     <div class="card-body">
                        <form class="form-sample cost_field">
                           <div class="form-group form-row">
                              <div class="col-lg-12">
                                 <h5 class="w-100 d-block mb-4 text-decoration-underline text-center">Project Cost</h5>
                              </div>
                           </div>
                           <div class="form-group form-row">
                              <label class="col-lg-3 col-form-label">Land & Buiding Cost:</label>
                              <div class="col-lg-3">
                                 <?php
                                    $proj_land_building_cost ='';
                                    if(!empty($project_data)){
                                       if($project_data->proj_land_building_cost !=''){
                                          $proj_land_building_cost = $project_data->proj_land_building_cost;
                                       }
                                    }
                                       if(set_value('proj_land_building_cost') !=''){
                                          $proj_land_building_cost = set_value('proj_land_building_cost');
                                       }
                                    
                                     ?>
                                  
                                 <input type="text" class="form-control" name="proj_land_building_cost" onchange="get_final_project_cost();" value="<?=$proj_land_building_cost;?>"  />
                                 <small class="text-error proj_land_building_cost"><?php echo form_error('proj_land_building_cost');?></small>
                              </div>
                              <label class="col-lg-3 col-form-label">Plant and Machineries Cost:</label>
                              <div class="col-lg-3">
                                 <?php
                                    $proj_plant_machinary_cost ='';
                                    if(!empty($project_data)){
                                       if($project_data->proj_plant_machinary_cost !=''){
                                          $proj_plant_machinary_cost = $project_data->proj_plant_machinary_cost;
                                       }
                                    }
                                    if(set_value('proj_plant_machinary_cost') !=''){
                                       $proj_plant_machinary_cost = set_value('proj_plant_machinary_cost');
                                    }
                                 ?>
                              <input type="text" class="form-control" readonly name="proj_plant_machinary_cost" value="<?=$proj_plant_machinary_cost;?>" onchange="get_final_project_cost();" /><span>In Lakh</span>
                                 <small class="text-error"><?php echo form_error('proj_plant_machinary_cost');?></small>
                              </div>
                           </div>
                           <div class="form-group form-row">                                
                              <label class="col-lg-3 col-form-label">Misc. Fixed Assets:</label>
                              <div class="col-lg-3">
                                 <?php
                                    $proj_misc_fixed_assets ='';
                                    if(!empty($project_data))
                                    {
                                       if($project_data->proj_misc_fixed_assets !=''){
                                          $proj_misc_fixed_assets = $project_data->proj_misc_fixed_assets;
                                       }
                                    }
                                    if(set_value('proj_misc_fixed_assets') !=''){
                                       $proj_misc_fixed_assets = set_value('proj_misc_fixed_assets');
                                    }
                                    ?>
                                 <input type="text" class="form-control" name="proj_misc_fixed_assets" value="<?=$proj_misc_fixed_assets;?>"  onchange="get_final_project_cost();"/><span>In Lakh</span>
                                 <small class="text-error proj_misc_fixed_assets"><?php echo form_error('proj_misc_fixed_assets');?></small>
                              </div>
                              <label class="col-lg-3 col-form-label">Preli. & Pre-Operative Expenses:</label>
                              <div class="col-lg-3">
                                 <?php
                                    $proj_preli_preopearative_expenses ='';
                                    if(!empty($project_data))
                                    {
                                    if($project_data->proj_preli_preopearative_expenses !=''){
                                       $proj_preli_preopearative_expenses = $project_data->proj_preli_preopearative_expenses;
                                    }
                                 }
                                    if(set_value('proj_preli_preopearative_expenses') !=''){
                                       $proj_preli_preopearative_expenses = set_value('proj_preli_preopearative_expenses');
                                    }
                                     ?>
                                      
                                 <input type="text" class="form-control" name="proj_preli_preopearative_expenses" value="<?=$proj_preli_preopearative_expenses;?>" onchange="get_final_project_cost();" /><span>In Lakh</span>
                                 <small class="text-error proj_preli_preopearative_expenses"><?php echo form_error('proj_preli_preopearative_expenses');?></small>
                              </div>
                           </div>
                           <div class="form-group form-row">
                              <label class="col-lg-3 col-form-label">Contingencies etc.:</label>
                              <div class="col-lg-3">
                                  <?php
                                    $proj_contingencies_etc ='';
                                    if(!empty($project_data))
                                    {
                                    if($project_data->proj_contingencies_etc !=''){
                                       $proj_contingencies_etc = $project_data->proj_contingencies_etc;
                                    }
                                 }
                                    if(set_value('proj_contingencies_etc') !=''){
                                       $proj_contingencies_etc = set_value('proj_contingencies_etc');
                                    }
                                     ?>
                                     
                                 <input type="text" class="form-control" name="proj_contingencies_etc" value="<?=$proj_contingencies_etc;?>" onchange="get_final_project_cost();"/><span>In Lakh</span>
                                  <small class="text-error proj_contingencies_etc"><?php echo form_error('proj_contingencies_etc');?></small>
                              </div>
                              <label class="col-lg-3 col-form-label">Working Capital Margin:</label>
                              <div class="col-lg-3">
                                  <?php
                                    $proj_working_capital_margin ='';
                                    if(!empty($project_data))
                                    {
                                    if($project_data->proj_working_capital_margin !=''){
                                       $proj_working_capital_margin = $project_data->proj_working_capital_margin;
                                    }
                                 }
                                    if(set_value('proj_working_capital_margin') !=''){
                                       $proj_working_capital_margin = set_value('proj_working_capital_margin');
                                    }
                                     ?>
                                     
                                 <input type="text" class="form-control" name="proj_working_capital_margin" value="<?=$proj_working_capital_margin;?>" onchange="get_final_project_cost();"/><span>In Lakh</span>
                                  <small class="text-error proj_working_capital_margin"><?php echo form_error('proj_working_capital_margin');?></small>
                              </div>
                           </div>
                           <div class="form-group form-row">
                              <label class="col-lg-3 col-form-label">Others:</label>
                              <div class="col-lg-3">
                                    <?php
                                    $proj_others ='';
                                    if(!empty($project_data))
                                    {
                                    if($project_data->proj_others !=''){
                                       $proj_others = $project_data->proj_others;
                                    }
                                 }
                                    if(set_value('proj_others') !=''){
                                       $proj_others = set_value('proj_others');
                                    }
                                     ?>
                                    
                                 <input type="text" class="form-control" name="proj_others" value="<?=$proj_others;?>" onchange="get_final_project_cost();"/>
                                 <small class="text-error proj_others"><?php echo form_error('proj_others');?></small>
                              </div>
                              <label class="col-lg-3 col-form-label">Total Project Cost:</label>
                              <div class="col-lg-3">
                                 <?php
                                    $proj_total_project_cost ='';
                                    if(!empty($project_data))
                                    {
                                    if($project_data->proj_total_project_cost !=''){
                                       $proj_total_project_cost = $project_data->proj_total_project_cost;
                                    }
                                 }
                                    if(set_value('proj_total_project_cost') !=''){
                                       $proj_total_project_cost = set_value('proj_total_project_cost');
                                    }
                                     ?>
                                      
                              <input type="text" class="form-control" readonly name="proj_total_project_cost" value="<?=$proj_total_project_cost;?>"  /><span>In Lakh</span>
                              <small class="text-error"><?php echo form_error('proj_total_project_cost');?></small>
                              </div>
                              <!-- <label class="col-lg-3 col-form-label">Working Capital:</label>
                              <div class="col-lg-3">
                                 <input type="text" class="form-control" />
                              </div> -->
                              
                           </div>
                           <div class="form-group form-row">                                
                              <!-- <label class="col-lg-3 col-form-label">Subsidy claimed under WBFCIS - 2021:</label>
                              <div class="col-lg-3">
                                 <input type="text" class="form-control" value="0" readonly />
                              </div> -->
                           </div>
                        
                     </div>
                  </div>
               </div>
            </div>

            <div class="row">
               <div class="col-lg-12 grid-margin mx-auto">
                  <div class="card">
                     <div class="card-body">
                        <form class="form-sample cost_field">
                           <div class="form-group form-row">
                              <div class="col-lg-12">
                                 <h5 class="w-100 d-block mb-4 text-decoration-underline text-center">Means of Finance</h5>
                              </div>
                           </div>
                           <div class="form-group form-row">
                              <label class="col-lg-3 col-form-label">Promoters' Contribution:</label>
                              <div class="col-lg-3">
                                   <?php
                                    $proj_promoter_contribution ='';
                                    if(!empty($project_data)){
                                    if($project_data->proj_promoter_contribution !=''){
                                       $proj_promoter_contribution = $project_data->proj_promoter_contribution;
                                    }
                                 }
                                    if(set_value('proj_promoter_contribution') !=''){
                                       $proj_promoter_contribution = set_value('proj_promoter_contribution');
                                    }
                                     ?>
                                      
                                 <input type="text" class="form-control" name="proj_promoter_contribution" value="<?=$proj_promoter_contribution;?>" onchange="get_total_finance_cost();" /><span>In Lakh</span>
                                 <small class="text-error proj_promoter_contribution"><?php echo form_error('proj_promoter_contribution');?></small>
                              </div>
                              <label class="col-lg-3 col-form-label">Term loan from bank / F.I.:</label>
                              <div class="col-lg-3">
                                 <?php
                                    $proj_term_loan_from_bank ='';
                                    if(!empty($project_data))
                                    {
                                    if($project_data->proj_term_loan_from_bank !=''){
                                       $proj_term_loan_from_bank = $project_data->proj_term_loan_from_bank;
                                    }
                                 }
                                    if(set_value('proj_term_loan_from_bank') !=''){
                                       $proj_term_loan_from_bank = set_value('proj_term_loan_from_bank');
                                    }
                                     ?>
                                     
                                 <input type="text" class="form-control" name="proj_term_loan_from_bank" value="<?=$proj_term_loan_from_bank;?>" onchange="get_total_finance_cost();" /><span>In Lakh</span>
                                 <small class="text-error proj_term_loan_from_bank"><?php echo form_error('proj_term_loan_from_bank');?></small>
                              </div>
                           </div>
                           <div class="form-group form-row">                                
                              <label class="col-lg-3 col-form-label">Others:</label>
                              <div class="col-lg-3">
                                  <?php
                                    $proj_finance_others ='';
                                    if(!empty($project_data))
                                    {
                                    if($project_data->proj_finance_others !=''){
                                       $proj_finance_others = $project_data->proj_finance_others;
                                    }
                                 }
                                    if(set_value('proj_finance_others') !=''){
                                       $proj_finance_others = set_value('proj_finance_others');
                                    }
                                     ?>
                                    
                                 <input type="text" class="form-control" name="proj_finance_others" value="<?=$proj_finance_others;?>" onchange="get_total_finance_cost();"/><span>In Lakh</span>
                                 <small class="text-error proj_finance_others"><?php echo form_error('proj_finance_others');?></small>
                              </div>
                              <label class="col-lg-3 col-form-label">Total Means of Finance:</label>
                              <div class="col-lg-3">
                                  <?php
                                    $proj_total_means_of_finance ='';
                                    if(!empty($project_data))
                                    {
                                    if($project_data->proj_total_means_of_finance !=''){
                                       $proj_total_means_of_finance = $project_data->proj_total_means_of_finance;
                                    }
                                 }
                                    if(set_value('proj_total_means_of_finance') !=''){
                                       $proj_total_means_of_finance = set_value('proj_total_means_of_finance');
                                    }
                                     ?>
                                      
                                 <input type="text" class="form-control" readonly name="proj_total_means_of_finance" value="<?=$proj_total_means_of_finance;?>" /><span>In Lakh</span>
                                 <small class="text-error"><?php echo form_error('proj_total_means_of_finance');?></small>
                              </div>
                              
                           </div>                           
                        
                     </div>
                  </div>
               </div>
            </div>

            <div class="row">
               <div class="col-lg-12 grid-margin mx-auto">
                  <div class="card">
                     <div class="card-body">
                        <form class="form-sample cost_field">
                           <div class="form-group form-row">
                              <label class="col-lg-3 col-form-label">Working Capital:</label>
                              <div class="col-lg-3">
                                    <?php
                                    $proj_working_capital ='';
                                    if(!empty($project_data))
                                    {
                                    if($project_data->proj_working_capital !=''){
                                       $proj_working_capital = $project_data->proj_working_capital;
                                    }
                                 }
                                    if(set_value('proj_working_capital') !=''){
                                       $proj_working_capital = set_value('proj_working_capital');
                                    }
                                     ?>
                                     
                                 <input type="text" class="form-control" name="proj_working_capital" value="<?=$proj_working_capital;?>" onchange="get_total_subsity();"/>
                                  <small class="text-error"><?php echo form_error('proj_working_capital');?></small>
                                 <small class="proj_working_capital"></small>
                              </div>
                              <label class="col-lg-3 col-form-label">Subsidy claimed under WBFCIS - 2021:</label>
                              <div class="col-lg-3">
                                    <?php
                                    $proj_subsity_claimed ='';
                                    if(!empty($project_data))
                                    {
                                    if($project_data->proj_subsity_claimed !=''){
                                       $proj_subsity_claimed = $project_data->proj_subsity_claimed;
                                    }
                                 }
                                    if(set_value('proj_subsity_claimed') !=''){
                                       $proj_subsity_claimed = set_value('proj_subsity_claimed');
                                    }
                                     ?>
                                     
                                 <input type="text" class="form-control"  readonly name="proj_subsity_claimed" value="<?=$proj_subsity_claimed;?>" />
                                 <small class="text-error"><?php echo form_error('proj_subsity_claimed');?></small>
                              </div>
                              
                           </div>
                           <div class="form-group form-row">
                              <div class="col-lg-12">
                                 <h5 class="w-100 d-block mt-1 mb-2 text-decoration-underline text-center">Proposed no of Employment Generated (Indirect)</h5>
                              </div>
                           </div>                           
                           <div class="form-group form-row">
                              <label class="col-lg-3 col-form-label">Male:</label>
                              <div class="col-lg-3">
                                    <?php
                                    $proj_indirect_male ='';
                                    if(!empty($project_data))
                                    {
                                    if($project_data->proj_indirect_male !='')
                                    {
                                       $proj_indirect_male = $project_data->proj_indirect_male;
                                    }
                                 }
                                    if(set_value('proj_indirect_male') !=''){
                                       $proj_indirect_male = set_value('proj_indirect_male');
                                    }
                                     ?>
                                     
                                 <input type="text" class="form-control" name="proj_indirect_male" value="<?=$proj_indirect_male;?>" />
                                 <small class="text-error proj_indirect_male"><?php echo form_error('proj_indirect_male');?></small>
                              </div>
                              <label class="col-lg-3 col-form-label">Female:</label>
                              <div class="col-lg-3">
                                    <?php
                                    $proj_indirect_female ='';
                                    if(!empty($project_data))
                                    {
                                    if($project_data->proj_indirect_female !=''){
                                       $proj_indirect_female = $project_data->proj_indirect_female;
                                    }
                                 }
                                    if(set_value('proj_indirect_female') !=''){
                                       $proj_indirect_female = set_value('proj_indirect_female');
                                    }
                                     ?>
                                  
                                 <input type="text" class="form-control" name="proj_indirect_female" value="<?=$proj_indirect_female;?>" />
                                 <small class="text-error proj_indirect_female"><?php echo form_error('proj_indirect_female');?></small>
                              </div>
                           </div>
                           <div class="form-group form-row">
                              <div class="col-lg-12">
                                 <h5 class="w-100 d-block mt-1 mb-2 text-decoration-underline text-center">Proposed no of Employment Generated (Direct)</h5>
                              </div>
                           </div>
                           <div class="form-group form-row">
                              <label class="col-lg-3 col-form-label">Male:</label>
                              <div class="col-lg-3">
                                    <?php
                                    $proj_direct_male ='';
                                    if(!empty($project_data)){
                                    if($project_data->proj_direct_male !=''){
                                       $proj_direct_male = $project_data->proj_direct_male;
                                    }
                                 }
                                    if(set_value('proj_direct_male') !=''){
                                       $proj_direct_male = set_value('proj_direct_male');
                                    }
                                     ?>
                                     
                                 <input type="text" class="form-control" name="proj_direct_male" value="<?=$proj_direct_male;?>"/>
                                 <small class="text-error proj_direct_male"><?php echo form_error('proj_direct_male');?></small>
                              </div>
                              <label class="col-lg-3 col-form-label">Female:</label>
                              <div class="col-lg-3">
                                    <?php
                                    $proj_direct_female ='';
                                    if(!empty($project_data))
                                    { 
                                    if($project_data->proj_direct_female !=''){
                                       $proj_direct_female = $project_data->proj_direct_female;
                                    }
                                 }
                                    if(set_value('proj_direct_female') !=''){
                                       $proj_direct_female = set_value('proj_direct_female');
                                    }
                                     ?>
                                     
                                 <input type="text" class="form-control" name="proj_direct_female" value="<?=$proj_direct_female;?>" />
                                 <small class="text-error proj_direct_female"><?php echo form_error('proj_direct_female');?></small>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-lg-12 text-right">
<!--                   <a class="btn btn-primary mb-2" href="documents_list.php" role="button">Next</a>-->  
                           <a class="btn btn-primary mt-2" href="<?php echo base_url('applicant/project')?>" role="button">Previous</a>
                           
                           <button class="btn btn-primary mt-2" type="submit">Next</button>
                           </div>
                           </div>
                        
                     </div>
                  </div>
               </div>
            </div>
            </form>
         </div>
      </div>
      <?php $this->load->view('common/footer'); ?>
      <script type="text/javascript">
         var c_id = 1;
         function addRow55 () {
            //alert(12);
         document.querySelector('#addMoreRow').insertAdjacentHTML(
        'afterend',
    `<div class="form-group form-row text-left">
         <div class="col-lg-11">
            <div class="row">
               <label class="col-lg-2 px-1 col-form-label mob_label">Machine Name:</label>
               <div class="col-lg-2 px-1">
                  <input type="text" class="form-control" name="machine_name[]" id="machine_name`+c_id+`" required  />
               </div>
               <label class="col-lg-2 px-1 col-form-label mob_label">Manufactirer Name:</label>
               <div class="col-lg-2 px-1">
                  <input type="text" class="form-control" name="manufacturer_name[]" id="manufacturer_name`+c_id+`" required />
               </div>
               <label class="col-lg-1 px-1 col-form-label mob_label">Serial No:</label>
               <div class="col-lg-1 px-1">
                  <input type="text" class="form-control" name="serial_no[]" id="serial_no`+c_id+`" required />
               </div>
               <label class="col-lg-2 px-1 col-form-label mob_label">Model No:</label>
               <div class="col-lg-2 px-1">
                  <input type="text" class="form-control" name="model_no[]" id="model_no`+c_id+`" required />
               </div>
               <label class="col-lg-2 px-1 col-form-label mob_label">Machine Type:</label>
               <div class="col-lg-2 px-1">
                  <select class="form-control" name="machine_type[]" id="machine_type`+c_id+`" required >
                     <option selecte disabled>---Select---</option>
                     <option value="Imported">Imported</option>
                     <option value="Indigenous">Indigenous</option>
                     <option value="Assembled">Assembled / Fabricated</option>
                  </select>
               </div>               
               <label class="col-lg-1 px-1 col-form-label mob_label">Cost:</label>
               <div class="col-lg-1 px-1 cost_field">
                  <input type="text" class="form-control" name="cost[]" onchange="get_total_project_cost()" id="cost`+c_id+`" required /><span>In Lakh</span>
               </div>
               <label class="col-lg-2 px-1 col-form-label mob_label">Capacity:</label>
               <div class="col-lg-2 px-1">
                  <input type="text" class="form-control" name="capacity[]" id="capacity`+c_id+`" required/>
               </div>               
            </div>
         </div>
         <div class="col-lg-1" onclick="removeRow(this)">
            <input type="button" class="btn-danger btn" onclick="get_total_project_cost();"  onclick="removeRow(this)"  value="-">
         </div>
    </div>`      
  ),
         c_id++;
}


function submitProjectCost()
{

}

function get_total_project_cost()
{ 
   //alert(112);
   var total_cost = 0.00;

   <?php if(!empty($machine_data)){?>
      $("input[type=text][name='db_cost[]']").each(function() {
      //alert(11);

      total_cost = parseFloat(total_cost) + parseFloat($(this).val())
        });
   <?php } ?>
   

            $("input[type=text][name='cost[]']").each(function() {
      //alert(11);

      total_cost = parseFloat(total_cost) + parseFloat($(this).val())
        });

   
   $("input[type=text][name=proj_plant_machinary_cost]").val(parseFloat(total_cost));
   //$("input[type=text][name=proj_total_project_cost]").val(total_cost);
   //alert(parseFloat(total_cost));
}

function get_total_finance_cost()
{
      var total_cost = 0 
      var proj_promoter_contribution=parseInt($("input[type=text][name='proj_promoter_contribution']").val());
      var proj_finance_others=parseInt($("input[type=text][name='proj_finance_others']").val());
      var proj_term_loan_from_bank=parseInt($("input[type=text][name='proj_term_loan_from_bank']").val());

      if(proj_promoter_contribution>0)
    {
      total_cost = total_cost + proj_promoter_contribution;
    }

    if(proj_finance_others>0)
    {
      total_cost = total_cost + proj_finance_others;
    }

    if(proj_term_loan_from_bank>0)
    {
      total_cost = total_cost + proj_term_loan_from_bank;
    }
   
     $("input[type=text][name=proj_total_means_of_finance]").val(total_cost);
}

function get_final_project_cost()
{
   var total_project_cost = 0;  
   var proj_plant_machinary_cost=parseInt($("input[type=text][name='proj_plant_machinary_cost']").val());

   var proj_land_building_cost=parseInt($("input[type=text][name='proj_land_building_cost']").val());
   var proj_misc_fixed_assets=parseInt($("input[type=text][name='proj_misc_fixed_assets']").val());
   var proj_contingencies_etc=parseInt($("input[type=text][name='proj_contingencies_etc']").val());
   var proj_others=parseInt($("input[type=text][name='proj_others']").val());
   var proj_preli_preopearative_expenses=parseInt($("input[type=text][name='proj_preli_preopearative_expenses']").val());
   var proj_working_capital_margin=parseInt($("input[type=text][name='proj_working_capital_margin']").val());


    if(proj_land_building_cost>0)
    {
      total_project_cost = total_project_cost + proj_land_building_cost;
    }

    if(proj_misc_fixed_assets>0)
    {
      total_project_cost = total_project_cost + proj_misc_fixed_assets;
    }

    if(proj_contingencies_etc>0)
    {
      total_project_cost = total_project_cost + proj_contingencies_etc;
    }

    if(proj_others>0)
    {
      total_project_cost = total_project_cost + proj_others;
    }

    if(proj_preli_preopearative_expenses>0)
    {
      total_project_cost = total_project_cost + proj_preli_preopearative_expenses;
    }

    if(proj_working_capital_margin>0)
    {
      total_project_cost = total_project_cost + proj_working_capital_margin;
    }

    //sum of total machinary cost..
    if(proj_plant_machinary_cost>0)
    {
      total_project_cost = total_project_cost + proj_plant_machinary_cost;
    }

   
   $("input[type=text][name=proj_total_project_cost]").val(total_project_cost);
}
 function get_total_subsity()
 {
   var total_subsity_cost = 0;

   var proj_total_project_cost=parseInt($("input[type=text][name='proj_total_project_cost']").val());

   var proj_working_capital=parseInt($("input[type=text][name='proj_working_capital']").val());

   var error_msg = '';
   
if(proj_total_project_cost>proj_working_capital)
   {
   total_subsity_cost = proj_total_project_cost-proj_working_capital+total_subsity_cost;
   $("input[type=text][name=proj_subsity_claimed]").val(total_subsity_cost);
   }else{
      error_msg = 'working capital cannot be greather then ' + proj_total_project_cost;
      $(".proj_working_capital").html(error_msg).delay(2000).fadeOut();
   }

    

 }
      $(function(){
         $('#alert_msg, .text-error').delay(8000).fadeOut();
         $('.msg_cont2, .text-error').delay(8000).fadeOut();
      });
      //$(document).ready(function () {
           // alert("hi");
       $("#addFrm input[name='proj_land_building_cost']").keydown(function (event) {
        //alert(event.keyCode);
        var building_cost = $("#addFrm input[name='proj_land_building_cost']").val();
        
           // Allow only backspace and delete
           if (event.keyCode == 46 || event.keyCode == 8  || event.keyCode==116  || event.keyCode==9 || event.keyCode==37 || event.keyCode==39 || event.keyCode==17 || event.keyCode==86) {
               // let it happen, don't do anything
           }
           else {
               // Ensure that it is a number and stop the keypress
               if ((event.keyCode > 47 && event.keyCode < 58 ) || (event.keyCode > 94 && event.keyCode < 106 )) {
                $('.text-error').hide();
               }else{
                
                if(building_cost=='')
                {
                $('.proj_land_building_cost').show().html('Only numbers');
                setTimeout(function(){$('.proj_land_building_cost').hide()}, 1000);
                }
                event.preventDefault();
               }
           }
       });
       $("#addFrm input[name='proj_misc_fixed_assets']").keydown(function (event) {
        //alert(event.keyCode);
        var proj_misc_fixed_assets = $("#addFrm input[name='proj_misc_fixed_assets']").val();
        
           // Allow only backspace and delete
           if (event.keyCode == 46 || event.keyCode == 8  || event.keyCode==116  || event.keyCode==9 || event.keyCode==37 || event.keyCode==39 || event.keyCode==17 || event.keyCode==86) {
               // let it happen, don't do anything
           }
           else {
               // Ensure that it is a number and stop the keypress
               if ((event.keyCode > 47 && event.keyCode < 58 ) || (event.keyCode > 94 && event.keyCode < 106 )) {
                $('.text-error').hide();
               }else{
                
                if(proj_misc_fixed_assets=='')
                {
                $('.proj_misc_fixed_assets').show().html('Only numbers');
                setTimeout(function(){$('.proj_misc_fixed_assets').hide()}, 1000);
                }
                event.preventDefault();
               }
           }
       });
       $("#addFrm input[name='proj_contingencies_etc']").keydown(function (event) {
        //alert(event.keyCode);
        var proj_contingencies_etc = $("#addFrm input[name='proj_contingencies_etc']").val();
        
           // Allow only backspace and delete
           if (event.keyCode == 46 || event.keyCode == 8  || event.keyCode==116  || event.keyCode==9 || event.keyCode==37 || event.keyCode==39 || event.keyCode==17 || event.keyCode==86) {
               // let it happen, don't do anything
           }
           else {
               // Ensure that it is a number and stop the keypress
               if ((event.keyCode > 47 && event.keyCode < 58 ) || (event.keyCode > 94 && event.keyCode < 106 )) {
                $('.text-error').hide();
               }else{
                
                if(proj_contingencies_etc=='')
                {
                $('.proj_contingencies_etc').show().html('Only numbers');
                setTimeout(function(){$('.proj_contingencies_etc').hide()}, 1000);
                }
                event.preventDefault();
               }
           }
       });
       $("#addFrm input[name='proj_preli_preopearative_expenses']").keydown(function (event) {
        //alert(event.keyCode);
        var proj_preli_preopearative_expenses = $("#addFrm input[name='proj_preli_preopearative_expenses']").val();
        
           // Allow only backspace and delete
           if (event.keyCode == 46 || event.keyCode == 8  || event.keyCode==116  || event.keyCode==9 || event.keyCode==37 || event.keyCode==39 || event.keyCode==17 || event.keyCode==86) {
               // let it happen, don't do anything
           }
           else {
               // Ensure that it is a number and stop the keypress
               if ((event.keyCode > 47 && event.keyCode < 58 ) || (event.keyCode > 94 && event.keyCode < 106 )) {
                $('.text-error').hide();
               }else{
                
                if(proj_preli_preopearative_expenses=='')
                {
                $('.proj_preli_preopearative_expenses').show().html('Only numbers');
                setTimeout(function(){$('.proj_preli_preopearative_expenses').hide()}, 1000);
                }
                event.preventDefault();
               }
           }
       });
       $("#addFrm input[name='proj_working_capital_margin']").keydown(function (event) {
        //alert(event.keyCode);
        var proj_working_capital_margin = $("#addFrm input[name='proj_working_capital_margin']").val();
        
           // Allow only backspace and delete
           if (event.keyCode == 46 || event.keyCode == 8  || event.keyCode==116  || event.keyCode==9 || event.keyCode==37 || event.keyCode==39 || event.keyCode==17 || event.keyCode==86) {
               // let it happen, don't do anything
           }
           else {
               // Ensure that it is a number and stop the keypress
               if ((event.keyCode > 47 && event.keyCode < 58 ) || (event.keyCode > 94 && event.keyCode < 106 )) {
                $('.text-error').hide();
               }else{
                
                if(proj_working_capital_margin=='')
                {
                $('.proj_working_capital_margin').show().html('Only numbers');
                setTimeout(function(){$('.proj_working_capital_margin').hide()}, 1000);
                }
                event.preventDefault();
               }
           }
       });
       $("#addFrm input[name='proj_promoter_contribution']").keydown(function (event) {
        //alert(event.keyCode);
        var proj_promoter_contribution = $("#addFrm input[name='proj_promoter_contribution']").val();
        
           // Allow only backspace and delete
           if (event.keyCode == 46 || event.keyCode == 8  || event.keyCode==116  || event.keyCode==9 || event.keyCode==37 || event.keyCode==39 || event.keyCode==17 || event.keyCode==86) {
               // let it happen, don't do anything
           }
           else {
               // Ensure that it is a number and stop the keypress
               if ((event.keyCode > 47 && event.keyCode < 58 ) || (event.keyCode > 94 && event.keyCode < 106 )) {
                $('.text-error').hide();
               }else{
                
                if(proj_promoter_contribution=='')
                {
                $('.proj_promoter_contribution').show().html('Only numbers');
                setTimeout(function(){$('.proj_promoter_contribution').hide()}, 1000);
                }
                event.preventDefault();
               }
           }
       });
       $("#addFrm input[name='proj_term_loan_from_bank']").keydown(function (event) {
        //alert(event.keyCode);
        var proj_term_loan_from_bank = $("#addFrm input[name='proj_term_loan_from_bank']").val();
        
           // Allow only backspace and delete
           if (event.keyCode == 46 || event.keyCode == 8  || event.keyCode==116  || event.keyCode==9 || event.keyCode==37 || event.keyCode==39 || event.keyCode==17 || event.keyCode==86) {
               // let it happen, don't do anything
           }
           else {
               // Ensure that it is a number and stop the keypress
               if ((event.keyCode > 47 && event.keyCode < 58 ) || (event.keyCode > 94 && event.keyCode < 106 )) {
                $('.text-error').hide();
               }else{
                
                if(proj_term_loan_from_bank=='')
                {
                $('.proj_term_loan_from_bank').show().html('Only numbers');
                setTimeout(function(){$('.proj_term_loan_from_bank').hide()}, 1000);
                }
                event.preventDefault();
               }
           }
       });
       
       $("#addFrm input[name='proj_others']").keydown(function (event) {
        //alert(event.keyCode);
        var proj_others = $("#addFrm input[name='proj_others']").val();
        
           // Allow only backspace and delete
           if (event.keyCode == 46 || event.keyCode == 8  || event.keyCode==116  || event.keyCode==9 || event.keyCode==37 || event.keyCode==39 || event.keyCode==17 || event.keyCode==86) {
               // let it happen, don't do anything
           }
           else {
               // Ensure that it is a number and stop the keypress
               if ((event.keyCode > 47 && event.keyCode < 58 ) || (event.keyCode > 94 && event.keyCode < 106 )) {
                $('.text-error').hide();
               }else{
                
                if(proj_others=='')
                {
                $('.proj_others').show().html('Only numbers');
                setTimeout(function(){$('.proj_others').hide()}, 1000);
                }
                event.preventDefault();
               }
           }
       });
       $("#addFrm input[name='proj_finance_others']").keydown(function (event) {
        //alert(event.keyCode);
        var proj_finance_others = $("#addFrm input[name='proj_finance_others']").val();
        
           // Allow only backspace and delete
           if (event.keyCode == 46 || event.keyCode == 8  || event.keyCode==116  || event.keyCode==9 || event.keyCode==37 || event.keyCode==39 || event.keyCode==17 || event.keyCode==86) {
               // let it happen, don't do anything
           }
           else {
               // Ensure that it is a number and stop the keypress
               if ((event.keyCode > 47 && event.keyCode < 58 ) || (event.keyCode > 94 && event.keyCode < 106 )) {
                $('.text-error').hide();
               }else{
                
                if(proj_finance_others=='')
                {
                $('.proj_finance_others').show().html('Only numbers');
                setTimeout(function(){$('.proj_finance_others').hide()}, 1000);
                }
                event.preventDefault();
               }
           }
       });
       $("#addFrm input[name='proj_indirect_male']").keydown(function (event) {
        //alert(event.keyCode);
        var proj_indirect_male = $("#addFrm input[name='proj_indirect_male']").val();
        
           // Allow only backspace and delete
           if (event.keyCode == 46 || event.keyCode == 8  || event.keyCode==116  || event.keyCode==9 || event.keyCode==37 || event.keyCode==39 || event.keyCode==17 || event.keyCode==86) {
               // let it happen, don't do anything
           }
           else {
               // Ensure that it is a number and stop the keypress
               if ((event.keyCode > 47 && event.keyCode < 58 ) || (event.keyCode > 94 && event.keyCode < 106 )) {
                $('.text-error').hide();
               }else{
                
                if(proj_indirect_male=='')
                {
                $('.proj_indirect_male').show().html('Only numbers');
                setTimeout(function(){$('.proj_indirect_male').hide()}, 1000);
                }
                event.preventDefault();
               }
           }
       });
       $("#addFrm input[name='proj_indirect_female']").keydown(function (event) {
        //alert(event.keyCode);
        var proj_indirect_female = $("#addFrm input[name='proj_indirect_female']").val();
        
           // Allow only backspace and delete
           if (event.keyCode == 46 || event.keyCode == 8  || event.keyCode==116  || event.keyCode==9 || event.keyCode==37 || event.keyCode==39 || event.keyCode==17 || event.keyCode==86) {
               // let it happen, don't do anything
           }
           else {
               // Ensure that it is a number and stop the keypress
               if ((event.keyCode > 47 && event.keyCode < 58 ) || (event.keyCode > 94 && event.keyCode < 106 )) {
                $('.text-error').hide();
               }else{
                
                if(proj_indirect_female=='')
                {
                $('.proj_indirect_female').show().html('Only numbers');
                setTimeout(function(){$('.proj_indirect_female').hide()}, 1000);
                }
                event.preventDefault();
               }
           }
       });
       ///
       $("#addFrm input[name='proj_direct_male']").keydown(function (event) {
        //alert(event.keyCode);
        var proj_direct_male = $("#addFrm input[name='proj_direct_male']").val();
        
           // Allow only backspace and delete
           if (event.keyCode == 46 || event.keyCode == 8  || event.keyCode==116  || event.keyCode==9 || event.keyCode==37 || event.keyCode==39 || event.keyCode==17 || event.keyCode==86) {
               // let it happen, don't do anything
           }
           else {
               // Ensure that it is a number and stop the keypress
               if ((event.keyCode > 47 && event.keyCode < 58 ) || (event.keyCode > 94 && event.keyCode < 106 )) {
                $('.text-error').hide();
               }else{
                
                if(proj_direct_male=='')
                {
                $('.proj_direct_male').show().html('Only numbers');
                setTimeout(function(){$('.proj_direct_male').hide()}, 1000);
                }
                event.preventDefault();
               }
           }
       });
       $("#addFrm input[name='proj_direct_female']").keydown(function (event) {
        //alert(event.keyCode);
        var proj_direct_female = $("#addFrm input[name='proj_direct_female']").val();
        
           // Allow only backspace and delete
           if (event.keyCode == 46 || event.keyCode == 8  || event.keyCode==116  || event.keyCode==9 || event.keyCode==37 || event.keyCode==39 || event.keyCode==17 || event.keyCode==86) {
               // let it happen, don't do anything
           }
           else {
               // Ensure that it is a number and stop the keypress
               if ((event.keyCode > 47 && event.keyCode < 58 ) || (event.keyCode > 94 && event.keyCode < 106 )) {
                $('.text-error').hide();
               }else{
                
                if(proj_direct_female=='')
                {
                $('.proj_direct_female').show().html('Only numbers');
                setTimeout(function(){$('.proj_direct_female').hide()}, 1000);
                }
                event.preventDefault();
               }
           }
       });


   </script> 
