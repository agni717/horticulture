-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2023 at 03:47 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `old_clean_horticulture_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `document_upload_master`
--

CREATE TABLE `document_upload_master` (
  `doc_id` int(11) NOT NULL,
  `parent_id` tinyint(2) NOT NULL DEFAULT '0',
  `doc_label` varchar(500) DEFAULT NULL,
  `doc_file_name` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=active,0=inactive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `document_upload_master`
--

INSERT INTO `document_upload_master` (`doc_id`, `parent_id`, `doc_label`, `doc_file_name`, `status`) VALUES
(1, 0, 'Prescribed format application (Annexure-1)', 'annexure1', 1),
(2, 0, 'Detailed Project Report (DPR)', 'dpr', 1),
(3, 0, 'Sanction letter of term loan from Bank / Financial Institution', 'sanction_letter_of_term_loan', 1),
(4, 0, 'Appraisal Report from Bank / Financial Institution', 'appraisal_report', 1),
(5, 5, '(i)Certificate of Incorporation / Registration of Organization', 'certificate_of_incorporation', 1),
(6, 5, '(ii) Memorandum / Articles of Association / Bye-laws of Society', 'memorandum_of_association', 1),
(7, 5, '(iii) Partnership Deed', 'partnership_deed', 1),
(8, 0, 'Bio-data / Background of Directors / promoters/Blueprint of building plan Trade License Document', 'bio_data/blueprint_building_plan', 1),
(9, 0, 'Land documents / Registered lease deed in case of leased land', 'land_deed', 1),
(10, 0, 'Chartered Engineer (Civil) Certificate of item and cost-wise details of the Technical Civil Work envisaged', 'certificate_of_item', 1),
(11, 0, 'Chartered Engineer (Mechanical) / Certificate District Engineer, Zilla Parishad Certificate mentioning item and cost wise details of the Plant and Machineries envisaged / installed, etc', 'chartered_engineer', 1),
(12, 0, 'Quotations of prices of plant and machineries and equipments etc. required for the project', 'quotations_of_prices', 1),
(13, 0, 'Marketing Strategy', 'marketing_strategy', 1),
(14, 0, 'Process Flow Diagram', 'process_flow_diagram', 1),
(15, 0, 'Implementation Schedule (dates of acquiring land start of construction of building / completion of building / placing order for plant and machinery / installation / erection / trial run / trial production / start of commercial production / running)', 'implementation_schedule', 1),
(16, 0, 'An affidavit duly executed on non-judicial stamp paper of Rs.100/- or more duly notarized by Notary Public affirming that : <br>The organization has not obtained / applied for or will not obtain any grant / subsidy from any Ministry / Department of Central Govt. / GOI organization / agencies and State Govt. for the same purpose / activity / same components. If yes, the details thereof.', 'submitted_affidavit', 1),
(17, 0, 'Bank Certificate certifying release of 50% of term loan and no objection to release of 1st instalment of grant', 'submitted_bank_certificate', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `document_upload_master`
--
ALTER TABLE `document_upload_master`
  ADD PRIMARY KEY (`doc_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `document_upload_master`
--
ALTER TABLE `document_upload_master`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
