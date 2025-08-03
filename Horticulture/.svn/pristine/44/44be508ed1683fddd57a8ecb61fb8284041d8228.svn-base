<?php $this->load->view('common/header_hq.php'); ?>
<div class=" page-body-wrapper">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12 grid-margin mt-5">
            <h4 class="card-title">Active Scheme List</h4>
            <div class="card">
               <div class="card-body">
                  <table id="example" class="table table-striped table-bordered" 
                     style="width:100%">
                     <thead>
                        <tr>
                           <th width="3%">SL No</th>
                           <th width="14%">Scheme Name</th>
                           <th width="5%">Apply Date</th>
                           <!-- <th width="5%">Scheme End Date</th> -->
                           <th width="3%">Total Applicant</th>
                           <th width="3%">Approved by District</th>
                           <th width="3%">Rejected by District </th>
                           <th width="3%">Project Cost Update by Dist. </th>
                           <th width="5%">Status</th>
                           
                        </tr>
                     </thead>
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
                     <tbody>
                        <tr>
                           <td><?php echo $row->id; ?></td>
                           <td><?php echo $row->scheme_name; ?></td>
                           <td><?php echo $row->created; ?></td>
                          <!--  <td><?php //echo $row->modified; ?></td> -->
                            <td>
								
								<?php
                           $total_applicant=$this->scheme_m->total_applicant($scheme_id); 
								if($this->session->userdata['utype'] == 1){
								?>
								
                              <!--<a href="<?php  //echo base_url('admin/hq_dashboard/hq_total_application_list/'.$scheme_id); ?>" role="button"  class="btn btn-primary" value=""><?php //echo $total_applicant; ?></a>-->
                              <?php echo form_open('admin/hq_dashboard');?>
                                <input type="hidden" name="scheme_id" id="scheme_id" value="<?php echo $scheme_id ?>" />
                                <input type="hidden" name="scheme_status_name" id="status_name" value="is_applicant_submitted" />
                                <input type="hidden" name="scheme_status_value" id="status_value" value="2" />
                                <input type="submit" class="btn btn-primary" value="<?php echo $total_applicant; ?>" />
                                <?php echo form_close();?>
								<?php }else{ ?>
								<!--<a href="<?php  //echo base_url('admin/district_dashboard/hq_total_application_list/'.$scheme_id); ?>" role="button"  class="btn btn-primary" value=""><?php //echo $total_applicant; ?></a>-->
                                <?php echo form_open('admin/district_dashboard');?>
                                <input type="hidden" name="scheme_id" id="scheme_id" value="<?php echo $scheme_id ?>" />
                                <input type="hidden" name="scheme_status_name" id="status_name" value="is_applicant_submitted" />
                                <input type="hidden" name="scheme_status_value" id="status_value" value="2" />
                                <input type="submit" class="btn btn-primary" value="<?php echo $total_applicant; ?>" />
                                <?php echo form_close();?>
								<?php } ?>
                            </td> 
                           <td><?php 
                                 $total_approved_by_district=$this->scheme_m->approved_by_district($scheme_id);
							   	if($this->session->userdata['utype'] == 1){
							   ?>
                                <!--<a href="<?php //echo base_url('admin/hq_dashboard/dist_approved_application_list_in_hq/'.$scheme_id);?>" role="button"  class="btn btn-primary" value=""><?php //echo $total_approved_by_district; ?></a>-->
                                <?php echo form_open('admin/hq_dashboard');?>
                                <input type="hidden" name="scheme_id" id="scheme_id" value="<?php echo $scheme_id ?>" />
                                <input type="hidden" name="scheme_status_name" id="status_name" value="is_district_app_reject_revert" />
                                <input type="hidden" name="scheme_status_value" id="status_value" value="1" />
                                <input type="submit" class="btn btn-primary" value="<?php echo $total_approved_by_district; ?>" />
                                <?php echo form_close();?>
							   <?php }else{ ?>
							   <!--<a href="<?php //echo base_url('admin/district_dashboard/dist_approved_application_list_in_hq/'.$scheme_id);?>" role="button"  class="btn btn-primary" value=""><?php //echo $total_approved_by_district; ?></a>-->
                               <?php echo form_open('admin/district_dashboard');?>
                                <input type="hidden" name="scheme_id" id="scheme_id" value="<?php echo $scheme_id ?>" />
                                <input type="hidden" name="scheme_status_name" id="status_name" value="is_district_app_reject_revert" />
                                <input type="hidden" name="scheme_status_value" id="status_value" value="1" />
                                <input type="submit" class="btn btn-primary" value="<?php echo $total_approved_by_district; ?>" />
                                <?php echo form_close();?>
							   <?php } ?>
                           </td>

                           <td><?php 
                                 $total_reject_by_district=$this->scheme_m->reject_by_district($scheme_id);
							   	  if($this->session->userdata['utype'] == 1){
							   
							   ?>
								<!--<a href="<?php //echo base_url('admin/hq_dashboard/dist_rejected_application_list_in_hq/'.$scheme_id);?>" role="button"  class="btn btn-primary" value=""><?php //echo $total_reject_by_district; ?></a>-->
                                <?php echo form_open('admin/hq_dashboard');?>
                                <input type="hidden" name="scheme_id" id="scheme_id" value="<?php echo $scheme_id ?>" />
                                <input type="hidden" name="scheme_status_name" id="status_name" value="is_district_app_reject_revert" />
                                <input type="hidden" name="scheme_status_value" id="status_value" value="2" />
                                <input type="submit" class="btn btn-primary" value="<?php echo $total_reject_by_district; ?>" />
                                <?php echo form_close();?>
							   <?php }else{ ?>
							   <!--<a href="<?php //echo base_url('admin/district_dashboard/dist_rejected_application_list_in_hq/'.$scheme_id);?>" role="button"  class="btn btn-primary" value=""><?php //echo $total_reject_by_district; ?></a>-->
                               <?php echo form_open('admin/district_dashboard');?>
                                <input type="hidden" name="scheme_id" id="scheme_id" value="<?php echo $scheme_id ?>" />
                                <input type="hidden" name="scheme_status_name" id="status_name" value="is_district_app_reject_revert" />
                                <input type="hidden" name="scheme_status_value" id="status_value" value="2" />
                                <input type="submit" class="btn btn-primary" value="<?php echo $total_reject_by_district; ?>" />
                                <?php echo form_close();?>
							   <?php } ?>
                           </td>
                           <td>
                              <?php 
                                 $total_project_cost_update_by_district=$this->scheme_m->project_cost_update_by_district($scheme_id);
                                 if($this->session->userdata['utype'] == 1){
                                 ?>
                                    <!--<a href="<?php //echo base_url('admin/hq_dashboard/dist_updated_application_list_in_hq/'.$scheme_id);?>" role="button"  class="btn btn-primary" value=""><?php //echo $total_project_cost_update_by_district; ?></a>-->
                                    <?php echo form_open('admin/hq_dashboard');?>
                                <input type="hidden" name="scheme_id" id="scheme_id" value="<?php echo $scheme_id ?>" />
                                <input type="hidden" name="scheme_status_name" id="status_name" value="is_project_cost_updated_dist" />
                                <input type="hidden" name="scheme_status_value" id="status_value" value="1" />
                                <input type="submit" class="btn btn-primary" value="<?php echo $total_project_cost_update_by_district; ?>" />
                                <?php echo form_close();?>
							   <?php }else{ ?>
							   <!--<a href="<?php //echo base_url('admin/district_dashboard/dist_updated_application_list_in_hq/'.$scheme_id);?>" role="button"  class="btn btn-primary" value=""><?php //echo $total_project_cost_update_by_district; ?></a>-->
                               <?php echo form_open('admin/district_dashboard');?>
                                <input type="hidden" name="scheme_id" id="scheme_id" value="<?php echo $scheme_id ?>" />
                                <input type="hidden" name="scheme_status_name" id="status_name" value="is_project_cost_updated_dist" />
                                <input type="hidden" name="scheme_status_value" id="status_value" value="1" />
                                <input type="submit" class="btn btn-primary" value="<?php echo $total_project_cost_update_by_district; ?>" />
                                <?php echo form_close();?>
							   <?php } ?>
                           </td>
                           <td><?php echo $status; ?></td>
                           <!-- <td>
                              <a class="btn btn-success btn-sm" href="<?php// echo base_url('headquater/application_list/'.$row->id); ?>" role="button">View Application</a>
                              <a class="btn btn-primary btn-sm" href="#" role="button">Edit Application</a> 
                           </td> -->
                        </tr>
                     <?php }  }   ?>
                     </tbody>

                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<?php $this->load->view('common/footer.php'); ?>
