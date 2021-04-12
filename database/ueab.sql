-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2021 at 06:06 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ueab`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_email`, `password`) VALUES
(4, 'gakobowasoweto@gmail.com', 'soweto'),
(5, 'giatho@gmail.com', 'giatho');

-- --------------------------------------------------------

--
-- Table structure for table `block`
--

CREATE TABLE `block` (
  `id` int(11) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `student_id` varchar(50) NOT NULL,
  `student_email` varchar(50) NOT NULL,
  `course_id` varchar(50) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `group` varchar(50) NOT NULL,
  `lecturer_name` varchar(50) NOT NULL,
  `lecturer_email` varchar(50) NOT NULL,
  `lecturer_phone` bigint(13) NOT NULL,
  `message` text NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `block`
--

INSERT INTO `block` (`id`, `student_name`, `student_id`, `student_email`, `course_id`, `course_name`, `group`, `lecturer_name`, `lecturer_email`, `lecturer_phone`, `message`, `Date`) VALUES
(5, 'john pombe', 'smajla1234', 'john@ueab.ac.ke', 'AUTO 100', 'Personal Autocare', 'B', 'Gakobo Wasoweto', 'davidgakobo5@gmail.com', 798517161, 'see me', '2020-02-27 17:53:28');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `student_id` varchar(50) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `student_id`, `student_name`, `email`, `mobile`, `subject`, `message`, `Date`) VALUES
(5, 'SGAHMA1211', 'Gakobo Wasoweto', 'davidgakobo5@gmail.com', 798517161, 'Welcome Note', 'Welcome', '2020-02-27 17:53:28'),
(6, 'swhite', 'michael white', 'whire@gmak.cj', 988989898, 'hey', 'now reject', '2021-04-04 15:18:19'),
(7, 'swhite', 'michael white', 'whire@gmak.cj', 988989898, 'hey', 'now reject', '2021-04-04 15:18:20'),
(8, 'swhite', 'michael white', 'white@ueab.ac.ke', 712345687, 'hey', 'rada', '2021-04-04 16:23:37'),
(9, 'swhite', 'michael white', 'white@ueab.ac.ke', 712345687, 'hey', 'rada', '2021-04-04 16:23:37');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(5) NOT NULL,
  `course_id` varchar(50) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `credit_hours` varchar(100) NOT NULL,
  `department_offered` varchar(30) DEFAULT NULL,
  `date_added` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_id`, `course_name`, `credit_hours`, `department_offered`, `date_added`) VALUES
(6, 'COSC 399', 'Mobile App 56', '3', 'ISC', ''),
(7, 'ÇOSC 284', 'System Design', '3', 'ISC', ''),
(8, 'ADVT 155', 'Adventist Heritage', '2', 'Theology', ''),
(9, 'cosc 676', 'mis', '3', 'ISC', '2021-03-29 16:50:03');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(5) NOT NULL,
  `con_id` varchar(50) NOT NULL,
  `department_id` varchar(50) NOT NULL,
  `department_name` varchar(100) NOT NULL,
  `school` varchar(50) NOT NULL,
  `date_added` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `con_id`, `department_id`, `department_name`, `school`, `date_added`) VALUES
(600, '6', 'Business1', 'ISC', 'Business', ''),
(601, '6', 'Business2', 'Accounting', 'Business', ''),
(602, '6', 'Business3', 'Management', 'Business', ''),
(603, '7', 'EHSS1', 'Education', 'Education, Humanities and Social Sciences', ''),
(604, '7', 'EHSS2', 'Humanities and Social Sciences', 'Education, Humanities and Social Sciences', ''),
(605, '7', 'EHSS3', 'Theology and Religious Studies', 'Education, Humanities and Social Sciences', ''),
(606, '10', 'HS1', 'Medical Laboratory Science', 'Health Sciences', ''),
(607, '10', 'HS2', 'Public Health', 'Health Sciences', ''),
(608, '9', 'N1', 'Nursing', 'Nursing', ''),
(609, '8', 'ST1', 'Biological Sciences and Agriculture', 'Science and Technology', ''),
(610, '8', 'ST2', 'Foods, Nutrition and Dietetics', 'Science and Technology', ''),
(611, '8', 'ST3', 'Mathematics, Chemistry and Physics', 'Science and Technology', ''),
(612, '8', 'ST4', 'Technology and Applied Sciences', 'Science and Technology', '');

-- --------------------------------------------------------

--
-- Table structure for table `evaluate_courses`
--

CREATE TABLE `evaluate_courses` (
  `id` int(5) NOT NULL,
  `ref_id` varchar(50) NOT NULL,
  `student_id` varchar(50) NOT NULL,
  `course_id` varchar(50) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `group` varchar(50) NOT NULL,
  `department_offered` varchar(50) NOT NULL,
  `offered_by` varchar(50) NOT NULL,
  `faculty_id` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evaluate_courses`
