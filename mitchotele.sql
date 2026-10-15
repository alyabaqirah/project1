-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2024 at 06:10 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mitchotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `addemployee`
--

CREATE TABLE `addemployee` (
  `id` varchar(6) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phonenum` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `position` varchar(20) NOT NULL,
  `bankdetail` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addemployee`
--

INSERT INTO `addemployee` (`id`, `name`, `phonenum`, `email`, `department`, `position`, `bankdetail`) VALUES
('', '', '', '', '', '', ''),
('mvkdsl', 'vfpd', 'vfopdz', 'fbodps', 'kbfodps', 'fldo', 'fkg');

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `adminid` varchar(5) NOT NULL,
  `adminpassword` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`adminid`, `adminpassword`) VALUES
('', ''),
('011AS', 'HUDSUOIPSI'),
('A001', 'HUDSUOIPSI'),
('A005', 'admin'),
('aa', 'HUDSUOIPSI'),
('ad2', '1111'),
('admin', 'HUDSUOIPSI'),
('alya', '202002'),
('aufa', '2022'),
('ayya', '1212'),
('c', 'c'),
('ds', 'ds'),
('f', 'd'),
('halim', 'adminsatu0'),
('hjkgy', 'nilui'),
('sas', 'ddc'),
('vz', 'd');

-- --------------------------------------------------------

--
-- Table structure for table `admin new acc`
--

CREATE TABLE `admin new acc` (
  `id` varchar(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone number` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin new acc`
--

INSERT INTO `admin new acc` (`id`, `name`, `phone number`, `email`, `password`) VALUES
('', '', '', '', ''),
('admin', 'nurul alya baqirah ', '04555422896', 'alyac7173@gmail.com', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `picture` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profilemitc`
--

CREATE TABLE `profilemitc` (
  `id` varchar(6) NOT NULL,
  `name` varchar(50) NOT NULL,
  `picture` varchar(50) NOT NULL,
  `phonenum` varchar(20) NOT NULL,
  `email` varchar(10) NOT NULL,
  `department` varchar(20) NOT NULL,
  `position` varchar(20) NOT NULL,
  `bankdetail` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addemployee`
--
ALTER TABLE `addemployee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `admin new acc`
--
ALTER TABLE `admin new acc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profilemitc`
--
ALTER TABLE `profilemitc`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
