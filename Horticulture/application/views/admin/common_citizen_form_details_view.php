<?php $this->load->view('common/header_hq.php'); ?>
<div class="page-body-wrapper">
  <div class="container-fluid">
    <?php $this->load->view('admin/application_data_common'); ?>
    <div class="row">
      <div class="col-lg-10 grid-margin mt-5 mx-auto">
        <h4 class="card-title">List of Documents</h4>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-10 grid-margin mx-auto">
        <div class="card">
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th width="24">Sl. No.</th>
                  <th width="938">Document Description</th>
                  <th width="135" style="white-space: normal;">Whether Submitted</th>
                  <th width="185">Status</th>
                  <th width="342">Remarks</th>
                  <th rowspan="2">Upload Document</th>
                </tr>
              </thead>
              <tbody>
                <?php
                if ( !empty( $document_upload_master_data ) ) {
                  $sl_no = 1;
                  $col_span = 0;
                  $temp_id = '';
                  foreach ( $document_upload_master_data as $row ) {
                    $doc_id = $row->doc_id;
                    $parent_id = $row->parent_id;
                    $doc_label = $row->doc_label;
                    $doc_file_name = $row->doc_file_name;

                    /*if($doc_id==$parent_id)
                    {
                       $temp_id = $doc_id;
                    }*/

                    if ( $doc_id == 5 ) {
                      $col_span = 3;
                    } elseif ( $doc_id == 17 ) {
                      $col_span = 2;
                    } elseif ( $doc_id == 6 ) {
                      $sl_no = 6;
                    } elseif ( $doc_id == 18 ) {
                      $sl_no = 16;
                    }


                    // code...
                    if ( $parent_id == 0 ) {
                      ?>
                <tr>
                  <?php
                  $img1 = '';
                  $district_remarks1 = '';
                  $remarks1_style = "style='display:none'";

                  $row2 = $this->admin_m->get_submitted_file( $application_id, $doc_id );
                  // echo "<pre>";
                  // echo $this->db->last_query();
                  if ( !empty( $row2 ) ) {
                    $img1 = $row2->file_name;
                    $district_remarks1 = $row2->district_remarks;

                    if ( $district_remarks1 != '' ) {
                      $remarks1_style = "style='display:block'";
                    }
                  }


                  ?>
                  <td><?php echo $sl_no;?></td>
                  <td><?php echo $doc_label?><!-- Prescribed format application (Annexure-1) --></td>
                  <td><?php
                  if ( $img1 != '' ) {
                    echo '<div class="text-success">Yes</div>';
                  } else {
                    echo '<div class="text-danger">No</div>';
                  }
                  ?></td>
                  <td><?php
                  if ( $img1 != '' ) {
                    echo '<div class="text-success">Checked</div>';
                  } else {
                    echo '<div class="text-danger">Not checked</div>';
                  }
                  ?></td>
                  <td><?php echo $district_remarks1; ?></td>
                  <td class="text-center"><!-- <button class="text-danger"><i class="fa fa-file-pdf-o"></i></button> -->
                    
                    <?php if($img1!='') { ?>
                    <a href="<?php echo base_url().'uploads/documents_list/'.$row2->file_name?>"><i class="fa fa-file-pdf-o" aria-hidden="true" style="color:red; font-size:15px;"></i></a>
                    <?php } else { ?>
                    <?php } ?></td>
                </tr>
                <?php
                $sl_no++;
                $img1 = '';
                }
                elseif ( $parent_id > 0 ) {
                    ?>
                <tr>
                  <?php
                  $img5 = '';
                  $district_remarks5 = '';
                  $remarks5_style = "style='display:none'";
                  $row5 = $this->admin_m->get_submitted_file( $application_id, $doc_id );
                  if ( !empty( $row5 ) ) {
                    $img5 = $row5->file_name;
                    $district_remarks5 = $row5->district_remarks;

                    if ( $district_remarks5 != '' ) {
                      $remarks5_style = "style='display:block'";
                    }
                  }


                  ?>
                  <?php if($doc_id==$parent_id){ ?>
                  <td rowspan="<?php echo $col_span?>"><?php echo $sl_no;?></td>
                  <?php } ?>
                  <td><?php echo $doc_label;?></td>
                  <td><?php if($img5 !=''){ echo '<div class="text-success">Yes</div>';}else{echo '<div class="text-danger">No</div>';} ?></td>
                  <td><?php
                  if ( $img5 != '' ) {
                    echo '<div class="text-success">Checked</div>';
                  } else {
                    echo '<div class="text-danger">Not checked</div>';
                  }
                  ?></td>
                  <td><?php echo $district_remarks5; ?></td>
                  <td class="text-center"><?php if($img5!='') { ?>
                    
                    <!-- <button class="text-danger" onclick="window.location.href='https://www.w3docs.com';"><i class="fa fa-file-pdf-o"></i></button> --> 
                    <!-- <a href="#"><i class="fa fa-file-pdf-o"></i></a> --> 
                    <a href="<?php echo base_url().'uploads/documents_list/'.$row5->file_name?>"><i class="fa fa-file-pdf-o" aria-hidden="true" style="color:red; font-size:15px;"></i></a>
                    <?php } else { ?>
                    <?php } ?></td>
                </tr>
                <?php

                } // end of elseif
                } // end of foreach
                }
                ?>
              </tbody>
            </table>
            <div class="row">
              <div class="col-lg-12 text-right">
                <?php if($admin_utype == 2){  ?>
                <a class="btn btn-primary my-2" href="<?php echo base_url('admin/district_dashboard')?>">Go to list</a>
                <?php }else{ ?>
                <a class="btn btn-primary my-2" href="<?php echo base_url('admin/hq_dashboard')?>">Go to list</a>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php $this->load->view('admin/remark_history.php'); ?>
  </div>
</div>
<?php $this->load->view('common/footer.php'); ?>
