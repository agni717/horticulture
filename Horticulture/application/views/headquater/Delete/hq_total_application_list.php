<?php $this->load->view('common/header_hq'); ?>
<div class=" page-body-wrapper">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12 grid-margin mt-5">
            <h4 class="card-title">Total Application List</h4>
            <div class="card">
               <div class="card-body">
                  <div class="row justify-content-center">
                     <div class="col-lg-1"><label for="sel1">Scheme:</label></div>
                     <div class="col-lg-3">
                        <select class="form-control" id="sel1">
                           <option>Pending</option>
                           <option>Approve by District</option>
                           <option>Approve by HQ</option>
                           <option>Reject by District</option>
                           <option>Reject by HQ</option>
                        </select>
                     </div>
                     <div class="col-lg-2">
                        <a href="#" class="btn btn-info btn-md" role="button">Search</a>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-12">
                        <table id="example" class="table table-striped table-bordered" 
                           style="width:100%">
                           <thead>
                              <tr>
                                 <th width="5%">SL No</th>
                                 <th width="14%">Application No.</th>
                                 <th width="14%">Applicant Name</th>
                                 <th width="8%">Mobile No. </th>
                                  <th width="8%">Scheme</th> 
                                 <th width="7%">Actions</th>
                              </tr>
                           </thead>
                           <tbody>

                              <?php
                           if(!empty($list)){
                           foreach($list as $key=>$row)
                            {
                            ?>
                              <tr>
                                 <td><?php echo $key+1; ?></td>
                                 <td><?php echo $row->application_no;?></td>
                                 <td><?php echo $row->first_name." ".$row->last_name;?></td>
                                 <td><?php echo $row->email;?></td>
                                 <td><?php echo $row->scheme_name;?></td>
                                 <td>
                                    <!-- <a class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal" href="#" role="button">Approval</a> -->
									 <?php 

										if($this->session->userdata['utype'] == 1){
									 ?>
                                    <a class="btn btn-info btn-sm" href="<?php echo base_url('admin/hq_dashboard/citizen_form_details/'.$row->application_id);?>" role="button">Details</a>
									 <?php }else{  ?>
									 <a class="btn btn-info btn-sm" href="<?php echo base_url('admin/dist_head/citizen_form_details/'.$row->application_id);?>" role="button">Details</a>
									 <?php }  ?>
                                 </td>
                              </tr>
                                <?php } }else{ ?>
                              <div class="col-md-12">
                              <div class="alert alert-danger">No applicaton found for this Scheme </div>
                               </div>
                         <?php } ?>
                           </tbody>
                        </table>
                     </div>
                  </div>                        
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Approval</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="col-lg-12 border border-dark p-2">
               <div class="form-check-inline">
                  <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="optradio">Approved
                  </label>
               </div>
               <div class="form-check-inline">
                  <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="optradio">Rejected
                  </label>
               </div>
                <div class="form-check-inline">
                  <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="optradio">Revert
                  </label>
               </div>

               </div>
              
                <div class="col-lg-12 mt-2 p-0">
                  <label for="exampleFormControlTextarea1">Remarks</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
               </div>

               <div class="col-lg-12 mt-2 p-0 modal_file">
                  <div class="custom-file">
                   <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">  
                   <label class="custom-file-label mb-0" for="inputGroupFile01"></label>  
               </div>
            </div>
        
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-primary">Submit</button>
         </div>
      </div>
   </div>
</div>
<?php  $this->load->view('common/footer'); ?>