-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 11, 2015 at 09:29 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(30) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_password` varchar(64) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(1, 'admin', 'admin@admin.com', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_name` varchar(30) NOT NULL,
  `contact_email` varchar(30) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_name`, `contact_email`, `message`) VALUES
(1, 'Puppet', 'x@x.com', 'Mama told me, don''t talk to the stranger'),
(2, 'Mark', 'p@as.com', 'hi fi'),
(3, 'Creed', 'zx@zx.com', 'Appolo-13');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `doctor_id` int(11) NOT NULL AUTO_INCREMENT,
  `ward_id` int(11) NOT NULL,
  `doctor_name` varchar(30) NOT NULL,
  `doctor_email` varchar(30) NOT NULL,
  `doctor_password` varchar(64) NOT NULL,
  `speciality` char(30) NOT NULL,
  `shift` varchar(11) NOT NULL,
  PRIMARY KEY (`doctor_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctor_id`, `ward_id`, `doctor_name`, `doctor_email`, `doctor_password`, `speciality`, `shift`) VALUES
(1, 9, 'AAA', 'a@a.com', '72f4be89d6ebab1496e21e38bcd7c8ca0a68928af3081ad7dff87e772eb350c2', 'Throught', '09-14'),
(2, 3, 'BBB', 'b@b.com', '72f4be89d6ebab1496e21e38bcd7c8ca0a68928af3081ad7dff87e772eb350c2', 'Brain', '09-14'),
(3, 2, 'CCC', 'c@c.com', '72f4be89d6ebab1496e21e38bcd7c8ca0a68928af3081ad7dff87e772eb350c2', 'Stomach', '09-14'),
(4, 7, 'DDD', 'd@d.com', '72f4be89d6ebab1496e21e38bcd7c8ca0a68928af3081ad7dff87e772eb350c2', 'Kidney', '09-14'),
(5, 5, 'EEE', 'e@e.com', '72f4be89d6ebab1496e21e38bcd7c8ca0a68928af3081ad7dff87e772eb350c2', 'Heart', '09-14'),
(6, 9, 'FFF', 'f@f.com', '72f4be89d6ebab1496e21e38bcd7c8ca0a68928af3081ad7dff87e772eb350c2', 'Throught', '12-16'),
(7, 5, 'GGG', 'g@g.com', '72f4be89d6ebab1496e21e38bcd7c8ca0a68928af3081ad7dff87e772eb350c2', 'Heart', '12-16'),
(8, 2, 'HHH', 'h@h.com', '72f4be89d6ebab1496e21e38bcd7c8ca0a68928af3081ad7dff87e772eb350c2', 'Stomach', '12-16'),
(9, 3, 'III', 'i@i.com', '72f4be89d6ebab1496e21e38bcd7c8ca0a68928af3081ad7dff87e772eb350c2', 'Brain', '12-16'),
(10, 7, 'JJJ', 'j@j.com', '72f4be89d6ebab1496e21e38bcd7c8ca0a68928af3081ad7dff87e772eb350c2', 'Kidney', '12-16'),
(11, 1, 'KKK', 'k@k.com', '72f4be89d6ebab1496e21e38bcd7c8ca0a68928af3081ad7dff87e772eb350c2', 'Eye', '12-16'),
(12, 6, 'LLL', 'l@l.com', '72f4be89d6ebab1496e21e38bcd7c8ca0a68928af3081ad7dff87e772eb350c2', 'Skin', '14-20'),
(14, 12, 'NNN', 'n@n.com', '72f4be89d6ebab1496e21e38bcd7c8ca0a68928af3081ad7dff87e772eb350c2', 'Chest', '14-20'),
(15, 10, 'OOO', 'o@o.com', '72f4be89d6ebab1496e21e38bcd7c8ca0a68928af3081ad7dff87e772eb350c2', 'Dentist', '14-20'),
(16, 8, 'PPP', 'p@p.com', '72f4be89d6ebab1496e21e38bcd7c8ca0a68928af3081ad7dff87e772eb350c2', 'Blood', '14-18'),
(17, 2, 'QQQ', 'q@q.com', '72f4be89d6ebab1496e21e38bcd7c8ca0a68928af3081ad7dff87e772eb350c2', 'Stomach', '09-15'),
(18, 6, 'ZZZAS', 'zx@zx.com', 'f9f16d97c90d8c6f2cab37bb6d1f1992', 'Skin', '9-2');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `patient_id` int(11) NOT NULL AUTO_INCREMENT,
  `ward_id` int(11) NOT NULL,
  `treatment_id` int(10) NOT NULL,
  `patient_name` varchar(30) NOT NULL,
  `age` int(3) NOT NULL,
  `sex` char(1) NOT NULL,
  `patient_email` varchar(30) NOT NULL,
  `progress` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`patient_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_id`, `ward_id`, `treatment_id`, `patient_name`, `age`, `sex`, `patient_email`, `progress`) VALUES
(1, 4, 1404221148, 'RAR', 68, 'M', 'asdasd@asad.com', 1),
(2, 7, 1404221119, 'TAT', 34, 'M', 'asda@asd.com', 0),
(3, 2, 1404221107, 'IAI', 23, 'F', 'oas@oas.com', 0),
(4, 6, 1404270225, 'Prokas', 18, 'M', 'z@zx.com', 1),
(5, 6, 1404270205, 'Issac', 16, 'M', 'pdp@pdp.com', 0),
(6, 3, 1506101142, 'Jason Statham', 48, '', 'jason@jason.com', 0),
(7, 5, 1506110646, 'ZZZZ', 8, 'M', 'z@z.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE IF NOT EXISTS `treatment` (
  `treatment_id` int(10) NOT NULL AUTO_INCREMENT,
  `doctor_id` int(11) NOT NULL,
  `detail` text NOT NULL,
  PRIMARY KEY (`treatment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1404270226 ;

--
-- Dumping data for table `treatment`
--

INSERT INTO `treatment` (`treatment_id`, `doctor_id`, `detail`) VALUES
(1404221119, 1, 'Rhodes'),
(1404221148, 1, 'Dhaka'),
(1404270225, 1, 'Predator');

-- --------------------------------------------------------

--
-- Table structure for table `ward`
--

CREATE TABLE IF NOT EXISTS `ward` (
  `ward_id` int(11) NOT NULL AUTO_INCREMENT,
  `ward_name` varchar(30) NOT NULL,
  `accommodation` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`ward_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `ward`
--

INSERT INTO `ward` (`ward_id`, `ward_name`, `accommodation`, `status`) VALUES
(1, 'Ophthalmology', 30, 1),
(2, 'Gastroenterology', 30, 1),
(3, 'Neurology', 30, 1),
(4, 'Orthopaedics', 30, 1),
(5, 'Cardiology', 30, 1),
(6, 'Dermatology', 30, 1),
(7, 'Urology', 30, 1),
(8, 'Heamotology', 30, 1),
(9, 'ENT', 30, 1),
(10, 'Dental', 30, 1),
(11, 'Haematology', 30, 1),
(12, 'Pulmonology', 30, 1);
