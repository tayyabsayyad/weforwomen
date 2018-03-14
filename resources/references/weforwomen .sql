-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2018 at 05:48 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weforwomen`
--

-- --------------------------------------------------------

--
-- Table structure for table `campaignsupporter`
--

CREATE TABLE `campaignsupporter` (
  `cs_id` int(50) NOT NULL,
  `fk_r_id` int(50) NOT NULL,
  `cs_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `d_id` int(50) NOT NULL,
  `fk_s_id` int(50) NOT NULL,
  `fk_r_id` int(50) NOT NULL,
  `amount` int(50) NOT NULL,
  `timestamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `getjob`
--

CREATE TABLE `getjob` (
  `g_id` int(50) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `cur_location` varchar(50) NOT NULL,
  `mobile` bigint(50) NOT NULL,
  `experience` varchar(50) NOT NULL,
  `skills` varchar(50) NOT NULL,
  `function` varchar(50) NOT NULL,
  `get_timestamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `fk_r_id` int(50) NOT NULL,
  `fk_p_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `investment`
--

CREATE TABLE `investment` (
  `i_id` int(50) NOT NULL,
  `fk_s_id` int(50) NOT NULL,
  `fk_r_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `job_application`
--

CREATE TABLE `job_application` (
  `app_id` int(50) NOT NULL,
  `fk_r_id` int(50) NOT NULL,
  `fk_p_id` int(50) NOT NULL,
  `app_timestamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `resume_dir` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_application`
--

INSERT INTO `job_application` (`app_id`, `fk_r_id`, `fk_p_id`, `app_timestamp`, `resume_dir`) VALUES
(100000, 1, 10009, '2018-03-12 07:07:34.131968', 'uploads/undertaking.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `needsupport`
--

CREATE TABLE `needsupport` (
  `s_id` int(50) NOT NULL,
  `type_of_help` varchar(50) NOT NULL,
  `duration` int(50) NOT NULL,
  `amount` int(50) NOT NULL,
  `support_desc` varchar(255) NOT NULL,
  `category` varchar(50) NOT NULL,
  `no_of_volunteer` int(50) NOT NULL,
  `fk_r_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `postjob`
--

CREATE TABLE `postjob` (
  `p_id` int(50) NOT NULL,
  `job_title` varchar(50) NOT NULL,
  `organisation` varchar(255) NOT NULL,
  `job_field` varchar(50) NOT NULL,
  `job_desc` varchar(255) NOT NULL,
  `job_location` varchar(50) NOT NULL,
  `job_skills` varchar(50) NOT NULL,
  `experience` varchar(50) NOT NULL,
  `budget` varchar(255) NOT NULL,
  `payment_type` varchar(50) NOT NULL,
  `job_duration` int(50) NOT NULL,
  `post_timestamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `fk_r_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postjob`
--

INSERT INTO `postjob` (`p_id`, `job_title`, `organisation`, `job_field`, `job_desc`, `job_location`, `job_skills`, `experience`, `budget`, `payment_type`, `job_duration`, `post_timestamp`, `fk_r_id`) VALUES
(10009, 'build software', 'Yatra pvt', 'Computer Operator', 'abcd', 'Mumbai', 'c,html', 'Fresher', 'Micro Project (â‚¹600 - 1500 INR)', 'male', 4, '2018-03-12 05:09:29.955289', 1),
(10010, 'web development', 'stacktutorials', 'Receptionist', 'Ek sahi website bana', 'Chennai', 'html, css, javascript', 'Fresher', 'Micro Project (â‚¹600 - 1500 INR)', 'male', 5, '2018-03-12 05:17:20.729140', 1),
(10011, 'Software Engineer', 'renita pvt ltd', 'Computer Operator', 'ek project bana de acha waala free me', 'Bangluru', 'c, html', '1', 'Medium project (â‚¹75000 - 150000 INR)', 'male', 5, '2018-03-12 05:50:42.912305', 1),
(10012, 'build me a software', 'Yatra pvt', 'Computer Operator', 'ek mast software bana kde', 'Mumbai', 'html', 'Fresher', 'Micro Project (â‚¹600 - 1500 INR)', 'male', 5, '2018-03-12 06:56:11.255517', 1);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `r_id` int(50) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_no` bigint(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`r_id`, `f_name`, `l_name`, `country`, `gender`, `location`, `email`, `mobile_no`, `password`) VALUES
(1, 'gyan', 'maurya', 'india', 'male', 'mumbai', 'gyan@gmail.com', 8898, '123'),
(2, 'kevin', 'lobo', 'india', 'male', 'mumbai', 'kevin@gmail.com', 1111, '123');

-- --------------------------------------------------------

--
-- Table structure for table `startcampaign`
--

CREATE TABLE `startcampaign` (
  `c_id` int(50) NOT NULL,
  `fk_r_id` int(50) NOT NULL,
  `org_name` varchar(50) NOT NULL,
  `org_website` varchar(50) NOT NULL,
  `social_link` varchar(50) NOT NULL,
  `camp_desc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `v_id` int(50) NOT NULL,
  `fk_s_id` int(50) NOT NULL,
  `time_span` int(50) NOT NULL,
  `location` int(50) NOT NULL,
  `fk_r_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `campaignsupporter`
--
ALTER TABLE `campaignsupporter`
  ADD PRIMARY KEY (`cs_id`),
  ADD KEY `fk_r_id` (`fk_r_id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`d_id`),
  ADD KEY `donation_ibfk_1` (`fk_s_id`),
  ADD KEY `donation_ibfk_2` (`fk_r_id`);

--
-- Indexes for table `getjob`
--
ALTER TABLE `getjob`
  ADD PRIMARY KEY (`g_id`),
  ADD KEY `fk_r_id` (`fk_r_id`),
  ADD KEY `fk_p_id` (`fk_p_id`);

--
-- Indexes for table `investment`
--
ALTER TABLE `investment`
  ADD PRIMARY KEY (`i_id`),
  ADD KEY `fk_s_id` (`fk_s_id`),
  ADD KEY `fk_r_id` (`fk_r_id`);

--
-- Indexes for table `job_application`
--
ALTER TABLE `job_application`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `needsupport`
--
ALTER TABLE `needsupport`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `fk_r_id` (`fk_r_id`);

--
-- Indexes for table `postjob`
--
ALTER TABLE `postjob`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `fk_r_id` (`fk_r_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`r_id`),
  ADD UNIQUE KEY `mobile_no` (`mobile_no`);

--
-- Indexes for table `startcampaign`
--
ALTER TABLE `startcampaign`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `fk_r_id` (`fk_r_id`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`v_id`),
  ADD KEY `fk_s_id` (`fk_s_id`),
  ADD KEY `fk_r_id` (`fk_r_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `campaignsupporter`
--
ALTER TABLE `campaignsupporter`
  MODIFY `cs_id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `d_id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `getjob`
--
ALTER TABLE `getjob`
  MODIFY `g_id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `investment`
--
ALTER TABLE `investment`
  MODIFY `i_id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `job_application`
--
ALTER TABLE `job_application`
  MODIFY `app_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100001;
--
-- AUTO_INCREMENT for table `needsupport`
--
ALTER TABLE `needsupport`
  MODIFY `s_id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `postjob`
--
ALTER TABLE `postjob`
  MODIFY `p_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10013;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `r_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `startcampaign`
--
ALTER TABLE `startcampaign`
  MODIFY `c_id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `v_id` int(50) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `campaignsupporter`
--
ALTER TABLE `campaignsupporter`
  ADD CONSTRAINT `campaignsupporter_ibfk_1` FOREIGN KEY (`fk_r_id`) REFERENCES `register` (`r_id`);

--
-- Constraints for table `donation`
--
ALTER TABLE `donation`
  ADD CONSTRAINT `donation_ibfk_1` FOREIGN KEY (`fk_s_id`) REFERENCES `needsupport` (`s_id`),
  ADD CONSTRAINT `donation_ibfk_2` FOREIGN KEY (`fk_r_id`) REFERENCES `register` (`r_id`);

--
-- Constraints for table `getjob`
--
ALTER TABLE `getjob`
  ADD CONSTRAINT `getjob_ibfk_1` FOREIGN KEY (`fk_r_id`) REFERENCES `register` (`r_id`),
  ADD CONSTRAINT `getjob_ibfk_2` FOREIGN KEY (`fk_p_id`) REFERENCES `postjob` (`p_id`);

--
-- Constraints for table `investment`
--
ALTER TABLE `investment`
  ADD CONSTRAINT `investment_ibfk_1` FOREIGN KEY (`fk_s_id`) REFERENCES `needsupport` (`s_id`),
  ADD CONSTRAINT `investment_ibfk_2` FOREIGN KEY (`fk_r_id`) REFERENCES `register` (`r_id`);

--
-- Constraints for table `needsupport`
--
ALTER TABLE `needsupport`
  ADD CONSTRAINT `needsupport_ibfk_1` FOREIGN KEY (`fk_r_id`) REFERENCES `register` (`r_id`);

--
-- Constraints for table `postjob`
--
ALTER TABLE `postjob`
  ADD CONSTRAINT `postjob_ibfk_1` FOREIGN KEY (`fk_r_id`) REFERENCES `register` (`r_id`);

--
-- Constraints for table `startcampaign`
--
ALTER TABLE `startcampaign`
  ADD CONSTRAINT `startcampaign_ibfk_1` FOREIGN KEY (`fk_r_id`) REFERENCES `register` (`r_id`);

--
-- Constraints for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD CONSTRAINT `volunteer_ibfk_1` FOREIGN KEY (`fk_s_id`) REFERENCES `needsupport` (`s_id`),
  ADD CONSTRAINT `volunteer_ibfk_2` FOREIGN KEY (`fk_r_id`) REFERENCES `register` (`r_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