--

INSERT INTO `evaluate_courses` (`id`, `ref_id`, `student_id`, `course_id`, `course_name`, `group`, `department_offered`, `offered_by`, `faculty_id`, `date`) VALUES
(6, '201ISC001', 'SGAKSU1811', 'COSC399', 'MOBILE APP', 'MAIN', 'ISC', 'MAYAKA KEVIN', 'mayaka@gmail.com', ''),
(7, '', '002', 'Education', '', '', '', '', '', ''),
(8, '', '003', 'Science & Technology', '', '', '', '', '', ''),
(9, '', '004', 'Nursing', '', '', '', '', '', ''),
(10, '', '005', 'Health Sciences', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `start_event` datetime NOT NULL,
  `end_event` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(5) NOT NULL,
  `user_name` varchar(12) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `school` varchar(50) NOT NULL,
  `department` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(75) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `date` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `user_name`, `Name`, `designation`, `school`, `department`, `email`, `password`, `mobile`, `date`, `status`) VALUES
(7, 'FNO0001', 'Mayaka Kevin', 'Associate Professior', 'Business', 'ISC', 'mayaka@gmail.com', 'mayaka', 755018947, '2016-07-13 14:30:53', 0),
(8, 'FNO0002', 'Ayiemba J', 'Developer', 'Science And Technology', 'Automotive', 'ayiemba@gmail.com', 'ayiemba', 715501897, '2016-07-13 14:37:35', 0),
(11, 'FNO003', 'Susan Gift', 'Nurse', 'Nursing', 'Clinicals', 'gift@gmail.com', 'gift', 71550189, '2016-07-13 14:40:35', 1),
(12, '600omar34568', 'omari dickson', 'developer', 'Business', 'ISC', 'omari@ueab.ac.ke', '67d8ab', 712345687, '2021-03-29 13:32:46', 0),
(13, 'ISCjack98989', 'jack ojee', 'hacker python', 'Business', 'ISC', 'jack@ueab.ac.ke', 'c627ab', 988989898, '2021-03-29 14:27:25', 0),
(15, 'ISCstvi98989', 'stvie xdant', 'body builder', 'Business', 'ISC', 'XDFMFJ@CJ.CM', 'ccbc87', 988989898, '2021-03-29 16:25:40', 0);

-- --------------------------------------------------------

--
-- Table structure for table `feed`
--

