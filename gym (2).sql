-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2021 at 08:35 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `name`, `password`) VALUES
(1, 'Ivaan', 'abc'),
(2, 'Ratu', 'xyz');

-- --------------------------------------------------------

--
-- Table structure for table `free`
--

CREATE TABLE `free` (
  `ID` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `age` int(5) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `pan` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `free`
--

INSERT INTO `free` (`ID`, `name`, `age`, `gender`, `pan`) VALUES
(1, 'Connor', 54, 'male', 435343),
(3, 'JESS', 55, 'female', 6535346),
(4, 'Johnny', 22, 'male', 64334534),
(5, 'Jane', 24, 'female', 4745754),
(6, 'There', 33, 'female', 666716);

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `ID` int(50) NOT NULL,
  `TEXT` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`ID`, `TEXT`) VALUES
(1, 'WINNERS NEVER QUIT,QUITTERS NEVER WIN');

-- --------------------------------------------------------

--
-- Table structure for table `recp_attendance`
--

CREATE TABLE `recp_attendance` (
  `a_no` int(11) NOT NULL,
  `date` date NOT NULL,
  `email` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'ABSENT'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recp_attendance`
--

INSERT INTO `recp_attendance` (`a_no`, `date`, `email`, `status`) VALUES
(19, '0000-00-00', 'rahul123@mail.com', 'ABSENT'),
(24, '0000-00-00', 'i@gmail.com', 'present'),
(25, '0000-00-00', 'rahul123@mail.com', 'ABSENT'),
(105, '2019-10-11', 'iasd@gmail.com', 'ABSENT'),
(106, '2019-10-11', 'rahul123@mail.com', 'ABSENT'),
(107, '2021-04-08', 'aacf@mail.com', 'ABSENT'),
(108, '2021-04-08', 'ggg@gmail.com', 'ABSENT'),
(109, '2021-04-08', 'i@gmail.com', 'ABSENT'),
(110, '2021-04-08', 'iasd@gmail.com', 'ABSENT'),
(111, '2021-04-08', 'qwe@rty.com', 'ABSENT'),
(112, '2021-04-08', 'rahul123@mail.com', 'ABSENT'),
(113, '2021-04-08', 'ttt@gg.in', 'ABSENT');

--
-- Triggers `recp_attendance`
--
DELIMITER $$
CREATE TRIGGER `DAYNIGHT` BEFORE INSERT ON `recp_attendance` FOR EACH ROW set new.date = now()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(50) NOT NULL,
  `role_createddate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`, `role_createddate`) VALUES
(1, 'Admin', '0000-00-00 00:00:00'),
(2, 'User', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `Uid` int(100) NOT NULL,
  `ques1` varchar(200) NOT NULL,
  `ques2` varchar(100) NOT NULL,
  `ques3` varchar(200) NOT NULL,
  `ques4` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`Uid`, `ques1`, `ques2`, `ques3`, `ques4`) VALUES
(1, 'Somewhat appealing', '', '', '5'),
(9, 'Extremely appealing', 'Advertisment', 'ghgh', '10'),
(11, '', '', '', '5'),
(12, 'Very appealing', 'Advertisment', 'No', '6'),
(13, '', '', '', '5'),
(14, '', '', '', '5');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `iduser` int(11) NOT NULL,
  `user` varchar(25) NOT NULL,
  `password` longtext NOT NULL,
  `email` varchar(20) DEFAULT NULL,
  `goal` tinytext,
  `rolep_id` int(11) DEFAULT NULL,
  `Plan` varchar(50) NOT NULL,
  `curwt` int(5) NOT NULL,
  `deswt` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`iduser`, `user`, `password`, `email`, `goal`, `rolep_id`, `Plan`, `curwt`, `deswt`) VALUES
(1, 'Rahul', 'abc', 'rahul123@mail.com', 'Wtloss', 2, '6m', 70, 60),
(9, 'ivan', '123', 'i@gmail.com', 'MG', 2, 'year', 70, 60),
(10, 'John', '789', 'iasd@gmail.com', 'MG', 2, '3m', 66, 55),
(11, 'Anto', 'quote', 'ggg@gmail.com', 'Wtloss', 2, '6m', 68, 60),
(12, 'James', '3456', 'aacf@mail.com', 'Wtloss', 2, '6m', 55, 44),
(13, 'Ratu', '456', 'qwe@rty.com', 'Wtloss', 2, '3m', 45, 85),
(14, 'BE Proj', '99', 'ttt@gg.in', 'Wtloss', 2, '6m', 45, 43);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `free`
--
ALTER TABLE `free`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `pan` (`pan`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `recp_attendance`
--
ALTER TABLE `recp_attendance`
  ADD PRIMARY KEY (`a_no`),
  ADD KEY `attend3` (`email`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`),
  ADD UNIQUE KEY `role_name` (`role_name`);

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`Uid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`iduser`),
  ADD UNIQUE KEY `user` (`user`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `rolep_id` (`rolep_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `free`
--
ALTER TABLE `free`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `recp_attendance`
--
ALTER TABLE `recp_attendance`
  MODIFY `a_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `recp_attendance`
--
ALTER TABLE `recp_attendance`
  ADD CONSTRAINT `attend3` FOREIGN KEY (`email`) REFERENCES `users` (`email`),
  ADD CONSTRAINT `attend4` FOREIGN KEY (`email`) REFERENCES `users` (`email`);

--
-- Constraints for table `survey`
--
ALTER TABLE `survey`
  ADD CONSTRAINT `FK_PersonOrder` FOREIGN KEY (`Uid`) REFERENCES `users` (`iduser`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`rolep_id`) REFERENCES `role` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
