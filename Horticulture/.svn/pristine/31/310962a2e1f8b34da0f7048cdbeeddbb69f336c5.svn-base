-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2023 at 09:34 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `product_master`
--

CREATE TABLE `product_master` (
  `prod_id` int(5) NOT NULL,
  `prod_name` varchar(100) NOT NULL,
  `prod_createdate` datetime NOT NULL,
  `prod_createby` int(5) NOT NULL,
  `prod_modifydate` datetime DEFAULT NULL,
  `prod_modifyby` int(5) DEFAULT NULL,
  `prod_status` tinyint(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_master`
--

INSERT INTO `product_master` (`prod_id`, `prod_name`, `prod_createdate`, `prod_createby`, `prod_modifydate`, `prod_modifyby`, `prod_status`) VALUES
(1, 'Product Name 1', '2023-04-26 00:03:56', 1, NULL, NULL, 1),
(2, 'Product Name 2', '2023-04-26 00:03:56', 1, NULL, NULL, 1),
(3, 'Product Name 3', '2023-04-26 00:03:56', 1, NULL, NULL, 1),
(4, 'Product Name 4', '2023-04-26 00:03:56', 1, NULL, NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_master`
--
ALTER TABLE `product_master`
  ADD PRIMARY KEY (`prod_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_master`
--
ALTER TABLE `product_master`
  MODIFY `prod_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
