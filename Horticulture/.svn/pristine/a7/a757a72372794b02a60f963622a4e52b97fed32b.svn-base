<?php $this->load->view('common/header_hq'); ?>
<style type="text/css">
     .text-error{color: #f05555;}
     .form-control, .select2-container--default .select2-selection--single, .select2-container--default .select2-selection--single .select2-search__field, .typeahead, .tt-query, .tt-hint { padding: 0 0.475rem; }
  </style>
    <div class=" page-body-wrapper">
    <div class="container-fluid">
      
      <div class="row">
          
            
            <div class="col-lg-8 grid-margin  m-auto">
            
             <h4 class="card-title mt-5">Add Scheme</h4>
              <div class="card">
                <div class="card-body">
                <!--  <form class="form-sample"> -->
                   <?php echo form_open('admin/headquater/scheme'); ?>
                    <?php if(isset($error)) :?>
                
                     <div id="alert_msg" style="color:red; margin:0 0 10px 0px;">
                        <?php 
                           echo $error;
                        ?>
                     </div>
                  
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
                    <div class="row mb-2">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Scheme Name</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" name="name" id="name" />
                            <small class="text-error"><?php echo form_error('name');?></small>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Scheme Start Date </label>
                          <div class="col-sm-8">
                            <input type="date" class="form-control" name="created" id="created"/>
                            <small class="text-error"><?php echo form_error('created');?></small>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row mb-2">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Scheme End Date</label>
                          <div class="col-sm-8">
                            <input type="date" class="form-control"  name="modified" id="modified" />
                            <small class="text-error"><?php echo form_error('modified');?></small>
                          </div>
                        </div>
                      </div>
                      
                    </div>
					<div class="row mb-2">
						<div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Details</label>
                          <div class="col-sm-10">
                            <textarea class="form-control text_editor" id="exampleFormControlTextarea1" name="details" rows="4"></textarea>
                            <small class="text-error"><?php echo form_error('details');?></small>
                          </div>
                        </div>
                      </div>
					</div>
                          
                    
                    <div class="row">
                      
                      <div class="col-lg-12 text-right">
                   <!--  <a class="btn btn-primary" href="#" role="button">Submit</a> -->
                   <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </div>
                    
                 <!--  </form> -->
                  
               </div>
  
               </div>
             <?php $this->load->view('common/footer'); ?>
 <script type="text/javascript">

$(function(){
    
$('#alert_msg, .text-error').delay(8000).fadeOut();

$('.msg_cont2').delay(8000).fadeOut();
     
});
$(function() {
	CKEDITOR.replace('exampleFormControlTextarea1');
});
</script>
