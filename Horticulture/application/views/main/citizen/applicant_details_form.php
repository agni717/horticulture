<?php $this->load->view('common/header_citizen.php'); ?>  
<style type="text/css">
   .text-error{color: #f05555;}
   .table thead th, .table tbody td { white-space:normal !important; font-size:11px !important; padding: 5px !important; }
   .table td { line-height:12px; }
   .table td a i { font-size:16px !important; }
</style>

<div class="page-body-wrapper">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-10 grid-margin mt-5 mx-auto">
            <h4 class="card-title">Existing Industry And Project Description</h4>
         </div>
      </div> 

      <div class="row">
         <div class="col-lg-10 grid-margin mx-auto">
            <div class="card">
               <div class="card-body">
                  <input type="hidden" name="user_id" id="user_id" value="<?php echo $this->session->userdata('member_id');?>" />
                  <input type="hidden" name="scheme_id" id="scheme_id" value="<?php echo $this->session->userdata('member_scm_id');?>" />
                     
                  <?php if(isset($error)){ ?>
                     <div id="alert_msg" style="color:red; margin:0 0 10px 0px;">
                        <?php 
                           echo $error;
                        ?>
                     </div>
                  <?php } ?>

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
 
                  <div class="row industry-field ">
                     <div class="col-lg-12">
                        <fieldset class="w-100">
                           <legend>
                              <div class="col-lg-12">
                                 <div class="industry-text">
                                    <h5>Existing Industry </h5>
                                 </div>
                              </div>
                           </legend>
                           
                           <?php 
                              $radio_yesno = 'No';
                              if(!empty(set_value('yesno')))
                              {
                                 $radio_yesno = set_value('yesno');
                              }
                              elseif($industry_master != false){
                                 $radio_yesno = 'Yes';
                              }
                              else{
                                 $radio_yesno = 'No';
                              }
                           ?>
                           <div class="row">
                              <div class="col-lg-12">
                                 <div class="card">
                                    <div class="card-body">
                                       <div class="form-group">
                                          <div class="form-row p-0">
                                             <label class="col-lg-3 col-form-label">Existing Industry :</label>
                                             <div class="col-lg-3">
                                                <div class="custom-control custom-radio custom-control-inline">
                                                   <input type="radio" class="custom-control-input" onclick="javascript:yesnoCheck();" name="yesno" id="yesCheck" value="Yes" <?php if($radio_yesno=='Yes'){ echo 'checked';}?>>
                                                   <label class="custom-control-label" for="yesCheck">Yes</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                   <input type="radio" class="custom-control-input" onclick="javascript:yesnoCheck(); delete_all_industry();" name="yesno" id="noCheck" value="No" <?php if($radio_yesno=='No'){ echo 'checked';}?>>
                                                   <label class="custom-control-label" for="noCheck">No</label>
                                                </div>
                                             </div>                                 
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <?php
                              $style = 'style="display:none;"';
                              if($radio_yesno=='No'){
                                 $style = 'style="display:none;"';
                              }
                              elseif($industry_master != false){
                                 $style = 'style="display:block;"';
                              }
                              else{
                                 $style = 'style="display:block;"';
                              }
                           ?>
                        
                           <div class="col-lg-12" id="ifYes" <?php echo $style;?>>
                              <div class="card">
                                 <div class="card-body">
                                    <div class="form-group">
                                       <div class="form-row">
                                          <div class="col-lg-3">
                                             <label class="col-form-label">Existing Industry Name: <sup> * </sup></label>
                                             <div class="">
                                                <input type="text" class="form-control" name="industry_name" id="industry_name" value=""  placeholder="Industry Name" onkeypress="return lfn_CharOnly(event);">
                                                <small class="text-error industry_name"><?php echo form_error('industry_name');?></small>
                                             </div>
                                          </div>
                                          <div class="col-lg-3">
                                             <label class="col-form-label">Existing Industry Location: <sup> * </sup> </label>
                                             <div class="">
                                                <input type="text" class="form-control" name="industry_location" id="industry_location" value=""  placeholder="Industry Location" onkeypress="return lfn_AlphaNumericOnly(event);" />
                                                <small class="text-error industry_location"><?php echo form_error('industry_location');?></small>
                                             </div>
                                          </div>
                                          <div class="col-lg-3">
                                             <label class="col-form-label ">Product of Existing Industry: <sup> * </sup> </label>
                                             <div class="">
                                             <select class="form-control js-example-basic-single w-100" name="industry_product" id="industry_product">
                                                <option value="">---Select---</option>
                                                <?php 
                                                foreach($product_data as $prods)
                                                { 
                                                ?>
                                                <option value="<?php echo $prods->prod_id?>"><?php echo $prods->prod_name?></option>
                                                <?php } ?>                                       
                                             </select>
                                             <small class="text-error industry_product"><?php echo form_error('industry_product');?></small>
                                             </div>
                                          </div>
                                             <div class="col-lg-3">
                                             <label class="col-form-label">Address1: <sup> * </sup></label>
                                             <div class="">
                                                <input type="text" class="form-control" name="industry_Address" id="industry_Address" value="" placeholder="Address1" >
                                                <small class="text-error industry_Address"><?php echo form_error('industry_Address');?></small>
                                             </div>
                                          </div>
                                          <div class="col-lg-3">
                                             <label class="col-form-label">Address2<sup>*</sup>:</label>
                                                
                                             <textarea class="form-control" name="industry_Address2" id="industry_Address2" placeholder="Address2"></textarea>
                                                <small class="text-error industry_Address2"><?php echo form_error('industry_Address2');?></small>
                                          </div> 
                                          <div class="col-lg-3">
                                             <label class="col-form-label">District<sup>*</sup>:</label>
                                             <?php
                                             $district_code ='';                                    
                                             if(set_value('district_code') !=''){
                                                $district_code = set_value('district_code');
                                             }
                                             ?>
                                             <select class="form-control js-example-basic-single w-100" name="district_code" id="district_code" onchange="lfn_SetSubDivision(this.value,'industry_sub_division', 'block_code', 'gram_panchayat');">
                                                <option value="">---Select---</option>
                                                <?php 
                                                foreach($district_data as $dist)
                                                { 
                                                ?>
                                                <option value="<?php echo $dist->district_code?>" <?php if($district_code==$dist->district_code){echo 'selected';}?>><?php echo $dist->district_name?></option>
                                                <?php } ?>                                       
                                             </select>
                                             <small class="text-error district_code"><?php echo form_error('district_code');?></small>
                                          </div>
                                          <div class="col-lg-3">
                                             <label class="col-form-label">Sub-Division<sup>*</sup>:</label>
                                             <select class="form-control js-example-basic-single" name="industry_sub_division" id="industry_sub_division" onchange="lfn_SetBlock(this.value,'block_code','gram_panchayat');">
                                                <option value="">---Select---</option>
                                             </select>
                                             <small class="text-error industry_sub_division"></small>
                                          </div>
                                          <div class="col-lg-3">
                                             <label class="col-form-label">Block<sup>*</sup>:</label>
                                             <select class="form-control js-example-basic-single" name="block_code" id="block_code" onchange="lfn_SetGP(this.value,'gram_panchayat');">
                                                <option value="">---Select---</option>
                                             </select>
                                             <small class="text-error block_code"><?php echo form_error('block_code');?></small>
                                          </div>
                                          <div class="col-lg-3">
                                             <label class="col-form-label">Gram Panchayat<sup>*</sup>:</label>
                                             <select name="gram_panchayat" id="gram_panchayat" class="form-control js-example-basic-single">
                                                <!-- <select name="gram_panchayat" id="gram_panchayat" onchange="lfn_SetVilage(this.value,'vilage_id');" class="form-control js-example-basic-single"> -->
                                                <option value="">--Select Panchayat--</option>
                                                   
                                             </select>
                                             <small class="text-error gram_panchayat"><?php echo form_error('gram_panchayat');?></small>
                                          </div>
                                          <div class="col-lg-3">
                                             <label class="col-form-label ">Village<sup>*</sup>:</label>
                                             <input type="text" class="form-control" name="vilage_id" id="vilage_id" value="" placeholder="Village Name" >
                                                <small class="text-error vilage_id"><?php echo form_error('vilage_id');?></small>
                                          </div>
                                          <div class="col-lg-3">
                                             <label class="col-form-label ">Police Station: <sup> * </sup></label>
                                             <div class="">
                                                <input type="text" class="form-control" name="industry_Police_Station" id="industry_Police_Station" value="" placeholder="Police Station" >
                                                   <small class="text-error industry_Police_Station"><?php echo form_error('industry_Police_Station');?></small>
                                             </div>
                                          </div>
                                          <div class="col-lg-3">
                                             <label class="col-form-label">Pincode: <sup> * </sup></label>
                                             <div class="">
                                                <input type="text" class="form-control" name="industry_Pincode" maxlength="6" id="industry_Pincode" value="" placeholder="Pincode" onkeypress="return lfn_NumOnly(event);">
                                                <small class="text-error industry_Pincode"><?php echo form_error('industry_Pincode');?></small>
                                             </div>
                                          </div>
                                       </div>

                                       <div class="col-lg-12 text-center mt-4">
                                          <button type="button" class="btn btn-primary add_industry" id="add_industry" onclick="add_industry();"><i class="fa fa-plus-circle" aria-hidden="true"></i>  ADD</button>
                                       </div>

                                       <div class="col-lg-12 text-center mt-4" align="center">
                                          <div class="get_error_total" align="center" style="background-color: #bf0000;color: #fff;max-width: 500px;margin: 0 auto;padding: 10px 20px;display: none;"></div>
                                          <div class="get_success_total" align="center" style="background-color: #174b10;color: #fff;max-width: 500px;margin: 0 auto;padding: 10px 20px;display: none;"></div>
                                          <div class="div_roller_total" align="center" style="display: none;"><img src="<?php echo base_url(); ?>assets/images/ajax_loader.gif" style="max-width: 60px;" /></div>
                                       </div>
                                       
                                       <div class="col-lg-12 mt-4">
                                          <div class="block-table">
                                             <table class="table table-striped table-bordered break-table table-responsive" style="width:100%">
                                                <thead>
                                                   <tr>
                                                      <th>Existing Industry Name</th>
                                                      <th>Existing Industry Location</th>
                                                      <th>Product of Existing Industry</th>
                                                      <th>Address1</th>
                                                      <th>Address2</th>
                                                      <th>District</th>
                                                      <th>Sub-Division</th>
                                                      <th>Block</th>
                                                      <th>Gram Panchayat</th>
                                                      <th>Village</th>
                                                      <th>Police Station</th>
                                                      <th>Pincode</th>
                                                      <th>Actions</th>
                                                   </tr>
                                                </thead>
                                                <tbody id="tbody_id">

                                                   <?php echo $table_row; ?>
                                                   <!-- <tr>
                                                      <td>Demo Name</td>
                                                      <td>Bardhaman</td>
                                                      <td>Demo Product</td>
                                                      <td>Lorem Ipsum demo text here</td>
                                                      <td>Lorem Ipsum demo text here</td>
                                                      <td>Bardhaman</td>
                                                      <td>Demo text here</td>
                                                      <td>Bardhaman</td>
                                                      <td>Bardhaman</td>
                                                      <td>Bardhaman</td>
                                                      <td>Demo text here</td>
                                                      <td>Demo text here</td>
                                                      <td>
                                                         <a href="javascript:void(0);" class="text-success"><i class="fa fa-pencil-square-o"></i></a>
                                                         <a href="javascript:void(0);" class="text-danger"><i class="fa fa-trash"></i></a>
                                                      </td>
                                                   </tr> -->
                                                </tbody>
                                             </table>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
               
                           
                        </fieldset>
                     </div> 
                     <div class="col-lg-12 text-center mt-4" align="center">
                        <div class="get_error_total2" align="center" style="background-color: #bf0000;color: #fff;max-width: 500px;margin: 0 auto;padding: 10px 20px;display: none;"></div>
                        <div class="get_success_total2" align="center" style="background-color: #174b10;color: #fff;max-width: 500px;margin: 0 auto;padding: 10px 20px;display: none;"></div>
                        <div class="div_roller_total2" align="center" style="display: none;"><img src="<?php echo base_url(); ?>assets/images/ajax_loader.gif" style="max-width: 60px;" /></div>
                     </div>
                     <div class="col-lg-12 text-right mx-auto mt-2">
                        <?php 
                        $show_next_btn = '1';

                        if(!empty($application_master))
                        {
                           
                           $is_applicant_submitted = $application_master->is_applicant_submitted;
                           $is_district_app_reject_revert = $application_master->is_district_app_reject_revert;

                           if($is_applicant_submitted =='2' && ($is_district_app_reject_revert =='0'))
                           {
                              $show_next_btn = '2';
                           }

                           if($is_applicant_submitted ==2 && ($is_district_app_reject_revert ==1 || $is_district_app_reject_revert ==2))
                           {
                              
                              $show_next_btn = '2';
                           }
                        }

                        if($show_next_btn == 1)
                        {
                           ?>
                           <!-- <a href="">Next</a> -->
                           <!-- <input type="submit" class="btn btn-primary mb-2" value="Next"> -->
                           <div class="get_success_next" align="center" style="background-color: #174b10;color: #fff;max-width: 500px;margin: 0 auto;padding: 10px 20px;display: none;"></div>
                           <button type="button" class="btn btn-primary mb-2" id="next_btn" onclick="next_button_industry();">Next</button>
                           <?php 
                        }
                        else
                        { ?>
                           <a class="btn btn-primary mb-2" href="<?php echo base_url('applicant/project/')?>" role="button">Next</a>
                           <?php 
                        }  ?>
                  
                     </div>
                     
                     <div class="row" id="msg_cont">
                        <div class="col-lg-12 text-center text-success" style="display: none;">
                           
                        </div>
                     </div>
                  </div>


                  <div class="row">
                     <div class="col-lg-12 text-center text-success msg_cont2" >
                        <?php
                        if(!empty($this->session->flashdata('msg')))
                        {
                        echo $this->session->flashdata('msg');
                        echo '<script> setTimeout(function(){window.location.href="'.base_url().'userset/project_details";}, 4000); </script>';
                        //redirect("applicant/project");
                        }
                        elseif(!empty($this->session->flashdata('err')))
                        {
                           echo $this->session->flashdata('err');
                        }
                        ?>
                     </div>
                  </div>                           
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php $this->load->view('/common/footer.php'); ?>

<script type="text/javascript">

   function next_button_industry(){
      $('.div_roller_total2').fadeIn();
      $('#add_industry, #next_btn').prop('disabled', true);
      var e_error = 0;
      var yesno = $('input[name="yesno"]:checked').val().trim();
      if (yesno == ""){
         e_error = 1;
      }

      if (e_error != 1) {
         var form_data = new FormData();
         form_data.append('yesno', yesno);
         $.ajax({
            method: 'POST',
            url: '<?php echo base_url() . "userset/next_button_industry"; ?>',
            data: form_data,
            dataType: 'JSON',
            contentType: false,
            processData: false,
            success: function(data) {
               if (data.msg == 1) {
                  $('.div_roller_total2').fadeOut();
                  $('.get_success_next').html('Existing Industry is Updated Successfully.');
                  $('.get_success_next').fadeIn();
                  setTimeout(function() {
                     $('.get_success_next').fadeOut();
                  }, 3000);
                  setTimeout(function() {
                     window.location.href="<?php echo base_url('userset/project_details'); ?>";
                  }, 3000);
               }else{
                  $('.div_roller_total2').fadeOut();
						$('.get_error_total2').html(data.e_msg);
						$(".get_error_total2").fadeIn();
						setTimeout(function(){ $('.get_error_total2').fadeOut(); }, 3000);
						$('#add_industry, #next_btn').prop('disabled', false);     
               }
            }
         });
      }else{
         $('.div_roller_total2').fadeOut();
         $('#add_industry, #next_btn').prop('disabled', false);
      }
   }
   
   function delete_industry(industry_id){
      var form_data = new FormData();
      form_data.append('industry_id', industry_id);
      $.ajax({
         method: 'POST',
         url: '<?php echo base_url() . "userset/delete_industry"; ?>',
         data: form_data,
         dataType: 'JSON',
         contentType: false,
         processData: false,
         success: function(data) {
            if (data.msg == 1) {
               var industry_id = data.industry_id;
               $('#industry_tr_'+industry_id).remove();
            }
         }
      });
   }
   
   function delete_all_industry(){
      var form_data = new FormData();
      form_data.append('delete', 1);
      $.ajax({
         method: 'POST',
         url: '<?php echo base_url() . "userset/delete_all_industry"; ?>',
         data: form_data,
         dataType: 'JSON',
         contentType: false,
         processData: false,
         success: function(data) {
            if (data.msg == 1) {
               $('#industry_name').val('');
               $('#industry_location').val('');
               //$('#industry_product').val('');
               $('#industry_Address').val('');
               $('#industry_Address2').val('');
               $('#industry_product').html(data.prod_option);
               $('#district_code').html(data.dist_option);
               $('#industry_sub_division').html('<option value="">---Select---</option>');
               $('#block_code').html('<option value="">---Select---</option>');
               $('#gram_panchayat').html('<option value="">---Select---</option>');
               $('#vilage_id').val('');
               $('#industry_Police_Station').val('');
               $('#industry_Pincode').val('');

               $('#tbody_id').html('');
            }
         }
      });
   }

   function add_industry()
   {
      $('#add_industry, #next_btn').prop('disabled', true);
      $('.div_roller_total').fadeIn();
      var e_error = 0;
      const delay = 5000;
      var error_message = 'There have some errors please check above, Try again.';
      const alphaletters_spaces = /^[A-Za-z ]+$/;
      const alphaletters = /^[A-Za-z]+$/;
      const alphanumerics = /^[A-Za-z0-9]+$/;
      const alphanumerics_spaces = /^[A-Za-z0-9_,\- ]+$/;
      const alphanumerics_no = /^[A-Za-z0-9_/&(@):.,%\- \n\r]+$/;
      const onlynumerics = /^[0-9]+$/;
      const onlynumerics_withdot = /^[0-9. ]+$/;
      const specials_char = /[~`!#$%\^&*+=\[\]\\';./{}()|\\":<>\?]/g;
      const emailpattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
      const allowedPic_Extensions = /(\.jpg|\.jpeg|\.png|\.JPG|\.JPEG|\.PNG)$/i;
      const allowedExtensions = /(\.pdf|\.PDF|\.jpg|\.jpeg|\.png|\.JPG|\.JPEG|\.PNG)$/i;

      var yesno = $('input[name="yesno"]:checked').val().trim();
      var industry_name = $('#industry_name').val().trim();
      var industry_location = $('#industry_location').val().trim();
      var industry_product = $('#industry_product option:selected').val().trim();
      var industry_Address = $('#industry_Address').val().trim();
      var industry_Address2 = $('#industry_Address2').val().trim();
      var district_code = $('#district_code option:selected').val().trim();
      var industry_sub_division = $('#industry_sub_division option:selected').val().trim();
      var block_code = $('#block_code option:selected').val().trim();
      var gram_panchayat = $('#gram_panchayat option:selected').val().trim();
      var vilage_id = $('#vilage_id').val().trim();
      var industry_Police_Station = $('#industry_Police_Station').val().trim();
      var industry_Pincode = $('#industry_Pincode').val().trim();

      if (yesno == ""){
         e_error = 1;
      }

      if (industry_name == "") {
         e_error = 1;
         $('.industry_name').html('Industry Name is Required.');
      } else {
         if (!industry_name.match(alphaletters_spaces)) {
            e_error = 1;
            $('.industry_name').html('Only alphabet can be used, Check again.');
         } else {
            $('.industry_name').html('');
         }
      }

      if (industry_location == "") {
         e_error = 1;
         $('.industry_location').html('Industry Location is Required.');
      } else {
         if (!industry_location.match(alphanumerics_no)) {
            e_error = 1;
            $('.industry_location').html('Illegal character(s) used, Check again.');
         } else {
            $('.industry_location').html('');
         }
      }

      if (industry_product == "") {
         e_error = 1;
         $('.industry_product').html('Product Name is Required.');
      } else {
         if (!industry_product.match(onlynumerics)) {
            e_error = 1;
            $('.industry_product').html('Product Name only Numeric, Check again.');
         } else {
            $('.industry_product').html('');
         }
      }

      if (industry_Address == "") {
         e_error = 1;
         $('.industry_Address').html('Address1 is Required.');
      } else {
         if (!industry_Address.match(alphanumerics_no)) {
            e_error = 1;
            $('.industry_Address').html('Illegal character(s) used, Check again.');
         } else {
            $('.industry_Address').html('');
         }
      }

      if (industry_Address2 == "") {
         e_error = 1;
         $('.industry_Address2').html('Address2 is Required.');
      } else {
         if (!industry_Address2.match(alphanumerics_no)) {
            e_error = 1;
            $('.industry_Address2').html('Illegal character(s) used, Check again.');
         } else {
            $('.industry_Address2').html('');
         }
      }

      if (district_code == "") {
         e_error = 1;
         $('.district_code').html('District is Required.');
      } else {
         if (!district_code.match(onlynumerics)) {
            e_error = 1;
            $('.district_code').html('Only numeric value, Check again.');
         } else {
            $('.district_code').html('');
         }
      }

      if (industry_sub_division == "") {
         e_error = 1;
         $('.industry_sub_division').html('Sub-Division is Required.');
      } else {
         if (!industry_sub_division.match(onlynumerics)) {
            e_error = 1;
            $('.industry_sub_division').html('Only numeric value, Check again.');
         } else {
            $('.industry_sub_division').html('');
         }
      }

      if (block_code == "") {
         e_error = 1;
         $('.block_code').html('Block is Required.');
      } else {
         if (!block_code.match(onlynumerics)) {
            e_error = 1;
            $('.block_code').html('Only numeric value, Check again.');
         } else {
            $('.block_code').html('');
         }
      }

      if (gram_panchayat == "") {
         e_error = 1;
         $('.gram_panchayat').html('Gram Panchayat is Required.');
      } else {
         if (!gram_panchayat.match(onlynumerics)) {
            e_error = 1;
            $('.gram_panchayat').html('Only numeric value, Check again.');
         } else {
            $('.gram_panchayat').html('');
         }
      }

      if (vilage_id == "") {
         e_error = 1;
         $('.vilage_id').html('Village Name is Required.');
      } else {
         if (!vilage_id.match(alphanumerics_no)) {
            e_error = 1;
            $('.vilage_id').html('Illegal character(s) used, Check again.');
         } else {
            $('.vilage_id').html('');
         }
      }

      if (industry_Police_Station == "") {
         e_error = 1;
         $('.industry_Police_Station').html('Police Station is Required.');
      } else {
         if (!industry_Police_Station.match(alphanumerics_no)) {
            e_error = 1;
            $('.industry_Police_Station').html('Illegal character(s) used, Check again.');
         } else {
            $('.industry_Police_Station').html('');
         }
      }

      if (industry_Pincode == "") {
         e_error = 1;
         $('.industry_Pincode').html('Pincode is Required.');
      } else {
         if (!industry_Pincode.match(onlynumerics)) {
            e_error = 1;
            $('.industry_Pincode').html('Only numeric value, Check again.');
         } 
         else if(industry_Pincode.length != 6){
            e_error = 1;
            $('.industry_Pincode').html('Pincode should be six digit, Check again.');
         }
         else {
            $('.industry_Pincode').html('');
         }
      }


      if (e_error == 1) {
         $('.get_error_total').html(error_message);
         if(error_message != ""){
            $(".get_error_total").fadeIn();
         }
         $('.div_roller_total').fadeOut();
         $(".text-error").fadeIn();
         $('#add_industry, #next_btn').prop("disabled",false);
         e_error = 0;
         error_message = '';
         setTimeout(function() {
            $('.text-error, .get_error_total').fadeOut();
            // $('.get_error_total').html('');  
         }, delay);
      } 
      else {
         var form_data = new FormData();
         form_data.append('yesno', yesno);
         form_data.append('industry_name', industry_name);
         form_data.append('industry_location', industry_location);
         form_data.append('industry_product', industry_product);
         form_data.append('industry_Address', industry_Address);
         form_data.append('industry_Address2', industry_Address2);
         form_data.append('district_code', district_code);
         form_data.append('industry_sub_division', industry_sub_division);
         form_data.append('block_code', block_code);
         form_data.append('gram_panchayat', gram_panchayat);
         form_data.append('vilage_id', vilage_id);
         form_data.append('industry_Police_Station', industry_Police_Station);
         form_data.append('industry_Pincode', industry_Pincode);

         $.ajax({
            method: 'POST',
            url: '<?php echo base_url() . "userset/ajax_add_industry"; ?>',
            data: form_data,
            dataType: 'JSON',
            contentType: false,
            processData: false,
            success: function(data) {
               if (data.msg == 1) {
                  $('.div_roller_total').fadeOut();
                  $('.get_success_total').html('Industry is added Successfully.');
                  $('.get_success_total').fadeIn();

                  $('#industry_name').val('');
                  $('#industry_location').val('');
                  //$('#industry_product').val('');
                  $('#industry_Address').val('');
                  $('#industry_Address2').val('');
                  $('#industry_product').html(data.prod_option);
                  $('#district_code').html(data.dist_option);
                  $('#industry_sub_division').html('<option value="">---Select---</option>');
                  $('#block_code').html('<option value="">---Select---</option>');
                  $('#gram_panchayat').html('<option value="">---Select---</option>');
                  $('#vilage_id').val('');
                  $('#industry_Police_Station').val('');
                  $('#industry_Pincode').val('');
                  $('#tbody_id').append(data.table_row);

                  setTimeout(function() {
                     $('.get_success_total').fadeOut();
                     $('#add_industry, #next_btn').prop("disabled",false);
                  }, 3000);

               } else {
                  $('.div_roller_total').fadeOut();
                  // error_message = "There have some problem to Update Data, Try again.";
                  error_message = data.e_msg;
                  $('.get_error_total').html(error_message);
                  $(".get_error_total").fadeIn();
                  setTimeout(function() {
                     $('.get_error_total').fadeOut();
                     $('#add_industry, #next_btn').prop("disabled",false);
                  }, delay);
               }

            }
         });
      }
   }

   function lfn_SetSubDivision(district_code, Sub_Division, Block, gram_panchayat)
   {
      var form_data = new FormData();
      form_data.append('district_code', district_code);
      $.ajax({
         method: 'POST',
         url: '<?php echo base_url() . "userset/ajax_get_subdivision"; ?>',
         data: form_data,
         dataType: 'JSON',
         contentType: false,
         processData: false,
         success: function(data) {
            if (data.msg == 1)
            {
               if (data.flag == 1)
               {
                  $('#'+Sub_Division).html(data.option);
                  $('#'+Block).html('<option value="">--Select Block / Municipality--</option>');
                  $('#'+gram_panchayat).html('<option value="">--Select Gram Panchayat--</option>');
               }

               if (data.flag == 2)
               {
                  var id_arr = data.id_arr;
                  var option_arr = data.option_arr;
                  for (let i = 0; i < id_arr.length; i++) {
                     var id = id_arr[i]; 
                     var option = option_arr[i];
                     $('#'+Sub_Division+id).html(option);
                  }
               }
               
            }
         }
      });
   }

   function lfn_SetBlock(Sub_Division, Block, gram_panchayat)
   {
      var form_data = new FormData();
      form_data.append('Sub_Division', Sub_Division);
      $.ajax({
         method: 'POST',
         url: '<?php echo base_url() . "userset/ajax_get_block"; ?>',
         data: form_data,
         dataType: 'JSON',
         contentType: false,
         processData: false,
         success: function(data) {
            if (data.msg == 1)
            {
               if (data.flag == 1)
               {
                  $('#'+Block).html(data.option);
                  $('#'+gram_panchayat).html('<option value="">--Select Gram Panchayat--</option>');
               }

               if (data.flag == 2)
               {
                  var id_arr = data.id_arr;
                  var option_arr = data.option_arr;
                  for (let i = 0; i < id_arr.length; i++) {
                     var id = id_arr[i]; 
                     var option = option_arr[i];
                     $('#'+Block+id).html(option);
                  }
               }
            }
         }
      });
   }

   function lfn_SetGP(Block,gram_panchayat)
   {
      var form_data = new FormData();
      form_data.append('block_id', Block);
      $.ajax({
         method: 'POST',
         url: '<?php echo base_url() . "userset/ajax_get_gp"; ?>',
         data: form_data,
         dataType: 'JSON',
         contentType: false,
         processData: false,
         success: function(data) {
            if (data.msg == 1)
            {
               if (data.flag == 1)
               {
                  $('#'+gram_panchayat).html(data.option);
               }

               if (data.flag == 2)
               {
                  var id_arr = data.id_arr;
                  var option_arr = data.option_arr;
                  for (let i = 0; i < id_arr.length; i++) {
                     var id = id_arr[i]; 
                     var option = option_arr[i];
                     $('#'+gram_panchayat+id).html(option);
                  }
               }
            }
         }
      });
   }

   $(document).ready(function () {
         // alert("hi");
      $("#addFrm input[name='Pincode']").keydown(function (event) {
      //alert(event.keyCode);
      var pincode = $("#addFrm input[name='Pincode']").val();
         // Allow only backspace and delete
         if (event.keyCode == 46 || event.keyCode == 8  || event.keyCode==116  || event.keyCode==9 || event.keyCode==37 || event.keyCode==39 || event.keyCode==17 || event.keyCode==86) {
            // let it happen, don't do anything
         }
         else {
            // Ensure that it is a number and stop the keypress
            if ((event.keyCode > 47 && event.keyCode < 58 ) || (event.keyCode > 94 && event.keyCode < 106 )) {
               $('.text-error').hide();
            }else{
               
               if(pincode.length!=6)
               {
               $('.Pincode').show().html('Only numbers');
               setTimeout(function(){$('.Pincode').hide()}, 1000);
               }
               event.preventDefault();
            }
         }
      });

      $("#addFrm input[name='industry_Pincode']").keydown(function (event) {
      //alert(event.keyCode);
      var industry_Pincode = $("#addFrm input[name='industry_Pincode']").val();
         // Allow only backspace and delete
         if (event.keyCode == 46 || event.keyCode == 8  || event.keyCode==116  || event.keyCode==9 || event.keyCode==37 || event.keyCode==39  ) {
            // let it happen, don't do anything
         }
         else {
            // Ensure that it is a number and stop the keypress
            if ((event.keyCode > 47 && event.keyCode < 58 ) || (event.keyCode > 94 && event.keyCode < 106 )) {
               $('.text-error').hide();
            }else{
               if(industry_Pincode.length!=12)
               {
               $('.industry_Pincode').show().html('Only numbers');
               setTimeout(function(){$('.industry_Pincode').hide()}, 1000);
               }
               event.preventDefault();
            }
         }
      });

   });



   function lfn_NumOnly(event) 
   {
      // alert(event.keyCode);
      var charCode = event.keyCode;

      if ((charCode >= 48 && charCode <= 57))
      {
         return true;
      }
      else
      {
         return false;
      }
   }

   function lfn_CharOnly(event) 
   {
      //alert(event.keyCode);
      var charCode = event.keyCode;

      if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || charCode == 8  || charCode == 32)

            return true;
      else
            return false;
   }

   function lfn_AlphaNumericOnly(event) 
   {
      //alert(event.keyCode);
      var charCode = event.keyCode;

      if ((charCode > 64 && charCode < 91) || (charCode > 47 && charCode < 58) || (charCode > 96 && charCode < 123) || charCode == 8  || charCode == 32)

            return true;
      else
            return false;
   }

</script>

      


      
