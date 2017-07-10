-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2017 at 03:42 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gec`
--
CREATE DATABASE IF NOT EXISTS `gec` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `gec`;

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `bid` int(5) NOT NULL,
  `bname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`bid`, `bname`) VALUES
(1, 'Computer Science And Engineering'),
(2, 'Mechanical Engineering'),
(3, 'Civil Engineering'),
(4, 'Electricals And Electronics Engineering'),
(5, 'Electronics And Telecommunication');

-- --------------------------------------------------------

--
-- Table structure for table `codeclub`
--

CREATE TABLE `codeclub` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `work` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `github` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `number` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `codeclub`
--

INSERT INTO `codeclub` (`id`, `name`, `work`, `email`, `linkedin`, `facebook`, `github`, `photo`, `number`) VALUES
(1, 'Vikash Banjare', 'Backend Developer', 'https://plus.google.com/u/0/107478839101833446914', 'https://www.linkedin.com/in/vikash-banjare-22a745138/', 'https://en-gb.facebook.com/people/Vikash-Banjare/100012619001288', 'https://github.com/Vikash59', '', ''),
(2, 'Manmohan Chandrawanshi', 'Backend Developer', 'manmohan.chandrawanshi', '', 'https://www.facebook.com/manmohansingh.chandrawanshi?sw_fnr_id=836560114&fnr_t=0', '', '', ''),
(3, 'akkd', 'kl;sdk', 'v@g.c', 'alj', 'lakj', 'ajkls', '1.jpg', '7778878778'),
(4, '', '', '', '', '', '', 'av1.png', ''),
(5, 'akkd', 'kl;sdk', 'v@g.c', 'alj', 'lakj', 'ajkls', '1.jpg', '7778878778');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` int(11) NOT NULL,
  `dept_name` text NOT NULL,
  `dept_image` varchar(100) NOT NULL,
  `is_active` enum('yes','no') NOT NULL DEFAULT 'yes',
  `added_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dept_info`
--

CREATE TABLE `dept_info` (
  `dept_info_id` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `dept_hod_name` text NOT NULL,
  `dept_hod_no` varchar(20) NOT NULL,
  `dept_hod_email` varchar(200) NOT NULL,
  `dept_strength` varchar(10) NOT NULL,
  `dept_staff` text NOT NULL,
  `is_active` enum('yes','no') NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dept_info`
--

