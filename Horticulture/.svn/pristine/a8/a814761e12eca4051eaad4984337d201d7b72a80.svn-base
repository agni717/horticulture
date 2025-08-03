<?php $this->load->view('common/header_hq.php'); ?>
  <style type="text/css">
     .text-error{color: #f05555;}
     .form-group.form-row { margin-bottom:10px; }
     .form-group.form-row .d-flex { align-items: end;height: 100%;justify-content: end; }
  </style>
    <div class=" page-body-wrapper">
    <div class="container-fluid">
      
      <div class="row">
          

            <div class="col-lg-4 grid-margin mx-auto mt-5">
            
             <h4 class="card-title">Product Creation</h4>
              <div class="card">
                <div class="card-body">
                  <form id="addFrm" name="addFrm" method="POST">
                 
                 <!--  <form class="form-sample"> -->
                   <?php //echo form_open('superuser/create_user') ; ?>
                    <?php if(isset($error)) :?>
                    <div id="alert_msg" style="color:red; margin:0 0 10px 0px;"> 
                        <?php 
                           echo $error;
                        ?>

                  
                     <?php endif; ?>
                            <div class="row">
                              <div class="col-lg-12 text-center text-success msg_cont2" >
                                 <?php
                                 if(!empty($this->session->flashdata('msg')))
                                 {
                                 echo $this->session->flashdata('msg');
                                 }
                                 ?>
                              </div>
                           </div> 

					<input type="hidden" name="prod_id" value="<?php if(isset($product->prod_id)){echo $product->prod_id;}?>">
                    <div class="form-group form-row">
                      <div class="col-md-12">
                        <label class="col-form-label">Product Name</label>
                        <input type="text" class="form-control" name="prod_name" id="prod_name" value="<?php if(isset($product->prod_name)){echo $product->prod_name;}?>" />
                        <small class="text-error prod_name"><?php echo form_error('prod_name');?></small>
                      </div>

                    </div>

                    <div class="form-group form-row">
                      
                      <div class="col-md-12 text-center">
                      <!-- <a class="btn btn-primary"  role="button">Submit</a> -->
                        <div class="">
                          <button type="submit" class="btn btn-primary" id="btn_submit">Submit</button>
                        </div>
                      </div>
                    </div>

                  </form>
                </div>
                <div class="col-lg-12 text-center mt-2">
                                    
                                       <div class="get_error_total" align="center" style="background-color: #bf0000;color: #fff;max-width: 500px;margin: 0 auto;padding: 10px 20px;display: none;">sdgdg</div>
                                       <div class="get_success_total" align="left" style="background-color: #174b10;color: #fff;max-width: 500px;margin: 0 auto;padding: 10px 20px;display: none;">ssddg</div>
                                 </div> 
              </div>
            </div>
            
           
          </div>
    </div>
  
    </div>
    
    <?php $this->load->view('common/footer.php'); ?> 

    <script type="text/javascript">

$(function(){
    
$('#alert_msg, .text-error').delay(8000).fadeOut();

$('.msg_cont2').delay(8000).fadeOut();
     
});

      
</script>
