<div class="row">
      <div class="col-lg-10 grid-margin mx-auto">
        <div class="card">
          <div class="card-body">
			  <h4 class="py-2">Application History</h4>
			  <table class="table table-sm">
			  		<thead>
					<tr>
					  <th scope="col">#</th>
					  <th scope="col">Status</th>
					  <th scope="col">Remarks</th>
					  <th scope="col">Uploaded Documents</th>
					  <th scope="col">Date</th>
					</tr>
				  </thead>
				  <tbody>
					 <?php
					 if ( !empty( $remarks ) ) { 
					  foreach ( $remarks as $k => $rd ) { ?>
					<tr>
					  <td><?php echo $k + 1 ?></th>
					  <td><?php 
						  $status = $this->admin_m->get_remark_status($rd->remark_stat);
						  echo $status ?></td>
					  <td><?php echo $rd->remarks ?></td>
					  <td>
                      <ul class="list-unstyled list-inline">
					  <?php
					  	$string = $rd->fileAttachment;
						//$str_arr = explode (",", $string); 
						$str_arr = preg_split ("/\,/", $string);
						//print_r($str_arr);
						for($i = 0; $i < count($str_arr); $i++) {
							?>
                            <li class="list-inline-item"><a href="<?php echo base_url($str_arr[$i]) ?>" target="_blank"><i class="fa fa-file-pdf-o fa-lg text-danger"></i></a></li>
                       <?php
						}
					   ?>
                       </ul>
                       </td>
					  <td><?php echo date("d-m-Y",strtotime($rd->add_datetime)) ?></td>
					</tr>
			  		<?php } }else{ ?>
			  			<tr>
							<td colspan="5">No remarks history found...</td>
			  			</tr>
			  		<?php } ?>
				  </tbody>
			  </table>
		  </div>
        </div>
      </div>
    </div>