INSERT INTO `dept_info` (`dept_info_id`, `dept_id`, `dept_hod_name`, `dept_hod_no`, `dept_hod_email`, `dept_strength`, `dept_staff`, `is_active`, `added_on`) VALUES
(1, 21, 'sdf', '9901027651', 'cnsubb', 'see', 'dsfa,adf,asfdaasdf,sadf', 'yes', '0000-00-00 00:00:00'),
(2, 4, 'dfsasubbu', 'aa', 'scnsubbuk143@gmail.com', '22', 'sddsd,subbu,vinu, abc, sdf', 'yes', '2017-02-11 16:47:08'),
(3, 5, 'ru', 'saf', 'asdf', 'sdf', 'dsf', 'yes', '0000-00-00 00:00:00'),
(4, 6, 'SDF', 'SDF', 'DSF', 'SDF', 'SDF', 'yes', '0000-00-00 00:00:00'),
(5, 7, 'sdf', 'dsaf', 'dsa', 'dsf', 'saf', 'yes', '0000-00-00 00:00:00'),
(6, 8, '', '', '', '', '', 'yes', '0000-00-00 00:00:00'),
(7, 9, 'bla ba', 'bla ', 'bla', 'bla', 'bla', 'yes', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `feedback_rate` varchar(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `feedback_title` varchar(1000) NOT NULL,
  `feedback_desc` text NOT NULL,
  `added_on` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `feedback_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `feedback_rate`, `student_id`, `feedback_title`, `feedback_desc`, `added_on`, `feedback_type`) VALUES
(1, '\".$rate.\"', 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '\".$desc.\"', '2017-06-28 04:13:57', '\".$feedback_type.\"'),
(2, 'Positive', 2147483647, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'ajdslkj            ', '2017-06-28 04:16:04', 'About Feedback Providing'),
(3, 'Positive', 2147483647, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'aldskj\r\nasdlk\r\nasdkljal\r\naslkdfjlas\r\n\r\nalsdjla\r\nsjdla\r\n            ', '2017-06-28 04:16:34', 'About Gec Express'),
(4, 'Positive', 2147483647, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum default model text,            ', '2017-06-28 04:17:10', 'About Institute'),
(5, 'Positive', 2147483647, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'jsalk\r\n            ', '2017-06-28 04:18:58', 'About Notice providing'),
(6, 'Positive', 2147483647, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that', '2017-06-28 04:19:19', 'About Notice viwing'),
(7, 'Positive', 2147483647, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'gyyyyy            ', '2017-06-28 04:38:23', 'About teaching'),
(8, 'Positive', 2147483647, 'Vikash', 'ajlj', '2017-07-07 03:21:25', 'About Code club'),
(9, 'Positive', 2147483647, 'Yo', 'lljlkfjlkjlkjl', '2017-07-07 03:22:50', 'About Gec Express');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_title`
--

CREATE TABLE `feedback_title` (
  `fid` int(50) NOT NULL,
  `ftitle` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback_title`
--

INSERT INTO `feedback_title` (`fid`, `ftitle`) VALUES
(1, 'About Gec Express'),
(2, 'About Code club'),
(3, 'About Institute'),
(4, 'About teaching'),
(5, 'About Notice providing'),
(6, 'About Notice viwing'),
(7, 'About Issue providing'),
(8, 'About Issue submiting'),
(9, 'About Issue Response'),
(10, 'About Feedback Providing'),
(11, 'About Feedback submitting'),
(12, 'About department information');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `image_id` int(11) NOT NULL,
  `source_id` int(11) NOT NULL,
  `source_type` enum('news','issue') NOT NULL,
  `image_path` varchar(500) NOT NULL,
  `is_active` enum('yes','no') NOT NULL DEFAULT 'yes',
  `added_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`image_id`, `source_id`, `source_type`, `image_path`, `is_active`, `added_on`) VALUES
(1, 1, 'news', 'asdf', 'yes', '2017-02-13 18:08:07'),
(2, 2, 'news', 'sad', 'yes', '2017-02-13 18:08:07'),
(17, 1, 'issue', '1487014079WhatsApp Image 2017-02-07 at 6.10.12 PM.jpeg', 'yes', '2017-02-13 19:27:59'),
(18, 1, 'issue', '1487014185WhatsApp Image 2017-02-07 at 6.10.12 PM.jpeg', 'yes', '2017-02-13 19:29:45');

-- --------------------------------------------------------

--
-- Table structure for table `issues`
--

CREATE TABLE `issues` (
  `issue_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `issue_title` varchar(300) NOT NULL,
  `issue_desc` longtext NOT NULL,
  `issue_status` enum('resolved','unresolved','in_progress') NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `related_photo` varchar(200) NOT NULL,
  `product_detail` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issues`
--

INSERT INTO `issues` (`issue_id`, `student_id`, `issue_title`, `issue_desc`, `issue_status`, `added_on`, `related_photo`, `product_detail`) VALUES
(1, 2147483647, 'Who do we Do??', '    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or\r\n    ', '', '2017-06-28 04:34:10', '1.jpg', 'lj'),
(2, 2147483647, '', '                    ', '', '2017-06-28 04:34:38', '', ''),
(3, 2147483647, 'jadslkja', 'ask\r\nlakjsd                ', '', '2017-06-28 04:35:49', '6.jpg', ''),
(4, 2147483647, 'jadslkja', 'ask\r\nlakjsd                ', '', '2017-06-28 04:36:18', '6.jpg', ''),
(5, 2147483647, 'jadslkja', 'ask\r\nlakjsd                ', '', '2017-06-28 04:36:54', '6.jpg', ''),
(6, 2147483647, 'jjjj', '               gh     ', '', '2017-06-28 04:41:16', '2.jpg', 'jjjj'),
(7, 2147483647, 'aa', '            kkkkkk        ', '', '2017-06-28 04:41:35', '2.jpg', 'hhhh'),
(8, 2147483647, 'ddfsjj', 'kjljlaj                ', '', '2017-06-28 04:43:02', '8.jpg', ''),
(9, 2147483647, '', '', '', '2017-07-08 18:32:07', '', ''),
(10, 2147483647, '', '', '', '2017-07-08 18:32:39', '', ''),
(11, 2147483647, '', '', '', '2017-07-08 18:34:13', '', ''),
(12, 2147483647, '', '', '', '2017-07-08 18:34:14', '', ''),
(13, 2147483647, '', '', '', '2017-07-08 18:34:19', '', ''),
(14, 2147483647, '', '', '', '2017-07-08 18:34:21', '', ''),
(15, 2147483647, '', '', '', '2017-07-08 18:34:22', '', ''),
(16, 2147483647, '', '', '', '2017-07-08 18:34:23', '', ''),
(17, 2147483647, '', '', '', '2017-07-08 18:34:23', '', ''),
(18, 2147483647, '', '', '', '2017-07-08 18:34:24', '', ''),
(19, 2147483647, '', '', '', '2017-07-08 18:34:24', '', ''),
(20, 2147483647, '', '', '', '2017-07-08 18:34:25', '', ''),
(21, 2147483647, '', '', '', '2017-07-08 18:34:25', '', ''),
(22, 2147483647, '', '', '', '2017-07-08 18:34:25', '', ''),
(23, 2147483647, '', '', '', '2017-07-08 18:34:25', '', ''),
(24, 2147483647, '', '', '', '2017-07-08 18:34:27', '', ''),
(25, 2147483647, '', '', '', '2017-07-08 18:34:37', '', ''),
(26, 2147483647, '', '', '', '2017-07-08 18:34:39', '', ''),
(27, 2147483647, '', '', '', '2017-07-08 18:35:25', '', ''),
(28, 2147483647, 'Viksh', 'kjsjldakljfasl', '', '2017-07-08 18:35:42', '', 'ajskld'),
(29, 2147483647, 'adsfas', 'asdfasdas', '', '2017-07-08 18:36:06', '', 'asdfasf'),
(30, 2147483647, '55445446', '644646546', '', '2017-07-08 18:37:20', '', '665454'),
(31, 2147483647, 'khkhkj', 'kjhkjhk', '', '2017-07-10 01:38:54', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `dept_name` varchar(50) NOT NULL,
  `news_title` varchar(300) NOT NULL,
  `news_desc` varchar(5000) NOT NULL,
  `related_photo` varchar(300) NOT NULL,
  `creater_id` varchar(100) NOT NULL,
  `is_active` enum('yes','no') NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `dept_name`, `news_title`, `news_desc`, `related_photo`, `creater_id`, `is_active`, `added_on`, `last_date`) VALUES
(1, 'Computer Science And Engineering', 'Sed ut perspiciatis unde omnis iste natus error', 'whats p', '3.jpg', '11', 'yes', '2017-07-09 13:58:54', '2017-07-18'),
(2, 'Computer Science And Engineering', 'Sed ut perspiciatis unde omnis iste natus error', 'dsaf', '1.jpg', '11', 'yes', '2017-07-09 13:58:59', '2017-07-18'),
(3, '7', 'Sed ut perspiciatis unde omnis iste natus error', 'dsf', 'dsf', '11', 'yes', '2017-07-05 03:14:26', '0000-00-00'),
(4, '7', 'Sed ut perspiciatis unde omnis iste natus error', 'fdsasdsad', 'werewq', '11', 'yes', '2017-07-05 03:14:30', '0000-00-00'),
(5, '7', 'Sed ut perspiciatis unde omnis iste natus error', 'fdsasdsad', 'werewq', '11', 'yes', '2017-07-05 03:14:34', '0000-00-00'),
(6, '7', 'Sed ut perspiciatis unde omnis iste natus error', 'dsf', 'dsaf', '11', 'yes', '2017-07-05 03:14:37', '0000-00-00'),
(7, '6', 'Sed ut perspiciatis unde omnis iste natus error', 'dsfdsfas', 'dsafa', '1', 'yes', '2017-07-05 03:14:40', '0000-00-00'),
(8, '9', 'Sed ut perspiciatis unde omnis iste natus error', 'qdff', 'dfs', '1', 'yes', '2017-07-05 03:14:44', '0000-00-00'),
(9, '7', 'Sed ut perspiciatis unde omnis iste natus error', 'description', 'url', '1', 'yes', '2017-07-05 03:14:53', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `news_type`
--

CREATE TABLE `news_type` (
  `nid` int(10) NOT NULL,
  `ntype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_type`
--

INSERT INTO `news_type` (`nid`, `ntype`) VALUES
(1, 'For Function'),
(2, 'For Exam'),
(3, 'For Training and Placement'),
(4, 'For Scholoarship'),
(5, 'For Addmission');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `id` int(10) NOT NULL,
  `semester` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`id`, `semester`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `roll_no` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `verification_no` varchar(5) NOT NULL,
  `dept_id` varchar(5) NOT NULL,
  `device_id` varchar(20) NOT NULL,
  `gcm_id` varchar(20) NOT NULL,
  `device_type` varchar(20) NOT NULL,
  `device_version` varchar(10) NOT NULL,
  `app_version` varchar(10) NOT NULL,
  `is_active` enum('yes','no') NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `suggestion`
--

CREATE TABLE `suggestion` (
  `suggetion_id` int(150) NOT NULL,
  `student_id` varchar(15) NOT NULL,
  `suggetion_title` varchar(100) NOT NULL,
  `suggetion_desc` text NOT NULL,
  `added_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suggestion`
--

INSERT INTO `suggestion` (`suggetion_id`, `student_id`, `suggetion_title`, `suggetion_desc`, `added_on`) VALUES
(1, '3162214024', 'Wow', '    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or                ', '2017-06-28'),
(2, '3162214024', 'ni', 'hhhhhh\r\n                ', '2017-06-28'),
(3, '3162214059', '', '', '2017-07-07'),
(4, '3162214059', 'vikash', 'kdfkljdskljfkasldjfldsjfjklsdjfldjkfjslk;djfl;ajldjslfjasl', '2017-07-07');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `user_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `user_pass` varchar(100) NOT NULL,
  `user_type` enum('admin','content_manager','student') NOT NULL,
  `is_active` enum('yes','no') NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`user_id`, `student_id`, `user_name`, `user_pass`, `user_type`, `is_active`, `added_on`) VALUES
(1, 0, 'admin', 'E10ADC3949BA59ABBE56E057F20F883E', 'admin', 'yes', '2017-02-10 18:30:00'),
(2, 0, 'subbu', 'adsf', 'content_manager', 'yes', '2017-02-11 20:13:47'),
(10, 1, '1111', 'c4ca4238a0b923820dcc509a6f75849b', 'student', 'yes', '2017-02-12 10:01:19');

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `fathername` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `mobileno` int(15) NOT NULL,
  `address` text NOT NULL,
  `rollno` varchar(12) NOT NULL,
  `enrollment` varchar(10) NOT NULL,
  `semester` int(2) NOT NULL,
  `branch` varchar(40) NOT NULL,
  `achive` text NOT NULL,
  `photo` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`id`, `fname`, `lname`, `fathername`, `dob`, `gender`, `emailid`, `mobileno`, `address`, `rollno`, `enrollment`, `semester`, `branch`, `achive`, `photo`, `password`) VALUES
(1, 'Vikash', 'Banjare', 'J.R.', '1997-12-01', 'Male', 'vikashbanjare01@gmail.com', 2147483647, '                                    Kumhari', '3162214059', 'AP0938', 7, 'Computer Science And Engineering', '                                    asdf', 'unnamed.png', '01021997'),
(2, 'man', '', '', '0000-00-00', '', 'manmohan.chandrawanshi@gmail.c', 0, '', '1', '', 0, '', '', '', '1'),
(3, 'man', '', '', '0000-00-00', '', 'manmohan.chandrawanshi@gmail.c', 0, '', '1', '', 0, '', '', '', '1'),
(4, 'man', '', '', '0000-00-00', '', 'manmohan.chandrawanshi@gmail.c', 0, '', '1', '', 0, '', '', '', '1'),
(5, 'Vikash', 'Banjare', 'J.R.', '1997-12-01', 'Male', 'vikashbanjare01@gmail.com', 2147483647, '                                    Kumhari', '3162214059', 'AP0938', 7, 'Computer Science And Engineering', '                                    asdf', 'unnamed.png', '01021997'),
(6, 'Vikshd', '', 'j', '1997-02-10', 'Male', 'V@g.com', 8085, 'df                                    ', '312', '5', 5, 'Computer Science And Engineering', '45                                    ', 'colorful_sunset_sky_and_tree-wide.jpg', '21'),
(7, '', '', '', '0000-00-00', 'Male', '', 0, '                                    ', '', '', 0, '', '                                    ', '<br />\r\n<b>Notice</b>:  Undefined variable: imagename in <b>C:xampphtdocsGec_XpressProfile_page.php<', ''),
(8, 'Praveen', '', '', '0000-00-00', 'Male', 'vikashbanjare01@gmail.com', 0, '                                    ', '3162214036', '', 0, '', '                                    ', '<br />\r\n<b>Notice</b>:  Undefined variable: imagename in <b>C:xampphtdocsGec_XpressProfile_page.php<', '01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `codeclub`
--
ALTER TABLE `codeclub`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `dept_info`
--
ALTER TABLE `dept_info`
  ADD PRIMARY KEY (`dept_info_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `feedback_title`
--
ALTER TABLE `feedback_title`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `issues`
--
ALTER TABLE `issues`
  ADD PRIMARY KEY (`issue_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `news_type`
--
ALTER TABLE `news_type`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `suggestion`
--
ALTER TABLE `suggestion`
  ADD PRIMARY KEY (`suggetion_id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `bid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `codeclub`
--
ALTER TABLE `codeclub`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dept_info`
--
ALTER TABLE `dept_info`
  MODIFY `dept_info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `feedback_title`
--
ALTER TABLE `feedback_title`
  MODIFY `fid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `issues`
--
ALTER TABLE `issues`
  MODIFY `issue_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `news_type`
--
ALTER TABLE `news_type`
  MODIFY `nid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `suggestion`
--
ALTER TABLE `suggestion`
  MODIFY `suggetion_id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
