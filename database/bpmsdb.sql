-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2023 at 08:15 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bpmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` char(50) DEFAULT NULL,
  `UserName` char(50) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'Admin', 'admin', 7898799798, 'tester1@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2022-05-25 06:21:50');

-- --------------------------------------------------------

--
-- Table structure for table `tblbook`
--

CREATE TABLE `tblbook` (
  `ID` int(10) NOT NULL,
  `UserID` int(10) DEFAULT NULL,
  `AptNumber` int(10) DEFAULT NULL,
  `AptDate` date DEFAULT NULL,
  `AptTime` time DEFAULT NULL,
  `Message` mediumtext DEFAULT NULL,
  `BookingDate` timestamp NULL DEFAULT current_timestamp(),
  `Remark` varchar(250) DEFAULT NULL,
  `Status` varchar(250) DEFAULT NULL,
  `RemarkDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `Servicename` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbook`
--

INSERT INTO `tblbook` (`ID`, `UserID`, `AptNumber`, `AptDate`, `AptTime`, `Message`, `BookingDate`, `Remark`, `Status`, `RemarkDate`, `Servicename`) VALUES
(23, 12, 645894082, '2023-07-30', '12:14:00', 'Hello', '2023-07-29 19:12:25', NULL, NULL, NULL, 'Eyebrow Threading'),
(24, 12, 458206935, '2023-07-30', '12:25:00', 'Hello', '2023-07-29 19:21:04', NULL, NULL, NULL, 'Chin Threading'),
(25, 12, 149454361, '2023-07-30', '12:25:00', 'Hello', '2023-07-29 19:21:06', NULL, NULL, NULL, 'Chin Threading'),
(26, 12, 460679326, '2023-07-30', '12:25:00', 'Hello', '2023-07-29 19:21:08', NULL, NULL, NULL, 'Chin Threading'),
(27, 12, 433064933, '2023-07-30', '12:25:00', 'Hello', '2023-07-29 19:21:10', NULL, NULL, NULL, 'Chin Threading'),
(28, 12, 240167337, '2023-07-30', '12:25:00', 'Hello', '2023-07-29 19:21:12', NULL, NULL, NULL, 'Chin Threading'),
(29, 12, 528266942, '2023-07-30', '12:25:00', 'Hello', '2023-07-29 19:21:14', NULL, NULL, NULL, 'Chin Threading'),
(30, 12, 305811029, '2023-07-30', '12:25:00', 'Hello', '2023-07-29 19:21:16', NULL, NULL, NULL, 'Chin Threading'),
(31, 12, 589942068, '2023-07-30', '12:25:00', 'Hello', '2023-07-29 19:21:18', NULL, NULL, NULL, 'Chin Threading'),
(32, 12, 512094589, '2023-07-30', '12:25:00', 'Hello', '2023-07-29 19:21:20', NULL, NULL, NULL, 'Chin Threading'),
(33, 12, 501650489, '2023-07-30', '12:25:00', 'Hello', '2023-07-29 19:21:22', NULL, NULL, NULL, 'Chin Threading'),
(34, 12, 931502529, '2023-07-30', '12:25:00', 'Hello', '2023-07-29 19:21:24', NULL, NULL, NULL, 'Chin Threading'),
(35, 12, 421200224, '2023-07-30', '12:25:00', 'Hello', '2023-07-29 19:21:26', NULL, NULL, NULL, 'Chin Threading'),
(36, 12, 675850382, '2023-07-30', '12:25:00', 'Hello', '2023-07-29 19:21:28', NULL, NULL, NULL, 'Chin Threading'),
(37, 12, 641760488, '2023-07-30', '12:25:00', 'Hello', '2023-07-29 19:21:30', NULL, NULL, NULL, 'Chin Threading'),
(38, 12, 359579127, '2023-07-30', '12:25:00', 'Hello', '2023-07-29 19:21:32', NULL, NULL, NULL, 'Chin Threading'),
(39, 12, 645391099, '2023-07-30', '12:25:00', 'Hello', '2023-07-29 19:21:35', NULL, NULL, NULL, 'Chin Threading'),
(40, 12, 558609868, '2023-07-30', '12:25:00', 'Hello', '2023-07-29 19:21:37', NULL, NULL, NULL, 'Chin Threading'),
(41, 12, 600823712, '2023-07-30', '12:25:00', 'Hello', '2023-07-29 19:21:39', NULL, NULL, NULL, 'Chin Threading'),
(42, 12, 289823908, '2023-07-30', '12:25:00', 'Hello', '2023-07-29 19:21:41', NULL, NULL, NULL, 'Chin Threading'),
(43, 12, 798860348, '2023-07-30', '18:22:00', 'hhhhhh', '2023-07-29 19:22:22', NULL, NULL, NULL, 'Chin Threading'),
(44, 12, 617160388, '2023-07-31', '12:30:00', 'helllo', '2023-07-29 19:26:00', NULL, NULL, NULL, 'Eyebrow Threading'),
(45, 12, 145499328, '2023-07-30', '12:33:00', 'hhhhhhh', '2023-07-29 19:27:18', NULL, NULL, NULL, 'Chin Threading');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontact`
--

