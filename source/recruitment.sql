-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 01, 2014 at 02:52 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `recruitment`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic`
--

CREATE TABLE IF NOT EXISTS `academic` (
  `userid` int(255) NOT NULL AUTO_INCREMENT,
  `university` varchar(255) NOT NULL,
  `institute` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `cpi` float NOT NULL,
  `semester` int(8) NOT NULL,
  `experience` int(30) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `academic`
--

INSERT INTO `academic` (`userid`, `university`, `institute`, `branch`, `degree`, `status`, `cpi`, `semester`, `experience`) VALUES
(3, 'GTU', 'IIT Bombay', 'Informantion Technology', 'M.E/M.Tech', 'pursuing', 4.06, 2, 0),
(5, 'GTU', 'Silver Oak', 'Informantion Technology', 'B.E/B.Tech', 'pursuing', 6.8, 5, 0),
(6, 'kkkkkkkkkkkk', 'kkkkkkkkkkkkkkkkkkk', 'Computer science', 'M.E/M.Tech', 'pursuing', 4.05, 6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `userid` int(255) NOT NULL AUTO_INCREMENT,
  `post` varchar(255) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `pemail` varchar(255) NOT NULL,
  `semail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `semail` (`semail`),
  UNIQUE KEY `pemail` (`pemail`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`userid`, `post`, `resume`, `pemail`, `semail`, `password`) VALUES
(3, 'Mobile App Developer', 'fips_186-3 - Copy.pdf', 'jainamshah@gmail.com', 'jainam@yahoo.in', '10101010'),
(5, 'DataBase Administrator', 'software_testing.pdf', 'krupalshah1994@gmail.com', 'krupalshah5@yahoo.in', '10101010'),
(6, 'Search Engine Optimizer', 'soft.pdf', 'k@k.com', 'k@sa.com', '10101010');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `adminid` int(255) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`adminid`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `email`, `password`) VALUES
(3, 'ashish@yahoo.in', '123123123'),
(9, 'krupal@gmail.com', '10101010'),
(11, 'krupal1010@gmail.com', '1010101010');

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE IF NOT EXISTS `personal` (
  `userid` int(255) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `state` varchar(255) NOT NULL,
  `statespecify` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `cityspecify` varchar(255) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`userid`, `firstname`, `middlename`, `lastname`, `gender`, `birthdate`, `state`, `statespecify`, `city`, `cityspecify`) VALUES
(3, 'jainam', 'hsbhai', 'shah', 'male', '2014-03-31', 'Goa', '', 'Agra', ''),
(5, 'krupal', 'harshadbhai', 'shah', 'male', '1994-01-26', 'Gujarat', '', 'Ahmedabad', ''),
(6, 'krupal', 'kkkkkkkkkkk', 'kkkkkkk', 'male', '2014-05-20', 'Chandigarh', '', 'Mumbai', ''),
(7, 'krupal', 'kkkkkkkkkkk', 'kkkkkkkkkk', 'male', '2014-05-13', 'Gujarat', '', 'Alleppey', '');

-- --------------------------------------------------------

--
-- Table structure for table `requirement`
--

CREATE TABLE IF NOT EXISTS `requirement` (
  `postname` varchar(255) NOT NULL,
  `vacancies` int(255) NOT NULL,
  `reqexperience` int(255) NOT NULL,
  `minsalary` int(255) NOT NULL,
  `maxsalary` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requirement`
--

INSERT INTO `requirement` (`postname`, `vacancies`, `reqexperience`, `minsalary`, `maxsalary`) VALUES
('Web Developer', 20, 2, 26000, 28000),
('Mobile App Developer', 7, 5, 4000, 6000),
('DataBase Administrator', 2, 5, 21500, 24500),
('Search Engine Optimizer', 5, 4, 3000, 6000),
('Product Manager', 4, 7, 13000, 15000),
('HR Manager', 3, 0, 3000, 6000);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `academic`
--
ALTER TABLE `academic`
  ADD CONSTRAINT `academic_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `personal` (`userid`) ON DELETE CASCADE;

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `account_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `personal` (`userid`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
