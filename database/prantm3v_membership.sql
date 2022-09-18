-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 23, 2022 at 07:34 PM
-- Server version: 5.7.23-23
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prantm3v_membership`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` bigint(20) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `token` varchar(150) NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  `deleted` int(11) NOT NULL DEFAULT '1',
  `role` enum('admin','user') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `name`, `email`, `username`, `password`, `token`, `status`, `deleted`, `role`) VALUES
(7, 'Developer', 'admin@bditfactory.com', 'Developer', '827ccb0eea8a706c4c34a16891f84e7b', '', 'active', 1, 'admin'),
(14, 'tt', 'tt@g.com', 'admin', '827ccb0eea8a706c4c34a16891f84e7b', '', 'active', 1, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE `cases` (
  `case_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `case_name` text NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `father` varchar(255) NOT NULL,
  `mother` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(100) NOT NULL,
  `expire_date` date DEFAULT NULL,
  `photo` text NOT NULL,
  `signature` text NOT NULL,
  `card_no` varchar(255) NOT NULL,
  `permanent_address` text NOT NULL,
  `member_number` varchar(255) NOT NULL,
  `dl_number` varchar(255) NOT NULL,
  `road` int(11) NOT NULL,
  `blood` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `card_issue_date` date DEFAULT NULL,
  `card_issue_date_old` date DEFAULT NULL,
  `nid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `father`, `mother`, `address`, `phone`, `expire_date`, `photo`, `signature`, `card_no`, `permanent_address`, `member_number`, `dl_number`, `road`, `blood`, `dob`, `card_issue_date`, `card_issue_date_old`, `nid`) VALUES
(1, 'sohel', 't', 't', 't', 't', '2022-05-24', '24-05-2022-01-04-18.png', '2444bbd9d81f90f84bd97ea0cec9a825.jpg', '12345', 't', 't', 't', 4, 't', 't', '2022-05-24', '2022-05-01', 123456789);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `paymentID` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`paymentID`, `member_id`, `date`, `amount`) VALUES
(1, 1, '2022-05-24', 12345.00);

-- --------------------------------------------------------

--
-- Table structure for table `roads`
--

