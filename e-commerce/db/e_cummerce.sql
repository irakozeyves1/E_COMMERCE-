-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 10, 2018 at 05:47 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `e_cummerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `c_id` int(20) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `comment` varchar(600) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`c_id`, `date`, `comment`) VALUES
(1, '2018-06-10 04:46:59', 'is good');

-- --------------------------------------------------------

--
-- Table structure for table `security`
--

CREATE TABLE IF NOT EXISTS `security` (
  `sc_id` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`sc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `security`
--

INSERT INTO `security` (`sc_id`, `username`, `password`) VALUES
(1, '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `shirt`
--

CREATE TABLE IF NOT EXISTS `shirt` (
  `s_id` int(20) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `c_names` varchar(40) NOT NULL,
  `n_id` varchar(40) NOT NULL,
  `teleph` varchar(20) NOT NULL,
  `product` varchar(40) NOT NULL,
  `s_type` varchar(20) NOT NULL,
  `s_number` int(20) NOT NULL,
  `quantity` int(20) NOT NULL,
  `amount` int(30) NOT NULL,
  `total` int(30) NOT NULL,
  `recieved` varchar(20) NOT NULL,
  `comment` varchar(400) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `shirt`
--

INSERT INTO `shirt` (`s_id`, `date`, `c_names`, `n_id`, `teleph`, `product`, `s_type`, `s_number`, `quantity`, `amount`, `total`, `recieved`, `comment`) VALUES
(1, '2018-06-10 04:44:01', 'irambona ezechias', '1199367548975098', '0725426982', 'shoes', 'vans', 7, 2, 25, 50, 'No', 'I need the same size of those number'),
(2, '2018-06-10 04:45:31', 'irambona ezechias', '1199367548975098', '0725426982', 'ipantaro', 'Skinny', 30, 1, 15, 15, 'No', 'I will need next mouths');
