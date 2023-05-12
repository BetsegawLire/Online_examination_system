-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2023 at 09:30 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminacc`
--

CREATE TABLE `adminacc` (
  `id` int(10) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminacc`
--

INSERT INTO `adminacc` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$2hE8zS5ym2MY34U033vznO8V84AShQFclwIPGP7udnyYcXU.doEe.');

-- --------------------------------------------------------

--
-- Table structure for table `committeeacc`
--

CREATE TABLE `committeeacc` (
  `id` int(11) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `coursename` varchar(30) NOT NULL,
  `semester` int(5) NOT NULL,
  `password` varchar(100) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `committeeacc`
--

INSERT INTO `committeeacc` (`id`, `faculty`, `coursename`, `semester`, `password`, `branch`, `status`) VALUES
(2, 'cl', 'english', 1, '$2y$10$yc4tky9ei8TRwiO4QvoMTO.oY83MpQK8RLBzBQHPp/8W90WyblN5m', 'both', 'active'),
(6, 'csc', 'geography', 1, '$2y$10$yc4tky9ei8TRwiO4QvoMTO.oY83MpQK8RLBzBQHPp/8W90WyblN5m', 'both', 'active'),
(7, 'chuman', 'psychology', 1, '$2y$10$yc4tky9ei8TRwiO4QvoMTO.oY83MpQK8RLBzBQHPp/8W90WyblN5m', 'both', 'active'),
(21, 'college of econo', 'economics', 1, 'd41d8cd98f00b204e9800998ecf8427e', 'social', 'active'),
(22, 'other', 'physics', 1, 'e10adc3949ba59abbe56e057f20f883e', 'natural', 'inactive'),
(23, 'other', 'mathes', 1, 'e10adc3949ba59abbe56e057f20f883e', 'both', 'active'),
(24, 'college of human', 'logic', 1, 'e10adc3949ba59abbe56e057f20f883e', 'both', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `directorateacc`
--

CREATE TABLE `directorateacc` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `directorateacc`
--

INSERT INTO `directorateacc` (`id`, `username`, `password`) VALUES
(1, 'directorate', '$2y$10$yc4tky9ei8TRwiO4QvoMTO.oY83MpQK8RLBzBQHPp/8W90WyblN5m');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `id` int(11) NOT NULL,
  `exam_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `instruction` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`id`, `exam_date`, `start_time`, `end_time`, `instruction`) VALUES
(2, '2023-04-23', '19:38:00', '19:40:00', '    dont cheat !dii .h?/  ');

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` int(11) NOT NULL,
  `instruction` varchar(1000) NOT NULL,
  `news` text NOT NULL,
  `feedack` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `instruction`, `news`, `feedack`) VALUES
(1, '    this is instruction for exam', 'h', 'h');

-- --------------------------------------------------------

--
-- Table structure for table `preference`
--

CREATE TABLE `preference` (
  `id` int(255) NOT NULL,
  `stud_id` int(255) NOT NULL,
  `first_choice` varchar(255) NOT NULL,
  `second_choice` varchar(255) NOT NULL,
  `third_choice` varchar(20) NOT NULL,
  `forth_choice` varchar(20) NOT NULL,
  `fifth_choice` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `preference`
--

INSERT INTO `preference` (`id`, `stud_id`, `first_choice`, `second_choice`, `third_choice`, `forth_choice`, `fifth_choice`) VALUES
(29, 1, 'Engineering', 'Pharmacy', 'Pharmacy', 'Pharmacy', 'Pharmacy');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(10) NOT NULL,
  `branch` text NOT NULL,
  `sem` int(11) NOT NULL,
  `coursename` varchar(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `option_a` varchar(255) NOT NULL,
  `option_b` varchar(255) NOT NULL,
  `option_c` varchar(255) NOT NULL,
  `option_d` varchar(255) NOT NULL,
  `answer` varchar(30) NOT NULL,
  `status` text NOT NULL,
  `year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `branch`, `sem`, `coursename`, `question`, `option_a`, `option_b`, `option_c`, `option_d`, `answer`, `status`, `year`) VALUES
(10, 'natural', 1, 'general', '   Where is haramaya university? ', 'east', 'west', 'north', 'south', 'option_a', 'active', 2022),
(13, 'natural', 1, 'emergint technology', 'which one is input device', 'keyboard', 'speaker', 'monitor', 'cpu', 'option_a', 'active', 2022),
(14, 'natural', 1, 'emerging', 'which generation of computer is now', 'first', 'second', 'third', 'forth', 'option_d', 'active', 2022),
(15, 'natural', 1, 'computing', '   which one of the following is not network hardware? ', 'router', 'switch', 'hub', 'tcp/ip', 'option_d', 'active', 2022),
(21, 'natural', 1, 'computing', '   WHICH ONE IS BEST ', 'CS', 'IT', 'SE', 'IS', 'option_b', 'active', 2022),
(32, 'both', 1, 'english', '     He ___ to church every sunday ', 'go', 'goes', 'went', 'gone', 'option_b', 'active', 2022),
(50, 'both', 1, 'english', 'The past tense of by is', 'buyed', 'buyet', 'bought', 'none', 'option_c', 'active', 2022),
(68, 'both', 1, 'english', 'The past tense of work is', 'worked', 'working', 'to work', 'none', 'option_a', 'active', 2022),
(69, 'both', 1, 'english', 'which one is the verb from the following sentence?\r\nhe worked hard .', 'he', 'worked', 'hard', 'none', 'option_b', 'active', 2022),
(71, 'both', 1, 'english', 'which one is mispelled?', 'erorr', 'disciple', 'entreprenuer', 'all', 'option_a', 'inactive', 2022);

-- --------------------------------------------------------

--
-- Table structure for table `registralacc`
--

CREATE TABLE `registralacc` (
  `username` varchar(40) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registralacc`
--

INSERT INTO `registralacc` (`username`, `password`) VALUES
('', 'd41d8cd98f00b204e9800998ecf8427e'),
('', 'd41d8cd98f00b204e9800998ecf8427e'),
('', 'fcea920f7412b5da7be0cf42b8c93759'),
('', 'e10adc3949ba59abbe56e057f20f883e'),
('reg', 'e10adc3949ba59abbe56e057f20f883e'),
('registral1', 'e10adc3949ba59abbe56e057f20f883e'),
('registral2', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `user_id` text NOT NULL,
  `branch` text NOT NULL,
  `sem` text NOT NULL,
  `attend_que` text NOT NULL,
  `obtained_marks` text NOT NULL,
  `exam_date` date NOT NULL,
  `year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `user_id`, `branch`, `sem`, `attend_que`, `obtained_marks`, `exam_date`, `year`) VALUES
(178, '4', 'social', '1', '2', '24', '2022-06-15', 0000),
(182, '1', 'natural ', '1', '4', '0', '2022-06-18', 0000),
(183, '4', 'social', '1', '3', '1', '2023-04-23', 0000);

-- --------------------------------------------------------

--
-- Table structure for table `studentacc`
--

CREATE TABLE `studentacc` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `uid` int(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `sex` varchar(5) NOT NULL,
  `region` varchar(30) NOT NULL,
  `branch` text NOT NULL,
  `year` year(4) NOT NULL,
  `uee_result` int(5) NOT NULL,
  `cgpa` varchar(5) NOT NULL,
  `coc_result` int(2) DEFAULT NULL,
  `total` int(5) DEFAULT NULL,
  `status` text NOT NULL,
  `cgpa2` varchar(10) DEFAULT NULL,
  `coc_result2` varchar(10) DEFAULT NULL,
  `total2` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentacc`
--

INSERT INTO `studentacc` (`id`, `fname`, `lname`, `uid`, `password`, `sex`, `region`, `branch`, `year`, `uee_result`, `cgpa`, `coc_result`, `total`, `status`, `cgpa2`, `coc_result2`, `total2`) VALUES
(1, 'bish', 'shiferaw', 123456, '$2y$10$yc4tky9ei8TRwiO4QvoMTO.oY83MpQK8RLBzBQHPp/8W90WyblN5m', 'm', 'south west', 'natural ', 2014, 500, '4', 0, 64, 'active', NULL, NULL, NULL),
(2, 'kal', 'aynabeba', 1234567, 'e10adc3949ba59abbe56e057f20f883e', 'm', 'amhare', 'natural', 2014, 450, '4', 80, 0, 'active', NULL, NULL, NULL),
(4, 'meles', 'bekelle', 12345, '$2y$10$yc4tky9ei8TRwiO4QvoMTO.oY83MpQK8RLBzBQHPp/8W90WyblN5m', 'm', 'south west', 'social', 2014, 600, '3.8', 24, 89, 'active', NULL, NULL, NULL),
(6, '', '', 0, '', '', '', '', 0000, 0, '', 0, NULL, '', NULL, NULL, NULL),
(7, '', '', 0, '', '', '', '', 0000, 0, '', 1, NULL, '', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `studentaccount`
--

CREATE TABLE `studentaccount` (
  `ID` int(11) DEFAULT NULL,
  `UID` int(11) NOT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentaccount`
--

INSERT INTO `studentaccount` (`ID`, `UID`, `password`) VALUES
(4, 1, 'e10adc3949ba59abbe56e057f20f883e'),
(5, 2, 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `f_name` varchar(40) DEFAULT NULL,
  `l_name` varchar(40) DEFAULT NULL,
  `Id` int(11) NOT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `region` varchar(50) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `UEE` int(11) DEFAULT NULL,
  `CGPA` float DEFAULT NULL,
  `COC` int(11) DEFAULT NULL,
  `total` float DEFAULT NULL,
  `branch` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`f_name`, `l_name`, `Id`, `sex`, `region`, `year`, `UEE`, `CGPA`, `COC`, `total`, `branch`) VALUES
('betsegaw', 'lire', 1, 'male', 'oromia', 2012, 200, 3, 22, 77, 'natural'),
('betsegaw2', 'lire2', 2, 'male', 'oromia', 4, 200, 3, 12, 66, 'n'),
('betsegaw2', 'lire2', 3, 'male', 'oromia', 4, 200, 3, 12, 66, 'n'),
('dawit', 'abel', 4, 'male', 'dre', 3, 300, 3, 32, 87, 'natural'),
('betsegaw', 'lire', 5, 'male', 'oromia', 4, 23, 2, 12, 56, 'natural');

-- --------------------------------------------------------

--
-- Table structure for table `student_list`
--

CREATE TABLE `student_list` (
  `name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminacc`
--
ALTER TABLE `adminacc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `committeeacc`
--
ALTER TABLE `committeeacc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `directorateacc`
--
ALTER TABLE `directorateacc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `preference`
--
ALTER TABLE `preference`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentacc`
--
ALTER TABLE `studentacc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentaccount`
--
ALTER TABLE `studentaccount`
  ADD PRIMARY KEY (`UID`),
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminacc`
--
ALTER TABLE `adminacc`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `committeeacc`
--
ALTER TABLE `committeeacc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `directorateacc`
--
ALTER TABLE `directorateacc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `preference`
--
ALTER TABLE `preference`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=184;

--
-- AUTO_INCREMENT for table `studentacc`
--
ALTER TABLE `studentacc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `studentaccount`
--
ALTER TABLE `studentaccount`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `studentaccount`
--
ALTER TABLE `studentaccount`
  ADD CONSTRAINT `studentaccount_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `students` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
