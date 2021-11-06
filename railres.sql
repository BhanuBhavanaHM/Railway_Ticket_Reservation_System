-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2020 at 07:19 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `railres`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `uname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uname`, `password`) VALUES
('admin', 'password123');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `uname` varchar(15) NOT NULL,
  `Tnumber` int(11) NOT NULL,
  `class` varchar(2) NOT NULL,
  `doj` date NOT NULL,
  `DOB` date NOT NULL,
  `fromstn` varchar(15) NOT NULL,
  `tostn` varchar(15) NOT NULL,
  `Name` varchar(15) NOT NULL,
  `Age` int(11) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`uname`, `Tnumber`, `class`, `doj`, `DOB`, `fromstn`, `tostn`, `Name`, `Age`, `sex`, `Status`) VALUES
('shashi', 202019, '3A', '2020-12-31', '2020-12-31', 'HASSAN', 'MUMBAI', 'aa', 24, 'male', 'Waiting'),
('Shashi', 202019, '3A', '2021-01-02', '2020-12-31', 'HASSAN', 'MUMBAI', 'darshan', 45, 'male', 'Waiting'),
('shashi', 202019, '2A', '2021-01-01', '2020-12-31', 'HASSAN', 'MUMBAI', 'aabb', 12, 'male', 'Waiting'),
('shashi', 202020, '3A', '2021-01-02', '2020-12-31', 'TUMKUR', 'KARNUL', 'ABA', 15, 'male', 'Waiting'),
('shashi', 202020, '3A', '2021-01-02', '2020-12-31', 'TUMKUR', 'KARNUL', 'BCB', 10, 'male', 'Waiting'),
('shashi', 202020, '3A', '2021-01-02', '2020-12-31', 'TUMKUR', 'KARNUL', 'CDC', 25, 'male', 'Waiting'),
('shashi', 202020, '3A', '2021-01-02', '2020-12-31', 'TUMKUR', 'KARNUL', 'EFE', 30, 'male', 'Waiting'),
('shashi', 202020, '3A', '2021-01-02', '2020-12-31', 'TUMKUR', 'KARNUL', 'GHG', 19, 'male', 'Waiting');

-- --------------------------------------------------------

--
-- Table structure for table `interlist`
--

CREATE TABLE `interlist` (
  `Number` int(6) DEFAULT NULL,
  `st1` varchar(10) DEFAULT NULL,
  `st1arri` varchar(10) DEFAULT NULL,
  `st2` varchar(10) DEFAULT NULL,
  `st2arri` varchar(10) DEFAULT NULL,
  `st3` varchar(10) DEFAULT NULL,
  `st3arri` varchar(10) DEFAULT NULL,
  `st4` varchar(10) DEFAULT NULL,
  `st4arri` varchar(10) DEFAULT NULL,
  `st5` varchar(10) DEFAULT NULL,
  `st5arri` varchar(10) DEFAULT NULL,
  `Ori` varchar(20) NOT NULL,
  `Oriarri` varchar(10) NOT NULL,
  `Dest` varchar(20) NOT NULL,
  `Desarri` varchar(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Mon` varchar(2) NOT NULL,
  `Tue` varchar(2) NOT NULL,
  `Wed` varchar(2) NOT NULL,
  `Thu` varchar(2) NOT NULL,
  `Fri` varchar(2) NOT NULL,
  `Sat` varchar(2) NOT NULL,
  `Sun` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interlist`
--

INSERT INTO `interlist` (`Number`, `st1`, `st1arri`, `st2`, `st2arri`, `st3`, `st3arri`, `st4`, `st4arri`, `st5`, `st5arri`, `Ori`, `Oriarri`, `Dest`, `Desarri`, `Name`, `Mon`, `Tue`, `Wed`, `Thu`, `Fri`, `Sat`, `Sun`) VALUES
(202019, 'HOLENARSIP', '1:15', 'MYSORE', '4:15', 'HUBLI', '9:15', 'GADAG', '13:25', 'SOLAPURA', '15:45', 'HASSAN', '10:00', 'MUMBAI', '12:15', 'HASMUM', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y'),
(202020, 'KRNAGARA', '3:45', 'HASSAN', '5:55', 'ARSIKERE', '7:20', 'TUMKUR', '11:15', 'KARNUL', '13:20', 'MYSORE', '22:15', 'SOLLAPURA', '2:10', 'SOLLA EXP', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `seats_availability`
--

CREATE TABLE `seats_availability` (
  `Train_No` int(11) NOT NULL,
  `Train_Name` varchar(20) NOT NULL,
  `1A` int(11) NOT NULL,
  `2A` int(11) NOT NULL,
  `3A` int(11) NOT NULL,
  `AC` int(11) NOT NULL,
  `CC` int(11) NOT NULL,
  `SL` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seats_availability`
--

INSERT INTO `seats_availability` (`Train_No`, `Train_Name`, `1A`, `2A`, `3A`, `AC`, `CC`, `SL`) VALUES
(202019, 'HASMUM', 5, 5, 5, 5, 5, 5),
(202020, 'SOLLA EXP', 5, 5, 5, 5, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `train_list`
--

CREATE TABLE `train_list` (
  `Number` int(6) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Origin` varchar(20) NOT NULL,
  `Destination` varchar(20) NOT NULL,
  `Arrival` varchar(10) NOT NULL,
  `Departure` varchar(10) NOT NULL,
  `Mon` varchar(2) NOT NULL,
  `Tue` varchar(2) NOT NULL,
  `Wed` varchar(2) NOT NULL,
  `Thu` varchar(2) NOT NULL,
  `Fri` varchar(2) NOT NULL,
  `Sat` varchar(2) NOT NULL,
  `Sun` varchar(2) NOT NULL,
  `1A` int(11) NOT NULL,
  `2A` int(11) NOT NULL,
  `3A` int(11) NOT NULL,
  `SL` int(11) NOT NULL,
  `General` int(11) NOT NULL,
  `Ladies` int(11) NOT NULL,
  `Tatkal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `train_list`
--

INSERT INTO `train_list` (`Number`, `Name`, `Origin`, `Destination`, `Arrival`, `Departure`, `Mon`, `Tue`, `Wed`, `Thu`, `Fri`, `Sat`, `Sun`, `1A`, `2A`, `3A`, `SL`, `General`, `Ladies`, `Tatkal`) VALUES
(202019, 'HASMUM', 'HASSAN', 'MUMBAI', '10:00', '12:15', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 2500, 1000, 500, 250, 2, 1, 3),
(202020, 'SOLLA EXP', 'MYSORE', 'SOLLAPURA', '22:15', '2:10', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 2500, 1000, 500, 250, 2, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `marital` varchar(10) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `ques` varchar(100) NOT NULL,
  `ans` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`f_name`, `l_name`, `email`, `password`, `gender`, `marital`, `dob`, `mobile`, `ques`, `ans`) VALUES
('shashi', 'kumar', 'sk@gmail.com', '12345678', 'male', 'unmarried', '1999-03-19', 9876543210, 'What is your pets name ?', 'tom');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`uname`);

--
-- Indexes for table `train_list`
--
ALTER TABLE `train_list`
  ADD PRIMARY KEY (`Number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
