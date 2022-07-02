-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2020 at 06:28 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amt`
--

-- --------------------------------------------------------

--
-- Table structure for table `cirri`
--

CREATE TABLE `cirri` (
  `id` int(11) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Contact` int(11) NOT NULL,
  `Size` varchar(20) NOT NULL,
  `Place` varchar(20) NOT NULL,
  `Budget` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cirri`
--

INSERT INTO `cirri` (`id`, `fullname`, `Email`, `Contact`, `Size`, `Place`, `Budget`) VALUES
(1, 'ge', 'a@gmail.com', 677645454, 'b', 'ghgfgasfg', 1232);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Subject` varchar(20) NOT NULL,
  `Message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fullname`, `Email`, `Subject`, `Message`) VALUES
(1, 'Shrihari', 'program@gmail.com', 'Ask', 'hello guys!!'),
(2, 'papu', 'papu@gmail.com', 'aslknshh,j', 'hvdvvchgghvckrvclryvlcyrl'),
(3, 'nbfghgf', 'gdghfh@gmail.com', 'gdngmfcm', 'hcgcmh'),
(4, 'ask', 'ask@gmail.com', 'sub', 'vihar');

-- --------------------------------------------------------

--
-- Table structure for table `expert`
--

CREATE TABLE `expert` (
  `id` int(11) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Contact` int(11) NOT NULL,
  `Size` varchar(20) NOT NULL,
  `Place` varchar(20) NOT NULL,
  `Budget` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expert`
--

INSERT INTO `expert` (`id`, `fullname`, `Email`, `Contact`, `Size`, `Place`, `Budget`) VALUES
(1, 'shrihari', '', 2147483647, '01-05', 'bangalore', 1200),
(2, 'pap', '', 653257556, '01-05', 'hhdg', 123),
(3, 'data', 'bbas@gmail.com', 2147483647, '30 +', 'bangalore', 500000);

-- --------------------------------------------------------

--
-- Table structure for table `fldatabase`
--

CREATE TABLE `fldatabase` (
  `Sr_no` int(100) NOT NULL,
  `date` date NOT NULL,
  `pi_fname` varchar(30) NOT NULL,
  `pi_lname` varchar(30) NOT NULL,
  `pi_email` varchar(30) NOT NULL,
  `pi_phone` int(12) NOT NULL,
  `pi_addr_line1` varchar(30) NOT NULL,
  `pi_addr_line2` varchar(30) NOT NULL,
  `pi_city` varchar(20) NOT NULL,
  `pi_district` varchar(20) NOT NULL,
  `pi_state` varchar(20) NOT NULL,
  `pi_postal` int(20) NOT NULL,
  `mode_type` varchar(20) NOT NULL,
  `order_type` varchar(20) NOT NULL,
  `de_fname` varchar(30) NOT NULL,
  `de_lname` varchar(30) NOT NULL,
  `de_email` varchar(30) NOT NULL,
  `de_phone` int(12) NOT NULL,
  `de_addrline1` varchar(30) NOT NULL,
  `de_addrline2` varchar(30) NOT NULL,
  `de_city` varchar(20) NOT NULL,
  `de_district` varchar(20) NOT NULL,
  `de_state` varchar(20) NOT NULL,
  `de_postal` int(20) NOT NULL,
  `package_category` varchar(50) NOT NULL,
  `tot_invoice_amt` int(10) NOT NULL,
  `no_of_packets` varchar(40) NOT NULL,
  `required_veh` varchar(50) NOT NULL,
  `weight_inkg` int(10) NOT NULL,
  `other` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fldatabase`
--

INSERT INTO `fldatabase` (`Sr_no`, `date`, `pi_fname`, `pi_lname`, `pi_email`, `pi_phone`, `pi_addr_line1`, `pi_addr_line2`, `pi_city`, `pi_district`, `pi_state`, `pi_postal`, `mode_type`, `order_type`, `de_fname`, `de_lname`, `de_email`, `de_phone`, `de_addrline1`, `de_addrline2`, `de_city`, `de_district`, `de_state`, `de_postal`, `package_category`, `tot_invoice_amt`, `no_of_packets`, `required_veh`, `weight_inkg`, `other`) VALUES
(1, '2020-04-15', 'tarunima', 'verma', 'tarunimav@gmail.com', 999999999, 'taru', 'hi', 'udaipur', 'udaipur', 'rajasthan', 313001, 'LITE-2Kg', 'COD', 'marja', 'jaake', 'kuenm@gmail.com', 888888888, 'keede', 'pde', 'tuje', 'tu', 'ghatiya', 332311, 'Handbags & Luggages', 1111, '1 to 4', '14 feet', 70, 'i am good.'),
(2, '0000-00-00', 'tar', 'sutaria', 'taru@gmail.com', 999, 'nighty', 'night', 'udaipur', '-', 'Delhi', 313001, 'LITE- 2 Kg', 'COD', 'ttt', 'Verma', 'fileyou@gmail.com', 888, 'nighty', 'night', 'udaipur', '-', 'Delhi', 313001, 'Computer & Accessories', 1111, '6 to 10', '14 feet- Closed', 90, 'good'),
(5, '0000-00-00', 'sri', 'hari', 'shrihari655@gmail.com', 831, '#15/ Dgqa residenceal', 'gunatha ', 'hebbal', 'bngslore', 'Karnataka', 560032, 'LITE- 2 Kg', 'COD', 'vikas', 'yadav', 'shrihari655@gmail.com', 990, 'hello', 'vijay', 'hebbal', 'bngslore', 'Karnataka', 560032, 'Computer & Accessories', 12500, '6 to 10', '17 ft- Closed', 12, 'sghdgfueskgfjgejyvgyj');

-- --------------------------------------------------------

--
-- Table structure for table `fun`
--

CREATE TABLE `fun` (
  `id` int(11) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Contact` int(11) NOT NULL,
  `Size` varchar(20) NOT NULL,
  `Place` varchar(20) NOT NULL,
  `Budget` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fun`
--

INSERT INTO `fun` (`id`, `fullname`, `Email`, `Contact`, `Size`, `Place`, `Budget`) VALUES
(1, 'hi', 'hello@gmail.com', 2147483647, '06-10', 'bnaglore', 12000);

-- --------------------------------------------------------

--
-- Table structure for table `outing`
--

CREATE TABLE `outing` (
  `id` int(11) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Contact` int(11) NOT NULL,
  `Size` varchar(20) NOT NULL,
  `Place` varchar(20) NOT NULL,
  `Budget` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `outing`
--

INSERT INTO `outing` (`id`, `fullname`, `Email`, `Contact`, `Size`, `Place`, `Budget`) VALUES
(1, 'pap', 'pap@gmail.com', 0, '01-05', 'hsgjgjf', 13213),
(2, 'a', 'as@gmail.com', 0, '01-05', 'basngalore', 1234),
(3, 'fe', 'sd@gmail.com', 2147483647, '30 +', 'bangalore', 1234344);

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `id` int(11) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Contact` int(11) NOT NULL,
  `Size` varchar(20) NOT NULL,
  `Place` varchar(20) NOT NULL,
  `Budget` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`id`, `fullname`, `Email`, `Contact`, `Size`, `Place`, `Budget`) VALUES
(1, 'learn', 'ask@gmail.com', 2147483647, '30 +', 'bangeftg', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `pldatabse`
--

CREATE TABLE `pldatabse` (
  `sr_no` int(100) NOT NULL,
  `date` date NOT NULL,
  `pi_fname` varchar(30) NOT NULL,
  `pi_lname` varchar(30) NOT NULL,
  `pi_email` varchar(30) NOT NULL,
  `pi_phone` int(12) NOT NULL,
  `pi_addr_line1` varchar(30) NOT NULL,
  `pi_addr_line2` varchar(30) NOT NULL,
  `pi_city` varchar(20) NOT NULL,
  `pi_district` varchar(20) NOT NULL,
  `pi_state` varchar(20) NOT NULL,
  `pi_postal` int(10) NOT NULL,
  `mode_type` varchar(20) NOT NULL,
  `order_type` varchar(20) NOT NULL,
  `de_fname` varchar(30) NOT NULL,
  `de_lname` varchar(30) NOT NULL,
  `de_email` varchar(30) NOT NULL,
  `de_phone` int(12) NOT NULL,
  `de_addrline1` varchar(30) NOT NULL,
  `de_addrline2` varchar(30) NOT NULL,
  `de_city` varchar(20) NOT NULL,
  `de_district` varchar(20) NOT NULL,
  `de_state` varchar(20) NOT NULL,
  `de_postal` int(10) NOT NULL,
  `package_category` varchar(20) NOT NULL,
  `tot_invoice_amt` int(10) NOT NULL,
  `no_of_packets` varchar(20) NOT NULL,
  `required_veh` varchar(20) NOT NULL,
  `weight_inkg` int(10) NOT NULL,
  `itemQuantity` int(50) NOT NULL,
  `weight` int(50) NOT NULL,
  `length` int(50) NOT NULL,
  `width` int(50) NOT NULL,
  `height` int(50) NOT NULL,
  `invoice` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pldatabse`
--

INSERT INTO `pldatabse` (`sr_no`, `date`, `pi_fname`, `pi_lname`, `pi_email`, `pi_phone`, `pi_addr_line1`, `pi_addr_line2`, `pi_city`, `pi_district`, `pi_state`, `pi_postal`, `mode_type`, `order_type`, `de_fname`, `de_lname`, `de_email`, `de_phone`, `de_addrline1`, `de_addrline2`, `de_city`, `de_district`, `de_state`, `de_postal`, `package_category`, `tot_invoice_amt`, `no_of_packets`, `required_veh`, `weight_inkg`, `itemQuantity`, `weight`, `length`, `width`, `height`, `invoice`) VALUES
(1, '2020-04-16', 'ttt', 'lll', 'nnn', 999999999, 'hi', 'there', 'udaipur', '-', 'nnnnn', 313001, 'AIR', 'COD', 'nananan', 'nini', 'lakaka', 888888888, 'jot', 'form', 'hi', 'baby', 'are you there', 90, 'Handbags & Luggages', 3456, '1 to 5 ', '14 feet', 90, 6, 99, 11, 9, 6, 50000),
(2, '0000-00-00', 'Tarunima', 'llll', 'fileyou@gmail.com', 999, 'okay', 'done', 'udaipur', '-', 'Delhi', 313001, 'AIR', 'COD', 'tarm', 'ver', 'taru@gmail.com', 888, 'lightup', 'night', 'udaipur', '-', 'Delhi', 313001, 'Shoe & Leather Items', 1111, '11 to 15', '14 feet- Closed', 90, 67, 77, 87, 97, 107, 1000),
(3, '0000-00-00', 'sri', 'hari', 'a@gmail.com', 831, 'fazer town', 'gully', 'vhjdzf,h', 'bbvfdhgv', 'Arunachal Pradesh', 566222, 'LITE- 2 Kg', 'COD', 'shri', 'hary', 'ex@gmail.com', 339, 'banbdhkge', 'vsfh', 'vhjdzf,h', 'bbvfdhgv', 'Arunachal Pradesh', 566222, 'Sports, Fitness & Ou', 12000, '6 to 10', '14 feet- Closed', 10000, 1, 50, 89, 87, 250, 100000);

-- --------------------------------------------------------

--
-- Table structure for table `tripz`
--

CREATE TABLE `tripz` (
  `id` int(11) NOT NULL,
  `Trip` varchar(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Contact` int(11) NOT NULL,
  `groups` varchar(20) NOT NULL,
  `Place` varchar(20) NOT NULL,
  `Budget` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tripz`
--

INSERT INTO `tripz` (`id`, `Trip`, `Name`, `Email`, `Contact`, `groups`, `Place`, `Budget`) VALUES
(1, 'CURRICULUM WORKSHOP ', 'a', 'a@gmail.com', 2147483647, '01-05', 'bangalore', 120),
(2, 'FUN LEARN TRIPS', 'papu', 'bap@gmail.com', 87837857, '01-05', 'delhi', 123),
(3, 'A DAY OUTING', 'f', 'fr', 655765, '01-05', 'fcfc', 34),
(4, 'PARENT-TEACHER MEETR', 'hi', 'hello', 643767386, '01-05', 'bangaler', 2364),
(5, 'Types of Trips', '', '', 0, 'Group Size', '', 0),
(6, 'CURRICULUM WORKSHOP ', 'shrihari', 'shrihari655@gmail.co', 2147483647, '01-05', 'bangalore', 12000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cirri`
--
ALTER TABLE `cirri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expert`
--
ALTER TABLE `expert`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fldatabase`
--
ALTER TABLE `fldatabase`
  ADD PRIMARY KEY (`Sr_no`);

--
-- Indexes for table `fun`
--
ALTER TABLE `fun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `outing`
--
ALTER TABLE `outing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pldatabse`
--
ALTER TABLE `pldatabse`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `tripz`
--
ALTER TABLE `tripz`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cirri`
--
ALTER TABLE `cirri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `expert`
--
ALTER TABLE `expert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fldatabase`
--
ALTER TABLE `fldatabase`
  MODIFY `Sr_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `fun`
--
ALTER TABLE `fun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `outing`
--
ALTER TABLE `outing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pldatabse`
--
ALTER TABLE `pldatabse`
  MODIFY `sr_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tripz`
--
ALTER TABLE `tripz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
