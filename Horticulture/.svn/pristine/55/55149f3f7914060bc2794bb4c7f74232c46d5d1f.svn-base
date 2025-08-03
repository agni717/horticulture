<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Food Processing Incentive Scheme</title>
      <!-- base:css -->
      <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/typicons/typicons.css">
      <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- <link rel="stylesheet" href="css/vertical-layout-light/font-awesome.min.css"> -->
      <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/css/vendor.bundle.base.css">
      <link rel="stylesheet" href="<?php echo base_url();?>assets/css/vertical-layout-light/style.css">
      <link rel="stylesheet" href="<?php echo base_url();?>assets/css/vertical-layout-light/responsive.css">
      <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.png" />
   </head>
<body>
   <header>
      <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
         <div class="navbar-brand-wrapper d-flex justify-content-center">
            <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
               <a class="" href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/images/logo.png" alt="logo"/></a>
            </div>
         </div>
         <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
            <ul class="navbar-nav mr-lg-2">
               <li class="nav-item nav-profile dropdown">
                  <a class="nav-link" href="#" data-toggle="dropdown" id="profileDropdown">
                  <span class="nav-profile-name">West Bengal State Food Processing Incentive Scheme </span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                  </div>
               </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
               <li class="nav-item nav-date dropdown">
                  <a class="nav-link d-flex justify-content-center align-items-center" href="#">
                     <h6 class="date mb-0"><?php  echo $this->session->userdata('user_name');  ?></h6>
                     <i class="fa fa-user" aria-hidden="true"></i>
                  </a>
               </li>
               <li class="nav-item nav-date dropdown">
                  <a class="nav-link d-flex justify-content-center align-items-center" href="<?php echo base_url('superuser/logout');?>" onsubmit="return(validate());">
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
               <a href="<?php echo base_url('uperuser/dashboard');?>"  class="nav-link">
                  <i class="fa fa-home" aria-hidden="true"></i>
                  <span class="menu-title">Home</span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
               <i class="typcn typcn-film menu-icon"></i>
               <span class="menu-title">User Creation</span>
               <i class="menu-arrow"></i>
               </a>
               <div class="collapse" id="form-elements">
                  <ul class="nav flex-column sub-menu">
                     <li class="nav-item"><a class="nav-link" href="<?php echo base_url('user/user');?>">User create</a></li>
                     <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>User_list">List of User</a></li>
                  </ul>
               </div>
            </li>
            <!-- <li class="nav-item">
               <a href="superuser_application_list.php"class="nav-link">
               <i class="fa fa-file-text-o" aria-hidden="true"></i>
               <span class="menu-title">Application List</span>
               </a>
            </li> -->
            <li class="nav-item">
               <a href="<?php echo base_url();?>index.php/Superuser/Active_scheme" class="nav-link">
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
      <script type="text/javascript">
function validate()
{
     var r=confirm("Do you want to update this?")
    if (r==true)
      return true;
    else
      return false;
}
</script>
   </header>