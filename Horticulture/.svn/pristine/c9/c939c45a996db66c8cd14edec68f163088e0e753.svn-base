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
                           <th width="5%">SL No</th>
                           <th width="14%">Scheme Name</th>
                           <th width="14%">Scheme Start Date</th>
                           <th width="12%">Scheme End Date</th>
                           <th width="5%">Actions</th>
                        </tr>
                     </thead>
                     <?php 
                     if(!empty($scheme_data)) {
                        foreach($scheme_data as $row) {  ?>
                     <tbody>
                        <tr>
                           <td><?php echo $row->id; ?></td>
                           <td><?php echo $row->scheme_name; ?></td>
                           <td><?php echo $row->created; ?></td>
                           <td><?php echo $row->modified; ?></td>
                           <td>
                              <a class="btn btn-primary btn-sm" href="<?php echo base_url('admin/headquater/edit_scheme/'.$row->id);?>" role="button">Edit Scheme</a> 
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
