-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 26, 2014 at 08:20 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pickme`
--
CREATE DATABASE IF NOT EXISTS `pickme` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `pickme`;

-- --------------------------------------------------------

--
-- Table structure for table `pi_article`
--

CREATE TABLE IF NOT EXISTS `pi_article` (
  `ar_id` int(10) NOT NULL,
  `ar_name` varchar(50) NOT NULL,
  `ar_text` varchar(255) NOT NULL,
  `ar_category` int(2) NOT NULL,
  `ar_user_id` int(10) NOT NULL,
  `ar_created_time` bigint(10) NOT NULL,
  `ar_published_time` bigint(10) NOT NULL,
  PRIMARY KEY (`ar_id`),
  KEY `ar_user_id` (`ar_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pi_company`
--

CREATE TABLE IF NOT EXISTS `pi_company` (
  `com_id` int(10) NOT NULL,
  `com_field` varchar(50) NOT NULL,
  `com_user_id` int(10) NOT NULL,
  PRIMARY KEY (`com_id`),
  KEY `com_user_id` (`com_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pi_endorse`
--

CREATE TABLE IF NOT EXISTS `pi_endorse` (
  `en_id` int(10) NOT NULL,
  `en_byuser` int(10) NOT NULL,
  `en_touser` int(10) NOT NULL,
  `en_time` bigint(10) NOT NULL,
  PRIMARY KEY (`en_id`),
  KEY `en_byuser` (`en_byuser`),
  KEY `en_touser` (`en_touser`),
  KEY `en_touser_2` (`en_touser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pi_job`
--

CREATE TABLE IF NOT EXISTS `pi_job` (
  `jb_id` int(10) NOT NULL,
  `jb_user_id` int(10) NOT NULL,
  `jb_name` varchar(50) NOT NULL,
  `jb_description1` varchar(255) NOT NULL,
  `jb_description2` varchar(255) DEFAULT NULL,
  `jb_salary` int(7) NOT NULL,
  `jb_city` varchar(30) NOT NULL,
  `jb_exp_year` int(2) NOT NULL,
  `jb_period` int(4) NOT NULL,
  `jb_email` varchar(20) NOT NULL,
  `jb_phone1` int(10) NOT NULL,
  `jb_phone2` int(10) DEFAULT NULL,
  `jb_time` bigint(10) NOT NULL,
  `jb_visible` tinyint(1) NOT NULL,
  PRIMARY KEY (`jb_id`),
  KEY `jb_user_id` (`jb_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pi_log`
--

CREATE TABLE IF NOT EXISTS `pi_log` (
  `lg_id` int(10) NOT NULL,
  `lg_user_id` int(10) NOT NULL,
  `lg_action` int(10) NOT NULL,
  `lg_url` varchar(30) NOT NULL,
  `lg_info` varchar(50) NOT NULL,
  `lg_ip` varchar(20) NOT NULL,
  PRIMARY KEY (`lg_id`),
  KEY `lg_user_id` (`lg_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pi_project`
--

CREATE TABLE IF NOT EXISTS `pi_project` (
  `pr_id` int(10) NOT NULL,
  `pr_user_id` int(10) NOT NULL,
  `pr_name` varchar(50) NOT NULL,
  `pr_description` varchar(255) NOT NULL,
  `pr_group_mode` tinyint(1) NOT NULL,
  `pr_role` varchar(100) NOT NULL,
  `pr_technolgy` varchar(255) NOT NULL,
  `pr_team` varchar(50) DEFAULT NULL,
  `pr_client` varchar(50) NOT NULL,
  PRIMARY KEY (`pr_id`),
  KEY `pr_user_id` (`pr_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pi_recommendation`
--

CREATE TABLE IF NOT EXISTS `pi_recommendation` (
  `rec_id` int(10) NOT NULL,
  `rec_requestedby` int(10) NOT NULL,
  `rec_submittedby` int(10) NOT NULL,
  `rec_time` bigint(10) NOT NULL,
  `rec_request_time` bigint(10) NOT NULL,
  `rec_submitted_time` bigint(10) NOT NULL,
  `rec_text` varchar(255) NOT NULL,
  `rec_visible` tinyint(1) NOT NULL,
  PRIMARY KEY (`rec_id`),
  KEY `rec_requestedby` (`rec_requestedby`),
  KEY `rec_submittedby` (`rec_submittedby`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pi_skill`
--

