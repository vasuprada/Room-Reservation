-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2015 at 12:08 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `roomreserve`
--

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `$id` int(10) NOT NULL AUTO_INCREMENT,
  `reservationId` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `firstName` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `roomId` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `startTime` timestamp NOT NULL,
  `endTime` timestamp NOT NULL,
  `purpose` varchar(255) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`$id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`$id`, `reservationId`, `firstName`, `email`, `roomId`, `startTime`, `endTime`, `purpose`) VALUES
(1, '101', 'Sandeep', 'sandeep@usc.edu', '1', '2015-08-21 20:09:18', '2015-08-21 20:09:18', 'Study'),
(2, '102', 'Girish', 'girish@usc.edu', '1', '2015-08-21 20:11:38', '2015-08-21 20:11:38', 'Student Worker project'),
(3, '104', 'Tushar', 'tushar@usc.edu', '2', '2015-08-21 20:13:24', '2015-08-21 20:13:24', 'Project Discussion'),
(4, '103', 'Anoop', 'anoop@usc.edu', '2', '2015-08-21 20:12:53', '2015-08-21 20:12:53', 'Seminar'),
(5, '105', 'Azeem', 'azeem@usc.edu', '3', '2015-08-21 20:15:26', '2015-08-21 20:15:26', 'Study'),
(6, '106', 'Warren', 'warren@usc.edu', '5', '2015-08-21 20:15:26', '2015-08-21 20:15:26', 'Seminar'),
(7, '107', 'Sandeep', 'sandeep@usc.edu', '6', '2015-08-21 20:17:46', '2015-08-21 20:17:46', 'Study'),
(8, '108', 'Girish', 'girish@usc.edu', '7', '2015-08-21 20:17:46', '2015-08-21 20:17:46', 'Studies'),
(9, '109', 'Anoop', 'anoop@usc.edu', '8', '2015-08-21 20:20:31', '2015-08-21 20:20:31', 'Seminar'),
(10, '110', 'Tushar', 'tushar@usc.edu', '9', '2015-08-21 20:20:31', '2015-08-21 20:20:31', 'Project Work'),
(11, '111', 'Azeem', 'azeem@usc.edu', '10', '2015-08-21 20:21:35', '2015-08-21 20:21:35', 'Study'),
(12, '11', 'sdfes', 'vvijayak@usc.edu', '12', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'saf');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `$id` int(10) NOT NULL AUTO_INCREMENT,
  `roomId` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `roomName` varchar(255) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`$id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`$id`, `roomId`, `roomName`) VALUES
(1, '1', 'SAL 101'),
(2, '2', 'SAL 102'),
(3, '3', 'SAL 103'),
(4, '4', 'GFS 301'),
(5, '5', 'GFS 106'),
(6, '6', 'GFS 315'),
(7, '7', 'SAL 201'),
(8, '8', 'SGM 101'),
(9, '9', 'SGM 123'),
(10, '10', 'SGM 124');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
