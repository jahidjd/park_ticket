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
(4, '??????????????? ??????????????? ??????????????????????????????'),
(5, '???????????????????????? ??????????????????????????????'),
(6, '?????????????????? ??????????????????????????????'),
(7, '???????????????  ???????????? ?????????'),
(8, '???????????????  ????????????????????? ????????? '),
(9, '??????????????? ????????????????????? ?????????????????????'),
(10, '??????????????? ???????????? ?????????????????? ?????????????????????'),
(11, '??????????????? ??????????????? ??????????????? ????????? ?????????????????????'),
(12, '??????????????? ???????????? ?????????????????? ?????????'),
(13, '??????????????? ????????????????????? ?????????-?????????????????????'),
(14, '??????????????? ?????????????????????????????? ?????????-?????????????????????'),
(15, '??????????????? ????????????????????? ?????????-?????????????????????'),
(16, '??????????????? ??????????????????????????? ?????????????????????'),
(17, '??????????????? ??????????????????????????? ????????? '),
(18, '??????????????? ???????????????????????? ?????????-?????????????????????'),
(19, '??????????????????????????? ??????????????????????????????'),
(20, '??????????????????????????? ??????????????????????????????'),
(21, '???????????????????????? ??????????????????????????????'),
(22, '?????????????????? ??????????????? ??????????????????????????????'),
(23, '?????????????????? ??????????????????????????????'),
(24, '?????????????????? ??????????????????????????????'),
(25, '????????????????????????????????? ??????????????????????????????'),
(26, '???????????????????????? ?????????????????? ??????????????????????????????'),
(27, '?????????????????????????????? ??????????????????????????????'),
(28, '??????????????????????????? ?????????????????????????????? '),
(29, '???????????? ?????????????????? ??????????????????????????????'),
(30, '???????????????????????? ???????????????????????? ??????????????????????????????'),
(31, '??????????????? ??????????????????????????????'),
(32, '?????????????????? ??????????????????????????????'),
(33, '???????????????????????? ??????????????????????????????'),
(34, '????????????????????? ??????????????????????????????'),
(35, '???????????????????????? ??????????????? ??????????????????????????????'),
(36, '???????????????????????? ?????????????????????????????? (???)'),
(37, '???????????????????????? ?????????????????????????????? (???)'),
(38, '?????????????????? ???????????????????????? ??????????????????????????????'),
(39, '??????????????? ???????????????????????? ??????????????????????????????'),
(40, '?????????????????????????????? ??????????????????????????????'),
(41, '?????????????????? ????????????????????? ??????????????????????????????'),
(42, '???????????????????????? ??????????????????????????????'),
(43, '????????????????????????????????? ??????????????????????????????'),
(44, '?????????????????? ??????????????????????????????'),
(45, '????????????????????? ??????????????????????????????'),
(46, '???????????????????????? ??????????????????????????????'),
(47, '??????????????? ??????????????? ??????????????????????????????'),
(48, '???????????? ?????????????????? ?????????????????????????????????'),
(49, '???????????????????????? ??????????????????????????????'),
(50, '?????????????????????????????? ??????????????????????????????'),
(51, '?????????????????? ?????????????????????????????? ??????????????????????????????'),
(52, '?????????????????? ??????????????? ??????????????????????????????'),
(53, '???????????? ???????????????????????? ??????????????????????????????'),
(54, '???????????????????????? ??????????????????????????????'),
(55, '????????????????????????????????? ??????????????????????????????'),
(56, '???????????? ???????????? ??????????????????????????????'),
(57, '???????????????????????? ??????????????????????????????'),
(58, '?????????????????????????????? ??????????????????????????????'),
(59, '???????????? ???????????? ??????????????? (??????) ??????????????????????????????'),
(60, '??????????????? ????????????????????? ??????????????????????????????'),
(61, '?????????????????? ??????????????????????????????'),
(62, '??????????????????????????? ??????????????????????????????'),
(63, '????????? ???????????? ??????????????????????????????'),
(64, '??????????????? ??????????????? ??????????????????????????????'),
(65, '??????????????? ??????????????? ??????????????????????????????'),
(66, '?????????????????? ??????????????? ??????????????????????????????'),
(67, '??????????????????????????? ????????? ??????????????????????????????'),
(68, '????????????????????? ??????????????????????????????'),
(69, '???????????????????????? ??????????????????????????????'),
(70, '?????????????????????????????? ??????????????????????????????'),
(71, '?????????????????? ???????????? ????????? ??????????????????????????????'),
(72, '????????? ????????? ??? ????????? ????????? ??????????????????????????????');

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
