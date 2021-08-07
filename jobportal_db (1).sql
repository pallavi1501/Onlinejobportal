-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2021 at 06:06 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobportal_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` varchar(20) NOT NULL,
  `adminname` text NOT NULL,
  `adminpassword` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `adminname`, `adminpassword`) VALUES
('pallavi@gmail.com', 'Pallavi', 123),
('shameem@gmail.com', 'Shameem', 4567),
('nirmala@gmail.com', 'Nirmala', 9898),
('sravani@gmail.com', 'Sravani', 1212);

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `userid` varchar(20) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `pnumber` int(10) NOT NULL,
  `companyname` text NOT NULL,
  `postname` text NOT NULL,
  `applicationcode` int(10) NOT NULL,
  `status` text NOT NULL DEFAULT 'Applied'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`userid`, `firstname`, `lastname`, `pnumber`, `companyname`, `postname`, `applicationcode`, `status`) VALUES
('raavi@gmail.com', 'Raavi', 'Pandya', 32874629, 'Mankind Pharma', 'Manager', 983272, 'Rejected'),
('tapaswi@gmail.com', 'Tapaswi', 'reddy', 768437, 'Act Fibernet', 'Transitions/Migrations Manager', 2071, 'Shortlisted'),
('nirmala@gmail.com', 'Meesala', 'Nirmala', 7846324, 'Savvy Software', 'Software Developer Junior', 72335, 'Applied'),
('srav@gmail.com', 'M', 'Sravani', 89687576, 'Act Fibernet', 'Transitions/Migrations Manager', 4823, 'Shortlisted');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `companyid` varchar(20) NOT NULL,
  `companyname` text NOT NULL,
  `password` int(10) NOT NULL,
  `cnumber` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`companyid`, `companyname`, `password`, `cnumber`) VALUES
('mankind@gmail.com', 'Mankind Pharma', 456, 897655478),
('aurobindo@gmail.com', 'Auro Bindo', 789, 97283872),
('savvy@gmail.com', 'Savvy Software', 999, 5789879),
('act@gmail.com', 'Act Fibernet', 122, 7897967),
('maple@gmail.com', 'Maple Software', 844, 78349983);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `companyid` varchar(20) NOT NULL,
  `companyname` text NOT NULL,
  `postname` text NOT NULL,
  `jobid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`companyid`, `companyname`, `postname`, `jobid`) VALUES
('mankind@gmail.com', 'Mankind Pharma', 'Project Manager', 99),
('aurobindo@gmail.com', 'Auro Bindo', 'Receiptionist', 604),
('aurobindo@gmail.com', 'Auro Bindo', 'Team leader', 785),
('aurobindo@gmail.com', 'Auro Bindo', 'Project Manager', 184),
('aurobindo@gmail.com', 'Auro Bindo', 'Team leader', 561),
('mankind@gmail.com', 'Mankind Pharma', 'Team leader', 130),
('act@gmail.com', 'Act Fibernet', 'Team leader', 449);

-- --------------------------------------------------------

--
-- Table structure for table `oldjobs`
--

CREATE TABLE `oldjobs` (
  `companyid` varchar(20) NOT NULL,
  `companyname` text NOT NULL,
  `postname` text NOT NULL,
  `jobid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `oldjobs`
--

INSERT INTO `oldjobs` (`companyid`, `companyname`, `postname`, `jobid`) VALUES
('aurobindo@gmail.com', 'Auro Bindo', 'Production Manager', 754),
('savvy@gmail.com', 'Savvy Software', 'SoftwareDevloper jr', 901),
('savvy@gmail.com', 'Savvy Software', 'SoftwareDevloper sr', 386),
('maple@gmail.com', 'Maple Software', 'Software Developer', 111),
('act@gmail.com', 'Act Fibernet', 'Transitions Manager', 655),
('mankind@gmail.com', 'Mankind Pharma', 'Manager', 650),
('aurobindo@gmail.com', 'Auro Bindo', 'Receiptionist', 604),
('aurobindo@gmail.com', 'Auro Bindo', 'Team leader', 785),
('aurobindo@gmail.com', 'Auro Bindo', 'Project Manager', 184),
('aurobindo@gmail.com', 'Auro Bindo', 'Team leader', 561),
('mankind@gmail.com', 'Mankind Pharma', 'Team leader', 130),
('act@gmail.com', 'Act Fibernet', 'Team leader', 449);

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `companyid` varchar(20) NOT NULL,
  `companyname1` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` varchar(20) NOT NULL,
  `username` text NOT NULL,
  `password` int(10) NOT NULL,
  `pnumber` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `password`, `pnumber`) VALUES
('rishitha@gmail.com', 'rishitha', 111, 98564325),
('krish@gmail.com', 'Krishna', 555, 9876567),
('raavi@gmail.com', 'Raavi', 90, 97238947),
('tapaswi@gmail.com', 'Tapaswi', 666, 6325475),
('nirmala@gmail.com', 'Nirmala', 221, 8937294),
('srav@gmail.com', 'Sravani', 1111, 8678576);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
