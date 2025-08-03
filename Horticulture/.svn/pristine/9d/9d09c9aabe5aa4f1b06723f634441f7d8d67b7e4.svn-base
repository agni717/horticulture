<?php $this->load->view('common/header_hq.php'); ?>
<div class=" page-body-wrapper">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12 grid-margin mt-5">
            <fieldset>
               <legend>List Of Applications</legend>
                  <div class="row">
                     <div class="col-lg-2">
                        <div class="col-lg-12">Application NO</div>
                        <div class="col-lg-12 mt-1">
                           <select class="form-control js-example-basic-single">
                              <option>1122</option>
                               <option>1122</option>
                           </select>
                        </div>

                     </div>
                    <div class="col-lg-2">
                        <div class="col-lg-12">Sub Division</div>
                        <div class="col-lg-12 mt-1">
                           <select class="form-control js-example-basic-single">
                              <option>1122</option>
                               <option>1122</option>
                           </select>
                        </div>

                     </div>
                     <div class="col-lg-2">
                        <div class="col-lg-12">Applicant Name</div>
                        <div class="col-lg-12 mt-1">
                           <select class="form-control js-example-basic-single">
                              <option>1122</option>
                               <option>1122</option>
                           </select>
                        </div>

                     </div>
                     <div class="col-lg-2" style="margin-top:27px;"><a href="#" class="btn btn-primary" role="button">Search</a></div>
                  </div>

                <div class="card mt-4">
               <div class="card-body">
                  <h5>Filter By</h5>
                   <div class="row">
                     <div class="col-lg-2">
                        <div class="col-lg-12">District</div>
                        <div class="col-lg-12 mt-1">
                           <select class="form-control js-example-basic-single">
                              <option>1122</option>
                               <option>1122</option>
                           </select>
                        </div>

                     </div>
                    <div class="col-lg-2">
                        <div class="col-lg-12">Sub Division</div>
                        <div class="col-lg-12 mt-1">
                           <select class="form-control js-example-basic-single">
                              <option>1122</option>
                               <option>1122</option>
                           </select>
                        </div>

                     </div>
                     <div class="col-lg-2">
                        <div class="col-lg-12">Block</div>
                        <div class="col-lg-12 mt-1">
                           <select class="form-control js-example-basic-single">
                              <option>1122</option>
                               <option>1122</option>
                           </select>
                        </div>

                     </div>
                     <div class="col-lg-2">
                        <div class="col-lg-12">Scheme</div>
                        <div class="col-lg-12 mt-1">
                           <select class="form-control js-example-basic-single">
                              <option>1122</option>
                               <option>1122</option>
                           </select>
                        </div>

                     </div>
                     <div class="col-lg-2">
                        <div class="col-lg-12">Application Status</div>
                        <div class="col-lg-12 mt-1">
                           <select class="form-control js-example-basic-single">
                              <option>1122</option>
                               <option>1122</option>
                           </select>
                        </div>

                     </div>
                     <div class="col-lg-2" style="margin-top:27px;"><a href="#" class="btn btn-info" role="button">Search</a></div>
                  </div>
                  <div class="col-lg-12 mt-4">
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
                            <td><?php
                           $total_applicant=$this->Headquater_model->totol_applicant($scheme_id); ?>
                              <a href="<?php  echo base_url('headquater/hq_total_application_list/'.$scheme_id); ?>" role="button"  class="btn btn-primary" value=""><?php echo $total_applicant; ?></a>

                            </td> 
                           <td><?php 
                                 $total_approved_by_district=$this->Headquater_model->approved_by_district($scheme_id); ?>
                                <a href="<?php echo base_url('headquater/dist_approved_application_list_in_hq/'.$scheme_id);?>" role="button"  class="btn btn-primary" value=""><?php echo $total_approved_by_district; ?></a>
                           </td>

                           <td><?php 
                                 $total_reject_by_district=$this->Headquater_model->reject_by_district($scheme_id); ?>
                                    <a href="<?php echo base_url('headquater/dist_rejected_application_list_in_hq/'.$scheme_id);?>" role="button"  class="btn btn-primary" value=""><?php echo $total_reject_by_district; ?></a>
                           </td>
                           <td>
                              <?php 
                                 $total_project_cost_update_by_district=$this->Headquater_model->project_cost_update_by_district($scheme_id);
                                 // echo $this->db->last_query();
                                 ?>
                                    <a href="<?php echo base_url('headquater/dist_updated_application_list_in_hq/'.$scheme_id);?>" role="button"  class="btn btn-primary" value=""><?php echo $total_project_cost_update_by_district; ?></a>
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
            </fieldset>
           
            
         </div>
      </div>
   </div>
</div>

<?php $this->load->view('common/footer.php'); ?>
