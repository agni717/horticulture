<?php $this->load->view('common/header_hq.php'); ?>
      <div class=" page-body-wrapper">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-12 grid-margin mt-5">
                  <h4 class="card-title">List Of Products <small style="float:right;"><a class="text-primary" href="<?php echo site_url('admin/headquater/product_creation') ?>">Add Product</a></small></h4>
                  <div class="card">
                     <div class="card-body">
						 
                        <table id="example" class="table table-striped table-bordered" 
                           style="width:100%">
                           <thead>
                              <tr>
                                 <th width="5%">SL NO</th>
                                 <th width="14%">Product Name</th>
                                 <th width="14%">Cretaed Date</th>
                                 <th width="7%">Actions</th>
                                 <th  width="7%">Status</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php 
                               if(!empty($product_list)) {
                                  foreach($product_list as $key=>$row) { 
                                  $id = $row->prod_id;
                               if($row->prod_status==1){
                                   $status = 'Active';
                                    $status_change = 0;
                                   $span_style= "color:green";
                                }else if($row->prod_status==0){
                                   $status = 'InActive';
                                     $status_change = 1;
                                 $span_style= "color:red"; } ?>
                              <tr>
                                 <td><?php echo $key+1; ?></td>
                                 <td><?php echo $row->prod_name; ?></td>
                                 <td><?php echo $row->prod_createdate; ?></td>
                                 
                                 <td><a href="<?php echo base_url('admin/headquater/product_creation/'.$row->prod_id);?>" class="text-success"><i class="fa fa-pencil-square-o" aria-hidden="true" style="color:green; font-size: 18px;"></i></a> 
                  <!-- <i class="fa fa-trash-o" aria-hidden="true" style="color:#b1000d; font-size: 18px;"></i></td> -->
                                     <i class="fa fa-lock" aria-hidden="true" style="color:#ae1400; font-size:18px; padding-left: 8px;"  name= "status" onclick="ChangeStatus('<?php echo $id; ?> ','<?php echo $status_change?>');"></i>
                                 </td>
                                 <td>
                                  <?php   
                              if($row->prod_status == 1)
                                 { ?>
                             <span style="color:green;">Active</span>

                               <?php 
                               }
                              else
                               { ?>
                             <span style="color:red;">In Active</span>
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
        var confirm = window.confirm("Change Product Status?");
        if (confirm){
          $.ajax({
                url: '<?php echo base_url('admin/headquater/ajax_update_product_status') ?>',
                type: 'POST',
                data: {'prod_id':row_id,'status':change_status},
                success: function(data) {
                  alert(data); 
                  setTimeout(function(){ location.reload()}, 1000 );
                }
            });
          
        //alert(id);
        }
      }
</script>
