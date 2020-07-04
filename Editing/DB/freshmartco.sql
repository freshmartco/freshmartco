-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2020 at 04:33 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freshmartco`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `phone` varchar(128) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(256) NOT NULL,
  `state` varchar(256) NOT NULL,
  `zip` varchar(128) NOT NULL,
  `company_name` varchar(128) NOT NULL,
  `image_path` varchar(128) NOT NULL,
  `gst_no` varchar(256) NOT NULL,
  `created_by` varchar(128) NOT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `phone`, `address`, `city`, `state`, `zip`, `company_name`, `image_path`, `gst_no`, `created_by`, `created_date`) VALUES
(4, 'Chalapathi', 'chala@gmail.com', '9916454485', 'Banglore', 'Banglore', 'Karnataka', '563139', 'FutureMart', 'uploads/cust_profile/462071my_photo.png', '', '44', '2020-06-27');

-- --------------------------------------------------------

--
-- Table structure for table `muser_master`
--

CREATE TABLE `muser_master` (
  `id` int(8) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(128) NOT NULL,
  `otp` varchar(128) NOT NULL,
  `phone` varchar(256) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `enc_pass` varchar(256) NOT NULL,
  `status` int(11) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `store_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `muser_master`
--

INSERT INTO `muser_master` (`id`, `name`, `email`, `otp`, `phone`, `username`, `password`, `enc_pass`, `status`, `user_type`, `store_id`, `date`) VALUES
(44, 'FreshMartCo', 'chala.arya@gmail.com', '755', '8660606669', 'FreshMartCo', 'admin@apps', '90189d14b007bb5be4997c51f5894f92', 0, '0', 1, '2019-03-27');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `origin` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `email` varchar(250) NOT NULL,
  `enc_pass` varchar(256) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `user_type` int(11) NOT NULL,
  `otp` varchar(120) NOT NULL,
  `created_by` varchar(128) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`origin`, `username`, `status`, `email`, `enc_pass`, `phone`, `user_type`, `otp`, `created_by`, `date_time`) VALUES
(1, 'CHala', '0', 'chala@gmail.com', '90189d14b007bb5be4997c51f5894f92', '9916645448', 1, '', '44', '2020-06-27 18:47:47'),
(2, 'Prakasha', '0', 'prakash@gmail.com', 'e70d4496852f58fffb34cb97dd4106be', '1111111111', 2, '', '44', '2020-06-28 07:48:37');

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `origin` int(11) NOT NULL,
  `user_type` varchar(30) NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`origin`, `user_type`, `status`) VALUES
(1, 'Sub-admin', '0'),
(2, 'Supplier', '0'),
(3, 'Customer', '0'),
(4, 'Farmer', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `muser_master`
--
ALTER TABLE `muser_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`origin`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`origin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `muser_master`
--
ALTER TABLE `muser_master`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `origin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `origin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