CREATE TABLE `feed` (
  `id` int(5) NOT NULL,
  `ref_id` varchar(50) NOT NULL,
  `student_email` varchar(50) NOT NULL,
  `student_id` varchar(50) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `course_id` varchar(50) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `lecture_group` varchar(50) NOT NULL,
  `department_offered` varchar(50) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `faculty_id` varchar(50) NOT NULL,
  `quest1` int(11) NOT NULL,
  `quest2` int(11) NOT NULL,
  `quest3` int(11) NOT NULL,
  `quest4` int(11) NOT NULL,
  `quest5` int(11) NOT NULL,
  `quest6` int(11) NOT NULL,
  `quest7` int(11) NOT NULL,
  `quest8` int(11) NOT NULL,
  `quest9` int(11) NOT NULL,
  `quest10` int(11) NOT NULL,
  `quest11` int(11) NOT NULL,
  `quest12` int(11) NOT NULL,
  `quest13` int(11) NOT NULL,
  `quest14` int(11) NOT NULL,
  `quest15` int(11) NOT NULL,
  `quest16` int(11) NOT NULL,
  `quest17` int(11) NOT NULL,
  `quest18` int(11) NOT NULL,
  `quest19` int(11) NOT NULL,
  `quest20` int(11) NOT NULL,
  `quest21` int(11) NOT NULL,
  `quest22` int(11) NOT NULL,
  `quest23` varchar(18) NOT NULL,
  `quest24` varchar(18) NOT NULL,
  `quest25` text NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feed`
--

INSERT INTO `feed` (`id`, `ref_id`, `student_email`, `student_id`, `student_name`, `course_id`, `course_name`, `lecture_group`, `department_offered`, `faculty`, `faculty_id`, `quest1`, `quest2`, `quest3`, `quest4`, `quest5`, `quest6`, `quest7`, `quest8`, `quest9`, `quest10`, `quest11`, `quest12`, `quest13`, `quest14`, `quest15`, `quest16`, `quest17`, `quest18`, `quest19`, `quest20`, `quest21`, `quest22`, `quest23`, `quest24`, `quest25`, `date`) VALUES
(12, '201ISC001', 'white@ueab.ac.ke', 'swhite', 'michael white', 'COSC 399', 'Mobile App', 'MAIN', 'ISC', 'mayaka kevin', 'mayaka@gmail.com', 6, 6, 5, 5, 5, 4, 3, 2, 3, 4, 4, 5, 5, 6, 6, 6, 6, 5, 4, 3, 4, 5, '2.5 to 2.99', 'B+, B or B-', '\r\nkihgvbn', '2021-04-05 00:14:02'),
(13, 'isc234', 'white@ueab.ac.ke', 'swhite', 'michael white', 'cosc 676', 'mis', 'a', 'ISC', 'omari dickson', 'omari@ueab.ac.ke', 1, 1, 2, 3, 2, 4, 6, 5, 6, 6, 6, 2, 2, 3, 1, 4, 2, 1, 1, 1, 4, 3, '2.0 to 2.49', ' A or A-', '\r\nugfvgbn', '2021-04-05 00:15:08'),
(14, 'isc234556', 'white@ueab.ac.ke', 'swhite', 'michael white', 'cosc 564', 'network administration and subnetting', 'main', 'ISC', 'jack ojee', 'jack@ueab.ac.ke', 4, 3, 2, 1, 2, 3, 4, 5, 5, 4, 4, 4, 3, 3, 2, 3, 2, 3, 4, 4, 3, 3, '2.5 to 2.99', ' A or A-', '\r\nwsdv fffd', '2021-04-05 00:28:28');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `notice_id` int(11) NOT NULL,
  `attachment` varchar(255) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`notice_id`, `attachment`, `subject`, `Description`, `Date`) VALUES
(12, 'AteekCV_java (1).docx', 'aaaaa', 'dfdfdfd', '2016-07-03 12:39:35');

-- --------------------------------------------------------

--
-- Table structure for table `hod`
--

CREATE TABLE `hod` (
  `id` int(5) NOT NULL,
  `user_name` varchar(12) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `school` varchar(50) NOT NULL,
  `department` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(75) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `date` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hod`
--

INSERT INTO `hod` (`id`, `user_name`, `Name`, `designation`, `school`, `department`, `email`, `password`, `mobile`, `date`, `status`) VALUES
(7, 'FNO0001', 'Mayaka Kevin', 'Associate Professior', 'Business', 'ISC', 'mayaka@gmail.com', 'mayaka', 755018947, '2016-07-13 14:30:53', 0),
(8, 'FNO0002', 'Ayiemba J', 'Developer', 'Science And Technology', 'Automotive', 'ayiemba@gmail.com', 'ayiemba', 715501897, '2016-07-13 14:37:35', 0),
(12, 'ISCman 72728', 'man kush', 'professor', 'Business', 'ISC', 'kush@ueab.ac.ke', 'ea9ab1', 384727283, '2021-04-04 15:31:20', 0);

-- --------------------------------------------------------

--
-- Table structure for table `majors`
--

CREATE TABLE `majors` (
  `id` int(7) NOT NULL,
  `major_id` varchar(50) NOT NULL,
  `con_id` varchar(50) NOT NULL,
  `major_name` varchar(100) NOT NULL,
  `school_offered` varchar(100) NOT NULL,
  `department_offered` varchar(100) NOT NULL,
  `date_added` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `majors`
--

INSERT INTO `majors` (`id`, `major_id`, `con_id`, `major_name`, `school_offered`, `department_offered`, `date_added`) VALUES
(444444, 'SWEN', '600', 'SOFTWARE ENGINEERING', 'BUSSINESS', 'ISC', ''),
(444445, 'SWET', '600', 'NETWORK AND COMMUNICATION SYSTEMS', 'BUSSINESS', 'ISC', ''),
(444446, 'SWEK', '600', 'BACHELOR OF BUSINESS INFORMATION SYSTEMS', 'BUSSINESS', 'ISC', ''),
(444447, 'MGMY', '602', 'BBA MARKETING', 'BUSSINESS', 'MANAGEMENT', ''),
(444448, 'EDUK', '604', 'BA COUNSELLING PSYCHOLOGY', 'Education, Humanities and Social Sciences', 'Humanities and Social Sciences', ''),
(444449, 'EDUU', '603', 'BEd Arts in English', 'Education, Humanities and Social Sciences', 'Education', ''),
(444450, 'NRSG', '608', 'BSN NURSING', 'Nursing', 'Nursing', '');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `student_id` varchar(50) NOT NULL,
  `student_email` varchar(50) NOT NULL,
  `course_id` varchar(50) NOT NULL,
  `ref_id` varchar(50) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `group` varchar(50) NOT NULL,
  `lecturer_name` varchar(50) NOT NULL,
  `lecturer_email` varchar(50) NOT NULL,
  `active` int(2) DEFAULT '1',
  `message` text NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `student_name`, `student_id`, `student_email`, `course_id`, `ref_id`, `course_name`, `group`, `lecturer_name`, `lecturer_email`, `active`, `message`, `Date`) VALUES
(7, 'john pombe', 'smajla1234', 'john@ueab.ac.ke', 'ref44', '', 'ddffg gg', 'f', 'sdfdg dfg', 'omari@ueab.ac.ke', 2147483647, 'see me', '2021-04-02 00:00:00'),
(11, 'john pombe', 'smajla1234', 'john@ueab.ac.ke', 'ter', '', 'tertgf', 'main', 'dann man', 'dgh@fmgkkg.bm', 987456633, 'see me', '2021-04-02 00:00:00'),
(12, 'naomi karanja', 'snaomi1811', 'naomi@ueab.ac.ke', 'ref44', '', 'ddffg gg', 'f', 'dann man', 'omari@ueab.ac.ke', 2147483647, 'see me', '2021-04-02 19:55:39'),
(19, 'mumbi jaja', 'smumbi1811', 'mumbi@ueab.ac.ke', 'cosc 676', 'isc234', 'mis', 'a', 'omari dickson', 'omari@ueab.ac.ke', 1, '\r\nsee me', '2021-04-04 15:01:36'),
(20, 'john pombe', 'sjohn', 'john@ueab.ac.ke', 'cosc 676', 'isc234', 'mis', 'a', 'omari dickson', 'omari@ueab.ac.ke', 1, '\r\nsee me', '2021-04-04 15:03:03'),
(21, 'karis kiegei', 'skaris', 'karis@ueab.ac.ke', 'cosc 676', 'isc234', 'mis', 'a', 'omari dickson', 'omari@ueab.ac.ke', 1, 'semester\r\n', '2021-04-04 15:03:54'),
(24, 'michael white', 'swhite', 'white@ueab.ac.ke', 'cosc 676', 'isc234', 'mis', 'a', 'omari dickson', 'omari@ueab.ac.ke', 1, '\r\nsee mw', '2021-04-05 00:31:30');

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `id` int(5) NOT NULL,
  `school_id` varchar(50) NOT NULL,
  `school_name` varchar(100) NOT NULL,
  `date_added` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `school_id`, `school_name`, `date_added`) VALUES