CREATE TABLE IF NOT EXISTS `pi_skill` (
  `sk_id` int(10) NOT NULL,
  `sk_user_id` int(10) NOT NULL,
  `sk_name` varchar(50) NOT NULL,
  `sk_created` bigint(10) NOT NULL,
  PRIMARY KEY (`sk_id`),
  KEY `sk_user_id` (`sk_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pi_skill_category`
--

CREATE TABLE IF NOT EXISTS `pi_skill_category` (
  `skc_id` int(10) NOT NULL,
  `skc_sk_id` int(10) NOT NULL,
  `skc_name` varchar(30) NOT NULL,
  `skc_created` bigint(10) NOT NULL,
  PRIMARY KEY (`skc_id`),
  KEY `skc_sk_id` (`skc_sk_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pi_staff`
--

CREATE TABLE IF NOT EXISTS `pi_staff` (
  `st_id` int(10) NOT NULL,
  `st_user_id` int(10) NOT NULL,
  `st_position` varchar(50) NOT NULL,
  `st_teaching_area` varchar(255) NOT NULL,
  PRIMARY KEY (`st_id`),
  KEY `st_user_id` (`st_user_id`),
  KEY `st_user_id_2` (`st_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pi_student`
--

CREATE TABLE IF NOT EXISTS `pi_student` (
  `stu_id` int(10) NOT NULL,
  `stu_user_id` int(10) NOT NULL,
  `stu_dob` bigint(10) NOT NULL,
  `stu_gpa` int(5) NOT NULL,
  `stu_field` varchar(20) NOT NULL,
  `stu_cv` varchar(255) NOT NULL,
  `stu_cover` varchar(255) NOT NULL,
  `stu_interested` varchar(20) NOT NULL,
  PRIMARY KEY (`stu_id`),
  KEY `stu_user_id` (`stu_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pi_user`
--

CREATE TABLE IF NOT EXISTS `pi_user` (
  `us_id` int(10) NOT NULL,
  `us_reg_no` int(10) NOT NULL,
  `us_first_name` varchar(50) NOT NULL,
  `us_last_name` varchar(50) DEFAULT NULL,
  `us_email` varchar(50) NOT NULL,
  `us_password` varchar(10) NOT NULL,
  `us_confirmed` varchar(10) NOT NULL,
  `us_tp_no_land` int(10) DEFAULT NULL,
  `us_tp_no_mobile` int(10) DEFAULT NULL,
  `us_created` bigint(10) NOT NULL,
  `us_modified` bigint(10) NOT NULL,
  `us_session` varchar(40) NOT NULL,
  `us_city` varchar(20) NOT NULL,
  `us_first_access` bigint(10) NOT NULL,
  `us_last_access` bigint(10) NOT NULL,
  `us_url` varchar(30) NOT NULL,
  `us_picture` varchar(255) DEFAULT NULL,
  `us_discription1` varchar(255) NOT NULL,
  `us_discription2` varchar(255) NOT NULL,
  `us_ip` varchar(20) NOT NULL,
  `us_deleted` tinyint(1) NOT NULL,
  `us_policy_agreed` tinyint(1) NOT NULL,
  `us_visible` tinyint(1) NOT NULL,
  PRIMARY KEY (`us_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pi_article`
--
ALTER TABLE `pi_article`
  ADD CONSTRAINT `pi_article_ibfk_1` FOREIGN KEY (`ar_user_id`) REFERENCES `pi_user` (`us_id`);

--
-- Constraints for table `pi_company`
--
ALTER TABLE `pi_company`
  ADD CONSTRAINT `pi_company_ibfk_1` FOREIGN KEY (`com_user_id`) REFERENCES `pi_user` (`us_id`);

--
-- Constraints for table `pi_endorse`
--
ALTER TABLE `pi_endorse`
  ADD CONSTRAINT `pi_endorse_ibfk_1` FOREIGN KEY (`en_byuser`) REFERENCES `pi_user` (`us_id`),
  ADD CONSTRAINT `pi_endorse_ibfk_2` FOREIGN KEY (`en_touser`) REFERENCES `pi_user` (`us_id`);

--
-- Constraints for table `pi_job`
--
ALTER TABLE `pi_job`
  ADD CONSTRAINT `pi_job_ibfk_1` FOREIGN KEY (`jb_user_id`) REFERENCES `pi_user` (`us_id`);

--
-- Constraints for table `pi_log`
--
ALTER TABLE `pi_log`
  ADD CONSTRAINT `pi_log_ibfk_1` FOREIGN KEY (`lg_user_id`) REFERENCES `pi_user` (`us_id`);

--
-- Constraints for table `pi_project`
--
ALTER TABLE `pi_project`
  ADD CONSTRAINT `pi_project_ibfk_1` FOREIGN KEY (`pr_user_id`) REFERENCES `pi_user` (`us_id`);

--
-- Constraints for table `pi_recommendation`
--
ALTER TABLE `pi_recommendation`
  ADD CONSTRAINT `pi_recommendation_ibfk_1` FOREIGN KEY (`rec_requestedby`) REFERENCES `pi_user` (`us_id`),
  ADD CONSTRAINT `pi_recommendation_ibfk_2` FOREIGN KEY (`rec_submittedby`) REFERENCES `pi_user` (`us_id`);

--
-- Constraints for table `pi_skill`
--
ALTER TABLE `pi_skill`
  ADD CONSTRAINT `pi_skill_ibfk_1` FOREIGN KEY (`sk_user_id`) REFERENCES `pi_user` (`us_id`);

--
-- Constraints for table `pi_skill_category`
--
ALTER TABLE `pi_skill_category`
  ADD CONSTRAINT `pi_skill_category_ibfk_1` FOREIGN KEY (`skc_sk_id`) REFERENCES `pi_skill` (`sk_user_id`);

--
-- Constraints for table `pi_staff`
--
ALTER TABLE `pi_staff`
  ADD CONSTRAINT `pi_staff_ibfk_1` FOREIGN KEY (`st_user_id`) REFERENCES `pi_user` (`us_id`);

--
-- Constraints for table `pi_student`
--
ALTER TABLE `pi_student`
  ADD CONSTRAINT `pi_student_ibfk_1` FOREIGN KEY (`stu_user_id`) REFERENCES `pi_user` (`us_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
