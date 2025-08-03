<?php $this->load->view('/common/header_citizen.php'); ?>
<div class="page-body-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-10 grid-margin mt-5 mx-auto">
        <h4 class="card-title">Application Details</h4>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-10 grid-margin mx-auto">
        <div class="card">
          <div class="card-body">
            <?php
            if ( !empty( $applicantion_data ) ) {
              ?>
            <div class="row">
              <div class="col-lg-12">
                <table id="example" class="table table-striped table-bordered" 
                                 style="width:100%">
                  <thead>
                    <tr>
                      <th width="5%">SL. No.</th>
                      <th width="14%">Applicantion No.</th>
                      <th width="14%">Project Name</th>
                      <th width="15%">Scheme</th>
                      <th width="10%">Status/Actions</th>
                      <th width="10%">View</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    foreach ( $applicantion_data as $key => $row ) {
                      ?>
                    <tr>
                      <td><?php echo ($key + 1) ?></td>
                      <td><?php echo $row->application_no ?></td>
                      <td><?php echo $row->proj_name ?></td>
                      <td><?php echo $row->scheme_name ?></td>
                      <td><?php

                      if ( $row->is_first_sanction == 1 && $row->fileAttachment != '' && $row->is_dist_approve_1st_installment_release == 0 ) {
                        ?>
                        <a href="<?php echo base_url()?>uploads/process_sanction/<?php echo $row->fileAttachment?>" target="_blank" style="color:blue;" download>Download Sanction letter</a> <a class="btn btn-success btn-sm" href="<?php echo base_url('userset/sanction_letter_upload/'.$row->application_id) ?>" role="button">Apply for 1st Installment release</a>
                        <?php }else if($row->is_first_sanction == 1 && $row->is_dist_approve_1st_installment_release == 3){ ?>
                        <p class='text-danger'>Your 1st Installment Released Request Reverted by District.</p>
                        <a class="btn btn-success btn-sm" href="<?php echo base_url('userset/sanction_letter_upload/'.$row->application_id) ?>" role="button">Re-initialize 1st Installment release</a>
                        <?php }else if($row->first_installment_released_by_HQ==1 && $row->apply_for_second_installment==0 && $row->is_dist_approve_2nd_installment_release==3){ ?>
                        <p class='text-danger'>Your 2nd Installment Reverted by District.</p>
                        <a href="<?php echo base_url('userset/second_installment_view/'.$row->application_id);?>" class="btn btn-success">Re-initialize 2nd Installment release</a>
                        <?php }else if($row->is_dist_approve_1st_installment_release == 2){ ?>
                        <p class='text-danger'>Your 1st Installment Released Request Rejected by District.</p>
                        <?php }else if($row->first_installment_released_by_HQ == 3 && $row->is_dist_approve_1st_installment_release == 0 && $row->apply_for_1st_installment_release == 1){ ?>
                        <p class='text-danger'>Your 1st Installment Released Request Reverted by HQ.</p>
                        <?php }else if($row->first_installment_released_by_HQ == 2){ ?>
                        <p class='text-danger'>Your 1st Installment Released Request Rejected by HQ.</p>
                        <?php }else if($row->first_installment_released_by_HQ==1 && $row->apply_for_second_installment==0){ ?>
                        <p class='text-success'>Congratulation! Your 1st Installment Released Successfully.</p>
                        <a href="<?php echo base_url('userset/second_installment_view/'.$row->application_id);?>" class="btn btn-success">Apply for 2nd Installment release</a>
                        <?php
                        } else if ( $row->is_dist_approve_1st_installment_release == 1 ) {

                          echo "<p class='text-success'>Congratulation! Your 1st Installment Approved by District.</p>";

                        } else if ( $row->apply_for_second_installment == 1 && $row->second_installment_released_by_HQ == 0 ) {

                          echo "<p class='text-success'>2nd installment required document successfully submitted.</p>";

                        } else if ( $row->second_installment_released_by_HQ == 1 ) {

                          echo "<p class='text-success'>Congratulation! Your All Installment Completed.</p>";

                        } else if ( $row->is_dist_approve_2nd_installment_release == 1 ) {

                          echo "<p class='text-success'>Your 2nd Installment Approved by District.</p>";

                        } else if ( $row->is_hq_app_reject_revert == 3 && $row->is_applicant_submitted == 2 ) {

                          echo "<p class='text-warning'>Application reverted by HQ.</p>";

                        } else if ( $row->apply_for_1st_installment_release == 1 ) {

                          echo "1st installment required document successfully submitted.";

                        } else if ( $row->is_hq_app_reject_revert == 1 ) {

                          echo( 'Application Approved by HQ' );

                        } else if ( $row->is_hq_app_reject_revert == 2 ) {

                          echo( 'Application rejected by HQ' );

                        } else if ( $row->is_district_app_reject_revert == 1 ) {

                          echo( 'Application Approve by District' );

                        } else if ( $row->is_district_app_reject_revert == 2 ) {

                          echo( 'Application rejected by District' );

                        } else if ( $row->is_applicant_submitted == 1 && $row->is_district_app_reject_revert == 3 ) {
                          ?>
                        Application reverted by District <a class="btn btn-success btn-sm" href="<?php echo base_url('userset/exist_project_details/'.$row->scheme_id) ?>" role="button">Edit</a>
                        <?php
                        } else if ( $row->is_applicant_submitted == 1 ) {
                          ?>
                        Application Saved <a class="btn btn-success btn-sm" href="<?php echo base_url('userset/exist_project_details/'.$row->scheme_id) ?>" role="button">Edit</a>
                        <?php
                        } else if ( $row->is_applicant_submitted == 2 ) {
                          echo( 'Application Submitted' );
                        } else {
                          echo( 'Application in process...' );
                        }
                        ?>
                        
                        <!--<a class="btn btn-success btn-sm" href="application_list_details_for_citizen.php" role="button">Details</a>--></td>
                      <td><a class="btn btn-info btn-sm" href="<?php echo base_url('userset/applicantion_form_details/'.$row->application_id);?>" role="button">Details</a></td>
                    </tr>
                    <?php
                    }

                    ?>
                  </tbody>
                </table>
              </div>
            </div>
            <?php }else{ ?>
            <div class="row">
              <div class="col-lg-6 mx-auto">
                <div class="card">
                  <div class="card-body text-center">
                    <h1 class="text-success mb-3">You Are Successfully Registered</h1>
                    <a href="<?php echo base_url('userset/exist_project_details'); ?>" class="btn btn-primary">Click here to Apply</a> </div>
                </div>
              </div>
            </div>
            <?php }?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $this->load->view('/common/footer.php'); ?>
<script type="text/javascript">


      </script>