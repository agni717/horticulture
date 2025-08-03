<?php $this->load->view('common/header'); ?>
<style>
  .btns { display: flex; height: 100%; flex-direction: column; justify-content: center; margin:0; }
  .btns a { line-height:18px; }
</style>
<div class="page-body-wrapper">
   <div class="container-fluid py-2">
      <!-- <div class="row">
         <img src="<?php echo base_url();?>assets/images/banner.jpg">
      </div> -->

	    <?php
               //echo count($schemes); 
              if(!empty($schemes)) {
                 $c=1;
              foreach($schemes as $row)
              {
                 $sch_start_date=strtotime($row->created);
                 $sch_end_date=strtotime($row->modified);
                 $today= strtotime(date("Y-m-d"));


                 if(($sch_start_date<=$today) && ($today<=$sch_end_date))
                {
              ?>
      <div class="row justify-content-center mb-4">
        <div class="col-lg-12 grid-margin my-2">          
          <div class="box mb-3 px-3">
            <h2><?php echo $row->scheme_name;?></h2>
			<div class="row">
				<div class="col-md-10">
					
            		<?php echo $row->details;?>
				</div>
				<div class="col-md-2">
					<a href="<?php echo base_url('main/login/'.$row->id);?>" class="btn btn-primary btn-lg btn-block mb-2">Interested Applicant may apply by clicking here</a>
						 <a href="<?php echo base_url('main/login/'.$row->id);?>" class="btn btn-success btn-lg  btn-block">Existing user can Login by Clicking here</a>
				</div>
			</div>
			
          </div>
        </div>
      </div>
	  <?php
		  }
		  $c++;
		 } //end of foreach..
	  } 

	  ?>
   </div>
</div>

<?php $this->load->view('common/footer'); ?>