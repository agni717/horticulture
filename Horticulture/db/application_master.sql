-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2023 at 02:35 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `horticulture_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `application_master`
--

CREATE TABLE `application_master` (
  `application_id` int(10) NOT NULL,
  `application_no` varchar(30) DEFAULT NULL,
  `scheme_id` int(5) NOT NULL,
  `user_id` int(10) NOT NULL,
  `proj_exist_industry` varchar(10) DEFAULT NULL,
  `proj_exist_industry_no` int(3) NOT NULL DEFAULT 0,
  `proj_step1_submit` tinyint(2) NOT NULL DEFAULT 0,
  `proj_step1_datetime` datetime DEFAULT NULL,
  `proj_name` varchar(150) DEFAULT NULL,
  `proj_prod_manufacture` varchar(150) DEFAULT NULL,
  `proj_add1` varchar(255) DEFAULT NULL,
  `proj_add2` varchar(255) DEFAULT NULL,
  `proj_district` int(5) DEFAULT NULL,
  `proj_sub_division` int(5) DEFAULT NULL,
  `proj_block` int(5) DEFAULT NULL,
  `proj_gram_panchayat` int(5) DEFAULT NULL,
  `proj_village` varchar(150) DEFAULT NULL,
  `proj_police_station` varchar(50) DEFAULT NULL,
  `proj_pincode` varchar(10) DEFAULT NULL,
  `proj_daag_no` varchar(50) DEFAULT NULL,
  `proj_khatian_no` varchar(50) DEFAULT NULL,
  `proj_mouza_no` varchar(50) DEFAULT NULL,
  `proj_jl_no` varchar(50) DEFAULT NULL,
  `proj_land_type` varchar(50) DEFAULT NULL,
  `proj_land_document` varchar(250) DEFAULT NULL,
  `proj_current_status` varchar(50) DEFAULT NULL,
  `proj_proposed_pro_date` date DEFAULT NULL,
  `proj_technology` varchar(50) DEFAULT NULL,
  `proj_plant_capacity` varchar(50) DEFAULT NULL,
  `proj_present_capacity` varchar(50) DEFAULT NULL,
  `proj_present_unit` varchar(20) DEFAULT NULL,
  `proj_proposed_capacity` varchar(50) DEFAULT NULL,
  `proj_proposed_unit` varchar(20) DEFAULT NULL,
  `proj_bank_name` varchar(50) DEFAULT NULL,
  `proj_branch` varchar(50) DEFAULT NULL,
  `proj_ifsc` varchar(50) DEFAULT NULL,
  `proj_acc_no` varchar(30) DEFAULT NULL,
  `proj_pan_no` varchar(20) DEFAULT NULL,
  `proj_term_loan_sac_yesno` varchar(10) DEFAULT NULL,
  `proj_document` varchar(255) DEFAULT NULL,
  `proj_tl_cost` float(10,2) DEFAULT NULL,
  `proj_step2_submit` tinyint(2) NOT NULL DEFAULT 0,
  `proj_step2_datetime` datetime DEFAULT NULL,
  `proj_land_building_cost` varchar(30) DEFAULT NULL,
  `proj_plant_machinary_cost` varchar(30) DEFAULT NULL,
  `proj_misc_fixed_assets` varchar(30) DEFAULT NULL,
  `proj_contingencies_etc` varchar(30) DEFAULT NULL,
  `proj_others` varchar(30) DEFAULT NULL,
  `proj_preli_preopearative_expenses` varchar(30) DEFAULT NULL,
  `proj_working_capital_margin` varchar(30) DEFAULT NULL,
  `proj_total_project_cost` varchar(30) DEFAULT NULL,
  `proj_promoter_contribution` varchar(30) DEFAULT NULL,
  `proj_finance_others` varchar(30) DEFAULT NULL,
  `proj_term_loan_from_bank` varchar(30) DEFAULT NULL,
  `proj_total_means_of_finance` varchar(30) DEFAULT NULL,
  `proj_working_capital` varchar(30) DEFAULT NULL,
  `proj_subsity_claimed` varchar(30) DEFAULT NULL,
  `proj_indirect_male` varchar(30) DEFAULT NULL,
  `proj_indirect_female` varchar(30) DEFAULT NULL,
  `proj_direct_male` varchar(30) DEFAULT NULL,
  `proj_direct_female` varchar(30) DEFAULT NULL,
  `proj_step3_submit` tinyint(2) NOT NULL DEFAULT 0,
  `proj_step3_datetime` datetime DEFAULT NULL,
  `proj_step4_submit` tinyint(2) NOT NULL DEFAULT 0,
  `proj_step4_datetime` datetime DEFAULT NULL,
  `proj_final_status` tinyint(3) NOT NULL DEFAULT 0 COMMENT '0=Just Enter, 1=Step 1 save, 2= Step 1 Submit, 3=Step 2 Save, 4=Step 2 Submit,5=Step 3 Save,6=Step 3 Submit,7=Step 4 Save, 8=Step 4 Submit,9=District Approved, 10=District Rejected, 11=District Revert, 12=HQ Approved, 13=HQ Rejected, 14=HQ Revert, 15= Sanction Letter Generated, 16= 1st Installment Initiated, 17=1st Installment Approve by District, 18 = 1st Installment Reject by District, 19 = 1st Installment Revert by District, 20 =  2nd Installment Initiated, 21 = 2nd Installment Approve by District, 22 = 2nd Installment Reject by District, 23 = 2nd Installment Revert by District, 24 = 1st Installment Approved by HQ, 25 = 1st Installment Rejected by HQ, 26 = 1st Installment Reverted by HQ, 27 = 2nd Installment Approved by HQ, 28 = 2nd Installment Rejected by HQ, 29 = 2nd Installment Reverted by HQ',
  `is_applicant_submitted` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=saved,2=submitted',
  `is_district_app_reject_revert` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=pending,1=approved,2=reject,3=revert',
  `dist_approval_amount` float(10,2) DEFAULT NULL,
  `dist_remarks` varchar(300) DEFAULT NULL,
  `is_hq_app_reject_revert` tinyint(4) NOT NULL COMMENT '0=pending,1=approved,2=reject,3=revert',
  `hq_approval_amount` float(10,2) DEFAULT NULL,
  `hq_remarks` varchar(300) DEFAULT NULL,
  `is_first_sanction` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0=Not sanction,1-sanction',
  `sanction_letter` varchar(255) DEFAULT NULL,
  `sanction_remarks` varchar(255) DEFAULT NULL,
  `bond` varchar(255) DEFAULT NULL,
  `bank_cerificate` varchar(255) DEFAULT NULL,
  `ca_certificate` varchar(250) DEFAULT NULL,
  `apply_for_1st_installment_release` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=pending,1=Submitteded ',
  `is_project_cost_updated_dist` tinyint(1) NOT NULL DEFAULT 0,
  `update_project_cost_by_dist` float(10,2) DEFAULT NULL,
  `is_dist_approve_1st_installment_release` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0=Pending,1=Approved,2=Reject,3=Revert',
  `is_dist_approve_2nd_installment_release` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=pending,1=Approve,2=Reject,3=Revert',
  `is_dist_approve_1st_installment_remarks` varchar(255) DEFAULT NULL,
  `is_dist_approve_2nd_installment_remarks` varchar(255) DEFAULT NULL,
  `is_dist_approve_1st_installment_datetime` datetime DEFAULT NULL,
  `is_dist_approve_2nd_installment_datetime` datetime DEFAULT NULL,
  `first_installment_released_by_HQ` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=pending,1=Approve,2=Reject,3=Revert',
  `first_release_hq_remarks` varchar(255) DEFAULT NULL,
  `hq_project_amount` float(10,2) DEFAULT NULL,
  `first_release_tv_no` varchar(30) DEFAULT NULL,
  `first_release_token_no` varchar(20) DEFAULT NULL,
  `first_release_token_date` date DEFAULT NULL,
  `first_release_rbi_transaction` varchar(30) DEFAULT NULL,
  `first_release_rbi_trans_date` date DEFAULT NULL,
  `government_order_letter` varchar(255) DEFAULT NULL,
  `uc` varchar(255) DEFAULT NULL,
  `charter_engineer_certificate` varchar(255) DEFAULT NULL,
  `scnd_installment_bank_certificate` varchar(255) DEFAULT NULL,
  `scnd_installment_ca_certificate` varchar(255) DEFAULT NULL,
  `apply_for_second_installment` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=pending,1=submitted',
  `dist_second_installment_amount` float(10,2) DEFAULT NULL,
  `hq_second_release_amount` float(10,2) DEFAULT NULL,
  `second_installment_released_by_HQ` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=pending,1=released, 2=reject, 3=revert',
  `government_order_letter_second` varchar(255) DEFAULT NULL,
  `second_release_tv_no` varchar(30) DEFAULT NULL,
  `second_release_token_no` varchar(20) DEFAULT NULL,
  `second_release_token_date` date DEFAULT NULL,
  `second_release_rbi_transaction` varchar(30) DEFAULT NULL,
  `second_release_rbi_trans_date` date DEFAULT NULL,
  `second_release_remarks_by_hq` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `application_master`
--

INSERT INTO `application_master` (`application_id`, `application_no`, `scheme_id`, `user_id`, `proj_exist_industry`, `proj_exist_industry_no`, `proj_step1_submit`, `proj_step1_datetime`, `proj_name`, `proj_prod_manufacture`, `proj_add1`, `proj_add2`, `proj_district`, `proj_sub_division`, `proj_block`, `proj_gram_panchayat`, `proj_village`, `proj_police_station`, `proj_pincode`, `proj_daag_no`, `proj_khatian_no`, `proj_mouza_no`, `proj_jl_no`, `proj_land_type`, `proj_land_document`, `proj_current_status`, `proj_proposed_pro_date`, `proj_technology`, `proj_plant_capacity`, `proj_present_capacity`, `proj_present_unit`, `proj_proposed_capacity`, `proj_proposed_unit`, `proj_bank_name`, `proj_branch`, `proj_ifsc`, `proj_acc_no`, `proj_pan_no`, `proj_term_loan_sac_yesno`, `proj_document`, `proj_tl_cost`, `proj_step2_submit`, `proj_step2_datetime`, `proj_land_building_cost`, `proj_plant_machinary_cost`, `proj_misc_fixed_assets`, `proj_contingencies_etc`, `proj_others`, `proj_preli_preopearative_expenses`, `proj_working_capital_margin`, `proj_total_project_cost`, `proj_promoter_contribution`, `proj_finance_others`, `proj_term_loan_from_bank`, `proj_total_means_of_finance`, `proj_working_capital`, `proj_subsity_claimed`, `proj_indirect_male`, `proj_indirect_female`, `proj_direct_male`, `proj_direct_female`, `proj_step3_submit`, `proj_step3_datetime`, `proj_step4_submit`, `proj_step4_datetime`, `proj_final_status`, `is_applicant_submitted`, `is_district_app_reject_revert`, `dist_approval_amount`, `dist_remarks`, `is_hq_app_reject_revert`, `hq_approval_amount`, `hq_remarks`, `is_first_sanction`, `sanction_letter`, `sanction_remarks`, `bond`, `bank_cerificate`, `ca_certificate`, `apply_for_1st_installment_release`, `is_project_cost_updated_dist`, `update_project_cost_by_dist`, `is_dist_approve_1st_installment_release`, `is_dist_approve_2nd_installment_release`, `is_dist_approve_1st_installment_remarks`, `is_dist_approve_2nd_installment_remarks`, `is_dist_approve_1st_installment_datetime`, `is_dist_approve_2nd_installment_datetime`, `first_installment_released_by_HQ`, `first_release_hq_remarks`, `hq_project_amount`, `first_release_tv_no`, `first_release_token_no`, `first_release_token_date`, `first_release_rbi_transaction`, `first_release_rbi_trans_date`, `government_order_letter`, `uc`, `charter_engineer_certificate`, `scnd_installment_bank_certificate`, `scnd_installment_ca_certificate`, `apply_for_second_installment`, `dist_second_installment_amount`, `hq_second_release_amount`, `second_installment_released_by_HQ`, `government_order_letter_second`, `second_release_tv_no`, `second_release_token_no`, `second_release_token_date`, `second_release_rbi_transaction`, `second_release_rbi_trans_date`, `second_release_remarks_by_hq`) VALUES
(1, 'DFPI/AD/23-24/24042023/0001', 1, 1, 'Yes', 1, 0, '2023-04-24 12:49:29', 'ghjk', 'asd', 'fdfd', 'sds', 662, 1, 1, 1, 'kolkata', 'fddgd', '700068', '12', '23', '43', '32', 'Own', NULL, 'Started', '2023-04-25', 'Indigenous', 'Proposed', NULL, NULL, '32', '1', '1', '1', 'ALLA0210410', '199091536147', 'ABCD0176W3', 'Yes', 'ProjDOC-1877153864.png', NULL, 0, '2023-04-24 12:49:39', '11', '12.00', '11', '11', '11', '11', '11', '78.00', '11', '11', '11', '33.00', '12', '66.00', '120', '20', '3', '9', 0, '2023-04-24 12:49:46', 0, '2023-04-24 12:49:53', 8, 0, 0, 25.00, 'Approved', 0, 21.00, 'Hq Approve', 0, 'LH-06-04-2023-v5.pdf', 'Application Sanctioned', '1682519273_LH-06-04-2023-v5.pdf', '1682519273_LH-06-04-2023-v5.pdf', '1682519273_LH-06-04-2023-v5.pdf', 0, 0, 12.00, 0, 0, 'Dist Approve 1st Installment', 'sgsg', '2023-04-27 01:43:56', '2023-04-28 15:23:58', 0, 'sgsgsgsg', 12.00, '42424', '24242', '2023-04-12', '2424', '2023-04-19', NULL, NULL, NULL, NULL, NULL, 0, 9.00, 9.00, 1, NULL, '131313', '1313', '2023-04-19', '131313', '2023-04-20', 'vxvdvdbvdbdbdb'),
(2, 'DFPI/AD/23-24/24042023/0002', 1, 2, 'Yes', 1, 1, '2023-04-24 12:23:48', 'acac', 'Lenevo', '1/425 Gariahat Road(S), Jodhpur Park', 'acac', 662, 1, 1, 3, 'kolkata', 'acac', '700068', '12', '22', '11', '11', 'Own', NULL, 'Started', '2023-04-28', 'Indigenous', 'Proposed', NULL, NULL, '12', '1', '1', '1', 'ALLA0210410', '199091536147', 'AHKG0982W3', 'Yes', 'ProjDOC-4043629236.jpg', NULL, 1, '2023-04-24 12:24:59', '22', '22.00', '22', '22', '22', '22', '22', '154.00', '32', '3', '125', '160.00', '23', '131.00', '120', '20', '240', '9', 1, '2023-04-24 12:26:00', 1, '2023-04-24 12:26:23', 8, 0, 1, 34.00, 'Dist Approve', 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'DFPI/AD/23-24/27042023/0001', 1, 3, 'Yes', 1, 1, '2023-04-27 20:52:44', 'Surojit Chowdhury', '1', '1/425 Gariahat Road(S), Jodhpur Park', 'wefsf', 662, 1, 1, 1, 'kolkata', 'sfsf', '700068', NULL, NULL, NULL, NULL, 'Lease', 'LAND_DOCSETS_644a93b47d037.jpg', 'Work in Progress', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', 'ALLA0210410', '2365412369', 'AHKG0982W0', 'Yes', 'ProjDOC_644a93b47cf2b.jpg', 212.00, 1, '2023-04-27 20:54:36', '160', '21.00', '12', '5', '3', '32', '14', '247.00', '32', '3', '212.00', '247.00', '24', '8.40', '24', '20', '3', '10', 1, '2023-04-27 20:56:39', 0, NULL, 0, 1, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application_master`
--
ALTER TABLE `application_master`
  ADD PRIMARY KEY (`application_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application_master`
--
ALTER TABLE `application_master`
  MODIFY `application_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