(6, '001', 'Business', ''),
(7, '002', 'Education, Humanities and Social Sciences', ''),
(8, '003', 'Science and Technology', ''),
(9, '004', 'Nursing', ''),
(10, '005', 'Health Sciences', '');

-- --------------------------------------------------------

--
-- Table structure for table `semester_courses`
--

CREATE TABLE `semester_courses` (
  `id` int(5) NOT NULL,
  `ref_id` varchar(50) NOT NULL,
  `course_id` varchar(50) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `credit_hours` varchar(100) NOT NULL,
  `group` varchar(50) NOT NULL,
  `department_offered` varchar(30) NOT NULL,
  `offered_by` varchar(50) NOT NULL,
  `faculty_id` varchar(50) NOT NULL,
  `date_added` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester_courses`
--

INSERT INTO `semester_courses` (`id`, `ref_id`, `course_id`, `course_name`, `credit_hours`, `group`, `department_offered`, `offered_by`, `faculty_id`, `date_added`) VALUES
(6, '201ISC001', 'COSC 399', 'Mobile App', '3', 'MAIN', 'ISC', 'mayaka kevin', 'mayaka@gmail.com', ''),
(7, '201ISC002', 'ï¿½OSC 284', 'System Design', '3', 'B', 'ISC', 'omari dickson', 'gift@gmail.com', ''),
(8, '201THEOLOGY002', 'ADVT 155', 'Adventist Heritage', '2', 'A', 'Theology', 'ouma james', '', ''),
(9, 'isc234', 'cosc 676', 'mis', '3', 'a', 'ISC', 'omari dickson', 'omari@ueab.ac.ke', '2021-03-29 13:33:17'),
(10, 'isc234556', 'cosc 564', 'network administration and subnetting', '3', 'main', 'ISC', 'jack ojee', 'jack@ueab.ac.ke', '2021-04-04 15:22:30');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` char(100) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `studentid` varchar(20) NOT NULL,
  `major` varchar(100) NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `school` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `image` varchar(100) NOT NULL,
  `date` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `pass`, `studentid`, `major`, `mobile`, `school`, `department`, `gender`, `image`, `date`) VALUES