CREATE TABLE `tblcontact` (
  `ID` int(10) NOT NULL,
  `FirstName` varchar(200) DEFAULT NULL,
  `LastName` varchar(200) DEFAULT NULL,
  `Phone` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Message` mediumtext DEFAULT NULL,
  `EnquiryDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `IsRead` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblinvoice`
--

CREATE TABLE `tblinvoice` (
  `id` int(11) NOT NULL,
  `Userid` int(11) DEFAULT NULL,
  `ServiceId` int(11) DEFAULT NULL,
  `BillingId` int(11) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblinvoice`
--

INSERT INTO `tblinvoice` (`id`, `Userid`, `ServiceId`, `BillingId`, `PostingDate`) VALUES
(20, 12, 1, 874349451, '2023-07-29 18:47:35');

-- --------------------------------------------------------

--
-- Table structure for table `tblpage`
--

CREATE TABLE `tblpage` (
  `ID` int(10) NOT NULL,
  `PageType` varchar(200) DEFAULT NULL,
  `PageTitle` mediumtext DEFAULT NULL,
  `PageDescription` mediumtext DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` varchar(255) DEFAULT NULL,
  `UpdationDate` date DEFAULT NULL,
  `Timing` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpage`
--

INSERT INTO `tblpage` (`ID`, `PageType`, `PageTitle`, `PageDescription`, `Email`, `MobileNumber`, `UpdationDate`, `Timing`) VALUES
(1, 'aboutus', 'About Us', 'At Sandy’s Threading, we pride ourselves on providing exceptional threading services and henna tattoo art services. With years of experience in the industry, our threading specialists and henna tattoo artist are dedicated to delivering flawless results every time. We prioritize your comfort and satisfaction, ensuring a gentle and efficient threading experience. Trust our team to enhance your features and leave you feeling confident and beautiful.\n', NULL, NULL, NULL, ''),
(2, 'contactus', 'Contact Us', '1548 Orange ST. Redlands,CA,92374', 'sandythreadingredlands@gmail.com', '(909)712-2101', NULL, 'Mon-sat(10:00 am-7:00Pm)     sunday(10:00am-5:00pm)   ');

-- --------------------------------------------------------

--
-- Table structure for table `tblservices`
--

CREATE TABLE `tblservices` (
  `ID` int(10) NOT NULL,
  `ServiceName` varchar(500) DEFAULT NULL,
  `ServiceDescription` mediumtext DEFAULT NULL,
  `Cost` int(10) DEFAULT NULL,
  `Image` varchar(200) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblservices`
--

INSERT INTO `tblservices` (`ID`, `ServiceName`, `ServiceDescription`, `Cost`, `Image`, `CreationDate`) VALUES
(1, 'Eyebrow Threading', 'A piece of thread is taken and twisted on itself as it\'s glided along the brow to shape it.', 7, '92cf80f90e1acd0c1888fac7f51b57591690251127.jpg', '2022-05-24 22:37:38'),
(2, 'Upper Lip Threading', 'This nonsurgical procedure uses small dissolvable threads to smooth out fine lines around your mouth and boost collagen production.', 6, 'fb57b414b6152f6d1c2c9cf354c41d651690251784.png', '2022-05-24 22:37:53'),
(3, 'Chin Threading', 'In threading, a thin cotton or polyester thread is doubled, then twisted. It is then rolled over areas of unwanted hair, plucking the hair at the follicle level.', 5, '43174697ce002d5c185df6d0b1b9496b1690252141.jpg', '2022-05-24 22:37:10');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `ID` int(10) NOT NULL,
  `FirstName` varchar(120) DEFAULT NULL,
  `LastName` varchar(250) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`ID`, `FirstName`, `LastName`, `MobileNumber`, `Email`, `Password`, `RegDate`) VALUES
(12, 'naresh', 'upadhyay', 9868474210, 'nareshupadhayay74@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2023-07-10 21:15:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblbook`
--
ALTER TABLE `tblbook`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcontact`
--
ALTER TABLE `tblcontact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblinvoice`
--
ALTER TABLE `tblinvoice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `tblpage`
--
ALTER TABLE `tblpage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblservices`
--
ALTER TABLE `tblservices`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblbook`
--
ALTER TABLE `tblbook`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `tblcontact`
--
ALTER TABLE `tblcontact`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblinvoice`
--
ALTER TABLE `tblinvoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tblpage`
--
ALTER TABLE `tblpage`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblservices`
--
ALTER TABLE `tblservices`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
