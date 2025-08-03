<?php $this->load->view('common/header_hq.php'); ?>
      <div class=" page-body-wrapper">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-12 grid-margin mt-5">
                  <h4 class="card-title">List Of Users</h4>
                  <div class="card">
                     <div class="card-body">
                        <table id="example" class="table table-striped table-bordered" 
                           style="width:100%">
                           <thead>
                              <tr>
                                 <th width="5%">SL NO</th>
                                 <th width="14%">District Admin Name</th>
                                 <th width="14%">Mobile No </th>
                                 <th width="9%">Email Id</th>
                                 <th width="9%">District</th>
                                 <th width="11%">Login ID</th>
                                 <th width="7%">Actions</th>
                                 <th  width="7%">Status</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php 
                               if(!empty($user_list)) {
                                  foreach($user_list as $key=>$row) { 
                                  $id = $row->id;
                               if($row->status==1){
                                   $status = 'Active';
                                    $status_change = 0;
                                   $span_style= "color:green";
                                }else if($row->status==0){
                                   $status = 'InActive';
                                     $status_change = 1;
                                 $span_style= "color:red"; } ?>
                              <tr>
                                 <td><?php echo $key+1; ?></td>
                                 <td><?php echo $row->name; ?></td>
                                 <td><?php echo $row->phone; ?></td>
                                 <td><?php echo $row->email; ?></td>
                                 <td><?php echo $row->district_name; ?></td>
                                 <td><?php echo $row->user_name; ?></td>
                                 
                                 <td><a href="<?php echo base_url('admin/headquater/user_creation/'.$row->id);?>" class="text-success"><i class="fa fa-pencil-square-o" aria-hidden="true" style="color:green; font-size: 18px;"></i></a> 
                  <!-- <i class="fa fa-trash-o" aria-hidden="true" style="color:#b1000d; font-size: 18px;"></i></td> -->
                                     <i class="fa fa-lock" aria-hidden="true" style="color:#ae1400; font-size:18px; padding-left: 8px;"  name= "status" onclick="ChangeStatus('<?php echo $id; ?> ','<?php echo $status_change?>');"></i>
                                 </td>
                                 <td>
                                  <?php   
                              if($row->status == 1)
                                 { ?>
                             <span style="color:green;">Active</span>

                               <?php 
                               }
                              else
                               { ?>
                             <span style="color:red;">InActive</span>
                             <?php 
                              } ?>    

                  </td>
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
<script>
   function ChangeStatus(row_id,change_status)
      {
        //alert(row_id + '---' + change_status);
        var confirm = window.confirm("Change User Status?");
        if (confirm){
          $.ajax({
                url: '<?php echo base_url('admin/headquater/ajax_update_Applicant_status') ?>',
                type: 'POST',
                data: {'id':row_id,'status':change_status},
                success: function(data) {
                  alert(data); 
                  setTimeout(function(){ location.reload()}, 1000 );
                }
            });
          
        //alert(id);
        }
      }
</script>