CREATE TABLE `roads` (
  `road_id` int(11) NOT NULL,
  `road_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roads`
--

INSERT INTO `roads` (`road_id`, `road_name`) VALUES
(4, 'মিয়ার বাজার মাইক্রোবাস'),
(5, 'চন্ডিপুল মাইক্রোবাস'),
(6, 'কদমতলী মাইক্রোবাস'),
(7, 'সিলেট  ঢাকা বাস'),
(8, 'সিলেট  জকিগঞ্জ বাস '),
(9, 'সিলেট জকিগঞ্জ মিনিবাস'),
(10, 'সিলেট ঢাকা দক্ষিণ মিনিবাস'),
(11, 'সিলেট মৌলভী বাজার বাস মিনিবাস'),
(12, 'সিলেট ঢাকা মিতালী বাস'),
(13, 'সিলেট তামাবিল বাস-মিনিবাস'),
(14, 'সিলেট জগন্নাথপুর বাস-মিনিবাস'),
(15, 'সিলেট কুলাউড়া বাস-মিনিবাস'),
(16, 'সিলেট সুনামগঞ্জ মিনিবাস'),
(17, 'সিলেট সুনামগঞ্জ বাস '),
(18, 'সিলেট সালুটিকর বাস-মিনিবাস'),
(19, 'হেতিমগঞ্জ মাইক্রোবাস'),
(20, 'লালাবাজার মাইক্রোবাস'),
(21, 'বিশ্বনাথ মাইক্রোবাস'),
(22, 'বাগিছা বাজার মাইক্রোবাস'),
(23, 'দয়ামীর মাইক্রোবাস'),
(24, 'তাজপুর মাইক্রোবাস'),
(25, 'গোয়ালাবাজার মাইক্রোবাস'),
(26, 'খাদিমপুর উমরপুর মাইক্রোবাস'),
(27, 'মোগলাবাজার মাইক্রোবাস'),
(28, 'গোলাপগঞ্জ মাইক্রোবাস '),
(29, 'ঢাকা দক্ষিণ মাইক্রোবাস'),
(30, 'সুনামপুর চন্দরপুর মাইক্রোবাস'),
(31, 'রামধা মাইক্রোবাস'),
(32, 'চারখাই মাইক্রোবাস'),
(33, 'কালীগঞ্জ মাইক্রোবাস'),
(34, 'জকিগঞ্জ মাইক্রোবাস'),
(35, 'শাহজালাল ব্রীজ মাইক্রোবাস'),
(36, 'চৌহাট্টা মাইক্রোবাস (১)'),
(37, 'চৌহাট্টা মাইক্রোবাস (২)'),
(38, 'পশ্চিম চৌহাট্টা মাইক্রোবাস'),
(39, 'উত্তর চৌহাট্টা মাইক্রোবাস'),
(40, 'সুবিদবাজার মাইক্রোবাস'),
(41, 'ওসমানী মেডিকেল মাইক্রোবাস'),
(42, 'ভাদেশ্বর মাইক্রোবাস'),
(43, 'বিয়ানীবাজার মাইক্রোবাস'),
(44, 'শাহগলী মাইক্রোবাস'),
(45, 'চাঁনপুর মাইক্রোবাস'),
(46, 'নাইওরপুল মাইক্রোবাস'),
(47, 'টুকের বাজার মাইক্রোবাস'),
(48, 'শাহী ঈদগাহ্ মাইক্রোবাস'),
(49, 'বালাগঞ্জ মাইক্রোবাস'),
(50, 'ফেঞ্চুগঞ্জ মাইক্রোবাস'),
(51, 'ওসমানী বিমানবন্দর মাইক্রোবাস'),
(52, 'রিকাবী বাজার মাইক্রোবাস'),
(53, 'মধ্য চৌহাট্টা মাইক্রোবাস'),
(54, 'মাইজগাঁও মাইক্রোবাস'),
(55, 'সিংঙ্গেরকাছ মাইক্রোবাস'),
(56, 'টিকর পাড়া মাইক্রোবাস'),
(57, 'ইসলামপুর মাইক্রোবাস'),
(58, 'লক্ষণাবন্দ মাইক্রোবাস'),
(59, 'হযরত শাহ্ জালাল (রঃ) মাইক্রোবাস'),
(60, 'মদিনা মার্কেট মাইক্রোবাস'),
(61, 'বালুচর মাইক্রোবাস'),
(62, 'রাখালগঞ্জ মাইক্রোবাস'),
(63, 'শাহ পরান মাইক্রোবাস'),
(64, 'পীরের বাজার মাইক্রোবাস'),
(65, 'সড়কের বাজার মাইক্রোবাস'),
(66, 'বৈরাগী বাজার মাইক্রোবাস'),
(67, 'ধোপাদিঘির পার মাইক্রোবাস'),
(68, 'বটেশ্বর মাইক্রোবাস'),
(69, 'চিকনাগুল মাইক্রোবাস'),
(70, 'সোবহানীঘাট মাইক্রোবাস'),
(71, 'শেরপুর খছরু পুর মাইক্রোবাস'),
(72, 'মেঃ বিঃ ও কাঃ বাঃ মাইক্রোবাস');

-- --------------------------------------------------------

--
-- Table structure for table `withdraw`
--

CREATE TABLE `withdraw` (
  `id` int(11) NOT NULL,
  `purpose` text NOT NULL,
  `date` date NOT NULL,
  `amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`),
  ADD KEY `role` (`role`);

--
-- Indexes for table `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`case_id`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD KEY `road` (`road`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`paymentID`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `roads`
--
ALTER TABLE `roads`
  ADD PRIMARY KEY (`road_id`);

--
-- Indexes for table `withdraw`
--
ALTER TABLE `withdraw`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `cases`
--
ALTER TABLE `cases`
  MODIFY `case_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `paymentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roads`
--
ALTER TABLE `roads`
  MODIFY `road_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `withdraw`
--
ALTER TABLE `withdraw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cases`
--
ALTER TABLE `cases`
  ADD CONSTRAINT `cases_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `members_ibfk_1` FOREIGN KEY (`road`) REFERENCES `roads` (`road_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
