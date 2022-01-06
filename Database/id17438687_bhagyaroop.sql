-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2022 at 06:05 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id17438687_bhagyaroop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bhagyaroop_signup`
--

CREATE TABLE `bhagyaroop_signup` (
  `semail` varchar(300) NOT NULL,
  `reference` varchar(300) NOT NULL,
  `detail` varchar(300) NOT NULL,
  `aboutme` blob NOT NULL,
  `fullname` text DEFAULT NULL,
  `mname` varchar(300) NOT NULL,
  `lname` varchar(300) NOT NULL,
  `date` text DEFAULT NULL,
  `mar_stat` text DEFAULT NULL,
  `height` text DEFAULT NULL,
  `weight` text DEFAULT NULL,
  `shape` text DEFAULT NULL,
  `color` text DEFAULT NULL,
  `blood` text DEFAULT NULL,
  `language` text DEFAULT NULL,
  `pass_status` varchar(300) NOT NULL,
  `pass_details` text DEFAULT NULL,
  `disable` text DEFAULT NULL,
  `detail1` varchar(300) NOT NULL,
  `medical_history` text DEFAULT NULL,
  `detail2` varchar(300) NOT NULL,
  `medium_education` text DEFAULT NULL,
  `education_level` text DEFAULT NULL,
  `detail3` varchar(300) NOT NULL,
  `education_field` text DEFAULT NULL,
  `detail4` varchar(300) NOT NULL,
  `education_university` text DEFAULT NULL,
  `add_quali` text DEFAULT NULL,
  `add_laguage` text DEFAULT NULL,
  `occ` text DEFAULT NULL,
  `detail5` varchar(300) NOT NULL,
  `work_field` text DEFAULT NULL,
  `detail6` varchar(300) NOT NULL,
  `duration` text DEFAULT NULL,
  `company_name` text DEFAULT NULL,
  `designation` text DEFAULT NULL,
  `work_country` text DEFAULT NULL,
  `income` text DEFAULT NULL,
  `bdate` varchar(300) NOT NULL,
  `btime` varchar(300) NOT NULL,
  `bplace` varchar(300) NOT NULL,
  `village` varchar(300) NOT NULL,
  `bcity` varchar(300) NOT NULL,
  `state` varchar(300) NOT NULL,
  `bcountry` varchar(300) NOT NULL,
  `caste` varchar(300) NOT NULL,
  `detail7` varchar(300) NOT NULL,
  `subcaste` varchar(300) NOT NULL,
  `bmsign` varchar(300) NOT NULL,
  `constel` varchar(300) NOT NULL,
  `charan` varchar(300) NOT NULL,
  `gotra` varchar(300) NOT NULL,
  `gan` varchar(300) NOT NULL,
  `manglik` varchar(300) NOT NULL,
  `naad` varchar(300) NOT NULL,
  `horoscope_status` varchar(300) NOT NULL,
  `diet` text DEFAULT NULL,
  `detail8` varchar(300) NOT NULL,
  `smoking` text DEFAULT NULL,
  `drink` text DEFAULT NULL,
  `spec` text DEFAULT NULL,
  `sprots` text DEFAULT NULL,
  `hobbies` text DEFAULT NULL,
  `countr` text DEFAULT NULL,
  `detail9` varchar(300) NOT NULL,
  `address` text DEFAULT NULL,
  `pincode` text DEFAULT NULL,
  `mobile` text DEFAULT NULL,
  `mmobile` text DEFAULT NULL,
  `email` varchar(300) NOT NULL,
  `memail` text DEFAULT NULL,
  `refname` text DEFAULT NULL,
  `refmobile` text DEFAULT NULL,
  `refemail` text DEFAULT NULL,
  `refrelation` text DEFAULT NULL,
  `flive` varchar(300) NOT NULL,
  `focc` varchar(300) NOT NULL,
  `fdetail` varchar(300) NOT NULL,
  `fnplace` varchar(300) NOT NULL,
  `mlive` varchar(300) NOT NULL,
  `mocc` varchar(300) NOT NULL,
  `msur` varchar(300) NOT NULL,
  `mnp` varchar(300) NOT NULL,
  `nbro` varchar(300) NOT NULL,
  `broms` varchar(300) NOT NULL,
  `nsis` varchar(300) NOT NULL,
  `sisms` varchar(300) NOT NULL,
  `aboutf` varchar(300) NOT NULL,
  `familymedhis` varchar(300) NOT NULL,
  `famildis` varchar(300) NOT NULL,
  `detail10` varchar(300) NOT NULL,
  `marital_stst` varchar(300) NOT NULL,
  `castes` text DEFAULT NULL,
  `detail11` varchar(300) NOT NULL,
  `sub_cast` text DEFAULT NULL,
  `heigh` text DEFAULT NULL,
  `weigh` text DEFAULT NULL,
  `differce_in_age` text DEFAULT NULL,
  `level` text DEFAULT NULL,
  `detail15` varchar(300) NOT NULL,
  `field` text DEFAULT NULL,
  `detail16` varchar(300) NOT NULL,
  `parner` text DEFAULT NULL,
  `occupation` text DEFAULT NULL,
  `detail12` varchar(300) NOT NULL,
  `country` text DEFAULT NULL,
  `city` text DEFAULT NULL,
  `diets` text DEFAULT NULL,
  `detail13` varchar(300) NOT NULL,
  `smoke` text DEFAULT NULL,
  `drin` text DEFAULT NULL,
  `other` text DEFAULT NULL,
  `dnd` text DEFAULT NULL,
  `detail14` varchar(300) NOT NULL,
  `rashi` varchar(100) NOT NULL,
  `gender` varchar(300) NOT NULL,
  `birth_year` varchar(300) NOT NULL,
  `payment_status` varchar(300) NOT NULL,
  `ccode1` varchar(300) NOT NULL,
  `ccode2` varchar(300) NOT NULL,
  `ccode3` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blocklist`
