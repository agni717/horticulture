-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2023 at 04:07 PM
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
-- Database: `horti_db_amit`
--

-- --------------------------------------------------------

--
-- Structure for view `industry_all_view`
--

CREATE VIEW `industry_all_view`  AS  (select `industry_master`.`industry_id` AS `industry_id`,`industry_master`.`industry_application_id` AS `industry_application_id`,`industry_master`.`industry_name` AS `industry_name`,`industry_master`.`industry_product` AS `industry_product`,`industry_master`.`industry_Sub_Division` AS `industry_Sub_Division`,`industry_master`.`industry_Police_Station` AS `industry_Police_Station`,`industry_master`.`industry_location` AS `industry_location`,`industry_master`.`industry_Address` AS `industry_Address`,`industry_master`.`industry_Address2` AS `industry_Address2`,`industry_master`.`industry_district` AS `industry_district`,`industry_master`.`industry_Block` AS `industry_Block`,`industry_master`.`industry_gram_panchayat` AS `industry_gram_panchayat`,`industry_master`.`industry_village` AS `industry_village`,`industry_master`.`industry_Pincode` AS `industry_Pincode`,`industry_master`.`industry_createdate` AS `industry_createdate`,`industry_master`.`industry_modifydate` AS `industry_modifydate`,`industry_master`.`industry_status` AS `industry_status`,`district_master`.`district_name` AS `district_name`,`subdivision_tab`.`subdiv_name` AS `subdiv_name`,`block_master`.`block_name` AS `block_name`,`panchayat_master`.`panchayat_name` AS `panchayat_name`,`product_master`.`prod_name` AS `prod_name` from (((((`industry_master` left join `product_master` on(`product_master`.`prod_id` = `industry_master`.`industry_product`)) left join `district_master` on(`district_master`.`district_code` = `industry_master`.`industry_district`)) left join `subdivision_tab` on(`subdivision_tab`.`subdiv_id` = `industry_master`.`industry_Sub_Division`)) left join `block_master` on(`block_master`.`block_id` = `industry_master`.`industry_Block`)) left join `panchayat_master` on(`panchayat_master`.`panchayat_id` = `industry_master`.`industry_gram_panchayat`))) ;

--
-- VIEW  `industry_all_view`
-- Data: None
--

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
