-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2022 at 12:48 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `advisor`
--

CREATE TABLE `advisor` (
  `id` int(11) NOT NULL,
  `batch` varchar(30) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `sid` varchar(30) NOT NULL,
  `uid` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `advisor`
--

INSERT INTO `advisor` (`id`, `batch`, `dept`, `name`, `sid`, `uid`) VALUES
(1, '2022-2024', 'MCA', 'MARIA R', 'ST1', 'maria'),
(2, '2024-2026', 'MCA', 'AMRUTHA', '4', 'ammu'),
(3, '2026-2028', 'MCA', 'ANNA', '5', 'anna'),
(4, '2027-2029', 'MCA', 'AMRUTHA', '4', 'ammu'),
(5, '2029-2031', 'MCA', 'HARSHA', '6', 'harsha');

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE `batch` (
  `batch` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`batch`) VALUES
('2020-2200'),
('2022-2024'),
('2023-2025'),
('2024-2026'),
('2025-2027'),
('2026-2028'),
('2027-2029'),
('2028-2030'),
('2029-2031');

-- --------------------------------------------------------

--
-- Table structure for table `groupstu`
--

CREATE TABLE `groupstu` (
  `id` int(30) NOT NULL,
  `batch` varchar(30) NOT NULL,
  `gno` int(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `rollno` varchar(30) NOT NULL,
  `guide` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `groupstu`
--

INSERT INTO `groupstu` (`id`, `batch`, `gno`, `name`, `rollno`, `guide`) VALUES
(1, '2022-2024', 1, 'jesly', '20MP1602', 'AMRUTHA'),
(2, '2022-2024', 1, 'JINU', '20MP1604', 'AMRUTHA'),
(3, '2022-2024', 2, 'JINU', '20MP1604', 'ANNA'),
(4, '2022-2024', 2, 'bigi', '20MP1656', 'ANNA');

-- --------------------------------------------------------

--
-- Table structure for table `guide`
--

CREATE TABLE `guide` (
  `id` int(30) NOT NULL,
  `batch` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `sid` varchar(30) NOT NULL,
  `uid` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guide`
--

INSERT INTO `guide` (`id`, `batch`, `name`, `sid`, `uid`) VALUES
(1, '2022-2024', 'AMRUTHA', '4', 'ammu2022-2024'),
(2, '2022-2024', 'AMRUTHA', '4', 'ammu2022-2024'),
(3, '2022-2024', 'ANNA', '5', 'anna2022-2024'),
(4, '2022-2024', 'ANNA', '5', 'anna2022-2024'),
(5, '2022-2024', 'AMRUTHA', '4', 'ammu2022-2024');

-- --------------------------------------------------------

--
-- Table structure for table `guidemain`
--

CREATE TABLE `guidemain` (
  `rollno` varchar(30) NOT NULL,
  `batch` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `guide` varchar(50) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guidemain`
--

INSERT INTO `guidemain` (`rollno`, `batch`, `name`, `guide`, `type`) VALUES
('20MP1602', '2022-2024', 'jesly', 'ANNA', 'main'),
('20MP1604', '2022-2024', 'JINU', 'ANNA', 'main');

-- --------------------------------------------------------

--
-- Table structure for table `guidesem`
--

CREATE TABLE `guidesem` (
  `rollno` varchar(30) NOT NULL,
  `batch` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `guide` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guidesem`
--

INSERT INTO `guidesem` (`rollno`, `batch`, `name`, `guide`, `type`) VALUES
('20MP1602', '2022-2024', 'jesly', 'AMRUTHA', 'seminar'),
('20MP1656', '2022-2024', 'bigi', 'AMRUTHA', 'seminar');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `uid` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` varchar(10) NOT NULL,
  `batch` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uid`, `password`, `role`, `batch`) VALUES
('20MP1602', 'Dw5hzr4', 'student', '2022-2024'),
('20MP1604', 'Is6UHAm', 'student', '2022-2024'),
('20MP1656', '9vz0mS1', 'student', '2022-2024'),
('admin', 'admin', 'admin', '2020-2200'),
('ammu', 'ufZ0mHj', 'advisor', '2024-2026'),
('ammu2022-2024', 'IPJbEYr', 'guide', '2022-2024'),
('anna', 'ZlM43UA', 'advisor', '2026-2028'),
('anna2022-2024', 'bYrLf25', 'guide', '2022-2024'),
('harsha', 'iL5bROt', 'advisor', '2029-2031'),
('maria', '9q0vNpz', 'advisor', '2022-2024'),
('maria2022-2024', 'h94AE0n', 'guide', '2022-2024'),
('ram2022-2024', 'puELa2S', 'guide', '2022-2024');

-- --------------------------------------------------------

--
-- Table structure for table `presentation1`
--

CREATE TABLE `presentation1` (
  `id` int(30) NOT NULL,
  `batch` varchar(30) NOT NULL,
  `gno` varchar(30) NOT NULL,
  `p1` varchar(30) NOT NULL,
  `mrk` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `presentation1`
--

INSERT INTO `presentation1` (`id`, `batch`, `gno`, `p1`, `mrk`) VALUES
(1, '2022-2024', '2', '1st presen.', '65');

-- --------------------------------------------------------

--
-- Table structure for table `presentation2`
--

CREATE TABLE `presentation2` (
  `p2id` int(30) NOT NULL,
  `batch` varchar(30) NOT NULL,
  `rollno` varchar(30) NOT NULL,
  `p2` varchar(30) NOT NULL,
  `mrk2` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `presentation2`
--

INSERT INTO `presentation2` (`p2id`, `batch`, `rollno`, `p2`, `mrk2`) VALUES
(2, '2022-2024', '20MP1604', '1st presen.', '89');

-- --------------------------------------------------------

--
-- Table structure for table `presentation3`
--

CREATE TABLE `presentation3` (
  `p3id` int(30) NOT NULL,
  `batch` varchar(30) NOT NULL,
  `rollno` varchar(30) NOT NULL,
  `p3` varchar(30) NOT NULL,
  `mrk3` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `presentation3`
--

INSERT INTO `presentation3` (`p3id`, `batch`, `rollno`, `p3`, `mrk3`) VALUES
(1, '2022-2024', '20MP1604', '1st presen.', '67');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `rollno` varchar(30) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `ktuid` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phno` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`rollno`, `sname`, `ktuid`, `email`, `phno`) VALUES
('20MP1602', 'jesly', 'KTE20MCA2034', 'jesly3@gmail.com', 5643245566),
('20MP1604', 'JINU', 'KTE20MCA2036', 'jinu@gmail.com', 9080706050),
('20MP1656', 'bigi', 'KTE20MCA2056', 'bigi@gmail.com', 9000000000);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `sid` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `dept` varchar(30) NOT NULL,
  `doj` date NOT NULL,
  `experience` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`sid`, `name`, `email`, `phone`, `dept`, `doj`, `experience`) VALUES
(4, 'AMRUTHA', 'ammu@gmail.com', 768696996, 'mca', '0000-00-00', 'qwertty'),
(5, 'ANNA', 'anna@gmai.com', 9070605500, 'mca', '0000-00-00', 'asdfre'),
(6, 'HARSHA', 'harsha@gmail.com', 7080900009, 'mca', '0000-00-00', 'wertyuiop');

-- --------------------------------------------------------

--
-- Table structure for table `upwork`
--

CREATE TABLE `upwork` (
  `uid` int(30) NOT NULL,
  `id` int(30) NOT NULL,
  `gno` int(30) NOT NULL,
  `file` mediumtext NOT NULL,
  `status` varchar(30) NOT NULL,
  `mark` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upwork`
--

INSERT INTO `upwork` (`uid`, `id`, `gno`, `file`, `status`, `mark`) VALUES
(3, 3, 2, 'Resume.pdf', '', '10'),
(5, 3, 2, 'CV.pdf', '', '10');

-- --------------------------------------------------------

--
-- Table structure for table `upworkmain`
--

CREATE TABLE `upworkmain` (
  `pid` int(30) NOT NULL,
  `id` int(30) NOT NULL,
  `rollno` varchar(30) NOT NULL,
  `file` mediumtext NOT NULL,
  `mark` int(30) NOT NULL,
  `status` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upworkmain`
--

INSERT INTO `upworkmain` (`pid`, `id`, `rollno`, `file`, `mark`, `status`) VALUES
(1, 4, '20MP1656', '40-pta-receipt .pdf', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `upworksem`
--

CREATE TABLE `upworksem` (
  `prid` int(30) NOT NULL,
  `id` int(30) NOT NULL,
  `rollno` varchar(50) NOT NULL,
  `file` mediumtext NOT NULL,
  `status` varchar(30) NOT NULL,
  `mark` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upworksem`
--

INSERT INTO `upworksem` (`prid`, `id`, `rollno`, `file`, `status`, `mark`) VALUES
(1, 5, '20MP1656', '40-pta-receipt .pdf', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE `work` (
  `id` int(50) NOT NULL,
  `batch` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `instruction` varchar(500) NOT NULL,
  `t2` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`id`, `batch`, `type`, `instruction`, `t2`) VALUES
(2, '2022-2024', 'mini', 'UPLOAD DFD', '2022-02-28'),
(3, '2026-2028', 'mini', 'upload E R diagram ASAP', '2022-03-11'),
(4, '2022-2024', 'main', 'DFD', '2022-03-02'),
(5, '2022-2024', 'seminar', 'Upload Topic', '2022-03-03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advisor`
--
ALTER TABLE `advisor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `batch`
--
ALTER TABLE `batch`
  ADD PRIMARY KEY (`batch`);

--
-- Indexes for table `groupstu`
--
ALTER TABLE `groupstu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rollno` (`rollno`);

--
-- Indexes for table `guide`
--
ALTER TABLE `guide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guidemain`
--
ALTER TABLE `guidemain`
  ADD PRIMARY KEY (`rollno`);

--
-- Indexes for table `guidesem`
--
ALTER TABLE `guidesem`
  ADD PRIMARY KEY (`rollno`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `batch` (`batch`);

--
-- Indexes for table `presentation1`
--
ALTER TABLE `presentation1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `presentation2`
--
ALTER TABLE `presentation2`
  ADD PRIMARY KEY (`p2id`);

--
-- Indexes for table `presentation3`
--
ALTER TABLE `presentation3`
  ADD PRIMARY KEY (`p3id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`rollno`),
  ADD UNIQUE KEY `ktuid` (`ktuid`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `upwork`
--
ALTER TABLE `upwork`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `upworkmain`
--
ALTER TABLE `upworkmain`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `upworksem`
--
ALTER TABLE `upworksem`
  ADD PRIMARY KEY (`prid`);

--
-- Indexes for table `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advisor`
--
ALTER TABLE `advisor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `groupstu`
--
ALTER TABLE `groupstu`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `guide`
--
ALTER TABLE `guide`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `presentation1`
--
ALTER TABLE `presentation1`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `presentation2`
--
ALTER TABLE `presentation2`
  MODIFY `p2id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `presentation3`
--
ALTER TABLE `presentation3`
  MODIFY `p3id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `sid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `upwork`
--
ALTER TABLE `upwork`
  MODIFY `uid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `upworkmain`
--
ALTER TABLE `upworkmain`
  MODIFY `pid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `upworksem`
--
ALTER TABLE `upworksem`
  MODIFY `prid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `work`
--
ALTER TABLE `work`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `groupstu`
--
ALTER TABLE `groupstu`
  ADD CONSTRAINT `rollno` FOREIGN KEY (`rollno`) REFERENCES `register` (`rollno`);

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `batch` FOREIGN KEY (`batch`) REFERENCES `batch` (`batch`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;