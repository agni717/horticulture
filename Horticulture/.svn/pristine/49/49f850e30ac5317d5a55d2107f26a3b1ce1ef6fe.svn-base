-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2023 at 04:06 PM
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
-- Structure for view `f_user_views`
--

CREATE VIEW `f_user_views`  AS  select `user_info`.`u_id` AS `u_id`,`user_info`.`u_mobile` AS `u_mobile`,`user_info`.`u_email` AS `u_email`,`user_info`.`u_otpset` AS `u_otpset`,`user_info`.`email_verify` AS `email_verify`,`user_info`.`otp_count` AS `otp_count`,`user_info`.`otp_sendtime` AS `otp_sendtime`,`user_info`.`first_name` AS `first_name`,`user_info`.`middle_name` AS `middle_name`,`user_info`.`last_name` AS `last_name`,`user_info`.`u_gender` AS `u_gender`,`user_info`.`u_parent_name` AS `u_parent_name`,`user_info`.`u_district` AS `u_district`,`user_info`.`u_sub_division` AS `u_sub_division`,`user_info`.`u_block` AS `u_block`,`user_info`.`u_gram_panchayat` AS `u_gram_panchayat`,`user_info`.`u_village` AS `u_village`,`user_info`.`u_post_office` AS `u_post_office`,`user_info`.`u_pincode` AS `u_pincode`,`user_info`.`u_image` AS `u_image`,`user_info`.`u_createdate` AS `u_createdate`,`user_info`.`u_modifydate` AS `u_modifydate`,`user_info`.`ip_address` AS `ip_address`,`user_info`.`is_active` AS `is_active`,`district_master`.`district_name` AS `district_name`,`subdivision_tab`.`subdiv_name` AS `subdiv_name`,`block_master`.`block_name` AS `block_name`,`panchayat_master`.`panchayat_name` AS `panchayat_name` from ((((`user_info` left join `district_master` on(`district_master`.`district_code` = `user_info`.`u_district`)) left join `subdivision_tab` on(`subdivision_tab`.`subdiv_id` = `user_info`.`u_sub_division`)) left join `block_master` on(`block_master`.`block_id` = `user_info`.`u_block`)) left join `panchayat_master` on(`panchayat_master`.`panchayat_id` = `user_info`.`u_gram_panchayat`)) ;

--
-- VIEW  `f_user_views`
-- Data: None
--

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
