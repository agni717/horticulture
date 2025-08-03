<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Food Processing Incentive Scheme</title>
      <!-- base:css -->
      <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/typicons/typicons.css">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <!-- <link rel="stylesheet" href="vendors/css/bootstrap.min.css"> -->
	  <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/css/vendor.bundle.base.css">  
	  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/vertical-layout-light/style.css">
	  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/vertical-layout-light/responsive.css">
      <link rel="stylesheet" href="<?php echo base_url();?>assets/css/vertical-layout-light/dataTables.bootstrap4.min.css">
	  <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.png" />
      <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.png" />
   </head>
<body>
   <header>
      <?php 
  		$user_type_id=$this->session->userdata['utype'];
       if($user_type_id==2){
      ?>
      <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
         <div class="navbar-brand-wrapper d-flex justify-content-center">
            <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
               <a class="" href="<?php echo base_url('admin_access');?>"><img src="<?php echo base_url();?>assets/images/logo.png" alt="logo"/></a>
            </div>
         </div>
         <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
            <ul class="navbar-nav mr-lg-2">
               <li class="nav-item nav-profile">
                  <a class="nav-link" href="<?php echo base_url('admin_access');?>" data-toggle="dropdown" id="profileDropdown">
                  <span class="nav-profile-name">West Bengal State Food Processing Incentive Scheme </span>
                  </a>
               </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">  
               <li class="nav-item nav-date">
                  <a class="nav-link d-flex justify-content-center align-items-center" href="#">
                     <h6 class="date mb-0"> <?php if(isset($admin_uname)){ echo $admin_uname;} ?> </h6><br>
                     <i class="fa fa-user" aria-hidden="true"></i>
                  </a>
               </li>            
               <li class="nav-item nav-date">
                  <a class="nav-link d-flex justify-content-center align-items-center" href="<?php echo base_url('admin_access/logout');?>">
                     <h6 class="date mb-0">Sign Out</h6>
                     <i class="fa fa-sign-out" aria-hidden="true"></i>
                  </a>
               </li>
            </ul>
         </div>
      </nav>
        </nav>
       <nav class="navbar-breadcrumb col-xl-12 col-12 d-flex flex-row p-0">
         <ul class="nav">
            <li class="nav-item">
               <a href="<?php echo base_url('admin_access');?>"  class="nav-link">
               <i class="fa fa-home" aria-hidden="true"></i>
               <span class="menu-title">Home</span>
               </a>
            </li>
            <!-- <li class="nav-item">
               <a href="<?php //echo base_url('district/dist_application_list') ?>"class="nav-link">
               <i class="fa fa-file-text-o" aria-hidden="true"></i>
               <span class="menu-title">Pending List</span>
               </a>
            </li> -->
            <!--<li class="nav-item">
               <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
               <i class="typcn typcn-film menu-icon"></i>
               <span class="menu-title">Pending List</span>
               <i class="menu-arrow"></i>
               </a>
               <div class="collapse" id="form-elements">
                  <ul class="nav flex-column sub-menu">
                     <li class="nav-item"><a class="nav-link" href="<?php //echo base_url('district/dist_application_list');?>">New Application</a></li>
                     <li class="nav-item"><a class="nav-link" href="<?php //echo base_url('district/dist_approved_application_list/');?>">Approved By District</a></li>
                     <li class="nav-item"><a class="nav-link" href="<?php //echo base_url('district/dist_rejected_application_list/');?>">Rejected By District</a></li>
                     <li class="nav-item"><a class="nav-link" href="<?php //echo base_url('district/dist_total_application_return_from_hq_list/');?>">Return From HQ</a></li>
                     <li class="nav-item"><a class="nav-link" href="<?php //echo base_url('district/dist_total_application_reject_from_hq_list/');?>">Rejected By HQ</a></li>
                     <li class="nav-item"><a class="nav-link" href="<?php //echo base_url('district/dist_total_application_approved_by_hq_list/');?>">Approved By HQ</a></li>

                     <li class="nav-item"><a class="nav-link" href="<?php //echo base_url('district/dist_1st_installment_request_by_applicant/');?>">1st Installment Request</a></li>
                     <li class="nav-item"><a class="nav-link" href="<?php //echo base_url('district/dist_second_installment_request_by_applicant/');?>">2nd Installment Request</a></li>
                  </ul>
               </div>
            </li>-->
            <!-- <li class="nav-item">
               <a href="<?php //echo base_url('district/dist_approved_application_list') ?>"class="nav-link">
               <i class="fa fa-file-text-o" aria-hidden="true"></i>
               <span class="menu-title">Approved List</span>
               </a>
            </li>
            <li class="nav-item">
               <a href="<?php //echo base_url('district/dist_reverted_application_list') ?>"class="nav-link">
               <i class="fa fa-file-text-o" aria-hidden="true"></i>
               <span class="menu-title">Reverted List</span>
               </a>
            </li>
            <li class="nav-item">
               <a href="<?php //echo base_url('district/dist_rejected_application_list') ?>"class="nav-link">
               <i class="fa fa-file-text-o" aria-hidden="true"></i>
               <span class="menu-title">Rejected List</span>
               </a>
            </li> -->
            <!--<li class="nav-item">
               <a href="<?php //echo base_url('admin/district_dashboard/active_scheme') ?>" class="nav-link">
               <i class="fa fa-file-text-o" aria-hidden="true"></i>
               <span class="menu-title">Active Scheme List</span>
               </a>
            </li>-->
            <li class="nav-item">
               <a href="<?php echo base_url('admin/district_dashboard') ?>" class="nav-link">
               <i class="fa fa-file-text-o" aria-hidden="true"></i>
               <span class="menu-title">Application List</span>
               </a>
            </li>
            <!--<li class="nav-item">
               <a href="<?php //echo base_url('district/archive_scheme');?>" class="nav-link">
               <i class="fa fa-file-text-o" aria-hidden="true"></i>
               <span class="menu-title">Archived Scheme List</span>
               </a>
            </li>-->
            <!-- <li class="nav-item">
               <a href="dist_archive_scheme_list.php" class="nav-link">
               <i class="fa fa-file-text-o" aria-hidden="true"></i>
               <span class="menu-title">Archive Scheme List</span>
               </a>
            </li> --> <!-- commented on 23-Mar-2023 -->


            <!--  <li class="nav-item">
               <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                  <i class="typcn typcn-th-small-outline menu-icon"></i>
                 <span class="menu-title">Projects</span>
                 <i class="menu-arrow"></i>
               </a>
               <div class="collapse" id="charts">
                 <ul class="nav flex-column sub-menu">
                   <li class="nav-item"> <a class="nav-link" href="#">New Application</a></li>
                   <li class="nav-item"> <a class="nav-link" href="#">Approved by District</a></li>
                   <li class="nav-item"> <a class="nav-link" href="#">Approved by Head Quater</a></li>
                   <li class="nav-item"> <a class="nav-link" href="#">Disapproved by District</a></li>
                   <li class="nav-item"> <a class="nav-link" href="#">Disapproved by Head Quater</a></li>
                 </ul>
               </div>
            </li> -->
         </ul>
      </nav>
     
      <?php 
      }
      if($user_type_id==1)
      {
		  //print_r($this->session->userdata);
      ?>
       <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
         <div class="navbar-brand-wrapper d-flex justify-content-center">
            <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
               <a class="" href="<?php echo base_url('admin_access');?>"><img src="<?php echo base_url();?>assets/images/logo.png" alt="logo"/></a>
            </div>
         </div>
         <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
            <ul class="navbar-nav mr-lg-2">
               <li class="nav-item nav-profile">
                  <a class="nav-link" href="<?php echo base_url('admin_access');?>" data-toggle="dropdown" id="profileDropdown">
                  <span class="nav-profile-name">West Bengal State Food Processing Incentive Scheme </span>
                  </a>
               </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">  
               <li class="nav-item nav-date">
                  <a class="nav-link d-flex justify-content-center align-items-center" href="#">
                     <h6 class="date mb-0"> <?php if(isset($admin_uname)){ echo $admin_uname;} ?> </h6>
                     <i class="fa fa-user" aria-hidden="true"></i>
                  </a>
               </li>            
               <li class="nav-item nav-date">
                  <a class="nav-link d-flex justify-content-center align-items-center" href="<?php echo base_url('admin_access/logout');?>">
                     <h6 class="date mb-0">Sign Out</h6>
                     <i class="fa fa-sign-out" aria-hidden="true"></i>
                  </a>
               </li>
            </ul>
         </div>
      </nav>

      <nav class="navbar-breadcrumb col-xl-12 col-12 d-flex flex-row p-0">
         <ul class="nav">
            <li class="nav-item">
               <a href="<?php echo base_url('admin_access');?>" class="nav-link">
                  <i class="fa fa-home" aria-hidden="true"></i>
                  <span class="menu-title">Home</span>
               </a>
            </li>
            <li class="nav-item">
               <a href="<?php echo base_url('admin/hq_dashboard');?>" class="nav-link">
               <i class="fa fa-file-text-o" aria-hidden="true"></i>
               <span class="menu-title">Application List</span>
               </a>
            </li>            
            <!-- <li class="nav-item">
               <a href="hq_application_list.php"class="nav-link">
               <i class="fa fa-file-text-o" aria-hidden="true"></i>
               <span class="menu-title">Application List</span>
               </a>
            </li> -->
            <li class="nav-item">
               <a href="<?php echo base_url('admin/headquater/scheme');?>" class="nav-link">
               <i class="fa fa-file-text-o" aria-hidden="true"></i>
               <span class="menu-title">Add Scheme</span>
               </a>
            </li>
            <li class="nav-item">
               <a href="<?php echo base_url('admin/headquater/scheme_list');?>" class="nav-link">
               <i class="fa fa-file-text-o" aria-hidden="true"></i>
               <span class="menu-title">Scheme List</span>
               </a>
            </li>
			<li class="nav-item">
               <a href="<?php echo base_url('admin/headquater/product_list');?>" class="nav-link">
               <i class="fa fa-file-text-o" aria-hidden="true"></i>
               <span class="menu-title">Product List</span>
               </a>
            </li>
            <li class="nav-item">
               <a href="<?php echo base_url('admin/headquater/user_creation');?>" class="nav-link">
               <i class="fa fa-file-text-o" aria-hidden="true"></i>
               <span class="menu-title">Add District Admin</span>
               </a>
            </li>
            <li class="nav-item">
               <a href="<?php echo base_url('admin/headquater/user_list');?>" class="nav-link">
               <i class="fa fa-file-text-o" aria-hidden="true"></i>
               <span class="menu-title">District Admin List</span>
               </a>
            </li>
            <!--<li class="nav-item">
               <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
               <i class="typcn typcn-film menu-icon"></i>
               <span class="menu-title">pending list</span>
               <i class="menu-arrow"></i>
               </a>
               <div class="collapse" id="form-elements">
                  <ul class="nav flex-column sub-menu">
                     <li class="nav-item"><a class="nav-link" href="<?php //echo base_url('headquater/approved_by_dist');?>">Approved by District</a></li>
                     <li class="nav-item"><a class="nav-link" href="<?php //echo base_url('headquater/reject_by_dist');?>">Reject by District</a></li>

                     <li class="nav-item"><a class="nav-link" href="<?php //echo base_url('headquater/first_installment_request_approved_by_dist');?>">First Installment Approved by District</a></li>
                     <li class="nav-item"><a class="nav-link" href="<?php //echo base_url('headquater/second_installment_request_approved_by_dist');?>">Secondt Installment Approved by District</a></li>
                  </ul>
               </div>
            </li>-->
            <!--<li class="nav-item">
               <a href="<?php //echo base_url('admin/hq_dashboard/active_scheme');?>" class="nav-link">
               <i class="fa fa-file-text-o" aria-hidden="true"></i>
               <span class="menu-title">Active Scheme List</span>
               </a>
            </li>-->
            
            <!--<li class="nav-item">
               <a href="<?php //echo base_url('admin/headquater/archive_scheme');?>" class="nav-link">
               <i class="fa fa-file-text-o" aria-hidden="true"></i>
               <span class="menu-title">Archived Scheme List</span>
               </a>
            </li> 
            <li class="nav-item">
               <a href="<?php //echo base_url('admin/headquater/hq_approved_application_list');?>" class="nav-link">
               <i class="fa fa-list" aria-hidden="true"></i>
               <span class="menu-title">Approved Application List</span>
               </a>
            </li>
            <li class="nav-item">
               <a href="<?php //echo base_url('admin/headquater/hq_approved_sanction_list');?>" class="nav-link">
               <i class="fa fa-list" aria-hidden="true"></i>
               <span class="menu-title">Approved Sanction List</span>
               </a>
            </li> -->          
            <!--  <li class="nav-item">
               <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                  <i class="typcn typcn-th-small-outline menu-icon"></i>
                 <span class="menu-title">Projects</span>
                 <i class="menu-arrow"></i>
               </a>
               <div class="collapse" id="charts">
                 <ul class="nav flex-column sub-menu">
                   <li class="nav-item"> <a class="nav-link" href="#">New Application</a></li>
                   <li class="nav-item"> <a class="nav-link" href="#">Approved by District</a></li>
                   <li class="nav-item"> <a class="nav-link" href="#">Approved by Head Quater</a></li>
                   <li class="nav-item"> <a class="nav-link" href="#">Disapproved by District</a></li>
                   <li class="nav-item"> <a class="nav-link" href="#">Disapproved by Head Quater</a></li>
                 </ul>
               </div>
               </li> -->
         </ul>
      </nav>
      <?php } 
      if($user_type_id==3)
      {
       ?>
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
         <div class="navbar-brand-wrapper d-flex justify-content-center">
            <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
               <a class="" href="<?php echo base_url('admin_access');?>"><img src="<?php echo base_url();?>assets/images/logo.png" alt="logo"/></a>
            </div>
         </div>
         <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
            <ul class="navbar-nav mr-lg-2">
               <li class="nav-item nav-profile dropdown">
                  <a class="nav-link" href="<?php echo base_url('admin_access');?>" data-toggle="dropdown" id="profileDropdown">
                  <span class="nav-profile-name">West Bengal State Food Processing Incentive Scheme </span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                  </div>
               </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
               <li class="nav-item nav-date dropdown">
                  <a class="nav-link d-flex justify-content-center align-items-center" href="#">
                     <h6 class="date mb-0"><?php  //echo $this->session->userdata('user_name');  ?></h6>
                     <i class="fa fa-user" aria-hidden="true"></i>
                  </a>
               </li>
               <li class="nav-item nav-date dropdown">
                  <a class="nav-link d-flex justify-content-center align-items-center" href="<?php echo base_url('admin_access/logout');?>">
                     <h6 class="date mb-0">Sign Out</h6>
                     <i class="fa fa-sign-out" aria-hidden="true"></i></a>
               </li>
            </ul>
         </div>
      </nav>
      <nav class="navbar-breadcrumb col-xl-12 col-12 d-flex flex-row p-0">
         <ul class="nav">
            <li class="nav-item">
               <a href="<?php echo base_url('admin_access');?>"  class="nav-link">
                  <i class="fa fa-home" aria-hidden="true"></i>
                  <span class="menu-title">Home</span>
               </a>
            </li>
            <!--<li class="nav-item">
               <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
               <i class="typcn typcn-film menu-icon"></i>
               <span class="menu-title">User Creation</span>
               <i class="menu-arrow"></i>
               </a>
               <div class="collapse" id="form-elements">
                  <ul class="nav flex-column sub-menu">
                     <li class="nav-item"><a class="nav-link" href="<?php //echo base_url('user/user');?>">User create</a></li>
                     <li class="nav-item"><a class="nav-link" href="<?php //echo base_url();?>User_list">List of User</a></li>
                  </ul>
               </div>
            </li>-->
            <!-- <li class="nav-item">
               <a href="superuser_application_list.php"class="nav-link">
               <i class="fa fa-file-text-o" aria-hidden="true"></i>
               <span class="menu-title">Application List</span>
               </a>
            </li> -->
            <li class="nav-item">
               <a href="<?php echo base_url('admin/superuser/active_scheme');?>" class="nav-link">
               <i class="fa fa-file-text-o" aria-hidden="true"></i>
               <span class="menu-title">Active Scheme List</span>
               </a>
            </li>
            <li class="nav-item">
               <a href="superuser_archive_scheme_list.php" class="nav-link">
               <i class="fa fa-file-text-o" aria-hidden="true"></i>
               <span class="menu-title">Archived Scheme List</span>
               </a>
            </li>
            <!--  <li class="nav-item">
               <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                  <i class="typcn typcn-th-small-outline menu-icon"></i>
                 <span class="menu-title">Projects</span>
                 <i class="menu-arrow"></i>
               </a>
               <div class="collapse" id="charts">
                 <ul class="nav flex-column sub-menu">
                   <li class="nav-item"> <a class="nav-link" href="#">New Application</a></li>
                   <li class="nav-item"> <a class="nav-link" href="#">Approved by District</a></li>
                   <li class="nav-item"> <a class="nav-link" href="#">Approved by Head Quater</a></li>
                   <li class="nav-item"> <a class="nav-link" href="#">Disapproved by District</a></li>
                   <li class="nav-item"> <a class="nav-link" href="#">Disapproved by Head Quater</a></li>
                 </ul>
               </div>
               </li> -->
         </ul>
      </nav>
   </header>
   <?php } ?>
