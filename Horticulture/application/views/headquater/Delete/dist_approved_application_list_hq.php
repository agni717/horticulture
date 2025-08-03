<?php $this->load->view('common/header_hq'); ?>
<div class=" page-body-wrapper">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12 grid-margin mt-5">
            <h4 class="card-title">Application List</h4>
            <div class="card">
               <div class="card-body">
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
                                 <th width="9%">Actions</th>
                              </tr>
                           </thead>
                           <tbody>

                              <?php
                           if(!empty($list)){
                           foreach($list as $key=>$row)
                            {
							$application_id = $row->application_id;
                            ?>
                              <tr>
                                 <td><?php echo $key+1; ?></td>
                                 <td><?php echo $row->application_no;?></td>
                                 <td><?php echo $row->first_name." ".$row->last_name;?></td>
                                 <td><?php echo $row->mobile;?></td>
                                 <!-- <td><?php echo $row->email;?></td> -->
                                 <td><?php echo $row->scheme_name;?></td>
                                 <td>
                                    									 
									 
									 <?php 

										if($this->session->userdata['utype'] == 1){
									 ?>
                                    <a class="btn btn-info btn-sm" href="<?php echo base_url('admin/hq_dashboard/citizen_form_details/'.$row->application_id);?>" role="button">Details</a>
									 <a class="btn btn-success btn-sm" data-toggle="modal" id="<?php echo $application_id;?>" onclick="lfn_hq_reason(this.id);"  role="button">Approval</a>
									 <?php }else{  ?>
									 <a class="btn btn-info btn-sm" href="<?php echo base_url('admin/dist_head/citizen_form_details/'.$row->application_id);?>" role="button">Details</a>
									 <?php } ?>
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
          <form method="post" name="frmAppRej" id="frmAppRej" enctype="multipart/form-data">
            <input type="hidden" name="application_id" id="application_id" value="">
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
                  <input type="radio" class="form-check-input" name="hq_action" value="1">Approved
                  </label>
               </div>
               <div class="form-check-inline">
                  <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="hq_action" value="2">Rejected
                  </label>
               </div>
                <div class="form-check-inline">
                  <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="hq_action" value="3">Revert
                  </label>
               </div>

               </div>
              
                <div class="col-lg-12 mt-2 p-0">
                  <label for="exampleFormControlTextarea1">Remarks</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" name="remarks" rows="3"></textarea>
               </div>

               <div class="col-lg-12 mt-2 p-0" id="errormsg">
                  
               </div>

               <div class="col-lg-12 mt-2 p-0 modal_file">
                  <div class="custom-file">
                   <input type="file" name="fileApp" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">  
                   <label class="custom-file-label mb-0" for="inputGroupFile01"></label>  
               </div>
            </div>
        
         </div>
         <div class="form-group form-row">
         <div class="col-lg-12 text-center text-msg" id="ar_msg_cont">
                                          <!-- Message Area -->
         </div>
          </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="btn_submit">Submit</button>
         </div>
      </div>
   </div>
</div>
<?php  $this->load->view('common/footer'); ?>
<script>
   function lfn_hq_reason(id)
      {
        var confirm = window.confirm("Approved this form?");
        if (confirm){
          $("#frmAppRej input[name='application_id']").val(id);
          // $('#discharge_msg_cont').html('');
          // $('#frmDischarge')[0].reset();
          $('#exampleModal').modal("show");
        //alert(id);
        }
      }

      $('#btn_submit').on("click",function(event){
        var form = $("#frmAppRej");
        var formData = new FormData(form[0]);
        var application_id = $("#frmAppRej input[name='application_id']").val();

        var hq_action = $("#hq_action").val();
        var discharge_note = $("#discharge_note").val();
        var fileDischarge = $("#frmDischarge input[name='fileDischarge']").val();

        var error_flag= false;
        
        if(hq_action==''){
          $('#errormsg').show().html('Please checked radio');
          setTimeout(function(){$('#errormsg').hide()}, 1000);
          error_flag= true;
          return false;
        }

        // if(fileDischarge==''){
        //   $('#discharge_msg_cont').show().html('Please upload discharge file');
        //   setTimeout(function(){$('#discharge_msg_cont').hide()}, 1000);
        //   return false;
        // }

        if(error_flag== false)
        {
            $.ajax({
                url: '<?php echo base_url() ?>admin/headquater/ajax_app_rej_rev',
                type: 'POST',
                data: formData, //{'patient_entry_id':patient_entry_id,'remarks':rmk},
                contentType: false,
                cache: false,
                processData:false,
                success: function(data) {
                  //alert(data); return false;
                const myArray = data.split("##");
                $('#ar_msg_cont').show().html(myArray[1]);
                setTimeout(function(){ $('#ar_msg_cont').html('').hide();}, 2000);
                if(myArray[0]==1){
                setTimeout(function(){ location.reload();}, 1000);     
                  }

                }
            });
          }
      });

</script>