(15, 'naomi karanja', 'naomi@ueab.ac.ke', '81dc9bdb52d04dc20036dbd8313ed055', 'snaomi1811', 'SOFTWARE ENGINEERING', 9889898984, '6', '600', 'f', 'black.jpg', '2021-03-29 13:35:37'),
(16, 'john pombe', 'john@ueab.ac.ke', '81dc9bdb52d04dc20036dbd8313ed055', 'sjohn', 'SOFTWARE ENGINEERING', 987678954, '6', '600', 'm', 'black.jpg', '2021-03-29 13:36:34'),
(17, 'karis kiegei', 'karis@ueab.ac.ke', '81dc9bdb52d04dc20036dbd8313ed055', 'skaris', 'SOFTWARE ENGINEERING', 384727283, '6', '600', 'm', 'black.jpg', '2021-03-29 13:37:35'),
(20, 'mumbi jaja', 'mumbi@ueab.ac.ke', '81dc9bdb52d04dc20036dbd8313ed055', 'smumbi1811', 'SOFTWARE ENGINEERING', 798635412, '6', '600', 'm', 'black.jpg', '2021-04-03 09:45:31'),
(21, 'michael white', 'white@ueab.ac.ke', '81dc9bdb52d04dc20036dbd8313ed055', 'swhite', 'BA COUNSELLING PSYCHOLOGY', 712345687, '7', '604', 'm', 'black.jpg', '2021-04-04 15:17:08');