--

CREATE TABLE `blocklist` (
  `email` varchar(300) NOT NULL,
  `status` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hiddenitem`
--

CREATE TABLE `hiddenitem` (
  `email` varchar(300) NOT NULL,
  `status` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hiddenphoto`
--

CREATE TABLE `hiddenphoto` (
  `email` varchar(300) NOT NULL,
  `status` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `interest`
--

CREATE TABLE `interest` (
  `serial` varchar(300) NOT NULL,
  `senderemail` varchar(300) NOT NULL,
  `receiveremail` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `serial` bigint(255) NOT NULL,
  `senderemail` varchar(300) NOT NULL,
  `receiveremail` varchar(300) NOT NULL,
  `status` varchar(300) NOT NULL,
  `views` varchar(300) NOT NULL,
  `remind` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `profilepicture`
--

CREATE TABLE `profilepicture` (
  `email` varchar(300) NOT NULL,
  `profilepicture` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `updated`
--

CREATE TABLE `updated` (
  `email` varchar(300) NOT NULL,
  `CP` varchar(50) NOT NULL,
  `PN` varchar(50) NOT NULL,
  `UA` varchar(50) NOT NULL,
  `ADDR` blob NOT NULL,
  `UI` varchar(50) NOT NULL,
  `INCOME` varchar(300) NOT NULL,
  `UE` varchar(50) NOT NULL,
  `EDU` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `semail` varchar(300) NOT NULL,
  `file1` varchar(300) NOT NULL,
  `file2` varchar(300) NOT NULL,
  `file3` varchar(300) NOT NULL,
  `file4` varchar(300) NOT NULL,
  `file5` varchar(300) NOT NULL,
  `file6` varchar(300) NOT NULL,
  `file7` varchar(300) NOT NULL,
  `file8` varchar(300) NOT NULL,
  `file9` varchar(300) NOT NULL,
  `file10` varchar(300) NOT NULL,
  `file11` varchar(300) NOT NULL,
  `file12` varchar(300) NOT NULL,
  `file13` varchar(300) NOT NULL,
  `file14` varchar(300) NOT NULL,
  `file15` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `full_name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `mobile` varchar(300) NOT NULL,
  `gender` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `createDate` date DEFAULT NULL,
  `PID` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `email` varchar(300) NOT NULL,
  `type` varchar(300) NOT NULL,
  `status` varchar(300) NOT NULL,
  `payDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `verify`
--

CREATE TABLE `verify` (
  `email` varchar(300) NOT NULL,
  `file1` varchar(300) NOT NULL,
  `file2` varchar(300) NOT NULL,
  `file3` varchar(300) NOT NULL,
  `file4` varchar(300) NOT NULL,
  `file5` varchar(300) NOT NULL,
  `file6` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `wvmp`
--

CREATE TABLE `wvmp` (
  `serial` varchar(300) NOT NULL,
  `viewer` varchar(300) NOT NULL,
  `target` varchar(300) NOT NULL,
  `views` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `password` (`password`);

--
-- Indexes for table `bhagyaroop_signup`
--
ALTER TABLE `bhagyaroop_signup`
  ADD UNIQUE KEY `semail` (`semail`) USING BTREE;

--
-- Indexes for table `blocklist`
--
ALTER TABLE `blocklist`
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `hiddenitem`
--
ALTER TABLE `hiddenitem`
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `hiddenphoto`
--
ALTER TABLE `hiddenphoto`
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD UNIQUE KEY `serial_2` (`serial`),
  ADD KEY `serial` (`serial`);

--
-- Indexes for table `profilepicture`
--
ALTER TABLE `profilepicture`
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `updated`
--
ALTER TABLE `updated`
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD UNIQUE KEY `semail` (`semail`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `email` (`email`) USING BTREE;

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `verify`
--
ALTER TABLE `verify`
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
