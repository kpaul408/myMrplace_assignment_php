-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2021 at 03:55 AM
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
-- Database: `ajaxcrud`
--

-- --------------------------------------------------------

--
-- Table structure for table `ajaxinsert`
--

CREATE TABLE `ajaxinsert` (
  `id` int(255) NOT NULL,
  `name` varchar(220) NOT NULL,
  `phone` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `pwd` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ajaxinsert`
--

INSERT INTO `ajaxinsert` (`id`, `name`, `phone`, `email`, `pwd`) VALUES
(1, 'khokan paul', '9932439464', 'khokanpaul408@gmail.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3'),
(2, 'Totan paul', '9064130364', 'totanpaul123@gmail.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3'),
(3, 'Sangita Das', '9064145534', 'sangitadas123@gmail.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3'),
(4, 'K paul', '9800531728', 'kpaul123@gmail.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `id` int(220) NOT NULL,
  `qus_id_no` varchar(220) NOT NULL,
  `ans` varchar(220) NOT NULL,
  `phone` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id`, `qus_id_no`, `ans`, `phone`) VALUES
(1, '1', '128', '9800531728'),
(2, '2', 'java', '9800531728'),
(3, '3', 'Creeper Virus', '9800531728'),
(4, '4', 'Prolog', '9800531728'),
(5, '5', '', '9800531728'),
(6, '6', '7', '9800531728'),
(7, '7', '128 Byte', '9800531728'),
(8, '8', 'Image file', '9800531728'),
(9, '9', '', '9800531728'),
(10, '4', '', '9932439464'),
(11, '5', '', '9932439464'),
(12, '6', '7', '9932439464'),
(13, '7', '128', '9932439464'),
(14, '8', 'Image file', '9932439464'),
(15, '9', 'SMTP', '9932439464'),
(16, '11', 'Assembler', '9932439464'),
(17, '1', '128 bit', '9064130364'),
(18, '2', 'java', '9064130364'),
(19, '3', 'Creeper Virus', '9064130364'),
(20, '7', '128', '9064130364'),
(21, '8', 'image', '9064130364'),
(22, '9', '', '9064130364'),
(23, '11', '', '9064130364');

-- --------------------------------------------------------

--
-- Table structure for table `ask_ques`
--

CREATE TABLE `ask_ques` (
  `id` int(220) NOT NULL,
  `question` varchar(220) NOT NULL,
  `phone` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ask_ques`
--

INSERT INTO `ask_ques` (`id`, `question`, `phone`) VALUES
(1, 'Number of bit used by the IPv6 address?', '9932439464'),
(2, 'Which of the following programming language is used to create programs like applets?', '9932439464'),
(3, 'First computer virus is known as.', '9932439464'),
(4, 'Which one programming language is exclusively used for artificial intelligence?', '9064130364'),
(5, 'Firewall in computer is used for?', '9064130364'),
(6, 'Number of layers in the OSI (Open Systems Interconnection) Model?', '9064130364'),
(7, ' 1024 bit is equal to how many byte?', '9064145534'),
(8, '.gif is an extension of', '9064145534'),
(9, 'Which protocol is used to send e-mail?', '9064145534'),
(11, 'Which one is the latest one from PARAM SuperSries computers?', '9800531728');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ajaxinsert`
--
ALTER TABLE `ajaxinsert`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ask_ques`
--
ALTER TABLE `ask_ques`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ajaxinsert`
--
ALTER TABLE `ajaxinsert`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `id` int(220) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `ask_ques`
--
ALTER TABLE `ask_ques`
  MODIFY `id` int(220) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
