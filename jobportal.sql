-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2017 at 12:58 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `a_id` int(4) NOT NULL,
  `a_uid` varchar(30) NOT NULL,
  `a_jid` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`a_id`, `a_uid`, `a_jid`) VALUES
(1, '1', '1'),
(2, '1', '3'),
(3, '1', '5'),
(4, '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(4) NOT NULL,
  `cat_nm` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_nm`) VALUES
(1, 'Import - Export'),
(2, 'It - Software'),
(3, 'It - Hardware'),
(4, 'Banking'),
(5, 'Finance');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cont_id` int(4) NOT NULL,
  `cont_fnm` varchar(30) NOT NULL,
  `cont_email` varchar(50) NOT NULL,
  `cont_query` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cont_id`, `cont_fnm`, `cont_email`, `cont_query`) VALUES
(1, 'K V Kishore Reddy', 'KishoreReddy0510@gmail.com', 'Testing for the query form'),
(2, 'Sanju Reddy', 'venkatakishore41@gmail.com', 'It would be great if you share more info about job profile with us in the email. \r\nThank You.');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `ee_id` int(4) NOT NULL,
  `ee_fnm` varchar(30) NOT NULL,
  `ee_pwd` varchar(20) NOT NULL,
  `ee_gender` varchar(6) NOT NULL,
  `ee_email` varchar(50) NOT NULL,
  `ee_add` varchar(300) NOT NULL,
  `ee_phno` varchar(10) NOT NULL,
  `ee_mobileno` varchar(10) NOT NULL,
  `ee_current_location` varchar(20) NOT NULL,
  `ee_annualsalary` varchar(10) NOT NULL,
  `ee_current_industry` varchar(50) NOT NULL,
  `ee_qualification` varchar(50) NOT NULL,
  `ee_profile` varchar(300) NOT NULL,
  `ee_resume` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`ee_id`, `ee_fnm`, `ee_pwd`, `ee_gender`, `ee_email`, `ee_add`, `ee_phno`, `ee_mobileno`, `ee_current_location`, `ee_annualsalary`, `ee_current_industry`, `ee_qualification`, `ee_profile`, `ee_resume`) VALUES
(1, 'sanju757', 'Sanju123', 'MALE', 'KishoreReddy0510@gmail.com', '26-8-309,3rd Street', '2309339', '8699363143', 'Nellore', '15000', 'Jugnoo', 'BTech', 'Simple', 'uploads/Kishore CV ( One Page ).doc'),
(2, 'kishore', 'Kishore123', 'MALE', 'venkatakishore41@gmail.com', 'Address1', '1234567', '9876541232', 'Visakhapatnam', '10000', 'TCS', 'BTech', 'NOthing', 'uploads/Kishore CV ( One Page ).doc'),
(3, 'megha', 'megha11', 'female', 'megha111@gmail.com', 'It street', '2345678', '9987587458', 'Chandigarh', '20000', 'TIVO', 'BTech', ':)', 'uploads/Kishore CV ( One Page ).doc');

-- --------------------------------------------------------

--
-- Table structure for table `employers`
--

CREATE TABLE `employers` (
  `er_id` int(4) NOT NULL,
  `er_fnm` varchar(30) NOT NULL,
  `er_pwd` varchar(20) NOT NULL,
  `er_company` varchar(50) NOT NULL,
  `er_add` varchar(300) NOT NULL,
  `er_ph` varchar(10) NOT NULL,
  `er_email` varchar(50) NOT NULL,
  `er_company_profile` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employers`
--

INSERT INTO `employers` (`er_id`, `er_fnm`, `er_pwd`, `er_company`, `er_add`, `er_ph`, `er_email`, `er_company_profile`) VALUES
(1, 'sanju757', 'Sanju123', 'TCS', 'Hyderabad', '8699363143', 'info@tcs.com', 'Its TCS'),
(2, 'jugnoo', 'jugnoo123', 'Jugnoo', 'Bangalore', '9898989898', 'info@jugnoo.com', 'We are Jugnoo'),
(3, 'cogni55', 'cogni55', 'Cognizant', 'Hyderabad', '8987862568', 'info@cognizant.com', 'Cognizants Profile'),
(4, 'zoomrx', 'zoomrx123', 'ZoomRX', 'Chennai', '7894561234', 'info@zoomrx.com', 'A Consultancy Firm');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `j_id` int(4) NOT NULL,
  `j_category` varchar(40) NOT NULL,
  `j_owner_name` varchar(30) NOT NULL,
  `j_title` varchar(50) NOT NULL,
  `j_hours` float(3,1) NOT NULL,
  `j_salary` int(10) NOT NULL,
  `j_experience` int(3) NOT NULL,
  `j_discription` varchar(300) NOT NULL,
  `j_city` varchar(20) NOT NULL,
  `j_active` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`j_id`, `j_category`, `j_owner_name`, `j_title`, `j_hours`, `j_salary`, `j_experience`, `j_discription`, `j_city`, `j_active`) VALUES