-- --------------------------------------------------------

--
-- Table structure for table `user_selected_courses`
--

CREATE TABLE `user_selected_courses` (
  `id` int(5) NOT NULL,
  `ref_id` varchar(50) NOT NULL,
  `student_id` varchar(50) NOT NULL,
  `course_id` varchar(50) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `group` varchar(50) NOT NULL,
  `department_offered` varchar(50) NOT NULL,
  `offered_by` varchar(50) NOT NULL,
  `faculty_id` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_selected_courses`
--

INSERT INTO `user_selected_courses` (`id`, `ref_id`, `student_id`, `course_id`, `course_name`, `group`, `department_offered`, `offered_by`, `faculty_id`, `date`) VALUES
(6, '201ISC001', 'SGAKSU1811', 'COSC399', 'MOBILE APP', 'MAIN', 'ISC', 'MAYAKA KEVIN', 'mayaka@gmail.com', ''),
(7, '', '002', 'Education', '', '', '', '', '', ''),
(8, '', '003', 'Science & Technology', '', '', '', '', '', ''),
(9, '', '004', 'Nursing', '', '', '', '', '', ''),
(10, '', '005', 'Health Sciences', '', '', '', '', '', ''),
(12, 'isc234', 'snaomi1811', 'cosc 676', 'mis', 'a', 'ISC', 'omari dickson', 'omari@ueab.ac.ke', '2021-03-29 13:33:46'),
(13, 'isc234', 'skaris', 'cosc 676', 'mis', 'a', 'ISC', 'omari dickson', 'omari@ueab.ac.ke', '2021-03-29 13:33:55'),
(14, 'isc234', 'sjohn', 'cosc 676', 'mis', 'a', 'ISC', 'omari dickson', 'omari@ueab.ac.ke', '2021-03-29 13:34:18'),
(15, 'isc234', 'smumbi1811', 'cosc 676', 'mis', 'a', 'ISC', 'omari dickson', 'omari@ueab.ac.ke', '2021-04-03 09:47:47'),
(16, '201ISC001', 'swhite', 'COSC 399', 'Mobile App', 'MAIN', 'ISC', 'mayaka kevin', 'mayaka@gmail.com', '2021-04-04 15:21:26'),
(17, 'isc234', 'swhite', 'cosc 676', 'mis', 'a', 'ISC', 'omari dickson', 'omari@ueab.ac.ke', '2021-04-04 15:21:43'),
(18, 'isc234556', 'swhite', 'cosc 564', 'network administration and subnetting', 'main', 'ISC', 'jack ojee', 'jack@ueab.ac.ke', '2021-04-04 15:26:04'),
(19, '201ISC001', 'skaris', 'COSC 399', 'Mobile App', 'MAIN', 'ISC', 'mayaka kevin', 'mayaka@gmail.com', '2021-04-05 00:38:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `block`
--
ALTER TABLE `block`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `course_name` (`course_name`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `evaluate_courses`
--
ALTER TABLE `evaluate_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `feed`
--
ALTER TABLE `feed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `hod`
--
ALTER TABLE `hod`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `majors`
--
ALTER TABLE `majors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `school_name` (`school_name`);

--
-- Indexes for table `semester_courses`
--
ALTER TABLE `semester_courses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ref_id` (`ref_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);
ALTER TABLE `user` ADD FULLTEXT KEY `name` (`name`);

--
-- Indexes for table `user_selected_courses`
--
ALTER TABLE `user_selected_courses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `block`
--
ALTER TABLE `block`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=613;

--
-- AUTO_INCREMENT for table `evaluate_courses`
--
ALTER TABLE `evaluate_courses`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `feed`
--
ALTER TABLE `feed`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `hod`
--
ALTER TABLE `hod`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `majors`
--
ALTER TABLE `majors`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=444451;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `semester_courses`
--
ALTER TABLE `semester_courses`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user_selected_courses`
--
ALTER TABLE `user_selected_courses`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
