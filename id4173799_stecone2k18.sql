-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 21, 2018 at 08:15 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id4173799_stecone2k18`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty_details`
--

CREATE TABLE `faculty_details` (
  `faculty_id` text COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `phoneno` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `faculty_details`
--

INSERT INTO `faculty_details` (`faculty_id`, `password`, `phoneno`) VALUES
('123', '321', ''),
('234', '432', ''),
('111', '', ''),
('222', '', ''),
('333', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_list`
--

CREATE TABLE `faculty_list` (
  `id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `att_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `faculty_list`
--

INSERT INTO `faculty_list` (`id`, `att_id`, `subject`) VALUES
('111', 'CSE 3 C,CSE 3 B,CE 2 B', 'sub1,sub3,sub5'),
('123', 'CSE 3 B,CE 2 B,CSE 3 C', 'sub1,sub2,sub3'),
('222', 'CSE 3 A,CE 2 B', 'DBMS,TOC'),
('234', 'CE 2 B', 'DS,TOC'),
('333', 'CE 2 B', 'CO,DBMS'),
('444', 'CE 2 B', 'DS,CO'),
('555', 'CSE 2 C', 'TOC');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_list1`
--

CREATE TABLE `faculty_list1` (
  `id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `att_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `faculty_list1`
--

INSERT INTO `faculty_list1` (`id`, `att_id`) VALUES
('111', 'CSE 3 A'),
('222', 'CSE 3 C');

-- --------------------------------------------------------

--
-- Table structure for table `mark_attendence`
--

CREATE TABLE `mark_attendence` (
  `id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `jntu_no` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `att_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `sub1_present` text COLLATE utf8_unicode_ci NOT NULL,
  `sub1_absent` text COLLATE utf8_unicode_ci NOT NULL,
  `sub2_present` text COLLATE utf8_unicode_ci NOT NULL,
  `sub2_absent` text COLLATE utf8_unicode_ci NOT NULL,
  `sub3_present` text COLLATE utf8_unicode_ci NOT NULL,
  `sub3_absent` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mark_attendence`
--

INSERT INTO `mark_attendence` (`id`, `jntu_no`, `att_id`, `sub1_present`, `sub1_absent`, `sub2_present`, `sub2_absent`, `sub3_present`, `sub3_absent`) VALUES
('1b0', '16341a01b0', 'CE 2 B', '0', '0', '10', '4', '0', '0'),
('1b1', '16341a01b1', 'CE 2 B', '0', '0', '10', '4', '0', '0'),
('1b2', '16341a01b2', 'CE 2 B', '0', '0', '10', '4', '0', '0'),
('1b4', '16341a01b4', 'CE 2 B', '0', '0', '10', '4', '0', '0'),
('1b5', '16341a01b5', 'CE 2 B', '2', '1', '5', '8', '2', '3'),
('5e0', '15341a05e0', 'CSE 3 C', '0', '0', '0', '0', '7', '6'),
('5e2', '15341a05e2', 'CSE 3 C', '0', '0', '0', '0', '9', '4'),
('5e3', '15341a05e3', 'CSE 3 C', '0', '0', '0', '0', '9', '4'),
('5e4', '15341a05e4', 'CSE 3 C', '0', '0', '0', '0', '11', '2'),
('5f7', '15341a05f7', 'CSE 3 C', '0', '0', '0', '0', '4', '7'),
('5f8', '15341a05f8', 'CSE 3 C', '0', '0', '0', '0', '4', '7');

-- --------------------------------------------------------

--
-- Table structure for table `students_list`
--

CREATE TABLE `students_list` (
  `id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `att_Id` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `students_list`
--

INSERT INTO `students_list` (`id`, `image`, `att_Id`) VALUES
('15341a05e2', '', 'CSE 3 C'),
('15341a05f8', '', 'CSE 3 C'),
('16341a01a9', '', 'CSE 3 A'),
('16341a01b0', '', 'CE 2 B'),
('16341a01b1', '', 'CE 2 B'),
('16341a01b2', '', 'CE 2 B'),
('16341a01b3', '', 'CE 2 B'),
('16341a01b5', '', 'CE 2 B');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `jntuno` text COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `phoneno` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`jntuno`, `password`, `phoneno`) VALUES
('16341a01b5', 'datta', '0'),
('16341a01b3', 'krishnadeep', '0'),
('16341a01b2', '', '9949487543'),
('16341a01b0', '', '9949487543'),
('16341a01a9', '', ''),
('15341a05e2', '5e2', '99444556677');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty_list`
--
ALTER TABLE `faculty_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty_list1`
--
ALTER TABLE `faculty_list1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mark_attendence`
--
ALTER TABLE `mark_attendence`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students_list`
--
ALTER TABLE `students_list`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
