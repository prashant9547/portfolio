-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 25, 2019 at 04:42 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resume_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about_me`
--

CREATE TABLE `tbl_about_me` (
  `id` int(11) NOT NULL,
  `myName` varchar(255) NOT NULL,
  `aboutDesc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_about_me`
--

INSERT INTO `tbl_about_me` (`id`, `myName`, `aboutDesc`) VALUES
(2, 'Prashant Radadiya', '<p>Hello, I&#39;m Professional Developer In Web Technology Such As Laravel Freamwork, Ajax, Jquery And Many More. Having Hand On Experiance 1.5 Year In Same Domain.&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `adminName` varchar(255) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `adminName`, `userName`, `password`) VALUES
(1, 'Prashant Radadiya', 'prashantradadiya7@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `id` int(11) NOT NULL,
  `blogImg` varchar(255) NOT NULL,
  `blogName` varchar(255) NOT NULL,
  `blogDesc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_edu`
--

CREATE TABLE `tbl_edu` (
  `id` int(11) NOT NULL,
  `eduName` varchar(255) NOT NULL,
  `eduStart` date NOT NULL,
  `eduEnd` date NOT NULL,
  `eduDesc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_edu`
--

INSERT INTO `tbl_edu` (`id`, `eduName`, `eduStart`, `eduEnd`, `eduDesc`) VALUES
(3, '12 (Science)', '2011-03-04', '2013-04-10', '<p><strong>I</strong>t is Turning point of my&nbsp; life beacuse of&nbsp;To decide my career regarding to choose to either&nbsp;Engineering field&nbsp;Or Medical field. and I&nbsp;Iearnt Iost of thing during my <strong>12 Science</strong> It&#39;s amazing'),
(4, 'Bachelor Of Engineering (IT) ', '2013-06-07', '2017-03-04', '<p><strong>I</strong>n My 4 Year Of Engineering Experiance in <strong>Information &amp; Technology</strong>. It&#39;s to learnt lost of&nbsp;things regarding Technology field and done major project in acedamic time and i&nbsp;happy to choose to select Eng');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_exp`
--

CREATE TABLE `tbl_exp` (
  `id` int(11) NOT NULL,
  `comName` varchar(255) NOT NULL,
  `comDeg` varchar(255) NOT NULL,
  `comStart` date NOT NULL,
  `comEnd` date NOT NULL,
  `comDesc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_exp`
--

INSERT INTO `tbl_exp` (`id`, `comName`, `comDeg`, `comStart`, `comEnd`, `comDesc`) VALUES
(1, 'PulpySoft', 'PHP Webdeveloper - Trainee', '2017-05-15', '2017-08-31', '<p><strong>A</strong>s a <strong>Trainee Developer</strong> I&#39;ve started my real career in technology world and all actual thing leant from trainee position and going to be done some demo and some website in this company and it&#39;s starting phase of'),
(2, 'Elrix Infotech', 'Jr. PHP Web Developer', '2017-08-10', '2018-12-22', '<p>After My Training phase i learnt more and i choose to decide move on Ahemdabad&nbsp;<strong>Jr. Developer</strong> position in Elrix infotech to passed 1.2 Year in PHP Laravel Developer and compelete more than project in real Industries and hand on exp'),
(3, 'Tretanz Infotech', 'Sr. Laravel Web Developer', '2019-03-01', '2019-03-01', '<p>Technology is never neutral. If your work has any impact on the world, then this impact has a moral direction. The seemingly innocuous technical choices we make in software products modulate the terms of access to technology, its usage incentives.</p>\r');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_my_detail`
--

CREATE TABLE `tbl_my_detail` (
  `id` int(11) NOT NULL,
  `logoDetail` varchar(255) NOT NULL,
  `nameDetail` varchar(255) NOT NULL,
  `myDetail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profile_pic`
--

CREATE TABLE `tbl_profile_pic` (
  `id` int(11) NOT NULL,
  `profileImg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_profile_pic`
--

INSERT INTO `tbl_profile_pic` (`id`, `profileImg`) VALUES
(2, 'IMG_20170712_193049.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_resume`
--

CREATE TABLE `tbl_resume` (
  `id` int(11) NOT NULL,
  `resume` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_resume`
--

INSERT INTO `tbl_resume` (`id`, `resume`) VALUES
(2, 'PrashantRadadiya.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_services`
--

CREATE TABLE `tbl_services` (
  `id` int(11) NOT NULL,
  `serviceName` varchar(255) NOT NULL,
  `serviceLogo` varchar(255) NOT NULL,
  `serviceDesc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_social_link`
--

CREATE TABLE `tbl_social_link` (
  `id` int(11) NOT NULL,
  `fb` varchar(255) NOT NULL,
  `gmail` varchar(255) NOT NULL,
  `lin` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `twiter` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_soft_skill`
--

CREATE TABLE `tbl_soft_skill` (
  `id` int(11) NOT NULL,
  `skillName` varchar(255) NOT NULL,
  `skillValue` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `userCell` varchar(255) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `userReq` varchar(255) NOT NULL,
  `userDesc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_about_me`
--
ALTER TABLE `tbl_about_me`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_edu`
--
ALTER TABLE `tbl_edu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_exp`
--
ALTER TABLE `tbl_exp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_my_detail`
--
ALTER TABLE `tbl_my_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_profile_pic`
--
ALTER TABLE `tbl_profile_pic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_resume`
--
ALTER TABLE `tbl_resume`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_services`
--
ALTER TABLE `tbl_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_social_link`
--
ALTER TABLE `tbl_social_link`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_soft_skill`
--
ALTER TABLE `tbl_soft_skill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_about_me`
--
ALTER TABLE `tbl_about_me`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_edu`
--
ALTER TABLE `tbl_edu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_exp`
--
ALTER TABLE `tbl_exp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_my_detail`
--
ALTER TABLE `tbl_my_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_profile_pic`
--
ALTER TABLE `tbl_profile_pic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_resume`
--
ALTER TABLE `tbl_resume`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_services`
--
ALTER TABLE `tbl_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_social_link`
--
ALTER TABLE `tbl_social_link`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_soft_skill`
--
ALTER TABLE `tbl_soft_skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