(1, 'Import - Export', 'sanju757', 'Need For The Manager', 10.0, 45000, 2, 'Should be workaholic', 'Chandigarh', 1),
(2, 'It - Software', 'sanju757', 'Need For The Manager', 8.0, 10000, 1, 'Should be workaholic', 'Hyderabad', 1),
(3, 'It - Hardware', 'sanju757', 'Need For The Manager', 10.0, 35000, 2, 'Should be workaholic', 'Phagwara', 1),
(4, 'Banking', 'sanju757', 'Need For The Manager', 8.0, 45000, 1, 'Should be workaholic', 'Vijayawada', 1),
(5, 'Finance', 'sanju757', 'Need For The Manager', 9.0, 50000, 3, 'Should be workaholic', 'Bangalore', 1),
(6, 'Import - Export', 'jugnoo', 'Need For The HR', 5.0, 20000, 2, 'Should be Workaholic', 'Jalandhar', 1),
(7, 'It - Software', 'jugnoo', 'Need For The Web Designer', 10.0, 45000, 1, 'Should be Workaholic', 'Vijayawada', 1),
(8, 'It - Hardware', 'jugnoo', 'Need For The HR', 8.0, 35000, 1, 'Should be Workaholic', 'Bangalore', 1),
(9, 'Banking', 'jugnoo', 'Need For The Manager', 8.0, 35000, 2, 'Should be Workaholic', 'Chandigarh', 1),
(10, 'Finance', 'jugnoo', 'Need For The HR', 10.0, 50000, 2, 'Should be Workaholic', 'Bangalore', 1),
(11, 'Import - Export', 'cogni55', 'Need For The Manager', 10.0, 35000, 2, 'Should be Workaholic', 'Vijayawada', 1),
(12, 'It - Software', 'cogni55', 'Need For The Manager', 10.0, 35000, 1, 'Should be Workaholic', 'Vijayawada', 1),
(13, 'It - Hardware', 'cogni55', 'Need For The HR', 9.0, 20000, 2, 'Should be Workaholic', 'Hyderabad', 1),
(14, 'Banking', 'cogni55', 'Need For The Manager', 8.0, 35000, 1, 'Should be Workaholic', 'Bangalore', 1),
(15, 'Finance', 'cogni55', 'Need For The HR', 10.0, 50000, 2, 'Should be Workaholic', 'Bangalore', 1),
(16, 'It - Software', 'zoomrx', 'Need For The Android Developer', 10.0, 50000, 1, 'Should be Workaholic', 'Bangalore', 1),
(17, 'Banking', 'zoomrx', 'Need For The Web Designer', 10.0, 45000, 2, 'Should be Workaholic', 'Bangalore', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cont_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`ee_id`);

--
-- Indexes for table `employers`
--
ALTER TABLE `employers`
  ADD PRIMARY KEY (`er_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`j_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `a_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `cont_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `ee_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `employers`
--
ALTER TABLE `employers`
  MODIFY `er_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `j_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
