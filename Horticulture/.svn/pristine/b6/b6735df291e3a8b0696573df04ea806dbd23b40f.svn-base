<?php $this->load->view('common/header_hq'); ?>
<style type="text/css">
	.cl_box{height: 180px;}
         .blue_box
         {background-image: linear-gradient(to right top, #49aee4, #009deb, #008bf0, #0076f0, #125eeb);
            color: #fff; font-size: 18px; border-radius: 5px; min-height: auto;}

            .violet_box
         {background-image: linear-gradient(to right top, #6b30f4, #682af2, #6423f0, #611ced, #5d12eb);
            color: #fff; font-size: 18px; border-radius: 5px;min-height: auto;}
 

        .yellow_box
        {background-image: linear-gradient(to right top, #ebb757, #d8ab52, #c69f4d, #b59349, #a48744); color: #fff; font-size: 18px; border-radius: 5px;min-height: auto;}

        .green_box
        {background-image: linear-gradient(to right top, #40c2a6, #3ac6a9, #32caac, #29cfb0, #1bd3b3);color: #fff; font-size: 18px; border-radius: 5px;min-height: auto;}

        .ash_box
        {background-image: linear-gradient(to right top, #34495e, #29405e, #21365d, #1f2c5a, #222055);color: #fff; font-size: 18px; border-radius: 5px;min-height: auto;}

        .sky_box
        {background-image: linear-gradient(to right top, #4ca5df, #3e9ad9, #2e8fd2, #1d84cb, #0479c4);color: #fff; font-size: 18px; border-radius: 5px;min-height: auto;}
         .big_font
         {
            font-size: 40px;
            color: #fff;
           background: none!important;
			 border: none !important;
			 box-shadow: none !important;

         }

      </style>
<div class="page-body-wrapper">

   <div class="container-fluid">
      <!--<div class="row">
         <div class="col-lg-12 mx-auto mt-2">
            <h4 class="card-title">Dashboard</h4>
            
         </div>
      </div>-->
	     <div class="page-body-wrapper">
         <div class="container-fluid">
			 <?php 
				 if(!empty($scheme_data)) {
				foreach($scheme_data as $row) {  
				   $scheme_id= $row->id;
				   $start_date = strtotime ($row->created);
				   $end_date = strtotime ($row->modified);
				   $today = strtotime (date("Y-m-d"));
				   $status='';
				   if($today<=$start_date && $today<$end_date)
				   {
					  $status = "Inactive";
				   }elseif ($today>=$start_date && $today<=$end_date) {
				   $status = "Active";
				   }elseif ($today>=$start_date && $today>=$end_date) {
					   $status = "Archive";
				   }
			   ?>
            <div class="row">
               <div class="col-lg-10 grid-margin mt-5 mx-auto">
                  <h4 class="card-title"><?php echo $row->scheme_name; ?></h4>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-10 grid-margin mx-auto mb-0">
                  <div class="card mb-0">
                     <div class="card-body">

                        <div class="row ">
						  <div class="col-lg-2 text-center mb-2">
                              <div class="cl_box ash_box p-3">
                                 <div class="col-lg-12  big_font">
                                    <?php
                           		$total_applicant=$this->scheme_m->total_applicant($scheme_id); 
								if($this->session->userdata['utype'] == 1){
								?>
								
                              <!--<a href="<?php  //echo base_url('admin/hq_dashboard/hq_total_application_list/'.$scheme_id); ?>" role="button"  class="btn btn-primary" value=""><?php //echo $total_applicant; ?></a>-->
                              <?php echo form_open('admin/hq_dashboard');?>
                                <input type="hidden" name="scheme_id" id="scheme_id" value="<?php echo $scheme_id ?>" />
                                <input type="hidden" name="scheme_status_name" id="status_name" value="" />
                                <input type="hidden" name="scheme_status_value" id="status_value" value="" />
                                <input type="submit" class="btn btn-primary big_font" value="<?php echo $total_applicant; ?>" />
                                <?php echo form_close();?>
								<?php }else{ ?>
								<!--<a href="<?php  //echo base_url('admin/district_dashboard/hq_total_application_list/'.$scheme_id); ?>" role="button"  class="btn btn-primary" value=""><?php //echo $total_applicant; ?></a>-->
                                <?php echo form_open('admin/district_dashboard');?>
                                <input type="hidden" name="scheme_id" id="scheme_id" value="<?php echo $scheme_id ?>" />
                                <input type="hidden" name="scheme_status_name" id="status_name" value="" />
                                <input type="hidden" name="scheme_status_value" id="status_value" value="" />
                                <input type="submit" class="btn btn-primary big_font" value="<?php echo $total_applicant; ?>" />
                                <?php echo form_close();?>
								<?php } ?>
                                 </div>
                                 <hr>
                                 Total Submitted Application
                              </div>
                           </div>
                           <div class="col-lg-2 text-center mb-2">
                              <div class="cl_box blue_box p-3">
                                 <div class="col-lg-12">
                                 <?php
                           		$total_pending=$this->scheme_m->total_pending($scheme_id); 
								if($this->session->userdata['utype'] == 1){
								?>
								
                              <!--<a href="<?php  //echo base_url('admin/hq_dashboard/hq_total_application_list/'.$scheme_id); ?>" role="button"  class="btn btn-primary" value=""><?php //echo $total_applicant; ?></a>-->
                              <?php echo form_open('admin/hq_dashboard');?>
                                <input type="hidden" name="scheme_id" id="scheme_id" value="<?php echo $scheme_id ?>" />
                                <input type="hidden" name="scheme_status_name" id="status_name" value="is_applicant_submitted" />
                                <input type="hidden" name="scheme_status_value" id="status_value" value="2" />
                                <input type="submit" class="btn btn-primary big_font" value="<?php echo $total_pending; ?>" />
                                <?php echo form_close();?>
								<?php }else{ ?>
								<!--<a href="<?php  //echo base_url('admin/district_dashboard/hq_total_application_list/'.$scheme_id); ?>" role="button"  class="btn btn-primary" value=""><?php //echo $total_applicant; ?></a>-->
                                <?php echo form_open('admin/district_dashboard');?>
                                <input type="hidden" name="scheme_id" id="scheme_id" value="<?php echo $scheme_id ?>" />
                                <input type="hidden" name="scheme_status_name" id="status_name" value="is_applicant_submitted" />
                                <input type="hidden" name="scheme_status_value" id="status_value" value="2" />
                                <input type="submit" class="btn btn-primary big_font" value="<?php echo $total_pending; ?>" />
                                <?php echo form_close();?>
								<?php } ?>
                                 </div>
                                 <hr>
                                 Application Submitted
                              </div>
                           </div>
                          <div class="col-lg-2 text-center mb-2">
                              <div class="cl_box green_box p-3">
                                 <div class="col-lg-12  big_font">
                                    <?php 
                                 $total_approved_by_district=$this->scheme_m->approved_by_district($scheme_id);
							   	if($this->session->userdata['utype'] == 1){
							   ?>
                                <!--<a href="<?php //echo base_url('admin/hq_dashboard/dist_approved_application_list_in_hq/'.$scheme_id);?>" role="button"  class="btn btn-primary" value=""><?php //echo $total_approved_by_district; ?></a>-->
                                <?php echo form_open('admin/hq_dashboard');?>
                                <input type="hidden" name="scheme_id" id="scheme_id" value="<?php echo $scheme_id ?>" />
                                <input type="hidden" name="scheme_status_name" id="status_name" value="is_district_app_reject_revert" />
                                <input type="hidden" name="scheme_status_value" id="status_value" value="1" />
                                <input type="submit" class="btn btn-primary big_font" value="<?php echo $total_approved_by_district; ?>" />
                                <?php echo form_close();?>
							   <?php }else{ ?>
							   <!--<a href="<?php //echo base_url('admin/district_dashboard/dist_approved_application_list_in_hq/'.$scheme_id);?>" role="button"  class="btn btn-primary" value=""><?php //echo $total_approved_by_district; ?></a>-->
                               <?php echo form_open('admin/district_dashboard');?>
                                <input type="hidden" name="scheme_id" id="scheme_id" value="<?php echo $scheme_id ?>" />
                                <input type="hidden" name="scheme_status_name" id="status_name" value="is_district_app_reject_revert" />
                                <input type="hidden" name="scheme_status_value" id="status_value" value="1" />
                                <input type="submit" class="btn btn-primary big_font" value="<?php echo $total_approved_by_district; ?>" />
                                <?php echo form_close();?>
							   <?php } ?>
                                 </div>
                                 <hr>
                                 Approved by District
                              </div>
                           </div>
                           
                           <div class="col-lg-2 text-center mb-2">
                              <div class="cl_box green_box p-3">
                                 <div class="col-lg-12  big_font">
                                   <?php 
                                 $total_reject_by_district=$this->scheme_m->reject_by_district($scheme_id);
							   	  if($this->session->userdata['utype'] == 1){
							   
							   ?>
								<!--<a href="<?php //echo base_url('admin/hq_dashboard/dist_rejected_application_list_in_hq/'.$scheme_id);?>" role="button"  class="btn btn-primary" value=""><?php //echo $total_reject_by_district; ?></a>-->
                                <?php echo form_open('admin/hq_dashboard');?>
                                <input type="hidden" name="scheme_id" id="scheme_id" value="<?php echo $scheme_id ?>" />
                                <input type="hidden" name="scheme_status_name" id="status_name" value="is_district_app_reject_revert" />
                                <input type="hidden" name="scheme_status_value" id="status_value" value="2" />
                                <input type="submit" class="btn btn-primary big_font" value="<?php echo $total_reject_by_district; ?>" />
                                <?php echo form_close();?>
							   <?php }else{ ?>
							   <!--<a href="<?php //echo base_url('admin/district_dashboard/dist_rejected_application_list_in_hq/'.$scheme_id);?>" role="button"  class="btn btn-primary" value=""><?php //echo $total_reject_by_district; ?></a>-->
                               <?php echo form_open('admin/district_dashboard');?>
                                <input type="hidden" name="scheme_id" id="scheme_id" value="<?php echo $scheme_id ?>" />
                                <input type="hidden" name="scheme_status_name" id="status_name" value="is_district_app_reject_revert" />
                                <input type="hidden" name="scheme_status_value" id="status_value" value="2" />
                                <input type="submit" class="btn btn-primary big_font" value="<?php echo $total_reject_by_district; ?>" />
                                <?php echo form_close();?>
							   <?php } ?>
                                 </div>
                                 <hr>
                                 Rejected by District 
                              </div>
                           </div>
                           <div class="col-lg-2 text-center mb-2">
                              <div class="cl_box  green_box p-3">
                                 <div class="col-lg-12  big_font">
                                    <?php 
                                 $total_reverted_by_district=$this->scheme_m->reverted_by_district($scheme_id);
							   	if($this->session->userdata['utype'] == 1){
							   ?>
                                <!--<a href="<?php //echo base_url('admin/hq_dashboard/dist_approved_application_list_in_hq/'.$scheme_id);?>" role="button"  class="btn btn-primary" value=""><?php //echo $total_approved_by_district; ?></a>-->
                                <?php echo form_open('admin/hq_dashboard');?>
                                <input type="hidden" name="scheme_id" id="scheme_id" value="<?php echo $scheme_id ?>" />
                                <input type="hidden" name="scheme_status_name" id="status_name" value="is_district_app_reject_revert" />
                                <input type="hidden" name="scheme_status_value" id="status_value" value="3" />
                                <input type="submit" class="btn btn-primary big_font" value="<?php echo $total_reverted_by_district; ?>" />
                                <?php echo form_close();?>
							   <?php }else{ ?>
							   <!--<a href="<?php //echo base_url('admin/district_dashboard/dist_approved_application_list_in_hq/'.$scheme_id);?>" role="button"  class="btn btn-primary" value=""><?php //echo $total_approved_by_district; ?></a>-->
                               <?php echo form_open('admin/district_dashboard');?>
                                <input type="hidden" name="scheme_id" id="scheme_id" value="<?php echo $scheme_id ?>" />
                                <input type="hidden" name="scheme_status_name" id="status_name" value="is_district_app_reject_revert" />
                                <input type="hidden" name="scheme_status_value" id="status_value" value="3" />
                                <input type="submit" class="btn btn-primary big_font" value="<?php echo $total_reverted_by_district; ?>" />
                                <?php echo form_close();?>
							   <?php } ?>
                                 </div>
                                 <hr>
                                 Reverted by District
                              </div>
                           </div>
                           <div class="col-lg-2 text-center mb-2">
                              <div class="cl_box yellow_box p-3">
                                 <div class="col-lg-12  big_font">
                                    <?php 
                                 $total_approved_by_hq=$this->scheme_m->approved_by_hq($scheme_id);
							   	if($this->session->userdata['utype'] == 1){
							   ?>
                                <!--<a href="<?php //echo base_url('admin/hq_dashboard/dist_approved_application_list_in_hq/'.$scheme_id);?>" role="button"  class="btn btn-primary" value=""><?php //echo $total_approved_by_district; ?></a>-->
                                <?php echo form_open('admin/hq_dashboard');?>
                                <input type="hidden" name="scheme_id" id="scheme_id" value="<?php echo $scheme_id ?>" />
                                <input type="hidden" name="scheme_status_name" id="status_name" value="is_hq_app_reject_revert" />
                                <input type="hidden" name="scheme_status_value" id="status_value" value="1" />
                                <input type="submit" class="btn btn-primary big_font" value="<?php echo $total_approved_by_hq; ?>" />
                                <?php echo form_close();?>
							   <?php }else{ ?>
							   <!--<a href="<?php //echo base_url('admin/district_dashboard/dist_approved_application_list_in_hq/'.$scheme_id);?>" role="button"  class="btn btn-primary" value=""><?php //echo $total_approved_by_district; ?></a>-->
                               <?php echo form_open('admin/district_dashboard');?>
                                <input type="hidden" name="scheme_id" id="scheme_id" value="<?php echo $scheme_id ?>" />
                                <input type="hidden" name="scheme_status_name" id="status_name" value="is_hq_app_reject_revert" />
                                <input type="hidden" name="scheme_status_value" id="status_value" value="1" />
                                <input type="submit" class="btn btn-primary big_font" value="<?php echo $total_approved_by_hq; ?>" />
                                <?php echo form_close();?>
							   <?php } ?>
                                 </div>
                                 <hr>
                                 Approved by HQ
                              </div>
                           </div>
                           </div>
                           <div class="row mt-4">
                           <div class="col-lg-2 text-center mb-2">
                              <div class="cl_box yellow_box p-3">
                                 <div class="col-lg-12  big_font">
                                   <?php 
                                 $total_reject_by_hq=$this->scheme_m->reject_by_hq($scheme_id);
							   	  if($this->session->userdata['utype'] == 1){
							   
							   ?>
								<!--<a href="<?php //echo base_url('admin/hq_dashboard/dist_rejected_application_list_in_hq/'.$scheme_id);?>" role="button"  class="btn btn-primary" value=""><?php //echo $total_reject_by_district; ?></a>-->
                                <?php echo form_open('admin/hq_dashboard');?>
                                <input type="hidden" name="scheme_id" id="scheme_id" value="<?php echo $scheme_id ?>" />
                                <input type="hidden" name="scheme_status_name" id="status_name" value="is_hq_app_reject_revert" />
                                <input type="hidden" name="scheme_status_value" id="status_value" value="2" />
                                <input type="submit" class="btn btn-primary big_font" value="<?php echo $total_reject_by_hq; ?>" />
                                <?php echo form_close();?>
							   <?php }else{ ?>
							   <!--<a href="<?php //echo base_url('admin/district_dashboard/dist_rejected_application_list_in_hq/'.$scheme_id);?>" role="button"  class="btn btn-primary" value=""><?php //echo $total_reject_by_district; ?></a>-->
                               <?php echo form_open('admin/district_dashboard');?>
                                <input type="hidden" name="scheme_id" id="scheme_id" value="<?php echo $scheme_id ?>" />
                                <input type="hidden" name="scheme_status_name" id="status_name" value="is_hq_app_reject_revert" />
                                <input type="hidden" name="scheme_status_value" id="status_value" value="2" />
                                <input type="submit" class="btn btn-primary big_font" value="<?php echo $total_reject_by_hq; ?>" />
                                <?php echo form_close();?>
							   <?php } ?>
                                 </div>
                                 <hr>
                                 Rejected by HQ 
                              </div>
                           </div>
                           <div class="col-lg-2 text-center mb-2">
                              <div class="cl_box yellow_box p-3">
                                 <div class="col-lg-12  big_font">
                                    <?php 
                                 $total_reverted_by_hq=$this->scheme_m->reverted_by_hq($scheme_id);
							   	if($this->session->userdata['utype'] == 1){
							   ?>
                                <!--<a href="<?php //echo base_url('admin/hq_dashboard/dist_approved_application_list_in_hq/'.$scheme_id);?>" role="button"  class="btn btn-primary" value=""><?php //echo $total_approved_by_district; ?></a>-->
                                <?php echo form_open('admin/hq_dashboard');?>
                                <input type="hidden" name="scheme_id" id="scheme_id" value="<?php echo $scheme_id ?>" />
                                <input type="hidden" name="scheme_status_name" id="status_name" value="is_hq_app_reject_revert" />
                                <input type="hidden" name="scheme_status_value" id="status_value" value="3" />
                                <input type="submit" class="btn btn-primary big_font" value="<?php echo $total_reverted_by_hq; ?>" />
                                <?php echo form_close();?>
							   <?php }else{ ?>
							   <!--<a href="<?php //echo base_url('admin/district_dashboard/dist_approved_application_list_in_hq/'.$scheme_id);?>" role="button"  class="btn btn-primary" value=""><?php //echo $total_approved_by_district; ?></a>-->
                               <?php echo form_open('admin/district_dashboard');?>
                                <input type="hidden" name="scheme_id" id="scheme_id" value="<?php echo $scheme_id ?>" />
                                <input type="hidden" name="scheme_status_name" id="status_name" value="is_hq_app_reject_revert" />
                                <input type="hidden" name="scheme_status_value" id="status_value" value="3" />
                                <input type="submit" class="btn btn-primary big_font" value="<?php echo $total_reverted_by_hq; ?>" />
                                <?php echo form_close();?>
							   <?php } ?>
                                 </div>
                                 <hr>
                                 Reverted by HQ
                              </div>
                           </div>
                          <div class="col-lg-2 text-center mb-2">
                              <div class="cl_box yellow_box p-3">
                                 <div class="col-lg-12  big_font">
                                    <?php 
                                 $project_sanctioned_by_hq=$this->scheme_m->project_sanctioned_by_hq($scheme_id);
                                 if($this->session->userdata['utype'] == 1){
                                 ?>
                                    <!--<a href="<?php //echo base_url('admin/hq_dashboard/dist_updated_application_list_in_hq/'.$scheme_id);?>" role="button"  class="btn btn-primary" value=""><?php //echo $total_project_cost_update_by_district; ?></a>-->
                                    <?php echo form_open('admin/hq_dashboard');?>
                                <input type="hidden" name="scheme_id" id="scheme_id" value="<?php echo $scheme_id ?>" />
                                <input type="hidden" name="scheme_status_name" id="status_name" value="is_first_sanction" />
                                <input type="hidden" name="scheme_status_value" id="status_value" value="1" />
                                <input type="submit" class="btn btn-primary big_font" value="<?php echo $project_sanctioned_by_hq; ?>" />
                                <?php echo form_close();?>
							   <?php }else{ ?>
							   <!--<a href="<?php //echo base_url('admin/district_dashboard/dist_updated_application_list_in_hq/'.$scheme_id);?>" role="button"  class="btn btn-primary" value=""><?php //echo $total_project_cost_update_by_district; ?></a>-->
                               <?php echo form_open('admin/district_dashboard');?>
                                <input type="hidden" name="scheme_id" id="scheme_id" value="<?php echo $scheme_id ?>" />
                                <input type="hidden" name="scheme_status_name" id="status_name" value="is_first_sanction" />
                                <input type="hidden" name="scheme_status_value" id="status_value" value="1" />
                                <input type="submit" class="btn btn-primary big_font" value="<?php echo $project_sanctioned_by_hq; ?>" />
                                <?php echo form_close();?>
							   <?php } ?>
                                 </div>
                                 <hr>
                                 Sanctioned List
                              </div>
                           </div>
                           
                           <div class="col-lg-2 text-center mb-2">
                              <div class="cl_box blue_box p-3">
                                 <div class="col-lg-12  big_font">
                                    <?php 
                                 $installemnt_1st_release_requested=$this->scheme_m->proj_1st_installment_release_requested($scheme_id);
                                 if($this->session->userdata['utype'] == 1){
                                 ?>
                                    <!--<a href="<?php //echo base_url('admin/hq_dashboard/dist_updated_application_list_in_hq/'.$scheme_id);?>" role="button"  class="btn btn-primary" value=""><?php //echo $total_project_cost_update_by_district; ?></a>-->
                                    <?php echo form_open('admin/hq_dashboard');?>
                                <input type="hidden" name="scheme_id" id="scheme_id" value="<?php echo $scheme_id ?>" />
                                <input type="hidden" name="scheme_status_name" id="status_name" value="apply_for_1st_installment_release" />
                                <input type="hidden" name="scheme_status_value" id="status_value" value="1" />
                                <input type="submit" class="btn btn-primary big_font" value="<?php echo $installemnt_1st_release_requested; ?>" />
                                <?php echo form_close();?>
							   <?php }else{ ?>
							   <!--<a href="<?php //echo base_url('admin/district_dashboard/dist_updated_application_list_in_hq/'.$scheme_id);?>" role="button"  class="btn btn-primary" value=""><?php //echo $total_project_cost_update_by_district; ?></a>-->
                               <?php echo form_open('admin/district_dashboard');?>
                                <input type="hidden" name="scheme_id" id="scheme_id" value="<?php echo $scheme_id ?>" />
                                <input type="hidden" name="scheme_status_name" id="status_name" value="apply_for_1st_installment_release" />
                                <input type="hidden" name="scheme_status_value" id="status_value" value="1" />
                                <input type="submit" class="btn btn-primary big_font" value="<?php echo $installemnt_1st_release_requested; ?>" />
                                <?php echo form_close();?>
							   <?php } ?>
                                 </div>
                                 <hr>
                                 1st Installment Release Requested
                              </div>
                           </div>
                           <div class="col-lg-2 text-center mb-2">
                              <div class="cl_box green_box p-3">
                                 <div class="col-lg-12  big_font">
                                    <?php 
                                 $installemnt_1st_approve_by_dist=$this->scheme_m->proj_1st_installment_approve_by_dist($scheme_id);
                                 if($this->session->userdata['utype'] == 1){
                                 ?>
                                    <!--<a href="<?php //echo base_url('admin/hq_dashboard/dist_updated_application_list_in_hq/'.$scheme_id);?>" role="button"  class="btn btn-primary" value=""><?php //echo $total_project_cost_update_by_district; ?></a>-->
                                    <?php echo form_open('admin/hq_dashboard');?>
                                <input type="hidden" name="scheme_id" id="scheme_id" value="<?php echo $scheme_id ?>" />
                                <input type="hidden" name="scheme_status_name" id="status_name" value="is_dist_approve_1st_installment_release" />
                                <input type="hidden" name="scheme_status_value" id="status_value" value="1" />
                                <input type="submit" class="btn btn-primary big_font" value="<?php echo $installemnt_1st_approve_by_dist; ?>" />
                                <?php echo form_close();?>
							   <?php }else{ ?>
							   <!--<a href="<?php //echo base_url('admin/district_dashboard/dist_updated_application_list_in_hq/'.$scheme_id);?>" role="button"  class="btn btn-primary" value=""><?php //echo $total_project_cost_update_by_district; ?></a>-->
                               <?php echo form_open('admin/district_dashboard');?>
                                <input type="hidden" name="scheme_id" id="scheme_id" value="<?php echo $scheme_id ?>" />
                                <input type="hidden" name="scheme_status_name" id="status_name" value="is_dist_approve_1st_installment_release" />
                                <input type="hidden" name="scheme_status_value" id="status_value" value="1" />
                                <input type="submit" class="btn btn-primary big_font" value="<?php echo $installemnt_1st_approve_by_dist; ?>" />
                                <?php echo form_close();?>
							   <?php } ?>
                                 </div>
                                 <hr>
                                 1st Installment Approve by District
                              </div>
                           </div>
						   <div class="col-lg-2 text-center mb-2">
                              <div class="cl_box green_box p-3">
                                 <div class="col-lg-12  big_font">
                                    <?php 
                                 $installemnt_1st_reject_by_dist=$this->scheme_m->proj_1st_installment_reject_by_dist($scheme_id);
                                 if($this->session->userdata['utype'] == 1){
                                 ?>

                                    <?php echo form_open('admin/hq_dashboard');?>
                                <input type="hidden" name="scheme_id" id="scheme_id" value="<?php echo $scheme_id ?>" />
                                <input type="hidden" name="scheme_status_name" id="status_name" value="is_dist_approve_1st_installment_release" />
                                <input type="hidden" name="scheme_status_value" id="status_value" value="2" />
                                <input type="submit" class="btn btn-primary big_font" value="<?php echo $installemnt_1st_reject_by_dist; ?>" />
                                <?php echo form_close();?>
							   <?php }else{ ?>
	
                               <?php echo form_open('admin/district_dashboard');?>
                                <input type="hidden" name="scheme_id" id="scheme_id" value="<?php echo $scheme_id ?>" />
                                <input type="hidden" name="scheme_status_name" id="status_name" value="is_dist_approve_1st_installment_release" />
                                <input type="hidden" name="scheme_status_value" id="status_value" value="2" />
                                <input type="submit" class="btn btn-primary big_font" value="<?php echo $installemnt_1st_reject_by_dist; ?>" />
                                <?php echo form_close();?>
							   <?php } ?>
                                 </div>
                                 <hr>
                                 1st Installment Reject by District
                              </div>
                           </div>
						   </div>
                           <div class="row mt-4 justify-content-center">
						   <div class="col-lg-2 text-center mb-2">
                              <div class="cl_box green_box p-3">
                                 <div class="col-lg-12  big_font">
                                    <?php 
                                 $installemnt_1st_revert_by_dist=$this->scheme_m->proj_1st_installment_revert_by_dist($scheme_id);
                                 if($this->session->userdata['utype'] == 1){
                                 ?>

                                    <?php echo form_open('admin/hq_dashboard');?>
                                <input type="hidden" name="scheme_id" id="scheme_id" value="<?php echo $scheme_id ?>" />
                                <input type="hidden" name="scheme_status_name" id="status_name" value="is_dist_approve_1st_installment_release" />
                                <input type="hidden" name="scheme_status_value" id="status_value" value="3" />
                                <input type="submit" class="btn btn-primary big_font" value="<?php echo $installemnt_1st_revert_by_dist; ?>" />
                                <?php echo form_close();?>
							   <?php }else{ ?>
	
                               <?php echo form_open('admin/district_dashboard');?>
                                <input type="hidden" name="scheme_id" id="scheme_id" value="<?php echo $scheme_id ?>" />
                                <input type="hidden" name="scheme_status_name" id="status_name" value="is_dist_approve_1st_installment_release" />
                                <input type="hidden" name="scheme_status_value" id="status_value" value="3" />
                                <input type="submit" class="btn btn-primary big_font" value="<?php echo $installemnt_1st_revert_by_dist; ?>" />
                                <?php echo form_close();?>
							   <?php } ?>
                                 </div>
                                 <hr>
                                 1st Installment Reverted by District
                              </div>
                           </div>
                           <div class="col-lg-2 text-center mb-2">
                              <div class="cl_box yellow_box p-3">
                                 <div class="col-lg-12  big_font">
                                 <?php 
                                 $installemnt_1st_release_hq=$this->scheme_m->proj_1st_installment_release_hq($scheme_id);
                                 if($this->session->userdata['utype'] == 1){
                                 ?>
 
                                <?php echo form_open('admin/hq_dashboard');?>
                                <input type="hidden" name="scheme_id" id="scheme_id" value="<?php echo $scheme_id ?>" />
                                <input type="hidden" name="scheme_status_name" id="status_name" value="first_installment_released_by_HQ" />
                                <input type="hidden" name="scheme_status_value" id="status_value" value="1" />
                                <input type="submit" class="btn btn-primary big_font" value="<?php echo $installemnt_1st_release_hq; ?>" />
                                <?php echo form_close();?>
							   <?php }else{ ?>
                               <?php echo form_open('admin/district_dashboard');?>
                                <input type="hidden" name="scheme_id" id="scheme_id" value="<?php echo $scheme_id ?>" />
                                <input type="hidden" name="scheme_status_name" id="status_name" value="first_installment_released_by_HQ" />
                                <input type="hidden" name="scheme_status_value" id="status_value" value="1" />
                                <input type="submit" class="btn btn-primary big_font" value="<?php echo $installemnt_1st_release_hq; ?>" />
                                <?php echo form_close();?>
							   <?php } ?>
                                 </div>
                                 <hr>
                                 1st Installment Released by HQ
                              </div>
                           </div>
						   <div class="col-lg-2 text-center mb-2">
                              <div class="cl_box yellow_box p-3">
                                 <div class="col-lg-12  big_font">
                                 <?php 
                                 $installemnt_1st_reject_hq=$this->scheme_m->proj_1st_installment_reject_hq($scheme_id);
                                 if($this->session->userdata['utype'] == 1){
                                 ?>
 
                                <?php echo form_open('admin/hq_dashboard');?>
                                <input type="hidden" name="scheme_id" id="scheme_id" value="<?php echo $scheme_id ?>" />
                                <input type="hidden" name="scheme_status_name" id="status_name" value="first_installment_released_by_HQ" />
                                <input type="hidden" name="scheme_status_value" id="status_value" value="2" />
                                <input type="submit" class="btn btn-primary big_font" value="<?php echo $installemnt_1st_reject_hq; ?>" />
                                <?php echo form_close();?>
							   <?php }else{ ?>
                               <?php echo form_open('admin/district_dashboard');?>
                                <input type="hidden" name="scheme_id" id="scheme_id" value="<?php echo $scheme_id ?>" />
                                <input type="hidden" name="scheme_status_name" id="status_name" value="first_installment_released_by_HQ" />
                                <input type="hidden" name="scheme_status_value" id="status_value" value="2" />
                                <input type="submit" class="btn btn-primary big_font" value="<?php echo $installemnt_1st_reject_hq; ?>" />
                                <?php echo form_close();?>
							   <?php } ?>
                                 </div>
                                 <hr>
                                 1st Installment Rejected by HQ
                              </div>
                           </div>
						   <div class="col-lg-2 text-center mb-2">
                              <div class="cl_box yellow_box p-3">
                                 <div class="col-lg-12  big_font">
                                 <?php 
                                 $installemnt_1st_revert_hq=$this->scheme_m->proj_1st_installment_revert_hq($scheme_id);
                                 if($this->session->userdata['utype'] == 1){
                                 ?>
 
                                <?php echo form_open('admin/hq_dashboard');?>
                                <input type="hidden" name="scheme_id" id="scheme_id" value="<?php echo $scheme_id ?>" />
                                <input type="hidden" name="scheme_status_name" id="status_name" value="first_installment_released_by_HQ" />
                                <input type="hidden" name="scheme_status_value" id="status_value" value="3" />
                                <input type="submit" class="btn btn-primary big_font" value="<?php echo $installemnt_1st_revert_hq; ?>" />
                                <?php echo form_close();?>
							   <?php }else{ ?>
                               <?php echo form_open('admin/district_dashboard');?>
                                <input type="hidden" name="scheme_id" id="scheme_id" value="<?php echo $scheme_id ?>" />
                                <input type="hidden" name="scheme_status_name" id="status_name" value="first_installment_released_by_HQ" />
                                <input type="hidden" name="scheme_status_value" id="status_value" value="3" />
                                <input type="submit" class="btn btn-primary big_font" value="<?php echo $installemnt_1st_revert_hq; ?>" />
                                <?php echo form_close();?>
							   <?php } ?>
                                 </div>
                                 <hr>
                                 1st Installment Reverted by HQ
                              </div>
                           </div>
                           
                           <div class="col-lg-2 text-center mb-2">
                              <div class="cl_box blue_box p-3">
                                 <div class="col-lg-12  big_font">
                                    <?php 
                                 $installemnt_2nd_release_requested=$this->scheme_m->proj_2nd_installment_release_requested($scheme_id);
                                 if($this->session->userdata['utype'] == 1){
                                 ?>

                                <?php echo form_open('admin/hq_dashboard');?>
                                <input type="hidden" name="scheme_id" id="scheme_id" value="<?php echo $scheme_id ?>" />
                                <input type="hidden" name="scheme_status_name" id="status_name" value="apply_for_second_installment" />
                                <input type="hidden" name="scheme_status_value" id="status_value" value="1" />
                                <input type="submit" class="btn btn-primary big_font" value="<?php echo $installemnt_2nd_release_requested; ?>" />
                                <?php echo form_close();?>
							    <?php }else{ ?>

                                <?php echo form_open('admin/district_dashboard');?>
                                <input type="hidden" name="scheme_id" id="scheme_id" value="<?php echo $scheme_id ?>" />
                                <input type="hidden" name="scheme_status_name" id="status_name" value="apply_for_second_installment" />
                                <input type="hidden" name="scheme_status_value" id="status_value" value="1" />
                                <input type="submit" class="btn btn-primary big_font" value="<?php echo $installemnt_2nd_release_requested; ?>" />
                                <?php echo form_close();?>
							    <?php } ?>
                                 </div>
                                 <hr>
                                 2nd Installment Release Requested
                              </div>
                           </div>
                           <div class="col-lg-2 text-center mb-2">
                              <div class="cl_box green_box p-3">
                                 <div class="col-lg-12  big_font">
                                    <?php 
                                 $installemnt_2nd_approve_by_dist=$this->scheme_m->proj_2nd_installment_approve_by_dist($scheme_id);
                                 if($this->session->userdata['utype'] == 1){
                                 ?>

                                <?php echo form_open('admin/hq_dashboard');?>
                                <input type="hidden" name="scheme_id" id="scheme_id" value="<?php echo $scheme_id ?>" />
                                <input type="hidden" name="scheme_status_name" id="status_name" value="is_dist_approve_2nd_installment_release" />
                                <input type="hidden" name="scheme_status_value" id="status_value" value="1" />
                                <input type="submit" class="btn btn-primary big_font" value="<?php echo $installemnt_2nd_approve_by_dist; ?>" />
                                <?php echo form_close();?>
							    <?php }else{ ?>

                                <?php echo form_open('admin/district_dashboard');?>
                                <input type="hidden" name="scheme_id" id="scheme_id" value="<?php echo $scheme_id ?>" />
                                <input type="hidden" name="scheme_status_name" id="status_name" value="is_dist_approve_2nd_installment_release" />
                                <input type="hidden" name="scheme_status_value" id="status_value" value="1" />
                                <input type="submit" class="btn btn-primary big_font" value="<?php echo $installemnt_2nd_approve_by_dist; ?>" />
                                <?php echo form_close();?>
							    <?php } ?>
                                 </div>
                                 <hr>
                                 2nd Installment Approved by District
                              </div>
                           </div>
                           </div>
                           <div class="row mt-4 justify-content-center">
						   <div class="col-lg-2 text-center mb-2">
                              <div class="cl_box green_box p-3">
                                 <div class="col-lg-12  big_font">
                                    <?php 
                                 $installemnt_2nd_reject_by_dist=$this->scheme_m->proj_2nd_installment_reject_by_dist($scheme_id);
                                 if($this->session->userdata['utype'] == 1){
                                 ?>

                                <?php echo form_open('admin/hq_dashboard');?>
                                <input type="hidden" name="scheme_id" id="scheme_id" value="<?php echo $scheme_id ?>" />
                                <input type="hidden" name="scheme_status_name" id="status_name" value="is_dist_approve_2nd_installment_release" />
                                <input type="hidden" name="scheme_status_value" id="status_value" value="1" />
                                <input type="submit" class="btn btn-primary big_font" value="<?php echo $installemnt_2nd_reject_by_dist; ?>" />
                                <?php echo form_close();?>
							    <?php }else{ ?>

                                <?php echo form_open('admin/district_dashboard');?>
                                <input type="hidden" name="scheme_id" id="scheme_id" value="<?php echo $scheme_id ?>" />
                                <input type="hidden" name="scheme_status_name" id="status_name" value="is_dist_approve_2nd_installment_release" />
                                <input type="hidden" name="scheme_status_value" id="status_value" value="1" />
                                <input type="submit" class="btn btn-primary big_font" value="<?php echo $installemnt_2nd_reject_by_dist; ?>" />
                                <?php echo form_close();?>
							    <?php } ?>
                                 </div>
                                 <hr>
                                 2nd Installment Rejected by District
                              </div>
                           </div>
						   <div class="col-lg-2 text-center mb-2">
                              <div class="cl_box green_box p-3">
                                 <div class="col-lg-12  big_font">
                                    <?php 
                                 $installemnt_2nd_revert_by_dist=$this->scheme_m->proj_2nd_installment_revert_by_dist($scheme_id);
                                 if($this->session->userdata['utype'] == 1){
                                 ?>

                                <?php echo form_open('admin/hq_dashboard');?>
                                <input type="hidden" name="scheme_id" id="scheme_id" value="<?php echo $scheme_id ?>" />
                                <input type="hidden" name="scheme_status_name" id="status_name" value="is_dist_approve_2nd_installment_release" />
                                <input type="hidden" name="scheme_status_value" id="status_value" value="1" />
                                <input type="submit" class="btn btn-primary big_font" value="<?php echo $installemnt_2nd_revert_by_dist; ?>" />
                                <?php echo form_close();?>
							    <?php }else{ ?>

                                <?php echo form_open('admin/district_dashboard');?>
                                <input type="hidden" name="scheme_id" id="scheme_id" value="<?php echo $scheme_id ?>" />
                                <input type="hidden" name="scheme_status_name" id="status_name" value="is_dist_approve_2nd_installment_release" />
                                <input type="hidden" name="scheme_status_value" id="status_value" value="1" />
                                <input type="submit" class="btn btn-primary big_font" value="<?php echo $installemnt_2nd_revert_by_dist; ?>" />
                                <?php echo form_close();?>
							    <?php } ?>
                                 </div>
                                 <hr>
                                 2nd Installment Reverted by District
                              </div>
                           </div>
							   
                           <div class="col-lg-2 text-center mb-2">
                              <div class="cl_box yellow_box p-3">
                                 <div class="col-lg-12  big_font">
                                    <?php 
                                 $installemnt_2nd_release_by_hq=$this->scheme_m->proj_2nd_installment_release_by_hq($scheme_id);
                                 if($this->session->userdata['utype'] == 1){
                                 ?>

                                <?php echo form_open('admin/hq_dashboard');?>
                                <input type="hidden" name="scheme_id" id="scheme_id" value="<?php echo $scheme_id ?>" />
                                <input type="hidden" name="scheme_status_name" id="status_name" value="second_installment_released_by_HQ" />
                                <input type="hidden" name="scheme_status_value" id="status_value" value="1" />
                                <input type="submit" class="btn btn-primary big_font" value="<?php echo $installemnt_2nd_release_by_hq; ?>" />
                                <?php echo form_close();?>
							    <?php }else{ ?>

                                <?php echo form_open('admin/district_dashboard');?>
                                <input type="hidden" name="scheme_id" id="scheme_id" value="<?php echo $scheme_id ?>" />
                                <input type="hidden" name="scheme_status_name" id="status_name" value="second_installment_released_by_HQ" />
                                <input type="hidden" name="scheme_status_value" id="status_value" value="1" />
                                <input type="submit" class="btn btn-primary big_font" value="<?php echo $installemnt_2nd_release_by_hq; ?>" />
                                <?php echo form_close();?>
							    <?php } ?>
                                 </div>
                                 <hr>
                                 2nd Installment Released by HQ
                              </div>
                           </div>
						   <div class="col-lg-2 text-center mb-2">
                              <div class="cl_box yellow_box p-3">
                                 <div class="col-lg-12  big_font">
                                    <?php 
                                 $installemnt_2nd_rejected_by_hq=$this->scheme_m->proj_2nd_installment_rejected_by_hq($scheme_id);
                                 if($this->session->userdata['utype'] == 1){
                                 ?>

                                <?php echo form_open('admin/hq_dashboard');?>
                                <input type="hidden" name="scheme_id" id="scheme_id" value="<?php echo $scheme_id ?>" />
                                <input type="hidden" name="scheme_status_name" id="status_name" value="second_installment_released_by_HQ" />
                                <input type="hidden" name="scheme_status_value" id="status_value" value="2" />
                                <input type="submit" class="btn btn-primary big_font" value="<?php echo $installemnt_2nd_rejected_by_hq; ?>" />
                                <?php echo form_close();?>
							    <?php }else{ ?>

                                <?php echo form_open('admin/district_dashboard');?>
                                <input type="hidden" name="scheme_id" id="scheme_id" value="<?php echo $scheme_id ?>" />
                                <input type="hidden" name="scheme_status_name" id="status_name" value="second_installment_released_by_HQ" />
                                <input type="hidden" name="scheme_status_value" id="status_value" value="2" />
                                <input type="submit" class="btn btn-primary big_font" value="<?php echo $installemnt_2nd_rejected_by_hq; ?>" />
                                <?php echo form_close();?>
							    <?php } ?>
                                 </div>
                                 <hr>
                                 2nd Installment Rejected by HQ
                              </div>
                           </div>
						   <div class="col-lg-2 text-center mb-2">
                              <div class="cl_box yellow_box p-3">
                                 <div class="col-lg-12  big_font">
                                    <?php 
                                 $installemnt_2nd_reverted_by_hq=$this->scheme_m->proj_2nd_installment_reverted_by_hq($scheme_id);
                                 if($this->session->userdata['utype'] == 1){
                                 ?>

                                <?php echo form_open('admin/hq_dashboard');?>
                                <input type="hidden" name="scheme_id" id="scheme_id" value="<?php echo $scheme_id ?>" />
                                <input type="hidden" name="scheme_status_name" id="status_name" value="second_installment_released_by_HQ" />
                                <input type="hidden" name="scheme_status_value" id="status_value" value="3" />
                                <input type="submit" class="btn btn-primary big_font" value="<?php echo $installemnt_2nd_reverted_by_hq; ?>" />
                                <?php echo form_close();?>
							    <?php }else{ ?>

                                <?php echo form_open('admin/district_dashboard');?>
                                <input type="hidden" name="scheme_id" id="scheme_id" value="<?php echo $scheme_id ?>" />
                                <input type="hidden" name="scheme_status_name" id="status_name" value="second_installment_released_by_HQ" />
                                <input type="hidden" name="scheme_status_value" id="status_value" value="3" />
                                <input type="submit" class="btn btn-primary big_font" value="<?php echo $installemnt_2nd_reverted_by_hq; ?>" />
                                <?php echo form_close();?>
							    <?php } ?>
                                 </div>
                                 <hr>
                                 2nd Installment Reverted by HQ
                              </div>
                           </div>
                           
                        </div>

                        
                     </div>
                  </div>
               </div>               
            </div>
            <?php }  }   ?>
         </div>
      </div>

	   
   </div>
</div>
<?php $this->load->view('common/footer'); ?>
 
