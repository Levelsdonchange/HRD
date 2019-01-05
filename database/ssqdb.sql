-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2019 at 12:37 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ssqdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `acn_choices`
--

CREATE TABLE `acn_choices` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acn_choices`
--

INSERT INTO `acn_choices` (`id`, `text`) VALUES
(1, 'Diploma Community Medicine & Health'),
(2, 'Diploma General Nursing'),
(3, 'Diploma Mental Nursing'),
(4, 'Diploma Midwifery'),
(5, 'Diploma Community Health Nursing'),
(6, 'Certificate Community Health Nursing '),
(7, 'Certificate Health Assistant Clinical'),
(8, 'Certificate Optical Technology'),
(9, 'Technical Officer Community Health (Nutrition)'),
(10, 'Technical Officer Community Health (Disease Control)'),
(11, 'Technical Officer (Health Information)'),
(12, 'Technical Officer (Health Promotion)'),
(13, 'Technical Officer (Medical Laboratory Technology)'),
(14, 'Technical Officer (Dental Surgery)'),
(15, 'Technical Officer (Dental Technology)'),
(16, 'Physiotherapy & Orthotics Technology'),
(17, 'Health Records Management');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `password`) VALUES
(1, 'admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `district_id` int(11) NOT NULL,
  `dname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `region_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0:Blocked, 1:Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`district_id`, `dname`, `region_id`, `status`) VALUES
(1, 'Adansi North ', 1, 1),
(2, 'Adansi South', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `fac`
--

CREATE TABLE `fac` (
  `fac_id` int(11) NOT NULL,
  `fac_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `district_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0:Blocked, 1:Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fac`
--

INSERT INTO `fac` (`fac_id`, `fac_name`, `district_id`, `status`) VALUES
(1, 'Adansi CHPS', 1, 1),
(2, 'Adansi North Health Centre', 1, 1),
(3, 'Adansi South CHPS', 2, 1),
(4, 'Adansi South Health Centre', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ghsdata`
--

CREATE TABLE `ghsdata` (
  `id` int(255) NOT NULL,
  `grade` varchar(50) NOT NULL,
  `institution` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `othername` varchar(50) NOT NULL,
  `previousname` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `postal` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mob` int(15) NOT NULL,
  `dadname` varchar(50) NOT NULL,
  `dadoccupation` varchar(50) NOT NULL,
  `momname` varchar(50) NOT NULL,
  `momoccupation` varchar(50) NOT NULL,
  `marital` varchar(15) NOT NULL,
  `nok` varchar(50) NOT NULL,
  `renok` varchar(30) NOT NULL,
  `econtact` varchar(50) NOT NULL,
  `relcontact` varchar(50) NOT NULL,
  `conaddress` int(255) NOT NULL,
  `level` varchar(50) NOT NULL,
  `nos` varchar(100) NOT NULL,
  `DOE` date NOT NULL,
  `DOC` date NOT NULL,
  `regbody` varchar(100) NOT NULL,
  `regpin` varchar(20) NOT NULL,
  `regdate` date NOT NULL,
  `disability` varchar(5) NOT NULL,
  `medcon` varchar(5) NOT NULL,
  `spemedcon` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `region_id` int(11) NOT NULL,
  `region_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0:Blocked, 1:Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`region_id`, `region_name`, `status`) VALUES
(1, 'Ashanti', 1),
(2, ' Brong Ahafo', 1),
(3, 'Central', 1),
(4, 'Eastern', 1),
(5, 'Greater Accra', 1),
(6, 'Northern', 1),
(7, 'Upper East', 1),
(8, 'Upper West', 1),
(9, 'Volta', 1),
(10, 'Western', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(50) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mob` int(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date_registered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `gender`, `email`, `mob`, `password`, `date_registered`) VALUES
('James Avoka Asamani', 'M', 'james@yahoo.com', 0, 'e10adc3949ba59abbe56e057f20f883e', '2019-01-04 09:21:59'),
('Richmond Sowah', 'M', 'ricci@ricci.com', 200220022, 'd8578edf8458ce06fbc5bb76a58c5ca4', '2019-01-04 12:39:01'),
('Richmond Sowah', 'M', 'sowahrichmond30@yahoo.com', 0, 'e10adc3949ba59abbe56e057f20f883e', '2019-01-04 05:31:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acn_choices`
--
ALTER TABLE `acn_choices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `fac`
--
ALTER TABLE `fac`
  ADD PRIMARY KEY (`fac_id`);

--
-- Indexes for table `ghsdata`
--
ALTER TABLE `ghsdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`region_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acn_choices`
--
ALTER TABLE `acn_choices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `fac`
--
ALTER TABLE `fac`
  MODIFY `fac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ghsdata`
--
ALTER TABLE `ghsdata`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `region`
--
ALTER TABLE `region`
  MODIFY `region_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
